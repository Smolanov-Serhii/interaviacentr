<?php
/**
 * @package WordPress
 * @subpackage Traveler
 * @since 1.0
 *
 * Hotel field location
 *
 * Created by ShineTheme
 *
 */
wp_enqueue_style('st-select.css');
wp_enqueue_script('st-select.js');

$default = array(
    'title' => '',
    'is_required' => 'on',
    'placeholder' => ''
);

if (isset($data)) {
    extract(wp_parse_args($data, $default));
} else {
    extract($default);
}
if ($is_required == 'on') {
    $is_required = 'required';
}
if (!isset($field_size)) $field_size = 'lg';

$location_id = STInput::get('location_id', '');
$location_name = STInput::request('location_name', '');
if (!$location_id) {
    $location_id = STInput::get('location_id_pick_up');
    $location_name = STInput::get('pick-up');
}
//$locations = TravelHelper::getListFullNameLocation('st_rental');

$enable_tree = st()->get_option('bc_show_location_tree', 'off');

if ($enable_tree == 'on') {
    $lists = TravelHelper::getListFullNameLocation('st_rental');
    $locations = TravelHelper::buildTreeHasSort($lists);
} else {
    $locations = TravelHelper::getListFullNameLocation('st_rental');
}
?>
<div class="form-group form-group-<?php echo esc_attr($field_size) ?> form-group-icon-left">

    <label for="field-rental-locationid"><?php echo esc_html($title) ?></label>
    <i class="fa fa-map-marker input-icon"></i>
    <div class="st-select-wrapper">
        <input id="field-rental-locationid" autocomplete="off" type="text" name="location_name"
               value="<?php echo esc_html($location_name); ?>"
               class="form-control st-location-name <?php echo esc_attr($is_required); ?>"
               placeholder="<?php if ($placeholder) echo esc_attr($placeholder); ?>">
        <select name="location_id" class="st-location-id st-hidden"
                placeholder="<?php if ($placeholder) echo esc_attr($placeholder); ?>" tabindex="-1">
            <option value=""></option>
            <?php
            if ($enable_tree == 'on') {
                TravelHelper::buildTreeOptionLocation($locations, $location_id);
            } else {

                if (is_array($locations) && count($locations)):
                    foreach ($locations as $key => $value):
                        ?>
                        <option <?php selected($value->ID, $location_id); ?>
                                value="<?php echo esc_html($value->ID); ?>"><?php echo esc_html($value->fullname); ?></option>
                    <?php endforeach; endif;
            }
            ?>
        </select>
        <div class="option-wrapper"></div>
    </div>
</div>