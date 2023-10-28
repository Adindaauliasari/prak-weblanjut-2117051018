<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kelas</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <br>
        <br>
        <br>
        <br>
        <br>
    <form action="<?= base_url('/kelas/create') ?>">
    <button type=submit>Tambah Kelas </button></form>
    <br>
                <?php
                $no = 1;
                foreach ($kelas as $kelas){
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $kelas['nama_kelas'] ?></td>
                    
                    <td class="d-flex justify-content-center">
                        <a href="<?= base_url('kelas/'.$kelas['id']) ?>" class="btn btn-info" style="margin-right: 5px;">Detail</a>
                        <a href="<?= base_url('kelas/'.$kelas['id'].'/edit') ?>" class="btn btn-warning" style="margin-right: 5px;">Edit</a>
                        <form id="delete-form-<?= $kelas['id'] ?>" action="<?= base_url('kelas/'.$kelas['id']) ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="button" class="btn btn-danger" onclick="confirmDelete(<?= $kelas['id'] ?>)">Delete</button>
                        </form>
                    </td>

                    <script>
                        function confirmDelete(kelasId) {
                            if (confirm("Are you sure you want to delete this item?")) {
                                document.getElementById("delete-form-" + kelasId).submit();
                            }
                        }
                    </script>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

<?= $this->endsection() ?>