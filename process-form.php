<?php
require 'includes/header.php';
if (isset($_POST['daftar'])) {
  if (insert($_POST)) {
    return header('Location: index.php');
  } else {
    return "error";
  }
} else {
  die("Error");
}
?>