(function ($) {
    $.fn.YubinBango_Init = function () {

        var CACHE = [],
            YubinBango;
        !function (t) {
            var e = function () {
                function t(t, n) {
                    if (void 0 === t && (t = ""), this.URL = "https://yubinbango.github.io/yubinbango-data/data", this.REGION = [
                        null,
                        "鍖楁捣閬�",
                        "闈掓．鐪�",
                        "宀╂墜鐪�",
                        "瀹煄鐪�",
                        "绉嬬敯鐪�",
                        "灞卞舰鐪�",
                        "绂忓扯鐪�",
                        "鑼ㄥ煄鐪�",
                        "鏍冩湪鐪�",
                        "缇らΜ鐪�",
                        "鍩肩帀鐪�",
                        "鍗冭憠鐪�",
                        "鏉变含閮�",
                        "绁炲宸濈湆",
                        "鏂版綗鐪�",
                        "瀵屽北鐪�",
                        "鐭冲窛鐪�",
                        "绂忎簳鐪�",
                        "灞辨ⅷ鐪�",
                        "闀烽噹鐪�",
                        "宀愰槣鐪�",
                        "闈欏病鐪�",
                        "鎰涚煡鐪�",
                        "涓夐噸鐪�",
                        "婊嬭硛鐪�",
                        "浜兘搴�",
                        "澶ч槳搴�",
                        "鍏靛韩鐪�",
                        "濂堣壇鐪�",
                        "鍜屾瓕灞辩湆",
                        "槌ュ彇鐪�",
                        "宄舵牴鐪�",
                        "宀″北鐪�",
                        "搴冨扯鐪�",
                        "灞卞彛鐪�",
                        "寰冲扯鐪�",
                        "棣欏窛鐪�",
                        "鎰涘獩鐪�",
                        "楂樼煡鐪�",
                        "绂忓病鐪�",
                        "浣愯硛鐪�",
                        "闀峰磶鐪�",
                        "鐔婃湰鐪�",
                        "澶у垎鐪�",
                        "瀹磶鐪�",
                        "楣垮厫宄剁湆",
                        "娌栫竸鐪�"
                    ], t) {
                        var r = t.replace(/[锛�-锛橾/g, function (t) {
                            return String.fromCharCode(t.charCodeAt(0) - 65248)
                        }),
                            o = r.match(/\d/g),
                            a = o.join(""),
                            e = this.chk7(a);
                        e && this.getAddr(e, n)
                    }
                }
                return t.prototype.chk7 = function (t) {
                    return 7 === t.length
                        ? t
                        : void 0
                },
                t.prototype.selectAddr = function (e, t) {
                    if (t != null) {
                        return t[0] && t[1]
                            ? {
                                region_id: t[0],
                                region: this.REGION[t[0]],
                                locality: t[1],
                                street: t[2],
                                extended: t[3]
                            }
                            : void 0
                    } else {
                        return false;
                    }
                },
                t.prototype.jsonp = function (e, n) {
                    window.$yubin = function (t) {
                        return n(t)
                    };
                    var t = document.createElement("script");
                    t.setAttribute("type", "text/javascript"),
                    t.setAttribute("charset", "UTF-8"),
                    t.setAttribute("src", e),
                    document
                        .head
                        .appendChild(t)
                },
                t.prototype.getAddr = function (t, n) {
                    var r = this,
                        e = t.substr(0, 3);
                    this.cachecheck(t, e)
                        ? n(this.selectAddr(t, CACHE[e][t]))
                        : this.jsonp(this.URL + "/" + e + ".js", function (o) {
                            CACHE[e] = o,
                            n(r.selectAddr(t, o[t]))
                        })
                },
                t.prototype.cachecheck = function (e, t) {
                    return CACHE[t]
                        ? !0
                        : void 0
                },
                t
            }();
            t.Core = e
        }(YubinBango || (YubinBango = {}));
        var ISO31661JP = [
                "Japan", "JP", "JPN", "JAPAN"
        ],
            HADRLIST = [
                "p-region", "p-locality", "p-street-address", "p-extended-address"
            ],
            YubinBango;
        !function (t) {
            var e = function () {
                function e() {
                    //var t = this;
                    //document.addEventListener("DOMContentLoaded", function () {
                    //    t.hadrloop()
                    //}, !1)
                    var t = this,
                        n = document.querySelectorAll(".h-adr");
                    []
                        .map
                        .call(n, function (n) {
                            if (t.countryNameCheck(n)) {
                                var r = n.querySelectorAll(".p-postal-code");
                                r[r.length - 1].addEventListener("keyup", function (n) {
                                    e
                                        .prototype
                                        .applyDom(t.getFormNode(n.target.parentNode))
                                }, !1)
                            }
                        })

                }
                return e.prototype.hadrloop = function () {
                    var t = this,
                        n = document.querySelectorAll(".h-adr");
                    []
                        .map
                        .call(n, function (n) {
                            if (t.countryNameCheck(n)) {
                                var r = n.querySelectorAll(".p-postal-code");
                                r[r.length - 1].addEventListener("keyup", function (n) {
                                    e
                                        .prototype
                                        .applyDom(t.getFormNode(n.target.parentNode))
                                }, !1)
                            }
                        })
                },
                e.prototype.getFormNode = function (t) {
                    return "FORM" !== t.tagName
                        ? arguments.callee(t.parentNode)
                        : t
                },
                e.prototype.countryNameCheck = function (e) {
                    var t = e.querySelector(".p-country-name"),
                        n = [t.innerHTML, t.value];
                    return n.some(function (t) {
                        return ISO31661JP.indexOf(t) >= 0
                    })
                },
                e.prototype.applyDom = function (e) {
                    var n = this,
                        r = e.querySelectorAll(".p-postal-code");
                    new t.Core(this.reduceVal(r), function (t) {
                        return n.setAddr(e, t)
                    })
                },
                e.prototype.reduceVal = function (t) {
                    return []
                        .map
                        .call(t, function (t) {
                            return t.value
                        })
                        .reduce(function (t, e) {
                            return t + e
                        })
                },
                e.prototype.setAddr = function (t, e) {
                    var n = [this.postalFormClear, this.postalFormSet];
                    n.map(function (n) {
                        return HADRLIST.map(function (r) {
                            return n(r, t, e)
                        })
                    })
                },
                e.prototype.postalFormClear = function (t, e, n) {
                    if (n) {
                        var r = e.querySelectorAll("." + t);
                        []
                            .map
                            .call(r, function (t) {
                                return t.value = ""
                            })
                    }
                },
                e.prototype.postalFormSet = function (e, r, t) {
                    var n = {
                        "p-extended-address": t.extended,
                        "p-locality": t.locality,
                        "p-region": t.region,
                        "p-street-address": t.street
                    },
                        o = r.querySelectorAll("." + e);
                    []
                        .map
                        .call(o, function (t) {
                            return t.value += n[e]
                                ? n[e]
                                : ""
                        })
                },
                e
            }();
            t.MicroformatDom = e
        }(YubinBango || (YubinBango = {})),
        new YubinBango.MicroformatDom;

    };
})(jQuery);

