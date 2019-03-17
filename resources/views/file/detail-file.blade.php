@extends('template')

@section('content')



	<body>
	  <br>
	  <br>
	  <br>
	  <br>
      <div class="container ">
		<h1> Selamat Datang di DropBix Budi! </h1>

		<br>
		<br>
		<div class ="col col-lg-8 ">
		<h3>Berikut adalah Detail Dokumen Tugas Skripsi</h3>
			<br>
		<br>
		<form>
		  <div class="form-group">
			<label for="exampleInputEmail1">Nama File</label>
			<input type="text" class="form-control" placeholder="Masukkan nama file" value = "{{$file->name}}">
		  </div>
		  <p>Tanggal Perubahan Terakhir: "{{$file->updated_at}}" </p>

         <section class="jumbotron text-center">
			<div class="container">


				<div class="file-upload-wrapper" data-text="Pilih File Kamu!">
				  <input name="file-upload-field" type="file" class="file-upload-field" value="">
				</div>

			</div>
		 </section>
		 <button type="submit" id="buttonUpload" class="btn btn-warning">Update</button>
		 <button type="submit" id="buttonUpload" class="btn btn-danger">Delete</button>

		</form>
		</div>

	  </div>

	  <br>
	  <br>
	  <br>
	  <br>
	</body>
@endsection
