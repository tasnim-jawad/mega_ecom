<template>
    <SingleVarient v-for="varient in varients" :key="varient.id" :varient="varient"></SingleVarient>
</template>
<script>
import axios from 'axios';
import SingleVarient from './SingleVarient.vue';
export default {
    components: { SingleVarient },
    data: () => ({
        varients: [],
    }),
    created: function () {
        this.get_varients();
    },
    methods: {
        get_varients: async function () {
            let res = await axios.get('/api/v1/varients');
            let data = res.data;
            this.varients = data;
        },
        toggle_list: function () {
            $(this.$refs.items).slideToggle();
        }
    }
}
</script>
<style lang="">

</style>
