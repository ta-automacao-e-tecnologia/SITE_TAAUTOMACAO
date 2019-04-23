<?php

    require_once 'action_controller.php';

    $db_table = 'users';

    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

    $control = new controller();

    echo $control->login($db_table, $user, $pass);