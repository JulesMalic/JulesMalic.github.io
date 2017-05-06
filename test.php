<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        var_dump($_PSOT);
        header('Location: ', true, 303);
        exit();
    }
    else
    {
        var_dump($_GET);
        header('Content-Type: text/html; charset=utf-8');
    }
 ?>