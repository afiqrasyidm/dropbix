	
<link rel="stylesheet" href="{{ URL::asset('css/user.css') }}">
 <script src="{{ URL::asset('js/user.css') }}"></script>
	<div class="login-page">
		<div class="form">
			<h3>Selamat Datang Di DropBix!</h3>
	
			<form class="login-form">
				  <input type="email" placeholder="email"/>
				  <input type="password" placeholder="password"/>
				  <button>login</button>
				  <p class="message">Belum Punya Akun? <a href="{{ route('daftar') }}">Daftar</a></p>
			</form>
				
		</div>
	</div>