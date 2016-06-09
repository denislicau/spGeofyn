
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var labelIndex = 0;
        var map;
        var polygon = [];
       var OdenseLatLng = {lat: 55.403666, lng: 10.402618};
       var markers = [];


      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: OdenseLatLng
        });
       //getLocationsfromDB();
}//initMap

  function EnableCreateLocation(){
      google.maps.event.addListener(map, 'click', function(event) {
        addMarker(event.latLng, map);
        });
    }
  function DisableCreateLocation(){
    google.maps.event.clearInstanceListeners(map);
  }
  

 function addMarker(location, map) {
  
  // Add the marker at the clicked location, and add the next-available label
  // from the array of alphabetical characters.
  var marker = new google.maps.Marker({
    position: location,
    label: labels[labelIndex++ % labels.length],
    map: map
  });
  markers.push(marker);
  var lat = marker.getPosition().lat();
  var lng = marker.getPosition().lng();
  //console.log(lat + "  "+ lng);
  RegisterPoint(lat,lng);
  //displaySelectedData(lat,lng);
}

function RegisterPoint(lat,lng){
  var point = new google.maps.LatLng(lat,lng);
  polygon.push(point);
}


//google.maps.event.addDomListener(window, 'load', initMap);

function DisplayPolygon(userID){  
  polygon.push(polygon[0]);
  console.log(polygon);
  //remove markers
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
  }
  markers = [];


  //draw polygon
  var resultPolygon = new google.maps.Polygon({
    paths: polygon,
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FF0000',
    fillOpacity: 0.35
  });
  resultPolygon.setMap(map);


  //making the string ready for the actual db
  var finaldata ="";for (var point in polygon) {
  finaldata+=(polygon[point].lng()+" "+polygon[point].lat()+",");
} finaldata=finaldata.substring(0,finaldata.length-1); console.log(finaldata); console.log(finaldata.length);
  insertToDB(finaldata, userID);
}


  
  function insertToDB(location,userID){
      var name= document.getElementById("locName").value;
      var descr= document.getElementById("locDescr").value;
      var userID = userID;
      var location = location;

      var PageToSendTo = "insertLocation.php?";
      var userIDPH = "userID=";
      var namePH = "&name=";
      var descrPH = "&descr=";
      var locationPH = "&location=";
      var xmlhttp = new XMLHttpRequest();
      var UrlToSend = PageToSendTo+userIDPH+userID+namePH+name+descrPH+descr+locationPH+location;
      xmlhttp.open("GET", UrlToSend, true);
      xmlhttp.send();
      
      changeText("locName","","locDescr","");
  }

  function changeText(id1,text1,id2,text2){
    var elem1 = document.getElementById(id1);
    elem1.value=text1;
    var elem2 = document.getElementById(id2);
    elem2.value=text2;
  }
