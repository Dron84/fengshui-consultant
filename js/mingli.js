/*! Copyright В© 2008-2013 "Р–РµРјС‡СѓР¶РёРЅР° РґСЂР°РєРѕРЅР°" - www.dragon-pearl.ru
 * РљРѕРїРёСЂРѕРІР°РЅРёРµ Рё РёСЃРїРѕР»СЊР·РѕРІР°РЅРёРµ РїСЂРѕРіСЂР°РјРјС‹ СЂР°Р·СЂРµС€Р°РµС‚СЃСЏ С‚РѕР»СЊРєРѕ СЃ СѓРєР°Р·Р°РЅРёРµРј РіРёРїРµСЂСЃСЃС‹Р»РєРё РЅР° СЃР°Р№С‚ www.mingli.ru РєР°Рє РЅР° РёСЃС‚РѕС‡РЅРёРє РёРЅС„РѕСЂРјР°С†РёРё.
 	Р Р°Р·СЂР°Р±РѕС‚РєР° "Р–РµРјС‡СѓР¶РµРЅР° РґСЂР°РєРѕРЅР° - С†РµРЅС‚СЂР° РѕР±СѓС‡РµРЅРёСЏ Рё РєРѕРЅСЃСѓР»СЊС‚РёСЂРѕРІР°РЅРёСЏ С„РµРЅС€СѓР№"

 	Copying and use of the software is authorized only with a hyperlink on the site www.mingli.ru as to the source of information.
	Development "Dragon Pearl" - www.dragon-pearl.ru
 */
function serialize(obj) {
    var str = "";
    for (i in obj) {
        str += (i + ": " + obj[i] + ", ")
    };
    return str
}

function degToRad(deg) {
    return deg / 180 * Math["PI"]
}

function radToDeg(rad) {
    return rad / Math["PI"] * 180
}
var rot = 0;
urlShowGMap = false;
var stN = [];
var CirckleIMG = {
    "type": ["Krug-24Gory3_02_", "Krug-24Gory3_02-2R_", "Krug-24Gory3_02-An_"],
    "sizeW": [507, 561, 507],
    "sizeH": [507, 561, 507],
    "color": ["_min.png", "_min-w.png"]
};

function urlParam(name) {
    var results = new RegExp("[\\#&]" + name + "=([^&#]*)")["exec"](window["location"]["href"]);
    if (results) {
        return results[1] || 0
    } else {
        return false
    }
}

function urlRefreshParam() {
    window["location"]["href"] = "https://" + window["location"]["hostname"] + "/24mountain#" + "builtYear=" + $("#builtYear")["val"]() + "&DegreeGuid=" + $("#DegreeGuid")["val"]() + "&AngleMySVG=" + $("#AngleMySVG")["val"]() + "&Lat=" + $("#Lat")["val"]() + "&Lng=" + $("#Lng")["val"]() + "&CSYear=" + $("#CSYear")["val"]() + "&CSMonth=" + $("#CSMonth")["val"]() + "&zoom=" + $("#zoom")["val"]() + "&ShowGMap=" + !$("#SVGSettings")["hasClass"]("DNone") + "&FSMap=" + $("input#FSMap")["is"](":checked") + "&USEDeclBYear=" + $("input#USEDeclBYear")["is"](":checked") + "&Map=" + $("#ULMenuFSSett li.Sel a:first")["attr"]("id") + "&ShType=" + $("#ShType")["val"]();
    return false
}

function SetParamFromurl() {
    urlbuiltYear = urlParam("builtYear");
    urlDegreeGuid = urlParam("DegreeGuid");
    urlAngleMySVG = urlParam("AngleMySVG");
    urlLat = urlParam("Lat");
    urlLng = urlParam("Lng");
    urlCSYear = urlParam("CSYear");
    urlCSMonth = urlParam("CSMonth");
    urlzoom = urlParam("zoom");
    urlShowGMap = urlParam("ShowGMap");
    urlFSMap = urlParam("FSMap");
    urlUSEDeclBYear = urlParam("USEDeclBYear");
    urlMap = urlParam("Map");
    urlShType = urlParam("ShType");
    if (urlbuiltYear) {
        $("#builtYear")["val"](urlbuiltYear)
    };
    if (urlDegreeGuid) {
        $("#DegreeGuid")["val"](urlDegreeGuid)
    };
    if (urlAngleMySVG) {
        $("#AngleMySVG")["val"](urlAngleMySVG)
    };
    if (urlLat) {
        $("#Lat")["val"](urlLat)
    };
    if (urlLng) {
        $("#Lng")["val"](urlLng)
    };
    if (urlCSYear) {
        $("#CSYear")["val"](urlCSYear)
    };
    if (urlCSMonth == "true") {
        $("#CSMonth [value='" + urlCSMonth + "']")["attr"]("selected", "selected")
    };
    if (urlzoom) {
        $("#zoom")["val"](urlzoom)
    };
    if (urlFSMap) {
        $("input#FSMap")["attr"]("checked", "checked")
    };
    if (urlUSEDeclBYear == "true") {
        $("input#USEDeclBYear")["attr"]("checked", "checked")
    };
    if (urlMap) {
        $("#ULMenuFSSett li.Sel")["removeClass"]("Sel");
        $("#" + urlMap)["parents"]("li:first")["addClass"]("Sel")
    };
    if (urlShType == "true") {
        $("#ShType [value='" + urlShType + "']")["attr"]("selected", "selected")
    };
    rot = parseFloat($("#DegreeGuid")["val"]()) + parseFloat($("#AngleMySVG")["val"]())
}

var timeoutId;
curentYear = TXT_MAGNET_DECL_CALCULATE_FROM_TO + parseFloat((new Date())["getFullYear"]() + 2) + TXT_MAGNET_DECL_TAKE_CURRENT;
DeclAcc = true;

function getDeclanation() {
    if (DeclAcc) {
        if ($("#USEDeclBYear:checkbox")["is"](":checked")) {
            tDecYear = $("#builtYear")["attr"]("value")
        } else {
            tDecYear = $("#CSYear")["attr"]("value")
        };
        if ((tDecYear <= 1590) || (tDecYear > parseFloat((new Date())["getFullYear"]() + 2))) {
            if ($("#USEDeclBYear")["is"](":enabled")) {
                $("#USEDeclBYear")["attr"]("disabled", "disabled");
                alert(curentYear)
            };
            tDecYear = (new Date())["getFullYear"]()
        } else {
            $("#USEDeclBYear")["removeAttr"]("disabled")
        };
        $["ajax"]({
            url: "/magnet.php",
            data: {
                lat: $("#Lat")["attr"]("value"),
                lng: $("#Lng")["attr"]("value"),
                year: tDecYear,
                month: (new Date())["getMonth"]() + 1,
                day: (new Date())["getDate"]()
            },
            dataType: "json",
            success: function(result) {
                tDec = parseFloat(result["declination"])["toFixed"](2);
                if ($("#USEDecl:checkbox")["is"](":checked")) {
                    $("#AngleMySVG")["attr"]("value", tDec)["change"]()
                }
            },
            error: function(result, e) {
                alert(TXT_MAGNET_DECL_UNAVAILABLE);
                DeclAcc = false
            }
        })
    }
}

function googleShablonType() {
    tShablonName = "img/" + CirckleIMG["type"][parseInt($("#ShType")["val"]())];
    NameMenu = $("#ULMenuFSSett li.Sel a")["attr"]("id");
    if ((NameMenu == "GMap") && (NoGoogleMap)) {
        if (map["getMapTypeId"]() == "roadmap") {
            $("#WhiteMounth")["removeAttr"]("checked")["change"]();
            MapText[5]["attr"]({
                fill: "#000000"
            })
        } else {
            $("#WhiteMounth")["attr"]("checked", "checked")["change"]();
            MapText[5]["attr"]({
                fill: "#ffffff"
            })
        }
    };
    if (NameMenu == "JaMap") {
        if (YMYmap["getType"]()["getName"]() == "\u0421\u0445\u0435\u043c\u0430") {
            $("#WhiteMounth")["removeAttr"]("checked")["change"]();
            MapText[5]["attr"]({
                fill: "#000000"
            })
        } else {
            $("#WhiteMounth")["attr"]("checked", "checked")["change"]();
            MapText[5]["attr"]({
                fill: "#ffffff"
            })
        }
    }
}
FlyingStarsByYearAndMonth = [
    [9, 2, 1, 9, 8, 7, 6, 5, 4, 3, 2, 1],
    [6, 8, 7, 6, 5, 4, 3, 2, 1, 9, 8, 7],
    [3, 5, 4, 3, 2, 1, 9, 8, 7, 6, 5, 4]
];

