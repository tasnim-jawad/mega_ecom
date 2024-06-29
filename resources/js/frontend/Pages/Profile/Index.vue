<template>
    <ProfileLayout :bread_cumb="bread_cumb">
        <div class="dashboard">
            <div class="page-title">
                <h2>My Dashboard</h2>
            </div>
            <div class="welcome-msg">
                <p>Hello, Mr shefat !</p>
                <p>
                    From your My Account Dashboard you have the ability to view a snapshot of your
                    recent account activity and update your account information. Select a link below
                    to view or edit information.
                </p>
            </div>
            <div class="box-account box-info">
                <div class="dashboard_cards">
                    <div class="item">
                        <h4 class="count">21</h4>
                        <h5 class="title">Total Orders</h5>
                    </div>
                    <div class="item">
                        <h4 class="count">2</h4>
                        <h5 class="title">Pending Orders</h5>
                    </div>
                    <div class="item">
                        <h4 class="count">10</h4>
                        <h5 class="title">Confirmed Orders</h5>
                    </div>
                    <div class="item">
                        <h4 class="count">5</h4>
                        <h5 class="title">Billing Orders</h5>
                    </div>
                    <div class="item">
                        <h4 class="count">4</h4>
                        <h5 class="title">finished Orders</h5>
                    </div>
                </div>
            </div>
        </div>
    </ProfileLayout>
</template>

<script>
import ProfileLayout from "./shared/ProfileLayout.vue";
export default {
    components: { ProfileLayout },
    data: ()=>({
        bread_cumb: [
            {
                title: 'profile',
                url: '/profile',
                active: true,
            },
        ]
    }),
    created: function(){
    }
};
</script>

<style></style>
