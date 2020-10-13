<?php



$data = json_decode('{
	"Color" : ["Blue", "Red", "Orange", "Green"],
	"Number" : [12, 16, 18, 19],
	"Name" : ["Sarah", "Adam", "Ben", "John"],
	"Animal" : ["Dog", "Cat", "Mouse", "Tiger"]
}', true);


$keys = array_keys($data); // Keys keys keys
shuffle($keys); // Shuffle


$rows = [];
for ($i=0; $i < 4; $i++)
	array_push($rows, printRow($i, $data, $keys)); // Building row strings



// just prints an array as columb headers
function printNames($arr){
	$ret = "";
	foreach($arr as $v)
		$ret .= "<th>".$v."</th>";

	return "<tr class='headrow'>".$ret."</tr>";
};

// prints $i deep in $arr according the order of $keys
function printRow($i, $arr, $keys){
	$row = "";
	foreach($keys as $k){
		if(array_key_exists($i, $arr[$k]))
			$row .= '<td>'.$arr[$k][$i].'</td>';
		else continue;
	}
	return "<tr class='datarow'>$row</tr>";
}



?>
