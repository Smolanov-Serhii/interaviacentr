<?php
/**
 * @package WordPress
 * @subpackage Traveler
 * @since 1.0
 *
 * Hotel field adult
 *
 * Created by ShineTheme
 *
 */
$default=array(
    'title'=>'',

);

if(isset($data)){
    extract(wp_parse_args($data,$default));
}else{
    extract($default);
}

if(!isset($field_size)) $field_size='lg';

$old=STInput::get('group_children');
?>
<div class="form-group form-group-<?php echo esc_attr($field_size) ?> form-group-select-plus">
    <label for="field-hotel-adult"><?php echo esc_html($title)?></label>
    <div class="btn-group btn-group-select-num <?php if($old>=4)echo 'hidden';?> bookingdc-label-children" data-toggle="buttons">
        <label class="btn btn-primary <?php echo (!$old or $old==1)?'active':false; ?>">
            <input type="radio" value="0"  />0</label>
        <label class="btn btn-primary <?php echo ($old==2)?'active':false; ?>">
            <input type="radio" value="1"  />1</label>
        <label class="btn btn-primary <?php echo ($old==3)?'active':false; ?>">
            <input type="radio" value="2"  />2</label>
        <label class="btn btn-primary <?php echo ($old==4)?'active':false; ?>">
            <input type="radio" value="3"  />2+</label>
    </div>
    <select  class="form-control <?php if($old<4)echo 'hidden';?> bookingdc-num-children" name="group_children">
        <?php $adult_max= 10;
            for($i=0;$i<=$adult_max;$i++){
                echo "<option ".selected($old,$i,false)." value='{$i}'>{$i}</option>";
            }
        ?>
    </select>
    <div class="bookingdc-age-children" style="display: none;">
        <label><?php echo __('Age of children', 'traveler'); ?></label>
        <div id="bookingdc-age-select"></div>
    </div>
</div>