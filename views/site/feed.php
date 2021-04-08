<?php

use yii\grid\GridView;
use yii\widgets\DetailView;

$this->title = "Rest Api Modules";
?>

<div class="site-index">
    <div class="body-content">
        <h1>Feed de Notícias via Rest Api</h1>
        <?php foreach($data as $row) : ?>
          <p><strong>ID:</strong> <?= $row['ID'] ?> </p>
          <p><strong>Título:</strong> <?= $row['title'] ?> </p>
          <p><strong>Status:</strong> <?= $row['status'] ?> </p>
        <?php endforeach; ?>
    </div>
</div>