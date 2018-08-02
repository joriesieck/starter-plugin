<?php
/**
 * Exception handling
 * @since 1.0.0
 * Created by PhpStorm.
 * User: JorieSieck
 * Date: 8/1/2018
 * Time: 3:58 PM
 */

namespace KnowTheCode;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;


add_action('init', __NAMESPACE__ . '\load_whoops', 1);
/*
 * load whoops
 */
function load_whoops() {
    $whoops = new Run();
    $error_page = new PrettyPageHandler();
    $error_page-> setEditor( 'sublime' );
    $whoops->pushHandler( $error_page );
    $whoops->register();
}
