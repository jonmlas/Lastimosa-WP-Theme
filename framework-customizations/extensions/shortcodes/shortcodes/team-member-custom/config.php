<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Team Member', 'fw' ),
	'description' => __( 'Add a Team Member', 'fw' ),
	'tab'         => __( 'Content Elements', 'fw' ),
	'popup_size'  => 'medium',
	'title_template' => '{{ if (o.image) { }} <img class="media-image" src="{{-o.image.url }}" /> {{ } }}
						{{ if (o.name) { }} <h3>{{-o.name }}</h3> {{ } }}
						{{ if (o.job) { }} <h5>{{-o.job }}</h5> {{ } }}
						{{ if (o.desc) { }} <div>{{-o.desc }}</div> {{ } }}',
						
);
