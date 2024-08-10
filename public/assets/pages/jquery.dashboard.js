
/**
* Theme: Uplon Admin Template
* Author: Coderthemes
* Dashboard
*/

!function($) {
    "use strict";

    var Dashboard = function() {};

    //creates Stacked chart
    Dashboard.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            stacked: true,
            labels: labels,
            hideHover: 'auto',
            barSizeRatio: 0.4,
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barColors: lineColors
        });
    },


    //creates Donut chart
    Dashboard.prototype.createDonutChart = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true, //defaulted to true
            colors: colors
        });
    },

    Dashboard.prototype.init = function() {

        //creating Stacked chart
        var $stckedData  = [
            { y: '25 Sep', a: 45, b: 180, c: 100 },
            { y: '26 Sep', a: 75,  b: 65, c: 80 },
            { y: '27 Sep', a: 100, b: 90, c: 56 },
            { y: '28 Sep', a: 75,  b: 65, c: 89 },
            { y: '29 Sep', a: 100, b: 90, c: 120 },
            { y: '30 Sep', a: 75,  b: 65, c: 110 },
            { y: '1 Oct', a: 50,  b: 40, c: 85 },
            { y: '2 Oct', a: 75,  b: 65, c: 52 },
            { y: '3 Oct', a: 50,  b: 40, c: 77 },
            { y: '4 Oct', a: 75,  b: 65, c: 90 },
            { y: '5 Oct', a: 100, b: 90, c: 130 }
        ];
        this.createStackedChart('morris-bar-stacked', $stckedData, 'y', ['a', 'b' ,'c'], ['Series A', 'Series B', 'Series C'], ['#3db9dc','#1bb99a', '#ebeff2']);

        //creating donut chart
        var $donutData = [
                {label: "English Language 01", value: 12},
                {label: "Italian Language 02", value: 30},
                {label: "French Language 03", value: 20}
            ];
        this.createDonutChart('morris-donut-example', $donutData, ['#3db9dc','#1bb99a', '#ebeff2']);
    },
    //init
    $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.Dashboard.init();
}(window.jQuery);
