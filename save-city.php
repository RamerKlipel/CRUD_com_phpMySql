<?php
include("config.php");

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nomecidade = $conn->real_escape_string($_POST["nomecidade"]);
        $estado = $conn->real_escape_string($_POST["estado"]);
        $sql = "INSERT INTO cidade (cityName, IDstate) VALUES ('{$nomecidade}', '{$estado}')";
        $res = $conn->query($sql);
        
        if($res){
            echo "<script>alert('Cidade cadastrada com sucesso!'); location.href='?page=list-cities';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar a cidade!'); location.href='?page=new-city';</script>";
        }
        break;

    case 'editar':
        $nomecidade = $conn->real_escape_string($_POST["nomecidade"]);
        $estado = $conn->real_escape_string($_POST["estado"]);
        $id = $conn->real_escape_string($_REQUEST["id"]);
        $sql = "UPDATE cidade SET cityName='{$nomecidade}', IDstate='{$estado}' WHERE IDcity='{$id}'";
        $res = $conn->query($sql);
        
        if($res){
            echo "<script>alert('Cidade editada com sucesso!'); location.href='?page=list-cities';</script>";
        } else {
            echo "<script>alert('Erro ao editar a cidade!'); location.href='?page=list-cities';</script>";
        }
        break;

    case 'excluir':
        $id = $conn->real_escape_string($_REQUEST["id"]);
        $sql = "DELETE FROM cidade WHERE IDcity='{$id}'";
        $res = $conn->query($sql);
        
        if($res){
            echo "<script>alert('Cidade excluída com sucesso!'); location.href='?page=list-cities';</script>";
        } else {
            echo "<script>alert('Erro ao excluir a cidade!'); location.href='?page=list-cities';</script>";
        }
        break;
}
?>