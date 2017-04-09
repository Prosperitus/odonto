<?php 
	require_once "cabecalho.php";
	require_once "../database/dbpatient.php";

	$dbpatient = new DbPatient();
	$patients = $dbpatient->searchPatientAll();
?>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
  <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Endereço</th>
                <th>Cidade</th>
				<th>Estado</th>
				<th>Plano de Saúde </th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Endereço</th>
                <th>Cidade</th>
				<th>Estado</th>
				<th>Plano de Saúde</th>
            </tr>
        </tfoot>
        <tbody>
			<?php foreach($patients as $patient){
		echo    '<tr>
					<td>'.$patient->name.' '.$patient->surname.'</td>
					<td>'.$patient->social_security.'</td>
					<td>'.$patient->birthdate.'</td>
					<td>'.$patient->address.'</td>
					<td>'.$patient->city.'</td>
					<td>'.$patient->state.'</td>
					<td>'.$patient->health_insurance.'</td>
				</tr>';
			}?>
        </tbody>
    </table>
 <?php require_once "rodape.php";