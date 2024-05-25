<?php

namespace App\Modules\UserManagement\User\Actions\User;



class Update
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    static $userAddress = \App\Modules\UserManagement\User\Models\UserAddressModel::class;
    static $userAddressContactPerson = \App\Modules\UserManagement\User\Models\UserAddressContactPersonModel::class;
    static $userCustomerInformation = \App\Modules\UserManagement\User\Models\UserCustomerInformationModel::class;
    static $userSupplierInformation = \App\Modules\UserManagement\User\Models\UserSupplierInformationModel::class;
    static $userEmployeeInformation = \App\Modules\UserManagement\User\Models\UserEmployeeInformationModel::class;
    public static function execute($request, $id)
    {
        try {


            $requestData = $request->validated();

            $userData = self::$model::find($id);

            if (!$userData) {
                return response()->json(['message' => 'Data not found'], 404);
            }

            $userData->update($requestData);

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
                        'thana_id' => $address->thana_id,
                        'city_id' => $address->city_id,
                        'zip_code' => $address->zip_code,
                        'is_present_address' => $address->is_present_address,
                        'is_permanent_address' => $address->is_permanent_address,
                    ];

                    if (isset($address->id) && in_array($address->id, $existingAddressIds)) {
                        $userAddress = self::$userAddress::find($address->id);
                        $userAddress->update($addressData);
                        $newAddressIds[] = $userAddress->id;
                    } else {
                        $userAddress = self::$userAddress::create($addressData);
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
                                $userAddressContactPerson = self::$userAddressContactPerson::find($contactPerson->id);
                                $userAddressContactPerson->update($contactPersonData);
                            } else {
                                $userAddressContactPersons[] = $contactPersonData;
                            }
                        }
                    }
                }

                if (!empty($userAddressContactPersons)) {
                    self::$userAddressContactPerson::insert($userAddressContactPersons);
                }

                $addressesToDelete = array_diff($existingAddressIds, $newAddressIds);
                self::$userAddress::destroy($addressesToDelete);
            }
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
