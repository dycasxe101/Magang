    <style>
th{
	font-size: 20px;
}
table, th,td, tr{
	
    border:none;
}
#l{
    padding: 5px;
	font-size: 15px;
    text-align: left;    
}
#date{
	padding: 5px;
    text-align: right;
}
</style>
    
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <h2 class="brand-before">
                        <medium>Here Your Aspiration </medium>
                    </h2>
                    <table  class="table table-hover tablesorter">
                        <form >
                        <th colspan="3" size>Aspirasi</th>
                            <tr>
                                <td colspan="2" id="l"><?php echo $search['nama'] ?> (<?php echo $search['uid_aspirasi'] ?>)</td>
                                <td id="date"><?php echo $search['tanggal_aspirasi'] ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" id="l">  <?php echo $search['isi_aspirasi'] ?></td>
                            </tr>
                          </form>
                           <form >
                            <th colspan="3">Respon</th>
                                <tr>
                                    <td colspan="2" id="l"><?php echo $search['nama_admin'] ?> (Admin)</td>
                                    <td id="date"><?php echo $search['tanggal_respon'] ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3" id="l">  <?php echo $search['respon_aspirasi'] ?></td>
                                </tr>
                          </form>
                        </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

