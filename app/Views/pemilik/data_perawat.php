<div class="container mt-1 ms-4 me-0 mw-100">
    <div class="row w-auto me-4">
        <div class="col-3 ps-0 bg-white me-2 p-2">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action fw-bold">
                    <img src=" <?= base_url('images/profil-orange.png') ?>" class="img-thumbnail" style="height: 30px;" alt="">
                    Data Identitas
                </button>
            </div>
        </div>
        <div class="col bg-white py-3 ms-2">
            <div class="container">
                <div class="row align-content-left">
                    <div class="col-3">
                        <a href="<?= base_url('pemilik/edit_perawat/' . $perawat['id']) ?>" class="btn-primary p-2">
                            <img src="<?= base_url('images/edit-white.png') ?>" class="img-thumbnail bg-transparent border-0" style="height: 30px;" alt="">
                            Ubah Perawat
                        </a>
                    </div>
                    <div class="col-3">
                        <a class="btn-delete btn-primary p-2" href="<?= base_url('pemilik/delete_perawat/' . $perawat['id']) ?>">
                            <img src="<?= base_url('images/delete-white.png') ?>" class="img-thumbnail bg-transparent border-0" style="height: 30px;" alt="">
                            Hapus Perawat
                        </a>
                    </div>
                </div>
                <div class="row align-items-start mt-4">
                    <div class="col-sm-1 pe-0">
                        <img src="<?= base_url('images/doctor-blue.png') ?>" class="img-thumbnail" style="height: 30px;" alt="">
                    </div>
                    <div class="col ps-0">
                        <h6>Informasi Perawat</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col px-0">
                        <hr style="color: #2269D2; height: 2px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 ps-0">
                        <p class="fw-bold mb-0">Username</p>
                        <p><?= $akun['username']; ?></p>
                    </div>
                    <div class="col pe-0">
                        <p class="fw-bold mb-0">Password</p>
                        <p><?= $akun['password']; ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4 ps-0">
                        <p class="fw-bold mb-0">Nama Lengkap</p>
                        <p><?= $perawat['nama']; ?></p>
                    </div>
                    <div class="col pe-0">
                        <p class="fw-bold mb-0">NIK</p>
                        <p><?= $perawat['nik']; ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4 ps-0">
                        <p class="fw-bold mb-0">Tempat Lahir</p>
                        <p><?= $perawat['tempatLahir']; ?></p>
                    </div>
                    <div class="col">
                        <p class="fw-bold mb-0">Tanggal Lahir</p>
                        <p><?= $perawat['tanggalLahir']; ?></p>
                    </div>
                    <div class="col pe-0">
                        <p class="fw-bold mb-0">Umur</p>
                        <p><?= $perawat['umur']; ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4 ps-0">
                        <p class="fw-bold mb-0">Jenis Kelamin</p>
                        <p><?php if ($perawat['jenisKelamin'] == "P") {
                                echo "Perempuan";
                            } elseif ($perawat['jenisKelamin'] == "L") {
                                echo "Laki-laki";
                            } ?></p>
                    </div>
                    <div class="col">
                        <p class="fw-bold mb-0">Kewarganegaraan</p>
                        <p><?= $perawat['kewarganegaraan']; ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4 ps-0">
                        <p class="fw-bold mb-0">Agama</p>
                        <p><?= $perawat['agama']; ?></p>
                    </div>
                    <div class="col">
                        <p class="fw-bold mb-0">Status Pernikahan</p>
                        <p><?= $perawat['statusPernikahan']; ?></p>
                    </div>
                    <div class="col pe-0">
                        <p class="fw-bold mb-0">Pendidikan Terakhir</p>
                        <p><?= $perawat['pendidikan']; ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4 ps-0">
                        <p class="fw-bold mb-0">Golongan Darah</p>
                        <p><?= $perawat['golonganDarah']; ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4 ps-0">
                        <p class="fw-bold mb-0">Alamat</p>
                        <p><?= $perawat['alamat']; ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4 ps-0">
                        <p class="fw-bold mb-0">Kelurahan</p>
                        <p><?= $perawat['kelurahan']; ?></p>
                    </div>
                    <div class="col">
                        <p class="fw-bold mb-0">Kecamatan</p>
                        <p><?= $perawat['kecamatan']; ?></p>
                    </div>
                    <div class="col pe-0">
                        <p class="fw-bold mb-0">Kabupaten/Kota</p>
                        <p><?= $perawat['kabupaten']; ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4 ps-0">
                        <p class="fw-bold mb-0">Provinsi</p>
                        <p><?= $perawat['provinsi']; ?></p>
                    </div>
                    <div class="col">
                        <p class="fw-bold mb-0">Kode Pos</p>
                        <p><?= $perawat['kodePos']; ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4 ps-0">
                        <p class="fw-bold mb-0">Nomor Telepon</p>
                        <p><?= $perawat['noTelp']; ?></p>
                    </div>
                    <div class="col">
                        <p class="fw-bold mb-0">Nomor Handphone</p>
                        <p><?= $perawat['noHP']; ?></p>
                    </div>
                    <div class="col pe-0">
                        <p class="fw-bold mb-0">Email</p>
                        <p><?= $perawat['email']; ?></p>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>