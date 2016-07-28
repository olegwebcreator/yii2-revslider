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

	foreach ( $item -> slides as $slide )
	{
        $dataOptions = [];

        if ( $slide -> hoffset )
        {
            $dataOptions["offset"] = $slide -> hoffset;
        }
        if ( $slide -> dataX )
        {
            $dataOption["x"] = $slide -> dataX;
        }
        if ( $slide -> dataY )
        {
            $dataOption["y"] = $slide -> dataY;
        }
        if ( $slide -> dataSpeed )
        {
            $dataOption["speed"] = $slide -> dataSpeed;
        }
        if ( $slide -> dataStart )
        {
            $dataOption["start"] = $slide -> dataStart;
        }
        if ( $slide -> dataEasing )
        {
            $dataOption["easing"] = $slide -> dataEasing;
        }
        if ( $slide -> dataEndspeed )
        {
            $dataOption["endspeed"] = $slide -> dataEndspeed;
        }
        if ( $slide -> dataEndeasing )
        {
            $dataOption["endeasing"] = $slide -> dataEndeasing;
        }
        if ( $slide -> dataCaptionHidden )
        {
            $dataOption["captionhidden"] = $slide -> dataCaptionHidden;
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

