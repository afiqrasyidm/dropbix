@extends('template')

@section('content')

		<link rel="stylesheet" href="{{ URL::asset('css/upload.css') }}">
	  
	  
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
		<h3>Silahkan Upload Dokumen Kamu!</h3>
			<br>
		<br>
		<form>
		  <div class="form-group">
			<label for="exampleInputEmail1">Nama File</label>
			<input type="text" class="form-control" placeholder="Masukkan nama file">
		  </div>
	
			
         <section class="jumbotron text-center">
			<div class="container">

				
				<div class="file-upload-wrapper" data-text="Pilih File Kamu!">
				  <input name="file-upload-field" type="file" class="file-upload-field" value="">
				</div>

			</div>
		 </section>
		 <button type="submit" id="buttonUpload" class="btn btn-primary">Upload</button>
	
		</form>
		</div>
		
	  </div>
   
	  <br>
	  <br>
	  <br>
	  <br>
	</body>
@endsection