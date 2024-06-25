<template>
    <ProfileLayout :bread_cumb="bread_cumb">
        <div class="dashboard">
            <div class="page-title">
                <h2>
                    Wish List
                </h2>
            </div>
            <div class="box-account box-info">
                <div class="table-responsive">
                    <table class="product_info_table table table-bordered mb-0">
                        <tr v-for="i in 10">
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
                                    <a href="" class="btn btn-primary text-light">
                                        <i class="fa fa-shopping-cart"></i>
                                        Buy
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="action">
                                    <a href="" class="btn btn-danger text-light">
                                        <i class="fa fa-trash"></i>
                                        Remove
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </table>
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
                title: 'wish list',
                url: '/profile/wish-list',
                active: true,
            },
        ]
    }),
};
</script>

<style></style>
