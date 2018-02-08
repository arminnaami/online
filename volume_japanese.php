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
                <h4>Japanese
                </h4>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>sai
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs sai" onkeyup="from_sai();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>sho
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs sho" onkeyup="from_sho();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>shaku
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs shaku" onkeyup="from_shaku();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>to
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs to" onkeyup="from_to();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>go
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs go" onkeyup="from_go();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>koku
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs koku" onkeyup="from_koku();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
	function from_sai()
	{
		var sai = $(".sai").val();

		var sho = sai * 0.001;
		$(".sho").val(sho);

		var shaku = sai * 0.1;
		$(".shaku").val(shaku);

		var to = sai * 0.0001;
		$(".to").val(to);

		var go = sai * 0.01;
		$(".go").val(go);

		var koku = sai * 0.00001;
		$(".koku").val(koku);
	}
	</script>

	<script>
	function from_sho()
	{
		var sho = $(".sho").val();

		var sai = sho * 1000;
		$(".sai").val(sai);

		var shaku = sho * 100;
		$(".shaku").val(shaku);

		var to = sho * 0.1;
		$(".to").val(to);

		var go = sho * 10;
		$(".go").val(go);

		var koku = sho * 0.01;
		$(".koku").val(koku);
	}
	</script>

	<script>
	function from_shaku()
	{
		var shaku = $(".shaku").val();

		var sai = shaku * 10;
		$(".sai").val(sai);

		var sho = shaku * 0.01;
		$(".sho").val(sho);

		var to = shaku * 0.001;
		$(".to").val(to);

		var go = shaku * 0.1;
		$(".go").val(go);

		var koku = shaku * 0.0001;
		$(".koku").val(koku);
	}
	</script>

	<script>
	function from_to()
	{
		var to = $(".to").val();

		var sai = to * 10000;
		$(".sai").val(sai);

		var sho = to * 10;
		$(".sho").val(sho);

		var shaku = to * 1000;
		$(".shaku").val(shaku);

		var go = to * 100;
		$(".go").val(go);

		var koku = to * 0.1;
		$(".koku").val(koku);
	}
	</script>

	<script>
	function from_go()
	{
		var go = $(".go").val();

		var sai = go * 100;
		$(".sai").val(sai);

		var sho = go * 0.1;
		$(".sho").val(sho);

		var shaku = go * 10;
		$(".shaku").val(shaku);

		var to = go * 0.01;
		$(".to").val(to);

		var koku = go * 0.001;
		$(".koku").val(koku);
	}
	</script>

	<script>
	function from_koku()
	{
		var koku = $(".koku").val();

		var sai = koku * 100000;
		$(".sai").val(sai);

		var sho = koku * 100;
		$(".sho").val(sho);

		var shaku = koku * 10000;
		$(".shaku").val(shaku);

		var to = koku * 10;
		$(".to").val(to);

		var go = koku * 1000;
		$(".go").val(go);
	}
	</script>
  </body>
</html>
