<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Aturan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Aturan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Aturan Sesuai Gejala</h3>

                    </div>

                    <div class="card-body table-responsive p-0">
                        <form action="<?= base_url() ?>admin/TambahGejala/tambah_kerusakan" method="post">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID Aturan</th>
                                        <th>Kerusakan</th>
                                        <th>CF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 1; $i <= $jumlah_aturan; $i++) {
                                    ?>
                                        <tr>
                                            <td><?= $id_aturan ?></td>
                                            <td><input type="text" name="kerusakan[]" placeholder="jenis Kerusakan"></td>
                                            <td><input type="text" name="cf[]" placeholder="Nilai CF"></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="text-center">
                                <input type="hidden" name="id_aturan" value="<?= $id_aturan ?>">
                                <input type="hidden" name="jumlah" value="<?= $jumlah_aturan ?>">
                                <input type="submit" class="btn btn-info w-100" value="Tambahkan Data">
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>