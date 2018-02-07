<?php $page_name = BASENAME($_SERVER['PHP_SELF']); ?>

<nav class="navbar navbar-expand-lg mai-sub-header" style="border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
<div class="container">
  <!-- Mega Menu structure-->
  <nav class="navbar navbar-expand-md ">
	<button type="button" data-toggle="collapse" data-target="#mai-navbar-collapse" aria-controls="#mai-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler hidden-md-up collapsed" style="float:right;border:1px solid white;"> 
	  <div class="icon-bar">
		<span>
		</span>
		<span>
		</span>
		<span>
		</span>
	  </div>
	</button>

	<div id="mai-navbar-collapse" class="navbar-collapse collapse mai-nav-tabs" style="margin-top:-40px;padding:10px;">
	  <ul class="nav navbar-nav" style="width:100%;">
		<li class="nav-item parent open" style="width:30%;">
		  <a href="#" role="button" class="nav-link" style="background:none;height:70px;width:100%;">
			<img src="images/logodof.png" style="height:70px;">
			<div class="clearfix"></div>
		  </a>

		  <ul class="mai-nav-tabs-sub mai-sub-nav nav">
			<li class="nav-item">
			  <a href="javascript:void(0);" class="nav-link <?php if($page_name == 'index.php') { ?>active<?php } ?>">
				<span class="name">Home
				</span>
			  </a>
			</li>

			<li class="nav-item">
			  <a href="hscode.php" class="nav-link <?php if($page_name == 'hscode.php') { ?>active<?php } ?>">
				<span class="name">HS Codes
				</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a href="weight_metric.php" class="nav-link <?php if($page_name == 'weight_apothecaries.php' || $page_name == 'weight_avoirdupois.php' || $page_name == 'weight_chinese_units_1915_before_1930.php' || $page_name == 'weight_chinese_units_1930_and_1959.php' || $page_name == 'weight_chinese_units_1959.php' || $page_name == 'weight_hong.php' || $page_name == 'weight_japanese.php' || $page_name == 'weight_metric.php' || $page_name == 'weight_thai.php' || $page_name == 'weight_troy.php' ) { ?>active<?php } ?>">
				<span class="name">Weight Mass
				</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a href="length_dist_metric.php" class="nav-link <?php if($page_name == 'length_dist_metric.php') { ?>active<?php } ?>">
				<span class="name">Length Distance
				</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a href="volume_metric.php" class="nav-link <?php if($page_name == 'volume_astronomical.php' || $page_name == 'volume_british_derivatives.php' || $page_name == 'volume_british_imperial.php' || $page_name == 'volume_chinese_units_1915.php' || $page_name == 'volume_chinese_units_1930.php' || $page_name == 'volume_cooking_international.php' || $page_name == 'volume_cooking_australian.php' || $page_name == 'volume_cooking_us.php' || $page_name == 'volume_english_wine_cask.php' || $page_name == 'volume_japanese.php' || $page_name == 'volume_lumber.php' || $page_name == 'volume_metric.php' || $page_name == 'volume_natural_units.php' || $page_name == 'volume_ship_tonnage.php' || $page_name == 'volume_thai.php' || $page_name == 'volume_us_dry_measure.php' || $page_name == 'volume_us_liquid_measure.php' ) { ?>active<?php } ?>">
				<span class="name">Capacity & Volume
				</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a href="temp_convert.php" class="nav-link <?php if($page_name == 'temp_convert.php' || $page_name == 'temp_historical.php') { ?>active<?php } ?>">
				<span class="name"> Temperature
				</span>
			  </a>
			</li>
		  </ul>
		</li>
		
		<li class="nav-item parent open" style="float:right;width:70%;">
		  <!--<a href="#" role="button" class="nav-link" style="background:none;">
			<img src="images/images.png" style="height:70px;width:100%;" class="img-responsive">
			<div class="clearfix"></div>
		  </a>-->
		  <a href="http://ads.dubaitrade.biz/www/delivery/ck.php?oaparams=2__bannerid=321__zoneid=6__cb=37b49ea7a2__oadest=http%3A%2F%2Fwww.esea.ae" target="ESEA"><img src="http://ads.dubaitrade.biz/www/images/de36b43e4188615b3189621c3030fccc.gif" width="728" height="90" alt="ESEA" title="ESEA" border="0"></a>
		</li>
	  </ul>
	  
	</div>
  </nav>
  <!--Search input-->

</div>
</nav>
