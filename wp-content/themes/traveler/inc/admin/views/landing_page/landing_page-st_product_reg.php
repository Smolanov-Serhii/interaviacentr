<?php
$_purchase_code= get_option('envato_purchasecode');
$has_error = STInput::get('has_error', '');
$has_domain = STInput::get('domain', '');
$deregister = STInput::get('deregister', '');
$has_register = STAdminlandingpage::checkValidatePurchaseCode($_purchase_code);
if(empty($has_error)):
    if(!empty($_purchase_code)){
        if($has_register){
            ?>
            <div class="updated" style="padding: 8px 10px 5px 10px !important; margin-left: 0px; margin-top: 15px;">
                <?php _e('Thank you for registration our theme','traveler')?>
            </div>
            <?php
        }else{
            ?>
            <div class="error" style="padding: 8px 10px 5px 10px !important; margin-left: 0px; margin-top: 15px;">
                <?php _e('Your Purchase Code is invalid','traveler')?>
            </div>
            <?php
        }
    }
    ?>
<?php
else:
    if(in_array($has_error, array('1', '2', '3', '5'))) {
        ?>
        <div class="error" style="padding: 8px 10px 5px 10px !important; margin-left: 0px; margin-top: 15px;">
            <?php
            if ($has_error == '1') {
                _e('Your Purchase Code is empty', 'traveler');
            } elseif ($has_error == '2') {
                _e('Your Purchase Code is invalid', 'traveler');
            } elseif($has_error == '3'){
                _e('Purchase code has been used by another site', 'traveler'); echo ' '.$has_domain;
            } elseif ($has_error == '5'){ 
                _e('Your Purchase Code is invalid','traveler');
            }
            ?>
        </div>
        <?php
    }
endif;
if(in_array($deregister, array('1', '2'))) {
    if($deregister == '1'){
        ?>
        <div class="updated" style="padding: 8px 10px 5px 10px !important; margin-left: 0px; margin-top: 15px;">
            <?php
            _e('Deregistration you purchase code successfully.', 'traveler');
            ?>
        </div>
        <?php
    }else{
        ?>
        <div class="error" style="padding: 8px 10px 5px 10px !important; margin-left: 0px; margin-top: 15px;">
            <?php
            _e('Have an error when you deregister purchase code.', 'traveler');
            ?>
        </div>
        <?php
    }
}
?>
<div class="traveler-registration-steps">
    <div class="feature-section col three-col">
        <div>
            <h1><?php echo __("Congratulations! Your product is registered now.", ST_TEXTDOMAIN) ; ?></h1>
        </div>
    </div>
</div>
<br />