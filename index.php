
<?php

$data = file_get_contents('data/buku.json');
$daftar = json_decode($data, true);




$daftar = $daftar ["daftar"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>uaspwl</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
        <img src="gambar/logo.png" width="130">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">HOME</a>
      </div>
    </div>
  </div>
</nav> 
<div class="container">
<h2> TOKO BUKU ALAKADAR </h2>
    <div class="row mt-2">
        <?php foreach($daftar as $row):?>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-header"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="0.8" d="M0,128L0,288L288,288L288,192L576,192L576,128L864,128L864,192L1152,192L1152,288L1440,288L1440,0L1152,0L1152,0L864,0L864,0L576,0L576,0L288,0L288,0L0,0L0,0Z"></path></svg></div>
                <div class="card-body">
                    <img src="gambar/<?=$row["gambar"];?>" class="card-img-top" alt="...">
                    <h5 class="card-title"><?=$row["judul"];?></h5>
                    <h5 class="card-title"><?=$row["pengarang"];?></h5>
                    <h6 class="card-title"><?=$row["terbit"];?></h6>
                    <h5 class="card-title"><?=$row["harga"];?></h5>
                    <a href="whatsapp://send?text=Hello brader&phone=+622214461595" class="btn btn-primary">Pesan</a>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e7008a" fill-opacity="1" d="M0,256L48,261.3C96,267,192,277,288,266.7C384,256,480,224,576,202.7C672,181,768,171,864,186.7C960,203,1056,245,1152,234.7C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div> 
</body>
</html>