<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Meus serviços</h1>
    <?php if(count($servico) > 0): ?>
      <table class="table" id="servico-table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Serviço</th>
            <th scope="col">Especificações</th>
            <th scope="col"></th>
            <th scope="col">Feito</th> 
          </tr>
        </thead>
        <tbody>
          <?php foreach($servico as $serv): ?>
            <tr>
              <td scope="row" class="col-id"><?= $serv["id"] ?></td>
              <td scope="row"><?= $serv["name"] ?></td>
              <td scope="row"><?= $serv["valor"] ?></td>
              <td class="actions">
                <a href="<?= $BASE_URL ?>show.php?id=<?= $serv["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?= $BASE_URL ?>edit.php?id=<?= $serv["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $serv["id"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
              <td>
                <input type="checkbox" class="mark-done">
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>  
      <p id="empty-list-text">Ainda não há serviços na sua agenda, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
  </div>
<?php
  include_once("templates/footer.php");
?>

