<?php

if (isset($_SESSION['success'])) {
    echo "<div class='alert alert-success alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> Message Sent!!!
</div>";
    session_unset();
}

if (isset($_SESSION['error'])) {
    echo "<div class='alert alert-danger alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Error!</strong> Message Not Sent!!!
</div>";
    session_unset();
}
?>
