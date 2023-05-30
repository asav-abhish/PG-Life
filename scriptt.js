mapboxgl.accessToken = 'pk.eyJ1IjoiYWFyYXYtYW5pc2giLCJhIjoiY2tzeXgzaGJ5Mmd6aTJwcG53eGwwNjdnOCJ9.nWIPFT3f0f1G_7IWJ9By1A';

navigator.geolocation.getCurrentPosition(successLocation, errorLocation,
    {enableHighAccuracy: true
    })

    function successLocation(position){
        setupMap([position.coords.longitude, position.coords.latitude], 12)
    }

    function errorLocation(){
        //setupMap([85.296013, 23.344315], 7);
        setupMap([78.65909,21.71222], 7); //Jharkhand
    }


function setupMap(center, zoomLevel){
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v12', // style URL 
        center: center, // starting position [lng, lat]
        zoom: zoomLevel, // starting zoom
    });

    const nav = new mapboxgl.NavigationControl();
    map.addControl(nav);

    var directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken
    });

    //markers
    const geojson = {
        type: 'FeatureCollection',
        features: [
        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [85.28228,23.05990]             
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Shiva Pg, Ranchi'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [85.27650,23.07280]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Aunty Lodge, Ranchi'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [85.22959,23.40842]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Sagar Homes, Ranchi'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [86.40383,23.78612]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Anand Lodge, Dhanbad'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [86.42556,23.79441]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Hotel Hill Top, Dhanbad'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [86.42498,23.80178]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Baba Niwas, Dhanbad'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [87.23794,24.29716]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Mamta Lodge, Dumka'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [87.25021,24.27742]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Savita sadan, Dumka'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [87.25499,24.26836]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Sumit Lodge, Dumka'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [88.36318,22.57413]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'PARAS, Kolkata'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [88.42581,22.58180]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Dauji homes, Kolkata'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [88.47408,22.59101]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Nishant Tower, Kolkata'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [86.96958,23.68505]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Gayatri Niwas, Asansol'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [86.94730,23.70936]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Pathan Pg, Asansol'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [86.94608,23.68514]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Goyal Brothers, Asansol'
        //     }
        // },

        {
            type: 'Feature',
            geometry: {
            type: 'Point',
            coordinates: [84.99680,24.79546]
            },
            properties: {
            title: 'Mapbox',
            description: 'Gaya Girl Pg, Gaya'
            }
        },

        {
            type: 'Feature',
            geometry: {
            type: 'Point',
            coordinates: [84.99009,24.70136]
            },
            properties: {
            title: 'Mapbox',
            description: 'Radha Guest House, Gaya'
            }
        },

        {
            type: 'Feature',
            geometry: {
            type: 'Point',
            coordinates: [84.99810,24.78488]
            },
            properties: {
            title: 'Mapbox',
            description: 'Minority Hotel, Gaya'
            }
        },

        {
            type: 'Feature',
            geometry: {
            type: 'Point',
            coordinates: [85.14680,25.60219]
            },
            properties: {
            title: 'Mapbox',
            description: 'Pitambara Niwas, Patna'
            }
        },

        {
            type: 'Feature',
            geometry: {
            type: 'Point',
            coordinates: [85.08727,25.60681]
            },
            properties: {
            title: 'Mapbox',
            description: 'Ambedkar Hotel, Patna'
            }
        },

        {
            type: 'Feature',
            geometry: {
            type: 'Point',
            coordinates: [85.12092,25.59511]
            },
            properties: {
            title: 'Mapbox',
            description: 'Maa Sharde Boys Pg, Patna'
            }
        },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [86.32259,20.84532]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Birds Nest Pg, Jajpur'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [86.28890,20.77155]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Single Sharing, Jajpur'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [86.40438,20.84461]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Rabindra Boyz, Jajpur'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [85.81683,19.79274]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'Swastik Lodge, Puri'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [85.82391,19.79499]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'West House, Puri'
        //     }
        // },

        // {
        //     type: 'Feature',
        //     geometry: {
        //     type: 'Point',
        //     coordinates: [85.81638,19.81160]
        //     },
        //     properties: {
        //     title: 'Mapbox',
        //     description: 'NC Das homes'
        //     }
        // },
        ]
    };


    // add markers to map
    // geojson.features.forEach(function(marker) {
    //     // create a HTML element for each feature
    //     var el = document.createElement('div');
    //     el.className = 'marker';

    //     // make a marker for each feature and add to the map
    //     new mapboxgl.Marker(el).setLngLat(marker.geometry.coordinates) 

    //     .addTo(map);
    // });

    // add markers to map
for (const feature of geojson.features) {
    // create a HTML element for each feature
    const el = document.createElement('div');
    el.className = 'marker';
  
    // make a marker for each feature and add to the map
    new mapboxgl.Marker(el).setLngLat(feature.geometry.coordinates)
    .setPopup(
        new mapboxgl.Popup({ offset: 25 }) // add popups
        .setHTML(
            `<h3>${feature.properties.title}</h3><p>${feature.properties.description}</p>`
        )
    )
    .addTo(map);
  }


    map.addControl(directions, 'top-left'); // directions Calculations from A to B... which is in top left
}
       







