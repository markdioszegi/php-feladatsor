<?php
$contact_errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['contact'])) {
    $email = preg_replace('/\s+/', '', $_POST['email']);
    $tel = preg_replace('/\s+/', '', $_POST['tel']); //remove any unnecessary characters

    //check if email is correct (a really basic one) 
    //preg_match('/^[\w\-\.]+@([\w]+\.)+[\w]{2,4}$/', $email)

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($contact_errors, 'Invalid email address!');
    }

    //check if phone number is correct
    if (!preg_match('/^(\+36|06|0036)[1-9]\d{7,8}$/', $tel)) {
      array_push($contact_errors, 'Invalid phone number!');
    }

    if (empty($contact_errors)) {
      $file_name = 'src/data.csv';
      $file = fopen($file_name, 'a');

      if (!filesize($file_name)) {
        fwrite($file, 'email,phone number' . PHP_EOL);
        fwrite($file, $email . ',' . $tel . PHP_EOL);
        fclose($file);
      } else {
        fwrite($file, $email . ',' . $tel . PHP_EOL);
        fclose($file);
      }

      $_SESSION['contact_status'] = 'Successfully saved the credentials into a .csv file.';
      header('Location: index.php?contact_status=success');
    }
  }
}
?>

<h1>2. task</h1>

<?php
include 'views/contact/errors.php';
include 'views/contact/success.php';
?>

<form action="index.php" method="post">
  <div class="form-group">
    <label>Email</label>
    <input class="form-control" type="text" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label>Phone number</label>
    <input class="form-control" type="text" name="tel" placeholder="Phone number">
  </div>
  <button class="btn" name="contact">Submit</button>
</form>