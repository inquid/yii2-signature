<?php

namespace inquid\signature;

/**
 * This is just an example.
 */
class SignatureWidget extends \yii\base\Widget
{
    public function init(){
      $this->registerJs('');
      $this->registerJs('');
      $this->registerCss('');
    }

    public function run()
    {
        return '<div id="signature-pad" class="signature-pad">
            <div class="signature-pad--body">
                <canvas></canvas>
            </div>
            <div class="signature-pad--footer">
                <div class="description">Sign above</div>

                <div class="signature-pad--actions">
                    <div>
                        <button type="button" class="button clear" data-action="clear">Clear</button>
                        <button type="button" class="button" data-action="change-color">Change color</button>
                        <button type="button" class="button" data-action="undo">Undo</button>

                    </div>
                    <div>
                        <button type="button" class="button save" data-action="save-png">Save as PNG</button>
                        <button type="button" class="button save" data-action="save-jpg">Save as JPG</button>
                        <button type="button" class="button save" data-action="save-svg">Save as SVG</button>
                        <button type="button" class="button save" data-action="save-server">Send to server</button>
                    </div>
                </div>
            </div>
        </div>';
    }
}
