<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function get_pagination_links($query) {
        return paginate_links(array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => true,
            'type'         => 'array',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => false,
        ));
    }

    public static function comment_form() {
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );

        $fields =  array(
          'author' =>
            '<div class="col-sm-12 col-md-6">'.
            '<input id="author" placeholder="'.__( 'Name', 'domainreference' ).'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
            '" size="30"' . $aria_req . ' />
            </div>',
        
          'email' =>
            '<div class="col-sm-12 col-md-6">'.
            '<input id="email" placeholder="'.__( 'Email', 'domainreference' ).'" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .
            '" size="30"' . $aria_req . ' />
            </div>',
        );

        return comment_form(array(
            'fields' => $fields,
            'class_form' => 'row comment',
            'title_reply_before' => '<a href="#">',
            'title_reply_after' => '</a>',
            'comment_notes_before' => '<div class="col-sm-12"><p class="comment-notes">' . __( 'Your email address will not be published.' ) . '</p></div>',
            'comment_field' => '<div class="col-sm-12"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>'
        ));
    }

    public static function contactInfo() {
        $info = array();
        $info['email_1'] = get_field("email_1", "options");
        $info['email_2'] = get_field("email_2", "options");
        $info['phone_1'] = get_field("phone_1", "options");
        $info['phone_2'] = get_field("phone_2", "options");
        $info['address'] = pll_current_language() == "ar" ? get_field("Address", "options")['ar'] : get_field("Address", "options")['en'];
        return $info;
    }
}
