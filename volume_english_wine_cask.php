<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>English Wine Cask Units | Download Online Free</title>
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
                <h4>English wine cask units</h4>
              </div>
              <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
                <span class="" >Imperial and U.S. definitions of these units slightly differ. We use Imperial definitions here.</span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>tun</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs tun" onkeyup="from_tun();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>hogshead
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs hogshead" onkeyup="from_hogshead();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>butt
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs butt" onkeyup="from_butt();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>tierce
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs tierce" onkeyup="from_tierce();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>puncheon
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs puncheon" onkeyup="from_puncheon();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>barrel
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs barrel" onkeyup="from_barrel();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>rundlet
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs rundlet" onkeyup="from_rundlet();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
	function from_tun()
	{
		var tun = $(".tun").val();

		var hogshead = tun * 4;
		$(".hogshead").val(hogshead);

		var butt = tun * 2;
		$(".butt").val(butt);

		var tierce = tun * 6;
		$(".tierce").val(tierce);

		var puncheon = tun * 3;
		$(".puncheon").val(puncheon);

		var barrel = tun * 8;
		$(".barrel").val(barrel);

		var rundlet = tun * 14;
		$(".rundlet").val(rundlet);
	}
	</script>

	<script>
	function from_hogshead()
	{
		var hogshead = $(".hogshead").val();

		var tun = hogshead * 0.25;
		$(".tun").val(tun);

		var butt = hogshead * 0.5;
		$(".butt").val(butt);

		var tierce = hogshead * 1.5;
		$(".tierce").val(tierce);

		var puncheon = hogshead * 0.75;
		$(".puncheon").val(puncheon);

		var barrel = hogshead * 2;
		$(".barrel").val(barrel);

		var rundlet = hogshead * 3.5;
		$(".rundlet").val(rundlet);
	}
	</script>

	<script>
	function from_butt()
	{
		var butt = $(".butt").val();

		var tun = butt * 0.5;
		$(".tun").val(tun);

		var hogshead = butt * 2;
		$(".hogshead").val(hogshead);

		var tierce = butt * 3;
		$(".tierce").val(tierce);

		var puncheon = butt * 1.5;
		$(".puncheon").val(puncheon);

		var barrel = butt * 4;
		$(".barrel").val(barrel);

		var rundlet = butt * 7;
		$(".rundlet").val(rundlet);
	}
	</script>

	<script>
	function from_tierce()
	{
		var tierce = $(".tierce").val();

		var tun = tierce * 0.1667;
		$(".tun").val(tun);

		var hogshead = tierce * 0.6667;
		$(".hogshead").val(hogshead);

		var butt = tierce * 0.3333;
		$(".butt").val(butt);

		var puncheon = tierce * 0.5;
		$(".puncheon").val(puncheon);

		var barrel = tierce * 1.333;
		$(".barrel").val(barrel);

		var rundlet = tierce * 2.333;
		$(".rundlet").val(rundlet);
	}
	</script>

	<script>
	function from_puncheon()
	{
		var puncheon = $(".puncheon").val();

		var tun = puncheon * 0.3333;
		$(".tun").val(tun);

		var hogshead = puncheon * 1.333;
		$(".hogshead").val(hogshead);

		var butt = puncheon * 0.6667;
		$(".butt").val(butt);

		var tierce = puncheon * 2;
		$(".tierce").val(tierce);

		var barrel = puncheon * 2.667;
		$(".barrel").val(barrel);

		var rundlet = puncheon * 4.667;
		$(".rundlet").val(rundlet);
	}
	</script>

	<script>
	function from_barrel()
	{
		var barrel = $(".barrel").val();

		var tun = barrel * 0.125;
		$(".tun").val(tun);

		var hogshead = barrel * 0.5;
		$(".hogshead").val(hogshead);

		var butt = barrel * 0.25;
		$(".butt").val(butt);

		var tierce = barrel * 0.75;
		$(".tierce").val(tierce);

		var puncheon = barrel * 0.375;
		$(".puncheon").val(puncheon);

		var rundlet = barrel * 1.75;
		$(".rundlet").val(rundlet);
	}
	</script>

	<script>
	function from_rundlet()
	{
		var rundlet = $(".rundlet").val();

		var tun = rundlet * 0.07143;
		$(".tun").val(tun);

		var hogshead = rundlet * 0.2857;
		$(".hogshead").val(hogshead);

		var butt = rundlet * 0.1429;
		$(".butt").val(butt);

		var tierce = rundlet * 0.4286;
		$(".tierce").val(tierce);

		var puncheon = rundlet * 0.2143;
		$(".puncheon").val(puncheon);

		var barrel = rundlet * 0.5714;
		$(".barrel").val(barrel);
	}
	</script>
  </body>
</html>
