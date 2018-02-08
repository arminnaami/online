<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Astronomical | Download Online Free</title>
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
                <h4>Astronomical
                </h4>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>cubic parsec (pc&sup3;)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs parsec" onkeyup="from_parsec();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>cubic light minute
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs minute" onkeyup="from_minute();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>cubic light year
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs year" onkeyup="from_year();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>cubic light second
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs second" onkeyup="from_second();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
	function from_parsec()
	{
		var parsec = $(".parsec").val();

		var minute = parsec * 5.048191e+18;
		$(".minute").val(minute);

		var year = parsec * 34.7;
		$(".year").val(year);

		var second = parsec * 1.09e+24;
		$(".second").val(second);
	}
	</script>

	<script>
	function from_minute()
	{
		var minute = $(".minute").val();

		var parsec = minute * 1.981e-19;
		$(".parsec").val(parsec);

		var year = minute * 6.873e-18;
		$(".year").val(year);

		var second = minute * 216000;
		$(".second").val(second);
	}
	</script>

	<script>
	function from_year()
	{
		var year = $(".year").val();

		var parsec = year * 0.02882;
		$(".parsec").val(parsec);

		var minute = year * 1.4549838e+17;
		$(".minute").val(minute);

		var second = year * 3.143e+22;
		$(".second").val(second);
	}
	</script>

	<script>
	function from_second()
	{
		var second = $(".second").val();

		var parsec = second * 9.171e-25;
		$(".parsec").val(parsec);

		var minute = second * 0.00000463;
		$(".minute").val(minute);

		var year = second * 3.182e-23;
		$(".year").val(year);
	}
	</script>
  </body>
</html>
