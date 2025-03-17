<h1>Listar Estados</h1>
<?php
include("config.php");
$sql = "SELECT * FROM estado";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    echo "<table class='table table-bordered'>";
    echo "<tr><th>ID</th><th>Nome do Estado</th><th>Ações</th></tr>";
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>{$row->IDstate}</td>";
        echo "<td>{$row->stateName}</td>";
        echo "<td>
                <button onclick=\"location.href='?page=edit-state&id={$row->IDstate}';\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save-state&acao=excluir&id={$row->IDstate}';}\" class='btn btn-danger'>Excluir</button>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p class='alert alert-danger'>Nenhum estado encontrado!</p>";
}
?>