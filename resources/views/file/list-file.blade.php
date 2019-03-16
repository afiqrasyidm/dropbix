@extends('template')

@section('content')

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  
	<script>
		$(document).ready( function () {
			$('#list-file').DataTable();
		} );
	</script>
	  
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
		<h3>Berikut adalah dokumen kamu telah upload</h3>
			<br>
		<br>
		 <table id="list-file" class="display">
			<thead>
			  <tr>
				<th>Nama File</th>
				<th>Tanggal Perubahan Terakhir</th>
				<th>Detail</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>Tugas skripsi</td>
				<td>16-03-2019</td>
				<td> <a href="{{ route('detail-file') }}"><button type="submit">Detail</button></a></td>
			  </tr>
			  <tr>
				<td>Tugas kimia 2</td>
				<td>16-03-2019</td>
				<td> <a href="{{ route('detail-file') }}" ><button type="submit">Detail</button></a></td>
			  </tr>
			  <tr>
				<td>Tugas matematik 3</td>
				<td>16-03-2019</td>
				<td> <a href="{{ route('detail-file') }}" ><button type="submit">Detail</button></a></td>
			  </tr>
			</tbody>
		  </table>

		</div>
		
	  </div>
   
	  <br>
	  <br>
	  <br>
	  <br>
	</body>
@endsection