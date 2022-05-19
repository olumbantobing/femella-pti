<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/25495e258e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/25495e258e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/askha-logo.png">
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
      <a href=# style=" background-color: #EEECB2; font-weight: bold;">Stok Toko</a>
      <a href=" <?= base_url('kasir/barangterjual'); ?>"">Barang Terjual</a>
      <a href=" <?= base_url('kasir/laporan'); ?>"">Laporan</a>
      <a href=" <?= base_url('auth/logout'); ?>" onclick="return confirm('Anda yakin ingin keluar?');">Keluar</a>
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
        <!-- tabel -->
        <table id="search">
          <thead>
            <tr>
              <th width="70px">ID</th>
              <th width="250px">Nama Barang</th>
              <th width="150px">Stok di Toko</th>
              <th width="200px">Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php if (is_array($list_data)) { ?>
                <?php foreach ($list_data as $dd) : ?>
                  <td><?= $dd->id ?></td>
                  <td><?= $dd->nama_barang ?></td>
                  <td><?= $dd->stok_toko, " pcs" ?></td>
                  <td><?= "Rp ", $dd->harga ?></td>
            </tr>
          <?php endforeach; ?>
        <?php } else { ?>
          <td colspan="7" align="center"><strong>Data Kosong</strong></td>
        <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- tabel -->
    </div>
    <div class="footer">
      <p>Copyright &copy; 2022 Kelompok 2 PTI RB ITERA</p>
    </div>
  </div>
  <!-- content -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#search').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": false,
        "info": false,
        "autoWidth": true,
        "responsive": true,
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
    height: 100vmin;
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
    padding-left: 150px;
  }

  .content .body-content .content-utama {
    width: 75%;
    height: 100%;
  }

  .content-utama {
    margin-bottom: 20pt;
  }
</style>

<style>
  .content-utama table {
    margin-top: 20pt;
    margin-left: 100px;
    text-align: center;
    font-size: 12pt;
    padding: 2px;
  }

  td,
  th {
    border: 1px solid #0f0e0e;
    padding: 2px;
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