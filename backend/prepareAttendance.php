<?php 

	function prepareAttendance($attendance){
		if($attendance->status == "In_evaluation"){
			
			return '<script>
			$(document).ready(function(){
			$("#avaliacao").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content">'.$attendance->observacoes.'</div>\'
			+ \'</div>\');
			});</script>';
		}
		if($attendance->status == "In_reavaluation"){
			return '<script>
			$(document).ready(function(){
			$("#reavaliacao").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content">'.$attendance->observacoes.'</div>\'
			+ \'</div>\');
			});</script>';
		}
		if($attendance->status == "In_approval"){
			return '<script>
			$(document).ready(function(){
			$("#aprovacao").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content">'.$attendance->observacoes.'</div>\'
			+ \'</div>\');
			});</script>';
		}
		if($attendance->status == "In_budget"){
			return '<script>
			$(document).ready(function(){
			$("#orcamento").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>\'
			+ \'</div>\');
			});</script>';
		}
		if($attendance->status == "In_supervison"){
			return '<script>
			$(document).ready(function(){
			$("#acompanhamento").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content">'.$attendance->observacoes.'</div>\'
			+ \'</div>\');
			});</script>';
		}
		if($attendance->status == "Concluded"){
			return '<script>
			$(document).ready(function(){
			$("#concluido").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content">'.$attendance->observacoes.'</div>\'
			+ \'</div>\');
			});</script>';
		}
	}