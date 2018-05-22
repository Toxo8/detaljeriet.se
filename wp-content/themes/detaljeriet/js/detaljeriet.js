
//Javascript code


jQuery(document).ready(function($) {
    $('.hamburger').click(function(e) {
        $(this).toggleClass("is-active");

        if($('.nav-menu ul').is(':visible')){
            $('.nav-menu ul').toggle('slide');
            $('.menu-contact-info').toggle();
        }else {
            $('.nav-menu ul').toggle('slide').promise().done(function(){
                $('.menu-contact-info').toggle();
            });
        }
        e.preventDefault();
    });

    // var elem = $('.arrow-down');
    // var pos = elem.position();
    // elem.css({ position: 'absolute', top: pos.top, right: '4%', visibility: 'visible' });
});


/*
 * Replace all SVG images with inline SVG
 */
jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});






//
// jQuery(window).resize(function(){
//   var elem = jQuery('.arrow-down');
//   if(jQuery(window).width() < 768 && elem.is(':visible'))
//     elem.css({ visibility: 'hidden' });
//   else
//     elem.css({ visibility: 'visible' });
//
// });
//
// var pos = {lat: 59.336468, lng: 18.086776};
// var map;
// function initMap() {
// 	map = new google.maps.Map(document.getElementById('contact-map'), {
// 		center: pos,
// 		zoom: 15,
// 		styles: [
//     {
//         "featureType": "all",
//         "elementType": "labels.text.fill",
//         "stylers": [
//             {
//                 "saturation": 36
//             },
//             {
//                 "color": "#333333"
//             },
//             {
//                 "lightness": 40
//             }
//         ]
//     },
//     {
//         "featureType": "all",
//         "elementType": "labels.text.stroke",
//         "stylers": [
//             {
//                 "visibility": "on"
//             },
//             {
//                 "color": "#ffffff"
//             },
//             {
//                 "lightness": 16
//             }
//         ]
//     },
//     {
//         "featureType": "all",
//         "elementType": "labels.icon",
//         "stylers": [
//             {
//                 "visibility": "off"
//             }
//         ]
//     },
//     {
//         "featureType": "administrative",
//         "elementType": "geometry.fill",
//         "stylers": [
//             {
//                 "color": "#fefefe"
//             },
//             {
//                 "lightness": 20
//             }
//         ]
//     },
//     {
//         "featureType": "administrative",
//         "elementType": "geometry.stroke",
//         "stylers": [
//             {
//                 "color": "#fefefe"
//             },
//             {
//                 "lightness": 17
//             },
//             {
//                 "weight": 1.2
//             }
//         ]
//     },
//     {
//         "featureType": "landscape",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#f5f5f5"
//             },
//             {
//                 "lightness": 20
//             }
//         ]
//     },
//     {
//         "featureType": "poi",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#f5f5f5"
//             },
//             {
//                 "lightness": 21
//             }
//         ]
//     },
//     {
//         "featureType": "poi.park",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#dedede"
//             },
//             {
//                 "lightness": 21
//             }
//         ]
//     },
//     {
//         "featureType": "road.highway",
//         "elementType": "geometry.fill",
//         "stylers": [
//             {
//                 "color": "#ffffff"
//             },
//             {
//                 "lightness": 17
//             }
//         ]
//     },
//     {
//         "featureType": "road.highway",
//         "elementType": "geometry.stroke",
//         "stylers": [
//             {
//                 "color": "#ffffff"
//             },
//             {
//                 "lightness": 29
//             },
//             {
//                 "weight": 0.2
//             }
//         ]
//     },
//     {
//         "featureType": "road.arterial",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#ffffff"
//             },
//             {
//                 "lightness": 18
//             }
//         ]
//     },
//     {
//         "featureType": "road.local",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#ffffff"
//             },
//             {
//                 "lightness": 16
//             }
//         ]
//     },
//     {
//         "featureType": "transit",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#f2f2f2"
//             },
//             {
//                 "lightness": 19
//             }
//         ]
//     },
//     {
//         "featureType": "water",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#e9e9e9"
//             },
//             {
//                 "lightness": 17
//             }
//         ]
//     }
// ]
//   });
//
// var marker = new google.maps.Marker({
//           position: pos,
//           map: map
//         });
// }
