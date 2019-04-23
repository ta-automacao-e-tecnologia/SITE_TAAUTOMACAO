<?php

    require_once 'action_controller.php';

    $db_table = 'users';

    $control = new controller();

    echo $control->read_table($db_table);