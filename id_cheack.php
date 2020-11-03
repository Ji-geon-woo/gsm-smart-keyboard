<?php
include "db.php";
	if($_POST['userid'] != NULL){
	$id_check = mq("select * from member where id='{$_POST['userid']}'");
	$id_check = $id_check->fetch_array();

	if($id_check >= 1){
		echo "*존재하는 아이디입니다.";
	} else {
		echo "*사용 가능한 아이디입니다.";
		?>
		<script> document.getElementById("ppap1").style.backgroundColor = "#000000"; </script>
		<?php
	}
} ?>
