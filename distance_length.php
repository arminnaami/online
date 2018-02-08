<?php
if(isset($_GET['submit']))
{
if(isset($_GET['convert_value']) && $_GET['convert_value'] != '')

{
	$convert_value = $_GET['convert_value'];
	$unit = $_GET['unit'];
	if($_GET['unit'] == 'kilometer')
	{
		$kilometer = $convert_value;
		$milimeter = $convert_value *1000000;
		$meter =  $convert_value *1000;
		$micrometer = $convert_value *1000000000;
		$decimeter = $convert_value *10000;
		$nanometer = $convert_value *1000000000000;
		$centimeter = $convert_value *100000;
		$angstrom = $convert_value *10000000000000;
		$american_leauge = $convert_value *0.2071;
		$american_foot = $convert_value *3281;
		$american_mile = $convert_value *0.6214;
		$american_feet_inchs = $convert_value *3280;
		$american_land = $convert_value *0.6214;
		$american_span = $convert_value *4374;
		$american_bolt = $convert_value *27.34;
		$american_hand = $convert_value *9843;
		$british_leauge = $convert_value *0.2071;
		$british_foot  = $convert_value *3281;
		$british_mile = $convert_value *0.6214;
		$british_span = $convert_value *4374;
		$british_land = $convert_value *0.6214;
		$british_nail =  $convert_value *4374;
		$int_nautical_leauge = $convert_value *0.18;
		$int_nautical_mile = $convert_value *0.54;
		$int_nautical_cable_length = $convert_value *5.4;
		$int_nautical_fathom = $convert_value *546.8;
		$us_nautical_mile = $convert_value *0.5396;
		$us_nautical_cable_length = $convert_value *4.557;
		$us_nautical_fathom = $convert_value *546.8;
		$admirly_mile = $convert_value *0.5396;
		$admirly_cable_length = $convert_value *5.396;

		
	}
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Download Online Free</title>
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
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Convert Length and Distance Units Instantly</h4></div>
              <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class=""> 
				<form method ="get">
				<div class="form-group inline row">
					<div class="col-sm-3 ">
					<?php
						if(isset($_GET['unit'])){
							$unit_name = $_GET['unit'];
						}
					?>
					 <label>Your Value (<?php echo $unit_name;?>)</label>
					</div>
                    <div class="col-sm-4">
                       <input type="text" name="convert_value" class="boots_form-control form-control-xs" value="1">
					   <input type="hidden" name="unit" value="<?php echo $_GET['unit'];?>">
                    </div>
					<div class="col-sm-4">
                       <input type="submit" name="submit" class="btn btn-secondary btn-block btn_show_1" style="background:#fe8458;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);center;color:white;font-weight:bold;" value="Convert">
                    </div>
                  </div>
				  </form>
				  </span>
              </div>
            </div>

			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Metric</h4></div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <a href="?unit=kilometer"><label>kilometer (km)</label></a>
					</div>
                    <div class="col-sm-3">
                       <p><?php echo $kilometer;?></p>
                    </div>
					<div class="col-sm-3">
					 <label>millimeter (mm)</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $milimeter;?></p>
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>meter (m)</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $meter;?></p>
                    </div>
					<div class="col-sm-3">
					 <label>micrometre (micron)</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $micrometer;?></p>
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>decimeter (dm)</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $decimeter;?></p>
                    </div>
					<div class="col-sm-3">
					 <label>nanometer (nm)</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $nanometer;?></p>
                    </div>
                  </div>

				   <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>centimeter (cm)</label>
					</div>
                    <div class="col-sm-3">
                       <p><?php echo $centimeter;?></p>
                    </div>
					<div class="col-sm-3">
					 <label>angstrom</label>
					</div>
                    <div class="col-sm-3">
                       <p><?php echo $angstrom;?></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>

			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>The American System of Measures (US Customary Units)</h4></div>
				<div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >American weight and measures are based on units used in Britain prior to 1824, when imperial system was officially established. The US law of 1866 set a relationship with the metric system by defining the meter as equal to 39.37 in. Since then all measures were redefined in terms of metric units with the last minimal adjustment in 1959. However the old standard of 1ft was retained with the name US survey foot.</span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <a href="?unit=american_leauge"><label>league</label></a>
					</div>
                    <div class="col-sm-3">
                       <p><?php echo $american_leauge;?></p>
                    </div>
					<div class="col-sm-3">
					 <a href="?unit=american_foot"><label>foot (ft)</label></a>
					</div>
                    <div class="col-sm-3">
                       <p><?php echo $american_foot;?></p>
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <a href="?unit=american_mile"><label>mile (mi)</label></a>
					</div>
                    <div class="col-sm-3">
                       <p><?php echo $american_mile;?></p>
                    </div>
					<div class="col-sm-3">
					 <a href="?unit=american_feet"><label>feet and inches (x'y")</label></a>
					</div>
                    <div class="col-sm-3">
                       <p><?php echo $american_feet_inchs;?></p>
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <a href="?unit=american_land"><label>land</label></a>
					</div>
                    <div class="col-sm-3">
                       <p><?php echo $american_land;?></p>
                    </div>
					<div class="col-sm-3">
					 <a href="?unit=american_span"><label>span</label></a>
					</div>
                    <div class="col-sm-3">
                       <p><?php echo $american_span;?></p>
                    </div>
                  </div>

				   <div class="form-group inline row">
					<div class="col-sm-3">
					 <a href="?unit=american_bolt"><label>bolt</label></a>
					</div>
                    <div class="col-sm-3">
                       <p><?php echo $american_bolt;?></p>
                    </div>
					<div class="col-sm-3">
					 <a href="?unit=american_hand"><label>hand</label></a>
					</div>
                    <div class="col-sm-3">
                       <p><?php echo $american_hand;?></p>
                    </div>
                  </div>

				  
                 </div>

                </form>
              </div>
            

			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>British (Imperial) Measure</h4></div>
				<div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >The first English official measurement standards were defined in 15th century. British system of units, known as imperial units, was established in 1824. Later in 1963 the standards were redefined in terms of metre stantard maintained in Paris. From 1995 the UK adopted metric units for general use. The only imperial measures of length that can be officially used now are miles, yards, feet and inches for road traffic signs.</span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <a href="unit=british_leauge"><label>league</label></a>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $british_leauge;?></p>
                    </div>
					<div class="col-sm-3">
					 <a href="?unit=british_foot"><label>foot (ft)</label></a>
					</div>
                    <div class="col-sm-3">
                     <p><?php echo $british_foot;?></p>
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <a href="?unit=british_mile"><label>mile (mi)</label></a>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $british_mile;?></p>
                    </div>
					<div class="col-sm-3">
					 <a href=""><label>span (sp)</label></a>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $british_span;?></p>
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>land</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $british_land;?></p>
                    </div>
					<div class="col-sm-3">
					 <label>nail</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $british_nail;?></p>
                    </div>
                  </div>
		
                </form>
              </div>
            </div>


			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>International Nautical Measure</h4></div>
				<div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >The international nautical mile was defined by the First International Extraordinary Hydrographic Conference, Monaco in 1929. This is the only definition in widespread current use, and is the one accepted by the International Bureau of Weights and Measures. Before 1929 different countries had different definitions, and the Soviet Union, the United Kingdom and the United States did not immediately accept the international value.</span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>nautical league (naut.leag)</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $int_nautical_leauge;?></p>
                    </div>
					<div class="col-sm-3">
					 <label>cable length (cbl)</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $int_nautical_cable_length;?></p>
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>nautical mile (naut.mi)</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $int_nautical_mile;?></p>
                    </div>
					<div class="col-sm-3">
					 <label>fathom (fath)</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $int_nautical_fathom ;?></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
			
			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>US Nautical Measure</h4></div>
				<div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >These measures were abandoned in favor of the international nautical measures in 1954.</span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>US nautical mile</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $us_nautical_mile ;?></p>
                    </div>
					<div class="col-sm-3">
					 <label>US cable length</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $us_nautical_cable_length ;?></p>
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>US fathom (fath)</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $us_nautical_fathom ;?></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>

			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>British (Imperial) Nautical Measure</h4></div>
				<div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >These measures were abandoned in favor of the international nautical measures in 1970.</span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>Admiralty mile</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $admirly_mile;?></p>
                    </div>
					<div class="col-sm-3">
					 <label>Admiralty cable length</label>
					</div>
                    <div class="col-sm-3">
                      <p><?php echo $admirly_cable_length;?></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>

	

		  </div>
		
      

		  <div class="col-md-3" style="padding:0px;">
			<?php for($i=0;$i<8;$i++){?>
			<div class="pricing-table">
			  <div class="pricing-table-title">Basic</div>
			  <div class="pricing-table-price"><span class="currency">us</span><span class="value">$8</span></div>
			  <div class="pricing-table-frecuency">month</div>
			  <div class="panel-divider panel-divider-xl"></div>
			  <ul class="pricing-table-features">
				<li><b>50M</b> ipsum dolor sit amet</li>
				<li><b>600</b> tesque sit amet odio elit</li>
				<li><b>Unlimited</b> Integer felis odio</li>
			  </ul><a href="#" class="btn btn-primary">Get Started</a>
			</div>
			<?php } ?>
		  </div>
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
