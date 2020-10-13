<?php
$data = json_decode(file_get_contents("./data.json"), true);

$keys = array_keys($data);
shuffle($keys);

$rows = [];
for ($i=0; $i < 4; $i++)
	array_push($rows, printRow($i, $data, $keys));
// shuffle($rows);



function printNames($arr){
	$ret = "";
	foreach($arr as $v)
		$ret .= "<th>".$v."</th>";

	return "<tr class='headrow'>".$ret."</tr>";
};

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
