<h2>Login </h2>
<form method="post">
    <?php if (!empty($error)): ?><div class="alert alert-danger"><?= $error ?></div><?php endif; ?>
    <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
    <div class="mb-3"><input type="password" name="password" class="form-control" placeholder="Password" required></div>
    <button class="btn btn-primary">Login</button>
</form>

<?php include __DIR__.'/../layouts/main.php' ?>