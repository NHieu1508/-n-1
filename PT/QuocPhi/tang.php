<option selected="selected">---Chưa chọn BV---</option>


<?php

	include("Php/php2.php");
	$sql="SELECT *FROM `benhvien` WHERE Sotang =".$_POST["tangid"];
	$query=$conn->prepare($sql);
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row){
	echo '<option value="'.$row["Tenbenhvien"].'">'.$row["Tenbenhvien"].'</option>';											
}
		
	
												
												?>	