<?php
	use yii\helpers\Html;

	echo Html::img($item->bgImg, [
		"alt" => $item->bgImgTitle,
		"data" => [
			"bgfit" => "cover",
			"bgposition" => "center center",
			"bgrepeat" => "no-repeat"
		]
	]) . "\n";
	echo Html::beginTag("div", ["class" => "slider-caption container"]) . "\n";
var_dump($item->slides);
	foreach ( $item -> slides as $slide )
	{
        $dataOptions = [];

        if ( $slide -> hoffset )
        {
            $dataOptions["offset"] = $slide -> hoffset;
        }
        if ( $slide -> x )
        {
            $dataOption["x"] = $slide -> x;
        }
        if ( $slide -> y )
        {
            $dataOption["y"] = $slide -> y;
        }
        if ( $slide -> dataSpeed )
        {
            $dataOption["speed"] = $slide -> speed;
        }
        if ( $slide -> start )
        {
            $dataOption["start"] = $slide -> start;
        }
        if ( $slide -> easing )
        {
            $dataOption["easing"] = $slide -> easing;
        }
        if ( $slide -> endspeed )
        {
            $dataOption["endspeed"] = $slide -> endspeed;
        }
        if ( $slide -> endeasing )
        {
            $dataOption["endeasing"] = $slide -> endeasing;
        }
        if ( $slide -> captionHidden )
        {
            $dataOption["captionhidden"] = $slide -> captionHidden;
        }

        echo Html::beginTag("div", ["class" => "tp-caption rs-caption-" .
            $slide -> slideNumber . " sft" . ( $slide -> slideNumber == "1" ? " start" : "" ),
            "data" => $dataOptions]) . "\n";

        if ( $slide -> img )
		{
		    echo Html :: img( $slide -> img ,[ "alt" => $slide -> imgTitle ] ) . "\n";
        }

        if ( $slide -> title)
		{
		    echo Html :: tag( "div", $slide -> title, [ "class" => "banner-title" ] ) . "\n";
        }
		if ( $slide -> subtitle )
		{
		    echo Html :: tag( "div", $slide -> subtitle, [ "class" => "banner-subtitle" ] ) ."\n";
        }
		if ( $slide -> link )
		{
		    echo Html :: beginTag ( "span", [ "class" => "page-scroll" ] ) . "\n";
            echo "<a target=\"_blank\" class=\"btn primary-btn\" 
                href=\"" .$slide -> link. "\">". Yii :: t( "app", "More" ) .
                "<i class=\"glyphicon glyphicon-chevron-right\"></i></a>" . "\n";
			echo Html :: endTag( "span" ) . "\n";
		}
        echo Html::endTag("div") . "\n";
    }
	echo Html::endTag("div") . "\n";
?>

