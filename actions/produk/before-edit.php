<?php

if(isset($_FILES['produk']['name']['gambar']) && !empty($_FILES['produk']['name']['gambar']))
{
    $ext  = pathinfo($_FILES['produk']['name']['gambar'], PATHINFO_EXTENSION);
    $name = strtotime('now').'.'.$ext;
    $file = 'uploads/gambar/'.$name;
    copy($_FILES['produk']['tmp_name']['gambar'],$file);
    $_POST['produk']['gambar'] = $file;
}