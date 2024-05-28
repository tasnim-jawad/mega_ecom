<?php

namespace App\Modules\UserManagement\User\Actions\Employee;

class Store
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    static $userAddress = \App\Modules\UserManagement\User\Models\UserAddressModel::class;
    static $userAddressContactPerson = \App\Modules\UserManagement\User\Models\UserAddressContactPersonModel::class;
    static $userSupplierInfoModel = \App\Modules\UserManagement\User\Models\UserSupplierInformationModel::class;
    static $userShow = \App\Modules\UserManagement\User\Actions\Customer\Show::class;
    public static function execute($request)
    {
        try {
            // dd($request->userAddress);
            $requestData = $request->validated();
            $requestData['role_id'] = 9;
            unset($requestData['confirmed']);
            //additional validation
            $additionalValidationData = [];
            if (!$request->customer_type_id) {
                $additionalValidationData[] = 'customer_type_id';
                $response = additionalValidation($additionalValidationData);
                if ($response) {
                    return $response;
                }
            }


            //store data
            if ($userData = self::$model::create($requestData)) {

                self::$userSupplierInfoModel::create([
                    'user_id' => $userData->id,
                    'gender' => $request->gender,
                    'nick_name' => $request->nick_name,
                    'gender' => $request->gender,
                    'employee_code' => $request->date_of_birth,
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
                            'thana_id' => $address->thana_id,
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

                return self::$userShow::execute($userData->slug);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
