<table>
    <tr>
        <td>Outlet: </td>
        <td>{{$transaksi->outlet->name}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Kode Invoice: </td>
        <td>{{$transaksi->kode_invoice}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Member: </td>
        <td>{{$transaksi->member->name}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Tanggal Pemesanan: </td>
        <td>{{$transaksi->tgl}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Batas Waktu Pembayaran: </td>
        <td>{{$transaksi->batas_waktu}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Tanggal Pembayaran: </td>
        <td>{{$transaksi->tgl_bayar}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Biaya Tambahan: </td>
        <td>{{$transaksi->biaya_tambahan}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Diskon: </td>
        <td>{{$transaksi->diskon}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Status: </td>
        <td>{{$transaksi->status}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Dibayar: </td>
        <td>{{$transaksi->dibayar}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Pelanggan: </td>
        <td>{{$transaksi->user->name}}</td>
    </tr>
</table>