<?php
include("config.php");
$id = $conn->real_escape_string($_REQUEST["id"]);
$sql = "SELECT * FROM estado WHERE IDstate='{$id}'";
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<h1>Editar Estado</h1>
<form action="?page=save-state" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->IDstate; ?>">
    <div class="mb-3">
        <label>Nome do Estado</label>
        <input type="text" name="nomeestado" value="<?php echo $row->stateName; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>