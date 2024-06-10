<template>
    <Layout>

        <HeroSlider />

        <BreakingNews />

        <TopCategories />

        <OurServiceType />

        <FeaturedProducts />

        <Brands />

        <JoinNewsLetter />

        <BottomDescription />


    </Layout>
</template>
<script>
import Layout from "../../Shared/Layout.vue";
import HeroSlider from "../../Components/HeroSlider.vue";
import BreakingNews from "../../Components/BreakingNews.vue";
import TopCategories from "../../Components/TopCategories.vue";
import OurServiceType from "../../Components/OurServiceType.vue";
import FeaturedProducts from "./Sections/FeaturedProducts.vue";
import BottomDescription from "./Sections/BottomDescription.vue";
import Brands from "./Sections/Brands.vue";
import JoinNewsLetter from "./Sections/JoinNewsLetter.vue";
export default {
    components: {
        Layout,
        HeroSlider,
        BreakingNews,
        TopCategories,
        OurServiceType,
        FeaturedProducts,
        BottomDescription,
        Brands,
        JoinNewsLetter,
    },
};
</script>
<style lang="scss" scoped></style>
