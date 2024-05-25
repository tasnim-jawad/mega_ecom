<?php

namespace App\Modules\UserManagement\User\Actions;

class Delete
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    static $userAddress = \App\Modules\UserManagement\User\Models\UserAddressModel::class;
    static $userAddressContactPerson = \App\Modules\UserManagement\User\Models\UserAddressContactPersonModel::class;
    static $userCustomerInformation = \App\Modules\UserManagement\User\Models\UserCustomerInformationModel::class;
    static $userSupplierInformation = \App\Modules\UserManagement\User\Models\UserSupplierInformationModel::class;
    static $userEmployeeInformation = \App\Modules\UserManagement\User\Models\UserEmployeeInformationModel::class;
    public static function execute($id)
    {
        try {
            if (!$data = self::$model::find($id)) {
                return messageResponse('Data not found...', 404, 'error');
            }
            if ($data->delete()) {
                $userAddress =  self::$userAddress::where('user_id', $id)->first();
                $userAddress?->delete();

                $userCustomerInformationData = self::$userCustomerInformation::where('user_id', $id)->first();
                $userCustomerInformationData?->delete();

                $userSupplierInformationData = self::$userSupplierInformation::where('user_id', $id)->first();
                $userSupplierInformationData?->delete();

                $userEmployeeInformationData =  self::$userEmployeeInformation::where('user_id', $id)->first();
                $userEmployeeInformationData?->delete();

                $userAddressContactPersonData = self::$userAddressContactPerson::where('user_id', $id)->first();
                $userAddressContactPersonData?->delete();
            }
            return messageResponse('Item Successfully deleted', 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
