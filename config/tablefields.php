<?php

return [
    'tblname'    => [
        'field1','field2'
    ],
    'jenis' => [
        'nama'
    ],
    'kategori' => [
        'jenis_id' => [
            'label' => 'Jenis',
            'type'  => 'options-obj:jenis,id,nama'
        ],
        'nama'
    ],
    'produk' => [
        'kategori_id' => [
            'label' => 'Kategori',
            'type'  => 'options-obj:kategori,id,nama'
        ],
        'nama',
        'harga' => [
            'label' => 'Harga',
            'type'  => 'number'
        ],
        'warna',
        'stok' => [
            'label' => 'Stok',
            'type'  => 'number'
        ],
        'bunga' => [
            'label' => 'Bunga',
            'type'  => 'decimal'
        ],
        'dp_minimal' => [
            'label' => 'DP Minimal',
            'type'  => 'number'
        ],
        'gambar' => [
            'label' => 'Gambar',
            'type'  => 'file'
        ]
    ],
    'kustomer' => [
        'nama',
        'alamat',
        'jenis_kelamin' => [
            'label' => 'Jenis Kelamin',
            'type'  => 'options:Laki-laki|Perempuan'
        ],
        'no_hp'
    ],
    'pembelian' => [
        'id' => [
            'label' => 'Pembelian ID',
            'type'  => 'hidden'
        ],
        'kustomer_id' => [
            'label' => 'Kustomer',
            'type'  => 'options-obj:kustomer,id,nama'
        ],
        'produk_id' => [
            'label' => 'Produk',
            'type'  => 'options-obj:produk,id,nama'
        ],
        'tipe' => [
            'label' => 'Tipe',
            'type'  => 'options:Tunai|Kredit'
        ], 
        'status'  => [
            'label' => 'Status',
            'type'  => 'options:Sedang diproses|Dibatalkan|Selesai'
        ],
        'tanggal' => [
            'label' => 'Tanggal',
            'type'  => 'datetime-local'
        ]
    ],
    'pembayaran' => [
        'pembelian_id',
        'jumlah' => [
            'label' => 'Jumlah',
            'type'  => 'number'
        ], 
        'status' => [
            'label' => 'Status',
            'type'  => 'options:Sedang diproses|Dibatalkan|Selesai'
        ],
        'deskripsi',
        'tanggal' => [
            'label' => 'Tanggal',
            'type'  => 'datetime-local'
        ]
    ],
    'kredit' => [
        'pembelian_id',
        'dp' => [
            'label' => 'DP',
            'type'  => 'number'
        ], 
        'harga' => [
            'label' => 'Harga',
            'type'  => 'number'
        ], 
        'bunga' => [
            'label' => 'Bunga',
            'type'  => 'number'
        ], 
        'tenor' => [
            'label' => 'Tenor (Bulan)',
            'type'  => 'number'
        ], 
        'sisa' => [
            'label' => 'Sisa',
            'type'  => 'number'
        ],
        'tanggal' => [
            'label' => 'Tanggal',
            'type'  => 'datetime-local'
        ]
    ],
    'poin' => [
        'kustomer_id',
        'jumlah',
        'deskripsi',
        'tanggal' => [
            'label' => 'Tanggal',
            'type'  => 'datetime-local'
        ]
    ],
    'percakapan' => [
        'kustomer_id',
        'admin_id'
    ],
    'percakapan_pesan' => [
        'percakapan_id',
        'pesan',
        'asal',
        'tanggal' 
    ]
];