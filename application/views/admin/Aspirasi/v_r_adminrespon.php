<?php 
	echo validation_errors('<div class="alert alert-warning">', '</div>');
	echo form_open(base_url('admin/aspirasiadmin/respon/'.$aspirasi->id_aspirasi));
?>
<div class = "col-md-12">
    <div class="form-group form-group-lg">
    	<label>Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $aspirasi->nama ?>"/ readonly>
    </div>
    <div class="form-group form-group-lg">
    	<label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $aspirasi->email ?>"/readonly>
    </div>
    <div class="form-group form-group-lg">
    	<label>Kontak</label>
        <input type="text" name="ponsel" class="form-control" placeholder="Kontak " value="<?php echo $aspirasi->ponsel ?>"/ readonly>
    </div>
    <div class="form-group form-group-lg">
    	<label>Tanggal Aspirasi</label>
        <input type="text" name="tanggal_aspirasi" class="form-control" value="<?php echo $aspirasi->tanggal_aspirasi?>"/ readonly>
    </div>
     <div class="form-group form-group-lg">
    	<label>Kategori</label>
        <input type="text" name="nama_kategori" class="form-control" placeholder="Kategori" value="<?php echo $aspirasi->nama_kategori ?>"/ readonly>
    </div>
    <div class="form-group">
    	<label>Aspirasi</label>
        <textarea rows="20" name="isi_aspirasi" class="form-control" / readonly><?php echo $aspirasi->isi_aspirasi ?></textarea>
    </div>
    <div class="form-group ">
    	<label>Respon Admin</label>
        <textarea rows="20" name="respon_aspirasi" class="form-control" placeholder="Respon" / required><?php echo $aspirasi->respon_aspirasi ?></textarea>
    </div>
    <td><input type="hidden" name="status_aspirasi" value="Done"</td>
    <td><input type="hidden" name="tanggal_respon" value="Done"</td>
    <td><input type="hidden" name="id_admin" value="<?php echo $this->session->userdata('id_admin') ?>"</td>
    <div class="form-group ">
        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="save"/>
    </div>
</div>
<php
	form_close();

 ?>