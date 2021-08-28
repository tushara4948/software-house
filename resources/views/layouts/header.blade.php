<header>
	<div class="container">
		<nav class="navbar navbar-expand-lg">
		  <a class="navbar-brand" href="{{ url('home') }}">
		  	<img src="{{ URL::asset('public/assets/images/logo.png') }}" class="img-fluid">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><img src="{{ URL::asset('public/assets/images/menubar_icon.png') }}" class="img-fluid"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="{{ url('home') }}">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#services">Services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#project">Projects</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#about">About us</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link book_call_btn" href="call"><img src="{{ URL::asset('public/assets/images/call_btn_icon.png') }}" class="img-fluid"> Book a call</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	</div>
</header>