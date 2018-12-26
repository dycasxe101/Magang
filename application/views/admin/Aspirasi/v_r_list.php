<?php 
if($this->session->flashdata('sukses')){
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');   
    echo '</div>';
}
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th class="center">No</th>
        <th class="center">Nama</th>
        <th class="center">Kategori Aspirasi</th>
        <th class="center">Tanggal Aspirasi</th>
        <th class="center">Status Aspirasi</th>
        <th class="center">Admin Yang merespon</th>
        <th class="center">Tindakan</th>
    </tr>
</thead>
<tbody>
    <?php $i=1; foreach($aspirasi as $aspirasi) {?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $aspirasi->nama ?></td>
        <td><?php echo $aspirasi->nama_kategori ?></td>
        <td><?php echo $aspirasi->tanggal_aspirasi ?></td>
        <td><?php echo $aspirasi->status_aspirasi ?></td>
        <td><?php echo $aspirasi->nama_admin ?></td>
        <td> 
            <a href = "<?php echo base_url('admin/aspirasiadmin/response/'.$aspirasi->id_aspirasi) ?>" class="btn btn-primary btn-sm" title="Edit Respon"> <i class="fa fa-edit"></i></a>  
            <?php include('delete.php');?>
        </td>
        
    </tr><?php  $i++; }?>
</tbody>
</table>