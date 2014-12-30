  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="<?php echo base_url('Bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('Bootstrap/css/main.css'); ?>" rel="stylesheet"> 
  <link href="<?php echo base_url('Bootstrap/js/bootstrap.min.js'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('Bootstrap/js/jquery-2.1.1.js'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('Bootstrap/js/jquery-2.1.1.min.js'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('Bootstrap/js/npm.js'); ?>" rel="stylesheet">
<div>
  <img src="resources/img/background/bn.jpg">
  
    <!-- Nav Tabs -->

<div class="row-fluid">
    <a href="#/" class="navbar-brand">Ciscom Home</a>
      <ul class="nav nav-tabs" role="navigation">
        <li class="active"> <a href="#home" role="tab" data-toggle="tab"> Home </a> </li>
        <li> <a href="#frm1" role="tab" data-toggle="tab"> Registros </a> </li>
        <li> <a href="#frm2" role="tab" data-toggle="tab"> Ventas </a> </li>
        <li> <a href="#frm3" role="tab" data-toggle="tab"> Detalle de Ventas </a> </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Operaciones<span class ="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#rol_div">Roles de Division</a></li>
              <li><a href="#rol_mul">Roles de Multiplicaciòn</a></li>
              <li class="divider"><a href="#"></a></li>
              <li><a href="#com_med"> Comparacion de Medidas</a></li>
              <li><a href="#calc"> Calculadora</a></li>
            </ul>
        </li>
        <div>
          <a href="https://www.facebook.com/jc.cisnerosph" target="blank"><div id="i6"></div></a>
          <a href="http://pe.linkedin.com/pub/paulo-c%C3%A9sar-cisneros-henriquez/70/526/59a/" target="blank"><div id="i5"></div></a>
          <a href="https://plus.google.com/+PauloC%C3%A9ssarCisnerosHpcisnerosh" target="blank"><div id="i4"></div></a>
          <a href="http://instagram.com/jscisnerosp?ref=badge" target="blank"><div id="i3"></div></a>
          <a href="https://twitter.com/jccisnerosp" target="blank"><div id="i2"></div></a>
          <a href="https://www.facebook.com/jc.cisnerosph" target="blank"><div id="i1"></div></a>
        </div>
      </ul>    

      <!-- Tab Panes -->

  <div class="tab-content">
    <div class="tab-pane active" id="home">
      <?php $this->load->view('ciscom/home'); ?>
    </div>
    <div class="tab-pane" id="frm1">
      <?php $this->load->view('ciscom/frm_1'); ?>
    </div>
    <div class="tab-pane" id="frm2">
      <?php $this->load->view('ciscom/frm_2'); ?>
    </div>
    <div class="tab-pane" id="frm3">
      <?php $this->load->view('ciscom/frm_3'); ?>
    </div>
    <div class="dropdown-pane" id="rol_divs">
      <?php $this->load->view('ciscom/rol_div'); ?>
    </div> 
  </div>
</div>
<!-- <div><img src="resources/img/header/footer/footer.jpg">
</div> -->



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src = "Bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
 $('.dropdown-toggle').dropdown();
</script>



<!-- <div class="dropdown">
  <button type="button" class="btn dropdown-toggle btn-warning " data-toggle="dropdown">
    Hallo <span class="caret"></span>
  </button>
 
  <ul class="dropdown-menu">
    <li><a href="#">Acción #1</a></li>
    <li><a href="#">Acción #2</a></li>
    <li><a href="#">Acción #3</a></li>
    <li class="divider"><a href="#">Accion N</a></li>
    <li><a href="#">Acción #4</a></li>
  </ul>
</div> -->