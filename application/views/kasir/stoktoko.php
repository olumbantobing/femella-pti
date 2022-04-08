<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/25495e258e.js" crossorigin="anonymous"></script>
  <title>INVENTARIS | STOK BARANG</title>
</head>

<body>
  <!-- sidebar kiri -->
  <div class="sidebar">
    <h2>Inventaris</h2>
    <i class="fa-5x fa-solid fa-circle-user"></i>
    <span>Kasir</span>
    <div class="left-bar">
      <a href=" <?= base_url('kasir/index'); ?>"">Beranda</a>
      <a href=#>Stok Toko</a>
      <a href=" <?= base_url('kasir/barangterjual'); ?>"">Barang Terjual</a>
      <a href=" <?= base_url('kasir/laporan'); ?>"">Laporan</a>
      <a href=" <?= base_url('kasir/logout'); ?>"">Keluar</a>
    </div>
  </div>
  <!-- sidebar kiri -->

  <!-- content -->
  <div class=" content">
    <!-- header -->
    <div class="header-content">
      <br /><br />
      <h2>STOK TOKO</h2>
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
        <table>
          <tr>
            <th width="70px">ID</th>
            <th width="250px">Nama Barang</th>
            <th width="150px">Stok di Toko</th>
            <th width="200px">Harga</th>
          </tr>
          <tr>
            <td>001</td>
            <td style="text-align: left">Keripik Pisang Original</td>
            <td>250</td>
            <td>Rp.20.000</td>
          </tr>
          <tr>
            <td>002</td>
            <td style="text-align: left">Keripik Pisang Balado</td>
            <td>250</td>
            <td>Rp.20.000</td>
          </tr>
          <tr>
            <td>003</td>
            <td style="text-align: left">Keripik Pisang Cokelat</td>
            <td>250</td>
            <td>Rp.20.000</td>
          </tr>
          <tr>
            <td>001</td>
            <td style="text-align: left">Keripik Pisang Keju</td>
            <td>250</td>
            <td>Rp.20.000</td>
          </tr>
          <tr>
            <td>001</td>
            <td style="text-align: left">Keripik Pisang Susu</td>
            <td>250</td>
            <td>Rp.20.000</td>
          </tr>
          <tr>
            <td>001</td>
            <td style="text-align: left">Keripik Pisang Asin</td>
            <td>250</td>
            <td>Rp.20.000</td>
          </tr>
        </table>
      </div>
      <!-- tabel -->
    </div>
    <div class="footer">
      <p>Copyright &copy; 2022 Kelompok 2 PTI RB ITERA</p>
    </div>
  </div>
  <!-- content -->
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
    height: 100%;
    margin-left: 15%;
    display: block;
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
    width: 90%;
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
    width: 300%;
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
    margin-left: 270px;
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
    bottom: 0;
    width: 100%;
  }
</style>