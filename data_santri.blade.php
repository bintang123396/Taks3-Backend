<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Data Santri</h3>
<table border =2>
    <thead>

    <th>Nomor</th>
    <th>Nama</th>
    <th>Alamat</th>

    <tbody style : align = center>
        <tr>
            <th>
                1</th>
                <td> {{ $mhs1 }}</td>
                <td>{{ $asal1 }}</td> 
            </tr>
            <tr>
                <th>2</th>
                <td>{{ $mhs2 }} </td>
                <td>{{ $asal2 }}</td>
            </tr>
            <tr>
                <th>3</th>
                <td>{{ $mhs3 }} </td>
                <td>{{ $asal3 }}</td>
            </tr>
            <tr>
                <th>4</th>
                <td>{{ $mhs4 }} </td>
                <td>{{ $asal4 }}</td>
            </tr>
            <tr>
                <th>5</th>
                <td>{{ $mhs5 }} </td>
                <td>{{ $asal5 }}</td>
            </tr>
               
    </tbody>
</thead>
</table>

</body>
</html>
