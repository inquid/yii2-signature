<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 10/29/17
 * Time: 11:26 PM
 */

namespace inquid\signature;


use yii\base\Model;
use yii\widgets\InputWidget;

class SignatureWidgetInput extends InputWidget
{
    public $model;
    public $attribute;
    public $width;
    public $height;
    public $clear = true;
    public $change_color = false;
    public $undo = true;
    public $description;
    private $action_buttons;

    public function init()
    {
        if ($this->width === null)
            $this->width = '500px';
        if ($this->height === null)
            $this->height = '300px';
        if ($this->clear == true) {
            $this->action_buttons .= '<button type="button" class="button clear" data-action="clear">Clear</button>';
        }
        if ($this->change_color == true) {
            $this->action_buttons .= '<button type="button" class="button" data-action="change-color">Change color</button>';
        }
        if ($this->undo == true) {
            $this->action_buttons .= '<button type="button" class="button" data-action="undo">Undo</button>';
        }
        SignatureAsset::register($this->view);
    }

    protected function hasModel()
    {
        return $this->model instanceof Model && $this->attribute !== null;
    }

    public function run()
    {
        $signature = '
        <style>
        canvas{
            width: ' . $this->width . ';
            height: ' . $this->height . ';
        }
        </style>
         <div id="signature-pad" class="signature-pad">
            <div class="signature-pad--body">
                <canvas></canvas>
            </div>
            <div class="signature-pad--footer">
                <div class="description">' . $this->description . '</div>

                <div class="signature-pad--actions">
                    <div>
                        ' . $this->action_buttons . '
                    </div>
                </div>
            </div>
        </div>';
        $this->model->invoice_comment = 'mmmm<script>signaturePad.toDataURL();</script>';
        return $signature;
    }
}