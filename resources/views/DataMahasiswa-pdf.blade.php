<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1 style="text-align: center">Data Mahasiswa</h1>

<table id="customers">
    <thead class="text-center">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">NPM</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">No Telephone</th>
        </tr>
      </thead>

      <tbody>
          @php
              $no = 1;
          @endphp
          @foreach ($data as $row)
              
          <tr class="text-center">
              <td scope="col">{{ $no++ }}</td>
              <td scope="col">{{ $row->nama }}</td>
              <td scope="col">{{ $row->npm }}</td>
              <td scope="col">{{ $row->jurusan }}</td>
              <td scope="col">{{ $row->jeniskelamin }}</td>
              <td scope="col">+62 {{ $row->telp }}</td>
          </tr>
      @endforeach
      </tbody>


</table>

</body>
</html>
