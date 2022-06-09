<?php
require "inc/cabecalho.php";
require "inc/funcoes-posts.php";
$post = lerTodosOsPosts($conexao);
?>

<div class="row my-1 mx-md-n1">
  <!-- INÍCIO ROW -->
  <?php foreach($post as $post) { ?>
  <!-- INÍCIO Card -->
  <div class="col-md-6 my-1 px-md-1">
    <article class="card shadow-sm h-100">
      <a href="post-detalhe.php?id=<?=$post['id']?> " class="card-link">
        <img class="card-img-top" src="imagens/<?=$post['imagem']?>" alt="Imagem de destaque do post">
        <div class="card-body">
          <h5 class="card-title"><?=$post['titulo']?></h5>
          <p class="card-text"><?=$post['resumo']?></p>
        </div>
      </a>
    </article>
  </div>
  <?php } ?>
  <!-- FIM Card -->

  

<?php require "inc/rodape.php"; ?>