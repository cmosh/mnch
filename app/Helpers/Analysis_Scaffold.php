<?php namespace App\Helpers;

use App\Models\Facilities;
use App\Models\Assessments;


class Analysis_Scaffold {
 		

 		public  function CHV2()
 		{	
 			$terms = $this->getterms('CHV2');
 			$data = Assessments::Submitted('CHV2')->where('Assessment_Term',$terms[0])->get();
 			$Years = Analyse::sec3Years($data);
 			$YearsCount = count($Years)-1;
 			$Years = array_reverse($Years);
 			$AllYears = $Years;
 			unset($Years[0]);
 			unset($Years[1]);
 			$Years = array_reverse($Years, true);
 			$AllYears = array_reverse($AllYears, true);
 			$SubmittedCHCount =  $data->count();
 			$SubmittedCHCounties = County::AllSubmittedT('CHV2',$terms[0]);     

 			return [
 			'terms'=> $terms,
 			'Years'=> $Years,
 			'AllYears'=> $AllYears,
 			'YearsCount'=>$YearsCount,
 			'Count'=>$SubmittedCHCount,
 			'Counties'=>$SubmittedCHCounties,
 			'name'=>'Child Health Survey'
 			];
 			
 		}

 		public function IMCIV1()
 		{
 			         
        $SubmittedIMCICount =  Assessments::Submitted('IMCI')->count();
        $SubmittedIMCICounties = County::AllSubmitted('IMCI');  

		return [
 			'Count'=>$SubmittedIMCICount,
 			'Counties'=>$SubmittedIMCICounties,
 			'name'=>'Integrated Management of Childhood Illness'
 			];
 		}

 		public function MNHV2()
 		{
 			 $terms = self::getterms('MNHV2');
      		 $SubmittedMNHCount =  Assessments::Submitted('MNHV2')->where('Assessment_Term',$terms[0])->count();  
             $SubmittedMNHCounties = County::AllSubmittedT('MNHV2',$terms[0]);
        	
        	 return [
 			'terms'=> $terms,
 			'Count'=>$SubmittedMNHCount,
 			'Counties'=>$SubmittedMNHCounties,
 			'name'=>'Maternal and Neonatal Health Survey'
 			];
 			

 		}

 		public  function getterms($survey)
 		{
 		    $array;
 		    count(Facilities::SubmittedAssessments($survey,'Baseline')->toArray()) < 1 ?: $array[] = 'Baseline';
      		count(Facilities::SubmittedAssessments($survey,'Midterm')->toArray()) < 1 ?: $array[] = 'Midterm';
      		count(Facilities::SubmittedAssessments($survey,'Endterm')->toArray()) < 1 ?: $array[] = 'Endterm';
     		return $array;
     	}

     	public function resolve($values,$survey)
     	{
    
	      return view('analytics.index')
	      ->with('survey',$survey)
	      ->with('SubmittedCount',$values['Count'])
	      ->with('SubmittedCounties',$values['Counties'])
	      ->with('Years', isset($values['Years']) ? $values['Years'] : '')
	      ->with('YearsCount',  isset($values['YearsCount']) ? $values['YearsCount'] : '')
	      ->with('AllYears', isset($values['AllYears']) ? $values['AllYears'] : '')
	      ->with('terms', isset($values['terms']) ? $values['terms'] : '')
	      ->with('surveyname',$values['name']);
	   }
 	
	}