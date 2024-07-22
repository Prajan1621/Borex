<?php
// Video Post Meta
$borex_video_post_meta = 'borex_video_post_format_meta';

CSF::createMetabox( $borex_video_post_meta, array(
	'title'        => esc_html__('Video Post Format Options', 'borex' ),
	'post_type'    => 'post',
	'post_formats' => array('video'),
) );

CSF::createSection( $borex_video_post_meta, array(
	'fields' => array(

		array(
			'id'    => 'post_video_url',
			'type'  => 'text',
			'title' => esc_html__('Video URL', 'borex' ),
			'desc'    => esc_html__( 'Paste video URL here', 'borex' ),
		),

	)
));

// Audio Post Meta
$borex_audio_post_meta = 'audio_post_format_meta';

CSF::createMetabox( $borex_audio_post_meta, array(
	'title'        => esc_html__('Audio Post Format Options', 'borex' ),
	'post_type'    => 'post',
	'post_formats' => array('audio'),
) );

CSF::createSection( $borex_audio_post_meta, array(
	'fields' => array(

		array(
			'id'    => 'audio_embed_code',
			'type'  => 'code_editor',
			'settings' => array(
				'theme'  => 'monokai',
				'mode'   => 'htmlmixed',
			),
			'title' => esc_html__('Audio Embed Code', 'borex' ),
			'desc'    => esc_html__( 'Paste sound cloud audio embed code here', 'borex' ),
		),

	)
));


// Gallery Post Meta
$borex_gallery_post_meta = 'gallery_post_format_meta';

CSF::createMetabox( $borex_gallery_post_meta, array(
	'title'        => esc_html__('Gallery Post Format Options', 'borex' ),
	'post_type'    => 'post',
	'post_formats' => array('gallery'),
) );

CSF::createSection( $borex_gallery_post_meta, array(
	'fields' => array(

		array(
			'id'          => 'post_gallery_images',
			'type'        => 'gallery',
			'title' => esc_html__('Gallery Images', 'borex' ),
			'add_title'   => esc_html__('Upload Gallery Images', 'borex'),
			'edit_title'  => esc_html__('Edit Gallery Images', 'borex'),
			'clear_title' => esc_html__('Remove Gallery Images', 'borex'),
			'desc'    => esc_html__( 'Upload gallery images from here', 'borex' ),
		),

	)
));