<?php defined('BASEPATH') or exit('No direct script access allowed');

$gateway_details = array(
    'name'         => array(
        'nl' => 'Stripe',
        'en' => 'Stripe'
    ),
    'description' => array(
        'nl' => 'Pay online with Stripe Payments.',
        'en' => 'Pay online with Stripe Payments.'
    ),
    'status_codes' => array(),
    'version'      => 0.1,
    'logo'         => '{{gateway}}/img/paypal-logo.png',
    'redirect_url' => '{{url:base}}cart/redirect/{{payment:slug}}'
//    'default_status' => 'ideal_in_progress'
);