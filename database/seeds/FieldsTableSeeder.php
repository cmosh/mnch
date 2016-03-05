<?php

use Illuminate\Database\Seeder;

class FieldsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fields')->delete();
        
        \DB::table('fields')->insert(array (
            0 => 
            array (
                'field_setID' => 'em',
                'field_ID' => 'andfacility1',
                'Value' => '',
                'Label' => 'and Facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
            'field_setID' => 'Chs1sachet(500ml)',
            'field_ID' => 'chs1 sachet (500ml)1',
                'Value' => '',
            'Label' => '1 sachet (500ml)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'field_setID' => 'Chs100,000IU',
                'field_ID' => 'chs100,000IU1',
                'Value' => '',
                'Label' => '100,000 IU',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'field_setID' => 'Chs100000IU',
                'field_ID' => 'chs100000IU1',
                'Value' => '',
                'Label' => '100,000 IU',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'field_setID' => 'Chs120mg',
                'field_ID' => 'chs120mg1',
                'Value' => '',
                'Label' => '120mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'field_setID' => 'Chs125mg/5ml',
                'field_ID' => 'chs125mg/5ml1',
                'Value' => '',
                'Label' => '125mg/5ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'field_setID' => 'Chs125mg5ml',
                'field_ID' => 'chs125mg5ml1',
                'Value' => '',
                'Label' => '125mg/5ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'field_setID' => 'Chs1sachet500ml',
                'field_ID' => 'chs1sachet500ml1',
                'Value' => '',
            'Label' => '1 sachet (500ml)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'field_setID' => 'Chs200,000IU',
                'field_ID' => 'chs200,000IU1',
                'Value' => '',
                'Label' => '200,000 IU',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'field_setID' => 'Chs200000IU',
                'field_ID' => 'chs200000IU1',
                'Value' => '',
                'Label' => '200,000 IU',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'field_setID' => 'Chs200mg/5ml',
                'field_ID' => 'chs200mg/5ml1',
                'Value' => '',
                'Label' => '200mg/5ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'field_setID' => 'Chs200mg5ml',
                'field_ID' => 'chs200mg5ml1',
                'Value' => '',
                'Label' => '200mg/5ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'field_setID' => 'Chs2012_2013_2014_2015',
                'field_ID' => 'chs2012_2013_2014_2015',
                'Value' => '',
                'Label' => 'Select Year',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'field_setID' => 'Chs20mg+120mg',
                'field_ID' => 'chs20mg + 120mg1',
                'Value' => '',
                'Label' => '20mg + 120mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
            'field_setID' => 'Chs20mg(numberofstrips,1Strip=10tablets)',
            'field_ID' => 'chs20mg(numberofstrips,1Strip=10tablets)1',
                'Value' => '',
            'Label' => '20mg(number of strips, 1 Strip = 10 tablets)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'field_setID' => 'Chs20mg120mg',
                'field_ID' => 'chs20mg+120mg1',
                'Value' => '',
                'Label' => '20mg + 120mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'field_setID' => 'Chs20mgnumberofstrips1Strip10tablets',
                'field_ID' => 'chs20mgnumberofstrips1Strip=10tablets1',
                'Value' => '',
            'Label' => '20mg(number of strips, 1 Strip = 10 tablets)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'field_setID' => 'Chs240mg/5ml',
                'field_ID' => 'chs240mg/5ml1',
                'Value' => '',
                'Label' => '240mg/5ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'field_setID' => 'Chs240mg5ml',
                'field_ID' => 'chs240mg5ml1',
                'Value' => '',
                'Label' => '240mg/5ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'field_setID' => 'Chs300mg/lmlin2mlamp.',
                'field_ID' => 'chs300mg/lmlin2mlamp.1',
                'Value' => '',
                'Label' => '300mg/lml in 2ml amp.',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'field_setID' => 'Chs300mglmlin2mlamp.',
                'field_ID' => 'chs300mglmlin2mlamp.1',
                'Value' => '',
                'Label' => '300mg/lml in 2ml amp.',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
            'field_setID' => 'Chs4sachets(SOOml)ofORS&10tabletsofZinc',
            'field_ID' => 'chs4 sachets (SOOml) of ORS & 10 tablets of Zinc1',
                'Value' => '',
            'Label' => '4 sachets (SOOml) of ORS & 10 tablets of Zinc',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'field_setID' => 'Chs4sachetsSOOmlofORS10tabletsofZinc',
                'field_ID' => 'chs4sachetsSOOmlofORS&10tabletsofZinc1',
                'Value' => '',
            'Label' => '4 sachets (SOOml) of ORS & 10 tablets of Zinc',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'field_setID' => 'Chs50,000IU',
                'field_ID' => 'chs50,000 IU1',
                'Value' => '',
                'Label' => '50,000 IU',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'field_setID' => 'Chs50000IU',
                'field_ID' => 'chs50000IU1',
                'Value' => '',
                'Label' => '50,000 IU',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'field_setID' => 'Chsactive_CHEWS',
                'field_ID' => 'chsactive_CHEWS1',
                'Value' => '',
                'Label' => 'Total number of active CHEWS',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'field_setID' => 'Chsactive_CHEWS_trained_in_ICCM',
                'field_ID' => 'chsactive_CHEWS_trained_in_ICCM1',
                'Value' => '',
                'Label' => 'Total number  of active  CHEWs trained on ICCM',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'field_setID' => 'Chsactive_CHVs',
                'field_ID' => 'chsactive_CHVs1',
                'Value' => '',
                'Label' => 'Total number of active CHVs',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'field_setID' => 'Chsactive_CHVs_trained_on_ICCM',
                'field_ID' => 'chsactive_CHVs_trained_on_ICCM1',
                'Value' => '',
                'Label' => 'Total number of active CHVs trained on ICCM',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'field_setID' => 'Chsapr',
                'field_ID' => 'chsapr',
                'Value' => '',
                'Label' => 'Apr',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'field_setID' => 'Chsaredrugsavailavle',
                'field_ID' => 'chsaredrugsavailavle1',
                'Value' => '',
            'Label' => '(A) Are there drugs available in the ORT Corner?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
            'field_setID' => 'ChsArtemether+Leumefantrine(AL)',
            'field_ID' => 'chsArtemether+Leumefantrine(AL)1',
                'Value' => '',
            'Label' => 'Artemether + Leumefantrine (AL)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'field_setID' => 'ChsArtemetherLeumefantrineAL',
                'field_ID' => 'chsArtemether+LeumefantrineAL1',
                'Value' => '',
            'Label' => 'Artemether + Leumefantrine (AL)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'field_setID' => 'ChsArtesunateInjection',
                'field_ID' => 'chsArtesunateInjection1',
                'Value' => '',
                'Label' => 'Artesunate Injection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'field_setID' => 'Chsaspect',
                'field_ID' => 'chsaspect1',
                'Value' => '',
                'Label' => 'Aspect',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'field_setID' => 'Chsaug',
                'field_ID' => 'chsaug1',
                'Value' => '',
                'Label' => 'Aug',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'field_setID' => 'ChsAvailability',
                'field_ID' => 'chsAvailability1',
                'Value' => '',
            'Label' => 'Availability (One Selection Allowed)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'field_setID' => 'ChsAvailable_Not_Available',
                'field_ID' => 'chsAvailable_Not_Available1',
                'Value' => '1',
                'Label' => 'Available',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'field_setID' => 'ChsAvailable_Not_Available',
                'field_ID' => 'chsAvailable_Not_Available2',
                'Value' => '2',
                'Label' => 'Not Available',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'field_setID' => 'Chsblank',
                'field_ID' => 'chsblank1',
                'Value' => '',
                'Label' => '',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'field_setID' => 'Chscases_treated_with_zinc_and_ors',
                'field_ID' => 'chscases_treated_with_zinc_and_ors1',
                'Value' => '',
                'Label' => 'total number of cases treated with zinc and ORS Co-pack under Community Case Management of diarrhoea',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'field_setID' => 'Chscentral/county_government',
                'field_ID' => 'chscentral/county_government1',
                'Value' => '1',
                'Label' => 'Central Government/County Government',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'field_setID' => 'Chscentral/county_government',
                'field_ID' => 'chscentral/county_government2',
                'Value' => '2',
                'Label' => 'Privately Supplied',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'field_setID' => 'Chscentral/county_government',
                'field_ID' => 'chscentral/county_government3',
                'Value' => '3',
                'Label' => 'Own Initiative',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'field_setID' => 'Chscentral/county_government',
                'field_ID' => 'chscentral/county_government4',
                'Value' => '4',
                'Label' => 'Partner',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'field_setID' => 'Chscentral/county_government',
                'field_ID' => 'chscentral/county_government5',
                'Value' => '5',
                'Label' => 'Not Applicable',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'field_setID' => 'Chscentralcounty_government',
                'field_ID' => 'chscentralcounty_government1',
                'Value' => '1',
                'Label' => 'Central Government/County Government',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'field_setID' => 'Chscentralcounty_government',
                'field_ID' => 'chscentralcounty_government2',
                'Value' => '2',
                'Label' => 'Privately Supplied',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'field_setID' => 'Chscentralcounty_government',
                'field_ID' => 'chscentralcounty_government3',
                'Value' => '3',
                'Label' => 'Own Initiative',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'field_setID' => 'Chscentralcounty_government',
                'field_ID' => 'chscentralcounty_government4',
                'Value' => '4',
                'Label' => 'Partner',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'field_setID' => 'Chscentralcounty_government',
                'field_ID' => 'chscentralcounty_government5',
                'Value' => '5',
                'Label' => 'Not Applicable',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'field_setID' => 'Chsclinical_satff_single_label',
                'field_ID' => 'chsclinical_satff_single_label1',
                'Value' => '',
                'Label' => 'Clinical Staff',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'field_setID' => 'Chscommodity_name',
                'field_ID' => 'chscommodity_name1',
                'Value' => '',
                'Label' => 'Commodity Name',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'field_setID' => 'Chscommodity_unit',
                'field_ID' => 'chscommodity_unit1',
                'Value' => '',
                'Label' => 'Commodity Unit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'field_setID' => 'Chscommunity_deworming_cases',
                'field_ID' => 'Chscommunity_deworming_cases1',
                'Value' => '',
                'Label' => 'Total number of Deworming cases treated under Community Case Management',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'field_setID' => 'Chscommunity_malaria_cases',
                'field_ID' => 'Chscommunity_malaria_cases1',
                'Value' => '',
                'Label' => 'Total number of Malaria cases referred under Community Case Management',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'field_setID' => 'Chscommunity_pneumonia_cases',
                'field_ID' => 'Chscommunity_pneumonia_cases1',
                'Value' => '',
                'Label' => 'Total number of Pneumonia cases referred under Community Case Management',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'field_setID' => 'Chscommunity_strategy',
                'field_ID' => 'chscommunity_strategy1',
                'Value' => '',
                'Label' => 'Community Strategy',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'field_setID' => 'Chscommunity_units_incentives',
                'field_ID' => 'Chscommunity_units_incentives1',
                'Value' => '',
                'Label' => 'Total number of Community Units supported by incentives for CHWs',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'field_setID' => 'Chscommunity_units_regularlysupervised',
                'field_ID' => 'Chscommunity_units_regularlysupervised1',
                'Value' => '',
                'Label' => 'Total number of Community Units regularly supervised',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'field_setID' => 'Chscommunity_units_trained_in_ICCM',
                'field_ID' => 'chscommunity_units_trained_in_ICCM1',
                'Value' => '',
                'Label' => 'Total number of community units trained in ICCM',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'field_setID' => 'Chsdec',
                'field_ID' => 'chsdec1',
                'Value' => '',
                'Label' => 'Dec',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'field_setID' => 'Chsdesignatedlocationfororal',
                'field_ID' => 'chsdesignatedlocationfororal1',
                'Value' => '',
                'Label' => 'Does this facility have a designated location for oral rehydration?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'field_setID' => 'Chsdesignated_location_for_ORT',
                'field_ID' => 'chsdesignated_location_for_ORT1',
                'Value' => '',
                'Label' => 'Where is the designated location of the ORT Corner?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'field_setID' => 'Chsdiarrhoea_management',
                'field_ID' => 'chsdiarrhoea_management1',
                'Value' => '',
                'Label' => 'Diarrhoea Treatment in Under 5 Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'field_setID' => 'ChsDisposableSyringes',
                'field_ID' => 'ChsDisposableSyringes1',
                'Value' => '',
                'Label' => 'Disposable Syringes',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'field_setID' => 'Chsdoctor_label',
                'field_ID' => 'chsdoctor_label_1',
                'Value' => '',
                'Label' => 'Doctor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'field_setID' => 'Chsdvd_player',
                'field_ID' => 'chsdvd_player1',
                'Value' => '',
                'Label' => 'DVD Player',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'field_setID' => 'Chseid',
                'field_ID' => 'chseid1',
                'Value' => '',
            'Label' => 'Early Infant Diagnosis (EID) register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'field_setID' => 'Chselectricity',
                'field_ID' => 'chselectricity1',
                'Value' => '',
                'Label' => 'Electricity',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'field_setID' => 'Chsfacility_design_location',
                'field_ID' => 'chsfacility_design_location1',
                'Value' => '',
                'Label' => 'does this facility have a designed location for oral rehydration?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'field_setID' => 'Chsfeb',
                'field_ID' => 'chsfeb',
                'Value' => '',
                'Label' => 'Feb',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'field_setID' => 'ChsFever',
                'field_ID' => 'chsFever1',
                'Value' => '',
                'Label' => 'Fever',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'field_setID' => 'Chsfullspan_no_diarrhoea',
                'field_ID' => 'chsfullspan_no_diarrhoea1',
                'Value' => '',
                'Label' => 'Non Diarrhoea cases that received ORS + Zinc',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'field_setID' => 'Chsgen_opd_paed_opd_mch',
                'field_ID' => 'chsgen_opd_paed_opd_mch1',
                'Value' => '1',
                'Label' => 'General OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'field_setID' => 'Chsgen_opd_paed_opd_mch',
                'field_ID' => 'chsgen_opd_paed_opd_mch2',
                'Value' => '2',
                'Label' => 'Paediatric OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'field_setID' => 'Chsgen_opd_paed_opd_mch',
                'field_ID' => 'chsgen_opd_paed_opd_mch3',
                'Value' => '3',
                'Label' => 'MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'field_setID' => 'Chsgen_opd_paed_opd_mch',
                'field_ID' => 'chsgen_opd_paed_opd_mch4',
                'Value' => '-1',
                'Label' => 'Others Specify',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'field_setID' => 'Chsiccm_tool',
                'field_ID' => 'chsiccm_tool1',
                'Value' => '',
                'Label' => 'ICCM Tools',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'field_setID' => 'Chsimci_case',
                'field_ID' => 'chsimci_case1',
                'Value' => '',
                'Label' => 'IMCI case recording form',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'field_setID' => 'ChsInjectionQuinine',
                'field_ID' => 'chsInjectionQuinine1',
                'Value' => '',
                'Label' => 'Injection Quinine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'field_setID' => 'ChsInsulinSyringes',
                'field_ID' => 'ChsInsulinSyringes1',
                'Value' => '',
                'Label' => 'Insulin Syringes',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'field_setID' => 'ChsIVStarterKit',
                'field_ID' => 'ChsIVStarterKit1',
                'Value' => '',
                'Label' => 'IV Starter Kit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'field_setID' => 'Chsjan',
                'field_ID' => 'chsjan',
                'Value' => '',
                'Label' => 'Jan',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'field_setID' => 'Chsjul',
                'field_ID' => 'chsjul1',
                'Value' => '',
                'Label' => 'Jul',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'field_setID' => 'Chsjun',
                'field_ID' => 'chsjun1',
                'Value' => '',
                'Label' => 'Jun',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'field_setID' => 'Chslabelless_number_box',
                'field_ID' => 'chslabelless_number_box1',
                'Value' => '',
                'Label' => '',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'field_setID' => 'Chslabelless_text_box',
                'field_ID' => 'chslabelless_text_box1',
                'Value' => '',
                'Label' => '',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'field_setID' => 'ChsLocation_of_availability',
                'field_ID' => 'chsLocation_of_availability1',
                'Value' => '',
            'Label' => 'Location of availability (Multiple Selections Allowed)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'field_setID' => 'Chslocation_of_availability_radios',
                'field_ID' => 'chslocation_of_availability_radios1',
                'Value' => '2',
                'Label' => 'MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'field_setID' => 'Chslocation_of_availability_radios',
                'field_ID' => 'chslocation_of_availability_radios2',
                'Value' => '3',
                'Label' => 'U5 Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'field_setID' => 'Chslocation_of_availability_radios',
                'field_ID' => 'chslocation_of_availability_radios3',
                'Value' => '1',
                'Label' => 'OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'field_setID' => 'Chslocation_of_availability_radios',
                'field_ID' => 'chslocation_of_availability_radios4',
                'Value' => '4',
                'Label' => 'Ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'field_setID' => 'Chslocation_of_availability_radios',
                'field_ID' => 'chslocation_of_availability_radios5',
                'Value' => '-1',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
            'field_setID' => 'ChsLowOsmolarityOralRehydrationSalts(ORS)',
            'field_ID' => 'chsLow Osmolarity Oral Rehydration Salts (ORS)1',
                'Value' => '',
            'Label' => 'Low Osmolarity Oral Rehydration Salts (ORS)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'field_setID' => 'ChsLowOsmolarityOralRehydrationSaltsORS',
                'field_ID' => 'chsLowOsmolarityOralRehydrationSaltsORS1',
                'Value' => '',
            'Label' => 'Low Osmolarity Oral Rehydration Salts (ORS)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'field_setID' => 'Chsmainsupplier',
                'field_ID' => 'chsmainsupplier1',
                'Value' => '',
                'Label' => 'Who is the main supplier of the commodities BELOW?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'field_setID' => 'Chsmainsupplier_resources',
                'field_ID' => 'chsmainsupplier_resources1',
                'Value' => '',
                'Label' => 'Who is the main supplier of the resources BELOW?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'field_setID' => 'Chsmain_reason_for_unavailability',
                'field_ID' => 'chsmain_reason_for_unavailability1',
                'Value' => '',
                'Label' => 'Main Reason for Unavailability',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'field_setID' => 'Chsmar',
                'field_ID' => 'chsmar1',
                'Value' => '',
                'Label' => 'Mar',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'field_setID' => 'Chsmay',
                'field_ID' => 'chsmay1',
                'Value' => '',
                'Label' => 'May',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'field_setID' => 'Chsmother_child_booklet',
                'field_ID' => 'chsmcb1',
                'Value' => '',
                'Label' => 'Mother Child Booklet',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'field_setID' => 'ChsMCH_US_OPD_Ward',
                'field_ID' => 'chsMCH_US_OPD_Ward1',
                'Value' => '1',
                'Label' => 'MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'field_setID' => 'ChsMCH_US_OPD_Ward',
                'field_ID' => 'chsMCH_US_OPD_Ward2',
                'Value' => '2',
                'Label' => 'US Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'field_setID' => 'ChsMCH_US_OPD_Ward',
                'field_ID' => 'chsMCH_US_OPD_Ward3',
                'Value' => '3',
                'Label' => 'OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'field_setID' => 'ChsMCH_US_OPD_Ward',
                'field_ID' => 'chsMCH_US_OPD_Ward4',
                'Value' => '4',
                'Label' => 'Ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'field_setID' => 'ChsMCH_US_OPD_Ward',
                'field_ID' => 'chsMCH_US_OPD_Ward5',
                'Value' => '-1',
            'Label' => 'Other(Specify)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'field_setID' => 'ChsNebulizer',
                'field_ID' => 'chsNebulizer1',
                'Value' => '',
                'Label' => 'Nebulizer',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'field_setID' => 'ChsNGTube',
                'field_ID' => 'ChsNGTube1',
                'Value' => '',
                'Label' => 'NG Tube',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'field_setID' => 'ChsNon_Diarrhoea',
                'field_ID' => 'chsNon_Diarrhoea1',
                'Value' => '',
                'Label' => 'Non Diarrhoea cases that received ORS + Zinc',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'field_setID' => 'Chsnov',
                'field_ID' => 'chsnov1',
                'Value' => '',
                'Label' => 'Nov',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'field_setID' => 'ChsNo_Treatment',
                'field_ID' => 'chsNo_Treatment1',
                'Value' => '',
            'Label' => 'No Treatment  (i.e No drugs prescribed)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'field_setID' => 'Chsnurse_label',
                'field_ID' => 'chsnurse_label_1',
                'Value' => '',
                'Label' => 'Nurse',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'field_setID' => 'Chsnot_applicable',
                'field_ID' => 'chsn_a1',
                'Value' => '5',
                'Label' => 'Not Applicable',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'field_setID' => 'Chsoct',
                'field_ID' => 'chsoct1',
                'Value' => '',
                'Label' => 'Oct',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'field_setID' => 'ChsOPD_MCH_USClinic_Ward_Other',
                'field_ID' => 'ChsOPD_MCH_USClinic_Ward_Other1',
                'Value' => '1',
                'Label' => 'OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'field_setID' => 'ChsOPD_MCH_USClinic_Ward_Other',
                'field_ID' => 'ChsOPD_MCH_USClinic_Ward_Other2',
                'Value' => '2',
                'Label' => 'MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'field_setID' => 'ChsOPD_MCH_USClinic_Ward_Other',
                'field_ID' => 'ChsOPD_MCH_USClinic_Ward_Other3',
                'Value' => '3',
                'Label' => 'U5 Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'field_setID' => 'ChsOPD_MCH_USClinic_Ward_Other',
                'field_ID' => 'ChsOPD_MCH_USClinic_Ward_Other4',
                'Value' => '4',
                'Label' => 'Ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'field_setID' => 'ChsOPD_MCH_USClinic_Ward_Other',
                'field_ID' => 'ChsOPD_MCH_USClinic_Ward_Other5',
                'Value' => '-1',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'field_setID' => 'ChsOPD_MCH_USClinic_Ward_Other',
                'field_ID' => 'ChsOPD_MCH_USClinic_Ward_Other6',
                'Value' => '-51',
                'Label' => 'No information provided',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'field_setID' => 'Chsordered_notordered_expired',
                'field_ID' => 'chsordered_notordered_expired1',
                'Value' => '1',
                'Label' => 'Not Ordered',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'field_setID' => 'Chsordered_notordered_expired',
                'field_ID' => 'chsordered_notordered_expired2',
                'Value' => '2',
                'Label' => 'Ordered but not yet received',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'field_setID' => 'Chsordered_notordered_expired',
                'field_ID' => 'chsordered_notordered_expired3',
                'Value' => '3',
                'Label' => 'Expired',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'field_setID' => 'ChsORS&ZincCo-pack',
                'field_ID' => 'chsORS & Zinc Co-pack1',
                'Value' => '',
                'Label' => 'ORS & Zinc Co-pack',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'field_setID' => 'ChsORS&ZincCo-pack',
                'field_ID' => 'chsORS&ZincCo-pack1',
                'Value' => '',
                'Label' => 'ORS & Zinc Co-pack',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'field_setID' => 'ChsORS_Zinc',
                'field_ID' => 'chsORS_Zinc1',
                'Value' => '',
                'Label' => 'Treatment  with ORS + Zinc
(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+ antibiotics, ORS+zinc+metronidazole + ORS+Zinc+Others )',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
            'field_setID' => 'Chsort (moh)',
            'field_ID' => 'chsort (moh)1',
                'Value' => '',
            'Label' => 'ORT corner register (MOH)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'field_setID' => 'Chsort',
                'field_ID' => 'chsort1',
                'Value' => '',
            'Label' => 'ORT corner register (improvised)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'field_setID' => 'ChsORTCorner',
                'field_ID' => 'chsORTCorner1',
                'Value' => '',
                'Label' => 'ORT Corner Functionality',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'field_setID' => 'ChsORTCorner2',
                'field_ID' => 'chsORTCorner21',
                'Value' => '',
                'Label' => 'ORT Corner Functionality',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'field_setID' => 'Chsort moh',
                'field_ID' => 'chsortmoh1',
                'Value' => '',
            'Label' => 'ORT corner register (MOH)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'field_setID' => 'Chsortuptodate',
                'field_ID' => 'chsortuptodate1',
                'Value' => '',
            'Label' => '(B) Is the ORT register up to date (Including zero-reporting)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'field_setID' => 'Chsother',
                'field_ID' => 'chsother1',
                'Value' => '',
                'Label' => 'other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'field_setID' => 'ChsOthers',
                'field_ID' => 'chsOthers1',
                'Value' => '',
                'Label' => 'Others',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'field_setID' => 'Chsown_initiative',
                'field_ID' => 'chsown_ini1',
                'Value' => '3',
                'Label' => 'Own Initiative',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'field_setID' => 'Chspartner',
                'field_ID' => 'chspartner1',
                'Value' => '4',
                'Label' => 'Partner',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'field_setID' => 'ChsPneumonia',
                'field_ID' => 'chsPneumonia1',
                'Value' => '',
                'Label' => 'Pneumonia',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'field_setID' => 'Chsprivately_supplied',
                'field_ID' => 'chsprivately_supplied1',
                'Value' => '',
                'Label' => 'Privately Supplied',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'field_setID' => 'Chsquestion_label',
                'field_ID' => 'Chsquestion_label1',
                'Value' => '',
                'Label' => 'Question',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'field_setID' => 'Chsquestion_where_sick_children_seen',
                'field_ID' => 'chsquestion_where_sick_children_seen_1',
                'Value' => '',
                'Label' => 'Where are sick children seen?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'field_setID' => 'Chsq_10_others',
                'field_ID' => 'chsq_10_others1',
                'Value' => '',
                'Label' => 'Others',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'field_setID' => 'Chsq_11_totalort',
                'field_ID' => 'chsq_11_totalort1',
                'Value' => '',
                'Label' => 'Total number of cases documented in ORT Corner Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'field_setID' => 'Chsq_1_total',
                'field_ID' => 'chsq_1_total',
                'Value' => '',
                'Label' => 'Total Number of Diarrhoea Cases',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'field_setID' => 'Chsq_2_orszinc',
                'field_ID' => 'chsq_2_orszinc1',
                'Value' => '',
                'Label' => 'Treatment with ORS + Zinc
(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+ antibiotics, ORS+zinc+
metronldazole + ORS+Zinc+Others)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'field_setID' => 'Chsq_3_ors',
                'field_ID' => 'chsq_3_ors1',
                'Value' => '',
                'Label' => 'Treatment with ORS
(Example: ORS only, ORS+ antibiotics+ ORS+Others)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'field_setID' => 'Chsq_4_zinc',
                'field_ID' => 'chsq_4_zinc1',
                'Value' => '',
                'Label' => 'Treatment with Zinc
(Example: Zinc only, Zinc + antibiotic, Zinc+Others)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'field_setID' => 'Chsq_5_antibiotics',
                'field_ID' => 'chsq_5_antibiotics1',
                'Value' => '',
                'Label' => 'Treatment with antibiotics
(Example:Antibiotics+other treatment without zinc or ORS, antibiotics only)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'field_setID' => 'Chsq_6_others',
                'field_ID' => 'chsq_6_others1',
                'Value' => '',
                'Label' => 'Treatment with others
(Example: Others+ vitamin A only)
(Example: Others+ vitamin A only)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'field_setID' => 'Chsq_7_notreat',
                'field_ID' => 'chsq_7_notreat1',
                'Value' => '',
            'Label' => 'No Treatment(i.e No drugs prescribed)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'field_setID' => 'Chsq_8_fever',
                'field_ID' => 'chsq_8_fever1',
                'Value' => '',
                'Label' => 'Fever',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'field_setID' => 'Chsq_9_pneumonia',
                'field_ID' => 'chsq_9_pneumonia1',
                'Value' => '',
                'Label' => 'Pneumonia',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'field_setID' => 'Chsq_a_upadted charts',
                'field_ID' => 'chsq_a1',
                'Value' => '',
                'Label' => 'A. Does the facility have updated 2012 IMCI guidelines/chart booklets?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'field_setID' => 'Chsq_c_iccm',
                'field_ID' => 'chsq_c_iccm1',
                'Value' => '',
            'Label' => ' C. Does the facility have updated Integrated Community Case Management/Community IMCI (ICCM) guidelines?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'field_setID' => 'Chsq_d_protocol',
                'field_ID' => 'chsq_d_protocol1',
                'Value' => '',
                'Label' => ' D. Does the facility have an updated Paediatric Protocol 2010/2013?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'field_setID' => 'Chsq_e_diarhoea',
                'field_ID' => 'chsq_e_diarhoea1',
                'Value' => '',
                'Label' => ' E. Does the facility have an updated Diarrhoea management job aid 2014?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'field_setID' => 'Chsq_f_iec',
                'field_ID' => 'chsq_f_iec1',
                'Value' => '',
                'Label' => ' F. Does the facility have updated IEC materials for categories?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'field_setID' => 'Chsq_g_art',
                'field_ID' => 'chsq_g_art1',
                'Value' => '',
                'Label' => ' G. Does the facility have updated ART guidelines 2012?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'field_setID' => 'Chsq_h_algorithm',
                'field_ID' => 'chsq_h_algorithm1',
                'Value' => '',
                'Label' => ' H. Does the facility have an updated Early Infant Diagnosis Algorithm 2009/2012/2014?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'field_setID' => 'Chsq_b_ort',
                'field_ID' => 'chsq_ort_guidelines1',
                'Value' => '',
                'Label' => ' B. Does the facility have updated ORT guidelines?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'field_setID' => 'Chsrco_label',
                'field_ID' => 'chsrco_label',
                'Value' => '',
                'Label' => 'R.C.O.',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'field_setID' => 'Chsref_slip',
                'field_ID' => 'chsref_slip1',
                'Value' => '',
                'Label' => 'Referal Slips',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'field_setID' => 'Chsreg',
                'field_ID' => 'chsreg1',
                'Value' => '',
                'Label' => 'Under 5 register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'field_setID' => 'ChsRESOMAL',
                'field_ID' => 'chsRESOMAL1',
                'Value' => '',
                'Label' => 'RESOMAL',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'field_setID' => 'ChsResource_Name',
                'field_ID' => 'chsResource_Name1',
                'Value' => '',
                'Label' => 'Resource Name',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'field_setID' => 'Chsresponse',
                'field_ID' => 'chsresponse1',
                'Value' => '',
                'Label' => 'Response',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'field_setID' => 'ChsRotaVirusVaccine',
                'field_ID' => 'chsRotaVirusVaccine1',
                'Value' => '',
                'Label' => 'Rota Virus Vaccine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'field_setID' => 'Chssafe_water',
                'field_ID' => 'chssafe_water1',
                'Value' => '',
            'Label' => 'Safe Water Source(AL)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'field_setID' => 'Chssep',
                'field_ID' => 'chssep1',
                'Value' => '',
                'Label' => 'Sep',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'field_setID' => 'ChsSpacer',
                'field_ID' => 'chsSpacer1',
                'Value' => '',
                'Label' => 'Spacer',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'field_setID' => 'Chsstaff_EID_sampling',
                'field_ID' => 'chsstaff_EID_sampling_1',
                'Value' => '',
                'Label' => 'Number of staff trained in EID sample collection training',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'field_setID' => 'Chsstaff_IMCI_work_CH_UNIT',
                'field_ID' => 'chsstaff_IMCI_work_CH_UNIT1',
                'Value' => '',
                'Label' => 'How many of the total staff members trained in IMCI are still working in Child Health Unit ',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'field_setID' => 'Chsstaff_pneumonia_diarrhoea_under_5',
                'field_ID' => 'chsstaff_pneumonia_diarrhoea_under_5_1',
                'Value' => '',
                'Label' => 'Number of staff trained diarrhoea and pneumonia CMEs for U5s ',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'field_setID' => 'Chsstaff_trained_Diarrhoea',
                'field_ID' => 'chsstaff_trained_Diarrhoea1',
                'Value' => '',
                'Label' => 'Number of staff trained in enhanced diarrhoea management ',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'field_setID' => 'Chsstaff_trained_ICCM',
                'field_ID' => 'chsstaff_trained_ICCM1',
                'Value' => '',
                'Label' => 'No of staff trained in ICCM',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'field_setID' => 'Chsstaff_trained_IMCI',
                'field_ID' => 'chsstaff_trained_IMCI_1',
                'Value' => '',
                'Label' => 'No of staff trained in IMCI',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'field_setID' => 'ChsSuctionmachine',
                'field_ID' => 'ChsSuctionmachine1',
                'Value' => '',
                'Label' => 'Suction machine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'field_setID' => 'Chssuppliers',
                'field_ID' => 'chssuppliers1',
                'Value' => '1',
                'Label' => 'Central/County Government',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'field_setID' => 'Chssuppliers',
                'field_ID' => 'chssuppliers2',
                'Value' => '2',
                'Label' => 'Private Suppliers',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'field_setID' => 'Chssuppliers',
                'field_ID' => 'chssuppliers3',
                'Value' => '3',
                'Label' => 'Own Initiative',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'field_setID' => 'Chssuppliers',
                'field_ID' => 'chssuppliers4',
                'Value' => '4',
                'Label' => 'Partner',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'field_setID' => 'Chssuppliers',
                'field_ID' => 'chssuppliers5',
                'Value' => '5',
                'Label' => 'Not Applicable',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'field_setID' => 'Chssuppliesname',
                'field_ID' => 'chssuppliesname1',
                'Value' => '',
                'Label' => 'Supplies Name',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'field_setID' => 'ChsSyrupAmoxicillin',
                'field_ID' => 'chsSyrupAmoxicillin1',
                'Value' => '',
                'Label' => 'Syrup Amoxicillin',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'field_setID' => 'ChsSyrupCotrimoxazole',
                'field_ID' => 'chsSyrupCotrimoxazole1',
                'Value' => '',
                'Label' => 'Syrup Cotrimoxazole',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'field_setID' => 'ChsSyrupMetronidazole',
                'field_ID' => 'chsSyrupMetronidazole1',
                'Value' => '',
                'Label' => 'Syrup Metronidazole',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'field_setID' => 'ChsTabletPaedCotrimoxazole',
                'field_ID' => 'chsTabletPaedCotrimoxazole1',
                'Value' => '',
                'Label' => 'Tablet Paed Cotrimoxazole',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'field_setID' => 'Chstetxbox_nolabel',
                'field_ID' => 'chstetxbox_nolabel1',
                'Value' => '',
                'Label' => '',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'field_setID' => 'Chstotal',
                'field_ID' => 'chstotal1',
                'Value' => '',
                'Label' => 'Total',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'field_setID' => 'ChsTotalCasesinORTCornerRegister',
                'field_ID' => 'chsTotalCasesinORTCornerRegister1',
                'Value' => '',
                'Label' => 'Total number of cases documented in ORT Corner Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'field_setID' => 'Chstotal_avail_duty',
                'field_ID' => 'chstotal_avail_duty1',
                'Value' => '',
                'Label' => 'Total available on duty',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'field_setID' => 'Chstotal_in_facility',
                'field_ID' => 'chstotal_in_facility1',
                'Value' => '',
                'Label' => 'Total in facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'field_setID' => 'ChsTotal_number_of_cases_documented',
                'field_ID' => 'chsTotal_number_of_cases_documented1',
                'Value' => '',
                'Label' => 'Total number of cases documented in ORT Corner Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'field_setID' => 'ChsTotal_Number_of_Diarrhoea_Cases',
                'field_ID' => 'chsTotal_Number_of_Diarrhoea_Cases1',
                'Value' => '',
                'Label' => 'Total Number of Diarrhoea Cases',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'field_setID' => 'ChsTreatment_with_Antibiotics',
                'field_ID' => 'chsTreatment_with_Antibiotics1',
                'Value' => '',
                'Label' => 'Treatment with Antibiotics
(Example:Antibiotics+other treatment without zinc or ORS, antibiotics  only)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'field_setID' => 'ChsTreatment_with_ORS+Zinc',
                'field_ID' => 'chsTreatment_with_ORS+Zinc1',
                'Value' => '',
                'Label' => 'Treatment with ORS+ Zinc
(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+
antibiotics, ORS+zinc+metronidazole+ ORS+Zinc+Others )',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'field_setID' => 'Chstreatment_with_ORS',
                'field_ID' => 'chstreatment_with_ORS1',
                'Value' => '',
                'Label' => 'Treatment with ORS
(Example: ORS only, ORS + antibiotics + ORS+Others)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'field_setID' => 'ChsTreatment_with_others',
                'field_ID' => 'chsTreatment_with_others1',
                'Value' => '',
                'Label' => 'Treatment with others
(Example: Others+ vitamin A  only)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'field_setID' => 'Chstreatment_with_Zinc',
                'field_ID' => 'chstreatment_with_Zinc1',
                'Value' => '',
                'Label' => 'Treatment  with Zinc
(Example: Zinc only, Zinc + antibiotic, Zinc+Others)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'field_setID' => 'Chstv',
                'field_ID' => 'chstv1',
                'Value' => '',
                'Label' => 'TV',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'field_setID' => 'Chsunits_established',
                'field_ID' => 'chsunits_established1',
                'Value' => '',
                'Label' => 'Total number of community units Established and functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'field_setID' => 'ChsUS_Clinic',
                'field_ID' => 'chsUS_Clinic1',
                'Value' => '',
                'Label' => 'US Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'field_setID' => 'Chsverifyort',
                'field_ID' => 'chsverifyort1',
                'Value' => '',
                'Label' => '*Verify this information by looking at the ORT Register and identifying the location of the ORT Corner',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'field_setID' => 'ChsVitaminA',
                'field_ID' => 'chsVitaminA1',
                'Value' => '',
                'Label' => 'Vitamin A',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'field_setID' => 'Chsward',
                'field_ID' => 'chsward1',
                'Value' => '',
                'Label' => 'ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'field_setID' => 'Chsyearchoice2014',
                'field_ID' => 'chsyearchoice20141',
                'Value' => '',
                'Label' => 'Do you want to enter data for 2014?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'field_setID' => 'Chsyear_ch',
                'field_ID' => 'chsyear_ch1',
                'Value' => '1',
                'Label' => '2012',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'field_setID' => 'Chsyear_ch',
                'field_ID' => 'chsyear_ch2',
                'Value' => '2',
                'Label' => '2013',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'field_setID' => 'Chsyear_ch',
                'field_ID' => 'chsyear_ch3',
                'Value' => '3',
                'Label' => '2014',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'field_setID' => 'Chsyear_ch',
                'field_ID' => 'chsyear_ch4',
                'Value' => '4',
                'Label' => '2015',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'field_setID' => 'Chsyear_choice',
                'field_ID' => 'chsyear_choice1',
                'Value' => '',
                'Label' => 'Do you want to enter data for 2012?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'field_setID' => 'Chsyear_choice2013',
                'field_ID' => 'chsyear_choice20131',
                'Value' => '',
                'Label' => 'Do you want to enter data for 2013?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'field_setID' => 'Chsyear_choice2015',
                'field_ID' => 'chsyear_choice20151',
                'Value' => '',
                'Label' => 'Do you want to enter data for 2015?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'field_setID' => 'Chsyes_no',
                'field_ID' => 'chsyes_no1',
                'Value' => '1',
                'Label' => 'Yes',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'field_setID' => 'Chsyes_no',
                'field_ID' => 'chsyes_no2',
                'Value' => '2',
                'Label' => 'No',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'field_setID' => 'ChsZincSulphate',
                'field_ID' => 'chsZincSulphate1',
                'Value' => '',
                'Label' => 'Zinc Sulphate',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'field_setID' => 'Chstabletamoxi',
                'field_ID' => 'chtabletamoxi',
                'Value' => '',
                'Label' => 'Tablet Amoxicillin',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'field_setID' => 'Chstabletmetro',
                'field_ID' => 'chtabletmetro',
                'Value' => '',
                'Label' => 'Tablet Metronidazole',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'field_setID' => 'Chsunit200mg',
                'field_ID' => 'chunit200mg',
                'Value' => '',
                'Label' => '200mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'field_setID' => 'Chsunit250mg',
                'field_ID' => 'chunit250mg',
                'Value' => '',
                'Label' => '250mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'field_setID' => 'chv1100mg',
                'field_ID' => 'chv1100mg1',
                'Value' => '',
                'Label' => '100mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'field_setID' => 'chv1100ml',
                'field_ID' => 'chv1100ml1',
                'Value' => '',
                'Label' => '100ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'field_setID' => 'chv110mg_2ml',
                'field_ID' => 'chv110mg_2ml1',
                'Value' => '',
                'Label' => '10mg/2ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'field_setID' => 'chv1140mg',
                'field_ID' => 'chv1140mg1',
                'Value' => '',
                'Label' => '140mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'field_setID' => 'chv1150mg_2ml',
                'field_ID' => 'chv1150mg_2ml1',
                'Value' => '',
                'Label' => '150mg/2ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'field_setID' => 'chv1200mg_5ml_oral_liquid',
                'field_ID' => 'chv1200mg_5ml_oral_liquid1',
                'Value' => '',
            'Label' => '200mg/5ml (oral liquid)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'field_setID' => 'chv1200mg_paeds',
                'field_ID' => 'chv1200mg_paeds1',
                'Value' => '',
            'Label' => '200mg(paeds)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'field_setID' => 'chv1300mg',
                'field_ID' => 'chv1300mg1',
                'Value' => '',
                'Label' => '300mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'field_setID' => 'chv1300mg_2ml',
                'field_ID' => 'chv1300mg_2ml1',
                'Value' => '',
                'Label' => '300mg/2ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'field_setID' => 'chv1480mg',
                'field_ID' => 'chv1480mg1',
                'Value' => '',
                'Label' => '480mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'field_setID' => 'chv14strips_of_ORS',
                'field_ID' => 'chv14strips_of_ORS1',
                'Value' => '',
                'Label' => '4 strips of ORS + 10 tablets of zinc',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'field_setID' => 'chv1500mg',
                'field_ID' => 'chv1500mg1',
                'Value' => '',
                'Label' => '500mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'field_setID' => 'chv1500mg_as_HCL_Tablet',
                'field_ID' => 'chv1500mg_as_HCL_Tablet1',
                'Value' => '',
            'Label' => '500(as HCL)(tablet)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'field_setID' => 'chv1500ml',
                'field_ID' => 'chv1500ml1',
                'Value' => '',
                'Label' => '500ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'field_setID' => 'chv1after_2010',
                'field_ID' => 'chv1after_20101',
                'Value' => '',
                'Label' => 'AFTER 2010',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'field_setID' => 'chv1after_2013',
                'field_ID' => 'chv1after_20131',
                'Value' => '',
                'Label' => 'AFTER 2013',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'field_setID' => 'chv1after_2014',
                'field_ID' => 'chv1after_20141',
                'Value' => '',
                'Label' => 'AFTER 2014',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'field_setID' => 'chv1anaemia',
                'field_ID' => 'chv1anaemia1',
                'Value' => '',
            'Label' => '(A) Anaemia',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'field_setID' => 'chv1april_label',
                'field_ID' => 'chv1april_label1',
                'Value' => '',
                'Label' => 'April',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'field_setID' => 'chv1april_numbox',
                'field_ID' => 'chv1april_numbox1',
                'Value' => '',
                'Label' => 'April',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'field_setID' => 'chv1art_guidelines',
                'field_ID' => 'chv1art_guidelines1',
                'Value' => '',
                'Label' => 'Does the facility have updated ART guidelines 2012?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'field_setID' => 'chv1assessor_response',
                'field_ID' => 'chv1assessor_response1',
                'Value' => '',
                'Label' => 'Assessor Response',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'field_setID' => 'chv1available_quan',
                'field_ID' => 'chv1available_quan1',
                'Value' => '',
                'Label' => 'Available Quantities',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'field_setID' => 'chv1Before_2010',
                'field_ID' => 'chv1Before_20101',
                'Value' => '',
                'Label' => 'BEFORE 2010',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'field_setID' => 'chv1before_2013',
                'field_ID' => 'chv1before_20131',
                'Value' => '',
                'Label' => 'BEFORE 2013',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'field_setID' => 'chv1before_2014',
                'field_ID' => 'chv1before_20141',
                'Value' => '',
                'Label' => 'BEFORE 2014',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'field_setID' => 'chv1bloodtest_findings',
                'field_ID' => 'chv1bloodtest_findings1',
                'Value' => '1',
                'Label' => 'Positive',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'field_setID' => 'chv1bloodtest_findings',
                'field_ID' => 'chv1bloodtest_findings2',
                'Value' => '2',
                'Label' => 'Negative',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'field_setID' => 'chv1bundles_of_zincOrs',
                'field_ID' => 'chv1bundles_of_zincOrs1',
                'Value' => '',
            'Label' => 'Bundles of Zinc & ORS (Bundles made and ready for dispensing)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'field_setID' => 'chv1bundling_indicate',
                'field_ID' => 'chv1bundling_indicate1',
                'Value' => '',
                'Label' => 'BUNDLING:INDICATE AVAILABILITY ,LOCATION, SUPPLIER AND QUANTITIES ON HAND OF THE FOLLOWING COMMODITIES',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'field_setID' => 'chv1bundling_material',
                'field_ID' => 'chv1bundling_material1',
                'Value' => '',
                'Label' => 'Bundling Material',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'field_setID' => 'chv1care_development',
                'field_ID' => 'chv1care_development1',
                'Value' => '',
            'Label' => '(F) Care for Development',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'field_setID' => 'chv1centimeter_numbox',
                'field_ID' => 'chv1centimeter_numbox1',
                'Value' => '',
                'Label' => 'Centimetres',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'field_setID' => 'chv1chair_seat_caregiver',
                'field_ID' => 'chv1chair_seat_caregiver1',
                'Value' => '',
            'Label' => '(4) Chair/Seat for caregiver',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'field_setID' => 'chv1chair_table_healthcare',
                'field_ID' => 'chv1chair_table_healthcare1',
                'Value' => '',
            'Label' => '(3) Chair and table for healthcare provider',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'field_setID' => 'chv1checked_palmar_pallor',
                'field_ID' => 'chv1checked_palmar_pallor1',
                'Value' => '',
            'Label' => '(B) Checked for palmar pallor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'field_setID' => 'chv1checked_severe_wasting',
                'field_ID' => 'chv1checked_severe_wasting1',
                'Value' => '',
            'Label' => '(B) Checked for severe wasting',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'field_setID' => 'chv1check_neck_stiff',
                'field_ID' => 'chv1check_neck_stiff1',
                'Value' => '',
            'Label' => '(F) Checked for neck stiffness',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'field_setID' => 'chv1childs_feeding',
                'field_ID' => 'chv1childs_feeding1',
                'Value' => '',
            'Label' => '(E) Child\'s Feeding',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'field_setID' => 'chv1child_convultions',
                'field_ID' => 'chv1child_convultions1',
                'Value' => '',
            'Label' => '(D) Has the child had convulsions',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'field_setID' => 'chv1child_exposed_hiv',
                'field_ID' => 'chv1child_exposed_hiv1',
                'Value' => '',
            'Label' => '(B) If child is HIV exposed, was HIV test done',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'field_setID' => 'chv1child_now_convulsing',
                'field_ID' => 'chv1child_now_convulsing1',
                'Value' => '',
            'Label' => '(E) Is the child convulsing now?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'field_setID' => 'chv1child_vomitting',
                'field_ID' => 'chv1child_vomitting1',
                'Value' => '',
            'Label' => '(C) Is the Child vomitting everything?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'field_setID' => 'chv1cholramphenicol',
                'field_ID' => 'chv1cholramphenicol1',
                'Value' => '',
                'Label' => 'Cholramphenicol eye ointment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'field_setID' => 'chv1ciprofloxacin',
                'field_ID' => 'chv1ciprofloxacin1',
                'Value' => '',
                'Label' => 'Ciprofloxacin',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'field_setID' => 'chv1classification',
                'field_ID' => 'chv1classification1',
                'Value' => '',
                'Label' => 'Classification',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'field_setID' => 'chv1classification_done',
                'field_ID' => 'chv1classification_done1',
                'Value' => '',
                'Label' => 'Classification done',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'field_setID' => 'chv1confirmed',
                'field_ID' => 'chv1confirmed1',
                'Value' => '',
                'Label' => 'Confirmed',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'field_setID' => 'chv1correct_classification',
                'field_ID' => 'chv1correct_classification1',
                'Value' => '',
                'Label' => 'Correct classification',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'field_setID' => 'chv1correct_diarrhoea_class',
                'field_ID' => 'chv1correct_diarrhoea_class1',
                'Value' => '',
            'Label' => '(E) Correctly assess and classify diarrhoea and dehydration',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'field_setID' => 'chv1coughing_diff_breath',
                'field_ID' => 'chv1coughing_diff_breath1',
                'Value' => '',
                'Label' => '1. Cough / Difficulty Breathing',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'field_setID' => 'chv1cough_breath_counts',
                'field_ID' => 'chv1cough_breath_counts1',
                'Value' => '',
            'Label' => '(B) Breath counts taken and recorded',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'field_setID' => 'chv1cough_chest_indrawing',
                'field_ID' => 'chv1cough_chest_indrawing1',
                'Value' => '',
            'Label' => '(C) Looked for chest indrawing',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'field_setID' => 'chv1cough_how_long',
                'field_ID' => 'chv1cough_how_long1',
                'Value' => '',
            'Label' => '(A) Asked how long the hild had the cough',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'field_setID' => 'chv1cough_stridor',
                'field_ID' => 'chv1cough_stridor1',
                'Value' => '',
            'Label' => '(D) Looked and listened for stridor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'field_setID' => 'chv1cough_wheez',
                'field_ID' => 'chv1cough_wheez1',
                'Value' => '',
            'Label' => '(E) Looked and listened for a wheeze',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'field_setID' => 'chv1data_not_documented',
                'field_ID' => 'chv1data_not_documented1',
                'Value' => '1',
                'Label' => 'Data not documented',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'field_setID' => 'chv1data_not_documented',
                'field_ID' => 'chv1data_not_documented2',
                'Value' => '2',
                'Label' => 'Data collection tools not available AT All',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'field_setID' => 'chv1data_not_documented',
                'field_ID' => 'chv1data_not_documented3',
                'Value' => '3',
                'Label' => 'Data Collection tools available but not accessible',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'field_setID' => 'chv1data_not_documented',
                'field_ID' => 'chv1data_not_documented4',
                'Value' => '4',
            'Label' => 'Data Collection tools available but not appropriate(e.g Columns missing)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'field_setID' => 'chv1data_not_documented',
                'field_ID' => 'chv1data_not_documented5',
                'Value' => '5',
                'Label' => 'Staff not aware what to document',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'field_setID' => 'chv1days_findings',
                'field_ID' => 'chv1days_findings1',
                'Value' => '',
                'Label' => 'days',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'field_setID' => 'chv1degrees_findings',
                'field_ID' => 'chv1degrees_findings1',
                'Value' => '',
                'Label' => 'Degrees',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'field_setID' => 'chv1dehydration_findings',
                'field_ID' => 'chv1dehydration_findings1',
                'Value' => '1',
                'Label' => 'No dehydration',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'field_setID' => 'chv1dehydration_findings',
                'field_ID' => 'chv1dehydration_findings2',
                'Value' => '2',
                'Label' => 'Some dehydration',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'field_setID' => 'chv1dehydration_findings',
                'field_ID' => 'chv1dehydration_findings3',
                'Value' => '3',
                'Label' => 'Severe dehydration',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'field_setID' => 'chv1deworming',
                'field_ID' => 'chv1deworming1',
                'Value' => '',
            'Label' => '(D) Deworming',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'field_setID' => 'chv1deworming_needed',
                'field_ID' => 'chv1deworming_needed1',
                'Value' => '',
                'Label' => 'Deworming needed',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'field_setID' => 'chv1deworming_needed',
                'field_ID' => 'chv1deworming_needed2',
                'Value' => '',
                'Label' => 'No deworming needed',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'field_setID' => 'chv1diarrhoea_duration',
                'field_ID' => 'chv1diarrhoea_duration1',
                'Value' => '',
            'Label' => '(A) Ask about the duration of diarrhoea',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'field_setID' => 'chv1diarrhoea_eyes_sunken',
                'field_ID' => 'chv1diarrhoea_eyes_sunken1',
                'Value' => '',
            'Label' => '(C) Look for sunken eyes',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'field_setID' => 'chv1diarrhoea_findings',
                'field_ID' => 'chv1diarrhoea_findings1',
                'Value' => '1',
                'Label' => 'Goes back immediately',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'field_setID' => 'chv1diarrhoea_findings',
                'field_ID' => 'chv1diarrhoea_findings2',
                'Value' => '2',
                'Label' => 'Slowly',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'field_setID' => 'chv1diarrhoea_findings',
                'field_ID' => 'chv1diarrhoea_findings3',
                'Value' => '3',
                'Label' => 'Very Slowly',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'field_setID' => 'chv1diarrhoea_skin_pinch',
                'field_ID' => 'chv1diarrhoea_skin_pinch1',
                'Value' => '',
            'Label' => '(D) Perform skin pinch',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'field_setID' => 'chv1diarrhoea_stool_blood',
                'field_ID' => 'chv1diarrhoea_stool_blood1',
                'Value' => '',
            'Label' => '(B) Ask about the presence of blood in stool',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'field_setID' => 'chv1diarrhoea_symptom',
                'field_ID' => 'chv1diarrhoea_symptom1',
                'Value' => '',
                'Label' => '2.Diarrhoea',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'field_setID' => 'chv1diarrhoea_total',
                'field_ID' => 'chv1diarrhoea_total1',
                'Value' => '',
                'Label' => 'Diarrhoea Total',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'field_setID' => 'chv1discharge_duration',
                'field_ID' => 'chv1discharge_duration1',
                'Value' => '',
            'Label' => '(C) Asked for duration of discharge from the ear?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'field_setID' => 'chv1document_cases_3mnths',
                'field_ID' => 'chv1document_cases_3mnths1',
                'Value' => '',
            'Label' => '(C)  Document cases seen over 3 months',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'field_setID' => 'chv1drink_findings_diarr',
                'field_ID' => 'chv1drink_findings_diarr1',
                'Value' => '1',
                'Label' => ' Drinks eagerly',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'field_setID' => 'chv1drink_findings_diarr',
                'field_ID' => 'chv1drink_findings_diarr2',
                'Value' => '2',
                'Label' => 'Unable to drink',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'field_setID' => 'chv1dysentry',
                'field_ID' => 'chv1dysentry1',
                'Value' => '',
                'Label' => 'Dysentry',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'field_setID' => 'chv1earInfect_classification',
                'field_ID' => 'chv1earInfect_classification1',
                'Value' => '1',
                'Label' => 'No ear Infection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'field_setID' => 'chv1earInfect_classification',
                'field_ID' => 'chv1earInfect_classification2',
                'Value' => '2',
                'Label' => 'Chronic ear infection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'field_setID' => 'chv1earInfect_classification',
                'field_ID' => 'chv1earInfect_classification3',
                'Value' => '3',
                'Label' => 'Acute Ear infection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'field_setID' => 'chv1earInfect_classification',
                'field_ID' => 'chv1earInfect_classification4',
                'Value' => '4',
                'Label' => 'Mastoiditis',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'field_setID' => 'chv1earInfect_earPain',
                'field_ID' => 'chv1earInfect_earPain1',
                'Value' => '',
            'Label' => '(A) Asked if there is ear pain?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'field_setID' => 'chv1early_infant_algorithm',
                'field_ID' => 'chv1early_infant_algorithm1',
                'Value' => '',
                'Label' => 'Does the facility have an updated Early Infant Diagnosis Algorithm 2009/2012/2014?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'field_setID' => 'chv1ear_discharge',
                'field_ID' => 'chv1ear_discharge1',
                'Value' => '',
            'Label' => '(B) Asked if there is ear discharge?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'field_setID' => 'chv1ear_infection',
                'field_ID' => 'chv1ear_infection1',
                'Value' => '',
                'Label' => '4. Ear Infections',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'field_setID' => 'chv1eid_Collection_kits',
                'field_ID' => 'chv1eid_Collection_kits1',
                'Value' => '',
                'Label' => 'EID collection kits',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'field_setID' => 'chv1enough_Space_patient',
                'field_ID' => 'chv1enough_Space_patient1',
                'Value' => '',
            'Label' => '(2) Enough space to see patient',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'field_setID' => 'chv1exclus_breastfeeding',
                'field_ID' => 'chv1exclus_breastfeeding1',
                'Value' => '1',
                'Label' => 'Exclusive breastfeeding',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'field_setID' => 'chv1exclus_breastfeeding',
                'field_ID' => 'chv1exclus_breastfeeding2',
                'Value' => '2',
                'Label' => 'Replacement Feeding',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'field_setID' => 'chv1exclus_breastfeeding',
                'field_ID' => 'chv1exclus_breastfeeding3',
                'Value' => '3',
                'Label' => 'Complementary feeding',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'field_setID' => 'chv1expiring_date',
                'field_ID' => 'chv1expiring_date1',
                'Value' => '',
                'Label' => 'Expiring Date',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'field_setID' => 'chv1feverclassif_findings',
                'field_ID' => 'chv1feverclassif_findings1',
                'Value' => '1',
                'Label' => 'Fever/No malaria',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'field_setID' => 'chv1feverclassif_findings',
                'field_ID' => 'chv1feverclassif_findings2',
                'Value' => '2',
                'Label' => 'Malaria',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'field_setID' => 'chv1feverclassif_findings',
                'field_ID' => 'chv1feverclassif_findings3',
                'Value' => '3',
                'Label' => 'Very severe febrile disease',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'field_setID' => 'chv1fever_duration',
                'field_ID' => 'chv1fever_duration1',
                'Value' => '',
            'Label' => '(A) Asked about the duration',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'field_setID' => 'chv1fever_symptom',
                'field_ID' => 'chv1fever_symptom1',
                'Value' => '',
                'Label' => '3.Fever',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'field_setID' => 'chv1fever_temp_take',
                'field_ID' => 'chv1fever_temp_take1',
                'Value' => '',
            'Label' => '(B) Temperature taken and recorded',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'field_setID' => 'chv1findings',
                'field_ID' => 'chv1findings1',
                'Value' => '',
                'Label' => 'Findings',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'field_setID' => 'chv1gention_violet',
                'field_ID' => 'chv1gention_violet1',
                'Value' => '',
                'Label' => 'Gention Violet',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'field_setID' => 'chv1hcw_response',
                'field_ID' => 'chv1hcw_response1',
                'Value' => '',
                'Label' => 'HCW Response',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'field_setID' => 'chv1hiv_exposure',
                'field_ID' => 'chv1hiv_exposure1',
                'Value' => '',
            'Label' => '(A) HIV exposure/infection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'field_setID' => 'chv1hiv_pos_neg',
                'field_ID' => 'chv1hiv_pos_neg1',
                'Value' => '1',
                'Label' => 'HIV Positive',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'field_setID' => 'chv1hiv_pos_neg',
                'field_ID' => 'chv1hiv_pos_neg2',
                'Value' => '2',
                'Label' => 'HIV Negative',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'field_setID' => 'chv1hiv_pos_neg',
                'field_ID' => 'chv1hiv_pos_neg3',
                'Value' => '3',
            'Label' => 'Results Not Ready (PCR test only)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'field_setID' => 'chv1hiv_rapid_test',
                'field_ID' => 'chv1hiv_rapid_test1',
                'Value' => '',
                'Label' => 'HIV Rapid Test Kits',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'field_setID' => 'chv1iccm_tools',
                'field_ID' => 'chv1iccm_tools1',
                'Value' => '',
            'Label' => '(G) ICCM Tools',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'field_setID' => 'chv1iec_materials',
                'field_ID' => 'chv1iec_materials1',
                'Value' => '',
                'Label' => ' Does the facility have updated IEC materials for categories?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'field_setID' => 'chv1if_yes_Indic_total',
                'field_ID' => 'chv1if_yes_Indic_total1',
                'Value' => '',
                'Label' => 'If yes, Indicate Total Quantities available',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'field_setID' => 'chv1imci_case_record_form',
                'field_ID' => 'chv1imci_case_record_form1',
                'Value' => '',
            'Label' => '(E) IMCI case recording form',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'field_setID' => 'chv1imci_chart_book',
                'field_ID' => 'chv1imci_chart_book1',
                'Value' => '',
            'Label' => '(5) IMCI Chart booklet',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'field_setID' => 'chv1immunization_status',
                'field_ID' => 'chv1immunization_status1',
                'Value' => '',
            'Label' => '(C) Immunization status/Vitamin A',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'field_setID' => 'chv1inability_to_breastfeed',
                'field_ID' => 'chv1inability_to_breastfeed1',
                'Value' => '',
            'Label' => '(A) Inability to drink or breastfeed',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'field_setID' => 'chv1include_comma_sep',
                'field_ID' => 'chv1include_comma_sep1',
                'Value' => '',
                'Label' => '* Include all treatments using a comma separated list without regarding the dosage',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'field_setID' => 'chv1inhaler_salbutamol',
                'field_ID' => 'chv1inhaler_salbutamol1',
                'Value' => '',
                'Label' => 'Inhaler Salbutamol',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'field_setID' => 'chv1injectionCholarmphenicol',
                'field_ID' => 'chv1injectionCholarmphenicol1',
                'Value' => '',
                'Label' => 'Injection Cholarmphenicol',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'field_setID' => 'chv1injectionDiazepam',
                'field_ID' => 'chv1injectionDiazepam1',
                'Value' => '',
                'Label' => 'Injection Diazepam',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'field_setID' => 'chv1isORT_corner_func',
                'field_ID' => 'chv1isORT_corner_func1',
                'Value' => '',
                'Label' => 'Is the ORT Corner functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'field_setID' => 'chv1is_there_seating',
                'field_ID' => 'chv1is_there_seating1',
                'Value' => '',
            'Label' => '(1) Is there any available seating area for caregiver',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'field_setID' => 'chv1IV_fluid_norm',
                'field_ID' => 'chv1IV_fluid_norm1',
                'Value' => '',
                'Label' => 'IV fluid: 9% Normal saline',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'field_setID' => 'chv1IV_fluid_ringer_lact',
                'field_ID' => 'chv1IV_fluid_ringer_lact1',
                'Value' => '',
                'Label' => 'IV Fluid : Ringer lactate Solution',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'field_setID' => 'chv1june_numbox',
                'field_ID' => 'chv1june_numbox1',
                'Value' => '',
                'Label' => 'June',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'field_setID' => 'chv1lab_staff',
                'field_ID' => 'chv1lab_staff1',
                'Value' => '',
                'Label' => 'Lab Staff',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'field_setID' => 'chv1lethargy_unconsciousness',
                'field_ID' => 'chv1lethargy_unconsciousness1',
                'Value' => '',
            'Label' => '(B) Lethargy and unconsciousness',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'field_setID' => 'chv1location_of_availold',
                'field_ID' => 'chv1location_of_availold1',
                'Value' => '1',
                'Label' => 'OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'field_setID' => 'chv1location_of_availold',
                'field_ID' => 'chv1location_of_availold2',
                'Value' => '2',
                'Label' => 'MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'field_setID' => 'chv1location_of_availold',
                'field_ID' => 'chv1location_of_availold3',
                'Value' => '3',
                'Label' => 'U5 Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'field_setID' => 'chv1location_of_availold',
                'field_ID' => 'chv1location_of_availold4',
                'Value' => '4',
                'Label' => 'Ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'field_setID' => 'chv1location_of_availold',
                'field_ID' => 'chv1location_of_availold5',
                'Value' => '5',
                'Label' => 'Pharmacy',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'field_setID' => 'chv1location_of_availold',
                'field_ID' => 'chv1location_of_availold6',
                'Value' => '6',
                'Label' => 'Not Applicable',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'field_setID' => 'chv1location_of_availold',
                'field_ID' => 'chv1location_of_availold7',
                'Value' => '7',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'field_setID' => 'chv1location_of_availold',
                'field_ID' => 'chv1location_of_availold8',
                'Value' => '-51',
                'Label' => 'No information provided',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'field_setID' => 'chv1main_challenge_accessing',
                'field_ID' => 'chv1main_challenge_accessing1',
                'Value' => '',
            'Label' => '(C) WHAT IS THE MAIN CHALLENGE IN ACCESSING DATA FROM U5 REGISTERS IN THE LAST 3 MONTHS',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'field_setID' => 'chv1malariaTest_notDone',
                'field_ID' => 'chv1malariaTest_notDone1',
                'Value' => '',
            'Label' => '(E) If Malaria blood test was not taken, give reason',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'field_setID' => 'chv1malaria_test',
                'field_ID' => 'chv1malaria_test1',
                'Value' => '',
            'Label' => '(D) Malaria blood tested',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'field_setID' => 'chv1malaria_Total',
                'field_ID' => 'chv1malaria_Total1',
                'Value' => '',
                'Label' => 'Malaria Total',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'field_setID' => 'chv1malnutrition',
                'field_ID' => 'chv1malnutrition1',
                'Value' => '',
            'Label' => '(A) Malnutrition',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'field_setID' => 'chv1march_label',
                'field_ID' => 'chv1march_label1',
                'Value' => '',
                'Label' => 'March',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'field_setID' => 'chv1march_numbox',
                'field_ID' => 'chv1march_numbox1',
                'Value' => '',
                'Label' => 'March',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'field_setID' => 'chv1may_label',
                'field_ID' => 'chv1may_label1',
                'Value' => '',
                'Label' => 'May',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'field_setID' => 'chv1may_numbox',
                'field_ID' => 'chv1may_numbox1',
                'Value' => '',
                'Label' => 'May',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'field_setID' => 'chv1measles_sign',
                'field_ID' => 'chv1measles_sign1',
                'Value' => '',
            'Label' => '(C) Looked for signs of measles',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            367 => 
            array (
            'field_setID' => 'chv1metronidazole (Flagyl)',
            'field_ID' => 'chv1metronidazole (Flagyl)1',
                'Value' => '',
            'Label' => 'Metronidazole (Flagyl)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'field_setID' => 'chv1microscope_malaria',
                'field_ID' => 'chv1microscope_malaria1',
                'Value' => '',
                'Label' => 'Microscope for malaria test',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'field_setID' => 'chv1mothers_condition',
                'field_ID' => 'chv1mothers_condition1',
                'Value' => '',
            'Label' => '(H) Mother\'s condition',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'field_setID' => 'chv1mother_child_blkt',
                'field_ID' => 'chv1mother_child_blkt1',
                'Value' => '',
            'Label' => '(C) Mother Child Booklet',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'field_setID' => 'chv1muacTaken_recorded',
                'field_ID' => 'chv1muacTaken_recorded1',
                'Value' => '',
            'Label' => '(D) MUAC taken and recorded',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'field_setID' => 'chv1noBloodtest_findings',
                'field_ID' => 'chv1noBloodtest_findings1',
                'Value' => '1',
                'Label' => 'No Test kits',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'field_setID' => 'chv1noBloodtest_findings',
                'field_ID' => 'chv1noBloodtest_findings2',
                'Value' => '2',
                'Label' => 'No lab',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'field_setID' => 'chv1noBloodtest_findings',
                'field_ID' => 'chv1noBloodtest_findings3',
                'Value' => '3',
                'Label' => 'No skills',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'field_setID' => 'chv1noBloodtest_findings',
                'field_ID' => 'chv1noBloodtest_findings4',
                'Value' => '4',
                'Label' => 'Forgot',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'field_setID' => 'chv1noBloodtest_findings',
                'field_ID' => 'chv1noBloodtest_findings5',
                'Value' => '5',
            'Label' => 'Other(Specify)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'field_setID' => 'chv1not_confirmed',
                'field_ID' => 'chv1not_confirmed1',
                'Value' => '',
            'Label' => 'Not Confirmed(Include clinical malaria)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'field_setID' => 'chv1not_hiv_exposed',
                'field_ID' => 'chv1not_hiv_exposed1',
                'Value' => '1',
                'Label' => 'Not HIV exposed/infected',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'field_setID' => 'chv1not_hiv_exposed',
                'field_ID' => 'chv1not_hiv_exposed2',
                'Value' => '2',
                'Label' => 'HIV exposed',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'field_setID' => 'chv1no_classification',
                'field_ID' => 'chv1no_classification1',
                'Value' => '',
                'Label' => 'No Classification',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'field_setID' => 'chv1no_dehydration',
                'field_ID' => 'chv1no_dehydration1',
                'Value' => '',
                'Label' => 'No Dehydration',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'field_setID' => 'chv1num_of_units',
                'field_ID' => 'chv1num_of_units1',
                'Value' => '',
                'Label' => 'No. of Units',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'field_setID' => 'chv1oedema_on_feet',
                'field_ID' => 'chv1oedema_on_feet1',
                'Value' => '',
            'Label' => '(C) Oedema on both feet',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'field_setID' => 'chv1offer_fluid_drink',
                'field_ID' => 'chv1offer_fluid_drink1',
                'Value' => '',
            'Label' => '(F) Offer the child fluid to drink',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'field_setID' => 'chv1on_track',
                'field_ID' => 'chv1on_track1',
                'Value' => '1',
                'Label' => 'On track',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'field_setID' => 'chv1on_track',
                'field_ID' => 'chv1on_track2',
                'Value' => '2',
                'Label' => 'Not on track',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'field_setID' => 'chv1ORT_improvised',
                'field_ID' => 'chv1ORT_improvised1',
                'Value' => '',
            'Label' => '(B) ORT corner register (improvised)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'field_setID' => 'chv1ORT_MOH_reg',
                'field_ID' => 'chv1ORT_MOH_reg1',
                'Value' => '',
            'Label' => '(D) ORT corner register (MOH)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'field_setID' => 'chv1others_total',
                'field_ID' => 'chv1others_total1',
                'Value' => '',
                'Label' => 'Others total',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'field_setID' => 'chv1other_conditions',
                'field_ID' => 'chv1other_conditions1',
                'Value' => '',
            'Label' => '(G) Other conditions',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'field_setID' => 'chv1paed_protocol',
                'field_ID' => 'chv1paed_protocol1',
                'Value' => '',
                'Label' => 'Does the facility have an updated Paediatric Protocol 2010/2013?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'field_setID' => 'chv1pctg0_25',
                'field_ID' => 'chv1pctg0_251',
                'Value' => '',
                'Label' => '0.25%',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'field_setID' => 'chv1pctg10dextrose',
                'field_ID' => 'chv1pctg10dextrose1',
                'Value' => '',
                'Label' => '10% Dextrose',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'field_setID' => 'chv1per_min_findings',
                'field_ID' => 'chv1per_min_findings1',
                'Value' => '',
                'Label' => 'per minute',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'field_setID' => 'chv1pharm_staff',
                'field_ID' => 'chv1pharm_staff1',
                'Value' => '',
                'Label' => 'Pharmaceutical Staff',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'field_setID' => 'chv1pmtct_guidelines',
                'field_ID' => 'chv1pmtct_guidelines1',
                'Value' => '',
                'Label' => 'Does the facility have an updated 2012 PMTCT guidelines?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'field_setID' => 'chv1pneumonia',
                'field_ID' => 'chv1pneumonia1',
                'Value' => '',
                'Label' => 'Pneumonia',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'field_setID' => 'chv1pneumonia_findings',
                'field_ID' => 'chv1pneumonia_findings1',
                'Value' => '1',
                'Label' => 'No pneumonia / cough or cold',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'field_setID' => 'chv1pneumonia_findings',
                'field_ID' => 'chv1pneumonia_findings2',
                'Value' => '2',
                'Label' => 'Pneumonia',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'field_setID' => 'chv1pneumonia_findings',
                'field_ID' => 'chv1pneumonia_findings3',
                'Value' => '3',
                'Label' => 'Severe Pneumonia /very severe disease',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'field_setID' => 'chv1pneumonia_total',
                'field_ID' => 'chv1pneumonia_total1',
                'Value' => '',
                'Label' => 'Pneumonia Total',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'field_setID' => 'chv1present_not_present',
                'field_ID' => 'chv1present_not_present1',
                'Value' => '1',
                'Label' => 'present',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'field_setID' => 'chv1present_not_present',
                'field_ID' => 'chv1present_not_present2',
                'Value' => '2',
                'Label' => 'not present',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'field_setID' => 'chv1pus_Draining',
                'field_ID' => 'chv1pus_Draining1',
                'Value' => '',
            'Label' => '(D) Looked for pus draining from ears?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'field_setID' => 'chv1q_updated_imci_booklet',
                'field_ID' => 'chv1q_updated_imci_booklet1',
                'Value' => '',
                'Label' => 'Does the facility have update IMCI guidelines/chart booklets?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'field_setID' => 'chv1q_updated_ORT_corn',
                'field_ID' => 'chv1q_updated_ORT_corn1',
                'Value' => '',
                'Label' => 'Does the facility have updated ORT guidelines?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'field_setID' => 'chv1rdt_strips_reagent',
                'field_ID' => 'chv1rdt_strips_reagent1',
                'Value' => '',
                'Label' => 'RDT strips and reagent for malaria',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'field_setID' => 'chv1referral_slips',
                'field_ID' => 'chv1referral_slips1',
                'Value' => '',
            'Label' => '(F) Referral Slips',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'field_setID' => 'chv1salbutamol',
                'field_ID' => 'chv1salbutamol1',
                'Value' => '',
                'Label' => 'Salbutamol tab',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'field_setID' => 'chv1service',
                'field_ID' => 'chv1service1',
                'Value' => '',
                'Label' => 'Service',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'field_setID' => 'chv1severe_dehydration',
                'field_ID' => 'chv1severe_dehydration1',
                'Value' => '',
                'Label' => 'Severe Dehydration',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'field_setID' => 'chv1severe_palmar_findings',
                'field_ID' => 'chv1severe_palmar_findings1',
                'Value' => '1',
                'Label' => 'Severe Palmar Pallor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'field_setID' => 'chv1severe_palmar_findings',
                'field_ID' => 'chv1severe_palmar_findings2',
                'Value' => '2',
                'Label' => 'Some Palmar Pallor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'field_setID' => 'chv1severe_palmar_findings',
                'field_ID' => 'chv1severe_palmar_findings3',
                'Value' => '3',
                'Label' => 'No Palmar Pallor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'field_setID' => 'chv1severe_pneumonia',
                'field_ID' => 'chv1severe_pneumonia1',
                'Value' => '',
                'Label' => 'Severe Pneumonia',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'field_setID' => 'chv1some_dehydration',
                'field_ID' => 'chv1some_dehydration1',
                'Value' => '',
                'Label' => 'Some dehydration',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'field_setID' => 'chv1symptom_below',
                'field_ID' => 'chv1symptom_below1',
                'Value' => '',
                'Label' => 'Does child have symptom below?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'field_setID' => 'chv1symptom_label',
                'field_ID' => 'chv1symptom_label1',
                'Value' => '',
                'Label' => 'Symptom',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'field_setID' => 'chv1syrupErythromocyn',
                'field_ID' => 'chv1syrupErythromocyn1',
                'Value' => '',
                'Label' => 'Syrup Erythromocyn',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'field_setID' => 'chv1syrupIron',
                'field_ID' => 'chv1syrupIron1',
                'Value' => '',
                'Label' => 'Syrup Iron',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'field_setID' => 'chv1syrupParacetamol',
                'field_ID' => 'chv1syrupParacetamol1',
                'Value' => '',
                'Label' => 'Syrup Paracetamol',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'field_setID' => 'chv1tabAlbendazole',
                'field_ID' => 'chv1tabAlbendazole1',
                'Value' => '',
                'Label' => 'Tab. Albendazole',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'field_setID' => 'chv1tabletAmoxicilin',
                'field_ID' => 'chv1tabletAmoxicilin1',
                'Value' => '',
                'Label' => 'Tablet Amoxicilin',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'field_setID' => 'chv1tabletCiprofloxacin',
                'field_ID' => 'chv1tabletCiprofloxacin1',
                'Value' => '',
                'Label' => 'Tablet Ciprofloxacin',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'field_setID' => 'chv1tabletCoartem',
                'field_ID' => 'chv1tabletCoartem1',
                'Value' => '',
                'Label' => 'Tablet Coartem',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'field_setID' => 'chv1tabletCotrimoxazole',
                'field_ID' => 'chv1tabletCotrimoxazole1',
                'Value' => '',
                'Label' => 'Tablet Cotrimoxazole',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'field_setID' => 'chv1tabletErythromicyn',
                'field_ID' => 'chv1tabletErythromicyn1',
                'Value' => '',
                'Label' => 'Tablet Erythromicyn',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'field_setID' => 'chv1tabletIronFolicAcid',
                'field_ID' => 'chv1tabletIronFolicAcid1',
                'Value' => '',
                'Label' => 'Tablet Iron - Folic acid',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'field_setID' => 'chv1tabletQuinine',
                'field_ID' => 'chv1tabletQuinine1',
                'Value' => '',
                'Label' => 'Tablet Quinine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'field_setID' => 'chv1tabParacetamol',
                'field_ID' => 'chv1tabParacetamol1',
                'Value' => '',
                'Label' => 'Tab Paracetamol',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'field_setID' => 'chv1tab_cap_multivitamin',
                'field_ID' => 'chv1tab_cap_multivitamin1',
                'Value' => '',
                'Label' => 'Tab/Cap Multivitamin',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'field_setID' => 'chv1tender_swell',
                'field_ID' => 'chv1tender_swell1',
                'Value' => '',
            'Label' => '(E) Felt for tender swelling behind the ear?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'field_setID' => 'chv1testingSupplies',
                'field_ID' => 'chv1testingSupplies1',
                'Value' => '',
                'Label' => 'Testing Supplies',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'field_setID' => 'chv1tetracycline_eye',
                'field_ID' => 'chv1tetracycline_eye1',
                'Value' => '',
                'Label' => 'Tetratcycline Eye Ointment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'field_setID' => 'chv1tool',
                'field_ID' => 'chv1tool1',
                'Value' => '',
                'Label' => 'Tool',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'field_setID' => 'chv1total_u5_seen',
                'field_ID' => 'chv1total_u5_seen1',
                'Value' => '',
                'Label' => 'TOTAL U5 CHILDREN SEEN IN THE LAST 1 MONTH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'field_setID' => 'chv1treatment',
                'field_ID' => 'chv1treatment1',
                'Value' => '',
                'Label' => 'Treatment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'field_setID' => 'chv1treatment_label',
                'field_ID' => 'chv1treatment_label1',
                'Value' => '',
                'Label' => 'Treatment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'field_setID' => 'chv1ttlmain_supp',
                'field_ID' => 'chv1ttlmain_supp1',
                'Value' => '',
                'Label' => 'Main Supplier',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'field_setID' => 'chv1under_5_reg',
                'field_ID' => 'chv1under_5_reg1',
                'Value' => '',
            'Label' => '(A) Under 5 Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'field_setID' => 'chv1updated_iccm',
                'field_ID' => 'chv1updated_iccm1',
                'Value' => '',
            'Label' => 'Does the facility have updated Integrated Community Case Management/Community IMCI (ICCM) guidelines?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'field_setID' => 'chv1up_to_date',
                'field_ID' => 'chv1up_to_date1',
                'Value' => '1',
                'Label' => 'Up-to-date',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'field_setID' => 'chv1up_to_date',
                'field_ID' => 'chv1up_to_date2',
                'Value' => '2',
                'Label' => 'Not up-to-date',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'field_setID' => 'chv1waitingspace',
                'field_ID' => 'chv1waitingspace1',
                'Value' => '',
            'Label' => '(6) Waiting space for caregiver and children',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'field_setID' => 'chv1_main_suppspec',
                'field_ID' => 'chv1_main_suppspec1',
                'Value' => '1',
                'Label' => 'Direct from Donor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'field_setID' => 'chv1_main_suppspec',
                'field_ID' => 'chv1_main_suppspec2',
                'Value' => '2',
                'Label' => 'KEMSA',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'field_setID' => 'chv1_main_suppspec',
                'field_ID' => 'chv1_main_suppspec3',
                'Value' => '3',
                'Label' => 'MEDS',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'field_setID' => 'chv1_main_suppspec',
                'field_ID' => 'chv1_main_suppspec4',
                'Value' => '4',
                'Label' => 'Private purcased by facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'field_setID' => 'chv1_main_suppspec',
                'field_ID' => 'chv1_main_suppspec5',
                'Value' => '5',
                'Label' => 'Purchased by patient',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'field_setID' => 'chv1_main_suppspec',
                'field_ID' => 'chv1_main_suppspec6',
                'Value' => '',
            'Label' => 'Other (Specify)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'field_setID' => 'cmnh150MG_300MG',
                'field_ID' => 'cmnh150MG_300MG1',
                'Value' => '',
                'Label' => '150MG/300MG',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'field_setID' => 'cmnh200',
                'field_ID' => 'cmnh2001',
                'Value' => '',
                'Label' => '200MG Capsule',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'field_setID' => 'cmnh2ml_val',
                'field_ID' => 'cmnh2ml_val1',
                'Value' => '',
                'Label' => '2ml vial',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'field_setID' => 'cmnh4_pct',
                'field_ID' => 'cmnh4_pct1',
                'Value' => '',
                'Label' => '4%',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'field_setID' => 'cmnh5005',
                'field_ID' => 'cmnh50051',
                'Value' => '',
                'Label' => '500mg / 5ml sy',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'field_setID' => 'cmnh500mg_100ml',
                'field_ID' => 'cmnh500mg_100ml1',
                'Value' => '',
                'Label' => '500mg/100ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'field_setID' => 'cmnh500MG_5ml_syr',
                'field_ID' => 'cmnh500MG_5ml_syr1',
                'Value' => '',
                'Label' => '500MG/5ml Syrup',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'field_setID' => 'cmnh5soln',
                'field_ID' => 'cmnh5soln1',
                'Value' => '',
                'Label' => '5% Solution',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'field_setID' => 'cmnhaalocation',
                'field_ID' => 'cmnhaalocation1',
                'Value' => '1',
                'Label' => 'Delivery room',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'field_setID' => 'cmnhaalocation',
                'field_ID' => 'cmnhaalocation2',
                'Value' => '2',
                'Label' => 'Pharmacy',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'field_setID' => 'cmnhaalocation',
                'field_ID' => 'cmnhaalocation3',
                'Value' => '3',
                'Label' => 'Store',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'field_setID' => 'cmnhaalocation',
                'field_ID' => 'cmnhaalocation4',
                'Value' => '4',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'field_setID' => 'cmnhaalocation',
                'field_ID' => 'cmnhaalocation5',
                'Value' => '-51',
                'Label' => 'No information provided',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'field_setID' => 'cmnhambu_bag_adult',
                'field_ID' => 'cmnhambu_bag_adult1',
                'Value' => '',
            'Label' => 'Ambu bag-Adult size (500mls volume)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'field_setID' => 'cmnhavailableqnt',
                'field_ID' => 'cmnhavailableqnt1',
                'Value' => '',
            'Label' => 'Available Quantities(No. of Units)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'field_setID' => 'cmnhemptyl',
                'field_ID' => 'cmnhemptyl1',
                'Value' => '',
                'Label' => '',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'field_setID' => 'cmnhexpirey_date',
                'field_ID' => 'cmnhexpirey_date1',
                'Value' => '',
                'Label' => 'Expiring Date',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'field_setID' => 'cmnhexpirydate',
                'field_ID' => 'cmnhexpirydate1',
                'Value' => '',
                'Label' => 'Expiry date',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'field_setID' => 'cmnhgentinject',
                'field_ID' => 'cmnhgentinject1',
                'Value' => '',
                'Label' => 'Injection 10mg/ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'field_setID' => 'cmnhhivretest',
                'field_ID' => 'cmnhhivretest1',
                'Value' => '',
            'Label' => '(10) Are mothers retested for HIV in the maternity unit?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'field_setID' => 'cmnhlafter2010',
                'field_ID' => 'cmnhlafter20101',
                'Value' => '',
                'Label' => 'After 2010',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'field_setID' => 'cmnhlamivudine_zidovudine',
                'field_ID' => 'cmnhlamivudine_zidovudine1',
                'Value' => '',
            'Label' => 'Lamivudine/Zidovudine (AZT/3TC)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'field_setID' => 'cmnhlbefore2010',
                'field_ID' => 'cmnhlbefore20101',
                'Value' => '',
                'Label' => 'Before 2010',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'field_setID' => 'cmnhlocation',
                'field_ID' => 'cmnhlocation1',
                'Value' => '1',
                'Label' => 'OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'field_setID' => 'cmnhlocation',
                'field_ID' => 'cmnhlocation2',
                'Value' => '2',
                'Label' => 'MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'field_setID' => 'cmnhlocation',
                'field_ID' => 'cmnhlocation3',
                'Value' => '3',
                'Label' => 'U5 Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'field_setID' => 'cmnhlocation',
                'field_ID' => 'cmnhlocation4',
                'Value' => '4',
                'Label' => 'Ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'field_setID' => 'cmnhlocation',
                'field_ID' => 'cmnhlocation5',
                'Value' => '5',
                'Label' => 'Pharmacy',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'field_setID' => 'cmnhlocation',
                'field_ID' => 'cmnhlocation6',
                'Value' => '6',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'field_setID' => 'cmnhlocation',
                'field_ID' => 'cmnhlocation7',
                'Value' => '-51',
                'Label' => 'No information provided',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'field_setID' => 'cmnhlocationofavail',
                'field_ID' => 'cmnhlocationofavail1',
                'Value' => '1',
                'Label' => 'OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'field_setID' => 'cmnhlocationofavail',
                'field_ID' => 'cmnhlocationofavail2',
                'Value' => '2',
                'Label' => 'MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'field_setID' => 'cmnhlocationofavail',
                'field_ID' => 'cmnhlocationofavail3',
                'Value' => '3',
                'Label' => 'U5 Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'field_setID' => 'cmnhlocationofavail',
                'field_ID' => 'cmnhlocationofavail4',
                'Value' => '4',
                'Label' => 'Ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'field_setID' => 'cmnhlocationofavail',
                'field_ID' => 'cmnhlocationofavail5',
                'Value' => '5',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'field_setID' => 'cmnhlocationofavail',
                'field_ID' => 'cmnhlocationofavail6',
                'Value' => '-51',
                'Label' => 'No information provided',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'field_setID' => 'cmnhmain_supp_spec',
                'field_ID' => 'cmnhmain_supp_spec1',
                'Value' => '1',
                'Label' => 'Direct from donor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'field_setID' => 'cmnhmain_supp_spec',
                'field_ID' => 'cmnhmain_supp_spec2',
                'Value' => '2',
                'Label' => 'KEMSA',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'field_setID' => 'cmnhmain_supp_spec',
                'field_ID' => 'cmnhmain_supp_spec3',
                'Value' => '3',
                'Label' => 'MEDS',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'field_setID' => 'cmnhmain_supp_spec',
                'field_ID' => 'cmnhmain_supp_spec4',
                'Value' => '4',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'field_setID' => 'cmnhmain_supp_spec',
                'field_ID' => 'cmnhmain_supp_spec5',
                'Value' => '5',
                'Label' => 'Private purchase by facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'field_setID' => 'cmnhmain_supp_spec',
                'field_ID' => 'cmnhmain_supp_spec6',
                'Value' => '6',
                'Label' => 'Purchased by patient',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'field_setID' => 'cmnhmain_supp_spec',
                'field_ID' => 'cmnhmain_supp_spec7',
                'Value' => '7',
            'Label' => 'Other(Specify)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'field_setID' => 'cmnhno_of_units',
                'field_ID' => 'cmnhno_of_units1',
                'Value' => '',
                'Label' => 'No. Of Units',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'field_setID' => 'cmnhnumberofunits',
                'field_ID' => 'cmnhnumberofunits1',
                'Value' => '',
                'Label' => 'Number of Units',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'field_setID' => 'cmnhquantity_label',
                'field_ID' => 'cmnhquantity_label1',
                'Value' => '',
                'Label' => 'Quantity',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'field_setID' => 'cmnhstuff',
                'field_ID' => 'cmnhstuff1',
                'Value' => '1',
                'Label' => 'Direct from donor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'field_setID' => 'cmnhstuff',
                'field_ID' => 'cmnhstuff2',
                'Value' => '2',
                'Label' => 'KEMSA',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'field_setID' => 'cmnhstuff',
                'field_ID' => 'cmnhstuff3',
                'Value' => '3',
                'Label' => 'MEDS',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('fields')->insert(array (
            0 => 
            array (
                'field_setID' => 'cmnhstuff',
                'field_ID' => 'cmnhstuff4',
                'Value' => '4',
                'Label' => 'Private purchase by facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'field_setID' => 'cmnhstuff',
                'field_ID' => 'cmnhstuff5',
                'Value' => '5',
                'Label' => 'Private purchase by patient',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'field_setID' => 'cmnhstuff',
                'field_ID' => 'cmnhstuff6',
                'Value' => '-1',
            'Label' => 'Other(Specify)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'field_setID' => 'cmnhtotalunitsused',
                'field_ID' => 'cmnhtotalunitsused1',
                'Value' => '',
                'Label' => 'Total Units Used',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'field_setID' => 'cmnhunavail',
                'field_ID' => 'cmnhunavail1',
                'Value' => '1',
                'Label' => 'Not Ordered',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'field_setID' => 'cmnhunavail',
                'field_ID' => 'cmnhunavail2',
                'Value' => '2',
                'Label' => 'Ordered but not yet received',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'field_setID' => 'cmnhunavail',
                'field_ID' => 'cmnhunavail3',
                'Value' => '3',
                'Label' => 'Expired',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'field_setID' => 'cmnhunavail',
                'field_ID' => 'cmnhunavail4',
                'Value' => '4',
                'Label' => 'All used',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'field_setID' => 'cmnh_4mg_ml',
                'field_ID' => 'cmnh_4mg_ml1',
                'Value' => '',
                'Label' => '4mg/ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'field_setID' => 'cmnh_5grams',
                'field_ID' => 'cmnh_5grams1',
                'Value' => '',
                'Label' => '5 grams',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'field_setID' => 'cmnh_dexamethasone',
                'field_ID' => 'cmnh_dexamethasone1',
                'Value' => '',
                'Label' => 'Dexamethasone',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'field_setID' => 'cmnh_magnesium_sulph_im',
                'field_ID' => 'cmnh_magnesium_sulph_im1',
                'Value' => '',
                'Label' => 'Magnesium Sulphate IM',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'field_setID' => 'empty_label',
                'field_ID' => 'empty_label1',
                'Value' => '',
                'Label' => '',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'field_setID' => 'mnh100_000IU',
                'field_ID' => 'mnh100000IU1',
                'Value' => '',
                'Label' => '100,000 IU',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'field_setID' => 'mnh120mg',
                'field_ID' => 'mnh120mg1',
                'Value' => '',
                'Label' => '120mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'field_setID' => 'mnh125mg_5ml',
                'field_ID' => 'mnh125mg5ml1',
                'Value' => '',
                'Label' => '125mg/5ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'field_setID' => 'mnh1sachet500ml',
                'field_ID' => 'mnh1sachet500ml1',
                'Value' => '',
            'Label' => '1 sachet (500ml)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'field_setID' => 'mnh200_000IU',
                'field_ID' => 'mnh200000IU1',
                'Value' => '',
                'Label' => '200,000 IU',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'field_setID' => 'mnh200mg_5ml',
                'field_ID' => 'mnh200mg5ml1',
                'Value' => '',
                'Label' => '200mg/5ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'field_setID' => 'mnh2012_2013_2014_2015',
                'field_ID' => 'mnh2012_2013_2014_2015',
                'Value' => '',
                'Label' => 'Select Year',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'field_setID' => 'mnh20mg+120mg',
                'field_ID' => 'mnh20mg+120mg1',
                'Value' => '',
                'Label' => '20mg + 120mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'field_setID' => 'mnh20mgnumberofstrips_1Strip10tablets',
                'field_ID' => 'mnh20mgnumberofstrips1Strip10tablets1',
                'Value' => '',
            'Label' => '20mg(number of strips, 1 Strip = 10 tablets)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'field_setID' => 'mnh240mg_5ml',
                'field_ID' => 'mnh240mg5ml1',
                'Value' => '',
                'Label' => '240mg/5ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'field_setID' => 'mnh300mg_lmlin2mlamp.',
                'field_ID' => 'mnh300mglmlin2mlamp.1',
                'Value' => '',
                'Label' => '300mg/lml in 2ml amp.',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'field_setID' => 'mnh4sachetsSOOmlofORS&10tabletsofZinc',
                'field_ID' => 'mnh4sachetsSOOml_of ORS_10 tablets of Zinc1',
                'Value' => '',
            'Label' => '4 sachets (5OOml) of ORS & 10 tablets of Zinc',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'field_setID' => 'mnh4sachetsSOOmlofORS&10tabletsofZinc',
                'field_ID' => 'mnh4sachetsSOOml_ofORS_10tabletsofZinc1',
                'Value' => '',
            'Label' => '4 sachets (5OOml) of ORS & 10 tablets of Zinc',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'field_setID' => 'mnh50_000IU',
                'field_ID' => 'mnh50000IU1',
                'Value' => '',
                'Label' => '50,000 IU',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'field_setID' => 'mnhactive_CHEWS',
                'field_ID' => 'mnhactive_CHEWS1',
                'Value' => '',
                'Label' => 'Total number of active CHEWS',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'field_setID' => 'mnhactive_CHEWS_trained_in_ICCM',
                'field_ID' => 'mnhactive_CHEWS_trained_in_ICCM1',
                'Value' => '',
                'Label' => 'Total number  of active  CHEWs trained on ICCM',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'field_setID' => 'mnhactive_CHVs',
                'field_ID' => 'mnhactive_CHVs1',
                'Value' => '',
                'Label' => 'Total number of active CHVs',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'field_setID' => 'mnhactive_CHVs_trained_on_ICCM',
                'field_ID' => 'mnhactive_CHVs_trained_on_ICCM1',
                'Value' => '',
                'Label' => 'Total number of active CHVs trained on ICCM',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'field_setID' => 'mnhapr',
                'field_ID' => 'mnhapr',
                'Value' => '',
                'Label' => 'Apr',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'field_setID' => 'mnharedrugsavailavle',
                'field_ID' => 'mnharedrugsavailavle1',
                'Value' => '',
            'Label' => '(A) Are there drugs available in the ORT Corner?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'field_setID' => 'mnhArtemether+LeumefantrineAL',
                'field_ID' => 'mnhArtemether+LeumefantrineAL1',
                'Value' => '',
            'Label' => 'Artemether + Leumefantrine (AL)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'field_setID' => 'mnhArtesunateInjection',
                'field_ID' => 'mnhArtesunateInjection1',
                'Value' => '',
                'Label' => 'Artesunate Injection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'field_setID' => 'mnhaspect',
                'field_ID' => 'mnhaspect1',
                'Value' => '',
                'Label' => 'Aspect',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'field_setID' => 'mnhaug',
                'field_ID' => 'mnhaug1',
                'Value' => '',
                'Label' => 'Aug',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'field_setID' => 'mnhAvailability',
                'field_ID' => 'mnhAvailability1',
                'Value' => '',
            'Label' => 'Availability (One Section Allowed)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'field_setID' => 'mnhAvailable_Not_Available',
                'field_ID' => 'mnhAvailable_Not_Available1',
                'Value' => '1',
                'Label' => 'Available',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'field_setID' => 'mnhAvailable_Not_Available',
                'field_ID' => 'mnhAvailable_Not_Available2',
                'Value' => '2',
                'Label' => 'Not Available',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'field_setID' => 'mnhblank',
                'field_ID' => 'mnhblank1',
                'Value' => '',
                'Label' => '',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'field_setID' => 'mnhcases_treated_with_zinc_and_ors',
                'field_ID' => 'mnhcases_treated_with_zinc_and_ors1',
                'Value' => '',
                'Label' => 'total number of cases treated with zinc and ORS Co-pack under Community Case Management of diarrhoea',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'field_setID' => 'mnhcentral_county_government',
                'field_ID' => 'mnhcentralcounty_government1',
                'Value' => '1',
                'Label' => 'Central Government/County Government',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'field_setID' => 'mnhcentral_county_government',
                'field_ID' => 'mnhcentralcounty_government2',
                'Value' => '2',
                'Label' => 'Privately Supplied',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'field_setID' => 'mnhcentral_county_government',
                'field_ID' => 'mnhcentralcounty_government3',
                'Value' => '3',
                'Label' => 'Own Initiative',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'field_setID' => 'mnhcentral_county_government',
                'field_ID' => 'mnhcentralcounty_government4',
                'Value' => '4',
                'Label' => 'Partner',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'field_setID' => 'mnhcentral_county_government',
                'field_ID' => 'mnhcentralcounty_government5',
                'Value' => '5',
                'Label' => 'Not Applicable',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'field_setID' => 'mnhclinical_satff_single_label',
                'field_ID' => 'mnhclinical_satff_single_label1',
                'Value' => '',
                'Label' => 'Clinical Staff',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'field_setID' => 'mnhcmb_main_src',
                'field_ID' => 'mnhcmb_main_src1',
                'Value' => '1',
                'Label' => '1.River/Stream',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'field_setID' => 'mnhcmb_main_src',
                'field_ID' => 'mnhcmb_main_src2',
                'Value' => '2',
                'Label' => '2.Bore-hole',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'field_setID' => 'mnhcmb_main_src',
                'field_ID' => 'mnhcmb_main_src3',
                'Value' => '3',
                'Label' => '3.Piped',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'field_setID' => 'mnhcmb_main_src',
                'field_ID' => 'mnhcmb_main_src4',
                'Value' => '4',
                'Label' => '4.Water Truck',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'field_setID' => 'mnhcmb_main_src',
                'field_ID' => 'mnhcmb_main_src5',
                'Value' => '5',
                'Label' => '5.Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'field_setID' => 'mnhcmb_main_src',
                'field_ID' => 'mnhcmb_main_src6',
                'Value' => '-51',
                'Label' => 'No information provided',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'field_setID' => 'mnhcmb_main_src_elec',
                'field_ID' => 'mnhcmb_main_src_elec1',
                'Value' => '1',
                'Label' => '1.National Grid',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'field_setID' => 'mnhcmb_main_src_elec',
                'field_ID' => 'mnhcmb_main_src_elec2',
                'Value' => '2',
                'Label' => '2.Generator',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'field_setID' => 'mnhcmb_main_src_elec',
                'field_ID' => 'mnhcmb_main_src_elec3',
                'Value' => '3',
                'Label' => '3.Solar',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'field_setID' => 'mnhcmb_main_src_elec',
                'field_ID' => 'mnhcmb_main_src_elec4',
                'Value' => '4',
                'Label' => '4.Bio-Gas',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'field_setID' => 'mnhcmb_main_src_elec',
                'field_ID' => 'mnhcmb_main_src_elec5',
                'Value' => '5',
                'Label' => '5.Others',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'field_setID' => 'mnhcmb_main_supplier',
                'field_ID' => 'mnhcmb_main_supplier1',
                'Value' => '1',
                'Label' => '1.Central Government/County Government',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'field_setID' => 'mnhcmb_main_supplier',
                'field_ID' => 'mnhcmb_main_supplier2',
                'Value' => '2',
                'Label' => '2.Privately Supplied',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'field_setID' => 'mnhcmb_main_supplier',
                'field_ID' => 'mnhcmb_main_supplier3',
                'Value' => '3',
                'Label' => '3.Own Initiative',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'field_setID' => 'mnhcmb_main_supplier',
                'field_ID' => 'mnhcmb_main_supplier4',
                'Value' => '4',
                'Label' => '4.Partner',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'field_setID' => 'mnhcmb_main_supplier',
                'field_ID' => 'mnhcmb_main_supplier5',
                'Value' => '5',
                'Label' => '5.Not Applicable',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'field_setID' => 'mnhcmb_prov_waste',
                'field_ID' => 'mnhcmb_prov_waste1',
                'Value' => '1',
                'Label' => '1.Waste pit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'field_setID' => 'mnhcmb_prov_waste',
                'field_ID' => 'mnhcmb_prov_waste2',
                'Value' => '2',
                'Label' => '2.Placenta pit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'field_setID' => 'mnhcmb_prov_waste',
                'field_ID' => 'mnhcmb_prov_waste3',
                'Value' => '3',
                'Label' => '3.Incinerator',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'field_setID' => 'mnhcmb_prov_waste',
                'field_ID' => 'mnhcmb_prov_waste4',
                'Value' => '4',
                'Label' => '4.Burning',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'field_setID' => 'mnhcmb_prov_waste',
                'field_ID' => 'mnhcmb_prov_waste5',
                'Value' => '5',
                'Label' => '5.Others',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'field_setID' => 'mnhcmb_prov_waste',
                'field_ID' => 'mnhcmb_prov_waste6',
                'Value' => '-51',
                'Label' => 'No information provided',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'field_setID' => 'mnhcmb_unavail_dur',
                'field_ID' => 'mnhcmb_unavail_dur1',
                'Value' => '1',
                'Label' => '1 week',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'field_setID' => 'mnhcmb_unavail_dur',
                'field_ID' => 'mnhcmb_unavail_dur2',
                'Value' => '2',
                'Label' => '2 weeks',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'field_setID' => 'mnhcmb_unavail_dur',
                'field_ID' => 'mnhcmb_unavail_dur3',
                'Value' => '3',
                'Label' => '1 month',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'field_setID' => 'mnhcmb_unavail_dur',
                'field_ID' => 'mnhcmb_unavail_dur4',
                'Value' => '4',
                'Label' => 'More than 1 month',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'field_setID' => 'mnhcmb_unavail_rsn',
                'field_ID' => 'mnhcmb_unavail_rsn1',
                'Value' => '1',
                'Label' => '1.Not ordered',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'field_setID' => 'mnhcmb_unavail_rsn',
                'field_ID' => 'mnhcmb_unavail_rsn2',
                'Value' => '2',
                'Label' => '2.Ordered but not yet received',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'field_setID' => 'mnhcmb_unavail_rsn',
                'field_ID' => 'mnhcmb_unavail_rsn3',
                'Value' => '3',
                'Label' => '3.Expired',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'field_setID' => 'mnhcombo_prim_challenge',
                'field_ID' => 'mnhcombo_prim_challenge1',
                'Value' => '1',
                'Label' => '1.Inadequate Drugs',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'field_setID' => 'mnhcombo_prim_challenge',
                'field_ID' => 'mnhcombo_prim_challenge2',
                'Value' => '2',
                'Label' => '2.Inadequate Skills',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'field_setID' => 'mnhcombo_prim_challenge',
                'field_ID' => 'mnhcombo_prim_challenge3',
                'Value' => '3',
                'Label' => '3.Inadequate Supplies',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'field_setID' => 'mnhcombo_prim_challenge',
                'field_ID' => 'mnhcombo_prim_challenge4',
                'Value' => '4',
                'Label' => '4.No Job Aids',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'field_setID' => 'mnhcombo_prim_challenge',
                'field_ID' => 'mnhcombo_prim_challenge5',
                'Value' => '5',
                'Label' => '5.Inadequate Equipment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'field_setID' => 'mnhcombo_prim_challenge',
                'field_ID' => 'mnhcombo_prim_challenge6',
                'Value' => '6',
                'Label' => '6.Case Never Present',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'field_setID' => 'mnhcombo_prim_challenge',
                'field_ID' => 'mnhcombo_prim_challenge7',
                'Value' => '7',
                'Label' => '7.No Challenged Experienced',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'field_setID' => 'mnhcommodity_name',
                'field_ID' => 'mnhcommodity_name1',
                'Value' => '',
                'Label' => 'Commodity Name',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'field_setID' => 'mnhcommodity_unit',
                'field_ID' => 'mnhcommodity_unit1',
                'Value' => '',
                'Label' => 'Commodity Unit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'field_setID' => 'mnhcommunity_strategy',
                'field_ID' => 'mnhcommunity_strategy1',
                'Value' => '',
                'Label' => 'Community Strategy',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'field_setID' => 'mnhcommunity_units_trained_in_ICCM',
                'field_ID' => 'mnhcommunity_units_trained_in_ICCM1',
                'Value' => '',
                'Label' => 'Total number of community units trained in ICCM',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'field_setID' => 'mnhconduct_deliveries_label',
                'field_ID' => 'mnhconduct_deliveries_label1',
                'Value' => '',
                'Label' => 'DOES THIS FACILITY CONDUCT DELIVERIES',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'field_setID' => 'mnhdec',
                'field_ID' => 'mnhdec1',
                'Value' => '',
                'Label' => 'Dec',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'field_setID' => 'mnhdeliveries_inadequacies_multiple',
                'field_ID' => 'mnhdeliveries_inadequacies_multiple1',
                'Value' => '1',
                'Label' => 'Inadequate skill',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'field_setID' => 'mnhdeliveries_inadequacies_multiple',
                'field_ID' => 'mnhdeliveries_inadequacies_multiple2',
                'Value' => '2',
                'Label' => 'Inadequate staff',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'field_setID' => 'mnhdeliveries_inadequacies_multiple',
                'field_ID' => 'mnhdeliveries_inadequacies_multiple3',
                'Value' => '3',
                'Label' => 'Inadequate infrastructure',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'field_setID' => 'mnhdeliveries_inadequacies_multiple',
                'field_ID' => 'mnhdeliveries_inadequacies_multiple4',
                'Value' => '4',
                'Label' => 'Inadequate Equipment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'field_setID' => 'mnhdeliveries_inadequacies_multiple',
                'field_ID' => 'mnhdeliveries_inadequacies_multiple5',
                'Value' => '5',
                'Label' => 'Inadequate Commodities and Suppliers',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'field_setID' => 'mnhdeliveries_inadequacies_multiple',
                'field_ID' => 'mnhdeliveries_inadequacies_multiple6',
                'Value' => '-1',
            'Label' => 'Others (Please Specify)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'field_setID' => 'mnhdesignatedlocationfororal',
                'field_ID' => 'mnhdesignatedlocationfororal1',
                'Value' => '',
                'Label' => 'Does this Facility have a designed location for oral rehydration?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'field_setID' => 'mnhdesignated_location_for_ORT',
                'field_ID' => 'mnhdesignated_location_for_ORT1',
                'Value' => '',
                'Label' => 'Where is the designated location of the ORT Corner?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'field_setID' => 'mnhdiarrhoea_management',
                'field_ID' => 'mnhdiarrhoea_management1',
                'Value' => '',
                'Label' => 'Diarrhoea Treatment in Under 5 Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'field_setID' => 'mnhDisposableSyringes',
                'field_ID' => 'mnhDisposableSyringes1',
                'Value' => '',
                'Label' => 'Disposable Syringes',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'field_setID' => 'mnhdoctor_label',
                'field_ID' => 'mnhdoctor_label_1',
                'Value' => '',
                'Label' => 'Doctor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'field_setID' => 'mnhdvd_player',
                'field_ID' => 'mnhdvd_player1',
                'Value' => '',
                'Label' => 'DVD Player',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'field_setID' => 'mnheid',
                'field_ID' => 'mnheid1',
                'Value' => '',
            'Label' => 'Early Infant Diagnosis (EID) register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'field_setID' => 'mnhelectricity',
                'field_ID' => 'mnhelectricity1',
                'Value' => '',
                'Label' => 'Electricity',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'field_setID' => 'mnhfacility_design_location',
                'field_ID' => 'mnhfacility_design_location1',
                'Value' => '',
                'Label' => 'does this facility have a designed location for oral rehydration?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'field_setID' => 'mnhfeb',
                'field_ID' => 'mnhfeb',
                'Value' => '',
                'Label' => 'Feb',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'field_setID' => 'mnhFever',
                'field_ID' => 'mnhFever1',
                'Value' => '',
                'Label' => 'Fever',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'field_setID' => 'mnhfullspan_no_diarrhoea',
                'field_ID' => 'mnhfullspan_no_diarrhoea1',
                'Value' => '',
                'Label' => 'Non Diarrhoea cases that received ORS + Zinc',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'field_setID' => 'mnhgen_opd_paed_opd_mch',
                'field_ID' => 'mnhgen_opd_paed_opd_mch1',
                'Value' => '1',
                'Label' => 'General OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'field_setID' => 'mnhgen_opd_paed_opd_mch',
                'field_ID' => 'mnhgen_opd_paed_opd_mch2',
                'Value' => '2',
                'Label' => 'Paediatric OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'field_setID' => 'mnhgen_opd_paed_opd_mch',
                'field_ID' => 'mnhgen_opd_paed_opd_mch3',
                'Value' => '3',
                'Label' => 'MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'field_setID' => 'mnhgen_opd_paed_opd_mch',
                'field_ID' => 'mnhgen_opd_paed_opd_mch4',
                'Value' => '',
                'Label' => 'Others Specify',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'field_setID' => 'mnhiccm_tool',
                'field_ID' => 'mnhiccm_tool1',
                'Value' => '',
                'Label' => 'ICCM Tools
ICCM Tools',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'field_setID' => 'mnhimci_case',
                'field_ID' => 'mnhimci_case1',
                'Value' => '',
                'Label' => 'IMCI case recording form',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'field_setID' => 'mnhInjectionQuinine',
                'field_ID' => 'mnhInjectionQuinine1',
                'Value' => '',
                'Label' => 'Injection Quinine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'field_setID' => 'mnhInsulinSyringes',
                'field_ID' => 'mnhInsulinSyringes1',
                'Value' => '',
                'Label' => 'Insulin Syringes',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'field_setID' => 'mnhIVStarterKit',
                'field_ID' => 'mnhIVStarterKit1',
                'Value' => '',
                'Label' => 'IV Starter Kit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'field_setID' => 'mnhjan',
                'field_ID' => 'mnhjan',
                'Value' => '',
                'Label' => 'Jan',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'field_setID' => 'mnhjul',
                'field_ID' => 'mnhjul1',
                'Value' => '',
                'Label' => 'Jul',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'field_setID' => 'mnhjun',
                'field_ID' => 'mnhjun1',
                'Value' => '',
                'Label' => 'Jun',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'field_setID' => 'mnhkeyforsec3',
                'field_ID' => 'mnhkeyforsec31',
                'Value' => '',
            'Label' => 'When Commodity was not available what happend?<br>1 =  Patient purchase of the commodity privately,   2 = Facility purchase of the commodity privately,   3 = Facility received the commodity from another facility,   4 = The procedure was not conducted (case refered), 5 = The procedure was conducted without the commodity',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'field_setID' => 'mnhlabelless_number_box',
                'field_ID' => 'mnhlabelless_number_box1',
                'Value' => '',
                'Label' => '',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'field_setID' => 'mnhlabelless_text_box',
                'field_ID' => 'mnhlabelless_text_box1',
                'Value' => '',
                'Label' => '',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'field_setID' => 'mnhlabels_signal_func',
                'field_ID' => 'mnhlabels_signal_func1',
                'Value' => '',
                'Label' => 'SIGNAL FUNCTION',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'field_setID' => 'mnhlabels_was_conducted',
                'field_ID' => 'mnhlabels_was_conducted1',
                'Value' => '',
                'Label' => 'Was Conducted',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'field_setID' => 'mnhlabel_avail_elec',
                'field_ID' => 'mnhlabel_avail_elec1',
                'Value' => '',
                'Label' => 'INDICATE THE AVAILABILITY AND STORAGE, SUPPLIER AND SOURCE OF THE FOLLOWING',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'field_setID' => 'mnhlabel_avail_in_quant',
                'field_ID' => 'mnhlabel_avail_in_quant1',
                'Value' => '',
            'Label' => 'Availability Quantities (In Numbers)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'field_setID' => 'mnhlabel_commod',
                'field_ID' => 'mnhlabel_commod1',
                'Value' => '',
                'Label' => 'Commodities',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'field_setID' => 'mnhlabel_commod_av',
                'field_ID' => 'mnhlabel_commod_av1',
                'Value' => '',
                'Label' => 'INDICATE THE AVAILABILITY, MAIN REASON FOR UNAVILABILITY, DURATION OF UNAVAILABILITY & WHAT HAPPENED WHEN THE COMMODITY WAS NOT AVAILABLE',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'field_setID' => 'mnhlabel_comm_strategy',
                'field_ID' => 'mnhlabel_comm_strategy1',
                'Value' => '',
                'Label' => 'COMMUNITY STRATEGY',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'field_setID' => 'mnhlabel_deliv_kit',
                'field_ID' => 'mnhlabel_deliv_kit1',
                'Value' => '',
                'Label' => 'Delivery Kit Components',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'field_setID' => 'mnhlabel_equip_name',
                'field_ID' => 'mnhlabel_equip_name1',
                'Value' => '',
                'Label' => 'Equipment Name',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'field_setID' => 'mnhlabel_func',
                'field_ID' => 'mnhlabel_func1',
                'Value' => '',
                'Label' => 'Functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'field_setID' => 'mnhlabel_guidelines_av',
                'field_ID' => 'mnhlabel_guidelines_av1',
                'Value' => '',
                'Label' => 'GUIDELINES AVAILABILITY',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'field_setID' => 'mnhlabel_Health_Facility_Management',
                'field_ID' => 'mnhlabel_Health_Facility_Management1',
                'Value' => '',
                'Label' => 'Health Facility Management',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'field_setID' => 'mnhlabel_indic_del_conducted',
                'field_ID' => 'mnhlabel_indic_del_conducted1',
                'Value' => '',
            'Label' => 'INDICATE THE NUMBER OF DELIVERIES CONDUCTED IN THE FACILITY IN THE PREVIOUS YEAR(JAN-DEC)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'field_setID' => 'mnhlabel_jobaids_av',
                'field_ID' => 'mnhlabel_jobaids_av1',
                'Value' => '',
                'Label' => 'JOB AIDS AVAILABILITY',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'field_setID' => 'mnhlabel_kangaroo_mothercare',
                'field_ID' => 'mnhlabel_kangaroo_mothercare1',
                'Value' => '',
            'Label' => 'PROVISION OF Kangaroo Mothercare (KMC)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'field_setID' => 'mnhlabel_loc_resrcs',
                'field_ID' => 'mnhlabel_loc_resrcs1',
                'Value' => '',
                'Label' => 'INDICATE THE AVAILABILITY AND LOCATION OF THE FOLLOWING RESOURCES',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'field_setID' => 'mnhlabel_main_rsn_unav',
                'field_ID' => 'mnhlabel_main_rsn_unav1',
                'Value' => '',
                'Label' => 'INDICATE THE AVAILABILITY AND MAIN REASON FOR UNAVAILABILITY FOR THE FOLLOWING KITS/SETS',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'field_setID' => 'mnhlabel_main_source',
                'field_ID' => 'mnhlabel_main_source1',
                'Value' => '',
                'Label' => 'Main Source',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'field_setID' => 'mnhlabel_main_supplier',
                'field_ID' => 'mnhlabel_main_supplier1',
                'Value' => '',
                'Label' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'field_setID' => 'mnhlabel_non_func',
                'field_ID' => 'mnhlabel_non_func1',
                'Value' => '',
                'Label' => 'Non Functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'field_setID' => 'mnhlabel_preparedness_for_delivery',
                'field_ID' => 'mnhlabel_preparedness_for_delivery1',
                'Value' => '',
                'Label' => 'Preparedness for Delivery',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'field_setID' => 'mnhlabel_prep_criteria',
                'field_ID' => 'mnhlabel_prep_criteria1',
                'Value' => '',
            'Label' => 'Criteria: Adult Resuscitation Kit Complete, Working and Clean ; New-born Resuscitation Kit Complete, working and clean; Recieving Place ; Adequate Light ; No Draft (cold air); Clean (delivery beds, recovery beds and all surfaces); Waste Disposal System; Sterilization color-coded; Sharp Container; Privacy, Delivery Kit Complete',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'field_setID' => 'mnhlabel_primary_challenge',
                'field_ID' => 'mnhlabel_primary_challenge1',
                'Value' => '',
                'Label' => 'INDICATE PRIMARY CHALLENGE',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'field_setID' => 'mnhlabel_PROVISION_OF_SERVICES',
                'field_ID' => 'mnhlabel_PROVISION_OF_SERVICES1',
                'Value' => '',
                'Label' => 'PROVISION OF SERVICES',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'field_setID' => 'mnhlabel_prov_basic_obsteric',
                'field_ID' => 'mnhlabel_prov_basic_obsteric1',
                'Value' => '',
            'Label' => 'PROVISION OF BASIC EMERGENCY OBSTETRIC NEONATAL CARE(BEmONC) SIGNAL FUNCTIONS',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'field_setID' => 'mnhlabel_prov_comp_obsteric',
                'field_ID' => 'mnhlabel_prov_comp_obsteric1',
                'Value' => '',
            'Label' => 'Provision of Comprehensive Emergency Obstetric and New-born Care (CEmONC) Services',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'field_setID' => 'mnhlabel_prov_HIV',
                'field_ID' => 'mnhlabel_prov_HIV1',
                'Value' => '',
                'Label' => 'Provision Of HIV Testing and Counselling',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'field_setID' => 'mnhlabel_prov_new_born_care',
                'field_ID' => 'mnhlabel_prov_new_born_care1',
                'Value' => '',
                'Label' => 'Provision Of New-born Care',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'field_setID' => 'mnhlabel_prov_of_beds',
                'field_ID' => 'mnhlabel_prov_of_beds1',
                'Value' => '',
                'Label' => 'PROVISION OF BEDS',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'field_setID' => 'mnhlabel_prov_of_nurses',
                'field_ID' => 'mnhlabel_prov_of_nurses1',
                'Value' => '',
                'Label' => 'PROVISION OF NURSES',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'field_setID' => 'mnhlabel_prov_waste',
                'field_ID' => 'mnhlabel_prov_waste1',
                'Value' => '',
                'Label' => 'PROVISION  FOR WASTE DISPOSAL',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'field_setID' => 'mnhlabel_strg_water',
                'field_ID' => 'mnhlabel_strg_water1',
                'Value' => '',
                'Label' => 'INDICATE THE STORAGE AND ACCESS TO WATER',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'field_setID' => 'mnhlabel_testing_sup',
                'field_ID' => 'mnhlabel_testing_sup1',
                'Value' => '',
                'Label' => 'Testing Supplies',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'field_setID' => 'mnhlabel_tools_av',
                'field_ID' => 'mnhlabel_tools_av1',
                'Value' => '',
                'Label' => 'TOOLS AVAILABILITY',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'field_setID' => 'mnhlabel_unavail_dur',
                'field_ID' => 'mnhlabel_unavail_dur1',
                'Value' => '',
                'Label' => 'Duration of Unavailability',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'field_setID' => 'mnhlabel_unavail_rsn',
                'field_ID' => 'mnhlabel_unavail_rsn1',
                'Value' => '',
                'Label' => 'Main Reason for Unavailability',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'field_setID' => 'mnhlabel_unav_main_reason',
                'field_ID' => 'mnhlabel_unav_main_reason1',
                'Value' => '',
                'Label' => 'Main Reason for Unavailability',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'field_setID' => 'mnhlabel_unit_commod',
                'field_ID' => 'mnhlabel_unit_commod1',
                'Value' => '',
                'Label' => 'Unit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'field_setID' => 'mnhlabel_water_strg_pt',
                'field_ID' => 'mnhlabel_water_strg_pt1',
                'Value' => '',
                'Label' => 'Specify Water Storage Point',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'field_setID' => 'mnhlabel_when_unavail',
                'field_ID' => 'mnhlabel_when_unavail1',
                'Value' => '',
                'Label' => 'When the commodity was not available what 
happened? (Multiple Selections Allowed)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'field_setID' => 'mnhLocation_of_availability',
                'field_ID' => 'mnhLocation_of_availability1',
                'Value' => '',
            'Label' => 'Location of availability (Multiple Sections Allowed)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'field_setID' => 'mnhlocation_of_availability_radios',
                'field_ID' => 'mnhlocation_of_availability_radios1',
                'Value' => '1',
                'Label' => '1.OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'field_setID' => 'mnhlocation_of_availability_radios',
                'field_ID' => 'mnhlocation_of_availability_radios2',
                'Value' => '2',
                'Label' => '2.MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'field_setID' => 'mnhlocation_of_availability_radios',
                'field_ID' => 'mnhlocation_of_availability_radios3',
                'Value' => '3',
                'Label' => '3.US Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'field_setID' => 'mnhlocation_of_availability_radios',
                'field_ID' => 'mnhlocation_of_availability_radios4',
                'Value' => '4',
                'Label' => '4.Ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'field_setID' => 'mnhlocation_of_availability_radios',
                'field_ID' => 'mnhlocation_of_availability_radios5',
                'Value' => '-1',
                'Label' => '5.Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'field_setID' => 'mnhLowOsmolarityOralRehydrationSaltsORS',
                'field_ID' => 'mnhLowOsmolarityOral_Rehydration Salts ORS1',
                'Value' => '',
            'Label' => 'Low Osmolarity Oral Rehydration Salts (ORS)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'field_setID' => 'mnhLowOsmolarityOralRehydrationSaltsORS',
                'field_ID' => 'mnhLowOsmolarityOral_RehydrationSaltsORS1',
                'Value' => '',
            'Label' => 'Low Osmolarity Oral Rehydration Salts (ORS)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'field_setID' => 'mnhl_clincl_staff',
                'field_ID' => 'mnhl_clincl_staff1',
                'Value' => '',
                'Label' => 'Cinical Staff',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'field_setID' => 'mnhl_trnd_antenatal',
                'field_ID' => 'mnhl_trnd_antenatal1',
                'Value' => '',
                'Label' => '# of Staff Trained in Focused Antenatal Care',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'field_setID' => 'mnhl_trnd_basic_obst',
                'field_ID' => 'mnhl_trnd_basic_obst1',
                'Value' => '',
            'Label' => '# of Staff Trained in Basic Emergency Obstetric Neonatal Care (BEmONC)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'field_setID' => 'mnhl_trnd_ess_newborn',
                'field_ID' => 'mnhl_trnd_ess_newborn1',
                'Value' => '',
                'Label' => '# of Staff Trained in Essential Newborn Care',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'field_setID' => 'mnhl_trnd_perinatal',
                'field_ID' => 'mnhl_trnd_perinatal1',
                'Value' => '',
            'Label' => 'Maternal and Perinatal death Surveillance and review (MPDSR)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'field_setID' => 'mnhl_trnd_post_natal',
                'field_ID' => 'mnhl_trnd_post_natal1',
                'Value' => '',
                'Label' => '# of Staff Trained in Post Natal Care',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'field_setID' => 'mnhl_trnd_pp',
                'field_ID' => 'mnhl_trnd_pp1',
                'Value' => '',
                'Label' => '# of Staff Trained in PP IUCD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'field_setID' => 'mnhl_trnd_std_recog',
                'field_ID' => 'mnhl_trnd_std_recog1',
                'Value' => '',
            'Label' => '# of Staff Trained in Standards - Based Management and Recognition(SBM-R)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'field_setID' => 'mnhl_trnd_uterine',
                'field_ID' => 'mnhl_trnd_uterine1',
                'Value' => '',
                'Label' => '# of Staff Trained in Uterine Balloon Tamponade',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'field_setID' => 'mnhl_ttl_av_dty',
                'field_ID' => 'mnhl_ttl_av_dty1',
                'Value' => '',
                'Label' => 'Total available on duty',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'field_setID' => 'mnhl_ttl_in_facil',
                'field_ID' => 'mnhl_ttl_in_facil1',
                'Value' => '',
                'Label' => 'Total in facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'field_setID' => 'mnhl_ttl_trnd_still_work',
                'field_ID' => 'mnhl_ttl_trnd_still_work1',
                'Value' => '',
                'Label' => 'How Many Of The Total Staff Members Trained In BEmONC are still Working in the Maternity/ MCH / Gynaecological Ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'field_setID' => 'mnhmainsupplier',
                'field_ID' => 'mnhmainsupplier1',
                'Value' => '',
                'Label' => 'Who is the main supplier of the commodities BELOW?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'field_setID' => 'mnhmainsupplier_resources',
                'field_ID' => 'mnhmainsupplier_resources1',
                'Value' => '',
                'Label' => 'Who is the main supplier of the resources BELOW?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'field_setID' => 'mnhmain_reason_for_not_conducting',
                'field_ID' => 'mnhmain_reason_for_not_conducting1',
                'Value' => '',
            'Label' => 'IF NO, WHAT ARE THE MAIN REASONS FOR NOT CONDUCTING DELIVERIES(multiple selections allowed)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'field_setID' => 'mnhmain_reason_for_unavailability',
                'field_ID' => 'mnhmain_reason_for_unavailability1',
                'Value' => '',
                'Label' => 'Main Reason for Unavailability',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'field_setID' => 'mnhmar',
                'field_ID' => 'mnhmar1',
                'Value' => '',
                'Label' => 'Mar',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'field_setID' => 'mnhmay',
                'field_ID' => 'mnhmay1',
                'Value' => '',
                'Label' => 'May',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'field_setID' => 'mnhmother_child_booklet',
                'field_ID' => 'mnhmcb1',
                'Value' => '',
                'Label' => 'Mother Child Booklet',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'field_setID' => 'mnhMCH_US_OPD_Ward',
                'field_ID' => 'mnhMCH_US_OPD_Ward1',
                'Value' => '1',
                'Label' => 'MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'field_setID' => 'mnhMCH_US_OPD_Ward',
                'field_ID' => 'mnhMCH_US_OPD_Ward2',
                'Value' => '2',
                'Label' => 'US Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'field_setID' => 'mnhMCH_US_OPD_Ward',
                'field_ID' => 'mnhMCH_US_OPD_Ward3',
                'Value' => '3',
                'Label' => 'OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'field_setID' => 'mnhMCH_US_OPD_Ward',
                'field_ID' => 'mnhMCH_US_OPD_Ward4',
                'Value' => '4',
                'Label' => 'Ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'field_setID' => 'mnhMCH_US_OPD_Ward',
                'field_ID' => 'mnhMCH_US_OPD_Ward5',
                'Value' => '-1',
            'Label' => 'Other(Specify)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'field_setID' => 'mnhmulcmb_main_src',
                'field_ID' => 'mnhmulcmb_main_src1',
                'Value' => '1',
                'Label' => 'River/Stream',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'field_setID' => 'mnhmulcmb_main_src',
                'field_ID' => 'mnhmulcmb_main_src2',
                'Value' => '2',
                'Label' => 'Borehole',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'field_setID' => 'mnhmulcmb_main_src',
                'field_ID' => 'mnhmulcmb_main_src3',
                'Value' => '3',
                'Label' => 'Piped',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'field_setID' => 'mnhmulcmb_main_src',
                'field_ID' => 'mnhmulcmb_main_src4',
                'Value' => '4',
                'Label' => 'Water truck',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'field_setID' => 'mnhmulcmb_main_src',
                'field_ID' => 'mnhmulcmb_main_src5',
                'Value' => '-1',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'field_setID' => 'mnhmulcmb_main_src',
                'field_ID' => 'mnhmulcmb_main_src6',
                'Value' => '-51',
                'Label' => 'No information provided',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'field_setID' => 'mnhmultiple_loc_of_rsrc',
                'field_ID' => 'mnhmultiple_loc_of_rsrc1',
                'Value' => '1',
                'Label' => '1.OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'field_setID' => 'mnhmultiple_loc_of_rsrc',
                'field_ID' => 'mnhmultiple_loc_of_rsrc2',
                'Value' => '2',
                'Label' => '2.MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'field_setID' => 'mnhmultiple_loc_of_rsrc',
                'field_ID' => 'mnhmultiple_loc_of_rsrc3',
                'Value' => '3',
                'Label' => '3.U5 Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'field_setID' => 'mnhmultiple_loc_of_rsrc',
                'field_ID' => 'mnhmultiple_loc_of_rsrc4',
                'Value' => '4',
                'Label' => '4.Maternity',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'field_setID' => 'mnhmultiple_loc_of_rsrc',
                'field_ID' => 'mnhmultiple_loc_of_rsrc5',
                'Value' => '-1',
                'Label' => '5.Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'field_setID' => 'mnhmultiple_loc_of_rsrc',
                'field_ID' => 'mnhmultiple_loc_of_rsrc6',
                'Value' => '-51',
                'Label' => 'No information provided',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'field_setID' => 'mnhmultiple_when_unavail',
                'field_ID' => 'mnhmultiple_when_unavail1',
                'Value' => '1',
            'Label' => '1.(refer to key)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'field_setID' => 'mnhmultiple_when_unavail',
                'field_ID' => 'mnhmultiple_when_unavail2',
                'Value' => '2',
            'Label' => '2.(refer to key)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'field_setID' => 'mnhmultiple_when_unavail',
                'field_ID' => 'mnhmultiple_when_unavail3',
                'Value' => '3',
            'Label' => '3.(refer to key)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'field_setID' => 'mnhmultiple_when_unavail',
                'field_ID' => 'mnhmultiple_when_unavail4',
                'Value' => '4',
            'Label' => '4.(refer to key)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'field_setID' => 'mnhmultiple_when_unavail',
                'field_ID' => 'mnhmultiple_when_unavail5',
                'Value' => '5',
            'Label' => '5.(refer to key)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'field_setID' => 'mnhmultiple_when_unavail',
                'field_ID' => 'mnhmultiple_when_unavail6',
                'Value' => '-51',
                'Label' => 'No information provided',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'field_setID' => 'mnhNebulizer',
                'field_ID' => 'mnhNebulizer1',
                'Value' => '',
                'Label' => 'Nebulizer',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'field_setID' => 'mnhNGTube',
                'field_ID' => 'mnhNGTube1',
                'Value' => '',
                'Label' => 'NG Tube',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'field_setID' => 'mnhNon_Diarrhoea',
                'field_ID' => 'mnhNon_Diarrhoea1',
                'Value' => '',
                'Label' => 'Non Diarrhoea cases that received ORS + Zinc',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'field_setID' => 'mnhnov',
                'field_ID' => 'mnhnov1',
                'Value' => '',
                'Label' => 'Nov',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'field_setID' => 'mnhNo_Treatment',
                'field_ID' => 'mnhNo_Treatment1',
                'Value' => '',
            'Label' => 'No Treatment  (i.e No drugs prescribed)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'field_setID' => 'mnhnumbox_func',
                'field_ID' => 'mnhnumbox_func1',
                'Value' => '',
                'Label' => 'Functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'field_setID' => 'mnhnumbox_non_func',
                'field_ID' => 'mnhnumbox_non_func1',
                'Value' => '',
                'Label' => 'Non-functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'field_setID' => 'mnhnurse_label',
                'field_ID' => 'mnhnurse_label_1',
                'Value' => '',
                'Label' => 'Nurse',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'field_setID' => 'mnhnot_applicable',
                'field_ID' => 'mnhn_a1',
                'Value' => '5',
                'Label' => 'Not Applicable',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'field_setID' => 'mnhoct',
                'field_ID' => 'mnhoct1',
                'Value' => '',
                'Label' => 'Oct',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'field_setID' => 'mnhOPD_MCH_USClinic_Ward_Other',
                'field_ID' => 'mnhOPD_MCH_USClinic_Ward_Other1',
                'Value' => '1',
                'Label' => '1.OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'field_setID' => 'mnhOPD_MCH_USClinic_Ward_Other',
                'field_ID' => 'mnhOPD_MCH_USClinic_Ward_Other2',
                'Value' => '2',
                'Label' => '2.MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'field_setID' => 'mnhOPD_MCH_USClinic_Ward_Other',
                'field_ID' => 'mnhOPD_MCH_USClinic_Ward_Other3',
                'Value' => '3',
                'Label' => '3.US Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'field_setID' => 'mnhOPD_MCH_USClinic_Ward_Other',
                'field_ID' => 'mnhOPD_MCH_USClinic_Ward_Other4',
                'Value' => '4',
                'Label' => '4.Ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'field_setID' => 'mnhOPD_MCH_USClinic_Ward_Other',
                'field_ID' => 'mnhOPD_MCH_USClinic_Ward_Other5',
                'Value' => '-1',
                'Label' => '5.Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'field_setID' => 'mnhordered_notordered_expired',
                'field_ID' => 'mnhordered_notordered_expired1',
                'Value' => '1',
                'Label' => 'Not Ordered',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'field_setID' => 'mnhordered_notordered_expired',
                'field_ID' => 'mnhordered_notordered_expired2',
                'Value' => '2',
                'Label' => 'Ordered but not yet received',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'field_setID' => 'mnhordered_notordered_expired',
                'field_ID' => 'mnhordered_notordered_expired3',
                'Value' => '3',
                'Label' => 'Expired',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'field_setID' => 'mnhORS&ZincCo-pack',
                'field_ID' => 'mnhORSZinc_Co-pack1',
                'Value' => '',
                'Label' => 'ORS & Zinc Co-pack',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'field_setID' => 'mnhORS_Zinc',
                'field_ID' => 'mnhORS_Zinc1',
                'Value' => '',
                'Label' => 'Treatment  with ORS + Zinc
(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+ antibiotics, ORS+zinc+metronidazole + ORS+Zinc+Others )',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'field_setID' => 'mnhort',
                'field_ID' => 'mnhort1',
                'Value' => '',
            'Label' => 'ORT corner register (improvised)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'field_setID' => 'mnhORTCorner',
                'field_ID' => 'mnhORTCorner1',
                'Value' => '',
                'Label' => 'ORT Corner Functionality',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'field_setID' => 'mnhORTCorner2',
                'field_ID' => 'mnhORTCorner21',
                'Value' => '',
                'Label' => 'ORT Corner Functionality',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'field_setID' => 'mnhort_moh',
                'field_ID' => 'mnhortmoh1',
                'Value' => '',
            'Label' => 'ORT corner register (MOH)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'field_setID' => 'mnhortuptodate',
                'field_ID' => 'mnhortuptodate1',
                'Value' => '',
            'Label' => '(B) Is the ORT register up to date (Including zero-reporting)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'field_setID' => 'mnhother',
                'field_ID' => 'mnhother1',
                'Value' => '',
                'Label' => 'other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'field_setID' => 'mnhOthers',
                'field_ID' => 'mnhOthers1',
                'Value' => '',
                'Label' => 'Others',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'field_setID' => 'mnhown_initiative',
                'field_ID' => 'mnhown_ini1',
                'Value' => '3',
                'Label' => 'Own Initiative',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'field_setID' => 'mnhpartner',
                'field_ID' => 'mnhpartner1',
                'Value' => '4',
                'Label' => 'Partner',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'field_setID' => 'mnhPneumonia',
                'field_ID' => 'mnhPneumonia1',
                'Value' => '',
                'Label' => 'Pneumonia',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'field_setID' => 'mnhprivately_supplied',
                'field_ID' => 'mnhprivately_supplied1',
                'Value' => '',
                'Label' => 'Privately Supplied',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'field_setID' => 'mnhquestion_label',
                'field_ID' => 'mnhquestion_label1',
                'Value' => '',
                'Label' => 'Question',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'field_setID' => 'mnhquestion_where_sick_children_seen',
                'field_ID' => 'mnhquestion_where_sick_children_seen_1',
                'Value' => '',
                'Label' => 'Where are sick children seen?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'field_setID' => 'mnhq_10_commod_av',
                'field_ID' => 'mnhq_10_commod_av1',
                'Value' => '',
                'Label' => 'Ergometrine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'field_setID' => 'mnhq_10_equip_av',
                'field_ID' => 'mnhq_10_equip_av1',
                'Value' => '',
                'Label' => 'BP Machine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'field_setID' => 'mnhq_10_others',
                'field_ID' => 'mnhq_10_others1',
                'Value' => '',
                'Label' => 'Others',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'field_setID' => 'mnhq_10_sup_unav',
                'field_ID' => 'mnhq_10_sup_unav1',
                'Value' => '',
            'Label' => 'Baby Wrappers/Linen (At least 3)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'field_setID' => 'mnhq_10_tools_av',
                'field_ID' => 'mnhq_10_tools_av1',
                'Value' => '',
            'Label' => '(10) FP Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'field_setID' => 'mnhq_11_commod_av',
                'field_ID' => 'mnhq_11_commod_av1',
                'Value' => '',
                'Label' => 'Female condoms',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'field_setID' => 'mnhq_11_equip_av',
                'field_ID' => 'mnhq_11_equip_av1',
                'Value' => '',
                'Label' => 'Vacuum Pump/Extractor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'field_setID' => 'mnhq_11_totalort',
                'field_ID' => 'mnhq_11_totalort1',
                'Value' => '',
                'Label' => 'Total number of cases documented in ORT Corner Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'field_setID' => 'mnhq_12_commod_av',
                'field_ID' => 'mnhq_12_commod_av1',
                'Value' => '',
                'Label' => 'Gentamicin',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'field_setID' => 'mnhq_12_equip_av',
                'field_ID' => 'mnhq_12_equip_av1',
                'Value' => '',
                'Label' => 'Infant Weighing Scale',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'field_setID' => 'mnhq_13_commod_av',
                'field_ID' => 'mnhq_13_commod_av1',
                'Value' => '',
                'Label' => 'Hydralazine IV',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'field_setID' => 'mnhq_13_equip_av',
                'field_ID' => 'mnhq_13_equip_av1',
                'Value' => '',
            'Label' => 'Color-coded Bins (Black, Red, Yellow)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'field_setID' => 'mnhq_14_commod_av',
                'field_ID' => 'mnhq_14_commod_av1',
                'Value' => '',
                'Label' => 'lmplanon',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'field_setID' => 'mnhq_14_equip_av',
                'field_ID' => 'mnhq_14_equip_av1',
                'Value' => '',
                'Label' => 'Adult Weighing Scale',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'field_setID' => 'mnhq_15_commod_av',
                'field_ID' => 'mnhq_15_commod_av1',
                'Value' => '',
                'Label' => 'Injectable Hormonal Contraceptives',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'field_setID' => 'mnhq_15_equip_av',
                'field_ID' => 'mnhq_15_equip_av1',
                'Value' => '',
                'Label' => 'Fetoscope',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'field_setID' => 'mnhq_16_commod_av',
                'field_ID' => 'mnhq_16_commod_av1',
                'Value' => '',
                'Label' => 'Insecticide Treated Nets',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'field_setID' => 'mnhq_16_equip_av',
                'field_ID' => 'mnhq_16_equip_av1',
                'Value' => '',
                'Label' => 'Resuscitaire',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'field_setID' => 'mnhq_17_commod_av',
                'field_ID' => 'mnhq_17_commod_av1',
                'Value' => '',
            'Label' => 'IUCD (Copper T)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'field_setID' => 'mnhq_17_equip_av',
                'field_ID' => 'mnhq_17_equip_av1',
                'Value' => '',
                'Label' => 'Heater',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'field_setID' => 'mnhq_18_commod_av',
                'field_ID' => 'mnhq_18_commod_av1',
                'Value' => '',
                'Label' => 'Jadelle',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'field_setID' => 'mnhq_19_commod_av',
                'field_ID' => 'mnhq_19_commod_av1',
                'Value' => '',
                'Label' => 'Lamivudine/Zidovudine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'field_setID' => 'mnhq_1a_prov_comp_obsteric',
                'field_ID' => 'mnhq_1a_prov_comp_obsteric1',
                'Value' => '',
            'Label' => '(A) If blood transfusion is performed, indicate main source of blood',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'field_setID' => 'mnhq_1b_prov_comp_obsteric',
                'field_ID' => 'mnhq_1b_prov_comp_obsteric1',
                'Value' => '',
            'Label' => '(B)If Yes, Give a reason why blood transfusion is not performed',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'field_setID' => 'mnhq_1_commod_av',
                'field_ID' => 'mnhq_1_commod_av1',
                'Value' => '',
                'Label' => 'Benzyl Penicillin',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'field_setID' => 'mnhq_1_comm_strategy',
                'field_ID' => 'mnhq_1_comm_strategy1',
                'Value' => '',
            'Label' => '(1) Total number of Community Units attached to a facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'field_setID' => 'mnhq_1_deliv_kit',
                'field_ID' => 'mnhq_1_deliv_kit1',
                'Value' => '',
                'Label' => 'Bowls 8"',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'field_setID' => 'mnhq_1_equip_av',
                'field_ID' => 'mnhq_1_equip_av1',
                'Value' => '',
                'Label' => 'Manual/ Electrical Suction machine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'field_setID' => 'mnhq_1_guideline_av',
                'field_ID' => 'mnhq_1_guideline_av1',
                'Value' => '',
            'Label' => '(1) Does the facility have updated National Roadmap to improving Maternal and Neonatal Health',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'field_setID' => 'mnhq_1_health_fac_management',
                'field_ID' => 'mnhq_1_health_fac_management1',
                'Value' => '',
            'Label' => '(1) Does this facility have Health Facility Management Committee or Board?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'field_setID' => 'mnhq_1_jobaids_av',
                'field_ID' => 'mnhq_1_jobaids_av1',
                'Value' => '',
            'Label' => '(1) Does the facility have an updated PPH (AMSTL) job aid?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'field_setID' => 'mnhq_1_kangaroo_mothercare',
                'field_ID' => 'mnhq_1_kangaroo_mothercare1',
                'Value' => '',
            'Label' => '(1) Does this facility provide Kangaroo mother care?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'field_setID' => 'mnhq_1_prep_delivery',
                'field_ID' => 'mnhq_1_prep_delivery1',
                'Value' => '',
            'Label' => '(1) Is this facility prepared for delivery?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'field_setID' => 'mnhq_1_prov_basic_obsteric',
                'field_ID' => 'mnhq_1_prov_basic_obsteric1',
                'Value' => '',
                'Label' => 'Administration of parenteral antibiotics',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'field_setID' => 'mnhq_1_prov_comp_obsteric',
                'field_ID' => 'mnhq_1_prov_comp_obsteric1',
                'Value' => '',
            'Label' => '(1) Is there a time a mother needed blood transfusion and could not be transfused?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'field_setID' => 'mnhq_1_prov_HIV',
                'field_ID' => 'mnhq_1_prov_HIV1',
                'Value' => '',
            'Label' => '(1) Does this facility have Health Facility Management Committee or Board?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'field_setID' => 'mnhq_1_prov_of_services',
                'field_ID' => 'mnhq_1_prov_of_services1',
                'Value' => '',
            'Label' => '(1)Does this facility operate 24 Hours a Day, 7 days a Week?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'field_setID' => 'mnhq_1_strg_water',
                'field_ID' => 'mnhq_1_strg_water1',
                'Value' => '',
            'Label' => 'Do you have storage of water? (if yes, Please specify)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'field_setID' => 'mnhq_1_sup_unav',
                'field_ID' => 'mnhq_1_sup_unav1',
                'Value' => '',
                'Label' => 'Delivery kit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'field_setID' => 'mnhq_1_testing_sup',
                'field_ID' => 'mnhq_1_testing_sup1',
                'Value' => '',
                'Label' => 'Uristicks',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'field_setID' => 'mnhq_1_tools_av',
                'field_ID' => 'mnhq_1_tools_av1',
                'Value' => '',
            'Label' => '(1) Referral Form',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'field_setID' => 'mnhq_1_total',
                'field_ID' => 'mnhq_1_total',
                'Value' => '',
                'Label' => 'Total Number of Diarrhoea Cases',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'field_setID' => 'mnhq_20_commod_av',
                'field_ID' => 'mnhq_20_commod_av1',
                'Value' => '',
                'Label' => 'Lignocaine 1% Injection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'field_setID' => 'mnhq_21_commod_av',
                'field_ID' => 'mnhq_21_commod_av1',
                'Value' => '',
            'Label' => 'Lopinavir+Ritonavir (LPV/r)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'field_setID' => 'mnhq_22_commod_av',
                'field_ID' => 'mnhq_22_commod_av1',
                'Value' => '',
                'Label' => 'Magnesium Sulphate IV',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'field_setID' => 'mnhq_23_commod_av',
                'field_ID' => 'mnhq_23_commod_av1',
                'Value' => '',
                'Label' => 'Hydralazine IV',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'field_setID' => 'mnhq_24_commod_av',
                'field_ID' => 'mnhq_24_commod_av1',
                'Value' => '',
                'Label' => 'Metronidazole IV',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'field_setID' => 'mnhq_25_commod_av',
                'field_ID' => 'mnhq_25_commod_av1',
                'Value' => '',
                'Label' => 'Misoprostol',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'field_setID' => 'mnhq_26_commod_av',
                'field_ID' => 'mnhq_26_commod_av1',
                'Value' => '',
                'Label' => 'Misoprostol',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'field_setID' => 'mnhq_27_commod_av',
                'field_ID' => 'mnhq_27_commod_av1',
                'Value' => '',
            'Label' => 'Nevirapine (NVP)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'field_setID' => 'mnhq_28_commod_av',
                'field_ID' => 'mnhq_28_commod_av1',
                'Value' => '',
            'Label' => 'Nevirapine (SD NVP)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'field_setID' => 'mnhq_29_commod_av',
                'field_ID' => 'mnhq_29_commod_av1',
                'Value' => '',
                'Label' => 'Oral Hormonal Contraceptives',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'field_setID' => 'mnhq_2_comm_strategy',
                'field_ID' => 'mnhq_2_comm_strategy1',
                'Value' => '',
            'Label' => '(2) Total number of Community Units regularly supervised and provided feedback',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'field_setID' => 'mnhq_2_deliv_kit',
                'field_ID' => 'mnhq_2_deliv_kit1',
                'Value' => '',
                'Label' => 'Kidney Dish 10"',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'field_setID' => 'mnhq_2_equip_av',
                'field_ID' => 'mnhq_2_equip_av1',
                'Value' => '',
                'Label' => 'Ambu bag-Adult size',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'field_setID' => 'mnhq_2_guideline_av',
                'field_ID' => 'mnhq_2_guideline_av1',
                'Value' => '',
            'Label' => '(2) Does the facility have updated National Guidelines for Quality Obstetric and Essential Newborn Care?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'field_setID' => 'mnhq_2_health_fac_management',
                'field_ID' => 'mnhq_2_health_fac_management1',
                'Value' => '',
            'Label' => '(2) Does this facility have a Quality Improvement Committee?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'field_setID' => 'mnhq_2_jobaids_av',
                'field_ID' => 'mnhq_2_jobaids_av1',
                'Value' => '',
            'Label' => '(2) Does the facility have an updated Breastfeeding job aid?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'field_setID' => 'mnhq_2_kangaroo_mothercare',
                'field_ID' => 'mnhq_2_kangaroo_mothercare1',
                'Value' => '',
            'Label' => '(2) Is there a designed space for KMC?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'field_setID' => 'mnhq_2_orszinc',
                'field_ID' => 'mnhq_2_orszinc1',
                'Value' => '',
                'Label' => 'Treatment with ORS + Zinc
(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+ antibiotics, ORS+zinc+
metronldazole + ORS+Zinc+Others)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'field_setID' => 'mnhq_2_prov_basic_obsteric',
                'field_ID' => 'mnhq_2_prov_basic_obsteric1',
                'Value' => '',
                'Label' => 'Administration of uterotonic drugs within one minute of delivery antibiotics',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'field_setID' => 'mnhq_2_prov_comp_obsteric',
                'field_ID' => 'mnhq_2_prov_comp_obsteric1',
                'Value' => '',
            'Label' => '(2) Does this facility have reagents for blood grouping?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'field_setID' => 'mnhq_2_prov_HIV',
                'field_ID' => 'mnhq_2_prov_HIV1',
                'Value' => '',
            'Label' => '(2)Are all pregnant women tested for HIV?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'field_setID' => 'mnhq_2_strg_water',
                'field_ID' => 'mnhq_2_strg_water1',
                'Value' => '',
            'Label' => 'Does the community have access to Water? (if yes, Please specify main source from the selection)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'field_setID' => 'mnhq_2_sup_unav',
                'field_ID' => 'mnhq_2_sup_unav1',
                'Value' => '',
                'Label' => 'IV starter kit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'field_setID' => 'mnhq_2_testing_sup',
                'field_ID' => 'mnhq_2_testing_sup1',
                'Value' => '',
                'Label' => 'DNA PCR Testing Kit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'field_setID' => 'mnhq_2_tools_av',
                'field_ID' => 'mnhq_2_tools_av1',
                'Value' => '',
            'Label' => '(2) CDRR (Consumption Data Request Report)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'field_setID' => 'mnhq_30_commod_av',
                'field_ID' => 'mnhq_30_commod_av1',
                'Value' => '',
                'Label' => 'Oxygen',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'field_setID' => 'mnhq_31_commod_av',
                'field_ID' => 'mnhq_31_commod_av1',
                'Value' => '',
                'Label' => 'Oxytocin',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'field_setID' => 'mnhq_32_commod_av',
                'field_ID' => 'mnhq_32_commod_av1',
                'Value' => '',
                'Label' => 'Oxytocin',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'field_setID' => 'mnhq_33_commod_av',
                'field_ID' => 'mnhq_33_commod_av1',
                'Value' => '',
                'Label' => 'Sulphadoxine + Pyrimethamine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'field_setID' => 'mnhq_34_commod_av',
                'field_ID' => 'mnhq_34_commod_av1',
                'Value' => '',
                'Label' => 'Vitamin K',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'field_setID' => 'mnhq_35_commod_av',
                'field_ID' => 'mnhq_35_commod_av1',
                'Value' => '',
                'Label' => 'Water for Injection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'field_setID' => 'mnhq_36_commod_av',
                'field_ID' => 'mnhq_36_commod_av1',
                'Value' => '',
            'Label' => 'Zidovudine (AZT)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'field_setID' => 'mnhq_3_commod_av',
                'field_ID' => 'mnhq_3_commod_av1',
                'Value' => '',
                'Label' => 'Calcium Gluconate Injection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'field_setID' => 'mnhq_3_comm_strategy',
                'field_ID' => 'mnhq_3_comm_strategy1',
                'Value' => '',
            'Label' => '(3) Total number of Community Units trained on Community MNH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'field_setID' => 'mnhq_3_deliv_kit',
                'field_ID' => 'mnhq_3_deliv_kit1',
                'Value' => '',
                'Label' => 'Toothed Dissecting Forceps 6"',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'field_setID' => 'mnhq_3_equip_av',
                'field_ID' => 'mnhq_3_equip_av1',
                'Value' => '',
                'Label' => 'Ambu bag-Paediatric size',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'field_setID' => 'mnhq_3_guideline_av',
                'field_ID' => 'mnhq_3_guideline_av1',
                'Value' => '',
            'Label' => '(3) Does the facility have updated PMTCT guidelines?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'field_setID' => 'mnhq_3_health_fac_management',
                'field_ID' => 'mnhq_3_health_fac_management1',
                'Value' => '',
            'Label' => '(3) Does this facility have a Maternal Perinatal Death Review [MPDR] Committee?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'field_setID' => 'mnhq_3_jobaids_av',
                'field_ID' => 'mnhq_3_jobaids_av1',
                'Value' => '',
            'Label' => '(3) Does the facility have an updated Neonatal Resuscitation Job aid?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'field_setID' => 'mnhq_3_kangaroo_mothercare',
                'field_ID' => 'mnhq_3_kangaroo_mothercare1',
                'Value' => '',
            'Label' => '(3) Are mothers encouraged to employ KMC?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'field_setID' => 'mnhq_3_ors',
                'field_ID' => 'mnhq_3_ors1',
                'Value' => '',
                'Label' => 'Treatment with ORS
(Example: ORS only, ORS+ antibiotics+ ORS+Others)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'field_setID' => 'mnhq_3_prov_basic_obsteric',
                'field_ID' => 'mnhq_3_prov_basic_obsteric1',
                'Value' => '',
                'Label' => 'Administration of parenteral anticonvulsants',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'field_setID' => 'mnhq_3_prov_comp_obsteric',
                'field_ID' => 'mnhq_3_prov_comp_obsteric1',
                'Value' => '',
            'Label' => '(3) Does this facility have a fridge for the storage of blood?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'field_setID' => 'mnhq_3_prov_HIV',
                'field_ID' => 'mnhq_3_prov_HIV1',
                'Value' => '',
            'Label' => '(3) Are ARVs provided to mothes in the MCH?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'field_setID' => 'mnhq_3_sup_unav',
                'field_ID' => 'mnhq_3_sup_unav1',
                'Value' => '',
                'Label' => 'Adult resuscitation kit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'field_setID' => 'mnhq_3_testing_sup',
                'field_ID' => 'mnhq_3_testing_sup1',
                'Value' => '',
                'Label' => 'Rapid Testing Kits for HIV',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'field_setID' => 'mnhq_3_tools_av',
                'field_ID' => 'mnhq_3_tools_av1',
                'Value' => '',
            'Label' => '(3)ANC Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'field_setID' => 'mnhq_4a_prov_comp_obsteric',
                'field_ID' => 'mnhq_4a_prov_comp_obsteric1',
                'Value' => '',
            'Label' => '(A)If No, Give the MAIN reason for not conductiong Caesarean Section',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'field_setID' => 'mnhq_4_commod_av',
                'field_ID' => 'mnhq_4_commod_av1',
                'Value' => '',
                'Label' => 'Ceftriaxone',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'field_setID' => 'mnhq_4_comm_strategy',
                'field_ID' => 'mnhq_4_comm_strategy1',
                'Value' => '',
            'Label' => '(4) Total number of Community Units supported with incentives for CHVs',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'field_setID' => 'mnhq_4_deliv_kit',
                'field_ID' => 'mnhq_4_deliv_kit1',
                'Value' => '',
                'Label' => 'Mayo Scissors curved 7"',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'field_setID' => 'mnhq_4_equip_av',
                'field_ID' => 'mnhq_4_equip_av1',
                'Value' => '',
            'Label' => 'MVA (Manual Vacuum Aspiration) kit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'field_setID' => 'mnhq_4_guideline_av',
                'field_ID' => 'mnhq_4_guideline_av1',
                'Value' => '',
            'Label' => '(4) Does the facility have an updated Post Abortion Care Guidelines?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'field_setID' => 'mnhq_4_health_fac_management',
                'field_ID' => 'mnhq_4_health_fac_management1',
                'Value' => '',
            'Label' => '(4) Does this facility have a Infection Prevention Committee?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'field_setID' => 'mnhq_4_jobaids_av',
                'field_ID' => 'mnhq_4_jobaids_av1',
                'Value' => '',
            'Label' => '(4) Does the facility have an updated MgS04 job aid?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'field_setID' => 'mnhq_4_kangaroo_mothercare',
                'field_ID' => 'mnhq_4_kangaroo_mothercare1',
                'Value' => '',
            'Label' => '(4) Is the facility aware of KMC?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'field_setID' => 'mnhq_4_prov_basic_obsteric',
                'field_ID' => 'mnhq_4_prov_basic_obsteric1',
                'Value' => '',
                'Label' => 'Manual removal of placenta',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'field_setID' => 'mnhq_4_prov_comp_obsteric',
                'field_ID' => 'mnhq_4_prov_comp_obsteric1',
                'Value' => '',
            'Label' => '(4)Does this facility conduct Caesarean Section',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'field_setID' => 'mnhq_4_prov_HIV',
                'field_ID' => 'mnhq_4_prov_HIV1',
                'Value' => '',
            'Label' => '(4) Are all infants screened for HIV exposure?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'field_setID' => 'mnhq_4_sup_unav',
                'field_ID' => 'mnhq_4_sup_unav1',
                'Value' => '',
                'Label' => 'Neonate resuscitation kit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'field_setID' => 'mnhq_4_testing_sup',
                'field_ID' => 'mnhq_4_testing_sup1',
                'Value' => '',
                'Label' => 'RDT strips and reagent for malaria',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'field_setID' => 'mnhq_4_tools_av',
                'field_ID' => 'mnhq_4_tools_av1',
                'Value' => '',
            'Label' => '(4) MPDSR Tools (New Born & Maternal)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'field_setID' => 'mnhq_4_zinc',
                'field_ID' => 'mnhq_4_zinc1',
                'Value' => '',
                'Label' => 'Treatment with Zinc
(Example: Zinc only, Zinc + antibiotic, Zinc+Others)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'field_setID' => 'mnhq_5_antibiotics',
                'field_ID' => 'mnhq_5_antibiotics1',
                'Value' => '',
                'Label' => 'Treatment with antibiotics
(Example:Antibiotics+other treatment without zinc or ORS, antibiotics only)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'field_setID' => 'mnhq_5_commod_av',
                'field_ID' => 'mnhq_5_commod_av1',
                'Value' => '',
                'Label' => 'Chlorhexidine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'field_setID' => 'mnhq_5_comm_strategy',
                'field_ID' => 'mnhq_5_comm_strategy1',
                'Value' => '',
            'Label' => '(5) Total Number of Pregnant Cases referred by CHVs to a health facility for Skilled Birth Attendant (SBA) for the past 3 months',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'field_setID' => 'mnhq_5_deliv_kit',
                'field_ID' => 'mnhq_5_deliv_kit1',
                'Value' => '',
            'Label' => 'Cord Scissors 10cm(4")',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'field_setID' => 'mnhq_5_equip_av',
                'field_ID' => 'mnhq_5_equip_av1',
                'Value' => '',
            'Label' => 'Airways (different sizes)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'field_setID' => 'mnhq_5_guideline_av',
                'field_ID' => 'mnhq_5_guideline_av1',
                'Value' => '',
            'Label' => '(5) Does the facility have Infant Young Child Feeding policy statement?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'field_setID' => 'mnhq_5_health_fac_management',
                'field_ID' => 'mnhq_5_health_fac_management1',
                'Value' => '',
            'Label' => '(5) Does this facility have a disciplinary Committee?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'field_setID' => 'mnhq_5_jobaids_av',
                'field_ID' => 'mnhq_5_jobaids_av1',
                'Value' => '',
            'Label' => '(5) Does the facility have an updated HBB Action Plan (Asphyxia) job aid?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'field_setID' => 'mnhq_5_prov_basic_obsteric',
                'field_ID' => 'mnhq_5_prov_basic_obsteric1',
                'Value' => '',
                'Label' => 'Removal of retained products of conception',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'field_setID' => 'mnhq_5_prov_HIV',
                'field_ID' => 'mnhq_5_prov_HIV1',
                'Value' => '',
            'Label' => '(5) Are Prophylaxis provided to neonates in the MCH?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'field_setID' => 'mnhq_5_sup_unav',
                'field_ID' => 'mnhq_5_sup_unav1',
                'Value' => '',
                'Label' => 'Vaginal examination pack',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'field_setID' => 'mnhq_5_testing_sup',
                'field_ID' => 'mnhq_5_testing_sup1',
                'Value' => '',
                'Label' => 'Microscope for malaria test',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'field_setID' => 'mnhq_5_tools_av',
                'field_ID' => 'mnhq_5_tools_av1',
                'Value' => '',
            'Label' => '(5) Partograph',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'field_setID' => 'mnhq_6_commod_av',
                'field_ID' => 'mnhq_6_commod_av1',
                'Value' => '',
                'Label' => 'Chlorhexidine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'field_setID' => 'mnhq_6_comm_strategy',
                'field_ID' => 'mnhq_6_comm_strategy1',
                'Value' => '',
            'Label' => '(6) Total Number of Infants born at home referred to the facility by CHVs',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'field_setID' => 'mnhq_6_deliv_kit',
                'field_ID' => 'mnhq_6_deliv_kit1',
                'Value' => '',
                'Label' => 'Needle Holder 7"',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'field_setID' => 'mnhq_6_equip_av',
                'field_ID' => 'mnhq_6_equip_av1',
                'Value' => '',
                'Label' => 'Patella hammer',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'field_setID' => 'mnhq_6_guideline_av',
                'field_ID' => 'mnhq_6_guideline_av1',
                'Value' => '',
            'Label' => '(6) Does the facility have Baby Friendly Hospital Initiative Guideline?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'field_setID' => 'mnhq_6_health_fac_management',
                'field_ID' => 'mnhq_6_health_fac_management1',
                'Value' => '',
            'Label' => '(6) Does this Facility have a Corruption Prevention Committee?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'field_setID' => 'mnhq_6_jobaids_av',
                'field_ID' => 'mnhq_6_jobaids_av1',
                'Value' => '',
            'Label' => '(6) Does the facility have Guidelines of Blood Transfusion in Pregnancy job aid?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'field_setID' => 'mnhq_6_others',
                'field_ID' => 'mnhq_6_others1',
                'Value' => '',
                'Label' => 'Treatment with others
(Example: Others+ vitamin A only)
(Example: Others+ vitamin A only)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'field_setID' => 'mnhq_6_prov_basic_obsteric',
                'field_ID' => 'mnhq_6_prov_basic_obsteric1',
                'Value' => '',
                'Label' => 'Assisted vaginal delivery',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'field_setID' => 'mnhq_6_prov_HIV',
                'field_ID' => 'mnhq_6_prov_HIV1',
                'Value' => '',
            'Label' => '(6) Are ARVs provided to mothers in the matrnity unit?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'field_setID' => 'mnhq_6_sup_unav',
                'field_ID' => 'mnhq_6_sup_unav1',
                'Value' => '',
                'Label' => 'Suction tube',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'field_setID' => 'mnhq_6_testing_sup',
                'field_ID' => 'mnhq_6_testing_sup1',
                'Value' => '',
                'Label' => 'Instrument Tray',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'field_setID' => 'mnhq_6_tools_av',
                'field_ID' => 'mnhq_6_tools_av1',
                'Value' => '',
            'Label' => '(6) Maternity Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'field_setID' => 'mnhq_7_commod_av',
                'field_ID' => 'mnhq_7_commod_av1',
                'Value' => '',
                'Label' => 'Dexamethasone Injection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'field_setID' => 'mnhq_7_comm_strategy',
                'field_ID' => 'mnhq_7_comm_strategy1',
                'Value' => '',
            'Label' => '(7) Total Number of HIV Exposed Infants referred to the facility by CHVs',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'field_setID' => 'mnhq_7_deliv_kit',
                'field_ID' => 'mnhq_7_deliv_kit1',
                'Value' => '',
                'Label' => 'Artery Forceps Straight 8"',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'field_setID' => 'mnhq_7_equip_av',
                'field_ID' => 'mnhq_7_equip_av1',
                'Value' => '',
                'Label' => 'Large size Speculum',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'field_setID' => 'mnhq_7_jobaids_av',
                'field_ID' => 'mnhq_7_jobaids_av1',
                'Value' => '',
            'Label' => '(7) Does the facility use Methods of Oxygen Administration job aid?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'field_setID' => 'mnhq_7_notreat',
                'field_ID' => 'mnhq_7_notreat1',
                'Value' => '',
            'Label' => 'No Treatment(i.e No drugs prescribed)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'field_setID' => 'mnhq_7_prov_basic_obsteric',
                'field_ID' => 'mnhq_7_prov_basic_obsteric1',
                'Value' => '',
                'Label' => 'New born resuscitation',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'field_setID' => 'mnhq_7_prov_HIV',
                'field_ID' => 'mnhq_7_prov_HIV1',
                'Value' => '',
            'Label' => '(7) Are mothers re-tested for HIV in the maternity unit?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'field_setID' => 'mnhq_7_sup_unav',
                'field_ID' => 'mnhq_7_sup_unav1',
                'Value' => '',
                'Label' => 'Cut down tray set',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'field_setID' => 'mnhq_7_tools_av',
                'field_ID' => 'mnhq_7_tools_av1',
                'Value' => '',
            'Label' => '(7) Post Natal Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'field_setID' => 'mnhq_8_commod_av',
                'field_ID' => 'mnhq_8_commod_av1',
                'Value' => '',
            'Label' => 'Efavirenz (EFV)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'field_setID' => 'mnhq_8_deliv_kit',
                'field_ID' => 'mnhq_8_deliv_kit1',
                'Value' => '',
            'Label' => 'Episiotomy Scissors (Braun stadler 12.5cm/Barnes 14.5cm)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'field_setID' => 'mnhq_8_equip_av',
                'field_ID' => 'mnhq_8_equip_av1',
                'Value' => '',
                'Label' => 'Graves Vaginal Speculums',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'field_setID' => 'mnhq_8_fever',
                'field_ID' => 'mnhq_8_fever1',
                'Value' => '',
                'Label' => 'Fever',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'field_setID' => 'mnhq_8_jobaids_av',
                'field_ID' => 'mnhq_8_jobaids_av1',
                'Value' => '',
            'Label' => '(8) Does the facility have an updated KMC job aid?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'field_setID' => 'mnhq_8_prov_basic_obsteric',
                'field_ID' => 'mnhq_8_prov_basic_obsteric1',
                'Value' => '',
                'Label' => 'Use of partograph',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'field_setID' => 'mnhq_8_prov_HIV',
                'field_ID' => 'mnhq_8_prov_HIV1',
                'Value' => '',
            'Label' => '(8) Does this facility offer partner testing?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'field_setID' => 'mnhq_8_sup_unav',
                'field_ID' => 'mnhq_8_sup_unav1',
                'Value' => '',
                'Label' => 'Caesarian Section set',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'field_setID' => 'mnhq_8_tools_av',
                'field_ID' => 'mnhq_8_tools_av1',
                'Value' => '',
            'Label' => '(8) Newborn Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'field_setID' => 'mnhq_9_commod_av',
                'field_ID' => 'mnhq_9_commod_av1',
                'Value' => '',
                'Label' => 'Emergency Oral Contraceptive',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'field_setID' => 'mnhq_9_deliv_kit',
                'field_ID' => 'mnhq_9_deliv_kit1',
                'Value' => '',
                'Label' => 'Gallipots',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'field_setID' => 'mnhq_9_equip_av',
                'field_ID' => 'mnhq_9_equip_av1',
                'Value' => '',
                'Label' => 'Stethoscope',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'field_setID' => 'mnhq_9_pneumonia',
                'field_ID' => 'mnhq_9_pneumonia1',
                'Value' => '',
                'Label' => 'Pneumonia',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'field_setID' => 'mnhq_9_prov_HIV',
                'field_ID' => 'mnhq_9_prov_HIV1',
                'Value' => '',
            'Label' => '(9) Does this facility offer psycho-social support?(e.g Mentor Mothers)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'field_setID' => 'mnhq_9_sup_unav',
                'field_ID' => 'mnhq_9_sup_unav1',
                'Value' => '',
                'Label' => 'Cord Clamps',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'field_setID' => 'mnhq_9_tools_av',
                'field_ID' => 'mnhq_9_tools_av1',
                'Value' => '',
            'Label' => '(9) Mother Child Booklet',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'field_setID' => 'mnhq_a_upadted_charts',
                'field_ID' => 'mnhq_a1',
                'Value' => '',
                'Label' => 'A. Does the facility have updated 2012 IMCI guidelines/chart booklets?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'field_setID' => 'mnhq_a_prov_of_beds',
                'field_ID' => 'mnhq_a_prov_of_beds1',
                'Value' => '',
            'Label' => '(A)Total number of Beds in Facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'field_setID' => 'mnhq_b_prov_of_beds',
                'field_ID' => 'mnhq_b_prov_of_beds1',
                'Value' => '',
            'Label' => '(B)Total number of Beds in Maternity',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'field_setID' => 'mnhq_c_iccm',
                'field_ID' => 'mnhq_c_iccm1',
                'Value' => '',
            'Label' => ' C. Does the facility have updated Integrated Community Case Management/Community IMCI (ICCM) guidelines?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'field_setID' => 'mnhq_c_prov_of_beds',
                'field_ID' => 'mnhq_c_prov_of_beds1',
                'Value' => '',
            'Label' => '(C)Total number of Beds for New-borns',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'field_setID' => 'mnhq_d_protocol',
                'field_ID' => 'mnhq_d_protocol1',
                'Value' => '',
                'Label' => ' D. Does the facility have an updated Paediatric Protocol 2010/2013?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'field_setID' => 'mnhq_d_prov_of_beds',
                'field_ID' => 'mnhq_d_prov_of_beds1',
                'Value' => '',
            'Label' => '(D)Total number of Beds in Facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'field_setID' => 'mnhq_elec_avail',
                'field_ID' => 'mnhq_elec_avail1',
                'Value' => '',
                'Label' => 'Electricity',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'field_setID' => 'mnhq_e_diarhoea',
                'field_ID' => 'mnhq_e_diarhoea1',
                'Value' => '',
                'Label' => ' E. Does the facility have an updated Diarrhoea management job aid 2014?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'field_setID' => 'mnhq_e_prov_of_beds',
                'field_ID' => 'mnhq_e_prov_of_beds1',
                'Value' => '',
            'Label' => '(E)Total number of Beds in Facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'field_setID' => 'mnhq_f_iec',
                'field_ID' => 'mnhq_f_iec1',
                'Value' => '',
                'Label' => ' F. Does the facility have updated IEC materials for categories?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'field_setID' => 'mnhq_f_prov_of_beds',
                'field_ID' => 'mnhq_f_prov_of_beds1',
                'Value' => '',
            'Label' => '(F)Total number of Beds in Facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'field_setID' => 'mnhq_g_art',
                'field_ID' => 'mnhq_g_art1',
                'Value' => '',
                'Label' => ' G. Does the facility have updated ART guidelines 2012?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'field_setID' => 'mnhq_h_algorithm',
                'field_ID' => 'mnhq_h_algorithm1',
                'Value' => '',
                'Label' => ' H. Does the facility have an updated Early Infant Diagnosis Algorithm 2009/2012/2014?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'field_setID' => 'mnhq_main_supplier',
                'field_ID' => 'mnhq_main_supplier1',
                'Value' => '',
                'Label' => 'Who is the main supplier of the commodities BELOW?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'field_setID' => 'mnhq_b_ort',
                'field_ID' => 'mnhq_ort_guidelines1',
                'Value' => '',
                'Label' => ' B. Does the facility have updated ORT guidelines?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'field_setID' => 'mnhq_prov_new_born_care',
                'field_ID' => 'mnhq_prov_new_born_care1',
                'Value' => '',
            'Label' => '(1)Does this facility manage and admit new-borns?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'field_setID' => 'mnhq_prov_of_nurses',
                'field_ID' => 'mnhq_prov_of_nurses1',
                'Value' => '',
                'Label' => '1.Total number of skilled birth attendants deployed in a maternity unit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'field_setID' => 'mnhq_prov_waste',
                'field_ID' => 'mnhq_prov_waste1',
                'Value' => '',
            'Label' => '(1). How Does this facility dispose of Waste?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'field_setID' => 'mnhq_rsrc_avail',
                'field_ID' => 'mnhq_rsrc_avail1',
                'Value' => '',
                'Label' => 'Running Water',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes1',
                'Value' => '',
                'Label' => 'Year',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes10',
                'Value' => '',
                'Label' => 'SEP',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes11',
                'Value' => '',
                'Label' => 'OCT',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes12',
                'Value' => '',
                'Label' => 'NOV',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes13',
                'Value' => '',
                'Label' => 'DEC',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes2',
                'Value' => '',
                'Label' => 'JAN',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes3',
                'Value' => '',
                'Label' => 'FEB',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes4',
                'Value' => '',
                'Label' => 'MARCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes5',
                'Value' => '',
                'Label' => 'APRIL',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes6',
                'Value' => '',
                'Label' => 'MAY',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes7',
                'Value' => '',
                'Label' => 'JUNE',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes8',
                'Value' => '',
                'Label' => 'JULY',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'field_setID' => 'mnhq_year_months_numberboxes',
                'field_ID' => 'mnhq_year_months_numberboxes9',
                'Value' => '',
                'Label' => 'AUG',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_1a',
                'field_ID' => 'mnhradio_comp_obst_1a1',
                'Value' => '1',
                'Label' => 'Blood Bank Available',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_1a',
                'field_ID' => 'mnhradio_comp_obst_1a2',
                'Value' => '2',
                'Label' => 'Transfusion Done But No Blood Bank',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_1a',
                'field_ID' => 'mnhradio_comp_obst_1a3',
                'Value' => '-1',
            'Label' => 'Other (Specify)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_1b',
                'field_ID' => 'mnhradio_comp_obst_1b1',
                'Value' => '1',
                'Label' => 'Blood Bank Not Available',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_1b',
                'field_ID' => 'mnhradio_comp_obst_1b2',
                'Value' => '2',
                'Label' => 'Supplies and Equipment Not Available',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_1b',
                'field_ID' => 'mnhradio_comp_obst_1b3',
                'Value' => '-1',
            'Label' => 'Other (Specify)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_4a',
                'field_ID' => 'mnhradio_comp_obst_4a1',
                'Value' => '1',
                'Label' => 'Supplies and Equipment Not Available',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_4a',
                'field_ID' => 'mnhradio_comp_obst_4a2',
                'Value' => '2',
                'Label' => 'Theatre Space Not Available',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_4a',
                'field_ID' => 'mnhradio_comp_obst_4a3',
                'Value' => '3',
                'Label' => 'Human Resource',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'field_setID' => 'mnhradio_comp_obst_4a',
                'field_ID' => 'mnhradio_comp_obst_4a4',
                'Value' => '-1',
            'Label' => 'Others (Specify)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'field_setID' => 'mnhradio_prov_HIV',
                'field_ID' => 'mnhradio_prov_HIV1',
                'Value' => '1',
                'Label' => 'Yes',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'field_setID' => 'mnhradio_prov_HIV',
                'field_ID' => 'mnhradio_prov_HIV2',
                'Value' => '',
                'Label' => 'No',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'field_setID' => 'mnhrco_label',
                'field_ID' => 'mnhrco_label',
                'Value' => '',
                'Label' => 'R.C.O.',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'field_setID' => 'mnhref_slip',
                'field_ID' => 'mnhref_slip1',
                'Value' => '',
                'Label' => 'Referal Slips',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'field_setID' => 'mnhreg',
                'field_ID' => 'mnhreg1',
                'Value' => '',
                'Label' => 'Under 5 register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'field_setID' => 'mnhRESOMAL',
                'field_ID' => 'mnhRESOMAL1',
                'Value' => '',
                'Label' => 'RESOMAL',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'field_setID' => 'mnhResource_Name',
                'field_ID' => 'mnhResource_Name1',
                'Value' => '',
                'Label' => 'Resource Name',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'field_setID' => 'mnhresponse',
                'field_ID' => 'mnhresponse1',
                'Value' => '',
                'Label' => 'Response',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'field_setID' => 'mnhresponse_prov_HIV',
                'field_ID' => 'mnhresponse_prov_HIV1',
                'Value' => '',
            'Label' => 'Response (If No, give MAIN reason)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'field_setID' => 'mnhRotaVirusVaccine',
                'field_ID' => 'mnhRotaVirusVaccine1',
                'Value' => '',
                'Label' => 'Rota Virus Vaccine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'field_setID' => 'mnhsafe_water',
                'field_ID' => 'mnhsafe_water1',
                'Value' => '',
            'Label' => 'Safe Water Source(AL)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'field_setID' => 'mnhsep',
                'field_ID' => 'mnhsep1',
                'Value' => '',
                'Label' => 'Sep',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'field_setID' => 'mnhSpacer',
                'field_ID' => 'mnhSpacer1',
                'Value' => '',
                'Label' => 'Spacer',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'field_setID' => 'mnhstaff_EID_sampling',
                'field_ID' => 'mnhstaff_EID_sampling_1',
                'Value' => '',
                'Label' => 'Number of staff trained in EID sample collection training',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'field_setID' => 'mnhstaff_IMCI_work_CH_UNIT',
                'field_ID' => 'mnhstaff_IMCI_work_CH_UNIT1',
                'Value' => '',
                'Label' => 'How many of the total staff members trained in IMCI are still working in Child Health Unit ',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'field_setID' => 'mnhstaff_pneumonia_diarrhoea_under_5',
                'field_ID' => 'mnhstaff_pneumonia_diarrhoea_under_5_1',
                'Value' => '',
                'Label' => 'Number of staff trained diarrhoea and pneumonia CMEs for U5s ',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'field_setID' => 'mnhstaff_trained_Diarrhoea',
                'field_ID' => 'mnhstaff_trained_Diarrhoea1',
                'Value' => '',
                'Label' => 'Number of staff trained in enhanced diarrhoea management ',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'field_setID' => 'mnhstaff_trained_ICCM',
                'field_ID' => 'mnhstaff_trained_ICCM1',
                'Value' => '',
                'Label' => 'No of staff trained in ICCM',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'field_setID' => 'mnhstaff_trained_IMCI',
                'field_ID' => 'mnhstaff_trained_IMCI_1',
                'Value' => '',
                'Label' => 'No of staff trained in IMCI',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'field_setID' => 'mnhSuctionmachine',
                'field_ID' => 'mnhSuctionmachine1',
                'Value' => '',
                'Label' => 'Suction machine',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'field_setID' => 'mnhsuppliers',
                'field_ID' => 'mnhsuppliers1',
                'Value' => '1',
                'Label' => '1.Central/County Government',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'field_setID' => 'mnhsuppliers',
                'field_ID' => 'mnhsuppliers2',
                'Value' => '2',
                'Label' => '2.Private Suppliers',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'field_setID' => 'mnhsuppliers',
                'field_ID' => 'mnhsuppliers3',
                'Value' => '3',
                'Label' => '3.Own Initiative',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'field_setID' => 'mnhsuppliers',
                'field_ID' => 'mnhsuppliers4',
                'Value' => '4',
                'Label' => '4.Partner',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'field_setID' => 'mnhsuppliers',
                'field_ID' => 'mnhsuppliers5',
                'Value' => '5',
                'Label' => '5.Not Applicable',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'field_setID' => 'mnhsuppliesname',
                'field_ID' => 'mnhsuppliesname1',
                'Value' => '',
                'Label' => 'Supplies Name',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'field_setID' => 'mnhSyrupAmoxicillin',
                'field_ID' => 'mnhSyrupAmoxicillin1',
                'Value' => '',
                'Label' => 'Syrup Amoxicillin',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'field_setID' => 'mnhSyrupCotrimoxazole',
                'field_ID' => 'mnhSyrupCotrimoxazole1',
                'Value' => '',
                'Label' => 'Syrup Cotrimoxazole',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'field_setID' => 'mnhSyrupMetronidazole',
                'field_ID' => 'mnhSyrupMetronidazole1',
                'Value' => '',
                'Label' => 'Syrup Metronidazole',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'field_setID' => 'mnhTabletPaedCotrimoxazole',
                'field_ID' => 'mnhTabletPaedCotrimoxazole1',
                'Value' => '',
                'Label' => 'Tablet Paed Cotrimoxazole',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'field_setID' => 'mnhtextbox_nolabel',
                'field_ID' => 'mnhtetxbox_nolabel1',
                'Value' => '',
                'Label' => '',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'field_setID' => 'mnhtotal',
                'field_ID' => 'mnhtotal1',
                'Value' => '',
                'Label' => 'Total',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'field_setID' => 'mnhTotalCasesinORTCornerRegister',
                'field_ID' => 'mnhTotalCasesinORTCornerRegister1',
                'Value' => '',
                'Label' => 'Total number of cases documented in ORT Corner Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'field_setID' => 'mnhtotal_avail_duty',
                'field_ID' => 'mnhtotal_avail_duty1',
                'Value' => '',
                'Label' => 'Total available on duty',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'field_setID' => 'mnhtotal_in_facility',
                'field_ID' => 'mnhtotal_in_facility1',
                'Value' => '',
                'Label' => 'Total in facility',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'field_setID' => 'mnhTotal_number_of_cases_documented',
                'field_ID' => 'mnhTotal_number_of_cases_documented1',
                'Value' => '',
                'Label' => 'Total number of cases documented in ORT Corner Register',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'field_setID' => 'mnhTotal_Number_of_Diarrhoea_Cases',
                'field_ID' => 'mnhTotal_Number_of_Diarrhoea_Cases1',
                'Value' => '',
                'Label' => 'Total Number of Diarrhoea Cases',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'field_setID' => 'mnhTreatment_with_Antibiotics',
                'field_ID' => 'mnhTreatment_with_Antibiotics1',
                'Value' => '',
                'Label' => 'Treatment with Antibiotics
(Example:Antibiotics+other treatment without zinc or ORS, antibiotics  only)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'field_setID' => 'mnhTreatment_with_ORS+Zinc',
                'field_ID' => 'mnhTreatment_with_ORS+Zinc1',
                'Value' => '',
                'Label' => 'Treatment with ORS+ Zinc
(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+
antibiotics, ORS+zinc+metronidazole+ ORS+Zinc+Others )',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'field_setID' => 'mnhtreatment_with_ORS',
                'field_ID' => 'mnhtreatment_with_ORS1',
                'Value' => '',
                'Label' => 'Treatment with ORS
(Example: ORS only, ORS + antibiotics + ORS+Others)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'field_setID' => 'mnhTreatment_with_others',
                'field_ID' => 'mnhTreatment_with_others1',
                'Value' => '',
                'Label' => 'Treatment with others
(Example: Others+ vitamin A  only)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'field_setID' => 'mnhtreatment_with_Zinc',
                'field_ID' => 'mnhtreatment_with_Zinc1',
                'Value' => '',
                'Label' => 'Treatment  with Zinc
(Example: Zinc only, Zinc + antibiotic, Zinc+Others)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'field_setID' => 'mnhtv',
                'field_ID' => 'mnhtv1',
                'Value' => '',
                'Label' => 'TV',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'field_setID' => 'mnhunits_established',
                'field_ID' => 'mnhunits_established1',
                'Value' => '',
                'Label' => 'Total number of community units Established and functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'field_setID' => 'mnhUS_Clinic',
                'field_ID' => 'mnhUS_Clinic1',
                'Value' => '',
                'Label' => 'US Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'field_setID' => 'mnhu_100mg10',
                'field_ID' => 'mnhu_100mg101',
                'Value' => '',
            'Label' => '100mg/ml (10%)in 10ml amp',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'field_setID' => 'mnhu_10IU',
                'field_ID' => 'mnhu_10IU1',
                'Value' => '',
                'Label' => '10 IU',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'field_setID' => 'mnhu_10mg5ml_5yr',
                'field_ID' => 'mnhu_10mg5ml_5yr1',
                'Value' => '',
                'Label' => '10mg/ 5ml 5yr',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'field_setID' => 'mnhu_10ml_amp',
                'field_ID' => 'mnhu_10ml_amp1',
                'Value' => '',
                'Label' => '10ml amp',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'field_setID' => 'mnhu_1mu',
                'field_ID' => 'mnhu_1mu1',
                'Value' => '',
                'Label' => '1mu',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'field_setID' => 'mnhu_200mcg',
                'field_ID' => 'mnhu_200mcg1',
                'Value' => '',
                'Label' => '200mcg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'field_setID' => 'mnhu_200MG_Tab',
                'field_ID' => 'mnhu_200MG_Tab1',
                'Value' => '',
                'Label' => '200MG Tab',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'field_setID' => 'mnhu_20mg',
                'field_ID' => 'mnhu_20mg1',
                'Value' => '',
                'Label' => '20mg/ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'field_setID' => 'mnhu_25mcg',
                'field_ID' => 'mnhu_25mcg1',
                'Value' => '',
                'Label' => '25mcg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('fields')->insert(array (
            0 => 
            array (
                'field_setID' => 'mnhu_2mg',
                'field_ID' => 'mnhu_2mg1',
                'Value' => '',
                'Label' => '2mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'field_setID' => 'mnhu_2ml_Vial_80mg',
                'field_ID' => 'mnhu_2ml_Vial_80mg1',
                'Value' => '',
                'Label' => '2ml Vial 80mg/2ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'field_setID' => 'mnhu_300MG_Tab',
                'field_ID' => 'mnhu_300MG_Tab1',
                'Value' => '',
                'Label' => '300MG Tab',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'field_setID' => 'mnhu_3tc_150MG',
                'field_ID' => 'mnhu_3tc_150MG1',
                'Value' => '',
            'Label' => '(3TC/AZT) 150MG/300MG',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'field_setID' => 'mnhu_4mg_in_1ml',
                'field_ID' => 'mnhu_4mg_in_1ml1',
                'Value' => '',
                'Label' => '4mg/ml in 1ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'field_setID' => 'mnhu_4pct_Chlorhex',
                'field_ID' => 'mnhu_4pct_Chlorhex1',
                'Value' => '',
            'Label' => '4% (7.1% Chlorhexidine digluconate)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'field_setID' => 'mnhu_500mg',
                'field_ID' => 'mnhu_500mg1',
                'Value' => '',
                'Label' => '500mg/ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'field_setID' => 'mnhu_500mg100ml_10ml',
                'field_ID' => 'mnhu_500mg100ml_10ml1',
                'Value' => '',
                'Label' => '500mg/100ml in 10ml amp',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'field_setID' => 'mnhu_500MG_25MG_Tab',
                'field_ID' => 'mnhu_500MG_25MG_Tab1',
                'Value' => '',
                'Label' => '500MG+25MG Tab',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'field_setID' => 'mnhu_5mg',
                'field_ID' => 'mnhu_5mg1',
                'Value' => '',
                'Label' => '5mg',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'field_setID' => 'mnhu_5mu',
                'field_ID' => 'mnhu_5mu1',
                'Value' => '',
                'Label' => '5mu',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'field_setID' => 'mnhu_5pct',
                'field_ID' => 'mnhu_5pct1',
                'Value' => '',
                'Label' => '5%',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'field_setID' => 'mnhu_5_IU',
                'field_ID' => 'mnhu_5_IU1',
                'Value' => '',
                'Label' => '5 IU',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'field_setID' => 'mnhu_600MG_tab',
                'field_ID' => 'mnhu_600MG_tab1',
                'Value' => '',
                'Label' => '600MG Tab',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'field_setID' => 'mnhu_empty',
                'field_ID' => 'mnhu_empty1',
                'Value' => '',
                'Label' => '',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'field_setID' => 'mnhu_injection',
                'field_ID' => 'mnhu_injection1',
                'Value' => '',
                'Label' => 'Injection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'field_setID' => 'mnhu_injection200mcg_ml',
                'field_ID' => 'mnhu_injection200mcg_ml1',
                'Value' => '',
                'Label' => 'Injection 200mcg/ml',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'field_setID' => 'mnhu_Injection_1g',
                'field_ID' => 'mnhu_Injection_1g1',
                'Value' => '',
                'Label' => 'Injection 1g',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'field_setID' => 'mnhverifyort',
                'field_ID' => 'mnhverifyort1',
                'Value' => '',
                'Label' => '*Verify this information by looking at the ORT Register and identifying the location of the ORT Corner',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'field_setID' => 'mnhVitaminA',
                'field_ID' => 'mnhVitaminA1',
                'Value' => '',
                'Label' => 'Vitamin A',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'field_setID' => 'mnhward',
                'field_ID' => 'mnhward1',
                'Value' => '',
                'Label' => 'ward',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'field_setID' => 'mnhyear',
                'field_ID' => 'mnhyear1',
                'Value' => '',
                'Label' => 'Year',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'field_setID' => 'mnhyear_ch',
                'field_ID' => 'mnhyear_ch1',
                'Value' => '1',
                'Label' => '2012',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'field_setID' => 'mnhyear_ch',
                'field_ID' => 'mnhyear_ch2',
                'Value' => '2',
                'Label' => '2013',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'field_setID' => 'mnhyear_ch',
                'field_ID' => 'mnhyear_ch3',
                'Value' => '3',
                'Label' => '2014',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'field_setID' => 'mnhyear_ch',
                'field_ID' => 'mnhyear_ch4',
                'Value' => '4',
                'Label' => '2015',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'field_setID' => 'mnhyes_no',
                'field_ID' => 'mnhyes_no1',
                'Value' => '1',
                'Label' => 'Yes',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'field_setID' => 'mnhyes_no',
                'field_ID' => 'mnhyes_no2',
                'Value' => '2',
                'Label' => 'No',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'field_setID' => 'mnhZincSulphate',
                'field_ID' => 'mnhZincSulphate1',
                'Value' => '',
                'Label' => 'Zinc Sulphate',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'field_setID' => 'schsavailability',
                'field_ID' => 'schsavailability1',
                'Value' => '',
                'Label' => 'Availability',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'field_setID' => 'schsavailablequantities',
                'field_ID' => 'schsavailablequantities1',
                'Value' => '',
                'Label' => 'Availabile Quantities',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'field_setID' => 'schsbenches',
                'field_ID' => 'schsbenches1',
                'Value' => '',
            'Label' => 'Benches/Chair(s)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'field_setID' => 'schsbucketsforspoons',
                'field_ID' => 'schsbucketsforspoons1',
                'Value' => '',
                'Label' => 'Buckets for storing cups and spoons',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'field_setID' => 'schscalibratedjars',
                'field_ID' => 'schscalibratedjars1',
                'Value' => '',
                'Label' => '1 litre of more caliberated measuring jars',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'field_setID' => 'schsEIDCollection',
                'field_ID' => 'schsEIDCollection1',
                'Value' => '',
                'Label' => 'EID Collection Kits',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'field_setID' => 'schsequipmentname',
                'field_ID' => 'schsequipmentname1',
                'Value' => '',
                'Label' => 'Equipment Name',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'field_setID' => 'schsfully_functional',
                'field_ID' => 'schsfully_functional1',
                'Value' => '',
                'Label' => 'Fully Functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'field_setID' => 'schsfunctionalnonfunctionalnumberbox',
                'field_ID' => 'schsfunctionalnonfunctionalnumberbox1',
                'Value' => '',
                'Label' => 'Functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'field_setID' => 'schsfunctionalnonfunctionalnumberbox',
                'field_ID' => 'schsfunctionalnonfunctionalnumberbox2',
                'Value' => '',
                'Label' => 'Non-functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'field_setID' => 'schsfunctionalnumberbox',
                'field_ID' => 'schsfunctionalnumberbox1',
                'Value' => '',
                'Label' => 'Functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'field_setID' => 'schshandwashing',
                'field_ID' => 'schshandwashing1',
                'Value' => '',
                'Label' => 'Hand Washing Facility/Point eg tippy taps',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'field_setID' => 'schsHIVRapid',
                'field_ID' => 'schsHIVRapid1',
                'Value' => '',
                'Label' => 'HIV Rapid Test Kits',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'field_setID' => 'schslocationofavailability',
                'field_ID' => 'schslocationofavailability1',
                'Value' => '',
            'Label' => 'Location of Availability (multiple selection allowed)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'field_setID' => 'schsmeasuringcontainers',
                'field_ID' => 'schsmeasuringcontainers1',
                'Value' => '',
                'Label' => 'Locally available measuring containers eg cooking fat',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'field_setID' => 'schsmuactape',
                'field_ID' => 'schsmuactape1',
                'Value' => '',
                'Label' => 'MUAC Tape',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'field_setID' => 'schsnon_functional',
                'field_ID' => 'schsnon_functional1',
                'Value' => '',
                'Label' => 'Non-functional',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'field_setID' => 'schsplasticbuckets',
                'field_ID' => 'schsplasticbuckets1',
                'Value' => '',
            'Label' => 'Plastick buckets (with lids for infection prevention)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'field_setID' => 'schsplasticcups250',
                'field_ID' => 'schsplasticcups2501',
                'Value' => '',
            'Label' => 'Plastic cups (250-300mls)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'field_setID' => 'schsplasticcups350',
                'field_ID' => 'schsplasticcups3501',
                'Value' => '',
            'Label' => 'Plastic cups (350-500mls)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'field_setID' => 'schsstirringspoon',
                'field_ID' => 'schsstirringspoon1',
                'Value' => '',
                'Label' => 'Stirring Spoon',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'field_setID' => 'schstableformixingORS',
                'field_ID' => 'schstableformixingORS1',
                'Value' => '',
                'Label' => 'Table for mixing ORS',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'field_setID' => 'schstablespoon',
                'field_ID' => 'schstablespoon1',
                'Value' => '',
                'Label' => 'Table Spoons',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'field_setID' => 'schstabletrays',
                'field_ID' => 'schstabletrays1',
                'Value' => '',
                'Label' => 'Table Trays',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'field_setID' => 'schsthermometer',
                'field_ID' => 'schsthermometer1',
                'Value' => '',
                'Label' => 'Thermometer',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'field_setID' => 'schswallclock',
                'field_ID' => 'schswallclock1',
                'Value' => '',
                'Label' => 'Wall Clock/Timing Device',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'field_setID' => 'schswastecontainers',
                'field_ID' => 'schswastecontainers1',
                'Value' => '',
                'Label' => 'Waste Containers',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'field_setID' => 'schswaterstoragecontainerswithtap',
                'field_ID' => 'schswaterstoragecontainers201',
                'Value' => '',
            'Label' => 'Water Storage Container( at least 20-40lts with tap)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'field_setID' => 'schswaterstoragecontainerswithouttap',
                'field_ID' => 'schswaterstoragecontainerswithouttap1',
                'Value' => '',
            'Label' => 'Water Storage Container( at least 20-40lts without tap)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'field_setID' => 'schsweighingscale',
                'field_ID' => 'schsweighingscale1',
                'Value' => '',
                'Label' => 'Weighing Scale',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'field_setID' => 'sdfxactionssupervisee',
                'field_ID' => 'sdfxactionssupervisee1',
                'Value' => '',
                'Label' => 'ACTION/S TAKEN BY SUPERVISEE',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'field_setID' => 'sdfxactionssupervisor',
                'field_ID' => 'sdfxactionssupervisor1',
                'Value' => '',
                'Label' => 'ACTION/S TAKEN BY SUPERVISOR',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'field_setID' => 'sdfxAskhowmanytimesthechild',
                'field_ID' => 'sdfxAskhowmanytimesthechild1',
                'Value' => '',
                'Label' => 'Ask how many times the children is breastfeeding in 24hrs',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'field_setID' => 'sdfxAskifthechildisexclusively',
                'field_ID' => 'sdfxAskifthechildisexclusively1',
                'Value' => '',
                'Label' => 'Ask if the child Is exclusively breastfeeding',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'field_setID' => 'sdfxAskiftheinfantisbreastfeeding',
                'field_ID' => 'sdfxAskiftheinfantisbreastfeeding1',
                'Value' => '',
                'Label' => 'Ask if the infant is breastfeeding',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'field_setID' => 'sdfxaskprovider',
                'field_ID' => 'sdfxaskprovider1',
                'Value' => '',
                'Label' => 'Ask provider, for any problems regarding assessment, classification, treatment, counselling, followup etc and solve the problem instantly. Note down the decisions which have been taken to improve the skills and continue the practices.',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'field_setID' => 'sdfxattachment',
                'field_ID' => 'sdfxattachment1',
                'Value' => '1',
                'Label' => 'Good attachment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'field_setID' => 'sdfxattachment',
                'field_ID' => 'sdfxattachment2',
                'Value' => '2',
                'Label' => 'Not well attached',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'field_setID' => 'sdfxattachment',
                'field_ID' => 'sdfxattachment3',
                'Value' => '3',
                'Label' => 'Not attached at all',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'field_setID' => 'sdfxbacterialinfection',
                'field_ID' => 'sdfxbacterialinfection1',
                'Value' => '1',
                'Label' => 'Risk of  bacterial infection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'field_setID' => 'sdfxbacterialinfection',
                'field_ID' => 'sdfxbacterialinfection2',
                'Value' => '2',
                'Label' => 'No risk of  bacterial infection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'field_setID' => 'sdfxcertified',
                'field_ID' => 'sdfxcertified1',
                'Value' => '',
                'Label' => 'HEALTHCARE PROVIDER CERTIFIED',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'field_setID' => 'sdfxCheckforbreastattachment',
                'field_ID' => 'sdfxCheckforbreastattachment1',
                'Value' => '',
                'Label' => 'Check for breast attachment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'field_setID' => 'sdfxCheckforinfantpositioning',
                'field_ID' => 'sdfxCheckforinfantpositioning1',
                'Value' => '',
                'Label' => 'Check for infant positioning',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'field_setID' => 'sdfxCheckforwhitepatches',
                'field_ID' => 'sdfxCheckforwhitepatches1',
                'Value' => '',
            'Label' => 'Checked for white patches and ulcers in mouth(thrush)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'field_setID' => 'sdfxCheckifinfantissucklingeffectively',
                'field_ID' => 'sdfxCheckifinfantissucklingeffectively1',
                'Value' => '',
                'Label' => 'Check if infantis suckling effectively',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'field_setID' => 'sdfxcheckifmembraneruptured',
                'field_ID' => 'sdfxcheckifmembraneruptured1',
                'Value' => '',
                'Label' => 'Check if the membranes were
raptured more than 18 hours before
delivery OR foul smelling liquor',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'field_setID' => 'sdfxcheckifmotherfever',
                'field_ID' => 'sdfxcheckifmotherfever1',
                'Value' => '',
                'Label' => 'Check if the mother has had fever
or treated for an infection with
antibiotics within two weeks after delivery',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'field_setID' => 'sdfxCheckifmotherisconfirmedHIVpositive',
                'field_ID' => 'sdfxCheckifmotherisconfirmedHIVpositive1',
                'Value' => '',
                'Label' => 'Check if mother is confirmed HIV positive',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'field_setID' => 'sdfxcheckifmothertbtreatment',
                'field_ID' => 'sdfxcheckifmothertbtreatment1',
                'Value' => '',
                'Label' => 'Check if mother has been started on 
TB treatment in less than 2 months',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'field_setID' => 'sdfxCheckifmothertestedVDRLpositive',
                'field_ID' => 'sdfxCheckifmothertestedVDRLpositive1',
                'Value' => '',
                'Label' => 'Check if mother tested VDRL positive',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'field_setID' => 'sdfxcongenitalsyphillis',
                'field_ID' => 'sdfxcongenitalsyphillis1',
                'Value' => '1',
                'Label' => 'Risk of  congenital syphillis',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'field_setID' => 'sdfxcongenitalsyphillis',
                'field_ID' => 'sdfxcongenitalsyphillis2',
                'Value' => '2',
                'Label' => 'No Risk of  congenital syphillis',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'field_setID' => 'sdfxCorrectClassificatione',
                'field_ID' => 'sdfxCorrectClassificatione1',
                'Value' => '',
                'Label' => 'Correctly Classification',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'field_setID' => 'sdfxCorrectClassificationk',
                'field_ID' => 'sdfxCorrectClassificationk1',
                'Value' => '',
                'Label' => 'Correct Classification',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'field_setID' => 'sdfxCorrectlyassessesandclassifies',
                'field_ID' => 'sdfxCorrectlyassessesandclassifies1',
                'Value' => '',
                'Label' => 'Correctly assesses and classifies',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'field_setID' => 'sdfxcoughtreatment',
                'field_ID' => 'sdfxcoughtreatment1',
                'Value' => '1',
                'Label' => 'Amoxixillin Only',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'field_setID' => 'sdfxcoughtreatment',
                'field_ID' => 'sdfxcoughtreatment2',
                'Value' => '2',
                'Label' => 'Cortimoxazole Only',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'field_setID' => 'sdfxcoughtreatment',
                'field_ID' => 'sdfxcoughtreatment3',
                'Value' => '3',
                'Label' => 'Amoxixillin and other drugs',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'field_setID' => 'sdfxcoughtreatment',
                'field_ID' => 'sdfxcoughtreatment4',
                'Value' => '4',
                'Label' => 'Cortimoxazole and other drugs',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'field_setID' => 'sdfxcoughtreatment',
                'field_ID' => 'sdfxcoughtreatment5',
                'Value' => '',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'field_setID' => 'sdfxdate',
                'field_ID' => 'sdfxdate1',
                'Value' => '',
                'Label' => 'Date',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'field_setID' => 'sdfxdiarrhoea',
                'field_ID' => 'sdfxdiarrhoea1',
                'Value' => '',
                'Label' => '2.Diarrhoea',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'field_setID' => 'sdfxDiarrhoea4',
                'field_ID' => 'sdfxDiarrhoea41',
                'Value' => '',
                'Label' => '4. Diarrhoea',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'field_setID' => 'sdfxdiarrhoeatreatment',
                'field_ID' => 'sdfxdiarrhoeatreatment1',
                'Value' => '1',
                'Label' => 'Treatment with ORS + Zinc',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'field_setID' => 'sdfxdiarrhoeatreatment',
                'field_ID' => 'sdfxdiarrhoeatreatment2',
                'Value' => '2',
                'Label' => 'Treatment with ORS',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'field_setID' => 'sdfxdiarrhoeatreatment',
                'field_ID' => 'sdfxdiarrhoeatreatment3',
                'Value' => '3',
                'Label' => 'Treatment with Zinc',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'field_setID' => 'sdfxdiarrhoeatreatment',
                'field_ID' => 'sdfxdiarrhoeatreatment4',
                'Value' => '4',
                'Label' => 'Treatment with antibiotics',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'field_setID' => 'sdfxdiarrhoeatreatment',
                'field_ID' => 'sdfxdiarrhoeatreatment5',
                'Value' => '',
                'Label' => 'Treatment with others',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'field_setID' => 'sdfxDidcaregiverexplaincorrectlyhowto',
                'field_ID' => 'sdfxDidcaregiverexplaincorrectlyhowto2',
                'Value' => '',
                'Label' => 'Did caregiver explain correctly how to',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'field_setID' => 'sdfxearinfection',
                'field_ID' => 'sdfxearinfection1',
                'Value' => '',
                'Label' => '4. Ear Infection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'field_setID' => 'sdfxEnterReaso',
                'field_ID' => 'sdfxEnterReaso1',
                'Value' => '',
                'Label' => 'Enter Reason',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'field_setID' => 'sdfxexclusivebreastfeeding',
                'field_ID' => 'sdfxexclusivebreastfeeding1',
                'Value' => '1',
                'Label' => 'Exclusive breastfeeding',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'field_setID' => 'sdfxexclusivebreastfeeding',
                'field_ID' => 'sdfxexclusivebreastfeeding2',
                'Value' => '2',
                'Label' => 'Complimentary breastfeeding',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'field_setID' => 'sdfxexclusivebreastfeeding',
                'field_ID' => 'sdfxexclusivebreastfeeding3',
                'Value' => '3',
                'Label' => 'Replacement feeding',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'field_setID' => 'sdfxEyeInfection',
                'field_ID' => 'sdfxEyeInfection1',
                'Value' => '',
                'Label' => '3. Eye Infection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'field_setID' => 'sdfxFeedingproblemlowweight',
                'field_ID' => 'sdfxFeedingproblemlowweight1',
                'Value' => '1',
                'Label' => 'Feeding  problem/ low weight',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'field_setID' => 'sdfxFeedingproblemlowweight',
                'field_ID' => 'sdfxFeedingproblemlowweight2',
                'Value' => '2',
                'Label' => 'No Feeding  problem or low weight',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'field_setID' => 'sdfxfever3',
                'field_ID' => 'sdfxfever31',
                'Value' => '',
                'Label' => '3. Fever',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'field_setID' => 'sdfxfevertreatment',
                'field_ID' => 'sdfxfevertreatment1',
                'Value' => '1',
            'Label' => 'Artemether + Lumefantrine(AL) only with other treatment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'field_setID' => 'sdfxfevertreatment',
                'field_ID' => 'sdfxfevertreatment2',
                'Value' => '2',
                'Label' => 'Artemether only with other treatment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'field_setID' => 'sdfxfevertreatment',
                'field_ID' => 'sdfxfevertreatment3',
                'Value' => '3',
                'Label' => 'Quinine only with other treatment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'field_setID' => 'sdfxfevertreatment',
                'field_ID' => 'sdfxfevertreatment4',
                'Value' => '',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'field_setID' => 'sdfxfindings2',
                'field_ID' => 'sdfxfindings21',
                'Value' => '',
                'Label' => 'Findings',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'field_setID' => 'sdfxHIV',
                'field_ID' => 'sdfxHIV1',
                'Value' => '1',
                'Label' => 'Risk of  HIV transmission',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'field_setID' => 'sdfxHIV',
                'field_ID' => 'sdfxHIV2',
                'Value' => '2',
                'Label' => 'No risk of  HIV transmission',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'field_setID' => 'sdfxIfYesIndicateNameofcounty',
                'field_ID' => 'sdfxIfYesIndicateNameofcounty1',
                'Value' => '',
                'Label' => 'If Yes Indicate Name of county',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'field_setID' => 'sdfxincludetreatment',
                'field_ID' => 'sdfxincludetreatment1',
                'Value' => '',
                'Label' => '*Include all treatments used comma separated without regarding the dosage',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'field_setID' => 'sdfxinstructions',
                'field_ID' => 'sdfxinstructions1',
                'Value' => '',
                'Label' => 'Where NO, there are gaps identified and the HCW will need mentorship to incorporate these in routine care for the child',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'field_setID' => 'sdfxinstructions2',
                'field_ID' => 'sdfxinstructions21',
                'Value' => '',
                'Label' => 'If YES to all, consider HCW for TOT and Mentorship Training',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'field_setID' => 'sdfxinstructions3',
                'field_ID' => 'sdfxinstructions31',
                'Value' => '',
            'Label' => '(NOTE: IF THE HEALTHCARE WORKER FAILS TO ATTAIN ALL THE POINTS IN SECTON A, THE PARTICIPANT SHOULD BE GIVEN A SECOND CHANCE. IF THE PARTICIPANT FAILS IN THE SECOND ATTEMPT, MENTORSHIP IS RECOMMENDED BEFORE FURTHER ASSESMENT)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'field_setID' => 'sdfxJaundice',
                'field_ID' => 'sdfxJaundice1',
                'Value' => '1',
                'Label' => '2. Jaundice',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'field_setID' => 'sdfxnormalweight',
                'field_ID' => 'sdfxnormalweight1',
                'Value' => '1',
                'Label' => 'Normal  weight',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'field_setID' => 'sdfxnormalweight',
                'field_ID' => 'sdfxnormalweight2',
                'Value' => '2',
                'Label' => 'Low  weight',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'field_setID' => 'sdfxnormalweight',
                'field_ID' => 'sdfxnormalweight3',
                'Value' => '3',
                'Label' => 'Very low  weight',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'field_setID' => 'sdfxpositioning',
                'field_ID' => 'sdfxpositioning1',
                'Value' => '1',
                'Label' => 'Correct  Positioning',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'field_setID' => 'sdfxpositioning',
                'field_ID' => 'sdfxpositioning2',
                'Value' => '2',
                'Label' => 'Inorrect  Positioning',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'field_setID' => 'sdfxq_a_Malnutrition',
                'field_ID' => 'sdfxq_a_Malnutrition1',
                'Value' => '',
            'Label' => '(A) Malnutrition',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'field_setID' => 'sdfxrecommendedmentorship',
                'field_ID' => 'sdfxrecommendedmentorship1',
                'Value' => '',
                'Label' => 'HEALTHCARE PROVIDER RECOMMENDED FOR MENTORSHIP',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'field_setID' => 'sdfxrecommendedtot',
                'field_ID' => 'sdfxrecommendedtot1',
                'Value' => '',
                'Label' => 'HEALTHCARE PROVIDER RECOMMENDED FOR TOT',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'field_setID' => 'sdfxserviceunits',
                'field_ID' => 'sdfxserviceunits1',
                'Value' => '1',
                'Label' => 'IPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'field_setID' => 'sdfxserviceunits',
                'field_ID' => 'sdfxserviceunits2',
                'Value' => '2',
                'Label' => 'OPD',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'field_setID' => 'sdfxserviceunits',
                'field_ID' => 'sdfxserviceunits3',
                'Value' => '3',
                'Label' => 'MCH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'field_setID' => 'sdfxserviceunits',
                'field_ID' => 'sdfxserviceunits4',
                'Value' => '4',
                'Label' => 'Maternity',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'field_setID' => 'sdfxserviceunits',
                'field_ID' => 'sdfxserviceunits5',
                'Value' => '-1',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'field_setID' => 'sdfxserviceunits',
                'field_ID' => 'sdfxserviceunits6',
                'Value' => '-51',
                'Label' => 'No information provided',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'field_setID' => 'sdfxshare',
                'field_ID' => 'sdfxshare1',
                'Value' => '',
                'Label' => 'Share your findings from observational sessions with provider. Praise for the things done well and discuss on the identified weakness, show how it could be done.',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'field_setID' => 'sdfxsuckling',
                'field_ID' => 'sdfxsuckling1',
                'Value' => '1',
                'Label' => 'Suckling effectively',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'field_setID' => 'sdfxsuckling',
                'field_ID' => 'sdfxsuckling2',
                'Value' => '2',
                'Label' => 'Not suckling effectively',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'field_setID' => 'sdfxsuckling',
                'field_ID' => 'sdfxsuckling3',
                'Value' => '3',
                'Label' => 'Not suckling at all',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'field_setID' => 'sdfxsuperviseename',
                'field_ID' => 'sdfxsuperviseename1',
                'Value' => '',
            'Label' => 'Supervisee Name (FULL NAME REQUIRED)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'field_setID' => 'sdfxsupervisorname',
                'field_ID' => 'sdfxsupervisorname1',
                'Value' => '',
            'Label' => 'Supervisor Name (FULL NAME REQUIRED)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'field_setID' => 'sdfxtb',
                'field_ID' => 'sdfxtb1',
                'Value' => '1',
                'Label' => 'Risk of  tuberculosis',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'field_setID' => 'sdfxtb',
                'field_ID' => 'sdfxtb2',
                'Value' => '2',
                'Label' => 'No risk of  tuberculosis',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'field_setID' => 'sdfxtimestxt',
                'field_ID' => 'sdfxtimestxt1',
                'Value' => '',
                'Label' => 'times',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'field_setID' => 'sdfxtreatmentlabel',
                'field_ID' => 'sdfxtreatmentlabel1',
                'Value' => '',
                'Label' => 'Treatment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'field_setID' => 'sdfxtreatmenttxtbox',
                'field_ID' => 'sdfxtreatmenttxtbox1',
                'Value' => '',
                'Label' => 'Treatment',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'field_setID' => 'sdfxVery_Severe_Disease',
                'field_ID' => 'sdfxVery_Severe_Disease1',
                'Value' => '',
                'Label' => '1. Very Severe Disease',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'field_setID' => 'sdfxWeightTaken',
                'field_ID' => 'sdfxWeightTaken1',
                'Value' => '',
                'Label' => 'Weight Taken',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'field_setID' => 'sdfxwhatisrelation',
                'field_ID' => 'sdfxwhatisrelation1',
                'Value' => '',
                'Label' => 'What is the relationship of the caregiver to the child?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'field_setID' => 'sdfxwhoadvised',
                'field_ID' => 'sdfxwhoadvised1',
                'Value' => '',
                'Label' => 'Who advised caregiver to seek services at the Health Facility?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'field_setID' => 'sdfxHIVexposureinfection',
            'field_ID' => 'zt(A) HIV exposure/infection1',
                'Value' => '',
            'Label' => '(A) HIV exposure/infection',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'field_setID' => 'sdfxNeededVitaminAsupplemenationgiven',
            'field_ID' => 'zt(A) Needed Vitamin A supplemenation given1',
                'Value' => '',
            'Label' => '(A) Needed Vitamin A supplemenation given',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'field_setID' => 'sdfxIfchildisHIVexposedwasHIVtestdone',
            'field_ID' => 'zt(B) If child is HIV exposed, was HIV test done?1',
                'Value' => '',
            'Label' => '(B) If child is HIV exposed, was HIV test done?',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'field_setID' => 'sdfxNeededRotavirusat6weeksgiven',
            'field_ID' => 'zt(B) Needed Rotavirus at 6 weeks given1',
                'Value' => '',
            'Label' => '(B) Needed Rotavirus at 6 weeks given',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'field_setID' => 'sdfxImmunisationStatus',
            'field_ID' => 'zt(C) Immunisation Status1',
                'Value' => '',
            'Label' => '(C) Immunisation Status(BCG,OPV,
Pentavalent,Pneumocal,Measles)',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        155 => 
        array (
            'field_setID' => 'sdfxNeededRotavirusat10weeksgiven',
        'field_ID' => 'zt(C) Needed Rotavirus at 10 weeks given1',
            'Value' => '',
        'Label' => '(C) Needed Rotavirus at 10 weeks given',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        156 => 
        array (
            'field_setID' => 'sdfxNeededdewormingmedicationgiven',
        'field_ID' => 'zt(D) Needed deworming medication given1',
            'Value' => '',
        'Label' => '(D) Needed deworming medication given',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        157 => 
        array (
            'field_setID' => 'sdfxAppropriatecounsellinginfeeding',
        'field_ID' => 'zt(E) Appropriate counselling in feeding1',
            'Value' => '',
        'Label' => '(E) Appropriate counselling in feeding problems and homecare given',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        158 => 
        array (
            'field_setID' => 'sdfxRotavirusat6weeks',
        'field_ID' => 'zt(E) Rotavirus at 6 weeks1',
            'Value' => '',
        'Label' => '(E) Rotavirus at 6 weeks',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        159 => 
        array (
            'field_setID' => 'sdfxAppropriatefollowuparranged',
        'field_ID' => 'zt(F) Appropriate follow up arranged1',
            'Value' => '',
        'Label' => '(F) Appropriate follow up arranged',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        160 => 
        array (
            'field_setID' => 'sdfxRotavirusat10Weeks',
        'field_ID' => 'zt(F) Rotavirus at 10 Weeks1',
            'Value' => '',
        'Label' => '(F) Rotavirus at 10 Weeks',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        161 => 
        array (
            'field_setID' => 'sdfxAppropriaterefferaldone',
        'field_ID' => 'zt(G) Appropriate refferal done1',
            'Value' => '',
        'Label' => '(G) Appropriate refferal done',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        162 => 
        array (
            'field_setID' => 'sdfxDeworming',
        'field_ID' => 'zt(G) Deworming1',
            'Value' => '',
        'Label' => '(G) Deworming',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        163 => 
        array (
            'field_setID' => 'sdfxChildsfeeding',
        'field_ID' => 'zt(H) Childs feeding1',
            'Value' => '',
        'Label' => '(H) Child\'s feeding',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        164 => 
        array (
            'field_setID' => 'sdfxCarefordevelopment',
        'field_ID' => 'zt(I) Care for development1',
            'Value' => '',
        'Label' => '(I) Care for development',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        165 => 
        array (
            'field_setID' => 'sdfxOtherconditions',
        'field_ID' => 'zt(J) Other conditions1',
            'Value' => '',
        'Label' => '(J) Other conditions',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        166 => 
        array (
            'field_setID' => 'sdfxMotherscondition',
        'field_ID' => 'zt(K) Mothers condition1',
            'Value' => '',
        'Label' => '(K) Mother\'s condition',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        167 => 
        array (
            'field_setID' => 'sdfx100000IU',
            'field_ID' => 'zt100000IU1',
            'Value' => '',
            'Label' => '100,000 IU',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        168 => 
        array (
            'field_setID' => 'sdfx100mgml10in10mlamp',
            'field_ID' => 'zt100mgml10in10mlamp1',
            'Value' => '',
        'Label' => '100mg/ml (10%) in 10 ml amp',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        169 => 
        array (
            'field_setID' => 'sdfx10 IU',
            'field_ID' => 'zt10IU1',
            'Value' => '',
            'Label' => '10 IU',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        170 => 
        array (
            'field_setID' => 'sdfx10mg5ml5yr',
            'field_ID' => 'zt10mg5ml5yr1',
            'Value' => '',
            'Label' => '10mg/ 5ml 5yr',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        171 => 
        array (
            'field_setID' => 'sdfx10 ml amp',
            'field_ID' => 'zt10mlamp1',
            'Value' => '',
            'Label' => '10 ml amp',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        172 => 
        array (
            'field_setID' => 'sdfx120mg',
            'field_ID' => 'zt120mg1',
            'Value' => '',
            'Label' => '120mg',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        173 => 
        array (
            'field_setID' => 'sdfx125mg5ml',
            'field_ID' => 'zt125mg5ml1',
            'Value' => '',
            'Label' => '125mg/5ml',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        174 => 
        array (
            'field_setID' => 'sdfx1mu',
            'field_ID' => 'zt1mu1',
            'Value' => '',
            'Label' => '1mu',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        175 => 
        array (
            'field_setID' => 'sdfx1sachet500ml',
            'field_ID' => 'zt1sachet500ml1',
            'Value' => '',
        'Label' => '1 sachet (500ml)',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        176 => 
        array (
            'field_setID' => 'sdfx1w_2w_1mo_More1',
            'field_ID' => 'zt1w_2w_1mo_More11',
            'Value' => '',
            'Label' => '1 week',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        177 => 
        array (
            'field_setID' => 'sdfx1w_2w_1mo_More1',
            'field_ID' => 'zt1w_2w_1mo_More12',
            'Value' => '',
            'Label' => '2 weeks',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        178 => 
        array (
            'field_setID' => 'sdfx1w_2w_1mo_More1',
            'field_ID' => 'zt1w_2w_1mo_More13',
            'Value' => '',
            'Label' => '1 month',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        179 => 
        array (
            'field_setID' => 'sdfx1w_2w_1mo_More1',
            'field_ID' => 'zt1w_2w_1mo_More14',
            'Value' => '',
            'Label' => 'more

More than 1 month',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        180 => 
        array (
            'field_setID' => 'sdfx200000IU',
            'field_ID' => 'zt200000IU1',
            'Value' => '',
            'Label' => '200,000 IU',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        181 => 
        array (
            'field_setID' => 'sdfx200mcg',
            'field_ID' => 'zt200mcg1',
            'Value' => '',
            'Label' => '200mcg',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        182 => 
        array (
            'field_setID' => 'sdfx200mg5ml',
            'field_ID' => 'zt200mg5ml1',
            'Value' => '',
            'Label' => '200mg/5ml',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        183 => 
        array (
            'field_setID' => 'sdfx200MG Tab',
            'field_ID' => 'zt200MGTab1',
            'Value' => '',
            'Label' => '200MG Tab',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        184 => 
        array (
            'field_setID' => 'sdfx2012_2013_2014_2015',
            'field_ID' => 'zt2012_2013_2014_2015',
            'Value' => '',
            'Label' => 'Select Year',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        185 => 
        array (
            'field_setID' => 'sdfx20mg120mg',
            'field_ID' => 'zt20mg120mg1',
            'Value' => '',
            'Label' => '20mg + 120mg',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        186 => 
        array (
            'field_setID' => 'sdfx20mgml',
            'field_ID' => 'zt20mgml1',
            'Value' => '',
            'Label' => '20mg/ml',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        187 => 
        array (
            'field_setID' => 'sdfx20mgnumberofstrips1Strip=10tablets',
            'field_ID' => 'zt20mgnumberofstrips1Strip=10tablets1',
            'Value' => '',
        'Label' => '20mg(number of strips, 1 Strip = 10 tablets)',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        188 => 
        array (
            'field_setID' => 'sdfx240mg5ml',
            'field_ID' => 'zt240mg5ml1',
            'Value' => '',
            'Label' => '240mg/5ml',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        189 => 
        array (
            'field_setID' => 'sdfx25mcg',
            'field_ID' => 'zt25mcg1',
            'Value' => '',
            'Label' => '25mcg',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        190 => 
        array (
            'field_setID' => 'sdfx2 mg',
            'field_ID' => 'zt2mg1',
            'Value' => '',
            'Label' => '2 mg',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        191 => 
        array (
            'field_setID' => 'sdfx2mlVial80mg2ml',
            'field_ID' => 'zt2mlVial80mg2ml1',
            'Value' => '',
            'Label' => '2ml Vial 80mg/2ml',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        192 => 
        array (
            'field_setID' => 'sdfx300mglmlin2mlamp',
            'field_ID' => 'zt300mglmlin2mlamp1',
            'Value' => '',
            'Label' => '300mg/lml in 2ml amp.',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        193 => 
        array (
            'field_setID' => 'sdfx300MG Tab',
            'field_ID' => 'zt300MGTab1',
            'Value' => '',
            'Label' => '300MG Tab',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        194 => 
        array (
            'field_setID' => 'sdfx3TCAZT150MG300MG',
            'field_ID' => 'zt3TCAZT150MG300MG1',
            'Value' => '',
        'Label' => '(3TC/AZT) 150MG/300MG',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        195 => 
        array (
            'field_setID' => 'sdfx471 Chlorhexidine digluconate',
            'field_ID' => 'zt471Chlorhexidinedigluconate1',
            'Value' => '',
        'Label' => '4%(7.1% Chlorhexidine digluconate)',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        196 => 
        array (
            'field_setID' => 'sdfx4mgmlin1ml',
            'field_ID' => 'zt4mgmlin1ml1',
            'Value' => '',
            'Label' => '4mg/ml in 1ml',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        197 => 
        array (
            'field_setID' => 'sdfx4sachetsSOOmlofORS10tabletsofZinc',
            'field_ID' => 'zt4sachetsSOOmlofORS&10tabletsofZinc1',
            'Value' => '',
        'Label' => '4 sachets (SOOml) of ORS & 10 tablets of Zinc',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        198 => 
        array (
            'field_setID' => 'sdfx50000IU',
            'field_ID' => 'zt50000IU1',
            'Value' => '',
            'Label' => '50,000 IU',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        199 => 
        array (
            'field_setID' => 'sdfx500mg100mlin10mlamp',
            'field_ID' => 'zt500mg100mlin10mlamp1',
            'Value' => '',
            'Label' => '500mg/100ml in 10ml amp',
            'created_at' => '2016-03-04 08:55:19',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        200 => 
        array (
            'field_setID' => 'sdfx500MG25MG Tab',
            'field_ID' => 'zt500MG25MGTab1',
            'Value' => '',
            'Label' => '500MG+25MG Tab',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        201 => 
        array (
            'field_setID' => 'sdfx500mgml',
            'field_ID' => 'zt500mgml1',
            'Value' => '',
            'Label' => '500mg/ml',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        202 => 
        array (
            'field_setID' => 'sdfx5',
            'field_ID' => 'zt51',
            'Value' => '',
            'Label' => '5%',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        203 => 
        array (
            'field_setID' => 'sdfx5 IU',
            'field_ID' => 'zt5IU1',
            'Value' => '',
            'Label' => '5 IU',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        204 => 
        array (
            'field_setID' => 'sdfx5mu',
            'field_ID' => 'zt5mu1',
            'Value' => '',
            'Label' => '5mu',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        205 => 
        array (
            'field_setID' => 'sdfx600MG Tab',
            'field_ID' => 'zt600MGTab1',
            'Value' => '',
            'Label' => '600MG Tab',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        206 => 
        array (
            'field_setID' => 'sdfxAskedhowlongthechildhadthecough',
            'field_ID' => 'ztAAskedhowlongthechildhadthecough1',
            'Value' => '',
        'Label' => '(A) Asked how long the child had the cough',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        207 => 
        array (
            'field_setID' => 'sdfxaccesswater',
            'field_ID' => 'ztaccesswater1',
            'Value' => '',
        'Label' => 'Does the community have access to water? (if yes, please specify main source from selection)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        208 => 
        array (
            'field_setID' => 'sdfxCheckedforpalmorpallor',
            'field_ID' => 'ztACheckedforpalmorpallor1',
            'Value' => '',
        'Label' => '(A) Checked for palmor pallor',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        209 => 
        array (
            'field_setID' => 'sdfxCheckedforseverewasting',
            'field_ID' => 'ztACheckedforseverewasting1',
            'Value' => '',
        'Label' => '(A) Checked for severe wasting',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        210 => 
        array (
            'field_setID' => 'sdfxactive_CHEWS',
            'field_ID' => 'ztactive_CHEWS1',
            'Value' => '',
            'Label' => 'Total number of active CHEWS',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        211 => 
        array (
            'field_setID' => 'sdfxactive_CHEWS_trained_in_ICCM',
            'field_ID' => 'ztactive_CHEWS_trained_in_ICCM1',
            'Value' => '',
            'Label' => 'Total number  of active  CHEWs trained on ICCM',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        212 => 
        array (
            'field_setID' => 'sdfxactive_CHVs',
            'field_ID' => 'ztactive_CHVs1',
            'Value' => '',
            'Label' => 'Total number of active CHVs',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        213 => 
        array (
            'field_setID' => 'sdfxactive_CHVs_trained_on_ICCM',
            'field_ID' => 'ztactive_CHVs_trained_on_ICCM1',
            'Value' => '',
            'Label' => 'Total number of active CHVs trained on ICCM',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        214 => 
        array (
            'field_setID' => 'sdfxAdultresucitationkit',
            'field_ID' => 'ztAdultresucitationkit1',
            'Value' => '',
            'Label' => 'Adult resucitation kit',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        215 => 
        array (
            'field_setID' => 'sdfxageinmonths',
            'field_ID' => 'ztageinmonths1',
            'Value' => '',
            'Label' => 'Age in Months',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        216 => 
        array (
            'field_setID' => 'sdfxageinmonthstxt',
            'field_ID' => 'ztageinmonthstxt1',
            'Value' => '',
            'Label' => 'Enter age',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        217 => 
        array (
            'field_setID' => 'sdfxinabilitytodrinkorbreastfeed',
            'field_ID' => 'ztAInabilitytodrinkorbreastfeed1',
            'Value' => '',
        'Label' => '(A) Inability to drink or breastfeed',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        218 => 
        array (
            'field_setID' => 'sdfxanaemia',
            'field_ID' => 'ztanaemia1',
            'Value' => '',
        'Label' => '(B) Anaemia',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        219 => 
        array (
            'field_setID' => 'sdfxapr',
            'field_ID' => 'ztapr1',
            'Value' => '',
            'Label' => 'Apr',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        220 => 
        array (
            'field_setID' => 'sdfxaredrugsavailavle',
            'field_ID' => 'ztaredrugsavailavle1',
            'Value' => '',
        'Label' => '(A) Are there drugs available in the ORT Corner?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        221 => 
        array (
            'field_setID' => 'sdfxArtemetherLeumefantrineAL',
            'field_ID' => 'ztArtemetherLeumefantrineAL1',
            'Value' => '',
        'Label' => 'Artemether + Leumefantrine (AL)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        222 => 
        array (
            'field_setID' => 'sdfxArtery',
            'field_ID' => 'ztArtery1',
            'Value' => '',
            'Label' => 'Artery Forceps Straight 8"',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        223 => 
        array (
            'field_setID' => 'sdfxArtesunateInjection',
            'field_ID' => 'ztArtesunateInjection1',
            'Value' => '',
            'Label' => 'Artesunate Injection',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        224 => 
        array (
            'field_setID' => 'sdfxaspect',
            'field_ID' => 'ztaspect1',
            'Value' => '',
            'Label' => 'Aspect',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        225 => 
        array (
            'field_setID' => 'sdfxAssessor',
            'field_ID' => 'ztAssessor1',
            'Value' => '',
            'Label' => 'Assessor Response',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        226 => 
        array (
            'field_setID' => 'sdfxAssessorFindings',
            'field_ID' => 'ztAssessorFindings1',
            'Value' => '',
            'Label' => 'Assessor Findings',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        227 => 
        array (
            'field_setID' => 'sdfxTemperaturetakenandrecorded',
            'field_ID' => 'ztATemperaturetakenandrecorded1',
            'Value' => '',
        'Label' => '(A) Temperature taken and recorded',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        228 => 
        array (
            'field_setID' => 'sdfxaug',
            'field_ID' => 'ztaug1',
            'Value' => '',
            'Label' => 'Aug',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        229 => 
        array (
            'field_setID' => 'sdfxAvailability',
            'field_ID' => 'ztAvailability1',
            'Value' => '',
        'Label' => 'Availability (One Section Allowed)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        230 => 
        array (
            'field_setID' => 'sdfxavailablequant',
            'field_ID' => 'ztavailablequant1',
            'Value' => '',
        'Label' => 'Available Quantities (In Numbers)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        231 => 
        array (
            'field_setID' => 'sdfxAvailable_Not_Available',
            'field_ID' => 'ztAvailable_Not_Available1',
            'Value' => '1',
            'Label' => 'Available',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        232 => 
        array (
            'field_setID' => 'sdfxAvailable_Not_Available',
            'field_ID' => 'ztAvailable_Not_Available2',
            'Value' => '2',
            'Label' => 'Not Available',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        233 => 
        array (
            'field_setID' => 'sdfxBabyWrappersLinen',
            'field_ID' => 'ztBabyWrappersLinen1',
            'Value' => '',
        'Label' => 'Baby Wrappers/Linen (At least 3)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        234 => 
        array (
            'field_setID' => 'sdfxCheckedforodoemaonbothfeet',
            'field_ID' => 'ztBChexkedforodoemaonbothfeet1',
            'Value' => '',
        'Label' => '(B) Checked for odoema on both feet',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        235 => 
        array (
            'field_setID' => 'sdfxBenzylPenicllin',
            'field_ID' => 'ztBenzylPenicllin1',
            'Value' => '',
            'Label' => 'Benzyl Penicllin',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        236 => 
        array (
            'field_setID' => 'sdfxblank',
            'field_ID' => 'ztblank1',
            'Value' => '',
            'Label' => '',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        237 => 
        array (
            'field_setID' => 'sdfxLethargyandUnconsciousness',
            'field_ID' => 'ztBLethargyandUnconsciousness1',
            'Value' => '',
        'Label' => '(B) Lethargy and Unconsciousness',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        238 => 
        array (
            'field_setID' => 'sdfxbowls',
            'field_ID' => 'ztbowls1',
            'Value' => '',
            'Label' => 'Bowls 8"',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        239 => 
        array (
            'field_setID' => 'sdfxWeighttakenandrecorded',
            'field_ID' => 'ztBWeighttakenandrecorded1',
            'Value' => '',
        'Label' => '(B) Weight taken and recorded',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        240 => 
        array (
            'field_setID' => 'sdfxCADRE',
            'field_ID' => 'ztCADRE1',
            'Value' => '',
            'Label' => 'CADRE',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        241 => 
        array (
            'field_setID' => 'sdfxCaesarianSectionset',
            'field_ID' => 'ztCaesarianSectionset1',
            'Value' => '',
            'Label' => 'Caesarian Section set',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        242 => 
        array (
            'field_setID' => 'sdfxCalciumGluconateInjection',
            'field_ID' => 'ztCalciumGluconateInjection1',
            'Value' => '',
            'Label' => 'Calcium Gluconate Injection',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        243 => 
        array (
            'field_setID' => 'sdfxCareforDevelopmente',
            'field_ID' => 'ztCareforDevelopmente1',
            'Value' => '',
        'Label' => '(E) Care for Development',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        244 => 
        array (
            'field_setID' => 'sdfxcases_treated_with_zinc_and_ors',
            'field_ID' => 'ztcases_treated_with_zinc_and_ors1',
            'Value' => '',
            'Label' => 'total number of cases treated with zinc and ORS Co-pack under Community Case Management of diarrhoea',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        245 => 
        array (
            'field_setID' => 'sdfxCeftriaxone',
            'field_ID' => 'ztCeftriaxone1',
            'Value' => '',
            'Label' => 'Ceftriaxone',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        246 => 
        array (
            'field_setID' => 'sdfxcentimetres',
            'field_ID' => 'ztcentimetres1',
            'Value' => '',
            'Label' => 'centimetres',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        247 => 
        array (
            'field_setID' => 'sdfxcentralcounty_government',
            'field_ID' => 'ztcentralcounty_government1',
            'Value' => '',
            'Label' => 'Central Government/County Government',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        248 => 
        array (
            'field_setID' => 'sdfxHeightLengthtakenandrecorded',
            'field_ID' => 'ztCHeightLengthtakenandrecorded1',
            'Value' => '',
        'Label' => '(C) Height/Length taken and recorded',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        249 => 
        array (
            'field_setID' => 'sdfxchildfeedingcombo',
            'field_ID' => 'ztchildfeedingcombo1',
            'Value' => '1',
            'Label' => 'Exclusive breastfeeding',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        250 => 
        array (
            'field_setID' => 'sdfxchildfeedingcombo',
            'field_ID' => 'ztchildfeedingcombo2',
            'Value' => '2',
            'Label' => 'Replacement feeding',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        251 => 
        array (
            'field_setID' => 'sdfxchildfeedingcombo',
            'field_ID' => 'ztchildfeedingcombo3',
            'Value' => '3',
            'Label' => 'Complimentary feeding',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        252 => 
        array (
            'field_setID' => 'sdfxChildsFeedingd',
            'field_ID' => 'ztChildsFeedingd1',
            'Value' => '',
        'Label' => '(D) Child\'s Feeding',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        253 => 
        array (
            'field_setID' => 'sdfxchlorhexidine',
            'field_ID' => 'ztchlorhexidine1',
            'Value' => '',
            'Label' => 'Chlorhexidine',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        254 => 
        array (
            'field_setID' => 'sdfxIsthechildvomittingeverything?',
            'field_ID' => 'ztCIsthechildvomittingeverything?1',
            'Value' => '',
        'Label' => '(C) Is the child vomitting everything?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        255 => 
        array (
            'field_setID' => 'sdfxclinical_satff_single_label',
            'field_ID' => 'ztclinical_satff_single_label1',
            'Value' => '',
            'Label' => 'Clinical Staff',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        256 => 
        array (
            'field_setID' => 'sdfxMUACtakenandrecorded',
            'field_ID' => 'ztCMUACtakenandrecorded1',
            'Value' => '',
        'Label' => '(C) MUAC taken and recorded',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        257 => 
        array (
            'field_setID' => 'sdfxcommodities',
            'field_ID' => 'ztcommodities1',
            'Value' => '',
            'Label' => 'Commodities',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        258 => 
        array (
            'field_setID' => 'sdfxcommodity_unit',
            'field_ID' => 'ztcommodity_unit1',
            'Value' => '',
            'Label' => 'Commodity Unit',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        259 => 
        array (
            'field_setID' => 'sdfxcommunitsattached',
            'field_ID' => 'ztcommunitsattached1',
            'Value' => '',
            'Label' => 'Total number of Community Units attached to a facility',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        260 => 
        array (
            'field_setID' => 'sdfxcommunitsregsupervised',
            'field_ID' => 'ztcommunitsregsupervised1',
            'Value' => '',
            'Label' => 'Total number of Community Units regularly supervised and provided feedback',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        261 => 
        array (
            'field_setID' => 'sdfxcomm_units_trainedCMNH',
            'field_ID' => 'ztcommunitstrainedCMNH1',
            'Value' => '',
            'Label' => 'Total number of Community Units trained in Community MNH',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        262 => 
        array (
            'field_setID' => 'sdfxcommunity_strategy',
            'field_ID' => 'ztcommunity_strategy1',
            'Value' => '',
            'Label' => 'Community Strategy',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        263 => 
        array (
            'field_setID' => 'sdfxcommunity_units_trained_in_ICCM',
            'field_ID' => 'ztcommunity_units_trained_in_ICCM1',
            'Value' => '',
            'Label' => 'Total number of community units trained in ICCM',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        264 => 
        array (
            'field_setID' => 'sdfxcomm_unitsIncentivesCHV',
            'field_ID' => 'ztcomm_unitsIncentivesCHV1',
            'Value' => '',
            'Label' => 'Total number of Community Units supported with incentives for CHVs',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        265 => 
        array (
            'field_setID' => 'sdfxcoordinatortxt',
            'field_ID' => 'ztcoordinatortxt1',
            'Value' => '',
            'Label' => 'Enter Coordinator Name',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        266 => 
        array (
            'field_setID' => 'sdfxCord',
            'field_ID' => 'ztCord1',
            'Value' => '',
        'Label' => 'Cord Scissors 10cm(4")',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        267 => 
        array (
            'field_setID' => 'sdfxCordClamps',
            'field_ID' => 'ztCordClamps1',
            'Value' => '',
            'Label' => 'Cord Clamps',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        268 => 
        array (
            'field_setID' => 'sdfxCorrectmanagementofyounginfant',
            'field_ID' => 'ztCorrect management of young infant1',
            'Value' => '',
            'Label' => 'Correct management of young infant',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        269 => 
        array (
            'field_setID' => 'sdfxCorrectlyclassifiestreatandcounsel',
            'field_ID' => 'ztCorrectly classifies, treat and counsel1',
            'Value' => '',
            'Label' => 'Correctly classifies, treat and counsel',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        270 => 
        array (
            'field_setID' => 'sdfxCorrectlyconductsHIVassessment',
            'field_ID' => 'ztCorrectly conducts HIV assessment1',
            'Value' => '',
            'Label' => 'Correctly conducts HIV assessment',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        271 => 
        array (
            'field_setID' => 'sdfxCorrectlyidentifies4dangersigns',
            'field_ID' => 'ztCorrectly identifies 4 danger signs1',
            'Value' => '',
            'Label' => 'Correctly identifies 4 danger signs',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        272 => 
        array (
            'field_setID' => 'sdfxCorrectlyidentifies4symptoms',
            'field_ID' => 'ztCorrectly identifies 4 symptoms1',
            'Value' => '',
            'Label' => 'Correctly identifies 4 symptoms',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        273 => 
        array (
            'field_setID' => 'sdfxCough',
            'field_ID' => 'ztCough1',
            'Value' => '',
            'Label' => '1.Cough/Difficulty Breathing',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        274 => 
        array (
            'field_setID' => 'sdfxandcounty',
            'field_ID' => 'ztcounty1',
            'Value' => '',
            'Label' => 'and County',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        275 => 
        array (
            'field_setID' => 'sdfxcountytxt',
            'field_ID' => 'ztcountytxt1',
            'Value' => '',
            'Label' => 'Enter County',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        276 => 
        array (
            'field_setID' => 'sdfxCurrentServiceUnit',
            'field_ID' => 'ztCurrentServiceUnit1',
            'Value' => '',
            'Label' => 'Current Service Unit',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        277 => 
        array (
            'field_setID' => 'sdfxCutdowntrayset',
            'field_ID' => 'ztCutdowntrayset1',
            'Value' => '',
            'Label' => 'Cut down tray set',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        278 => 
        array (
            'field_setID' => 'sdfxdaystxt',
            'field_ID' => 'ztdaystxt1',
            'Value' => '',
            'Label' => 'days',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        279 => 
        array (
            'field_setID' => 'sdfxdec',
            'field_ID' => 'ztdec1',
            'Value' => '',
            'Label' => 'Dec',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        280 => 
        array (
            'field_setID' => 'sdfxdegrees',
            'field_ID' => 'ztdegrees1',
            'Value' => '',
            'Label' => 'degrees',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        281 => 
        array (
            'field_setID' => 'sdfxDelkit',
            'field_ID' => 'ztDelkit1',
            'Value' => '',
            'Label' => 'Delivery kit',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        282 => 
        array (
            'field_setID' => 'sdfxdesignatedlocationfororal',
            'field_ID' => 'ztdesignatedlocationfororal1',
            'Value' => '',
            'Label' => 'Does this Facility have a designed location for oral rehydration?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        283 => 
        array (
            'field_setID' => 'sdfxDesignation',
            'field_ID' => 'ztDesignation1',
            'Value' => '',
            'Label' => 'Designation',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        284 => 
        array (
            'field_setID' => 'sdfxdesignationtxt',
            'field_ID' => 'ztdesignationtxt1',
            'Value' => '',
            'Label' => 'Enter Designation',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        285 => 
        array (
            'field_setID' => 'sdfxDewormingc',
            'field_ID' => 'ztDewormingc1',
            'Value' => '',
        'Label' => '(C) Deworming',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        286 => 
        array (
            'field_setID' => 'sdfxdewormingradio',
            'field_ID' => 'ztdewormingradio1',
            'Value' => '1',
            'Label' => 'Deworming needed',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        287 => 
        array (
            'field_setID' => 'sdfxdewormingradio',
            'field_ID' => 'ztdewormingradio2',
            'Value' => '2',
            'Label' => 'No Deworming needed',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        288 => 
        array (
            'field_setID' => 'sdfxDexamethasoneInjection',
            'field_ID' => 'ztDexamethasoneInjection1',
            'Value' => '',
            'Label' => 'Dexamethasone Injection',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        289 => 
        array (
            'field_setID' => 'sdfxHasthechildhadconvulsions?',
            'field_ID' => 'ztDHasthechildhadconvulsions?1',
            'Value' => '',
        'Label' => '(D) Has the child had convulsions?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        290 => 
        array (
            'field_setID' => 'sdfxDidcaregiverexplaincorrectlyhowtotake',
            'field_ID' => 'ztDid caregiver explain correctly how to take1',
            'Value' => '',
            'Label' => 'Did caregiver explain correctly how to take care of child at home?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        291 => 
        array (
            'field_setID' => 'sdfxDidcaregiverexplaincorrectlyhowto',
            'field_ID' => 'ztDid caregiver explain correctly how to1',
            'Value' => '',
            'Label' => 'Did caregiver explain correctly how to give medicine?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        292 => 
        array (
            'field_setID' => 'sdfxDidcaregiverexplainwhentoreturn',
            'field_ID' => 'ztDid caregiver explain when to return1',
            'Value' => '',
            'Label' => 'Did caregiver explain when to return to health centre immediately?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        293 => 
        array (
            'field_setID' => 'sdfxDidprovideraskcaregiverforfeedback',
            'field_ID' => 'ztDid provider ask caregiver for feedback?1',
            'Value' => '',
            'Label' => 'Did provider ask caregiver for feedback?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        294 => 
        array (
            'field_setID' => 'sdfxDidprovidercounselaboutchildsfeeding',
            'field_ID' => 'ztDid provider counsel about childs feeding1',
            'Value' => '',
            'Label' => 'Did provider counsel about child\'s feeding?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        295 => 
        array (
            'field_setID' => 'sdfxDidproviderexplainhowtotakecare',
            'field_ID' => 'ztDid provider explain how to take care1',
            'Value' => '',
            'Label' => 'Did provider explain how to take care of child correctly?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        296 => 
        array (
            'field_setID' => 'sdfxDidproviderexplainwhentoreturn',
            'field_ID' => 'ztDid provider explain when to return?1',
            'Value' => '',
            'Label' => 'Did provider explain when to return?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        297 => 
        array (
            'field_setID' => 'sdfxDidprovidergivefirstdosofmedicine',
            'field_ID' => 'ztDid provider give first dose of medicine1',
            'Value' => '',
            'Label' => 'Did provider give first dose of medicine at health centre?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        298 => 
        array (
            'field_setID' => 'sdfxDidproviderinformcaregiver',
            'field_ID' => 'ztDid provider inform caregiver1',
            'Value' => '',
            'Label' => 'Did provider inform caregiver about illness of her child?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        299 => 
        array (
            'field_setID' => 'sdfxDidproviderusecaregiverscard',
            'field_ID' => 'ztDid provider use caregivers card?1',
            'Value' => '',
            'Label' => 'Did provider use caregiver\'s card?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        300 => 
        array (
            'field_setID' => 'sdfxDidprovideusetheIMCIChartBooklet',
            'field_ID' => 'ztDid provider use the IMCI Chart Booklet?1',
            'Value' => '',
            'Label' => 'Did provider use the IMCI Chart Booklet?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        301 => 
        array (
            'field_setID' => 'sdfxDidtheproviderusetheunderfiveregister',
            'field_ID' => 'ztDid the provider use the under five register1',
            'Value' => '',
            'Label' => 'Did the provider use the under five register to document assessement & classificaton?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        302 => 
        array (
            'field_setID' => 'sdfxDidcaregiverexplainwhentofollowup',
            'field_ID' => 'ztDidcaregiverexplainwhentofollowup1',
            'Value' => '',
            'Label' => 'Did caregiver explain when to return to the health centre for follow-up?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        303 => 
        array (
            'field_setID' => 'sdfxDidproviderteachandinstructcaregiver',
            'field_ID' => 'ztDidproviderteachandinstructcaregiver1',
            'Value' => '',
            'Label' => 'Did provider teach and instruct caregiver to give medicine to child?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        304 => 
        array (
            'field_setID' => 'sdfxDisposableSyringes',
            'field_ID' => 'ztDisposableSyringes1',
            'Value' => '',
            'Label' => 'Disposable Syringes',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        305 => 
        array (
            'field_setID' => 'sdfxdnapcr',
            'field_ID' => 'ztdnapcr1',
            'Value' => '',
            'Label' => 'DNA PCR Testing Kit',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        306 => 
        array (
            'field_setID' => 'sdfxdoctor_label',
            'field_ID' => 'ztdoctor_label_1',
            'Value' => '',
            'Label' => 'Doctor',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        307 => 
        array (
            'field_setID' => 'sdfxduration of unavailability',
            'field_ID' => 'ztdurationofunavailability1',
            'Value' => '',
            'Label' => 'Duration of Unavailability',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        308 => 
        array (
            'field_setID' => 'sdfxDVD Player',
            'field_ID' => 'ztDVDPlayer1',
            'Value' => '',
            'Label' => 'DVD Player',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        309 => 
        array (
            'field_setID' => 'sdfxWeighttakenandrecordedD',
            'field_ID' => 'ztDWeighttakenandrecorded1',
            'Value' => '',
        'Label' => '(D) Weight taken and recorded',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        310 => 
        array (
            'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
            'field_ID' => 'zteb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec10',
            'Value' => '10',
            'Label' => 'oct',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        311 => 
        array (
            'field_setID' => 'sdfxEfavirenz',
            'field_ID' => 'ztEfavirenz1',
            'Value' => '',
        'Label' => 'Efavirenz (EFV)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        312 => 
        array (
            'field_setID' => 'sdfxeid',
            'field_ID' => 'zteid1',
            'Value' => '',
        'Label' => 'Early Infant Diagnosis (EID) register',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        313 => 
        array (
            'field_setID' => 'sdfxIsthechildconvulsingnow?',
            'field_ID' => 'ztEIsthechildconvulsingnow?1',
            'Value' => '',
        'Label' => '(E) Is the child convulsing now?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        314 => 
        array (
            'field_setID' => 'sdfxElectricity',
            'field_ID' => 'ztElectricity1',
            'Value' => '',
            'Label' => 'Electricity',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        315 => 
        array (
            'field_setID' => 'sdfxEMAIL',
            'field_ID' => 'ztEMAIL1',
            'Value' => '',
            'Label' => 'EMAIL',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        316 => 
        array (
            'field_setID' => 'sdfxemailtxt',
            'field_ID' => 'ztemailtxt1',
            'Value' => '',
            'Label' => 'Enter Email',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        317 => 
        array (
            'field_setID' => 'sdfxMalnutrition',
            'field_ID' => 'ztEMalnutrition1',
            'Value' => '',
        'Label' => '(E) Malnutrition',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        318 => 
        array (
            'field_setID' => 'sdfxEmergencyOralContraceptive',
            'field_ID' => 'ztEmergencyOralContraceptive1',
            'Value' => '',
            'Label' => 'Emergency Oral Contraceptive',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        319 => 
        array (
            'field_setID' => 'sdfxemptylabel',
            'field_ID' => 'ztemptylabel1',
            'Value' => '',
            'Label' => '',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        320 => 
        array (
            'field_setID' => 'sdfxEpisiotomy',
            'field_ID' => 'ztEpisiotomy1',
            'Value' => '',
        'Label' => 'Episiotomy Scissors (Braun Stadler 12.5cm/Barnes 14.5 cm)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        321 => 
        array (
            'field_setID' => 'sdfxRespitoryratetakenandrecorded',
            'field_ID' => 'ztERespitoryratetakenandrecorded1',
            'Value' => '',
        'Label' => '(E) Respitory rate taken and recorded',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        322 => 
        array (
            'field_setID' => 'sdfxErgometrine',
            'field_ID' => 'ztErgometrine1',
            'Value' => '',
            'Label' => 'Ergometrine',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        323 => 
        array (
            'field_setID' => 'sdfxfacilitytxt',
            'field_ID' => 'ztfacilitytxt1',
            'Value' => '',
            'Label' => 'Enter Facility',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        324 => 
        array (
            'field_setID' => 'sdfxfacility_design_location',
            'field_ID' => 'ztfacility_design_location1',
            'Value' => '',
            'Label' => 'does this facility have a designed location for oral rehydration?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        325 => 
        array (
            'field_setID' => 'sdfxfeb',
            'field_ID' => 'ztfeb1',
            'Value' => '',
            'Label' => 'Feb',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        326 => 
        array (
            'field_setID' => 'sdfxFemaleCondoms',
            'field_ID' => 'ztFemaleCondoms1',
            'Value' => '',
            'Label' => 'Female Condoms',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        327 => 
        array (
            'field_setID' => 'sdfxFever',
            'field_ID' => 'ztFever1',
            'Value' => '',
            'Label' => 'Fever',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        328 => 
        array (
            'field_setID' => 'sdfxfevernomalaria',
            'field_ID' => 'ztfevernomalaria1',
            'Value' => '1',
            'Label' => 'Fever/No malaria',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        329 => 
        array (
            'field_setID' => 'sdfxfevernomalaria',
            'field_ID' => 'ztfevernomalaria2',
            'Value' => '2',
            'Label' => 'Malaria',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        330 => 
        array (
            'field_setID' => 'sdfxfevernomalaria',
            'field_ID' => 'ztfevernomalaria3',
            'Value' => '3',
            'Label' => 'Very servere febrile disease',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        331 => 
        array (
            'field_setID' => 'sdfxfindings',
            'field_ID' => 'ztfindings1',
            'Value' => '',
            'Label' => 'Findings',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        332 => 
        array (
            'field_setID' => 'sdfxfindingstxt',
            'field_ID' => 'ztfindingstxt1',
            'Value' => '',
            'Label' => 'Enter Findings',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        333 => 
        array (
            'field_setID' => 'sdfxMUACratetakenandrecorded',
            'field_ID' => 'ztFMUACratetakenandrecorded1',
            'Value' => '',
        'Label' => '(F) MUAC taken and recorded',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        334 => 
        array (
            'field_setID' => 'sdfxfname',
            'field_ID' => 'ztfname1',
            'Value' => '',
            'Label' => 'First Name',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        335 => 
        array (
            'field_setID' => 'sdfxfnametxt',
            'field_ID' => 'ztfnametxt1',
            'Value' => '',
            'Label' => 'Enter First Name',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        336 => 
        array (
            'field_setID' => 'sdfxfullypracticingimci',
            'field_ID' => 'ztfullypracticingimci1',
            'Value' => '1',
            'Label' => 'Fully Practicing IMCI',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        337 => 
        array (
            'field_setID' => 'sdfxfullypracticingimci',
            'field_ID' => 'ztfullypracticingimci2',
            'Value' => '2',
            'Label' => 'Practicing IMCI with gaps',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        338 => 
        array (
            'field_setID' => 'sdfxfullypracticingimci',
            'field_ID' => 'ztfullypracticingimci3',
            'Value' => '3',
            'Label' => 'Not Practicing IMCI',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        339 => 
        array (
            'field_setID' => 'sdfxfully_Nonfully',
            'field_ID' => 'ztfully_Nonfully1',
            'Value' => '',
            'Label' => 'Fully Functional',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        340 => 
        array (
            'field_setID' => 'sdfxfully_Nonfully',
            'field_ID' => 'ztfully_Nonfully2',
            'Value' => '',
            'Label' => 'Non Functional',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        341 => 
        array (
            'field_setID' => 'sdfxGallipots',
            'field_ID' => 'ztGallipots1',
            'Value' => '',
            'Label' => 'Gallipots',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        342 => 
        array (
            'field_setID' => 'sdfxgender',
            'field_ID' => 'ztgender1',
            'Value' => '',
            'Label' => 'Gender',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        343 => 
        array (
            'field_setID' => 'sdfxgenderradio',
            'field_ID' => 'ztgenderradio1',
            'Value' => '1',
            'Label' => 'Male',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        344 => 
        array (
            'field_setID' => 'sdfxgenderradio',
            'field_ID' => 'ztgenderradio2',
            'Value' => '2',
            'Label' => 'Female',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        345 => 
        array (
            'field_setID' => 'sdfxGentamicin',
            'field_ID' => 'ztGentamicin1',
            'Value' => '',
            'Label' => 'Gentamicin',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        346 => 
        array (
            'field_setID' => 'sdfxgen_opd_paed_opd_mch',
            'field_ID' => 'ztgen_opd_paed_opd_mch1',
            'Value' => '1',
            'Label' => 'General OPD',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        347 => 
        array (
            'field_setID' => 'sdfxgen_opd_paed_opd_mch',
            'field_ID' => 'ztgen_opd_paed_opd_mch2',
            'Value' => '2',
            'Label' => 'Paediatric OPD',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        348 => 
        array (
            'field_setID' => 'sdfxgen_opd_paed_opd_mch',
            'field_ID' => 'ztgen_opd_paed_opd_mch3',
            'Value' => '3',
            'Label' => 'MCH',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        349 => 
        array (
            'field_setID' => 'sdfxgen_opd_paed_opd_mch',
            'field_ID' => 'ztgen_opd_paed_opd_mch4',
            'Value' => '4',
            'Label' => 'Others Specify',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        350 => 
        array (
            'field_setID' => 'sdfxgoesbackimmediately_slowly',
            'field_ID' => 'ztgoesbackimmediately_slowly1',
            'Value' => '1',
            'Label' => 'Goes back immediately',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        351 => 
        array (
            'field_setID' => 'sdfxgoesbackimmediately_slowly',
            'field_ID' => 'ztgoesbackimmediately_slowly2',
            'Value' => '2',
            'Label' => 'Slowly',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        352 => 
        array (
            'field_setID' => 'sdfxgoesbackimmediately_slowly',
            'field_ID' => 'ztgoesbackimmediately_slowly3',
            'Value' => '3',
            'Label' => 'Very Slowly',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        353 => 
        array (
            'field_setID' => 'sdfxhcwfindings',
            'field_ID' => 'zthcwfindings1',
            'Value' => '',
            'Label' => 'HCW Findings',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        354 => 
        array (
            'field_setID' => 'sdfxHCWRESPONSE',
            'field_ID' => 'ztHCWRESPONSE1',
            'Value' => '',
            'Label' => 'HCW Response',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        355 => 
        array (
            'field_setID' => 'sdfxHIVexposednot',
            'field_ID' => 'ztHIVexposed-not1',
            'Value' => '1',
            'Label' => 'Not HIV exposed/Infected',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        356 => 
        array (
            'field_setID' => 'sdfxHIVexposednot',
            'field_ID' => 'ztHIVexposed-not2',
            'Value' => '2',
            'Label' => 'HIV exposed',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        357 => 
        array (
            'field_setID' => 'sdfxHIVExposedInfantsCHV',
            'field_ID' => 'ztHIVExposedInfantsCHV1',
            'Value' => '',
            'Label' => 'Total Number of HIV Exposed Infants reffered to the facility by CHVs',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        358 => 
        array (
            'field_setID' => 'sdfxHIVpositivenegative',
            'field_ID' => 'ztHIVpositive-negative1',
            'Value' => '1',
            'Label' => 'HIV Positive',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        359 => 
        array (
            'field_setID' => 'sdfxHIVpositivenegative',
            'field_ID' => 'ztHIVpositive-negative2',
            'Value' => '2',
            'Label' => 'HIV Negative',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        360 => 
        array (
            'field_setID' => 'sdfxHIVpositivenegative',
            'field_ID' => 'ztHIVpositive-negative3',
            'Value' => '3',
        'Label' => 'Not ready (PCR Test only)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        361 => 
        array (
            'field_setID' => 'sdfxHydralazineIV',
            'field_ID' => 'ztHydralazineIV1',
            'Value' => '',
            'Label' => 'Hydralazine IV',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        362 => 
        array (
            'field_setID' => 'sdfxiccm_tool',
            'field_ID' => 'zticcm_tool1',
            'Value' => '',
            'Label' => 'ICCM Tools
ICCM Tools',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        363 => 
        array (
            'field_setID' => 'sdfxIfNotoQuestion1indicatewhethertheHCW:',
            'field_ID' => 'ztIfNo to Question 1 indicate whether the HCW:1',
            'Value' => '',
            'Label' => 'If No to Question 1 indicate whether the HCW:',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        364 => 
        array (
            'field_setID' => 'sdfxIfotherIndicateNameofCordinator:',
            'field_ID' => 'ztIfother Indicate Name of Cordinator:1',
            'Value' => '',
            'Label' => 'If other, Indicate Name of Cordinator:',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        365 => 
        array (
            'field_setID' => 'sdfxIfYesIndicateNameoffacility',
            'field_ID' => 'ztIfYes Indicate Name of facility1',
            'Value' => '',
            'Label' => 'If Yes Indicate Name of facility',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        366 => 
        array (
            'field_setID' => 'sdfximci_case',
            'field_ID' => 'ztimci_case1',
            'Value' => '',
            'Label' => 'IMCI case recording form',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        367 => 
        array (
            'field_setID' => 'sdfxImmunization',
            'field_ID' => 'ztImmunization1',
            'Value' => '',
        'Label' => '(F) Immunization',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        368 => 
        array (
            'field_setID' => 'sdfxImplanon',
            'field_ID' => 'ztImplanon1',
            'Value' => '',
            'Label' => 'Implanon',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        369 => 
        array (
            'field_setID' => 'sdfxIncharge',
            'field_ID' => 'ztIncharge1',
            'Value' => '',
            'Label' => 'Incharge',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        370 => 
        array (
            'field_setID' => 'sdfxindiavail',
            'field_ID' => 'ztindiavail1',
            'Value' => '',
            'Label' => 'INDICATE THE AVAILABILITY,  MAIN REASON FOR UNAVAILABILITY, DURATION OF UNAVAILABILITY & WHAT HAPPENED WHEN THE COMMODITY WAS NOT AVAILABLE',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        371 => 
        array (
            'field_setID' => 'sdfxindicateavailability',
            'field_ID' => 'ztindicateavailability1',
            'Value' => '',
            'Label' => 'INDICATE THE AVAILABILITY AND STORAGE, SUPPLIER AND SOURCE OF THE FOLLOWING',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        372 => 
        array (
            'field_setID' => 'sdfxinfantBornHomeCHVs',
            'field_ID' => 'ztinfantBornHomeCHVs1',
            'Value' => '',
            'Label' => 'Total Number of Infants born at home reffered to the facility by CHVs',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        373 => 
        array (
            'field_setID' => 'sdfxInjectableHormonalContraceptives',
            'field_ID' => 'ztInjectableHormonalContraceptives1',
            'Value' => '',
            'Label' => 'Injectable Hormonal Contraceptives',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        374 => 
        array (
            'field_setID' => 'sdfxinjection',
            'field_ID' => 'ztinjection1',
            'Value' => '',
            'Label' => 'injection',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        375 => 
        array (
            'field_setID' => 'sdfxinjection 1g',
            'field_ID' => 'ztinjection1g1',
            'Value' => '',
            'Label' => 'injection 1g',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        376 => 
        array (
            'field_setID' => 'sdfxInjectionQuinine',
            'field_ID' => 'ztInjectionQuinine1',
            'Value' => '',
            'Label' => 'Injection Quinine',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        377 => 
        array (
            'field_setID' => 'sdfxInsecticideTreatedNets',
            'field_ID' => 'ztInsecticideTreatedNets1',
            'Value' => '',
            'Label' => 'Insecticide Treated Nets',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        378 => 
        array (
            'field_setID' => 'sdfxInstrument',
            'field_ID' => 'ztInstrument1',
            'Value' => '',
            'Label' => 'Instrument Tray',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        379 => 
        array (
            'field_setID' => 'sdfxInsulinSyringes',
            'field_ID' => 'ztInsulinSyringes1',
            'Value' => '',
            'Label' => 'Insulin Syringes',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        380 => 
        array (
            'field_setID' => 'sdfxishwworkingatsameplacetreained',
            'field_ID' => 'ztishwworkingatsameplacetreained1',
            'Value' => '',
            'Label' => 'Is the HCW still working in the original facilty they were when they got trained?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        381 => 
        array (
            'field_setID' => 'sdfxIUCD Copper T',
            'field_ID' => 'ztIUCDCopper T1',
            'Value' => '',
        'Label' => 'IUCD (Copper T)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        382 => 
        array (
            'field_setID' => 'sdfxIVStarterKit',
            'field_ID' => 'ztIVStarterKit1',
            'Value' => '',
            'Label' => 'IV Starter Kit',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        383 => 
        array (
            'field_setID' => 'sdfxJadelle',
            'field_ID' => 'ztJadelle1',
            'Value' => '',
            'Label' => 'Jadelle',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        384 => 
        array (
            'field_setID' => 'sdfxjan',
            'field_ID' => 'ztjan1',
            'Value' => '',
            'Label' => 'Jan',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        385 => 
        array (
            'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
            'field_ID' => 'ztjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec1',
            'Value' => '1',
            'Label' => 'jan',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        386 => 
        array (
            'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
            'field_ID' => 'ztjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec2',
            'Value' => '2',
            'Label' => 'feb',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        387 => 
        array (
            'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
            'field_ID' => 'ztjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec3',
            'Value' => '3',
            'Label' => 'mar',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        388 => 
        array (
            'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
            'field_ID' => 'ztjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec4',
            'Value' => '4',
            'Label' => 'apr',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        389 => 
        array (
            'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
            'field_ID' => 'ztjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec5',
            'Value' => '5',
            'Label' => 'may',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        390 => 
        array (
            'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
            'field_ID' => 'ztjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec6',
            'Value' => '6',
            'Label' => 'jun',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        391 => 
        array (
            'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
            'field_ID' => 'ztjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec7',
            'Value' => '7',
            'Label' => 'jul',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        392 => 
        array (
            'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
            'field_ID' => 'ztjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec8',
            'Value' => '8',
            'Label' => 'aug',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        393 => 
        array (
            'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
            'field_ID' => 'ztjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec9',
            'Value' => '9',
            'Label' => 'sep',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        394 => 
        array (
            'field_setID' => 'sdfxjul',
            'field_ID' => 'ztjul1',
            'Value' => '',
            'Label' => 'Jul',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        395 => 
        array (
            'field_setID' => 'sdfxjun',
            'field_ID' => 'ztjun1',
            'Value' => '',
            'Label' => 'Jun',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        396 => 
        array (
            'field_setID' => 'sdfxKeyCoordinatorofthetrainingSelectOne',
            'field_ID' => 'ztKeyCoordinator of the training Select One1',
            'Value' => '',
        'Label' => 'Key Coordinator of the training (Select One)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        397 => 
        array (
            'field_setID' => 'sdfxkgs',
            'field_ID' => 'ztkgs1',
            'Value' => '',
            'Label' => 'kgs',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        398 => 
        array (
            'field_setID' => 'sdfxkidneydish',
            'field_ID' => 'ztkidneydish1',
            'Value' => '',
            'Label' => 'Kidney Dish 10"',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        399 => 
        array (
            'field_setID' => 'sdfxlabelless_number_box',
            'field_ID' => 'ztlabelless_number_box1',
            'Value' => '',
            'Label' => '',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        400 => 
        array (
            'field_setID' => 'sdfxlabelless_text_box',
            'field_ID' => 'ztlabelless_text_box1',
            'Value' => '',
            'Label' => '',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        401 => 
        array (
            'field_setID' => 'sdfxLamivudineZidovudine',
            'field_ID' => 'ztLamivudineZidovudine1',
            'Value' => '',
            'Label' => 'Lamivudine / Zidovudine',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        402 => 
        array (
            'field_setID' => 'sdfxLignocaine 1 injection',
            'field_ID' => 'ztLignocaine1 injection1',
            'Value' => '',
            'Label' => 'Lignocaine 1% injection',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        403 => 
        array (
            'field_setID' => 'sdfxLocation_of_availability',
            'field_ID' => 'ztLocation_of_availability1',
            'Value' => '',
        'Label' => 'Location of Availability (Multiple Sections Allowed)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        404 => 
        array (
            'field_setID' => 'sdfxLopinavirRitonavirLPVr',
            'field_ID' => 'ztLopinavirRitonavirLPVr1',
            'Value' => '',
        'Label' => 'Lopinavir+Ritonavir (LPV/r)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        405 => 
        array (
            'field_setID' => 'sdfxLowOsmolarityOralRehydrationSaltsORS',
            'field_ID' => 'ztLowOsmolarity Oral Rehydration Salts ORS1',
            'Value' => '',
        'Label' => 'Low Osmolarity Oral Rehydration Salts (ORS)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        406 => 
        array (
            'field_setID' => 'sdfxMagnesium Sulphate IV',
            'field_ID' => 'ztMagnesiumSulphate IV1',
            'Value' => '',
            'Label' => 'Magnesium Sulphate IV',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        407 => 
        array (
            'field_setID' => 'sdfxmainsource',
            'field_ID' => 'ztmainsource1',
            'Value' => '',
            'Label' => 'Main Source',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        408 => 
        array (
            'field_setID' => 'sdfxmainsupplier',
            'field_ID' => 'ztmainsupplier1',
            'Value' => '',
            'Label' => 'Who is the main supplier of the commodities BELOW?',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        409 => 
        array (
            'field_setID' => 'sdfxmain_reason_for_unavailability',
            'field_ID' => 'ztmain_reason_for_unavailability1',
            'Value' => '',
            'Label' => 'Main Reason for Unavailability',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        410 => 
        array (
            'field_setID' => 'sdfxMalnutritiona',
            'field_ID' => 'ztMalnutritiona1',
            'Value' => '',
        'Label' => '(A) Malnutrition',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        411 => 
        array (
            'field_setID' => 'sdfxmar',
            'field_ID' => 'ztmar1',
            'Value' => '',
            'Label' => 'Mar',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        412 => 
        array (
            'field_setID' => 'sdfxMaternal and Perinatal death',
            'field_ID' => 'ztMaternaland Perinatal death1',
            'Value' => '',
        'Label' => 'Maternal and Perinatal death Surveillance and Review(MPDSR)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        413 => 
        array (
            'field_setID' => 'sdfxMaternityIncharge',
            'field_ID' => 'ztMaternityIncharge1',
            'Value' => '',
            'Label' => 'Maternity Incharge',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        414 => 
        array (
            'field_setID' => 'sdfxmay',
            'field_ID' => 'ztmay1',
            'Value' => '',
            'Label' => 'May',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        415 => 
        array (
            'field_setID' => 'sdfxMayo',
            'field_ID' => 'ztMayo1',
            'Value' => '',
            'Label' => 'Mayo Scissors curved 7"',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        416 => 
        array (
            'field_setID' => 'sdfxmother_child_booklet',
            'field_ID' => 'ztmcb1',
            'Value' => '',
            'Label' => 'Mother Child Booklet',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        417 => 
        array (
            'field_setID' => 'sdfxMCHIncharge',
            'field_ID' => 'ztMCHIncharge1',
            'Value' => '',
            'Label' => 'MCH Incharge',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        418 => 
        array (
            'field_setID' => 'sdfxMCH_US_OPD_Ward',
            'field_ID' => 'ztMCH_US_OPD_Ward1',
            'Value' => '1',
            'Label' => 'MCH',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        419 => 
        array (
            'field_setID' => 'sdfxMCH_US_OPD_Ward',
            'field_ID' => 'ztMCH_US_OPD_Ward2',
            'Value' => '2',
            'Label' => 'US Clinic',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        420 => 
        array (
            'field_setID' => 'sdfxMCH_US_OPD_Ward',
            'field_ID' => 'ztMCH_US_OPD_Ward3',
            'Value' => '3',
            'Label' => 'OPD',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        421 => 
        array (
            'field_setID' => 'sdfxMCH_US_OPD_Ward',
            'field_ID' => 'ztMCH_US_OPD_Ward4',
            'Value' => '4',
            'Label' => 'Ward',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        422 => 
        array (
            'field_setID' => 'sdfxMCH_US_OPD_Ward',
            'field_ID' => 'ztMCH_US_OPD_Ward5',
            'Value' => '',
        'Label' => 'Other(Specify)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        423 => 
        array (
            'field_setID' => 'sdfxMetronidazole IV',
            'field_ID' => 'ztMetronidazoleIV1',
            'Value' => '',
            'Label' => 'Metronidazole IV',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        424 => 
        array (
            'field_setID' => 'sdfxMicroscope',
            'field_ID' => 'ztMicroscope1',
            'Value' => '',
            'Label' => 'Microscope for malaria test',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        425 => 
        array (
            'field_setID' => 'sdfxMisoprostol',
            'field_ID' => 'ztMisoprostol1',
            'Value' => '',
            'Label' => 'Misoprostol',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        426 => 
        array (
            'field_setID' => 'sdfxMOBILE',
            'field_ID' => 'ztMOBILE1',
            'Value' => '',
            'Label' => 'MOBILE',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        427 => 
        array (
            'field_setID' => 'sdfxmobiletxt',
            'field_ID' => 'ztmobiletxt1',
            'Value' => '',
            'Label' => 'Enter Mobile',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        428 => 
        array (
            'field_setID' => 'sdfxMOHMOHOOTHER',
            'field_ID' => 'ztMOHMOHOOTHER1',
            'Value' => '1',
            'Label' => 'MOH/KPA/CHAI',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        429 => 
        array (
            'field_setID' => 'sdfxMOHMOHOOTHER',
            'field_ID' => 'ztMOHMOHOOTHER2',
            'Value' => '2',
            'Label' => 'MOH Only',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        430 => 
        array (
            'field_setID' => 'sdfxMOHMOHOOTHER',
            'field_ID' => 'ztMOHMOHOOTHER3',
            'Value' => '3',
            'Label' => 'Other',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        431 => 
        array (
            'field_setID' => 'sdfxmotherfather',
            'field_ID' => 'ztmotherfather1',
            'Value' => '1',
            'Label' => 'Mother',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        432 => 
        array (
            'field_setID' => 'sdfxmotherfather',
            'field_ID' => 'ztmotherfather2',
            'Value' => '2',
            'Label' => 'Father',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        433 => 
        array (
            'field_setID' => 'sdfxmotherfather',
            'field_ID' => 'ztmotherfather3',
            'Value' => '3',
            'Label' => 'Grandmother',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        434 => 
        array (
            'field_setID' => 'sdfxmotherfather',
            'field_ID' => 'ztmotherfather4',
            'Value' => '4',
            'Label' => 'Aunt',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        435 => 
        array (
            'field_setID' => 'sdfxmotherfather',
            'field_ID' => 'ztmotherfather5',
            'Value' => '5',
            'Label' => 'Uncle',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        436 => 
        array (
            'field_setID' => 'sdfxmotherfather',
            'field_ID' => 'ztmotherfather6',
            'Value' => '6',
            'Label' => 'Brother',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        437 => 
        array (
            'field_setID' => 'sdfxmotherfather',
            'field_ID' => 'ztmotherfather7',
            'Value' => '7',
            'Label' => 'Sister',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        438 => 
        array (
            'field_setID' => 'sdfxmotherfather',
            'field_ID' => 'ztmotherfather8',
            'Value' => '8',
            'Label' => 'Other',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        439 => 
        array (
            'field_setID' => 'sdfxname',
            'field_ID' => 'ztname1',
            'Value' => '',
            'Label' => 'Name',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        440 => 
        array (
            'field_setID' => 'sdfxnametxt',
            'field_ID' => 'ztnametxt1',
            'Value' => '',
            'Label' => 'Enter Name',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        441 => 
        array (
            'field_setID' => 'sdfxnatgridGenSolBio',
            'field_ID' => 'ztnatgridGenSolBio1',
            'Value' => '',
            'Label' => 'National grid_Generator_Solar_Biogas',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        442 => 
        array (
            'field_setID' => 'sdfxNebulizer',
            'field_ID' => 'ztNebulizer1',
            'Value' => '',
            'Label' => 'Nebulizer',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        443 => 
        array (
            'field_setID' => 'sdfxNeedle',
            'field_ID' => 'ztNeedle1',
            'Value' => '',
            'Label' => 'Needle Holder 7"',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        444 => 
        array (
            'field_setID' => 'sdfxNeonateresuscitationkit',
            'field_ID' => 'ztNeonateresuscitationkit1',
            'Value' => '',
            'Label' => 'Neonate resuscitation kit',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        445 => 
        array (
            'field_setID' => 'sdfxNevirapine NVP',
            'field_ID' => 'ztNevirapine1',
            'Value' => '',
        'Label' => 'Nevirapine (NVP)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        446 => 
        array (
            'field_setID' => 'sdfxNevirapine SD NVP',
            'field_ID' => 'ztNevirapineSD NVP1',
            'Value' => '',
        'Label' => 'Nevirapine (SD NVP)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        447 => 
        array (
            'field_setID' => 'sdfxNGTube',
            'field_ID' => 'ztNGTube1',
            'Value' => '',
            'Label' => 'NG Tube',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        448 => 
        array (
            'field_setID' => 'sdfxNID',
            'field_ID' => 'ztNID1',
            'Value' => '',
            'Label' => 'National ID',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        449 => 
        array (
            'field_setID' => 'sdfxnidtxt',
            'field_ID' => 'ztnidtxt1',
            'Value' => '',
            'Label' => 'Enter National ID',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        450 => 
        array (
            'field_setID' => 'sdfxnoearinfection',
            'field_ID' => 'ztnoearinfection1',
            'Value' => '1',
            'Label' => 'No Ear Infection',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        451 => 
        array (
            'field_setID' => 'sdfxnoearinfection',
            'field_ID' => 'ztnoearinfection2',
            'Value' => '2',
            'Label' => 'Chronic Ear Infection',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        452 => 
        array (
            'field_setID' => 'sdfxnoearinfection',
            'field_ID' => 'ztnoearinfection3',
            'Value' => '3',
            'Label' => 'Acute Ear Infection',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        453 => 
        array (
            'field_setID' => 'sdfxnoearinfection',
            'field_ID' => 'ztnoearinfection4',
            'Value' => '4',
            'Label' => 'Mastoiditis',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        454 => 
        array (
            'field_setID' => 'sdfxNon_Diarrhoea',
            'field_ID' => 'ztNon_Diarrhoea1',
            'Value' => '',
            'Label' => 'Non Diarrhoea cases that received ORS + Zinc',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        455 => 
        array (
            'field_setID' => 'sdfxnopneumonia',
            'field_ID' => 'ztnopneumonia1',
            'Value' => '1',
            'Label' => 'No Pneumonia/Cough or cold',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        456 => 
        array (
            'field_setID' => 'sdfxnopneumonia',
            'field_ID' => 'ztnopneumonia2',
            'Value' => '2',
            'Label' => 'Severe Pnemonia/Very severe disesae',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        457 => 
        array (
            'field_setID' => 'sdfxnosomeseveredehydration',
            'field_ID' => 'ztnosomeseveredehydration1',
            'Value' => '1',
            'Label' => 'No Dehydration',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        458 => 
        array (
            'field_setID' => 'sdfxnosomeseveredehydration',
            'field_ID' => 'ztnosomeseveredehydration2',
            'Value' => '2',
            'Label' => 'Some Dehydration',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        459 => 
        array (
            'field_setID' => 'sdfxnosomeseveredehydration',
            'field_ID' => 'ztnosomeseveredehydration3',
            'Value' => '3',
            'Label' => 'Severe Dehydration',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        460 => 
        array (
            'field_setID' => 'sdfxnosomeseveredehydration',
            'field_ID' => 'ztnosomeseveredehydration4',
            'Value' => '4',
            'Label' => 'Prolonged Dehydration',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        461 => 
        array (
            'field_setID' => 'sdfxnosomeseveredehydration',
            'field_ID' => 'ztnosomeseveredehydration5',
            'Value' => '5',
            'Label' => 'Possible Abdominal Pain',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        462 => 
        array (
            'field_setID' => 'sdfxnotestkitsnolab',
            'field_ID' => 'ztnotestkitsnolab1',
            'Value' => '1',
            'Label' => 'No Test Kits',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        463 => 
        array (
            'field_setID' => 'sdfxnotestkitsnolab',
            'field_ID' => 'ztnotestkitsnolab2',
            'Value' => '2',
            'Label' => 'No Lab',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        464 => 
        array (
            'field_setID' => 'sdfxnotestkitsnolab',
            'field_ID' => 'ztnotestkitsnolab3',
            'Value' => '3',
            'Label' => 'No Skills',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        465 => 
        array (
            'field_setID' => 'sdfxnotestkitsnolab',
            'field_ID' => 'ztnotestkitsnolab4',
            'Value' => '4',
            'Label' => 'Forgot',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        466 => 
        array (
            'field_setID' => 'sdfxnotestkitsnolab',
            'field_ID' => 'ztnotestkitsnolab5',
            'Value' => '5',
            'Label' => 'Other',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        467 => 
        array (
            'field_setID' => 'sdfxnotorderedOrderednotreceivedexpired',
            'field_ID' => 'ztnotorderedOrderednotreceivedexpired1',
            'Value' => '',
            'Label' => 'Not ordered',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        468 => 
        array (
            'field_setID' => 'sdfxnotorderedOrderednotreceivedexpired',
            'field_ID' => 'ztnotorderedOrderednotreceivedexpired2',
            'Value' => '',
            'Label' => 'Ordered but not yet Received',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        469 => 
        array (
            'field_setID' => 'sdfxnotorderedOrderednotreceivedexpired',
            'field_ID' => 'ztnotorderedOrderednotreceivedexpired3',
            'Value' => '',
            'Label' => 'Expired/non-functional',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        470 => 
        array (
            'field_setID' => 'sdfxnov',
            'field_ID' => 'ztnov1',
            'Value' => '',
            'Label' => 'Nov',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        471 => 
        array (
            'field_setID' => 'sdfxNo_Treatment',
            'field_ID' => 'ztNo_Treatment1',
            'Value' => '',
        'Label' => 'No Treatment  (i.e No drugs prescribed)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        472 => 
        array (
            'field_setID' => 'sdfxnurse_label',
            'field_ID' => 'ztnurse_label_1',
            'Value' => '',
            'Label' => 'Nurse',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        473 => 
        array (
            'field_setID' => 'sdfxnot_applicable',
            'field_ID' => 'ztn_a1',
            'Value' => '5',
            'Label' => 'Not Applicable',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        474 => 
        array (
            'field_setID' => 'sdfxoct',
            'field_ID' => 'ztoct1',
            'Value' => '',
            'Label' => 'Oct',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        475 => 
        array (
            'field_setID' => 'sdfx of Staff Trained in Essential Newborn Care',
            'field_ID' => 'ztofStaffTrainedinEssentialNewbornCare1',
            'Value' => '',
            'Label' => '# of Staff Trained in Essential Newborn Care',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        476 => 
        array (
            'field_setID' => 'sdfx of Staff Trained in Focused Antenatal Care',
            'field_ID' => 'ztofStaffTrainedinFocusedAntenatalCare1',
            'Value' => '',
            'Label' => '# of Staff Trained in Focused Antenatal Care',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        477 => 
        array (
            'field_setID' => 'sdfx of Staff Trained in Post Natal Care',
            'field_ID' => 'ztofStaffTrainedinPostNatalCare1',
            'Value' => '',
            'Label' => '# of Staff Trained in Post Natal Care',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        478 => 
        array (
            'field_setID' => 'sdfxontracknotontrack',
            'field_ID' => 'ztontracknotontrack1',
            'Value' => '1',
            'Label' => 'On Track',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        479 => 
        array (
            'field_setID' => 'sdfxontracknotontrack',
            'field_ID' => 'ztontracknotontrack2',
            'Value' => '2',
            'Label' => 'Not On Track',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        480 => 
        array (
            'field_setID' => 'sdfxOPD_MCH_USClinic_Ward_Other',
            'field_ID' => 'ztOPD_MCH_USClinic_Ward_Other1',
            'Value' => '1',
            'Label' => 'OPD',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        481 => 
        array (
            'field_setID' => 'sdfxOPD_MCH_USClinic_Ward_Other',
            'field_ID' => 'ztOPD_MCH_USClinic_Ward_Other2',
            'Value' => '2',
            'Label' => 'MCH',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        482 => 
        array (
            'field_setID' => 'sdfxOPD_MCH_USClinic_Ward_Other',
            'field_ID' => 'ztOPD_MCH_USClinic_Ward_Other3',
            'Value' => '3',
            'Label' => 'US Clinic',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        483 => 
        array (
            'field_setID' => 'sdfxOPD_MCH_USClinic_Ward_Other',
            'field_ID' => 'ztOPD_MCH_USClinic_Ward_Other4',
            'Value' => '4',
            'Label' => 'Ward',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        484 => 
        array (
            'field_setID' => 'sdfxOPD_MCH_USClinic_Ward_Other',
            'field_ID' => 'ztOPD_MCH_USClinic_Ward_Other5',
            'Value' => '5',
            'Label' => 'Other',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        485 => 
        array (
            'field_setID' => 'sdfxOral Hormonal Contraceptives',
            'field_ID' => 'ztOralHormonal Contraceptives1',
            'Value' => '',
            'Label' => 'Oral Hormonal Contraceptives',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        486 => 
        array (
            'field_setID' => 'sdfxordered_notordered_expired',
            'field_ID' => 'ztordered_notordered_expired1',
            'Value' => '1',
            'Label' => 'Not Ordered',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        487 => 
        array (
            'field_setID' => 'sdfxordered_notordered_expired',
            'field_ID' => 'ztordered_notordered_expired2',
            'Value' => '2',
            'Label' => 'Ordered but not yet received',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        488 => 
        array (
            'field_setID' => 'sdfxordered_notordered_expired',
            'field_ID' => 'ztordered_notordered_expired3',
            'Value' => '3',
            'Label' => 'Expired',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        489 => 
        array (
            'field_setID' => 'sdfxORSZincCo-pack',
            'field_ID' => 'ztORS& Zinc Co-pack1',
            'Value' => '',
            'Label' => 'ORS & Zinc Co-pack',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        490 => 
        array (
            'field_setID' => 'sdfxORS_Zinc',
            'field_ID' => 'ztORS_Zinc1',
            'Value' => '',
            'Label' => 'Treatment  with ORS + Zinc
(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+ antibiotics, ORS+zinc+metronidazole + ORS+Zinc+Others )',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        491 => 
        array (
            'field_setID' => 'sdfxort',
            'field_ID' => 'ztort1',
            'Value' => '',
        'Label' => 'ORT corner register (improvised)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        492 => 
        array (
            'field_setID' => 'sdfxORTCorner',
            'field_ID' => 'ztORTCorner1',
            'Value' => '',
            'Label' => 'ORT Corner Functionality',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        493 => 
        array (
            'field_setID' => 'sdfxORTCorner2',
            'field_ID' => 'ztORTCorner21',
            'Value' => '',
            'Label' => 'ORT Corner Functionality',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        494 => 
        array (
            'field_setID' => 'sdfxort moh',
            'field_ID' => 'ztortmoh1',
            'Value' => '',
        'Label' => 'ORT Corner register (MOH)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        495 => 
        array (
            'field_setID' => 'sdfxortuptodate',
            'field_ID' => 'ztortuptodate1',
            'Value' => '',
        'Label' => '(B) Is the ORT register up to date (Including zero-reporting)',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        496 => 
        array (
            'field_setID' => 'sdfxother',
            'field_ID' => 'ztother1',
            'Value' => '',
            'Label' => 'other',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        497 => 
        array (
            'field_setID' => 'sdfxOthers',
            'field_ID' => 'ztOthers1',
            'Value' => '',
            'Label' => 'Others',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        498 => 
        array (
            'field_setID' => 'sdfxown_initiative',
            'field_ID' => 'ztown_ini1',
            'Value' => '3',
            'Label' => 'Own Initiative',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
        499 => 
        array (
            'field_setID' => 'sdfxOxygen',
            'field_ID' => 'ztOxygen1',
            'Value' => '',
            'Label' => 'Oxygen',
            'created_at' => '2016-03-04 08:55:20',
            'updated_at' => '0000-00-00 00:00:00',
            'deleted_at' => NULL,
        ),
    ));
        \DB::table('fields')->insert(array (
            0 => 
            array (
                'field_setID' => 'sdfxOxytocin',
                'field_ID' => 'ztOxytocin1',
                'Value' => '',
                'Label' => 'Oxytocin',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'field_setID' => 'sdfxpalmorpallor',
                'field_ID' => 'ztpalmorpallor1',
                'Value' => '1',
                'Label' => 'Severe palmor pallor',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'field_setID' => 'sdfxpalmorpallor',
                'field_ID' => 'ztpalmorpallor2',
                'Value' => '2',
                'Label' => 'Some palmor pallor',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'field_setID' => 'sdfxpalmorpallor',
                'field_ID' => 'ztpalmorpallor3',
                'Value' => '3',
                'Label' => 'No palmor pallor',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'field_setID' => 'sdfxpartner',
                'field_ID' => 'ztpartner1',
                'Value' => '4',
                'Label' => 'Partner',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'field_setID' => 'sdfxPatpurch_Facpurch_Facrece_Procond_Procondwo',
                'field_ID' => 'ztPatpurch_Facpurch_Facrece_Procond_Procondwo1',
                'Value' => '',
                'Label' => 'Patient purchased the commodity privately',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'field_setID' => 'sdfxPatpurch_Facpurch_Facrece_Procond_Procondwo',
                'field_ID' => 'ztPatpurch_Facpurch_Facrece_Procond_Procondwo2',
                'Value' => '',
                'Label' => 'Facility purchased the commodity privately',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'field_setID' => 'sdfxPatpurch_Facpurch_Facrece_Procond_Procondwo',
                'field_ID' => 'ztPatpurch_Facpurch_Facrece_Procond_Procondwo3',
                'Value' => '',
                'Label' => 'Facility received the commodity from another facility',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'field_setID' => 'sdfxPatpurch_Facpurch_Facrece_Procond_Procondwo',
                'field_ID' => 'ztPatpurch_Facpurch_Facrece_Procond_Procondwo4',
                'Value' => '',
            'Label' => 'The procedure was not conducted (Case Referred)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'field_setID' => 'sdfxPatpurch_Facpurch_Facrece_Procond_Procondwo',
                'field_ID' => 'ztPatpurch_Facpurch_Facrece_Procond_Procondwo5',
                'Value' => '',
                'Label' => 'The procedure was conducted without the commodity',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'field_setID' => 'sdfxperminute',
                'field_ID' => 'ztperminute1',
                'Value' => '',
                'Label' => 'per minute',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'field_setID' => 'sdfxPersonalnumber',
                'field_ID' => 'ztPersonalnumber1',
                'Value' => '',
                'Label' => 'Personal Number',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'field_setID' => 'sdfxpersonalnumtxt',
                'field_ID' => 'ztpersonalnumtxt1',
                'Value' => '',
                'Label' => 'Enter Personal Number',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'field_setID' => 'sdfxPhoneNumber',
                'field_ID' => 'ztPhoneNumber1',
                'Value' => '',
                'Label' => 'Phone Number',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'field_setID' => 'sdfxPneumonia',
                'field_ID' => 'ztPneumonia1',
                'Value' => '',
                'Label' => 'Pneumonia',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'field_setID' => 'sdfxpositivenegative',
                'field_ID' => 'ztpositivenegative1',
                'Value' => '1',
                'Label' => 'Positive',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'field_setID' => 'sdfxpositivenegative',
                'field_ID' => 'ztpositivenegative2',
                'Value' => '2',
                'Label' => 'Negative',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'field_setID' => 'sdfxpregCasesRefCHV',
                'field_ID' => 'ztpregCasesRefCHV1',
                'Value' => '',
            'Label' => 'Total number of Pregnant Cases reffered by CHVs to a health facility for Skilled Birth Attendant (SBA) for the past 3 months',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'field_setID' => 'sdfxpresentingcomplaints',
                'field_ID' => 'ztpresentingcomplaints1',
                'Value' => '',
                'Label' => 'Presenting Complaints',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'field_setID' => 'sdfxpresentingcomplaintstxt',
                'field_ID' => 'ztpresentingcomplaintstxt1',
                'Value' => '',
                'Label' => 'Enter Complaints',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'field_setID' => 'sdfxpres_notpres',
                'field_ID' => 'ztpres_notpres1',
                'Value' => '1',
                'Label' => 'present',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'field_setID' => 'sdfxpres_notpres',
                'field_ID' => 'ztpres_notpres2',
                'Value' => '2',
                'Label' => 'not present',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'field_setID' => 'sdfxprivately_supplied',
                'field_ID' => 'ztprivately_supplied1',
                'Value' => '',
                'Label' => 'Privately Supplied',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'field_setID' => 'sdfxprovisionforwaste',
                'field_ID' => 'ztprovisionforwaste1',
                'Value' => '',
                'Label' => 'Provision for Waste Disposal',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'field_setID' => 'sdfxQuestion',
                'field_ID' => 'ztQuestion1',
                'Value' => '',
                'Label' => 'Question',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'field_setID' => 'sdfxquestion_where_sick_children_seen',
                'field_ID' => 'ztquestion_where_sick_children_seen_1',
                'Value' => '',
                'Label' => 'Where are sick children seen?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'field_setID' => 'sdfxq_a_upadted charts',
                'field_ID' => 'ztq_a1',
                'Value' => '',
                'Label' => 'A. Does the facility have updated 2012 IMCI guidelines/chart booklets?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'field_setID' => 'sdfxq_a_correctclassification',
                'field_ID' => 'ztq_a_correctclassification1',
                'Value' => '',
            'Label' => ' (A)Correct Classification',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'field_setID' => 'sdfxq_a_diarrhoea',
                'field_ID' => 'ztq_a_diarrhoea1',
                'Value' => '',
            'Label' => ' (A) Ask about the duration of diarrhoea',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'field_setID' => 'sdfxq_a_duration',
                'field_ID' => 'ztq_a_duration1',
                'Value' => '',
            'Label' => '(A) Ask about the duration',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'field_setID' => 'sdfxq_a_earpain',
                'field_ID' => 'ztq_a_earpain1',
                'Value' => '',
            'Label' => ' (A) Ask about presence of ear pain',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'field_setID' => 'sdfxq_a_eyedicharge',
                'field_ID' => 'ztq_a_eyedicharge1',
                'Value' => '',
            'Label' => ' (A)Look for eye discharge',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'field_setID' => 'sdfxq_a_howlong',
                'field_ID' => 'ztq_a_howlong1',
                'Value' => '',
            'Label' => '(A) Asked how long the child had the cough',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'field_setID' => 'sdfxq_a_yellowskin',
                'field_ID' => 'ztq_a_yellowskin1',
                'Value' => '',
            'Label' => ' (A)Look for yellow discolouration of the skin including the soles and palms',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'field_setID' => 'sdfxq_i_breathcounts',
                'field_ID' => 'ztq_breathcounts1',
                'Value' => '',
            'Label' => ' (I)Breath counts per minute',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'field_setID' => 'sdfxq_b_bloodinstool',
                'field_ID' => 'ztq_b_bloodinstool1',
                'Value' => '',
            'Label' => ' (B) Ask about the prescence of blood in stool',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'field_setID' => 'sdfxq_b_centralcyanosis',
                'field_ID' => 'ztq_b_centralcyanosis1',
                'Value' => '',
            'Label' => ' (B)Look For Central Cyanosis',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'field_setID' => 'sdfxq_b_countstaken',
                'field_ID' => 'ztq_b_countstaken1',
                'Value' => '',
            'Label' => '(B) Breath counts taken and recorded',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'field_setID' => 'sdfxq_b_durationdiscolor',
                'field_ID' => 'ztq_b_durationdiscolor1',
                'Value' => '',
            'Label' => ' (B)Asked for duration of the discolouration',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'field_setID' => 'sdfxq_b_durationeyedischarge',
                'field_ID' => 'ztq_b_durationeyedischarge1',
                'Value' => '',
            'Label' => ' (B)Asked for duration of eye discharge',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'field_setID' => 'sdfxq_b_eardischarge',
                'field_ID' => 'ztq_b_eardischarge1',
                'Value' => '',
            'Label' => ' (B) Asked if there is ear discharge',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'field_setID' => 'sdfxq_b_historyoftravel',
                'field_ID' => 'ztq_b_historyoftravel1',
                'Value' => '',
            'Label' => '(B) Ask about history of Travel within the past month',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'field_setID' => 'sdfxq_f_classificationdone',
                'field_ID' => 'ztq_classificationdone1',
                'Value' => '',
            'Label' => '(F) Classification Done',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'field_setID' => 'sdfxq_c_checkeyepus',
                'field_ID' => 'ztq_c_checkeyepus1',
                'Value' => '',
            'Label' => ' (C)Asked and checked if eye is draining pus',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'field_setID' => 'sdfxq_c_chestindrawing',
                'field_ID' => 'ztq_c_chestindrawing1',
                'Value' => '',
            'Label' => '(C) Looked for chest indrawing',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'field_setID' => 'sdfxq_c_classificationdone',
                'field_ID' => 'ztq_c_classificationdone1',
                'Value' => '',
            'Label' => ' (C)Classification Done',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'field_setID' => 'sdfxq_c_duration_of_discharge',
                'field_ID' => 'ztq_c_duration_of_discharge1',
                'Value' => '',
            'Label' => ' (C) Asked for duration of discharge from ear',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'field_setID' => 'sdfxq_c_fontanelle',
                'field_ID' => 'ztq_c_fontanelle1',
                'Value' => '',
            'Label' => ' (C)Look for Bulging Fontanelle',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'field_setID' => 'sdfxq_c_iccm',
                'field_ID' => 'ztq_c_iccm1',
                'Value' => '',
            'Label' => ' C. Does the facility have updated Integrated Community Case Management/Community IMCI (ICCM) guidelines?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'field_setID' => 'sdfxq_c_lethurgic',
                'field_ID' => 'ztq_c_lethurgic1',
                'Value' => '',
            'Label' => ' (C) Check if infant is lethurgic and unconscious',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'field_setID' => 'sdfxq_c_temperature',
                'field_ID' => 'ztq_c_temperature1',
                'Value' => '',
            'Label' => ' (C) Temperature taken and recorded',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'field_setID' => 'sdfxq_d_correctclassification',
                'field_ID' => 'ztq_d_correctclassification1',
                'Value' => '',
            'Label' => ' (D)Correct Classification',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'field_setID' => 'sdfxq_d_eyeswollen',
                'field_ID' => 'ztq_d_eyeswollen1',
                'Value' => '',
            'Label' => ' (D)Asked and checked if eyes are swollen',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'field_setID' => 'sdfxq_d_protocol',
                'field_ID' => 'ztq_d_protocol1',
                'Value' => '',
                'Label' => ' D. Does the facility have an updated Paediatric Protocol 2010/2013?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'field_setID' => 'sdfxq_d_pus',
                'field_ID' => 'ztq_d_pus1',
                'Value' => '',
            'Label' => ' (D) Look for pus draining from ear',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'field_setID' => 'sdfxq_d_restless',
                'field_ID' => 'ztq_d_restless1',
                'Value' => '',
            'Label' => ' (D) Check if the infant is restless and irritable',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'field_setID' => 'sdfxq_d_signsmeasles',
                'field_ID' => 'ztq_d_signsmeasles1',
                'Value' => '',
            'Label' => '(D) Look for signs of measles',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'field_setID' => 'sdfxq_d_stridor',
                'field_ID' => 'ztq_d_stridor1',
                'Value' => '',
            'Label' => ' (D) Looked and listened for stridor',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'field_setID' => 'sdfxq_e_diarhoea',
                'field_ID' => 'ztq_e_diarhoea1',
                'Value' => '',
                'Label' => ' E. Does the facility have an updated Diarrhoea management job aid 2014?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'field_setID' => 'sdfxq_e_malaria',
                'field_ID' => 'ztq_e_malaria1',
                'Value' => '',
            'Label' => ' (E) Malaria blood tested',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'field_setID' => 'sdfxq_e_skinpustules',
                'field_ID' => 'ztq_e_skinpustules1',
                'Value' => '',
            'Label' => ' (E)Look for Skin Pustules',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'field_setID' => 'sdfxq_e_sunkeneyes',
                'field_ID' => 'ztq_e_sunkeneyes1',
                'Value' => '',
            'Label' => ' (E) Look for sunken eyes',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'field_setID' => 'sdfxq_e_tenderswelling',
                'field_ID' => 'ztq_e_tenderswelling1',
                'Value' => '',
            'Label' => ' (E) Felt for tender swelling behind the ear',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'field_setID' => 'sdfxq_e_wheeze',
                'field_ID' => 'ztq_e_wheeze1',
                'Value' => '',
            'Label' => ' (E) Looked and listened for a wheeze',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'field_setID' => 'sdfxq_e_whitespots',
                'field_ID' => 'ztq_e_whitespots1',
                'Value' => '',
            'Label' => ' (E)Asked snd checked if there are white spots in the pupil',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'field_setID' => 'sdfxq_f_convulsions',
                'field_ID' => 'ztq_f_convulsions1',
                'Value' => '',
            'Label' => ' (F)Asked if the infant has had convulsions',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'field_setID' => 'sdfxq_f_crosseyes',
                'field_ID' => 'ztq_f_crosseyes1',
                'Value' => '',
            'Label' => ' (F)Asked and looked if the infant has crossed eyes',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'field_setID' => 'sdfxq_f_iec',
                'field_ID' => 'ztq_f_iec1',
                'Value' => '',
                'Label' => ' F. Does the facility have updated IEC materials for categories?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'field_setID' => 'sdfxq_f_malariatest',
                'field_ID' => 'ztq_f_malariatest1',
                'Value' => '',
            'Label' => ' (F) If malaria test not taken, give reason',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'field_setID' => 'sdfxq_f_skinpinch',
                'field_ID' => 'ztq_f_skinpinch1',
                'Value' => '',
            'Label' => ' (F) Perform skin pinch',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'field_setID' => 'sdfxq_g_art',
                'field_ID' => 'ztq_g_art1',
                'Value' => '',
                'Label' => ' G. Does the facility have updated ART guidelines 2012?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'field_setID' => 'sdfxq_g_breastfeed',
                'field_ID' => 'ztq_g_breastfeed1',
                'Value' => '',
            'Label' => ' (G)Asked and looked if the infant is able to breastfeed',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'field_setID' => 'sdfxq_g_classifydiarrhoea',
                'field_ID' => 'ztq_g_classifydiarrhoea1',
                'Value' => '',
            'Label' => ' (G) Correctly assess and classify diarrhoea and dehydration',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'field_setID' => 'sdfxq_g_cornea',
                'field_ID' => 'ztq_g_cornea1',
                'Value' => '',
            'Label' => ' (G)Checked if there is clouding of the cornea',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'field_setID' => 'sdfxq_g_correctclassification',
                'field_ID' => 'ztq_g_correct Classification1',
                'Value' => '',
            'Label' => '(G) Correct Classification',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'field_setID' => 'sdfxq_g_stiffness',
                'field_ID' => 'ztq_g_stiffness1',
                'Value' => '',
            'Label' => ' (G) Check for neck stiffness',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'field_setID' => 'sdfxq_h_algorithm',
                'field_ID' => 'ztq_h_algorithm1',
                'Value' => '',
                'Label' => ' H. Does the facility have an updated Early Infant Diagnosis Algorithm 2009/2012/2014?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'field_setID' => 'sdfxq_h_classificationdone',
                'field_ID' => 'ztq_h_classificationdone1',
                'Value' => '',
            'Label' => ' (H) Classification Done',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'field_setID' => 'sdfxq_h_fearoflight',
                'field_ID' => 'ztq_h_fearoflight1',
                'Value' => '',
            'Label' => ' (H)Asked and checked for fear of light',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'field_setID' => 'sdfxq_h_notbreathing',
                'field_ID' => 'ztq_h_notbreathing1',
                'Value' => '',
            'Label' => ' (H)Look if the baby is gasping or not breathing when stimulated',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'field_setID' => 'sdfxq_i_correctclassification',
                'field_ID' => 'ztq_i_correctclassification1',
                'Value' => '',
            'Label' => ' (I) Correct Classification',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'field_setID' => 'sdfxq_i_feartearing',
                'field_ID' => 'ztq_i_feartearing1',
                'Value' => '',
            'Label' => ' (I)Ask and checked for fear excessive tearing',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'field_setID' => 'sdfxq_j_chestindrawing',
                'field_ID' => 'ztq_j_chestindrawing1',
                'Value' => '',
            'Label' => ' (J)Look for severe chest in-drawing',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'field_setID' => 'sdfxq_j_squeezingeyes',
                'field_ID' => 'ztq_j_squeezingeyes1',
                'Value' => '',
            'Label' => ' (J)Look for squeezing of the eyes',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'field_setID' => 'sdfxq_k_grunting',
                'field_ID' => 'ztq_k_grunting1',
                'Value' => '',
            'Label' => ' (K)Look and listen for grunting',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'field_setID' => 'sdfxq_k_redeyes',
                'field_ID' => 'ztq_k_redeyes1',
                'Value' => '',
            'Label' => '(K)Look for red eyes',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'field_setID' => 'sdfxq_lessthan2months',
                'field_ID' => 'ztq_lessthan2months1',
                'Value' => '',
                'Label' => 'Is child less than 2 months?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'field_setID' => 'sdfxq_l_correctlyassessess',
                'field_ID' => 'ztq_l_correctlyassessess1',
                'Value' => '',
            'Label' => ' (L)Correctly assesses and classifies',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'field_setID' => 'sdfxq_l_wheeezing',
                'field_ID' => 'ztq_l_wheeezing1',
                'Value' => '',
            'Label' => ' (L)Look and listen for wheezing',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'field_setID' => 'sdfxq_m_correctclassification',
                'field_ID' => 'ztq_m_correctclassification1',
                'Value' => '',
            'Label' => ' (M)Correct classification done',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'field_setID' => 'sdfxq_m_nasalflaring',
                'field_ID' => 'ztq_m_nasalflaring1',
                'Value' => '',
            'Label' => ' (M)Look and listen for nasal flaring',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'field_setID' => 'sdfxq_n_redumbilicus',
                'field_ID' => 'ztq_n_redumbilicus1',
                'Value' => '',
            'Label' => ' (N)Look for red umblilicus',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'field_setID' => 'sdfxq_b_ort',
                'field_ID' => 'ztq_ort_guidelines1',
                'Value' => '',
                'Label' => ' B. Does the facility have updated ORT guidelines?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'field_setID' => 'sdfxq_o_umbilicuspus',
                'field_ID' => 'ztq_o_umbilicuspus1',
                'Value' => '',
            'Label' => ' (O)Look for umbilcus draining pus',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'field_setID' => 'sdfxq_p_checkfever',
                'field_ID' => 'ztq_p_checkfever1',
                'Value' => '',
            'Label' => ' (P)Checks for fever(> 37.5C or feels hot)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'field_setID' => 'sdfxq_q_lowbodytemp',
                'field_ID' => 'ztq_q_lowbodytemp1',
                'Value' => '',
            'Label' => ' (Q)Checks Low body temperature ( <35.5C)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'field_setID' => 'sdfxq_r_checkdrowsy',
                'field_ID' => 'ztq_r_checkdrowsy1',
                'Value' => '',
            'Label' => ' (R) Checks if the Infant is drowsy(lethargic) or unconscious',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'field_setID' => 'sdfxq_s_ifantmovement',
                'field_ID' => 'ztq_s_ifantmovement1',
                'Value' => '',
            'Label' => ' (S)Looks if the infant has no movements even when stimulated',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'field_setID' => 'sdfxq_t_highpitched',
                'field_ID' => 'ztq_t_highpitched1',
                'Value' => '',
            'Label' => ' (T)Listen for high pitched cry',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'field_setID' => 'sdfxq_u_checkstiff',
                'field_ID' => 'ztq_u_checkstiff1',
                'Value' => '',
            'Label' => ' (U)Checks for stiff neck',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'field_setID' => 'sdfxq_v_correctlyassess',
                'field_ID' => 'ztq_v_correctlyassess1',
                'Value' => '',
            'Label' => ' (V)Correctly assesses and classifies',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'field_setID' => 'sdfxq_w_corectclassification',
                'field_ID' => 'ztq_w_corectclassification1',
                'Value' => '',
            'Label' => ' (W)Correct Classification',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'field_setID' => 'sdfxRapidTest',
                'field_ID' => 'ztRapidTest1',
                'Value' => '',
                'Label' => 'Rapid Testing Kits for HIV',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'field_setID' => 'sdfxrco_label',
                'field_ID' => 'ztrco_label',
                'Value' => '',
                'Label' => 'R.C.O.',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'field_setID' => 'sdfxRDTstrips',
                'field_ID' => 'ztRDTstrips1',
                'Value' => '',
                'Label' => 'RDT strips and reagent for malaria',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'field_setID' => 'sdfxreasontxt',
                'field_ID' => 'ztreasontxt1',
                'Value' => '',
                'Label' => 'Enter Reason',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'field_setID' => 'sdfxref_slip',
                'field_ID' => 'ztref_slip1',
                'Value' => '',
                'Label' => 'Referal Slips',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'field_setID' => 'sdfxreg',
                'field_ID' => 'ztreg1',
                'Value' => '',
                'Label' => 'Under 5 register',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'field_setID' => 'sdfxRESOMAL',
                'field_ID' => 'ztRESOMAL1',
                'Value' => '',
                'Label' => 'RESOMAL',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'field_setID' => 'sdfxresourcename',
                'field_ID' => 'ztresourcename1',
                'Value' => '',
                'Label' => 'Resource Name',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'field_setID' => 'sdfxresponse',
                'field_ID' => 'ztresponse1',
                'Value' => '',
                'Label' => 'Response',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'field_setID' => 'sdfxRiverStream_Borehole_Piped_WaterTruck_Other',
                'field_ID' => 'ztrivBorePipWatTrOther1',
                'Value' => '1',
                'Label' => 'River/Stream',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'field_setID' => 'sdfxRiverStream_Borehole_Piped_WaterTruck_Other',
                'field_ID' => 'ztRiverStream_Borehole_Piped_WaterTruck_Other2',
                'Value' => '2',
                'Label' => 'Borehole',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'field_setID' => 'sdfxRiverStream_Borehole_Piped_WaterTruck_Other',
                'field_ID' => 'ztRiverStream_Borehole_Piped_WaterTruck_Other3',
                'Value' => '3',
                'Label' => 'Piped',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'field_setID' => 'sdfxRiverStream_Borehole_Piped_WaterTruck_Other',
                'field_ID' => 'ztRiverStream_Borehole_Piped_WaterTruck_Other4',
                'Value' => '4',
                'Label' => 'WaterTruck',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'field_setID' => 'sdfxRotaVirusVaccine',
                'field_ID' => 'ztRotaVirusVaccine1',
                'Value' => '',
                'Label' => 'Rota Virus Vaccine',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'field_setID' => 'sdfxsafewatersource',
                'field_ID' => 'ztsafewatersource1',
                'Value' => '',
                'Label' => 'Safe Water  Source',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'field_setID' => 'sdfxselectfindings',
                'field_ID' => 'ztselectfindings1',
                'Value' => '1',
                'Label' => 'Very Severe diesease or local bacterial infection unlikely',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'field_setID' => 'sdfxselectfindings',
                'field_ID' => 'ztselectfindings2',
                'Value' => '2',
                'Label' => 'Local Bacterial Infection',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'field_setID' => 'sdfxselectfindings',
                'field_ID' => 'ztselectfindings3',
                'Value' => '3',
                'Label' => 'Very severe disease',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'field_setID' => 'sdfxselectfindings_eye',
                'field_ID' => 'ztselectfindings_eye1',
                'Value' => '1',
                'Label' => 'Squint',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'field_setID' => 'sdfxselectfindings_eye',
                'field_ID' => 'ztselectfindings_eye2',
                'Value' => '2',
                'Label' => 'Congenital Cancer of the eye',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'field_setID' => 'sdfxselectfindings_eye',
                'field_ID' => 'ztselectfindings_eye3',
                'Value' => '3',
                'Label' => 'Congenital Glaucoma',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'field_setID' => 'sdfxselectfindings_eye',
                'field_ID' => 'ztselectfindings_eye4',
                'Value' => '4',
                'Label' => 'Severe Eye Infection',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'field_setID' => 'sdfxselectfindings_eye',
                'field_ID' => 'ztselectfindings_eye5',
                'Value' => '5',
                'Label' => 'Eye Infection',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'field_setID' => 'sdfxselectfindings_eye',
                'field_ID' => 'ztselectfindings_eye6',
                'Value' => '6',
                'Label' => 'Congenital condition or eye infection unlikely',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'field_setID' => 'sdfxselfspouse',
                'field_ID' => 'ztselfspouse1',
                'Value' => '1',
                'Label' => 'Self',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'field_setID' => 'sdfxselfspouse',
                'field_ID' => 'ztselfspouse2',
                'Value' => '2',
                'Label' => 'Spouse',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'field_setID' => 'sdfxselfspouse',
                'field_ID' => 'ztselfspouse3',
                'Value' => '3',
                'Label' => 'Relative',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'field_setID' => 'sdfxselfspouse',
                'field_ID' => 'ztselfspouse4',
                'Value' => '4',
                'Label' => 'Friend',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'field_setID' => 'sdfxselfspouse',
                'field_ID' => 'ztselfspouse5',
                'Value' => '5',
                'Label' => 'Community Health Worker',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'field_setID' => 'sdfxselfspouse',
                'field_ID' => 'ztselfspouse6',
                'Value' => '6',
                'Label' => 'Media',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'field_setID' => 'sdfxselfspouse',
                'field_ID' => 'ztselfspouse7',
                'Value' => '7',
                'Label' => 'Other',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'field_setID' => 'sdfxsep',
                'field_ID' => 'ztsep1',
                'Value' => '',
                'Label' => 'Sep',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'field_setID' => 'sdfxservice',
                'field_ID' => 'ztservice1',
                'Value' => '',
                'Label' => 'SERVICE',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'field_setID' => 'sdfxserviceunittxt',
                'field_ID' => 'ztserviceunittxt1',
                'Value' => '',
                'Label' => 'Enter Service Unit',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'field_setID' => 'sdfxsname',
                'field_ID' => 'ztsname1',
                'Value' => '',
                'Label' => 'Surname',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'field_setID' => 'sdfxsnametxt',
                'field_ID' => 'ztsnametxt1',
                'Value' => '',
                'Label' => 'Enter Surname',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'field_setID' => 'sdfxSpacer',
                'field_ID' => 'ztSpacer1',
                'Value' => '',
                'Label' => 'Spacer',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'field_setID' => 'sdfxspecifystorage',
                'field_ID' => 'ztspecifystorage1',
                'Value' => '',
                'Label' => 'Specify Water Storage',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'field_setID' => 'sdfxStaff Members Trained in BEmONC still Working',
                'field_ID' => 'ztStaffMembers Trained in BEmONC still Working1',
                'Value' => '',
                'Label' => 'How Many of the Total Staff Members Trained in BEmONC are still Working in the Maternity/ MCH/ Gynae',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'field_setID' => 'sdfxSTAFF MEMBERS TRAINED',
                'field_ID' => 'ztSTAFFMEMBERS TRAINED1',
                'Value' => '',
                'Label' => 'HOW MANY STAFF MEMBERS HAVE BEEN TRAINED IN THE FOLLOWING?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'field_setID' => 'sdfxStaff Trained in BEmONC',
                'field_ID' => 'ztStaffTrained in BEmONC1',
                'Value' => '',
            'Label' => '# of Staff Trained in Basic Emergency Obstetric Neonatal Care(BEmONC)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'field_setID' => 'sdfxStaff Trained in PP IUCD',
                'field_ID' => 'ztStaffTrained in PP IUCD1',
                'Value' => '',
                'Label' => '# of Staff Trained in PP IUCD',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'field_setID' => 'sdfx Staff Trained in SBM-R',
                'field_ID' => 'ztStaffTrained in SBM-R1',
                'Value' => '',
            'Label' => '# of Staff Trained in Standards Based Management and Recognition(SBM-R)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'field_setID' => 'sdfxStaff Trained in Uterine Balloon Tamponade',
                'field_ID' => 'ztStaffTrained in Uterine Balloon Tamponade1',
                'Value' => '',
                'Label' => '# of Staff Trained in Uterine Balloon Tamponade',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'field_setID' => 'sdfxstaff_EID_sampling',
                'field_ID' => 'ztstaff_EID_sampling_1',
                'Value' => '',
                'Label' => 'Number of staff trained in EID sample collection training',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'field_setID' => 'sdfxstaff_IMCI_work_CH_UNIT',
                'field_ID' => 'ztstaff_IMCI_work_CH_UNIT1',
                'Value' => '',
                'Label' => 'How many of the total staff members trained in IMCI are still working in Child Health Unit ',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'field_setID' => 'sdfxstaff_pneumonia_diarrhoea_under_5',
                'field_ID' => 'ztstaff_pneumonia_diarrhoea_under_5_1',
                'Value' => '',
                'Label' => 'Number of staff trained diarrhoea and pneumonia CMEs for U5s ',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'field_setID' => 'sdfxstaff_trained_Diarrhoea',
                'field_ID' => 'ztstaff_trained_Diarrhoea1',
                'Value' => '',
                'Label' => 'Number of staff trained in enhanced diarrhoea management ',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'field_setID' => 'sdfxstaff_trained_ICCM',
                'field_ID' => 'ztstaff_trained_ICCM1',
                'Value' => '',
                'Label' => 'No of staff trained in ICCM',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'field_setID' => 'sdfxstaff_trained_IMCI',
                'field_ID' => 'ztstaff_trained_IMCI_1',
                'Value' => '',
                'Label' => 'No of staff trained in IMCI',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'field_setID' => 'sdfxstorageofwater',
                'field_ID' => 'ztstorageofwater1',
                'Value' => '',
            'Label' => 'Do you have storage of water (if yes, please specify)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'field_setID' => 'sdfxSuctionmachine',
                'field_ID' => 'ztSuctionmachine1',
                'Value' => '',
                'Label' => 'Suction machine',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'field_setID' => 'sdfxSuctiontube',
                'field_ID' => 'ztSuctiontube1',
                'Value' => '',
                'Label' => 'Suction tube',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'field_setID' => 'sdfxSulphadoxinePyrimethamine',
                'field_ID' => 'ztSulphadoxinePyrimethamine1',
                'Value' => '',
                'Label' => 'Sulphadoxine+Pyrimethamine',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'field_setID' => 'sdfxsuppliername',
                'field_ID' => 'ztsuppliername1',
                'Value' => '',
                'Label' => 'Supplier\'s Name',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'field_setID' => 'sdfxsuppliers',
                'field_ID' => 'ztsuppliers1',
                'Value' => '1',
                'Label' => 'Central/County Government',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'field_setID' => 'sdfxsuppliers',
                'field_ID' => 'ztsuppliers2',
                'Value' => '2',
                'Label' => 'Private Suppliers',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'field_setID' => 'sdfxsuppliers',
                'field_ID' => 'ztsuppliers3',
                'Value' => '3',
                'Label' => 'Own Initiative',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'field_setID' => 'sdfxsuppliers',
                'field_ID' => 'ztsuppliers4',
                'Value' => '4',
                'Label' => 'Partner',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'field_setID' => 'sdfxsuppliers',
                'field_ID' => 'ztsuppliers5',
                'Value' => '5',
                'Label' => 'Not Applicable',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'field_setID' => 'sdfxsymptom_check',
                'field_ID' => 'ztsymptom_check1',
                'Value' => '',
                'Label' => 'Does the child have the Symptom Below?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'field_setID' => 'sdfxsypmtom',
                'field_ID' => 'ztsypmtom1',
                'Value' => '',
                'Label' => 'SYMPTOM',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'field_setID' => 'sdfxSyrupAmoxicillin',
                'field_ID' => 'ztSyrupAmoxicillin1',
                'Value' => '',
                'Label' => 'Syrup Amoxicillin',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'field_setID' => 'sdfxSyrupCotrimoxazole',
                'field_ID' => 'ztSyrupCotrimoxazole1',
                'Value' => '',
                'Label' => 'Syrup Cotrimoxazole',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'field_setID' => 'sdfxSyrupMetronidazole',
                'field_ID' => 'ztSyrupMetronidazole1',
                'Value' => '',
                'Label' => 'Syrup Metronidazole',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'field_setID' => 'sdfxTabletPaedCotrimoxazole',
                'field_ID' => 'ztTabletPaed Cotrimoxazole1',
                'Value' => '',
                'Label' => 'Tablet Paed Cotrimoxazole',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'field_setID' => 'sdfxTeam-Lead',
                'field_ID' => 'ztTeam-Lead1',
                'Value' => '',
                'Label' => 'Team lead',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'field_setID' => 'sdfxtoothed',
                'field_ID' => 'zttoothed1',
                'Value' => '',
                'Label' => 'Toothed Dissecting Forceps 6"',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'field_setID' => 'sdfxtotal',
                'field_ID' => 'zttotal1',
                'Value' => '',
                'Label' => 'Total',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'field_setID' => 'sdfxTotalCasesinORTCornerRegister',
                'field_ID' => 'ztTotalCasesinORTCornerRegister1',
                'Value' => '',
                'Label' => 'Total number of cases documented in ORT Corner Register',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'field_setID' => 'sdfxtotal_avail_duty',
                'field_ID' => 'zttotal_avail_duty1',
                'Value' => '',
                'Label' => 'Total available on duty',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'field_setID' => 'sdfxtotal_in_facility',
                'field_ID' => 'zttotal_in_facility1',
                'Value' => '',
                'Label' => 'Total in facility',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'field_setID' => 'sdfxTotal_number_of_cases_documented',
                'field_ID' => 'ztTotal_number_of_cases_documented1',
                'Value' => '',
                'Label' => 'Total number of cases documented in ORT Corner Register',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'field_setID' => 'sdfxTotal_Number_of_Diarrhoea_Cases',
                'field_ID' => 'ztTotal_Number_of_Diarrhoea_Cases1',
                'Value' => '',
                'Label' => 'Total Number of Diarrhoea Cases',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'field_setID' => 'sdfxTransferedtoanotherfacilityinthesamecounty',
                'field_ID' => 'ztTransferedto another facility in the same county',
                'Value' => '',
                'Label' => 'Was HCW transfered to another facility in the same county',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'field_setID' => 'sdfxtransferedtoanothercounty',
                'field_ID' => 'zttransferedtoanothercounty1',
                'Value' => '',
                'Label' => 'Transfered to another facility in the another county',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'field_setID' => 'sdfxtravelnotravel',
                'field_ID' => 'zttravelnotravel1',
                'Value' => '1',
                'Label' => 'Travel',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'field_setID' => 'sdfxtravelnotravel',
                'field_ID' => 'zttravelnotravel2',
                'Value' => '2',
                'Label' => 'No Travel',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'field_setID' => 'sdfxtreatment',
                'field_ID' => 'zttreatment1',
                'Value' => '',
                'Label' => 'Treatment *Include all treatments used comma separated without regarding the dosage',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'field_setID' => 'sdfxTreatment_with_Antibiotics',
                'field_ID' => 'ztTreatment_with_Antibiotics1',
                'Value' => '',
                'Label' => 'Treatment with Antibiotics
(Example:Antibiotics+other treatment without zinc or ORS, antibiotics  only)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'field_setID' => 'sdfxtreatment_with_ORS',
                'field_ID' => 'zttreatment_with_ORS1',
                'Value' => '',
                'Label' => 'Treatment with ORS
(Example: ORS only, ORS + antibiotics + ORS+Others)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'field_setID' => 'sdfxTreatment_with_ORSZinc',
                'field_ID' => 'ztTreatment_with_ORSZinc1',
                'Value' => '',
                'Label' => 'Treatment with ORS+ Zinc
(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+
antibiotics, ORS+zinc+metronidazole+ ORS+Zinc+Others )',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'field_setID' => 'sdfxTreatment_with_others',
                'field_ID' => 'ztTreatment_with_others1',
                'Value' => '',
                'Label' => 'Treatment with others
(Example: Others+ vitamin A  only)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'field_setID' => 'sdfxtreatment_with_Zinc',
                'field_ID' => 'zttreatment_with_Zinc1',
                'Value' => '',
                'Label' => 'Treatment  with Zinc
(Example: Zinc only, Zinc + antibiotic, Zinc+Others)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'field_setID' => 'sdfxTV',
                'field_ID' => 'ztTV1',
                'Value' => '',
                'Label' => 'TV',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'field_setID' => 'sdfxUnit',
                'field_ID' => 'ztUnit1',
                'Value' => '',
                'Label' => 'Unit',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'field_setID' => 'sdfxunits_established',
                'field_ID' => 'ztunits_established1',
                'Value' => '',
                'Label' => 'Total number of community units Established and functional',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'field_setID' => 'sdfxuptodateornot',
                'field_ID' => 'ztuptodateornot1',
                'Value' => '1',
                'Label' => 'Up To Date',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'field_setID' => 'sdfxuptodateornot',
                'field_ID' => 'ztuptodateornot2',
                'Value' => '2',
                'Label' => 'Not Up To Date',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'field_setID' => 'sdfxuristicks',
                'field_ID' => 'zturisticks1',
                'Value' => '',
                'Label' => 'Uristicks',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'field_setID' => 'sdfxUseofMCHbooklet',
                'field_ID' => 'ztUseofMCHbooklet1',
                'Value' => '',
            'Label' => '(D) Use of MCH booklet',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'field_setID' => 'sdfxUS_Clinic',
                'field_ID' => 'ztUS_Clinic1',
                'Value' => '',
                'Label' => 'US Clinic',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'field_setID' => 'sdfxVaginalexaminationpack',
                'field_ID' => 'ztVaginalexaminationpack1',
                'Value' => '',
                'Label' => 'Vaginal examination pack',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'field_setID' => 'sdfxverifyort',
                'field_ID' => 'ztverifyort1',
                'Value' => '',
                'Label' => '*Verify this information by looking at the ORT Register and identifying the location of the ORT Corner',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'field_setID' => 'sdfxVitaminA',
                'field_ID' => 'ztVitaminA1',
                'Value' => '',
                'Label' => 'Vitamin A',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'field_setID' => 'sdfxVitaminAd',
                'field_ID' => 'ztVitaminAd1',
                'Value' => '',
            'Label' => '(D) Vitamin A',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'field_setID' => 'sdfxVitamin K',
                'field_ID' => 'ztVitaminK1',
                'Value' => '',
                'Label' => 'Vitamin K',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'field_setID' => 'sdfxward',
                'field_ID' => 'ztward1',
                'Value' => '',
                'Label' => 'ward',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'field_setID' => 'sdfxWascaregiversatisfiedwiththeserviceoffered',
                'field_ID' => 'ztWas caregiver satisfied with the service offered',
                'Value' => '',
                'Label' => 'Was caregiver satisfied with the service offered?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'field_setID' => 'sdfxwastedispose',
                'field_ID' => 'ztwastedispose1',
                'Value' => '',
                'Label' => 'How does this facility dispose of waste?',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'field_setID' => 'sdfxWastePlacIncBurn',
                'field_ID' => 'ztWastePlacIncBurn1',
                'Value' => '',
                'Label' => 'Waste Pit',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'field_setID' => 'sdfxWastePlacIncBurn',
                'field_ID' => 'ztWastePlacIncBurn2',
                'Value' => '',
                'Label' => 'Placenta Pit',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'field_setID' => 'sdfxWastePlacIncBurn',
                'field_ID' => 'ztWastePlacIncBurn3',
                'Value' => '',
                'Label' => 'Incinerator',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'field_setID' => 'sdfxWastePlacIncBurn',
                'field_ID' => 'ztWastePlacIncBurn4',
                'Value' => '',
                'Label' => 'Burning',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'field_setID' => 'sdfxWater for Injection',
                'field_ID' => 'ztWaterfor Injection1',
                'Value' => '',
                'Label' => 'Water for Injection',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'field_setID' => 'sdfxwhenthecommoditywasnot',
                'field_ID' => 'ztwhenthecommoditywasnot1',
                'Value' => '',
            'Label' => 'When the commodity was not available what happened? (Multiple Selections Allowed)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'field_setID' => 'sdfxYearMonthwhentrainedinIMCI',
                'field_ID' => 'ztYearMonthwhen trained in IMCI1',
                'Value' => '',
                'Label' => 'Year/Month when trained in IMCI',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'field_setID' => 'sdfxyear_ch',
                'field_ID' => 'ztyear_ch1',
                'Value' => '1',
                'Label' => '2012',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'field_setID' => 'sdfxyear_ch',
                'field_ID' => 'ztyear_ch2',
                'Value' => '2',
                'Label' => '2013',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'field_setID' => 'sdfxyear_ch',
                'field_ID' => 'ztyear_ch3',
                'Value' => '3',
                'Label' => '2014',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'field_setID' => 'sdfxyear_ch',
                'field_ID' => 'ztyear_ch4',
                'Value' => '4',
                'Label' => '2015',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'field_setID' => 'sdfxyes_no',
                'field_ID' => 'ztyes_no1',
                'Value' => '1',
                'Label' => 'Yes',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'field_setID' => 'sdfxyes_no',
                'field_ID' => 'ztyes_no2',
                'Value' => '2',
                'Label' => 'No',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'field_setID' => 'sdfxym',
                'field_ID' => 'ztym1',
                'Value' => '',
                'Label' => 'Year/Month',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'field_setID' => 'sdfxZidovudine AZT',
                'field_ID' => 'ztZidovudineAZT1',
                'Value' => '',
            'Label' => 'Zidovudine (AZT)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'field_setID' => 'sdfxZincSulphate',
                'field_ID' => 'ztZincSulphate1',
                'Value' => '',
                'Label' => 'Zinc Sulphate',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
                'field_ID' => 'zt_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec11',
                'Value' => '11',
                'Label' => 'nov',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'field_setID' => 'sdfxjan_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_de',
                'field_ID' => 'zt_feb_mar_apr_may_jun_jul_aug_sep_oct_nov_dec12',
                'Value' => '12',
                'Label' => 'dec',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
