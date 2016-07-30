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
    public $enabled;
    private $hoffset;

    public function __construct($slideNumber, $options = null, $data = null, $enabled)
    {
        $this->slideNumber = $slideNumber;
        $this->options = $options;
        $this->data = $data;
        $this->enabled = $enabled;
        $this->hoffset = $options["hoffset"];
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['slideNumber', 'enabled'], 'integer'],
        ];
    }

}
