$(function() {

    $("#name_error_message").hide();
    $("#surname_error_message").hide();
    $("#password_error_message").hide();
    $("#retype_password_error_message").hide();
    $("#email_error_message").hide(); 
    
    
    var error_name = false;
    var error_surname = false;
    var error_password = false;
    var error_retype_password = false;
    var error_email = false;
    
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
    
    function checkName() {
    
        var name = $("#funcionario_nome").val();
    
        if(name == ""){
        $("#name_error_message").html("O espaco deve ser preenchido");
        $("#name_error_message").show();
        error_username = true;
        }else {
        /^[a-zA-Z]*$/.test(name);
        $("#name_error_message").hide();
        }
    }
    
    function checkSurname() {
    
        var name = $("#funcionario_sobrenome").val();
    
        if(name == ""){
        $("#surname_error_message").html("O espaco deve ser preenchido");
        $("#surname_error_message").show();
        error_username = true;
        }else {
        /^[a-zA-Z]*$/.test(name);
        $("#surname_error_message").hide();
        }
    }

    function checkPassword(){
        
        var passLength = $("#funcionario_senha").val().length;
    
        if("#funcionario_senha" == ""){
        $("#password_error_message").html("O espaco deve ser preenchido");
        $("#password_error_message".show();
        error_password = true;
        }else if(passLength < 6){
        $("#password_error_message").html("A senha deve conter pelo menos 6 caracteres");
        $("#password_error_message".show();
        error_password = true;
        }else{
        $("#password_error_message".hide();
        }
    }
        
    function checkRetypePassword(){
    
        var password = $("#funcionario_senha").val();
        var retypePassword = $("#funcionario_confirma_senha").val();
        
        if (password != retypePassword) {
            $("#retype_password_error_message").html("As senhas sao diferentes modafoca");
            $("#retype_password_error_message").show();
            error_retype_password = true;
        }else{
            $("#retype_password_error_message").hide();
        }
    }
    
    function checkEmail(){
        
        var pattern = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
        
        if(pattern.test($("#funcionario_email").val())) {
            $("#emai_error_message").hide();
        }else{
            $("#emai_error_message").html("Email invalido");
            $("#emai_error_message").show();
            error_email = true;
        }
        
    
    
         
    
    
});

