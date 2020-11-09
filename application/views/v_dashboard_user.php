
      <div class="intro-img">
        <img src="<?=base_url()?>assets1/img/undraw.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>Smart Solution<br>With<span><br>E-Psyc</span></h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#portfolio" class="btn-services scrollto">Search In Here</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>E-Psyc merupakan aplikasi berbasis website yang bertujuan untuk memudahkan customer dalam menemukan psikiater atau psikolog.</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              Terdapat beberapa fitur dalam aplikasi E-Psyc, mulai dari  :
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Cari Psikolog/Psikiater</a></h4>
              <p class="description">Fitur ini pelanggan dapat mencari psikolog/psikiater sesuai dengan kebutuhan pelanggan</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Atur Jadwal</a></h4>
              <p class="description">Fitur ini pelanggan dapat mengatur jadwal konseling dengan psikolog/psikiater yang telah melakukan proses pendaftaran</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Jadwal Konseling</a></h4>
              <p class="description">Fitur ini menampilkan jadwal konseling serta hasil yang di dapat dari konseling yang telah dilakukan</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="<?=base_url()?>assets1/img/undraw2.svg" class="img-fluid" alt="">
          </div>
        </div>

       
    </section><!-- #about -->

    <!--==========================
 
    ============================-->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Why choose us?</h3>
          
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title">Efisien</h5>
                <p class="card-text">Mempermudah user dalam melakukan konseling serta menghemat waktu</p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">Efektif</h5>
                <p class="card-text">Pelanggan dapat mengatur jadwal sesuai dengan jam kerja psikolog/psikiater</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Terpercaya</h5>
                <p class="card-text">Bekerja sama dengan psikolog/psikiater</p>
               
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <!-- <span data-toggle="counter-up">274</span>
            <p>Clients</p> -->
          </div>

          <div class="col-lg-3 col-6 text-center">
           <!--  <span data-toggle="counter-up">421</span>
            <p>Projects</p> -->
          </div>

          <div class="col-lg-3 col-6 text-center">
            <!-- <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p> -->
          </div>

          <div class="col-lg-3 col-6 text-center">
            <!-- <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p> -->
          </div>
  
        </div>

      </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Counseling</h3>
        </header>
        <div class="row">
        <div class="col-md-12">
  <div class="">
    <div id="halohalo"></div>
  <div class="row"><input type="text" name="cari" id="cari" class="form-control" placeholder="Cari Disini" style="width: 1200px;"></div><br>
 <div  class="row"style="margin-top: 40px; font-size: 20px;" id="tampil_konseling"></div>
</div>

</div>

<div class="modal fade" id="detail_konseling">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Detail Konseling</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div id="deskripsi"></div>
            <br>
            <div id="btn"></div>
            <br>
            <div id="pesan"></div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section><!-- #portfolio -->
<script src="<?=base_url()?>assets1/lib/jquery/jquery.min.js"></script>
<script type="text/javascript">
      //cari barang
    $("#cari").on('keyup', function(){
        $.getJSON("<?=base_url()?>index.php/get_konseling/cari/"+$("#cari").val(),
        function(data){
           var datanya = "";
        $.each(data,function(key,dt) {
            datanya +='<div class="col-xs-6 col-md-3" style="max-width: 80%; font-size: 30px;"><a href="#detail_konseling" '+
            'class="thumbnail text-center" data-toggle="modal" onclick="tm_detail('+dt['id_konseling']+')" style="text-decoration: none;display: block;padding: 4px;margin-bottom: 20px;background-color: #fff;border: 1px solid #ddd;border-radius: 14px; ">' +
            dt['nama_konseling']+'<br>'+dt['jadwal']+
            '</a>' +
        '</div>';
        });
        $("#tampil_konseling").html(datanya);
    });
    });

    //menampilkan semua Barang
  $.getJSON("<?= base_url()?>index.php/get_konseling",function (data1) {
        var datanya = "";
        $.each(data1,function(key,dt) {
            datanya +='<div class="col-xs-6 col-md-3" style="max-width: 80%; font-size: 30px;"><a href="#detail_konseling" '+
            'class="thumbnail text-center" data-toggle="modal" onclick="tm_detail('+dt['id_konseling']+')" style="text-decoration: none;display: block;padding: 4px;margin-bottom: 20px;background-color: #fff;border: 1px solid #ddd;border-radius: 14px;">'+
            dt['nama_konseling']+'<br>'+dt['jadwal']+
            '</a>' +
        '</div>';
        });
        $("#tampil_konseling").html(datanya);
    });

  

    $.getJSON("<?= base_url()?>index.php/laporan/getData",function (data1) {
        var datanya = "";
        $.each(data1,function(key,dt) {
            datanya +='<div class="col-xs-6 col-md-3" style="max-width: 80%; font-size: 30px;"><a '+
            'class="thumbnail text-center" style="text-decoration: none;display: block;padding: 4px;margin-bottom: 20px;background-color: #fff;border: 1px solid #ddd;border-radius: 14px;">'+ "keluhan: " + 
            dt['keluhan'] + "     hasil: " + dt['hasil'] 
            '</a>' +
        '</div>';
        });
        $("#halohalo").html(datanya);
    });



  

  function tm_detail(id_konseling){
    $.getJSON("<?=base_url()?>index.php/get_konseling/detail/"+id_konseling,function(data){
      $("#deskripsi").html(
      '<table class="table table-hover table-striped">'+
      '<tr><td>Kategori</td><td>'+data['nama_kategori']+'</td></tr>'+
      '<tr><td>Status</td><td>'+data['nama_status']+'</td></tr>'+
      '<tr><td>Nama</td><td>'+data['nama_konseling']+'</td></tr>'+
      '<tr><td>Pengalaman</td><td>'+data['pengalaman']+'</td></tr>'+
      '<tr><td>Alamat</td><td>'+data['alamat']+'</td></tr>'+
      '<tr><td>No Hp</td><td>'+data['no_hp']+'</td></tr>'+
      '<tr><td>Jadwal</td><td>'+data['jadwal']+'</td></tr>'+
      '<tr><td>Tarif</td><td>'+data['tarif']+'</td></tr>'+
      '</table>'
      );
      $("#btn").html(
        
      `<a href="<?=base_url()?>index.php/form/index/${id_konseling}" class="btn btn-danger">Pilih</a>`);
    });
  }
    </script>

    <!--==========================
      Clients Section
    ============================-->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p> Kami Kelompok E-Psyc SMK Telkom Malang</p>
        </div>

        <div style="margin-left: 200px;" class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="<?=base_url()?>assets1/img/ami.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Wahyu Utami Ningtris</h4>
                  <span>Hacker</span>
                  <!-- <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

          

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="<?=base_url()?>assets1/img/aryak.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Aryasatya Okta Pradhana</h4>
                  <span>Hustler</span>
                 <!--  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" >
            <div class="member">
              <img style="" src="<?=base_url()?>assets1/img/nanda.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Octaviera Nanda Aji Cahyani</h4>
                  <span>Hipster</span>
                  <!-- <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
   </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          

          <div style="margin-left: 300px;" class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Jalan Danau Ranau
Malang, INA +62</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>epsyc@gmail.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+62 345 6789 01</p>
              </div>
            </div>

            
          </div>

        </div>

      </div>
    </section><!-- #contact -->
    
