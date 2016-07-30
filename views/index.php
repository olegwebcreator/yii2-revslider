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
	echo Html::beginTag("div", ["class" => "slider-caption123 container11"]) . "\n";

	foreach ( $item -> slides as $slide )
	{
        $dataOptions = [];

        foreach($slide->data as $key => $data)
        {
            if(isset($data))
            {
                $dataOptions[$key] = $data;
            }
        }

        /*
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
        */
    }

	echo Html::endTag("div") . "\n";
?>

