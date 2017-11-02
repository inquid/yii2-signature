<?php
/**
 * Created by PhpStorm.
 * User: gogl92
 * Date: 6/10/17
 * Time: 03:05 PM
 */

namespace inquid\signature;

use yii\web\AssetBundle;

class SignatureAsset extends AssetBundle
{
    public $sourcePath = '@vendor/inquid/yii2-signature/assets/';
    public $css = ['style.css'];
    public $js = ['signature_pad.js','app.js'];
    public $depends = ['yii\web\JqueryAsset'];
}