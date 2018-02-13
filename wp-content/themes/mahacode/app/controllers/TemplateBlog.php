<?php

namespace App;

use Sober\Controller\Controller;

class TemplateBlog extends Controller
{
    public function posts() {
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type'=>'post',
            'post_status'=>'publish',
            'posts_per_page'=> -1,
            'paged' => $paged
        );
        $query = new \WP_Query($args);
        return $query;
    }
}
