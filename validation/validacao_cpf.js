function TestaCPF() {
        var strCPF = $('#funcionario_cpf').val();

        var resto2;
        var soma1;
        var soma2;
        var num1 = parseInt(strCPF.charAt(0));
        var num2 = parseInt(strCPF.charAt(1));
        var num3 = parseInt(strCPF.charAt(2));
        var num4 = parseInt(strCPF.charAt(4));
        var num5 = parseInt(strCPF.charAt(5));
        var num6 = parseInt(strCPF.charAt(6));
        var num7 = parseInt(strCPF.charAt(8));
        var num8 = parseInt(strCPF.charAt(9));
        var num9 = parseInt(strCPF.charAt(10));
        var num10 = parseInt(strCPF.charAt(12));
        var num11 = parseInt(strCPF.charAt(13));
   
      
        if (num1 == num2 && num2 == num3 && num3 == num4 && num4 == num5 && num5 == num6 && num6 == num7 && num7 == num8 && num8 == num9 && num9 == num10 && num10 == num11){
            document.getElementById("funcionario_cpf").setCustomValidity('Invalid');
            return false;
        }
      
        var soma1 = (num1 * 10) + (num2 * 9) + (num3 * 8) + (num4 * 7) + (num5 * 6) + (num6 * 5) + (num7 * 4) + (num8 * 3) + (num9 * 2);
     
        var resto1 = (soma1 * 10) % 11;
      
        if (resto1 == 10){
            resto1 = 0;
            alert("funcionou");
        }
        soma2 = (num1 * 11) + (num2 * 10) + (num3 * 9) + (num4 * 8) + (num5 * 7) + (num6 * 6) + (num7 * 5) + (num8 * 4) + (num9 * 3) + (num10 * 2);
      
        resto2 = (soma2 * 10) % 11;
      
        if ((resto1 == num10) && (resto2 == num11)){
            document.getElementById("funcionario_cpf").setCustomValidity('');
          
        }else{
            document.getElementById("funcionario_cpf").setCustomValidity("Invalid");
          
        }
     
    }
