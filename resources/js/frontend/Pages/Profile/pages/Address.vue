<template>
    <ProfileLayout :bread_cumb="bread_cumb">
        <div class="dashboard">
            <div class="page-title">
                <h2>
                    Edit Address
                </h2>
            </div>
            <div class="box-account box-info">
                <form action="" method="post" @submit.prevent="edit_address" enctype="multipart/form-data" class="form-horizontal">
                    <input type="text" name="id" :value="form.id" class="d-none" />
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
                            <option v-for="(division,index) in divisions" :key="index" 
                                        :value="division.id"
                                        :selected="division.id == form.division_id" >{{ division.name }}</option>
                        </select>
                    </div>
                    <div class="form-group required">
                        <label for="input-district">District</label>
                        <select name="district_id" id="input-district" class="form-control" v-model="district_id" :disabled="isSelectDistrictDisabled">
                            <option value=""> --- Please Select --- </option>
                            <option v-for="(district,index) in districts" :key="index" 
                                        :value="district.id"
                                        :selected="district.id == form.district_id">{{ district.name }}</option>
                        </select>
                    </div>

                    <div class="form-group required">
                        <label for="input-station">Station</label>
                        <select name="station_id" id="input-station" class="form-control" v-model="form.station_id" :disabled="isSelectStationDisabled">
                            <option value=""> --- Please Select --- </option>
                            <option v-for="(station,index) in stations" :key="index" 
                                        :value="station.id"
                                        :selected="station.id == form.station_id">{{ station.name }}</option>
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
        isSelectDistrictDisabled:true,
        isSelectStationDisabled:true,
        divisions:null,
        districts:null,
        stations:null,

        division_id:null,
        district_id:null,

        form: useForm({
            id:null,
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
        this.division_id = this.form.division_id;
        this.district_id = this.form.district_id;
        // this.station_id = this.form.station_id;
    },
    watch:{
        division_id:function(divisionId){
            this.get_district_by_division_id(divisionId);
        },
        district_id:function(districtId){
            this.get_station_by_district_id(districtId);
        } 
    },
    methods:{
        edit_address: function () {
            this.form.clearErrors();
            this.form.division_id = this.division_id;
            this.form.district_id = this.district_id;
            // this.form.station_id = this.station_id
            this.form.post('/profile/edit-address');
        },

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

            this.districts = response.data.data;
            this.isSelectDistrictDisabled = false;
        },
        get_station_by_district_id:async function(district_id){
            let response =await axios.get(`/api/v1/get-station-by-district-id/${district_id}`, {
                    params: {
                        sort_by_col: 'id',
                        sort_type: 'asc',
                        status: 'active',
                        fields: ['id', 'name']
                    }
                })
            this.stations = response.data.data;
            this.isSelectStationDisabled = false;
        }
    }
};
</script>

<style></style>
