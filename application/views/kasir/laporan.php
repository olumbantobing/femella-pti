<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/25495e258e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script>
    <!-- Include File jQuery -->
    <script src="js/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/askha-logo.png">
    <title>INVENTARIS | LAPORAN</title>
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

        .content .header-content {
            width: 100%;
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

        thead {
            background: #DAA520;
        }

        td,
        th {
            text-align: center;
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
            <a href=" <?= base_url('kasir/index'); ?>"">Beranda</a>
            <a href=" <?= base_url('kasir/stoktoko'); ?>"">Stok Toko</a>
            <a href=" <?= base_url('kasir/barangterjual'); ?>"">Barang Terjual</a>
            <a href=# style=" background-color: #EEECB2; font-weight: bold;">Laporan</a>
            <a href=" <?= base_url('auth/logout'); ?>" onclick="return confirm('Anda yakin ingin keluar?');">Keluar</a>
        </div>
    </div>
    <!-- sidebar kiri -->

    <!-- content -->
    <div class=" content">
        <!-- header -->
        <div class="header-content">
            <br /><br />
            <h2>LAPORAN</h2>
        </div>
        <!-- header -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col col-6">
                                    <form action="<?= base_url('kasir/filter') ?>" role="form" method="post">
                                        <!-- <form action="<?= base_url('kasir/laporan') ?>" role="form" method="post"> -->
                                        <div><b> Pilih Tanggal Laporan : </b></div>
                                        <!-- <div class="form-group"> -->
                                        <!-- <form method="post" class="form-inline"> -->
                                        <label>Tanggal Awal:</label>
                                        <input type="date" name="tgl_awal" class="form-control">
                                        <label>Tanggal Akhir:</label>
                                        <input type="date" name="tgl_akhir" class="form-control">
                                        <button type="submit" class="btn btn-info" style="margin-top: 10px">Filter</button>
                                    </form>
                                    <form action="<?= base_url('kasir/reset') ?>" role="form" method="post">
                                        <button name="reset" class="btn btn-large btn-secondary" style="margin-top: 10px">Reset <i class="fa fa-refresh"></i></button>
                                    </form>
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal</th>
                                            <th>Barang Terjual di Toko</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php if (is_array($list_data)) { ?>
                                                <?php $no = 1; ?>
                                                <?php foreach ($list_data as $dd) : ?>
                                                    <td><?= $no ?></td>
                                                    <td><?= $dd->id ?></td>
                                                    <td><?= $dd->nama_barang ?></td>
                                                    <td><?= date('d F Y', strtotime($dd->tanggal)) ?></td>
                                                    <td><?= $dd->terjual, " pcs" ?></td>
                                                    <td><?= "Rp ", $dd->harga ?></td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                <?php } else { ?>
                                    <td colspan="6" align="center"><strong>Data Kosong</strong></td>
                                <?php } ?>
                                    </tbody>
                                    <tfoot>

                                    </tfoot>
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
        </div>
        <div class="footer">
            <p>Copyright &copy; 2022 Kelompok 2 PTI RB ITERA</p>
        </div>
    </div>

    <!-- content -->

    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script>
        $(function() {
            $('#example2').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": true,
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'pdfHtml5',
                    text: '<i class="fa fa-download"></i> Unduh Laporan',
                    orientation: 'portrait',
                    filename: 'Laporan Barang Terjual',
                    exportOptions: {
                        columns: ':visible',
                        modifier: {
                            page: 'current',
                        }
                    },
                    customize: function(doc) {
                        doc.defaultStyle.fontSize = 12;
                        doc.content.splice(0, 1);
                        doc.pageMargins = [20, 60, 20, 20];
                        var now = new Date();
                        var jsDate = now.getDate() + '-' + (now.getMonth() + 1) + '-' + now.getFullYear();
                        doc['header'] = (function() {
                            return {
                                columns: [{
                                    alignment: 'center',
                                    text: 'LAPORAN BARANG TERJUAL',
                                    fontSize: 18,
                                    margin: [0, 30, 0, 5]
                                }]
                            }
                        });
                        doc['footer'] = (function(page, pages) {
                            return {
                                columns: [{
                                        alignment: 'left',
                                        text: ['Dibuat pada: ', {
                                            text: jsDate.toString()
                                        }]
                                    },
                                    {
                                        alignment: 'right',
                                        text: ['hal ', {
                                            text: page.toString()
                                        }, ' dari ', {
                                            text: pages.toString()
                                        }]
                                    }
                                ],
                                margin: [40, 0, 40, 5]
                            }
                        });

                        var objLayout = {};
                        objLayout['hLineWidth'] = function(i) {
                            return .8;
                        };
                        objLayout['vLineWidth'] = function(i) {
                            return .5;
                        };
                        objLayout['hLineColor'] = function(i) {
                            return '#aaa';
                        };
                        objLayout['vLineColor'] = function(i) {
                            return '#aaa';
                        };
                        objLayout['paddingLeft'] = function(i) {
                            return 8;
                        };
                        objLayout['paddingRight'] = function(i) {
                            return 8;
                        };
                        doc.content[0].layout = objLayout;
                    },
                    title: 'LAPORAN BARANG TERJUAL',
                    pageSize: 'A4',
                    download: 'open'
                }]
            });
        });
        $('#startdate').datetimepicker({
            format: 'L'
        });
        $('#enddate').datetimepicker({
            format: 'L'
        });
        $('#btnlaporan').click(function() {
            confirm("Apa Anda Yakin ingin mengunduh laporan?");
        })
    </script>
</body>


</html>