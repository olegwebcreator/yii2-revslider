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
    public $transition;
    public $slotamount;
    public $updated;
    public $bannerslides = [];

    /**
     * Banner constructor.
     * @param array $id
     * @param $title
     * @param $bgImg
     * @param $bgImgTitle
     * @param $masterspeed
     * @param int $enabled
     * @param null $created
     * @param null $updated
     */
    public function __construct( $id, $title, $bgImg, $bgImgTitle, $masterspeed, $enabled = 1, $transition = 5, $slotamount = 5)
    {
        $this->id = $id;
        $this->title = $title;
        $this->bgImg = $bgImg;
        $this->bgImgTitle = $bgImgTitle;
        $this->masterspeed = $masterspeed;
        $this->enabled = $enabled;
        $this->transition = $transition;
        $this->slotamount = $slotamount;

    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['masterspeed', 'enabled', 'created', 'updated'], 'integer'],
            [['title', 'bgImg', 'bgImgTitle'], 'string', 'max' => 255],
        ];
    }

}
