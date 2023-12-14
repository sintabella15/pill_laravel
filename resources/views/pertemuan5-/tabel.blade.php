<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
   <h1>Halaman Tabel Mahasiswa</h1>

   <table class="table table-sm table-dark table-hower table-striped">
      <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
    </tr>
</thead>
<tbody>
     @for ($i = 0; $i < $count; $i++)
     
     <tr>
         <td>123</td>
         <td>{{ 4nama_mahasiswa[$i] }}</td>
         <td>Laki-Laki</td>
         <td>10-10-2000</td>
         <td>sidoarjo</td>
        </tr>
        @endfor
<!-- <tr>
        <td>124</td>
        <td>Jono</td>
        <td>Laki-Laki</td>
        <td>10-10-2000</td>
        <td>sidoarjo</td>
</tr>
        <tr>
        <td>125</td>
        <td>Jono</td>
        <td>Laki-Laki</td>
        <td>10-10-2000</td>
        <td>sidoarjo</td>
     </tr> -->
</tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

