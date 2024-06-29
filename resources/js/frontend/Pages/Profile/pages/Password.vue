<template>
    <ProfileLayout :bread_cumb="bread_cumb">
        <div class="dashboard">
            <div class="page-title">
                <h2>
                    Change Password
                </h2>
            </div>
            <div class="box-account box-info">

                <form action="https://www.startech.com.bd/account/password" method="post" enctype="multipart/form-data">
                    <div class="form-group required">
                        <label for="input-old">Old Password</label>
                        <input type="password" name="old" value="" placeholder="Old Password" id="input-old"
                            class="form-control" />
                    </div>
                    <div class="form-group required">
                        <label for="input-password">New Password</label>
                        <input type="password" name="password" value="" placeholder="New Password" id="input-password"
                            class="form-control" />
                    </div>
                    <div class="form-group required">
                        <label for="input-confirm">Password Confirm</label>
                        <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm"
                            class="form-control" />
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
                title: 'password',
                url: '/profile/password',
                active: true,
            },
        ]
    }),
};
</script>

<style></style>
