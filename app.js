

function initMap() {

if (navigator.geolocation) { 
  navigator.geolocation.getCurrentPosition(function(position) {  

    var point = new google.maps.LatLng(position.coords.latitude, 
                                       position.coords.longitude);
 const uluru = { lat: -25.344, lng: 131.031 };
  // The map, centered at Uluru
 
    // Initialize the Google Maps API v3
    var map = new google.maps.Map(document.getElementById('map'), {
       zoom: 15,
      center: point,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
 // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
    // Place a marker
    const mar = new google.maps.Marker({
      position: point,
      map: map
    });
  }); 
} 

} 

window.initMap = initMap;