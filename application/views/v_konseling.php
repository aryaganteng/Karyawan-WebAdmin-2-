            <div class="panel">
								<div class="panel-heading">
                <a href="#tambah" class="btn btn-primary" data-toggle="modal" style="margin-right: 1000px";><span class="glyphicon glyphicon-plus"></span>Tambah Data</a><br>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
                        <th>NO</th>
                        <th>ID</th>
                        <th>KATEGORI</th>
                        <th>STATUS</th>
                        <th>NAMA</th>
                        <th>PENGALAMAN</th>
                        <th>ALAMAT</th>
                        <th>NO HP</th>
                        <th>JADWAL</th>
                        <th>TARIF</th>
                        <th>AKSI</th>
											</tr>
										</thead>
										<tbody>
                    <?php
                              $no=0;
                              foreach ($data_konseling as $dt_kon) {
                                $no++;
                                echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$dt_kon->id_konseling.'</td>
                                <td>'.$dt_kon->nama_kategori.'</td>
                                <td>'.$dt_kon->nama_status.'</td>
                                <td>'.$dt_kon->nama_konseling.'</td>
                                <td>'.$dt_kon->pengalaman.'</td>
                                <td>'.$dt_kon->alamat.'</td>
                                <td>'.$dt_kon->no_hp.'</td>
                                <td>'.$dt_kon->jadwal.'</td>
                                <td>'.$dt_kon->tarif.'</td>
                                <td>
                                <a href="#update_konseling" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_kon->id_konseling.')">Update</a> 
                                <a href="'.base_url('index.php/Konseling/hapus_konseling/'.$dt_kon->id_konseling).'" class="btn btn-danger" data-toggle="modal" onclick="return confirm(\'anda yakin?\')">Delete</a></td>
            
                            		</tr>';
                              }
                      ?>

										</tbody>
									</table>
								</div>
							</div>
         </table>
          <?php if($this->session->flashdata('pesan')!=null): ?>
          <div class= "alert alert-danger"><?= $this->session->flashdata('pesan');?></div>
          <?php endif?>                        

                <!-- Modal -->
<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Konseling</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/Konseling/simpan_konseling')?>" method="post">
        Kategori
        <select name= "id_kategori" class="form-control">
        <?php
        foreach ($data_kategori as $kat) {
                echo "<option value='".$kat->id_kategori."'>
                ".$kat->nama_kategori." </option>";
                }
        ?>
        </select>
        <br>
        <br>
        Status
        <select name= "id_status" class="form-control">
        <?php
        foreach ($data_status as $sta) {
                echo "<option value='".$sta->id_status."'>
                ".$sta->nama_status." </option>";
                }
        ?>
        </select>
        <br>
        <br>
        Nama
        <input type="text" name="nama_konseling" class="form-control"><br>
        Pengalaman
        <input type="text" name="pengalaman" class="form-control"><br>
         Alamat
        <input type="text" name="alamat" class="form-control"><br>
         No Hp
        <input type="text" name="no_hp" class="form-control"><br>
         Jadwal
        <input type="text" name="jadwal" class="form-control"><br>
         Tarif
        <input type="text" name="tarif" class="form-control"><br>
        <br>
             <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="update_konseling">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" >Update Konseling</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/Konseling/update_konseling')?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_konseling" id="id_konseling">  
        Kategori
        <select name= "id_kategori" class="form-control" id="id_kategori">
        <?php
        foreach ($data_kategori as $kat) {
                echo "<option value='".$kat->id_kategori."'>
                ".$kat->nama_kategori." </option>";
                }
        ?>
        </select>
        <br>
        <br>
        Status
        <select name= "id_status" class="form-control" id="id_status">
        <?php
        foreach ($data_status as $sta) {
                echo "<option value='".$sta->id_status."'>
                ".$sta->nama_status." </option>";
                }
        ?>
        </select>
        <br>
        <br>
        Nama
        <input type="text" name="nama_konseling" class="form-control" id="nama_konseling"><br>
        Pengalaman
        <input type="text" name="pengalaman" class="form-control" id="pengalaman"><br>
         Alamat
        <input type="text" name="alamat" class="form-control" id="alamat"><br>
         No Hp
        <input type="text" name="no_hp" class="form-control" id="no_hp"><br>
         Jadwal
        <input type="text" name="jadwal" class="form-control" id="jadwal"><br>
         Tarif
        <input type="text" name="tarif" class="form-control" id="tarif"><br>
                <br>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>

function tm_detail(id_konseling) {
  $.getJSON("<?=base_url()?>index.php/Konseling/detail_konseling/"+id_konseling,function(data){
    $("#id_konseling").val(data['id_konseling']);
    $("#id_kategori").val(data['id_kategori']);
    $("#id_status").val(data['id_status']);
    $("#nama_konseling").val(data['nama_konseling']);
    $("#pengalaman").val(data['pengalaman']);
    $("#alamat").val(data['alamat']);
    $("#no_hp").val(data['no_hp']);
    $("#jadwal").val(data['jadwal']);
    $("#tarif").val(data['tarif']);
  });
}
</script>
