<div class="card">
<form action="<?= site_url('caraousel/simpan'); ?>" method="post" enctype="multipart/form-data">
      <h5 class="card-header">File input</h5>
      <div class="card-body">
      <input type="hidden" name="id_caraousel" value="<?= $this->uri->segment(3, 0)?>">
          <div class="mb-4">
          <label for="">Judul</label>
          <input type="text" class="form-control" placeholder="Judul Foto" name="judul" required/>
          </div>
        <div class="mb-4">
          <label for="formFile" class="form-label">Pilih Foto Dengan Ukuran(1:1)</label>
          <input class="form-control" type="file" name="foto" accept="image/jpg, image/jpeg, image/png">
        </div>
        <button type="submit" class="btn btn-outline-primary m-2">Add</button>

      </div>
    </div>
  </form>
<?php foreach ($caraousel as $aa){ ?>
<div class="card h-100">
<img src="<?= base_url('tema/upload/caraousel/'.$aa['foto'])?>" width="100px" alt="">
      <div class="card-body">
        <h5 class="card-title"><?= $aa['judul']?></h5>
        
      </div>
    </div>
<?php } ?>