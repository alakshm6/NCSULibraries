<?php

function fetchAndUpdateStudentInfo($query,$conn,$nextPage){
	$stid = oci_parse($conn, $query);
	var_dump($query);
	oci_execute($stid);

	echo "<form action=\"$nextPage?user=STUDENT\">";
	echo "<table border='1'>\n";
	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
		echo "<tr>\n";
		$i =1;
		foreach ($row as $item) {
			$column_name  = oci_field_name($stid, $i);
			if($column_name == "UnityId" || $column_name == "Type"|| $column_name == "Balance" ){
				echo "    <td>" . "$item". "</td>\n";
			}else{
			echo "    <td>" . "<input type=\"text\" name=\"$column_name\" value=\"$item\" >". "</td>\n";
			}
			$i++;
		}
		echo "</tr>\n";
	}
	echo "</table>\n";
	echo "<input type=\"submit\" value=\"Update\">";
	echo "</form>";
	
}

?>