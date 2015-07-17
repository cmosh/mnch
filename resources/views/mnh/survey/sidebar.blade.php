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
             <li class="treeview Active" >
                            <a href="#">
                               
                                <span>Sections</span>
                                                            </a>

                            <ul class="treeview-menu">
                                <li class="" >
                                    <a href="#Section1"> Section 1: Facility Information</a>
                                </li>
                                <li >
                                    <a href="#Section2">Section 2: Facility Data and <br>Maternal and Neonatal <br>Service Delivery</a>
                                </li>
                                <li class="">
                                    <a href="#Section3">Section 3: Facility Information</a>
                                </li>
                                <li class="">
                                    <a href="#Section4">Section 4: Staff Training</a>
                                </li>
                                <li>
                                    <a href="#Section5">Section 5: Commoodity Availability</a>
                                </li>
                                <li>
                                    <a href="#Section6">Section 6: Equipment Availability <br>and Functionality</a>
                                </li>
                                 <li>
                                    <a href="#Section7">Section 7: Resource Availability</a>
                                </li>
                                 <li>
                                    <a href="#Section8">Section 8: Community Strategy</a>
                                </li>
                                
                            </ul>
                        </li>


            <li><a href="/auth/logout"><i class="fa fa-link"></i> <span>Log Out</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

