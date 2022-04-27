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
    <title>INVENTARIS | BERANDA</title>
</head>

<body>
    <div class="sidebar">
        <h2>Inventaris</h2>
        <i class="fa-5x fa-solid fa-circle-user"></i>
        <span>ADMIN</span>
        <div class="left-bar">
            <a href=# style="background-color: #EEECB2; font-weight: bold;">Beranda</a>
            <a href=" <?= base_url('admin/stokgudang'); ?>"">Stok Gudang</a>
            <a href=" <?= base_url('admin/barangterjual'); ?>"">Barang Terjual</a>
            <a href=" <?= base_url('admin/barangmasuk'); ?>"">Barang Masuk Gudang</a>
            <a href=" <?= base_url('admin/barangkeluar'); ?>"">Barang Keluar Gudang</a>
            <a href=" <?= base_url('admin/pengguna'); ?>"">Pengguna</a>
            <a href=" <?= base_url('admin/laporan'); ?>">Laporan Barang Masuk</a>
            <a href=" <?= base_url('admin/laporan_k'); ?>">Laporan Barang Keluar</a>
            <a href=" <?= base_url('admin/nota'); ?>"">Nota</a>
            <a href=" <?= base_url('admin/logout'); ?>"">Keluar</a>
        </div>
    </div>
    <div class="content">
        <div class="header-content">
            <h2>BERANDA</h2>
            <span>Selamat Datang Di Inventaris Toko Askha Jaya</span>
        </div>

        <div class="body-content">
            <div class="box">
                <a href=" <?= base_url('admin/stokgudang'); ?>"">
                    <div>
                        <i class=" fa-4x fa-solid fa-box-open"></i>
                    <span>Stok Gudang </span>
            </div>
            </a>
            <a href="<?= base_url('admin/barangmasuk'); ?>">
                <div>
                    <i class=" fa-4x fa-solid fa-folder-plus"></i>
                    <span>Barang Masuk Gudang</span>
                </div>
            </a>
            <a href=" <?= base_url('admin/barangkeluar'); ?>">
                <div>
                    <i class=" fa-4x fa-solid fa-folder-minus"></i>
                    <span>Barang Keluar Gudang</span>
                </div>
            </a>
            <a href=" <?= base_url('admin/barangterjual'); ?>">
                <div>
                    <i class=" fa-4x fa-solid fa-hand-holding-dollar"></i>
                    <span>Barang Terjual</span>
                </div>
            </a>
        </div>

        <div class="body-content1">
            <div class="box">
                <a href=" <?= base_url('admin/pengguna'); ?>">
                    <div>
                        <i class=" fa-4x fa-solid fa-user-group"></i>
                        <span>Data Pengguna</span>
                    </div>
                </a>

                <a href="<?= base_url('admin/laporan'); ?>">
                    <div>
                        <i class="fa-4x fa-solid fa-file-text"></i>
                        <span>Laporan Barang Masuk</span>
                    </div>
                </a>
                <a href="<?= base_url('admin/laporan_k'); ?>">
                    <div>
                        <i class="fa-4x fa-solid fa-clipboard"></i>
                        <span>Laporan Barang Keluar</span>
                    </div>
                </a>

                <a href="<?= base_url('admin/nota'); ?>">
                    <div>
                        <i class="fa-4x fa-solid fa-address-book"></i>
                        <span>Nota</span>
                    </div>
                </a>

            </div>

        </div>
        <div class="footer">
            <p>Copyright &copy; 2022 Kelompok 2 PTI RB ITERA</p>
        </div>
    </div>
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
        height: 100%;
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
        margin-top: 20px;
        font-weight: bold;
    }

    .sidebar .left-bar {
        margin-top: 40px;
    }

    .sidebar a {
        display: block;
        line-height: 20px;
        font-size: 14pt;
        font-weight: 400;
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
        margin-left: 200px;
        display: table-cell;
    }
</style>

<style>
    .content .header-content {
        width: auto;
        height: 15%;
        padding-left: 30px;
        background-color: #DAA520;
        font-size: 13pt;
        padding-bottom: 5px;
        padding-top: 30px;
    }

    .content .header-content span {
        font-size: 14pt;
    }

    .content .body-content {
        background-color: #EEECB2;
        width: 100%;
        height: 80%;
        display: block;
    }

    .content .body-content .box {
        display: flex;
        width: auto;
        height: 50%;
        padding-top: 80px;
        padding-bottom: 30px;
        justify-content: center;
    }

    .content .body-content1 .box {
        display: flex;
        width: auto;
        height: 50%;
        padding: 20px;
        padding-top: 10px;
        padding-bottom: 90px;
        justify-content: center;
    }

    .content .body-content .box a {
        background-color: white;
        width: 220px;
        height: 170px;
        margin-left: 20px;
        text-align: center;
        justify-content: right;
        color: black;
        border-radius: 10px;
    }

    .content .body-content .box div i {
        display: block;
        margin-top: 30px;
    }

    .content .body-content .box div span {
        display: block;
        margin-top: 20px;
        font-size: 12pt;
        font-weight: 550;
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
</style>