<html>
  <head>
    <meta charset="utf-8">
    <title>Side Menu dengan Bootstrap</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link id="bootstrap-css" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/side.css">
    <link rel="stylesheet" href="/css/app2.css">
	
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


  </head>
  <body>
    <div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a href="#">Website<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="#">Android<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
          
     
      
    </div><!-- Akhir Wrapper -->
<script>
	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
</script>
  </body>
</html>