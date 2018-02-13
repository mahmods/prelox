<?php

namespace App;

use Sober\Controller\Controller;

class TemplateAbout extends Controller
{
    public function main_block() {
        return get_field("main_block");
    }

    public function blocks() {
        return get_field("blocks");
    }
}
