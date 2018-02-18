<?php

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function slider() {
        return get_field("slider");
    }

    public function aboutUsImage() {
        return get_field("about_us_image");
    }

    public function whySection() {
        return get_field("why_section");
    }

    public function testimonials() {
        $args = array(
            'post_type' => 'testimonials',
            'posts_per_page'=> 5,
        );
        $query = new \WP_QUERY($args);
        return $query->posts;
    }

    public function blogPosts() {
        $args = array(
            'post_type' => 'post',
            'posts_per_page'=> 5,
            'post_status'=>'publish',
        );
        $query = new \WP_QUERY($args);
        return $query->posts;
    }

    public function aboutBlock() {
        $about_page = pll_get_post(20);
        return get_field("main_block", $about_page);
    }

    public function productVideo() {
        $product_page = pll_get_post(43);
        return get_field("video", $product_page);
    }

    public function productDetails() {
        $product_page = pll_get_post(43);
        return get_field("details", $product_page);
    }
}
