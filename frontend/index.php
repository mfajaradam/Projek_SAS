<?php
  include "../koneksi.php";
  ob_start();

  $sqls = "SELECT * FROM pesan";
  $hasil = mysqli_query($conn,$sqls);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="tampilan.css">

    <title>Bandung Lautan Api</title>
  </head>
  <body>

    <!-- awal home -->
  <div class="dashboard text-center">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
      <div class="container">
        <a class="navbar-brand">mfajaradamm.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Sejarah">Sejarah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tokoh">Tokoh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pesan">Pesan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <section id="home" class="home1">
      <img class="mb-2" src="../img/logo_bandung.png" alt="baknus" width="200" />
      <h1 class="display-3 text-white">BANDUNG LAUTAN API</h1>
      <p class="lead text-white">PERISTIWA PEMBAKARAN WILAYAH</p>
    </section>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0dcaf0" fill-opacity="1" d="M0,288L34.3,282.7C68.6,277,137,267,206,256C274.3,245,343,235,411,240C480,245,549,267,617,272C685.7,277,754,267,823,234.7C891.4,203,960,149,1029,138.7C1097.1,128,1166,160,1234,192C1302.9,224,1371,256,1406,272L1440,288L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg> -->
  </div>
  <!-- akhir home -->

    <!--  -->
    <section id="Sejarah" class="story">
      <div class="container text-white">
        <div class="row text-center mb-3">
          <div class="sejarah col-12 col-md-12 mb-3">
            <h2>SEJARAH</h2>
          </div>
        </div>
            <div class="row justify-content-center fs-5 text-break text-center">
              <div class="col-md-4 mb-3 mt-5">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../img/f1.jpeg" class="d-block w-100" alt="..." height="300" widht="500">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/f2.jpeg" class="d-block w-100" alt="..." height="300" widht="500">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/f3.jpeg" class="d-block w-100" alt="..." height="300" widht="500">
                  </div>
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button> -->
              </div>
          </div>
          <div class="col-md-8 mb-3">
            <p>Bandung Lautan Api merupakan sebuah peristiwa bersejarah yang terjadi usai proklamasi kemerdekaan Indonesia. Pada 24 Maret 1946, Bandung Selatan dibumihanguskan oleh para pejuang karena suatu alasan. Peristiwa tersebut pun diabadikan dengan Monumen Bandung Lautan Api.</p>
            <p>Pada tanggal 12 Oktober 1945, pasukan Sekutu di bawah Brigade MacDonald datang. Mereka memaksa warga Bandung untuk menyerahkan senjata yang diperoleh setelah melucuti tentara Jepang.
              Situasi pecah saat orang-orang Belanda yang baru bebas dari kamp tahanan melakukan tindakan yang mengacaukan keamanan negara. TKR (Tentara Keamanan Rakyat) dan badan-badan perjuangan lainnya pun melakukan serangan kepada sekutu.
              Para pejuang menyerang markas-markas sekutu di Bandung bagian utara, termasuk Hotel Homan dan Hotel Preanger yang menjadi markas besar bagi Sekutu. Kondisi ini menjadi awal dari peristiwa hangusnya Bandung</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center text-white pb-5 pt-3">
            <h1>LATAR BELAKANG</h1>
          </div>
          <div class="col-md-6 text-center fs-5">
            <p>Pasukan Inggris bagian dari Brigade MacDonald tiba di Bandung pada tanggal 12 Oktober 1945. Sejak semula hubungan mereka dengan pemerintah ADAM SYAWAL DEFATRA ABSEN 17 XII MIPA 3RI sudah tegang. Mereka menuntut agar semua senjata api yang digunakan dalam perang di tangan penduduk, kecuali TKR (Tentara Keamanan Rakyat), diserahkan kepada mereka. Orang-orang Belanda yang baru dibebaskan dari kamp tawanan mulai melakukan tindakan-tindakan yang mulai mengganggu keamanan. Akibatnya, bentrokan bersenjata antara Inggris dan TKR (Tentara Keamanan Rakyat) tidak dapat dihindari. Selain itu, Adapun salah satu markas peninggalan persenjataan Jepang Di bandung yang ingin di perebutkan juga oleh Inggris.</p>
          </div>
          <div class="col-md-6">
          <img src="../img/bandung.jpg" class="d-block w-100" alt="..." height="400" widht="500">
          </div>
        </div>
        
        <div class="row">
          <div class="col-12 text-center pt-5 pb-5">
            <h1>AKIBAT</h1>
          </div>
          <div class="col-md-12 fs-5 text-center">
            <p>Pembumi-hangusan Bandung tersebut dianggap merupakan strategi yang tepat dalam Perang Kemerdekaan Indonesia karena kekuatan TRI dan milisi rakyat tidak sebanding dengan kekuatan pihak Sekutu dan NICA yang berjumlah besar. Setelah peristiwa tersebut, TRI bersama milisi rakyat melakukan perlawanan secara gerilya dari luar Bandung. Peristiwa ini menginspirasi Ismail Marzuki beserta para pejuang Indonesia saat itu untuk mengubah dua baris terakhir dari lirik lagu Halo, Halo Bandung menjadi lebih patriotis dan membakar semangat perjuangan. Beberapa tahun kemudian, lagu Halo, Halo Bandung menjadi kenangan akan emosi yang para pejuang kemerdekaan Republik Indonesia alami saat itu, menunggu untuk kembali ke kota tercinta mereka yang telah menjadi lautan api.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#198754" fill-opacity="1" d="M0,224L34.3,229.3C68.6,235,137,245,206,234.7C274.3,224,343,192,411,192C480,192,549,224,617,213.3C685.7,203,754,149,823,133.3C891.4,117,960,139,1029,165.3C1097.1,192,1166,224,1234,234.7C1302.9,245,1371,235,1406,229.3L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </section>
    <!--  -->

    <!--  -->
    <section id="tokoh" class="bg-success">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col-12 col-md-12 text-white">
            <h2>TOKOH PENTING YANG TERLIBAT</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-5 mb-3">
            <div class="card">
              <img src="../img/moh toha.jpeg" class="card-img-top" alt="pahlawan" height="400" />
              <div class="card-body" style="height: 280px;">
                <p class="card-text mt-5">Mohammad Toha (Bandung, 1927 - Bandung, 11 Juli 1946) adalah seorang komandan Barisan Rakjat Indonesia, sebuah kelompok milisi pejuang yang aktif dalam masa Perang Kemerdekaan Indonesia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <div class="card">
              <img src="../img/ismail.jpeg" class="card-img-top" alt="pahlawan" height="400" />
              <div class="card-body" style="height: 280px;">
                <p class="card-text mt-5">Ismail Marzuki (11 Mei 1914 - 25 Mei 1958) adalah salah seorang komponis besar Indonesia. Namanya sekarang diabadikan sebagai suatu pusat seni di Jakarta yaitu Taman Ismail Marzuki (TIM) di kawasan Cikini, Jakarta Pusat.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <div class="card">
              <img src="../img/abdul haris.jpeg" class="card-img-top" alt="pahlawan" height="400" />
              <div class="card-body" style="height: 280px;">
                <p class="card-text mt-1">Abdul Haris Nasution (3 Desember 1918 - 6 September 2000) adalah seorang jenderal berpangkat tinggi dan politikus Indonesia. Ia bertugas di militer selama Revolusi Nasional Indonesia dan ia tetap di militer selama gejolak berikutnya dari demokrasi Parlementer dan Demokrasi Terpimpin.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <div class="card">
              <img src="../img/sutan.jpeg" class="card-img-top" alt="pahlawan" height="400"/>
              <div class="card-body" style="height: 280px;">
                <p class="card-text">Sutan Syahrir (ejaan lama: Soetan Sjahrir, 5 Maret 1909 - 9 April 1966) adalah seorang intelektual, perintis, dan revolusioner kemerdekaan Indonesia. Ia menjabat sebagai Perdana Menteri Indonesia dari 14 November 1945 hingga 20 Juni 1947. Sjahrir mendirikan Partai Sosialis Indonesia pada tahun 1948.</p>
              </div>
            </div>
          </div>  
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc107" fill-opacity="1" d="M0,128L240,288L480,128L720,128L960,32L1200,224L1440,256L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z"></path></svg>
    </section>
    <!--  -->

    <!--  -->
       <section id="pesan" class="bg-warning">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col text-white">
            <h2>Pesan</h2>
          </div>
        </div>
        <div class="row justify-content-center text-white pb-5">
          <div class="col-md-6">
            <form action="" method="post">
              <div class="mb-3">
                <label for="namauser" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="namauser" placeholder="Masukan Nama Lengkap" name="nama_lengkap" />
              </div>
              <div class="mb-3">
                <label for="pesanuser" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesanuser" name="pesan_user" rows="3"></textarea>
              </div>
              <button class="btn btn-primary" type="submit" name="submit">Kirim</button>
            </form>
          </div>
        </div>
        <div class="row pt-5">
          <?php while($row = mysqli_fetch_assoc($hasil)) { ?>
          <div class="col-md-4 pt-5">
            <div class="card">
              <div class="card-header">
                <h5>PESAN</h5>
              </div>
              <div class="card-body">
                <p>Nama  : <?= $row['nama']; ?></p>
                <p>Pesan : <?= $row['pesan']; ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0dcaf0" fill-opacity="1" d="M0,96L360,160L720,128L1080,160L1440,128L1440,320L1080,320L720,320L360,320L0,320Z"></path></svg>
    </section>
    <!--  -->

    <!-- Footer -->
    <footer class="bg-primary text-center text-white pb-5 bg-info">
      <p class="mb-5">Created With <i class="bi bi-heart-fill text-danger"></i> By <a class="text-white fw-bold" href="https://www.instagram.com/mfajaradamm/">mfajaradam</a></p>
    </footer>
    <!-- Akhir Footer -->

    <?php
            if(isset($_POST["submit"])) {
              $nama = $_POST['nama_lengkap'];
              $pesan = $_POST['pesan_user'];

              $sql = "INSERT INTO pesan (id,nama,pesan) VALUES (null,'$nama','$pesan')";
              $result = mysqli_query($conn,$sql);
              if($result) {
                // header("location:dataBarang.php");
                header("location:index.php");
            } else {
                echo "input data barang gagal";
            }
            }
          ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
        })

        var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
        trigger: 'focus'
        })
    </script>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>