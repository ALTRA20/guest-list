@extends('layouts.app')
	<link rel="stylesheet" href="{{ asset('css/daftarTamu.css') }}">
@section('content')
<div class="homeBody">
	@include('components.nav')
	<span id="modalAddData">
		<span class="btnAdd border border-dark rounded-circle p-3 px-4"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addData">+</span>
		<!-- Modal -->
		<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Daftar Tamu</h1>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <form action="/add" method="post">
		      	@csrf
		      <div class="modal-body">
		          <div class="mb-3">
				    <label for="nama" class="form-label">Nama</label>
				    <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" name="nama" autocomplete="off">
				    <div id="namaHelp" class="form-text">Diharuskan pakai nama lengkap</div>
				  </div>
		          <div class="mb-3">
				    <label for="keperluan" class="form-label">Keperluan</label>
				    <input type="text" class="form-control" id="keperluan" aria-describedby="keperluanHelp" name="keperluan" autocomplete="off">
				  </div>
		          <div class="mb-3">
				    <label for="asal" class="form-label">Asal</label>
				    <input type="text" class="form-control" id="asal" aria-describedby="asalHelp" name="asal">
				    <div id="asalHelp" class="form-text">Dari mana anda berasal (alamat sekolah/perusahaan/rumah)</div>
				  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </form>
		      </div>
		    </div>
		  </div>
		</div>
	</span>

	<span id="modalEditData">
		<!-- Modal -->
		<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Daftar Tamu</h1>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <form action="" method="post" id="modalUpdate">
		      	@csrf
                @method('PUT')
		      <div class="modal-body">
				  <input type="hidden" class="form-control" id="modalId" aria-describedby="namaHelp" name="id" >
		          <div class="mb-3">
				    <label for="nama" class="form-label">Nama</label>
				    <input type="text" class="form-control" id="modalNama" aria-describedby="namaHelp" name="name" autocomplete="off">
				    <div id="namaHelp" class="form-text">Diharuskan pakai nama lengkap</div>
				  </div>
		          <div class="mb-3">
				    <label for="keperluan" class="form-label">Keperluan</label>
				    <input type="text" class="form-control" id="modalKeperluan" aria-describedby="keperluanHelp" name="keperluan" autocomplete="off">
				  </div>
		          <div class="mb-3">
				    <label for="asal" class="form-label">Asal</label>
				    <input type="text" class="form-control" id="modalAsal" aria-describedby="asalHelp" name="asal" autocomplete="off">
				    <div id="asalHelp" class="form-text">Dari mana anda berasal (alamat sekolah/perusahaan/rumah)</div>
				  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </form>
		      </div>
		    </div>
		  </div>
		</div>
	</span>	

	<section class="container my-5">
		<div class="containerTop">
			<h2>Daftar Buku Tamu</h2>
			<form class="d-flex" role="search" action="{{ route('bukutamu.search') }}" method="POST">
				@csrf
		        <input class="form-control me-2" type="text" name="query" placeholder="Masukkan nama" aria-label="Search" autocomplete="off">
		        <button class="btn btn-outline-success" type="submit">Search</button>
		      </form>
			<span>
				<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-filter optionIcon" viewBox="0 0 16 16" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#filter"><path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/></svg>
				<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-three-dots-vertical eksporIcon" viewBox="0 0 16 16" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ekspor"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
			</span>
			
			<!-- card filter -->
			@include('components.card.filter')
			<!-- end card filter -->

			<!-- card filter -->
			@include('components.card.ekspor')
			<!-- end card filter -->
		</div>
		<table class="table table-striped" id="daftarTamu">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama</th>
		      <th scope="col">asal</th>
		      <th scope="col">keperluan</th>
		      <th scope="col">tanggal</th>
		      <th class="text-center" scope="col">Opsi</th>
		    </tr>
		  </thead>
		  <!-- <div style="height:100vh; width: 100%; display: flex; align-items: center; justify-content: center;">
		  	<h1>Copyright by <a href="https://github.com/ALTRA20">https://github.com/ALTRA20</a></h1>
		  </div> -->
		  <tbody>
		  	
			<?php $no=1; ?>
			@foreach ($visitors as $visitor)
		    <tr>
		      <td id="no">{{$no++}}</td>
		      <td id="name">{{ $visitor->name }}</td>
		      <td id="origin">{{ $visitor->origin }}</td>
		      <td id="necessity">{{ $visitor->necessity }}</td>
		      <td id="createdAt">{{ $visitor->created_at }}</td>
		      <td class="tdOpsi">
		      	<span class="btn btn-primary btn-edit" type="button" data-id="{{ $visitor->id }}" data-name="{{ $visitor->name }}" data-origin="{{ $visitor->origin }}" data-necessity="{{ $visitor->necessity }}" data-bs-toggle="modal" data-bs-target="#editData" onclick="addModalValue(this)">Edit</span>
		      	<form action="{{ route('bukutamu.delete', $visitor->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
		      		<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
		      	</form>
		      </td>
		    </tr>
			@endforeach
		  </tbody>
		</table>
		{{ $visitors->links('components.pagination') }}
	</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script>
	// Mendapatkan tombol edit dan modal
	let editButtons = document.querySelector('.btn-edit');
	let editModal = document.querySelector('#editData');

	// Mendapatkan input fields pada modal
	let editIdInput = editModal.querySelector('#modalId');
	let editNameInput = editModal.querySelector('#modalNama');
	let editKeperluanInput = editModal.querySelector('#modalKeperluan');
	let editAsalInput = editModal.querySelector('#modalAsal');

	function addModalValue(e) {
	    // Mengisi nilai pada form edit pada modal
	    editNameInput.value = e.getAttribute('data-name');
	    editKeperluanInput.value = e.getAttribute('data-necessity');
	    editAsalInput.value = e.getAttribute('data-origin');
	    let form = document.getElementById('modalUpdate');
	    // Mengubah value atribut action pada form
  		form.action = '/update/'+e.getAttribute('data-id');
	}

</script>
</div>