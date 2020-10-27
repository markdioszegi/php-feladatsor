<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['words_form'])) {
    $word = $_POST['word'];
    if (trim($word)) {
      array_push($_SESSION['words'], htmlentities($word, ENT_QUOTES, 'UTF-8'));
    }

    header('Location: index.php');
  }
}

$patterns = array('/[öóő]/ui', '/[úűü]/ui', '/[é]/ui', '/[aäá]/ui', '/[í]/ui', '/\s/');
$replacements = array('o', 'u', 'e', 'a', 'i', '-');
?>

<h1>1. task</h1>

<form action="first_exercise" method="post">
  <div class="form-group">
    <input class="form-control" type="text" name="word" placeholder="Type in a word">
  </div>
  <button class="btn" name="words_form">Add</button>
</form>

<div class="result-box">
  <?php foreach ($_SESSION['words'] as $word) : ?>
    <p><?php echo preg_replace($patterns, $replacements, $word) ?></p>
  <?php endforeach ?>
</div>