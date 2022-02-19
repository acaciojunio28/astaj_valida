
    function delete_user(id_user, matricula, beneficiario){
        //alert(id_user)
        
 
        //solicitar confirmação
        
        var confirmacao = confirm('Deseja realmente desativar?', 'Confirmarção');

        //se confirmação for positiva chamar url app/controller/delete_controller.php
        if (confirmacao == true){
            var url = "app/controller/delete_controller.php?id=" + id_user + "&matricula=" + matricula + "&beneficiario=" + beneficiario;
            $.get(url);
            location.reload();
        }
    };
    

    $(document).ready(function(){
    $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });

