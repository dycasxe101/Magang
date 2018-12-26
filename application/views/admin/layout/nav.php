<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
    <li>
        <a href="#"><i class="fa fa-users fa-3x"></i> Administrator<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="<?php echo base_url('admin/user')?>"><i class="fa fa-user fa"></i> Data Admin<span class="fa arrow"></span></a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/user/add')?>"><i class="fa fa-user-plus fa"></i> Tambah Admin<span class="fa arrow"></span></a>
            </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-envelope fa-3x"></i> Aspirasi<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="<?php echo base_url('admin/aspirasiadmin')?>"><i class="fa fa-reply-all fa"></i> Data Aspirasi<span class="fa arrow"></span></a>
            </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Kategori<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="<?php echo base_url('admin/kategori')?>"><i class="fa fa-th-list fa"></i> Data Kategori<span class="fa arrow"></span></a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/kategori/add')?>"><i class="fa fa-plus fa"></i> Tambah Kategori<span class="fa arrow"></span></a>
            </li>
        </ul>
      </li>
    </ul>
</div>

</nav>  
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                 <h2><?php echo $title?></h2>			 
            </div>
        </div>
                <!-- /. ROW -->
                <hr />
                
                <div class="row">
                <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive"> 