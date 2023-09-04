<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Gejala</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Gejala</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <form class="form-group" action="<?= base_url() ?>admin/TambahGejala/tambah_gejala" method="POST">
            <div class="row">
                <div class="col col-md-3">
                    <p>Tambah Aturan</p>
                </div>
                <div class="col col-md-3">
                    <input class="form-control" type="text" name="id_gejala" placeholder="ID Gejala">
                </div>
                <div class="col col-md-3">
                    <input class="form-control" type="text" name="nama_gejala" placeholder="Nama Gejala">
                </div>
                <div class="col col-md-3">
                    <input class="form-control" type="text" name="jumlah" placeholder="Jumlah Gejala">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col col-md-12">
                    <input onclick="openModal('<?= base_url() ?>admin/TambahGejala/tambah_gejala')" type="submit" class="btn btn-success form-control" name="submit" value="Lanjut Penambahan">
                </div>
            </div>
        </form>
    </div>



</div>