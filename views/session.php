<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();

  // session variables initialization
  if (!isset($_SESSION['contact_status']))
    $_SESSION['contact_status'] = '';

  if (!isset($_SESSION['upload_status']))
    $_SESSION['upload_status'] = '';

  if (!isset($_SESSION['words'])) {
    $_SESSION['words'] = array('érem tábla', 'árvíz tűrő tükör fúró gépezet');  //default values
  }
}
