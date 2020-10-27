<?php if (!empty($upload_errors)) : ?>
  <?php foreach ($upload_errors as $error) : ?>
    <p class="text-danger"><?php echo $error ?></p>
  <?php endforeach ?>
<?php endif ?>