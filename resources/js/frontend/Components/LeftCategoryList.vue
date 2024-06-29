<template>
    <ul class="category_list">
        <li class="category_modal_close" @click="close_category">
            <i class="fa fa-close"></i>
        </li>
        <li v-for="category in top_categories" :key="category.id">
            <Link :href="`/category/${category.slug}`">
                <img :src="category.image" :alt="category.title">
                <span class="link_title">
                    {{ category.title }}
                </span>
            </Link>
        </li>
    </ul>
</template>
<script>
import axios from 'axios';

export default {
    data: () => ({
        top_categories: [],
    }),
    created: function () {
        this.get_categories();
    },
    methods: {
        get_categories: async function () {
            let res = await axios.get('/api/v1/nav-categories');
            let data = res.data;
            this.top_categories = data;
        },
        close_category: function(){
            document.getElementById('banner_left').classList.remove('active')
        }
    }
}
</script>
<style lang="">

</style>
