<?php

$currentLocation = "";

// ---------------------------------------------------------------------------------------------------------------------
// Here comes your script for loading from the database.
// ---------------------------------------------------------------------------------------------------------------------

// Remove this example in your live site and replace it with a connection to database //////////////////////////////////

ob_start();
include 'data.php';
ob_end_clean();

for( $i=0; $i < count($data); $i++){
    if( $data[$i]['id'] == $_POST['id'] ){
        $currentLocation = $data[$i]; // Loaded data must be stored in the "$currentLocation" variable
    }
}

// End of example //////////////////////////////////////////////////////////////////////////////////////////////////////

// Modal HTML code

$latitude = "";
$longitude = "";
$address = "";

if( !empty($currentLocation['latitude']) ){
    $latitude = $currentLocation['latitude'];
}

if( !empty($currentLocation['longitude']) ){
    $longitude = $currentLocation['longitude'];
}

if( !empty($currentLocation['address']) ){
    $address = $currentLocation['address'];
}

echo

'<div class="modal-item-detail modal-dialog" role="document" data-latitude="'. $latitude .'" data-longitude="'. $longitude .'" data-address="'. $address .'">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>'. $currentLocation['title'] .'</h2>';

            // categories ----------------------------------------------------------------------------------------------------------------

            if( !empty($currentLocation['category']) ){
                $category = "";
                for($i=0; $i < count($currentLocation['category']); $i++){
                    $category .= '<div class="label label-default">'. $currentLocation['category'][$i] .'</div>';
                }
                echo
                    '<section>
                            <div>'.  $category .'</div>
                    </section>
                    <!--end tags-->';
}



                echo
                '<div class="controls-more">
                    <ul>
                        <li><a href="#">Ajouter aux favoris</a></li>
                    </ul>
                </div>
                <!--end controls-more-->
            </div>
            <!--end section-title-->
        </div>
        <!--end modal-header-->
        <div class="modal-body">
            <div class="left">';

                // Gallery -----------------------------------------------------------------------------------------

                if( !empty($currentLocation['gallery']) ){
                    $gallery = "";
                    for($i=0; $i < count($currentLocation['gallery']); $i++){
                        $gallery .= '<img src="'. $currentLocation['gallery'][$i] .'" alt="">';
                    }
                    echo
                    '<div class="gallery owl-carousel" data-owl-nav="1" data-owl-dots="0">'. $gallery .'</div>
                    <!--end gallery-->';
                }

                echo
                '<div class="map" id="map-modal"></div>
                <!--end map-->

                <section>
                <h3>Localisation du bien </h3>';
                // Contact -----------------------------------------------------------------------------------------

                if( !empty($currentLocation['location']) ){
                    echo
                        '<h5><i class="fa fa-map-marker"></i>'. $currentLocation['location'] .' - '. $currentLocation['city'].'</h5>';
                }


                echo
                '</section>
                <section>
                <h3>Informations sur le commercialisateur</h3>';

// Contact -----------------------------------------------------------------------------------------

if( !empty($currentLocation['name']) ){
    echo
        '<h5>';
        if ( !empty($currentLocation['type']) AND $currentLocation['type'] == "particulier"){
            echo '<i class="fa fa-user" ></i >';
    }
    else{
            echo '<i class="fa fa-building-o" ></i >';
        }
    echo $currentLocation['name'] .'</h5>';
}
// Contact -----------------------------------------------------------------------------------------

