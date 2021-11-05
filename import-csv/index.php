<?php
use Phppot\DataSource;

require_once 'DataSource.php';
$db = new DataSource();
$conn = $db->getConnection();

if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ";")) !== FALSE) {
            
            $matricula = "";
            if (isset($column[0])) {
                $matricula = mysqli_real_escape_string($conn, $column[0]);
            }
            $nome = "";
            if (isset($column[1])) {
                $nome = mysqli_real_escape_string($conn, $column[1]);
            }
			$cpf = "";
            if (isset($column[2])) {
                $cpf = mysqli_real_escape_string($conn, $column[2]);
            }
			$tipo_de_plano = "";
            if (isset($column[3])) {
                $tipo_de_plano = mysqli_real_escape_string($conn, $column[3]);
            }
			$beneficiario = "";
            if (isset($column[4])) {
                $beneficiario = mysqli_real_escape_string($conn, $column[4]);
            }
			$idade = "";
            if (isset($column[5])) {
                $idade = mysqli_real_escape_string($conn, $column[5]);
            }
			$adesao = "";
            if (isset($column[6])) {
                $adesao = mysqli_real_escape_string($conn, $column[6]);
            }
			$desconto = "";
            if (isset($column[7])) {
                $desconto = mysqli_real_escape_string($conn, $column[7]);
            }
			$desconto_total = "";
            if (isset($column[8])) {
                $desconto_total = mysqli_real_escape_string($conn, $column[8]);
            }
			$data_nascimento = "";
            if (isset($column[9])) {
                $data_nascimento = mysqli_real_escape_string($conn, $column[9]);
            }
            
            
            $sqlInsert = "INSERT into astaje_valida_cadastro (matricula,nome,cpf,tipo_de_plano,beneficiario,idade,adesao,desconto,desconto_total,data_nascimento) values (?,?,?,?,?,?,?,?,?,?)";
            $paramType = "ssssssssss";
            $paramArray = array(
                $matricula,
                $nome,
				$cpf,
				$tipo_de_plano,
				$beneficiario,
				$idade,
				$adesao,
				$desconto,
				$desconto_total,
				$data_nascimento

            );
            $insertId = $db->insert($sqlInsert, $paramType, $paramArray);
            
            if (! empty($insertId)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
<script src="jquery-3.2.1.min.js"></script>

<style>
body {
    font-family: Arial;
    width: 550px;
}

.outer-scontainer {
    background: #F0F0F0;
    border: #e0dfdf 1px solid;
    padding: 20px;
    border-radius: 2px;
}

.input-row {
    margin-top: 0px;
    margin-bottom: 20px;
}

.btn-submit {
    background: #333;
    border: #1d1d1d 1px solid;
    color: #f0f0f0;
    font-size: 0.9em;
    width: 100px;
    border-radius: 2px;
    cursor: pointer;
}

.outer-scontainer table {
    border-collapse: collapse;
    width: 100%;
}

.outer-scontainer th {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

.outer-scontainer td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

#response {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 2px;
    display: none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    $("#frmCSVImport").on("submit", function () {

	    $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
        	    $("#response").addClass("error");
        	    $("#response").addClass("display-block");
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>
</head>

<body>
    <h2>Import CSV file into Mysql using PHP</h2>

    <div id="response"
        class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>">
        <?php if(!empty($message)) { echo $message; } ?>
        </div>
    <div class="outer-scontainer">
        <div class="row">

            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport"
                enctype="multipart/form-data">
                <div class="input-row">
                    <label class="col-md-4 control-label">Choose CSV
                        File</label> <input type="file" name="file"
                        id="file" accept=".csv">
                    <button type="submit" id="submit" name="import"
                        class="btn-submit">Import</button>
                    <br />

                </div>

            </form>

        </div>
               <?php
            $sqlSelect = "SELECT * FROM astaje_valida_cadastro";
            $result = $db->select($sqlSelect);
            if (! empty($result)) {
                ?>
            <table id='userTable'>
            <thead>
                <tr>
                    <th>matricula</th>
                    <th>nome</th>
					<th>cpf</th>
					<th>tipo_de_plano</th>
					<th>beneficiario</th>
					<th>idade</th>
					<th>adesao</th>
					<th>desconto</th>
					<th>desconto_total</th>
					<th>data_nascimento</th>



                </tr>
            </thead>
<?php
                
                foreach ($result as $row) {
                    ?>
                    
                <tbody>
                <tr>
                    <td><?php  echo $row['matricula']; ?></td>
                    <td><?php  echo $row['nome']; ?></td>
					<td><?php  echo $row['cpf']; ?></td>
					<td><?php  echo $row['tipo_de_plano']; ?></td>
					<td><?php  echo $row['beneficiario']; ?></td>
					<td><?php  echo $row['idade']; ?></td>
					<td><?php  echo $row['adesao']; ?></td>
					<td><?php  echo $row['desconto']; ?></td>
					<td><?php  echo $row['desconto_total']; ?></td>
					<td><?php  echo $row['data_nascimento']; ?></td>

                </tr>
                    <?php
                }
                ?>
                </tbody>
        </table>
        <?php } ?>
    </div>

</body>

</html>