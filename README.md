<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="http://static.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
</p>

# DEPRECATED
**IMPORTANT** 
All our Yii widgets will be discontinued as we are transitioning from a monolithic infrastructure into a microservice network and having the backend completely separated from frontend clients. We encourage you to avoid using PHP among with CSS/HTML/Javascript and move towards Modern FE technologies like Angular/React/Vue and mobile like ionic, react native, flutter.

So you can use directly:
https://github.com/szimek/signature_pad

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)

Yii2 Signature
==============
Draw and save signatures in Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist inquid/yii2-signature "dev-master"
```

or add

```
"inquid/yii2-signature": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \inquid\signature\SignatureWidget::widget(['clear' => true, 'undo' => true, 'change_color' => true, 'url' => 'google.com', 'save_server' => true]) ?>
```

Options available
 
url string  
width string  
height string  
save_png boolean  
save_jpg boolean   
save_svg boolean  
save_server boolean  
clear boolean 
change_color boolean  
undo boolean 
description boolean  

SUPPORT
-----
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)
