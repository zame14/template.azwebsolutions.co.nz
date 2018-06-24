<?php
vc_map( array(
    "name"                    => __( "Testimonials" ),
    "base"                    => "testimonials",
    "category"                => __( 'Content' ),
    'show_settings_on_create' => false
) );

add_shortcode( 'testimonials', 'Testimonials' );

function Testimonials() {
    $testimonials = getTestimonials();
    shuffle($testimonials);
    $i = 1;
    $html = '
    <div class="testimonials-wrapper">
        <ul>';
        foreach ($testimonials as $testimony) {
            $html .= '<li>' . $testimony->getContent() . ' <b>' . $testimony->getTitle() . '</b></li>';
            if($i == 3) break;
            $i++;
        }
        $html .= '
        </ul>
    </div>';

    return $html;
}