<?php
/**
 * @package WordPress
 * @subpackage Traveler
 * @since 1.0
 *
 * Email booking customer information
 *
 * Created by ShineTheme
 *
 */
$main_color=st()->get_option('main_color','#ed8323');
?>
<h2 style="background: <?php echo esc_attr($main_color) ?>;
padding: 10px;
margin-left: -10px;
margin-right: -10px;
color: white;
margin-top: 50px;"><?php echo __('Customer Information' ,'traveler');?></h2>
<table cellpadding="0" cellspacing="0" width="100%" border="0px">
    <tbody>
    <tr >
        <td width="50%" style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php echo __('First name' ,'traveler');?></strong></td>
        <td align="right" style="border-bottom: 1px dashed #ccc;padding:10px;">
            <?php echo get_post_meta($order_id,'st_first_name',true) ?>
        </td>
    </tr>
    <tr>
        <td width="50%" style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php echo __('Last name' ,'traveler');?></strong></td>
        <td align="right" style="border-bottom: 1px dashed #ccc;padding:10px;">
            <?php echo get_post_meta($order_id,'st_last_name',true) ?>
        </td>
    </tr>
    <tr>
        <td width="50%" style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php echo __('Email' ,'traveler');?></strong></td>
        <td align="right" style="border-bottom: 1px dashed #ccc;padding:10px;">
            <?php echo get_post_meta($order_id,'st_email',true) ?>
        </td>
    </tr>
    <tr>
        <td width="50%" style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php echo __('Phone' ,'traveler');?></strong></td>
        <td align="right" style="border-bottom: 1px dashed #ccc;padding:10px;">
            <?php echo get_post_meta($order_id,'st_phone',true) ?>
        </td>
    </tr>

    <tr>
        <td width="50%" style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php echo __('Address Line 1' ,'traveler');?></strong></td>
        <td align="right" style="border-bottom: 1px dashed #ccc;padding:10px;">
            <?php echo get_post_meta($order_id,'st_address',true) ?>
        </td>
    </tr>
    <tr>
        <td width="50%" style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php echo __('Address Line 2' ,'traveler');?></strong></td>
        <td align="right" style="border-bottom: 1px dashed #ccc;padding:10px;">
            <?php echo get_post_meta($order_id,'st_address2',true) ?>
        </td>
    </tr>
    <tr>
        <td width="50%" style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php echo __('City' ,'traveler');?></strong></td>
        <td align="right" style="border-bottom: 1px dashed #ccc;padding:10px;">
            <?php echo get_post_meta($order_id,'st_city',true) ?>
        </td>
    </tr>
    <tr>
        <td width="50%" style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php echo __('State/Province/Region' ,'traveler');?></strong></td>
        <td align="right" style="border-bottom: 1px dashed #ccc;padding:10px;">
            <?php echo get_post_meta($order_id,'st_province',true) ?>
        </td>
    </tr>
    <tr>
        <td width="50%" style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php echo __('ZIP code/Postal code' ,'traveler');?></strong></td>
        <td align="right" style="border-bottom: 1px dashed #ccc;padding:10px;">
            <?php echo get_post_meta($order_id,'st_zip_code',true) ?>
        </td>
    </tr>

    <tr>
        <td width="50%" style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php echo __('country' ,'traveler');?></strong></td>
        <td align="right" style="border-bottom: 1px dashed #ccc;padding:10px;">
            <?php echo get_post_meta($order_id,'st_country',true) ?>
        </td>
    </tr>
    <tr>
        <td width="50%" style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php echo __('Special Requirements' ,'traveler');?></strong></td>
        <td align="right" style="border-bottom: 1px dashed #ccc;padding:10px;vertical-align: top">
            <?php echo get_post_meta($order_id,'st_note',true) ?>
        </td>
    </tr>


    </tbody>
</table>