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
                <td>JENIS KELAMIN</td>
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
    </fieldset>
</body>
</html>