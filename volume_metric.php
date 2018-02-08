<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Metric | Download Online Free</title>
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
                <h4>Metric</h4>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>cubic kilometer (km&sup3;)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs c_km" onkeydown="javascript: return event.keyCode == 69 ? false : true" onkeyup="from_km();">
                    </div>
                    <div class="col-sm-3">
                      <label>decaliter</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs dl" onkeyup="from_dl();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>cubic meter (m&sup3;)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs c_m" onkeyup="from_meter();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>liter (l)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs l" onkeyup="from_l();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>cubic decimeter (dm&sup3;)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs c_dm" onkeyup="from_dm();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>deciliter (dl)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs deci_l" onkeyup="from_deci_l();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>cubic centimeter (cc)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs c_cm" onkeyup="from_cm();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>centiliter (cl)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs cl" onkeyup="from_cl();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>cubic millimeter (mm&sup3;)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs c_mm" onkeyup="from_mm();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>milliliter (ml)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs m_lit" onkeyup="from_m_lit();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>hectoliter (hl)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs hl" onkeyup="from_hl();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>microliter (&micro;l)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs mic_lit" onkeyup="from_mic_lit();" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
	function from_km()
	{
		var km = $(".c_km").val();

		var m = km * 1e+9;
		$(".c_m").val(m);
		
		var dm = km * 1e+12;
		$(".c_dm").val(dm);

		var cm = km * 1e+15;
		$(".c_cm").val(cm);

		var mm = km * 1e+18;
		$(".c_mm").val(mm);

		var hel = km * 1e+10;
		$(".hl").val(hel);

		var del = km * 1e+11;
		$(".dl").val(del);

		var lit = km * 1e+12;
		$(".l").val(lit);

		var deci_lit = km * 1e+13;
		$(".deci_l").val(deci_lit);

		var clit = km * 1e+14;
		$(".cl").val(clit);

		var mlit = km * 1e+15;
		$(".m_lit").val(mlit);

		var miclit = km * 1e+18;
		$(".mic_lit").val(miclit);
	}
	</script>
	<script>
	function from_meter()
	{
		var m = $(".c_m").val();

		var km = m * 1e-9;
		$(".c_km").val(km);

		var dm = m * 1000;
		$(".c_dm").val(dm);

		var cm = m * 1e+6;
		$(".c_cm").val(cm);

		var mm = m * 1e+9;
		$(".c_mm").val(mm);

		var hl = m * 10;
		$(".hl").val(hl);

		var dl = m * 100;
		$(".dl").val(dl);

		var liter = m * 1000;
		$(".l").val(liter);

		var deci_liter = m * 10000;
		$(".deci_l").val(deci_liter);

		var centi_liter = m * 100000;
		$(".cl").val(centi_liter);

		var m_lit = m * 1e+6;
		$(".m_lit").val(m_lit);

		var mic_lit = m * 1e+9;
		$(".mic_lit").val(mic_lit);
	}
	</script>
	
	<script>
	function from_cm()
	{
		var dm = $(".c_dm").val();

		var km = dm * 1e-12;
		$(".c_km").val(km);

		var m = dm * 0.001;
		$(".c_m").val(m);

		var c_cm = dm * 1000;
		$(".c_cm").val(c_cm);

		var c_mm = dm * 1e+6;
		$(".c_mm").val(c_mm);

		var hl = dm * 0.01;
		$(".hl").val(hl);

		var dl = dm * 0.1;
		$(".dl").val(dl);

		var liter = dm * 1;
		$(".l").val(liter);

		var deci_l = dm * 10;
		$(".deci_l").val(deci_l);

		var cl = dm * 100;
		$(".cl").val(cl);

		var m_lit = dm * 1000;
		$(".m_lit").val(m_lit);

		var mic_lit = dm * 1e+6;
		$(".mic_lit").val(mic_lit);
	}
	</script>

	<script>
	function from_cm()
	{
		var cm = $(".c_cm").val();

		var km = cm * 1e-15;
		$(".c_km").val(km);

		var m = cm * 1e-6;
		$(".c_m").val(m);

		var c_dm = cm * 0.001;
		$(".c_dm").val(c_dm);

		var c_mm = cm * 1000;
		$(".c_mm").val(c_mm);

		var hl = cm * 1e-5;
		$(".hl").val(hl);

		var dl = cm * 0.0001;
		$(".dl").val(dl);

		var liter = cm * 0.001;
		$(".l").val(liter);

		var deci_l = cm * 0.01;
		$(".deci_l").val(deci_l);

		var cl = cm * 0.1;
		$(".cl").val(cl);

		var m_lit = cm * 1;
		$(".m_lit").val(m_lit);

		var mic_lit = cm * 1000;
		$(".mic_lit").val(mic_lit);
	}
	</script>

	<script>
	function from_mm()
	{
		var mm = $(".c_mm").val();

		var km = mm * 1e-18;
		$(".c_km").val(km);

		var m = mm * 1e-9;
		$(".c_m").val(m);

		var c_dm = mm * 1e-6;
		$(".c_dm").val(c_dm);

		var c_cm = mm * 0.001;
		$(".c_cm").val(c_cm);

		var hl = mm * 1e-8;
		$(".hl").val(hl);

		var dl = mm * 1e-7;
		$(".dl").val(dl);

		var liter = mm * 1e-6;
		$(".l").val(liter);

		var deci_l = mm * 1e-5;
		$(".deci_l").val(deci_l);

		var cl = mm * 0.0001;
		$(".cl").val(cl);

		var m_lit = mm * 0.001;
		$(".m_lit").val(m_lit);

		var mic_lit = mm * 1;
		$(".mic_lit").val(mic_lit);
	}
	</script>

	<script>
	function from_hl()
	{
		var hl = $(".hl").val();

		var km = hl * 1e-10;
		$(".c_km").val(km);

		var m = hl * 0.1;
		$(".c_m").val(m);

		var c_dm = hl * 100;
		$(".c_dm").val(c_dm);

		var c_cm = hl * 100000;
		$(".c_cm").val(c_cm);

		var c_mm = hl * 1e+8;
		$(".c_mm").val(c_mm);

		var dl = hl * 10;
		$(".dl").val(dl);

		var liter = hl * 100;
		$(".l").val(liter);

		var deci_l = hl * 1000;
		$(".deci_l").val(deci_l);

		var cl = hl * 10000;
		$(".cl").val(cl);

		var m_lit = hl * 100000;
		$(".m_lit").val(m_lit);

		var mic_lit = hl * 1e+8;
		$(".mic_lit").val(mic_lit);
	}
	</script>

	<script>
	function from_dl()
	{
		var dl = $(".dl").val();

		var km = dl * 1e-11;
		$(".c_km").val(km);

		var m = dl * 0.01;
		$(".c_m").val(m);

		var c_dm = dl * 10;
		$(".c_dm").val(c_dm);

		var c_cm = dl * 10000;
		$(".c_cm").val(c_cm);

		var c_mm = dl * 1e+7;
		$(".c_mm").val(c_mm);

		var hl = dl * 0.1;
		$(".hl").val(hl);

		var liter = dl * 10;
		$(".l").val(liter);

		var deci_l = dl * 100;
		$(".deci_l").val(deci_l);

		var cl = dl * 1000;
		$(".cl").val(cl);

		var m_lit = dl * 10000;
		$(".m_lit").val(m_lit);

		var mic_lit = dl * 1e+7;
		$(".mic_lit").val(mic_lit);
	}
	</script>

	<script>
	function from_l()
	{
		var l = $(".l").val();

		var km = l * 1e-12;
		$(".c_km").val(km);

		var m = l * 0.001;
		$(".c_m").val(m);

		var c_dm = l * 1;
		$(".c_dm").val(c_dm);

		var c_cm = l * 1000;
		$(".c_cm").val(c_cm);

		var c_mm = l * 1e+6;
		$(".c_mm").val(c_mm);

		var hl = l * 0.01;
		$(".hl").val(hl);

		var dl = l * 0.1;
		$(".dl").val(dl);

		var deci_l = l * 10;
		$(".deci_l").val(deci_l);

		var cl = l * 100;
		$(".cl").val(cl);

		var m_lit = l * 1000;
		$(".m_lit").val(m_lit);

		var mic_lit = l * 1e+6;
		$(".mic_lit").val(mic_lit);
	}
	</script>

	<script>
	function from_deci_l()
	{
		var deci_l = $(".deci_l").val();

		var km = deci_l * 1e-13;
		$(".c_km").val(km);

		var m = deci_l * 0.0001;
		$(".c_m").val(m);

		var c_dm = deci_l * 0.1;
		$(".c_dm").val(c_dm);

		var c_cm = deci_l * 100;
		$(".c_cm").val(c_cm);

		var c_mm = deci_l * 100000;
		$(".c_mm").val(c_mm);

		var hl = deci_l * 0.001;
		$(".hl").val(hl);

		var dl = deci_l * 0.01;
		$(".dl").val(dl);

		var liter = deci_l * 0.1;
		$(".l").val(liter);

		var cl = deci_l * 10;
		$(".cl").val(cl);

		var m_lit = deci_l * 100;
		$(".m_lit").val(m_lit);

		var mic_lit = deci_l * 100000;
		$(".mic_lit").val(mic_lit);
	}
	</script>

	<script>
	function from_cl()
	{
		var cl = $(".cl").val();

		var km = cl * 1e-14;
		$(".c_km").val(km);

		var m = cl * 1e-5;
		$(".c_m").val(m);

		var c_dm = cl * 0.01;
		$(".c_dm").val(c_dm);

		var c_cm = cl * 10;
		$(".c_cm").val(c_cm);

		var c_mm = cl * 10000;
		$(".c_mm").val(c_mm);

		var hl = cl * 0.0001;
		$(".hl").val(hl);

		var dl = cl * 0.001;
		$(".dl").val(dl);

		var liter = cl * 0.01;
		$(".l").val(liter);

		var deci_l = cl * 0.1;
		$(".deci_l").val(deci_l);

		var m_lit = cl * 10;
		$(".m_lit").val(m_lit);

		var mic_lit = cl * 10000;
		$(".mic_lit").val(mic_lit);
	}
	</script>

	<script>
	function from_m_lit()
	{
		var m_lit = $(".m_lit").val();

		var km = m_lit * 1e-15;
		$(".c_km").val(km);

		var m = m_lit * 1e-6;
		$(".c_m").val(m);

		var c_dm = m_lit *0.001;
		$(".c_dm").val(c_dm);

		var c_cm = m_lit * 1;
		$(".c_cm").val(c_cm);

		var c_mm = m_lit * 1000;
		$(".c_mm").val(c_mm);

		var hl = m_lit * 1e-5;
		$(".hl").val(hl);

		var dl = m_lit * 1e-4;
		$(".dl").val(dl);

		var liter = m_lit * 0.001;
		$(".l").val(liter);

		var deci_l = m_lit * 0.01;
		$(".deci_l").val(deci_l);

		var cl = m_lit * 0.1;
		$(".cl").val(cl);

		var mic_lit = m_lit * 1000;
		$(".mic_lit").val(mic_lit);
	}
	</script>

	<script>
	function from_mic_lit()
	{
		var mic_lit = $(".mic_lit").val();

		var km = mic_lit * 1e-18;
		$(".c_km").val(km);

		var m = mic_lit * 1e-9;
		$(".c_m").val(m);

		var c_dm = mic_lit * 1e-6;
		$(".c_dm").val(c_dm);

		var c_cm = mic_lit * 0.001;
		$(".c_cm").val(c_cm);

		var c_mm = mic_lit * 1;
		$(".c_mm").val(c_mm);

		var hl = mic_lit * 1e-8;
		$(".hl").val(hl);

		var dl = mic_lit * 1e-7;
		$(".dl").val(dl);

		var liter = mic_lit * 1e-6;
		$(".l").val(liter);

		var deci_l = mic_lit * 1e-5;
		$(".deci_l").val(deci_l);

		var cl = mic_lit * 0.0001;
		$(".cl").val(cl);

		var m_lit = mic_lit * 0.001;
		$(".m_lit").val(m_lit);
	}
	</script>
  </body>
</html>
