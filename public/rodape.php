  <!--FOOTER-->
        <footer class="page-footer light-blue">
          <div class="footer-copyright">
            <div class="container">
                <a  class="grey-text text-lighten-4 left" href=""><b>Contato &nbsp;&nbsp;</b></a>
                <a class="grey-text text-lighten-4 left" href=""><b>Facebook &nbsp;&nbsp;</b></a>
                <a class="grey-text text-lighten-4" left href=""><b>Instagram &nbsp;&nbsp;</b></a>
                 <a class="grey-text text-lighten-4 left" href=""><b>Manual &nbsp;&nbsp;</b></a>
                <a class="grey-text text-lighten-4" left href=""><b>Email &nbsp;&nbsp;</b></a>
              
            <a class="grey-text text-lighten-4 right" href="#!">© 2017 easyodonto solutions® - Todos os direitos reservados</a>
            </div>
          </div>
        </footer>
<!--SCRIPSTs-->
    <script>
      $('.datepicker').pickadate({
	    	monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
		monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
		weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
		weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
		today: 'Hoje',
		clear: 'Limpar',
		close: 'Pronto',
		labelMonthNext: 'Próximo mês',
		labelMonthPrev: 'Mês anterior',
		labelMonthSelect: 'Selecione um mês',
		labelYearSelect: 'Selecione um ano',
        	selectYears:100,
		max:$.now(),
		format: 'dd !de mmmm !de yyyy',
		formatSubmit: 'yyyy-mm-dd'
      });
      $(document).ready(function() {
      $('select').material_select();
      });
	  $(document).ready(function() {
      $('#example').DataTable();
      } );

    </script>
   

   <script src="../js/mask.js"></script>
   <script src="../js/mask_funcionario.js"></script>
   <script src="../js/mask_paciente.js"></script>
   <script src="../js/mask_hospital.js"></script>

  </body>
</html>
