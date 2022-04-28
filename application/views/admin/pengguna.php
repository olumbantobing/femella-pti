<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/25495e258e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/25495e258e.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/askha-logo.png">
    <title>INVENTARIS | PENGGUNA</title>
</head>

<body>
    <!-- sidebar kiri -->
    <div class="sidebar">
        <h2>Inventaris</h2>
        <i class="fa-5x fa-solid fa-circle-user"></i>
        <span>ADMIN</span>
        <div class="left-bar">
            <a href=" <?= base_url('admin/index'); ?>"">Beranda</a>
            <a href=" <?= base_url('admin/stokgudang'); ?>"">Stok Gudang</a>
            <a href=" <?= base_url('admin/barangterjual'); ?>"">Barang Terjual</a>
            <a href=" <?= base_url('admin/barangmasuk'); ?>"">Barang Masuk Gudang</a>
            <a href=" <?= base_url('admin/barangkeluar'); ?>"">Barang Keluar Gudang</a>
            <a href=# style=" background-color: #EEECB2; font-weight: bold;">Pengguna</a>
            <a href=" <?= base_url('admin/laporan'); ?>">Laporan Barang Masuk</a>
            <a href=" <?= base_url('admin/laporan_k'); ?>">Laporan Barang Keluar</a>
            <a href=" <?= base_url('admin/nota'); ?>"">Nota</a>
            <a href=" <?= base_url('admin/logout'); ?>" onclick="return confirm('Anda yakin ingin keluar?');">Keluar</a>
        </div>
    </div>
    <!-- sidebar kiri -->

    <!-- content -->
    <div class=" content">
        <!-- header -->
        <div class="header-content">
            <br /><br />
            <h2>PENGGUNA</h2>
        </div>
        <!-- header -->

        <div class="body-content">
            <div class="content-utama">
                <!-- Tombol search -->
                <!-- <div class="search-btn">
                            <div>
                                <input type="text" placeholder="Cari Barang..." />
                                <button>
                                    <i class="fa-2x fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div> -->
                <!-- Tombol search -->

                <!-- tabel -->
                <table>
                    <thead>
                        <tr>
                            <th width="80px">ID</th>
                            <th width="150px">Nama Pengguna</th>
                            <th width="150px">Hak Akses</th>
                            <!-- <th width="90px">Kata Sandi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php if (is_array($list_data)) { ?>
                                <?php foreach ($list_data as $dd) : ?>
                                    <td><?= $dd->id ?></td>
                                    <td><?= $dd->username ?></td>
                                    <td><?= $dd->akses ?></td>
                                    <!-- <td><?= $dd->password ?></td> -->
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
                    <h4 style="background-color: #008FDF87;">
                        Tambah Pengguna
                        <i class="fa-solid fa-plus"></i>
                    </h4>
                    <form action="<?= base_url('admin/tambah_pengguna') ?>" role="form" method="post">
                        <label>ID</label><br />
                        <input type="text" name="id" id="id" value="U-<?= random_string('numeric', 3); ?>" readonly /><br />
                        <label>Nama Pengguna</label><br />
                        <input type="text" name="username" placeholder="Masukkan nama pengguna" /><br />
                        <label>Hak Akses</label><br />
                        <select class="form-control" name="akses">
                            <option selected=""></option>
                            <option>Kasir</option>
                            <option>Admin</option>
                        </select>
                        <label>Kata Sandi</label><br />
                        <input type="text" name="password" placeholder="Masukkan kata sandi" /><br />
                        <button style="background-color: #008FDF87;" onclick="return confirm('Anda yakin ingin menambah data?');">Tambah</button>

                        <?php if ($this->session->flashdata('msg_tambah')) {
                            echo "<script>alert('Data pengguna baru berhasil ditambahkan!');</script>"; ?>
                        <?php } ?>
                    </form>
                </div>

                <div class="box">
                    <h4 style="background-color: #FE4A4AF0;">
                        Hapus Data Pengguna
                        <i class="f fa-trash-o"></i>
                    </h4>
                    <form action="<?= base_url('admin/hapus_pengguna') ?>" role="form" method="post">
                        <label>ID Pengguna</label><br />
                        <select class="form-control" name="id" id="id">
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "inventaris-askhajaya");
                            $res = mysqli_query($conn, "SELECT id, CONCAT(id, ' : ', username, ' (', akses, ')') AS pilihan FROM user");
                            while ($rows = mysqli_fetch_array($res)) {
                            ?>
                                <option value="<?php echo $rows['id']; ?>"><?php echo $rows['pilihan']; ?></option>
                            <?php } ?>
                        </select>
                        <!-- <input type="text" name="id" placeholder="Masukkan ID pengguna" /><br /> -->
                        <button style="background-color: #FE4A4AF0;" onclick="return confirm('Anda yakin ingin menghapus data?');">Hapus</button>

                        <?php if ($this->session->flashdata('msg_hapus')) {
                            echo "<script>alert('Data pengguna berhasil dihapus!');</script>"; ?>
                        <?php } ?>
                    </form>
                </div>
            </div>
            <!-- Menu Input -->
        </div>


        <div class="footer">
            <p>Copyright &copy; 2022 Kelompok 2 PTI RB ITERA</p>
        </div>
        <!-- content -->
    </div>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        /* box-sizing: border-box; */
    }

    html,
    body {
        margin: 0;
        padding: 0;
    }

    a {
        text-decoration: none;
    }

    .sidebar {
        height: auto;
        position: sticky;
        /* for Safari users */
        position: -webkit-sticky;
        top: 0;
        left: 0;
        background-color: #C1A660;
        display: table-cell;
        width: 200px;
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
        width: 85%;
        height: 100%;
        margin-left: 15%;
        display: table-cell;
    }
</style>

<style>
    .content .header-content {
        width: 100%;
        height: 20%;
        padding-left: 30px;
        padding-bottom: 20px;
        margin-bottom: 25px;
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
        margin-left: 20px;
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
        width: 350px;
        height: auto;
        background-color: white;
        margin-left: 5px;
        margin-bottom: 20px;
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
        padding: 30px;
        padding-top: 11px;
        padding-left: 20px;
        height: 1%;
        background: #f0f0f0;
        position: absolute;
        bottom: 90;
        width: 100%;
    }

    /* .footer {
        background-color: white;
        padding: 10px;
        padding-left: 30px;
        height: 3%;
        background: #f0f0f0;
        position: absolute;
        bottom: 90;
        width: 100%;
    } */
</style>