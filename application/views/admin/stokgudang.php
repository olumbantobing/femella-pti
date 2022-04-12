<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/25495e258e.js" crossorigin="anonymous"></script>

    <title>INVENTARIS | STOK GUDANG</title>
</head>

<body>
    <!-- sidebar kiri -->
    <div class="sidebar">
        <h2>Inventaris</h2>
        <i class="fa-5x fa-solid fa-circle-user"></i>
        <span>ADMIN</span>
        <div class="left-bar">
            <a href=" <?= base_url('admin/index'); ?>"">Beranda</a>
            <a href=# style=" background-color: #EEECB2; font-weight: bold;">Stok Gudang</a>
            <a href=" <?= base_url('admin/barangterjual'); ?>"">Barang Terjual</a>
            <a href=" <?= base_url('admin/barangmasuk'); ?>"">Barang Masuk Gudang</a>
            <a href=" <?= base_url('admin/barangkeluar'); ?>"">Barang Keluar Gudang</a>
            <a href=" <?= base_url('admin/pengguna'); ?>"">Pengguna</a>
            <a href=" <?= base_url('admin/laporan'); ?>"">Laporan</a>
            <a href=" <?= base_url('admin/nota'); ?>"">Nota</a>
            <a href=" <?= base_url('admin/logout'); ?>"">Keluar</a>
        </div>
    </div>
    <!-- sidebar kiri -->

    <!-- content -->
    <div class=" content">
                <!-- header -->
                <div class="header-content">
                    <br /><br />
                    <h2>STOK GUDANG</h2>
                </div>
                <!-- header -->

                <div class="body-content">
                    <div class="content-utama">
                        <!-- Tombol search -->
                        <div class="search-btn">
                            <div>
                                <input type="text" placeholder="Cari Barang..." />
                                <button>
                                    <i class="fa-2x fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Tombol search -->

                        <!-- tabel -->
                        <table id="search">
                            <thead>
                                <tr>
                                    <th width="70px">ID</th>
                                    <th width="300px">Nama Barang</th>
                                    <th width="150px">Stok</th>
                                    <th width="200px">Harga</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <?php if (is_array($list_data)) { ?>
                                        <?php foreach ($list_data as $dd) : ?>
                                            <td><?= $dd->id ?></td>
                                            <td><?= $dd->nama_barang ?></td>
                                            <td><?= $dd->stok_gudang ?></td>
                                            <td><?= $dd->harga ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php } else { ?>
                            <td colspan="7" align="center"><strong>Data Kosong</strong></td>
                        <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- tabel -->

                    <!-- Menu Input -->
                    <div class="form-input">
                        <div class="box">
                            <h4 style="background-color: #008fdf87">
                                Tambah Data Barang
                                <i class="fa-solid fa-plus"></i>
                            </h4>
                            <form action="<?= base_url('admin/tambah_stokgudang') ?>" role="form" method="post">
                                <label>ID Barang</label><br />
                                <input type="text" name="id" id="id" value="AJ-<?= random_string('numeric', 3); ?>" readonly /><br />
                                <label for="nama_barang">Nama Barang (Berat)</label><br />
                                <input type="text" name="nama_barang" id="nama_barang" placeholder="Masukkan Nama Barang dan Berat" /><br />
                                <label for="harga">Harga</label><br />
                                <input type="text" name="harga" id="harga" placeholder="Masukkan Harga" /><br />
                                <button id="tambah data" style="background-color: #008fdf87">Tambah</button>
                            </form>
                        </div>
                        <div class="box">
                            <h4 style="background-color: #fad541fc">
                                Ubah Data Barang
                                <i class="fa-solid fa-plus"></i>
                            </h4>
                            <form action="<?= base_url('admin/ubah_stokgudang') ?>" role="form" method="post">
                                <label>ID Barang</label><br />
                                <select class="form-control" name="id" id="id">
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "inventaris-askhajaya");
                                    $res = mysqli_query($conn, "SELECT id, CONCAT(id, ' ', nama_barang) AS pilihan FROM stok_gudang");
                                    while ($rows = mysqli_fetch_array($res)) {
                                    ?>
                                        <option value="<?php echo $rows['id']; ?>"><?php echo $rows['pilihan']; ?></option>
                                    <?php } ?>
                                </select>
                                <!-- <input type="text" name="id" id="id" placeholder="Masukkan ID Barang" /><br /> -->
                                <label>Nama Barang</label><br />
                                <input type="text" name="nama_barang" id="nama_barang" placeholder="Masukkan Nama Barang" /><br />
                                <label>Harga</label><br />
                                <input type="text" name="harga" id="harga" placeholder="Masukkan Harga" /><br />
                                <button id="ubahdata" style="background-color: #fad541fc">Ubah</button>
                            </form>
                        </div>
                        <div class="box">
                            <h4 style="background-color: #fe4a4af0">
                                Hapus Data Barang
                                <i class="fa-solid fa-minus"></i>
                            </h4>
                            <form action="<?= base_url('admin/hapus_stokgudang') ?>" role="form" method="post">
                                <label>ID Barang</label><br />
                                <select class="form-control" name="id" id="id">
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "inventaris-askhajaya");
                                    $res = mysqli_query($conn, "SELECT id, CONCAT(id, ' ', nama_barang) AS pilihan FROM stok_gudang");
                                    while ($rows = mysqli_fetch_array($res)) {
                                    ?>
                                        <option value="<?php echo $rows['id']; ?>"><?php echo $rows['pilihan']; ?></option>
                                    <?php } ?>
                                </select>
                                <!-- <input type="text" name="id" id="id" placeholder="Masukkan ID Barang" /><br /> -->
                                <button id="hapusdata" style="background-color: #fe4a4af0">Hapus</button>
                            </form>
                        </div>
                    </div>
                    <!-- Menu Input -->
                </div>
                <div class="footer">
                    <p>Copyright &copy; 2022 Kelompok 2 PTI RB ITERA</p>
                </div>
        </div>
        <!-- content -->


        <script>
            $(function() {
                $('#tambahdata').click(function() {
                    confirm("Apa Anda Yakin ingin menambah data?");
                });
                $('#ubahdata').click(function() {
                    confirm("Apa Anda Yakin ingin mengubah data?");
                });
                $('#hapusdata').click(function() {
                    confirm("Apa Anda Yakin ingin menghapus data?");
                });
            });
        </script>

