<h2>Laporan Kasir</h2>
<hr>
<table id="example2" class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Tanggal</th>
            <!-- <th>Barang Barang Masuk Ke Toko</th> -->
            <th>Barang Terjual di Toko</th>
            <!-- <th>Stok di Toko</th> -->
            <th>Harga</th>
            <!-- <th>Total</th> -->
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
                    <td><?= $dd->terjual ?></td>
                    <td><?= $dd->harga ?></td>
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