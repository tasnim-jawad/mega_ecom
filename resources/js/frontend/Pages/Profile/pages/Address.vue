<template>
    <ProfileLayout :bread_cumb="bread_cumb">
        <div class="dashboard">
            <div class="page-title">
                <h2>
                    Edit Address
                </h2>
            </div>
            <div class="box-account box-info">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group required">
                        <label for="input-address">Address</label>
                        <input type="text" name="address" v-model="form.address" placeholder="Address" id="input-address"
                            class="form-control" />
                    </div>
                    <div class="form-group required">
                        <label for="input-country">Country</label>
                        <select name="country_id" id="input-country" class="form-control">
                            <option value=""> --- Please Select --- </option>
                            <option selected value="216">Bangladesh</option>
                        </select>
                    </div>
                    <div class="form-group required">
                        <label for="input-division">Division</label>
                        <select name="division_id" id="input-division" class="form-control" v-model="division_id">
                            <option value=""> --- Please Select --- </option>
                            <option v-for="(division,index) in divisions" :key="index" :value="division.id">{{ division.name }}</option>
                            <!-- <option value="216">borishal</option>
                            <option value="216">khulna</option> -->
                        </select>
                    </div>
                    <div class="form-group required">
                        <label for="input-district">District</label>
                        <select name="district_id" id="input-district" class="form-control">
                            <option value=""> --- Please Select --- </option>
                            <option value="216">norshingdi</option>
                            <option value="216">belkuchi</option>
                            <option value="216">jamalpur</option>
                        </select>
                    </div>

                    <div class="form-group required">
                        <label for="input-station">Station</label>
                        <select name="station_id" id="input-station" class="form-control">
                            <option value=""> --- Please Select --- </option>
                            <option value="322"> khilgaon </option>
                            <option value="323"> kafrul</option>
                            <option value="324"> mirpur</option>
                            <option value="4231"> khagrachori</option>
                            <option value="321">Chittagong City</option>
                            <option value="4233">Gazipur City</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Continue</button>
                </form>
            </div>
        </div>
    </ProfileLayout>
</template>

<script>
import axios from "axios";
import ProfileLayout from "../shared/ProfileLayout.vue";
import { useForm } from '@inertiajs/vue3'
export default {
    components: { ProfileLayout },
    props:{
        user_address:Object,
    },
    data: ()=>({
        bread_cumb: [
            {
                title: 'profile',
                url: '/profile',
                active: false,
            },
            {
                title: 'address',
                url: '/profile/address',
                active: true,
            },
        ],
        divisions:null,
        districts:null,
        stations:null,

        division_id:null,

        form: useForm({
            address: null,
            country_id: null,
            division_id: null,
            district_id: null,
            station_id: null,
        })
    }),
    created(){
        console.log(this.user_address);
        this.form.reset()
        for (const key in this.user_address) {
            if (Object.hasOwnProperty.call(this.user_address, key)) {
                const element = this.user_address[key];
                this.form[key] = element
            }
        }

        this.all_division();
        
    },
    watch:{
        division_id:function(divisionId){
            this.get_district_by_division_id(divisionId);
        } 
    },
    methods:{
        all_division:async function(){
            let response =await axios.get('/api/v1/state-divisions', {
                    params: {
                        sort_by_col: 'id',
                        sort_type: 'asc',
                        status: 'active',
                        fields: ['id', 'name'],
                        get_all:1,
                    }
                })
            this.divisions = response.data.data
        },
        get_district_by_division_id:async function(division_id){
            let response =await axios.get(`/api/v1/get-district-by-division-id/${division_id}`, {
                    params: {
                        sort_by_col: 'id',
                        sort_type: 'asc',
                        status: 'active',
                        fields: ['id', 'name']
                    }
                })

            this.districts = response.data.data    
        }
    }
};
</script>

<style></style>
