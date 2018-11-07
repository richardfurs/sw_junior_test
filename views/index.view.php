

<?php require 'views/header.view.php'; ?>

<header>
    <div class="header-list">
        <h1>Product List</h1>
        <section class="col-right">        
              <input class="delete-btn" type="submit" value="Apply">
        </section>
    </div>
    <hr>
</header>

<div class="main-list">
  <?php foreach ($list as $item) : ?>
    <div class="card">
      <input class="checkbox" type="checkbox">
            <?php if ($item->getSku()) : ?>
                <?= $item->getSku(); ?>
            <?php endif; ?>
            <br>
            <?php if ($item->getName()) : ?>
                <?= $item->getName(); ?>
            <?php endif; ?>
            <br>
            <?php if ($item->getPrice()) : ?>
                <?= $item->getPrice(); ?>
            <?php endif; ?>
            <br>
            <?php if ($item->getSize()) : ?>
                <?= $item->getSize(); ?>
            <?php endif; ?>
     </div>
  <?php endforeach; ?>
</div>

<?php require 'footer.view.php'; ?>
