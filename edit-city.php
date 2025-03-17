<?php
include("config.php");
$id = $conn->real_escape_string($_REQUEST["id"]); // chama o id selecionado para ser editado
$sql = "SELECT * FROM cidade WHERE IDcity='{$id}'";
$res = $conn->query($sql);
$row = $res->fetch_object();

$sql_estados = "SELECT IDstate, stateName FROM estado";
$result_estados = $conn->query($sql_estados);
?>

<h1>Editar Cidade</h1>
<form action="?page=save-city" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->IDcity; ?>"> <!-- esconde da URL os dados -->
    <div class="mb-3">
        <label>Nome da Cidade</label>
        <input type="text" name="nomecidade" value="<?php echo $row->cityName; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Estado</label>
        <select name="estado" class="form-control" required>
            <option value="">Selecione um estado</option>
            <?php
            while ($estado = $result_estados->fetch_assoc()) {
                $selected = ($estado['IDstate'] == $row->IDstate) ? 'selected' : '';
                echo "<option value='{$estado['IDstate']}' {$selected}>{$estado['stateName']}</option>";
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>