<?php
  include_once("templates/header.php");
?>
  <div class="container" id="view-servico-container"> 
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $servico["name"] ?></h1>
    <p class="bold">Valor:</p>
    <p class="form-control"><?= $servico["valor"] ?></p>
    <p class="bold">Observações:</p>
    <textarea type="text" class="form-control" id="observations" name="observations" rows="3" readonly><?= $servico['observations'] ?></textarea>
  </div>
<?php
  include_once("templates/footer.php");
?>

