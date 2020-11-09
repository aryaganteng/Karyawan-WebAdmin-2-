<!DOCTYPE html>
<html lang="en">
<head>
	<title>Keluhan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/halo.css">
</head>
<body>
	<p style="margin-left: 600px; font-size: 40px; color: white; font-family: cursive;"> KELUHAN </p>
	<!-- <div class="intro-img">
        <img style="width: 200px;" src="<?=base_url()?>assets1/img/hai.svg" alt="" class="img-fluid">
      </div> -->
	<div id="form-main">
		
  <div id="form-div">
  		
  
				<form class="form" id="form1" action="<?= base_url('index.php/form/post') ?>" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id_konseling" value="<?= $konseling[0]['id_konseling'] ?>">
					<input type="hidden" name="id_pelanggan" value="<?= $_SESSION['id_pelanggan'] ?>">
					<p class="text">
					<textarea class="validate[required,length[6,300]] feedback-input" name="keluhan" id="keluhan" cols="30" rows="10"></textarea>
					</p>
					<label>Upload Gambar</label>
      				<input type="file" name="gambar" class="form-control">
					<div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>

				</form>
				 </div>
				  </div>
			
	

</body>
</html>
