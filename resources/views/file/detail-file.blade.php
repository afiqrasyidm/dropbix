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
		<form id="form-add-course" role="form" method="post" action="{{ route('update') }}" enctype="multipart/form-data">
			<input type="hidden" name="id" value="{{ $file->id}}">
			{{ csrf_field()}}

		  <div class="form-group">
			<label for="exampleInputEmail1">Nama File</label>
			<input type="text" class="form-control" placeholder="Masukkan nama file" name="nama_file" value = "{{$file->name}}">
		  </div>
		  <p>Tanggal Perubahan Terakhir: "{{$file->updated_at}}" </p>
			<p>Download File: <a href="{{URL::asset('file/'.$file->url)}}" target="_blank">{{$file->name}}</a> </p>

         <section class="jumbotron text-center">
			<div class="container">


				<div class="file-upload-wrapper" data-text="Pilih File Kamu!">
				  <input name="file" type="file" class="file-upload-field" value="">
				</div>

			</div>
		 </section>
		 <button type="submit" id="buttonUpload" name="submit" value="update" class="btn btn-warning">Update</button>
		 <button type="submit" id="buttonUpload" name="submit" value="delete" class="btn btn-danger">Delete</button>

		</form>
		</div>

	  </div>

	  <br>
	  <br>
	  <br>
	  <br>
	</body>
@endsection
