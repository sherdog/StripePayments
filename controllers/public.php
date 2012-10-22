<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property MY_Controller $ci
 */

class Payment_stripe
{
    public $ci;

    private $_slug = 'stripe';

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function process_checkout_view()
    {
        $slug = $this->ci->payment_driver->get_payment_data('payment_method');
        if ($slug !== FALSE)
        {
            $gateway = $this->ci->payment_driver->get_payment_gateway($slug);
            if ($gateway !== FALSE)
            {
                $amount  = $this->ci->payment_driver->get_order_data() / 100;
                $invoice = $this->ci->shopping_cart->get_order_id();
                $this->ci->load->helper('webshop/server_localhost');
//                $mode      = (server_localhost() || (int)$this->ci->current_user->id == 1 ? 1 : 0);
                $signature = md5($gateway['paypal_address'] . $invoice . $amount . $gateway['paypal_currency'] . $gateway['secret_key']);
                return $this->ci->payment_driver->load_view($slug, 'confirm_checkout', array(
                    'amount'         => $amount,
                    'currency'       => $gateway['paypal_currency'],
                    'description'    => 'PayPal',
                    'paypal_address' => $gateway['paypal_address'],
                    'signature'      => $signature,
                    'lang'           => 'NL',
                    'invoice'        => $invoice,
                    'url'            => $gateway['redirect_url']
                ), TRUE);
            }
        }
    }

    public function process_redirect()
    {
        $post    = $this->ci->input->post();
        $gateway = $this->ci->payment_driver->get_payment_gateway($this->_slug);
        $md5     = md5($gateway['paypal_address'] . (int)$post['invoice'] . floatval($post['mc_gross']) . $gateway['paypal_currency'] . $gateway['secret_key']);
        $this->ci->load->library('webshop/order_status');
        $this->ci->order_status->initialize(
            array(
                'order_ids'          => (int)$post['invoice'],
                'message'            => (!empty($message)) ? ($message) : (''),
            )
        );
        if ($md5 == $post['custom'])
        {
            if ($post['payment_status'] == 'Completed')
            {
                $this->ci->order_status->set_status('stripe_success');
                $this->ci->order_status->update_status(TRUE);
                return TRUE;
            }
            elseif ($post['payment_status'] == 'Pending')
            {
                $this->ci->order_status->set_status('stripe_pending');
                $this->ci->order_status->update_status(TRUE);
                return TRUE;
            }
            elseif ($post['payment_status'] == 'Failed')
            {
                $this->ci->order_status->set_status('stripe_failed');
                $this->ci->order_status->update_status(TRUE);
            }
        }
        else
        {
            $this->ci->order_status->set_status('stripe_modified');
            $this->ci->order_status->update_status(TRUE);
        }
        return FALSE;
    }
}