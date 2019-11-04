<?php  
	if(isset($_GET["id"])){
		$sqlDel = "DELETE FROM tbl_category where cat_id = ".$_GET["id"];
		$conn->exec($sqlDel);
        header("location:index.php?view=listcategory");
	}
?>