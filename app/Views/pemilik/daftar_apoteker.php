<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>
<div class="container mt-1 ms-4 me-0 mw-100">
    <div class="row w-auto me-4">
        <div class="col-3 ps-0 bg-white me-2 p-2">
            <div class="list-group">
                <a href="<?= base_url('pemilik/daftar_dokter') ?>" class="list-group-item list-group-item-action fw-bold">
                    <img src="<?= base_url('images/doctor-blue.png') ?>" class="img-thumbnail" style="height: 30px;" alt="">
                    Dokter
                </a>
                <a href="<?= base_url('pemilik/daftar_perawat') ?>" class="list-group-item list-group-item-action fw-bold">
                    <img src="<?= base_url('images/doctor-blue.png') ?>" class="img-thumbnail" style="height: 30px;" alt="">
                    Perawat
                </a>
                <a href="<?= base_url('pemilik/daftar_admin') ?>" class="list-group-item list-group-item-action fw-bold">
                    <img src="<?= base_url('images/doctor-blue.png') ?>" class="img-thumbnail" style="height: 30px;" alt="">
                    Administrator
                </a>
                <a href="<?= base_url('pemilik/daftar_apoteker') ?>" class="list-group-item list-group-item-action fw-bold" style="color: #E79E5A;">
                    <img src="<?= base_url('images/doctor-orange.png') ?>" class="img-thumbnail" style="height: 30px;" alt="">
                    Apoteker
                </a>
            </div>
        </div>
        <div class="col bg-white py-3 ms-2">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <a href="<?= base_url('pemilik/tambah_apoteker') ?>" class="btn-primary p-2">
                            <img src="<?= base_url('images/add-person-white.png') ?>" class="img-thumbnail bg-transparent border-0" style="height: 30px;" alt="">
                            Tambah apoteker
                        </a>
                    </div>
                    <div class="col-6 text-right pe-0">
                        <div class="search">
                            <form action="<?= base_url('pemilik/search_apoteker/') ?>" method="POST">
                                <input type="text" id="keyword" name="keyword" placeholder="Masukan NIK atau Nama" class="form-control">
                                <button type="submit" class="btn btn-outline-light border-0">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table100 ver1 m-b-110 mt-3">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">No</th>
                                    <th class="cell100 column2">Nama apoteker</th>
                                    <th class="cell100 column3">NIK</th>
                                    <th class="cell100 column4">No. HP</th>
                                    <th class="cell100 column6">Tindakan</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll">
                        <table>
                            <?php
                            $index = 1;
                            foreach ($apoteker as $data) :
                            ?>
                                <tbody>
                                    <tr class="row100 body" data-href='<?= base_url('pemilik/data_apoteker/' . $data['id']) ?>'>
                                        <td class="cell100 column1"><?php
                                                                    echo $index;
                                                                    $index++;
                                                                    ?>
                                        </td>
                                        <td class="cell100 column2"><?= $data['nama']; ?></td>
                                        <td class="cell100 column3"><?= $data['nik']; ?></td>
                                        <td class="cell100 column4"><?= $data['noHP']; ?></td>
                                        <td class="cell100 column5">
                                            <a href="<?= base_url('pemilik/edit_apoteker/' . $data['id']) ?>">
                                                <img src="<?= base_url('images/edit-blue.png') ?>" class="img-thumbnail" style="height: 30px;" alt="">
                                            </a>
                                            <a class="btn-delete" href="<?= base_url('pemilik/delete_apoteker/' . $data['id']) ?>">
                                                <img src="<?= base_url('images/delete-blue.png') ?>" class="img-thumbnail" style="height: 30px;" alt="">
                                            </a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>