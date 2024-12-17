<div class="p-5 mt-lg-1">
<button type="button" class="btn btn-outline-primary m-2"><?= anchor(site_url('user/tambah'), 'Registrasi') ?></button>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Nama</th>
            <th scope="col">Level</th>
            <th scope="col">Aksi</th>
        </tr>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr class="table-default">
        <?php foreach($user as $aa): ?>
            <tr>
                <td><?= $aa->username;?></td>
                <td><?= $aa->nama; ?></td>
                <td><?= $aa->level; ?></td>
                <td>
                    <?= anchor(site_url('user/edit/'.$aa->id_user), 'Edit') ?>
                    |
                    <?= anchor(site_url('user/delete/'.$aa->id_user), 'Delete') ?>
                </td>
            </tr>  
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>

