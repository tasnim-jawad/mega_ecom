<template>

    <div class="mb-3 bg-white card filter_card">
        <div @click.prevent="toggle_list" class="card-header bg-white d-flex justify-content-between">
            <b>
               {{ varient.title }}
            </b>
            <b>
                <i class="fa filter_toggler fa-angle-down"></i>
            </b>
        </div>
        <div class="p-2 pt-0" ref="items" style="display: none;">
            <div class="collection-collapse-block open">
                <div class="collection-collapse-block-content">
                    <div class="collection-brand-filter">

                        <div v-for="value in varient.values" :key="value.id"
                            class="custom-control custom-checkbox form-check collection-filter-checkbox">
                            <input type="checkbox" class="custom-control-input form-check-input mt-0"
                                :id="`varient` + value.id">
                            <label class="custom-control-label form-check-label" :for="`varient` + value.id">
                                {{ value.title }}
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    props: ['varient'],
    data: () => ({
    }),
    created: function () {
    },
    methods: {
        toggle_list: function () {
            $(this.$refs.items).slideToggle();
        }
    }
}
</script>
<style lang="">

</style>
