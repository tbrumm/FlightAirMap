<?php
require('require/class.Connection.php');
require('require/class.Spotter.php');

if (!isset($_GET['ident'])){
	header('Location: '.$globalURL.'');
} else {
	
	//calculuation for the pagination
	if(!isset($_GET['limit']))
	{
	  $limit_start = 0;
	  $limit_end = 25;
	  $absolute_difference = 25;
	}  else {
		$limit_explode = explode(",", $_GET['limit']);
		$limit_start = $limit_explode[0];
		$limit_end = $limit_explode[1];
	}
	$absolute_difference = abs($limit_start - $limit_end);
	$limit_next = $limit_end + $absolute_difference;
	$limit_previous_1 = $limit_start - $absolute_difference;
	$limit_previous_2 = $limit_end - $absolute_difference;
	
	$page_url = $globalURL.'/ident/'.$_GET['ident'];
	
	if (isset($_GET['sort'])) 
	{
	$spotter_array = Spotter::getSpotterDataByIdent($_GET['ident'],$limit_start.",".$absolute_difference, $_GET['sort']);
	} else {
		$spotter_array = Spotter::getSpotterDataByIdent($_GET['ident'],$limit_start.",".$absolute_difference);
	}
	
	
	if (!empty($spotter_array))
	{
	    $title = 'Detailed View for '.$spotter_array[0]['ident'];
			require('header.php');
	    
	    date_default_timezone_set('America/Toronto');
	    
	      print '<div class="info column">';
	      	print '<h1>'.$spotter_array[0]['ident'].'</h1>';
	      	print '<div><span class="label">Ident</span>'.$spotter_array[0]['ident'].'</div>';
	      	print '<div><span class="label">Airline</span><a href="'.$globalURL.'/airline/'.$spotter_array[0]['airline_icao'].'">'.$spotter_array[0]['airline_name'].'</a></div>'; 
	      	print '<div><span class="label">Flight History</span><a href="http://flightaware.com/live/flight/'.$spotter_array[0]['ident'].'" target="_blank">View the Flight History of this callsign</a></div>';       
				print '</div>';
	
			include('ident-sub-menu.php');
	  
	  print '<div class="table column">';
		  
		  print '<p>The table below shows the detailed information of all flights with the ident/callsign of <strong>'.$spotter_array[0]['ident'].'</strong>.</p>';
		  
		  include('table-output.php'); 
		 
		  print '<div class="pagination">';
		  	if ($limit_previous_1 >= 0)
		  	{
		  	print '<a href="'.$page_url.'/'.$limit_previous_1.','.$limit_previous_2.'/'.$_GET['sort'].'">&laquo;Previous Page</a>';
		  	}
		  	if ($spotter_array[0]['query_number_rows'] == $absolute_difference)
		  	{
		  		print '<a href="'.$page_url.'/'.$limit_end.','.$limit_next.'/'.$_GET['sort'].'">Next Page&raquo;</a>';
		  	}
		  print '</div>';
	
	  print '</div>';
	  
	  
	  
	} else {
	
		$title = "Ident";
		require('header.php');
		
		print '<h1>Error</h1>';
	
	  print '<p>Sorry, this ident/callsign is not in the database. :(</p>'; 
	}
}
?>

<?php
require('footer.php');
?>