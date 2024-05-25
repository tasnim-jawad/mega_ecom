<?php

namespace App\Modules\UserManagement\User\Actions;

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
            $requestData = $request->validated();

            if ($userData = self::$model::query()->create($requestData)) {

                if ($request->userAddress) {
                    $userAddress = (object)$request->userAddress;
                    $userAddress =  self::$userAddress::create([
                        'user_id' => $userData->id,
                        'is_shipping' => $userAddress->is_shipping,
                        'is_billing' => $userAddress->is_billing,
                        'address_types' => $userAddress->address_types,
                        'address' => $userAddress->address,
                        'country_id' => $userAddress->country_id,
                        'state_division_id' => $userAddress->state_division_id,
                        'division_id' => $userAddress->division_id,
                        'district_id' => $userAddress->district_id,
                        'thana_id' => $userAddress->thana_id,
                        'city_id' => $userAddress->city_id,
                        'zip_code' => $userAddress->zip_code,
                        'is_present_address' => $userAddress->is_present_address,
                        'is_permanent_address' => $userAddress->is_permanent_address,
                    ]);
                }

                self::$userCustomerInformation::create([
                    'user_id' => $userData->id,
                    'customer_type_id' => $request->customer_type_id,
                    'client_id' => $request->client_id,
                    'website' => $request->website,
                ]);

                self::$userSupplierInformation::create([
                    'user_id' => $userData->id,
                    'supplier_type_id' => $request->supplier_type_id,
                    'supplier_id' => $request->supplier_id,
                    'mobile_number' => $request->mobile_number,
                    'email' => $request->email,
                ]);

                self::$userEmployeeInformation::create([
                    'user_id' => $userData->id,
                    'gender' =>  $request->gender,
                    'nick_name' => $request->nick_name,
                    'date_of_birth' => $request->date_of_birth,
                    'employee_code' => $request->employee_code,
                ]);

                self::$userAddressContactPerson::create([
                    'user_id' => $userData->id,
                    'user_address_id' => $userAddress->id,
                    'full_name' => $request->full_name,
                    'phone_number' => $request->phone_number,
                    'email' => $request->email,
                ]);





                return messageResponse('Item added successfully', 201);
            }
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
