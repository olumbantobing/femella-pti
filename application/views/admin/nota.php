<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/25495e258e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script>
    <title>INVENTARIS | NOTA</title>
    <style>
        * {
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
            margin-top: 20px;
            font-size: 14pt;
            font: bold;
        }

        .sidebar .left-bar {
            margin-top: 40px;
        }

        .sidebar a {
            display: block;
            line-height: 40px;
            font-size: 13pt;
            color: black;
            padding-left: 20px;
            box-sizing: border-box;
        }

        .sidebar a:hover {
            background-color: rgb(224, 216, 206);
        }

        .sidebar .active {
            background-color: white;
        }

        .content {
            width: max-content;
            height: 100%;
            margin-left: 15%;
            display: table-cell;
        }

        .content .header-content {
            width: auto;
            height: 20%;
            padding-left: 30px;
            padding-bottom: 20px;
            margin-bottom: 25px;
            background-color: #DAA520;

        }

        body {
            background-color: #EEECB2;
        }

        .content .body-content {
            width: 150%;
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
            background-color: #DDDDDD;
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
            height: fit-content;
        }
    </style>

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
            <a href=" <?= base_url('admin/pengguna'); ?>"">Pengguna</a>
            <a href=" <?= base_url('admin/laporan'); ?>"">Laporan</a>
            <a href=# style=" background-color: #EEECB2; font-weight: bold;">Nota</a>
            <a href=" <?= base_url('admin/logout'); ?>"">Keluar</a>
        </div>
    </div>
    <!-- sidebar kiri -->

    <!-- content -->
    <div class=" content">
                <!-- header -->
                <div class="header-content">
                    <br /><br />
                    <h2>NOTA</h2>
                </div>
                <!-- header -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-3">
                            <button type="button" id="tambahnota" class="form-control form-control-navbar btn btn-large btn-info" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Tambah Nota</button>
                        </div>
                        <div class="col col-3">
                            <button type="button" id="btnlaporan" class="form-control form-control-navbar btn btn-large btn-success"><i class="fa fa-download"></i> Cetak Nota </button>
                        </div>
                        <div class="col col-6">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Jenis ID</th>
                                                <th>Nama Barang</th>
                                                <th>Nama Supplier</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Barang Masuk</th>
                                                <th>Barang Terjual</th>
                                                <th>Sisa</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Harga Asli Barang (pcs) </th>
                                                <th>Harga Jual Barang (pcs) </th>
                                                <th>Total</th>
                                                <th>Fee</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php if (is_array($list_data)) { ?>
                                                    <?php foreach ($list_data as $dd) : ?>
                                                        <td><?= $dd->id ?></td>
                                                        <td><?= $dd->jenis ?></td>
                                                        <td><?= $dd->nama_barang ?></td>
                                                        <td><?= $dd->supplier ?></td>
                                                        <td><?= $dd->tgl_masuk ?></td>
                                                        <td><?= $dd->jml_masuk ?></td>
                                                        <td><?= $dd->terjual ?></td>
                                                        <td><?= $dd->sisa ?></td>
                                                        <td><?= $dd->tgl_keluar ?></td>
                                                        <td><?= $dd->hrg_asli ?></td>
                                                        <td><?= $dd->hrg_keluar ?></td>
                                                        <td><?= $dd->total ?></td>
                                                        <td><?= $dd->fee ?></td>
                                                        <td><button id="edit" class="btn btn-warning">Edit</button> | <button class="btn btn-danger">Hapus</button></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php } else { ?>
                                        <td colspan="14" align="center"><strong>Data Kosong</strong></td>
                                    <?php } ?>
                                    <!-- <tr>
                                        <td>001</td>
                                        <td>CASH</td>
                                        <td>Kripik Pisang
                                        </td>
                                        <td>Rama Jaya</td>
                                        <td>24/02/2022</td>
                                        <td>35</td>
                                        <td>20</td>
                                        <td>15</td>
                                        <td>25/02/2022</td>
                                        <td>Rp. 20.000</td>
                                        <td>Rp. 25.000</td>
                                        <td>Rp. 750.000</td>
                                        <td>Rp. 150.000</td>
                                        <td><button id="edit" class="btn btn-warning">Edit</button> | <button class="btn btn-danger">Hapus</button></td>
                                    </tr>
                                    <tr>
                                        <td>001</td>
                                        <td>CASH</td>
                                        <td>Kripik Molen
                                        </td>
                                        <td>Rama Jaya</td>
                                        <td>24/02/2022</td>
                                        <td>35</td>
                                        <td>20</td>
                                        <td>15</td>
                                        <td>25/02/2022</td>
                                        <td>Rp. 20.000</td>
                                        <td>Rp. 25.000</td>
                                        <td>Rp. 750.000</td>
                                        <td>Rp. 150.000</td>
                                        <td><button id="edit" class="btn btn-warning">Edit</button> | <button class="btn btn-danger">Hapus</button></td>
                                    </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                <footer class="footer">
                    <p>Copyright &copy; 2022 Kelompok 2 PTI RB ITERA</p>
                </footer>
        </div>
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Barang</h4>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/tambah_nota') ?>" role="form" method="post">
                            <!-- <form> -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>ID</label><br />
                                    <input type="text" name="id_nota" id="id_nota" value="<?= date("yM"); ?><?= random_string('numeric', 3); ?>" readonly />
                                </div>
                                <div>
                                    <label>Pilih Jenis (klik form)</label>
                                    <select class="form-control" name="jenis">
                                        <!-- <option selected=""></option> -->
                                        <option>CASH</option>
                                        <option>KONSINYASI</option>
                                    </select>
                                    <div class="form-group">
                                        <label for="nama_barang">Nama Barang</label>
                                        <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan Nama Barang">
                                    </div>
                                    <div class="form-group">
                                        <label for="supplier">Nama Supplier</label>
                                        <input type="text" class="form-control" id="supplier" placeholder="Masukkan Nama Supplier">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_masuk">Tanggal Masuk</label>
                                        <input type="date" class="form-control" id="tgl_masuk">
                                    </div>
                                    <div class="form-group">
                                        <label for="jmlmasuk">Jumlah Barang Masuk</label>
                                        <input type="text" class="form-control" id="jml_masuk" placeholder="Masukkan Jumlah Barang Masuk">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="terjual">Masukkan Jumlah Barang Terjual</label>
                                        <input type="text" class="form-control" id="terjual" readonly>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="tgl_keluar">Tanggal Keluar</label>
                                        <input type="date" class="form-control" id="tgl_keluar">
                                    </div>
                                    <div class="form-group">
                                        <label for="hrg_asli">Harga Asli Barang</label>
                                        <input type="text" class="form-control" id="hrg_asli" placeholder="tulis angka saja (contoh: 25000)">
                                    </div>
                                    <div class="form-group">
                                        <label for="hrg_jual">Harga Jual Barang</label>
                                        <input type="text" class="form-control" id="hrg_jual" placeholder="tulis angka saja (contoh: 25000)">
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                        <button class="btn btn-primary" onclick="return confirm('Yakin ingin menambah data?')">Save changes</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                        <!-- </form> -->
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="modal-edit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Barang</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Pilih Jenis ID:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio1">
                                        <label class="form-check-label">CASH</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio1" checked>
                                        <label class="form-check-label">KONSINYASI</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_barang">Masukkan Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_barang" placeholder="" value="Kripik Talas">
                                </div>
                                <div class="form-group">
                                    <label for="supplier">Masukkan Nama Supplier</label>
                                    <input type="text" class="form-control" id="sumpplier" placeholder="" value="Joko Talas">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_masuk">Tanggal Masuk</label>
                                    <input type="text" class="form-control" id="tgl_masuk" placeholder="" value="today">
                                </div>
                                <div class="form-group">
                                    <label for="jml_masuk">Masukkan Jumlah Barang Masuk</label>
                                    <input type="text" class="form-control" id="jml_masuk" placeholder="" value="50">
                                </div>
                                <div class="form-group">
                                    <label for="terjual">Masukkan Jumlah Barang Terjual</label>
                                    <input type="text" class="form-control" id="terjual" placeholder="" value="50">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_keluar">Tanggal Keluar</label>
                                    <input type="text" class="form-control" id="tgl_keluar" placeholder="" value="today">
                                </div>
                                <div class="form-group">
                                    <label for="hrg_asli">Masukkan Harga Asli Barang</label>
                                    <input type="text" class="form-control" id="hrg_asli" placeholder="" value="RP. 20.000">
                                </div>
                                <div class="form-group">
                                    <label for="hrg_jual">Masukkan Harga Jual Barang</label>
                                    <input type="text" class="form-control" id="hrg_jual" placeholder="" value="RP. 25.000">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="editdata" type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="modal-unduh">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cetak Nota</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Pilih Supplier</label>
                                    <select class="form-control">
                                        <option>Jokondo</option>
                                        <option>Rama Jaya</option>
                                        <option selected="">Semua</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="unduhdata" type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- content -->
        <script>
            $(function() {
                $('#example2').DataTable({
                    "paging": false,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": false,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
            $('#startdate').datetimepicker({
                format: 'L'
            });
            $('#enddate').datetimepicker({
                format: 'L'
            });
            $('#btnlaporan').click(function() {
                $('#modal-unduh').modal('show');
            });
            $('#tambahdata').click(function() {
                confirm("Apa Anda Yakin ingin menambah data?");
            });
            $('#editdata').click(function() {
                confirm("Apa Anda Yakin ingin mengedit data?");
            });
            $('#unduhdata').click(function() {
                confirm("Apa Anda Yakin ingin menngunduh data?");
            });
            $('#tambahnota').click(function() {
                $('#modal-default').modal('show');
            });
            $('#edit').click(function() {
                $('#modal-edit').modal('show');
            });
        </script>

</body>

</html>