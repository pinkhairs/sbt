<?php
function get_data($var) {
  if (isset($_POST[$var]))
    echo htmlspecialchars($_POST[$var]);
}
?>