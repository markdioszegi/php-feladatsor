<?php
$upload_errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['upload_image'])) {
    if (!empty($_FILES['image']['name'])) {

      $file_name = time() . uniqid(rand()) . '.' .  end(explode('.', $_FILES['image']['name'])); //rename file uniquely
      $target_file = 'uploads/' . $file_name;

      $allowed_types = ['image/png', 'image/jpeg'];
      $mime_type = $_FILES['image']['type'];

      if (in_array($mime_type, $allowed_types)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
          $_SESSION['upload_status'] = 'Image successfully uploaded!';
          header('Location: index.php?upload_status=success');
        } else {
          array_push($upload_errors, 'An error occured.');
        }
      } else {
        array_push($upload_errors, 'Invalid image type! Please provide .jpg or .png files.');
      }
    } else {
      array_push($upload_errors, 'Please select a file.');
    }
  }
}
?>

<h1>3. task</h1>

<?php
include 'views/upload/errors.php';
include 'views/upload/success.php';
?>

<form action="index.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Select image to upload</label>
    <input type="file" name="image">
  </div>

  <div class="form-group">
    <button class="btn" name="upload_image">Upload</button>
  </div>
</form>