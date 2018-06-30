FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'doughnut2d',
    renderAt: 'chart-container',
    width: '450',
    height: '450',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Split of Demurrage Root Cause By Categories",
            "subCaption": "2010 - 2018",
            "numberPrefix": "$",
            "showBorder": "0",
            "use3DLighting": "0",
            "enableSmartLabels": "0",
            "startingAngle": "310",
            "showLabels": "0",
            "showPercentValues": "1",
            "showLegend": "1",
            "defaultCenterLabel": "Total Demurrage: $64.08K",
            "centerLabel": "Revenue from $label: $value",
            "centerLabelBold": "1",
            "showTooltip": "0",
            "decimals": "0",
            "useDataPlotColorForLabels": "1",
            "theme": "fint"
        },
        "data": [{
            "label": "Systemic Causes",
            "value": "28504"
        }, {
            "label": "None Systemic",
            "value": "14633"
        }, {
            "label": "Operational",
            "value": "10507"
        }, {
            "label": "External",
            "value": "4910"
        }]
    }
}
);
    fusioncharts.render();
    });