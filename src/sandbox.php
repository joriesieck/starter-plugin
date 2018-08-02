<?php
/**
 * Description of file
 * @since 1.0.0
 * Created by PhpStorm.
 * User: JorieSieck
 * Date: 8/1/2018
 * Time: 3:59 PM
 */

namespace KnowTheCode;

add_action('loop_start', __NAMESPACE__ . '\demo');
function demo() {
    d( get_the_ID() );
}