function GetSumLast2Digits(n) {
    var d0 = n % 10;
    var d1 = (n - d0) % 100 / 10;
    return d0 + d1
}

function GetNowStarCenterByYear(year) {
    if (parseInt($("#CSMonth  option:selected")["val"]()) == 1) {
        var yeart = res = year - 1
    } else {
        var yeart = res = year
    };
    NewPer = (2000 - yeart) / 9;
    NewPer = parseInt((NewPer - Math["floor"](NewPer)) * 10);
    if (NewPer == 0) {
        NewPer = 9
    };
    return NewPer
}

function GetNowStarCenterByMonth(currentYear, currentMonth) {
    if (parseInt($("#CSMonth  option:selected")["val"]()) == 1) {
        var yeart = currentYear - 1
    } else {
        var yeart = currentYear
    };
    var i = yeart % 12 % 3;
    return FlyingStarsByYearAndMonth[i][currentMonth - 1]
}
var geocoder, map;
if (typeof(google) == "undefined") {
    NoGoogleMap = false
} else {
    NoGoogleMap = true;
    var maxZoomService = new google["maps"].MaxZoomService()
};
var YMYmap, geoResult;
$(document)["ready"](function() {
    tooltip();
    $("#CSMonth option:selected")["parent"]()["find"]("option[value='" + ((new Date())["getMonth"]() + 1) + "']")["attr"]("selected", "selected");
    $("#builtYear, #CSYear")["attr"]("value", (new Date())["getFullYear"]());
    $("#SettGen label[for=USEDeclBYear]")["attr"]("title", curentYear);
    $(".ChenByArr").ArrowChanger();
    $("#USEDecl:checkbox")["click"](function() {
        if ($(this)["is"](":checked")) {
            getDeclanation();
            $("#AngleMySVG")["removeAttr"]("disabled")["change"]()
        } else {
            $("#AngleMySVG")["attr"]("value", "0")["attr"]("disabled", "disabled")["change"]()
        }
    });
    $("#USEDeclBYear")["click"](function() {
        getDeclanation();
        urlRefreshParam()
    });

    function SetWindowSize() {
        $("#SVGDiv")["css"]("top", "0px");
        var wH = parseFloat($(window)["height"]());
        wW = parseFloat($(window)["width"]());
        MCpT = parseFloat($("#MapConteiner")["position"]()["top"]);
        FH = parseFloat($("#Footer")["outerHeight"]());
        $("#MYGmaps")["css"]("height", wH - MCpT - FH + "px");
        $("#MYGmaps")["css"]("width", wW + "px");
        $("#MYJamaps")["css"]("height", wH - MCpT - FH + "px");
        $("#MYJamaps")["css"]("width", wW + "px");
        $("#imgContentPlan")["css"]("height", wH - MCpT - FH + "px");
        $("#imgContentPlan")["css"]("width", wW);
        $("#imgContentPlan")["css"]("height", wH - MCpT - FH + "px");
        $("#ImgPlan")["css"]({
            width: parseFloat($("#imgContentPlan")["css"]("width")) + "px"
        });
        $("#ImgPlan")["css"]({
            top: "-" + (parseFloat($("#ImgPlan")["css"]("height")) - parseFloat($("#imgContentPlan")["css"]("height"))) / 2 + "px"
        });
        $("#SVGDiv")["css"]("top", (wH - MCpT - FH - $("#SVGDiv")["outerHeight"]()) / 2 + "px")
    }
    $(window)["resize"](function() {
        SetWindowSize()
    });
    $("#GoogleSearch #Lat")["attr"]("value", "55.76");
    $("#GoogleSearch #Lng")["attr"]("value", "37.64");
    SetParamFromurl();
    CurShType = parseInt($("#ShType")["val"]());
    if (NoGoogleMap) {
        geocoder = new google["maps"].Geocoder();
        var latlng = new google["maps"].LatLng(parseFloat($("#GoogleSearch #Lat")["attr"]("value")), parseFloat($("#GoogleSearch #Lng")["attr"]("value")));
        var myOptions = {
            zoom: parseInt($("#zoom")["val"]()),
            center: latlng,
            mapTypeId: google["maps"]["MapTypeId"]["ROADMAP"]
        };
        map = new google["maps"].Map(document["getElementById"]("MYGmaps"), myOptions);
        var autocomplete1 = new google["maps"]["places"].Autocomplete(document["getElementById"]("address"));
        autocomplete1["bindTo"]("bounds", map);
        tHref = window["location"]["href"];
        if ((tHref["search"]("Lat") < 0) || (tHref["search"]("Lng") < 0)) {
            if (navigator["geolocation"]) {
                navigator["geolocation"]["getCurrentPosition"](function(position) {
                    var latlng = new google["maps"].LatLng(position["coords"]["latitude"], position["coords"]["longitude"]);
                    $("#GoogleSearch #Lat")["attr"]("value", parseFloat(latlng["lat"]())["toFixed"](5));
                    $("#GoogleSearch #Lng")["attr"]("value", parseFloat(latlng["lng"]())["toFixed"](5));
                    map["setCenter"](latlng);
                    showMaxZoom(latlng);
                    codeLatLng(latlng);
                    getDeclanation();
                    urlRefreshParam()
                }, function() {
                    alert("Serv Failed");
                    var latlng = handleNoGeolocation(true)
                })
            } else {
                alert("Browser doesent support");
                var latlng = handleNoGeolocation(false)
            }
        };

        function handleNoGeolocation(errorFlag) {
            if (errorFlag) {
                alert(TXT_ERROR_GEOLOC_SERV_F)
            } else {
                alert(TXT_ERROR_GEOLOC_BROWSER_DS)
            }
        }
        if (geocoder) {
            geocoder["geocode"]({
                "latLng": map["getCenter"]()
            }, function(results, status) {
                if (status == google["maps"]["GeocoderStatus"]["OK"]) {
                    $("#GoogleSearch input#address")["attr"]("value", results[1]["formatted_address"])
                } else {
                    alert(TXT_ERROR_GETTING_ADREESS + status)
                }
            })
        };
        google["maps"]["event"]["addListener"](map, "maptypeid_changed", function() {
            googleShablonType()
        });
        if (/mingli/i ["test"](document["location"]["href"])) {
            google["maps"]["event"]["addListener"](map, "dragend", function() {
                codeLatLng(map["getCenter"]());
                urlRefreshParam()
            })
        };
        google["maps"]["event"]["addListener"](map, "zoom_changed", function() {
            map["setCenter"](new google["maps"].LatLng(parseFloat($("#GoogleSearch #Lat")["attr"]("value")), parseFloat($("#GoogleSearch #Lng")["attr"]("value"))));
            $("#zoom")["val"](map["getZoom"]());
            urlRefreshParam()
        });
        google["maps"]["event"]["addListener"](map, "idle", function() {
            map["setCenter"](new google["maps"].LatLng(parseFloat($("#GoogleSearch #Lat")["attr"]("value")), parseFloat($("#GoogleSearch #Lng")["attr"]("value"))));
            urlRefreshParam()
        });
        if (/mingli/i ["test"](document["location"]["href"])) {
            google["maps"]["event"]["addListener"](map, "drag", function() {
                $("#GoogleSearch #Lat")["attr"]("value", parseFloat(map["getCenter"]()["lat"]())["toFixed"](5));
                $("#GoogleSearch #Lng")["attr"]("value", parseFloat(map["getCenter"]()["lng"]())["toFixed"](5))
            })
        }
    };
    YMYmap = new YMaps.Map(document["getElementById"]("MYJamaps"));
    YMYmap["setCenter"](new YMaps.GeoPoint(37.64, 55.76), 10);
    YMYmap["addControl"](new YMaps.TypeControl());
    YMYmap["addControl"](new YMaps.ToolBar());
    YMYmap["addControl"](new YMaps.Zoom());
    YMYmap["addControl"](new YMaps.MiniMap());
    YMYmap["addControl"](new YMaps.ScaleLine());
    YMYmap["enableScrollZoom"]();
    var s = new YMaps.Style();
    s["iconStyle"] = new YMaps.IconStyle();
    s["iconStyle"]["href"] = "/img/24marker.png";
    s["iconStyle"]["size"] = new YMaps.Point(21, 21);
    s["iconStyle"]["offset"] = new YMaps.Point(-11, -11);
    var placemark = new YMaps.Placemark(YMYmap["getCenter"](), {
        style: s
    });
    YMaps["Events"]["observe"](YMYmap, YMYmap["Events"].SmoothZoomEnd, function() {
        $("#zoom")["val"](YMYmap["getZoom"]());
        urlRefreshParam();
        YMYSetAddres()
    });
    var YMYEventListener = YMaps["Events"]["observe"](YMYmap, YMYmap["Events"].DragEnd, function(map, mEvent) {
        var geocoder = new YMaps.Geocoder(YMYmap["getCenter"](), {
            results: 1,
            boundedBy: YMYmap["getBounds"]()
        });
        getDeclanation();
        YMaps["Events"]["observe"](geocoder, geocoder["Events"].Load, function(geocoder) {
            geoResult = this["get"](0);
            if (this["length"]()) {
                var sep = ", ",
                    names = (geoResult["text"] || "")["split"](sep),
                    index = geoResult["kind"] === "house" ? -2 : -1;
                $("#GoogleSearch input#address")["attr"]("value", names["slice"](index)["join"](sep) + ", " + names["slice"](0, index)["join"](sep))
            } else {
                alert(TXT_NOT_FOUND)
            }
        });
        YMaps["Events"]["observe"](geocoder, geocoder["Events"].Fault, function(geocoder, error) {
            alert(TXT_ERROR + error)
        })
    }, this);
    YMaps["Events"]["observe"](YMYmap, YMYmap["Events"].TypeChange, function(map, mEvent) {
        googleShablonType()
    }, this);
    var YMYEventListener = YMaps["Events"]["observe"](YMYmap, YMYmap["Events"].Drag, function(map, mEvent) {
        $("#GoogleSearch #Lat")["attr"]("value", parseFloat(YMYmap["getCenter"]()["getLat"]())["toFixed"](5));
        $("#GoogleSearch #Lng")["attr"]("value", parseFloat(YMYmap["getCenter"]()["getLng"]())["toFixed"](5));
        urlRefreshParam()
    }, this);
    PaperW = 630;
    PaperH = 630;
    CenterX = PaperW / 2;
    CenterY = PaperH / 2;
    CirkleW = CirckleIMG["sizeW"][CurShType];
    CirkleH = CirckleIMG["sizeH"][CurShType];
    r = PaperW / 2;
    rad = Math["PI"] / 180;
    RGuid = 10;
    R0 = 55;
    R1 = 161;
    R2 = PaperW / 2;
    count = 24;
    contPer = 1;
    stroke_width = 1;
    colour = "#000";
    KeyAngle = 0.5;
    AngleSector = 360 / 24;
    ShiftDegree = 2 * Math["PI"] / 24 / 2;
    var paper = Raphael("MySVG2", PaperW, PaperH);
    SetWindowSize();
    var st = paper["set"]();
    var sectorsPaper = paper["set"]();
    var axes = paper["set"]();
    var guideline = paper["set"]();
    var FlyStarGr = paper["set"]();
    MapText = [];
    MapRect = [];
    MapCTY = [];
    MapCSY = [];
    MapCTM = [];
    MapCSM = [];
    MarkerMin = 5;
    MarkerDiametr = 50;
    MarkerRadius = MarkerDiametr / 2;
    var MyMarkerPaper = Raphael("MyMarker", MarkerDiametr, MarkerDiametr);
    var MarkGroup = MyMarkerPaper["set"]();
    IMGMenuW = 70;
    IMGMenuCW = IMGMenuW / 2;
    IMGCirkle = 30;
    IMGCrklePadding = 6;
    IMGArrPadding = IMGMenuCW - IMGCirkle + IMGCrklePadding;
    IMGArrPaddingR = IMGMenuW - IMGArrPadding;
    IMGArrow = 7;
    var IMGMenuSVG = Raphael("IMGMenu", IMGMenuW, 200);
    var IMGMenuGroup = IMGMenuSVG["set"]();
    var sectorsCount = count || 12,
        color = colour || "#fff",
        width = stroke_width || 15,
        r1 = Math["min"](R1, R2) || 35,
        r2 = Math["max"](R1, R2) || 60,
        cx = CenterX,
        cy = CenterY,
        sectors = [],
        opacity = [],
        beta = 2 * Math["PI"] / sectorsCount;
    pathParamsW = {
        stroke: "#fff"
    };
    pathParamsB = {
        stroke: color
    };
    pathParams = {
        stroke: color,
        "stroke-width": width,
        "stroke-linecap": "round",
        "stroke-opacity": 1,
        "stroke-dasharray": "--.."
    };
    pathParams2 = {
        stroke: color,
        "stroke-width": width,
        "stroke-linecap": "round",
        "stroke-opacity": 1
    };
    pathParams3 = {
        stroke: color,
        "stroke-width": width,
        "stroke-linecap": "round",
        "stroke-opacity": 0.6,
        "stroke-dasharray": "-"
    };
    pathParams4 = {
        stroke: color,
        "stroke-width": width,
        "stroke-linecap": "round",
        "stroke-opacity": 0.6
    };
    pathParamsRed = {
        stroke: color,
        "stroke-width": width * 2,
        "stroke-linecap": "round",
        "stroke-opacity": 0.5
    };
    pathBGStars = {
        fill: "#eee",
        "fill-opacity": 0.7,
        stroke: "none",
        stroke: "#fff",
        "stroke-width": width * 2,
        "stroke-opacity": 0.8
    };
    CirkleParams = {
        stroke: color,
        "stroke-width": width,
        "stroke-opacity": 0.8
    };
    SectorParams = {
        stroke: "none",
        "fill": "#fff",
        "fill-opacity": 0
    };
    Raphael["getColor"]["reset"]();
    AxesPathParams = {
        stroke: "#ee0000",
        "stroke-width": width * 2,
        "stroke-opacity": 1
    };

    function sector(cx, cy, r, startAngle, endAngle, params) {
        var x1 = cx + r * Math["cos"](startAngle * rad),
            x2 = cx + r * Math["cos"](endAngle * rad),
            y1 = cy + r * Math["sin"](startAngle * rad),
            y2 = cy + r * Math["sin"](endAngle * rad);
        return paper["path"](["M", cx, cy, "L", x1, y1, "A", r, r, 1, +(endAngle - startAngle > 180), 1, x2, y2, "z"])["attr"](params)
    }
    var angle = -97.5;
    total = 0;
    start = 0;
    MarkGroup["push"](MyMarkerPaper["circle"](MarkerRadius, MarkerRadius, (MarkerRadius - MarkerMin))["attr"]({
        stroke: "#222",
        "stroke-width": 2,
        "stroke-opacity": 0.8,
        "fill": "#11ee11",
        "fill-opacity": 0.1
    }), MyMarkerPaper["path"]("M" + MarkerMin + " " + (MarkerDiametr / 2) + "L" + (MarkerDiametr - MarkerMin) + " " + (MarkerDiametr / 2))["attr"]({
        stroke: "#000",
        "stroke-width": 1,
        "stroke-opacity": 0.7
    }), MyMarkerPaper["path"]("M" + (MarkerDiametr / 2) + " " + MarkerMin + "L" + (MarkerDiametr / 2) + " " + (MarkerDiametr - MarkerMin))["attr"]({
        stroke: "#000",
        "stroke-width": 1,
        "stroke-opacity": 0.7
    }));
    MarkGroup["mouseover"](function(event) {
        MarkGroup["attr"]({
            scale: "1.2, 1.2",
            cx: MarkerRadius,
            cy: MarkerRadius
        })
    })["mouseout"](function(event) {
        MarkGroup["attr"]({
            scale: "1, 1",
            cx: MarkerRadius,
            cy: MarkerRadius
        })
    });

    function ShowCurShablon(ShablonNum) {
        stN[ShablonNum]["rotate"]["img"]["show"]();
        stN[ShablonNum]["rotate"]["sect"]["show"]();
        stN[ShablonNum]["rotate"]["sectLine"]["show"]();
        stN[ShablonNum]["circ"]["show"]()
    }

    function HideCurShablon(ShablonNum) {
        stN[ShablonNum]["rotate"]["img"]["hide"]();
        stN[ShablonNum]["rotate"]["sect"]["hide"]();
        stN[ShablonNum]["rotate"]["sectLine"]["hide"]();
        stN[ShablonNum]["circ"]["hide"]()
    }

    function RotateCurShablon() {
        tAngle = $("#AngleMySVG")["attr"]("value");
        stN[CurShType]["rotate"]["img"]["rotate"](tAngle, CenterX, CenterY);
        stN[CurShType]["rotate"]["sect"]["rotate"](tAngle, CenterX, CenterY);
        stN[CurShType]["rotate"]["sectLine"]["rotate"](tAngle, CenterX, CenterY)
    }

    function ColorCurSablon() {
        if ($("#WhiteMounth")["is"](":checked")) {
            stN[CurShType]["rotate"]["img"]["attr"]({
                src: "/img/" + CirckleIMG["type"][CurShType] + MapLang + CirckleIMG["color"][1]
            });
            stN[CurShType]["rotate"]["sectLine"]["attr"](pathParamsW);
            stN[CurShType]["circ"]["attr"](pathParamsW)
        } else {
            stN[CurShType]["rotate"]["img"]["attr"]({
                src: "/img/" + CirckleIMG["type"][CurShType] + MapLang + CirckleIMG["color"][0]
            });
            stN[CurShType]["rotate"]["sectLine"]["attr"](pathParamsB);
            stN[CurShType]["circ"]["attr"](pathParamsB)
        }
    }
    $("#ShType")["change"](function() {
        HideCurShablon(CurShType);
        CurShType = parseInt($(this)["val"]());
        ColorCurSablon();
        ShowCurShablon(CurShType);
        RotateCurShablon();
        urlRefreshParam()
    });
    stN[0] = {
        "rotate": {
            "img": paper["set"](),
            "sect": paper["set"](),
            "sectLine": paper["set"]()
        },
        "circ": paper["set"]()
    };
    stN[0]["circ"]["push"](paper["circle"](CenterX, CenterY, R0)["attr"](pathParams2), paper["circle"](CenterX, CenterY, R1)["attr"](CirkleParams), paper["circle"](CenterX, CenterY, 178)["attr"](CirkleParams), paper["circle"](CenterX, CenterY, 223)["attr"](CirkleParams));
    stN[0]["rotate"]["img"]["push"](paper["image"]("/img/" + CirckleIMG["type"][0] + MapLang + CirckleIMG["color"][0], CenterX - CirckleIMG["sizeW"][0] / 2, CenterY - CirckleIMG["sizeH"][0] / 2, CirckleIMG["sizeW"][0], CirckleIMG["sizeH"][0])["attr"]({
        "opacity": 0.8
    }));
    var TcontPer = 0;
    for (var i = 0; i < 24; i++) {
        var alpha = beta * i - Math["PI"] / 2 + ShiftDegree,
            cos = Math["cos"](alpha),
            sin = Math["sin"](alpha);
        stN[0]["rotate"]["sect"]["push"](sector(cx, cy, r, angle, angle + AngleSector, SectorParams)["mouseover"](function(e) {
            this["attr"]({
                "fill-opacity": 0.5
            })
        })["mouseout"](function(e) {
            this["attr"]({
                "fill-opacity": 0
            })
        }));
        angle = angle + AngleSector;
        if (contPer != TcontPer) {
            stN[0]["rotate"]["sectLine"]["push"](paper["path"]([
                ["M", cx + r1 * cos, cy + r1 * sin],
                ["L", cx + r2 * cos, cy + r2 * sin]
            ])["attr"](pathParams))
        } else {
            stN[0]["rotate"]["sectLine"]["push"](paper["path"]([
                ["M", cx + R0 * cos, cy + R0 * sin],
                ["L", cx + r2 * cos, cy + r2 * sin]
            ])["attr"](pathParams2))
        };
        if (contPer >= TcontPer) {
            TcontPer++
        } else {
            TcontPer = 0
        }
    };
    stN[0]["rotate"]["sectLine"]["toBack"]();
    HideCurShablon(0);
    stN[1] = {
        "rotate": {
            "img": paper["set"](),
            "sect": paper["set"](),
            "sectLine": paper["set"]()
        },
        "circ": paper["set"]()
    };
    stN[1]["circ"]["push"](paper["circle"](CenterX, CenterY, R0)["attr"](pathParams2), paper["circle"](CenterX, CenterY, 163)["attr"](CirkleParams), paper["circle"](CenterX, CenterY, 178)["attr"](CirkleParams), paper["circle"](CenterX, CenterY, 221)["attr"](CirkleParams), paper["circle"](CenterX, CenterY, 249)["attr"](CirkleParams));
    stN[1]["rotate"]["img"]["push"](paper["image"]("/img/" + CirckleIMG["type"][1] + MapLang + CirckleIMG["color"][0], CenterX - CirckleIMG["sizeW"][1] / 2, CenterY - CirckleIMG["sizeH"][1] / 2, CirckleIMG["sizeW"][1], CirckleIMG["sizeH"][1])["attr"]({
        "opacity": 0.8
    }));
    var TcontPer = 0;
    for (var i = 0; i < 24; i++) {
        var alpha = beta * i - Math["PI"] / 2 + ShiftDegree;
        cos = Math["cos"](alpha);
        sin = Math["sin"](alpha);
        var alpha = beta * i - Math["PI"] / 2;
        cos2 = Math["cos"](alpha);
        sin2 = Math["sin"](alpha);
        stN[1]["rotate"]["sect"]["push"](sector(cx, cy, r, angle, angle + AngleSector, SectorParams)["mouseover"](function(e) {
            this["attr"]({
                "fill-opacity": 0.5
            })
        })["mouseout"](function(e) {
            this["attr"]({
                "fill-opacity": 0
            })
        }));
        angle = angle + AngleSector;
        if (contPer != TcontPer) {
            stN[1]["rotate"]["sectLine"]["push"](paper["path"]([
                ["M", cx + R1 * cos, cy + R1 * sin],
                ["L", cx + R2 * cos, cy + R2 * sin]
            ])["attr"](pathParams));
            stN[1]["rotate"]["sectLine"]["push"](paper["path"]([
                ["M", cx + 221 * cos2, cy + 221 * sin2],
                ["L", cx + R2 * cos2, cy + R2 * sin2]
            ])["attr"](pathParams3))
        } else {
            stN[1]["rotate"]["sectLine"]["push"](paper["path"]([
                ["M", cx + R0 * cos, cy + R0 * sin],
                ["L", cx + R2 * cos, cy + R2 * sin]
            ])["attr"](pathParams2));
            stN[1]["rotate"]["sectLine"]["push"](paper["path"]([
                ["M", cx + 221 * cos2, cx + 221 * sin2],
                ["L", cx + R2 * cos2, cy + R2 * sin2]
            ])["attr"](pathParams4))
        };
        if (contPer >= TcontPer) {
            TcontPer++
        } else {
            TcontPer = 0
        }
    };
    stN[1]["rotate"]["sectLine"]["toBack"]();
    HideCurShablon(1);
    SH2Angle = [15, 45, 75, 105, 135, 165, 195, 225, 255, 285, 315, 345];
    stN[2] = {
        "rotate": {
            "img": paper["set"](),
            "sect": paper["set"](),
            "sectLine": paper["set"]()
        },
        "circ": paper["set"]()
    };
    stN[2]["circ"]["push"](paper["circle"](CenterX, CenterY, R0)["attr"](pathParams2), paper["circle"](CenterX, CenterY, 173)["attr"](CirkleParams), paper["circle"](CenterX, CenterY, 223)["attr"](CirkleParams));
    stN[2]["rotate"]["img"]["push"](paper["image"]("/img/" + CirckleIMG["type"][2] + MapLang + CirckleIMG["color"][0], CenterX - CirckleIMG["sizeW"][2] / 2, CenterY - CirckleIMG["sizeH"][2] / 2, CirckleIMG["sizeW"][2], CirckleIMG["sizeH"][2])["attr"]({
        "opacity": 0.8
    }));
    var TcontPer = 0;
    for (var i = 0; i < 12; i++) {
        var alpha = degToRad(SH2Angle[i]);
        cos = Math["cos"](alpha);
        sin = Math["sin"](alpha);
        if (i == 11) {
            tA = SH2Angle[0]
        } else {
            tA = SH2Angle[i + 1]
        };
        stN[2]["rotate"]["sect"]["push"](sector(cx, cy, r, SH2Angle[i], tA, SectorParams)["mouseover"](function(e) {
            this["attr"]({
                "fill-opacity": 0.5
            })
        })["mouseout"](function(e) {
            this["attr"]({
                "fill-opacity": 0
            })
        }));
        angle = angle + AngleSector;
        stN[2]["rotate"]["sectLine"]["push"](paper["path"]([
            ["M", cx + R0 * cos, cy + R0 * sin],
            ["L", cx + R2 * cos, cy + R2 * sin]
        ])["attr"](pathParams2));
        if (contPer >= TcontPer) {
            TcontPer++
        } else {
            TcontPer = 0
        }
    };
    stN[2]["rotate"]["sectLine"]["toBack"]();
    HideCurShablon(2);
    ShowCurShablon(CurShType);

    function EventFix(e) {
        if (!e["pageX"] || !e["pageY"]) {
            if (e["clientX"] || e["clientY"]) {
                e["pageX"] = e["clientX"] + document["body"]["scrollLeft"] + document["documentElement"]["scrollLeft"];
                e["pageY"] = e["clientY"] + document["body"]["scrollTop"] + document["documentElement"]["scrollTop"]
            }
        };
        return e
    }
    var RadiusFS = 115;
    STextF = 25;
    FontShift = -2;
    CSRad = 10;

    function GetCurrentMap() {
        CurSFDegree = $("#DegreeGuid")["attr"]("value");
        for (i = 0; i < AllMounth["length"]; i++) {
            if (((CurSFDegree >= AllMounth[i]["Angle"][0]) && (CurSFDegree <= AllMounth[i]["Angle"][1])) || ((CurSFDegree >= 352.6) || (CurSFDegree <= 7.5))) {
                $("#CurMounth")["val"](AllMounth[i].ChN);
                break
            }
        };
        for (var i = 0; i < 16; i++) {
            if ((CurSFDegree <= 22.5) || (CurSFDegree >= 352.5)) {
                return i;
                break
            } else {
                if ((CurSFDegree >= FSParam[i]["Angle"][0]) && (CurSFDegree <= FSParam[i]["Angle"][1])) {
                    return i;
                    break
                }
            }
        }
    }

    function ChengeCSnum() {
        tCSY = CSYCenter = GetNowStarCenterByYear(parseInt($("#CSYear")["val"]()));
        tCSM = CSMCenter = GetNowStarCenterByMonth(parseInt($("#CSYear")["val"]()), parseInt($("#CSMonth  option:selected")["val"]()));
        tArrCSY = [];
        tArrCSM = [];
        for (var i = 0; i < 8; i++) {
            if ((CSYCenter + 1) > 9) {
                CSYCenter = 1
            } else {
                CSYCenter++
            };
            if ((CSMCenter + 1) > 9) {
                CSMCenter = 1
            } else {
                CSMCenter++
            };
            tArrCSY[i] = CSYCenter;
            tArrCSM[i] = CSMCenter
        };
        for (var i = 0; i < 8; i++) {
            switch (i) {
                case 0:
                    SQi = 8;
                    break;
                case 1:
                    SQi = 7;
                    break;
                case 2:
                    SQi = 4;
                    break;
                case 3:
                    SQi = 1;
                    break;
                case 4:
                    SQi = 2;
                    break;
                case 5:
                    SQi = 3;
                    break;
                case 6:
                    SQi = 6;
                    break;
                case 7:
                    SQi = 9;
                    break
            };
            switch (i) {
                case 0:
                    CSQi = 4;
                    break;
                case 1:
                    CSQi = 2;
                    break;
                case 2:
                    CSQi = 6;
                    break;
                case 3:
                    CSQi = 7;
                    break;
                case 4:
                    CSQi = 3;
                    break;
                case 5:
                    CSQi = 5;
                    break;
                case 6:
                    CSQi = 1;
                    break;
                case 7:
                    CSQi = 0;
                    break
            };
            if (tArrCSY[CSQi] == 5) {
                MapCSY[SQi]["attr"]({
                    fill: "#ee0000"
                });
                MapCTY[SQi]["attr"]({
                    fill: "#ffffff"
                })
            } else {
                MapCSY[SQi]["attr"]({
                    fill: "#ffffff"
                });
                MapCTY[SQi]["attr"]({
                    fill: "#000000"
                })
            };
            if (tArrCSM[CSQi] == 5) {
                MapCSM[SQi]["attr"]({
                    fill: "#ee0000"
                });
                MapCTM[SQi]["attr"]({
                    fill: "#ffffff"
                })
            } else {
                MapCSM[SQi]["attr"]({
                    fill: "#ffffff"
                });
                MapCTM[SQi]["attr"]({
                    fill: "#000000"
                })
            };
            MapCTY[SQi]["attr"]({
                text: tArrCSY[CSQi]
            });
            MapCTM[SQi]["attr"]({
                text: tArrCSM[CSQi]
            })
        };
        if (tCSY == 5) {
            MapCSY[5]["attr"]({
                fill: "#ee0000"
            });
            MapCTY[5]["attr"]({
                fill: "#ffffff"
            })
        } else {
            MapCSY[5]["attr"]({
                fill: "#ffffff"
            });
            MapCTY[5]["attr"]({
                fill: "#000000"
            })
        };
        if (tCSM == 5) {
            MapCSM[5]["attr"]({
                fill: "#ee0000"
            });
            MapCTM[5]["attr"]({
                fill: "#ffffff"
            })
        } else {
            MapCSM[5]["attr"]({
                fill: "#ffffff"
            });
            MapCTM[5]["attr"]({
                fill: "#000000"
            })
        };
        MapCTY[5]["attr"]({
            text: tCSY
        });
        MapCTM[5]["attr"]({
            text: tCSM
        })
    }

    function SelectMapInPer() {
        CurtMapNum = GetCurrentMap();
        if ($("#CSShoH")["is"](":checked")) {
            YSMarg = 10;
            MapText[5]["attr"]({
                x: cx - 25
            })
        } else {
            YSMarg = 0;
            MapText[5]["attr"]({
                x: cx
            })
        };
        if ($("#FSMap")["is"](":checked")) {
            CSMarg = STextF + 3;
            MapCTY[5]["attr"]({
                x: cx + STextF
            });
            MapCTM[5]["attr"]({
                x: cx + STextF
            })
        } else {
            CSMarg = 0;
            MapCTY[5]["attr"]({
                x: cx + STextF
            });
            MapCTM[5]["attr"]({
                x: cx + STextF
            })
        };
        for (var i = 0; i < 8; i++) {
            switch (i) {
                case 0:
                    SQi = 8;
                    break;
                case 1:
                    SQi = 7;
                    break;
                case 2:
                    SQi = 4;
                    break;
                case 3:
                    SQi = 1;
                    break;
                case 4:
                    SQi = 2;
                    break;
                case 5:
                    SQi = 3;
                    break;
                case 6:
                    SQi = 6;
                    break;
                case 7:
                    SQi = 9;
                    break
            };
            TextStar = FS["SPer"][CurPerNum]["SMap"][CurtMapNum]["SQ" + SQi][0] + "  " + FS["SPer"][CurPerNum]["SMap"][CurtMapNum]["SQ" + SQi][1] + "\n" + FS["SPer"][CurPerNum]["SMap"][CurtMapNum]["SQ" + SQi][2];
            var beta2 = 2 * Math["PI"] / 8;
            alpha2 = beta2 * i - Math["PI"] / 2 + (parseFloat($("#AngleMySVG")["attr"]("value")) * Math["PI"] / 180), cos = cx + RadiusFS * Math["cos"](alpha2), sin = cy + RadiusFS * Math["sin"](alpha2);
            MapText[SQi]["attr"]({
                text: TextStar,
                x: cos - YSMarg,
                y: sin
            });
            MapRect[SQi]["attr"]({
                x: cos - STextF - YSMarg,
                y: sin - STextF
            });
            MapCSY[SQi]["attr"]({
                cx: cos + CSMarg,
                cy: sin - STextF + CSRad + 2
            });
            MapCTY[SQi]["attr"]({
                x: cos + CSMarg,
                y: sin - STextF + CSRad + 2
            });
            MapCSM[SQi]["attr"]({
                cx: cos + CSMarg,
                cy: sin + STextF - CSRad - 2
            });
            MapCTM[SQi]["attr"]({
                x: cos + CSMarg,
                y: sin + STextF - CSRad - 2
            })
        };
        var beta2 = 2 * Math["PI"] / 8;
        alpha2 = (beta2 * i - Math["PI"] / 2) + (parseFloat($("#AngleMySVG")["attr"]("value")) * Math["PI"] / 180);
        MapText[5]["attr"]({
            text: FS["SPer"][CurPerNum]["SMap"][CurtMapNum]["SQ5"][0] + "  " + FS["SPer"][CurPerNum]["SMap"][CurtMapNum]["SQ5"][1] + "\n" + FS["SPer"][CurPerNum]["SMap"][CurtMapNum]["SQ5"][2]
        })
    }

    function DirectDegree() {
        var VarAngleMySVG = parseFloat($("#AngleMySVG")["attr"]("value"));
        if (VarAngleMySVG < -180) {
            VarAngleMySVG = 360 + VarAngleMySVG
        } else {
            if (VarAngleMySVG > 180) {
                VarAngleMySVG = VarAngleMySVG - 360
            }
        };
        $("#AngleMySVG")["attr"]("value", VarAngleMySVG);
        TTTAng = VarAngleMySVG;
        if (rot - TTTAng < 360) {
            TTTAng = rot - TTTAng;
            if (TTTAng < 0) {
                TTTAng = 360 + TTTAng
            }
        } else {
            TTTAng = rot - TTTAng - 360
        };
        $("#DegreeGuid")["attr"]("value", TTTAng["toFixed"](3));
        SelectMapInPer()
    }

    function GetCurrentPereod() {
        CurPereodNumber = Math["ceil"]((1864 - parseInt($("#builtYear")["attr"]("value"))) / 20) / 9;
        CurPereodNumber = Math["floor"]((Math["ceil"](CurPereodNumber) - CurPereodNumber) * 10);
        $("#builtPer")["val"](CurPereodNumber + 1);
        return CurPereodNumber
    }
    CurtMapNum = GetCurrentMap();
    CurPerNum = GetCurrentPereod();
    for (var i = 0; i < 8; i++) {
        switch (i) {
            case 0:
                SQi = 8;
                break;
            case 1:
                SQi = 7;
                break;
            case 2:
                SQi = 4;
                break;
            case 3:
                SQi = 1;
                break;
            case 4:
                SQi = 2;
                break;
            case 5:
                SQi = 3;
                break;
            case 6:
                SQi = 6;
                break;
            case 7:
                SQi = 9;
                break
        };
        TextStar = " ";
        MapRect[SQi] = paper["rect"](0, 0, STextF * 2, STextF * 2, 5)["attr"](pathBGStars);
        MapCSY[SQi] = paper["circle"](10, 10, CSRad)["attr"](pathBGStars);
        MapCTY[SQi] = paper["text"](0, 0, " ")["attr"]({
            fill: color,
            stroke: "none",
            "font-family": "Arial, Helvetica",
            "font-size": "18px",
            "font-weight": "bold",
            title: IMG_24M_YEARLY_STAR
        });
        MapCSM[SQi] = paper["circle"](10, 20, CSRad)["attr"](pathBGStars);
        MapCTM[SQi] = paper["text"](0, 0, " ")["attr"]({
            fill: color,
            stroke: "none",
            "font-family": "Arial, Helvetica",
            "font-size": "16px",
            title: IMG_24M_MONTHLY_STAR
        });
        MapText[SQi] = paper["text"](0, 0, TextStar)["attr"]({
            fill: color,
            stroke: "none",
            "font-family": "Arial, Helvetica",
            "font-size": "20px",
            "font-weight": "bold"
        });
        FlyStarGr["push"](MapText[SQi], MapRect[SQi], MapCSY[SQi], MapCTY[SQi], MapCSM[SQi], MapCTM[SQi])
    };
    MapCSY[5] = paper["circle"](cx + STextF, cy - 15, CSRad)["attr"](pathBGStars);
    MapCTY[5] = paper["text"](cx + STextF, cy - 15, "1")["attr"]({
        fill: color,
        stroke: "none",
        "font-family": "Arial, Helvetica",
        "font-size": "18px",
        "font-weight": "bold",
        title: IMG_24M_YEARLY_STAR
    });
    MapCSM[5] = paper["circle"](cx + STextF, cy + 15, CSRad)["attr"](pathBGStars);
    MapCTM[5] = paper["text"](cx + STextF, cy + 15, "1")["attr"]({
        fill: color,
        stroke: "none",
        "font-family": "Arial, Helvetica",
        "font-size": "16px"
    });
    MapText[5] = paper["text"](cx - 25, cy + FontShift / 2 + 2, FS["SPer"][CurPerNum]["SMap"][CurtMapNum]["SQ5"][0] + "  " + FS["SPer"][CurPerNum]["SMap"][CurtMapNum]["SQ5"][1] + "\n" + FS["SPer"][CurPerNum]["SMap"][CurtMapNum]["SQ5"][2])["attr"]({
        fill: color,
        stroke: "none",
        "font-family": "Arial, Helvetica",
        "font-size": "20px",
        "font-weight": "bold",
        title: IMG_24M_MONTHLY_STAR
    });
    FlyStarGr["push"](MapText[5], MapCTY[5], MapCSY[5], MapCTM[5], MapCSM[5]);
    if ((CirkleW > parseFloat($("#MYGmaps")["width"]())) || (CirkleW > parseFloat($("#MYGmaps")["height"]()))) {
        GuidLRad = 250
    } else {
        GuidLRad = CirkleW
    };
    guideline["push"](paper["path"]("M" + CenterX + " " + CenterY + "L" + CenterX + " " + (CenterY - GuidLRad / 2 - 5))["attr"](AxesPathParams), paper["path"]("M" + (CenterX + R0) + " " + CenterY + " L" + (CenterX - R0) + " " + CenterY)["attr"](AxesPathParams), paper["circle"](CenterX, (CenterY - GuidLRad / 2 - RGuid - 5), RGuid)["attr"]({
        stroke: "#ee0000",
        "stroke-width": width * 2,
        "stroke-opacity": 1,
        fill: "90-#ff3333-#ee0000",
        "fill-opacity": 0.5,
        cursor: "move"
    })["mouseover"](function(event) {
        this["attr"]({
            "fill-opacity": 1,
            scale: "1.5, 1.5"
        })
    })["mouseout"](function(event) {
        this["attr"]({
            "fill-opacity": 0.5,
            scale: "1, 1"
        })
    }));
    guideline["rotate"](rot, CenterX, CenterY, true);
    $("#AngleMySVG")["change"](function() {
        if ($(this)["attr"]("value")["search"](/[-0-9.]/i) < 0) {
            $(this)["attr"]("value", "0")
        } else {
            $(this)["attr"]("value", $(this)["attr"]("value")["replace"](/[^-0-9.]/i, ""))
        };
        RotateCurShablon();
        DirectDegree();
        urlRefreshParam()
    });
    $("#CSYear, #CSMonth")["change"](function() {
        if (/mingli/i ["test"](document["location"]["href"])) {
            ChengeCSnum()
        };
        urlRefreshParam();
        getDeclanation()
    });
    $("#CSShoH")["change"](function() {
        for (var i = 1; i < MapCSY["length"]; i++) {
            if ($(this)["is"](":checked")) {
                MapCSY[i]["attr"]({
                    "opacity": 1
                });
                MapCTY[i]["attr"]({
                    "opacity": 1
                });
                MapCSM[i]["attr"]({
                    "opacity": 1
                });
                MapCTM[i]["attr"]({
                    "opacity": 1
                })
            } else {
                MapCSY[i]["attr"]({
                    "opacity": 0
                });
                MapCTY[i]["attr"]({
                    "opacity": 0
                });
                MapCSM[i]["attr"]({
                    "opacity": 0
                });
                MapCTM[i]["attr"]({
                    "opacity": 0
                })
            }
        };
        SelectMapInPer();
        urlRefreshParam()
    });
    $("#AngleMySVG")["keydown"](function(event) {
        if ($(this)["attr"]("value")["search"](/[-0-9.]/i) < 0) {
            CurrentAngle = 0
        } else {
            CurrentAngle = parseFloat($(this)["attr"]("value"))
        };
        switch (event["keyCode"]) {
            case 38:
                $(this)["attr"]("value", CurrentAngle - KeyAngle);
                RotateCurShablon();
                DirectDegree();
                break;
            case 40:
                $(this)["attr"]("value", CurrentAngle + KeyAngle);
                RotateCurShablon();
                DirectDegree();
                break
        }
    });
    var mouse = null;
    dragObject = false;
    dragImgPlan = false;
    tMouseX = 0;
    tMouseY = 0;
    guideline["mousedown"](function(e) {
        dragObject = true
    });
    $(document)["mouseup"](function(e) {
        dragObject = null;
        dragImgPlan = false;
        dragst = false;
        $("#ImgPlan")["css"]("cursor", "url('http://maps.gstatic.com/intl/en_us/mapfiles/openhand_8_8.cur'), default")
    });
    $("#ImgPlan")["mousedown"](function(e) {
        e = EventFix(e);
        dragImgPlan = true;
        $(this)["css"]("cursor", "url('http://maps.gstatic.com/intl/en_us/mapfiles/closedhand_8_8.cur'), move");
        tMouseX = e["pageX"] - $(this)["position"]()["left"];
        tMouseY = e["pageY"] - $(this)["position"]()["top"];
        return false
    });
    $("#ImgPlan")["mousewheel"](function(event, delta) {
        impShiftX = (parseFloat($("#imgContentPlan")["css"]("width")) / 2 - parseFloat($(this)["position"]()["left"])) / 100 * 10;
        impShiftY = (parseFloat($("#imgContentPlan")["css"]("height")) / 2 - parseFloat($(this)["position"]()["top"])) / 100 * 10;
        if (delta < 0) {
            $(this)["css"]({
                width: (parseFloat($(this)["css"]("width")) / 100 * 90) + "px"
            });
            $("#ImgPlan")["css"]({
                left: (parseFloat($(this)["position"]()["left"]) + impShiftX) + "px"
            });
            $("#ImgPlan")["css"]({
                top: (parseFloat($(this)["position"]()["top"]) + impShiftY) + "px"
            })
        } else {
            $(this)["css"]({
                width: (parseFloat($(this)["css"]("width")) / 100 * 110) + "px"
            });
            $("#ImgPlan")["css"]({
                left: (parseFloat($(this)["position"]()["left"]) - impShiftX) + "px"
            });
            $("#ImgPlan")["css"]({
                top: (parseFloat($(this)["position"]()["top"]) - impShiftY) + "px"
            })
        }
    });
    $(document)["mousemove"](function(e) {
        e = EventFix(e);
        if (dragImgPlan) {
            $("#ImgPlan")["css"]({
                left: (e["pageX"] - tMouseX) + "px",
                top: (e["pageY"] - tMouseY) + "px"
            })
        };
        if (dragObject) {
            TrueSVGcx = $("#SVGDiv")["position"]()["left"] - e["pageX"];
            TrueSVGcy = $("#SVGDiv")["position"]()["top"] + ($("#SVGDiv")["height"]() / 2) - e["pageY"];
            rot = Math["atan2"](TrueSVGcy, TrueSVGcx) / Math["PI"] * 180 - 90;
            if (rot < 0) {
                rot = 360 + rot
            };
            rot = rot["toFixed"](3);
            guideline["rotate"](rot, CenterX, CenterY, true);
            DirectDegree();
            urlRefreshParam()
        }
    });
    $("#DegreeGuid")["change"](function() {
        urlRefreshParam();
        Point = false;
        if ($(this)["attr"]("value")["search"](/[-0-9.]/i) < 0) {
            $(this)["attr"]("value", "0")
        } else {
            $(this)["attr"]("value", $(this)["attr"]("value")["replace"](/[^-0-9.]/i, ""))
        };
        tAngleGuid = parseFloat($(this)["attr"]("value"));
        VarAngleMySVG = parseFloat($("#AngleMySVG")["attr"]("value"));
        if (!tAngleGuid) {
            tAngleGuid = 0
        };
        if (($(this)["attr"]("value")["search"](/[.]/i) > 0) && ($(this)["attr"]("value")["length"] - 1 == $(this)["attr"]("value")["search"](/[.]/i))) {
            Point = true
        };
        rot = tAngleGuid + VarAngleMySVG;
        guideline["rotate"](rot, CenterX, CenterY, true);
        DirectDegree();
        if (Point) {
            $("#DegreeGuid")["attr"]("value", $("#DegreeGuid")["attr"]("value") + ".")
        }
    });
    $("#DegreeGuid")["keydown"](function(event) {
        switch (event["keyCode"]) {
            case 38:
                if (rot - KeyAngle < -360) {
                    rot = 0
                } else {
                    rot = rot - KeyAngle
                };
                guideline["rotate"](rot, CenterX, CenterY, true);
                DirectDegree();
                break;
            case 40:
                if (rot + KeyAngle > 360) {
                    rot = 0
                } else {
                    rot = rot + KeyAngle
                };
                guideline["rotate"](rot, CenterX, CenterY, true);
                DirectDegree();
                break
        }
    });
    $("#builtYear")["change"](function() {
        if ($(this)["attr"]("value")["search"](/[0-9]/i) < 0) {
            $(this)["attr"]("value", "0")
        } else {
            $(this)["attr"]("value", $(this)["attr"]("value")["replace"](/[^-0-9.]/i, ""))
        };
        CurPerNum = GetCurrentPereod();
        SelectMapInPer();
        getDeclanation();
        urlRefreshParam()
    });
    $("#builtYear")["keydown"](function(event) {
        if ($(this)["attr"]("value")["search"](/[0-9]/i) < 0) {
            CurrentYear = 0
        } else {
            CurrentYear = parseFloat($(this)["attr"]("value"))
        };
        switch (event["keyCode"]) {
            case 38:
                $("#builtYear")["attr"]("value", CurrentYear + 1);
                CurPerNum = GetCurrentPereod();
                SelectMapInPer();
                break;
            case 40:
                $("#builtYear")["attr"]("value", CurrentYear - 1);
                CurPerNum = GetCurrentPereod();
                SelectMapInPer();
                break
        }
    });
    $("#FSMap")["click"](function() {
        if ($(this)["is"](":checked")) {
            FlyStarGr["attr"]({
                "opacity": 1
            });
            $("#CSShoH")["attr"]("checked", "checked")["change"]()
        } else {
            FlyStarGr["attr"]({
                "opacity": 0
            });
            $("#CSShoH")["removeAttr"]("checked")["change"]()
        };
        urlRefreshParam()
    });
    if ($("#FSMap")["is"](":checked")) {
        FlyStarGr["attr"]({
            "opacity": 1
        });
        $("#CSShoH")["attr"]("checked", "checked")["change"]()
    } else {
        FlyStarGr["attr"]({
            "opacity": 0
        });
        $("#CSShoH")["removeAttr"]("checked")["change"]()
    };
    $("#MyMarker")["click"](function() {
        $(this)["addClass"]("DNone");
        $("#SVGSettings")["removeClass"]("DNone");
        $("#SVGDiv")["removeClass"]("DNone");
        $(".ShowGMap")["text"](TXT_24M_MENU_HIDE_PATTERN);
        urlRefreshParam();
        SetWindowSize();
        return false
    });
    $(".ShowGMap")["click"](function() {
        if ($(this)["text"]() == TXT_24M_MENU_SHOW_PATTERN) {
            $(".ShowGMap")["text"](TXT_24M_MENU_HIDE_PATTERN);
            $("#SVGSettings")["removeClass"]("DNone");
            $("#SVGDiv")["removeClass"]("DNone");
            $("#MyMarker")["addClass"]("DNone");
            SetWindowSize()
        } else {
            $(".ShowGMap")["text"](TXT_24M_MENU_SHOW_PATTERN);
            $("#SVGSettings")["addClass"]("DNone");
            $("#SVGDiv")["addClass"]("DNone");
            $("#MyMarker")["removeClass"]("DNone")
        };
        urlRefreshParam();
        return false
    });
    if (urlShowGMap == "true") {
        $(".ShowGMap")["text"](TXT_24M_MENU_HIDE_PATTERN);
        $("#SVGSettings")["removeClass"]("DNone");
        $("#SVGDiv")["removeClass"]("DNone");
        $("#MyMarker")["addClass"]("DNone");
        SetWindowSize()
    };
    $("input:text")["focus"](function() {
        this["select"]()
    });

    function YMYSetAddres() {
        YMYmap["setCenter"](new YMaps.GeoPoint($("#GoogleSearch #Lng")["attr"]("value"), $("#GoogleSearch #Lat")["attr"]("value")), parseInt($("#zoom")["val"]()));
        var geocoder = new YMaps.Geocoder(YMYmap["getCenter"](), {
            results: 1,
            boundedBy: YMYmap["getBounds"]()
        });
        YMaps["Events"]["observe"](geocoder, geocoder["Events"].Load, function(geocoder) {
            geoResult = this["get"](0);
            if (this["length"]()) {
                var sep = ", ",
                    names = (geoResult["text"] || "")["split"](sep),
                    index = geoResult["kind"] === "house" ? -2 : -1;
                $("#GoogleSearch input#address")["attr"]("value", names["slice"](index)["join"](sep) + ", " + names["slice"](0, index)["join"](sep));
                YMYmap["setCenter"](geoResult["getGeoPoint"]())
            } else {
                alert(TXT_NOT_FOUND)
            }
        });
        YMaps["Events"]["observe"](geocoder, geocoder["Events"].Fault, function(geocoder, error) {
            alert(TXT_ERROR + error)
        })
    }

    function SwopSettingUL(CurULMenu) {
        $("#ULMenuFSSett li.Sel")["removeClass"]("Sel");
        $(CurULMenu)["parents"]("li:first")["addClass"]("Sel");
        NameMenu = $("#ULMenuFSSett li.Sel a")["attr"]("id");
        if (NameMenu == "IMGMap") {
            $("#SVGSettings .IMGMap")["removeClass"]("DNone");
            $("#imgContentPlan")["removeClass"]("DNone");
            $("#MYJamaps")["addClass"]("DNone");
            $("#MYGmaps")["addClass"]("DNone");
            $("#GoogleSearch")["addClass"]("DNone")
        };
        if ((NameMenu == "GMap") && (NoGoogleMap)) {
            $("#SVGSettings .IMGMap")["addClass"]("DNone");
            $("#imgContentPlan")["addClass"]("DNone");
            $("#MYJamaps")["addClass"]("DNone");
            $("#GoogleSearch")["removeClass"]("DNone");
            $("#MYGmaps")["removeClass"]("DNone");
            showLocation();
            googleShablonType()
        };
        if (NameMenu == "JaMap") {
            $("#SVGSettings .IMGMap")["addClass"]("DNone");
            $("#MYGmaps")["addClass"]("DNone");
            $("#GoogleSearch")["removeClass"]("DNone");
            $("#imgContentPlan")["addClass"]("DNone");
            $("#MYJamaps")["removeClass"]("DNone");
            YMYmap["redraw"]();
            YMYSetAddres();
            googleShablonType()
        };
        return false
    }
    $("#ULMenuFSSett li a")["click"](function() {
        SwopSettingUL(this);
        urlRefreshParam();
        return false
    });
    urlMap = urlParam("Map");
    if (urlMap) {
        $("#" + urlMap)["click"]()
    };
    if (!NoGoogleMap) {
        NameMenu = "JaMap";
        $("#ULMenuFSSett li #JaMap, #ULMenuFSSett li #GMap")["parents"]("li")["addClass"]("DNone");
        $("#SVGSettings .IMGMap")["addClass"]("DNone");
        $("#MYGmaps")["addClass"]("DNone");
        $("#GoogleSearch")["removeClass"]("DNone");
        $("#imgContentPlan")["addClass"]("DNone");
        $("#MYJamaps")["removeClass"]("DNone");
        YMYmap["redraw"]();
        YMYSetAddres()
    } else {
        NameMenu = "GMap"
    };
    $("#WhiteMounth")["change"](function() {
        ColorCurSablon();
        if (!$(this)["is"](":checked")) {
            MapText[5]["attr"]({
                fill: "#000000"
            })
        } else {
            MapText[5]["attr"]({
                fill: "#ffffff"
            })
        }
    });
    getDeclanation();
    googleShablonType();
    RotateCurShablon();

    function startDrowStar() {
        $("#AngleMySVG")["change"]();
        $("#CSYear")["change"]()
    }
    clearTimeout(timeoutId);
    var timeoutId = setTimeout(startDrowStar, 2400)
});

