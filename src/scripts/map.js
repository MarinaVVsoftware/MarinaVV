var styles = [
  {
    featureType: "landscape",
    elementType: "all",
    stylers: [
      {
        hue: "#FFBB00"
      },
      {
        saturation: 43.400000000000006
      },
      {
        lightness: 37.599999999999994
      },
      {
        gamma: 1
      }
    ]
  },
  {
    featureType: "poi",
    elementType: "all",
    stylers: [
      {
        visibility: "on"
      },
      {
        lightness: "22"
      },
      {
        saturation: "34"
      },
      {
        weight: "4.13"
      },
      {
        hue: "#0047ff"
      }
    ]
  },
  {
    featureType: "poi",
    elementType: "geometry.fill",
    stylers: [
      {
        visibility: "on"
      }
    ]
  },
  {
    featureType: "poi",
    elementType: "labels",
    stylers: [
      {
        visibility: "on"
      }
    ]
  },
  {
    featureType: "poi",
    elementType: "labels.text.fill",
    stylers: [
      {
        visibility: "on"
      }
    ]
  },
  {
    featureType: "poi",
    elementType: "labels.text.stroke",
    stylers: [
      {
        visibility: "off"
      },
      {
        hue: "#00f1ff"
      },
      {
        weight: "5.14"
      },
      {
        gamma: "1.90"
      },
      {
        lightness: "70"
      },
      {
        saturation: "40"
      }
    ]
  },
  {
    featureType: "road.highway",
    elementType: "all",
    stylers: [
      {
        hue: "#FFC200"
      },
      {
        saturation: -61.8
      },
      {
        lightness: 45.599999999999994
      },
      {
        gamma: 1
      }
    ]
  },
  {
    featureType: "road.arterial",
    elementType: "all",
    stylers: [
      {
        hue: "#FF0300"
      },
      {
        saturation: -100
      },
      {
        lightness: 51.19999999999999
      },
      {
        gamma: 1
      }
    ]
  },
  {
    featureType: "road.local",
    elementType: "all",
    stylers: [
      {
        hue: "#FF0300"
      },
      {
        saturation: -100
      },
      {
        lightness: 52
      },
      {
        gamma: 1
      }
    ]
  },
  {
    featureType: "water",
    elementType: "all",
    stylers: [
      {
        hue: "#0078FF"
      },
      {
        saturation: -13.200000000000003
      },
      {
        lightness: 2.4000000000000057
      },
      {
        gamma: 1
      }
    ]
  }
];

(() => {
  try {
    var $map = document.getElementById("map");

    if ($map) {
      const lat = Number($map.dataset.lat);
      const lng = Number($map.dataset.lng);
      var centerMap = { lat, lng };

      var map = new google.maps.Map($map, {
        zoom: 16,
        center: centerMap,
        disableDefaultUI: true,
        styles
      });

      new google.maps.Marker({
        position: new google.maps.LatLng(centerMap),
        map,
        icon: "dist/images/marker.png"
      });
    }
  } catch (er) {
    console.log(er);
  }
})();
