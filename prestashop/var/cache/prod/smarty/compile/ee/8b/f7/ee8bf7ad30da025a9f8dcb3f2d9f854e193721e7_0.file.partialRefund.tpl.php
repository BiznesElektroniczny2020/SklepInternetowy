<?php
/* Smarty version 3.1.33, created on 2020-11-19 20:09:49
  from '/var/www/html/prestashop/modules/paypal/views/templates/hook/partialRefund.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb6c2fd331d78_71798688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee8bf7ad30da025a9f8dcb3f2d9f854e193721e7' => 
    array (
      0 => '/var/www/html/prestashop/modules/paypal/views/templates/hook/partialRefund.tpl',
      1 => 1604865630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb6c2fd331d78_71798688 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  
    // add checkbox
    $(document).ready(() => {
        var chb_paypal_refund = '<?php echo $_smarty_tpl->tpl_vars['chb_paypal_refund']->value;?>
';

        // Make partial order refund in Order page in BO
        $(document).on('click', '#desc-order-partial_refund', function(){

            // Create checkbox and insert for Paypal refund
            if ($('#doPartialRefundPaypal').length == 0) {
                let newCheckBox = `<p class="checkbox"><label for="doPartialRefundPaypal">
                        <input type="checkbox" id="doPartialRefundPaypal" name="doPartialRefundPaypal" value="1">
                          ${chb_paypal_refund}</label></p>`;
                $('button[name=partialRefund]').parent('.partial_refund_fields').prepend(newCheckBox);
            }
        });

        $(document).on('click', '.partial-refund-display', function(){
            // Create checkbox and insert for Paypal refund
            if ($('#doPartialRefundPaypal').length == 0) {
                let newCheckBox = `
                        <div class="cancel-product-element form-group" style="display: block;">
                                <div class="checkbox">
                                    <div class="md-checkbox md-checkbox-inline">
                                      <label>
                                          <input type="checkbox" id="doPartialRefundPaypal" name="doPartialRefundPaypal" material_design="material_design" value="1">
                                          <i class="md-checkbox-control"></i>
                                            ${chb_paypal_refund}
                                        </label>
                                    </div>
                                </div>
                         </div>`;

                $('.refund-checkboxes-container').prepend(newCheckBox);
            }
        });
    });
  
<?php echo '</script'; ?>
>
<?php }
}
