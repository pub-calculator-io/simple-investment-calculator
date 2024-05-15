<?php
/*
Plugin Name: CI Simple investment calculator
Plugin URI: https://www.calculator.io/simple-investment-calculator/
Description: Free investment calculator that uses the formula PV (1 + R)ⁿ to help investors understand how to calculate investment returns and analyze investments.
Version: 1.0.0
Author: Simple Investment Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_simple_investment_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Simple Investment Calculator by www.calculator.io";

function display_calcio_ci_simple_investment_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Simple Investment Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_simple_investment_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_simple_investment_calculator', 'display_calcio_ci_simple_investment_calculator' );