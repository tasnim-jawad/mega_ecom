<template>

    <div class="mb-3 bg-white card filter_card">
        <div @click.prevent="toggle_list" class="card-header bg-white d-flex justify-content-between">
            <b>
                brand
            </b>
            <b>
                <i class="fa filter_toggler fa-angle-down"></i>
            </b>
        </div>
        <div class="p-2 pt-0" ref="items">
            <div class="collection-collapse-block open">
                <div class="collection-collapse-block-content">
                    <div class="collection-brand-filter">

                        <div v-for="brand in brands" :key="brand.id"
                            class="custom-control custom-checkbox form-check collection-filter-checkbox">
                            <input type="checkbox" class="custom-control-input form-check-input mt-0"
                                :id="`brand` + brand.id">
                            <label class="custom-control-label form-check-label" :for="`brand` + brand.id">
                                {{ brand.title }}
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data: () => ({
        brands: [],
    }),
    created: function () {
        this.get_brands();
    },
    methods: {
        get_brands: async function () {
            let res = await axios.get('/api/v1/brands');
            let data = res.data;
            this.brands = data;
        },
        toggle_list: function(){
            $(this.$refs.items).slideToggle();
        }
    }
}
</script>
<style lang="">

</style>
