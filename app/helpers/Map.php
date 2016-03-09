<?php

namespace App\Helpers;
use App\Tables\Facilities;
use Illuminate\Support\Collection;


class Map{



  public function Assessmentsfilter($collection){
    $Assessment = $collection->filter(function ($item) {
   
    return $item->facility != null;
});

  return  $Assessment->transform(function ($item, $key) {
     return [ 'AssID' => $item->Assessment_ID,
        'FacilityID' => $item->Facility_ID,
        'Survey' => substr($item->Survey,0,-2).' Survey',
        'Term' => $item->Assessment_Term,
        'Assessor' => isset($item->assessor->Name) ? $item->assessor->Name : "",
        'Date' => date_format(date_create($item->Date),'jS F Y'),
        'Facility' => $item->facility->FacilityName,
        'Status' => $item->Status,
        'Bad' => $this->ValidityTest($item->Status)];
          });


  }

  public function CountyFilter($collection){
        
      return  $collection->transform(function ($item, $key) {
      
 return [ 'Name' => $item->facility];
        
          });
  }

  public function ParticipantsFilter($collection){
    

  return  $collection->transform(function ($item, $key) {
     return [ 'AssID' => $item->Assessment_ID,
        'FacilityID' => $item->Facility_ID,
        'Survey' => substr($item->Survey,0,-2).' Survey',
        'Participant' => $item->participant->Name_of_Participant,
        'Assessor' => $item->assessor->Name,
        'Date' => date_format(date_create($item->Date),'jS F Y'),
        'Facility' => $item->facility->FacilityName,
        'Status' => $item->Status,
        'Bad' => $this->ValidityTest($item->Status)];
          });


  }

  public function transform($collection,$map){
  
   return $collection->transform([$this,$map]);
     
  }

 

    public function ParticipantsList($item){
    
        $facilityName = 'Not';
        $facilityCode = 'Not';
        $calcsearch = 's';
      if($item->facility){
        $facilityCode = $item->facility->FacilityCode;
        $facilityName = $item->facility->FacilityName;
      }else{

       $string = str_replace("Dispensary ", "", $item->FacilityName);
        $string = str_replace("Dispensary", "", $string);
        $string = str_replace("dispensary", "", $string);
        $string = str_replace("dispensary ", "", $string);
        $string = str_replace("Medical ", "", $string);
        $string = str_replace("medical", "", $string);
        $string = str_replace("medical ", "", $string);
        $string = str_replace("Medical", "", $string);
        $string = str_replace("Clinic ", "", $string);
        $string = str_replace("clinic ", "", $string);
        $string = str_replace("Clinic", "", $string);
        $string = str_replace("clinic", "", $string);
        $string = str_replace("Centre", "", $string);
        $string = str_replace("Centre ", "", $string);
        $string = str_replace("centre", "", $string);
        $string = str_replace("centre ", "", $string);
        $string = str_replace("Hospital ", "", $string);
        $string = str_replace("hospital ", "", $string);
        $string = str_replace("Hospital", "", $string);
        $string = str_replace("hospital", "", $string);
        $string = str_replace("International ", "", $string);
        $string = str_replace("International", "", $string);
        $string = str_replace("international ", "", $string);
        $string = str_replace("international", "", $string);
        $string = str_replace("Health ", "", $string);
        $string = str_replace("Health", "", $string);
        $string = str_replace("health ", "", $string);
        $string = str_replace("health", "", $string);
        $string = str_replace(" - ", "", $string);
        $string = str_replace("  ", " ", $string);
        $string = str_replace("-", "", $string);
        $string = str_replace("H/C", "", $string);
        $string = str_replace("â€™", "'", $string);
        $string = str_replace("â€“ ", "", $string);
        $string = str_replace("(", "", $string);
        $string = str_replace(")", "", $string);
        
        


        $calcsearch =  rtrim((str_replace(" ", "|",$string)),"|");


        if($result=Facilities::missing($calcsearch)->first()){
          $facilityName=$result->FacilityName;
          $facilityCode=$result->FacilityCode;
        }else{
          $result=Facilities::missing('Kenyatta National Hospital')->first();
          $facilityName=$result->FacilityName;
          $facilityCode=$result->FacilityCode;
        }
        
      }
      
       
     
       return [ 
       'Name' => $item->Name_of_Participant,
       'Facility' => $facilityName,
       'FacilityCode' => $facilityCode,
       'TrainigSite' => $item->training_site,
       'IDNumber' => $item->id_Number,
       'Status' => $this->StatusCheck($item->assessment),
       'PartID' => $item->PartID
       ];

        
  }



  public function FacilityList($item){
    
  
    return [
           'Name' => $item->FacilityName,
            'Code' => $item->FacilityCode,
           'SubCounty' => $item->District,
            'Owner' => $item->Owner,
            'Type' => $item->Type,
            'Action' => $this->StatusCheck($item->assessment)
        ];
  }

  private function ValidityTest($status){
    if ($status=='New') return False;
    else return True;
  }

  private function StatusCheck($Assessment){

    if($Assessment!=null)
        switch ($Assessment['Status']) {
          case 'Submitted':
           return 'Submitted';
            break;          
          default: 
            return 'Incomplete';
            break;
        } 
    else 
      return 'Ready';
  }


}