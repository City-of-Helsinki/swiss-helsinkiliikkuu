<?php

return array(
          'key' => 'group_'.$blockName,
          'name' => $blockName,
          'label' => str_replace('-', ' ', ucfirst($blockName)),
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_'.$blockName.'_tab1',
							'label' => 'Content',
							'name' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 0,
						),
						array(
							'key' => 'field_'.$blockName.'_posts',
							'label' => 'Posts',
							'name' => 'posts',
							'type' => 'relationship',
							'instructions' => 'If left empty will show the number of latest posts found in the settings.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'post_type' => array(
								0 => 'post',
							),
							'taxonomy' => array(
							),
							'filters' => array(
								0 => 'search',
							),
							'elements' => '',
							'min' => '',
							'max' => '',
							'return_format' => 'object',
						),
						array(
							'key' => 'field_'.$blockName.'_tab2',
							'label' => 'Section Header',
							'name' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 0,
						),
						array(
							'key' => 'field_'.$blockName.'_section_header',
							'label' => 'Section Header',
							'name' => 'section_header',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_'.$blockName.'_tab3',
							'label' => 'Settings',
							'name' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 0,
						),
						array(
							'key' => 'field_'.$blockName.'_number_of_posts',
							'label' => 'Number of Posts',
							'name' => 'number_of_posts',
							'type' => 'number',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 3,
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'min' => '',
							'max' => '',
							'step' => '',
						),
						array(
							'key' => 'field_'.$blockName.'_see_more',
							'label' => 'See More',
							'name' => 'see_more',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '48',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
							'ui' => 0,
							'ui_on_text' => '',
							'ui_off_text' => '',
						),
						array(
							'key' => 'field_'.$blockName.'_see_more_text',
							'label' => 'See More Text',
							'name' => 'see_more_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '33',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_'.$blockName.'_see_more_url',
							'label' => 'See More URL',
							'name' => 'see_more_url',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '33',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '',
					'max' => '',
				);