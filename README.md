Revolution slider for yii2
==========================
Simple slider widget

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist webcreator/yii2-revslider "*"
```

or add

```
"webcreator/yii2-revslider": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

<?= \webcreator\revslider\AutoloadExample::widget(); ?>

There are a lot of parameters you can use in this widget. Here is the code for 3 slides with 4 section in each slide

```php
<?php
use webcreator\revslider\Widget as Slider;
Slider::begin([
    "clientOptions" => [
        "delay" => 15000,
        "startwidth"  => 1170,
        "startheight" => 500,
        "fullWidth"   => "on",
        "fullScreen"  => "off",
        "hideCaptionAtLimit" => "",
        "dottedOverlay" => "twoxtwo",
        "navigationStyle" => "preview4",
        "fullScreenOffsetContainer" => "",
        "hideTimerBar" => "on"
    ],
    "items" => [
        [
            "id" => 1,
            "title" => "Dancewear Nona",
            "bgImg" => "/img/home/banner-slider/slider-bg.jpg",
            "bgImgTitle" => "Закрытие театрального сезона 2016",
            "masterspeed" => 2000,
            "enabled" => 1,
            "transition" => "slidehorizontal",
            "slotamount" => 5,
            "slides" => [
                [
                    "slideNumber" => 1,
                    "options" => [
                        "img" => "/img/home/banner-slider/banner1.jpg",
                        "imgTitle" => "Закрытие театрального сезона"
                    ],
                    "data" => [
                        "hoffset" => 0,
                        "x" => 600,
                        "y" => 54,
                        "speed" => 800,
                        "start" => 1100,
                        "easing" => "Back.easeInOut",
                        "endeasing" => 300,
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ],
                [
                    "slideNumber" => 2,
                    "options" => [
                        "title" => "Radasfera для друзей",
                        "subtitle" => "Театрализованный показ от нашего бренда балетной одежды NONA<br/>при участии артистов Мариинского и Михайловского театров.<br/>
Фуршет под аккомпанемент Simple Drums, BLTB, Ивана Ситникова<br/> и еще много приятных сюрпризов… "
                    ],
                    "data" => [
                        "hoffset" => 0,
                        "y" => 54,
                        "speed" => 800,
                        "start" => 1200,
                        "easing" => "Back.easeInOut",
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ],
                [
                    "slideNumber" => 3,
                    "options" => [
                        "title" => "<span>01/08/2016 пер. Пирогова 18</span>"
                    ],
                    "data" => [
                        "hoffset" => 0,
                        "y" => 380,
                        "speed" => 800,
                        "start" => 1300,
                        "easing" => "Power4.easeInOut",
                        "endeasing" => "Power1.easeIn",
                        "captionHidden" => "off",
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ],
                [
                    "slideNumber" => 4,
                    "options" => [
                        "link" => "https://vk.com/dancewearnona"
                    ],
                    "data" => [
                        "hoffset" => 0,
                        "y" => 420,
                        "speed" => 800,
                        "start" => 1400,
                        "easing" => "Power4.easeInOut",
                        "endeasing" => "Power1.easeIn",
                        "captionHidden" => "off",
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ]
            ]
        ],
        [
            "id" => 2,
            "title" => "Dancewear Nona",
            "bgImg" => "/img/home/banner-slider/slider-bg.jpg",
            "bgImgTitle" => "Конкурс на лучшее фуэте!",
            "masterspeed" => 2000,
            "enabled" => 1,
            "transition" => "slidehorizontal",
            "slotamount" => 5,
            "slides" => [
                [
                    "slideNumber" => 1,
                    "options" => [
                        "img" => "/img/home/banner-slider/banner2.jpg",
                        "imgTitle" => "Конкурс Nona"
                    ],
                    "data" => [
                        "x" => 0,
                        "y" => 54,
                        "speed" => 800,
                        "start" => 1100,
                        "easing" => "Back.easeInOut",
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ],
                [
                    "slideNumber" => 2,
                    "options" => [
                        "title" => "Конкурс на лучшее фуэте!",
                    ],
                    "data" => [
                        "x" => 410,
                        "y" => 54,
                        "speed" => 800,
                        "start" => 1200,
                        "easing" => "Back.easeInOut",
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ],
                [
                    "slideNumber" => 3,
                    "options" => [
                        "title" => "Победитель получит сертификат от мастерской Radasfera номиналом 6000р. на пошив одежды бренда NONA!*",
                        "subtitle" => "Вам нужно:<br/><ol><li>1. Снять себя на видео</li><li>2. Опубликовать фото с тегом #Nonafouette в своих социальных сетях (vkontakte, facebook, Instagram)</li><li>3. Набрать наибольшее количество лайков.</li></ol>Не упустите возможность! Покажите на что вы способны!"
                    ],
                    "data" => [
                        "x" => 410,
                        "y" => 100,
                        "speed" => 800,
                        "start" => 1300,
                        "easing" => "Power4.easeInOut",
                        "endeasing" => "Power1.easeIn",
                        "captionHidden" => "off",
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ],
                [
                    "slideNumber" => 4,
                    "options" => [
                        "link" => "https://vk.com/radasferaevent"
                    ],
                    "data" => [
                        "x" => 860,
                        "y" => 400,
                        "speed" => 800,
                        "start" => 1400,
                        "easing" => "Power4.easeInOut",
                        "endeasing" => "Power1.easeIn",
                        "captionHidden" => "off",
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ]
            ]
        ],
        [
            "id" => 3,
            "title" => "Dancewear Nona",
            "bgImg" => "/img/home/banner-slider/slider-bg.jpg",
            "bgImgTitle" => "Презентация бренда",
            "masterspeed" => 2000,
            "enabled" => 1,
            "transition" => "slidehorizontal",
            "slotamount" => 5,
            "slides" => [
                [
                    "slideNumber" => 1,
                    "options" => [
                        "img" => "/img/home/banner-slider/banner3.jpg",
                        "imgTitle" => "Презентация бренда Nona"
                    ],
                    "data" => [
                        "x" => 0,
                        "y" => 54,
                        "speed" => 800,
                        "start" => 1100,
                        "easing" => "Back.easeInOut",
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ],
                [
                    "slideNumber" => 2,
                    "options" => [
                        "title" => "Презентация бренда состоится 1 августа в 19-00 по адресу: переулок Пирогова, 18. ",
                        "subtitle" => "*Количество мест ограничено, поэтому спешите оказаться в списке гостей первыми.<br/>
**Администрация оставляет за собой право выбора при составлении списка гостей."
                    ],
                    "data" => [
                        "hoffset" => 0,
                        "x" => 410,
                        "y" => 54,
                        "speed" => 800,
                        "start" => 1200,
                        "easing" => "Back.easeInOut",
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ],
                [
                    "slideNumber" => 3,
                    "options" => [
                        "title" => "<span>Совсем скоро вы сможете увидеть уникальную коллекцию одежды!</span>",
                    ],
                    "data" => [
                        "hoffset" => 0,
                        "x" => 410,
                        "y" => 300,
                        "speed" => 800,
                        "start" => 1300,
                        "easing" => "Power4.easeInOut",
                        "endeasing" => "Power1.easeIn",
                        "captionHidden" => "off",
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ],
                [
                    "slideNumber" => 4,
                    "options" => [
                        "link" => "https://vk.com/wall-125107484_11"
                    ],
                    "data" => [
                        "x" => 800,
                        "y" => 360,
                        "speed" => 800,
                        "start" => 1400,
                        "easing" => "Power4.easeInOut",
                        "endeasing" => "Power1.easeIn",
                        "captionHidden" => "off",
                        "endspeed" => 300
                    ],
                    "enabled" => 1
                ]
            ]
        ]
    ]
]);
Slider::end();
?>
```
