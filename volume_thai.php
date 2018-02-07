<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Thai units | Download Online Free</title>
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
                <h4>Thai units
                </h4>
              </div>
              <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
                <span class="" >Some of these units are still in use even though metric system was formally established in 1923. Before the metrication the old units were standardized to exact metric values.
                </span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>kwian (cartload)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs kwian" onkeyup="from_kwian();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>thanan (coconut shell)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs thanan" onkeyup="from_thanan();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>sat (basket)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs sat" onkeyup="from_sat();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>fai mue (palm of grain)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs fai" onkeyup="from_fai();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>thang (tank)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs thang" onkeyup="from_thang();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>kam mue (hand of grain)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs kam" onkeyup="from_kam();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>yip mue (pinch)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs yip" onkeyup="from_yip();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
	function from_kwian()
	{
		var kwian = $(".kwian").val();

		var thanan = kwian * 2000;
		$(".thanan").val(thanan);

		var sat = kwian * 80;
		$(".sat").val(sat);

		var fai = kwian * 16000;
		$(".fai").val(fai);

		var thang = kwian * 100;
		$(".thang").val(thang);

		var kam = kwian * 64000;
		$(".kam").val(kam);

		var yip = kwian * 256000;
		$(".yip").val(yip);
	}
	</script>

	<script>
	function from_thanan()
	{
		var thanan = $(".thanan").val();

		var kwian = thanan * 0.0005;
		$(".kwian").val(kwian);

		var sat = thanan * 0.04;
		$(".sat").val(sat);

		var fai = thanan * 8;
		$(".fai").val(fai);

		var thang = thanan * 0.05;
		$(".thang").val(thang);

		var kam = thanan * 32;
		$(".kam").val(kam);

		var yip = thanan * 128;
		$(".yip").val(yip);
	}
	</script>

	<script>
	function from_sat()
	{
		var sat = $(".sat").val();

		var kwian = sat * 0.0125;
		$(".kwian").val(kwian);

		var thanan = sat * 25;
		$(".thanan").val(thanan);

		var fai = sat * 200;
		$(".fai").val(fai);

		var thang = sat * 1.25;
		$(".thang").val(thang);

		var kam = sat * 800;
		$(".kam").val(kam);

		var yip = sat * 3200;
		$(".yip").val(yip);
	}
	</script>

	<script>
	function from_fai()
	{
		var fai = $(".fai").val();

		var kwian = fai * 0.0000625;
		$(".kwian").val(kwian);

		var thanan = fai * 0.125;
		$(".thanan").val(thanan);

		var sat = fai * 0.005;
		$(".sat").val(sat);

		var thang = fai * 0.00625;
		$(".thang").val(thang);

		var kam = fai * 4;
		$(".kam").val(kam);

		var yip = fai * 16;
		$(".yip").val(yip);
	}
	</script>

	<script>
	function from_thang()
	{
		var thang = $(".thang").val();

		var kwian = thang * 0.01;
		$(".kwian").val(kwian);

		var thanan = thang * 20;
		$(".thanan").val(thanan);

		var sat = thang * 0.8;
		$(".sat").val(sat);

		var fai = thang * 160;
		$(".fai").val(fai);

		var kam = thang * 640;
		$(".kam").val(kam);

		var yip = thang * 2560;
		$(".yip").val(yip);
	}
	</script>

	<script>
	function from_kam()
	{
		var kam = $(".kam").val();
		
		var kwian = kam * 0.00001563;
		$(".kwian").val(kwian);

		var thanan = kam * 0.03125;
		$(".thanan").val(thanan);

		var sat = kam * 0.00125;
		$(".sat").val(sat);

		var fai = kam * 0.25;
		$(".fai").val(fai);

		var thang = kam * 0.001563;
		$(".thang").val(thang);

		var yip = kam * 4;
		$(".yip").val(yip);
	}
	</script>

	<script>
	function from_yip()
	{
		var yip = $(".yip").val();
		
		var kwian = yip * 0.000003906;
		$(".kwian").val(kwian);

		var thanan = yip * 0.007813;
		$(".thanan").val(thanan);

		var sat = yip * 0.0003125;
		$(".sat").val(sat);

		var fai = yip * 0.0625;
		$(".fai").val(fai);

		var thang = yip * 0.0003906;
		$(".thang").val(thang);

		var kam = yip * 0.25;
		$(".kam").val(kam);
	}
	</script>
  </body>
</html>
