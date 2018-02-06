<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>U.S. Liquid Measure | Download Online Free</title>
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
			<div class="panel panel-default" style="background:white;height:100px;padding:10px;background:#fe8458;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);margin-bottom:20px;">
				<h1 style="text-align:center;color:white;font-weight:bold;padding:25px;">Ad Block</h1>
			</div>
            <div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;">
                <h4>U.S. Liquid Measure</h4>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>acre foot</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs foot" onkeyup="from_foot();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>pint (pt)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs pint" onkeyup="from_pint();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>barrel (petroleum)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs pet_barrel" onkeyup="from_pet_barrel();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>gill</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs gill" onkeyup="from_gill();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>barrel (beer)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs beer_barrel" onkeyup="from_beer_barrel();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>fluid ounce (oz)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs oz" onkeyup="from_oz();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>gallon (gal)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs gal" onkeyup="from_gal();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>fluid dram</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs dram" onkeyup="from_dram();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>quart (qt)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs quart" onkeyup="from_quart();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>minim</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs minim" onkeyup="from_minim();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                </form>
              </div>
            </div>
			<div class="panel panel-default" style="background:white;height:100px;padding:10px;background:#fe8458;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);margin-bottom:20px;">
				<h1 style="text-align:center;color:white;font-weight:bold;padding:25px;">Ad Block</h1>
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
	function from_foot()
	{
		var foot = $(".foot").val(); 
		
		var pint = foot * 2.607e+6;
		$(".pint").val(pint);

		var pet_barrel = foot * 7758.3673;
		$(".pet_barrel").val(pet_barrel);

		var gill = foot * 1.043e+7;
		$(".gill").val(gill);

		var beer_barrel = foot * 266920.85;
		$(".beer_barrel").val(beer_barrel);

		var oz = foot * 4.171e+7;
		$(".oz").val(oz);

		var gal = foot * 325851;
		$(".gal").val(gal);

		var dram = foot * 3.337e+8;
		$(".dram").val(dram);

		var quart = foot * 1.303e+6;
		$(".quart").val(quart);

		var minim = foot * 2.002e+10;
		$(".minim").val(minim);
	}
	</script>

	<script>
	function from_pint()
	{
		var pint = $(".pint").val(); 
		
		var foot = pint * 3.83611e-7;
		$(".foot").val(foot);

		var pet_barrel = pint * 0.00297619;
		$(".pet_barrel").val(pet_barrel);

		var gill = pint * 4;
		$(".gill").val(gill);

		var beer_barrel = pint * 0.004032258064516129;
		$(".beer_barrel").val(beer_barrel);

		var oz = pint * 16;
		$(".oz").val(oz);

		var gal = pint * 0.125;
		$(".gal").val(gal);

		var dram = pint * 128;
		$(".dram").val(dram);

		var quart = pint * 0.5;
		$(".quart").val(quart);

		var minim = pint * 7680;
		$(".minim").val(minim);
	}
	</script>

	<script>
	function from_pint()
	{
		var pint = $(".pint").val(); 
		
		var foot = pint * 3.83611e-7;
		$(".foot").val(foot);

		var pet_barrel = pint * 0.00297619;
		$(".pet_barrel").val(pet_barrel);

		var gill = pint * 4;
		$(".gill").val(gill);

		var beer_barrel = pint * 0.004032258064516129;
		$(".beer_barrel").val(beer_barrel);

		var oz = pint * 16;
		$(".oz").val(oz);

		var gal = pint * 0.125;
		$(".gal").val(gal);

		var dram = pint * 128;
		$(".dram").val(dram);

		var quart = pint * 0.5;
		$(".quart").val(quart);

		var minim = pint * 7680;
		$(".minim").val(minim);
	}
	</script>

	<script>
	function from_pet_barrel()
	{
		var pet_barrel = $(".pet_barrel").val(); 
		
		var foot = pet_barrel * 0.000128893;
		$(".foot").val(foot);

		var pint = pet_barrel * 336;
		$(".pint").val(pint);

		var gill = pet_barrel * 1344;
		$(".gill").val(gill);

		var beer_barrel = pet_barrel * 1.35;
		$(".beer_barrel").val(beer_barrel);

		var oz = pet_barrel * 5376;
		$(".oz").val(oz);

		var gal = pet_barrel * 42;
		$(".gal").val(gal);

		var dram = pet_barrel * 43008;
		$(".dram").val(dram);

		var quart = pet_barrel * 168;
		$(".quart").val(quart);

		var minim = pet_barrel * 2685873.85;
		$(".minim").val(minim);
	}
	</script>

	<script>
	function from_gill()
	{
		var gill = $(".gill").val(); 
		
		var foot = gill * 9.59027e-8;
		$(".foot").val(foot);

		var pint = gill * 0.25;
		$(".pint").val(pint);

		var pet_barrel = gill * 0.000744048;
		$(".pet_barrel").val(pet_barrel);

		var beer_barrel = gill * 0.00100806;
		$(".beer_barrel").val(beer_barrel);

		var oz = gill * 4;
		$(".oz").val(oz);

		var gal = gill * 0.03125;
		$(".gal").val(gal);

		var dram = gill * 32;
		$(".dram").val(dram);

		var quart = gill * 0.125;
		$(".quart").val(quart);

		var minim = gill * 1920;
		$(".minim").val(minim);
	}
	</script>

	<script>
	function from_beer_barrel()
	{
		var beer_barrel = $(".beer_barrel").val(); 
		
		var foot = beer_barrel * 9.51355e-5;
		$(".foot").val(foot);

		var pint = beer_barrel * 248;
		$(".pint").val(pint);

		var pet_barrel = beer_barrel * 0.7381;
		$(".pet_barrel").val(pet_barrel);

		var gill = beer_barrel * 992;
		$(".gill").val(gill);

		var oz = beer_barrel * 3968;
		$(".oz").val(oz);

		var gal = beer_barrel * 31;
		$(".gal").val(gal);

		var dram = beer_barrel * 31744;
		$(".dram").val(dram);

		var quart = beer_barrel * 124;
		$(".quart").val(quart);

		var minim = beer_barrel * 1904640;
		$(".minim").val(minim);
	}
	</script>

	<script>
	function from_oz()
	{
		var oz = $(".oz").val(); 
		
		var foot = oz * 2.39757e-8;
		$(".foot").val(foot);

		var pint = oz * 0.0625;
		$(".pint").val(pint);

		var pet_barrel = oz * 0.000186;
		$(".pet_barrel").val(pet_barrel);

		var gill = oz * 0.25;
		$(".gill").val(gill);

		var beer_barrel = oz * 0.000252016;
		$(".beer_barrel").val(beer_barrel);

		var gal = oz * 0.0078125;
		$(".gal").val(gal);

		var dram = oz * 8;
		$(".dram").val(dram);

		var quart = oz * 0.03125;
		$(".quart").val(quart);

		var minim = oz * 480;
		$(".minim").val(minim);
	}
	</script>

	<script>
	function from_gal()
	{
		var gal = $(".gal").val(); 
		
		var foot = gal * 3.06889e-6;
		$(".foot").val(foot);

		var pint = gal * 8;
		$(".pint").val(pint);

		var pet_barrel = gal * 0.02381;
		$(".pet_barrel").val(pet_barrel);

		var gill = gal * 32;
		$(".gill").val(gill);

		var beer_barrel = gal * 0.03226;
		$(".beer_barrel").val(beer_barrel);

		var oz = gal * 128;
		$(".oz").val(oz);

		var dram = gal * 1024;
		$(".dram").val(dram);

		var quart = gal * 4;
		$(".quart").val(quart);

		var minim = gal * 61440;
		$(".minim").val(minim);
	}
	</script>

	<script>
	function from_dram()
	{
		var dram = $(".dram").val(); 
		
		var foot = dram * 2.99696e-9;
		$(".foot").val(foot);

		var pint = dram * 0.007813;
		$(".pint").val(pint);

		var pet_barrel = dram * 0.00002325;
		$(".pet_barrel").val(pet_barrel);

		var gill = dram * 0.03125;
		$(".gill").val(gill);

		var beer_barrel = dram * 0.0000315;
		$(".beer_barrel").val(beer_barrel);

		var oz = dram * 0.125;
		$(".oz").val(oz);

		var gal = dram * 0.000976563;
		$(".gal").val(gal);

		var quart = dram * 0.00390625;
		$(".quart").val(quart);

		var minim = dram * 60;
		$(".minim").val(minim);
	}
	</script>

	<script>
	function from_quart()
	{
		var quart = $(".quart").val(); 
		
		var foot = quart * 7.67222e-7;
		$(".foot").val(foot);

		var pint = quart * 2;
		$(".pint").val(pint);

		var pet_barrel = quart * 0.005952;
		$(".pet_barrel").val(pet_barrel);

		var gill = quart * 8;
		$(".gill").val(gill);

		var beer_barrel = quart * 0.008065;
		$(".beer_barrel").val(beer_barrel);

		var oz = quart * 32;
		$(".oz").val(oz);

		var gal = quart * 0.25;
		$(".gal").val(gal);

		var dram = quart * 256;
		$(".dram").val(dram);

		var minim = quart * 15360;
		$(".minim").val(minim);
	}
	</script>

	<script>
	function from_minim()
	{
		var minim = $(".minim").val(); 
		
		var foot = minim * 4.99493e-11;
		$(".foot").val(foot);

		var pint = minim * 0.000130208;
		$(".pint").val(pint);

		var pet_barrel = minim * 0.0000003875;
		$(".pet_barrel").val(pet_barrel);

		var gill = minim * 0.000520833;
		$(".gill").val(gill);

		var beer_barrel = minim * 0.000000525;
		$(".beer_barrel").val(beer_barrel);

		var oz = minim * 0.00208333;
		$(".oz").val(oz);

		var gal = minim * 1.6276e-5;
		$(".gal").val(gal);

		var dram = minim * 0.0166667;
		$(".dram").val(dram);

		var quart = minim * 6.51041e-5;
		$(".quart").val(quart);
	}
	</script>
  </body>
</html>
