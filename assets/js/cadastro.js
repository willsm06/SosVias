document.addEventListener("DOMContentLoaded", function() {
    var cpfInput = document.getElementById("txtCpf");
    var telInput = document.getElementById("txtTel");
    var cpfAviso = document.getElementById("cpfAviso");
    var telAviso = document.getElementById("telAviso");
    
    var form = document.forms["formulario"];
    var submitButton = form.querySelector("input[type=submit]");

    cpfInput.addEventListener("input", function() {
        var value = cpfInput.value.replace(/\D/g, ''); 
        var formattedValue = formatCpf(value);
        cpfInput.value = formattedValue;

        if (value.length !== 11) {
            cpfAviso.textContent = "CPF incorreto. Deve conter 11 dígitos.";
        } else {
            cpfAviso.textContent = "";
        }
    });

    telInput.addEventListener("input", function() {
        var value = telInput.value.replace(/\D/g, ''); 
        var formattedValue = formatTelefone(value);
        telInput.value = formattedValue;

        if (value.length !== 10 && value.length !== 11) {
            telAviso.textContent = "Telefone incorreto. Deve conter 10 ou 11 dígitos.";
        } else {
            telAviso.textContent = "";
        }
    });

    function formatCpf(value) {
        return value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
    }

    function formatTelefone(value) {
        if (value.length === 10) {
            return value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
        } else if (value.length === 11) {
            return value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        }
        return value; 
    }
});
