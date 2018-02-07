<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Hong Kong | Download Online Free</title>
	<?php include("metalinks.php");?>
    <link rel="stylesheet" type="text/css" href="css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.min.css"/>
	<link type="text/css" href="css/little-fox.css" rel="stylesheet"> 

	<style>
	.mai-end{
    background-color: #fafafa;
	}
	.boots_form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	}
	.form-control-xs::-webkit-inner-spin-button, 
	   .form-control-xs::-webkit-outer-spin-button { 
		-webkit-appearance: none; 
		margin: 0; 
	  }
	</style>
  </head>
  <body>
	<div class="mai-wrapper">
	<?php include("header.php");?>
	  <div class="main-content container">
        <!--Basic forms-->
        <!--Basic Elements-->
	<div class="row">
	<!-- sidebar -->
		<?php include("sidebar.php");?>
	<!-- sidebar end -->

           
            
		<div class="col-md-6">
		   <div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Convert Weight and Mass Units Instantly</h4></div>
              <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >This converter features units that are still used today. There is also a special converter for historical units of weight you might want to visit for ancient, medieval and other old units that are no longer used.</span>
              </div>
            </div>

			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Hong Kong</h4></div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>picul&nbsp;(tam)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs tam" onkeyup="tam(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>candareen&nbsp;(fan)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs fan" onkeyup="fan(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>catty&nbsp;(kan)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs catty" onkeyup="catty(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>tael&nbsp;troy</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs tael_troy" onkeyup="tael_troy(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>tael&nbsp;(leung)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs leung" onkeyup="leung(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>mace&nbsp;troy</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs troy" onkeyup="troy(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>mace&nbsp;(tsin)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs tsin" onkeyup="tsin(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>candareen&nbsp;troy</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs candareen" onkeyup="candareen(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                </form>
              </div>
            </div>
		  </div>
		   <?php include("right_sidebar.php");?>
        <!--Date Picker-->
		</div>
      </div>
    </div>
    <?php include("footer.php");?>
    <script src="js/select2.min.js" type="text/javascript"></script>
    <script src="js/select2.full.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.formElements();
      }
                       );
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.livePreview();
      }
    );
    </script>
	<script>
		function tam(tam){
			var tam = parseFloat(tam);
		  var convert_tam_fan = tam*160000;
			$('.fan').val(convert_tam_fan);
		  var convert_tam_catty = tam*100 ;
			$('.catty').val(convert_tam_catty);
		  var convert_tam_tael_troy = tam*1616 ;
			$('.tael_troy').val(convert_tam_tael_troy);
		  var convert_tam_leung = tam*1600 ;
			$('.leung').val(convert_tam_leung);
		  var convert_tam_troy = tam*16158 ;
			$('.troy').val(convert_tam_troy);
		  var convert_tam_tsin = tam*16000 ;
			$('.tsin').val(convert_tam_tsin);
		  var convert_tam_candareen = tam*161583 ;
			$('.candareen').val(convert_tam_candareen);
		}
		function fan(fan){
			var fan = parseFloat(fan);
		  var convert_fan_tam = fan*0.00000625;
			$('.tam').val(convert_fan_tam);
		  var convert_fan_catty = fan*0.000625 ;
			$('.catty').val(convert_fan_catty);
		  var convert_fan_tael_troy = fan*0.0101 ;
			$('.tael_troy').val(convert_fan_tael_troy);
		  var convert_fan_leung = fan*0.01 ;
			$('.leung').val(convert_fan_leung);
		  var convert_fan_troy = fan*0.101 ;
			$('.troy').val(convert_fan_troy);
		  var convert_fan_tsin = fan*0.1 ;
			$('.tsin').val(convert_fan_tsin);
		  var convert_fan_candareen = fan*1.01 ;
			$('.candareen').val(convert_fan_candareen);
		}
		function catty(catty){
			var catty = parseFloat(catty);
		  var convert_catty_tam = catty*0.01;
			$('.tam').val(convert_catty_tam);
		  var convert_catty_fan = catty*1600 ;
			$('.fan').val(convert_catty_fan);
		  var convert_catty_tael_troy = catty*16.16 ;
			$('.tael_troy').val(convert_catty_tael_troy);
		  var convert_catty_leung = catty*16 ;
			$('.leung').val(convert_catty_leung);
		  var convert_catty_troy = catty*161.6 ;
			$('.troy').val(convert_catty_troy);
		  var convert_catty_tsin = catty*160 ;
			$('.tsin').val(convert_catty_tsin);
		  var convert_catty_candareen = catty*1616 ;
			$('.candareen').val(convert_catty_candareen);
		}
		function tael_troy(tael_troy){
			var tael_troy = parseFloat(tael_troy);
		  var convert_tael_troy_tam = tael_troy*0.0006189;
			$('.tam').val(convert_tael_troy_tam);
		  var convert_tael_troy_fan = tael_troy*99.02 ;
			$('.fan').val(convert_tael_troy_fan);
		  var convert_tael_troy_catty = tael_troy*0.06189;
			$('.catty').val(convert_tael_troy_catty);
		  var convert_tael_troy_leung = tael_troy*0.9902 ;
			$('.leung').val(convert_tael_troy_leung);
		  var convert_tael_troy_troy = tael_troy*10;
			$('.troy').val(convert_tael_troy_troy);
		  var convert_tael_troy_tsin = tael_troy*9.902 ;
			$('.tsin').val(convert_tael_troy_tsin);
		  var convert_tael_troy_candareen = tael_troy*100 ;
			$('.candareen').val(convert_tael_troy_candareen);
		}
		function leung(leung){
			var leung = parseFloat(leung);
		  var convert_leung_tam = leung*0.000625;
			$('.tam').val(convert_leung_tam);
		  var convert_leung_fan = leung*100;
			$('.fan').val(convert_leung_fan);
		  var convert_leung_catty = leung*0.0625;
			$('.catty').val(convert_leung_catty);
		  var convert_leung_tael_troy = leung*1.01;
			$('.tael_troy').val(convert_leung_tael_troy);
		  var convert_leung_troy = leung*10.1;
			$('.troy').val(convert_leung_troy);
		  var convert_leung_tsin = leung*10 ;
			$('.tsin').val(convert_leung_tsin);
		  var convert_leung_candareen = leung*101 ;
			$('.candareen').val(convert_leung_candareen);
		}
		function troy(troy){
			var troy = parseFloat(troy);
		  var convert_troy_tam = troy*0.00006189;
			$('.tam').val(convert_troy_tam);
		  var convert_troy_fan = troy*9.902;
			$('.fan').val(convert_troy_fan);
		  var convert_troy_catty = troy*0.006189;
			$('.catty').val(convert_troy_catty);
		  var convert_troy_tael_troy = troy*0.1;
			$('.tael_troy').val(convert_troy_tael_troy);
		  var convert_troy_leung = troy*0.09902;
			$('.leung').val(convert_troy_leung);
		  var convert_troy_tsin = troy*0.9902 ;
			$('.tsin').val(convert_troy_tsin);
		  var convert_troy_candareen = troy*10 ;
			$('.candareen').val(convert_troy_candareen);
		}
		function tsin(tsin){
			var tsin = parseFloat(tsin);
		  var convert_tsin_tam = tsin*0.0000625;
			$('.tam').val(convert_tsin_tam);
		  var convert_tsin_fan = tsin*10;
			$('.fan').val(convert_tsin_fan);
		  var convert_tsin_catty = tsin*0.00625;
			$('.catty').val(convert_tsin_catty);
		  var convert_tsin_tael_troy = tsin*0.101;
			$('.tael_troy').val(convert_tsin_tael_troy);
		  var convert_tsin_leung = tsin*0.1;
			$('.leung').val(convert_tsin_leung);
		  var convert_tsin_troy = tsin*1.01 ;
			$('.troy').val(convert_tsin_troy);
		  var convert_tsin_candareen = tsin*10.1 ;
			$('.candareen').val(convert_tsin_candareen);
		}
		function candareen(candareen){
			var candareen = parseFloat(candareen);
		  var convert_candareen_tam = candareen*0.000006189;
			$('.tam').val(convert_candareen_tam);
		  var convert_candareen_fan = candareen*0.9902;
			$('.fan').val(convert_candareen_fan);
		  var convert_candareen_catty = candareen*0.0006189;
			$('.catty').val(convert_candareen_catty);
		  var convert_candareen_tael_troy = candareen*0.01;
			$('.tael_troy').val(convert_candareen_tael_troy);
		  var convert_candareen_leung = candareen*0.009902
			$('.leung').val(convert_candareen_leung);
		  var convert_candareen_troy = candareen*0.1 ;
			$('.troy').val(convert_candareen_troy);
		  var convert_candareen_tsin = candareen*0.09902 ;
			$('.tsin').val(convert_candareen_tsin);
		}
	</script>
  </body>
</html>
