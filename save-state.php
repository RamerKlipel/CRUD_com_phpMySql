<?php
include("config.php");

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nomeestado = $conn->real_escape_string($_POST["nomeestado"]);
        $sql = "INSERT INTO estado (stateName) VALUES ('{$nomeestado}')";
        $res = $conn->query($sql);
        
        if($res){
            echo "<script>alert('Estado cadastrado com sucesso!'); location.href='?page=list-states';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar o estado!'); location.href='?page=new-state';</script>";
        }
        break;

    case 'editar':
        $nomeestado = $conn->real_escape_string($_POST["nomeestado"]);
        $id = $conn->real_escape_string($_REQUEST["id"]);
        $sql = "UPDATE estado SET stateName='{$nomeestado}' WHERE IDstate='{$id}'";
        $res = $conn->query($sql);
        
        if($res){
            echo "<script>alert('Estado editado com sucesso!'); location.href='?page=list-states';</script>";
        } else {
            echo "<script>alert('Erro ao editar o estado!'); location.href='?page=list-states';</script>";
        }
        break;

    case 'excluir':
        $id = $conn->real_escape_string($_REQUEST["id"]);
        $sql = "DELETE FROM estado WHERE IDstate='{$id}'";
        $res = $conn->query($sql);
        
        if($res){
            echo "<script>alert('excluído com sucesso!'); location.href='?page=list-states';</script>";
        } else {
            echo "<script>alert('Erro na exclusão!'); location.href='?page=list-states';</script>";
        }
        break;
}
?>