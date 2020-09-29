@extends('layout.main')
@section('title', 'Halaman about')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-5">Daftar Mahasiswa</h1>

			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">ID</th>
						<th scope="col">NIK</th>
						<th scope="col">Nama</th>
						<th scope="col">Tempat Lahir</th>
						<th scope="col">Tanggal Lahir</th>
						<th scope="col">Pekerjaan</th>
					</tr>
				</thead>
				<tbody>
					@foreach( $files as $files)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>	
						<td>{{$files -> nama}}</td>	
						<td>{{$files -> npm}}</td>	
						<td>{{$files -> email}}</td>	
						<td>{{$files -> jurusan}}</td>	
						<td>
							<a href="/students/{{$files->id}}/edit" class="badge badge-success">edit</a>
							<a href="/mahasiswa" class="badge btn-danger">Delete</a>
						</td>	
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection