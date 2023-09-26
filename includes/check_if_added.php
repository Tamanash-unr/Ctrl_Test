<?php

	function check_if_added_to_cart($item_id){
		$con= mysqli_connect("localhost", "root", "", "lifestyle_store") or die(mysqli_error($con));
		$user_id= $_SESSION['id'];
		
		$query="select * from users_items where item_id=$item_id and user_id=$user_id and status= 'Added to Cart'";
		$result= mysqli_query($con, $query) or die(mysqli_error($con));
		
		if(mysqli_num_rows($result) >= 1){
			return 1;
		} else {
			return 0;
		}
	}

?>