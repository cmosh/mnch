 <header class="main-header header-cont" style="position:fixed" >
        <a href="/" class="logo">
        @if((!isset($location))) <?php $location = 'Home' ?>
        @endif
        @if ($location == 'Home'  ) 
          <span class="logo-mini">MNCH Surveys</span>
          <span class="logo-lg">MNCH Surveys</span>
        @elseif($location == 'ass' || $location == 'Admin'|| $location == 'umanage' || $location == 'preview')
          <span class="logo-mini">{{$title}} </span>
          <span class="logo-lg">{{$title}} </span>
        @else
        <span class="logo-mini">{{$title}} Survey</span>
          <span class="logo-lg">{{$title}} Survey</span>
          @endif
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          @if ($location == 'Home' || $location == 'Admin')
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span>OPEN/CLOSE MENU</span>
          </a>
           @elseif($location == 'ass')
           <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span>OPEN/CLOSE MENU</span>
          </a>
           @elseif($location == 'MN'||$location == 'IM'||$location == 'CH'||$location == 'umanage'||$location == 'preview')
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span>OPEN/CLOSE MENU</span>   <span id = "autosavetext" width="70%" class="logo-lg"></span>
          </a>
           @endif
          <div class="navbar-custom-menu">            
            <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/register">Register</a></li>
          @else
          @if (isset($AssID)==true)
               @if($location == 'MN'||$location == 'IM'||$location == 'CH')
		      <li> <a id="cancLink"  role="button">
              <span><button id="cancelbt" class="btn btn-block btn-warning btn-xs">Cancel and Discard</button></span>  
          </a> </li>
           <li> <a   role="button">
              <span><button id="savebt" w="head" class="send-btn btn btn-block btn-info btn-xs">Save and Resume Later</button></span>  
          </a> </li>
               @endif
               @endif
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">               
                <li><a href="/usermanagement/changepass">Change Password</a></li>
                 <li><a href="/auth/logout">Logout</a></li>
              </ul>
            </li>
            @endif
            <li>
              @if(Auth::user()->role>3)
                <a href="#" data-toggle="control-sidebar" style=""><i class="fa fa-gears"></i></a>
              @else
              <a href="#" data-toggle="control-sidebar" style="display:none;"><i class="fa fa-gears"></i></a>
              @endif
              </li>
            </ul>
          </div>
        </nav>
      </header>