</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    a {
        text-decoration: none;
    }

    .sidebar {
        background-color: #c1a660;
        display: table-cell;
        width: 15%;
        vertical-align: top;
    }

    .sidebar h2 {
        background-color: #756439;
        text-align: center;
        padding: 10px;
        color: white;
    }

    .sidebar i {
        width: 100%;
        text-align: center;
        margin-top: 30px;
    }

    .sidebar span {
        width: 100%;
        text-align: center;
        display: block;
        font-weight: bold;
        margin-top: 20px;
    }

    .sidebar .left-bar {
        margin-top: 40px;
    }

    .sidebar a {
        display: block;
        line-height: 20px;
        font-size: 14pt;
        color: black;
        padding-left: 20px;
        padding-right: 10px;
        padding-top: 10px;
        padding-bottom: 7px;
        box-sizing: border-box;
    }

    .sidebar a:hover {
        background-color: rgb(224, 216, 206);
    }

    .content {
        display: table-cell;
        width: 85%;
        vertical-align: top;
    }
</style>

<style>
    .content .header-content {
        width: 100%;
        height: 20%;
        padding-left: 30px;
        background-color: #daa520;
    }

    body {
        background-color: #eeecb2;
    }

    .content .body-content {
        width: 100%;
        height: 80%;
        display: flex;
    }

    .content .body-content .content-utama {
        width: 60%;
        height: 100%;
    }

    .content .body-content .form-input {
        width: 40%;
        height: 100%;
    }
</style>

<style>
    .content-utama .search-btn {
        float: right;
        width: 100%;
    }

    .content-utama .search-btn div {
        float: right;
        margin: 20px;
        display: flex;
        border: solid 1px;
        padding: 5px;
        border-radius: 0.5em;
        background-color: white;
    }

    .content-utama .search-btn div input {
        font-size: 14pt;
        margin-right: 5px;
        border-color: transparent;
    }

    .content-utama .search-btn div button {
        background-color: white;
        border: solid white 1px;
        cursor: pointer;
    }
</style>

<style>
    .content-utama table {
        margin: 20px;
        text-align: center;
        font-size: 12pt;
        padding: 2px;
    }

    td,
    th {
        border: 1px solid #0f0e0e;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<style>
    .form-input {
        display: block;
    }

    .form-input .box {
        width: 400px;
        height: auto;
        background-color: white;
        margin: 20px;
        border: solid black 1px;
    }

    .form-input .box h4 {
        font-size: large;
        padding: 10px;
    }

    .form-input .box h4 i {
        float: right;
    }

    .form-input .box form {
        display: block;
        padding: 15px;
        padding-left: 20px;
        padding-right: 30px;
    }

    .form-input .box form input {
        height: 23px;
        width: 100%;
        font-size: 12pt;
        margin-bottom: 10px;
    }

    .form-input .box form button {
        width: 100px;
        font-size: medium;
        padding: 5px;
        border-radius: 6px;
        cursor: pointer;
        border-color: transparent;
    }

    .form-input .box form button:hover {
        background-color: rgb(224, 216, 206);
    }

    .form-control {
        height: 23px;
        width: 100%;
        font-size: 12pt;
        margin-bottom: 10px;
    }

    table {
        background-color: white;
    }

    .footer {
        background-color: white;
        padding: 10px;
        padding-left: 30px;
        height: 3%;
        background: #f0f0f0;
        position: absolute;
        bottom: 90;
        width: 100%;
    }
</style>