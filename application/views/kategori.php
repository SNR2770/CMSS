<div class="p-5 mt-lg-1">
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Tambah Kategori
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog col-md-5 p-5 mt-lg-5" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('kategori/simpan')?>" method="post">

      <div class="input-field">
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Kategori</label>
            <div class="col-sm-10">
            <input type="text" name="nama_kategori" placeholder="Masukkan Nama Kategori" >
            </div>
        </div>

    
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>

  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
            <th scope="col">Nama Kategori Konten</th>
            <th scope="col">Aksi</th>
        </tr>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr class="table-default">
        <?php foreach($kategori as $aa): ?>
            <tr>
                <td><?= $aa->nama_kategori; ?></td>
                <td>
                    <?= anchor(site_url('kategori/delete/'.$aa->id_kategori), 'Delete') ?>
                </td>
            </tr>  
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>