/**
 * Created by Faisal_pc on 4/13/2016.
 */


function initMap() {
    var uluru = {lat: 31.8935, lng:35.873129};
    var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 15,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}
