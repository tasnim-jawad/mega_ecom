<template>
    <Layout>
        <div class="breadcrumb-main py-3">
            <div class="container">
                <BreadCumb :bread_cumb="bread_cumb"/>
            </div>
        </div>
        <section class="section-big-py-space b-g-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <ProfileNav/>
                    </div>
                    <div class="col-lg-9">
                        <div class="dashboard-right">
                            <slot/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script>
import BreadCumb from "../../../Components/BreadCumb.vue";
import Layout from "../../../Shared/Layout.vue";
import ProfileNav from "./ProfileNav.vue";
export default {
    components: { Layout, ProfileNav, BreadCumb },
    props: {
        bread_cumb: {
            required: true,
            type: Array,
            default: [],
        },
    },
    created: function(){
    }
};
</script>

<style></style>
