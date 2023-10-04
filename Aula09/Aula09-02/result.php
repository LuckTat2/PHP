<?php
        include "func.php";

        if (isset($_GET['submit'])) {
            $n = $_GET['number'];
            Fibonacci($n);
        }
    ?>