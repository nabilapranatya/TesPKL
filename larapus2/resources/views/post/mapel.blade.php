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
        <table border="1">
            <h2>TABEL MATA PELAJARAN</h2>
            <tr>
                <td>Kode_MP</td>
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