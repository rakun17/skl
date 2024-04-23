<?php
  $timezone = "Asia/Bangkok";
  date_default_timezone_set($timezone);

  $day   = 05;
  $month = 05;
  $year  = 2023;

  $schedule = $year."-05-"."05 13:00:00";
  $now      = date("Y-m-d H:i:s");

  // mencari mktime untuk tanggal 3 Juni 2022 00:00:00 WIB
  $selisih1 =  mktime(13, 0, 0, $month, $day, $year);

  // mencari mktime untuk current time
  $selisih2 = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
   
  // mencari selisih detik antara kedua waktu
  $delta    = $selisih1 - $selisih2;
   
  // proses mencari jumlah hari
  $a        = floor($delta / 86400);
   
  // proses mencari jumlah jam
  $sisa     = $delta % 86400;
  $b        = floor($sisa / 3600);
   
  // proses mencari jumlah menit
  $sisa     = $sisa % 3600;
  $c        = floor($sisa / 60);
   
  // proses mencari jumlah detik
  $sisa     = $sisa % 60;
  $d        = floor($sisa / 1);

  if ($schedule > $now) {
?>
<div class="flex-w flex-c cd100 wsize1 bor1">
  <div class="flex-col-c-m size2 bg0 bor2">
    <span class="l1-txt3 p-b-7 days"><?php echo $a; ?></span>
    <span class="s1-txt1">Days</span>
  </div>

  <div class="flex-col-c-m size2 bg0 bor2">
    <span class="l1-txt3 p-b-7 hours"><?php echo $b; ?></span>
    <span class="s1-txt1">Hours</span>
  </div>

  <div class="flex-col-c-m size2 bg0 bor2">
    <span class="l1-txt3 p-b-7 minutes"><?php echo $c; ?></span>
    <span class="s1-txt1">Minutes</span>
  </div>

  <div class="flex-col-c-m size2 bg0">
    <span class="l1-txt3 p-b-7 seconds"><?php echo $d; ?></span>
    <span class="s1-txt1">Seconds</span>
  </div>
</div>
<?php } else { echo ""; } ?>