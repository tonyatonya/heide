<?php
	session_start();
	
	/** ดูว่ามีค่าภาษาหรือไม่ แล้วค่าภาษานั้นเป็นค่าอะไร **/
	if($_SESSION['lang']){
		$_SESSION['lang'];
	
	/** ถ้ามีการคลิกเปลี่ยนภาษาให้เข้ามาเปลี่ยนค่า SESSION **/
	} else if($_GET['lang']){
		$_SESSION['lang'] = $_GET['lang'];

	/** ถ้าไม่มีค่าใดเข้ามาเลยให้ค่าตั้วต้นเป็นภาษาไทย **/
	} else {
		$_SESSION['lang'] = 'th';
	}
?>