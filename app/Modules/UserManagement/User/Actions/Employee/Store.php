<?php

namespace App\Modules\UserManagement\User\Actions\Employee;

class Store
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    static $userAddress = \App\Modules\UserManagement\User\Models\UserAddressModel::class;
    static $userAddressContactPerson = \App\Modules\UserManagement\User\Models\UserAddressContactPersonModel::class;
    static $userEmployeeInfoModel = \App\Modules\UserManagement\User\Models\UserEmployeeInformationModel::class;
    // static $userShow = \App\Modules\UserManagement\User\Actions\Customer\Show::class;
    public static function execute($request)
    {
        // dd(request()->all());
        try {
            // dd($request->userAddress);
            $requestData = $request->validated();
            $requestData['role_id'] = 9;
            unset($requestData['confirmed']);



            //store data
            if ($userData = self::$model::create($requestData)) {

                self::$userEmployeeInfoModel::create([
                    'user_id' => $userData->id,
                    'gender' => $request->gender,
                    'nick_name' => $request->nick_name,
                    'employee_code' => $request->employee_code,
                    'date_of_birth' => $request->date_of_birth,
                ]);

                if ($request->userAddress) {

                    $userAddressContactPersons = [];
                    foreach ($request->userAddress as $key => $address) {

                        $address = (object) $address;
                        $userAddressData = [
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



                        $userAddressDataStore = self::$userAddress::create($userAddressData);

                        if (isset($address->contact_persons)) {
                            foreach ($address->contact_persons as $contactPerson) {
                                $contactPerson = (object) $contactPerson;
                                $userAddressContactPersons[] = [
                                    'user_id' => $userData->id,
                                    'user_address_id' => $userAddressDataStore->id,
                                    'name' => $contactPerson->name,
                                    'phone_number' => $contactPerson->phone_number,
                                    'email' => $contactPerson->email,
                                ];
                            }
                        }
                    }

                    if (!empty($userAddressContactPersons)) {
                        self::$userAddressContactPerson::insert($userAddressContactPersons);
                    }
                }

                return messageResponse('Item added successfully', $userData, 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [],500, 'server_error');
        }
    }
}
