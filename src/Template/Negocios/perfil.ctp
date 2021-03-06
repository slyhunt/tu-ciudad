<?php
/**
  * @var \App\View\AppView $this
  */
$this->layout = 'perfil';
?>
<style>
  .mainperf {
    padding-right: 0; 
    padding-left: 0;
  }
.mainperf {
    margin-left: 0;
    margin-right: 0;
   }
</style>

<?= $this->element('jumbotron03') ?>
   
    <div class=" container-fluid mainperf" id="content" style="">

        <div class=" perf  " >

            <?= $this->element('sidebar-left') ?>

            <div class="col-md-12 col-lg-7  " align="center" id="sec0" style="padding-right: 0; padding-left: 0;">
<?= $this->element('tabla-horarios') ?>
<div style="margin-bottom: 10px;"></div>
<div class="perfilpage">
<div class="productos-container thumbnail " style="padding-top: 10px;">
<div class="">
<?php
 $i = 0;
  if(isset($productos)){
 foreach ($productos as $producto): 
  $precio = explode(".",$producto->precio,2);?>
               <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 col-min"> <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item" data-toggle="modal" data-target="#modalProduct" pid="<?= $i?>" onclick="pmodal(this);">
                    <div class="preloader"></div>
                    <div class="preview" style="
                          background-image: url(../../files/ImagenesProductos/9ad9ddf1f5721a670fabd95aefb9e737.jpg);
                          background-size: cover;
                          background-repeat: no-repeat; 
                          height: 100%; width: 100% !important;" >
                    <img class="" style="opacity: 0;" onload="dimensionar(this); dataLayer.push({'event': 'producto-mostrado','namep': '<?= $producto->titulo?>', 'namen': '<?= $negocio->nombre ?>'});" src=/files/ImagenesProductos/<?= $producto->imagenes_productos['0']->fototh?> alt="">
                    </div>
                    <div class="content">
                        <h3>
                          <span id="tituloGTM"><?= $producto->titulo?></span> <!-- $producto->titulo -->
                        </h3>
                           
                        <h5>
                          <a>
                            <span id="negocioGTM"><?= $negocio->nombre ?></span>
                          </a>
                        </h5>
                      </div>

                    <div class="content-bot"> 
                       <div class="ver-prod">
                         <img src="../../img/pointer.svg" style="height: 23px; width: 23px;" alt="pointer">
                         <div class="ver">ver</div>
                       </div>
                       <h3 class="text-danger">  
                        <?php 
                        if (isset($producto->precio)) {
                         if (sizeof($precio)==2) {
                          if ($precio[1] < 10){
                            $precio[1]=$precio[1]*10;
                            }  
                        ?>
                        <span>$<?= $precio[0] ?></span><sup><?= $precio[1] ?></sup>
                        <?php } else { ?>
                        <span>$<?= $precio[0] ?></span><sup>00</sup>
                        <?php }} ?>
                       </h3>
                       <div class="hidden-md hidden-lg ellipsis"><p><?= $producto->titulo?></p></div>
                    </div>   

            
        </div></div>
    </div> <!-- /producto -->
                 
                

                <?php
                $i=$i+1;
 endforeach;
 } ?>
</div>
</div>
</div>
                </div>
             <?= $this->element('sidebar-right') ?>
        </div>
    </div>
<div id="fbot"></div>
<section id="sec2" class="contact-section" style="height: 81vh; ">
    <div class="col-md-2 location hidden-xs hidden-sm ">
    <h2 class="tittle-contacto">Contacto</h2>
        <div class="topmap" alt=""></div>
        <address>
  <strong><?= $negocio->nombre ?>.</strong>
  <br>
  <?= $negocio->direccion ?> 
  <br>
  <?= $negocio->lugare->nombre ?>
  <br>
  <abbr title="Phone">T:</abbr> <?= $negocio->telefono ?>
</address>

        <address>
        <strong>Facebook</strong><br>
        <a href="http://<?= $negocio->perfilfb ?>" target="_blank"><?= $negocio->nombre ?></a><br>
        <strong>Email</strong><br>
        <a href="mailto:<?= $negocio->email ?>"><?= $negocio->email ?></a>
</address>
    </div>   
   <?= $this->element('modal-product') ?>
            <?= $this->element('map-perfil') ?>
    </section>
<?php
 $i = 0;
 foreach ($productos as $producto): ?>

<ul id="pid<?= $i?>" class="hidden">
    <li><?= $negocio->nombre ?></li>
   <li><?= $producto->titulo ?></li>
   <li><?= $producto->precio ?></li>
   <li><?= $producto->cuerpo ?></li>
   <li><?= $producto->imagenes_productos[0]->foto ?></li>
   <li><?= $negocio->id ?></li>
   <li><?= $producto->id ?></li>
   <ul>
   <li><?= count($producto->imagenes_productos) ?></li>
   <?php

        foreach ($producto->imagenes_productos as $imagen):
        ?>

        <li><?= $imagen->foto ?></li>
        <?php

        endforeach; ?> 

   </ul>
        </ul>
<?php
                $i=$i+1;
 endforeach; ?>
<?= $this->element('footer') ?>

<script>
document.getElementById('shareBtn').onclick = function() {

  FB.ui({
  method: 'share',
  href: 'http://paseociudad.website/negocios/perfil/<?= $negocio->id ?>',
  //caption: 'An example caption',
  //picture: 'http://paseociudad.website/files/ImagenesProductos/7315acfe5f85612ac3b95c54deee11a8.jpg',
  
}, function(response){});
}
</script>
<script>
$('#modalProduct').on('hidden.bs.modal', function (e) {
      //elimina la imagenes (elementos virtuales) que crea, y deja solo la primera
      $('.dom').remove();
      $('#caru  > .item').addClass('active');
    });



var d = new Date();
var weekday = new Array(7);
weekday[0] =  "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";
var n = weekday[d.getDay()];
var daysOfTheWeek = document.getElementsByTagName("li");
dayOfTheWeek(daysOfTheWeek);
function dayOfTheWeek (weekDays) {
    for(var i = 0; i < weekDays.length; i++)
  { 
    if(weekDays[i].getAttribute("name") == n)
    {
        weekDays[i].className = 'active';
      weekDays[i].childNodes[0].className = 'active';
    }
  }
}
</script>

