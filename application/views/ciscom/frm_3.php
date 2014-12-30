<!DOCTYPE html>
<html>
<head>
	<title>Detalle de las compras</title>
</head>
<body>

<div id="carousel-example-generic" class="carousel slide cr" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="resources/img/sl/11.jpg" alt="1">
      <div class="carousel-caption">
 
      </div>
    </div>
    <div class="item">
      <img src="resources/img/sl/22.jpg" alt="2">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="resources/img/sl/33.jpg" alt="3">
      <div class="carousel-caption">
  
       </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?php echo base_url('Bootstrap/js/bootstrap.min.js'); ?>"></script>