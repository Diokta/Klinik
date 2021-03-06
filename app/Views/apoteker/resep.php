<div class="container mt-1 ms-4 me-0 mw-100">
    <div class="row w-auto me-4">
        <div class="col-3 ps-0 bg-white me-2 p-2">
            <div class="list-group">
                <a href="<?= base_url('apoteker/resep/' . $pasien['id']) ?>" class="list-group-item list-group-item-action fw-bold" style="color: #E79E5A;">
                    <img src=" <?= base_url('images/Cardiograph-orange.png') ?>" class="img-thumbnail" style="height: 30px;" alt="">
                    Resep Obat
                </a>
            </div>
        </div>
        <div class="col ms-2">
            <div class="row py-3 bg-white">
                <div class="col-2">
                    <img src=" <?= base_url('images/profile.png') ?>" class="img-thumbnail border-0 p-0">
                </div>
                <div class="col ">
                    <h5><?= $pasien['nama']; ?></h5>
                    <h6><?php if ($pasien['jenisKelamin'] == 'L') {
                            echo 'Laki-laki';
                        } else {
                            echo 'Perempuan';
                        } ?></h6>
                    <h6><?= $pasien['tanggalLahir']; ?> - <?= $pasien['umur']; ?></h6>
                    <h6>No. Rekam Medis : <?= $pasien['id']; ?></h6>
                </div>
                <div class="col ">
                    <h6 class="fw-bold">Berat Badan</h6>
                    <p><?= $assesment['beratBadan']; ?> Kg</p>
                    <h6 class="fw-bold">Tinggi Badan</h6>
                    <p class="mb-0"><?= $assesment['tinggiBadan']; ?> Cm</p>
                </div>
            </div>
            <div class="row pt-3 p-0 bg-white mt-3">
                <div class="col align-self-center">
                    <h5 class="font-weight-bold m-0" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: B02525;">
                        ASSESMENT
                    </h5>
                </div>
            </div>
            <div class="row px-0 bg-white">
                <div class="col-100">
                    <hr style="color: #2269D2; height: 2px;">
                </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="row px-0 bg-white justify-content-center">
                                <div class="col-4">
                                    <h6 class="">Tekanan Darah :<?= $assesment['tekananDarah']; ?> MmHg</h6>
                                    <h6 class="">Frekuensi Nadi :<?= $assesment['frekuensiNadi']; ?> X/Menit</h6>
                                    <h6 class="">Suhu :<?= $assesment['suhu']; ?> C</h6>
                                </div>
                                <div class="col-4">
                                    <h6 class="">Frekuensi Nafas :<?= $assesment['frekuensiNafas']; ?></h6>
                                    <h6 class="">Skor Nyeri :<?= $assesment['skorNyeri']; ?> MmHg</h6>
                                    <h6 class="">IMT :<?= $assesment['IMT']; ?> Kg/M2</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3 p-0 bg-white mt-3">
                <div class="col align-self-center">
                    <h5 class="font-weight-bold m-0" style="color: B02525;">Resep Obat</h5>
                </div>
                <div class="col text-right">
                    <a href="<?= base_url('apoteker/printResep/' . $pasien['id']) ?>" class="btn btn-primary" style="color: #fff;">
                        Cetak Resep
                    </a>
                </div>
            </div>
            <div class="row px-0 bg-white">
                <div class="col-100">
                    <hr style="color: #2269D2; height: 2px;">
                </div>
            </div>
            <div class="row bg-white justify-content-center py-1">
                <div class="col-5" style="background-color: #E5E5E5;" align="center">
                    <h6 class="fw-bold" style="color: #2269D2;">Resep Obat</h6>
                </div>
            </div>
            <div class="row bg-white justify-content-center py-1">
                <div class="col-5" align="left">
                    <h6 class="fw-bold" style="color: #000;">Tanggal : <?= $resep['tanggal']; ?></h6>
                </div>
            </div>
            <div class="row bg-white justify-content-center py-1">
                <div class="col-5" align="left">
                    <h6 class="fw-bold" style="color: #000;">Resep :</h6>
                </div>
            </div>
            <div class="row bg-white justify-content-center py-1">
                <div class="col-5" align="left">
                    <h6 style="color: #000;"><?= nl2br($resep['resep']); ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>