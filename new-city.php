<h1>Nova Cidade</h1>
<?php
require 'config.php';
$sql = "SELECT IDstate, stateName FROM estado";
$result = $conn->query($sql);
?>

<form action="?page=save-city" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome da Cidade</label>
        <input type="text" name="nomecidade" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Estado</label>
        <select name="estado" class="form-control" required>
            <option value="">Selecione um estado</option>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['IDstate']}'>{$row['stateName']}</option>";
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>