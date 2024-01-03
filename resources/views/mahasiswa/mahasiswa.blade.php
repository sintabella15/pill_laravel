<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Laravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/mahasiswa">mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profile">profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">about</a>
              </li>
            </ul> 
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

       <div class="container">
        <h1>ini adalah halaman mahsiswa</h1>
        <div class="row">
          <div class="col-sm-6">
            <h4>Tabel Mahasiswa</h4>
          </div>
       <div class="col-sm-6" style="text-align: right">
            <a href="/mahasiswa/create" class="btn btn-info btn-sm">Tambah Mahasiswa</a>
       </div>

        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="/mahasiswa"></a>
            <table class="table table-danger table-sm table-hover table-striped table-bordered text-center">
              <thead>
                <tr>
                  <th>npm</th>
                  <th>nama mahasiswa</th>
                  <th>jeniss kelamin</th>
                  <th colspan="2">TTL</th>
                </tr>
              </thead>

            </table>
          </div>
        </div>
      </div>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>