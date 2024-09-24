<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Adicionar Serviço</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="name">Serviço:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o serviço" required>
      </div>
      <div class="form-group">
        <label for="valor">Valor:</label>
        <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o valor" required>
      </div>
      <div class="form-group">
        <label for="observations">Descrição:</label>
        <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>

