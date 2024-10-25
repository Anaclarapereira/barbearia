<?php
    include "conexao.php";
    $sql = "SELECT * FROM usuarios  ";
    
    $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) { 
    echo "<pre>";
    print_r([
        'result' => $row
    ]);
}
exit;  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
<h6>Striped Rows</h6>
<p>The .table-striped class adds zebra-stripes to a table:</p>            
<table class="table table-striped">
    <thead>
    <tr>
        <th>nome</th>
        <th>email</th>
        <th>nome_do_banco</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
        <?php
    
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { 
                    echo "
                        <tr>
                            <td>".$row['nome']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['nome_do_banco']."</td>
                            <td>"."</td>
                            <td><a href='index.php?id=".$row['id_usuario']."' class='btn btn-warning'>Editar</a></td>
                        </tr>";
                }
            }
        ?>
    </tbody>
</table>
</div>

</body>
</html>
            