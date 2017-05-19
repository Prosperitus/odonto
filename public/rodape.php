
  <!--FOOTER-->
  <footer class="page-footer light-blue" style="bottom:0%; width:100%;position:fixed; clear:both">
    <div class="footer-copyright">
      <div class="container">
        <img src="../images/viber.png">&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="../images/tablet.png">&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="../images/facebook.png">&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="../images/instagram.png">&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="../images/close-envelope.png">&nbsp;&nbsp;&nbsp;&nbsp;     
        <a class="grey-text text-lighten-4 right" href="#!">© 2017 EasyOdonto Solutions</a>
      </div>
    </div>
  </footer>

  <!--SCRIPSTS-->
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

