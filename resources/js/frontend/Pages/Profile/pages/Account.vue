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
                            <label for="input-name">Name </label>
                            <input type="text" name="name" value="shefat" placeholder="Name"
                                id="input-name" class="form-control">
                        </div>
                        <div class="form-group required">
                            <label for="input-user_name">User Name</label>
                            <input type="text" name="user_name" value="masum" placeholder="User Name" id="input-user_name"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email">E-Mail</label>
                        <input type="email" name="email" value="myphoto204@gmail.com" placeholder="E-Mail" readonly=""
                            id="input-email" class="form-control">
                    </div>
                    <div class="form-group required">
                        <label for="input-phone_number">Phone Number</label>
                        <input type="tel" name="phone_number" value="01646376015" placeholder="Phone Number" readonly=""
                            id="input-phone_number" class="form-control">
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
