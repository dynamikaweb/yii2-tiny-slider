dynamikaweb/yii2-tiny-slider
=========================
![php version](https://img.shields.io/packagist/php-v/dynamikaweb/yii2-tiny-slider)
![pkg version](https://img.shields.io/packagist/v/dynamikaweb/yii2-tiny-slider)
![license](https://img.shields.io/packagist/l/dynamikaweb/yii2-tiny-slider)
![quality](https://img.shields.io/scrutinizer/quality/g/dynamikaweb/yii2-tiny-slider)
![build](https://img.shields.io/scrutinizer/build/g/dynamikaweb/yii2-tiny-slider)

Documentation
-------------

 * [Demos](http://ganlanyuan.github.io/tiny-slider/demo)
 * [How to use](#how-to-use)
 * [Installation](#installation)
 * [Configuration](#configuration)
 * [Plugin Options](https://github.com/ganlanyuan/tiny-slider#options)
 * [Tiny Slider Source](https://github.com/ganlanyuan/tiny-slider)

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```SHELL
$ composer require dynamikaweb/yii2-tiny-slider "*"
```

or add

```JSON
"dynamikaweb/yii2-tiny-slider": "*"
```

to the `require` section of your `composer.json` file.

## How to use ##

```PHP
<?PHP
use dynamikaweb\tiny\Slider;
use yii\helpers\Html;
?>

<?php Slider::begin([
  'pluginOptions' => [
    'autoplay'          => true,
    'autoplayTimeout'   => 3000,
    'items'             => 1
  ]
])?>

<?=Html::img('foo.png')?>
<?=Html::img('bar.png')?>
<?=Html::img('zee.png')?>

<?php Slider::end()?>
```

## Configuration ##

| Property | Type | Description |
| :------- | :--: | :---------- |
| export | string | javascript constant slider name |
| container | string | html root tag `default: div` |
| containerOptions | array | html root tag options |
| pluginOptions | array | javascript [plugin options](https://github.com/ganlanyuan/tiny-slider#options) |
| clientOptions | array | _alias to pluginOptions_ |
| clientScript | string\JsExpression | javascript custom function or script<br/>`example: slider => console.log(slider)`<br/>`example: console.log(my_export)` |

--------------------------------------------------------------------------------------------------------------
[![dynamika soluções web](https://avatars.githubusercontent.com/dynamikaweb?size=12)](https://dynamika.com.br)
This project is under [BSD-3-Clause](https://opensource.org/licenses/BSD-3-Clause) license.
