/*
    location management
        Country [name:string,country_code:string,country_short_code:string,flag_url:string]
        StateDivision [country_id:bigint,name:string]
        District [country_id:bigint,state_division_id:bigint,name:string]
        Station [country_id:bigint,district_id:bigint,name:string,post_office:string,post_code:string]
 */

