
    function delete_user(id_user){
        //alert(id_user)
        
 
        //solicitar confirmação
        
        var confirmacao = confirm('Deseja realmente desativar? Todos os cadastros com a mesma matrícula também serão desativados.', 'Title is optional');

        //se confirmação for positiva chamar url app/controller/delete_controller.php
        if (confirmacao == true){
            var url = "app/controller/delete_controller.php?id=" + id_user;
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
    /**$(document).ready(function(){
        alert('teste');
    });**/
