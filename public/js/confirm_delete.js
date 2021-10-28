
    function delete_user(id_user){
        //alert(id_user)
        
 
        //solicitar confirmação
        
        var confirmacao = confirm('Deseja realmente excluir?', 'Title is optional');

        //se confirmação for positiva chamar url app/controller/delete_controller.php
        if (confirmacao == true){
            var url = "app/controller/delete_controller.php?id=" + id_user;
            $.get(url);
            location.reload();
        }
    };
 
   