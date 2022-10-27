  <option selected="selected">---Chưa chọn Huyện---</option>


<?php

	include("class/php.php");
	$sql="SELECT *FROM `tokhaiyte` WHERE quan =".$_POST["quanid"];
	$query=$conn->prepare($sql);
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $row){
	echo '<option value="'.$row["Tenphuong"].'">'.$row["Tenphuong"].'</option>';											
}
		
	
												
												?>	