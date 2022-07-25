<?php


if($edit->tipe == 'Tunai' && $edit->status == 'Selesai')
{
    $pembayaran = $db->single('pembayaran',['pembelian_id' => $edit->id]);

    if(empty($pembayaran))
    {
        $produk = $db->single('produk',['id' => $edit->produk_id]);
    
        $db->insert('pembayaran',[
            'pembelian_id' => $edit->id,
            'jumlah' => $produk->harga,
            'status' => 'Selesai',
            'deskripsi' => 'Pembayaran tunai untuk '.$produk->nama,
            'tanggal' => date('Y-m-d H:i:s')
        ]);
    }
}