<?php
if( function_exists('acf_add_local_field_group') ):

$fields = array(
    array(
        'key' => 'field_whatsapp_number',
        'label' => 'رقم الواتساب',
        'name' => 'whatsapp_number',
        'type' => 'text',
    ),
    array(
        'key' => 'field_exp_main_title',
        'label' => 'عنوان الخبرة الجراحية',
        'name' => 'fikrtak_exp_main_title',
        'type' => 'text',
    ),
    array(
        'key' => 'field_features_title',
        'label' => 'عنوان المميزات',
        'name' => 'fikrtak_features_title',
        'type' => 'text',
    ),
    array(
        'key' => 'field_features_desc',
        'label' => 'وصف المميزات',
        'name' => 'fikrtak_features_desc',
        'type' => 'textarea',
    ),
    array(
        'key' => 'field_features_img',
        'label' => 'صورة المميزات',
        'name' => 'fikrtak_features_img',
        'type' => 'image',
        'return_format' => 'url',
    ),
    array(
        'key' => 'field_method_title',
        'label' => 'عنوان منهجية العلاج',
        'name' => 'fikrtak_method_title',
        'type' => 'text',
    ),
    array(
        'key' => 'field_method_desc',
        'label' => 'وصف منهجية العلاج',
        'name' => 'fikrtak_method_desc',
        'type' => 'textarea',
    ),
    array(
        'key' => 'field_cta_bg',
        'label' => 'خلفية دعوة الإجراء (CTA)',
        'name' => 'fikrtak_about_cta_bg',
        'type' => 'image',
        'return_format' => 'url',
    ),
    array(
        'key' => 'field_cta_title',
        'label' => 'عنوان دعوة الإجراء',
        'name' => 'fikrtak_about_cta_title',
        'type' => 'text',
    ),
    array(
        'key' => 'field_cta_desc',
        'label' => 'وصف دعوة الإجراء',
        'name' => 'fikrtak_about_cta_desc',
        'type' => 'textarea',
    ),
    array(
        'key' => 'field_cta_btn1_text',
        'label' => 'نص الزر الأول',
        'name' => 'fikrtak_about_cta_btn1_text',
        'type' => 'text',
    ),
    array(
        'key' => 'field_cta_btn2_text',
        'label' => 'نص الزر الثاني',
        'name' => 'fikrtak_about_cta_btn2_text',
        'type' => 'text',
    ),
    array(
        'key' => 'field_faq_title',
        'label' => 'عنوان الأسئلة الشائعة',
        'name' => 'fikrtak_about_faq_title',
        'type' => 'text',
    ),
    array(
        'key' => 'field_faq_desc',
        'label' => 'وصف الأسئلة الشائعة',
        'name' => 'fikrtak_about_faq_desc',
        'type' => 'textarea',
    ),
    array(
        'key' => 'field_faq_btn_text',
        'label' => 'نص زر الأسئلة الشائعة',
        'name' => 'fikrtak_about_faq_btn_text',
        'type' => 'text',
    ),
);

for($i=1; $i<=4; $i++) {
    $fields[] = array('key' => 'field_edu_'.$i.'_title', 'label' => 'التعليم '.$i.' - العنوان', 'name' => 'fikrtak_edu_'.$i.'_title', 'type' => 'text');
    $fields[] = array('key' => 'field_edu_'.$i.'_sub', 'label' => 'التعليم '.$i.' - الوصف', 'name' => 'fikrtak_edu_'.$i.'_sub', 'type' => 'text');
    $fields[] = array('key' => 'field_edu_'.$i.'_icon', 'label' => 'التعليم '.$i.' - أيقونة', 'name' => 'fikrtak_edu_'.$i.'_icon', 'type' => 'textarea');
}

for($i=1; $i<=4; $i++) {
    $fields[] = array('key' => 'field_exp_'.$i.'_title', 'label' => 'الخبرة '.$i.' - العنوان', 'name' => 'fikrtak_exp_'.$i.'_title', 'type' => 'text');
    $fields[] = array('key' => 'field_exp_'.$i.'_icon', 'label' => 'الخبرة '.$i.' - أيقونة', 'name' => 'fikrtak_exp_'.$i.'_icon', 'type' => 'textarea');
}

for($i=1; $i<=5; $i++) {
    $fields[] = array('key' => 'field_feature_'.$i, 'label' => 'ميزة '.$i, 'name' => 'fikrtak_feature_'.$i, 'type' => 'text');
}

for($i=1; $i<=4; $i++) {
    $fields[] = array('key' => 'field_method_'.$i.'_title', 'label' => 'منهجية '.$i.' - العنوان', 'name' => 'fikrtak_method_'.$i.'_title', 'type' => 'text');
    $fields[] = array('key' => 'field_method_'.$i.'_desc', 'label' => 'منهجية '.$i.' - الوصف', 'name' => 'fikrtak_method_'.$i.'_desc', 'type' => 'textarea');
}

for($i=1; $i<=3; $i++) {
    $fields[] = array('key' => 'field_cta_feat_'.$i, 'label' => 'ميزة دعوة الإجراء '.$i, 'name' => 'fikrtak_about_cta_feat_'.$i, 'type' => 'text');
}

for($i=1; $i<=5; $i++) {
    $fields[] = array('key' => 'field_faq_q_'.$i, 'label' => 'سؤال '.$i, 'name' => 'fikrtak_about_faq_q_'.$i, 'type' => 'text');
    $fields[] = array('key' => 'field_faq_a_'.$i, 'label' => 'جواب '.$i, 'name' => 'fikrtak_about_faq_a_'.$i, 'type' => 'textarea');
}

acf_add_local_field_group(array(
	'key' => 'group_about_page_fields',
	'title' => 'إعدادات محتوى صفحة من نحن',
	'fields' => $fields,
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-about.php',
			),
		),
	),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
));

endif;
