
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="/css/app2.css">
		<link rel="stylesheet" href="/css/custom.css">
		<link rel="stylesheet" href="/css/side.css">
			<link rel="stylesheet" href="/css/bootstrap.css">
	<script type="text/javascript" src="/css/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/css/bootstrap.js"></script>
  </head>

  <body>

    @include('Inc.navbar')

    <!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron text-center">
    <div class="jumbotron">
      <div class="container">
        <h2><b>RESPONSIVE WEB DESIGN</b></h2>
        <p>Ini merupakan web yang ditujukan untuk ka bagus. Semua didalam sini adalah hal yang luar biasa. Guakan web ini saat anda sedang bingung mantap.</p>
       
      </div>
    </div>
	</div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Percobaan 1</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="/isi" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Percobaan 2</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="/isi" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Percobaan 3</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="/isi" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      
    </div> <!-- /container -->
	<footer>
        @include('Inc.footer')
      </footer>


  </body>
</html>
