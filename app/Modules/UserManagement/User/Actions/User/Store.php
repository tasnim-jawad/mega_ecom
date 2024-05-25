<?php

namespace App\Modules\UserManagement\User\Actions\User;

use App\Modules\UserManagement\User\Validations\Validation;


class Store
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    static $userAddress = \App\Modules\UserManagement\User\Models\UserAddressModel::class;
    static $userAddressContactPerson = \App\Modules\UserManagement\User\Models\UserAddressContactPersonModel::class;
    static $userCustomerInformation = \App\Modules\UserManagement\User\Models\UserCustomerInformationModel::class;
    static $userSupplierInformation = \App\Modules\UserManagement\User\Models\UserSupplierInformationModel::class;
    static $userEmployeeInformation = \App\Modules\UserManagement\User\Models\UserEmployeeInformationModel::class;
    public static function execute(Validation $request)
    {
        try {
            // dd($request->userAddress);
            $requestData = $request->validated();

            $userData = self::$model::create($requestData);

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

            return messageResponse('Item store successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}

// let request = {
//     user_info: {},
//     addresses: [
//         {
//             is_shipping: false,
//             is_billing: true,
//             address_type: '',
//             contact_persons: [
//                 {
//                     name: '',
//                     phone_number: '',
//                     email,
//                 }
//             ]
//         }
//     ]
// }
   // self::$userCustomerInformation::create([
                //     'user_id' => $userData->id,
                //     'customer_type_id' => $request->customer_type_id,
                //     'client_id' => $request->client_id,
                //     'website' => $request->website,
                // ]);

                // self::$userSupplierInformation::create([
                //     'user_id' => $userData->id,
                //     'supplier_type_id' => $request->supplier_type_id,
                //     'supplier_id' => $request->supplier_id,
                //     'mobile_number' => $request->mobile_number,
                //     'email' => $request->email,
                // ]);

                // self::$userEmployeeInformation::create([
                //     'user_id' => $userData->id,
                //     'gender' =>  $request->gender,
                //     'nick_name' => $request->nick_name,
                //     'date_of_birth' => $request->date_of_birth,
                //     'employee_code' => $request->employee_code,
                // ]);
