<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>U.S. Dry Measure | Download Online Free</title>
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
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;">
                <h4>Convert Capacity and Volume Units Instantly</h4>
              </div>
              <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
                <span class="" >This converter features units that are still used today. There is also a special converter for historical units of volume you might want to visit for ancient, medieval and other old units that are no longer used.
                </span>
              </div>
            </div>
			<?php include("advertisement_top.php");?>
			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;">
                <h4>U.S. Dry Measure</h4>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>barrel</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs barrel" onkeyup="from_barrel();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>gallon (gal)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs gallon" onkeyup="from_gallon();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>bushel (bu)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs bushel" onkeyup="from_bushel();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>quart (qt)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs quart" onkeyup="from_quart();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>peck (pk)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs peck" onkeyup="from_peck();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>pint (pt)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs pint" onkeyup="from_pint();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                </form>
              </div>
            </div>
			<?php include("advertisement_bottom.php");?>
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
	function from_barrel()
	{
		var barrel = $(".barrel").val();

		var gallon = barrel * 26.25;
		$(".gallon").val(gallon);

		var bushel = barrel * 3.281;
		$(".bushel").val(bushel);

		var quart = barrel * 105;
		$(".quart").val(quart);

		var peck = barrel * 13.12;
		$(".peck").val(peck);

		var pint = barrel * 210;
		$(".pint").val(pint);
	}
	</script>

	<script>
	function from_gallon()
	{
		var gallon = $(".gallon").val();

		var barrel = gallon * 0.0381;
		$(".barrel").val(barrel);

		var bushel = gallon * 0.125;
		$(".bushel").val(bushel);

		var quart = gallon * 4;
		$(".quart").val(quart);

		var peck = gallon * 0.5;
		$(".peck").val(peck);

		var pint = gallon * 8;
		$(".pint").val(pint);
	}
	</script>

	<script>
	function from_bushel()
	{
		var bushel = $(".bushel").val();

		var barrel = bushel * 0.3048;
		$(".barrel").val(barrel);

		var gallon = bushel * 8;
		$(".gallon").val(gallon);

		var quart = bushel * 32;
		$(".quart").val(quart);

		var peck = bushel * 4;
		$(".peck").val(peck);

		var pint = bushel * 64;
		$(".pint").val(pint);
	}
	</script>

	<script>
	function from_quart()
	{
		var quart = $(".quart").val();

		var barrel = quart * 0.009524;
		$(".barrel").val(barrel);

		var gallon = quart * 0.25;
		$(".gallon").val(gallon);

		var bushel = quart * 0.03125;
		$(".bushel").val(bushel);

		var peck = quart * 0.125;
		$(".peck").val(peck);

		var pint = quart * 2;
		$(".pint").val(pint);
	}
	</script>

	<script>
	function from_peck()
	{
		var peck = $(".peck").val();

		var barrel = peck * 0.07619;
		$(".barrel").val(barrel);

		var gallon = peck * 2;
		$(".gallon").val(gallon);

		var bushel = peck * 0.25;
		$(".bushel").val(bushel);

		var quart = peck * 8;
		$(".quart").val(quart);

		var pint = peck * 16;
		$(".pint").val(pint);
	}
	</script>

	<script>
	function from_pint()
	{
		var pint = $(".pint").val();

		var barrel = pint * 0.004762;
		$(".barrel").val(barrel);

		var gallon = pint * 0.125;
		$(".gallon").val(gallon);

		var bushel = pint * 0.01562;
		$(".bushel").val(bushel);

		var quart = pint * 0.5;
		$(".quart").val(quart);

		var peck = pint * 0.0625;
		$(".peck").val(peck);
	}
	</script>
  </body>
</html>
