
$(function() {


    $("#name_error_message").hide();
    $("#surname_error_message").hide();
    $("#password_error_message").hide();
    $("#retype_password_error_message").hide();
    $("#email_error_message").hide();
    $("#cpf_error_message").hide();


    var error_name = false;
    var error_surname = false;
    var error_password = false;
    var error_retype_password = false;
    var error_email = false;
    //var error_cpf = false;

    $("#funcionario_nome").focusout(function() {

        checkName();

    });

    $("#funcionario_sobrenome").focusout(function() {

        checkSurname();

    });

    $("#funcionario_senha").focusout(function() {

        checkPassword();


    });

    $("#funcionario_confirma_senha").focusout(function() {

        checkRetypePassword();

    });

    $("#funcionario_email").focusout(function() {

        checkEmail();


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
                $("#name_error_message").show();
            }else{
                $("#name_error_message").html("O nome deve conter apenas letras");
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

    function checkPassword(){

        var passLength = $("#funcionario_senha").val().length;
        var password = $("#funcionario_senha").val();

        if(password === ""){
            $("#password_error_message").html("O espaco deve ser preenchido");
            $("#password_error_message").show();
            error_password = true;
        }else if(passLength < 6){
            $("#password_error_message").html("A senha deve conter pelo menos 6 caracteres");
            $("#password_error_message").show();
            error_password = true;
        }else{
            $("#password_error_message").hide();
        }
    }

    function checkRetypePassword(){

        var password = $("#funcionario_senha").val();
        var retypePassword = $("#funcionario_confirma_senha").val();

        if (password !== retypePassword) {
            $("#funcionario_confirma_senha").attr("title","As senhas devem ser idênticas");
            $("#funcionario_confirma_senha").addClass("invalid");
	    //$("#funcionario_confirma_senha").css("border-bottom", "2px solid #F44336");
	    //$("#retype_password_error_message").show();
            //error_retype_password = true;


        }else{
            $("#retype_password_error_message").hide();

        }
    }

    function checkEmail(){

        var pattern = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

        if (!pattern.test($("#funcionario_email").val())) {
            $("#email_error_message").html("Email invalido");
            $("#email_error_message").show();
            error_email = true;
        } else {
            $("#email_error_message").hide();
        }
    }

    /*function checkCpf(){

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
    }*/
});



