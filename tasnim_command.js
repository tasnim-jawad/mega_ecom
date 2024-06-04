/*
    location management
        Country [name:string,country_code:string,cuntry_short_code:string,flag_url:string]
        StateDivision [country_id:bigint,name:string]
        District [country_id:bigint,state_division_id:bigint,name:string]
        Thana [country_id:bigint,district_id:bigint,name:string,post_office:string,post_code:string]
        City [country_id:bigint,state_division_id:bigint,thana_id:bigint,city_id:bigint,name:string]
 */

