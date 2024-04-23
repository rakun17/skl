<?php
  ini_set('display_errors',0);  
  ini_set('memory_limit' , '128M');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>SKL <?php echo date("Y"); ?> - SMK NEGERI 1 JAMBLANG</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
  	<link rel="icon" type="image/png" href="images/logo.png"/>
    <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
  </head>
  <body class="body">
  	<div class="bg-g2 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-b-30">
      <div id="countdown"><?php include "countdown.php"; ?></div>

      <?php if ($schedule <= $now) { ?>
  		<div class="flex-col-c w-full p-t-50 p-b-80">
        <img src="images/logo.png">
  			<h3 class="l1-txt1 txt-center p-b-10" style="font-size: 45px;">
  				Pengumuman Kelulusan
  			</h3>

  			<p class="txt-center l1-txt2 p-b-43 wsize2">
  				Kelas XII SMK NEGERI 1 JAMBLANG <br>
          Tahun Pelajaran 2022/2023
  			</p>

  			<form class="flex-w flex-c-m w-full contact100-form validate-form" method="post" action="index.php">
  				<div class="wrap-input100 validate-input where1" data-validate = "required">
  					<input class="s1-txt3 placeholder0 input100" type="text" name="nis" placeholder="NIS" autocomplete="off">
  				</div>
  				<button class="flex-c-m s1-txt4 size3 how-btn trans-04 where1" type="submit" name="submit">
  					Search
  				</button>
  			</form>			

        <?php
          if (isset($_POST['submit'])) {
            $YEAR = date("Y"); 
            $NIS  = $_POST['nis'];

            if (file_exists("cert/".$YEAR."/".$NIS.".pdf")) {
        ?>
          <p class="txt-center l1-txt2 p-b-43 wsize2">
            <p class="txt-center l1-txt2 p-b-43 wsize2" style="color: #000000;">
              Berdasarkan Rapat Pleno Dewan Guru Pada Tanggal 4 Mei 2023, Anda Dinyatakan <strong style="color: #14ff00;">LULUS</strong>. Silahkan Download SKL dibawah ini:
            </p>
            
            <button class="flex-c-m s1-txt4 size3 how-btn trans-04 where1" style="background-color: #ff6c00;" onclick="JavaScript:window.location.href='download.php?file=<?php echo $NIS; ?>.pdf';">
               <i class="fa fa-download"></i> &nbsp; Download
            </button>
          </p>
        <?php } else { ?>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="alert alert-danger" role="alert" style="margin-top: 35px;">
                  Masukkan NIS dengan benar!
                </div>
              </div>
            </div>
          </div>
        <?php } } ?>
  		</div>
      <?php } else { ?>
      <div class="fw-bold flex-col-c w-full p-t-50 p-b-80">
        <img src="images/logo.png">
        <h3 class="fw-bold l1-txt3 txt-center p-b-10">
          Coming Soon
        </h3>

        <p class="txt-center l1-txt4 p-b-43 wsize2">
          Our website is under construction, follow us for update now!
        </p>
      </div>
      <?php } ?>

  		<span class="s1-txt3 txt-center">
  			@ 2022. ICT Team
  		</span>
  	</div>
    <!--===============================================================================================-->	
  	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
  	<script src="vendor/bootstrap/js/popper.js"></script>
  	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
  	<script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
  	<script src="vendor/countdowntime/moment.min.js"></script>
  	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
  	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
  	<script src="vendor/countdowntime/countdowntime.js"></script>
  	<?php if ($schedule > $now) { ?>
    <script type="text/javascript">
      $('#countdown').load("countdown.php");
      var refreshId = setInterval(function() {
          $('#countdown').load("countdown.php").fadeIn("slow");
      }, 1000);

  		// $('.cd100').countdown100({
  		// 	// Set Endtime here
  		// 	// Endtime must be > current time
  		// 	endtimeYear: 2022,
  		// 	endtimeMonth: 6,
  		// 	endtimeDate: <?php echo $a; ?>,
  		// 	endtimeHours: <?php echo $b; ?>,
  		// 	endtimeMinutes: <?php echo $c; ?>,
  		// 	endtimeSeconds: <?php echo $d; ?>,
  		// 	timeZone: "Asia/Bangkok" 
  		// });
  	</script>
    <?php } ?>
    <!--===============================================================================================-->
  	<script src="vendor/tilt/tilt.jquery.min.js"></script>
  	<script >
  		$('.js-tilt').tilt({
  			scale: 1.1
  		})
  	</script>
    <!--===============================================================================================-->
  	<script src="js/main.js"></script>
  </body>
</html>