<?php

namespace App;

use Sober\Controller\Controller;

class TemplateProduct extends Controller
{
    public function details() {
        return get_field("details");
    }
    
    public function video() {
        return get_field("video");
    }
}
