<?php
$file="patients_dataset_csv/patient1_accelerometer.csv";
$csv= file_get_contents($file);
$array = array_map("str_getcsv", explode("\n", $csv));
$json = json_encode($array);
echo '<script>var json1='.print_r($json).';</script>';
?>
<script type="text/javascript">
	var obj1=JSON.parse(json1);
	document.write("-----------------------------------------------------");
	document.write("</br>");
	document.write(obj1);
</script>