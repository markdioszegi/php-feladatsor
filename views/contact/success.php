<?php if (isset($_GET['contact_status']) and $_GET['contact_status'] == 'success') : ?>
  <div>
    <p class="text-success"><?php echo $_SESSION['contact_status'] ?></p>
  </div>
<?php endif ?>