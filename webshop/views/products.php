<?php
   include "layout.php";
?>
<div class="card shadow-sm">
  <div class="card-body">
    <h3 class="mb-3">Products</h3>
    <div class="row">
      <?php foreach ($products as $p): ?>
        <div class="col-md-4 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($p->name()) ?></h5>
              <p class="card-text">Price: <?php echo htmlspecialchars($p->price()) ?> </p>
              <form method="post" action="products.php?action=add">
                <div class="input-group">
                  <input type="number" class="form-control" name="qty" value="1" min="1">
                  <button class="btn btn-primary" type="submit">Add to Cart</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
