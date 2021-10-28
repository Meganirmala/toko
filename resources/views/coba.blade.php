<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba</title>
    <style>
        .female{
            background-color: red;
        }
    </style>
</head>
<body>
    {{-- <h3>Hallo nama aku {{ $name }}</h3> --}}
    {{-- penggunaan if di blade --}}
    @if ($name =="")
        <h3>Hallo, nama kamu siapa?</h3>
    @else
        <h3>Hallo, nama aku {{ $name }}</h3>
    @endif
    {{-- penggunaan swich case --}}
    @switch($menu)
        @case(1)
            <h3>Menu 1 nih</h3>
            @break
        @case(2)
            <h3>Menu 2 hehe</h3>
        @break
        @default
            <h3>Menunya default</h3>
    @endswitch
    
    {{-- penggunaan foreach --}}
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Daftar Siswa</td>
        </tr>
        @foreach ($siswa as $s )
        <tr>
            <td>nama</td>
            <td @class([
                'female' => ($s->gender == "female")
            ])
            >{{ $s->name }}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>{{ $s->age }}</td>
        </tr>
        @endforeach
    </table>

    {{-- <h2>Daftar Siswa</h2>
    @foreach ($siswa as $s )
    <h3>{{ $s->name }}</h3>
    <h3>{{ $s->age }}</h3>
        
    @endforeach --}}
</body>
</html>