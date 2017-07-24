<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="This is a national health tool that has been deployed by Clinton Health Access Intiative(CHAI) and the Ministry of Health in Kenya. Its purpose is to evaluate the effectiveness of facilities and healthworkers in administering prenatal and postnatal healthcare.">
    <meta name="keywords" content="MNCH,IMCI,MNH,CH,ChildHealth,Materanal,Neonatal,MNCHKenya,Kenya,MNCHTool,Tool,Surveys,Child,Mother">
     <link rel="shortcut icon" href='{!!asset_path("favicon.ico")!!}' type="image/x-icon">
    <link rel="icon" href='{!!asset_path("favicon.ico")!!}' type="image/x-icon">
    {!! stylesheet_link_tag('landing') !!}  
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Maternal,Neonatal and Child Health Surveys Tools Kenya</title>
  </head> 
  <body class="skin-blue fixed layout-top-nav">
    <div class="wrapper">
      <header class="main-header">
        <nav class="navbar navbar-default navbar-static-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" style="margin-right:0px;">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/home" style="color:white">MNCH</a>
            </div>
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
              <li><a  href="/">Child Health Survey</a></li>
              <li><a href="/analytics/MNHV2">Maternal and Neonatal Health Survey</a></li>
              <li><a href="/analytics/IMCIV1">IMCI Survey</a></li>
              <li><a href="/gt_raw">Raw Data</a></li
              @if (config('app.env')=='test'||config('app.mak'))
              <li> <a href="/test/serve/"  role="button">
              <span><button  class="btn btn-block btn-success btn-xs">serve assets</button></span>  
          </a> </li>
          <li> <a href="/test/stop/"   role="button">
              <span><button  class="btn btn-block btn-danger btn-xs">stop assets</button></span>  
          </a> </li>
          @endif

              </ul>
         
            </div>
           
              <div class="navbar-custom-menu">
               
              <ul class="nav navbar-nav">
          
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/self/register" style="margin-right:5px;">Register</a></li>
          @else
           <li><a href="/home">My Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              <li><a href="/usermanagement/changepass">Change Password</a></li>
                <li><a href="/auth/logout">Logout</a></li>
              </ul>
            </li>
          @endif
        </ul>

              </div>
          </div>
        </nav>
        <div class="title-main">
          <h2 align="middle"><?php echo $location;?></h2>          
          </div>


  
 </div>

      </header>
    

      <div class="content-wrapper">
        <div class="container-fluid">
        
          <section class="content">
            <div class="row"><div class="title-trans"></div></div>

            <div class="row">
              <div style="width: 50%;border: 1px solid #cccccc;height: 60px;background-color: #ffffff;padding: 1%;float: left;">
                <label class="custom-control custom-radio col-md-3">
                  <input id="mnhv1" name="version" type="radio" class="custom-control-input" checked="checked">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">MNH V1</span>
                </label>
                <label class="custom-control custom-radio col-md-3">
                  <input id="mnhv2" name="version" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">MNH V2</span>
                </label>
                
              </div>          
              <div style="width: 50%;border: 1px solid #cccccc;height: 60px;background-color: #ffffff;padding: 1%;float: left;">                
                <label class="custom-control custom-radio col-md-3">
                  <input id="chv1" value="CHV1" name="version_ch" type="radio" class="custom-control-input" checked="checked">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">CH V1</span>
                </label>
                <label class="custom-control custom-radio col-md-3">
                  <input id="chv2" value="CHV2" name="version_ch" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">CH V2</span>
                </label>
              </div>          

            </div>        
             <div class="row">
              <div id="mnh_div1" style="width: 50%;border: 1px solid #cccccc;height: 1000px;background-color: #ffffff;padding: 1%;float: left;">
                <div class="panel panel-default">
                  <div class="panel-heading">MNCH Section One</div>
                  <!-- <div class="panel-body">
                    <ul class="list-group">
                      <li class="list-group-item list-group-item"><a href="gt_raw/generate_ownership_types_excels/MNHV1" target="_blank">Download Ownership and Type Data</a></li>
                      <li class="list-group-item list-group-item"><a href="gt_raw/generate_training_excels/MNHV1" target="_blank">Download Training Data</a></li>
                      <li class="list-group-item list-group-item"><a href="" >Download Health Services Data</a></li>
                    </ul>                   
                    
                  </div> -->
                </div>
              </div>  
              <div id="mnh_div1" style="width: 50%;border: 1px solid #cccccc;height: 1000px;background-color: #ffffff;padding: 1%;float: left;">
                <div class="panel panel-default">
                  <div class="panel-heading">CH Section One</div>
                  <div class="panel-body">
                    <ul class="list-group">                      
                      <li class="list-group-item list-group-item"><a id="ownership_ch" class="ownership_ch" href="#">Download Ownership and Type Data</a></li>
                      <li class="list-group-item list-group-item"><a id="staff_training_ch" class="staff_training_ch" href="#">Download Staff Training Data</a></li>
                      <li class="list-group-item list-group-item"><a id="health_services_ch" class="health_services_ch" href="#">Download Health Services Data</a></li>
                    </ul>                                       
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">CH Section Two</div>
                  <div class="panel-body">
                    <ul class="list-group">                      
                      <li class="list-group-item list-group-item"><a id="guidelines_job_aids_ch" class="guidelines_job_aids_ch" href="#">Download Guidelines and Job Aids Availabilty Data</a></li>
                      <li class="list-group-item list-group-item"><a id="tools_availability_ch" class="tools_availability_ch" href="#">Download Tools Availability Data</a></li>                      
                    </ul>   
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">CH Section Three</div>
                  <div class="panel-body">
                    <ul class="list-group">                      
                      <li class="list-group-item list-group-item"><a id="u5_treatment_register_ch" class="guidelines_job_aids_ch" href="#">Download Treatment Data in U5 Register Data</a></li>
                      <li class="list-group-item list-group-item"><a id="annual_trends_year_ch" class="tools_availability_ch" href="#">Download Annual Trends for Year {{date('Y')}} Data</a></li>                      
                      <li class="list-group-item list-group-item"><a id="diarrhoea_zinc_ors_ch" class="tools_availability_ch" href="#">Download Diarrhoea cases treated with Zinc + ORS Data</a></li>                      
                      <li class="list-group-item list-group-item"><a id="ort_management_trends_ch" class="tools_availability_ch" href="#">Download Annual ORT corner management trends for Year {{date('Y')}}</a></li>                      
                    </ul>   
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">CH Section Four</div>
                  <div class="panel-body">
                    <ul class="list-group">                      
                      <li class="list-group-item list-group-item"><a id="diarrhoea_treatment_ch" class="guidelines_job_aids_ch" href="#">Download Diarrhoea Treatment Commodities Data</a></li>
                      <li class="list-group-item list-group-item"><a id="antibiotics_data_ch" class="tools_availability_ch" href="#">Download Antibiotics Data</a></li> 
                      <li class="list-group-item list-group-item"><a id="malaria_data_ch" class="tools_availability_ch" href="#">Download Malaria Data</a></li>                      
                    </ul>   
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">CH Section Five</div>
                  <div class="panel-body">
                    <ul class="list-group">                      
                      <li class="list-group-item list-group-item"><a id="ort_functionality_ch" class="ort_functionality_ch" href="#">Download ORT Corner Functionality Data</a></li>
                      <li class="list-group-item list-group-item"><a id="ort_loaction_ch" class="ort_loaction_ch" href="#">Download Location of ORT Corner Data</a></li>                      
                    </ul>   
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">CH Section Six</div>
                  <div class="panel-body">
                    <ul class="list-group">                      
                      <li class="list-group-item list-group-item"><a id="supplies_availability_ch" class="supplies_availability_ch" href="#">Download Supplies Availability Data</a></li>
                    </ul>   
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">CH Section Seven</div>
                  <div class="panel-body">
                    <ul class="list-group">                      
                      <li class="list-group-item list-group-item"><a id="resource_availability_ch" class="resource_availability_ch" href="#">Download Resource Availability Data</a></li>
                    </ul>   
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">CH Section Eight</div>
                  <div class="panel-body">
                    <ul class="list-group">                      
                      <li class="list-group-item list-group-item"><a id="community_strategy_ch" class="community_strategy_ch" href="#">Download Community Strategy Data</a></li>
                    </ul>   
                  </div>
                </div>
                

              </div>   
            </div>    
          </section>
        </div>
      </div>
      @include('template/footer')
    </div>
   {!!javascript_include_tag('landing')!!}
     @yield('js')
    <script type="text/javascript">
      $(document).ready(function () {
        if(window.location.href.indexOf("CHV") > -1) {
          $('#hovme').show();
        }
        $('#mnh_div2').hide();
        $('#ch_div1').hide();
        $('#ch_div2').hide();
        //CH Section One
        //Get the ownership
        $('#ownership_ch').on('click',function(){
          var report_type = $('input[name=version_ch]:checked').val();
          var url = 'gt_raw/generate_ownership_types_excels/'+report_type;
          window.location.href = url;
        });    

        //Get the ownership
        $('#staff_training_ch').on('click',function(){
          var report_type = $('input[name=version_ch]:checked').val();
          var url = 'gt_raw/generate_training_excels/'+report_type;
          window.location.href = url;
        });        
        //Get the ownership
        $('#health_services_ch').on('click',function(){
          var report_type = $('input[name=version_ch]:checked').val();
          var url = 'gt_raw/generate_health_services_excels/'+report_type;
          window.location.href = url;
        });

        //CH Section Two
        $('#guidelines_job_aids_ch').on('click',function(){
          var report_type = $('input[name=version_ch]:checked').val();
          var url = 'gt_raw/guidelines_job_aids_excels/'+report_type;
          window.location.href = url;
        });
        $('#tools_availability_ch').on('click',function(){
          var report_type = $('input[name=version_ch]:checked').val();
          var url = 'gt_raw/tools_availability_excels/'+report_type;
          window.location.href = url;
        });

        $('#supplies_availability_ch').on('click',function(){
          var report_type = $('input[name=version_ch]:checked').val();
          var url = 'gt_raw/supplies_availability_excels/'+report_type;
          window.location.href = url;
        });
        $('#resource_availability_ch').on('click',function(){
          var report_type = $('input[name=version_ch]:checked').val();
          var url = 'gt_raw/resource_availability_excels/'+report_type;
          window.location.href = url;
        });

        $('#community_strategy_ch').on('click',function(){
          var report_type = $('input[name=version_ch]:checked').val();
          var url = 'gt_raw/community_strategy_excels/'+report_type;
          window.location.href = url;
        });


        
    });
    </script>
