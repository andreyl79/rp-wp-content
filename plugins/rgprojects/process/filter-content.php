<?php

function rp_filter_projects_info_content( $content ){


	global $post;
	$rp_data                =   get_post_meta( $post->ID, 'rp_data', true );
	
	?>
		<div class="item-info-block">
			<div class="info-block__top">
				<?php if ( $rp_data[ 'date' ] !== '' ): ?>
					<div class="info-block block__date">
						<span class ="span-strong">Дата: </span>
						<span class ="info-text"><?php  echo $rp_data[ 'date' ]; ?></span>
					</div>	
				<?php endif ?>
				<?php if ( $rp_data[ 'city' ] !== '' ): ?>
					<div class="info-block block__city">
						<span class="span-strong">Город: </span>
						<span class="info-text"><?php echo $rp_data[ 'city' ]; ?></span>
					</div>				
				<?php endif ?>
			</div>
			<div class="info-block__bottom">
			<?php if ( $rp_data[ 'orderer' ] !== '' ): ?>
				<div class="info-block block__orderer">
					<span class="span-strong">Заказчик: </span>
					<span class="info-text"><?php echo $rp_data[ 'orderer' ]; ?></span>
				</div>
			<?php endif ?>
			<?php if ( $rp_data[ 'address' ] !== '' ): ?>
				<div class="info-block block__address">
					<span class="span-strong">Адрес: </span>
					<span class="info-text"><?php echo $rp_data[ 'address' ]; ?></span>
				</div>
			<?php endif ?>
			</div>
		</div>
	<?php
	//$projects_html          =   file_get_contents( 'project-template.php', true );
	//$projects_html          =   str_replace( 'PROJECT_DATE_PH', $rp_data['date'], $projects_html );
	//$projects_html          =   str_replace( 'PROJECT_CITY_PH', $rp_data['city'], $projects_html );
	//$projects_html          =   str_replace( 'PROJECT_ORDERER_PH', $rp_data['orderer'], $projects_html );
	//$projects_html          =   str_replace( 'PROJECT_ADDRESS_PH', $rp_data['address'], $projects_html );

		if ( is_singular('rgprojects') ){
		return $projects_html . $content;
	}

	return $projects_html;
}
