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
            <li class="Active"><a href="#"><i class="fa fa-link"></i> <span>Integrated Management <br>of Childhood Illness<br> Survey</span></a></li>
            <li><a href="/auth/logout"><i class="fa fa-link"></i> <span>Log Out</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

