<?php 
  require_once("./backend/cliente/list.php");
?>
<table>
  <tr>
    <th>Nome</th>
    <th>Sobrenome</th>
    <th>Tel</th>
    <th>Email</th>
    <th>Atualizar</th>
    <th>Excluir</th>
  </tr>
<?php
  foreach($fetchClient as $key => $clientes){
    echo '<tr>';
    echo '<td>'.$clientes["nome"].'</td>';
    echo '<td>'.$clientes["sobrenome"].'</td>';
    echo '<td>'.$clientes["telefone"].'</td>';
    echo '<td>'.$clientes["email"].'</td>';
    echo '<td><a href="?p=cliente&sub=form&alt='.$clientes["id"].'">Atualizar</a></td>';
    echo '<td><a href="?p=cliente&popup&del='.$clientes["id"].'">Delete</a></td>';
    echo '</tr>';
  }
?>

</table>

<?php 
  if(isset($_GET["erro"]))
    echo '<div id="erro_crud"><p>' .$_GET['erro'].'</p><div>';

  function getId(){
    if(isset($_GET["del"])){
      return $_GET["del"];
    }
  }  

  if(isset($_GET["popup"])){
    echo '<div class="popup">
            <h2>Deseja deletar esse item</h2>
            <div class="group-delete">
              <a href="?p=cliente&action=delete&del='.getId().'">Sim</a>
              <a href="?p=cliente">Não<a/>
            </div>
         <div>';
  }

?>