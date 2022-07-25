<?php

return [
    'dashboard'  => 'default/index',
    'chat'       => 'percakapan/index',
    'master'     => [
        'jenis'      => 'crud/index?table=jenis',
        'kategori'   => 'crud/index?table=kategori',
        'produk'     => 'crud/index?table=produk',
        'kustomer'   => 'crud/index?table=kustomer',
    ],
    'transaksi'  => [
        'pembelian'  => 'crud/index?table=pembelian',
        'pembayaran' => 'crud/index?table=pembayaran',
    ],
    'pengguna'   => [
        'semua pengguna' => 'users/index',
        'roles'  => 'roles/index'
    ],
    'pengaturan' => 'application/index'
];