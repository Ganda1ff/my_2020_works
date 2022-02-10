jkjljbbhbb
<?php
if (isset($_SESSION['user'])) {
    echo("<h3>" . $_SESSION['user']['name'] . "</h3>");}
?>