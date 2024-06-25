<template>
    <ProfileLayout :bread_cumb="bread_cumb">
        <div class="dashboard">
            <div class="page-title">
                <h2>
                    Order History
                </h2>
            </div>
            <div class="box-account box-info">

                <div class="card order_history_card my-3" v-for="i in 5" :key="i">
                    <div class="card-header">
                        <div class="left">
                            <b>Order# 152690</b>
                            <p>Date Added: 22 Sep 2021</p>
                        </div>
                        <div class="right">
                            <i class="fa fa-check"></i>
                            finished
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="product_info_table table border-0 mb-0">
                                <tr>
                                    <td>
                                        <img src="https://www.startech.com.bd/image/cache/catalog/processor/AMD/athlon-3000g/athlon-3000g-1-500x500.jpg" alt="">
                                        <span>
                                            Remax RPP-88 10000mAh DOT Series Power Bank
                                        </span>
                                    </td>
                                    <td>
                                        <div class="price">
                                            1,160৳
                                        </div>
                                    </td>
                                    <td>
                                        <div class="action">
                                            <a href="" class="btn btn-primary text-light">view</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

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
                title: 'orders',
                url: '/profile/orders',
                active: true,
            },
        ]
    }),
};
</script>

<style></style>
