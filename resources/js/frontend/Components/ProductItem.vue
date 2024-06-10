<template>
    <div class="product">
        <div class="product-box">
            <div class="product-imgbox">
                <div class="product-front">
                    <Link :href="`/product-details/${product.slug}`">
                        <img :src="`/${product.product_image.url}`" class="img-fluid" alt="product">
                    </Link>
                    <a onclick="openCart()" class="buy_now_btn">
                        <i class="icon-shopping-cart icon"></i>
                        Buy Now
                    </a>
                </div>
                <div class="product-icon">
                    <button onclick="openCart()" class="tooltip-left" data-tippy-content="Add to cart" tabindex="0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-shopping-cart">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </button>
                    <a href="javascript:void(0)" class="add-to-wish tooltip-left" data-tippy-content="Add to Wishlist"
                        tabindex="0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-heart">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg>
                    </a>
                    <a href="compare.html" class="tooltip-left" data-tippy-content="Compare" tabindex="0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-refresh-cw">
                            <polyline points="23 4 23 10 17 10"></polyline>
                            <polyline points="1 20 1 14 7 14"></polyline>
                            <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                        </svg>
                    </a>
                </div>
                <div class="new-label" v-if="parseInt(Math.random() * 9 ) % 2 == 0">
                    <div>
                        new
                    </div>
                </div>
                <div class="on-sale">
                    save $ {{ ( Math.random() * 9 ).toFixed(2) }}
                </div>
            </div>
            <div class="product-detail">
                <div class="detail-title">
                    <div class="detail-left">
                        <Link :href="`/product-details/${product.slug}`">
                            <h6 class="price-title">
                                {{ product.title }}
                            </h6>
                        </Link>
                    </div>
                    <div class="detail-right">
                        <div class="check-price">
                            $ {{ ( Math.random() * 999 ).toFixed(2) }}
                        </div>
                        <div class="price">
                            $ {{ ( Math.random() * 100 ).toFixed(2) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</template>
<script>
import { Link } from '@inertiajs/vue3'
export default {
    components: { Link },
    props: ['product']
}
</script>
