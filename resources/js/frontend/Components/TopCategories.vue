<template>
    <section class="section_gap">
        <div class="custom-container">
            <div class="section_title">
                <h4 class="text">Top Categories</h4>
            </div>
            <div class="top_categries">

                <div v-for="(item, index) in categories" :key="index" class="category">
                    <a href="" class="category_link">
                        <div class="title"> {{ item.title }}</div>
                        <img :src="item.image" />
                    </a>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
export default {
    data: () => ({
        categories: [
            {
                title: '',
                image: '/frontend/assets/images/summer_collection.webp',
            },
            {
                title: '',
                image: '/frontend/assets/images/popular_products.webp',
            },
            {
                title: '',
                image: '/frontend/assets/images/flash_sale.webp',
            },
            {
                title: '',
                image: '/frontend/assets/images/super_saver.webp',
            },

            {
                title: 'grocery',
                image: '/frontend/assets/images/khaddo_sosso.webp',
            },
            {
                title: 'Cooking',
                image: '/frontend/assets/images/ranna_samogri.webp',
            },
            {
                title: 'Bath and Body',
                image: '/frontend/assets/images/bath_and_body.webp',
            },
            {
                title: 'baby care',
                image: '/frontend/assets/images/baby-care.webp',
            },

            {
                title: 'laptop and desktop',
                image: '/frontend/assets/images/laptops-desktops.webp',
            },
            {
                title: 'mobile and tablets',
                image: '/frontend/assets/images/mobiles-tablets.webp',
            },
            {
                title: 'large kitchen',
                image: '/frontend/assets/images/large-kitchen-appliances.webp',
            },
            {
                title: 'heating and cooling',
                image: '/frontend/assets/images/heating-cooling-air-quality.webp',
            },
        ]
    })
}
</script>

<style></style>
