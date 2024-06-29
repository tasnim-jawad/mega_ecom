<template>
    <section class="color_bg_banner">
        <div class="custom-container">
            <div class="website_banner">
                <div class="category_modal_toggler" @click="toggle_category">
                    <img src="/frontend/images/categories24.svg" alt="">
                    <span class="text">
                        categories
                    </span>
                </div>
                <div class="left" id="banner_left">
                    <left-category-list></left-category-list>
                </div>
                <div class="right">
                    <div class="top_banner">
                        <div class="top_banner_left">
                            <Suspense>
                                <template #default>
                                    <LazyComponent />
                                </template>
                                <template #fallback>
                                    <div>Loading...</div>
                                </template>
                            </Suspense>
                        </div>
                        <div class="top_banner_right">
                            <img src="/frontend/assets/images/banner_right.png" class="w-100" />
                            <!-- <div class="offer-banner-img">
                                <img src="https://themes.pixelstrap.com/bigdeal/assets/images/layout-1/offer-banner.png" alt="offer-banner" class="img-fluid" />
                            </div>
                            <div class="banner-contain">
                                <div>
                                    <a href="product-page(left-sidebar).html">
                                        <h5>Special Offer for you</h5>
                                        <div class="discount-offer">
                                            <h1>50%</h1>
                                            <sup>off</sup>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="bottom_banner">
                        <div class="bottom_banner_left">
                            <div class="img">
                                <img src="/frontend/assets/images/bottom_banner_1.png" />
                            </div>
                            <div class="img">
                                <img src="/frontend/assets/images/bottom_banner_2.png" />
                            </div>
                        </div>
                        <div class="bottom_banner_right">
                            <div class="img">
                                <img src="/frontend/assets/images/bottom_banner_3.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { defineAsyncComponent } from 'vue';
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import LeftCategoryList from './LeftCategoryList.vue';
export default {
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,
        LeftCategoryList,
        LazyComponent: defineAsyncComponent(() =>
            import('./Slider.vue')
        ),
    },
    created() {
    },
    methods:{
        toggle_category: function(){
            document.getElementById('banner_left').classList.toggle('active')
        }
    }
};
</script>
