<table>
    <tr>
        <td>Pelanggan: </td>
        <td>{{$detailtransaksi->transaksi->name}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Paket: </td>
        <td>{{$detailtransaksi->paket->nama_paket}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Jumlah Perkeranjang: </td>
        <td>{{$detailtransaksi->qty}}</td>
    </tr>
</table>

<table>
    <tr>
        <td>Keterangan: </td>
        <td>{{$detailtransaksi->keterangan}}</td>
    </tr>
</table>
