
    function delete_user(id_user, matricula, beneficiario, ativo){
        //alert(id_user)
        
 
        //solicitar confirmação
        if(ativo == 'Inativo'){
            var confirmacao = confirm('Deseja realmente ativar?', 'Confirmarção');
        }else{
            var confirmacao = confirm('Deseja realmente inativar?', 'Confirmarção');
        }
        //se confirmação for positiva chamar url app/controller/delete_controller.php
        if (confirmacao == true){
            var url = "app/controller/delete_controller.php?id=" + id_user + "&matricula=" + matricula + "&beneficiario=" + beneficiario;
            url = url + "&ativo=" + ativo
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
    // Show inativos.
    
    if ($('#showInativos').checked){
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) != 0)
        });
    }else{
        var value = "Inativo".toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) <= 0)
        });
        //alert(value);
    }
    $('#showInativos').on('change', function(){
        if(this.checked)
            {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) != 0)
                });
            }
        else{
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) <= 0)
            });
            
        }
    });
    });
    function detalhar(id){

        window.location = "/astaj_valida/listar?id="+id;
     
    };
    function show_modal(){
        $(document).ready(function(){
            $('#myModal').modal('show');
        });
    };

    

