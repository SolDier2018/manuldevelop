<?php
/**
 * Initialize the custom Meta Boxes.
 *
 * @package OptionTree
 */

add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @since 2.0
 */
function custom_meta_boxes() {

	$main_page = array(
		'id'       => 'main_page_box',
		'title'    => 'Чем я занимаюсь',
		'desc'     => '',
		'pages'    => array( 'page' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array(
			array(
				'label' => 'Чем я занимаюсь',
				'id'    => 'what_i_am_do',
				'type'  => 'tab',
			),
			array(
				'id'    => 'what_i_am_do_on_off',
				'label' => 'Показать блок',
				'desc'  => 'Показывать или нет блок на главной странице',
				'std'   => 'off',
				'type'  => 'on-off'
			),

			array(
				'id'    => 'what_title',
				'label' => 'Заголовок блока',
				'desc'  => '',
				'type'  => 'text'
			),
			array(
				'id'    => 'what_desc',
				'label' => 'Описание блока',
				'desc'  => '',
				'type'  => 'textarea'
			),

			array(
				'id'        => 'what_i_am_do_content',
				'label'     => 'Контент блока',
				'desc'      => '',
				'std'       => '',
				'type'      => 'list-item',
				'condition' => 'what_i_am_do_on_off:is(on)',
				'settings'  => array(

					array(
						'id'    => 'what_logo_item',
						'label' => 'Картинка',
						'desc'  => '',
						'type'  => 'upload'
					),
					array(
						'id'    => 'what_title_item',
						'label' => 'Заголовок',
						'desc'  => '',
						'type'  => 'text'
					),
					array(
						'id'    => 'what_desc_item',
						'label' => 'Описание',
						'desc'  => '',
						'type'  => 'text'
					)
				)
			),
			array(
				'label' => 'Мои работы',
				'id'    => 'my_working',
				'type'  => 'tab',
			),
			array(
				'id'    => 'my_working_on_off',
				'label' => 'Показать блок',
				'desc'  => 'Показывать или нет блок на главной странице',
				'std'   => 'on',
				'type'  => 'on-off'
			),
			array(
				'id'        => 'my_working_title',
				'label'     => 'Заголовок блока',
				'desc'      => '',
				'condition' => 'my_working_on_off:is(on)',
				'type'      => 'text'
			),
			array(
				'id'        => 'my_working_desc',
				'label'     => 'Описание блока',
				'desc'      => '',
				'condition' => 'my_working_on_off:is(on)',
				'type'      => 'textarea'
			),
			array(
				'id'        => 'my_working_content',
				'label'     => 'Контент блока',
				'desc'      => '',
				'std'       => '',
				'type'      => 'list-item',
				'condition' => 'my_working_on_off:is(on)',
				'settings'  => array(

					array(
						'id'    => 'my_working_logo_item',
						'label' => 'Картинка проекта',
						'desc'  => '',
						'type'  => 'upload'
					),
					array(
						'id'    => 'my_working_title_item',
						'label' => 'Заголовок проекта',
						'desc'  => '',
						'type'  => 'text'
					),
					array(
						'id'    => 'my_working_desc_item',
						'label' => 'Описание проекта',
						'desc'  => '',
						'type'  => 'text'
					),
					array(
						'id'    => 'my_working_link_item',
						'label' => 'Ссылка на работу',
						'desc'  => '',
						'type'  => 'text'
					)
				)
			),
			array(
				'label' => 'Мои скилы',
				'id'    => 'my_skills',
				'type'  => 'tab',
			),
			array(
				'id'    => 'my_skills_on_off',
				'label' => 'Показать блок',
				'desc'  => 'Показывать или нет блок на главной странице',
				'std'   => 'on',
				'type'  => 'on-off'
			),
			array(
				'id'        => 'my_skills_title',
				'label'     => 'Заголовок блока',
				'desc'      => '',
				'condition' => 'my_skills_on_off:is(on)',
				'type'      => 'text'
			),
			array(
				'id'        => 'my_skills_desc',
				'label'     => 'Описание блока',
				'desc'      => '',
				'condition' => 'my_skills_on_off:is(on)',
				'type'      => 'textarea'
			),
			array(
				'id'        => 'my_skills_content',
				'label'     => 'Контент блока',
				'desc'      => '',
				'std'       => '',
				'type'      => 'list-item',
				'condition' => 'my_skills_on_off:is(on)',
				'settings'  => array(
					array(
						'id'    => 'my_skills_title_item',
						'label' => 'Заголовок проекта',
						'desc'  => '',
						'type'  => 'text'
					),
					array(
						'id'    => 'my_skills_desc_item',
						'label' => 'Проценты',
						'desc'  => '',
						'type'  => 'text'
					)
				)
			),
			array(
				'label' => 'Отзывы',
				'id'    => 'comments',
				'type'  => 'tab',
			),
			array(
				'id'    => 'comments_on_off',
				'label' => 'Показать блок',
				'desc'  => 'Показывать или нет блок на главной странице',
				'std'   => 'on',
				'type'  => 'on-off'
			),
			array(
				'id'        => 'comments_title',
				'label'     => 'Заголовок блока',
				'desc'      => '',
				'condition' => 'comments_on_off:is(on)',
				'type'      => 'text'
			),
			array(
				'id'        => 'comments_desc',
				'label'     => 'Описание блока',
				'desc'      => '',
				'condition' => 'comments_on_off:is(on)',
				'type'      => 'textarea'
			),
			array(
				'id'        => 'comments_content',
				'label'     => 'Контент блока',
				'desc'      => '',
				'std'       => '',
				'type'      => 'list-item',
				'condition' => 'comments_on_off:is(on)',
				'settings'  => array(

					array(
						'id'    => 'comments_photo_item',
						'label' => 'Картинка проекта',
						'desc'  => '',
						'type'  => 'upload'
					),
					array(
						'id'    => 'comments_title_item',
						'label' => 'Имя клиента',
						'desc'  => '',
						'type'  => 'text'
					),
					array(
						'id'    => 'comments_desc_item',
						'label' => 'Текст отзыва',
						'desc'  => '',
						'type'  => 'text'
					)
				)
			),
			array(
				'label' => 'Обратная связь',
				'id'    => 'feedback',
				'type'  => 'tab',
			),
			array(
				'id'        => 'feedback_title',
				'label'     => 'Заголовок блока',
				'desc'      => '',
				'type'      => 'text'
			),
			array(
				'id'        => 'feedback_desc',
				'label'     => 'Описание блока',
				'desc'      => '',
				'type'      => 'textarea'
			),
		)
	);

	$my_meta_box = array(
		'id'       => 'demo_meta_box',
		'title'    => __( 'Demo Meta Box', 'theme-text-domain' ),
		'desc'     => '',
		'pages'    => array( 'post' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array(
			array(
				'label' => __( 'Conditions', 'theme-text-domain' ),
				'id'    => 'demo_conditions',
				'type'  => 'tab',
			),
			array(
				'label' => __( 'Show Gallery', 'theme-text-domain' ),
				'id'    => 'demo_show_gallery',
				'type'  => 'on-off',
				'desc'  => sprintf( __( 'Shows the Gallery when set to %s.', 'theme-text-domain' ), '<code>on</code>' ),
				'std'   => 'off',
			),
			array(
				'label'     => '',
				'id'        => 'demo_textblock',
				'type'      => 'textblock',
				'desc'      => __( 'Congratulations, you created a gallery!', 'theme-text-domain' ),
				'operator'  => 'and',
				'condition' => 'demo_show_gallery:is(on),demo_gallery:not()',
			),
			array(
				'label'     => __( 'Gallery', 'theme-text-domain' ),
				'id'        => 'demo_gallery',
				'type'      => 'gallery',
				'desc'      => sprintf( __( 'This is a Gallery option type. It displays when %s.', 'theme-text-domain' ), '<code>demo_show_gallery:is(on)</code>' ),
				'condition' => 'demo_show_gallery:is(on)',
			),
			array(
				'label' => __( 'More Options', 'theme-text-domain' ),
				'id'    => 'demo_more_options',
				'type'  => 'tab',
			),
			array(
				'label' => __( 'Text', 'theme-text-domain' ),
				'id'    => 'demo_text',
				'type'  => 'text',
				'desc'  => __( 'This is a demo Text field.', 'theme-text-domain' ),
			),
			array(
				'label' => __( 'Textarea', 'theme-text-domain' ),
				'id'    => 'demo_textarea',
				'type'  => 'textarea',
				'desc'  => __( 'This is a demo Textarea field.', 'theme-text-domain' ),
			),
		),
	);

	/**
	 * Register our meta boxes using the
	 * ot_register_meta_box() function.
	 */
	if ( function_exists( 'ot_register_meta_box' ) ) {
		ot_register_meta_box( $my_meta_box );
		$post_id       = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
		$template_file = get_post_meta( $post_id, '_wp_page_template', true );
		if ( $template_file == 'home-page.php' ) {
			ot_register_meta_box( $main_page );
		}


	}


}
