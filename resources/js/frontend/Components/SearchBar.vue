<template>

    <div class="input-box header_search_area">
        <form class="hungry_coder-form">
            <div class="input-group ">
                <div class="input-group-text">
                    <span class="search"><i class="fa fa-search"></i></span>
                </div>
                <input type="search" v-model="search_key" class="form-control" placeholder="Search a Product">
            </div>
        </form>
        <div v-if="search_key.length" class="search_results">
            <div class="search_types">
                <ul>
                    <li><a href="#" @click.prevent="search_type='products'" :class="{active :search_type=='products',}">Products</a></li>
                    <li><a href="#" @click.prevent="search_type='categories'" :class="{active :search_type=='categories',}">Categories</a></li>
                </ul>
            </div>
            <div class="search_items">
                <div class="products" v-if="search_type=='products'">
                    <div class="search_item" v-for="i in 10 " :key="i">
                        <a href="#">
                            <div class="left">
                                <img src="https://www.startech.com.bd/image/cache/catalog/mouse/dareu/lm106g/lm106g-01-80x80.webp" alt="">
                            </div>
                            <div class="right">
                                <h3 class="product_title">
                                    Dareu LM106G Wireless Office Mouse
                                </h3>
                                <div class="price">
                                    <div class="old">
                                        450৳
                                    </div>
                                    <div class="new">
                                        320৳
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="categories" v-if="search_type=='categories'">
                    <div class="search_item">
                        <a href="#">
                            <div class="left">
                                <img src="https://www.startech.com.bd/image/cache/catalog/brand-logo/dahua-80x80.png" alt="">
                            </div>
                            <div class="right">
                                <h3 class="product_title">
                                    Dahua CC Camera Package
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="search_action">
                <a href="#">See all results</a>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    components: {
    },
    data: () => ({
        search_type: 'products',
        search_key: '',
    })
}
</script>

<style>

</style>
