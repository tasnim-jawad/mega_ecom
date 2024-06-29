<template>
    <Layout>
        <section class="section-big-pt-space ratio_asos b-g-light">
            <div class="collection-wrapper">
                <div class="custom-container">
                    <div class="row">
                        <div class="col-sm-3 collection-filter category-page-side">

                            <div class="collection-filter-block filter_varient_group creative-card creative-inner category-side">
                                <div class="collection-mobile-back">
                                    <span class="filter-back">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        back
                                    </span>
                                </div>

                                <PriceRange />

                                <BrandVarients />

                                <AllVarients />
                            </div>

                        </div>
                        <div class="collection-content col">
                            <div class="page-main-content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="top-banner-wrapper">
                                            <img src="https://themes.pixelstrap.com/bigdeal/assets/images/category/1.jpg"
                                                    class="img-fluid" alt="Category Advertise">
                                            <div class="top-banner-content small-section">
                                                <h2>
                                                    {{ category.data?.title }}
                                                </h2>
                                                <h5>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </h5>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book. It has survived not
                                                    only five centuries, but also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was popularised in the 1960s
                                                    with the release of Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software like Aldus
                                                    PageMaker including versions of Lorem Ipsum.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="collection-product-wrapper">
                                            <div class="product-top-filter">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="filter-main-btn">
                                                            <span class="filter-btn  ">
                                                                <i class="fa fa-filter" aria-hidden="true"></i>
                                                                Filter
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="product-filter-content">
                                                            <div class="search-count">
                                                                <h5>Showing Products 1-24 of 10 Result</h5>
                                                            </div>
                                                            <div class="collection-view">
                                                                <!-- <ul>
                                                                    <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                    <li><i class="fa fa-list-ul list-layout-view"></i>
                                                                    </li>
                                                                </ul> -->
                                                            </div>
                                                            <div class="collection-grid-view">
                                                                <!-- <ul>
                                                                    <li><img src="https://themes.pixelstrap.com/bigdeal/assets/images/category/icon/2.png"
                                                                            alt="" class="product-2-layout-view"></li>
                                                                    <li><img src="https://themes.pixelstrap.com/bigdeal/assets/images/category/icon/3.png"
                                                                            alt="" class="product-3-layout-view"></li>
                                                                    <li><img src="https://themes.pixelstrap.com/bigdeal/assets/images/category/icon/4.png"
                                                                            alt="" class="product-4-layout-view"></li>
                                                                    <li><img src="https://themes.pixelstrap.com/bigdeal/assets/images/category/icon/6.png"
                                                                            alt="" class="product-6-layout-view"></li>
                                                                </ul> -->
                                                            </div>
                                                            <div class="product-page-per-view">
                                                                <select>
                                                                    <option value="High to low">24 Products Par Page
                                                                    </option>
                                                                    <option value="Low to High">50 Products Par Page
                                                                    </option>
                                                                    <option value="Low to High">100 Products Par Page
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="product-page-filter">
                                                                <select>
                                                                    <option value="High to low">High to low</option>
                                                                    <option value="Low to High">Low to high</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" py-5">
                                                <div class="product_list" :class="{product_left: category.products.length < 5}">
                                                    <div v-for="i in category.products" :key="i.name">
                                                        <ProductItem :product="i"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-pagination">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script>
import Layout from "../../Shared/Layout.vue";
import PriceRange from "./CategoryVarients/PriceRange.vue";
import BrandVarients from "./CategoryVarients/BrandVarients.vue";
import AllVarients from "./CategoryVarients/AllVarients.vue";
import ProductItem from "../../Components/ProductItem.vue";
import axios from "axios";
export default {
    components: { Layout, PriceRange, BrandVarients, AllVarients, ProductItem },
    props: ['slug'],
    data: () => ({
        category: {
            data: {},
            products: [],
        },
    }),
    created: function () {
        this.get_category();
    },
    methods: {
        get_category: async function () {
            let res = await axios.get('/api/v1/category/'+this.slug);
            let data = res.data;
            this.category = data;
        },
        toggle_list: function(){
            $(this.$refs.items).slideToggle();
        }
    }
};
</script>


<style></style>
