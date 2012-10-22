<?php defined('BASEPATH') or exit('No direct script access allowed');

class installation extends base_installation
{
    public function install()
    {
        $ci = &get_instance();
        $ci->load->helper('date');
        $this->statusses = array(
            array(
                'slug'        => 'stripe_payments',
                'name'        => serialize(array(
                    'nl' => 'De Stripe betaling is door de gebruiker aangepast. [FOUT]',
                    'en' => 'The Stripe payment is modified by a user.[ERROR]'
                )),
                'description' => serialize(array(
                    'nl' => '',
                    'en' => ''
                )),
                'notify'      => 0,
                'created_on'  => now()
            ),
            array(
                'slug'        => 'stripe_success',
                'name'        => serialize(array(
                    'nl' => 'De Stripe betaling is gelukt.',
                    'en' => 'The Stripe payment ran successfully.'
                )),
                'description' => serialize(array(
                    'nl' => '',
                    'en' => ''
                )),
                'notify'      => 0,
                'created_on'  => now()
            ),array(
                'slug'        => 'stripe_pending',
                'name'        => serialize(array(
                    'nl' => 'De PayPal betaling is in afwachting.',
                    'en' => 'The Stripe payment is pending.'
                )),
                'description' => serialize(array(
                    'nl' => '',
                    'en' => ''
                )),
                'notify'      => 0,
                'created_on'  => now()
            ),
            array(
                'slug'        => 'stripe_failed',
                'name'        => serialize(array(
                    'nl' => 'De Stripe betaling is mislukt.',
                    'en' => 'The Stripe payment is failed.'
                )),
                'description' => serialize(array(
                    'nl' => '',
                    'en' => ''
                )),
                'notify'      => 0,
                'created_on'  => now()
            ),
        );
        return parent::install();
    }

    public function deinstall()
    {

    }
}