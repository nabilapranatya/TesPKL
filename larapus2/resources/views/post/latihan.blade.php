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
        <legend>Data Identitas</legend>
        <br>
        <table border="1">
            <h2>TABEL SISWA</h2>
            <tr>
                <td>NoSISWA</td>
                <td>NAMA</td>
                <td>JK</td>
                <td>JURUSAN</td>
            </tr>

            @foreach ($siswa as $siswa)
            <tr>
                <td>{{$siswa['NoSISWA']}}</td>
                <td>{{$siswa['NAMA']}}</td>
                <td>{{$siswa['JK']}}</td>
                <td>{{$siswa['JURUSAN']}}</td>
            </tr>
            @endforeach
        </table>

        <table border="1">
            <h2>TABEL PESERTA</h2>
            <tr>
                <td>NoSISWA</td>
                <td>Kode_MP</td>
            </tr>

            @foreach ($peserta as $peserta)
            <tr>
                <td>{{$peserta->NoSiswa}}</td>
                <td>{{$peserta->Kode_MP}}</td>
            </tr>
            @endforeach
        </table>

        <table border="1">
            <h2>TABEL MATA PELAJARAN</h2>
            <tr>
                <td>KODE_MP</td>
                <td>NAMA_MP</td>
                <td>SKS</td>
                <td>SEMESTER</td>
            </tr>

            @foreach ($mapel as $mapel)
            <tr>
                <td>{{$mapel->KODE_MP}}</td>
                <td>{{$mapel->NAMA_MP}}</td>
                <td>{{$mapel->SKS}}</td>
                <td>{{$mapel->SEMESTER}}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>