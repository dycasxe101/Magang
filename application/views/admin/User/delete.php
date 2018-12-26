
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?php echo $admin->id_admin?>" title="Hapus Admin">
	<i class ="fa fa-trash"></i>
</button>
<div class="modal fade" id="myModal<?php echo $admin->id_admin ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
            </div>
            <div class="modal-body"> Yakin Anda Mau Menghapus?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <a href="<?php echo base_url('admin/user/delete/'.$admin->id_admin) ?>" class="btn btn-primary btn-sm" title="Hapus Aspirasi"><i class="fa fa-trash"> </i>   ya</a>
            </div>
        </div>
    </div>
</div>



