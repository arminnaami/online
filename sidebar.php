<?php $page_name = BASENAME($_SERVER['PHP_SELF']); ?>
<style>
.selected_link{
color:blue;
}
</style>
		<div class="col-md-3">
			<div class="panel">
			 <div class="panel-subtitle text-center" style="font-size:16px;"></div>
			  <div class="pricing-table-price panel-subtitle panel-heading-divider text-left" style="padding:10px;border-top:1px solid #e6e5e5;background:#fafafa;"><h4>Weight and Mass</h4></div>
			  <ul class="hide_1" style="margin-left:-12px;padding-bottom:0px;">
				  <li><a href="weight_metric.php" class=" <?php if($page_name == 'weight_metric.php') { ?>selected_link<?php } ?>">Metric</a></li>
				  <li><a href="weight_avoirdupois.php" class=" <?php if($page_name == 'weight_avoirdupois.php') { ?>selected_link<?php } ?>">Avoirdupois (U.S. / British)</a></li>
				  <li><a href="weight_troy.php" class=" <?php if($page_name == 'weight_troy.php') { ?>selected_link<?php } ?>">Troy</a></li>
				  <li><a href="weight_apothecaries.php" class=" <?php if($page_name == 'weight_apothecaries.php') { ?>selected_link<?php } ?>">Apothecaries</a></li>
			  </ul>
			  <a class="btn btn-secondary btn-block btn_hide_1" style="background:#fe8458;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);center;color:white;font-weight:bold;" onclick="show_more_1();">Show More</a>
			  <ul class="show_1" style="margin-left:-12px;padding-bottom:0px;display:none;">
				  <li><a href="weight_metric.php"  class=" <?php if($page_name == 'weight_metric.php') { ?>selected_link<?php } ?>">Metric</a></li>
				  <li><a href="weight_avoirdupois.php"  class=" <?php if($page_name == 'weight_avoirdupois.php') { ?>selected_link<?php } ?>">Avoirdupois (U.S. / British)</a></li>
				  <li><a href="weight_troy.php"  class=" <?php if($page_name == 'weight_troy.php') { ?>selected_link<?php } ?>">Troy</a></li>
				  <li><a href="weight_apothecaries.php" class=" <?php if($page_name == 'weight_apothecaries.php') { ?>selected_link<?php } ?>">Apothecaries</a></li>
				  <li><a href="weight_thai.php"  class=" <?php if($page_name == 'weight_thai.php') { ?>selected_link<?php } ?>">Thai units</a></li>
				  <li><a href="weight_hong.php"  class=" <?php if($page_name == 'weight_hong.php') { ?>selected_link<?php } ?>">Hong Kong</a></li>
			  </ul>
			  <a class="btn btn-secondary btn-block btn_show_1" style="background:#fe8458;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);center;color:white;font-weight:bold;display:none;" onclick="show_less_1();">Show Less</a>
			  
			  <div class="pricing-table-price panel-subtitle panel-heading-divider text-left" style="padding:10px;border-top:1px solid #e6e5e5;background:#fafafa;"><h4>Length and Distance</h4></div>
			  <ul class="hide_2" style="margin-left:-12px;">
				  <li><a href="length_dist_metric.php"  class=" <?php if($page_name == 'length_dist_metric.php') { ?>selected_link<?php } ?>">Metric</a></li>
				  <li><a href="length_dist_international_nautical.php"  class=" <?php if($page_name == 'length_dist_international_nautical.php') { ?>selected_link<?php } ?>">International Nautical Measure</a></li>
				   <li><a href="length_dist_us_nautical.php"  class=" <?php if($page_name == 'length_dist_us_nautical.php') { ?>selected_link<?php } ?>">US Nautical Measure</a></li>
				  <li><a href="length_dist_british_imperial_nautical.php"  class=" <?php if($page_name == 'length_dist_british_imperial_nautical.php') { ?>selected_link<?php } ?>">British (Imperial) Nautical Measure</a></li>
				  
			  </ul>
			  <a class="btn btn-secondary btn-block btn_hide_2" style="background:#fe8458;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);center;color:white;font-weight:bold;" onclick="show_more_2();">Show More</a>
			   <ul class="show_2" style="margin-left:-12px;display:none;">
				  <li><a href="length_dist_metric.php"  class=" <?php if($page_name == 'length_dist_metric.php') { ?>selected_link<?php } ?>">Metric</a></li>
				
				  <li><a href="length_dist_international_nautical.php"  class=" <?php if($page_name == 'length_dist_international_nautical.php') { ?>selected_link<?php } ?>">International Nautical Measure</a></li>
				  <li><a href="length_dist_us_nautical.php"  class=" <?php if($page_name == 'length_dist_us_nautical.php') { ?>selected_link<?php } ?>">US Nautical Measure</a></li>
				  <li><a href="length_dist_british_imperial_nautical.php"  class=" <?php if($page_name == 'length_dist_british_imperial_nautical.php') { ?>selected_link<?php } ?>">British (Imperial) Nautical Measure</a></li>
				 
				  <li><a href="length_dist_japanese.php"  class=" <?php if($page_name == 'length_dist_japanese.php') { ?>selected_link<?php } ?>">Japanese</a></li>
				  <li><a href="length_dist_chinese_units_1930.php"  class=" <?php if($page_name == 'length_dist_chinese_units_1930.php') { ?>selected_link<?php } ?>">Chinese units of 1930</a></li>
				  <li><a href="length_dist_chinese_units_1915.php"  class=" <?php if($page_name == 'length_dist_chinese_units_1915.php') { ?>selected_link<?php } ?>">Chinese units of 1915</a></li>
				  <li><a href="length_dist_hong_kong_units.php"  class=" <?php if($page_name == 'length_dist_hong_kong_units.php') { ?>selected_link<?php } ?>">Hong Kong units</a></li>
				  <li><a href="length_dist_thai_units.php"  class=" <?php if($page_name == 'length_dist_thai_units.php') { ?>selected_link<?php } ?>">Thai units</a></li>
				  <li><a href="length_dist_optical.php"  class=" <?php if($page_name == 'length_dist_optical.php') { ?>selected_link<?php } ?>">Optical</a></li>
				  <li><a href="length_dist_geographical_german.php"  class=" <?php if($page_name == 'length_dist_geographical_german.php') { ?>selected_link<?php } ?>">Geographical (German)</a></li>
				  <li><a href="length_dist_computer_equipment.php"  class=" <?php if($page_name == 'length_dist_computer_equipment.php') { ?>selected_link<?php } ?>">Computer Equipment</a></li>
				  <li><a href="length_dist_typographical_ATA_system.php"  class=" <?php if($page_name == 'length_dist_typographical_ATA_system.php') { ?>selected_link<?php } ?>">Typographical (British and U.S. - ATA system)</a></li>
				  <li><a href="length_dist_typographical_Didot_system.php"  class=" <?php if($page_name == 'length_dist_typographical_Didot_system.php') { ?>selected_link<?php } ?>">Typographical (Europe - Didot system)</a></li>
				  <li><a href="length_dist_european_footwear.php" class=" <?php if($page_name == 'length_dist_european_footwear.php') { ?>selected_link<?php } ?>">European footwear unit</a></li>
				  <li><a href="length_dist_astronomical.php" class=" <?php if($page_name == 'length_dist_astronomical.php') { ?>selected_link<?php } ?>">Astronomical</a></li>
				  <li><a href="length_dist_grace_hopper.php" class=" <?php if($page_name == 'length_dist_grace_hopper.php') { ?>selected_link<?php } ?>">Grace Hopper's units of distance</a></li>
				  <li><a href="length_dist_natural_units.php" class=" <?php if($page_name == 'length_dist_natural_units.php') { ?>selected_link<?php } ?>">Natural units</a></li>
			  </ul>
			  <a class="btn btn-secondary btn-block btn_show_2" style="background:#fe8458;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);center;color:white;font-weight:bold;display:none;" onclick="show_less_2();">Show Less</a>
			 
			  <div class="pricing-table-price panel-subtitle panel-heading-divider text-left" style="padding:10px;border-top:1px solid #e6e5e5;background:#fafafa;"><h4>Capacity and Volume</h4></div>
			  <ul class="hide_3" style="margin-left:-12px;">
				  <li><a href="volume_metric.php" class=" <?php if($page_name == 'volume_metric.php') { ?>selected_link<?php } ?>">Metric</a></li>
				  <li><a href="volume_us_liquid_measure.php" class=" <?php if($page_name == 'volume_us_liquid_measure.php') { ?>selected_link<?php } ?>">U.S. Liquid Measure</a></li>
				  <li><a href="volume_us_dry_measure.php" class=" <?php if($page_name == 'volume_us_dry_measure.php') { ?>selected_link<?php } ?>">U.S. Dry Measure</a></li>
				  <!-- <li><a href="volume_british_imperial.php">British Imperial Liquid And Dry</a></li> -->
				  <li><a href="volume_british_derivatives.php" class=" <?php if($page_name == 'volume_british_derivatives.php') { ?>selected_link<?php } ?>">British and U.S. derivatives of length units</a></li>
			  </ul>
			  <a class="btn btn-secondary btn-block btn_hide_3" style="background:#fe8458;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);center;color:white;font-weight:bold;" onclick="show_more_3();">Show More</a>
			  <ul class="show_3" style="margin-left:-12px;display:none;">
				  <li><a href="volume_metric.php" class=" <?php if($page_name == 'volume_metric.php') { ?>selected_link<?php } ?>">Metric</a></li>
				  <li><a href="volume_us_liquid_measure.php" class=" <?php if($page_name == 'volume_us_liquid_measure.php') { ?>selected_link<?php } ?>">U.S. Liquid Measure</a></li>
				  <li><a href="volume_us_dry_measure.php" class=" <?php if($page_name == 'volume_us_dry_measure.php') { ?>selected_link<?php } ?>">U.S. Dry Measure</a></li>
				  <!-- <li><a href="volume_british_imperial.php">British Imperial Liquid And Dry</a></li> -->
				  <li><a href="volume_british_derivatives.php" class=" <?php if($page_name == 'volume_british_derivatives.php') { ?>selected_link<?php } ?>">British and U.S. derivatives of length units</a></li>
				  <li><a href="volume_english_wine_cask.php" class=" <?php if($page_name == 'volume_english_wine_cask.php') { ?>selected_link<?php } ?>">English wine cask units</a></li>
				  <li><a href="volume_cooking_us.php" class=" <?php if($page_name == 'volume_cooking_us.php') { ?>selected_link<?php } ?>">Cooking (U.S.)</a></li>
				  <li><a href="volume_cooking_international.php" class=" <?php if($page_name == 'volume_cooking_international.php') { ?>selected_link<?php } ?>">Cooking (International)</a></li>
				  <li><a href="volume_cooking_australian.php" class=" <?php if($page_name == 'volume_cooking_australian.php') { ?>selected_link<?php } ?>">Cooking (Australian)</a></li>
				  <li><a href="volume_natural_units.php" class=" <?php if($page_name == 'volume_natural_units.php') { ?>selected_link<?php } ?>">Natural units</a></li>
				  <li><a href="volume_astronomical.php" class=" <?php if($page_name == 'volume_astronomical.php') { ?>selected_link<?php } ?>">Astronomical</a></li>
				  <li><a href="volume_ship_tonnage.php" class=" <?php if($page_name == 'volume_ship_tonnage.php') { ?>selected_link<?php } ?>">Ship tonnage measurements</a></li>
				  <li><a href="volume_lumber.php" class=" <?php if($page_name == 'volume_lumber.php') { ?>selected_link<?php } ?>">Lumber measure</a></li>
				  <li><a href="volume_japanese.php" class=" <?php if($page_name == 'volume_japanese.php') { ?>selected_link<?php } ?>">Japanese</a></li>
				  <li><a href="volume_chinese_units_1930.php" class=" <?php if($page_name == 'volume_chinese_units_1930.php') { ?>selected_link<?php } ?>">Chinese units of 1930</a></li>
				  <li><a href="volume_chinese_units_1915.php" class=" <?php if($page_name == 'volume_chinese_units_1915.php') { ?>selected_link<?php } ?>">Chinese units of 1915</a></li>
				  <li><a href="volume_thai.php" class=" <?php if($page_name == 'volume_thai.php') { ?>selected_link<?php } ?>">Thai units</a></li>
			  </ul>
			  <a class="btn btn-secondary btn-block btn_show_3" style="background:#fe8458;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);center;color:white;font-weight:bold;display:none;" onclick="show_less_3();">Show Less</a>


			  <div class="pricing-table-price panel-subtitle panel-heading-divider text-left" style="padding:10px;border-top:1px solid #e6e5e5;background:#fafafa;"><h4>Temperature</h4></div>
			  <ul style="margin-left:-12px;padding-bottom:20px;">
				  <li><a href="temp_convert.php" class=" <?php if($page_name == 'temp_convert.php') { ?>selected_link<?php } ?>">Temperature conversion</a></li>
				  <li><a href="temp_historical.php" class=" <?php if($page_name == 'temp_historical.php') { ?>selected_link<?php } ?>">Historical temperature scales</a></li>
			  </ul>

			  <!-- <div class="pricing-table-price panel-subtitle panel-heading-divider" style="padding-left:15px;">Computer</div>
			  <div class="panel-body">
				<ul>
				  <li><a href="javascript:void(0);">Computer storage</a></li>
				  <li><a href="javascript:void(0);">Data transfer rate</a></li>
				</ul>
			  </div>
			   <div class="pricing-table-price panel-subtitle panel-heading-divider" style="padding-left:15px;">Don't know?</div>
			  <div class="panel-body">
				<ul>
				  <li><a href="javascript:void(0);">List of all supported units</a></li>
				  <li><a href="javascript:void(0);">Metric conversion</a></li>
				  <li><a href="javascript:void(0);">Convert grams to cups</a></li>
				  <li><a href="javascript:void(0);">Imperial vs US Customary</a></li>
				  <li><a href="javascript:void(0);">History of measurement</a></li>
				</ul>
			  </div>
			   <div class="pricing-table-price panel-subtitle panel-heading-divider" style="padding-left:15px;">Conversion questions?</div>
			  <div class="panel-body">
				<ul>
				  <li><a href="javascript:void(0);">Discuss on our forum</a></li>
				</ul>
			  </div>
			  <div class="pricing-table-price panel-subtitle panel-heading-divider" style="padding-left:15px;">Found a mistake?</div>
			  <div class="panel-body">
				<ul>
				  <li><a href="javascript:void(0);">Let us know</a></li>
				</ul>
			  </div>
			   <div class="panel-heading-divider"></div>
			  <div class="pricing-table-price panel-subtitle panel-heading-divider" style="padding-left:15px;"><a href="javascript:void(0);">Our privacy policy</a></div>-->
			</div>
	    </div>