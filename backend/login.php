<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if ($email === 'admin@mail.com' && $password === 'admin') {
    header('Location: ./dashboard.php');
  } else {
    echo 'Invalid username orpassword';
  }
}
