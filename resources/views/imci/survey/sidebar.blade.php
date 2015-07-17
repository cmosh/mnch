   <!-- Left side column. contains the logo and sidebar -->
       <aside class="left-side sidebar-offcanvas" style="position:fixed">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/bower_components/admin-lte/dist/img/blank.png" class="img-circle" />

            </div>
            <div class="pull-left info">
              <p> {{ Auth::user()->name }}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

     
        

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Options</li>
            <!-- Optionally, you can add icons to the links -->
           <li><a href="/home"><i class="fa fa-link"></i> <span>Home</span></a></li>
             <li class="treeview Active">
                            <a href="#">

                               

                                <span>Sections</span>

                                                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="#Section1">Section 1: Facility, HCW and <br>Workstation Information</a>
                                </li>
                                <li>
                                    <a href="#Section2">Section 2: Observation of Case <br>Management : One Case per HCW</a>
                                </li>
                                <li class="">
                                    <a href="#Section2a">Section 2a: Assessment of the <br>sick child age 2 months <br>upto 5 years</a>
                                </li>
                                <li class="">
                                    <a href="#Section2b">Section 2b: Assessment of the <br>sick young infant age upto <br>2 months (if applicable)</a>
                                </li>
                                <li>
                                    <a href="#Section3">Section 3: Observation of Case <br>Management : One Case per HCW</a>
                                </li>
                                <li>
                                    <a href="#Section4">Section 4: Consultation and Exit <br>Interviews</a>
                                </li>
                            </ul>
                        </li>

            <li><a href="/auth/logout"><i class="fa fa-link"></i> <span>Log Out</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

