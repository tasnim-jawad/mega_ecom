<template>
    <Layout>
        <div class="breadcrumb-main py-3">
            <div class="custom-container">
                <BreadCumb :bread_cumb="bread_cumb" />
            </div>
        </div>

        <section class="login-page section-big-py-space b-g-light">
            <div class="custom-container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-8 offset-xl-4 offset-lg-3 offset-md-2">
                        <div class="theme-card">
                            <h3 class="text-center">Login</h3>
                            <form class="theme-form" @submit.prevent="login_submit" method="post">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" v-model="form.email" class="form-control" placeholder="Email" />
                                    <div class="text-danger" v-if="form.errors.email">{{ form.errors.email }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" v-model="form.password" class="form-control"
                                        placeholder="Enter your password" />
                                    <div class="text-danger" v-if="form.errors.password">{{ form.errors.password }}</div>
                                </div>
                                <button class="btn btn-normal">Login</button>
                                <a class="float-end txt-default mt-2" href="forget-pwd.html">
                                    Forgot your password?
                                </a>
                            </form>
                            <p class="mt-3">Sign up for a free account at our store. Registration is quick and easy. It
                                allows you to be able to order from our shop. To start shopping click register.</p>
                            <a href="register.html" class="txt-default pt-3 d-block">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </Layout>
</template>

<script>
import axios from "axios";
import BreadCumb from "../../Components/BreadCumb.vue";
import Layout from "../../Shared/Layout.vue";
import { useForm } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'
export default {
    components: { Layout, BreadCumb },
    data: () => ({
        bread_cumb: [
            {
                title: 'login',
                url: '/login',
                active: true,
            },
        ],
        form: useForm({
            email: null,
            password: null,
        })
    }),
    methods: {
        login_submit: function () {
            // axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('[name="csrf-token"]').content;
            // axios.post('login', new FormData(event.target))
            //     .then(res => { })

            this.form.clearErrors();
            this.form.post('/login');
        }
    }
};
</script>

<style></style>
