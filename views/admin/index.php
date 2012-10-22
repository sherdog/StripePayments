<li>
    <label for="<?php echo $lang; ?>_name">
        <?php echo lang('payment.paypal.paypal_address'); ?>
    </label>

    <div class="input">
        <?php echo form_input('paypal_address', $post->paypal_address); ?>
    </div>
</li>
<li>
    <label for="<?php echo $lang; ?>_name">
        <?php echo lang('payment.paypal.paypal_currency'); ?>
    </label>

    <div class="input">
        <?php echo form_dropdown('paypal_currency', array(
        'EUR' => lang('payment.paypal.eur_currency'),
        'USD' => lang('payment.paypal.usd_currency'),
        'GBP' => lang('payment.paypal.gbp_currency'),
        'AUD' => lang('payment.paypal.aud_currency'),
        'CAD' => lang('payment.paypal.cad_currency'),
        'CHF' => lang('payment.paypal.chf_currency'),
        'CZK' => lang('payment.paypal.czk_currency'),
        'DKK' => lang('payment.paypal.dkk_currency'),
        'HKD' => lang('payment.paypal.hkd_currency'),
        'HUF' => lang('payment.paypal.huf_currency'),
        'JPY' => lang('payment.paypal.jpy_currency'),
        'NOK' => lang('payment.paypal.nok_currency'),
        'NZD' => lang('payment.paypal.nzd_currency'),
        'PLN' => lang('payment.paypal.pln_currency'),
        'SEK' => lang('payment.paypal.sek_currency'),
        'SGD' => lang('payment.paypal.sgd_currency')
    ), $post->paypal_currency); ?>
    </div>
</li>
<li>
    <label for="<?php echo $lang; ?>_name">
        <?php echo lang('payment.paypal.secret_key'); ?>
    </label>

    <div class="input">
        <?php echo form_input('secret_key', $post->secret_key); ?>
    </div>
</li>