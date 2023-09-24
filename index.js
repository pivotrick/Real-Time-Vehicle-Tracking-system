 let map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 28.631568, lng: 77.366697 },
    zoom: 8,
  });


const marker = new google.maps.Marker({
  position: { lat: 28.631568, lng: 77.366697 },
  title : "All to be displayed here",
  draggable: false
})

marker.setMap(map);