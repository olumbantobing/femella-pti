<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/25495e258e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/askha-logo.png">
    <title>INVENTARIS | NOTA</title>

    <script>
        $(function() {
            $("#tgl_masuk").datepicker({
                dateFormat: "yy-mm-dd"
            });
            $("#tgl_keluar").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>

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
            font-weight: bold;
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
            padding-right: 15px;
            padding-top: 10px;
            padding-bottom: 7px;
            box-sizing: border-box;
        }

        .sidebar a:hover {
            background-color: rgb(224, 216, 206);
        }

        .sidebar .active {
            background-color: white;
        }

        .content {
            width: 85%;
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
            text-align: center;
        }

        thead {
            background: #DAA520;
        }

        /* tr:nth-child(even) {
            background-color: #DDDDDD;
        } */

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
            <a href=" <?= base_url('admin/laporan'); ?>">Laporan Barang Masuk</a>
            <a href=" <?= base_url('admin/laporan_k'); ?>">Laporan Barang Keluar</a>
            <a href=# style=" background-color: #EEECB2; font-weight: bold;">Nota</a>
            <a href=" <?= base_url('auth/logout'); ?>" onclick="return confirm('Anda yakin ingin keluar?');">Keluar</a>
        </div>
    </div>
    <!-- sidebar kiri -->

    <!-- content -->
    <div class=" content">
        <!-- header -->
        <div class="header-content">
            <br /><br />
            <h2>NOTA (Konsinyasi)</h2>
        </div>
        <!-- header -->
        <div class="container-fluid">
            <div class="row">
                <div class="col col-4">
                    <form action="<?= base_url('admin/f_nota') ?>" role="form" method="post">
                        <div><b> Pilih Tanggal Nota : </b></div>
                        <label>Tanggal Masuk Awal:</label>
                        <input type="date" name="tgl_awal" class="form-control">
                        <label>Tanggal Masuk Akhir:</label>
                        <input type="date" name="tgl_akhir" class="form-control">
                        <button type="submit" class="btn btn-info" style="margin-top: 10px">Filter</button>
                    </form>
                    <form action="<?= base_url('admin/nota') ?>" role="form" method="post">
                        <button name="reset" class="btn btn-large btn-secondary" style="margin-top: 10px"><i class="fa fa-refresh"></i> Reset</button>
                    </form>
                </div>

                <div class="col col-2">
                    <button type="button" id="tambahnota" class="form-control form-control-navbar btn btn-large btn-info" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Tambah Nota</button>
                </div>
                <div class="col col-2">
                    <button type="button" id="editnota" class="form-control form-control-navbar btn btn-large btn-warning" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-pencil-square-o"></i> Edit Nota</button>
                </div>
                <div class="col col-2">
                    <button type="button" id="hapusnota" class="form-control form-control-navbar btn btn-large btn-danger" data-toggle="modal" data-target="#modal-hapus"><i class="fa fa-trash-o"></i> Hapus Nota</button>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jenis Nota</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Supplier</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Barang Masuk</th>
                                        <th>Barang Terjual</th>
                                        <th>Sisa</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Harga Asli (pcs) </th>
                                        <th>Harga Jual (pcs) </th>
                                        <th>Total</th>
                                        <th>Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php if (is_array($list_data)) { ?>
                                            <?php foreach ($list_data as $dd) : ?>
                                                <td><?= $dd->id_nota ?></td>
                                                <td><?= $dd->jenis ?></td>
                                                <td><?= $dd->nama_barang ?></td>
                                                <td><?= $dd->supplier ?></td>
                                                <td><?= date('d F Y', strtotime($dd->tgl_masuk)) ?></td>
                                                <td><?= $dd->jml_masuk, " pcs" ?></td>
                                                <td><?= $dd->terjual, " pcs" ?></td>
                                                <td><?= $dd->sisa, " pcs" ?></td>
                                                <td><?= date('d F Y', strtotime($dd->tgl_keluar)) ?></td>
                                                <td><?= "Rp ", $dd->hrg_asli ?></td>
                                                <td><?= "Rp ", $dd->hrg_jual ?></td>
                                                <td><?= "Rp ", $dd->total ?></td>
                                                <td><?= "Rp ", $dd->fee ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php } else { ?>
                                <td colspan="14" align="center"><strong>Data Kosong</strong></td>
                            <?php } ?>
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
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/tambah_nota') ?>" role="form" method="post">
                        <!-- <form> -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id_nota">ID</label><br />
                                <input type="text" class="form-control" name="id_nota" id="id_nota" value="N<?= date("yM"); ?><?= random_string('numeric', 3); ?>" readonly />

                                <label for="jenis">Pilih Jenis (klik form)</label><br>
                                <select class="form-control" name="jenis" id="jenis">
                                    <option>CASH</option>
                                    <option>KONSINYASI</option>
                                </select>

                                <label for="nama_barang">Nama Barang</label><br>
                                <input class="form-control" type="text" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang">

                                <label for="supplier">Nama Supplier</label><br>
                                <input class="form-control" type="text" id="supplier" name="supplier" placeholder="Masukkan Nama Supplier">

                                <label for="tgl_masuk">Tanggal Masuk</label><br>
                                <input class="form-control" type="date" id="tgl_masuk" name="tgl_masuk">

                                <label for="jml_masuk">Jumlah Barang Masuk</label><br>
                                <input class="form-control" type="text" id="jml_masuk" name="jml_masuk" placeholder="Masukkan Jumlah Barang Masuk">

                                <label for="tgl_keluar">Tanggal Keluar</label><br>
                                <input class="form-control" type="date" id="tgl_keluar" name="tgl_keluar">

                                <label for="hrg_asli">Harga Asli Barang</label><br>
                                <input class="form-control" type="text" id="hrg_asli" name="hrg_asli" placeholder="tulis angka saja (contoh: 25000)">

                                <label for="hrg_jual">Harga Jual Barang</label><br>
                                <input class="form-control" type="text" id="hrg_jual" name="hrg_jual" placeholder="tulis angka saja (contoh: 25000)">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button class="btn btn-success" onclick="return confirm('Yakin ingin menambah data?')">Tambah Data</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php if ($this->session->flashdata('msg_tambah')) {
                            echo "<script>alert('Data berhasil ditambahkan!');</script>"; ?>
                        <?php } ?>
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
                    <h4 class="modal-title">Edit Nota</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/edit_nota') ?>" role="form" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>ID (klik form)</label><br />
                                <select class="form-control" name="id_nota" id="id_nota">
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "inventaris-askhajaya");
                                    $res = mysqli_query($conn, "SELECT id_nota, CONCAT(id_nota, ' : ', supplier, ' - ', nama_barang) AS pilihan FROM nota");
                                    while ($rows = mysqli_fetch_array($res)) {
                                    ?>
                                        <option value="<?php echo $rows['id_nota']; ?>"><?php echo $rows['pilihan']; ?></option>
                                    <?php } ?>
                                </select>
                                <label for="terjual">Masukkan Jumlah Barang Terjual</label>
                                <input type="text" class="form-control" id="terjual" name="terjual" placeholder="Masukkan jumlah barang terjual">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button class="btn btn-primary" onclick="return confirm('Yakin ingin mengubah data?')">Ubah Data</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php if ($this->session->flashdata('msg_ubah')) {
                            echo "<script>alert('Data berhasil diubah!');</script>"; ?>
                        <?php } ?>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="modal-hapus">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Nota</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/hapus_nota') ?>" role="form" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>ID (klik form)</label><br />
                                <select class="form-control" name="id_nota" id="id_nota">
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "inventaris-askhajaya");
                                    $res = mysqli_query($conn, "SELECT id_nota, CONCAT(id_nota, ' : ', supplier, ' - ', nama_barang) AS pilihan FROM nota");
                                    while ($rows = mysqli_fetch_array($res)) {
                                    ?>
                                        <option value="<?php echo $rows['id_nota']; ?>"><?php echo $rows['pilihan']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php if ($this->session->flashdata('msg_hapus')) {
                            echo "<script>alert('Data berhasil dihapus!');</script>"; ?>
                        <?php } ?>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- content -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>

    <script>
        $(function() {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": false,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'print',
                        text: '<i class="fa fa-download"></i> Print all',
                        orientation: 'landscape',
                        filename: 'NOTA',
                        exportOptions: {
                            modifier: {
                                selected: null
                            }
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="fa fa-square-check"></i> Print selected',
                        orientation: 'landscape',
                        filename: 'NOTA',
                    }
                ],
                title: 'NOTA',
                select: true,
                pageSize: 'A4',
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
        $('#unduhdata').click(function() {
            confirm("Apa Anda Yakin ingin mengunduh data?");
        });
        $('#tambahnota').click(function() {
            $('#modal-default').modal('show');
        });
        $('#editnota').click(function() {
            $('#modal-edit').modal('show');
        });
        $('#hapusnota').click(function() {
            $('#modal-hapus').modal('show');
        });
    </script>

</body>

</html>