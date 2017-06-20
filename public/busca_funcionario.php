<?php 
	require_once "cabecalho.php";
	require_once "../database/employee.php";
	
	$dbemployee = new EmployeeDb();
	$employees = $dbemployee->searchAll();
	$emp = null;
?>
	<div class="margin_small main">
		</br>
		<p class="bold tituloAzul">Click na linha do funcionário para ver suas informações:</p>
			<a href="cadastro_funcionario.php">
			<div class="col s6 m4 posicaoCardCadastro">
			  <div class="card">
				<div class="card-image" id="CardCadastro">
				  <img src="../images/medico.jpg">
				  <div id="divCardCadastro" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons iconeCardCadastro">add</i></div>
				</div>
			   </div>
			</div>
			</a>
	<div id="dialogEmployee" title="Dados do Funcionário">	</div>
	<input type="checkbox" value="clinica" checked />
		<table id="funcionarioDatatable" class="hover row-border" cellspacing="0" width="100%;">
	        <thead>
	            <tr>
	                <th>Nome</th>
	                <th>CPF</th>
					<th>E-mail</th>
	                <th>CRO</th>
					<th>Número de Matrícula</th>
	            </tr>
	        </thead>
	        <tfoot>
	            <tr>
	                <th>Nome</th>
	                <th>CPF</th>
					<th>E-mail</th>
	                <th>CRO</th>
					<th>Número de Matrícula</th>
	            </tr>
	        </tfoot>
	        <tbody>
				<?php foreach($employees as $employee){ ?>
					<tr class="listPatient" onclick="visualizarFuncionario(<?=$employee->id?>)">
						<td><?=$employee->name.' '.$employee->surname?></td>
						<td><?=$employee->social_security?></td>
						<td><?=$employee->email?></td>
						<td><?=$employee->cro?></td>
						<td><?=$employee->registration?></td>
					</tr>
				<?php } ?>
	        </tbody>
	    </table>
	</div>
<?php require_once "rodape.php";
