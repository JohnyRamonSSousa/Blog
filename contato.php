<?php
  include_once("templates/header.php");
?>

<main>
  <link rel="stylesheet" href="css/style.css">
  <div id="title-container">
    <h1>Contato</h1>
    <p>Entre em contato conosco</p>
  </div>

  <div id="contact-container">
    <form action="processa_contato.php" method="POST" class="contact-form">

      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" required>
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="subject">Assunto</label>
        <input type="text" name="subject" id="subject">
      </div>

      <div class="form-group">
        <label for="message">Mensagem</label>
        <textarea name="message" id="message" rows="5" required></textarea>
      </div>

      <div class="form-group">
        <button type="submit">Enviar mensagem</button>
      </div>

    </form>
  </div>
</main>

<?php
  include_once("templates/footer.php");
?>
