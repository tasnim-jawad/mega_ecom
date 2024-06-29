<?php

namespace App\Modules\UserManagement\User\Actions\Employee;



class Update
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    static $userAddressModel = \App\Modules\UserManagement\User\Models\UserAddressModel::class;
    static $userEmployeeInfoModel = \App\Modules\UserManagement\User\Models\UserEmployeeInformationModel::class;

    static $userShow = \App\Modules\UserManagement\User\Actions\Employee\Show::class;
    static $userAddressContactPersonModel = \App\Modules\UserManagement\User\Models\UserAddressContactPersonModel::class;

    public static function execute($request, $id)
    {
        try {


            $requestData = $request->validated();
            unset($requestData['confirmed']);
            if (!$userData = self::$model::find($id)) {
                return messageResponse('Data not found...', [], 404, 'error');
            }

        

            //store data
            if ($userData->update($requestData)) {
                $userEmployeeInfoData = self::$userEmployeeInfoModel::where('user_id', $id)->first();
                if($userEmployeeInfoData){
                    $userEmployeeInfoData->update([
                        'user_id' => $userData->id,
                        'gender' => $request->gender,
                        'nick_name' => $request->nick_name,
                        'employee_code' => $request->employee_code,
                        'date_of_birth' => $request->date_of_birth,
                    ]);
                }
                if ($request->has('userAddress')) {
                    $existingAddressIds = $userData->user_address()->pluck('id')->toArray();
                    $newAddressIds = [];
                    $userAddressContactPersons = [];

                    foreach ($request->userAddress as $address) {
                        $address = (object) $address;
                        $addressData = [
                            'user_id' => $userData->id,
                            'is_shipping' => $address->is_shipping,
                            'is_billing' => $address->is_billing,
                            'address_types' => $address->address_types,
                            'address' => $address->address,
                            'country_id' => $address->country_id,
                            'state_division_id' => $address->state_division_id,
                            'division_id' => $address->division_id,
                            'district_id' => $address->district_id,
                            'station_id' => $address->station_id,
                            'city_id' => $address->city_id,
                            'zip_code' => $address->zip_code,
                            'is_present_address' => $address->is_present_address,
                            'is_permanent_address' => $address->is_permanent_address,
                        ];

                        if (isset($address->id) && in_array($address->id, $existingAddressIds)) {
                            $userAddress = self::$userAddressModel::find($address->id);
                            $userAddress->update($addressData);
                            $newAddressIds[] = $userAddress->id;
                        } else {
                            $userAddress = self::$userAddressModel::create($addressData);
                            $newAddressIds[] = $userAddress->id;
                        }

                        if (isset($address->contact_persons)) {
                            foreach ($address->contact_persons as $contactPerson) {
                                $contactPerson = (object) $contactPerson;
                                $contactPersonData = [
                                    'user_id' => $userData->id,
                                    'user_address_id' => $userAddress->id,
                                    'name' => $contactPerson->name,
                                    'phone_number' => $contactPerson->phone_number,
                                    'email' => $contactPerson->email,
                                ];

                                if (isset($contactPerson->id)) {
                                    $userAddressContactPerson = self::$userAddressContactPersonModel::find($contactPerson->id);
                                    $userAddressContactPerson->update($contactPersonData);
                                } else {
                                    $userAddressContactPersons[] = $contactPersonData;
                                }
                            }
                        }
                    }

                    if (!empty($userAddressContactPersons)) {
                        self::$userAddressContactPersonModel::insert($userAddressContactPersons);
                    }

                    $addressesToDelete = array_diff($existingAddressIds, $newAddressIds);
                    self::$userAddressModel::destroy($addressesToDelete);
                }
                return self::$userShow::execute($userData->slug);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}
