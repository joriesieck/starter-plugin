<?php
/**
 * Starter Wordpress Plugin
 *
 * @package     KnowTheCode
 * @author      joriesieck
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Starter Wordpress Plugin
 * Plugin URI:  https://www.joriesieck.com
 * Description: Know the Code Starter Sandbox plugin. Use this plugin for all of the Know the Code Demo Labs and Docx.
 * Version:     1.0.0
 * Author:      joriesieck
 * Author URI:  https://www.joriesieck.com
 * Text Domain: knowthecode
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
namespace KnowTheCode;

if( ! defined('ABSPATH')){
    exit('Cheatin&#8217, uh?');
}

require_once(__DIR__ . '/assets/vendor/autoload.php');

/*add_action('init', __NAMESPACE__ . '/launch');
function launch(){

}
*/