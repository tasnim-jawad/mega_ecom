<template lang="">
    <div class="mb-3 bg-white card filter_card">
        <div class="card-header bg-white">
            <b>
                Price Range
            </b>
        </div>
        <div class="p-2 pt-5 pb-4">
            <div ref="range" id="range"></div>
        </div>
    </div>
</template>
<script>
import noUiSlider from 'nouislider';
export default {
    created: function () {
        setTimeout(this.init_range, 1000);
    },
    methods: {
        init_range: function () {
            noUiSlider.create(this.$refs.range, {
                start: [4000, 8000],
                tooltips: [true, true],
                range: {
                    'min': [2000],
                    'max': [10000]
                }
            });
        }
    }
}
</script>
<style lang="">

</style>
