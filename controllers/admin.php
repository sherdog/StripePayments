<?php defined('BASEPATH') or exit('No direct script access allowed');

class Payment_stripe
{
    public $slug = 'stripe_payments';

    public function update($fields)
    {
        $data['test_secret_key'] = $fields['test_secret_key'];
		$data['test_publishable_key'] = $fields['test_publishable_key'];
        $data['live_secret_key']   = $fields['live_secret_key'];
        $data['live_publishable_key']   = $fields['live_publishable_key'];
		
        return serialize($data);
    }
}