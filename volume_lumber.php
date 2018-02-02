<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Download Online Free
    </title>
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
			
 
			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;">
                <h4>Lumber measure
                </h4>
              </div>
              <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
                <span class="" >These units are sometimes used to measure the volume of lumber in Great Britain, the United States, Canada, Australia and New Zealand. The same units is called board-foot in the U.S. and Canada and super foot or superficial foot in Australia and New Zealand. One board-foot is the volume of a one-foot length of a board one foot wide and one inch thick.
                </span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>million board-feet (mmfbm, mmbdft, mmbf)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs">
                    </div>
                    <div class="col-sm-3">
                      <label>cubic ton of timber
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>cord
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs">
                    </div>
                    <div class="col-sm-3">
                      <label>stere
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>thousand board-feet (mfbm, mbdft, mbf)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs">
                    </div>
                    <div class="col-sm-3">
                      <label>hoppus foot, hoppus cube (h ft)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>hoppus ton (HT)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs">
                    </div>
                    <div class="col-sm-3">
                      <label>boardfoot, board-foot (fbmm, bdft, bf)
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs">
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
  </body>
</html>
