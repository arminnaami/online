<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Japanese | Download Online Free</title>
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
		<?php include("advertisement_top.php");?>

		   <div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Convert Weight and Mass Units Instantly</h4></div>
              <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >This converter features units that are still used today. There is also a special converter for historical units of weight you might want to visit for ancient, medieval and other old units that are no longer used.</span>
              </div>
            </div>

			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Japanese</h4></div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>kan,&nbsp;kanme</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs kan" onkeyup="kan(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>hyakume</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs hyakume" onkeyup="hyakume(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>kin</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs kin" onkeyup="kin(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>momme</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs momme" onkeyup="momme(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>fun</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs fun" onkeyup="fun(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
		function kan(kan){
			var kan = parseFloat(kan);
		  var convert_kan_hyakume = kan*10.00;
			$('.hyakume').val(convert_kan_hyakume);
		  var convert_kan_kin = kan*6.250;
			$('.kin').val(convert_kan_kin);
		  var convert_kan_momme = kan*1000;
			$('.momme').val(convert_kan_momme);
		  var convert_kan_fun = kan*1.000e+4;
			$('.fun').val(convert_kan_fun);
		}
		function hyakume(hyakume){
			var hyakume = parseFloat(hyakume);
		  var convert_hyakume_kan = hyakume*10.00;
			$('.kan').val(convert_hyakume_kan);
		  var convert_hyakume_kin = hyakume*6.250;
			$('.kin').val(convert_hyakume_kin);
		  var convert_hyakume_momme = hyakume*1000;
			$('.momme').val(convert_hyakume_momme);
		  var convert_hyakume_fun = hyakume*1.000e+4;
			$('.fun').val(convert_hyakume_fun);
		}
		function kan(kan){
			var kan = parseFloat(kan);
		  var convert_kan_hyakume = kan*10.00;
			$('.hyakume').val(convert_kan_hyakume);
		  var convert_kan_kin = kan*6.250;
			$('.kin').val(convert_kan_kin);
		  var convert_kan_momme = kan*1000;
			$('.momme').val(convert_kan_momme);
		  var convert_kan_fun = kan*1.000e+4;
			$('.fun').val(convert_kan_fun);
		}
		function kan(kan){
			var kan = parseFloat(kan);
		  var convert_kan_hyakume = kan*10.00;
			$('.hyakume').val(convert_kan_hyakume);
		  var convert_kan_kin = kan*6.250;
			$('.kin').val(convert_kan_kin);
		  var convert_kan_momme = kan*1000;
			$('.momme').val(convert_kan_momme);
		  var convert_kan_fun = kan*1.000e+4;
			$('.fun').val(convert_kan_fun);
		}
		function kan(kan){
			var kan = parseFloat(kan);
		  var convert_kan_hyakume = kan*10.00;
			$('.hyakume').val(convert_kan_hyakume);
		  var convert_kan_kin = kan*6.250;
			$('.kin').val(convert_kan_kin);
		  var convert_kan_momme = kan*1000;
			$('.momme').val(convert_kan_momme);
		  var convert_kan_fun = kan*1.000e+4;
			$('.fun').val(convert_kan_fun);
		}
	</script>
  </body>
</html>
