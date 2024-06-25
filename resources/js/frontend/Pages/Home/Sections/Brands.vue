<template>
    <section class="brands">
        <div class="custom-container">
            <h2 class="title">Brands We Are Working With</h2>
            <ul class="brand_items">
                <li v-for="item in brands" :key="item.id">
                    <img :src="check_image_url(item.image)" :alt="item.title">
                </li>
            </ul>
        </div>
    </section>
</template>
<script>
import axios from 'axios';

export default {
    data: () => ({
        brands: []
    }),
    created: function(){
        this.get_brands();
    },
    methods: {
        get_brands: function(){
            axios.get('/api/v1/brands')
                .then(res=>{
                    this.brands = res.data;
                })
        },
        check_image_url: function (url) {
            try {
                new URL(url);
                return url;
            } catch (e) {
                return "/"+url;
            }
        },
    }
}
</script>
