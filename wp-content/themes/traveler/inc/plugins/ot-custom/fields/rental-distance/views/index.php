<?php

global $post;

$post_origin = TravelHelper::post_origin( $post->ID, 'st_rental' );

$rd_type_arr = [ 'accounting', 'airport', 'amusement_park', 'bank', 'school', 'supermarket' ]

?>

<div class="control">

    <button type="button" class="btn btn-primary"

            id="btn-rental-distance"><?php echo __( 'Add new', 'traveler' ); ?></button>

    <div id="rd-item">

    </div>

    <!-- Modal -->

    <div id="rental-distance-wrapper" class="rd-wrapper">

        <div class="rd-content">

            <span class="rd-close">&times;</span>

            <div class="rd-body">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="form-inline">

                            <div class="form-group">

                                <label for="rd-type"><strong><?php echo __( 'Type', 'traveler' ); ?></strong></label>

                                <select id="rd-elm-type">

                                    <option value="-1">----<?php echo __( 'Select', 'traveler' ); ?>----</option>

									<?php

									if ( ! empty( $rd_type_arr ) ) {

										foreach ( $rd_type_arr as $k => $v ) {

											echo '<option value="' . $v . '">' . ucfirst( str_replace( '_', ' ', $v ) ) . '</option>';

										}

									}

									?>

                                </select>

                            </div>

                            <div class="form-group">

                                <label for="rd-type"><strong><?php echo __( 'Radius', 'traveler' ); ?></strong></label>

                                <input id="rd-elm-radius" type="number" value="" placeholder="50km" value="50"/>

                            </div>

                            <div class="form-group">

                                <button type="button"

                                        class="btn btn-primary" id="rd-get-result"><?php echo __( 'Get results', 'traveler' ); ?></button>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12">

                        <div id="rd-error" class="alert alert-warning" role="alert" data-latlng="<?php echo __('Please select lat and lng for this property', 'traveler'); ?>" data-radius="<?php echo __('Radius is invalid', 'traveler'); ?>" data-type="<?php echo __('Please select type to search', 'traveler'); ?>"></div>

                        <div class="rd-result" id="rd-result">

                            <div class="overlay">

                                <span class="spinner is-active"></span>

                            </div>

                            <div class="rd-result-content">

                                <table class="wp-list-table widefat">

                                    <thead>

                                        <tr>

                                            <th class="manage-column column-cb check-column">

                                                <label class="screen-reader-text"

                                                       for="cb-select-all-1"><?php _e( 'Select All', 'traveler' ) ?></label>

                                                <input type="checkbox" id="cb-select-all-1">

                                            </th>

                                            <th class="manage-column"><?php echo __('Name', 'traveler'); ?></th>

                                            <th class="manage-column"><?php echo __('Vicinity', 'traveler'); ?></th>

                                            <th class="manage-column"><?php echo __('Distance', 'traveler'); ?></th>

                                        </tr>

                                    </thead>

                                    <tbody>



                                    </tbody>

                                </table>

                            </div>

                        </div>

                        <button type="button"

                                class="btn btn-primary rd-select-result" id="rd-select-result"><?php echo __( 'Select item', 'traveler' ); ?></button>

                    </div>

                </div>

            </div>

        </div>

    </div>



</div>

<div id="rd-map"></div>