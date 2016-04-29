
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="http://localhost/KiitOJ/teacherdashboard" class="logo"><b>KIIT Online Judge</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li class="dropdown"><a class="logout" href="http://localhost/KiitOJ/logout">Logout</a></li>
            	</ul>
            </div>

        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="http://localhost/KiitOJ/public/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $name; ?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="http://localhost/KiitOJ/teacherdashboard">
                          <i class="fa fa-desktop"></i>
                          <span>Feed</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Questions</span>
                      </a>
                      <ul class="sub">
			  <li><a  href="http://localhost/KiitOJ/teacherques/">Your Questions</a></li>
			  <li><a  href="http://localhost/KiitOJ/teacherques/add">Add Question</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-dashboard"></i>
                          <span>Contests</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="http://localhost/KiitOJ/list/contestview/1">Your Contests</a></li>
                          <li><a  href="http://localhost/KiitOJ/list/contestview/2">Add Contest</a></li>
			  <li><a  href="http://localhost/KiitOJ/list/contestview/2">Your Reports</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

<?php echo $this->getContent(); ?>
