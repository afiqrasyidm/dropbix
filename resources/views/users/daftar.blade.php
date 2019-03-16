	<link rel="stylesheet" href="{{ URL::asset('css/user.css') }}">
  
	<script src="{{ URL::asset('js/user.css') }}"></script>
	
	<div class="login-page">
		<div class="form">
			<h3>Selamat Datang Di DropBix!</h3>
			<form class="register-form">
			  <input type="text" placeholder="name"/>
			  <input type="password" placeholder="password"/>
			  <input type="text" placeholder="email "/>
			  <button>Daftar</button>
			  <p class="message">Punya Akun? <a href="{{ route('login') }}">Login</a></p>
			</form>
			
		</div>
	</div>