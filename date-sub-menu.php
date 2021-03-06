<span class="sub-menu-statistic column mobile">
	<a href="#" onclick="showSubMenu(); return false;">Statistics <i class="fa fa-plus"></i></a>
</span>
<div class="sub-menu sub-menu-container">
	<ul class="nav nav-pills">
		<li><a href="<?php print $globalURL; ?>/date/<?php print $_GET['date']; ?>" <?php if (strtolower($current_page) == "date-detailed"){ print 'class="active"'; } ?>>Detailed</a></li>
		<li class="dropdown">
		    <a class="dropdown-toggle <?php if(strtolower($current_page) == "date-statistics-aircraft" || strtolower($current_page) == "date-statistics-registration" || strtolower($current_page) == "date-statistics-manufacturer"){ print 'active'; } ?>" data-toggle="dropdown" href="#">
		      Aircraft <span class="caret"></span>
		    </a>
		    <ul class="dropdown-menu" role="menu">
		      <li><a href="<?php print $globalURL; ?>/date/statistics/aircraft/<?php print $_GET['date']; ?>">Aircraft Type</a></li>
					<li><a href="<?php print $globalURL; ?>/date/statistics/registration/<?php print $_GET['date']; ?>">Registration</a></li>
					<li><a href="<?php print $globalURL; ?>/date/statistics/manufacturer/<?php print $_GET['date']; ?>">Manufacturer</a></li>
		    </ul>
		</li>
		<li class="dropdown">
		    <a class="dropdown-toggle <?php if(strtolower($current_page) == "date-statistics-airline" || strtolower($current_page) == "date-statistics-airline-country"){ print 'active'; } ?>" data-toggle="dropdown" href="#">
		      Airline <span class="caret"></span>
		    </a>
		    <ul class="dropdown-menu" role="menu">
		      <li><a href="<?php print $globalURL; ?>/date/statistics/airline/<?php print $_GET['date']; ?>">Airline</a></li>
			  <li><a href="<?php print $globalURL; ?>/date/statistics/airline-country/<?php print $_GET['date']; ?>">Airline by Country</a></li>
		    </ul>
		</li>
		<li class="dropdown">
		    <a class="dropdown-toggle <?php if(strtolower($current_page) == "date-statistics-departure-airport" || strtolower($current_page) == "date-statistics-departure-airport-country" || strtolower($current_page) == "date-statistics-arrival-airport" || strtolower($current_page) == "date-statistics-arrival-airport-country"){ print 'active'; } ?>" data-toggle="dropdown" href="#">
		      Airport <span class="caret"></span>
		    </a>
		    <ul class="dropdown-menu" role="menu">
		      <li><a href="<?php print $globalURL; ?>/date/statistics/departure-airport/<?php print $_GET['date']; ?>">Departure Airport</a></li>
		      <li><a href="<?php print $globalURL; ?>/date/statistics/departure-airport-country/<?php print $_GET['date']; ?>">Departure Airport by Country</a></li>
			  <li><a href="<?php print $globalURL; ?>/date/statistics/arrival-airport/<?php print $_GET['date']; ?>">Arrival Airport</a></li>
			  <li><a href="<?php print $globalURL; ?>/date/statistics/arrival-airport-country/<?php print $_GET['date']; ?>">Arrival Airport by Country</a></li>
		    </ul>
		</li>
		<li><a href="<?php print $globalURL; ?>/date/statistics/route/<?php print $_GET['date']; ?>" <?php if (strtolower($current_page) == "date-statistics-route"){ print 'class="active"'; } ?>>Route</a></li>
		<li><a href="<?php print $globalURL; ?>/date/statistics/time/<?php print $_GET['date']; ?>" <?php if (strtolower($current_page) == "date-statistics-time"){ print 'class="active"'; } ?>>Time</a></li>
	</ul>
</div>