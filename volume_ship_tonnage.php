<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Ship Tonnage Measurements | Download Online Free</title>
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
                <h4>Ship tonnage measurements
                </h4>
              </div>
              <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
                <span class="" >Register ton unit was defined by the Moorsom Commission (Great Britain) in 1854 to measure ship internal volume. It was officially replaced by tonnage when the International Maritime Organization (IMO) adopted The International Convention on Tonnage Measurement of Ships on 23 June 1969. Since 18 July 1994 the gross and net tonnages are the only official measures used for the ships.
                </span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>tonnage
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs tonnage" onkeyup="from_tonnage();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>register ton
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs ton" onkeyup="from_ton();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>Panama Canal Universal Measurement System (PC/UMS)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs pcums" onkeyup="from_pcums();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
	function from_tonnage()
	{
		var tonnage = $(".tonnage").val();

		var ton = tonnage * 1.655;
		$(".ton").val(ton);

		var pcums = tonnage * 1.655;
		$(".pcums").val(pcums);
	}
	</script>

	<script>
	function from_ton()
	{
		var ton = $(".ton").val();

		var tonnage = ton * 0.5919;
		$(".tonnage").val(tonnage);

		var pcums = ton * 1;
		$(".pcums").val(pcums);
	}
	</script>

	<script>
	function from_pcums()
	{
		var pcums = $(".pcums").val();

		var tonnage = pcums * 0.5919;
		$(".tonnage").val(tonnage);

		var ton = pcums * 1;
		$(".ton").val(ton);
	}
	</script>
  </body>
</html>
