<div class="row">
  <div class="col-md-4 col-md-6 col-xs-6">           
    <div class="panel panel-back noti-box">
      <span class="icon-box bg-color-red set-icon">
          <i class="fa fa-envelope-o"></i>
      </span>
      <div class="text-box" >
          <p class="main-text"><a href="<?php echo base_url('admin/aspirasiadmin')?>"><?php echo $all;?></p>
          <p class="text-muted">Seluruh Aspirasi</p>
      </div>
    </div>
  </div>
<div class="col-md-4 col-md-6 col-xs-6 ">           
  <div class="panel panel-back noti-box">
    <span class="icon-box bg-color-green set-icon">
      <i class="fa fa-bars"></i>
    </span>
    <div class="text-box" >
      <p class="main-text"><a href="<?php echo base_url('admin/aspirasiadmin')?>"><?php echo $answered;?></p>
      <p class="text-muted">Telah di Respon</p>
    </div>
  </div>
</div>
<div class="col-md-4 col-md-6 col-xs-6">           
  <div class="panel panel-back noti-box">
      <span class="icon-box bg-color-blue set-icon">
          <i class="fa fa-bell-o"></i>
      </span>
      <div class="text-box" >
          <p class="main-text"><a href="<?php echo base_url('admin/aspirasiadmin')?>"><?php echo $Unanswer;?></p>
          <p class="text-muted">Belum Di Respon</p>
      </div>
  </div>
</div>
</div>