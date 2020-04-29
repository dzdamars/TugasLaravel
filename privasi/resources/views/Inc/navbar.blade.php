
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="/">DzDamarS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="{{Request::is('about') ? 'active' : ''}}">
            <a class="nav-link" href="/about">About</a>
          </li>
		  <li class="{{Request::is('contact') ? 'active' : ''}}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Mantap</a>
              <a class="dropdown-item" href="#">Cool</a>
              <a class="dropdown-item" href="#">Good</a>
            </div>
          </li>
		  <li class="{{Request::is('contact') ? 'active' : ''}}">
            <a class="nav-link" href="/login">Login</a>
          </li>
		  <li class="{{Request::is('contact') ? 'active' : ''}}">
            <a class="nav-link" href="/register">Register</a>
          </li>
        </ul>

		
       	</div>
     @if (Auth::check())
            <a class="nav-link ml-auto" href="#">Hy, {{ Auth::user()->name}}</a>
		@endif
    </nav>

    
  <script>
   $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
    </script>

   
</html>
