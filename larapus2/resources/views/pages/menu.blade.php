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
        <legend>
            Data Siswa
        </legend>
        <ul>
        @foreach ($menu as $data)
            <li>{{$data['beranda']}}</li>
            <li>{{$data['berita']}}</li>
            <ul>
            @foreach($data['kategori_berita'] as $kategori_berita)
                <li>{{$kategori_berita['nama']}}</li>
                <ul>
                @foreach($kategori_berita['data'] as $kategori)
                <li>{{$kategori}}</li>
                @endforeach
                </ul>
            @endforeach
            </ul>
            <li>{{$data['tentang']}}</li>
        @endforeach
        </ul>     
    </fieldset>
</body>
</html>