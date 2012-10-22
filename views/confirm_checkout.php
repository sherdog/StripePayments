<input type="hidden" name="cmd" value="_ext-enter">
<input type="hidden" name="redirect_cmd" value="_xclick">
<input type="hidden" name="item_name" value="<?php echo Settings::get('site_slogan'); ?>">
<input type="hidden" name="amount" value="<?php echo $amount;?>">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="handling" value="0.00">
<input type="hidden" name="business" value="<?php echo $paypal_address; ?>">
<input type="hidden" name="address_override" value="1">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="night_phone_b">
<input type="hidden" name="first_name" value="<?php echo $this->current_user->first_name; ?>">
<input type="hidden" name="last_name" value="<?php echo $this->current_user->last_name; ?>">
<input type="hidden" name="address1" value="<?php echo $this->current_user->street. ' '. $this->current_user->street_number.$this->current_user->street_number_addition; ?>">
<input type="hidden" name="address2">
<input type="hidden" name="city" value="<?php echo $this->current_user->city; ?>">
<input type="hidden" name="zip" value="<?php echo $this->current_user->postcode; ?>">
<input type="hidden" name="state">
<input type="hidden" name="country" value="<?php echo $this->current_user->country; ?>">
<input type="hidden" name="email" value="<?php echo $this->current_user->email; ?>">
<input type="hidden" name="charset" value="utf-8">
<input type="hidden" name="currency_code" value="<?php echo $currency; ?>">
<input type="hidden" name="invoice" value="<?php echo $invoice; ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="notify_url" value="<?php echo $url; ?>">
<input type="hidden" name="cbt" value="Bestellings Bevestiging">
<input type="hidden" name="return" value="<?php echo $url; ?>">
<input type="hidden" name="cancel_return" value="<?php echo $url; ?>">
<input type="hidden" name="bn" value="PyroCart PayPal Gateway">
<input type="hidden" name="lc" value="<?php echo $lang; ?>">
<input type="hidden" name="custom" value="<?php echo $signature; ?>">