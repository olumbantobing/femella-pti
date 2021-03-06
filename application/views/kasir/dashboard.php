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
        <span>Kasir</span>
        <div class="left-bar">
            <a href=# style="background-color: #EEECB2; font-weight: bold;">Beranda</a>
            <a href=" <?= base_url('kasir/stoktoko'); ?>"">Stok Toko</a>
            <a href=" <?= base_url('kasir/barangterjual'); ?>"">Barang Terjual</a>
            <a href=" <?= base_url('kasir/laporan'); ?>"">Laporan</a>
            <a href=" <?= base_url('auth/logout'); ?>" onclick="return confirm('Anda yakin ingin keluar?');">Keluar</a>
        </div>
    </div>

    <div class=" content">
        <div class="header-content">
            <br /><br />
            <h2>BERANDA</h2>
            <span>Selamat Datang Di Inventaris Toko Askha Jaya</span>
        </div>

        <div class="body-content">
            <div class="box">
                <a href=" <?= base_url('kasir/stoktoko'); ?>">
                    <div>
                        <i class=" fa-4x fa-solid fa-box-open"></i>
                        <span>Stok Toko</span>
                    </div>
                </a>

                <a href=" <?= base_url('kasir/barangterjual'); ?>">
                    <div>
                        <i class=" fa-4x fa-solid fa-hand-holding-dollar"></i>
                        <span>Barang Terjual</span>
                    </div>
                </a>

                <a href="<?= base_url('kasir/laporan'); ?>">
                    <div>
                        <i class="fa-4x fa-solid fa-clipboard"></i>
                        <span>Laporan</span>
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
        background-color: #c1a660;
        width: 15%;
        height: 100%;
        position: fixed;
    }

    .sidebar h2 {
        background-color: #756439;
        text-align: center;
        padding: 14px;
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
        font-size: 14pt;
        font-weight: bold;
        text-transform: uppercase;
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
        margin-left: 15%;
        display: block;
    }
</style>

<style>
    .content .header-content {
        width: 100%;
        height: 15%;
        padding-left: 30px;
        padding-bottom: 20px;
        background-color: #daa520;
    }

    span {
        font-size: 14pt;
    }

    .content .body-content {
        background-color: #eeecb2;
        width: 100%;
        height: 80%;
        padding-top: 2%;
    }

    .content .body-content .box {
        display: flex;
        padding: 100px;
        justify-content: center;
    }

    .content .body-content .box a {
        background-color: white;
        border-radius: 10px;
        width: 220px;
        height: 170px;
        margin: 10px;
        text-align: center;
        justify-content: center;
        color: black;
    }

    .content .body-content .box div i {
        display: block;
        margin-top: 50px;
    }

    .content .body-content .box div span {
        display: block;
        margin-top: 20px;
        font-size: 12pt;
        font-weight: 750;
    }

    .footer {
        background-color: #eeecb2;
        padding: 30px;
        padding-top: 11px;
        padding-left: 20px;
        height: 1%;
        background: #f0f0f0;
        position: absolute;
        width: 100%;
        bottom: 0;
    }
</style>