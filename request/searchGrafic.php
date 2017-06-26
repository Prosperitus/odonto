<?php
	require_once "../database/attendance.php";


	$option = $_GET['grafic'];
	if($option == '1'){
		$db = new AttendanceDb();
		$countStatus = $db->searchCountStatus();
		$data = array('count' => [] , 'name' => []);
		foreach($countStatus as $count){
			array_push($data['count'],$count->count);
			array_push($data['name'],$count->name);
		}
		$json = json_encode($data);
		echo $json;
	}
