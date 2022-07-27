<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Hotel</legend>
        <br>
        <table border="1">
            <h2>TABEL KARYAWAN</h2>
            <tr>
                <td>Id_Karyawan</td>
                <td>Nama_Karyawan</td>
                <td>Jenis_Kelamin</td>
            </tr>

            @foreach ($karyawan as $karyawan)
            <tr>
                <td>{{$karyawan['id_karyawan']}}</td>
                <td>{{$karyawan['nama_karyawan']}}</td>
                <td>{{$karyawan['jenis_kelamin']}}</td>
            </tr>
            @endforeach
        </table>

        <table border="1">
            <h2>TABEL PENGUNJUNG</h2>
            <tr>
                <td>Id_Pengunjung</td>
                <td>Nama_Pengunjung</td>
                <td>Alamat</td>
                <td>Jenis_Kelamin</td>
                <td>No_Tlp</td>
                <td>No_Ktp</td>
            </tr>

            @foreach ($pengunjung as $pengunjung)
            <tr>
                <td>{{$pengunjung['id_pengunjung']}}</td>
                <td>{{$pengunjung['nama_pengunjung']}}</td>
                <td>{{$pengunjung['alamat']}}</td>
                <td>{{$pengunjung['jenis_kelamin']}}</td>
                <td>{{$pengunjung['no_tlp']}}</td>
                <td>{{$pengunjung['no_ktp']}}</td>
            </tr>
            @endforeach
        </table>

        <table border="1">
            <h2>TABEL TRANSAKSI</h2>
            <tr>
                <td>No_Transaksi</td>
                <td>Id_Pengunjung</td>
                <td>Id_Karyawan</td>
                <td>Jmlh_Kamar</td>
                <td>Tgl_Masuk</td>
                <td>Tgl_Keluar</td>
                <td>Lama_Nginap</td>
                <td>Total_Harga</td>
            </tr>

            @foreach ($transaksi as $transaksi)
            <tr>
                <td>{{$transaksi['no_transaksi']}}</td>
                <td>{{$transaksi['id_pengunjung']}}</td>
                <td>{{$transaksi['id_karyawan']}}</td>
                <td>{{$transaksi['jmlh_kamar']}}</td>
                <td>{{$transaksi['tgl_masuk']}}</td>
                <td>{{$transaksi['tgl_keluar']}}</td>
                <td>{{$transaksi['lama_nginap']}}</td>
                <td>{{$transaksi['total_harga']}}</td>
            </tr>
            @endforeach
        </table>

        <table border="1">
            <h2>TABEL DETAIL TRANSAKSI</h2>
            <tr>
                <td>Id_dtl_Karyawan</td>
                <td>No_Transaksi</td>
                <td>No_Kamar</td>
            </tr>

            @foreach ($detail_transaksi as $detail_transaksi)
            <tr>
                <td>{{$detail_transaksi['id_dtl_transaksi']}}</td>
                <td>{{$detail_transaksi['no_transaksi']}}</td>
                <td>{{$detail_transaksi['no_kamar']}}</td>
            </tr>
            @endforeach
        </table>

        <table border="1">
            <h2>TABEL KAMAR</h2>
            <tr>
                <td>No_Kamar</td>
                <td>Jenis_Kamar</td>
                <td>total_harga</td>
            </tr>

            @foreach ($kamar as $kamar)
            <tr>
                <td>{{$kamar['no_kamar']}}</td>
                <td>{{$kamar['jenis_kamar']}}</td>
                <td>{{$kamar['harga']}}</td>
            </tr>
            @endforeach
        </table>

    </fieldset>
</body>
</html>