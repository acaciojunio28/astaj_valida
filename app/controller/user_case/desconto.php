<?php
    class DescontoTotal{

        function desconto_apenas_titular($desconto_total_titular, $beneficiario){
            if($beneficiario == "T"){
                $desconto_total_titular = $desconto_total_titular;
            }else{
                $desconto_total_titular = '-';
            }
            return $desconto_total_titular;
        }
    }