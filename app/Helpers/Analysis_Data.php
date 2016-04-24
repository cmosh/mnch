<?php namespace App\Helpers;

use App\Models\Facilities;
use App\Models\Assessments;
use Cache;

class Analysis_Data {
 		

 		public  function CHV2($data)
 		{
 			$filtered_data = $this->filter($data);
      		return Analyse::chv2analytics($filtered_data,$data['Year1'],$data['Year2'],$data['Year3'],$data['Year4'],$data['county'],$data['term']);
 		}

 		public  function MNHV2($data)
 		{
 			$filtered_data = $this->filter($data);
 			return Analyse::mnhv2analytics($filtered_data,$data['county'],$data['term']);
 		}

 		public  function IMCIV1($data)
 		{
 			$filtered_data = $this->filter($data);
 			return Analyse::imciv1analytics($filtered_data,$data['county']);	
 		}

 		public  function MNHV1($data)
 		{

 		}

 		public  function CHV1($data)
 		{

 		}

 		public function numbers($data)
 		{
 			return [
 				"Count"=>Assessments::Submitted($data['survey'])->where('Assessment_Term',$data['term'])->count(),
 				"Counties"=>County::AllSubmittedT($data['survey'],$data['term'])->count()
 			];
 		}

 		private  function filter($data)
 		{
 			if (substr($data['survey'],0,4)=='IMCI')
 				{
 					return $this->imciFilter($data);
 				}
 			else
 				{
 					switch ($data['county']) {
 						case 'All':
 									$filtered_data = Cache::remember($data['survey'].'SubSurvey'.$data['county'].$data['term'],config('cache.timeout'),function() use ($data)
 										{
 											$temp = Facilities::SubmittedAssessments($data['survey'],$data['term'])->toArray();
 											return collect($temp);
 										});
 									break;
 						default:
 									$filtered_data = Cache::remember($data['survey'].'SubSurvey'.$data['county'].$data['term'],config('cache.timeout'),function() use ($data)
 										{
 											$temp = Facilities::SubmittedAssessments($data['survey'],$data['term'],$data['county'])->toArray();
 											return collect($temp);
 										});
 									break;
 								}
 					return $filtered_data;
 				}
 		}

 		private function imciFilter($data)
 		{
 			switch ($data['county']) {
 						case 'All':
 								 $filtered_data = Cache::remember($data['survey'].'SubSurvey'.$data['county'],config('cache.timeout'),function() use ($data) 
 										{
 											return Facilities::SubmittedIM($data['survey']);
 										});
 									break;
 						default:
 									$filtered_data = Cache::remember($data['survey'].'SubSurvey'.$data['county'],config('cache.timeout'),function() use ($data)
 										{
 											return 	Facilities::SubmittedIM($data['survey'],$data['county']);
 										});
 									break;
 								}

 			return $filtered_data; 				
 		}

	}