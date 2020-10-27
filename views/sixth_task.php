<?php

$arr = array('alma', 'körte', 'alom', 'akna', 'Balmazújváros');
?>

<h1>6. task</h1>

<input id="searchBar" class="form-control" type="text" placeholder="Start typing">

<div id="searchBox" class="result-box">
  <?php foreach ($arr as $word) : ?>
    <p style="margin: 0;"><?php echo $word ?></p>
  <?php endforeach ?>
</div>