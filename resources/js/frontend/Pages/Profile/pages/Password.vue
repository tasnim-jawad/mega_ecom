<template>
    <ProfileLayout :bread_cumb="bread_cumb">
        <div class="dashboard">
            <div class="page-title">
                <h2>
                    Change Password
                </h2>
            </div>
            <div class="box-account box-info">
                <div v-if="success" class="alert alert-success">{{ success }}</div>
                <form action="" method="post" @submit.prevent="change_password" enctype="multipart/form-data">
                    <div class="form-group required">
                        <label for="input-old">Old Password</label>
                        <input type="password" name="old_password" v-model="form.old_password" placeholder="Old Password" id="input-old"
                            class="form-control" />
                    </div>
                    <div class="text-danger" v-if="form.errors.old_password">{{ form.errors.old_password }}</div>
                    <div class="form-group required">
                        <label for="input-password">New Password</label>
                        <input type="password" name="new_password" v-model="form.new_password" placeholder="New Password" id="input-password"
                            class="form-control" />
                    </div>
                    <div class="text-danger" v-if="form.errors.new_password">{{ form.errors.new_password }}</div>
                    <div class="form-group required">
                        <label for="input-confirm">Password Confirm</label>
                        <input type="password" name="new_password_confirmation" v-model="form.new_password_confirmation" placeholder="Password Confirm" id="input-confirm"
                            class="form-control" />
                    </div>
                    <div class="text-danger" v-if="form.errors.new_password_confirmation">{{ form.errors.new_password_confirmation }}</div>
                    <button type="submit" class="btn btn-primary">Continue</button>
                </form>


            </div>
        </div>
    </ProfileLayout>
</template>

<script>
import ProfileLayout from "../shared/ProfileLayout.vue";
import { useForm } from '@inertiajs/vue3';
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
        ],
        form: useForm({
            old_password: null,
            new_password: null,
            new_password_confirmation: null,
        }),
        success:'',
    }),
    methods: {
        change_password: function () {
            console.log(Object.keys(this.form.errors).length);
            this.form.clearErrors();
            this.form.post('/profile/change-password', {
                onError: (errors) => {
                    console.log(errors); // For debugging purposes
                },
                onSuccess: (page) => {
                    this.form.reset('old_password', 'new_password', 'new_password_confirmation');
                    console.log(page);
                    console.log(page.props.flash);
                    this.success = page.props.flash.success; // Show success message
                }
            });
        }
    }
};
</script>

<style></style>
