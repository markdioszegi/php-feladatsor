<?php if (!empty($contact_errors)) : ?>
  <?php foreach ($contact_errors as $error) : ?>
    <p class="text-danger"><?php echo $error ?></p>
  <?php endforeach ?>
<?php endif ?>