<?php

use yii\db\Schema;
use yii\db\Migration;

class m190228_151434_detail_produkDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%detail_produk}}',
                           ["id_detail_produk", "id_produk", "gambar"],
                            [
    [
        'id_detail_produk' => '183',
        'id_produk' => '1',
        'gambar' => '1_erab.png',
    ],
    [
        'id_detail_produk' => '184',
        'id_produk' => '1',
        'gambar' => '2_erab.PNG',
    ],
    [
        'id_detail_produk' => '185',
        'id_produk' => '1',
        'gambar' => '3_erab.PNG',
    ],
    [
        'id_detail_produk' => '186',
        'id_produk' => '1',
        'gambar' => '4_erab.PNG',
    ],
    [
        'id_detail_produk' => '187',
        'id_produk' => '1',
        'gambar' => '5_erab.PNG',
    ],
    [
        'id_detail_produk' => '188',
        'id_produk' => '1',
        'gambar' => '6_erab.PNG',
    ],
    [
        'id_detail_produk' => '178',
        'id_produk' => '2',
        'gambar' => '1_smartlapor.png',
    ],
    [
        'id_detail_produk' => '179',
        'id_produk' => '2',
        'gambar' => '2_smartlapor.PNG',
    ],
    [
        'id_detail_produk' => '180',
        'id_produk' => '2',
        'gambar' => '3_smartlapor.PNG',
    ],
    [
        'id_detail_produk' => '181',
        'id_produk' => '2',
        'gambar' => '4_smartlapor.PNG',
    ],
    [
        'id_detail_produk' => '182',
        'id_produk' => '2',
        'gambar' => '5_smartlapor.PNG',
    ],
    [
        'id_detail_produk' => '218',
        'id_produk' => '3',
        'gambar' => '2_beauties.jpg',
    ],
    [
        'id_detail_produk' => '219',
        'id_produk' => '3',
        'gambar' => '3_beauties.jpg',
    ],
    [
        'id_detail_produk' => '220',
        'id_produk' => '3',
        'gambar' => '4_beauties.jpg',
    ],
    [
        'id_detail_produk' => '221',
        'id_produk' => '3',
        'gambar' => '5_beauties.jpg',
    ],
    [
        'id_detail_produk' => '173',
        'id_produk' => '4',
        'gambar' => '1_realcount.png',
    ],
    [
        'id_detail_produk' => '174',
        'id_produk' => '4',
        'gambar' => '2_realcount.jpg',
    ],
    [
        'id_detail_produk' => '175',
        'id_produk' => '4',
        'gambar' => '3_realcount.jpg',
    ],
    [
        'id_detail_produk' => '176',
        'id_produk' => '4',
        'gambar' => '5_realcount.jpg',
    ],
    [
        'id_detail_produk' => '177',
        'id_produk' => '4',
        'gambar' => '6_realcount.jpg',
    ],
    [
        'id_detail_produk' => '164',
        'id_produk' => '5',
        'gambar' => '1_sibcad.png',
    ],
    [
        'id_detail_produk' => '165',
        'id_produk' => '5',
        'gambar' => '2_sibcad.jpg',
    ],
    [
        'id_detail_produk' => '166',
        'id_produk' => '5',
        'gambar' => '3_sibcad.jpg',
    ],
    [
        'id_detail_produk' => '167',
        'id_produk' => '5',
        'gambar' => '4_sibcad.jpg',
    ],
    [
        'id_detail_produk' => '168',
        'id_produk' => '5',
        'gambar' => '5_sibcad.jpg',
    ],
    [
        'id_detail_produk' => '169',
        'id_produk' => '5',
        'gambar' => '6_sibcad.PNG',
    ],
    [
        'id_detail_produk' => '170',
        'id_produk' => '5',
        'gambar' => '7_sibcad.PNG',
    ],
    [
        'id_detail_produk' => '171',
        'id_produk' => '5',
        'gambar' => '8_sibcad.PNG',
    ],
    [
        'id_detail_produk' => '172',
        'id_produk' => '5',
        'gambar' => '9_sibcad.PNG',
    ],
    [
        'id_detail_produk' => '235',
        'id_produk' => '37',
        'gambar' => '1_ekin.jpg',
    ],
    [
        'id_detail_produk' => '237',
        'id_produk' => '38',
        'gambar' => '1_apk.jpg',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%detail_produk}} CASCADE');
    }
}
