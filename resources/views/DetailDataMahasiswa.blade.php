<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Mahasiswa</title>
    {{-- Bootstrap CDN CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- CSS Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>

    <div class="container">
        <h1 class="text-center mb-3 mt-4">Data Mahasiswa</h1>
        <hr class="mb-4">

        
        <div class="row border p-3">
            @foreach ( $data as $row )
            
            <div class="col-4">
                <div class="text-center">
                        <img src="{{ asset('MahasiswaImg/'.$row->foto) }}" alt="" class="rounded-circle border-3 border border-danger" width="200px">
                            <h4 class="mt-4 bolder">{{ $row->nama}}</h4>
                            <p class="bolder"><i>{{ $row->npm}}<br> {{ $row->jurusan}}</i></p>
                    </div>
                </div>
                    
                <div class="col-1"> <img class="vr mt-5" height="240px"></img></div>

                <div class="col-7">
                    <h4 class="fw-bold ms-2"><u>{{ $row->nama }}</u></h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ $row->jeniskelamin }}</td>
                            </tr>
                            <tr>
                                <td>Nomor Telephone / Whatsapp</td>
                                <td>:</td>
                                <td>{{ $row->telp }}</td>
                            </tr>
                            <tr>
                                <td>Data Dibuat</td>
                                <td>:</td>
                                <td>{{ $row->created_at->format('D M Y') }}</td>
                            </tr>
                            <tr>
                                <td>Data Diedit</td>
                                <td>:</td>
                                <td>0{{ $row->updated_at->diffForHumans() }}</td>
                            </tr>
                            <tr>
                                <td class="align-self-end">
                                    <a href="/mahasiswa" type="button" class="btn btn-info text-white">Kembali</a>
                                    <a href="/readdatamahasiswa/{{ $row->id }}" type="button" class="btn btn-warning text-white">Edit</a>   
                                    <a href="#" type="button" class="btn btn-danger hapus" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            @endforeach
        </div>
        
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
</html>