function showMaxZoom(latLng) {
    maxZoomService["getMaxZoomAtLatLng"](latLng, function(response) {
        if (response["status"] != google["maps"]["MaxZoomStatus"]["OK"]) {
            map["setZoom"](8);
            return
        } else {
            urlzoom = parseInt(urlParam("zoom"));
            if (urlzoom) {
                map["setZoom"](urlzoom)
            } else {
                map["setZoom"](parseInt(response["zoom"] / 1.5))
            };
            return
        }
    })
}

function codeLatLng(latlng) {
    getDeclanation();
    if (geocoder) {
        geocoder["geocode"]({
            "latLng": latlng
        }, function(results, status) {
            if (status == google["maps"]["GeocoderStatus"]["OK"]) {
                $("#GoogleSearch input#address")["attr"]("value", results[0]["formatted_address"])
            } else {
                alert(TXT_ERROR_GETTING_ADREESS + status)
            }
        })
    }
}

function codeAddress() {
    var address = document["getElementById"]("address")["value"];
    geocoder["geocode"]({
        "address": address
    }, function(results, status) {
        if (status == google["maps"]["GeocoderStatus"]["OK"]) {
            map["setCenter"](results[0]["geometry"]["location"]);
            showMaxZoom(results[0]["geometry"]["location"]);
            $("#GoogleSearch input#address")["attr"]("value", results[0]["formatted_address"]);
            $("#GoogleSearch #Lat")["attr"]("value", parseFloat(map["getCenter"]()["lat"]())["toFixed"](5));
            $("#GoogleSearch #Lng")["attr"]("value", parseFloat(map["getCenter"]()["lng"]())["toFixed"](5))
        } else {
            alert(TXT_NOT_FOUND_THIS_COORDINATE + status)
        }
    })
}

