<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table border="1" cellpadding="10" cellpadding="0">
            <tr>
                <th colspan="3">Jadwal Penyiaran</th>
            </tr>
            @foreach ($penyiaran as $data)
            <tr>
                <th colspan="3">{{$data['nama_siaran']}}</th>
            </tr>
            <tr>
                <th rowspan="2">Nama Siaran</th>
                <th rowspan="2">Tanggal Siaran</th>
            </tr>
            <tr>
                <th>Jam Siaran</th>
            </tr>
            @foreach ($data['jadwal'] as $jadwal)
            <tr>
                <td>{{$jadwal['siaran'] }}</td>
                <td>{{$jadwal['tanggal'] }}</td>
                <td>{{$jadwal['jam'] }}</td>
            </tr>
            @endforeach
        @endforeach
        </table>
    </center>
</body>
</html>