if( !empty($currentLocation['suivi']) ){
    echo
        '<h5><i class="fa fa-commenting"></i>'. $currentLocation['suivi'] .'</h5>';
}
                // Adresse -----------------------------------------------------------------------------------------

                if( !empty($currentLocation['adress']) ){
                    echo
                        '<h5><i class="fa fa-map-marker"></i>'. $currentLocation['adress'] .'</h5>';
                }
                // Ville -----------------------------------------------------------------------------------------

                if( !empty($currentLocation['adressVille']) ){
                    echo
                        '<h5><i class="fa "></i>'. $currentLocation['adressVille'] .'</h5>';
                }
                // Phone -------------------------------------------------------------------------------------------

                if( !empty($currentLocation['phone']) ){
                    echo
                        '<h5><i class="fa fa-phone"></i>'. $currentLocation['phone'] .'</h5>';
                }

                // Email -------------------------------------------------------------------------------------------

                if( !empty($currentLocation['email']) ){
                    echo
                        '<h5><i class="fa fa-envelope"></i>'. $currentLocation['email'] .'</h5>';
                }

                echo
                '</section>
            </div>
            <!--end left -->
            <div class="right">
                <section>
                    <h3>Description</h3>
                    <p>'. $currentLocation['description'] .'</p>
                </section>
                <!--end about-->';

                // Tags ----------------------------------------------------------------------------------------------------------------

                if( !empty($currentLocation['tags']) ){
                    $tags = "";
                    for($i=0; $i < count($currentLocation['tags']); $i++){
                        $tags .= '<li>'. $currentLocation['tags'][$i] .'</li>';
                    }
                    echo
                        '<section>
                            <ul class="tags">'.  $tags .'</ul>
                    </section>
                    <!--end tags-->';
                }

                // Télécharger la fiche --------------------------------------------------------------------------------------

                echo '
                <section>
                    <h3>Voir la fiche du bien</h3>';
                if( !empty($currentLocation['url']) ){
                    echo
                        '<h5><a href="'. $currentLocation['url'] .'" target="_blank">-> Fiche du bien <-</a></h5>';
                }
                echo '</section>';

                // Today Menu --------------------------------------------------------------------------------------

                if( !empty($currentLocation['today_menu']) ){
                    echo
                    '<section>
                        <h3>Today menu</h3>';
                    for($i=0; $i < count($currentLocation['today_menu']); $i++){
                        echo
                            '<ul class="list-unstyled list-descriptive icon">
                                <li>
                                    <i class="fa fa-cutlery"></i>
                                    <div class="description">
                                        <strong>'. $currentLocation['today_menu'][$i]['meal_type'] .'</strong>
                                        <p>'. $currentLocation['today_menu'][$i]['meal'] .'</p>
                                    </div>
                                </li>
                            </ul>
                            <!--end list-descriptive-->';
                    }
                    echo
                    '</section>
                    <!--end today-menu-->';
                }

                // Schedule ----------------------------------------------------------------------------------------

                if( !empty($currentLocation['schedule']) ){
                    echo
                    '<section>
                        <h3>Schedule</h3>';
                    for($i=0; $i < count($currentLocation['schedule']); $i++){
                        echo
                            '<ul class="list-unstyled list-schedule">
                                <li>
                                    <div class="left">
                                        <strong class="promoted">'. $currentLocation['schedule'][$i]['date'] .'</strong>
                                        <figure>'. $currentLocation['schedule'][$i]['time'] .'</figure>
                                    </div>
                                    <div class="right">
                                        <strong>'. $currentLocation['schedule'][$i]['location_title'] .'</strong>
                                        <figure>'. $currentLocation['schedule'][$i]['location_address'] .'</figure>
                                    </div>
                                </li>
                            </ul>
                            <!--end list-schedule-->';
                    }
                    echo
                    '</section>
                    <!--end schedule-->';
                }

                // Video -------------------------------------------------------------------------------------------

                if( !empty($currentLocation['video']) ){
                    echo
                    '<section>
                        <h3>Video presentation</h3>
                        <div class="video">'. $currentLocation['video'] .'</div>
                    </section>
                    <!--end video-->';
                }

                // Description list --------------------------------------------------------------------------------

                if( !empty($currentLocation['description_list']) ){
                    echo
                    '<section>
                        <h3>Listing Details</h3>';
                        for($i=0; $i < count($currentLocation['description_list']); $i++){
                            echo
                                '<dl>
                                    <dt>'. $currentLocation['description_list'][$i]['title'] .'</dt>
                                    <dd>'. $currentLocation['description_list'][$i]['value'] .'</dd>
                                </dl>
                                <!--end property-details-->';
                        }
                    echo
                    '</section>
                    <!--end description-list-->';
                }


            echo
            '</div>
            <!--end right-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->
';