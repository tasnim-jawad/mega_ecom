<template>
    <ProfileLayout :bread_cumb="bread_cumb">
        <div class="dashboard">
            <div class="page-title">
                <h2>
                    Edit Acount Information
                </h2>
            </div>
            <div class="box-account box-info">

                <form action="" method="post" enctype="multipart/form-data"
                    class="form-horizontal">
                    <div class="multiple-form-group">
                        <div class="form-group required">
                            <label for="input-firstname">First Name </label>
                            <input type="text" name="firstname" value="shefat" placeholder="First Name"
                                id="input-firstname" class="form-control">
                        </div>
                        <div class="form-group required">
                            <label for="input-lastname">Last Name</label>
                            <input type="text" name="lastname" value="masum" placeholder="Last Name" id="input-lastname"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email">E-Mail</label>
                        <input type="email" name="email" value="myphoto204@gmail.com" placeholder="E-Mail" readonly=""
                            id="input-email" class="form-control">
                    </div>
                    <div class="form-group required">
                        <label for="input-telephone">Telephone</label>
                        <input type="tel" name="telephone" value="01646376015" placeholder="Telephone" readonly=""
                            id="input-telephone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="input-fax">Fax</label>
                        <input type="text" name="fax" value="" placeholder="Fax" id="input-fax" class="form-control">
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
                title: 'account',
                url: '/profile/account',
                active: true,
            },
        ]
    }),
};
</script>

<style></style>
