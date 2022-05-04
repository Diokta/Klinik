<?php
$keyword = $selectedSubjective = $selectedObjective = $selectedAssesment = $selectedPlanning = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keyword = input_tempalte($_POST['keyword']);
    $selectedSubjective = $template[array_search($keyword, array_column($template, 'id'))]['subjective'];
    $selectedObjective = $template[array_search($keyword, array_column($template, 'id'))]['objective'];
    $selectedAssesment = $template[array_search($keyword, array_column($template, 'id'))]['assesment'];
    $selectedPlanning = $template[array_search($keyword, array_column($template, 'id'))]['planning'];
}

function input_tempalte($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<div class="container mt-1 ms-4 me-0 mw-100">
    <div class="row w-auto me-4">
        <div class="col-3 ps-0 bg-white me-2 p-2">
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action fw-bold" style="color: #E79E5A;">
                    <img src=" <?= base_url('images/cardiograph-orange.png') ?>" class="img-thumbnail" style="height: 30px;" alt="">
                    Edit SOAP
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
                    <h6><?= $pasien['tanggalLahir']; ?> - <?= $pasien['umur']; ?> Tahun</h6>
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
                    <h5 class="font-weight-bold m-0" style="color: B02525;">SOAP</h5>
                </div>
                <div class="col text-right">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSOAP">
                        Template SOAP
                    </button>

                    <!-- Modal SOAP -->
                    <div class="modal fade" id="ModalSOAP" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel">Pilih template yang ingin dipakai</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="row g-3 align-items-center mb-3">
                                            <div class="col-auto align-self-center">
                                                <label class="mb-0" for="jenisKelamin">Kata Kunci</label>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <select name="keyword" id="keyword" class="custom-select">
                                                    <?php foreach ($template as $template) : ?>
                                                        <option value="<?= $template['id']; ?>"><?= $template['id']; ?><?= $template['keyword']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary" onclick="getKeyword();" value="Pakai Template">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row px-0 bg-white">
                <div class="col-100">
                    <hr style="color: #2269D2; height: 2px;">
                </div>
            </div>

            <form action="<?= base_url('dokter/update_soap/' . $soap['id']) ?>" method="POST">
                <div class="form-row bg-white justify-content-center pt-2">
                    <div class="form-group col-5">
                        <label class="fw-bold" style="color: 2269D2;" for="subjective">SUBJECTIVE</label>
                        <textarea class="form-control border-2" id="subjective" name="subjective" rows="10" required><?php
                                                                                                                        if ($selectedSubjective == '') {
                                                                                                                            echo $soap['subjective'];
                                                                                                                        } else {
                                                                                                                            echo $selectedSubjective;
                                                                                                                        }
                                                                                                                        ?></textarea>
                        <br>
                        <label class="fw-bold" style="color: 2269D2;" for="assesment">ASSESMENT</label>
                        <textarea class="form-control border-2" id="assesment" name="assesment" rows="10" required><?php
                                                                                                                    if ($selectedSubjective == '') {
                                                                                                                        echo $soap['assesment'];
                                                                                                                    } else {
                                                                                                                        echo $selectedAssesment;
                                                                                                                    }
                                                                                                                    ?></textarea>
                    </div>
                    <div class="col-sm-1">
                    </div>
                    <div class="form-group col-5">
                        <label class="fw-bold" style="color: 2269D2;" for="objective">OBJECTIVE</label>
                        <textarea class="form-control border-2" id="objective" name="objective" rows="10" required><?php
                                                                                                                    if ($selectedSubjective == '') {
                                                                                                                        echo $soap['objective'];
                                                                                                                    } else {
                                                                                                                        echo $selectedObjective;
                                                                                                                    }
                                                                                                                    ?></textarea>
                        <br>
                        <label class="fw-bold" style="color: 2269D2;" for="planning">PLANNING</label>
                        <textarea class="form-control border-2" id="planning" name="planning" rows="10" required><?php
                                                                                                                    if ($selectedSubjective == '') {
                                                                                                                        echo $soap['planning'];
                                                                                                                    } else {
                                                                                                                        echo $selectedPlanning;
                                                                                                                    }
                                                                                                                    ?></textarea>
                        <div class="col text-right pe-0 mt-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalResep">
                                Edit Resep
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Modal Resep -->
                <div class="modal fade" id="ModalResep" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">Edit Resep</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-3 align-items-center m-3">
                                    <textarea class="form-control border-2" id="resep" name="resep" rows="10"><?= $resep['resep']; ?></textarea>
                                </div>
                                <div class="modal-footer">
                                    <input type="" class="btn btn-primary" data-bs-dismiss="modal" value="Edit Resep">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center py-4 bg-white">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary text-center px-3 py-2" name="simpan">SIMPAN</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>