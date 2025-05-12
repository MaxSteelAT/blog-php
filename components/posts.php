<?php
require 'function.php';
require 'db.php';
$posts = $db->query("SELECT * FROM post ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- Blog -->
<section>
  <header class="major">
    <h2>Lo más relevante del momento</h2>
  </header>
  <div class="row">
    <?php foreach ($posts as $post): ?>
      <div class="col-6 col-12-small">
        <section class="box">
          <?php if ($post['image'] != ''): ?>
            <a href="#" class="image featured"><img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>" /></a>
          <?php endif; ?>
          <header>
            <h3><?= $post['title'] ?></h3>
            <!-- <p>Posted 45 minutes ago</p> -->
          </header>
          <p>
            <?= sliceText($post['article']) ?>
          </p>
          <!-- <footer>
                      <ul class="actions">
                        <li><a href="#" class="button icon solid fa-file-alt">Continue Reading</a></li>
                      </ul>
                    </footer> -->
        </section>
      </div>
    <?php endforeach; ?>

  </div>
</section>