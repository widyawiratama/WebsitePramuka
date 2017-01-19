<?php
	include 'header.php';
?>
<div id="isi">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" class="img-responsive">
    <div class="item active">
      <img src="img/car1.jpg" alt="car1">
      <div class="carousel-caption">
        <h3>Kunjungan Walikota Semarang</h3>
        <p>Hendrar Prihadi, S.E, M.M Selaku Walikota Semarang berkunjung ke SMA Sejahtera Semarang Dalam Rangka Hari Pramuka 2016</p>
      </div>
    </div>

    <div class="item">
      <img src="img/car2.jpg" alt="car2" class="img-responsive">
      <div class="carousel-caption">
        <h3>Upacara Api Unggun 2016</h3>
        <p>Para Ambalan dan Peserta Pramuka dari SMA Sejahtera sedang melangsungkan Kegiatan Upacara Api Unggun dalam rangka Acara Persami 2016</p>
      </div>
    </div>

    <div class="item">
      <img src="img/car3.jpg" alt="car3" class="img-responsive">
      <div class="carousel-caption">
        <h3>Kunjungan ke Istana Negara</h3>
        <p>Para Anggota Pramuka SMA Sejahtera mendapat undangan ke Istana Negara dalam memperingati Hari Pramuka ke - 54</p>
      </div>
    </div>

    <div class="item">
      <img src="img/car4.jpg" alt="car4" class="img-responsive">
      <div class="carousel-caption">
        <h3>Regu Inti Angkatan Baru 2016</h3>
        <p>Foto Bersama Ambalan Angkatan baru 2016</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div class="container-fluid">
	<div class="row">
	    <div class="col-md-3">
	    	<div class="panel panel-default">
          <div class="panel-heading">Partner</div>
		  		<div class="panel-body">
		    		<div style="margin-top: 10px;" class="text-center">
              <a href="http://pramuka.or.id/"><img width="262" src="img/partner-pramuka-new-ok.png" alt="Partner" class="img img-responsive" /></a>
            <div style="margin-top: 20px;"></div>
            </div>
          </div>
        </div>
      </div>
	    <div class="col-md-6">
	    	<div class="panel panel-default">
		  	<div class="panel-heading">Berita</div>
		  		<div class="panel-body">
		    		<?php include 'index-berita.php'; ?>
		  		</div>
			</div>
	    </div>
	    <div class="col-md-3">
	     <div class="panel panel-default">
		  	<div class="panel-heading">Agenda</div>
		  		<div class="panel-body">
		    		<?php include 'index-agenda.php'; ?>
		  		</div>
			 </div>
	    </div>
	  </div>
 </div>
</div>
<?php
	include 'footer.php';
?>