function showLocation() {
    map["setCenter"](new google["maps"].LatLng(parseFloat($("#GoogleSearch #Lat")["attr"]("value")), parseFloat($("#GoogleSearch #Lng")["attr"]("value"))));
    showMaxZoom(map["getCenter"]());
    codeLatLng(map["getCenter"]());
    return false
}

function GoogleFindAdress() {
    var address = document["getElementById"]("address")["value"];
    geocoder["geocode"]({
        "address": address
    }, function(results, status) {
        if (status == google["maps"]["GeocoderStatus"]["OK"]) {
            $("#GoogleSearch input#address")["attr"]("value", results[0]["formatted_address"]);
            $("#GoogleSearch #Lat")["attr"]("value", parseFloat(results[0]["geometry"]["location"]["lat"]())["toFixed"](5));
            $("#GoogleSearch #Lng")["attr"]("value", parseFloat(results[0]["geometry"]["location"]["lng"]())["toFixed"](5));
            showLocation()
        } else {
            alert("\u0418\u0437\u0432\u0438\u043d\u0438\u0442\u0435, \u043d\u043e \u043f\u043e \u0434\u0430\u043d\u043d\u044b\u043c \u043a\u043e\u043e\u0440\u0434\u0438\u043d\u0430\u0442\u0430\u043c \u043d\u0438\u0447\u0435\u0433\u043e \u043d\u0435 \u043d\u0430\u0439\u0434\u0435\u043d\u043e: " + status)
        }
    });
    return false
}

