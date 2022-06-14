<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- end -->

    <title>Kalkulator IMT </title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap');
        body {
            margin-bottom: 150px;
            background: linear-gradient(to bottom right, #333333, #121212);
        }
        .header {
            height: 150px;
            border-radius: 5px;
            padding: 5px;
            margin: 10px 25px 35px 25px;
            border: 2px hidden black;
            background-color: #F4ABC4;
            display: flex;
            justify-content: space-around; 
            align-items: center; 
        }

        .judul {
            font-size: 30px;
            text-align: center;
            text-shadow: 2px 1px 0 black;
        }
        .desc {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90px;
            width: 70%;
            font-size: 20px;
            border:2px dashed black ;
            text-align: center; 
            border-radius: 20px;
            margin: 15px;
            padding: 10px;
            font-weight: 500;
            font-style: italic;
        }
    </style>
</head>
<body>
    <!-- header -->
    <div class="header bg-warning">
        <div class="judul">
            <header><p>KALKULATOR IMT</p></header>
        </div>

        <div class="desc">
            <p>Gunakan kalkulator ini untuk memeriksa Indeks Massa Tubuh (IMT) dan mengecek apakah berat badan Anda ideal atau tidak dan mencegah terkena penyakit.</p>
        </div>
    </div>
    <!-- end -->
    
    <!-- form -->
    <div class="container d-flex justify-content-center">
        <div class="card bg-warning w-50">
        
        <!-- judul form -->
        <div class="card-header text-uppercase text-center fw-bold">Kalkulator IMT Kelompok 8 </div>
        <!-- end -->
            
            <div class="card-body">
                <form action="index.php" method="post" autocomplete="off">
                    <!-- nama -->
                    <div class="nama mt-1">
                        <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                        <input class="form-control bg-warning border-dark" type="text" placeholder="Nama Lengkap" name="nama" id="nama">
                    </div>
                    <!-- end -->
                    
                    <!-- kelamin -->
                    <div class="kelamin mt-1">
                        <label for="kelamin" class="form-label fw-bold">Jenis kelamin</label>
                        <div class="form-check">
                        <input class="form-check-input bg-dark" type="radio" id="laki"           
                        name="kelamin" value="Laki-laki"> Laki-laki
                        </div>
                        
                        <div class="form-check">
                        <input class="form-check-input bg-dark" type="radio" id="perempuan" name="kelamin" value="Perempuan">Perempuan
                        </div>
                    </div>
                    <!-- end -->
                    
                    <!-- usia -->
                    <div class="usia mt-1">
                        <label for="usia" class="form-label fw-bold">Usia</label>
                        <input class="form-control bg-warning border-dark" type="text" placeholder="Usia" name="usia" id="usia">
                    </div>
                    <!-- end -->
                    
                    <!-- berat -->
                    <div class="berat mt-1">
                        <label for="berat" class="form-label fw-bold">Berat Badan (Kg)</label>
                        <input class="form-control bg-warning border-dark" type="text" placeholder="Berat Badan (Kg)" name="bb" id="berat">
                    </div>
                    <!-- end -->
                    
                    <!-- tinggi -->
                    <div class="tinggi mt-1">
                        <label for="tinggi" class="form-label fw-bold">Tinggi Badan (Cm)</label>
                        <input class="form-control bg-warning border-dark" type="text" placeholder="Tinggi Badan (Cm)" name="tb" id="tinggi">
                    </div>
                    <!-- end -->
        
                    <!-- submit -->
                    <div class="submit mt-2 justify-content-center d-flex">
                    <button type="submit" class="btn btn-dark fw-bolder text-warning" name="hitung">Hitung</button>
                    </div>
                    <!-- end -->
                </form>
            </div>
        </div>
    </div>
<!-- end -->

</body>
</html>

<?php
// rumus
if(isset($_POST['hitung'])) {
    $nama=$_REQUEST['nama'];
    $kelamin=$_REQUEST['kelamin'];
    $usia=$_REQUEST['usia'];
    $bb=$_REQUEST['bb'];
    $tb1=$_REQUEST['tb'];
    
    $tb= $tb1 / 100;
    $hasil= $bb / ($tb * $tb);
    $imt= number_format($hasil, 1);    
// end

    if($imt <= 18.5) {
        // hasil kurus
        echo '
        <div class="container d-flex justify-content-center mt-3">
        <div class="card text-start bg-warning" style="width: 650px;" >
        <div class="card-body">
        <h5 class="card-title text-center">Kurus</h5>
        <p class="card-text">
              Nama: '.$nama.'
              <br>
              Jenis Kelamin: '.$kelamin.'
              <br>
              Usia: '.$usia.' Tahun
              <br>
              Berat Badan: '.$bb.' Kg
              <br>
              Tinggi Badan: '.$tb1.' Cm
              <br>
              IMT: '.$imt.'
              <br> 
        </p>
        <p class="card-text text-center fst-italic">
              "Halo '.$nama.' kondisi badan anda saat ini kurus 😔. Ayoo capai berat badan ideal anda dengan pola hidup yang lebih sehat dan juga olahraga yang teratur.
              SEMANGAT !!!"
              <br>
              <a target="_blank" href="https://www.halodoc.com/artikel/3-tips-tetap-sehat-untuk-si-kurus" class="text-decoration-none text-decoration-underline text-dark">Ini tips untuk anda.</a>
              &
              <a target="_blank" href="https://youtu.be/Tz9d7By2ytQ" class="text-decoration-none text-decoration-underline text-dark">Ayoo kalahkan malasmu!!</a>
        </p>
        </div>
        </div>
        </div>';
    }
    // end

    // hasil normal
    elseif($imt <= 24.9) {
        echo '
        <div class="container d-flex justify-content-center mt-3">
        <div class="card text-start bg-warning" style="width: 650px;">
        <div class="card-body">
        <h5 class="card-title text-center">Normal</h5>
        <p class="card-text">
              Nama: '.$nama.'
              <br>
              Jenis Kelamin: '.$kelamin.'
              <br>
              Usia: '.$usia.' Tahun
              <br>
              Berat Badan: '.$bb.' Kg
              <br>
              Tinggi Badan: '.$tb1.' Cm
              <br>
              IMT: '.$imt.' 
        </p>
        <p class="card-text text-center fst-italic">
              "Halo '.$nama.' kondisi badan anda saat ini normal 😁. Ayoo pertahankan berat badan ideal anda dengan pola hidup yang sehat dan juga olahraga yang teratur.
              SEMANGAT !!!"
              <br>
              <a target="_blank" href="https://www.halodoc.com/artikel/pola-hidup-sehat-untuk-menjaga-berat-badan-ideal" class="text-decoration-none text-decoration-underline text-dark">Ini tips untuk anda </a>
              &
              <a target="_blank" href="https://youtu.be/Tz9d7By2ytQ" class="text-decoration-none text-decoration-underline text-dark">Ayoo kalahkan malasmu!!</a>
        </p>
        </div>
        </div>
        </div>';
    }
    // end

    // hasil gemuk
    elseif($imt <= 29.9) {
        echo '
        <div class="container d-flex justify-content-center mt-3">
        <div class="card text-start bg-warning" style="width: 650px;">
        <div class="card-body">
        <h5 class="card-title text-center">Gemuk</h5>
        <p class="card-text">
              Nama: '.$nama.'
              <br>
              Jenis Kelamin: '.$kelamin.'
              <br>
              Usia: '.$usia.' Tahun
              <br>
              Berat Badan: '.$bb.' Kg
              <br>
              Tinggi Badan: '.$tb1.' Cm
              <br>
              IMT: '.$imt.' 
        </p>
        <p class="card-text text-center fst-italic">
              "Halo '.$nama.' kondisi badan anda saat ini gemuk 🙂. Ayoo capai berat badan ideal anda dengan pola hidup yang sehat dan juga olahraga yang teratur.
              SEMANGAT !!!"
              <br>
              <a target="_blank" href="http://p2ptm.kemkes.go.id/infographic-p2ptm/obesitas/jika-anda-gemuk-obesitas-apa-yang-harus-dilakukan-yuk-simak-tipsnya" class="text-decoration-none text-decoration-underline text-dark">Ini tips untuk anda </a>
              &
              <a target="_blank" href="https://youtu.be/Tz9d7By2ytQ" class="text-decoration-none text-decoration-underline text-dark">Ayoo kalahkan malasmu!!</a>
        </p>
        </div>
        </div>
        </div>';
    }
    // end

    // hasil obesitas
    elseif($imt >= 30.0) {
        echo '
        <div class="container d-flex justify-content-center mt-3">
        <div class="card text-start bg-warning" style="width: 650px;">
        <div class="card-body">
        <h5 class="card-title text-center">Obesitas</h5>
        <p class="card-text">
              Nama: '.$nama.'
              <br>
              Jenis Kelamin: '.$kelamin.'
              <br>
              Usia: '.$usia.' Tahun
              <br>
              Berat Badan: '.$bb.' Kg
              <br>
              Tinggi Badan: '.$tb1.' Cm
              <br>
              IMT: '.$imt.' 
        </p>
        <p class="card-text text-center fst-italic">
              "Halo '.$nama.' kondisi badan anda saat ini obesitas 😔. Ayoo capai berat badan ideal anda dengan pola hidup yang lebih sehat dan juga olahraga yang teratur.
              SEMANGAT !!!"
              <br>
              <a target="_blank" href="https://hellosehat.com/nutrisi/obesitas/cara-mengatasi-obesitas/" class="text-decoration-none text-decoration-underline text-dark">Ini tips untuk anda </a>
              &
              <a target="_blank" href="https://youtu.be/Tz9d7By2ytQ" class="text-decoration-none text-decoration-underline text-dark">Ayoo kalahkan malasmu!!</a>
        </p>
        </div>
        </div>
        </div>';
    }  
    // end
}
?>
