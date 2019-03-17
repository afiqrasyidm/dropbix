
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
			   
			    @if(Auth::user())
				

					<p class="lead text-muted"> Selamat datang, {{Auth::user()->name}}!</p>
					<br>
					<p>
						<a href="{{ route('upload') }}" class="btn btn-primary">Upload Filemu Disini</a>
				   </p>

				@else
				   <p class="lead text-muted">Sebuah website Indonesia yang mirip DropBox</p>
				   <p>
					  <a href="{{ route('register') }}" class="btn btn-primary">Daftar Disini</a>

				   </p>
				@endif
			   
            </div>
         </section>
      </div>
   
	  <br>
	  <br>
	  <br>
	  <br>
	</body>
@endsection
