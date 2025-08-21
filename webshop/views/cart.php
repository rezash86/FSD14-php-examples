
<?php include "layout.php"; ?>
<div class="card shadow-sm">
  <div class="card-body">
    <h3 class="mb-3">Your Cart</h3>
    <?php if (empty($summary['lines'])): ?>
      <p>Your cart is empty. <a href="products.php">Browse products</a></p>
    <?php else: ?>
      <table class="table">
        <thead><tr><th>Product</th><th>Qty</th><th>Price</th><th>Line Total</th><th></th></tr></thead>
        <tbody>
        <?php foreach ($summary['lines'] as $line): ?>
          <tr>
           
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      <div class="d-flex justify-content-end gap-3">
        <div><strong>Subtotal:</strong></div>
        <div><strong>Total:</strong> </div>
      </div>
      <div class="mt-3 d-flex gap-2">
        <form method="post" action="cart.php?action=clear">
          <button class="btn btn-outline-secondary">Clear Cart</button>
        </form>
        <a class="btn btn-success" href="products.php">Continue Shopping</a>
      </div>
    <?php endif; ?>
  </div>
</div>