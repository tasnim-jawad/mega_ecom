<template>
    <div>
        <div class="account-sidebar"><a class="popup-btn">my account</a></div>
        <div class="dashboard-left">
            <div class="collection-mobile-back">
                <span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i>
                    back</span>
            </div>
            <div class="block-content">
                <ul>
                    <li class="profile_nav_top">
                        <div class="profile_image">
                            <img v-if="user.photo" :src="check_image_url(user.photo)" alt="user-profile-pic">
                            <img :src="check_image_url('avatar.png')" alt="user-profile-pic">
                        </div>
                        <div>
                            <h4>
                                {{ user.name }}
                            </h4>
                        </div>
                    </li>
                    <li :class="{ 'active': $page.url === '/profile' }">
                        <Link href="/profile">
                            At a glance
                        </Link>
                    </li>
                    <li :class="{ 'active': $page.url === '/profile/orders' }">
                        <Link href="/profile/orders" >
                            Orders
                        </Link>
                    </li>
                    <li :class="{ 'active': $page.url === '/profile/wish-list' }">
                        <Link href="/profile/wish-list" >
                            Wish List
                        </Link>
                    </li>
                    <li :class="{ 'active': $page.url === '/profile/account' }">
                        <Link href="/profile/account" >
                            Edit Account
                        </Link>
                    </li>
                    <li :class="{ 'active': $page.url === '/profile/address' }">
                        <Link href="/profile/address" >
                            Edit Address
                        </Link>
                    </li>
                    <li :class="{ 'active': $page.url === '/profile/password' }">
                        <Link href="/profile/password" >
                            Password
                        </Link>
                    </li>

                    <li class="last"><a href="javascript:void(0)">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
import { router } from '@inertiajs/vue3'
export default {
    props: {
        auth: Object,
    },
    data: ()=>({
        user: {},
    }),
    created(){
        let data = window.page_data();
        if(data.props.auth){
            this.user = data.props.auth;
        }else{
            window.location.reload();
        }
    },
    methods: {
        check_image_url: function (url) {
            try {
                new URL(url);
                return url;
            } catch (e) {
                return "/"+url;
            }
        }
    }
}
</script>
<style lang="">

</style>
