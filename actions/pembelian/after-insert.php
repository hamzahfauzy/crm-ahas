<?php

if($insert->tipe == 'Tunai' && $insert->status == 'Selesai')
{
    $produk = $db->single('produk',['id' => $insert->produk_id]);
    $db->insert('pembayaran',[
        'pembelian_id' => $insert->id,
        'jumlah' => $produk->harga,
        'status' => 'Selesai',
        'deskripsi' => 'Pembayaran tunai untuk '.$produk->nama,
        'tanggal' => date('Y-m-d H:i:s')
    ]);
}