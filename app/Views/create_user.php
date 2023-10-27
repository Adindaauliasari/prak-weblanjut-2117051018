
<?= $this->extend('layouts/app')?>

<!-- <body> -->
    <?= $this->section('content')?>
    <div class="container-fluid w-100 p-0" style="margin-top: 100px !important;position: absolute;">
        <div class="container mx-auto px-5 mt-1" style="margin-bottom: 100px !important;">
            <ul class="p-0 position-relative">
                <li style="display: inline-block;">
                    <h2 style="color: white;font-weight: bold;">Create User</h2>
                </li>
            </ul>
            <form action="<?= base_url('/user/store') ?>" method="POST"  enctype="multipart/form-data">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <h4>Error</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="nama" class="form-label" style="color: white;">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label" style="color: white;">Kelas</label>
                    <select type="text" class="form-control" id="kelas" name="kelas" style="background-color: transparent;color: white;">
                        <?php
                        foreach ($kelas as $item){
                        ?>
                            <option value="<?= $item['id'] ?>" style="color: black;">
                                <?= $item['nama_kelas'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="npm" class="form-label" style="color: white;">NPM</label>
                    <input type="number" class="form-control" id="npm" name="npm">
                </div>

                <label> Choose the File to upload: </label>
                 <input type="file" id="foto" name="foto"/> <br /><br />

                <button type="submit" class="btn btn-primary" name="submit">Create</button>
            </form>
        </div>
    </div>
    <?= $this->endSection()?>