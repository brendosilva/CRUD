<?php
  include_once 'includes/header.php';  
?>

<div class="row">
  <div class="col s12 m6 push-m3">
  <h3 class="light"> Novo cliente </h3>
    <form action="php-action/create.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome"/>
        <label for="nome">Nome</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="sobrenome" id="sobrenome"/>
        <label for="sobrenome">Sobrenome</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="e-mail" id="e-mail"/>
        <label for="e-mail">Email</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="idade" id="idade"/>
        <label for="idade">idade</label>
      </div>
      <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
      <a href="index.php" class="btn green">Lista de cliente</a>
    </form>
  </div>
</div>
<?php
  include_once 'includes/footer.php';  
?>