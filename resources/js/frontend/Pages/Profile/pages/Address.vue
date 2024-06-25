<template>
    <ProfileLayout :bread_cumb="bread_cumb">
        <div class="dashboard">
            <div class="page-title">
                <h2>
                    Edit Address
                </h2>
            </div>
            <div class="box-account box-info">

                <form action="" method="post"
                    enctype="multipart/form-data" class="form-horizontal">
                    <div class="multiple-form-group">
                        <div class="form-group required">
                            <label for="input-firstname">First Name</label>
                            <input type="text" name="firstname" value="shefat" placeholder="First Name"
                                id="input-firstname" class="form-control" />
                        </div>
                        <div class="form-group required">
                            <label for="input-lastname">Last Name</label>
                            <input type="text" name="lastname" value="masum" placeholder="Last Name" id="input-lastname"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-company">Company</label>
                        <input type="text" name="company" value="" placeholder="Company" id="input-company"
                            class="form-control" />
                    </div>
                    <div class="form-group required">
                        <label for="input-address-1">Address 1</label>
                        <input type="text" name="address_1" value="" placeholder="Address 1" id="input-address-1"
                            class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="input-address-2">Address 2</label>
                        <input type="text" name="address_2" value="" placeholder="Address 2" id="input-address-2"
                            class="form-control" />
                    </div>
                    <div class="multiple-form-group">
                        <div class="form-group required">
                            <label for="input-city">City</label>
                            <input type="text" name="city" value="" placeholder="City" id="input-city"
                                class="form-control" />
                        </div>
                        <div class="form-group required">
                            <label for="input-postcode">Post Code</label>
                            <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode"
                                class="form-control" />
                        </div>
                    </div>

                    <div class="multiple-form-group">
                        <div class="form-group required">
                            <label for="input-country">Country</label>
                            <select name="country_id" id="input-country" class="form-control">
                                <option value=""> --- Please Select --- </option>
                                <option value="244">Aaland Islands</option>
                                <option value="1">Afghanistan</option>
                                <option value="2">Albania</option>
                                <option value="3">Algeria</option>
                                <option value="239">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="form-group required">
                            <label for="input-zone">Region / State</label>
                            <select name="zone_id" id="input-zone" class="form-control">
                                <option value=""> --- Please Select --- </option>
                                <option value="322"> Dhaka City</option>
                                <option value="323"> Khulna City</option>
                                <option value="324"> Rajshahi City</option>
                                <option value="4231"> Rangpur City</option>
                                <option value="321">Chittagong City</option>
                                <option value="4233">Gazipur City</option>
                                <option value="4232">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Default Address</label>
                        <label class="radio-inline">
                            <input type="radio" name="default" value="1" checked="checked" />
                            Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="default" value="0" />
                            No
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Continue</button>
                </form>


            </div>
        </div>
    </ProfileLayout>
</template>

<script>
import ProfileLayout from "../shared/ProfileLayout.vue";
export default {
    components: { ProfileLayout },
    data: ()=>({
        bread_cumb: [
            {
                title: 'profile',
                url: '/profile',
                active: false,
            },
            {
                title: 'address',
                url: '/profile/address',
                active: true,
            },
        ]
    }),
};
</script>

<style></style>
