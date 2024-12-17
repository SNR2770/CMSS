<div class="p-5 mt-lg-1">
<button type="button" class="btn btn-outline-primary m-2"><?= anchor(site_url('konten/tambah'), 'Tambah') ?></button>

  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
        <tr>
            <th scope="col">Judul</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Foto</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
        </tr>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr class="table-default">
        <?php foreach($conten as $aa) :?>
            <tr>
              
                <td><?= $aa->judul;?></td>
                <td>
                <?= htmlspecialchars(mb_substr($aa->keterangan, 0, 100), ENT_QUOTES, 'UTF-8'); ?>
                        <?php if (mb_strlen($aa->keterangan) > 100): ?>
                            ... <a href="<?= base_url('welcome/artikel/'.htmlspecialchars($aa->slug, ENT_QUOTES, 'UTF-8')) ?>">Baca Selengkapnya</a>
                        <?php endif; ?>
                </td> 
                
                <td><img src="<?= base_url('tema/upload/konten/'.$aa->foto)?>" width="100px" alt=""></td>
                <td><?= $aa->tanggal; ?></td>
                
                <td>
                    <?= anchor(site_url('konten/edit/'.$aa->id_konten), 'Edit') ?>
                    |
                    <?= anchor(site_url('konten/hapus/'.$aa->id_konten), 'Delete') ?>
                </td>
            </tr>  
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>