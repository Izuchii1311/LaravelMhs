<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    {{-- Bootstrap CDN CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- CSS Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

    <div class="container">
        <h1 class="text-center mb-3 mt-4">Data Mahasiswa</h1>

        <div class="row">
          <div class="col-4">
            <a href="/tambahmahasiswa" type="button" class="btn btn-primary text-white mb-3">Tambah +</a>
            <a href="/exportpdf" type="button" class="btn btn-danger text-white mb-3">Export PDF</a>
            {{-- <a href="/exportexcel" type="button" class="btn btn-success text-white mb-3">Export Excel</a> --}}
          </div>
          
          <div class="col-8">
            <form action="/mahasiswa" method="GET">
                <input type="search" id="search" name="search" id="search" class="form-control" aria-describedby="search" placeholder="Cari data ...">
            </form>
          </div>

        </div>
  

        <table class="table">

            <thead class="table-dark text-center">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">NPM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No Telephone</th>
                {{-- <th scope="col">Dibuat</th> --}}
                {{-- <th scope="col">Riwayat</th> --}}
                <th scope="col">Aksi</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($data as $index => $row)
                    
                <tr class="text-center">
                    <td scope="col">{{ $index + $data->firstItem() }}</td>
                    <td scope="col">
                      <img src="{{ asset('MahasiswaImg/'.$row->foto) }}" alt="{{ $row->foto }}" width="50px">
                    </td>
                    <td scope="col">{{ $row->nama }}</td>
                    <td scope="col">{{ $row->npm }}</td>
                    <td scope="col">{{ $row->jurusan }}</td>
                    <td scope="col">{{ $row->jeniskelamin }}</td>
                    <td scope="col">+62 {{ $row->telp }}</td>
                    {{-- <td scope="col">{{ $row->created_at->format('D M Y') }}</td> --}}
                    {{-- <td scope="col">{{ $row->updated_at->diffForHumans() }}</td> --}}
                    <td scope="col">
                        {{-- <a href="/detailmahasiswa/{{ $row->id }}" type="button" class="btn btn-info text-white">Detail</a> --}}
                        <a href="/readdatamahasiswa/{{ $row->id }}" type="button" class="btn btn-warning text-white">Edit</a>
                        <a href="#" type="button" class="btn btn-danger hapus" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

          </table>

          {{ $data->links() }}
    </div>


    {{-- Bootstrap CDN Java Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    {{-- SweetAllert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    {{-- Toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </body>

  <script>
  $('.hapus').click( function() {
    var mahasiswaId = $(this).attr('data-id');
    var mahasiswaName = $(this).attr('data-nama');

    Swal.fire({
      title: 'Apakah Kamu Mau Menghapus Data Ini?',
      text: "" + mahasiswaName + " Akan Dihapus Secara Permanen!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "/deletedatamahasiswa/" + mahasiswaId + ""
        Swal.fire(
          'Dihapus!',
          'Data Telah Dihapus Secara Permanen.',
          'success'
        )
      }
    })  

  });
  </script>

  <script>
    @if (Session::has('success'))
      toastr.success('{{ Session::get('success') }}')
    @endif
  </script>
</html>