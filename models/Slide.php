<?php

namespace webcreator\revslider\models;

use Yii;
use yii\base\Model;


class Slide extends Model
{
    public $id;
    public $bannerId;
    public $slideNumber;
    public $data = [];
    public $options = [];

    public function __construct( $bannerId, $slideNumber, $data = null, $options = null )
    {
        $this->bannerId = $bannerId;
        $this->slideNumber = $slideNumber;
        $this->data = $data;
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['bannerId', 'slideNumber'], 'integer'],
        ];
    }

}
