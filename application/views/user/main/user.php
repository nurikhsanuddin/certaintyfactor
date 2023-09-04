<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-8 mx-auto">
            <div class="text-center">
                <h1>Program Dignosa Kerusakan Smartphone Dengan Certainty Factor</h1>
            </div>
        </div>
    </div>
    <div class="row mt-5">

        <form method="post" class="form-control border-0" action="<?php base_url() ?>Main/proses">
            <div class="row">
                <?php foreach ($get_gejala as $id => $nama_gejala) { ?>
                    <div class="col-12 col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="gejala[]" value="<?= $id ?>" id="gejala<?= $id ?>">
                            <label class="form-check-label" for="gejala<?= $id ?>"><?= $nama_gejala ?></label>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-primary w-100" value="Deteksi">
            </div>
        </form>

    </div>
</div>