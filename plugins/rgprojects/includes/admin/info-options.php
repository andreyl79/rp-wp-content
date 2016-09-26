<?php

function rp_info_options_mb( $post ){
	$rp_data            =   get_post_meta( $post->ID, 'rp_data', true );

	if(!$rp_data){
		$rp_data        =   array(
			'date'      =>  '',
			'city'      =>  '',
			'orderer'      =>  '',
			'address'      =>  ''
		);
	}
	?>
	<div class="form-group">
		<label>Poject Date</label>
		<input type="text" class="form-control" name="rp_inputProjectDate" value="<?php echo $rp_data['date'] ?>">
	</div>
	<div class="form-group">
		<label>Project City</label>
		<input type="text" class="form-control" name="rp_inputProjectCity" value="<?php echo $rp_data['city'] ?>">
	</div>
	<div class="form-group">
		<label>Project Orderer</label>
		<input type="text" class="form-control" name="rp_inputProjectOrderer" value="<?php echo $rp_data['orderer'] ?>">
	</div>
	<div class="form-group">
		<label>Project Address</label>
		<input type="text" class="form-control" name="rp_inputProjectAddress" value="<?php echo $rp_data['address'] ?>">
	</div>
	<?php
}