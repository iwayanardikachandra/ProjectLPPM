<?php 
$array_nya = [
    'judul_info' => [
        'type' => 'like',
        'title' => 'Judul',
        'display' => [
            'type' => 'link',
            'link' => 'info/detail/',
            'id' => 'id_info'
        ]
    ],
    'isi_info' => [
        'type' => 'like',
        'title' => 'Isi'
    ],
    'tgl_dari_info' => [
        'type' => 'date',
        'title' => 'Tanggal Muncul'
    ],
    'tgl_selesai_info' => [
        'type' => 'date',
        'title' => 'Tanggal Selesai',
    ],
    'aktif_info' => [
        'type' => 'nanas',
        'data' => ['tidak aktif','aktif'],
        'title' => 'semangka'
    ],
    'new_info' => [
        'type' => 'jeruk',
        'data' => ['aktif','tidak aktif'],
        'title' => 'Nama buah'
    ]
    echo $array_nya . aktif_info . [0]."<br>";

];