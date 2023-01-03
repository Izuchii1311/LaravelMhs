<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Mahasiswa</title>
    {{-- Bootstrap CDN CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <h1 class="text-center mb-3 mt-4">Edit Data Mahasiswa</h1>

        <div class="row justify-content-center">
          <div class="col-8">
           <div class="card">
              <div class="card-body">
                <form action="/updatedatamahasiswa/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf

                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukkan nama anda ..." value="{{ $data->nama }}">
                    </div>
                    <div class="mb-3">
                      <label for="npm" class="form-label">NPM</label>
                      <input type="number" name="npm" class="form-control" id="npm" aria-describedby="npm" placeholder="Masukkan NPM anda ..." value="{{ $data->npm }}">
                    </div>
                    <div class="mb-3">
                      <label for="jurusan" class="form-label">Jurusan</label>
                      <select class="form-select form-select-sm" name="jurusan" aria-label="jurusan">
                        <option selected>Pilih Jurusan</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Design Komunikasi Visual">Design Komunikasi Visual</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                      <select class="form-select form-select-sm" name="jeniskelamin" aria-label="jeniskelamin">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="telp" class="form-label">No Telephone / Whatsapp</label>
                      <input type="number" name="telp" class="form-control" id="telp" aria-describedby="telp" placeholder="Masukkan nomor telephone anda ..." value="{{ $data->telp }}">
                    </div>
                    <div class="mb-3">
                      <label for="foto" class="form-label">Tambahkan Foto</label>
                      <input type="file" name="foto" class="form-control" id="foto" aria-describedby="telp">
                    </div>

                    <button type="submit" class="btn btn-primary float-end mt-4">Submit</button>
                    <a href="/mahasiswa" type="submit" class="btn btn-danger mx-2 float-end mt-4">Cancle</a>

                </form>
              </div>
            </div>
          </div>
        </div>
        
    </div>


    {{-- Bootstrap CDN Java Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>