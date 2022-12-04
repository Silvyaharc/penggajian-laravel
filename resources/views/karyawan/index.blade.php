@extends('layout.main')

@section('content')
      <div>
      	<h4>>>Data Karyawan</h4>
      	<a href="/karyawan/create" class="btn btn-success btn-md p-2 mb-3">Tambah data</a>
      </div>
      <div class="col-12 ps-1">
      	<table class="table table-bordered border-dark ">
      		<thead>
      			<tr>
      				<th scope="col">Id</th>
      				<th scope="col">Id Jabatan</th>
      				<th scope="col">Nama Karyawan</th>
      				<th scope="col">Alamat</th>
      				<th scope="col">No.HandPhone</th>
                              <th scope="col">Tempat Lahir</th>
                              <th scope="col">Tanggal Lahir</th>
                              <th scope="col">Jenis Kelamin</th>
                              <th scope="col">Status</th>
                              <th scope="col">Jumlah Anak</th>
                              <th scope="col">Action</th>
      			</tr>
      		</thead>
      		<tbody>

      			<tr>
      				<th scope="row">01</th>
      				<td>010</td>
      				<td>Piyae</td>
      				<td>Depok</td>
                              <td>081286860000</td>
                              <td>Aceh</td>
                              <td>16 mei 2004</td>
                              <td>Perempuan</td>
                              <td>Single</td>
                              <td>0</td>
      				<td>
      					<a href="/karyawan/edit" class="btn btn-info btn-sm">Edit</a>
      					<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Sure?')">Delete</a>
      				</td>
      			</tr>

      		</tbody>
</table>
      	</div>
      </div>
      @endsection
