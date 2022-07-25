<?php


$user = $db->insert('users',[
    'name' => $_POST['kustomer']['nama'],
    'username' => $_POST['kustomer']['no_hp'],
    'password' => md5(12345678)
]);

$db->insert('user_roles',[
    'user_id' => $user->id,
    'role_id' => 2,
]);

$_POST['kustomer']['user_id'] = $user->id;