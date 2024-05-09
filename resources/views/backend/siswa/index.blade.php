@extends('backend.index')
@section('content')

<div class="pagetitle">
	<h1>Data Tables</h1>
	<nav>
	  <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.html">Home</a></li>
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item active">Data</li>
	  </ol>
	</nav>
  </div><!-- End Page Title -->

  <section class="section">
	<div class="row">
	  <div class="col-lg-12">

		<div class="card">
		  <div class="card-body">
			<h5 class="card-title">Datatables</h5>
			<a href="{{ route('siswa.create') }}" class="btn btn-primary btn-sm" title="Tambah Data">
				<i class="bi bi-clipboard-plus"></i> Tambah</a>
			<p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

			<!-- Table with stripped rows -->
			<table class="table datatable">
			  <thead>
				<tr>
				  <th scope="col">no</th>
				  <th scope="col">Nama</th>
				  <th scope="col">Gender</th>
				  <th scope="col">Agama</th>
				  <th scope="col">Foto</th>
				  <th scope="col">Action</th>
				</tr>
			  </thead>
			  <tbody>
				@php
				$no = 1;
				@endphp
				@foreach($ar_siswa as $s)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $s->nama }}</td>
					<td>{{ $s->gender }}</td>
					<td>{{ $s->agama }}</td>
					<td align="center">
					  <img src="{{ asset('assets/img/siswa/' . $s->foto) }}" width="30%" />
					</td>
					<td align="center">
						<a class="btn btn-info btn-sm" href="{{ route('siswa.show', $s->id) }}" title="Detail Siswa">
							<i class="bi bi-eye"></i>
						</a>
					  </td>
				</tr>
				@endforeach
			  </tbody>
			</table>
			<!-- End Table with stripped rows -->

		  </div>
		</div>

	  </div>
	</div>
  </section>
@endsection