<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Chinese units of 1915 | Download Online Free</title>
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
                <h4>Chinese units of 1915
                </h4>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>dan
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs dan" onkeyup="from_dan();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>sheng
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs sheng" onkeyup="from_sheng();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>hu
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs hu" onkeyup="from_hu();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>ge
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs ge" onkeyup="from_ge();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>dou
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs dou" onkeyup="from_dou();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>shao
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs shao" onkeyup="from_shao();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
	function from_dan()
	{
		var dan = $(".dan").val();

		var sheng = dan * 100;
		$(".sheng").val(sheng);

		var hu = dan * 2;
		$(".hu").val(hu);

		var ge = dan * 1000;
		$(".ge").val(ge);

		var dou = dan * 10;
		$(".dou").val(dou);

		var shao = dan * 10000;
		$(".shao").val(shao);
	}
	</script>

	<script>
	function from_sheng()
	{
		var sheng = $(".sheng").val();

		var dan = sheng * 0.01;
		$(".dan").val(dan);

		var hu = sheng * 0.02;
		$(".hu").val(hu);

		var ge = sheng * 10;
		$(".ge").val(ge);

		var dou = sheng * 0.1;
		$(".dou").val(dou);

		var shao = sheng * 100;
		$(".shao").val(shao);
	}
	</script>

	<script>
	function from_hu()
	{
		var hu = $(".hu").val();

		var dan = hu * 0.5;
		$(".dan").val(dan);

		var sheng = hu * 50;
		$(".sheng").val(sheng);

		var ge = hu * 500;
		$(".ge").val(ge);

		var dou = hu * 5;
		$(".dou").val(dou);

		var shao = hu * 5000;
		$(".shao").val(shao);
	}
	</script>

	<script>
	function from_ge()
	{
		var ge = $(".ge").val();

		var dan = ge * 0.001;
		$(".dan").val(dan);

		var sheng = ge * 0.1;
		$(".sheng").val(sheng);

		var hu = ge * 0.002;
		$(".hu").val(hu);

		var dou = ge * 0.01;
		$(".dou").val(dou);

		var shao = ge * 10;
		$(".shao").val(shao);
	}
	</script>

	<script>
	function from_dou()
	{
		var dou = $(".dou").val();

		var dan = dou * 0.1;
		$(".dan").val(dan);

		var sheng = dou * 10;
		$(".sheng").val(sheng);

		var hu = dou * 0.2;
		$(".hu").val(hu);

		var ge = dou * 100;
		$(".ge").val(ge);

		var shao = dou * 1000;
		$(".shao").val(shao);
	}
	</script>

	<script>
	function from_shao()
	{
		var shao = $(".shao").val();

		var dan = shao * 0.0001;
		$(".dan").val(dan);

		var sheng = shao * 0.01;
		$(".sheng").val(sheng);

		var hu = shao * 0.0002;
		$(".hu").val(hu);

		var ge = shao * 0.1;
		$(".ge").val(ge);

		var dou = shao * 0.001;
		$(".dou").val(dou);
	}
	</script>
  </body>
</html>
