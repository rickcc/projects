<table cellpadding = "0" cellspacing = "0">

<?php 

$headers = array();	

foreach ($findResults[0] as $outputTable): 
	foreach (array_keys($outputTable) as $key): 
		array_push($headers, $key);
	endforeach;
endforeach;

echo $this->Html->tableHeaders($headers);

foreach ($findResults as $output):

	$rows = array();

	foreach (array_values($output) as $val): 
		foreach (array_values($val) as $val2): 
			array_push($rows, $val2);
		endforeach; 
	endforeach; 

	echo $this->Html->tableCells($rows);
	
endforeach; 
?>

</table>