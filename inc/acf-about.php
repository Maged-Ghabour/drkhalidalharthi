<?php
if( function_exists('acf_add_local_field_group') ):

$fields = array(
    array(
        'key' => 'field_tab_general',
        'label' => 'عام',
        'type' => 'tab',
        'placement' => 'top',
    ),
    array(
        'key' => 'field_whatsapp_number',
        'label' => 'رقم الواتساب',
        'name' => 'whatsapp_number',
        'type' => 'text',
        'default_value' => '',
    ),
    array(
        'key' => 'field_tab_hero',
        'label' => 'قسم البداية (Hero)',
        'type' => 'tab',
        'placement' => 'top',
    ),
    array(
        'key' => 'field_about_hero_bg',
        'label' => 'خلفية قسم البداية',
        'name' => 'fikrtak_about_hero_bg',
        'type' => 'image',
        'return_format' => 'url',
    ),
    array(
        'key' => 'field_about_hero_title',
        'label' => 'عنوان قسم البداية',
        'name' => 'fikrtak_about_hero_title',
        'type' => 'text',
        'default_value' => 'استشاري جراحة أورام العظام وإعادة بناء المفاصل',
    ),
    array(
        'key' => 'field_about_hero_desc',
        'label' => 'وصف قسم البداية',
        'name' => 'fikrtak_about_hero_desc',
        'type' => 'textarea',
        'default_value' => 'خبرة متقدمة في التعامل مع الحالات المعقدة والدقيقة في جراحات العظام،<br>باستخدام أحدث التقنيات الطبية لتحقيق أفضل النتائج العلاجية.',
    ),
    array(
        'key' => 'field_about_hero_tag_1',
        'label' => 'الوسم الأول (Tag 1)',
        'name' => 'fikrtak_about_hero_tag_1',
        'type' => 'text',
        'default_value' => 'جراحات أورام العظام',
    ),
    array(
        'key' => 'field_about_hero_tag_2',
        'label' => 'الوسم الثاني (Tag 2)',
        'name' => 'fikrtak_about_hero_tag_2',
        'type' => 'text',
        'default_value' => 'إعادة بناء المفاصل',
    ),
    array(
        'key' => 'field_about_hero_tag_3',
        'label' => 'الوسم الثالث (Tag 3)',
        'name' => 'fikrtak_about_hero_tag_3',
        'type' => 'text',
        'default_value' => 'الجراحات الدقيقة والمعقدة',
    ),
    array(
        'key' => 'field_about_hero_note',
        'label' => 'ملاحظة أسفل الوسوم',
        'name' => 'fikrtak_about_hero_note',
        'type' => 'text',
        'default_value' => 'استعادة الحركة، تحسين جودة الحياة، وتحقيق تعافٍ آمن ودقيق لكل مريض.',
    ),
    array(
        'key' => 'field_tab_edu',
        'label' => 'التعليم والشهادات',
        'type' => 'tab',
        'placement' => 'top',
    )
);

// Education loops
$edu_defaults = array(
    1 => array( 'title' => 'الزمالة الإيطالية جامعة بادوفا', 'sub' => 'في تخصص جراحة أورام العظام وإعادة بناء المفاصل' ),
    2 => array( 'title' => 'استشاري جراحة أورام العظام وإعادة بناء المفاصل', 'sub' => 'تصنيف الهيئة السعودية للتخصصات الصحية' ),
    3 => array( 'title' => 'الزمالة الإيطالية في مستشفى ريزولي في جامعة بولونيا', 'sub' => 'في تخصص جراحة أورام العظام وإعادة بناء المفاصل' ),
    4 => array( 'title' => 'البورد السعودي في جراحة العظام', 'sub' => 'شهادة الاختصاص السعودية' ),
);
for($i=1; $i<=4; $i++) {
    $fields[] = array('key' => 'field_edu_'.$i.'_title', 'label' => 'التعليم '.$i.' - العنوان', 'name' => 'fikrtak_edu_'.$i.'_title', 'type' => 'text', 'default_value' => $edu_defaults[$i]['title']);
    $fields[] = array('key' => 'field_edu_'.$i.'_sub', 'label' => 'التعليم '.$i.' - الوصف', 'name' => 'fikrtak_edu_'.$i.'_sub', 'type' => 'text', 'default_value' => $edu_defaults[$i]['sub']);
    $fields[] = array('key' => 'field_edu_'.$i.'_icon', 'label' => 'التعليم '.$i.' - أيقونة', 'name' => 'fikrtak_edu_'.$i.'_icon', 'type' => 'textarea', 'default_value' => '');
}

