<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah konfigurasi</title>
</head>
<body> 
    <form action="<?= base_url('konfigurasi/update')?>" method="post">
  
   
<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Tambah Konfigurasi</h6>
       
        <label for="">Judul Website</label>
        <p></p>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" 
                name = "judul_website" placeholder="judul" value="<?= $konfigurasi->judul_website; ?>">
        </div>
        <br>
        <div>
            <label for="">Profil Website</label>
            <p></p>
            <textarea name="profil_website" id="" cols="30" rows="10">
            <?= $konfigurasi->profil_website; ?>
            </textarea>
        </div>
        <p></p>
        <label for="floatingInput">Instagram</label>
        <p></p>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" 
                name = "instagram" placeholder="judul" value="<?= $konfigurasi->instagram; ?>">
        </div>
        <br>
        <p></p>
        <label for="floatingInput">Email</label>
        <p></p>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" 
                name = "email" placeholder="judul" value="<?= $konfigurasi->email; ?>">
        </div>
        <br>
        <label for="floatingInput">Alamat</label>
        <p></p>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" 
                name = "alamat" placeholder="judul" value="<?= $konfigurasi->alamat; ?>">
        </div>
        <br>
        <label for="floatingInput">No WA</label>
        <p></p>
        <div class="form-floating mb-3">
            <p></p>
            <input type="text" class="form-control" 
                name = "no_wa" placeholder="judul" value="<?= $konfigurasi->no_wa; ?>">
        </div>
            <p></p>

            <input type="submit"  class="btn btn-outline-primary m-2" value="tambah">
            
        </div>
        
    </div>
</div>
    </form>
</body>
