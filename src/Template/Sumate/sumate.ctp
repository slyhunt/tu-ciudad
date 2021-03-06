
<?php
/**
  * @var \App\View\AppView $this
  */
$sumate = null;
?>

<div class="sumate-page" style="">
<div class="contact-us__img">
 	<div class="contact-us__header">
 		<div class="container">
 			<div class="row">
		        <div class="col-md-12 one-column-text">
		            <h2>Sumá tu comercio a PaseoCiudad</h2>
		            <h3>Sumate a nuestra <b>plataforma de exposición</b> de productos y servicios de forma online.</h3>
		        </div>
    		</div>
 		</div>
 	</div>
 	</div>
<div class="contact-us__form" >
		<div class="formtitle">
			<h3>Escríbenos</h3>
			<h4>Nos comunicaremos a la brevedad</h4>
		</div>
		<div id="form-main">
		  <div id="form-div">
		  <?= $this->Form->create($sumate) ?>
		    <form class="form" id="form1">
		      <div class="nombre col-md-4"><?php echo $this->Form->control('nombre', ['class' => 'feedback-input', 'placeholder' => 'Nombre', 'label' =>false])?></div>      
		      <div class="email col-md-4"><?php echo $this->Form->control('telefono', ['class' => 'feedback-input', 'placeholder' => 'Telefono', 'label' =>false])?></div>
		      <div class="email col-md-4">
		      	<?php echo $this->Form->control('email', ['class' => 'feedback-input', 'placeholder' => 'Email', 'label' =>false])?>
		      </div>
		      <div class="mensaje col-md-12"><?php echo $this->Form->textarea('mensaje', ['class' => 'feedback-input', 'id' => 'mensaje', 'placeholder' => 'Dinos que tipo de comercio o servicio tienes', 'label' =>false])?></div>
		      
		      
		      <div class="submit col-md-2">
		      <?= $this->Form->button(__('Enviar')) ?>
		    
		        
		      </div>
		      <?= $this->Form->end() ?>
		    </form>
		  </div>
		</div>
 	</div>



</div>

 	<style>
 		.sumate-page {
		position: relative;
	}
	.sumate-page .contact-us__form {
		height: 80vh;
		background: #FAFAFA;
		margin-bottom: 3px;
		box-shadow: 0 1px 2px #6d6d6d;
	}
	.contact-us__img {
		max-height: 400px;
		overflow: hidden;
		
	}
	.contact-us__img {
		background: #5383D3;
		/background-image: url(../../../img/sumate.jpg);
		width: 100%;
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
		height: 24.125em;
		


	}
	.contact-us__header {
		/position: absolute;
		/top: 100px;
	}
	.contact-us__header .container {
		padding: 0 100px;
	}

	.one-column-text{
    padding:80px 130px;}

	.one-column-text h2{
	    font-size:48px;
	    font-weight:300;
	    color: #FAFAFA;
	    line-height:48px;
	    text-align: center;}

	.one-column-text h3{
	    font-size:24px;
	    font-weight:300;
	    color: #FAFAFA;
	    text-align: center;
	    line-height:40px;}

	  .formtitle h3{
		text-align: center;
		padding-top: 25px;
		margin-top: 0;
		font-size: 41px;
		line-height: 62px;
		font-weight: 300;
		color: #3C3C3C;
	  }
	  .formtitle h4 {
		text-align: center;
		color: #6F7A7B;
	  }
	/**************************/
	/*-----------------------------*/

	#feedback-page{
	text-align:center;
}

#form-main{
	width:100%;
	float:left;
	padding-top:0px;
}
.contact-us__form input{
	width: 100%;
	border: 3px solid #ccc;
}
#form-div {
	/background-color:rgba(72,72,72,0.4);
	padding-left:35px;
	padding-right:35px;
	/padding-top:35px;
	padding-bottom:50px;
	/width: 450px;
	/float: left;
	/left: 50%;
	/position: absolute;
 	margin-top:30px;
	/margin-left: -260px;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
}

.feedback-input {
	color:#3c3c3c;
	font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
	font-size: 18px;
	border-radius: 0;
	line-height: 22px;
	background-color: #fbfbfb;
	padding: 13px 13px 13px 54px;
	margin-bottom: 10px;
	/width:50%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
  border: 3px solid rgba(0,0,0,0);
}

.feedback-input:focus{
	background: #fff;
	box-shadow: 0;
	border: 3px solid #5383D3;
	color: #3498db;
	outline: none;
  padding: 13px 13px 13px 54px;
}

.focused{
	color:#30aed6;
	border:#30aed6 solid 3px;
}

/* Icons ---------------------------------- */
#nombre{
	background-image: url(../../img/name.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#nombre:focus{
	background-image: url(../../img/name.svg);
	background-size: 30px 30px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#email{
	background-image: url(../../img/email.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}
#telefono{
	background-image: url(../../img/phone-receiver.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}
#email:focus{
	background-image: url(../../img/email.svg);
	background-size: 30px 30px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#mensaje{
	background-image: url(../../img/comment.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
	border: 3px solid #ccc;
}
#mensaje:focus {
	border: 3px solid #5383D3;
}

textarea {
    width: 100%;
    height: 150px;
    line-height: 150%;
    resize:vertical;
    
}

input:hover, textarea:hover,
input:focus, textarea:focus {
	background-color:white;
}

.submit button{
	font-family: 'Montserrat', Arial, Helvetica, sans-serif;
	float:right !important;
	width: 100%;
	border: #fbfbfb solid 3px;
	cursor:pointer;
	background-color: #5383D3;
	color:white;
	font-size:24px;
	padding-top:10px;
	padding-bottom:10px;
	/-webkit-transition: all 0.3s;
	/-moz-transition: all 0.3s;
	/transition: all 0.3s;
  /margin-top:-4px;
  font-weight:700;
}

.submit button:hover{
	background-color: rgba(0,0,0,0);
	color: #5383D3;
	border: 3px solid #5383D3;
}




	  /***************************/
	  @media (max-width: 995px) {

	.contact-us__header .container {
		padding: 0 25px;
	}

	.one-column-text{
    padding:60px 40px;}

	.one-column-text h2{
	    font-size:35px;
	    }

	.one-column-text h3{
	    font-size:20px;
	    }
	    .contact-page .contact-us__form {
		height: 50em;
		
	}
}
@media only screen and (max-width: 580px) {
	#form-div{
		padding-left: 3%;
		padding-right: 3%;
	}
	.contact-us__header .container {
		padding: 0 0px;
	}

	.one-column-text{
    padding:40px 30px;}

	.one-column-text h2{
	    font-size:35px;
	    }

	.one-column-text h3{
	    font-size:20px;
	    }
}

 	</style>

 	<?= $this->element('footer') ?>