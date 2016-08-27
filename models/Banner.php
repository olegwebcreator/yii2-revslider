<?php

namespace webcreator\revslider\models;

use Yii;
use yii\base\Model;


class Banner extends Model
{
    public $id;
    public $title;
    public $bgImg;
    public $bgImgTitle;
    public $masterspeed;
    public $enabled;
    public $transition = 'slidehorizontal';
    public $slotamount = 5;
    public $updated;
    public $slides = [];

    /**
     * Banner constructor.
     * @param $id
     * @param $title
     * @param $bgImg
     * @param $bgImgTitle
     * @param $masterspeed
     * @param null $enabled
     * @param null $transition
     * @param null $slotamount
     */
    public function __construct( $id, $title, $bgImg, $bgImgTitle, $masterspeed,
                                 $enabled = null, $transition = null, $slotamount = null, $slides = null )
    {
        parent :: __construct();
        $this->id = $id;
        $this->title = $title;
        $this->bgImg = $bgImg;
        $this->bgImgTitle = $bgImgTitle;
        $this->masterspeed = $masterspeed;
        $this->enabled = $enabled;
        $this->transition = $transition;
        $this->slotamount = $slotamount;
        $this->slides = $slides;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['id', 'masterspeed', 'enabled', 'slotamount'], 'integer'],
            [['title', 'bgImg', 'bgImgTitle', 'transition'], 'string', 'max' => 255],
        ];
    }

}
