<?php
 /**
   *aca van ls verciones de los css y js para evitar el cache
   *ejemplo: tuvieja.css?v=2
   *lo mismo para js
 **/
?>
	
    
    
    <?= $this->Html->css('bootstrap.min.css?=v3') ?>
    <?= $this->Html->css('style.css?=v22') ?>
    <?= $this->Html->css('productos.css?=v16') ?>
    <?= $this->Html->css('owl.carousel.min.css') ?> 
    <?= $this->Html->css('owl.theme.default.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?> 

     
    

    <?= $this->Html->script(array('jquery-3.2.1.min', 'pace.min', 'bootstrap.min')); ?>
    <script src="../../../../js/main.js?v=3"></script>
    <script>
    	function dimensionar(elem){
    $(elem).css({opacity: '1'});
    $(elem).parent().siblings('div .preloader').removeClass('preloader');
    $(elem).parent().removeClass('preview');
    $(elem).parent().css({'background-image':''});
    dwidth = $(elem).width();
    dheight = $(elem).height();
    if(dwidth > dheight){
      $(elem).css({'width': '100%','height': 'auto'});     
    }
  };
  		function comready(elem) {
  			$(elem).css({opacity: '1'});
  			$(elem).parent().removeClass('preview');
  			$(elem).parent().css({'background-image':''});
  		}
    </script>
