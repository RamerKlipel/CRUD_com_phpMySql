<h1>Listar Cidades</h1>
<?php
include("config.php");
$sql = "SELECT c.IDcity, c.cityName, e.stateName 
        FROM cidade c 
        JOIN estado e ON c.IDstate = e.IDstate";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    echo "<table class='table table-bordered'>";
    echo "<tr><th>ID</th><th>Nome da Cidade</th><th>Estado</th><th>Ações</th></tr>";
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>{$row->IDcity}</td>";
        echo "<td>{$row->cityName}</td>";
        echo "<td>{$row->stateName}</td>";
        echo "<td>
                <button onclick=\"location.href='?page=edit-city&id={$row->IDcity}';\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save-city&acao=excluir&id={$row->IDcity}';}\" class='btn btn-danger'>Excluir</button>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p class='alert alert-danger'>Nenhuma cidade encontrada!</p>";
}
?>