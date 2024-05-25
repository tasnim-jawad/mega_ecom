<?php

namespace App\Modules\UserManagement\User\Actions\User;



class Import
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    static $userAddress = \App\Modules\UserManagement\User\Models\UserAddressModel::class;
    static $userAddressContactPerson = \App\Modules\UserManagement\User\Models\UserAddressContactPersonModel::class;
    static $userCustomerInformation = \App\Modules\UserManagement\User\Models\UserCustomerInformationModel::class;
    static $userSupplierInformation = \App\Modules\UserManagement\User\Models\UserSupplierInformationModel::class;
    static $userEmployeeInformation = \App\Modules\UserManagement\User\Models\UserEmployeeInformationModel::class;
    public static function execute($user, $request)
    {
        try {

            if (!$userData = self::$model::query()->where('id', $user->id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }

            $requestData = $request->validated();

            if ($userData->update($requestData)) {

                $userAddress =  self::$userAddress::where('user_id', $user->id)->first();
                $userAddress?->update([
                    'is_shipping' => $request->is_shipping,
                    'is_billing' => $request->is_billing,
                    'address_types' => $request->address_types,
                    'address' => $request->address,
                    'country_id' => $request->country_id,
                    'state_division_id' => $request->state_division_id,
                    'division_id' => $request->division_id,
                    'district_id' => $request->district_id,
                    'thana_id' => $request->thana_id,
                    'city_id' => $request->city_id,
                    'zip_code' => $request->zip_code,
                    'is_present_address' => $request->is_present_address,
                    'is_permanent_address' => $request->is_permanent_address,
                ]);


                $userCustomerInformationData = self::$userCustomerInformation::where('user_id', $user->id)->first();
                $userCustomerInformationData?->update([
                    'customer_type_id' => $request->customer_type_id,
                    'client_id' => $request->client_id,
                    'website' => $request->website,
                ]);

                $userSupplierInformationData = self::$userSupplierInformation::where('user_id', $user->id)->first();
                $userSupplierInformationData?->update([
                    'user_id' => $userData->id,
                    'supplier_type_id' => $request->supplier_type_id,
                    'supplier_id' => $request->supplier_id,
                    'mobile_number' => $request->mobile_number,
                    'email' => $request->email,
                ]);

                $userEmployeeInformationData =  self::$userEmployeeInformation::where('user_id', $user->id)->first();
                $userEmployeeInformationData?->update([
                    'user_id' => $userData->id,
                    'gender' =>  $request->gender,
                    'nick_name' => $request->nick_name,
                    'date_of_birth' => $request->date_of_birth,
                    'employee_code' => $request->employee_code,
                ]);

                $userAddressContactPersonData = self::$userAddressContactPerson::where('user_id', $user->id)->first();
                $userAddressContactPersonData?->update([
                    'user_id' => $userData->id,
                    'user_address_id' => $userAddress->id,
                    'full_name' => $request->full_name,
                    'phone_number' => $request->phone_number,
                    'email' => $request->email,
                ]);
            }
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
