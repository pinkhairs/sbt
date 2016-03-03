/* 
 * Lazy Line Painter - Path Object 
 * Generated using 'SVG to Lazy Line Converter'
 * 
 * http://lazylinepainter.info 
 * Copyright 2013, Cam O'Connell  
 *  
 */ 
 $('.loading-screen').width($(window).width());
$('.loading-screen').height($(window).height());
$(window).resize(function() {
    $('.loading-screen').width($(window).width());
    $('.loading-screen').height($(window).height());
});
var pathObj = {
    "loading": {
        "strokepath": [
            {
                "path": "M223.413405,69.1970358 L245.728004,46.8824372",
                "duration": 400
            },
            {
                "path": "M256.607951,150.5 L288.379874,150.5",
                "duration": 400
            },
            {
                "path": "M223.413405,230.207068 L249.494834,251.546419",
                "duration": 400
            },
            {
                "path": "M147.5,262.453198 L147.5,292.328289",
                "duration": 400
            },
            {
                "path": "M64.5537931,230.681276 L38.4723642,252.020626",
                "duration": 400
            },
            {
                "path": "M31.833455,147.220703 L0.0615325643,147.220703",
                "duration": 400
            },
            {
                "path": "M64.5806254,69.2568371 L42.2660266,46.9422384",
                "duration": 400
            },
            {
                "path": "M144.5,147.56529 L144.5,0.690493575",
                "duration": 400
            },
            {
                "path": "M114.335937,79.2929688 C114.335937,79.2929688 88.5039059,91.6660156 75.7226562,117 C53.6568433,160.737113 77.2285156,227.34375 146.128906,227.34375 C196.987774,227.34375 222.016767,182.528052 222.016767,147.112528 C222.016766,105 179.6875,81.0507812 179.6875,81.0507812",
                "duration": 400
            }
        ],
        "dimensions": {
            "width": 300,
            "height": 303
        }
    }
}; 
 
 


 $(document).ready(function(){
    $('#loading').fadeIn().lazylinepainter( 
    {
        "svgData": pathObj,
        "strokeWidth": 10,
        "strokeColor": "#fff",
        'strokeOpacity': 0,
        'strokeCap':'round',
        "onStrokeStart": function(data) { data.el.style.strokeOpacity = 1; },
        "onComplete":function() { $('#loading').fadeOut(); $('body').removeClass('loading-screen'); }
    }).lazylinepainter('paint'); 
 });