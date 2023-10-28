<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<table>
    <thead>
        <tr>
            <th>NOMOR</th>
            <th>NAMA</th>
            <th>NPM</th>
            <th>KELAS</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a class="btn btn-primary custom-button-add" href="<?= base_url('/user/create')?>">Tambah Data</a>
    <br>
        <?php
        foreach ($users as $user){
        ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td class="d-flex justify-content-center">
                        <a href="<?= base_url('user/'.$user['id']) ?>" class="btn btn-info" style="margin-right: 5px;">Detail</a>
                        <a href="<?= base_url('user/'.$user['id'].'/edit') ?>" class="btn btn-warning" style="margin-right: 5px;">Edit</a>
                        <form id="delete-form-<?= $user['id'] ?>" action="<?= base_url('user/'.$user['id']) ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="button" class="btn btn-danger" onclick="confirmDelete(<?= $user['id'] ?>)">Delete</button>
                        </form>
                    </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?= $this->endSection()?>