<style type="text/css">
  
  @media only screen and (min-width: 692px) and (max-width:851px) {
   .title-trans{
    background-color: transparent;
    margin-top: 0;
    margin-bottom: 0;
    width:100%;
    height:210px;

  } 
}
@media only screen and (min-width: 893px) and (max-width:1052px){
  .title-trans{
    background-color: transparent;
    margin-top: 0;
    margin-bottom: 0;
    width:100%;
    height:170px;

  }

}

@media only screen and (min-width: 852px) and (max-width:892px){

  .title-trans{
    background-color: transparent;
    margin-top: 0;
    margin-bottom: 0;
    width:100%;
    height:110px;

  }
}


  .title-main{
    width:100%;
    height:50px;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 0.7);
    margin-top: 0;
    margin-bottom: 0;
    border-bottom: medium solid #181818;
    


  }
  .title-main>h2{
    margin-top: 0;
    padding-top: 10px;
    margin-bottom: 0
  }
  .title-trans{
    background-color: transparent;
    margin-top: 0;
    margin-bottom: 0;
    width:100%;
    height:50px;

  }
  .conc{
    opacity: 0.9 !important;
  }

  #info-title{
    max-height: 70px;
    
  }
  #facilitiesBox,#info-title{
    margin:0;
  }
  #staffTraining,#healthServices{
    margin-bottom:0;
  }

  .messagepop {
  background-color:#FFFFFF;
  border:1px solid #999999;
  cursor:default;
  display:none;
  margin-top: 15px;
  position:absolute;
  text-align:left;
  width:394px;
  z-index:50;
  padding: 25px 25px 20px;
}
.messagepop p, .messagepop.div {
  border-bottom: 1px solid #EFEFEF;
  margin: 8px 0;
  padding-bottom: 8px;
}

.ui-dialog-titlebar{
  background-color: #0073B7;
  color:#0073B7;
}

  
</style>
  </body>
</html>
