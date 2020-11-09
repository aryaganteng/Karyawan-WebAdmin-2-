
<div class="block-header">
<h1 style="text-align: center">Laporan</h1>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="#">
                        <div class="#">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    
                                </div>
                                
                            </div>
                            <div class="body">
                            	<div class="row">
								<!--  <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a> -->
                            		<table class="table table-hover table-striped" style="margin-top: 40px;">		
	
			<thead>
				<tr>
          <th>ID</th>
					<th>NAMA PELANGGAN</th>
					<th>KELUHAN</th>
					<th>HASIL</th>
          <th>BUKTI</th>
					<th>AKSI</th>
				</tr>
                                <?php
                                 $no=0; 
                                foreach ($laporan as $l ) : ?>
                                	<tr>
                                    <td><?= $l['id_form'] ?></td>
                                		<td><?= $l['nama_pelanggan'] ?></td>
                                		<td><?= $l['keluhan'] ?></td>
                                		<td><?= $l['hasil'] ?></td>
                                     <td><img src="http://localhost/epsyc/assets1/img/<?= $l['gambar']?>" width="150px" height="100px"></img></td>
                                		<td><a href="#update_laporan" class="btn btn-warning"I data-toggle="modal" onclick="tm_detail(<?= $l['id_form'] ?>)">Update</a> <a class="btn btn-danger" data-toggle="modal" onclick= "deleteSlur(<?= $l['id_form'] ?>)">Delete</a></td>
                                	</tr>
                                <?php endforeach; ?>
			</thead>
		</table>
		<?php if ($this->session->flashdata('pesan')!=null): ?>
                                 <div class="alert alert-danger"><?= $this->session->flashdata('pesan');?></div>    
                                <?php endif ?>
	</div>
</div>

 <div class="modal fade"id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah Hasil</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/laporan/simpan_laporan')?>" method="post">
        Hasil
        <input type="text" name="hasil" class="form-control text-dark"><br>
       </select>
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

 <div class="modal fade"id="update_laporan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Hasil</h4>
      </div>
      <div class="modal-body">

        <form action="<?=base_url('index.php/laporan/update_laporan')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_form" id="id_form">
        <input type="hidden" name="id_konseling" id="id_konseling">
        Hasil
        <input type="text" id="hasil" name="hasil" class="form-control"><br>
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
  function tm_detail(id_form){
    $.getJSON("<?=base_url()?>index.php/laporan/detail_laporan/"+id_form,function(data){
      $("#id_form").val(data['id_form']);
      $("#id_konseling").val(data['id_konseling']);
      $("#hasil").val(data['hasil']);
      console.log(id_form);
    });
  }

  function deleteSlur(id_form){
if (confirm('Are you sure you want to save this thing into the database?')) {
    // Save it!
    $.getJSON("<?=base_url()?>index.php/laporan/deleteLaporan/"+id_form, function(data){
      console.log(data);
      location.href = window.location
    });
      location.reload();
      location.href = window.location
} else {
    location.reload;
    }

  }

</script>
</section>
