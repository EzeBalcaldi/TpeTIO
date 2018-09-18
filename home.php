  <?php
    function home(){
      $titulo = "NBAINFORMER";
   ?>
  <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/estilos.css" type="text/css">
        <title><?php echo $titulo ?></title>
      </head>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-8 contenido">
      <br>
      <br>
      <article class="container-fluid">
        <section>
          <img src="images/durant.jpg" class="img-fluid" alt="Durant">
          <p class="titulos">Un año después, Kevin Durant vuelve a hundir a Cleveland en el ‘Game 3’</p>
        </section>
        <section>
          <img src="images/irving.jpg" class="img-fluid" alt="Irving">
          <p class="titulos">¿Qué sucederá con el futuro de Irving en Boston?</p>
        </section>
      </article>
      </div>
  <div class="col-12 col-sm-12	col-md-4">
    <br>
    <aside class="container-fluid publicidad">
      <img src="images/publicidad2.jpg" alt="" height="" class="img-fluid publicidad">
      <p><a href="http://www.2k.com">Comprá ya el nuevo NBA2K!</a></p>
      <br>
    </aside>
  </div>
  <footer class="container-fluid">
    <p>NBA Informer, todos los derechos reservados.</p>
    <p>COPYRIGHT &#9400; 2018</p>
  </footer>
  </div>
  </html>
  <?php
}
home();
?>
