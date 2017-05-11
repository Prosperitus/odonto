
$(function() {


    $("#name_error_message").hide();
    $("#surname_error_message").hide();
    $("#cpf_error_message").hide();


    var error_name = false;
    var error_surname = false;
    var error_cpf = false;

    $("#funcionario_nome").focusout(function() {

        checkName();

    });

    $("#funcionario_sobrenome").focusout(function() {

        checkSurname();

    });

    /*$("#button").submit(function(){
     validateForm();

     });
     $("#funcionario_cpf").focusout(function() {

     checkCpf();


     });*/

    function checkName() {

        var name = $("#funcionario_nome").val();

        if (name === "") {
            //$("#name_error_message").html("O espaco deve ser preenchido");
            //$("#name_error_message").show();
            error_name = true;
        } else {
            if(/^[a-zA-Z]*$/.test(name)){
				$("#name_error_message").html("nome correto!");
				$("#funcionario_nome").css("border-bottom", "2px solid rgb(76, 175, 80)");
				$("#name_error_message").css("color", "rgb(76, 175, 80)");
                $("#name_error_message").show();
            }else{
                $("#name_error_message").html("O nome deve conter apenas letras");
				$("#funcionario_nome").css("border-bottom", "2px solid rgb(244, 67, 54)");
				$("#name_error_message").css("color", "rgb(244, 67, 54)");
                $("#name_error_message").show();
                error_name = true;

            }
        }
    }

    function checkSurname() {

        var surname = $("#funcionario_sobrenome").val();

        if(surname === ""){
            $("#surname_error_message").html("O espaco deve ser preenchido");
            $("#surname_error_message").show();
            error_surname = true;
        } else {
            if(/^[a-zA-Z]*$/.test(surname)){
                $("#surname_error_message").hide();
            }else{
                $("#surname_error_message").html("O nome nao pode conter numeros");
                $("#surname_error_message").show();
                error_surname = true;
            }
        }
    }

    function checkCpf(){

     var strCPF = $("#funcionario_cpf").val();
     var Soma;
     var Resto;
     Soma = 0;
     if (strCPF == "00000000000") return false;

     for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
     Resto = (Soma * 10) % 11;

     if ((Resto == 10) || (Resto == 11))  Resto = 0;
     if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

     Soma = 0;
     for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
     Resto = (Soma * 10) % 11;

     if ((Resto == 10) || (Resto == 11))  Resto = 0;
     if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
     return true;
     }


     }

    function validateForm(){
        if(error_name === false || error_surname === false || error_password ===  false || error_retype_password == false || error_email === false ){
            alert("Falha na validacao");
            window.history.back();
            return false;
        }
        alert("Valido!");
        return true;
    }
});
