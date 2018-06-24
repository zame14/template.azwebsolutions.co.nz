<?php
vc_map( array(
    "name"                    => __( "Services" ),
    "base"                    => "services",
    "category"                => __( 'Content' ),
    'show_settings_on_create' => false
) );

add_shortcode( 'services', 'Services' );

function Services() {
    $html = '
    <div class="row services-wrapper">';
    foreach (getServices() as $service) {
        $html .= '
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 service">
            <div class="image-wrapper">
                <img src="' . $service->getFeatureImage() . '" alt="' . $service->getTitle() . '" />
            </div>
            <div class="title">' . $service->getTitle() . '</div>
        </div>';
    }
    $html .= '
    </div>';

    return $html;
}