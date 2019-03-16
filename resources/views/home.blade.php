
@extends('template')

@section('content')
	<body>
	  <br>
	  <br>
	  <br>
	  <br>
      <div class="container">

         <section class="jumbotron text-center">
            <div class="container">
               <h1 class="jumbotron-heading">DropBix</h1>
               <p class="lead text-muted">Sebuah website Indonesia yang mirip DropBox</p>
               <p>
                  <a href="{{ route('register') }}" class="btn btn-primary">Daftar Disini</a>

			   </p>
            </div>
         </section>
      </div>
   
	  <br>
	  <br>
	  <br>
	  <br>
	</body>
@endsection
