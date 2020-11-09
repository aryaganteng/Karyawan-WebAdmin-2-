<div class="block-header">
<h1 style="text-align: center">Pelanggan</h1>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="#">
                        <div class="#">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    
                                </div>
                                
                            </div>
                            <div class="body">
                            	<div class="row">
                            	
                            	   <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
                            		<table class="table table-hover table-striped" style="margin-top: 40px;" ;">
                            		<tr>
                            			<th>NO</th><th>ID PELANGGAN</th><th>NAMA PELANGGAN</th><th>ALAMAT</th><th>NO HP</th><th>USERNAME</th><th>PASSWORD</th><th>AKSI</th>


                            		</tr>
                                    <?php
                                    $no=0;
                                    foreach ($data_pelanggan as $dt_pel) {
                                      $no++;
                                      echo'<tr>
                                        <td>'.$no.'</td>
                                        <td>'.$dt_pel->id_pelanggan.'</td>
                                        <td>'.$dt_pel->nama_pelanggan.'</td>
                                        <td>'.$dt_pel->alamat.'</td>
                                        <td>'.$dt_pel->no_hp.'</td>
                                        <td>'.$dt_pel->username.'</td>
                                        <td>'.$dt_pel->password.'</td>
                                        <td><a href="#update_pelanggan" class="btn btn-warning"I data-toggle="modal" onclick="tm_detail('.$dt_pel->id_pelanggan.')">Update</a> <a href="'.base_url('index.php/pelanggan/deletePelanggan/'.$dt_pel->id_pelanggan).'" class="btn btn-danger" onclick="return confirm(\'anda yakin\')">Delete</a></td>
                                    </tr>';  
                                    }
                            		?>
                            		</table>
                                <?php if ($this->session->flashdata('pesan')!=null): ?>
                                 <div class="alert alert-danger"><?= $this->session->flashdata('pesan');?></div>    
                                <?php endif ?>
                                
                        
                    </div>
                        
                            	
                </div>
            </div>
        </div>
        <div class="modal fade"id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah Pelanggan</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/pelanggan/simpan_pelanggan')?>" method="post">
        Nama Pelanggan
        <input type="text" name="nama" class="form-control"><br>
        Alamat
        <input type="text" name="alamat" class="form-control"><br>
        No Hp
        <input type="text" name="no_hp" class="form-control"><br>
        Username
        <input type="text" name="username" class="form-control"><br>
        Password
        <input type="text" name="password" class="form-control"><br>
        <br>
        <br>  
        <input type="submit" name="simpan" value="simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
              
        </select>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

        <div class="modal fade"id="update_pelanggan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Pelanggan</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/pelanggan/update_pelanggan')?>" method="post">
        <input type="hidden" name="id_pelanggan" id="id_pelanggan">
        Nama Pelanggan
        <input id="nama_pelanggan" type="text" name="nama_pelanggan" class="form-control"><br>
        Alamat
        <input id="alamat" type="text" name="alamat" class="form-control"><br>
        No Hp
        <input id="no_hp" type="text" name="no_hp" class="form-control"><br>
        Username
        <input id="username" type="text" name="username" class="form-control"><br>
        Password
        <input id="password"type="text" name="password" class="form-control"><br>
        <br>
        <br>  
        <input type="submit" name="simpan" value="simpan" class="btn btn-success">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
              
        </select>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
  function tm_detail(id_plg){
    $.getJSON("<?=base_url()?>index.php/pelanggan/detail_pelanggan/"+id_plg,function(data){
      $("#id_pelanggan").val(data['id_pelanggan']);
      $("#nama_pelanggan").val(data['nama_pelanggan']);
       $("#alamat").val(data['alamat']);
        $("#no_hp").val(data['no_hp']);
         $("#username").val(data['username']);
         $("#password").val(data['password']);
    });
  }
</script>