<?php
 include_once("templates/header.php");

  if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
        if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
  }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?>  </h1>
            <p id="post-description"> <?= $currentPost['description'] ?> </p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?> ">
            </div>    
           <p class="post-container">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate ad doloribus nihil necessitatibus cumque ipsa ab eligendi praesentium aliquid! Incidunt et ex non veniam eos illum vitae? Voluptatum, quaerat.
           Fuga omnis laudantium perspiciatis unde doloremque rem vero possimus iure ad nulla itaque magnam a, voluptas voluptates dolorem. A asperiores minus non dolore ex autem molestiae? Molestiae fuga id sunt.
           Voluptate laboriosam nesciunt temporibus magni dignissimos optio quibusdam quia a minima suscipit commodi delectus dolore pariatur facilis obcaecati, veritatis rerum, repudiandae recusandae vero, laborum earum minus sed. Nostrum, voluptas possimus.
           Quaerat, libero alias. Nulla, sapiente dolorum! Voluptatum aliquid laudantium, odit velit autem tempore sequi magnam aliquam ratione delectus ipsam nam. Itaque beatae magni animi nihil magnam quam aliquid atque explicabo!
           Possimus, ullam, maiores illo facere maxime veniam aliquid sequi non enim nisi porro nobis id quis cupiditate magni? Ab, facere pariatur cumque deleniti eius labore fugit ipsum! Quasi, quia impedit.</p>      
           
           <p class="post-container">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate ad doloribus nihil necessitatibus cumque ipsa ab eligendi praesentium aliquid! Incidunt et ex non veniam eos illum vitae? Voluptatum, quaerat.
           Fuga omnis laudantium perspiciatis unde doloremque rem vero possimus iure ad nulla itaque magnam a, voluptas voluptates dolorem. A asperiores minus non dolore ex autem molestiae? Molestiae fuga id sunt.
           Voluptate laboriosam nesciunt temporibus magni dignissimos optio quibusdam quia a minima suscipit commodi delectus dolore pariatur facilis obcaecati, veritatis rerum, repudiandae recusandae vero, laborum earum minus sed. Nostrum, voluptas possimus.
           Quaerat, libero alias. Nulla, sapiente dolorum! Voluptatum aliquid laudantium, odit velit autem tempore sequi magnam aliquam ratione delectus ipsam nam. Itaque beatae magni animi nihil magnam quam aliquid atque explicabo!
           Possimus, ullam, maiores illo facere maxime veniam aliquid sequi non enim nisi porro nobis id quis cupiditate magni? Ab, facere pariatur cumque deleniti eius labore fugit ipsum! Quasi, quia impedit.</p>    
        </div>
        <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
     <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>   
         <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>       
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
         <?php foreach($categories as $category): ?>   
         <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>  
    </ul>
</aside>
</main>

<?php
 include_once("templates/footer.php");
?>