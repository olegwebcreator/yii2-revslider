<?php
namespace webcreator\revslider;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;

use webcreator\revslider\models\Banner;

/**
 * This is just an example.
 */
class Widget extends \yii\base\Widget
{
    /**
     * @var boolean whether the [Modernizr JavaScript library](http://modernizr.com) should be registered.
     */
    public $registerModernizr = true;

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
     * @var array
     */
    public $clientOptions = [];

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
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->id;
        }
        if (isset($this->clientOptions['current']) && $this->clientOptions['current'] > 0) {
            $this->clientOptions['current'] = $this->clientOptions['current'] - 1;
        }
        ob_start();
    }

    /**
     * Render Widget
     */
    public function run()
    {
        $banners = [];

        foreach ($this->items as $item)
        {
            if ($item['enabled'] == 1)
            {
                $banners[] = new Banner($item['id'], $item['title'], $item['bgImg'],
                    $item['bgImgTitle'], $item['masterspeed'],
                    $item['enabled'], $item['transition'], $item['slotamount']);
                $banners[] -> slides = $item['slides'];
            }
        }

        $content = ob_get_clean();
        echo Html::beginTag('div', $this->options) . "\n";
        echo Html::beginTag('div', $this->innerOptions) . "\n";
        var_dump($banners);
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
                                'masterspeed' => $item -> masterspeed,
                                'title' => $item -> title
                            ]
                        ] );
                } ] ) . "\n";
        echo $content;
        echo Html::endTag('div') . "\n";
        echo Html::endTag('div') . "\n";

    }
}
