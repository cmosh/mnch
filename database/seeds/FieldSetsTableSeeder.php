<?php

use Illuminate\Database\Seeder;

class FieldSetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('field_sets')->delete();
        
        \DB::table('field_sets')->insert(array (
            0 => 
            array (
                'field_setID' => 'Chs100,000IU',
                'field_setName' => '100,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'field_setID' => 'Chs100000IU',
                'field_setName' => '100,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'field_setID' => 'Chs120mg',
                'field_setName' => '120mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'field_setID' => 'Chs125mg/5ml',
                'field_setName' => '125mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'field_setID' => 'Chs125mg5ml',
                'field_setName' => '125mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
            'field_setID' => 'Chs1sachet(500ml)',
            'field_setName' => '1sachet(500ml)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'field_setID' => 'Chs1sachet500ml',
            'field_setName' => '1sachet(500ml)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'field_setID' => 'Chs200,000IU',
                'field_setName' => '200,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'field_setID' => 'Chs200000IU',
                'field_setName' => '200,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'field_setID' => 'Chs200mg/5ml',
                'field_setName' => '200mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'field_setID' => 'Chs200mg5ml',
                'field_setName' => '200mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'field_setID' => 'Chs2012_2013_2014_2015',
                'field_setName' => '2012_2013_2014_2015',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
            'field_setID' => 'Chs20mg(numberofstrips,1Strip=10tablets)',
            'field_setName' => '20mg(numberofstrips,1Strip=10tablets)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'field_setID' => 'Chs20mg+120mg',
                'field_setName' => '20mg+120mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'field_setID' => 'Chs20mg120mg',
                'field_setName' => '20mg+120mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'field_setID' => 'Chs20mgnumberofstrips1Strip10tablets',
            'field_setName' => '20mg(numberofstrips,1Strip=10tablets)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'field_setID' => 'Chs240mg/5ml',
                'field_setName' => '240mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'field_setID' => 'Chs240mg5ml',
                'field_setName' => '240mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'field_setID' => 'Chs300mg/lmlin2mlamp.',
                'field_setName' => '300mg/lmlin2mlamp.',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'field_setID' => 'Chs300mglmlin2mlamp.',
                'field_setName' => '300mg/lmlin2mlamp.',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
            'field_setID' => 'Chs4sachets(SOOml)ofORS&10tabletsofZinc',
            'field_setName' => '4sachets(SOOml)ofORS&10tabletsofZinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'field_setID' => 'Chs4sachetsSOOmlofORS10tabletsofZinc',
            'field_setName' => '4sachets(SOOml)ofORS&10tabletsofZinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'field_setID' => 'Chs50,000IU',
                'field_setName' => '50,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'field_setID' => 'Chs50000IU',
                'field_setName' => '50,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'field_setID' => 'Chsactive_CHEWS',
                'field_setName' => 'active_CHEWS',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'field_setID' => 'Chsactive_CHEWS_trained_in_ICCM',
                'field_setName' => 'active_CHEWS_trained_in_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'field_setID' => 'Chsactive_CHVs',
                'field_setName' => 'active_CHVs',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'field_setID' => 'Chsactive_CHVs_trained_on_ICCM',
                'field_setName' => 'active_CHVs_trained_on_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'field_setID' => 'ChsAL',
                'field_setName' => 'AL',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'field_setID' => 'Chsapr',
                'field_setName' => 'apr',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'field_setID' => 'Chsaredrugsavailavle',
                'field_setName' => 'aredrugsavailavle',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
            'field_setID' => 'ChsArtemether+Leumefantrine(AL)',
            'field_setName' => 'Artemether+Leumefantrine(AL)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'field_setID' => 'ChsArtemetherLeumefantrineAL',
            'field_setName' => 'Artemether+Leumefantrine(AL)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'field_setID' => 'ChsArtesunateInjection',
                'field_setName' => 'ArtesunateInjection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'field_setID' => 'Chsaspect',
                'field_setName' => 'Aspect',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'field_setID' => 'Chsaug',
                'field_setName' => 'aug',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'field_setID' => 'ChsAvailability',
                'field_setName' => 'Availability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'field_setID' => 'ChsAvailable_Not_Available',
                'field_setName' => 'Available_Not_Available',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'field_setID' => 'Chsblank',
                'field_setName' => 'blank',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'field_setID' => 'Chscases_treated_with_zinc_and_ors',
                'field_setName' => 'cases_treated_with_zinc_and_ors',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'field_setID' => 'Chscentral/county_government',
                'field_setName' => 'central/county_government',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'field_setID' => 'Chscentralcounty_government',
                'field_setName' => 'central/county_government',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'field_setID' => 'Chsclinical_satff_single_label',
                'field_setName' => 'clinical staff',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'field_setID' => 'Chscommodity_name',
                'field_setName' => 'commodity_name',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'field_setID' => 'Chscommodity_unit',
                'field_setName' => 'commodity_unit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'field_setID' => 'Chscommunity_deworming_cases',
                'field_setName' => 'Chscommunity_deworming_cases',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'field_setID' => 'Chscommunity_malaria_cases',
                'field_setName' => 'Chscommunity_malaria_cases',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'field_setID' => 'Chscommunity_pneumonia_cases',
                'field_setName' => 'Chscommunity_pneumonia_cases',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'field_setID' => 'Chscommunity_strategy',
                'field_setName' => 'community_strategy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'field_setID' => 'Chscommunity_units_incentives',
                'field_setName' => 'Chscommunity_units_incentives',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'field_setID' => 'Chscommunity_units_regularlysupervised',
                'field_setName' => 'Chscommunity_units_regularlysupervised',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'field_setID' => 'Chscommunity_units_trained_in_ICCM',
                'field_setName' => 'community_units_trained_in_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'field_setID' => 'Chsdec',
                'field_setName' => 'dec',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'field_setID' => 'Chsdesignatedlocationfororal',
                'field_setName' => 'designatedlocationfororal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'field_setID' => 'Chsdesignated_location_for_ORT',
                'field_setName' => 'designated location for ORT',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'field_setID' => 'Chsdiarrhoea_management',
                'field_setName' => 'diarrhoea_management',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'field_setID' => 'ChsDisposableSyringes',
                'field_setName' => 'DisposableSyringes',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'field_setID' => 'Chsdoctor_label',
                'field_setName' => 'doctor single',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'field_setID' => 'Chsdvd_player',
                'field_setName' => 'dvd_player',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'field_setID' => 'Chseid',
                'field_setName' => 'eid',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'field_setID' => 'Chselectricity',
                'field_setName' => 'electricity',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'field_setID' => 'Chsfacility_design_location',
                'field_setName' => 'facility_design_location',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'field_setID' => 'Chsfeb',
                'field_setName' => 'feb',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'field_setID' => 'ChsFever',
                'field_setName' => 'Fever',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'field_setID' => 'Chsfullspan_no_diarrhoea',
                'field_setName' => 'fullspan_no_diarrhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'field_setID' => 'Chsgen_opd_paed_opd_mch',
                'field_setName' => 'gen_opd_paed_opd_mch',
                'type' => 'coolmultiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'field_setID' => 'Chsiccm_tool',
                'field_setName' => 'iccm_tool',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'field_setID' => 'Chsimci_case',
                'field_setName' => 'imci_case',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'field_setID' => 'ChsInjectionQuinine',
                'field_setName' => 'InjectionQuinine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'field_setID' => 'ChsInsulinSyringes',
                'field_setName' => 'InsulinSyringes',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'field_setID' => 'ChsIVStarterKit',
                'field_setName' => 'IVStarterKit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'field_setID' => 'Chsjan',
                'field_setName' => 'jan',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'field_setID' => 'Chsjul',
                'field_setName' => 'jul',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'field_setID' => 'Chsjun',
                'field_setName' => 'jun',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'field_setID' => 'Chslabelless_number_box',
                'field_setName' => 'labelless_number_box',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'field_setID' => 'Chslabelless_text_box',
                'field_setName' => 'labelless_text_box',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'field_setID' => 'ChsLocation_of_availability',
                'field_setName' => 'Location_of_availability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'field_setID' => 'Chslocation_of_availability_radios',
                'field_setName' => 'location_of_availability',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
            'field_setID' => 'ChsLowOsmolarityOralRehydrationSalts(ORS)',
            'field_setName' => 'LowOsmolarityOralRehydrationSalts(ORS)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'field_setID' => 'ChsLowOsmolarityOralRehydrationSaltsORS',
            'field_setName' => 'LowOsmolarityOralRehydrationSalts(ORS)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'field_setID' => 'Chsmainsupplier',
                'field_setName' => 'mainsupplier',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'field_setID' => 'Chsmainsupplier_resources',
                'field_setName' => 'mainsupplier_resources',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'field_setID' => 'Chsmain_reason_for_unavailability',
                'field_setName' => 'main_reason_for_unavailability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'field_setID' => 'Chsmar',
                'field_setName' => 'mar',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'field_setID' => 'Chsmay',
                'field_setName' => 'may',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'field_setID' => 'ChsMCH',
                'field_setName' => '',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'field_setID' => 'ChsMCH_US_OPD_Ward',
                'field_setName' => 'MCH_US_OPD_Ward',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'field_setID' => 'Chsmother_child_booklet',
                'field_setName' => 'mother_child_booklet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'field_setID' => 'ChsNebulizer',
                'field_setName' => 'Nebulizer',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'field_setID' => 'ChsNGTube',
                'field_setName' => 'NGTube',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'field_setID' => 'ChsNon_Diarrhoea',
                'field_setName' => 'Non_Diarrhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'field_setID' => 'Chsnot_applicable',
                'field_setName' => 'not_applicable',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'field_setID' => 'Chsnov',
                'field_setName' => 'nov',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'field_setID' => 'ChsNo_Treatment',
                'field_setName' => 'No_Treatment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'field_setID' => 'Chsnurse_label',
                'field_setName' => 'nurse single',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'field_setID' => 'Chsoct',
                'field_setName' => 'oct',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'field_setID' => 'ChsOPD_MCH_USClinic_Ward_Other',
                'field_setName' => 'OPD_MCH_USClinic_Ward_Other',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'field_setID' => 'Chsordered_notordered_expired',
                'field_setName' => 'ordered_notordered_expired',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'field_setID' => 'ChsORS&ZincCo-pack',
                'field_setName' => 'ORS&ZincCo-pack',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'field_setID' => 'ChsORS_Zinc',
                'field_setName' => 'ORS_Zinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'field_setID' => 'Chsort',
                'field_setName' => 'ort',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
            'field_setID' => 'Chsort (moh)',
            'field_setName' => 'ort (moh)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'field_setID' => 'Chsort moh',
            'field_setName' => 'ort (moh)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'field_setID' => 'ChsORTCorner',
                'field_setName' => 'ORTCorner',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'field_setID' => 'ChsORTCorner2',
                'field_setName' => 'ORTCorner2',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'field_setID' => 'Chsortuptodate',
                'field_setName' => 'ortuptodate',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'field_setID' => 'Chsother',
                'field_setName' => 'other',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'field_setID' => 'ChsOthers',
                'field_setName' => 'Others',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'field_setID' => 'Chsown_initiative',
                'field_setName' => 'own_initiative',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'field_setID' => 'Chspartner',
                'field_setName' => 'partner',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'field_setID' => 'ChsPneumonia',
                'field_setName' => 'Pneumonia',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'field_setID' => 'Chsprivately_supplied',
                'field_setName' => 'privately_supplied',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'field_setID' => 'Chsquestion_label',
                'field_setName' => 'question_label',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'field_setID' => 'Chsquestion_where_sick_children_seen',
                'field_setName' => 'question_where_sick_children_seen',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'field_setID' => 'Chsq_10_others',
                'field_setName' => 'q_10_others',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'field_setID' => 'Chsq_11_totalort',
                'field_setName' => 'q_11_totalort',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'field_setID' => 'Chsq_1_total',
                'field_setName' => 'q_1_total',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'field_setID' => 'Chsq_2_orszinc',
                'field_setName' => 'q_2_orszinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'field_setID' => 'Chsq_3_ors',
                'field_setName' => 'q_3_ors',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'field_setID' => 'Chsq_4_zinc',
                'field_setName' => 'q_4_zinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'field_setID' => 'Chsq_5_antibiotics',
                'field_setName' => 'q_5_antibiotics',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'field_setID' => 'Chsq_6_others',
                'field_setName' => 'q_6_others',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'field_setID' => 'Chsq_7_notreat',
                'field_setName' => 'q_7_notreat',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'field_setID' => 'Chsq_8_fever',
                'field_setName' => 'q_8_fever',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'field_setID' => 'Chsq_9_pneumonia',
                'field_setName' => 'q_9_pneumonia',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'field_setID' => 'Chsq_a_upadted charts',
                'field_setName' => 'q_upadted charts',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'field_setID' => 'Chsq_b_ort',
                'field_setName' => 'q_b_ort',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'field_setID' => 'Chsq_c_iccm',
                'field_setName' => 'q_c_iccm',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'field_setID' => 'Chsq_d_protocol',
                'field_setName' => 'q_d_protocol',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'field_setID' => 'Chsq_e_diarhoea',
                'field_setName' => 'q_e_diarhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'field_setID' => 'Chsq_f_iec',
                'field_setName' => 'q_f_iec',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'field_setID' => 'Chsq_g_art',
                'field_setName' => 'q_g_art',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'field_setID' => 'Chsq_h_algorithm',
                'field_setName' => 'q_h_algorithm',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'field_setID' => 'Chsrco_label',
                'field_setName' => 'R.C.O single',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'field_setID' => 'Chsref_slip',
                'field_setName' => 'ref_slip',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'field_setID' => 'Chsreg',
                'field_setName' => 'reg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'field_setID' => 'ChsRESOMAL',
                'field_setName' => 'RESOMAL',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'field_setID' => 'ChsResource_Name',
                'field_setName' => 'Resource_Name',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'field_setID' => 'Chsresponse',
                'field_setName' => 'Response',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'field_setID' => 'ChsRotaVirusVaccine',
                'field_setName' => 'RotaVirusVaccine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'field_setID' => 'Chssafe_water',
                'field_setName' => 'safe_water',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'field_setID' => 'Chssep',
                'field_setName' => 'sep',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'field_setID' => 'ChsSpacer',
                'field_setName' => 'Spacer',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'field_setID' => 'Chsstaff_EID_sampling',
                'field_setName' => 'staff_EID_sampling',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'field_setID' => 'Chsstaff_IMCI_work_CH_UNIT',
                'field_setName' => 'staff_IMCI_work_CH_UNIT',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'field_setID' => 'Chsstaff_pneumonia_diarrhoea_under_5',
                'field_setName' => 'staff_pneumonia_diarrhoea_under_5',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'field_setID' => 'Chsstaff_trained_Diarrhoea',
                'field_setName' => 'staff trained diarrhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'field_setID' => 'Chsstaff_trained_ICCM',
                'field_setName' => 'staff_trained_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'field_setID' => 'Chsstaff_trained_IMCI',
                'field_setName' => 'staff_trained_IMCI',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'field_setID' => 'ChsSuctionmachine',
                'field_setName' => 'Suctionmachine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'field_setID' => 'Chssuppliers',
                'field_setName' => 'suppliers',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'field_setID' => 'Chssuppliesname',
                'field_setName' => 'suppliername',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'field_setID' => 'ChsSyrupAmoxicillin',
                'field_setName' => 'SyrupAmoxicillin',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'field_setID' => 'ChsSyrupCotrimoxazole',
                'field_setName' => 'SyrupCotrimoxazole',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'field_setID' => 'ChsSyrupMetronidazole',
                'field_setName' => 'SyrupMetronidazole',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'field_setID' => 'Chstabletamoxi',
                'field_setName' => 'tabletamoxi',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'field_setID' => 'Chstabletmetro',
                'field_setName' => 'tabletmetro',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'field_setID' => 'ChsTabletPaedCotrimoxazole',
                'field_setName' => 'TabletPaedCotrimoxazole',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'field_setID' => 'Chstetxbox_nolabel',
                'field_setName' => 'tetxbox_nolabel',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'field_setID' => 'Chstotal',
                'field_setName' => 'total',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'field_setID' => 'ChsTotalCasesinORTCornerRegister',
                'field_setName' => 'Total Cases in ORT Corner Register',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'field_setID' => 'Chstotal_avail_duty',
                'field_setName' => 'total_avail_duty',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'field_setID' => 'Chstotal_in_facility',
                'field_setName' => 'Total in facility',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'field_setID' => 'ChsTotal_number_of_cases_documented',
                'field_setName' => 'Total number of cases documented in ORT corner register',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'field_setID' => 'ChsTotal_Number_of_Diarrhoea_Cases',
                'field_setName' => 'Total Number of Diarrhoea Cases',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'field_setID' => 'ChsTreatment_with_Antibiotics',
                'field_setName' => 'Treatment_with_Antibiotics',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'field_setID' => 'Chstreatment_with_ORS',
                'field_setName' => 'treatment_with_ORS',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'field_setID' => 'ChsTreatment_with_ORS+Zinc',
                'field_setName' => 'Treatment with ORS+ Zinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'field_setID' => 'ChsTreatment_with_others',
                'field_setName' => 'Treatment_with_others',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'field_setID' => 'Chstreatment_with_Zinc',
                'field_setName' => 'treatment_with_Zinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'field_setID' => 'Chstv',
                'field_setName' => 'tv',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'field_setID' => 'Chsunit200mg',
                'field_setName' => 'unit200mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'field_setID' => 'Chsunit250mg',
                'field_setName' => 'unit250mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'field_setID' => 'Chsunits_established',
                'field_setName' => 'units_established',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'field_setID' => 'ChsUS_Clinic',
                'field_setName' => 'US_Clinic',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'field_setID' => 'Chsverifyort',
                'field_setName' => 'verifyort',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'field_setID' => 'ChsVitaminA',
                'field_setName' => 'VitaminA',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'field_setID' => 'Chsward',
                'field_setName' => 'ward',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'field_setID' => 'Chsyearchoice2014',
                'field_setName' => 'yearchoice2014',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'field_setID' => 'Chsyear_ch',
                'field_setName' => '2012_2013_2014_2015',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'field_setID' => 'Chsyear_choice',
                'field_setName' => 'year_choice',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'field_setID' => 'Chsyear_choice2013',
                'field_setName' => 'year_choice2013',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'field_setID' => 'Chsyear_choice2015',
                'field_setName' => 'year_choice2015',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'field_setID' => 'Chsyes_no',
                'field_setName' => 'Yes_No',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'field_setID' => 'ChsZincSulphate',
                'field_setName' => 'ZincSulphate',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'field_setID' => 'chv1100mg',
                'field_setName' => '100mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'field_setID' => 'chv1100ml',
                'field_setName' => '100ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'field_setID' => 'chv110mg_2ml',
                'field_setName' => '10mg/2ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'field_setID' => 'chv1140mg',
                'field_setName' => '140mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'field_setID' => 'chv1150mg_2ml',
                'field_setName' => '150mg/2ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'field_setID' => 'chv1200mg_5ml_oral_liquid',
                'field_setName' => '200mg_5ml_oral_liquid',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'field_setID' => 'chv1200mg_paeds',
                'field_setName' => '200mg_paeds',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'field_setID' => 'chv1300mg',
                'field_setName' => '300mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'field_setID' => 'chv1300mg_2ml',
                'field_setName' => '300mg/2ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'field_setID' => 'chv1480mg',
                'field_setName' => '480mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'field_setID' => 'chv14strips_of_ORS',
                'field_setName' => '4 strips of ORS + 10 tablets of zinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'field_setID' => 'chv1500mg',
                'field_setName' => '500mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'field_setID' => 'chv1500mg_as_HCL_Tablet',
                'field_setName' => '500mg_as_HCL_Tablet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'field_setID' => 'chv1500ml',
                'field_setName' => '500ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'field_setID' => 'chv1after_2010',
                'field_setName' => 'after2010',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'field_setID' => 'chv1after_2013',
                'field_setName' => 'after2013',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'field_setID' => 'chv1after_2014',
                'field_setName' => 'after2014',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'field_setID' => 'chv1anaemia',
                'field_setName' => 'Anaemia',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'field_setID' => 'chv1april_label',
                'field_setName' => 'AprilLabel',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'field_setID' => 'chv1april_numbox',
                'field_setName' => 'AprilNumberBox',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'field_setID' => 'chv1art_guidelines',
                'field_setName' => 'artGuidelines',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'field_setID' => 'chv1assessor_response',
                'field_setName' => 'assessorResponse',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'field_setID' => 'chv1available_quan',
                'field_setName' => 'available_quan',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'field_setID' => 'chv1Before_2010',
                'field_setName' => 'before2010',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'field_setID' => 'chv1before_2013',
                'field_setName' => 'before2013',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'field_setID' => 'chv1before_2014',
                'field_setName' => 'before2014',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'field_setID' => 'chv1bloodtest_findings',
                'field_setName' => 'malariaBloodTest',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'field_setID' => 'chv1bundles_of_zincOrs',
                'field_setName' => 'bundles_of_zincOrs',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'field_setID' => 'chv1bundling_indicate',
                'field_setName' => 'Bundling:Indicated The Availability, Location…',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'field_setID' => 'chv1bundling_material',
                'field_setName' => 'Bundling Material',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'field_setID' => 'chv1care_development',
                'field_setName' => 'careForDevelopment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'field_setID' => 'chv1centimeter_numbox',
                'field_setName' => 'centimeter_numbox',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'field_setID' => 'chv1chair_seat_caregiver',
                'field_setName' => 'ChairSeatForCareGiver',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'field_setID' => 'chv1chair_table_healthcare',
                'field_setName' => 'chairAndTableForHealthcareProvider',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'field_setID' => 'chv1checked_palmar_pallor',
                'field_setName' => 'checkedForPalmarPallor',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'field_setID' => 'chv1checked_severe_wasting',
                'field_setName' => 'checkForSevereWasting',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'field_setID' => 'chv1check_neck_stiff',
                'field_setName' => 'neckStiff',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'field_setID' => 'chv1childs_feeding',
                'field_setName' => 'child\'sFeeding',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'field_setID' => 'chv1child_convultions',
                'field_setName' => 'hasChildHadConvulsions',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'field_setID' => 'chv1child_exposed_hiv',
                'field_setName' => 'ifChildIsHIVExposed,wasHIVTestDone?',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'field_setID' => 'chv1child_now_convulsing',
                'field_setName' => 'isChildConvulsingNow',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'field_setID' => 'chv1child_vomitting',
                'field_setName' => 'isChildVomittingEverything',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'field_setID' => 'chv1cholramphenicol',
                'field_setName' => 'cholramphenicolEyeOintment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'field_setID' => 'chv1ciprofloxacin',
                'field_setName' => 'ciprofloxacin',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'field_setID' => 'chv1classification',
                'field_setName' => 'classification',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'field_setID' => 'chv1classification_done',
                'field_setName' => 'classifiactionDone',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'field_setID' => 'chv1confirmed',
                'field_setName' => 'confirmed',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'field_setID' => 'chv1correct_classification',
                'field_setName' => 'correctClassification',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'field_setID' => 'chv1correct_diarrhoea_class',
                'field_setName' => 'correctlyAssessesAndClassifiesDiarrhoeaAndDysentry',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'field_setID' => 'chv1coughing_diff_breath',
                'field_setName' => 'coughingDifficultyBreathing',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'field_setID' => 'chv1cough_breath_counts',
                'field_setName' => 'breathCountsTaken',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'field_setID' => 'chv1cough_chest_indrawing',
                'field_setName' => 'chestIndrawing',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'field_setID' => 'chv1cough_how_long',
                'field_setName' => 'AskHowLongChildHadCough',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'field_setID' => 'chv1cough_stridor',
                'field_setName' => 'lookedAndListenedFoeStridor',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'field_setID' => 'chv1cough_wheez',
                'field_setName' => 'LookedAndListenedForWheez',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'field_setID' => 'chv1data_not_documented',
                'field_setName' => 'data_not_documented',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'field_setID' => 'chv1days_findings',
                'field_setName' => 'daysFindings',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'field_setID' => 'chv1degrees_findings',
                'field_setName' => 'degreesFindings',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'field_setID' => 'chv1dehydration_findings',
                'field_setName' => 'dehydrationFindingsdiarrhoea',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'field_setID' => 'chv1deworming',
                'field_setName' => 'deworming',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'field_setID' => 'chv1deworming_needed',
                'field_setName' => 'dewormingNeededNotNeeded',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'field_setID' => 'chv1diarrhoea_duration',
                'field_setName' => 'askAboutDiarrhoeaDuration',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'field_setID' => 'chv1diarrhoea_eyes_sunken',
                'field_setName' => 'sunkenEyes',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'field_setID' => 'chv1diarrhoea_findings',
                'field_setName' => 'diarrhoeaFindings',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'field_setID' => 'chv1diarrhoea_skin_pinch',
                'field_setName' => 'skinPinch',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'field_setID' => 'chv1diarrhoea_stool_blood',
                'field_setName' => 'bloodInStool',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'field_setID' => 'chv1diarrhoea_symptom',
                'field_setName' => 'diarrhoeaSymptom',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'field_setID' => 'chv1diarrhoea_total',
                'field_setName' => 'diarrhoeaTotal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'field_setID' => 'chv1discharge_duration',
                'field_setName' => 'askDurationOfDischarge',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'field_setID' => 'chv1document_cases_3mnths',
            'field_setName' => '(C)  Document cases seen over 3 months',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'field_setID' => 'chv1drink_findings_diarr',
                'field_setName' => 'drinksEagerly',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'field_setID' => 'chv1dysentry',
                'field_setName' => 'dysentry',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'field_setID' => 'chv1earInfect_classification',
                'field_setName' => 'NoEarInfection',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'field_setID' => 'chv1earInfect_earPain',
                'field_setName' => 'askIfThereIsAnyEarPain',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'field_setID' => 'chv1early_infant_algorithm',
                'field_setName' => 'early',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'field_setID' => 'chv1ear_discharge',
                'field_setName' => 'askIfThereIsanEarDischarge',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'field_setID' => 'chv1ear_infection',
                'field_setName' => 'earInfection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'field_setID' => 'chv1eid_Collection_kits',
                'field_setName' => 'EIDCollectionKits',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'field_setID' => 'chv1enough_Space_patient',
                'field_setName' => 'enoughSpaceToSeePatient',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'field_setID' => 'chv1exclus_breastfeeding',
                'field_setName' => 'exclusiveBreastfeeding',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'field_setID' => 'chv1expiring_date',
                'field_setName' => 'expiring_date',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'field_setID' => 'chv1feverclassif_findings',
                'field_setName' => 'FeverNoMalaria',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'field_setID' => 'chv1fever_duration',
                'field_setName' => 'feverDuration',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'field_setID' => 'chv1fever_symptom',
                'field_setName' => 'feverSymptom',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'field_setID' => 'chv1fever_temp_take',
                'field_setName' => 'feverTemperatureTaken',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'field_setID' => 'chv1findings',
                'field_setName' => 'findings',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'field_setID' => 'chv1gention_violet',
                'field_setName' => 'gentionViolet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'field_setID' => 'chv1hcw_response',
                'field_setName' => 'hcwResponse',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'field_setID' => 'chv1hiv_exposure',
                'field_setName' => 'hivExposure/Infection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'field_setID' => 'chv1hiv_pos_neg',
                'field_setName' => 'hivPositiveNegative',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'field_setID' => 'chv1hiv_rapid_test',
                'field_setName' => 'HIVRapidTestKits',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'field_setID' => 'chv1iccm_tools',
                'field_setName' => 'iccmTools',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'field_setID' => 'chv1iec_materials',
                'field_setName' => 'IECMaterials',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'field_setID' => 'chv1if_yes_Indic_total',
                'field_setName' => 'ifYesIndicateTotal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'field_setID' => 'chv1imci_case_record_form',
                'field_setName' => 'imciCaseRecordingForm',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'field_setID' => 'chv1imci_chart_book',
                'field_setName' => 'imciChartBooklet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'field_setID' => 'chv1immunization_status',
                'field_setName' => 'immunizationStatus/VitaminA',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'field_setID' => 'chv1inability_to_breastfeed',
                'field_setName' => 'inabilityToDrink/Breastfeed',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'field_setID' => 'chv1include_comma_sep',
                'field_setName' => 'includeCommaSeperatedListOfAllTreatments',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'field_setID' => 'chv1inhaler_salbutamol',
                'field_setName' => 'inhalerSalbutamol',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'field_setID' => 'chv1injectionCholarmphenicol',
                'field_setName' => 'injectionCholarmphenicol',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'field_setID' => 'chv1injectionDiazepam',
                'field_setName' => 'injectionDiazepam',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'field_setID' => 'chv1isORT_corner_func',
                'field_setName' => 'Is the ORT Corner functional',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'field_setID' => 'chv1is_there_seating',
                'field_setName' => 'isThereAnyAvailableSeatingAreaForCaregiver',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'field_setID' => 'chv1IV_fluid_norm',
                'field_setName' => 'IV FluidNormalSaline',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'field_setID' => 'chv1IV_fluid_ringer_lact',
                'field_setName' => 'IV FluidRinger Lactate Solution',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'field_setID' => 'chv1june_numbox',
                'field_setName' => 'june_numbox',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'field_setID' => 'chv1lab_staff',
                'field_setName' => 'LabStaff',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'field_setID' => 'chv1lethargy_unconsciousness',
                'field_setName' => 'lethargyAndUnconsciousness',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'field_setID' => 'chv1location_of_availold',
                'field_setName' => 'location_of_availold',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'field_setID' => 'chv1main_challenge_accessing',
                'field_setName' => 'What is the main Challenge accessing data from u5 registers',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'field_setID' => 'chv1malariaTest_notDone',
                'field_setName' => 'malariaTest',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'field_setID' => 'chv1malaria_test',
                'field_setName' => 'malariaTest',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'field_setID' => 'chv1malaria_Total',
                'field_setName' => 'malariaTotal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'field_setID' => 'chv1malnutrition',
                'field_setName' => 'malnutrition',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'field_setID' => 'chv1march_label',
                'field_setName' => 'MarchLabel',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'field_setID' => 'chv1march_numbox',
                'field_setName' => 'MarchNumberBox',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'field_setID' => 'chv1may_label',
                'field_setName' => 'may_label',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'field_setID' => 'chv1may_numbox',
                'field_setName' => 'MayNumberBox',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'field_setID' => 'chv1measles_sign',
                'field_setName' => 'lookForSignsOfMeasles',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
            'field_setID' => 'chv1metronidazole (Flagyl)',
            'field_setName' => 'metronidazole_(Flagyl)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'field_setID' => 'chv1microscope_malaria',
                'field_setName' => 'MicroscopeForMalaria',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'field_setID' => 'chv1mothers_condition',
                'field_setName' => 'mother\'sCondition',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'field_setID' => 'chv1mother_child_blkt',
                'field_setName' => 'MotherChildBooklet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'field_setID' => 'chv1muacTaken_recorded',
                'field_setName' => 'muacTakenAndRecorded',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'field_setID' => 'chv1noBloodtest_findings',
                'field_setName' => 'reasonForNoBloodTest',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'field_setID' => 'chv1not_confirmed',
                'field_setName' => 'notConfirmed',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'field_setID' => 'chv1not_hiv_exposed',
                'field_setName' => 'notHivExposed',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'field_setID' => 'chv1no_classification',
                'field_setName' => 'noClassification',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'field_setID' => 'chv1no_dehydration',
                'field_setName' => 'noDehydration',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'field_setID' => 'chv1num_of_units',
                'field_setName' => 'num_of_units',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'field_setID' => 'chv1oedema_on_feet',
                'field_setName' => 'oedemaOnBothFeet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'field_setID' => 'chv1offer_fluid_drink',
                'field_setName' => 'OfferFluidToDrink',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'field_setID' => 'chv1on_track',
                'field_setName' => 'onTrackNotOnTrack',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'field_setID' => 'chv1ORT_improvised',
                'field_setName' => 'ORTRealized',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'field_setID' => 'chv1ORT_MOH_reg',
            'field_setName' => 'ORTCornerRegister(MOH)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'field_setID' => 'chv1others_total',
                'field_setName' => 'othersTotal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'field_setID' => 'chv1other_conditions',
                'field_setName' => 'otherConditions',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'field_setID' => 'chv1paed_protocol',
                'field_setName' => 'paed_protocol',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'field_setID' => 'chv1pctg0_25',
                'field_setName' => '0.25%',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'field_setID' => 'chv1pctg10dextrose',
                'field_setName' => '10% Dextrose',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'field_setID' => 'chv1per_min_findings',
                'field_setName' => 'perMinuteFindings',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'field_setID' => 'chv1pharm_staff',
                'field_setName' => 'Pharmaceutical Staff',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'field_setID' => 'chv1pmtct_guidelines',
                'field_setName' => 'pmtctGuidelines',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'field_setID' => 'chv1pneumonia',
                'field_setName' => 'pneumonia',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'field_setID' => 'chv1pneumonia_findings',
                'field_setName' => 'nopneumonia',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'field_setID' => 'chv1pneumonia_total',
                'field_setName' => 'pneumoniaTotal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'field_setID' => 'chv1present_not_present',
                'field_setName' => 'present_not_present',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'field_setID' => 'chv1pus_Draining',
                'field_setName' => 'pusDrainingFromEar',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'field_setID' => 'chv1q_updated_imci_booklet',
                'field_setName' => 'updateIMCIBooklet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'field_setID' => 'chv1q_updated_ORT_corn',
                'field_setName' => 'updatedORTCorner',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'field_setID' => 'chv1rdt_strips_reagent',
                'field_setName' => 'RDTStripsAndReagentForMalaria',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'field_setID' => 'chv1referral_slips',
                'field_setName' => 'referralSlips',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'field_setID' => 'chv1salbutamol',
                'field_setName' => 'salbutamolTab',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'field_setID' => 'chv1service',
                'field_setName' => 'service',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'field_setID' => 'chv1severe_dehydration',
                'field_setName' => 'severeDehydration',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'field_setID' => 'chv1severe_palmar_findings',
                'field_setName' => 'SeverePalmarPallorFindings',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'field_setID' => 'chv1severe_pneumonia',
                'field_setName' => 'severePneumonia',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'field_setID' => 'chv1some_dehydration',
                'field_setName' => 'someDehyrdation',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'field_setID' => 'chv1symptom_below',
                'field_setName' => 'doesChildHaveSymptomBelow',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'field_setID' => 'chv1symptom_label',
                'field_setName' => 'symptomLabel',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'field_setID' => 'chv1syrupErythromocyn',
                'field_setName' => 'syrupErythromocyn',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'field_setID' => 'chv1syrupIron',
                'field_setName' => 'syrupIron',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'field_setID' => 'chv1syrupParacetamol',
                'field_setName' => 'syrupParacetamol',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'field_setID' => 'chv1tabAlbendazole',
                'field_setName' => 'tabAlbendazole',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'field_setID' => 'chv1tabletAmoxicilin',
                'field_setName' => 'tabletAmoxicilin',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'field_setID' => 'chv1tabletCiprofloxacin',
                'field_setName' => 'tabletCiprofloxacin',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'field_setID' => 'chv1tabletCoartem',
                'field_setName' => 'tabletCoartem',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'field_setID' => 'chv1tabletCotrimoxazole',
                'field_setName' => 'tabletCotrimoxazole',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'field_setID' => 'chv1tabletErythromicyn',
                'field_setName' => 'tabletErythromicyn',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'field_setID' => 'chv1tabletIronFolicAcid',
                'field_setName' => 'tabletIronFolicAcid',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'field_setID' => 'chv1tabletQuinine',
                'field_setName' => 'tabletQuinine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'field_setID' => 'chv1tabParacetamol',
                'field_setName' => 'tabParacetamol',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'field_setID' => 'chv1tab_cap_multivitamin',
                'field_setName' => 'Tab/Cap Multivitamin',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'field_setID' => 'chv1tender_swell',
                'field_setName' => 'tenderSwellingBehindEar',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'field_setID' => 'chv1testingSupplies',
                'field_setName' => 'testingSupplies',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'field_setID' => 'chv1tetracycline_eye',
                'field_setName' => 'tetracyclineEyeOintment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'field_setID' => 'chv1tool',
                'field_setName' => 'tool',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'field_setID' => 'chv1total_u5_seen',
                'field_setName' => 'TotalU5SeenInLastMonth',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'field_setID' => 'chv1treatment',
                'field_setName' => 'treatment',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'field_setID' => 'chv1treatment_label',
                'field_setName' => 'treatmentLabel',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'field_setID' => 'chv1ttlmain_supp',
                'field_setName' => 'ttlmain_supp',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'field_setID' => 'chv1under_5_reg',
                'field_setName' => 'under5Register',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'field_setID' => 'chv1updated_iccm',
                'field_setName' => 'updatedICCMGuidelines',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'field_setID' => 'chv1up_to_date',
                'field_setName' => 'upToDateNotUpToDate',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'field_setID' => 'chv1waitingspace',
                'field_setName' => 'waitingSpaceForCaregiverAndChildren',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'field_setID' => 'chv1_main_suppspec',
                'field_setName' => 'main_suppspec',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'field_setID' => 'ch_prev_year',
                'field_setName' => 'ch_prev_year',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'field_setID' => 'cmnh150MG_300MG',
                'field_setName' => '150MG/300MG',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'field_setID' => 'cmnh200',
                'field_setName' => 'cmnh200',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'field_setID' => 'cmnh2ml_val',
                'field_setName' => '2mlVal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'field_setID' => 'cmnh4_pct',
                'field_setName' => '4%',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'field_setID' => 'cmnh5005',
                'field_setName' => 'cmnh5005',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'field_setID' => 'cmnh500mg_100ml',
                'field_setName' => '500mg/100ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'field_setID' => 'cmnh500MG_5ml_syr',
                'field_setName' => '500MG/5mlSyrup',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'field_setID' => 'cmnh5soln',
                'field_setName' => 'cmnh5soln',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'field_setID' => 'cmnhaalocation',
                'field_setName' => 'cmnhaalocation',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'field_setID' => 'cmnhambu_bag_adult',
                'field_setName' => 'ambu_bag_adult',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'field_setID' => 'cmnhavailableqnt',
                'field_setName' => 'cmnhavailableqnt',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'field_setID' => 'cmnhemptyl',
                'field_setName' => 'cmnhemptyl',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'field_setID' => 'cmnhexpirey_date',
                'field_setName' => 'expirey_date',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'field_setID' => 'cmnhexpirydate',
                'field_setName' => 'cmnhexpirydate',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'field_setID' => 'cmnhgentinject',
                'field_setName' => 'cmnhgentinject',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'field_setID' => 'cmnhhivretest',
                'field_setName' => 'cmnhhivretest',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'field_setID' => 'cmnhlafter2010',
                'field_setName' => 'cmnhlafter2010',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'field_setID' => 'cmnhlamivudine_zidovudine',
                'field_setName' => 'Lamivudine/Zidovudine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'field_setID' => 'cmnhlbefore2010',
                'field_setName' => 'cmnhlbefore2010',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'field_setID' => 'cmnhlocation',
                'field_setName' => 'cmnhlocation',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'field_setID' => 'cmnhlocationofavail',
                'field_setName' => 'cmnhlocationofavail',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'field_setID' => 'cmnhmain_supp_spec',
                'field_setName' => 'main_supp_spec',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'field_setID' => 'cmnhno_of_units',
                'field_setName' => 'no_of_units',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'field_setID' => 'cmnhnumberofunits',
                'field_setName' => 'cmnhnumberofunits',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'field_setID' => 'cmnhquantity_label',
                'field_setName' => 'quantityLabel',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'field_setID' => 'cmnhstuff',
                'field_setName' => 'cmnhstuff',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'field_setID' => 'cmnhtotalunitsused',
                'field_setName' => 'cmnhtotalunitsused',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'field_setID' => 'cmnhunavail',
                'field_setName' => 'cmnhunavail',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'field_setID' => 'cmnh_4mg_ml',
                'field_setName' => '4mg/ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'field_setID' => 'cmnh_5grams',
                'field_setName' => '5grams',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'field_setID' => 'cmnh_dexamethasone',
                'field_setName' => 'dexamethasone',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'field_setID' => 'cmnh_magnesium_sulph_im',
                'field_setName' => 'magnesium_sulph_im',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'field_setID' => 'em',
                'field_setName' => 'andfacility',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'field_setID' => 'empty_label',
                'field_setName' => 'empty_label',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'field_setID' => 'mnh100_000IU',
                'field_setName' => '100,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'field_setID' => 'mnh120mg',
                'field_setName' => '120mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'field_setID' => 'mnh125mg_5ml',
                'field_setName' => '125mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'field_setID' => 'mnh1sachet500ml',
            'field_setName' => '1sachet(500ml)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'field_setID' => 'mnh200mg_5ml',
                'field_setName' => '200mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'field_setID' => 'mnh200_000IU',
                'field_setName' => '200,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'field_setID' => 'mnh2012_2013_2014_2015',
                'field_setName' => '2012_2013_2014_2015',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'field_setID' => 'mnh20mg+120mg',
                'field_setName' => '20mg+120mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'field_setID' => 'mnh20mgnumberofstrips_1Strip10tablets',
            'field_setName' => '20mg(numberofstrips,1Strip=10tablets)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'field_setID' => 'mnh240mg_5ml',
                'field_setName' => '240mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'field_setID' => 'mnh300mg_lmlin2mlamp.',
                'field_setName' => '300mg/lmlin2mlamp.',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'field_setID' => 'mnh4sachetsSOOmlofORS&10tabletsofZinc',
            'field_setName' => '4sachets(SOOml)ofORS&10tabletsofZinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'field_setID' => 'mnh50_000IU',
                'field_setName' => '50,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'field_setID' => 'mnhactive_CHEWS',
                'field_setName' => 'active_CHEWS',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'field_setID' => 'mnhactive_CHEWS_trained_in_ICCM',
                'field_setName' => 'active_CHEWS_trained_in_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'field_setID' => 'mnhactive_CHVs',
                'field_setName' => 'active_CHVs',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'field_setID' => 'mnhactive_CHVs_trained_on_ICCM',
                'field_setName' => 'active_CHVs_trained_on_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'field_setID' => 'mnhAL',
                'field_setName' => 'AL',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'field_setID' => 'mnhapr',
                'field_setName' => 'apr',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'field_setID' => 'mnharedrugsavailavle',
                'field_setName' => 'aredrugsavailavle',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'field_setID' => 'mnhArtemether+LeumefantrineAL',
            'field_setName' => 'Artemether+Leumefantrine(AL)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'field_setID' => 'mnhArtesunateInjection',
                'field_setName' => 'ArtesunateInjection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'field_setID' => 'mnhaspect',
                'field_setName' => 'Aspect',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'field_setID' => 'mnhaug',
                'field_setName' => 'aug',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'field_setID' => 'mnhAvailability',
                'field_setName' => 'Availability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'field_setID' => 'mnhAvailable_Not_Available',
                'field_setName' => 'Available_Not_Available',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'field_setID' => 'mnhblank',
                'field_setName' => 'blank',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'field_setID' => 'mnhcases_treated_with_zinc_and_ors',
                'field_setName' => 'cases_treated_with_zinc_and_ors',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'field_setID' => 'mnhcentral_county_government',
                'field_setName' => 'central/county_government',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'field_setID' => 'mnhclinical_satff_single_label',
                'field_setName' => 'clinical staff',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'field_setID' => 'mnhcmb_main_src',
                'field_setName' => 'cmb_main_src',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'field_setID' => 'mnhcmb_main_src_elec',
                'field_setName' => 'cmb_main_src_elec',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'field_setID' => 'mnhcmb_main_supplier',
                'field_setName' => 'cmb_main_supplier',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'field_setID' => 'mnhcmb_prov_waste',
                'field_setName' => 'cmb_prov_waste',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'field_setID' => 'mnhcmb_unavail_dur',
                'field_setName' => 'cmb_unavail_dur',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'field_setID' => 'mnhcmb_unavail_rsn',
                'field_setName' => 'cmb_unavail_rsn',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'field_setID' => 'mnhcombo_prim_challenge',
                'field_setName' => 'combo_prim_challenge',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'field_setID' => 'mnhcommodity_name',
                'field_setName' => 'commodity_name',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'field_setID' => 'mnhcommodity_unit',
                'field_setName' => 'commodity_unit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'field_setID' => 'mnhcommunity_strategy',
                'field_setName' => 'community_strategy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'field_setID' => 'mnhcommunity_units_trained_in_ICCM',
                'field_setName' => 'community_units_trained_in_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'field_setID' => 'mnhconduct_deliveries_label',
                'field_setName' => 'conduct_deliveries_label',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'field_setID' => 'mnhdec',
                'field_setName' => 'dec',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'field_setID' => 'mnhdeliveries_inadequacies_multiple',
                'field_setName' => 'deliveries_inadequacies_multiple',
                'type' => 'coolmultiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'field_setID' => 'mnhdesignatedlocationfororal',
                'field_setName' => 'designatedlocationfororal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'field_setID' => 'mnhdesignated_location_for_ORT',
                'field_setName' => 'designated location for ORT',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'field_setID' => 'mnhdiarrhoea_management',
                'field_setName' => 'diarrhoea_management',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'field_setID' => 'mnhDisposableSyringes',
                'field_setName' => 'DisposableSyringes',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'field_setID' => 'mnhdoctor_label',
                'field_setName' => 'doctor single',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'field_setID' => 'mnhdvd_player',
                'field_setName' => 'dvd_player',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'field_setID' => 'mnheid',
                'field_setName' => 'eid',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'field_setID' => 'mnhelectricity',
                'field_setName' => 'electricity',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'field_setID' => 'mnhfacility_design_location',
                'field_setName' => 'facility_design_location',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'field_setID' => 'mnhfeb',
                'field_setName' => 'feb',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'field_setID' => 'mnhFever',
                'field_setName' => 'Fever',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'field_setID' => 'mnhfullspan_no_diarrhoea',
                'field_setName' => 'fullspan_no_diarrhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'field_setID' => 'mnhgen_opd_paed_opd_mch',
                'field_setName' => 'gen_opd_paed_opd_mch',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'field_setID' => 'mnhiccm_tool',
                'field_setName' => 'iccm_tool',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'field_setID' => 'mnhimci_case',
                'field_setName' => 'imci_case',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'field_setID' => 'mnhInjectionQuinine',
                'field_setName' => 'InjectionQuinine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'field_setID' => 'mnhInsulinSyringes',
                'field_setName' => 'InsulinSyringes',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'field_setID' => 'mnhIVStarterKit',
                'field_setName' => 'IVStarterKit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'field_setID' => 'mnhjan',
                'field_setName' => 'jan',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'field_setID' => 'mnhjul',
                'field_setName' => 'jul',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'field_setID' => 'mnhjun',
                'field_setName' => 'jun',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'field_setID' => 'mnhkeyforsec3',
                'field_setName' => 'mnhkeyforsec3',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'field_setID' => 'mnhlabelless_number_box',
                'field_setName' => 'labelless_number_box',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'field_setID' => 'mnhlabelless_text_box',
                'field_setName' => 'labelless_text_box',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'field_setID' => 'mnhlabels_signal_func',
                'field_setName' => 'labels_signal_func',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'field_setID' => 'mnhlabels_was_conducted',
                'field_setName' => 'labels_was_conducted',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'field_setID' => 'mnhlabel_avail_elec',
                'field_setName' => 'label_avail_elec',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'field_setID' => 'mnhlabel_avail_in_quant',
                'field_setName' => 'label_avail_in_quant',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'field_setID' => 'mnhlabel_commod',
                'field_setName' => 'label_commod',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'field_setID' => 'mnhlabel_commod_av',
                'field_setName' => 'label_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'field_setID' => 'mnhlabel_comm_strategy',
                'field_setName' => 'label_comm_strategy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'field_setID' => 'mnhlabel_deliv_kit',
                'field_setName' => 'label_deliv_kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'field_setID' => 'mnhlabel_equip_name',
                'field_setName' => 'label_equip_name',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'field_setID' => 'mnhlabel_func',
                'field_setName' => 'label_func',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'field_setID' => 'mnhlabel_guidelines_av',
                'field_setName' => 'label_guidelines_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'field_setID' => 'mnhlabel_Health_Facility_Management',
                'field_setName' => 'label_Health_Facility_Management',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'field_setID' => 'mnhlabel_indic_del_conducted',
                'field_setName' => 'label_indic_del_conducted',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'field_setID' => 'mnhlabel_jobaids_av',
                'field_setName' => 'label_jobaids_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'field_setID' => 'mnhlabel_kangaroo_mothercare',
                'field_setName' => 'label_kangaroo_mothercare',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'field_setID' => 'mnhlabel_loc_resrcs',
                'field_setName' => 'label_loc_resrcs',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'field_setID' => 'mnhlabel_main_rsn_unav',
                'field_setName' => 'label_main_rsn_unav',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'field_setID' => 'mnhlabel_main_source',
                'field_setName' => 'label_main_source',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'field_setID' => 'mnhlabel_main_supplier',
                'field_setName' => 'label_main_supplier',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'field_setID' => 'mnhlabel_non_func',
                'field_setName' => 'label_non_func',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'field_setID' => 'mnhlabel_preparedness_for_delivery',
                'field_setName' => 'label_preparedness_for_delivery',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'field_setID' => 'mnhlabel_prep_criteria',
                'field_setName' => 'label_prep_criteria',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'field_setID' => 'mnhlabel_primary_challenge',
                'field_setName' => 'label_primary_challenge',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'field_setID' => 'mnhlabel_PROVISION_OF_SERVICES',
                'field_setName' => 'label_PROVISION_OF_SERVICES',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'field_setID' => 'mnhlabel_prov_basic_obsteric',
                'field_setName' => 'label_prov_basic_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('field_sets')->insert(array (
            0 => 
            array (
                'field_setID' => 'mnhlabel_prov_comp_obsteric',
                'field_setName' => 'label_prov_comp_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'field_setID' => 'mnhlabel_prov_HIV',
                'field_setName' => 'label_prov_HIV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'field_setID' => 'mnhlabel_prov_new_born_care',
                'field_setName' => 'label_prov_new_born_care',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'field_setID' => 'mnhlabel_prov_of_beds',
                'field_setName' => 'label_prov_of_beds',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'field_setID' => 'mnhlabel_prov_of_nurses',
                'field_setName' => 'label_prov_of_nurses',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'field_setID' => 'mnhlabel_prov_waste',
                'field_setName' => 'label_prov_waste',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'field_setID' => 'mnhlabel_strg_water',
                'field_setName' => 'label_strg_water',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'field_setID' => 'mnhlabel_testing_sup',
                'field_setName' => 'label_testing_sup',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'field_setID' => 'mnhlabel_tools_av',
                'field_setName' => 'label_tools_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'field_setID' => 'mnhlabel_unavail_dur',
                'field_setName' => 'label_unavail_dur',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'field_setID' => 'mnhlabel_unavail_rsn',
                'field_setName' => 'label_unavail_rsn',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'field_setID' => 'mnhlabel_unav_main_reason',
                'field_setName' => 'label_unav_main_reason',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'field_setID' => 'mnhlabel_unit_commod',
                'field_setName' => 'label_unit_commod',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'field_setID' => 'mnhlabel_water_strg_pt',
                'field_setName' => 'label_water_strg_pt',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'field_setID' => 'mnhlabel_when_unavail',
                'field_setName' => 'label_when_unavail',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'field_setID' => 'mnhLocation_of_availability',
                'field_setName' => 'Location_of_availability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'field_setID' => 'mnhlocation_of_availability_radios',
                'field_setName' => 'location_of_availability',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'field_setID' => 'mnhLowOsmolarityOralRehydrationSaltsORS',
            'field_setName' => 'LowOsmolarityOralRehydrationSalts(ORS)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'field_setID' => 'mnhl_clincl_staff',
                'field_setName' => 'l_clincl_staff',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'field_setID' => 'mnhl_trnd_antenatal',
                'field_setName' => 'l_trnd_antenatal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'field_setID' => 'mnhl_trnd_basic_obst',
                'field_setName' => 'l_trnd_basic_obst',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'field_setID' => 'mnhl_trnd_ess_newborn',
                'field_setName' => 'l_trnd_ess_newborn',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'field_setID' => 'mnhl_trnd_perinatal',
                'field_setName' => 'l_trnd_perinatal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'field_setID' => 'mnhl_trnd_post_natal',
                'field_setName' => 'l_trnd_post_natal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'field_setID' => 'mnhl_trnd_pp',
                'field_setName' => 'l_trnd_pp',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'field_setID' => 'mnhl_trnd_std_recog',
                'field_setName' => 'l_trnd_std_recog',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'field_setID' => 'mnhl_trnd_uterine',
                'field_setName' => 'l_trnd_uterine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'field_setID' => 'mnhl_ttl_av_dty',
                'field_setName' => 'l_ttl_av_dty',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'field_setID' => 'mnhl_ttl_in_facil',
                'field_setName' => 'l_ttl_in_facil',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'field_setID' => 'mnhl_ttl_trnd_still_work',
                'field_setName' => 'l_ttl_trnd_still_work',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'field_setID' => 'mnhmainsupplier',
                'field_setName' => 'mainsupplier',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'field_setID' => 'mnhmainsupplier_resources',
                'field_setName' => 'mainsupplier_resources',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'field_setID' => 'mnhmain_reason_for_not_conducting',
                'field_setName' => 'main_reason_for_not_conducting',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'field_setID' => 'mnhmain_reason_for_unavailability',
                'field_setName' => 'main_reason_for_unavailability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'field_setID' => 'mnhmar',
                'field_setName' => 'mar',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'field_setID' => 'mnhmay',
                'field_setName' => 'may',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'field_setID' => 'mnhMCH',
                'field_setName' => '',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'field_setID' => 'mnhMCH_US_OPD_Ward',
                'field_setName' => 'MCH_US_OPD_Ward',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'field_setID' => 'mnhmother_child_booklet',
                'field_setName' => 'mother_child_booklet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'field_setID' => 'mnhmulcmb_main_src',
                'field_setName' => 'mulcmb_main_src',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'field_setID' => 'mnhmultiple_loc_of_rsrc',
                'field_setName' => 'multiple_loc_of_rsrc',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'field_setID' => 'mnhmultiple_when_unavail',
                'field_setName' => 'multiple_when_unavail',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'field_setID' => 'mnhNebulizer',
                'field_setName' => 'Nebulizer',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'field_setID' => 'mnhNGTube',
                'field_setName' => 'NGTube',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'field_setID' => 'mnhNon_Diarrhoea',
                'field_setName' => 'Non_Diarrhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'field_setID' => 'mnhnot_applicable',
                'field_setName' => 'not_applicable',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'field_setID' => 'mnhnov',
                'field_setName' => 'nov',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'field_setID' => 'mnhNo_Treatment',
                'field_setName' => 'No_Treatment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'field_setID' => 'mnhnumbox_func',
                'field_setName' => 'numbox_func',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'field_setID' => 'mnhnumbox_non_func',
                'field_setName' => 'numbox_non_func',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'field_setID' => 'mnhnurse_label',
                'field_setName' => 'nurse single',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'field_setID' => 'mnhoct',
                'field_setName' => 'oct',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'field_setID' => 'mnhOPD_MCH_USClinic_Ward_Other',
                'field_setName' => 'OPD_MCH_USClinic_Ward_Other',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'field_setID' => 'mnhordered_notordered_expired',
                'field_setName' => 'ordered_notordered_expired',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'field_setID' => 'mnhORS&ZincCo-pack',
                'field_setName' => 'ORS&ZincCo-pack',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'field_setID' => 'mnhORS_Zinc',
                'field_setName' => 'ORS_Zinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'field_setID' => 'mnhort',
                'field_setName' => 'ort',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'field_setID' => 'mnhORTCorner',
                'field_setName' => 'ORTCorner',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'field_setID' => 'mnhORTCorner2',
                'field_setName' => 'ORTCorner2',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'field_setID' => 'mnhortuptodate',
                'field_setName' => 'ortuptodate',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'field_setID' => 'mnhort_moh',
            'field_setName' => 'ort (moh)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'field_setID' => 'mnhother',
                'field_setName' => 'other',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'field_setID' => 'mnhOthers',
                'field_setName' => 'Others',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'field_setID' => 'mnhown_initiative',
                'field_setName' => 'own_initiative',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'field_setID' => 'mnhpartner',
                'field_setName' => 'partner',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'field_setID' => 'mnhPneumonia',
                'field_setName' => 'Pneumonia',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'field_setID' => 'mnhprivately_supplied',
                'field_setName' => 'privately_supplied',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'field_setID' => 'mnhquestion_label',
                'field_setName' => 'question_label',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'field_setID' => 'mnhquestion_where_sick_children_seen',
                'field_setName' => 'question_where_sick_children_seen',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'field_setID' => 'mnhq_10_commod_av',
                'field_setName' => 'q_10_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'field_setID' => 'mnhq_10_equip_av',
                'field_setName' => 'q_10_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'field_setID' => 'mnhq_10_others',
                'field_setName' => 'q_10_others',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'field_setID' => 'mnhq_10_sup_unav',
                'field_setName' => 'q_10_sup_unav',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'field_setID' => 'mnhq_10_tools_av',
                'field_setName' => 'q_10_tools_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'field_setID' => 'mnhq_11_commod_av',
                'field_setName' => 'q_11_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'field_setID' => 'mnhq_11_equip_av',
                'field_setName' => 'q_11_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'field_setID' => 'mnhq_11_totalort',
                'field_setName' => 'q_11_totalort',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'field_setID' => 'mnhq_12_commod_av',
                'field_setName' => 'q_12_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'field_setID' => 'mnhq_12_equip_av',
                'field_setName' => 'q_12_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'field_setID' => 'mnhq_13_commod_av',
                'field_setName' => 'q_13_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'field_setID' => 'mnhq_13_equip_av',
                'field_setName' => 'q_13_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'field_setID' => 'mnhq_14_commod_av',
                'field_setName' => 'q_14_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'field_setID' => 'mnhq_14_equip_av',
                'field_setName' => 'q_14_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'field_setID' => 'mnhq_15_commod_av',
                'field_setName' => 'q_15_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'field_setID' => 'mnhq_15_equip_av',
                'field_setName' => 'q_15_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'field_setID' => 'mnhq_16_commod_av',
                'field_setName' => 'q_16_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'field_setID' => 'mnhq_16_equip_av',
                'field_setName' => 'q_16_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'field_setID' => 'mnhq_17_commod_av',
                'field_setName' => 'q_17_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'field_setID' => 'mnhq_17_equip_av',
                'field_setName' => 'q_17_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'field_setID' => 'mnhq_18_commod_av',
                'field_setName' => 'q_18_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'field_setID' => 'mnhq_19_commod_av',
                'field_setName' => 'q_19_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'field_setID' => 'mnhq_1a_prov_comp_obsteric',
                'field_setName' => 'q_1a_prov_comp_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'field_setID' => 'mnhq_1b_prov_comp_obsteric',
                'field_setName' => 'q_1b_prov_comp_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'field_setID' => 'mnhq_1_commod_av',
                'field_setName' => 'q_1_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'field_setID' => 'mnhq_1_comm_strategy',
                'field_setName' => 'q_1_comm_strategy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'field_setID' => 'mnhq_1_deliv_kit',
                'field_setName' => 'q_1_deliv_kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'field_setID' => 'mnhq_1_equip_av',
                'field_setName' => 'q_1_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'field_setID' => 'mnhq_1_guideline_av',
                'field_setName' => 'q_1_guideline_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'field_setID' => 'mnhq_1_health_fac_management',
                'field_setName' => 'q_1_health_fac_management',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'field_setID' => 'mnhq_1_jobaids_av',
                'field_setName' => 'q_1_jobaids_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'field_setID' => 'mnhq_1_kangaroo_mothercare',
                'field_setName' => 'q_1_kangaroo_mothercare',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'field_setID' => 'mnhq_1_prep_delivery',
                'field_setName' => 'q_1_prep_delivery',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'field_setID' => 'mnhq_1_prov_basic_obsteric',
                'field_setName' => 'q_1_prov_basic_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'field_setID' => 'mnhq_1_prov_comp_obsteric',
                'field_setName' => 'q_1_prov_comp_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'field_setID' => 'mnhq_1_prov_HIV',
                'field_setName' => 'q_1_prov_HIV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'field_setID' => 'mnhq_1_prov_of_services',
                'field_setName' => 'q_1_prov_of_services',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'field_setID' => 'mnhq_1_strg_water',
                'field_setName' => 'q_1_strg_water',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'field_setID' => 'mnhq_1_sup_unav',
                'field_setName' => 'q_1_sup_unav',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'field_setID' => 'mnhq_1_testing_sup',
                'field_setName' => 'q_1_testing_sup',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'field_setID' => 'mnhq_1_tools_av',
                'field_setName' => 'q_1_tools_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'field_setID' => 'mnhq_1_total',
                'field_setName' => 'q_1_total',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'field_setID' => 'mnhq_20_commod_av',
                'field_setName' => 'q_20_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'field_setID' => 'mnhq_21_commod_av',
                'field_setName' => 'q_21_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'field_setID' => 'mnhq_22_commod_av',
                'field_setName' => 'q_22_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'field_setID' => 'mnhq_23_commod_av',
                'field_setName' => 'q_23_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'field_setID' => 'mnhq_24_commod_av',
                'field_setName' => 'q_24_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'field_setID' => 'mnhq_25_commod_av',
                'field_setName' => 'q_25_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'field_setID' => 'mnhq_26_commod_av',
                'field_setName' => 'q_26_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'field_setID' => 'mnhq_27_commod_av',
                'field_setName' => 'q_27_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'field_setID' => 'mnhq_28_commod_av',
                'field_setName' => 'q_28_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'field_setID' => 'mnhq_29_commod_av',
                'field_setName' => 'q_29_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'field_setID' => 'mnhq_2_comm_strategy',
                'field_setName' => 'q_2_comm_strategy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'field_setID' => 'mnhq_2_deliv_kit',
                'field_setName' => 'q_2_deliv_kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'field_setID' => 'mnhq_2_equip_av',
                'field_setName' => 'q_2_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'field_setID' => 'mnhq_2_guideline_av',
                'field_setName' => 'q_2_guideline_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'field_setID' => 'mnhq_2_health_fac_management',
                'field_setName' => 'q_2_health_fac_management',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'field_setID' => 'mnhq_2_jobaids_av',
                'field_setName' => 'q_2_jobaids_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'field_setID' => 'mnhq_2_kangaroo_mothercare',
                'field_setName' => 'q_2_kangaroo_mothercare',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'field_setID' => 'mnhq_2_orszinc',
                'field_setName' => 'q_2_orszinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'field_setID' => 'mnhq_2_prov_basic_obsteric',
                'field_setName' => 'q_2_prov_basic_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'field_setID' => 'mnhq_2_prov_comp_obsteric',
                'field_setName' => 'q_2_prov_comp_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'field_setID' => 'mnhq_2_prov_HIV',
                'field_setName' => 'q_2_prov_HIV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'field_setID' => 'mnhq_2_strg_water',
                'field_setName' => 'q_2_strg_water',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'field_setID' => 'mnhq_2_sup_unav',
                'field_setName' => 'q_2_sup_unav',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'field_setID' => 'mnhq_2_testing_sup',
                'field_setName' => 'q_2_testing_sup',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'field_setID' => 'mnhq_2_tools_av',
                'field_setName' => 'q_2_tools_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'field_setID' => 'mnhq_30_commod_av',
                'field_setName' => 'q_30_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'field_setID' => 'mnhq_31_commod_av',
                'field_setName' => 'q_31_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'field_setID' => 'mnhq_32_commod_av',
                'field_setName' => 'q_32_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'field_setID' => 'mnhq_33_commod_av',
                'field_setName' => 'q_33_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'field_setID' => 'mnhq_34_commod_av',
                'field_setName' => 'q_34_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'field_setID' => 'mnhq_35_commod_av',
                'field_setName' => 'q_35_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'field_setID' => 'mnhq_36_commod_av',
                'field_setName' => 'q_36_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'field_setID' => 'mnhq_3_commod_av',
                'field_setName' => 'q_3_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'field_setID' => 'mnhq_3_comm_strategy',
                'field_setName' => 'q_3_comm_strategy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'field_setID' => 'mnhq_3_deliv_kit',
                'field_setName' => 'q_3_deliv_kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'field_setID' => 'mnhq_3_equip_av',
                'field_setName' => 'q_3_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'field_setID' => 'mnhq_3_guideline_av',
                'field_setName' => 'q_3_guideline_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'field_setID' => 'mnhq_3_health_fac_management',
                'field_setName' => 'q_3_health_fac_management',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'field_setID' => 'mnhq_3_jobaids_av',
                'field_setName' => 'q_3_jobaids_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'field_setID' => 'mnhq_3_kangaroo_mothercare',
                'field_setName' => 'q_3_kangaroo_mothercare',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'field_setID' => 'mnhq_3_ors',
                'field_setName' => 'q_3_ors',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'field_setID' => 'mnhq_3_prov_basic_obsteric',
                'field_setName' => 'q_3_prov_basic_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'field_setID' => 'mnhq_3_prov_comp_obsteric',
                'field_setName' => 'q_3_prov_comp_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'field_setID' => 'mnhq_3_prov_HIV',
                'field_setName' => 'q_3_prov_HIV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'field_setID' => 'mnhq_3_sup_unav',
                'field_setName' => 'q_3_sup_unav',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'field_setID' => 'mnhq_3_testing_sup',
                'field_setName' => 'q_3_testing_sup',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'field_setID' => 'mnhq_3_tools_av',
                'field_setName' => 'q_3_tools_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'field_setID' => 'mnhq_4a_prov_comp_obsteric',
                'field_setName' => 'q_4a_prov_comp_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'field_setID' => 'mnhq_4_commod_av',
                'field_setName' => 'q_4_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'field_setID' => 'mnhq_4_comm_strategy',
                'field_setName' => 'q_4_comm_strategy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'field_setID' => 'mnhq_4_deliv_kit',
                'field_setName' => 'q_4_deliv_kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'field_setID' => 'mnhq_4_equip_av',
                'field_setName' => 'q_4_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'field_setID' => 'mnhq_4_guideline_av',
                'field_setName' => 'q_4_guideline_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'field_setID' => 'mnhq_4_health_fac_management',
                'field_setName' => 'q_4_health_fac_management',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'field_setID' => 'mnhq_4_jobaids_av',
                'field_setName' => 'q_4_jobaids_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'field_setID' => 'mnhq_4_kangaroo_mothercare',
                'field_setName' => 'q_4_kangaroo_mothercare',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'field_setID' => 'mnhq_4_prov_basic_obsteric',
                'field_setName' => 'q_4_prov_basic_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'field_setID' => 'mnhq_4_prov_comp_obsteric',
                'field_setName' => 'q_4_prov_comp_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'field_setID' => 'mnhq_4_prov_HIV',
                'field_setName' => 'q_4_prov_HIV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'field_setID' => 'mnhq_4_sup_unav',
                'field_setName' => 'q_4_sup_unav',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'field_setID' => 'mnhq_4_testing_sup',
                'field_setName' => 'q_4_testing_sup',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'field_setID' => 'mnhq_4_tools_av',
                'field_setName' => 'q_4_tools_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'field_setID' => 'mnhq_4_zinc',
                'field_setName' => 'q_4_zinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'field_setID' => 'mnhq_5_antibiotics',
                'field_setName' => 'q_5_antibiotics',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'field_setID' => 'mnhq_5_commod_av',
                'field_setName' => 'q_5_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'field_setID' => 'mnhq_5_comm_strategy',
                'field_setName' => 'q_5_comm_strategy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'field_setID' => 'mnhq_5_deliv_kit',
                'field_setName' => 'q_5_deliv_kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'field_setID' => 'mnhq_5_equip_av',
                'field_setName' => 'q_5_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'field_setID' => 'mnhq_5_guideline_av',
                'field_setName' => 'q_5_guideline_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'field_setID' => 'mnhq_5_health_fac_management',
                'field_setName' => 'q_5_health_fac_management',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'field_setID' => 'mnhq_5_jobaids_av',
                'field_setName' => 'q_5_jobaids_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'field_setID' => 'mnhq_5_prov_basic_obsteric',
                'field_setName' => 'q_5_prov_basic_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'field_setID' => 'mnhq_5_prov_HIV',
                'field_setName' => 'q_5_prov_HIV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'field_setID' => 'mnhq_5_sup_unav',
                'field_setName' => 'q_5_sup_unav',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'field_setID' => 'mnhq_5_testing_sup',
                'field_setName' => 'q_5_testing_sup',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'field_setID' => 'mnhq_5_tools_av',
                'field_setName' => 'q_5_tools_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'field_setID' => 'mnhq_6_commod_av',
                'field_setName' => 'q_6_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'field_setID' => 'mnhq_6_comm_strategy',
                'field_setName' => 'q_6_comm_strategy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'field_setID' => 'mnhq_6_deliv_kit',
                'field_setName' => 'q_6_deliv_kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'field_setID' => 'mnhq_6_equip_av',
                'field_setName' => 'q_6_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'field_setID' => 'mnhq_6_guideline_av',
                'field_setName' => 'q_6_guideline_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'field_setID' => 'mnhq_6_health_fac_management',
                'field_setName' => 'q_6_health_fac_management',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'field_setID' => 'mnhq_6_jobaids_av',
                'field_setName' => 'q_6_jobaids_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'field_setID' => 'mnhq_6_others',
                'field_setName' => 'q_6_others',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'field_setID' => 'mnhq_6_prov_basic_obsteric',
                'field_setName' => 'q_6_prov_basic_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'field_setID' => 'mnhq_6_prov_HIV',
                'field_setName' => 'q_6_prov_HIV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'field_setID' => 'mnhq_6_sup_unav',
                'field_setName' => 'q_6_sup_unav',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'field_setID' => 'mnhq_6_testing_sup',
                'field_setName' => 'q_6_testing_sup',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'field_setID' => 'mnhq_6_tools_av',
                'field_setName' => 'q_6_tools_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'field_setID' => 'mnhq_7_commod_av',
                'field_setName' => 'q_7_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'field_setID' => 'mnhq_7_comm_strategy',
                'field_setName' => 'q_7_comm_strategy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'field_setID' => 'mnhq_7_deliv_kit',
                'field_setName' => 'q_7_deliv_kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'field_setID' => 'mnhq_7_equip_av',
                'field_setName' => 'q_7_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'field_setID' => 'mnhq_7_jobaids_av',
                'field_setName' => 'q_7_jobaids_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'field_setID' => 'mnhq_7_notreat',
                'field_setName' => 'q_7_notreat',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'field_setID' => 'mnhq_7_prov_basic_obsteric',
                'field_setName' => 'q_7_prov_basic_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'field_setID' => 'mnhq_7_prov_HIV',
                'field_setName' => 'q_7_prov_HIV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'field_setID' => 'mnhq_7_sup_unav',
                'field_setName' => 'q_7_sup_unav',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'field_setID' => 'mnhq_7_tools_av',
                'field_setName' => 'q_7_tools_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'field_setID' => 'mnhq_8_commod_av',
                'field_setName' => 'q_8_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'field_setID' => 'mnhq_8_deliv_kit',
                'field_setName' => 'q_8_deliv_kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'field_setID' => 'mnhq_8_equip_av',
                'field_setName' => 'q_8_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'field_setID' => 'mnhq_8_fever',
                'field_setName' => 'q_8_fever',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'field_setID' => 'mnhq_8_jobaids_av',
                'field_setName' => 'q_8_jobaids_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'field_setID' => 'mnhq_8_prov_basic_obsteric',
                'field_setName' => 'q_8_prov_basic_obsteric',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'field_setID' => 'mnhq_8_prov_HIV',
                'field_setName' => 'q_8_prov_HIV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'field_setID' => 'mnhq_8_sup_unav',
                'field_setName' => 'q_8_sup_unav',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'field_setID' => 'mnhq_8_tools_av',
                'field_setName' => 'q_8_tools_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'field_setID' => 'mnhq_9_commod_av',
                'field_setName' => 'q_9_commod_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'field_setID' => 'mnhq_9_deliv_kit',
                'field_setName' => 'q_9_deliv_kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'field_setID' => 'mnhq_9_equip_av',
                'field_setName' => 'q_9_equip_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'field_setID' => 'mnhq_9_pneumonia',
                'field_setName' => 'q_9_pneumonia',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'field_setID' => 'mnhq_9_prov_HIV',
                'field_setName' => 'q_9_prov_HIV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'field_setID' => 'mnhq_9_sup_unav',
                'field_setName' => 'q_9_sup_unav',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'field_setID' => 'mnhq_9_tools_av',
                'field_setName' => 'q_9_tools_av',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'field_setID' => 'mnhq_a_prov_of_beds',
                'field_setName' => 'q_a_prov_of_beds',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'field_setID' => 'mnhq_a_upadted_charts',
                'field_setName' => 'q_upadted charts',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'field_setID' => 'mnhq_b_ort',
                'field_setName' => 'q_b_ort',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'field_setID' => 'mnhq_b_prov_of_beds',
                'field_setName' => 'q_b_prov_of_beds',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'field_setID' => 'mnhq_c_iccm',
                'field_setName' => 'q_c_iccm',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'field_setID' => 'mnhq_c_prov_of_beds',
                'field_setName' => 'q_c_prov_of_beds',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'field_setID' => 'mnhq_d_protocol',
                'field_setName' => 'q_d_protocol',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'field_setID' => 'mnhq_d_prov_of_beds',
                'field_setName' => 'q_d_prov_of_beds',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'field_setID' => 'mnhq_elec_avail',
                'field_setName' => 'q_elec_avail',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'field_setID' => 'mnhq_e_diarhoea',
                'field_setName' => 'q_e_diarhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'field_setID' => 'mnhq_e_prov_of_beds',
                'field_setName' => 'q_e_prov_of_beds',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'field_setID' => 'mnhq_f_iec',
                'field_setName' => 'q_f_iec',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'field_setID' => 'mnhq_f_prov_of_beds',
                'field_setName' => 'q_f_prov_of_beds',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'field_setID' => 'mnhq_g_art',
                'field_setName' => 'q_g_art',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'field_setID' => 'mnhq_h_algorithm',
                'field_setName' => 'q_h_algorithm',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'field_setID' => 'mnhq_main_supplier',
                'field_setName' => 'q_main_supplier',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'field_setID' => 'mnhq_prov_new_born_care',
                'field_setName' => 'q_prov_new_born_care',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'field_setID' => 'mnhq_prov_of_nurses',
                'field_setName' => 'q_prov_of_nurses',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'field_setID' => 'mnhq_prov_waste',
                'field_setName' => 'q_prov_waste',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'field_setID' => 'mnhq_rsrc_avail',
                'field_setName' => 'q_rsrc_avail',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_setName' => 'q_year_months_numberboxes',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_1a',
                'field_setName' => 'radio_comp_obst_1a',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_1b',
                'field_setName' => 'radio_comp_obst_1b',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_4a',
                'field_setName' => 'radio_comp_obst_4a',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'field_setID' => 'mnhradio_prov_HIV',
                'field_setName' => 'radio_prov_HIV',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'field_setID' => 'mnhrco_label',
                'field_setName' => 'R.C.O single',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'field_setID' => 'mnhref_slip',
                'field_setName' => 'ref_slip',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'field_setID' => 'mnhreg',
                'field_setName' => 'reg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'field_setID' => 'mnhRESOMAL',
                'field_setName' => 'RESOMAL',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'field_setID' => 'mnhResource_Name',
                'field_setName' => 'Resource_Name',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'field_setID' => 'mnhresponse',
                'field_setName' => 'Response',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'field_setID' => 'mnhresponse_prov_HIV',
                'field_setName' => 'response_prov_HIV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'field_setID' => 'mnhRotaVirusVaccine',
                'field_setName' => 'RotaVirusVaccine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'field_setID' => 'mnhsafe_water',
                'field_setName' => 'safe_water',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'field_setID' => 'mnhsep',
                'field_setName' => 'sep',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'field_setID' => 'mnhSpacer',
                'field_setName' => 'Spacer',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'field_setID' => 'mnhstaff_EID_sampling',
                'field_setName' => 'staff_EID_sampling',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'field_setID' => 'mnhstaff_IMCI_work_CH_UNIT',
                'field_setName' => 'staff_IMCI_work_CH_UNIT',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'field_setID' => 'mnhstaff_pneumonia_diarrhoea_under_5',
                'field_setName' => 'staff_pneumonia_diarrhoea_under_5',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'field_setID' => 'mnhstaff_trained_Diarrhoea',
                'field_setName' => 'staff trained diarrhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'field_setID' => 'mnhstaff_trained_ICCM',
                'field_setName' => 'staff_trained_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'field_setID' => 'mnhstaff_trained_IMCI',
                'field_setName' => 'staff_trained_IMCI',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'field_setID' => 'mnhSuctionmachine',
                'field_setName' => 'Suctionmachine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'field_setID' => 'mnhsuppliers',
                'field_setName' => 'suppliers',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'field_setID' => 'mnhsuppliesname',
                'field_setName' => 'suppliername',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'field_setID' => 'mnhSyrupAmoxicillin',
                'field_setName' => 'SyrupAmoxicillin',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'field_setID' => 'mnhSyrupCotrimoxazole',
                'field_setName' => 'SyrupCotrimoxazole',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'field_setID' => 'mnhSyrupMetronidazole',
                'field_setName' => 'SyrupMetronidazole',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'field_setID' => 'mnhTabletPaedCotrimoxazole',
                'field_setName' => 'TabletPaedCotrimoxazole',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'field_setID' => 'mnhtextbox_nolabel',
                'field_setName' => 'textbox_nolabel',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'field_setID' => 'mnhtotal',
                'field_setName' => 'total',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'field_setID' => 'mnhTotalCasesinORTCornerRegister',
                'field_setName' => 'Total Cases in ORT Corner Register',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'field_setID' => 'mnhtotal_avail_duty',
                'field_setName' => 'total_avail_duty',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'field_setID' => 'mnhtotal_in_facility',
                'field_setName' => 'Total in facility',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'field_setID' => 'mnhTotal_number_of_cases_documented',
                'field_setName' => 'Total number of cases documented in ORT corner register',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'field_setID' => 'mnhTotal_Number_of_Diarrhoea_Cases',
                'field_setName' => 'Total Number of Diarrhoea Cases',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'field_setID' => 'mnhTreatment_with_Antibiotics',
                'field_setName' => 'Treatment_with_Antibiotics',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'field_setID' => 'mnhtreatment_with_ORS',
                'field_setName' => 'treatment_with_ORS',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'field_setID' => 'mnhTreatment_with_ORS+Zinc',
                'field_setName' => 'Treatment with ORS+ Zinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'field_setID' => 'mnhTreatment_with_others',
                'field_setName' => 'Treatment_with_others',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'field_setID' => 'mnhtreatment_with_Zinc',
                'field_setName' => 'treatment_with_Zinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'field_setID' => 'mnhtv',
                'field_setName' => 'tv',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'field_setID' => 'mnhunits_established',
                'field_setName' => 'units_established',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'field_setID' => 'mnhUS_Clinic',
                'field_setName' => 'US_Clinic',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'field_setID' => 'mnhu_100mg10',
            'field_setName' => 'u_100mg(10)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'field_setID' => 'mnhu_10IU',
                'field_setName' => 'u_10IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'field_setID' => 'mnhu_10mg5ml_5yr',
                'field_setName' => 'u_10mg5ml_5yr',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'field_setID' => 'mnhu_10ml_amp',
                'field_setName' => 'u_10ml_amp',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'field_setID' => 'mnhu_1mu',
                'field_setName' => 'u_1mu',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'field_setID' => 'mnhu_200mcg',
                'field_setName' => 'u_200mcg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'field_setID' => 'mnhu_200MG_Tab',
                'field_setName' => 'u_200MG_Tab',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'field_setID' => 'mnhu_20mg',
                'field_setName' => 'u_20mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'field_setID' => 'mnhu_25mcg',
                'field_setName' => 'u_25mcg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'field_setID' => 'mnhu_2mg',
                'field_setName' => 'u_2mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'field_setID' => 'mnhu_2ml_Vial_80mg',
                'field_setName' => 'u_2ml_Vial_80mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'field_setID' => 'mnhu_300MG_Tab',
                'field_setName' => 'u_300MG_Tab',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'field_setID' => 'mnhu_3tc_150MG',
                'field_setName' => 'u_3tc_150MG',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'field_setID' => 'mnhu_4mg_in_1ml',
                'field_setName' => 'u_4mg_in_1ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'field_setID' => 'mnhu_4pct_Chlorhex',
                'field_setName' => 'u_4pct_Chlorhex',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'field_setID' => 'mnhu_500mg',
                'field_setName' => 'u_500mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'field_setID' => 'mnhu_500mg100ml_10ml',
                'field_setName' => 'u_500mg100ml_10ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'field_setID' => 'mnhu_500MG_25MG_Tab',
                'field_setName' => 'u_500MG_25MG_Tab',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'field_setID' => 'mnhu_5mg',
                'field_setName' => 'mnhu_5mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'field_setID' => 'mnhu_5mu',
                'field_setName' => 'u_5mu',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'field_setID' => 'mnhu_5pct',
                'field_setName' => 'u_5pct',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'field_setID' => 'mnhu_5_IU',
                'field_setName' => 'u_5_IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'field_setID' => 'mnhu_600MG_tab',
                'field_setName' => 'u_600MG_tab',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'field_setID' => 'mnhu_empty',
                'field_setName' => 'u_empty',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'field_setID' => 'mnhu_injection',
                'field_setName' => 'u_injection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'field_setID' => 'mnhu_injection200mcg_ml',
                'field_setName' => 'u_injection200mcg_ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'field_setID' => 'mnhu_Injection_1g',
                'field_setName' => 'u_Injection_1g',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'field_setID' => 'mnhverifyort',
                'field_setName' => 'verifyort',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'field_setID' => 'mnhVitaminA',
                'field_setName' => 'VitaminA',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'field_setID' => 'mnhward',
                'field_setName' => 'ward',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'field_setID' => 'mnhyear',
                'field_setName' => 'Year',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'field_setID' => 'mnhyear_ch',
                'field_setName' => '2012_2013_2014_2015',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'field_setID' => 'mnhyes_no',
                'field_setName' => 'Yes_No',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'field_setID' => 'mnhZincSulphate',
                'field_setName' => 'ZincSulphate',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'field_setID' => 'schsavailability',
                'field_setName' => 'schsavailability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'field_setID' => 'schsavailablequantities',
                'field_setName' => 'schsavailablequantities',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'field_setID' => 'schsbenches',
                'field_setName' => 'schsbenches',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'field_setID' => 'schsbucketsforspoons',
                'field_setName' => 'schsbucketsforspoons',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'field_setID' => 'schscalibratedjars',
                'field_setName' => 'schscalibratedjars',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'field_setID' => 'schsEIDCollection',
                'field_setName' => 'schsEIDCollection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'field_setID' => 'schsequipmentname',
                'field_setName' => 'schsequipmentname',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'field_setID' => 'schsfully_functional',
                'field_setName' => 'fully_functional',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'field_setID' => 'schsfunctionalnonfunctionalnumberbox',
                'field_setName' => 'schsfunctionalnonfunctionalnumberbox',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'field_setID' => 'schsfunctionalnumberbox',
                'field_setName' => 'schsfunctionalnumberbox',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'field_setID' => 'schshandwashing',
                'field_setName' => 'schshandwashing',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'field_setID' => 'schsHIVRapid',
                'field_setName' => 'schsHIVRapid',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'field_setID' => 'schslocationofavailability',
                'field_setName' => 'schslocationofavailability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'field_setID' => 'schsmeasuringcontainers',
                'field_setName' => 'schsmeasuringcontainers',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'field_setID' => 'schsmuactape',
                'field_setName' => 'schsmuactape',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'field_setID' => 'schsnon_functional',
                'field_setName' => 'non_functional',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'field_setID' => 'schsplasticbuckets',
                'field_setName' => 'schsplasticbuckets',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'field_setID' => 'schsplasticcups250',
                'field_setName' => 'schsplasticcups250',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'field_setID' => 'schsplasticcups350',
                'field_setName' => 'schsplasticcups350',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'field_setID' => 'schsstirringspoon',
                'field_setName' => 'schsstirringspoon',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'field_setID' => 'schstableformixingORS',
                'field_setName' => 'schstableformixingORS',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'field_setID' => 'schstablespoon',
                'field_setName' => 'schstablespoon',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'field_setID' => 'schstabletrays',
                'field_setName' => 'schstabletrays',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'field_setID' => 'schsthermometer',
                'field_setName' => 'schsthermometer',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'field_setID' => 'schswallclock',
                'field_setName' => 'schswallclock',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'field_setID' => 'schswastecontainers',
                'field_setName' => 'schswastecontainers',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'field_setID' => 'schswaterstoragecontainerswithouttap',
                'field_setName' => 'schswaterstoragecontainerswithouttap',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'field_setID' => 'schswaterstoragecontainerswithtap',
                'field_setName' => 'schswaterstoragecontainerswithtap',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'field_setID' => 'schsweighingscale',
                'field_setName' => 'schsweighingscale',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'field_setID' => 'sdfx of Staff Trained in Essential Newborn Care',
                'field_setName' => '# of Staff Trained in Essential Newborn Care',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'field_setID' => 'sdfx of Staff Trained in Focused Antenatal Care',
                'field_setName' => '# of Staff Trained in Focused Antenatal Care',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'field_setID' => 'sdfx of Staff Trained in Post Natal Care',
                'field_setName' => '# of Staff Trained in Post Natal Care',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'field_setID' => 'sdfx Staff Trained in SBM-R',
            'field_setName' => '# of Staff Trained in Standards Based Management and Recognition(SBM-R)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'field_setID' => 'sdfx10 IU',
                'field_setName' => '10 IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'field_setID' => 'sdfx10 ml amp',
                'field_setName' => '10 ml amp',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'field_setID' => 'sdfx100000IU',
                'field_setName' => '100,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'field_setID' => 'sdfx100mgml10in10mlamp',
            'field_setName' => '100mg/ml (10%) in 10 ml amp',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'field_setID' => 'sdfx10mg5ml5yr',
                'field_setName' => '10mg/ 5ml 5yr',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'field_setID' => 'sdfx120mg',
                'field_setName' => '120mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'field_setID' => 'sdfx125mg5ml',
                'field_setName' => '125mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'field_setID' => 'sdfx1mu',
                'field_setName' => '1mu',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'field_setID' => 'sdfx1sachet500ml',
            'field_setName' => '1sachet(500ml)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'field_setID' => 'sdfx1w_2w_1mo_More1',
                'field_setName' => '1w_2w_1mo_More1',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'field_setID' => 'sdfx2 mg',
                'field_setName' => '2 mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'field_setID' => 'sdfx200000IU',
                'field_setName' => '200,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'field_setID' => 'sdfx200mcg',
                'field_setName' => '200mcg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'field_setID' => 'sdfx200MG Tab',
                'field_setName' => '200MG Tab',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'field_setID' => 'sdfx200mg5ml',
                'field_setName' => '200mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'field_setID' => 'sdfx2012_2013_2014_2015',
                'field_setName' => '2012_2013_2014_2015',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'field_setID' => 'sdfx20mg120mg',
                'field_setName' => '20mg+120mg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'field_setID' => 'sdfx20mgml',
                'field_setName' => '20mg/ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'field_setID' => 'sdfx20mgnumberofstrips1Strip=10tablets',
            'field_setName' => '20mg(numberofstrips,1Strip=10tablets)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'field_setID' => 'sdfx240mg5ml',
                'field_setName' => '240mg/5ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'field_setID' => 'sdfx25mcg',
                'field_setName' => '25mcg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'field_setID' => 'sdfx2mlVial80mg2ml',
                'field_setName' => '2ml Vial 80mg/2ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'field_setID' => 'sdfx300MG Tab',
                'field_setName' => '300MG Tab',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'field_setID' => 'sdfx300mglmlin2mlamp',
                'field_setName' => '300mg/lmlin2mlamp.',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'field_setID' => 'sdfx3TCAZT150MG300MG',
            'field_setName' => '(3TC/AZT) 150MG/300MG',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'field_setID' => 'sdfx471 Chlorhexidine digluconate',
            'field_setName' => '4%(7.1% Chlorhexidine digluconate)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'field_setID' => 'sdfx4mgmlin1ml',
                'field_setName' => '4mg/ml in 1ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'field_setID' => 'sdfx4sachetsSOOmlofORS10tabletsofZinc',
            'field_setName' => '4sachets(SOOml)ofORS&10tabletsofZinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'field_setID' => 'sdfx5',
                'field_setName' => '5%',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'field_setID' => 'sdfx5 IU',
                'field_setName' => '5 IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'field_setID' => 'sdfx50000IU',
                'field_setName' => '50,000IU',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'field_setID' => 'sdfx500mg100mlin10mlamp',
                'field_setName' => '500mg/100ml in 10ml amp',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'field_setID' => 'sdfx500MG25MG Tab',
                'field_setName' => '500MG+25MG Tab',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'field_setID' => 'sdfx500mgml',
                'field_setName' => '500mg/ml',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'field_setID' => 'sdfx5mu',
                'field_setName' => '5mu',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'field_setID' => 'sdfx600MG Tab',
                'field_setName' => '600MG Tab',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'field_setID' => 'sdfxaccesswater',
                'field_setName' => 'accesswater',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'field_setID' => 'sdfxactionssupervisee',
                'field_setName' => 'sdfxactionssupervisee',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'field_setID' => 'sdfxactionssupervisor',
                'field_setName' => 'sdfxactionssupervisor',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'field_setID' => 'sdfxactive_CHEWS',
                'field_setName' => 'active_CHEWS',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'field_setID' => 'sdfxactive_CHEWS_trained_in_ICCM',
                'field_setName' => 'active_CHEWS_trained_in_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'field_setID' => 'sdfxactive_CHVs',
                'field_setName' => 'active_CHVs',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'field_setID' => 'sdfxactive_CHVs_trained_on_ICCM',
                'field_setName' => 'active_CHVs_trained_on_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'field_setID' => 'sdfxAdultresucitationkit',
                'field_setName' => 'Adult resucitation kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'field_setID' => 'sdfxageinmonths',
                'field_setName' => 'ageinmonths',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'field_setID' => 'sdfxageinmonthstxt',
                'field_setName' => 'ageinmonthstxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'field_setID' => 'sdfxAL',
                'field_setName' => 'AL',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'field_setID' => 'sdfxanaemia',
                'field_setName' => 'anaemia',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'field_setID' => 'sdfxandcounty',
                'field_setName' => 'andcounty',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'field_setID' => 'sdfxAppropriatecounsellinginfeeding',
                'field_setName' => 'Appropriatecounsellinginfeeding',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'field_setID' => 'sdfxAppropriatefollowuparranged',
                'field_setName' => 'Appropriatefollowuparranged',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'field_setID' => 'sdfxAppropriaterefferaldone',
                'field_setName' => 'Appropriaterefferaldone',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'field_setID' => 'sdfxapr',
                'field_setName' => 'apr',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'field_setID' => 'sdfxaredrugsavailavle',
                'field_setName' => 'aredrugsavailavle',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'field_setID' => 'sdfxArtemetherLeumefantrineAL',
            'field_setName' => 'Artemether+Leumefantrine(AL)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'field_setID' => 'sdfxArtery',
                'field_setName' => 'Artery',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'field_setID' => 'sdfxArtesunateInjection',
                'field_setName' => 'ArtesunateInjection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'field_setID' => 'sdfxAskedhowlongthechildhadthecough',
                'field_setName' => 'Askedhowlongthechildhadthecough',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'field_setID' => 'sdfxAskhowmanytimesthechild',
                'field_setName' => 'Askhowmanytimesthechild',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'field_setID' => 'sdfxAskifthechildisexclusively',
                'field_setName' => 'sdfxAskifthechildisexclusively',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'field_setID' => 'sdfxAskiftheinfantisbreastfeeding',
                'field_setName' => 'Askiftheinfantisbreastfeeding',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'field_setID' => 'sdfxaskprovider',
                'field_setName' => 'sdfxaskprovider',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'field_setID' => 'sdfxaspect',
                'field_setName' => 'Aspect',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'field_setID' => 'sdfxAssessor',
                'field_setName' => 'Assessor',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'field_setID' => 'sdfxAssessorFindings',
                'field_setName' => 'AssessorFindings',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'field_setID' => 'sdfxattachment',
                'field_setName' => 'attachment',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'field_setID' => 'sdfxaug',
                'field_setName' => 'aug',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'field_setID' => 'sdfxAvailability',
                'field_setName' => 'Availability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'field_setID' => 'sdfxavailablequant',
                'field_setName' => 'availablequant',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'field_setID' => 'sdfxAvailable_Not_Available',
                'field_setName' => 'Available_Not_Available',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'field_setID' => 'sdfxBabyWrappersLinen',
                'field_setName' => 'Baby Wrappers/Linen',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'field_setID' => 'sdfxbacterialinfection',
                'field_setName' => 'bacterialinfection',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'field_setID' => 'sdfxBenzylPenicllin',
                'field_setName' => 'BenzylPenicllin',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'field_setID' => 'sdfxblank',
                'field_setName' => 'blank',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'field_setID' => 'sdfxbowls',
                'field_setName' => 'bowls',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'field_setID' => 'sdfxCADRE',
                'field_setName' => 'CADRE',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'field_setID' => 'sdfxCaesarianSectionset',
                'field_setName' => 'Caesarian Section set',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'field_setID' => 'sdfxCalciumGluconateInjection',
                'field_setName' => 'CalciumGluconateInjection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'field_setID' => 'sdfxCarefordevelopment',
                'field_setName' => 'Carefordevelopment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'field_setID' => 'sdfxCareforDevelopmente',
                'field_setName' => 'CareforDevelopmente',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'field_setID' => 'sdfxcases_treated_with_zinc_and_ors',
                'field_setName' => 'cases_treated_with_zinc_and_ors',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'field_setID' => 'sdfxCeftriaxone',
                'field_setName' => 'Ceftriaxone',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'field_setID' => 'sdfxcentimetres',
                'field_setName' => 'centimetres',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'field_setID' => 'sdfxcentralcounty_government',
                'field_setName' => 'central/county_government',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'field_setID' => 'sdfxcentrcountyPrivOwnPartNa',
                'field_setName' => 'centrcountyPrivOwnPartNa',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'field_setID' => 'sdfxcertified',
                'field_setName' => 'sdfxcertified',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'field_setID' => 'sdfxCheckedforodoemaonbothfeet',
                'field_setName' => 'Checkedforodoemaonbothfeet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'field_setID' => 'sdfxCheckedforpalmorpallor',
                'field_setName' => 'Checkedforpalmorpallor',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'field_setID' => 'sdfxCheckedforseverewasting',
                'field_setName' => 'Checkedforseverewasting',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'field_setID' => 'sdfxCheckforbreastattachment',
                'field_setName' => 'Checkforbreastattachment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'field_setID' => 'sdfxCheckforinfantpositioning',
                'field_setName' => 'Checkforinfantpositioning',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'field_setID' => 'sdfxCheckforwhitepatches',
                'field_setName' => 'Checkforwhitepatches',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'field_setID' => 'sdfxCheckifinfantissucklingeffectively',
                'field_setName' => 'Checkifinfantissucklingeffectively',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'field_setID' => 'sdfxcheckifmembraneruptured',
                'field_setName' => 'checkifmembraneruptured',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'field_setID' => 'sdfxcheckifmotherfever',
                'field_setName' => 'checkifmotherfever',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'field_setID' => 'sdfxCheckifmotherisconfirmedHIVpositive',
                'field_setName' => 'CheckifmotherisconfirmedHIVpositive',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'field_setID' => 'sdfxcheckifmothertbtreatment',
                'field_setName' => 'checkifmothertbtreatment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'field_setID' => 'sdfxCheckifmothertestedVDRLpositive',
                'field_setName' => 'CheckifmothertestedVDRLpositive',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'field_setID' => 'sdfxchildfeedingcombo',
                'field_setName' => 'childfeedingcombo',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'field_setID' => 'sdfxChildsfeeding',
                'field_setName' => 'Childsfeeding',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'field_setID' => 'sdfxChildsFeedingd',
                'field_setName' => 'ChildsFeedingd',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'field_setID' => 'sdfxchlorhexidine',
                'field_setName' => 'chlorhexidine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'field_setID' => 'sdfxclinical_satff_single_label',
                'field_setName' => 'clinical staff',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'field_setID' => 'sdfxcommodities',
                'field_setName' => 'commodities',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'field_setID' => 'sdfxcommodity_unit',
                'field_setName' => 'commodity_unit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'field_setID' => 'sdfxcommunitsattached',
                'field_setName' => 'communitsattached',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'field_setID' => 'sdfxcommunitsregsupervised',
                'field_setName' => 'communitsregsupervised',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'field_setID' => 'sdfxcommunity_strategy',
                'field_setName' => 'community_strategy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'field_setID' => 'sdfxcommunity_units_trained_in_ICCM',
                'field_setName' => 'community_units_trained_in_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'field_setID' => 'sdfxcomm_unitsIncentivesCHV',
                'field_setName' => 'comm_unitsIncentivesCHV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'field_setID' => 'sdfxcomm_units_trainedCMNH',
                'field_setName' => 'communitstrainedCMNH',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'field_setID' => 'sdfxcongenitalsyphillis',
                'field_setName' => 'congenitalsyphillis',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'field_setID' => 'sdfxcoordinatortxt',
                'field_setName' => 'coordinatortxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'field_setID' => 'sdfxCord',
                'field_setName' => 'Cord',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'field_setID' => 'sdfxCordClamps',
                'field_setName' => 'Cord Clamps',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'field_setID' => 'sdfxCorrectClassificatione',
                'field_setName' => 'CorrectClassificatione',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'field_setID' => 'sdfxCorrectClassificationk',
                'field_setName' => 'CorrectClassificationk',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'field_setID' => 'sdfxCorrectlyassessesandclassifies',
                'field_setName' => 'Correctlyassessesandclassifies',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'field_setID' => 'sdfxCorrectlyclassifiestreatandcounsel',
                'field_setName' => 'Correctlyclassifiestreatandcounsel',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'field_setID' => 'sdfxCorrectlyconductsHIVassessment',
                'field_setName' => 'CorrectlyconductsHIVassessment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'field_setID' => 'sdfxCorrectlyidentifies4dangersigns',
                'field_setName' => 'Correctlyidentifies4dangersigns',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'field_setID' => 'sdfxCorrectlyidentifies4symptoms',
                'field_setName' => 'Correctlyidentifies4symptoms',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'field_setID' => 'sdfxCorrectmanagementofyounginfant',
                'field_setName' => 'Correctmanagementofyounginfant',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'field_setID' => 'sdfxCough',
                'field_setName' => 'Cough',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'field_setID' => 'sdfxcoughtreatment',
                'field_setName' => 'coughtreatment',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'field_setID' => 'sdfxcountytxt',
                'field_setName' => 'countytxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'field_setID' => 'sdfxCurrentServiceUnit',
                'field_setName' => 'CurrentServiceUnit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'field_setID' => 'sdfxCutdowntrayset',
                'field_setName' => 'Cut down tray set',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'field_setID' => 'sdfxdate',
                'field_setName' => 'sdfxdate',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'field_setID' => 'sdfxdaystxt',
                'field_setName' => 'daystxt',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'field_setID' => 'sdfxdec',
                'field_setName' => 'dec',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'field_setID' => 'sdfxdegrees',
                'field_setName' => 'degrees',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'field_setID' => 'sdfxDelkit',
                'field_setName' => 'Delkit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'field_setID' => 'sdfxdesignatedlocationfororal',
                'field_setName' => 'designatedlocationfororal',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'field_setID' => 'sdfxdesignated_location_for_ORT',
                'field_setName' => 'designated location for ORT',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'field_setID' => 'sdfxDesignation',
                'field_setName' => 'Designation',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'field_setID' => 'sdfxdesignationtxt',
                'field_setName' => 'designationtxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'field_setID' => 'sdfxDeworming',
                'field_setName' => 'Deworming',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'field_setID' => 'sdfxDewormingc',
                'field_setName' => 'Dewormingc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'field_setID' => 'sdfxdewormingradio',
                'field_setName' => 'dewormingradio',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'field_setID' => 'sdfxDexamethasoneInjection',
                'field_setName' => 'DexamethasoneInjection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'field_setID' => 'sdfxdiarrhoea',
                'field_setName' => 'diarrhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'field_setID' => 'sdfxDiarrhoea4',
                'field_setName' => 'Diarrhoea 4',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('field_sets')->insert(array (
            0 => 
            array (
                'field_setID' => 'sdfxdiarrhoeatreatment',
                'field_setName' => 'diarrhoeatreatment',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'field_setID' => 'sdfxDidcaregiverexplaincorrectlyhowto',
                'field_setName' => 'Didcaregiverexplaincorrectlyhowto',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'field_setID' => 'sdfxDidcaregiverexplaincorrectlyhowtotake',
                'field_setName' => 'Didcaregiverexplaincorrectlyhowtotake',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'field_setID' => 'sdfxDidcaregiverexplainwhentofollowup',
                'field_setName' => 'Didcaregiverexplainwhentofollowup',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'field_setID' => 'sdfxDidcaregiverexplainwhentoreturn',
                'field_setName' => 'Didcaregiverexplainwhentoreturn',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'field_setID' => 'sdfxDidprovideraskcaregiverforfeedback',
                'field_setName' => 'Didprovideraskcaregiverforfeedback',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'field_setID' => 'sdfxDidprovidercounselaboutchildsfeeding',
                'field_setName' => 'Didprovidercounselaboutchildsfeeding',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'field_setID' => 'sdfxDidproviderexplainhowtotakecare',
                'field_setName' => 'Didproviderexplainhowtotakecare',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'field_setID' => 'sdfxDidproviderexplainwhentoreturn',
                'field_setName' => 'Didproviderexplainwhentoreturn',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'field_setID' => 'sdfxDidprovidergivefirstdosofmedicine',
                'field_setName' => 'Didprovidergivefirstdosofmedicine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'field_setID' => 'sdfxDidproviderinformcaregiver',
                'field_setName' => 'Didproviderinformcaregiver',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'field_setID' => 'sdfxDidproviderteachandinstructcaregiver',
                'field_setName' => 'Didproviderteachandinstructcaregiver',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'field_setID' => 'sdfxDidproviderusecaregiverscard',
                'field_setName' => 'Didproviderusecaregiverscard',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'field_setID' => 'sdfxDidprovideusetheIMCIChartBooklet',
                'field_setName' => 'DidprovideusetheIMCIChartBooklet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'field_setID' => 'sdfxDidtheproviderusetheunderfiveregister',
                'field_setName' => 'Didtheproviderusetheunderfiveregister',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'field_setID' => 'sdfxDisposableSyringes',
                'field_setName' => 'DisposableSyringes',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'field_setID' => 'sdfxdnapcr',
                'field_setName' => 'dnapcr',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'field_setID' => 'sdfxdoctor_label',
                'field_setName' => 'doctor single',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'field_setID' => 'sdfxduration of unavailability',
                'field_setName' => 'duration of unavailability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'field_setID' => 'sdfxDVD Player',
                'field_setName' => 'DVD Player',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'field_setID' => 'sdfxearinfection',
                'field_setName' => 'earinfection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'field_setID' => 'sdfxEfavirenz',
                'field_setName' => 'Efavirenz',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'field_setID' => 'sdfxeid',
                'field_setName' => 'eid',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'field_setID' => 'sdfxElectricity',
                'field_setName' => 'Electricity',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'field_setID' => 'sdfxEMAIL',
                'field_setName' => 'EMAIL',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'field_setID' => 'sdfxemailtxt',
                'field_setName' => 'emailtxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'field_setID' => 'sdfxEmergencyOralContraceptive',
                'field_setName' => 'EmergencyOralContraceptive',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'field_setID' => 'sdfxemptylabel',
                'field_setName' => '',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'field_setID' => 'sdfxEnterReaso',
                'field_setName' => 'Enter Reason',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'field_setID' => 'sdfxEpisiotomy',
                'field_setName' => 'Episiotomy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'field_setID' => 'sdfxErgometrine',
                'field_setName' => 'Ergometrine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'field_setID' => 'sdfxexclusivebreastfeeding',
                'field_setName' => 'exclusivebreastfeeding',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'field_setID' => 'sdfxEyeInfection',
                'field_setName' => 'Eye Infection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'field_setID' => 'sdfxfacilitytxt',
                'field_setName' => 'facilitytxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'field_setID' => 'sdfxfacility_design_location',
                'field_setName' => 'facility_design_location',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'field_setID' => 'sdfxfeb',
                'field_setName' => 'feb',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'field_setID' => 'sdfxFeedingproblemlowweight',
                'field_setName' => 'Feedingproblemlowweight',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'field_setID' => 'sdfxFemaleCondoms',
                'field_setName' => 'FemaleCondoms',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'field_setID' => 'sdfxFever',
                'field_setName' => 'Fever',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'field_setID' => 'sdfxfever3',
                'field_setName' => 'fever3',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'field_setID' => 'sdfxfevernomalaria',
                'field_setName' => 'fevernomalaria',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'field_setID' => 'sdfxfevertreatment',
                'field_setName' => 'fevertreatment',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'field_setID' => 'sdfxfindings',
                'field_setName' => 'findings',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'field_setID' => 'sdfxfindings2',
                'field_setName' => 'findings2',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'field_setID' => 'sdfxfindingstxt',
                'field_setName' => 'findingstxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'field_setID' => 'sdfxfname',
                'field_setName' => 'fname',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'field_setID' => 'sdfxfnametxt',
                'field_setName' => 'fnametxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'field_setID' => 'sdfxfullypracticingimci',
                'field_setName' => 'fullypracticingimci',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'field_setID' => 'sdfxfully_Nonfully',
                'field_setName' => 'fully_Nonfully',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'field_setID' => 'sdfxGallipots',
                'field_setName' => 'Gallipots',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'field_setID' => 'sdfxgender',
                'field_setName' => 'gender',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'field_setID' => 'sdfxgenderradio',
                'field_setName' => 'genderradio',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'field_setID' => 'sdfxGentamicin',
                'field_setName' => 'Gentamicin',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'field_setID' => 'sdfxgen_opd_paed_opd_mch',
                'field_setName' => 'gen_opd_paed_opd_mch',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'field_setID' => 'sdfxgoesbackimmediately_slowly',
                'field_setName' => 'goesbackimmediately_slowly',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'field_setID' => 'sdfxHasthechildhadconvulsions?',
                'field_setName' => 'Hasthechildhadconvulsions?',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'field_setID' => 'sdfxhcwfindings',
                'field_setName' => 'hcwfindings',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'field_setID' => 'sdfxHCWRESPONSE',
                'field_setName' => 'HCWRESPONSE',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'field_setID' => 'sdfxHeightLengthtakenandrecorded',
                'field_setName' => 'Height/Lengthtakenandrecorded',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'field_setID' => 'sdfxHIV',
                'field_setName' => 'HIV',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'field_setID' => 'sdfxHIVExposedInfantsCHV',
                'field_setName' => 'HIVExposedInfantsCHV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'field_setID' => 'sdfxHIVexposednot',
                'field_setName' => 'HIVexposednot',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'field_setID' => 'sdfxHIVexposureinfection',
                'field_setName' => 'HIVexposureinfection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'field_setID' => 'sdfxHIVpositivenegative',
                'field_setName' => 'HIVpositivenegative',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'field_setID' => 'sdfxHydralazine IV',
                'field_setName' => 'Hydralazine IV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'field_setID' => 'sdfxHydralazineIV',
                'field_setName' => 'Hydralazine IV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'field_setID' => 'sdfxiccm_tool',
                'field_setName' => 'iccm_tool',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'field_setID' => 'sdfxIfchildisHIVexposedwasHIVtestdone',
                'field_setName' => 'IfchildisHIVexposedwasHIVtestdone',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'field_setID' => 'sdfxIfNotoQuestion1indicatewhethertheHCW:',
                'field_setName' => 'IfNotoQuestion1indicatewhethertheHCW:',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'field_setID' => 'sdfxIfotherIndicateNameofCordinator:',
                'field_setName' => 'Ifother,IndicateNameofCordinator:',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'field_setID' => 'sdfxIfYesIndicateNameofcounty',
                'field_setName' => 'sdfxIfYesIndicateNameofcounty',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'field_setID' => 'sdfxIfYesIndicateNameoffacility',
                'field_setName' => 'IfYesIndicateNameoffacility',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'field_setID' => 'sdfximci_case',
                'field_setName' => 'imci_case',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'field_setID' => 'sdfxImmunisationStatus',
                'field_setName' => 'ImmunisationStatus',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'field_setID' => 'sdfxImmunization',
                'field_setName' => 'Immunization',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'field_setID' => 'sdfxImplanon',
                'field_setName' => 'Implanon',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'field_setID' => 'sdfxinabilitytodrinkorbreastfeed',
                'field_setName' => 'inabilitytodrinkorbreastfeed',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'field_setID' => 'sdfxIncharge',
                'field_setName' => 'Incharge',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'field_setID' => 'sdfxincludetreatment',
                'field_setName' => 'includetreatment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'field_setID' => 'sdfxindiavail',
                'field_setName' => 'indiavail',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'field_setID' => 'sdfxindicateavailability',
                'field_setName' => 'indicateavailability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'field_setID' => 'sdfxinfantBornHomeCHVs',
                'field_setName' => 'infantBornHomeCHVs',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'field_setID' => 'sdfxInjectableHormonalContraceptives',
                'field_setName' => 'InjectableHormonalContraceptives',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'field_setID' => 'sdfxinjection',
                'field_setName' => 'injection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'field_setID' => 'sdfxinjection 1g',
                'field_setName' => 'injection 1g',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'field_setID' => 'sdfxInjectionQuinine',
                'field_setName' => 'InjectionQuinine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'field_setID' => 'sdfxInsecticideTreatedNets',
                'field_setName' => 'InsecticideTreatedNets',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'field_setID' => 'sdfxinstructions',
                'field_setName' => 'sdfxinstructions',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'field_setID' => 'sdfxinstructions2',
                'field_setName' => 'instructions2',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'field_setID' => 'sdfxinstructions3',
                'field_setName' => 'instructions3',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'field_setID' => 'sdfxInstrument',
                'field_setName' => 'Instrument',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'field_setID' => 'sdfxInsulinSyringes',
                'field_setName' => 'InsulinSyringes',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'field_setID' => 'sdfxishwworkingatsameplacetreained',
                'field_setName' => 'ishwworkingatsameplacetreained',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'field_setID' => 'sdfxIsthechildconvulsingnow?',
                'field_setName' => 'Isthechildconvulsingnow?',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'field_setID' => 'sdfxIsthechildvomittingeverything?',
                'field_setName' => 'Isthechildvomittingeverything?',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'field_setID' => 'sdfxIUCD Copper T',
            'field_setName' => 'IUCD (Copper T)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'field_setID' => 'sdfxIVStarterKit',
                'field_setName' => 'IVStarterKit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'field_setID' => 'sdfxJadelle',
                'field_setName' => 'Jadelle',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'field_setID' => 'sdfxjan',
                'field_setName' => 'jan',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
                'field_setName' => 'jan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'field_setID' => 'sdfxJaundice',
                'field_setName' => 'Jaundice',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'field_setID' => 'sdfxjul',
                'field_setName' => 'jul',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'field_setID' => 'sdfxjun',
                'field_setName' => 'jun',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'field_setID' => 'sdfxKeyCoordinatorofthetrainingSelectOne',
            'field_setName' => 'KeyCoordinatorofthetraining(SelectOne)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'field_setID' => 'sdfxkgs',
                'field_setName' => 'kgs',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'field_setID' => 'sdfxkidneydish',
                'field_setName' => 'kidneydish',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'field_setID' => 'sdfxlabelless_number_box',
                'field_setName' => 'labelless_number_box',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'field_setID' => 'sdfxlabelless_text_box',
                'field_setName' => 'labelless_text_box',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'field_setID' => 'sdfxLamivudineZidovudine',
                'field_setName' => 'Lamivudine/Zidovudine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'field_setID' => 'sdfxLethargyandUnconsciousness',
                'field_setName' => 'LethargyandUnconsciousness',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'field_setID' => 'sdfxLignocaine 1 injection',
                'field_setName' => 'Lignocaine 1% injection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'field_setID' => 'sdfxLocation_of_availability',
                'field_setName' => 'Location_of_availability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'field_setID' => 'sdfxLopinavirRitonavirLPVr',
            'field_setName' => 'Lopinavir+Ritonavir (LPV/r)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'field_setID' => 'sdfxLowOsmolarityOralRehydrationSaltsORS',
            'field_setName' => 'LowOsmolarityOralRehydrationSalts(ORS)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'field_setID' => 'sdfxMagnesium Sulphate IV',
                'field_setName' => 'Magnesium Sulphate IV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'field_setID' => 'sdfxmainsource',
                'field_setName' => 'mainsource',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'field_setID' => 'sdfxmainsupplier',
                'field_setName' => 'mainsupplier',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'field_setID' => 'sdfxmain_reason_for_unavailability',
                'field_setName' => 'main_reason_for_unavailability',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'field_setID' => 'sdfxMalnutrition',
                'field_setName' => 'Malnutrition',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'field_setID' => 'sdfxMalnutritiona',
                'field_setName' => 'Malnutritiona',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'field_setID' => 'sdfxmar',
                'field_setName' => 'mar',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'field_setID' => 'sdfxMaternal and Perinatal death',
            'field_setName' => 'Maternal and Perinatal death Surveillance and Review(MPDSR)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'field_setID' => 'sdfxMaternityIncharge',
                'field_setName' => 'MaternityIncharge',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'field_setID' => 'sdfxmay',
                'field_setName' => 'may',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'field_setID' => 'sdfxMayo',
                'field_setName' => 'Mayo',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'field_setID' => 'sdfxMCH',
                'field_setName' => '',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'field_setID' => 'sdfxMCHIncharge',
                'field_setName' => 'MCHIncharge',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'field_setID' => 'sdfxMCH_US_OPD_Ward',
                'field_setName' => 'MCH_US_OPD_Ward',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'field_setID' => 'sdfxMetronidazole IV',
                'field_setName' => 'Metronidazole IV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'field_setID' => 'sdfxMicroscope',
                'field_setName' => 'Microscope',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'field_setID' => 'sdfxMisoprostol',
                'field_setName' => 'Misoprostol',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'field_setID' => 'sdfxMOBILE',
                'field_setName' => 'MOBILE',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'field_setID' => 'sdfxmobiletxt',
                'field_setName' => 'mobiletxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'field_setID' => 'sdfxMOHMOHOOTHER',
                'field_setName' => 'MOH/MOHO/OTHER',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'field_setID' => 'sdfxmotherfather',
                'field_setName' => 'motherfather',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'field_setID' => 'sdfxMotherscondition',
                'field_setName' => 'Motherscondition',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'field_setID' => 'sdfxmother_child_booklet',
                'field_setName' => 'mother_child_booklet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'field_setID' => 'sdfxMUACratetakenandrecorded',
                'field_setName' => 'MUACratetakenandrecorded',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'field_setID' => 'sdfxMUACtakenandrecorded',
                'field_setName' => 'MUACtakenandrecorded',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'field_setID' => 'sdfxname',
                'field_setName' => 'name',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'field_setID' => 'sdfxnametxt',
                'field_setName' => 'nametxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'field_setID' => 'sdfxnatgridGenSolBio',
                'field_setName' => 'natgridGenSolBio',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'field_setID' => 'sdfxNebulizer',
                'field_setName' => 'Nebulizer',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'field_setID' => 'sdfxNeededdewormingmedicationgiven',
                'field_setName' => 'Neededdewormingmedicationgiven',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'field_setID' => 'sdfxNeededRotavirusat10weeksgiven',
                'field_setName' => 'NeededRotavirusat10weeksgiven',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'field_setID' => 'sdfxNeededRotavirusat6weeksgiven',
                'field_setName' => 'NeededRotavirusat6weeksgiven',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'field_setID' => 'sdfxNeededVitaminAsupplemenationgiven',
                'field_setName' => 'NeededVitaminAsupplemenationgiven',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'field_setID' => 'sdfxNeedle',
                'field_setName' => 'Needle',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'field_setID' => 'sdfxNeonateresuscitationkit',
                'field_setName' => 'Neonate resuscitation kit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'field_setID' => 'sdfxNevirapine NVP',
            'field_setName' => 'Nevirapine (NVP)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'field_setID' => 'sdfxNevirapine SD NVP',
            'field_setName' => 'Nevirapine (SD NVP)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'field_setID' => 'sdfxNGTube',
                'field_setName' => 'NGTube',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'field_setID' => 'sdfxNID',
                'field_setName' => 'NID',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'field_setID' => 'sdfxnidtxt',
                'field_setName' => 'nidtxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'field_setID' => 'sdfxnoearinfection',
                'field_setName' => 'noearinfection',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'field_setID' => 'sdfxNon_Diarrhoea',
                'field_setName' => 'Non_Diarrhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'field_setID' => 'sdfxnopneumonia',
                'field_setName' => 'nopneumonia',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'field_setID' => 'sdfxnormalweight',
                'field_setName' => 'normalweight',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'field_setID' => 'sdfxnosomeseveredehydration',
                'field_setName' => 'nosomeseveredehydration',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'field_setID' => 'sdfxnotestkitsnolab',
                'field_setName' => 'notestkitsnolab',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'field_setID' => 'sdfxnotorderedOrderednotreceivedexpired',
                'field_setName' => 'notorderedOrderednotreceivedexpired',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'field_setID' => 'sdfxnot_applicable',
                'field_setName' => 'not_applicable',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'field_setID' => 'sdfxnov',
                'field_setName' => 'nov',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'field_setID' => 'sdfxNo_Treatment',
                'field_setName' => 'No_Treatment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'field_setID' => 'sdfxnurse_label',
                'field_setName' => 'nurse single',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'field_setID' => 'sdfxoct',
                'field_setName' => 'oct',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'field_setID' => 'sdfxontracknotontrack',
                'field_setName' => 'ontracknotontrack',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'field_setID' => 'sdfxOPD_MCH_USClinic_Ward_Other',
                'field_setName' => 'OPD_MCH_USClinic_Ward_Other',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'field_setID' => 'sdfxOral Hormonal Contraceptives',
                'field_setName' => 'Oral Hormonal Contraceptives',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'field_setID' => 'sdfxordered_notordered_expired',
                'field_setName' => 'ordered_notordered_expired',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'field_setID' => 'sdfxORSZincCo-pack',
                'field_setName' => 'ORS&ZincCo-pack',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'field_setID' => 'sdfxORS_Zinc',
                'field_setName' => 'ORS_Zinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'field_setID' => 'sdfxort',
                'field_setName' => 'ort',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'field_setID' => 'sdfxort moh',
            'field_setName' => 'ort (moh)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'field_setID' => 'sdfxORTCorner',
                'field_setName' => 'ORTCorner',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'field_setID' => 'sdfxORTCorner2',
                'field_setName' => 'ORTCorner2',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'field_setID' => 'sdfxortuptodate',
                'field_setName' => 'ortuptodate',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'field_setID' => 'sdfxother',
                'field_setName' => 'other',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'field_setID' => 'sdfxOtherconditions',
                'field_setName' => 'Otherconditions',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'field_setID' => 'sdfxOthers',
                'field_setName' => 'Others',
                'type' => 'coolradio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'field_setID' => 'sdfxown_initiative',
                'field_setName' => 'own_initiative',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'field_setID' => 'sdfxOxygen',
                'field_setName' => 'Oxygen',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'field_setID' => 'sdfxOxytocin',
                'field_setName' => 'Oxytocin',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'field_setID' => 'sdfxpalmorpallor',
                'field_setName' => 'palmorpallor',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'field_setID' => 'sdfxpartner',
                'field_setName' => 'partner',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'field_setID' => 'sdfxPatpurch_Facpurch_Facrece_Procond_Procondwo',
                'field_setName' => 'Patpurch_Facpurch_Facrece_Procond_Procondwo',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'field_setID' => 'sdfxperminute',
                'field_setName' => 'perminute',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'field_setID' => 'sdfxPersonalnumber',
                'field_setName' => 'PersonalNumber',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'field_setID' => 'sdfxpersonalnumtxt',
                'field_setName' => 'personalnumtxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'field_setID' => 'sdfxPhoneNumber',
                'field_setName' => 'PhoneNumber',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'field_setID' => 'sdfxPneumonia',
                'field_setName' => 'Pneumonia',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'field_setID' => 'sdfxpositioning',
                'field_setName' => 'positioning',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'field_setID' => 'sdfxpositivenegative',
                'field_setName' => 'positivenegative',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'field_setID' => 'sdfxpregCasesRefCHV',
                'field_setName' => 'pregCasesRefCHV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'field_setID' => 'sdfxpresentingcomplaints',
                'field_setName' => 'presentingcomplaints',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'field_setID' => 'sdfxpresentingcomplaintstxt',
                'field_setName' => 'presentingcomplaintstxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'field_setID' => 'sdfxpres_notpres',
                'field_setName' => 'pres_notpres',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'field_setID' => 'sdfxprivately_supplied',
                'field_setName' => 'privately_supplied',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'field_setID' => 'sdfxprovisionforwaste',
                'field_setName' => 'provision for waste',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'field_setID' => 'sdfxQuestion',
                'field_setName' => 'Question',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'field_setID' => 'sdfxquestion_where_sick_children_seen',
                'field_setName' => 'question_where_sick_children_seen',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'field_setID' => 'sdfxq_a_correctclassification',
                'field_setName' => 'q_a_correctclassification',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'field_setID' => 'sdfxq_a_diarrhoea',
                'field_setName' => 'q_a_diarrhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'field_setID' => 'sdfxq_a_duration',
                'field_setName' => 'q_a_duration',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'field_setID' => 'sdfxq_a_earpain',
                'field_setName' => 'q_a_earpain',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'field_setID' => 'sdfxq_a_eyedicharge',
                'field_setName' => 'q_a_eyedicharge',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'field_setID' => 'sdfxq_a_howlong',
                'field_setName' => 'q_a_howlong',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'field_setID' => 'sdfxq_a_Malnutrition',
                'field_setName' => 'q_a_Malnutrition',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'field_setID' => 'sdfxq_a_upadted charts',
                'field_setName' => 'q_upadted charts',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'field_setID' => 'sdfxq_a_yellowskin',
                'field_setName' => 'q_a_yellowskin',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'field_setID' => 'sdfxq_b_bloodinstool',
                'field_setName' => 'q_b_bloodinstool',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'field_setID' => 'sdfxq_b_centralcyanosis',
                'field_setName' => 'q_b_centralcyanosis',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'field_setID' => 'sdfxq_b_countstaken',
                'field_setName' => 'q_b_countstaken',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'field_setID' => 'sdfxq_b_durationdiscolor',
                'field_setName' => 'q_b_durationdiscolor',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'field_setID' => 'sdfxq_b_durationeyedischarge',
                'field_setName' => 'q_b_durationeyedischarge',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'field_setID' => 'sdfxq_b_eardischarge',
                'field_setName' => 'q_b_eardischarge',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'field_setID' => 'sdfxq_b_historyoftravel',
                'field_setName' => 'q_b_historyoftravel',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'field_setID' => 'sdfxq_b_ort',
                'field_setName' => 'q_b_ort',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'field_setID' => 'sdfxq_c_checkeyepus',
                'field_setName' => 'q_c_checkeyepus',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'field_setID' => 'sdfxq_c_chestindrawing',
                'field_setName' => 'q_c_chestindrawing',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'field_setID' => 'sdfxq_c_classificationdone',
                'field_setName' => 'q_c_classificationdone',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'field_setID' => 'sdfxq_c_duration_of_discharge',
                'field_setName' => 'q_c_duration_of_discharge',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'field_setID' => 'sdfxq_c_fontanelle',
                'field_setName' => 'q_c_fontanelle',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'field_setID' => 'sdfxq_c_iccm',
                'field_setName' => 'q_c_iccm',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'field_setID' => 'sdfxq_c_lethurgic',
                'field_setName' => 'q_c_lethurgic',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'field_setID' => 'sdfxq_c_temperature',
                'field_setName' => 'q_c_temperature',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'field_setID' => 'sdfxq_d_correctclassification',
                'field_setName' => 'q_d_correctclassification',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'field_setID' => 'sdfxq_d_eyeswollen',
                'field_setName' => 'q_d_eyeswollen',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'field_setID' => 'sdfxq_d_protocol',
                'field_setName' => 'q_d_protocol',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'field_setID' => 'sdfxq_d_pus',
                'field_setName' => 'q_d_pus',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'field_setID' => 'sdfxq_d_restless',
                'field_setName' => 'q_d_restless',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'field_setID' => 'sdfxq_d_signsmeasles',
                'field_setName' => 'q_d_signsmeasles',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'field_setID' => 'sdfxq_d_stridor',
                'field_setName' => 'q_d_stridor',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'field_setID' => 'sdfxq_e_diarhoea',
                'field_setName' => 'q_e_diarhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'field_setID' => 'sdfxq_e_malaria',
                'field_setName' => 'q_e_malaria',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'field_setID' => 'sdfxq_e_skinpustules',
                'field_setName' => 'q_e_skinpustules',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'field_setID' => 'sdfxq_e_sunkeneyes',
                'field_setName' => 'q_e_sunkeneyes',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'field_setID' => 'sdfxq_e_tenderswelling',
                'field_setName' => 'q_e_tenderswelling',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'field_setID' => 'sdfxq_e_wheeze',
                'field_setName' => 'q_e_wheeze',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'field_setID' => 'sdfxq_e_whitespots',
                'field_setName' => 'q_e_whitespots',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'field_setID' => 'sdfxq_f_classificationdone',
                'field_setName' => 'q_f_classificationdone',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'field_setID' => 'sdfxq_f_convulsions',
                'field_setName' => 'q_f_convulsions',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'field_setID' => 'sdfxq_f_crosseyes',
                'field_setName' => 'q_f_crosseyes',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'field_setID' => 'sdfxq_f_iec',
                'field_setName' => 'q_f_iec',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'field_setID' => 'sdfxq_f_malariatest',
                'field_setName' => 'q_f_malariatest',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'field_setID' => 'sdfxq_f_skinpinch',
                'field_setName' => 'q_f_skinpinch',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'field_setID' => 'sdfxq_g_art',
                'field_setName' => 'q_g_art',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'field_setID' => 'sdfxq_g_breastfeed',
                'field_setName' => 'q_g_breastfeed',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'field_setID' => 'sdfxq_g_classifydiarrhoea',
                'field_setName' => 'q_g_classifydiarrhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'field_setID' => 'sdfxq_g_cornea',
                'field_setName' => 'q_g_cornea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'field_setID' => 'sdfxq_g_correctclassification',
                'field_setName' => 'q_g_correctclassification',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'field_setID' => 'sdfxq_g_stiffness',
                'field_setName' => 'q_g_stiffness',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'field_setID' => 'sdfxq_h_algorithm',
                'field_setName' => 'q_h_algorithm',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'field_setID' => 'sdfxq_h_classificationdone',
                'field_setName' => 'q_h_classificationdone',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'field_setID' => 'sdfxq_h_fearoflight',
                'field_setName' => 'q_h_fearoflight',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'field_setID' => 'sdfxq_h_notbreathing',
                'field_setName' => 'q_h_notbreathing',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'field_setID' => 'sdfxq_i_breathcounts',
                'field_setName' => 'q_i_breathcounts',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'field_setID' => 'sdfxq_i_correctclassification',
                'field_setName' => 'q_i_correctclassification',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'field_setID' => 'sdfxq_i_feartearing',
                'field_setName' => 'q_i_feartearing',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'field_setID' => 'sdfxq_j_chestindrawing',
                'field_setName' => 'q_j_chestindrawing',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'field_setID' => 'sdfxq_j_squeezingeyes',
                'field_setName' => 'q_j_squeezingeyes',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'field_setID' => 'sdfxq_k_grunting',
                'field_setName' => 'q_k_grunting',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'field_setID' => 'sdfxq_k_redeyes',
                'field_setName' => 'q_k_redeyes',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'field_setID' => 'sdfxq_lessthan2months',
                'field_setName' => 'q_lessthan2months',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'field_setID' => 'sdfxq_l_correctlyassessess',
                'field_setName' => 'q_l_correctlyassessess',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'field_setID' => 'sdfxq_l_wheeezing',
                'field_setName' => 'q_l_wheeezing',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'field_setID' => 'sdfxq_m_correctclassification',
                'field_setName' => 'q_m_correctclassification',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'field_setID' => 'sdfxq_m_nasalflaring',
                'field_setName' => 'q_m_nasalflaring',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'field_setID' => 'sdfxq_n_redumbilicus',
                'field_setName' => 'q_n_redumbilicus',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'field_setID' => 'sdfxq_o_umbilicuspus',
                'field_setName' => 'q_o_umbilicuspus',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'field_setID' => 'sdfxq_p_checkfever',
                'field_setName' => 'q_p_checkfever',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'field_setID' => 'sdfxq_q_lowbodytemp',
                'field_setName' => 'q_q_lowbodytemp',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'field_setID' => 'sdfxq_r_checkdrowsy',
                'field_setName' => 'q_r_checkdrowsy',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'field_setID' => 'sdfxq_s_ifantmovement',
                'field_setName' => 'q_s_ifantmovement',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'field_setID' => 'sdfxq_t_highpitched',
                'field_setName' => 'q_t_highpitched',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'field_setID' => 'sdfxq_u_checkstiff',
                'field_setName' => 'q_u_checkstiff',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'field_setID' => 'sdfxq_v_correctlyassess',
                'field_setName' => 'q_v_correctlyassess',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'field_setID' => 'sdfxq_w_corectclassification',
                'field_setName' => 'q_w_corectclassification',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'field_setID' => 'sdfxRapidTest',
                'field_setName' => 'RapidTest',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'field_setID' => 'sdfxrco_label',
                'field_setName' => 'R.C.O single',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'field_setID' => 'sdfxRDTstrips',
                'field_setName' => 'RDTstrips',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'field_setID' => 'sdfxreasontxt',
                'field_setName' => 'reasontxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'field_setID' => 'sdfxrecommendedmentorship',
                'field_setName' => 'sdfxrecommendedmentorship',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'field_setID' => 'sdfxrecommendedtot',
                'field_setName' => 'sdfxrecommendedtot',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'field_setID' => 'sdfxref_slip',
                'field_setName' => 'ref_slip',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'field_setID' => 'sdfxreg',
                'field_setName' => 'reg',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'field_setID' => 'sdfxRESOMAL',
                'field_setName' => 'RESOMAL',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'field_setID' => 'sdfxresourcename',
                'field_setName' => 'resourcename',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'field_setID' => 'sdfxRespitoryratetakenandrecorded',
                'field_setName' => 'Respitoryratetakenandrecorded',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'field_setID' => 'sdfxresponse',
                'field_setName' => 'Response',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'field_setID' => 'sdfxRiverStream_Borehole_Piped_WaterTruck_Other',
                'field_setName' => 'River/Stream_Borehole_Piped_WaterTruck_Other',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'field_setID' => 'sdfxRotavirusat10Weeks',
                'field_setName' => 'Rotavirusat10Weeks',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'field_setID' => 'sdfxRotavirusat6weeks',
                'field_setName' => 'Rotavirusat6weeks',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'field_setID' => 'sdfxRotaVirusVaccine',
                'field_setName' => 'RotaVirusVaccine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'field_setID' => 'sdfxsafewatersource',
                'field_setName' => 'safewatersource',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'field_setID' => 'sdfxselectfindings',
                'field_setName' => 'selectfindings',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'field_setID' => 'sdfxselectfindings_eye',
                'field_setName' => 'selectfindings_eye',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'field_setID' => 'sdfxselfspouse',
                'field_setName' => 'selfspouse',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'field_setID' => 'sdfxsep',
                'field_setName' => 'sep',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'field_setID' => 'sdfxservice',
                'field_setName' => 'service',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'field_setID' => 'sdfxserviceunits',
                'field_setName' => 'serviceunits',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'field_setID' => 'sdfxserviceunittxt',
                'field_setName' => 'serviceunittxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'field_setID' => 'sdfxshare',
                'field_setName' => 'sdfxshare',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'field_setID' => 'sdfxsname',
                'field_setName' => 'sname',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'field_setID' => 'sdfxsnametxt',
                'field_setName' => 'snametxt',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'field_setID' => 'sdfxSpacer',
                'field_setName' => 'Spacer',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'field_setID' => 'sdfxspecifystorage',
                'field_setName' => 'specifystorage',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'field_setID' => 'sdfxSTAFF MEMBERS TRAINED',
                'field_setName' => 'HOW MANY STAFF MEMBERS HAVE BEEN TRAINED IN THE FOLLOWING?',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'field_setID' => 'sdfxStaff Members Trained in BEmONC still Working',
                'field_setName' => 'How Many of the Total Staff Members Trained in BEmONC are still Working in the Maternity/ MCH/ Gynae',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'field_setID' => 'sdfxStaff Trained in BEmONC',
            'field_setName' => '# of Staff Trained in Basic Emergency Obstetric Neonatal Care(BEmONC)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'field_setID' => 'sdfxStaff Trained in PP IUCD',
                'field_setName' => '# of Staff Trained in PP IUCD',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'field_setID' => 'sdfxStaff Trained in Uterine Balloon Tamponade',
                'field_setName' => '# of Staff Trained in Uterine Balloon Tamponade',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'field_setID' => 'sdfxstaff_EID_sampling',
                'field_setName' => 'staff_EID_sampling',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'field_setID' => 'sdfxstaff_IMCI_work_CH_UNIT',
                'field_setName' => 'staff_IMCI_work_CH_UNIT',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'field_setID' => 'sdfxstaff_pneumonia_diarrhoea_under_5',
                'field_setName' => 'staff_pneumonia_diarrhoea_under_5',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'field_setID' => 'sdfxstaff_trained_Diarrhoea',
                'field_setName' => 'staff trained diarrhoea',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'field_setID' => 'sdfxstaff_trained_ICCM',
                'field_setName' => 'staff_trained_ICCM',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'field_setID' => 'sdfxstaff_trained_IMCI',
                'field_setName' => 'staff_trained_IMCI',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'field_setID' => 'sdfxstorageofwater',
                'field_setName' => 'storageofwater',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'field_setID' => 'sdfxsuckling',
                'field_setName' => 'suckling',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'field_setID' => 'sdfxSuctionmachine',
                'field_setName' => 'Suctionmachine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'field_setID' => 'sdfxSuctiontube',
                'field_setName' => 'Suction tube',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'field_setID' => 'sdfxSulphadoxinePyrimethamine',
                'field_setName' => 'Sulphadoxine+Pyrimethamine',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'field_setID' => 'sdfxsuperviseename',
                'field_setName' => 'sdfxsuperviseename',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'field_setID' => 'sdfxsupervisorname',
                'field_setName' => 'sdfxsupervisorname',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'field_setID' => 'sdfxsuppliername',
                'field_setName' => 'suppliername',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'field_setID' => 'sdfxsuppliers',
                'field_setName' => 'suppliers',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'field_setID' => 'sdfxsymptom_check',
                'field_setName' => 'symptom_check',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'field_setID' => 'sdfxsypmtom',
                'field_setName' => 'sypmtom',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'field_setID' => 'sdfxSyrupAmoxicillin',
                'field_setName' => 'SyrupAmoxicillin',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'field_setID' => 'sdfxSyrupCotrimoxazole',
                'field_setName' => 'SyrupCotrimoxazole',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'field_setID' => 'sdfxSyrupMetronidazole',
                'field_setName' => 'SyrupMetronidazole',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'field_setID' => 'sdfxTabletPaedCotrimoxazole',
                'field_setName' => 'TabletPaedCotrimoxazole',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'field_setID' => 'sdfxtb',
                'field_setName' => 'tb',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'field_setID' => 'sdfxTeam-Lead',
                'field_setName' => 'Team-Lead',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'field_setID' => 'sdfxTemperaturetakenandrecorded',
                'field_setName' => 'Temperaturetakenandrecorded',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'field_setID' => 'sdfxtimestxt',
                'field_setName' => 'timestxt',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'field_setID' => 'sdfxtoothed',
                'field_setName' => 'toothed',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'field_setID' => 'sdfxtotal',
                'field_setName' => 'total',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'field_setID' => 'sdfxTotalCasesinORTCornerRegister',
                'field_setName' => 'Total Cases in ORT Corner Register',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'field_setID' => 'sdfxtotal_avail_duty',
                'field_setName' => 'total_avail_duty',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'field_setID' => 'sdfxtotal_in_facility',
                'field_setName' => 'Total in facility',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'field_setID' => 'sdfxTotal_number_of_cases_documented',
                'field_setName' => 'Total number of cases documented in ORT corner register',
                'type' => 'number',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'field_setID' => 'sdfxTotal_Number_of_Diarrhoea_Cases',
                'field_setName' => 'Total Number of Diarrhoea Cases',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'field_setID' => 'sdfxtransferedtoanothercounty',
                'field_setName' => 'transferedtoanothercounty',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'field_setID' => 'sdfxTransferedtoanotherfacilityinthesamecounty',
                'field_setName' => 'Transferedtoanotherfacilityinthesamecounty',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'field_setID' => 'sdfxtravelnotravel',
                'field_setName' => 'travelnotravel',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'field_setID' => 'sdfxtreatment',
                'field_setName' => 'treatment',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'field_setID' => 'sdfxtreatmentlabel',
                'field_setName' => 'treatmentlabel',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'field_setID' => 'sdfxtreatmenttxtbox',
                'field_setName' => 'treatmenttxtbox',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'field_setID' => 'sdfxTreatment_with_Antibiotics',
                'field_setName' => 'Treatment_with_Antibiotics',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'field_setID' => 'sdfxtreatment_with_ORS',
                'field_setName' => 'treatment_with_ORS',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'field_setID' => 'sdfxTreatment_with_ORSZinc',
                'field_setName' => 'Treatment with ORS+ Zinc',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'field_setID' => 'sdfxTreatment_with_others',
                'field_setName' => 'Treatment_with_others',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'field_setID' => 'sdfxtreatment_with_Zinc',
                'field_setName' => 'treatment_with_Zinc',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'field_setID' => 'sdfxTV',
                'field_setName' => 'TV',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'field_setID' => 'sdfxUnit',
                'field_setName' => 'Unit',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'field_setID' => 'sdfxunits_established',
                'field_setName' => 'units_established',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'field_setID' => 'sdfxuptodateornot',
                'field_setName' => 'uptodateornot',
                'type' => 'combo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'field_setID' => 'sdfxuristicks',
                'field_setName' => 'uristicks',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'field_setID' => 'sdfxUseofMCHbooklet',
                'field_setName' => 'UseofMCHbooklet',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'field_setID' => 'sdfxUS_Clinic',
                'field_setName' => 'US_Clinic',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'field_setID' => 'sdfxVaginalexaminationpack',
                'field_setName' => 'Vaginal examination pack',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'field_setID' => 'sdfxverifyort',
                'field_setName' => 'verifyort',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'field_setID' => 'sdfxVery_Severe_Disease',
                'field_setName' => 'Very Severe Disease',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'field_setID' => 'sdfxVitamin K',
                'field_setName' => 'Vitamin K',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'field_setID' => 'sdfxVitaminA',
                'field_setName' => 'VitaminA',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'field_setID' => 'sdfxVitaminAd',
                'field_setName' => 'VitaminAd',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'field_setID' => 'sdfxward',
                'field_setName' => 'ward',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'field_setID' => 'sdfxWascaregiversatisfiedwiththeserviceoffered',
                'field_setName' => 'Wascaregiversatisfiedwiththeserviceoffered',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'field_setID' => 'sdfxwastedispose',
                'field_setName' => 'wastedispose',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'field_setID' => 'sdfxWastePlacIncBurn',
                'field_setName' => 'WastePlacIncBurn',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'field_setID' => 'sdfxWater for Injection',
                'field_setName' => 'Water for Injection',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'field_setID' => 'sdfxWeightTaken',
                'field_setName' => 'WeightTaken',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'field_setID' => 'sdfxWeighttakenandrecorded',
                'field_setName' => 'Weighttakenandrecorded',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'field_setID' => 'sdfxWeighttakenandrecordedD',
                'field_setName' => 'WeighttakenandrecordedD',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'field_setID' => 'sdfxwhatisrelation',
                'field_setName' => 'What is the relationship of the caregiver to the child?',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'field_setID' => 'sdfxwhenthecommoditywasnot',
                'field_setName' => 'when the commodity was not',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'field_setID' => 'sdfxwhoadvised',
                'field_setName' => 'Who advised caregiver to seek services at the Health Facility',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'field_setID' => 'sdfxYearMonthwhentrainedinIMCI',
                'field_setName' => 'Year/MonthwhentrainedinIMCI',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'field_setID' => 'sdfxyear_ch',
                'field_setName' => '2012_2013_2014_2015',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'field_setID' => 'sdfxyes_no',
                'field_setName' => 'Yes_No',
                'type' => 'radio',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'field_setID' => 'sdfxym',
                'field_setName' => 'y/m',
                'type' => 'text',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'field_setID' => 'sdfxZidovudine AZT',
            'field_setName' => 'Zidovudine (AZT)',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'field_setID' => 'sdfxZincSulphate',
                'field_setName' => 'ZincSulphate',
                'type' => 'label',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'field_setID' => 'sssd',
                'field_setName' => 'OPD_MCH_USClinic_Ward_Other',
                'type' => 'multiplecombo',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
