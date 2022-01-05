<script type="text/javascript">
var z;
window.onload = function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    alert("Browser kamu tidak support GPS :(");
  }
}

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    alert("Browser kamu tidak support GPS :(");
  }
}

function showPosition(position) {
  if (position.coords.latitude > -6.190948 && position.coords.latitude < -6.189100 && position.coords.longitude > 107.017479 && position.coords.longitude < 107.019128){
    alert("kamu didalam kantor");
    var z = "dalam";	
    document.getElementById("lok").value = "1";
  } else {
    alert("kamu diluar kantor!");
    var z = "luar";
    document.getElementById("lok").value = "0";
  }
}

</script>

<section class="col-lg-12 connectedSortable">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              Absen ini menggunakan sistem <b>GEOFENCING</b> (hanya bisa absen jika didalam area kantor) <br>
              Harap beri izin <b>akses lokasi</b> pada browser kamu, agar sistem bisa tau lokasi kamu <br>
              Apabila ada kesalahan lokasi silahkan cek ulang lokasi dengan menekan tombol dibawah<br>
              <button class="btn btn-primary" onclick="getLocation()">cek lokasi</button><br>
              Jika terjadi masalah coba ganti device kamu dengan device yang lain<br>
              dan jika masih bermasalah silahkan hubungi admin.
            </div>
</section>

<section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">

          <section class="col-lg-6 connectedSortable">
            <!-- Map card -->
            <div class="card"> 
              <div class="card-header"> Notifikasi </h3>
              </div>
              <form method="post" action="pegawai/proses_absen">
               <div class="card-body">
                  <?php if ($waktu != 'dilarang') { ?>
                  <p class="text-center">Hai, <?=$this->session->userdata('nama')?> anda hari ini belum melakukan absen <b><?=$waktu?></b>. Silahkan lakukan absen pada tombol abse berikut <br><br>
                  <button class="btn btn-primary">Absen <?=$waktu?></button></p>
                  <input type="hidden" name="ket" id="ket" value="<?=$waktu?>">
                      <input type="hidden" name="lok" id="lok" value="1">
                    <?php } else { ?>
                  <p class="text-center">Hai, <?=$this->session->userdata('nama')?> anda hari ini sudah melakukan absensi <b>Masuk</b> dan <b>Pulang</b></p>
                  <?php }  ?>
                </div>
                </form>
            </div>
          </section>

          <section class="col-lg-6 connectedSortable">

            <!-- Map card -->
            <div class="card">
              <div class="card-header"> Slip Gaji </h3>
              </div>
               <div class="card-body">
                  <p class="text-center">Hai, <b><?=$this->session->userdata('nama')?></b> silahkan download slip gaji anda pada tombol berikut <br><br><a class="btn btn-info" href="<?=base_url('pegawai/slip')?>">Download Slip Gaji</a></p>
                </div>
            </div>
          </section>

        </div>
      </div>
    </section>
    
          