$fields[] = array(
    'key' => 'field_tab_exp',
    'label' => 'الخبرة الجراحية',
    'type' => 'tab',
    'placement' => 'top',
);
$fields[] = array(
    'key' => 'field_exp_main_title',
    'label' => 'عنوان الخبرة الجراحية',
    'name' => 'fikrtak_exp_main_title',
    'type' => 'text',
    'default_value' => 'الخبرة الجراحية',
);
$exp_defaults = array(
    1 => 'جراحات أورام العظام',
    2 => 'إعادة بناء المفاصل',
    3 => 'الجراحات الدقيقة والمعقدة',
    4 => 'الحالات المتقدمة',
    5 => 'استعادة وظيفة العظام والمفاصل',
);
for($i=1; $i<=5; $i++) {
    $fields[] = array('key' => 'field_exp_'.$i.'_title', 'label' => 'الخبرة '.$i.' - العنوان', 'name' => 'fikrtak_exp_'.$i.'_title', 'type' => 'text', 'default_value' => $exp_defaults[$i]);
    $fields[] = array('key' => 'field_exp_'.$i.'_icon', 'label' => 'الخبرة '.$i.' - أيقونة', 'name' => 'fikrtak_exp_'.$i.'_icon', 'type' => 'textarea', 'default_value' => '');
}

$fields[] = array(
    'key' => 'field_tab_features',
    'label' => 'المميزات',
    'type' => 'tab',
    'placement' => 'top',
);
$fields[] = array(
    'key' => 'field_features_title',
    'label' => 'عنوان المميزات',
    'name' => 'fikrtak_features_title',
    'type' => 'text',
    'default_value' => 'ما يميز د. خالد الحارثي',
);
$fields[] = array(
    'key' => 'field_features_desc',
    'label' => 'وصف المميزات',
    'name' => 'fikrtak_features_desc',
    'type' => 'textarea',
    'default_value' => 'اختيار د. خالد الحارثي يعني الاعتماد على خبرة علمية وجراحية متقدمة في التعامل مع أدق حالات العظام، مع التركيز على تحقيق أفضل نتيجة علاجية ممكنة لكل مريض.',
);
$fields[] = array(
    'key' => 'field_features_img',
    'label' => 'صورة المميزات',
    'name' => 'fikrtak_features_img',
    'type' => 'image',
    'return_format' => 'url',
);
$features_defaults = array(
    1 => 'خبرة واسعة',
    2 => 'تدريب دولي في إيطاليا',
    3 => 'التعامل مع الحالات المعقدة',
    4 => 'أفضل النتائج الوظيفية',
    5 => 'متابعة دقيقة بعد الجراحة',
);
for($i=1; $i<=5; $i++) {
    $fields[] = array('key' => 'field_feature_'.$i, 'label' => 'ميزة '.$i, 'name' => 'fikrtak_feature_'.$i, 'type' => 'text', 'default_value' => $features_defaults[$i]);
}

$fields[] = array(
    'key' => 'field_tab_method',
    'label' => 'منهجية العلاج',
    'type' => 'tab',
    'placement' => 'top',
);
$fields[] = array(
    'key' => 'field_method_title',
    'label' => 'عنوان منهجية العلاج',
    'name' => 'fikrtak_method_title',
    'type' => 'text',
    'default_value' => 'منهجية العلاج',
);
$fields[] = array(
    'key' => 'field_method_desc',
    'label' => 'وصف منهجية العلاج',
    'name' => 'fikrtak_method_desc',
    'type' => 'textarea',
    'default_value' => 'يتبع د. خالد الحارثي نهجاً طبياً دقيقاً في التعامل مع حالات العظام، يعتمد على التشخيص الشامل والتخطيط الجراحي المتخصص لضمان أفضل نتيجة علاجية ممكنة.',
);
$method_defaults = array(
    1 => array('title' => 'تقييم دقيق للحالة', 'desc' => 'فحص شامل وتحاليل دقيقة لفهم كامل للحالة.'),
    2 => array('title' => 'وضع خطة علاج مناسبة', 'desc' => 'خطة علاجية مخصصة وفق طبيعة الحالة.'),
    3 => array('title' => 'التدخل الجراحي عند الحاجة', 'desc' => 'تنفيذ الجراحة بأعلى مستويات الدقة والأمان.'),
    4 => array('title' => 'المتابعة بعد العلاج', 'desc' => 'متابعة منتظمة لضمان أفضل النتائج.'),
);
for($i=1; $i<=4; $i++) {
    $fields[] = array('key' => 'field_method_'.$i.'_title', 'label' => 'منهجية '.$i.' - العنوان', 'name' => 'fikrtak_method_'.$i.'_title', 'type' => 'text', 'default_value' => $method_defaults[$i]['title']);
    $fields[] = array('key' => 'field_method_'.$i.'_desc', 'label' => 'منهجية '.$i.' - الوصف', 'name' => 'fikrtak_method_'.$i.'_desc', 'type' => 'textarea', 'default_value' => $method_defaults[$i]['desc']);
}

