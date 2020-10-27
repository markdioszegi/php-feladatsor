<?php if (isset($_GET['upload_status']) and $_GET['upload_status'] == 'success') : ?>
  <div>
    <p class="text-success"><?php echo $_SESSION['upload_status'] ?></p>
  </div>
<?php endif ?>