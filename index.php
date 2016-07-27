<?php
	use yii\helpers\Html;
?>

	<img src='<?= $item -> bgImg ?>' alt='slidebg' data-bgfit='cover' data-bgposition='center center' data-bgrepeat='no-repeat'>
	<div class='slider-caption container<?=( $item -> id == 2 ? ' captionCenter' : '')?>'>
		<?php	
			foreach ( $item -> bannerslides as $slide )
			{
		?>
<div class='tp-caption rs-caption-<?=$slide -> slideNumber?> sft<?=( $slide -> slideNumber == '1' ? ' start' : '' )?>' <?php 
				if ( $slide -> hoffset )
				{
					echo 'data-offset="' . $slide -> hoffset . '" ';
				}	
				if ( $slide -> dataX )
				{
					echo 'data-x="' . $slide -> dataX . '" ';
				}
				
				if ( $slide -> dataY )
				{
					echo 'data-y="' . $slide -> dataY . '" ';
				}
				if ( $slide -> dataSpeed )
				{
					echo 'data-speed="' . $slide -> dataSpeed . '" ';
				}
				if ( $slide -> dataStart )
				{
					echo 'data-start="' . $slide -> dataStart . '" ';
				}
				if ( $slide -> dataEasing )
				{
					echo 'data-easing="' . $slide -> dataEasing . '" ';
				}
				if ( $slide -> dataEndspeed )
				{
					echo 'data-endspeed="' . $slide -> dataEndspeed . '" ';
				}
				if ( $slide -> dataEndeasing )
				{
					echo 'data-endeasing="' . $slide -> dataEndeasing . '" ';
				}
				if ( $slide -> dataCaptionHidden )
				{
					echo 'data-captionhidden="' . $slide -> dataCaptionHidden. '" ';
				}
			?>>
			<?php
				if ( $slide -> img )
				{
					echo Html :: img( $slide -> img ,[ 'alt' => $slide -> imgTitle ] ) . "\n";
				}
			?>
	<?php
					if ( $slide -> title) 
					{
						echo Html :: tag( 'div', $slide -> title, [ 'class' => 'banner-title' ] );
					}
					if ( $slide -> subtitle )
					{
						echo Html :: tag( 'div', $slide -> subtitle, [ 'class' => 'banner-subtitle' ] );	
					}
					if ( $slide -> link )
					{
						echo Html :: beginTag ( 'span', [ 'class' => 'page-scroll' ] );
						echo '<a target="_blank" class="btn primary-btn" href="' .$slide -> link. '">'. Yii :: t( 'app', 'More' ) . '<i class="glyphicon glyphicon-chevron-right"></i></a>';
						
						echo Html :: endTag( 'span' ) . "\n";		
					}
	?>
	</div>
	<?php
	}
	?>
	</div>
?>

