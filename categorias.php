<?php
 include_once("templates/header.php")
?>

<main>
  <link rel="stylesheet" href="css/style.css">
  <div id="title-container">
    <h1>Categorias</h1>
    <p>Conteúdos organizados por tecnologia</p>
  </div>

  <div id="categories-container">
    <?php foreach($categories as $category): ?>
      <div class="category-box">
        <h2><?= $category ?></h2>
        <p>Artigos, dicas e projetos sobre <?= $category ?>.</p>
        <a href="#">Ver posts</a>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php
  include_once("templates/footer.php");
?>

