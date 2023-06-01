<?php
$arquivo = fopen("- https://docs.google.com/spreadsheets/d/e/2PACX-1vR33nFrFrdjk5zx0TSgbK2uC0ouPNoktb3vsgs1dBeNi6rURBtRIkK8c-SBcREAMGcE77OdEt4b0Sxq/pub?gid=2038837695&single=true&output=csv", "r");
$row = 0;
while ($line = fgetcsv($arquivo, 1000, ",")) {
	if ($row++ == 0) {
		continue;
	}
	
	$teste[] = [
		'nome' => $line[0],
		'site' => $line[1],
		'telefone' => $line[2],
		'idade' => $line[3]
	];
}
print_r($teste);
fclose($arquivo);
?>