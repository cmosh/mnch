 <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">This Site({{env("APP_ENV")}})</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="/admin/redmin">
                  <i class="menu-icon fa fa-cubes bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Redis</h4>
                    <p>The {{env("APP_ENV")}} site's Redis Control Panel</p>
                  </div>
                </a>
              </li>
               <li>
                <a href="/admin/memcached">
                  <i class="menu-icon fa fa-medium bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">MemcahceD</h4>
                    <p>The {{env("APP_ENV")}} site's MemcahceD Control Panel</p>
                  </div>
                </a>
              </li>

              <li>
                <a href="/admin/commandcenter">
                  <i class="menu-icon fa fa-globe bg-black"></i>
                  <div class="menu-info">
                      
                    <h4 class="control-sidebar-subheading">Command Center</h4>
                    <p>The {{env("APP_ENV")}} site's Command Control Panel</p>
                  </div>
                </a>
              </li>

              




            </ul><!-- /.control-sidebar-menu -->

           

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->

          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
           
              <h3 class="control-sidebar-heading">Global Operations</h3>
            
               <ul class="control-sidebar-menu">
              <li>
                <a href="/admin/global">
                  <i class="menu-icon fa fa-beer bg-maroon"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Command Panel</h4>
                    <p>The Global Command Panel</p>
                  </div>
                </a>
              </li>    


            </ul><!-- /.control-sidebar-menu -->
          
           
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>