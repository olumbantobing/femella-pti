<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/25495e258e.js" crossorigin="anonymous"></script>
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
            <a href=" <?= base_url('kasir/logout'); ?>"">Keluar</a>
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
                <a href=" <?= base_url('kasir/stoktoko'); ?>"">
                            <div>
                                <i class=" fa-4x fa-solid fa-box-open"></i>
                    <span>Stok Toko</span>
            </div>
            </a>

            <a href=" <?= base_url('kasir/barangterjual'); ?>"">
                            <div>
                                <i class=" fa-4x fa-solid fa-hand-holding-dollar"></i>
                <span>Barang Terjual</span>
        </div>
        </a>

        <a href="">
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
        border: solid 1px;
        width: 15%;
        height: 100%;
        position: fixed;
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
        font-size: 14pt;
        font-weight: bold;
        text-transform: uppercase;
    }

    .sidebar .left-bar {
        margin-top: 40px;
    }

    .sidebar a {
        display: block;
        line-height: 40px;
        font-size: 14pt;
        color: black;
        padding-left: 20px;
        box-sizing: border-box;
    }

    .sidebar a:hover {
        background-color: rgb(224, 216, 206);
    }

    .content {
        width: 85%;
        height: 700px;
        margin-left: 15%;
        display: block;
    }
</style>

<style>
    .content .header-content {
        width: 100%;
        height: 15%;
        padding-left: 30px;
        background-color: #daa520;
    }

    span {
        font-size: 14pt;
    }

    .content .body-content {
        background-color: #eeecb2;
        width: 100%;
        height: 60%;
        padding-top: 5%;
    }

    .content .body-content .box {
        display: flex;
        padding: 40px;
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
        background-color: white;
        padding: 10px;
        padding-left: 30px;
        height: 3%;
    }
</style>