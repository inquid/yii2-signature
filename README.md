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