function showAddress() {
    value = $("#GoogleSearch #address")["attr"]("value");
    YMYmap["removeOverlay"](geoResult);
    var geocoder = new YMaps.Geocoder(value, {
        results: 1,
        boundedBy: YMYmap["getBounds"]()
    });
    YMaps["Events"]["observe"](geocoder, geocoder["Events"].Load, function() {
        if (this["length"]()) {
            geoResult = this["get"](0);
            YMYmap["setBounds"](geoResult["getBounds"]());
            $("#GoogleSearch #Lat")["attr"]("value", geoResult["getGeoPoint"]()["getLat"]()["toFixed"](4));
            $("#GoogleSearch #Lng")["attr"]("value", geoResult["getGeoPoint"]()["getLng"]()["toFixed"](4));
            var s = new YMaps.Style();
            s["iconStyle"] = new YMaps.IconStyle();
            s["iconStyle"]["href"] = "/img/24marker.png";
            s["iconStyle"]["size"] = new YMaps.Point(21, 21);
            s["iconStyle"]["offset"] = new YMaps.Point(-11, -11);
            var sep = ", ",
                names = (geoResult["text"] || "")["split"](sep),
                index = geoResult["kind"] === "house" ? -2 : -1
        } else {
            alert(TXT_NOT_FOUND)
        }
    });
    YMaps["Events"]["observe"](geocoder, geocoder["Events"].Fault, function(geocoder, error) {
        alert(TXT_ERROR + error)
    })
}

function SearcAllMaps() {
    getDeclanation();
    if (NameMenu == "GMap") {
        GoogleFindAdress();
        return false
    };
    if (NameMenu == "JaMap") {
        showAddress();
        return false
    }
}