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
        <legend></legend>
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
    </fieldset>
</body>
</html>