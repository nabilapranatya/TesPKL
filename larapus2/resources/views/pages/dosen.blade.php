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
            <b><i><u>DATA MAHASISWA</u></i></b>
        </legend>
        @foreach ($Dosen as $data)
        <ul>
            Nama Dosen : {{$data['namadosen']}} <br>
            Mata Kuliah : {{$data['matkul']}}
            <?php $nilai_b = 0 ?>
            @foreach ($data['mahasiswa'] as $mahasiswa)
            <li>Nama Mahasiswa : {{$mahasiswa['nama']}}</li>
            Nilai : {{$mahasiswa['nilai']}} <br>
            Grade : 
            @if ($mahasiswa['nilai'] >= 90)
            A 
            @elseif($mahasiswa['nilai'] >= 80)
            B
            @elseif($mahasiswa['nilai'] >= 70)
            C
            @elseif($mahasiswa['nilai'] >= 50)
            D
            @elseif($mahasiswa['nilai'] <= 50)
            E
            @else
            Grade Tidak Ada
            @endif
            <?php $nilai_b += $mahasiswa['nilai'] ?>
            @endforeach
            <br>
            ------------------------- <br>
            <b>TOTAL NILAI KESELURUHAN MAHASISWA = {{$nilai_b}}</b> <br>
            <?php $nilairata = $nilai_b / count($data['mahasiswa'])?>
            <b>NILAI RATA-RATA = {{$nilairata}} </b><br>
            <b>GRADE DARI DOSEN = {{$data['namadosen']}} =</b>
            @if($nilairata >= 90)
            A
            @elseif($nilairata >= 80)
            B
            @elseif($nilairata >= 70)
            C
            @elseif($nilairata >= 50)
            D
            @elseif($nilairata <= 80)
            E
            @else
            Grade Tidak Ada
            @endif
            <hr>
        </ul>
        @endforeach
    </fieldset>
</body>
</html>