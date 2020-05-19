<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 02/03/19
 * Time: 21:38
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class MapAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU',
        'js/gmaps.js',
        'js/map-helper.js'
    ];

    public $depends = [
        'frontend\assets\BinmpAsset',

    ];
}