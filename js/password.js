
    function myFunction() {
        var pass1 = document.getElementById("funcionario_senha").value;
        var pass2 = document.getElementById("funcionario_confirma_senha").value;
        if (pass1 != pass2) {
            alert("Passwords Do not match");
            
        }
        else {
            alert("Passwords Match");
        }
    }


