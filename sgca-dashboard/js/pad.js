var gauge = new RadialGauge({
    renderTo: 'gauge_s',
    width: 300,
    animationDuration: 1500,
    borderShadowWidth: 0,
    borders: false,
    needleWidth: 2,
    needleType: "arrow",
    animationRule: "linear",
    needleCircleOuter: true,
    needleCircleSize: 7,
    valueBox: false,
    colorPlate: "#fff",
    highlights: [
        {
            "from": 160,
            "to": 220,
            "color": "rgba(200, 50, 50, .75)"
        }
    ],
    strokeTicks: true,
    startAngle: 0,
    ticksAngle: 180,
    minorTicks: 2,
    majorTicks: [
        "0",
        "20",
        "40",
        "60",
        "80",
        "100",
        "120",
        "140",
        "160",
        "180",
        "200",
        "220"
    ],
    maxValue: 220,
    minValue: 0,
    animationTarget: "plate",
    units: "Km/h",
    needleCircleInner: false,
    height: 300
});
gauge.draw();