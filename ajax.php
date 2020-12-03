<?php
if (isset($_POST['radio1'])) {
    echo '1';
} elseif (isset($_POST['radio2'])) {
    echo '2';
} else {
    echo '3';
}