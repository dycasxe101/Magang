<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('admin/aspirasiadmin/dashboard')?>">Admin Aspirasi</a> 
  </div>
  <div style="color: white;
    padding: 5px 50px 5px 50px;
    float: right;
    font-size: 16px;">

      <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="<?php echo base_url('admin/aspirasiadmin')?>"><i class="fa fa-envelope"></i> Aspirasi <span class="badge"><?php echo $Unanswer;?></span></a>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username_admin') ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>admin/user/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
      </div>
  </div>
</nav>   

