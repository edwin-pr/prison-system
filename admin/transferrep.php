<?php

// Database Connection

$host = "localhost";
$uname = "prison";
$pass = "prison123.";
$database = "prison_system";

$connection = mysqli_connect($host, $uname, $pass, $database);

//echo mysqli_error();




// Fetch Record from Database

$output			= "";
$table 			= "transfer"; // Enter Your Table Name
$sql 			= mysqli_query($connection, "SELECT * from $table");

//get the number of fields in the result set
$columns_total 	= mysqli_num_fields($sql);

// Get The Field Name

for ($i = 0; $i < $columns_total; $i++) {
	$heading	=	mysqli_field_name($sql, $i);
	$output		.= '"' . $heading . '",';
}
$output .= "\n";

function mysqli_field_name($result, $field_offset)
{
	$properties = mysqli_fetch_field_direct($result, $field_offset);
	return is_object($properties) ? $properties->name : false;
}

// Get Records from the table

while ($row = mysqli_fetch_array($sql)) {
	for ($i = 0; $i < $columns_total; $i++) {
		$output .= '"' . $row["$i"] . '",';
	}
	$output .= "\n";
}

// Download the file

$filename =  "transfer of prisonners_report.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename=' . $filename);

echo $output;
exit;
