<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/" method="GET">
        <select name="kelas">
            <option value="" selected>Pilih Kelas</option>
            @foreach($kelas as $kel)
                <option value="{{ $kel->id_kelas }}" {{ (request()->get('kelas') == $kel->id_kelas) ? 'selected' : '' }}>{{ $kel->nama_kelas }}</option>
            @endforeach
        </select>
        <input type="text" name="query" value="{{ request()->get('query') }}">
        <button type="submit">CARI</button>
    </form>
    <table>
        <thead>
            <th>NAMA</th>
            <th>NIS</th>
            <th>KELAMIN</th>
            <th>KELAS</th>
        </thead>
        <tbody>
            @foreach($ruangan as $sis)
                <tr>
                    <td>{{ $sis->siswa->nama_siswa }}</td>
                    <td>{{ $sis->siswa->nis }}</td>
                    <td>{{ $sis->siswa->kelamin }}</td>
                    <td>{{ $sis->kelas->nama_kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>