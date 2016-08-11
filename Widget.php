<?php
namespace webcreator\revslider;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;

use webcreator\revslider\models\Banner;
use webcreator\revslider\models\Slide;

/**
 * This is just an example.
 */
class Widget extends \yii\base\Widget
{
    /**
     * @var array the HTML attributes for the widget container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = ['class' => 'fullscreenbanner-container'];

    /**
     * @var array the HTML attributes for widget inner container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $innerOptions = ['class' => 'fullscreenbanner'];

    /**
     * @var array items for banner
     */
    public $items = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        ob_start();
    }

    /**
     * Render Widget
     */
    public function run()
    {
        $banners = [];
        $slides = [];

        foreach ($this->items as $item)
        {
            if ($item['enabled'] == 1)
            {
                foreach ($item['slides'] as $slideItem)
                {
                    if($slideItem['enabled'] == 1)
                    {
                        $slides[$item['id']][] = new Slide($slideItem['slideNumber'],
                            $slideItem['options'], $slideItem['data'], $slideItem['enabled']);
                    }
                }

                $banners[] = new Banner($item['id'], $item['title'], $item['bgImg'],
                    $item['bgImgTitle'], $item['masterspeed'],
                    $item['enabled'], $item['transition'], $item['slotamount'], $slides[$item['id']]);
            }
        }
        $content = ob_get_clean();

        echo Html::beginTag('div', $this->options) . "\n";
            echo Html::beginTag('div', $this->innerOptions) . "\n";

                echo Html :: ul( $banners, [
                        'item' => function($item, $index)
                        {
                            return Html::tag(
                                'li',
                                $this -> render('index', ['item'=>$item]),
                                [
                                    'data' => [
                                        'transition' => $item->transition,
                                        'slotamount' => $item->slotamount,
                                        'masterspeed' => $item->masterspeed,
                                        'title' => $item -> title
                                    ]
                                ] );
                        } ] ) . "\n";
                echo $content;
            echo Html::endTag('div') . "\n";
        echo Html::endTag('div') . "\n";

        $view = $this->view;

        SliderAsset::register($view);

        $view->registerJs('
            jQuery(document).ready(function() {
                jQuery(".fullscreenbanner").revolution({
                    delay: 15000,
                    startwidth: 1170,
                    startheight: 500,
                    fullWidth: "on",
                    fullScreen: "off",
                    hideCaptionAtLimit: "",
                    dottedOverlay: "twoxtwo",
                    navigationStyle: "preview4",
                    fullScreenOffsetContainer: "",
                    hideTimerBar:"on",
                });
            });
        ');

    }
}
