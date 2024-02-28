<?php
//jika belum melakukan Login

if (isset($_SESSION['log'])) {
} else {
  header('location:login.php');
}