$fields[] = array(
    'key' => 'field_tab_cta',
    'label' => 'دعوة الإجراء (CTA)',
    'type' => 'tab',
    'placement' => 'top',
);
$fields[] = array(
    'key' => 'field_cta_bg',
    'label' => 'خلفية دعوة الإجراء (CTA)',
    'name' => 'fikrtak_about_cta_bg',
    'type' => 'image',
    'return_format' => 'url',
);
$fields[] = array(
    'key' => 'field_cta_title',
    'label' => 'عنوان دعوة الإجراء',
    'name' => 'fikrtak_about_cta_title',
    'type' => 'text',
    'default_value' => 'احجز موعدك الآن',
);
$fields[] = array(
    'key' => 'field_cta_desc',
    'label' => 'وصف دعوة الإجراء',
    'name' => 'fikrtak_about_cta_desc',
    'type' => 'textarea',
    'default_value' => 'ابدأ رحلتك العلاجية مع د. خالد الحارثي للحصول على تقييم دقيق لحالتك وخطة علاج مناسبة تعتمد على أحدث الأساليب في جراحة العظام.',
);
$fields[] = array(
    'key' => 'field_cta_btn1_text',
    'label' => 'نص الزر الأول',
    'name' => 'fikrtak_about_cta_btn1_text',
    'type' => 'text',
    'default_value' => 'احجز موعدك',
);
$fields[] = array(
    'key' => 'field_cta_btn2_text',
    'label' => 'نص الزر الثاني',
    'name' => 'fikrtak_about_cta_btn2_text',
    'type' => 'text',
    'default_value' => 'استشارة الآن',
);
$cta_features = array(
    1 => 'استشارة طبية',
    2 => 'تقييم شامل للحالة',
    3 => 'خطة علاج متخصصة',
);
for($i=1; $i<=3; $i++) {
    $fields[] = array('key' => 'field_cta_feat_'.$i, 'label' => 'ميزة دعوة الإجراء '.$i, 'name' => 'fikrtak_about_cta_feat_'.$i, 'type' => 'text', 'default_value' => $cta_features[$i]);
}

$fields[] = array(
    'key' => 'field_tab_faq',
    'label' => 'الأسئلة الشائعة',
    'type' => 'tab',
    'placement' => 'top',
);
$fields[] = array(
    'key' => 'field_faq_title',
    'label' => 'عنوان الأسئلة الشائعة',
    'name' => 'fikrtak_about_faq_title',
    'type' => 'text',
    'default_value' => 'إجابات لأكثر الأسئلة<br>شيوعاً',
);
$fields[] = array(
    'key' => 'field_faq_desc',
    'label' => 'وصف الأسئلة الشائعة',
    'name' => 'fikrtak_about_faq_desc',
    'type' => 'textarea',
    'default_value' => 'نجيب على أبرز استفساراتك حول فترة التعافي وما يمكن توقعه خلال جلسات المتابعة.',
);
$fields[] = array(
    'key' => 'field_faq_btn_text',
    'label' => 'نص زر الأسئلة الشائعة',
    'name' => 'fikrtak_about_faq_btn_text',
    'type' => 'text',
    'default_value' => 'احجز الآن',
);
$faq_defaults = array(
    1 => array('q' => 'كم تستغرق فترة المتابعة بعد العملية؟', 'a' => 'تعتمد المدة على نوع العملية وحالة المريض، وتتراوح عادة بين أسابيع إلى بضعة أشهر لضمان التئام العظام واستعادة الوظائف الحركية بالكامل.'),
    2 => array('q' => 'متى يمكنني البدء في العلاج الطبيعي؟', 'a' => 'يتم تحديد وقت البدء بناءً على نوع العملية وتوجيهات الطبيب المعالج، وغالباً ما يبدأ العلاج الطبيعي بشكل مبدئي بعد أيام من الجراحة.'),
    3 => array('q' => 'كيف يمكنني التحكم في الألم خلال فترة التعافي؟', 'a' => 'يوصف الطبيب مجموعة من المسكنات وتوجيهات للراحة تسهم في السيطرة على الألم بطريقة فعالة وآمنة.'),
    4 => array('q' => 'هل المتابعة تشمل تغيير الضمادات فقط؟', 'a' => 'تشمل المتابعة تقييم الجرح، إزالة الغرز، إجراء أشعة للاطمئنان على التئام العظام وتوجيه المريض لخطوات العلاج الطبيعي.'),
    5 => array('q' => 'ما هي العلامات التي تستوجب التواصل الفوري مع الدكتور؟', 'a' => 'تواصل فوراً في حال ظهور ارتفاع حاد في الحرارة، إفرازات أو احمرار شديد حول الجرح، ألم متصاعد لا يُحتمل، أو تورم مفاجئ.'),
);
for($i=1; $i<=5; $i++) {
    $fields[] = array('key' => 'field_faq_q_'.$i, 'label' => 'سؤال '.$i, 'name' => 'fikrtak_about_faq_q_'.$i, 'type' => 'text', 'default_value' => $faq_defaults[$i]['q']);
    $fields[] = array('key' => 'field_faq_a_'.$i, 'label' => 'جواب '.$i, 'name' => 'fikrtak_about_faq_a_'.$i, 'type' => 'textarea', 'default_value' => $faq_defaults[$i]['a']);
}

acf_add_local_field_group(array(
    'key' => 'group_about_page_v2',
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

// Force default values to appear on existing pages if the field is empty
add_filter('acf/load_value', function($value, $post_id, $field) {
    if (empty($value) && isset($field['default_value']) && $field['default_value'] !== '') {
        return $field['default_value'];
    }
    return $value;
}, 10, 3);

endif;
