<?php

namespace App\Modules\UserManagement\User\Actions\Retailer;

class Store
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    static $userAddress = \App\Modules\UserManagement\User\Models\UserAddressModel::class;
    static $userAddressContactPerson = \App\Modules\UserManagement\User\Models\UserAddressContactPersonModel::class;
    static $userRetailerInfoModel = \App\Modules\UserManagement\User\Models\UserRetailerInformationModel::class;
    static $userShow = \App\Modules\UserManagement\User\Actions\Retailer\Show::class;
    public static function execute($request)
    {
        try {
            // dd($request->userAddress);
            $requestData = $request->validated();
            $requestData['role_id'] = 6;
            unset($requestData['confirmed']);
            //additional validation
            $additionalValidationData = [];
            if (!$request->retailer_type_id) {
                $additionalValidationData[] = 'retailer_type_id';
                $response = additionalValidation($additionalValidationData);
                if ($response) {
                    return $response;
                }
            }


            //store data
            if ($userData = self::$model::create($requestData)) {

                self::$userRetailerInfoModel::create([
                    'user_id' => $userData->id,
                    'retailer_type_id' => $request->retailer_type_id,
                    'retailer_id' => $request->retailer_id,
                    'alt_email' => $request->alt_email,
                    'alt_mobile_number' => $request->alt_mobile_number,
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

                return self::$userShow::execute($userData->slug);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [],500, 'server_error');
        }
    }
}
