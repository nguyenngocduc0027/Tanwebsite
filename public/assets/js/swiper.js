/* Swiper 6.6.2*/
!(function (e, t) {
    "object" == typeof exports && "undefined" != typeof module
        ? (module.exports = t())
        : "function" == typeof define && define.amd
        ? define(t)
        : ((e =
              "undefined" != typeof globalThis
                  ? globalThis
                  : e || self).Swiper = t());
})(this, function () {
    "use strict";
    function e(e, t) {
        for (var i = 0; i < t.length; i++) {
            var a = t[i];
            (a.enumerable = a.enumerable || !1),
                (a.configurable = !0),
                "value" in a && (a.writable = !0),
                Object.defineProperty(e, a.key, a);
        }
    }
    function t() {
        return (t =
            Object.assign ||
            function (e) {
                for (var t = 1; t < arguments.length; t++) {
                    var i = arguments[t];
                    for (var a in i)
                        Object.prototype.hasOwnProperty.call(i, a) &&
                            (e[a] = i[a]);
                }
                return e;
            }).apply(this, arguments);
    }
    function i(e) {
        return (
            null !== e &&
            "object" == typeof e &&
            "constructor" in e &&
            e.constructor === Object
        );
    }
    function a(e, t) {
        void 0 === e && (e = {}),
            void 0 === t && (t = {}),
            Object.keys(t).forEach(function (r) {
                void 0 === e[r]
                    ? (e[r] = t[r])
                    : i(t[r]) &&
                      i(e[r]) &&
                      Object.keys(t[r]).length > 0 &&
                      a(e[r], t[r]);
            });
    }
    var r = {
        body: {},
        addEventListener: function () {},
        removeEventListener: function () {},
        activeElement: { blur: function () {}, nodeName: "" },
        querySelector: function () {
            return null;
        },
        querySelectorAll: function () {
            return [];
        },
        getElementById: function () {
            return null;
        },
        createEvent: function () {
            return { initEvent: function () {} };
        },
        createElement: function () {
            return {
                children: [],
                childNodes: [],
                style: {},
                setAttribute: function () {},
                getElementsByTagName: function () {
                    return [];
                },
            };
        },
        createElementNS: function () {
            return {};
        },
        importNode: function () {
            return null;
        },
        location: {
            hash: "",
            host: "",
            hostname: "",
            href: "",
            origin: "",
            pathname: "",
            protocol: "",
            search: "",
        },
    };
    function s() {
        var e = "undefined" != typeof document ? document : {};
        return a(e, r), e;
    }
    var n = {
        document: r,
        navigator: { userAgent: "" },
        location: {
            hash: "",
            host: "",
            hostname: "",
            href: "",
            origin: "",
            pathname: "",
            protocol: "",
            search: "",
        },
        history: {
            replaceState: function () {},
            pushState: function () {},
            go: function () {},
            back: function () {},
        },
        CustomEvent: function () {
            return this;
        },
        addEventListener: function () {},
        removeEventListener: function () {},
        getComputedStyle: function () {
            return {
                getPropertyValue: function () {
                    return "";
                },
            };
        },
        Image: function () {},
        Date: function () {},
        screen: {},
        setTimeout: function () {},
        clearTimeout: function () {},
        matchMedia: function () {
            return {};
        },
        requestAnimationFrame: function (e) {
            return "undefined" == typeof setTimeout
                ? (e(), null)
                : setTimeout(e, 0);
        },
        cancelAnimationFrame: function (e) {
            "undefined" != typeof setTimeout && clearTimeout(e);
        },
    };
    function o() {
        var e = "undefined" != typeof window ? window : {};
        return a(e, n), e;
    }
    function l(e) {
        return (l = Object.setPrototypeOf
            ? Object.getPrototypeOf
            : function (e) {
                  return e.__proto__ || Object.getPrototypeOf(e);
              })(e);
    }
    function d(e, t) {
        return (d =
            Object.setPrototypeOf ||
            function (e, t) {
                return (e.__proto__ = t), e;
            })(e, t);
    }
    function p() {
        if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
        if (Reflect.construct.sham) return !1;
        if ("function" == typeof Proxy) return !0;
        try {
            return (
                Date.prototype.toString.call(
                    Reflect.construct(Date, [], function () {})
                ),
                !0
            );
        } catch (e) {
            return !1;
        }
    }
    function u(e, t, i) {
        return (u = p()
            ? Reflect.construct
            : function (e, t, i) {
                  var a = [null];
                  a.push.apply(a, t);
                  var r = new (Function.bind.apply(e, a))();
                  return i && d(r, i.prototype), r;
              }).apply(null, arguments);
    }
    function c(e) {
        var t = "function" == typeof Map ? new Map() : void 0;
        return (c = function (e) {
            if (
                null === e ||
                ((i = e),
                -1 === Function.toString.call(i).indexOf("[native code]"))
            )
                return e;
            var i;
            if ("function" != typeof e)
                throw new TypeError(
                    "Super expression must either be null or a function"
                );
            if (void 0 !== t) {
                if (t.has(e)) return t.get(e);
                t.set(e, a);
            }
            function a() {
                return u(e, arguments, l(this).constructor);
            }
            return (
                (a.prototype = Object.create(e.prototype, {
                    constructor: {
                        value: a,
                        enumerable: !1,
                        writable: !0,
                        configurable: !0,
                    },
                })),
                d(a, e)
            );
        })(e);
    }
    var v = (function (e) {
        var t, i;
        function a(t) {
            var i, a, r;
            return (
                (i = e.call.apply(e, [this].concat(t)) || this),
                (a = (function (e) {
                    if (void 0 === e)
                        throw new ReferenceError(
                            "this hasn't been initialised - super() hasn't been called"
                        );
                    return e;
                })(i)),
                (r = a.__proto__),
                Object.defineProperty(a, "__proto__", {
                    get: function () {
                        return r;
                    },
                    set: function (e) {
                        r.__proto__ = e;
                    },
                }),
                i
            );
        }
        return (
            (i = e),
            ((t = a).prototype = Object.create(i.prototype)),
            (t.prototype.constructor = t),
            (t.__proto__ = i),
            a
        );
    })(c(Array));
    function f(e) {
        void 0 === e && (e = []);
        var t = [];
        return (
            e.forEach(function (e) {
                Array.isArray(e) ? t.push.apply(t, f(e)) : t.push(e);
            }),
            t
        );
    }
    function h(e, t) {
        return Array.prototype.filter.call(e, t);
    }
    function m(e, t) {
        var i = o(),
            a = s(),
            r = [];
        if (!t && e instanceof v) return e;
        if (!e) return new v(r);
        if ("string" == typeof e) {
            var n = e.trim();
            if (n.indexOf("<") >= 0 && n.indexOf(">") >= 0) {
                var l = "div";
                0 === n.indexOf("<li") && (l = "ul"),
                    0 === n.indexOf("<tr") && (l = "tbody"),
                    (0 !== n.indexOf("<td") && 0 !== n.indexOf("<th")) ||
                        (l = "tr"),
                    0 === n.indexOf("<tbody") && (l = "table"),
                    0 === n.indexOf("<option") && (l = "select");
                var d = a.createElement(l);
                d.innerHTML = n;
                for (var p = 0; p < d.childNodes.length; p += 1)
                    r.push(d.childNodes[p]);
            } else
                r = (function (e, t) {
                    if ("string" != typeof e) return [e];
                    for (
                        var i = [], a = t.querySelectorAll(e), r = 0;
                        r < a.length;
                        r += 1
                    )
                        i.push(a[r]);
                    return i;
                })(e.trim(), t || a);
        } else if (e.nodeType || e === i || e === a) r.push(e);
        else if (Array.isArray(e)) {
            if (e instanceof v) return e;
            r = e;
        }
        return new v(
            (function (e) {
                for (var t = [], i = 0; i < e.length; i += 1)
                    -1 === t.indexOf(e[i]) && t.push(e[i]);
                return t;
            })(r)
        );
    }
    m.fn = v.prototype;
    var g,
        b,
        y,
        C = {
            addClass: function () {
                for (
                    var e = arguments.length, t = new Array(e), i = 0;
                    i < e;
                    i++
                )
                    t[i] = arguments[i];
                var a = f(
                    t.map(function (e) {
                        return e.split(" ");
                    })
                );
                return (
                    this.forEach(function (e) {
                        var t;
                        (t = e.classList).add.apply(t, a);
                    }),
                    this
                );
            },
            removeClass: function () {
                for (
                    var e = arguments.length, t = new Array(e), i = 0;
                    i < e;
                    i++
                )
                    t[i] = arguments[i];
                var a = f(
                    t.map(function (e) {
                        return e.split(" ");
                    })
                );
                return (
                    this.forEach(function (e) {
                        var t;
                        (t = e.classList).remove.apply(t, a);
                    }),
                    this
                );
            },
            hasClass: function () {
                for (
                    var e = arguments.length, t = new Array(e), i = 0;
                    i < e;
                    i++
                )
                    t[i] = arguments[i];
                var a = f(
                    t.map(function (e) {
                        return e.split(" ");
                    })
                );
                return (
                    h(this, function (e) {
                        return (
                            a.filter(function (t) {
                                return e.classList.contains(t);
                            }).length > 0
                        );
                    }).length > 0
                );
            },
            toggleClass: function () {
                for (
                    var e = arguments.length, t = new Array(e), i = 0;
                    i < e;
                    i++
                )
                    t[i] = arguments[i];
                var a = f(
                    t.map(function (e) {
                        return e.split(" ");
                    })
                );
                this.forEach(function (e) {
                    a.forEach(function (t) {
                        e.classList.toggle(t);
                    });
                });
            },
            attr: function (e, t) {
                if (1 === arguments.length && "string" == typeof e)
                    return this[0] ? this[0].getAttribute(e) : void 0;
                for (var i = 0; i < this.length; i += 1)
                    if (2 === arguments.length) this[i].setAttribute(e, t);
                    else
                        for (var a in e)
                            (this[i][a] = e[a]), this[i].setAttribute(a, e[a]);
                return this;
            },
            removeAttr: function (e) {
                for (var t = 0; t < this.length; t += 1)
                    this[t].removeAttribute(e);
                return this;
            },
            transform: function (e) {
                for (var t = 0; t < this.length; t += 1)
                    this[t].style.transform = e;
                return this;
            },
            transition: function (e) {
                for (var t = 0; t < this.length; t += 1)
                    this[t].style.transitionDuration =
                        "string" != typeof e ? e + "ms" : e;
                return this;
            },
            on: function () {
                for (
                    var e = arguments.length, t = new Array(e), i = 0;
                    i < e;
                    i++
                )
                    t[i] = arguments[i];
                var a = t[0],
                    r = t[1],
                    s = t[2],
                    n = t[3];
                function o(e) {
                    var t = e.target;
                    if (t) {
                        var i = e.target.dom7EventData || [];
                        if ((i.indexOf(e) < 0 && i.unshift(e), m(t).is(r)))
                            s.apply(t, i);
                        else
                            for (
                                var a = m(t).parents(), n = 0;
                                n < a.length;
                                n += 1
                            )
                                m(a[n]).is(r) && s.apply(a[n], i);
                    }
                }
                function l(e) {
                    var t = (e && e.target && e.target.dom7EventData) || [];
                    t.indexOf(e) < 0 && t.unshift(e), s.apply(this, t);
                }
                "function" == typeof t[1] &&
                    ((a = t[0]), (s = t[1]), (n = t[2]), (r = void 0)),
                    n || (n = !1);
                for (var d, p = a.split(" "), u = 0; u < this.length; u += 1) {
                    var c = this[u];
                    if (r)
                        for (d = 0; d < p.length; d += 1) {
                            var v = p[d];
                            c.dom7LiveListeners || (c.dom7LiveListeners = {}),
                                c.dom7LiveListeners[v] ||
                                    (c.dom7LiveListeners[v] = []),
                                c.dom7LiveListeners[v].push({
                                    listener: s,
                                    proxyListener: o,
                                }),
                                c.addEventListener(v, o, n);
                        }
                    else
                        for (d = 0; d < p.length; d += 1) {
                            var f = p[d];
                            c.dom7Listeners || (c.dom7Listeners = {}),
                                c.dom7Listeners[f] || (c.dom7Listeners[f] = []),
                                c.dom7Listeners[f].push({
                                    listener: s,
                                    proxyListener: l,
                                }),
                                c.addEventListener(f, l, n);
                        }
                }
                return this;
            },
            off: function () {
                for (
                    var e = arguments.length, t = new Array(e), i = 0;
                    i < e;
                    i++
                )
                    t[i] = arguments[i];
                var a = t[0],
                    r = t[1],
                    s = t[2],
                    n = t[3];
                "function" == typeof t[1] &&
                    ((a = t[0]), (s = t[1]), (n = t[2]), (r = void 0)),
                    n || (n = !1);
                for (var o = a.split(" "), l = 0; l < o.length; l += 1)
                    for (var d = o[l], p = 0; p < this.length; p += 1) {
                        var u = this[p],
                            c = void 0;
                        if (
                            (!r && u.dom7Listeners
                                ? (c = u.dom7Listeners[d])
                                : r &&
                                  u.dom7LiveListeners &&
                                  (c = u.dom7LiveListeners[d]),
                            c && c.length)
                        )
                            for (var v = c.length - 1; v >= 0; v -= 1) {
                                var f = c[v];
                                (s && f.listener === s) ||
                                (s &&
                                    f.listener &&
                                    f.listener.dom7proxy &&
                                    f.listener.dom7proxy === s)
                                    ? (u.removeEventListener(
                                          d,
                                          f.proxyListener,
                                          n
                                      ),
                                      c.splice(v, 1))
                                    : s ||
                                      (u.removeEventListener(
                                          d,
                                          f.proxyListener,
                                          n
                                      ),
                                      c.splice(v, 1));
                            }
                    }
                return this;
            },
            trigger: function () {
                for (
                    var e = o(), t = arguments.length, i = new Array(t), a = 0;
                    a < t;
                    a++
                )
                    i[a] = arguments[a];
                for (
                    var r = i[0].split(" "), s = i[1], n = 0;
                    n < r.length;
                    n += 1
                )
                    for (var l = r[n], d = 0; d < this.length; d += 1) {
                        var p = this[d];
                        if (e.CustomEvent) {
                            var u = new e.CustomEvent(l, {
                                detail: s,
                                bubbles: !0,
                                cancelable: !0,
                            });
                            (p.dom7EventData = i.filter(function (e, t) {
                                return t > 0;
                            })),
                                p.dispatchEvent(u),
                                (p.dom7EventData = []),
                                delete p.dom7EventData;
                        }
                    }
                return this;
            },
            transitionEnd: function (e) {
                var t = this;
                return (
                    e &&
                        t.on("transitionend", function i(a) {
                            a.target === this &&
                                (e.call(this, a), t.off("transitionend", i));
                        }),
                    this
                );
            },
            outerWidth: function (e) {
                if (this.length > 0) {
                    if (e) {
                        var t = this.styles();
                        return (
                            this[0].offsetWidth +
                            parseFloat(t.getPropertyValue("margin-right")) +
                            parseFloat(t.getPropertyValue("margin-left"))
                        );
                    }
                    return this[0].offsetWidth;
                }
                return null;
            },
            outerHeight: function (e) {
                if (this.length > 0) {
                    if (e) {
                        var t = this.styles();
                        return (
                            this[0].offsetHeight +
                            parseFloat(t.getPropertyValue("margin-top")) +
                            parseFloat(t.getPropertyValue("margin-bottom"))
                        );
                    }
                    return this[0].offsetHeight;
                }
                return null;
            },
            styles: function () {
                var e = o();
                return this[0] ? e.getComputedStyle(this[0], null) : {};
            },
            offset: function () {
                if (this.length > 0) {
                    var e = o(),
                        t = s(),
                        i = this[0],
                        a = i.getBoundingClientRect(),
                        r = t.body,
                        n = i.clientTop || r.clientTop || 0,
                        l = i.clientLeft || r.clientLeft || 0,
                        d = i === e ? e.scrollY : i.scrollTop,
                        p = i === e ? e.scrollX : i.scrollLeft;
                    return { top: a.top + d - n, left: a.left + p - l };
                }
                return null;
            },
            css: function (e, t) {
                var i,
                    a = o();
                if (1 === arguments.length) {
                    if ("string" != typeof e) {
                        for (i = 0; i < this.length; i += 1)
                            for (var r in e) this[i].style[r] = e[r];
                        return this;
                    }
                    if (this[0])
                        return a
                            .getComputedStyle(this[0], null)
                            .getPropertyValue(e);
                }
                if (2 === arguments.length && "string" == typeof e) {
                    for (i = 0; i < this.length; i += 1) this[i].style[e] = t;
                    return this;
                }
                return this;
            },
            each: function (e) {
                return e
                    ? (this.forEach(function (t, i) {
                          e.apply(t, [t, i]);
                      }),
                      this)
                    : this;
            },
            html: function (e) {
                if (void 0 === e) return this[0] ? this[0].innerHTML : null;
                for (var t = 0; t < this.length; t += 1) this[t].innerHTML = e;
                return this;
            },
            text: function (e) {
                if (void 0 === e)
                    return this[0] ? this[0].textContent.trim() : null;
                for (var t = 0; t < this.length; t += 1)
                    this[t].textContent = e;
                return this;
            },
            is: function (e) {
                var t,
                    i,
                    a = o(),
                    r = s(),
                    n = this[0];
                if (!n || void 0 === e) return !1;
                if ("string" == typeof e) {
                    if (n.matches) return n.matches(e);
                    if (n.webkitMatchesSelector)
                        return n.webkitMatchesSelector(e);
                    if (n.msMatchesSelector) return n.msMatchesSelector(e);
                    for (t = m(e), i = 0; i < t.length; i += 1)
                        if (t[i] === n) return !0;
                    return !1;
                }
                if (e === r) return n === r;
                if (e === a) return n === a;
                if (e.nodeType || e instanceof v) {
                    for (t = e.nodeType ? [e] : e, i = 0; i < t.length; i += 1)
                        if (t[i] === n) return !0;
                    return !1;
                }
                return !1;
            },
            index: function () {
                var e,
                    t = this[0];
                if (t) {
                    for (e = 0; null !== (t = t.previousSibling); )
                        1 === t.nodeType && (e += 1);
                    return e;
                }
            },
            eq: function (e) {
                if (void 0 === e) return this;
                var t = this.length;
                if (e > t - 1) return m([]);
                if (e < 0) {
                    var i = t + e;
                    return m(i < 0 ? [] : [this[i]]);
                }
                return m([this[e]]);
            },
            append: function () {
                for (var e, t = s(), i = 0; i < arguments.length; i += 1) {
                    e = i < 0 || arguments.length <= i ? void 0 : arguments[i];
                    for (var a = 0; a < this.length; a += 1)
                        if ("string" == typeof e) {
                            var r = t.createElement("div");
                            for (r.innerHTML = e; r.firstChild; )
                                this[a].appendChild(r.firstChild);
                        } else if (e instanceof v)
                            for (var n = 0; n < e.length; n += 1)
                                this[a].appendChild(e[n]);
                        else this[a].appendChild(e);
                }
                return this;
            },
            prepend: function (e) {
                var t,
                    i,
                    a = s();
                for (t = 0; t < this.length; t += 1)
                    if ("string" == typeof e) {
                        var r = a.createElement("div");
                        for (
                            r.innerHTML = e, i = r.childNodes.length - 1;
                            i >= 0;
                            i -= 1
                        )
                            this[t].insertBefore(
                                r.childNodes[i],
                                this[t].childNodes[0]
                            );
                    } else if (e instanceof v)
                        for (i = 0; i < e.length; i += 1)
                            this[t].insertBefore(e[i], this[t].childNodes[0]);
                    else this[t].insertBefore(e, this[t].childNodes[0]);
                return this;
            },
            next: function (e) {
                return this.length > 0
                    ? e
                        ? this[0].nextElementSibling &&
                          m(this[0].nextElementSibling).is(e)
                            ? m([this[0].nextElementSibling])
                            : m([])
                        : this[0].nextElementSibling
                        ? m([this[0].nextElementSibling])
                        : m([])
                    : m([]);
            },
            nextAll: function (e) {
                var t = [],
                    i = this[0];
                if (!i) return m([]);
                for (; i.nextElementSibling; ) {
                    var a = i.nextElementSibling;
                    e ? m(a).is(e) && t.push(a) : t.push(a), (i = a);
                }
                return m(t);
            },
            prev: function (e) {
                if (this.length > 0) {
                    var t = this[0];
                    return e
                        ? t.previousElementSibling &&
                          m(t.previousElementSibling).is(e)
                            ? m([t.previousElementSibling])
                            : m([])
                        : t.previousElementSibling
                        ? m([t.previousElementSibling])
                        : m([]);
                }
                return m([]);
            },
            prevAll: function (e) {
                var t = [],
                    i = this[0];
                if (!i) return m([]);
                for (; i.previousElementSibling; ) {
                    var a = i.previousElementSibling;
                    e ? m(a).is(e) && t.push(a) : t.push(a), (i = a);
                }
                return m(t);
            },
            parent: function (e) {
                for (var t = [], i = 0; i < this.length; i += 1)
                    null !== this[i].parentNode &&
                        (e
                            ? m(this[i].parentNode).is(e) &&
                              t.push(this[i].parentNode)
                            : t.push(this[i].parentNode));
                return m(t);
            },
            parents: function (e) {
                for (var t = [], i = 0; i < this.length; i += 1)
                    for (var a = this[i].parentNode; a; )
                        e ? m(a).is(e) && t.push(a) : t.push(a),
                            (a = a.parentNode);
                return m(t);
            },
            closest: function (e) {
                var t = this;
                return void 0 === e
                    ? m([])
                    : (t.is(e) || (t = t.parents(e).eq(0)), t);
            },
            find: function (e) {
                for (var t = [], i = 0; i < this.length; i += 1)
                    for (
                        var a = this[i].querySelectorAll(e), r = 0;
                        r < a.length;
                        r += 1
                    )
                        t.push(a[r]);
                return m(t);
            },
            children: function (e) {
                for (var t = [], i = 0; i < this.length; i += 1)
                    for (var a = this[i].children, r = 0; r < a.length; r += 1)
                        (e && !m(a[r]).is(e)) || t.push(a[r]);
                return m(t);
            },
            filter: function (e) {
                return m(h(this, e));
            },
            remove: function () {
                for (var e = 0; e < this.length; e += 1)
                    this[e].parentNode &&
                        this[e].parentNode.removeChild(this[e]);
                return this;
            },
        };
    function w(e, t) {
        return void 0 === t && (t = 0), setTimeout(e, t);
    }
    function T() {
        return Date.now();
    }
    function S(e, t) {
        void 0 === t && (t = "x");
        var i,
            a,
            r,
            s = o(),
            n = (function (e) {
                var t,
                    i = o();
                return (
                    i.getComputedStyle && (t = i.getComputedStyle(e, null)),
                    !t && e.currentStyle && (t = e.currentStyle),
                    t || (t = e.style),
                    t
                );
            })(e);
        return (
            s.WebKitCSSMatrix
                ? ((a = n.transform || n.webkitTransform).split(",").length >
                      6 &&
                      (a = a
                          .split(", ")
                          .map(function (e) {
                              return e.replace(",", ".");
                          })
                          .join(", ")),
                  (r = new s.WebKitCSSMatrix("none" === a ? "" : a)))
                : (i = (r =
                      n.MozTransform ||
                      n.OTransform ||
                      n.MsTransform ||
                      n.msTransform ||
                      n.transform ||
                      n
                          .getPropertyValue("transform")
                          .replace("translate(", "matrix(1, 0, 0, 1,"))
                      .toString()
                      .split(",")),
            "x" === t &&
                (a = s.WebKitCSSMatrix
                    ? r.m41
                    : 16 === i.length
                    ? parseFloat(i[12])
                    : parseFloat(i[4])),
            "y" === t &&
                (a = s.WebKitCSSMatrix
                    ? r.m42
                    : 16 === i.length
                    ? parseFloat(i[13])
                    : parseFloat(i[5])),
            a || 0
        );
    }
    function x(e) {
        return (
            "object" == typeof e &&
            null !== e &&
            e.constructor &&
            "Object" === Object.prototype.toString.call(e).slice(8, -1)
        );
    }
    function E() {
        for (
            var e = Object(arguments.length <= 0 ? void 0 : arguments[0]),
                t = ["__proto__", "constructor", "prototype"],
                i = 1;
            i < arguments.length;
            i += 1
        ) {
            var a = i < 0 || arguments.length <= i ? void 0 : arguments[i];
            if (null != a)
                for (
                    var r = Object.keys(Object(a)).filter(function (e) {
                            return t.indexOf(e) < 0;
                        }),
                        s = 0,
                        n = r.length;
                    s < n;
                    s += 1
                ) {
                    var o = r[s],
                        l = Object.getOwnPropertyDescriptor(a, o);
                    void 0 !== l &&
                        l.enumerable &&
                        (x(e[o]) && x(a[o])
                            ? a[o].__swiper__
                                ? (e[o] = a[o])
                                : E(e[o], a[o])
                            : !x(e[o]) && x(a[o])
                            ? ((e[o] = {}),
                              a[o].__swiper__ ? (e[o] = a[o]) : E(e[o], a[o]))
                            : (e[o] = a[o]));
                }
        }
        return e;
    }
    function M(e, t) {
        Object.keys(t).forEach(function (i) {
            x(t[i]) &&
                Object.keys(t[i]).forEach(function (a) {
                    "function" == typeof t[i][a] && (t[i][a] = t[i][a].bind(e));
                }),
                (e[i] = t[i]);
        });
    }
    function P(e) {
        return (
            void 0 === e && (e = ""),
            "." +
                e
                    .trim()
                    .replace(/([\.:\/])/g, "\\$1")
                    .replace(/ /g, ".")
        );
    }
    function k() {
        return (
            g ||
                (g = (function () {
                    var e = o(),
                        t = s();
                    return {
                        touch: !!(
                            "ontouchstart" in e ||
                            (e.DocumentTouch && t instanceof e.DocumentTouch)
                        ),
                        pointerEvents:
                            !!e.PointerEvent &&
                            "maxTouchPoints" in e.navigator &&
                            e.navigator.maxTouchPoints >= 0,
                        observer:
                            "MutationObserver" in e ||
                            "WebkitMutationObserver" in e,
                        passiveListener: (function () {
                            var t = !1;
                            try {
                                var i = Object.defineProperty({}, "passive", {
                                    get: function () {
                                        t = !0;
                                    },
                                });
                                e.addEventListener(
                                    "testPassiveListener",
                                    null,
                                    i
                                );
                            } catch (e) {}
                            return t;
                        })(),
                        gestures: "ongesturestart" in e,
                    };
                })()),
            g
        );
    }
    function L(e) {
        return (
            void 0 === e && (e = {}),
            b ||
                (b = (function (e) {
                    var t = (void 0 === e ? {} : e).userAgent,
                        i = k(),
                        a = o(),
                        r = a.navigator.platform,
                        s = t || a.navigator.userAgent,
                        n = { ios: !1, android: !1 },
                        l = a.screen.width,
                        d = a.screen.height,
                        p = s.match(/(Android);?[\s\/]+([\d.]+)?/),
                        u = s.match(/(iPad).*OS\s([\d_]+)/),
                        c = s.match(/(iPod)(.*OS\s([\d_]+))?/),
                        v = !u && s.match(/(iPhone\sOS|iOS)\s([\d_]+)/),
                        f = "Win32" === r,
                        h = "MacIntel" === r;
                    return (
                        !u &&
                            h &&
                            i.touch &&
                            [
                                "1024x1366",
                                "1366x1024",
                                "834x1194",
                                "1194x834",
                                "834x1112",
                                "1112x834",
                                "768x1024",
                                "1024x768",
                                "820x1180",
                                "1180x820",
                                "810x1080",
                                "1080x810",
                            ].indexOf(l + "x" + d) >= 0 &&
                            ((u = s.match(/(Version)\/([\d.]+)/)) ||
                                (u = [0, 1, "13_0_0"]),
                            (h = !1)),
                        p && !f && ((n.os = "android"), (n.android = !0)),
                        (u || v || c) && ((n.os = "ios"), (n.ios = !0)),
                        n
                    );
                })(e)),
            b
        );
    }
    function z() {
        return (
            y ||
                (y = (function () {
                    var e,
                        t = o();
                    return {
                        isEdge: !!t.navigator.userAgent.match(/Edge/g),
                        isSafari:
                            ((e = t.navigator.userAgent.toLowerCase()),
                            e.indexOf("safari") >= 0 &&
                                e.indexOf("chrome") < 0 &&
                                e.indexOf("android") < 0),
                        isWebView:
                            /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(
                                t.navigator.userAgent
                            ),
                    };
                })()),
            y
        );
    }
    Object.keys(C).forEach(function (e) {
        Object.defineProperty(m.fn, e, { value: C[e], writable: !0 });
    });
    var O = {
            name: "resize",
            create: function () {
                var e = this;
                E(e, {
                    resize: {
                        observer: null,
                        createObserver: function () {
                            e &&
                                !e.destroyed &&
                                e.initialized &&
                                ((e.resize.observer = new ResizeObserver(
                                    function (t) {
                                        var i = e.width,
                                            a = e.height,
                                            r = i,
                                            s = a;
                                        t.forEach(function (t) {
                                            var i = t.contentBoxSize,
                                                a = t.contentRect,
                                                n = t.target;
                                            (n && n !== e.el) ||
                                                ((r = a
                                                    ? a.width
                                                    : (i[0] || i).inlineSize),
                                                (s = a
                                                    ? a.height
                                                    : (i[0] || i).blockSize));
                                        }),
                                            (r === i && s === a) ||
                                                e.resize.resizeHandler();
                                    }
                                )),
                                e.resize.observer.observe(e.el));
                        },
                        removeObserver: function () {
                            e.resize.observer &&
                                e.resize.observer.unobserve &&
                                e.el &&
                                (e.resize.observer.unobserve(e.el),
                                (e.resize.observer = null));
                        },
                        resizeHandler: function () {
                            e &&
                                !e.destroyed &&
                                e.initialized &&
                                (e.emit("beforeResize"), e.emit("resize"));
                        },
                        orientationChangeHandler: function () {
                            e &&
                                !e.destroyed &&
                                e.initialized &&
                                e.emit("orientationchange");
                        },
                    },
                });
            },
            on: {
                init: function (e) {
                    var t = o();
                    e.params.resizeObserver && void 0 !== o().ResizeObserver
                        ? e.resize.createObserver()
                        : (t.addEventListener("resize", e.resize.resizeHandler),
                          t.addEventListener(
                              "orientationchange",
                              e.resize.orientationChangeHandler
                          ));
                },
                destroy: function (e) {
                    var t = o();
                    e.resize.removeObserver(),
                        t.removeEventListener("resize", e.resize.resizeHandler),
                        t.removeEventListener(
                            "orientationchange",
                            e.resize.orientationChangeHandler
                        );
                },
            },
        },
        I = {
            attach: function (e, t) {
                void 0 === t && (t = {});
                var i = o(),
                    a = this,
                    r = new (i.MutationObserver || i.WebkitMutationObserver)(
                        function (e) {
                            if (1 !== e.length) {
                                var t = function () {
                                    a.emit("observerUpdate", e[0]);
                                };
                                i.requestAnimationFrame
                                    ? i.requestAnimationFrame(t)
                                    : i.setTimeout(t, 0);
                            } else a.emit("observerUpdate", e[0]);
                        }
                    );
                r.observe(e, {
                    attributes: void 0 === t.attributes || t.attributes,
                    childList: void 0 === t.childList || t.childList,
                    characterData:
                        void 0 === t.characterData || t.characterData,
                }),
                    a.observer.observers.push(r);
            },
            init: function () {
                var e = this;
                if (e.support.observer && e.params.observer) {
                    if (e.params.observeParents)
                        for (
                            var t = e.$el.parents(), i = 0;
                            i < t.length;
                            i += 1
                        )
                            e.observer.attach(t[i]);
                    e.observer.attach(e.$el[0], {
                        childList: e.params.observeSlideChildren,
                    }),
                        e.observer.attach(e.$wrapperEl[0], { attributes: !1 });
                }
            },
            destroy: function () {
                this.observer.observers.forEach(function (e) {
                    e.disconnect();
                }),
                    (this.observer.observers = []);
            },
        },
        A = {
            name: "observer",
            params: {
                observer: !1,
                observeParents: !1,
                observeSlideChildren: !1,
            },
            create: function () {
                M(this, { observer: t({}, I, { observers: [] }) });
            },
            on: {
                init: function (e) {
                    e.observer.init();
                },
                destroy: function (e) {
                    e.observer.destroy();
                },
            },
        };
    function B(e) {
        var t = this,
            i = s(),
            a = o(),
            r = t.touchEventsData,
            n = t.params,
            l = t.touches;
        if (t.enabled && (!t.animating || !n.preventInteractionOnTransition)) {
            var d = e;
            d.originalEvent && (d = d.originalEvent);
            var p = m(d.target);
            if (
                "wrapper" !== n.touchEventsTarget ||
                p.closest(t.wrapperEl).length
            )
                if (
                    ((r.isTouchEvent = "touchstart" === d.type),
                    r.isTouchEvent || !("which" in d) || 3 !== d.which)
                )
                    if (!(!r.isTouchEvent && "button" in d && d.button > 0))
                        if (!r.isTouched || !r.isMoved)
                            if (
                                (!!n.noSwipingClass &&
                                    "" !== n.noSwipingClass &&
                                    d.target &&
                                    d.target.shadowRoot &&
                                    e.path &&
                                    e.path[0] &&
                                    (p = m(e.path[0])),
                                n.noSwiping &&
                                    p.closest(
                                        n.noSwipingSelector
                                            ? n.noSwipingSelector
                                            : "." + n.noSwipingClass
                                    )[0])
                            )
                                t.allowClick = !0;
                            else if (
                                !n.swipeHandler ||
                                p.closest(n.swipeHandler)[0]
                            ) {
                                (l.currentX =
                                    "touchstart" === d.type
                                        ? d.targetTouches[0].pageX
                                        : d.pageX),
                                    (l.currentY =
                                        "touchstart" === d.type
                                            ? d.targetTouches[0].pageY
                                            : d.pageY);
                                var u = l.currentX,
                                    c = l.currentY,
                                    v =
                                        n.edgeSwipeDetection ||
                                        n.iOSEdgeSwipeDetection,
                                    f =
                                        n.edgeSwipeThreshold ||
                                        n.iOSEdgeSwipeThreshold;
                                if (v && (u <= f || u >= a.innerWidth - f)) {
                                    if ("prevent" !== v) return;
                                    e.preventDefault();
                                }
                                if (
                                    (E(r, {
                                        isTouched: !0,
                                        isMoved: !1,
                                        allowTouchCallbacks: !0,
                                        isScrolling: void 0,
                                        startMoving: void 0,
                                    }),
                                    (l.startX = u),
                                    (l.startY = c),
                                    (r.touchStartTime = T()),
                                    (t.allowClick = !0),
                                    t.updateSize(),
                                    (t.swipeDirection = void 0),
                                    n.threshold > 0 &&
                                        (r.allowThresholdMove = !1),
                                    "touchstart" !== d.type)
                                ) {
                                    var h = !0;
                                    p.is(r.formElements) && (h = !1),
                                        i.activeElement &&
                                            m(i.activeElement).is(
                                                r.formElements
                                            ) &&
                                            i.activeElement !== p[0] &&
                                            i.activeElement.blur();
                                    var g =
                                        h &&
                                        t.allowTouchMove &&
                                        n.touchStartPreventDefault;
                                    (!n.touchStartForcePreventDefault && !g) ||
                                        p[0].isContentEditable ||
                                        d.preventDefault();
                                }
                                t.emit("touchStart", d);
                            }
        }
    }
    function D(e) {
        var t = s(),
            i = this,
            a = i.touchEventsData,
            r = i.params,
            n = i.touches,
            o = i.rtlTranslate;
        if (i.enabled) {
            var l = e;
            if ((l.originalEvent && (l = l.originalEvent), a.isTouched)) {
                if (!a.isTouchEvent || "touchmove" === l.type) {
                    var d =
                            "touchmove" === l.type &&
                            l.targetTouches &&
                            (l.targetTouches[0] || l.changedTouches[0]),
                        p = "touchmove" === l.type ? d.pageX : l.pageX,
                        u = "touchmove" === l.type ? d.pageY : l.pageY;
                    if (l.preventedByNestedSwiper)
                        return (n.startX = p), void (n.startY = u);
                    if (!i.allowTouchMove)
                        return (
                            (i.allowClick = !1),
                            void (
                                a.isTouched &&
                                (E(n, {
                                    startX: p,
                                    startY: u,
                                    currentX: p,
                                    currentY: u,
                                }),
                                (a.touchStartTime = T()))
                            )
                        );
                    if (a.isTouchEvent && r.touchReleaseOnEdges && !r.loop)
                        if (i.isVertical()) {
                            if (
                                (u < n.startY &&
                                    i.translate <= i.maxTranslate()) ||
                                (u > n.startY &&
                                    i.translate >= i.minTranslate())
                            )
                                return (
                                    (a.isTouched = !1), void (a.isMoved = !1)
                                );
                        } else if (
                            (p < n.startX && i.translate <= i.maxTranslate()) ||
                            (p > n.startX && i.translate >= i.minTranslate())
                        )
                            return;
                    if (
                        a.isTouchEvent &&
                        t.activeElement &&
                        l.target === t.activeElement &&
                        m(l.target).is(a.formElements)
                    )
                        return (a.isMoved = !0), void (i.allowClick = !1);
                    if (
                        (a.allowTouchCallbacks && i.emit("touchMove", l),
                        !(l.targetTouches && l.targetTouches.length > 1))
                    ) {
                        (n.currentX = p), (n.currentY = u);
                        var c = n.currentX - n.startX,
                            v = n.currentY - n.startY;
                        if (
                            !(
                                i.params.threshold &&
                                Math.sqrt(Math.pow(c, 2) + Math.pow(v, 2)) <
                                    i.params.threshold
                            )
                        ) {
                            var f;
                            if (void 0 === a.isScrolling)
                                (i.isHorizontal() && n.currentY === n.startY) ||
                                (i.isVertical() && n.currentX === n.startX)
                                    ? (a.isScrolling = !1)
                                    : c * c + v * v >= 25 &&
                                      ((f =
                                          (180 *
                                              Math.atan2(
                                                  Math.abs(v),
                                                  Math.abs(c)
                                              )) /
                                          Math.PI),
                                      (a.isScrolling = i.isHorizontal()
                                          ? f > r.touchAngle
                                          : 90 - f > r.touchAngle));
                            if (
                                (a.isScrolling &&
                                    i.emit("touchMoveOpposite", l),
                                void 0 === a.startMoving &&
                                    ((n.currentX === n.startX &&
                                        n.currentY === n.startY) ||
                                        (a.startMoving = !0)),
                                a.isScrolling)
                            )
                                a.isTouched = !1;
                            else if (a.startMoving) {
                                (i.allowClick = !1),
                                    !r.cssMode &&
                                        l.cancelable &&
                                        l.preventDefault(),
                                    r.touchMoveStopPropagation &&
                                        !r.nested &&
                                        l.stopPropagation(),
                                    a.isMoved ||
                                        (r.loop && i.loopFix(),
                                        (a.startTranslate = i.getTranslate()),
                                        i.setTransition(0),
                                        i.animating &&
                                            i.$wrapperEl.trigger(
                                                "webkitTransitionEnd transitionend"
                                            ),
                                        (a.allowMomentumBounce = !1),
                                        !r.grabCursor ||
                                            (!0 !== i.allowSlideNext &&
                                                !0 !== i.allowSlidePrev) ||
                                            i.setGrabCursor(!0),
                                        i.emit("sliderFirstMove", l)),
                                    i.emit("sliderMove", l),
                                    (a.isMoved = !0);
                                var h = i.isHorizontal() ? c : v;
                                (n.diff = h),
                                    (h *= r.touchRatio),
                                    o && (h = -h),
                                    (i.swipeDirection =
                                        h > 0 ? "prev" : "next"),
                                    (a.currentTranslate = h + a.startTranslate);
                                var g = !0,
                                    b = r.resistanceRatio;
                                if (
                                    (r.touchReleaseOnEdges && (b = 0),
                                    h > 0 &&
                                    a.currentTranslate > i.minTranslate()
                                        ? ((g = !1),
                                          r.resistance &&
                                              (a.currentTranslate =
                                                  i.minTranslate() -
                                                  1 +
                                                  Math.pow(
                                                      -i.minTranslate() +
                                                          a.startTranslate +
                                                          h,
                                                      b
                                                  )))
                                        : h < 0 &&
                                          a.currentTranslate <
                                              i.maxTranslate() &&
                                          ((g = !1),
                                          r.resistance &&
                                              (a.currentTranslate =
                                                  i.maxTranslate() +
                                                  1 -
                                                  Math.pow(
                                                      i.maxTranslate() -
                                                          a.startTranslate -
                                                          h,
                                                      b
                                                  ))),
                                    g && (l.preventedByNestedSwiper = !0),
                                    !i.allowSlideNext &&
                                        "next" === i.swipeDirection &&
                                        a.currentTranslate < a.startTranslate &&
                                        (a.currentTranslate = a.startTranslate),
                                    !i.allowSlidePrev &&
                                        "prev" === i.swipeDirection &&
                                        a.currentTranslate > a.startTranslate &&
                                        (a.currentTranslate = a.startTranslate),
                                    i.allowSlidePrev ||
                                        i.allowSlideNext ||
                                        (a.currentTranslate = a.startTranslate),
                                    r.threshold > 0)
                                ) {
                                    if (
                                        !(
                                            Math.abs(h) > r.threshold ||
                                            a.allowThresholdMove
                                        )
                                    )
                                        return void (a.currentTranslate =
                                            a.startTranslate);
                                    if (!a.allowThresholdMove)
                                        return (
                                            (a.allowThresholdMove = !0),
                                            (n.startX = n.currentX),
                                            (n.startY = n.currentY),
                                            (a.currentTranslate =
                                                a.startTranslate),
                                            void (n.diff = i.isHorizontal()
                                                ? n.currentX - n.startX
                                                : n.currentY - n.startY)
                                        );
                                }
                                r.followFinger &&
                                    !r.cssMode &&
                                    ((r.freeMode ||
                                        r.watchSlidesProgress ||
                                        r.watchSlidesVisibility) &&
                                        (i.updateActiveIndex(),
                                        i.updateSlidesClasses()),
                                    r.freeMode &&
                                        (0 === a.velocities.length &&
                                            a.velocities.push({
                                                position:
                                                    n[
                                                        i.isHorizontal()
                                                            ? "startX"
                                                            : "startY"
                                                    ],
                                                time: a.touchStartTime,
                                            }),
                                        a.velocities.push({
                                            position:
                                                n[
                                                    i.isHorizontal()
                                                        ? "currentX"
                                                        : "currentY"
                                                ],
                                            time: T(),
                                        })),
                                    i.updateProgress(a.currentTranslate),
                                    i.setTranslate(a.currentTranslate));
                            }
                        }
                    }
                }
            } else
                a.startMoving &&
                    a.isScrolling &&
                    i.emit("touchMoveOpposite", l);
        }
    }
    function $(e) {
        var t = this,
            i = t.touchEventsData,
            a = t.params,
            r = t.touches,
            s = t.rtlTranslate,
            n = t.$wrapperEl,
            o = t.slidesGrid,
            l = t.snapGrid;
        if (t.enabled) {
            var d = e;
            if (
                (d.originalEvent && (d = d.originalEvent),
                i.allowTouchCallbacks && t.emit("touchEnd", d),
                (i.allowTouchCallbacks = !1),
                !i.isTouched)
            )
                return (
                    i.isMoved && a.grabCursor && t.setGrabCursor(!1),
                    (i.isMoved = !1),
                    void (i.startMoving = !1)
                );
            a.grabCursor &&
                i.isMoved &&
                i.isTouched &&
                (!0 === t.allowSlideNext || !0 === t.allowSlidePrev) &&
                t.setGrabCursor(!1);
            var p,
                u = T(),
                c = u - i.touchStartTime;
            if (
                (t.allowClick &&
                    (t.updateClickedSlide(d),
                    t.emit("tap click", d),
                    c < 300 &&
                        u - i.lastClickTime < 300 &&
                        t.emit("doubleTap doubleClick", d)),
                (i.lastClickTime = T()),
                w(function () {
                    t.destroyed || (t.allowClick = !0);
                }),
                !i.isTouched ||
                    !i.isMoved ||
                    !t.swipeDirection ||
                    0 === r.diff ||
                    i.currentTranslate === i.startTranslate)
            )
                return (
                    (i.isTouched = !1),
                    (i.isMoved = !1),
                    void (i.startMoving = !1)
                );
            if (
                ((i.isTouched = !1),
                (i.isMoved = !1),
                (i.startMoving = !1),
                (p = a.followFinger
                    ? s
                        ? t.translate
                        : -t.translate
                    : -i.currentTranslate),
                !a.cssMode)
            )
                if (a.freeMode) {
                    if (p < -t.minTranslate())
                        return void t.slideTo(t.activeIndex);
                    if (p > -t.maxTranslate())
                        return void (t.slides.length < l.length
                            ? t.slideTo(l.length - 1)
                            : t.slideTo(t.slides.length - 1));
                    if (a.freeModeMomentum) {
                        if (i.velocities.length > 1) {
                            var v = i.velocities.pop(),
                                f = i.velocities.pop(),
                                h = v.position - f.position,
                                m = v.time - f.time;
                            (t.velocity = h / m),
                                (t.velocity /= 2),
                                Math.abs(t.velocity) <
                                    a.freeModeMinimumVelocity &&
                                    (t.velocity = 0),
                                (m > 150 || T() - v.time > 300) &&
                                    (t.velocity = 0);
                        } else t.velocity = 0;
                        (t.velocity *= a.freeModeMomentumVelocityRatio),
                            (i.velocities.length = 0);
                        var g = 1e3 * a.freeModeMomentumRatio,
                            b = t.velocity * g,
                            y = t.translate + b;
                        s && (y = -y);
                        var C,
                            S,
                            x = !1,
                            E =
                                20 *
                                Math.abs(t.velocity) *
                                a.freeModeMomentumBounceRatio;
                        if (y < t.maxTranslate())
                            a.freeModeMomentumBounce
                                ? (y + t.maxTranslate() < -E &&
                                      (y = t.maxTranslate() - E),
                                  (C = t.maxTranslate()),
                                  (x = !0),
                                  (i.allowMomentumBounce = !0))
                                : (y = t.maxTranslate()),
                                a.loop && a.centeredSlides && (S = !0);
                        else if (y > t.minTranslate())
                            a.freeModeMomentumBounce
                                ? (y - t.minTranslate() > E &&
                                      (y = t.minTranslate() + E),
                                  (C = t.minTranslate()),
                                  (x = !0),
                                  (i.allowMomentumBounce = !0))
                                : (y = t.minTranslate()),
                                a.loop && a.centeredSlides && (S = !0);
                        else if (a.freeModeSticky) {
                            for (var M, P = 0; P < l.length; P += 1)
                                if (l[P] > -y) {
                                    M = P;
                                    break;
                                }
                            y = -(y =
                                Math.abs(l[M] - y) < Math.abs(l[M - 1] - y) ||
                                "next" === t.swipeDirection
                                    ? l[M]
                                    : l[M - 1]);
                        }
                        if (
                            (S &&
                                t.once("transitionEnd", function () {
                                    t.loopFix();
                                }),
                            0 !== t.velocity)
                        ) {
                            if (
                                ((g = s
                                    ? Math.abs((-y - t.translate) / t.velocity)
                                    : Math.abs((y - t.translate) / t.velocity)),
                                a.freeModeSticky)
                            ) {
                                var k = Math.abs((s ? -y : y) - t.translate),
                                    L = t.slidesSizesGrid[t.activeIndex];
                                g =
                                    k < L
                                        ? a.speed
                                        : k < 2 * L
                                        ? 1.5 * a.speed
                                        : 2.5 * a.speed;
                            }
                        } else if (a.freeModeSticky)
                            return void t.slideToClosest();
                        a.freeModeMomentumBounce && x
                            ? (t.updateProgress(C),
                              t.setTransition(g),
                              t.setTranslate(y),
                              t.transitionStart(!0, t.swipeDirection),
                              (t.animating = !0),
                              n.transitionEnd(function () {
                                  t &&
                                      !t.destroyed &&
                                      i.allowMomentumBounce &&
                                      (t.emit("momentumBounce"),
                                      t.setTransition(a.speed),
                                      setTimeout(function () {
                                          t.setTranslate(C),
                                              n.transitionEnd(function () {
                                                  t &&
                                                      !t.destroyed &&
                                                      t.transitionEnd();
                                              });
                                      }, 0));
                              }))
                            : t.velocity
                            ? (t.updateProgress(y),
                              t.setTransition(g),
                              t.setTranslate(y),
                              t.transitionStart(!0, t.swipeDirection),
                              t.animating ||
                                  ((t.animating = !0),
                                  n.transitionEnd(function () {
                                      t && !t.destroyed && t.transitionEnd();
                                  })))
                            : (t.emit("_freeModeNoMomentumRelease"),
                              t.updateProgress(y)),
                            t.updateActiveIndex(),
                            t.updateSlidesClasses();
                    } else {
                        if (a.freeModeSticky) return void t.slideToClosest();
                        a.freeMode && t.emit("_freeModeNoMomentumRelease");
                    }
                    (!a.freeModeMomentum || c >= a.longSwipesMs) &&
                        (t.updateProgress(),
                        t.updateActiveIndex(),
                        t.updateSlidesClasses());
                } else {
                    for (
                        var z = 0, O = t.slidesSizesGrid[0], I = 0;
                        I < o.length;
                        I += I < a.slidesPerGroupSkip ? 1 : a.slidesPerGroup
                    ) {
                        var A =
                            I < a.slidesPerGroupSkip - 1 ? 1 : a.slidesPerGroup;
                        void 0 !== o[I + A]
                            ? p >= o[I] &&
                              p < o[I + A] &&
                              ((z = I), (O = o[I + A] - o[I]))
                            : p >= o[I] &&
                              ((z = I),
                              (O = o[o.length - 1] - o[o.length - 2]));
                    }
                    var B = (p - o[z]) / O,
                        D = z < a.slidesPerGroupSkip - 1 ? 1 : a.slidesPerGroup;
                    if (c > a.longSwipesMs) {
                        if (!a.longSwipes) return void t.slideTo(t.activeIndex);
                        "next" === t.swipeDirection &&
                            (B >= a.longSwipesRatio
                                ? t.slideTo(z + D)
                                : t.slideTo(z)),
                            "prev" === t.swipeDirection &&
                                (B > 1 - a.longSwipesRatio
                                    ? t.slideTo(z + D)
                                    : t.slideTo(z));
                    } else {
                        if (!a.shortSwipes)
                            return void t.slideTo(t.activeIndex);
                        t.navigation &&
                        (d.target === t.navigation.nextEl ||
                            d.target === t.navigation.prevEl)
                            ? d.target === t.navigation.nextEl
                                ? t.slideTo(z + D)
                                : t.slideTo(z)
                            : ("next" === t.swipeDirection && t.slideTo(z + D),
                              "prev" === t.swipeDirection && t.slideTo(z));
                    }
                }
        }
    }
    function G() {
        var e = this,
            t = e.params,
            i = e.el;
        if (!i || 0 !== i.offsetWidth) {
            t.breakpoints && e.setBreakpoint();
            var a = e.allowSlideNext,
                r = e.allowSlidePrev,
                s = e.snapGrid;
            (e.allowSlideNext = !0),
                (e.allowSlidePrev = !0),
                e.updateSize(),
                e.updateSlides(),
                e.updateSlidesClasses(),
                ("auto" === t.slidesPerView || t.slidesPerView > 1) &&
                e.isEnd &&
                !e.isBeginning &&
                !e.params.centeredSlides
                    ? e.slideTo(e.slides.length - 1, 0, !1, !0)
                    : e.slideTo(e.activeIndex, 0, !1, !0),
                e.autoplay &&
                    e.autoplay.running &&
                    e.autoplay.paused &&
                    e.autoplay.run(),
                (e.allowSlidePrev = r),
                (e.allowSlideNext = a),
                e.params.watchOverflow && s !== e.snapGrid && e.checkOverflow();
        }
    }
    function N(e) {
        var t = this;
        t.enabled &&
            (t.allowClick ||
                (t.params.preventClicks && e.preventDefault(),
                t.params.preventClicksPropagation &&
                    t.animating &&
                    (e.stopPropagation(), e.stopImmediatePropagation())));
    }
    function H() {
        var e = this,
            t = e.wrapperEl,
            i = e.rtlTranslate;
        if (e.enabled) {
            (e.previousTranslate = e.translate),
                e.isHorizontal()
                    ? (e.translate = i
                          ? t.scrollWidth - t.offsetWidth - t.scrollLeft
                          : -t.scrollLeft)
                    : (e.translate = -t.scrollTop),
                -0 === e.translate && (e.translate = 0),
                e.updateActiveIndex(),
                e.updateSlidesClasses();
            var a = e.maxTranslate() - e.minTranslate();
            (0 === a ? 0 : (e.translate - e.minTranslate()) / a) !==
                e.progress && e.updateProgress(i ? -e.translate : e.translate),
                e.emit("setTranslate", e.translate, !1);
        }
    }
    var V = !1;
    function _() {}
    var F = {
            init: !0,
            direction: "horizontal",
            touchEventsTarget: "container",
            initialSlide: 0,
            speed: 300,
            cssMode: !1,
            updateOnWindowResize: !0,
            resizeObserver: !1,
            nested: !1,
            enabled: !0,
            width: null,
            height: null,
            preventInteractionOnTransition: !1,
            userAgent: null,
            url: null,
            edgeSwipeDetection: !1,
            edgeSwipeThreshold: 20,
            freeMode: !1,
            freeModeMomentum: !0,
            freeModeMomentumRatio: 1,
            freeModeMomentumBounce: !0,
            freeModeMomentumBounceRatio: 1,
            freeModeMomentumVelocityRatio: 1,
            freeModeSticky: !1,
            freeModeMinimumVelocity: 0.02,
            autoHeight: !1,
            setWrapperSize: !1,
            virtualTranslate: !1,
            effect: "slide",
            breakpoints: void 0,
            breakpointsBase: "window",
            spaceBetween: 0,
            slidesPerView: 1,
            slidesPerColumn: 1,
            slidesPerColumnFill: "column",
            slidesPerGroup: 1,
            slidesPerGroupSkip: 0,
            centeredSlides: !1,
            centeredSlidesBounds: !1,
            slidesOffsetBefore: 0,
            slidesOffsetAfter: 0,
            normalizeSlideIndex: !0,
            centerInsufficientSlides: !1,
            watchOverflow: !1,
            roundLengths: !1,
            touchRatio: 1,
            touchAngle: 45,
            simulateTouch: !0,
            shortSwipes: !0,
            longSwipes: !0,
            longSwipesRatio: 0.5,
            longSwipesMs: 300,
            followFinger: !0,
            allowTouchMove: !0,
            threshold: 0,
            touchMoveStopPropagation: !1,
            touchStartPreventDefault: !0,
            touchStartForcePreventDefault: !1,
            touchReleaseOnEdges: !1,
            uniqueNavElements: !0,
            resistance: !0,
            resistanceRatio: 0.85,
            watchSlidesProgress: !1,
            watchSlidesVisibility: !1,
            grabCursor: !1,
            preventClicks: !0,
            preventClicksPropagation: !0,
            slideToClickedSlide: !1,
            preloadImages: !0,
            updateOnImagesReady: !0,
            loop: !1,
            loopAdditionalSlides: 0,
            loopedSlides: null,
            loopFillGroupWithBlank: !1,
            loopPreventsSlide: !0,
            allowSlidePrev: !0,
            allowSlideNext: !0,
            swipeHandler: null,
            noSwiping: !0,
            noSwipingClass: "swiper-no-swiping",
            noSwipingSelector: null,
            passiveListeners: !0,
            containerModifierClass: "swiper-container-",
            slideClass: "swiper-slide",
            slideBlankClass: "swiper-slide-invisible-blank",
            slideActiveClass: "swiper-slide-active",
            slideDuplicateActiveClass: "swiper-slide-duplicate-active",
            slideVisibleClass: "swiper-slide-visible",
            slideDuplicateClass: "swiper-slide-duplicate",
            slideNextClass: "swiper-slide-next",
            slideDuplicateNextClass: "swiper-slide-duplicate-next",
            slidePrevClass: "swiper-slide-prev",
            slideDuplicatePrevClass: "swiper-slide-duplicate-prev",
            wrapperClass: "swiper-wrapper",
            runCallbacksOnInit: !0,
            _emitClasses: !1,
        },
        j = {
            modular: {
                useParams: function (e) {
                    var t = this;
                    t.modules &&
                        Object.keys(t.modules).forEach(function (i) {
                            var a = t.modules[i];
                            a.params && E(e, a.params);
                        });
                },
                useModules: function (e) {
                    void 0 === e && (e = {});
                    var t = this;
                    t.modules &&
                        Object.keys(t.modules).forEach(function (i) {
                            var a = t.modules[i],
                                r = e[i] || {};
                            a.on &&
                                t.on &&
                                Object.keys(a.on).forEach(function (e) {
                                    t.on(e, a.on[e]);
                                }),
                                a.create && a.create.bind(t)(r);
                        });
                },
            },
            eventsEmitter: {
                on: function (e, t, i) {
                    var a = this;
                    if ("function" != typeof t) return a;
                    var r = i ? "unshift" : "push";
                    return (
                        e.split(" ").forEach(function (e) {
                            a.eventsListeners[e] || (a.eventsListeners[e] = []),
                                a.eventsListeners[e][r](t);
                        }),
                        a
                    );
                },
                once: function (e, t, i) {
                    var a = this;
                    if ("function" != typeof t) return a;
                    function r() {
                        a.off(e, r),
                            r.__emitterProxy && delete r.__emitterProxy;
                        for (
                            var i = arguments.length, s = new Array(i), n = 0;
                            n < i;
                            n++
                        )
                            s[n] = arguments[n];
                        t.apply(a, s);
                    }
                    return (r.__emitterProxy = t), a.on(e, r, i);
                },
                onAny: function (e, t) {
                    var i = this;
                    if ("function" != typeof e) return i;
                    var a = t ? "unshift" : "push";
                    return (
                        i.eventsAnyListeners.indexOf(e) < 0 &&
                            i.eventsAnyListeners[a](e),
                        i
                    );
                },
                offAny: function (e) {
                    var t = this;
                    if (!t.eventsAnyListeners) return t;
                    var i = t.eventsAnyListeners.indexOf(e);
                    return i >= 0 && t.eventsAnyListeners.splice(i, 1), t;
                },
                off: function (e, t) {
                    var i = this;
                    return i.eventsListeners
                        ? (e.split(" ").forEach(function (e) {
                              void 0 === t
                                  ? (i.eventsListeners[e] = [])
                                  : i.eventsListeners[e] &&
                                    i.eventsListeners[e].forEach(function (
                                        a,
                                        r
                                    ) {
                                        (a === t ||
                                            (a.__emitterProxy &&
                                                a.__emitterProxy === t)) &&
                                            i.eventsListeners[e].splice(r, 1);
                                    });
                          }),
                          i)
                        : i;
                },
                emit: function () {
                    var e,
                        t,
                        i,
                        a = this;
                    if (!a.eventsListeners) return a;
                    for (
                        var r = arguments.length, s = new Array(r), n = 0;
                        n < r;
                        n++
                    )
                        s[n] = arguments[n];
                    "string" == typeof s[0] || Array.isArray(s[0])
                        ? ((e = s[0]), (t = s.slice(1, s.length)), (i = a))
                        : ((e = s[0].events),
                          (t = s[0].data),
                          (i = s[0].context || a)),
                        t.unshift(i);
                    var o = Array.isArray(e) ? e : e.split(" ");
                    return (
                        o.forEach(function (e) {
                            a.eventsAnyListeners &&
                                a.eventsAnyListeners.length &&
                                a.eventsAnyListeners.forEach(function (a) {
                                    a.apply(i, [e].concat(t));
                                }),
                                a.eventsListeners &&
                                    a.eventsListeners[e] &&
                                    a.eventsListeners[e].forEach(function (e) {
                                        e.apply(i, t);
                                    });
                        }),
                        a
                    );
                },
            },
            update: {
                updateSize: function () {
                    var e,
                        t,
                        i = this,
                        a = i.$el;
                    (e =
                        void 0 !== i.params.width && null !== i.params.width
                            ? i.params.width
                            : a[0].clientWidth),
                        (t =
                            void 0 !== i.params.height &&
                            null !== i.params.height
                                ? i.params.height
                                : a[0].clientHeight),
                        (0 === e && i.isHorizontal()) ||
                            (0 === t && i.isVertical()) ||
                            ((e =
                                e -
                                parseInt(a.css("padding-left") || 0, 10) -
                                parseInt(a.css("padding-right") || 0, 10)),
                            (t =
                                t -
                                parseInt(a.css("padding-top") || 0, 10) -
                                parseInt(a.css("padding-bottom") || 0, 10)),
                            Number.isNaN(e) && (e = 0),
                            Number.isNaN(t) && (t = 0),
                            E(i, {
                                width: e,
                                height: t,
                                size: i.isHorizontal() ? e : t,
                            }));
                },
                updateSlides: function () {
                    var e = this;
                    function t(t) {
                        return e.isHorizontal()
                            ? t
                            : {
                                  width: "height",
                                  "margin-top": "margin-left",
                                  "margin-bottom ": "margin-right",
                                  "margin-left": "margin-top",
                                  "margin-right": "margin-bottom",
                                  "padding-left": "padding-top",
                                  "padding-right": "padding-bottom",
                                  marginRight: "marginBottom",
                              }[t];
                    }
                    function i(e, i) {
                        return parseFloat(e.getPropertyValue(t(i)) || 0);
                    }
                    var a = e.params,
                        r = e.$wrapperEl,
                        s = e.size,
                        n = e.rtlTranslate,
                        o = e.wrongRTL,
                        l = e.virtual && a.virtual.enabled,
                        d = l ? e.virtual.slides.length : e.slides.length,
                        p = r.children("." + e.params.slideClass),
                        u = l ? e.virtual.slides.length : p.length,
                        c = [],
                        v = [],
                        f = [],
                        h = a.slidesOffsetBefore;
                    "function" == typeof h &&
                        (h = a.slidesOffsetBefore.call(e));
                    var m = a.slidesOffsetAfter;
                    "function" == typeof m && (m = a.slidesOffsetAfter.call(e));
                    var g = e.snapGrid.length,
                        b = e.slidesGrid.length,
                        y = a.spaceBetween,
                        C = -h,
                        w = 0,
                        T = 0;
                    if (void 0 !== s) {
                        var S, x;
                        "string" == typeof y &&
                            y.indexOf("%") >= 0 &&
                            (y = (parseFloat(y.replace("%", "")) / 100) * s),
                            (e.virtualSize = -y),
                            n
                                ? p.css({ marginLeft: "", marginTop: "" })
                                : p.css({ marginRight: "", marginBottom: "" }),
                            a.slidesPerColumn > 1 &&
                                ((S =
                                    Math.floor(u / a.slidesPerColumn) ===
                                    u / e.params.slidesPerColumn
                                        ? u
                                        : Math.ceil(u / a.slidesPerColumn) *
                                          a.slidesPerColumn),
                                "auto" !== a.slidesPerView &&
                                    "row" === a.slidesPerColumnFill &&
                                    (S = Math.max(
                                        S,
                                        a.slidesPerView * a.slidesPerColumn
                                    )));
                        for (
                            var M,
                                P,
                                k,
                                L = a.slidesPerColumn,
                                z = S / L,
                                O = Math.floor(u / a.slidesPerColumn),
                                I = 0;
                            I < u;
                            I += 1
                        ) {
                            x = 0;
                            var A = p.eq(I);
                            if (a.slidesPerColumn > 1) {
                                var B = void 0,
                                    D = void 0,
                                    $ = void 0;
                                if (
                                    "row" === a.slidesPerColumnFill &&
                                    a.slidesPerGroup > 1
                                ) {
                                    var G = Math.floor(
                                            I /
                                                (a.slidesPerGroup *
                                                    a.slidesPerColumn)
                                        ),
                                        N =
                                            I -
                                            a.slidesPerColumn *
                                                a.slidesPerGroup *
                                                G,
                                        H =
                                            0 === G
                                                ? a.slidesPerGroup
                                                : Math.min(
                                                      Math.ceil(
                                                          (u -
                                                              G *
                                                                  L *
                                                                  a.slidesPerGroup) /
                                                              L
                                                      ),
                                                      a.slidesPerGroup
                                                  );
                                    (B =
                                        (D =
                                            N -
                                            ($ = Math.floor(N / H)) * H +
                                            G * a.slidesPerGroup) +
                                        ($ * S) / L),
                                        A.css({
                                            "-webkit-box-ordinal-group": B,
                                            "-moz-box-ordinal-group": B,
                                            "-ms-flex-order": B,
                                            "-webkit-order": B,
                                            order: B,
                                        });
                                } else
                                    "column" === a.slidesPerColumnFill
                                        ? (($ =
                                              I - (D = Math.floor(I / L)) * L),
                                          (D > O || (D === O && $ === L - 1)) &&
                                              ($ += 1) >= L &&
                                              (($ = 0), (D += 1)))
                                        : (D = I - ($ = Math.floor(I / z)) * z);
                                A.css(
                                    t("margin-top"),
                                    0 !== $ &&
                                        a.spaceBetween &&
                                        a.spaceBetween + "px"
                                );
                            }
                            if ("none" !== A.css("display")) {
                                if ("auto" === a.slidesPerView) {
                                    var V = getComputedStyle(A[0]),
                                        _ = A[0].style.transform,
                                        F = A[0].style.webkitTransform;
                                    if (
                                        (_ && (A[0].style.transform = "none"),
                                        F &&
                                            (A[0].style.webkitTransform =
                                                "none"),
                                        a.roundLengths)
                                    )
                                        x = e.isHorizontal()
                                            ? A.outerWidth(!0)
                                            : A.outerHeight(!0);
                                    else {
                                        var j = i(V, "width"),
                                            q = i(V, "padding-left"),
                                            R = i(V, "padding-right"),
                                            W = i(V, "margin-left"),
                                            X = i(V, "margin-right"),
                                            Y =
                                                V.getPropertyValue(
                                                    "box-sizing"
                                                );
                                        if (Y && "border-box" === Y)
                                            x = j + W + X;
                                        else {
                                            var U = A[0],
                                                K = U.clientWidth;
                                            x =
                                                j +
                                                q +
                                                R +
                                                W +
                                                X +
                                                (U.offsetWidth - K);
                                        }
                                    }
                                    _ && (A[0].style.transform = _),
                                        F && (A[0].style.webkitTransform = F),
                                        a.roundLengths && (x = Math.floor(x));
                                } else
                                    (x =
                                        (s - (a.slidesPerView - 1) * y) /
                                        a.slidesPerView),
                                        a.roundLengths && (x = Math.floor(x)),
                                        p[I] &&
                                            (p[I].style[t("width")] = x + "px");
                                p[I] && (p[I].swiperSlideSize = x),
                                    f.push(x),
                                    a.centeredSlides
                                        ? ((C = C + x / 2 + w / 2 + y),
                                          0 === w &&
                                              0 !== I &&
                                              (C = C - s / 2 - y),
                                          0 === I && (C = C - s / 2 - y),
                                          Math.abs(C) < 0.001 && (C = 0),
                                          a.roundLengths && (C = Math.floor(C)),
                                          T % a.slidesPerGroup == 0 &&
                                              c.push(C),
                                          v.push(C))
                                        : (a.roundLengths &&
                                              (C = Math.floor(C)),
                                          (T -
                                              Math.min(
                                                  e.params.slidesPerGroupSkip,
                                                  T
                                              )) %
                                              e.params.slidesPerGroup ==
                                              0 && c.push(C),
                                          v.push(C),
                                          (C = C + x + y)),
                                    (e.virtualSize += x + y),
                                    (w = x),
                                    (T += 1);
                            }
                        }
                        if (
                            ((e.virtualSize = Math.max(e.virtualSize, s) + m),
                            n &&
                                o &&
                                ("slide" === a.effect ||
                                    "coverflow" === a.effect) &&
                                r.css({
                                    width:
                                        e.virtualSize + a.spaceBetween + "px",
                                }),
                            a.setWrapperSize)
                        )
                            r.css(
                                (((P = {})[t("width")] =
                                    e.virtualSize + a.spaceBetween + "px"),
                                P)
                            );
                        if (a.slidesPerColumn > 1)
                            if (
                                ((e.virtualSize = (x + a.spaceBetween) * S),
                                (e.virtualSize =
                                    Math.ceil(
                                        e.virtualSize / a.slidesPerColumn
                                    ) - a.spaceBetween),
                                r.css(
                                    (((k = {})[t("width")] =
                                        e.virtualSize + a.spaceBetween + "px"),
                                    k)
                                ),
                                a.centeredSlides)
                            ) {
                                M = [];
                                for (var J = 0; J < c.length; J += 1) {
                                    var Q = c[J];
                                    a.roundLengths && (Q = Math.floor(Q)),
                                        c[J] < e.virtualSize + c[0] &&
                                            M.push(Q);
                                }
                                c = M;
                            }
                        if (!a.centeredSlides) {
                            M = [];
                            for (var Z = 0; Z < c.length; Z += 1) {
                                var ee = c[Z];
                                a.roundLengths && (ee = Math.floor(ee)),
                                    c[Z] <= e.virtualSize - s && M.push(ee);
                            }
                            (c = M),
                                Math.floor(e.virtualSize - s) -
                                    Math.floor(c[c.length - 1]) >
                                    1 && c.push(e.virtualSize - s);
                        }
                        if (
                            (0 === c.length && (c = [0]), 0 !== a.spaceBetween)
                        ) {
                            var te,
                                ie =
                                    e.isHorizontal() && n
                                        ? "marginLeft"
                                        : t("marginRight");
                            p.filter(function (e, t) {
                                return !a.cssMode || t !== p.length - 1;
                            }).css((((te = {})[ie] = y + "px"), te));
                        }
                        if (a.centeredSlides && a.centeredSlidesBounds) {
                            var ae = 0;
                            f.forEach(function (e) {
                                ae += e + (a.spaceBetween ? a.spaceBetween : 0);
                            });
                            var re = (ae -= a.spaceBetween) - s;
                            c = c.map(function (e) {
                                return e < 0 ? -h : e > re ? re + m : e;
                            });
                        }
                        if (a.centerInsufficientSlides) {
                            var se = 0;
                            if (
                                (f.forEach(function (e) {
                                    se +=
                                        e +
                                        (a.spaceBetween ? a.spaceBetween : 0);
                                }),
                                (se -= a.spaceBetween) < s)
                            ) {
                                var ne = (s - se) / 2;
                                c.forEach(function (e, t) {
                                    c[t] = e - ne;
                                }),
                                    v.forEach(function (e, t) {
                                        v[t] = e + ne;
                                    });
                            }
                        }
                        E(e, {
                            slides: p,
                            snapGrid: c,
                            slidesGrid: v,
                            slidesSizesGrid: f,
                        }),
                            u !== d && e.emit("slidesLengthChange"),
                            c.length !== g &&
                                (e.params.watchOverflow && e.checkOverflow(),
                                e.emit("snapGridLengthChange")),
                            v.length !== b && e.emit("slidesGridLengthChange"),
                            (a.watchSlidesProgress ||
                                a.watchSlidesVisibility) &&
                                e.updateSlidesOffset();
                    }
                },
                updateAutoHeight: function (e) {
                    var t,
                        i = this,
                        a = [],
                        r = i.virtual && i.params.virtual.enabled,
                        s = 0;
                    "number" == typeof e
                        ? i.setTransition(e)
                        : !0 === e && i.setTransition(i.params.speed);
                    var n = function (e) {
                        return r
                            ? i.slides.filter(function (t) {
                                  return (
                                      parseInt(
                                          t.getAttribute(
                                              "data-swiper-slide-index"
                                          ),
                                          10
                                      ) === e
                                  );
                              })[0]
                            : i.slides.eq(e)[0];
                    };
                    if (
                        "auto" !== i.params.slidesPerView &&
                        i.params.slidesPerView > 1
                    )
                        if (i.params.centeredSlides)
                            i.visibleSlides.each(function (e) {
                                a.push(e);
                            });
                        else
                            for (
                                t = 0;
                                t < Math.ceil(i.params.slidesPerView);
                                t += 1
                            ) {
                                var o = i.activeIndex + t;
                                if (o > i.slides.length && !r) break;
                                a.push(n(o));
                            }
                    else a.push(n(i.activeIndex));
                    for (t = 0; t < a.length; t += 1)
                        if (void 0 !== a[t]) {
                            var l = a[t].offsetHeight;
                            s = l > s ? l : s;
                        }
                    s && i.$wrapperEl.css("height", s + "px");
                },
                updateSlidesOffset: function () {
                    for (var e = this.slides, t = 0; t < e.length; t += 1)
                        e[t].swiperSlideOffset = this.isHorizontal()
                            ? e[t].offsetLeft
                            : e[t].offsetTop;
                },
                updateSlidesProgress: function (e) {
                    void 0 === e && (e = (this && this.translate) || 0);
                    var t = this,
                        i = t.params,
                        a = t.slides,
                        r = t.rtlTranslate;
                    if (0 !== a.length) {
                        void 0 === a[0].swiperSlideOffset &&
                            t.updateSlidesOffset();
                        var s = -e;
                        r && (s = e),
                            a.removeClass(i.slideVisibleClass),
                            (t.visibleSlidesIndexes = []),
                            (t.visibleSlides = []);
                        for (var n = 0; n < a.length; n += 1) {
                            var o = a[n],
                                l =
                                    (s +
                                        (i.centeredSlides
                                            ? t.minTranslate()
                                            : 0) -
                                        o.swiperSlideOffset) /
                                    (o.swiperSlideSize + i.spaceBetween);
                            if (
                                i.watchSlidesVisibility ||
                                (i.centeredSlides && i.autoHeight)
                            ) {
                                var d = -(s - o.swiperSlideOffset),
                                    p = d + t.slidesSizesGrid[n];
                                ((d >= 0 && d < t.size - 1) ||
                                    (p > 1 && p <= t.size) ||
                                    (d <= 0 && p >= t.size)) &&
                                    (t.visibleSlides.push(o),
                                    t.visibleSlidesIndexes.push(n),
                                    a.eq(n).addClass(i.slideVisibleClass));
                            }
                            o.progress = r ? -l : l;
                        }
                        t.visibleSlides = m(t.visibleSlides);
                    }
                },
                updateProgress: function (e) {
                    var t = this;
                    if (void 0 === e) {
                        var i = t.rtlTranslate ? -1 : 1;
                        e = (t && t.translate && t.translate * i) || 0;
                    }
                    var a = t.params,
                        r = t.maxTranslate() - t.minTranslate(),
                        s = t.progress,
                        n = t.isBeginning,
                        o = t.isEnd,
                        l = n,
                        d = o;
                    0 === r
                        ? ((s = 0), (n = !0), (o = !0))
                        : ((n = (s = (e - t.minTranslate()) / r) <= 0),
                          (o = s >= 1)),
                        E(t, { progress: s, isBeginning: n, isEnd: o }),
                        (a.watchSlidesProgress ||
                            a.watchSlidesVisibility ||
                            (a.centeredSlides && a.autoHeight)) &&
                            t.updateSlidesProgress(e),
                        n && !l && t.emit("reachBeginning toEdge"),
                        o && !d && t.emit("reachEnd toEdge"),
                        ((l && !n) || (d && !o)) && t.emit("fromEdge"),
                        t.emit("progress", s);
                },
                updateSlidesClasses: function () {
                    var e,
                        t = this,
                        i = t.slides,
                        a = t.params,
                        r = t.$wrapperEl,
                        s = t.activeIndex,
                        n = t.realIndex,
                        o = t.virtual && a.virtual.enabled;
                    i.removeClass(
                        a.slideActiveClass +
                            " " +
                            a.slideNextClass +
                            " " +
                            a.slidePrevClass +
                            " " +
                            a.slideDuplicateActiveClass +
                            " " +
                            a.slideDuplicateNextClass +
                            " " +
                            a.slideDuplicatePrevClass
                    ),
                        (e = o
                            ? t.$wrapperEl.find(
                                  "." +
                                      a.slideClass +
                                      '[data-swiper-slide-index="' +
                                      s +
                                      '"]'
                              )
                            : i.eq(s)).addClass(a.slideActiveClass),
                        a.loop &&
                            (e.hasClass(a.slideDuplicateClass)
                                ? r
                                      .children(
                                          "." +
                                              a.slideClass +
                                              ":not(." +
                                              a.slideDuplicateClass +
                                              ')[data-swiper-slide-index="' +
                                              n +
                                              '"]'
                                      )
                                      .addClass(a.slideDuplicateActiveClass)
                                : r
                                      .children(
                                          "." +
                                              a.slideClass +
                                              "." +
                                              a.slideDuplicateClass +
                                              '[data-swiper-slide-index="' +
                                              n +
                                              '"]'
                                      )
                                      .addClass(a.slideDuplicateActiveClass));
                    var l = e
                        .nextAll("." + a.slideClass)
                        .eq(0)
                        .addClass(a.slideNextClass);
                    a.loop &&
                        0 === l.length &&
                        (l = i.eq(0)).addClass(a.slideNextClass);
                    var d = e
                        .prevAll("." + a.slideClass)
                        .eq(0)
                        .addClass(a.slidePrevClass);
                    a.loop &&
                        0 === d.length &&
                        (d = i.eq(-1)).addClass(a.slidePrevClass),
                        a.loop &&
                            (l.hasClass(a.slideDuplicateClass)
                                ? r
                                      .children(
                                          "." +
                                              a.slideClass +
                                              ":not(." +
                                              a.slideDuplicateClass +
                                              ')[data-swiper-slide-index="' +
                                              l.attr(
                                                  "data-swiper-slide-index"
                                              ) +
                                              '"]'
                                      )
                                      .addClass(a.slideDuplicateNextClass)
                                : r
                                      .children(
                                          "." +
                                              a.slideClass +
                                              "." +
                                              a.slideDuplicateClass +
                                              '[data-swiper-slide-index="' +
                                              l.attr(
                                                  "data-swiper-slide-index"
                                              ) +
                                              '"]'
                                      )
                                      .addClass(a.slideDuplicateNextClass),
                            d.hasClass(a.slideDuplicateClass)
                                ? r
                                      .children(
                                          "." +
                                              a.slideClass +
                                              ":not(." +
                                              a.slideDuplicateClass +
                                              ')[data-swiper-slide-index="' +
                                              d.attr(
                                                  "data-swiper-slide-index"
                                              ) +
                                              '"]'
                                      )
                                      .addClass(a.slideDuplicatePrevClass)
                                : r
                                      .children(
                                          "." +
                                              a.slideClass +
                                              "." +
                                              a.slideDuplicateClass +
                                              '[data-swiper-slide-index="' +
                                              d.attr(
                                                  "data-swiper-slide-index"
                                              ) +
                                              '"]'
                                      )
                                      .addClass(a.slideDuplicatePrevClass)),
                        t.emitSlidesClasses();
                },
                updateActiveIndex: function (e) {
                    var t,
                        i = this,
                        a = i.rtlTranslate ? i.translate : -i.translate,
                        r = i.slidesGrid,
                        s = i.snapGrid,
                        n = i.params,
                        o = i.activeIndex,
                        l = i.realIndex,
                        d = i.snapIndex,
                        p = e;
                    if (void 0 === p) {
                        for (var u = 0; u < r.length; u += 1)
                            void 0 !== r[u + 1]
                                ? a >= r[u] &&
                                  a < r[u + 1] - (r[u + 1] - r[u]) / 2
                                    ? (p = u)
                                    : a >= r[u] && a < r[u + 1] && (p = u + 1)
                                : a >= r[u] && (p = u);
                        n.normalizeSlideIndex &&
                            (p < 0 || void 0 === p) &&
                            (p = 0);
                    }
                    if (s.indexOf(a) >= 0) t = s.indexOf(a);
                    else {
                        var c = Math.min(n.slidesPerGroupSkip, p);
                        t = c + Math.floor((p - c) / n.slidesPerGroup);
                    }
                    if ((t >= s.length && (t = s.length - 1), p !== o)) {
                        var v = parseInt(
                            i.slides.eq(p).attr("data-swiper-slide-index") || p,
                            10
                        );
                        E(i, {
                            snapIndex: t,
                            realIndex: v,
                            previousIndex: o,
                            activeIndex: p,
                        }),
                            i.emit("activeIndexChange"),
                            i.emit("snapIndexChange"),
                            l !== v && i.emit("realIndexChange"),
                            (i.initialized || i.params.runCallbacksOnInit) &&
                                i.emit("slideChange");
                    } else
                        t !== d &&
                            ((i.snapIndex = t), i.emit("snapIndexChange"));
                },
                updateClickedSlide: function (e) {
                    var t,
                        i = this,
                        a = i.params,
                        r = m(e.target).closest("." + a.slideClass)[0],
                        s = !1;
                    if (r)
                        for (var n = 0; n < i.slides.length; n += 1)
                            if (i.slides[n] === r) {
                                (s = !0), (t = n);
                                break;
                            }
                    if (!r || !s)
                        return (
                            (i.clickedSlide = void 0),
                            void (i.clickedIndex = void 0)
                        );
                    (i.clickedSlide = r),
                        i.virtual && i.params.virtual.enabled
                            ? (i.clickedIndex = parseInt(
                                  m(r).attr("data-swiper-slide-index"),
                                  10
                              ))
                            : (i.clickedIndex = t),
                        a.slideToClickedSlide &&
                            void 0 !== i.clickedIndex &&
                            i.clickedIndex !== i.activeIndex &&
                            i.slideToClickedSlide();
                },
            },
            translate: {
                getTranslate: function (e) {
                    void 0 === e && (e = this.isHorizontal() ? "x" : "y");
                    var t = this,
                        i = t.params,
                        a = t.rtlTranslate,
                        r = t.translate,
                        s = t.$wrapperEl;
                    if (i.virtualTranslate) return a ? -r : r;
                    if (i.cssMode) return r;
                    var n = S(s[0], e);
                    return a && (n = -n), n || 0;
                },
                setTranslate: function (e, t) {
                    var i = this,
                        a = i.rtlTranslate,
                        r = i.params,
                        s = i.$wrapperEl,
                        n = i.wrapperEl,
                        o = i.progress,
                        l = 0,
                        d = 0;
                    i.isHorizontal() ? (l = a ? -e : e) : (d = e),
                        r.roundLengths &&
                            ((l = Math.floor(l)), (d = Math.floor(d))),
                        r.cssMode
                            ? (n[
                                  i.isHorizontal() ? "scrollLeft" : "scrollTop"
                              ] = i.isHorizontal() ? -l : -d)
                            : r.virtualTranslate ||
                              s.transform(
                                  "translate3d(" + l + "px, " + d + "px, 0px)"
                              ),
                        (i.previousTranslate = i.translate),
                        (i.translate = i.isHorizontal() ? l : d);
                    var p = i.maxTranslate() - i.minTranslate();
                    (0 === p ? 0 : (e - i.minTranslate()) / p) !== o &&
                        i.updateProgress(e),
                        i.emit("setTranslate", i.translate, t);
                },
                minTranslate: function () {
                    return -this.snapGrid[0];
                },
                maxTranslate: function () {
                    return -this.snapGrid[this.snapGrid.length - 1];
                },
                translateTo: function (e, t, i, a, r) {
                    void 0 === e && (e = 0),
                        void 0 === t && (t = this.params.speed),
                        void 0 === i && (i = !0),
                        void 0 === a && (a = !0);
                    var s = this,
                        n = s.params,
                        o = s.wrapperEl;
                    if (s.animating && n.preventInteractionOnTransition)
                        return !1;
                    var l,
                        d = s.minTranslate(),
                        p = s.maxTranslate();
                    if (
                        ((l = a && e > d ? d : a && e < p ? p : e),
                        s.updateProgress(l),
                        n.cssMode)
                    ) {
                        var u,
                            c = s.isHorizontal();
                        if (0 === t) o[c ? "scrollLeft" : "scrollTop"] = -l;
                        else if (o.scrollTo)
                            o.scrollTo(
                                (((u = {})[c ? "left" : "top"] = -l),
                                (u.behavior = "smooth"),
                                u)
                            );
                        else o[c ? "scrollLeft" : "scrollTop"] = -l;
                        return !0;
                    }
                    return (
                        0 === t
                            ? (s.setTransition(0),
                              s.setTranslate(l),
                              i &&
                                  (s.emit("beforeTransitionStart", t, r),
                                  s.emit("transitionEnd")))
                            : (s.setTransition(t),
                              s.setTranslate(l),
                              i &&
                                  (s.emit("beforeTransitionStart", t, r),
                                  s.emit("transitionStart")),
                              s.animating ||
                                  ((s.animating = !0),
                                  s.onTranslateToWrapperTransitionEnd ||
                                      (s.onTranslateToWrapperTransitionEnd =
                                          function (e) {
                                              s &&
                                                  !s.destroyed &&
                                                  e.target === this &&
                                                  (s.$wrapperEl[0].removeEventListener(
                                                      "transitionend",
                                                      s.onTranslateToWrapperTransitionEnd
                                                  ),
                                                  s.$wrapperEl[0].removeEventListener(
                                                      "webkitTransitionEnd",
                                                      s.onTranslateToWrapperTransitionEnd
                                                  ),
                                                  (s.onTranslateToWrapperTransitionEnd =
                                                      null),
                                                  delete s.onTranslateToWrapperTransitionEnd,
                                                  i && s.emit("transitionEnd"));
                                          }),
                                  s.$wrapperEl[0].addEventListener(
                                      "transitionend",
                                      s.onTranslateToWrapperTransitionEnd
                                  ),
                                  s.$wrapperEl[0].addEventListener(
                                      "webkitTransitionEnd",
                                      s.onTranslateToWrapperTransitionEnd
                                  ))),
                        !0
                    );
                },
            },
            transition: {
                setTransition: function (e, t) {
                    var i = this;
                    i.params.cssMode || i.$wrapperEl.transition(e),
                        i.emit("setTransition", e, t);
                },
                transitionStart: function (e, t) {
                    void 0 === e && (e = !0);
                    var i = this,
                        a = i.activeIndex,
                        r = i.params,
                        s = i.previousIndex;
                    if (!r.cssMode) {
                        r.autoHeight && i.updateAutoHeight();
                        var n = t;
                        if (
                            (n ||
                                (n = a > s ? "next" : a < s ? "prev" : "reset"),
                            i.emit("transitionStart"),
                            e && a !== s)
                        ) {
                            if ("reset" === n)
                                return void i.emit("slideResetTransitionStart");
                            i.emit("slideChangeTransitionStart"),
                                "next" === n
                                    ? i.emit("slideNextTransitionStart")
                                    : i.emit("slidePrevTransitionStart");
                        }
                    }
                },
                transitionEnd: function (e, t) {
                    void 0 === e && (e = !0);
                    var i = this,
                        a = i.activeIndex,
                        r = i.previousIndex,
                        s = i.params;
                    if (((i.animating = !1), !s.cssMode)) {
                        i.setTransition(0);
                        var n = t;
                        if (
                            (n ||
                                (n = a > r ? "next" : a < r ? "prev" : "reset"),
                            i.emit("transitionEnd"),
                            e && a !== r)
                        ) {
                            if ("reset" === n)
                                return void i.emit("slideResetTransitionEnd");
                            i.emit("slideChangeTransitionEnd"),
                                "next" === n
                                    ? i.emit("slideNextTransitionEnd")
                                    : i.emit("slidePrevTransitionEnd");
                        }
                    }
                },
            },
            slide: {
                slideTo: function (e, t, i, a, r) {
                    if (
                        (void 0 === e && (e = 0),
                        void 0 === t && (t = this.params.speed),
                        void 0 === i && (i = !0),
                        "number" != typeof e && "string" != typeof e)
                    )
                        throw new Error(
                            "The 'index' argument cannot have type other than 'number' or 'string'. [" +
                                typeof e +
                                "] given."
                        );
                    if ("string" == typeof e) {
                        var s = parseInt(e, 10);
                        if (!isFinite(s))
                            throw new Error(
                                "The passed-in 'index' (string) couldn't be converted to 'number'. [" +
                                    e +
                                    "] given."
                            );
                        e = s;
                    }
                    var n = this,
                        o = e;
                    o < 0 && (o = 0);
                    var l = n.params,
                        d = n.snapGrid,
                        p = n.slidesGrid,
                        u = n.previousIndex,
                        c = n.activeIndex,
                        v = n.rtlTranslate,
                        f = n.wrapperEl,
                        h = n.enabled;
                    if (
                        (n.animating && l.preventInteractionOnTransition) ||
                        (!h && !a && !r)
                    )
                        return !1;
                    var m = Math.min(n.params.slidesPerGroupSkip, o),
                        g = m + Math.floor((o - m) / n.params.slidesPerGroup);
                    g >= d.length && (g = d.length - 1),
                        (c || l.initialSlide || 0) === (u || 0) &&
                            i &&
                            n.emit("beforeSlideChangeStart");
                    var b,
                        y = -d[g];
                    if ((n.updateProgress(y), l.normalizeSlideIndex))
                        for (var C = 0; C < p.length; C += 1) {
                            var w = -Math.floor(100 * y),
                                T = Math.floor(100 * p[C]),
                                S = Math.floor(100 * p[C + 1]);
                            void 0 !== p[C + 1]
                                ? w >= T && w < S - (S - T) / 2
                                    ? (o = C)
                                    : w >= T && w < S && (o = C + 1)
                                : w >= T && (o = C);
                        }
                    if (n.initialized && o !== c) {
                        if (
                            !n.allowSlideNext &&
                            y < n.translate &&
                            y < n.minTranslate()
                        )
                            return !1;
                        if (
                            !n.allowSlidePrev &&
                            y > n.translate &&
                            y > n.maxTranslate() &&
                            (c || 0) !== o
                        )
                            return !1;
                    }
                    if (
                        ((b = o > c ? "next" : o < c ? "prev" : "reset"),
                        (v && -y === n.translate) || (!v && y === n.translate))
                    )
                        return (
                            n.updateActiveIndex(o),
                            l.autoHeight && n.updateAutoHeight(),
                            n.updateSlidesClasses(),
                            "slide" !== l.effect && n.setTranslate(y),
                            "reset" !== b &&
                                (n.transitionStart(i, b),
                                n.transitionEnd(i, b)),
                            !1
                        );
                    if (l.cssMode) {
                        var x,
                            E = n.isHorizontal(),
                            M = -y;
                        if (
                            (v && (M = f.scrollWidth - f.offsetWidth - M),
                            0 === t)
                        )
                            f[E ? "scrollLeft" : "scrollTop"] = M;
                        else if (f.scrollTo)
                            f.scrollTo(
                                (((x = {})[E ? "left" : "top"] = M),
                                (x.behavior = "smooth"),
                                x)
                            );
                        else f[E ? "scrollLeft" : "scrollTop"] = M;
                        return !0;
                    }
                    return (
                        0 === t
                            ? (n.setTransition(0),
                              n.setTranslate(y),
                              n.updateActiveIndex(o),
                              n.updateSlidesClasses(),
                              n.emit("beforeTransitionStart", t, a),
                              n.transitionStart(i, b),
                              n.transitionEnd(i, b))
                            : (n.setTransition(t),
                              n.setTranslate(y),
                              n.updateActiveIndex(o),
                              n.updateSlidesClasses(),
                              n.emit("beforeTransitionStart", t, a),
                              n.transitionStart(i, b),
                              n.animating ||
                                  ((n.animating = !0),
                                  n.onSlideToWrapperTransitionEnd ||
                                      (n.onSlideToWrapperTransitionEnd =
                                          function (e) {
                                              n &&
                                                  !n.destroyed &&
                                                  e.target === this &&
                                                  (n.$wrapperEl[0].removeEventListener(
                                                      "transitionend",
                                                      n.onSlideToWrapperTransitionEnd
                                                  ),
                                                  n.$wrapperEl[0].removeEventListener(
                                                      "webkitTransitionEnd",
                                                      n.onSlideToWrapperTransitionEnd
                                                  ),
                                                  (n.onSlideToWrapperTransitionEnd =
                                                      null),
                                                  delete n.onSlideToWrapperTransitionEnd,
                                                  n.transitionEnd(i, b));
                                          }),
                                  n.$wrapperEl[0].addEventListener(
                                      "transitionend",
                                      n.onSlideToWrapperTransitionEnd
                                  ),
                                  n.$wrapperEl[0].addEventListener(
                                      "webkitTransitionEnd",
                                      n.onSlideToWrapperTransitionEnd
                                  ))),
                        !0
                    );
                },
                slideToLoop: function (e, t, i, a) {
                    void 0 === e && (e = 0),
                        void 0 === t && (t = this.params.speed),
                        void 0 === i && (i = !0);
                    var r = this,
                        s = e;
                    return (
                        r.params.loop && (s += r.loopedSlides),
                        r.slideTo(s, t, i, a)
                    );
                },
                slideNext: function (e, t, i) {
                    void 0 === e && (e = this.params.speed),
                        void 0 === t && (t = !0);
                    var a = this,
                        r = a.params,
                        s = a.animating;
                    if (!a.enabled) return a;
                    var n =
                        a.activeIndex < r.slidesPerGroupSkip
                            ? 1
                            : r.slidesPerGroup;
                    if (r.loop) {
                        if (s && r.loopPreventsSlide) return !1;
                        a.loopFix(),
                            (a._clientLeft = a.$wrapperEl[0].clientLeft);
                    }
                    return a.slideTo(a.activeIndex + n, e, t, i);
                },
                slidePrev: function (e, t, i) {
                    void 0 === e && (e = this.params.speed),
                        void 0 === t && (t = !0);
                    var a = this,
                        r = a.params,
                        s = a.animating,
                        n = a.snapGrid,
                        o = a.slidesGrid,
                        l = a.rtlTranslate;
                    if (!a.enabled) return a;
                    if (r.loop) {
                        if (s && r.loopPreventsSlide) return !1;
                        a.loopFix(),
                            (a._clientLeft = a.$wrapperEl[0].clientLeft);
                    }
                    function d(e) {
                        return e < 0 ? -Math.floor(Math.abs(e)) : Math.floor(e);
                    }
                    var p = d(l ? a.translate : -a.translate),
                        u = n.map(function (e) {
                            return d(e);
                        });
                    n[u.indexOf(p)];
                    var c,
                        v = n[u.indexOf(p) - 1];
                    return (
                        void 0 === v &&
                            r.cssMode &&
                            n.forEach(function (e) {
                                !v && p >= e && (v = e);
                            }),
                        void 0 !== v &&
                            (c = o.indexOf(v)) < 0 &&
                            (c = a.activeIndex - 1),
                        a.slideTo(c, e, t, i)
                    );
                },
                slideReset: function (e, t, i) {
                    return (
                        void 0 === e && (e = this.params.speed),
                        void 0 === t && (t = !0),
                        this.slideTo(this.activeIndex, e, t, i)
                    );
                },
                slideToClosest: function (e, t, i, a) {
                    void 0 === e && (e = this.params.speed),
                        void 0 === t && (t = !0),
                        void 0 === a && (a = 0.5);
                    var r = this,
                        s = r.activeIndex,
                        n = Math.min(r.params.slidesPerGroupSkip, s),
                        o = n + Math.floor((s - n) / r.params.slidesPerGroup),
                        l = r.rtlTranslate ? r.translate : -r.translate;
                    if (l >= r.snapGrid[o]) {
                        var d = r.snapGrid[o];
                        l - d > (r.snapGrid[o + 1] - d) * a &&
                            (s += r.params.slidesPerGroup);
                    } else {
                        var p = r.snapGrid[o - 1];
                        l - p <= (r.snapGrid[o] - p) * a &&
                            (s -= r.params.slidesPerGroup);
                    }
                    return (
                        (s = Math.max(s, 0)),
                        (s = Math.min(s, r.slidesGrid.length - 1)),
                        r.slideTo(s, e, t, i)
                    );
                },
                slideToClickedSlide: function () {
                    var e,
                        t = this,
                        i = t.params,
                        a = t.$wrapperEl,
                        r =
                            "auto" === i.slidesPerView
                                ? t.slidesPerViewDynamic()
                                : i.slidesPerView,
                        s = t.clickedIndex;
                    if (i.loop) {
                        if (t.animating) return;
                        (e = parseInt(
                            m(t.clickedSlide).attr("data-swiper-slide-index"),
                            10
                        )),
                            i.centeredSlides
                                ? s < t.loopedSlides - r / 2 ||
                                  s > t.slides.length - t.loopedSlides + r / 2
                                    ? (t.loopFix(),
                                      (s = a
                                          .children(
                                              "." +
                                                  i.slideClass +
                                                  '[data-swiper-slide-index="' +
                                                  e +
                                                  '"]:not(.' +
                                                  i.slideDuplicateClass +
                                                  ")"
                                          )
                                          .eq(0)
                                          .index()),
                                      w(function () {
                                          t.slideTo(s);
                                      }))
                                    : t.slideTo(s)
                                : s > t.slides.length - r
                                ? (t.loopFix(),
                                  (s = a
                                      .children(
                                          "." +
                                              i.slideClass +
                                              '[data-swiper-slide-index="' +
                                              e +
                                              '"]:not(.' +
                                              i.slideDuplicateClass +
                                              ")"
                                      )
                                      .eq(0)
                                      .index()),
                                  w(function () {
                                      t.slideTo(s);
                                  }))
                                : t.slideTo(s);
                    } else t.slideTo(s);
                },
            },
            loop: {
                loopCreate: function () {
                    var e = this,
                        t = s(),
                        i = e.params,
                        a = e.$wrapperEl;
                    a.children(
                        "." + i.slideClass + "." + i.slideDuplicateClass
                    ).remove();
                    var r = a.children("." + i.slideClass);
                    if (i.loopFillGroupWithBlank) {
                        var n =
                            i.slidesPerGroup - (r.length % i.slidesPerGroup);
                        if (n !== i.slidesPerGroup) {
                            for (var o = 0; o < n; o += 1) {
                                var l = m(t.createElement("div")).addClass(
                                    i.slideClass + " " + i.slideBlankClass
                                );
                                a.append(l);
                            }
                            r = a.children("." + i.slideClass);
                        }
                    }
                    "auto" !== i.slidesPerView ||
                        i.loopedSlides ||
                        (i.loopedSlides = r.length),
                        (e.loopedSlides = Math.ceil(
                            parseFloat(i.loopedSlides || i.slidesPerView, 10)
                        )),
                        (e.loopedSlides += i.loopAdditionalSlides),
                        e.loopedSlides > r.length &&
                            (e.loopedSlides = r.length);
                    var d = [],
                        p = [];
                    r.each(function (t, i) {
                        var a = m(t);
                        i < e.loopedSlides && p.push(t),
                            i < r.length &&
                                i >= r.length - e.loopedSlides &&
                                d.push(t),
                            a.attr("data-swiper-slide-index", i);
                    });
                    for (var u = 0; u < p.length; u += 1)
                        a.append(
                            m(p[u].cloneNode(!0)).addClass(
                                i.slideDuplicateClass
                            )
                        );
                    for (var c = d.length - 1; c >= 0; c -= 1)
                        a.prepend(
                            m(d[c].cloneNode(!0)).addClass(
                                i.slideDuplicateClass
                            )
                        );
                },
                loopFix: function () {
                    var e = this;
                    e.emit("beforeLoopFix");
                    var t,
                        i = e.activeIndex,
                        a = e.slides,
                        r = e.loopedSlides,
                        s = e.allowSlidePrev,
                        n = e.allowSlideNext,
                        o = e.snapGrid,
                        l = e.rtlTranslate;
                    (e.allowSlidePrev = !0), (e.allowSlideNext = !0);
                    var d = -o[i] - e.getTranslate();
                    if (i < r)
                        (t = a.length - 3 * r + i),
                            (t += r),
                            e.slideTo(t, 0, !1, !0) &&
                                0 !== d &&
                                e.setTranslate(
                                    (l ? -e.translate : e.translate) - d
                                );
                    else if (i >= a.length - r) {
                        (t = -a.length + i + r),
                            (t += r),
                            e.slideTo(t, 0, !1, !0) &&
                                0 !== d &&
                                e.setTranslate(
                                    (l ? -e.translate : e.translate) - d
                                );
                    }
                    (e.allowSlidePrev = s),
                        (e.allowSlideNext = n),
                        e.emit("loopFix");
                },
                loopDestroy: function () {
                    var e = this,
                        t = e.$wrapperEl,
                        i = e.params,
                        a = e.slides;
                    t
                        .children(
                            "." +
                                i.slideClass +
                                "." +
                                i.slideDuplicateClass +
                                ",." +
                                i.slideClass +
                                "." +
                                i.slideBlankClass
                        )
                        .remove(),
                        a.removeAttr("data-swiper-slide-index");
                },
            },
            grabCursor: {
                setGrabCursor: function (e) {
                    var t = this;
                    if (
                        !(
                            t.support.touch ||
                            !t.params.simulateTouch ||
                            (t.params.watchOverflow && t.isLocked) ||
                            t.params.cssMode
                        )
                    ) {
                        var i = t.el;
                        (i.style.cursor = "move"),
                            (i.style.cursor = e
                                ? "-webkit-grabbing"
                                : "-webkit-grab"),
                            (i.style.cursor = e ? "-moz-grabbin" : "-moz-grab"),
                            (i.style.cursor = e ? "grabbing" : "grab");
                    }
                },
                unsetGrabCursor: function () {
                    var e = this;
                    e.support.touch ||
                        (e.params.watchOverflow && e.isLocked) ||
                        e.params.cssMode ||
                        (e.el.style.cursor = "");
                },
            },
            manipulation: {
                appendSlide: function (e) {
                    var t = this,
                        i = t.$wrapperEl,
                        a = t.params;
                    if (
                        (a.loop && t.loopDestroy(),
                        "object" == typeof e && "length" in e)
                    )
                        for (var r = 0; r < e.length; r += 1)
                            e[r] && i.append(e[r]);
                    else i.append(e);
                    a.loop && t.loopCreate(),
                        (a.observer && t.support.observer) || t.update();
                },
                prependSlide: function (e) {
                    var t = this,
                        i = t.params,
                        a = t.$wrapperEl,
                        r = t.activeIndex;
                    i.loop && t.loopDestroy();
                    var s = r + 1;
                    if ("object" == typeof e && "length" in e) {
                        for (var n = 0; n < e.length; n += 1)
                            e[n] && a.prepend(e[n]);
                        s = r + e.length;
                    } else a.prepend(e);
                    i.loop && t.loopCreate(),
                        (i.observer && t.support.observer) || t.update(),
                        t.slideTo(s, 0, !1);
                },
                addSlide: function (e, t) {
                    var i = this,
                        a = i.$wrapperEl,
                        r = i.params,
                        s = i.activeIndex;
                    r.loop &&
                        ((s -= i.loopedSlides),
                        i.loopDestroy(),
                        (i.slides = a.children("." + r.slideClass)));
                    var n = i.slides.length;
                    if (e <= 0) i.prependSlide(t);
                    else if (e >= n) i.appendSlide(t);
                    else {
                        for (
                            var o = s > e ? s + 1 : s, l = [], d = n - 1;
                            d >= e;
                            d -= 1
                        ) {
                            var p = i.slides.eq(d);
                            p.remove(), l.unshift(p);
                        }
                        if ("object" == typeof t && "length" in t) {
                            for (var u = 0; u < t.length; u += 1)
                                t[u] && a.append(t[u]);
                            o = s > e ? s + t.length : s;
                        } else a.append(t);
                        for (var c = 0; c < l.length; c += 1) a.append(l[c]);
                        r.loop && i.loopCreate(),
                            (r.observer && i.support.observer) || i.update(),
                            r.loop
                                ? i.slideTo(o + i.loopedSlides, 0, !1)
                                : i.slideTo(o, 0, !1);
                    }
                },
                removeSlide: function (e) {
                    var t = this,
                        i = t.params,
                        a = t.$wrapperEl,
                        r = t.activeIndex;
                    i.loop &&
                        ((r -= t.loopedSlides),
                        t.loopDestroy(),
                        (t.slides = a.children("." + i.slideClass)));
                    var s,
                        n = r;
                    if ("object" == typeof e && "length" in e) {
                        for (var o = 0; o < e.length; o += 1)
                            (s = e[o]),
                                t.slides[s] && t.slides.eq(s).remove(),
                                s < n && (n -= 1);
                        n = Math.max(n, 0);
                    } else
                        (s = e),
                            t.slides[s] && t.slides.eq(s).remove(),
                            s < n && (n -= 1),
                            (n = Math.max(n, 0));
                    i.loop && t.loopCreate(),
                        (i.observer && t.support.observer) || t.update(),
                        i.loop
                            ? t.slideTo(n + t.loopedSlides, 0, !1)
                            : t.slideTo(n, 0, !1);
                },
                removeAllSlides: function () {
                    for (var e = [], t = 0; t < this.slides.length; t += 1)
                        e.push(t);
                    this.removeSlide(e);
                },
            },
            events: {
                attachEvents: function () {
                    var e = this,
                        t = s(),
                        i = e.params,
                        a = e.touchEvents,
                        r = e.el,
                        n = e.wrapperEl,
                        o = e.device,
                        l = e.support;
                    (e.onTouchStart = B.bind(e)),
                        (e.onTouchMove = D.bind(e)),
                        (e.onTouchEnd = $.bind(e)),
                        i.cssMode && (e.onScroll = H.bind(e)),
                        (e.onClick = N.bind(e));
                    var d = !!i.nested;
                    if (!l.touch && l.pointerEvents)
                        r.addEventListener(a.start, e.onTouchStart, !1),
                            t.addEventListener(a.move, e.onTouchMove, d),
                            t.addEventListener(a.end, e.onTouchEnd, !1);
                    else {
                        if (l.touch) {
                            var p = !(
                                "touchstart" !== a.start ||
                                !l.passiveListener ||
                                !i.passiveListeners
                            ) && { passive: !0, capture: !1 };
                            r.addEventListener(a.start, e.onTouchStart, p),
                                r.addEventListener(
                                    a.move,
                                    e.onTouchMove,
                                    l.passiveListener
                                        ? { passive: !1, capture: d }
                                        : d
                                ),
                                r.addEventListener(a.end, e.onTouchEnd, p),
                                a.cancel &&
                                    r.addEventListener(
                                        a.cancel,
                                        e.onTouchEnd,
                                        p
                                    ),
                                V ||
                                    (t.addEventListener("touchstart", _),
                                    (V = !0));
                        }
                        ((i.simulateTouch && !o.ios && !o.android) ||
                            (i.simulateTouch && !l.touch && o.ios)) &&
                            (r.addEventListener(
                                "mousedown",
                                e.onTouchStart,
                                !1
                            ),
                            t.addEventListener("mousemove", e.onTouchMove, d),
                            t.addEventListener("mouseup", e.onTouchEnd, !1));
                    }
                    (i.preventClicks || i.preventClicksPropagation) &&
                        r.addEventListener("click", e.onClick, !0),
                        i.cssMode && n.addEventListener("scroll", e.onScroll),
                        i.updateOnWindowResize
                            ? e.on(
                                  o.ios || o.android
                                      ? "resize orientationchange observerUpdate"
                                      : "resize observerUpdate",
                                  G,
                                  !0
                              )
                            : e.on("observerUpdate", G, !0);
                },
                detachEvents: function () {
                    var e = this,
                        t = s(),
                        i = e.params,
                        a = e.touchEvents,
                        r = e.el,
                        n = e.wrapperEl,
                        o = e.device,
                        l = e.support,
                        d = !!i.nested;
                    if (!l.touch && l.pointerEvents)
                        r.removeEventListener(a.start, e.onTouchStart, !1),
                            t.removeEventListener(a.move, e.onTouchMove, d),
                            t.removeEventListener(a.end, e.onTouchEnd, !1);
                    else {
                        if (l.touch) {
                            var p = !(
                                "onTouchStart" !== a.start ||
                                !l.passiveListener ||
                                !i.passiveListeners
                            ) && { passive: !0, capture: !1 };
                            r.removeEventListener(a.start, e.onTouchStart, p),
                                r.removeEventListener(a.move, e.onTouchMove, d),
                                r.removeEventListener(a.end, e.onTouchEnd, p),
                                a.cancel &&
                                    r.removeEventListener(
                                        a.cancel,
                                        e.onTouchEnd,
                                        p
                                    );
                        }
                        ((i.simulateTouch && !o.ios && !o.android) ||
                            (i.simulateTouch && !l.touch && o.ios)) &&
                            (r.removeEventListener(
                                "mousedown",
                                e.onTouchStart,
                                !1
                            ),
                            t.removeEventListener(
                                "mousemove",
                                e.onTouchMove,
                                d
                            ),
                            t.removeEventListener("mouseup", e.onTouchEnd, !1));
                    }
                    (i.preventClicks || i.preventClicksPropagation) &&
                        r.removeEventListener("click", e.onClick, !0),
                        i.cssMode &&
                            n.removeEventListener("scroll", e.onScroll),
                        e.off(
                            o.ios || o.android
                                ? "resize orientationchange observerUpdate"
                                : "resize observerUpdate",
                            G
                        );
                },
            },
            breakpoints: {
                setBreakpoint: function () {
                    var e = this,
                        t = e.activeIndex,
                        i = e.initialized,
                        a = e.loopedSlides,
                        r = void 0 === a ? 0 : a,
                        s = e.params,
                        n = e.$el,
                        o = s.breakpoints;
                    if (o && (!o || 0 !== Object.keys(o).length)) {
                        var l = e.getBreakpoint(
                            o,
                            e.params.breakpointsBase,
                            e.el
                        );
                        if (l && e.currentBreakpoint !== l) {
                            var d = l in o ? o[l] : void 0;
                            d &&
                                [
                                    "slidesPerView",
                                    "spaceBetween",
                                    "slidesPerGroup",
                                    "slidesPerGroupSkip",
                                    "slidesPerColumn",
                                ].forEach(function (e) {
                                    var t = d[e];
                                    void 0 !== t &&
                                        (d[e] =
                                            "slidesPerView" !== e ||
                                            ("AUTO" !== t && "auto" !== t)
                                                ? "slidesPerView" === e
                                                    ? parseFloat(t)
                                                    : parseInt(t, 10)
                                                : "auto");
                                });
                            var p = d || e.originalParams,
                                u = s.slidesPerColumn > 1,
                                c = p.slidesPerColumn > 1,
                                v = s.enabled;
                            u && !c
                                ? (n.removeClass(
                                      s.containerModifierClass +
                                          "multirow " +
                                          s.containerModifierClass +
                                          "multirow-column"
                                  ),
                                  e.emitContainerClasses())
                                : !u &&
                                  c &&
                                  (n.addClass(
                                      s.containerModifierClass + "multirow"
                                  ),
                                  "column" === p.slidesPerColumnFill &&
                                      n.addClass(
                                          s.containerModifierClass +
                                              "multirow-column"
                                      ),
                                  e.emitContainerClasses());
                            var f = p.direction && p.direction !== s.direction,
                                h =
                                    s.loop &&
                                    (p.slidesPerView !== s.slidesPerView || f);
                            f && i && e.changeDirection(), E(e.params, p);
                            var m = e.params.enabled;
                            E(e, {
                                allowTouchMove: e.params.allowTouchMove,
                                allowSlideNext: e.params.allowSlideNext,
                                allowSlidePrev: e.params.allowSlidePrev,
                            }),
                                v && !m ? e.disable() : !v && m && e.enable(),
                                (e.currentBreakpoint = l),
                                e.emit("_beforeBreakpoint", p),
                                h &&
                                    i &&
                                    (e.loopDestroy(),
                                    e.loopCreate(),
                                    e.updateSlides(),
                                    e.slideTo(t - r + e.loopedSlides, 0, !1)),
                                e.emit("breakpoint", p);
                        }
                    }
                },
                getBreakpoint: function (e, t, i) {
                    if (
                        (void 0 === t && (t = "window"),
                        e && ("container" !== t || i))
                    ) {
                        var a = !1,
                            r = o(),
                            s = "window" === t ? r.innerWidth : i.clientWidth,
                            n = "window" === t ? r.innerHeight : i.clientHeight,
                            l = Object.keys(e).map(function (e) {
                                if (
                                    "string" == typeof e &&
                                    0 === e.indexOf("@")
                                ) {
                                    var t = parseFloat(e.substr(1));
                                    return { value: n * t, point: e };
                                }
                                return { value: e, point: e };
                            });
                        l.sort(function (e, t) {
                            return (
                                parseInt(e.value, 10) - parseInt(t.value, 10)
                            );
                        });
                        for (var d = 0; d < l.length; d += 1) {
                            var p = l[d],
                                u = p.point;
                            p.value <= s && (a = u);
                        }
                        return a || "max";
                    }
                },
            },
            checkOverflow: {
                checkOverflow: function () {
                    var e = this,
                        t = e.params,
                        i = e.isLocked,
                        a =
                            e.slides.length > 0 &&
                            t.slidesOffsetBefore +
                                t.spaceBetween * (e.slides.length - 1) +
                                e.slides[0].offsetWidth * e.slides.length;
                    t.slidesOffsetBefore && t.slidesOffsetAfter && a
                        ? (e.isLocked = a <= e.size)
                        : (e.isLocked = 1 === e.snapGrid.length),
                        (e.allowSlideNext = !e.isLocked),
                        (e.allowSlidePrev = !e.isLocked),
                        i !== e.isLocked &&
                            e.emit(e.isLocked ? "lock" : "unlock"),
                        i &&
                            i !== e.isLocked &&
                            ((e.isEnd = !1),
                            e.navigation && e.navigation.update());
                },
            },
            classes: {
                addClasses: function () {
                    var e,
                        t,
                        i,
                        a = this,
                        r = a.classNames,
                        s = a.params,
                        n = a.rtl,
                        o = a.$el,
                        l = a.device,
                        d = a.support,
                        p =
                            ((e = [
                                "initialized",
                                s.direction,
                                {
                                    "pointer-events":
                                        d.pointerEvents && !d.touch,
                                },
                                { "free-mode": s.freeMode },
                                { autoheight: s.autoHeight },
                                { rtl: n },
                                { multirow: s.slidesPerColumn > 1 },
                                {
                                    "multirow-column":
                                        s.slidesPerColumn > 1 &&
                                        "column" === s.slidesPerColumnFill,
                                },
                                { android: l.android },
                                { ios: l.ios },
                                { "css-mode": s.cssMode },
                            ]),
                            (t = s.containerModifierClass),
                            (i = []),
                            e.forEach(function (e) {
                                "object" == typeof e
                                    ? Object.keys(e).forEach(function (a) {
                                          e[a] && i.push(t + a);
                                      })
                                    : "string" == typeof e && i.push(t + e);
                            }),
                            i);
                    r.push.apply(r, p),
                        o.addClass([].concat(r).join(" ")),
                        a.emitContainerClasses();
                },
                removeClasses: function () {
                    var e = this,
                        t = e.$el,
                        i = e.classNames;
                    t.removeClass(i.join(" ")), e.emitContainerClasses();
                },
            },
            images: {
                loadImage: function (e, t, i, a, r, s) {
                    var n,
                        l = o();
                    function d() {
                        s && s();
                    }
                    m(e).parent("picture")[0] || (e.complete && r)
                        ? d()
                        : t
                        ? (((n = new l.Image()).onload = d),
                          (n.onerror = d),
                          a && (n.sizes = a),
                          i && (n.srcset = i),
                          t && (n.src = t))
                        : d();
                },
                preloadImages: function () {
                    var e = this;
                    function t() {
                        null != e &&
                            e &&
                            !e.destroyed &&
                            (void 0 !== e.imagesLoaded && (e.imagesLoaded += 1),
                            e.imagesLoaded === e.imagesToLoad.length &&
                                (e.params.updateOnImagesReady && e.update(),
                                e.emit("imagesReady")));
                    }
                    e.imagesToLoad = e.$el.find("img");
                    for (var i = 0; i < e.imagesToLoad.length; i += 1) {
                        var a = e.imagesToLoad[i];
                        e.loadImage(
                            a,
                            a.currentSrc || a.getAttribute("src"),
                            a.srcset || a.getAttribute("srcset"),
                            a.sizes || a.getAttribute("sizes"),
                            !0,
                            t
                        );
                    }
                },
            },
        },
        q = {},
        R = (function () {
            function t() {
                for (
                    var e, i, a = arguments.length, r = new Array(a), s = 0;
                    s < a;
                    s++
                )
                    r[s] = arguments[s];
                if (
                    (1 === r.length &&
                    r[0].constructor &&
                    "Object" ===
                        Object.prototype.toString.call(r[0]).slice(8, -1)
                        ? (i = r[0])
                        : ((e = r[0]), (i = r[1])),
                    i || (i = {}),
                    (i = E({}, i)),
                    e && !i.el && (i.el = e),
                    i.el && m(i.el).length > 1)
                ) {
                    var n = [];
                    return (
                        m(i.el).each(function (e) {
                            var a = E({}, i, { el: e });
                            n.push(new t(a));
                        }),
                        n
                    );
                }
                var o = this;
                (o.__swiper__ = !0),
                    (o.support = k()),
                    (o.device = L({ userAgent: i.userAgent })),
                    (o.browser = z()),
                    (o.eventsListeners = {}),
                    (o.eventsAnyListeners = []),
                    void 0 === o.modules && (o.modules = {}),
                    Object.keys(o.modules).forEach(function (e) {
                        var t = o.modules[e];
                        if (t.params) {
                            var a = Object.keys(t.params)[0],
                                r = t.params[a];
                            if ("object" != typeof r || null === r) return;
                            if (!(a in i) || !("enabled" in r)) return;
                            !0 === i[a] && (i[a] = { enabled: !0 }),
                                "object" != typeof i[a] ||
                                    "enabled" in i[a] ||
                                    (i[a].enabled = !0),
                                i[a] || (i[a] = { enabled: !1 });
                        }
                    });
                var l,
                    d,
                    p = E({}, F);
                return (
                    o.useParams(p),
                    (o.params = E({}, p, q, i)),
                    (o.originalParams = E({}, o.params)),
                    (o.passedParams = E({}, i)),
                    o.params &&
                        o.params.on &&
                        Object.keys(o.params.on).forEach(function (e) {
                            o.on(e, o.params.on[e]);
                        }),
                    o.params && o.params.onAny && o.onAny(o.params.onAny),
                    (o.$ = m),
                    E(o, {
                        enabled: o.params.enabled,
                        el: e,
                        classNames: [],
                        slides: m(),
                        slidesGrid: [],
                        snapGrid: [],
                        slidesSizesGrid: [],
                        isHorizontal: function () {
                            return "horizontal" === o.params.direction;
                        },
                        isVertical: function () {
                            return "vertical" === o.params.direction;
                        },
                        activeIndex: 0,
                        realIndex: 0,
                        isBeginning: !0,
                        isEnd: !1,
                        translate: 0,
                        previousTranslate: 0,
                        progress: 0,
                        velocity: 0,
                        animating: !1,
                        allowSlideNext: o.params.allowSlideNext,
                        allowSlidePrev: o.params.allowSlidePrev,
                        touchEvents:
                            ((l = [
                                "touchstart",
                                "touchmove",
                                "touchend",
                                "touchcancel",
                            ]),
                            (d = ["mousedown", "mousemove", "mouseup"]),
                            o.support.pointerEvents &&
                                (d = [
                                    "pointerdown",
                                    "pointermove",
                                    "pointerup",
                                ]),
                            (o.touchEventsTouch = {
                                start: l[0],
                                move: l[1],
                                end: l[2],
                                cancel: l[3],
                            }),
                            (o.touchEventsDesktop = {
                                start: d[0],
                                move: d[1],
                                end: d[2],
                            }),
                            o.support.touch || !o.params.simulateTouch
                                ? o.touchEventsTouch
                                : o.touchEventsDesktop),
                        touchEventsData: {
                            isTouched: void 0,
                            isMoved: void 0,
                            allowTouchCallbacks: void 0,
                            touchStartTime: void 0,
                            isScrolling: void 0,
                            currentTranslate: void 0,
                            startTranslate: void 0,
                            allowThresholdMove: void 0,
                            formElements:
                                "input, select, option, textarea, button, video, label",
                            lastClickTime: T(),
                            clickTimeout: void 0,
                            velocities: [],
                            allowMomentumBounce: void 0,
                            isTouchEvent: void 0,
                            startMoving: void 0,
                        },
                        allowClick: !0,
                        allowTouchMove: o.params.allowTouchMove,
                        touches: {
                            startX: 0,
                            startY: 0,
                            currentX: 0,
                            currentY: 0,
                            diff: 0,
                        },
                        imagesToLoad: [],
                        imagesLoaded: 0,
                    }),
                    o.useModules(),
                    o.emit("_swiper"),
                    o.params.init && o.init(),
                    o
                );
            }
            var i,
                a,
                r,
                s = t.prototype;
            return (
                (s.enable = function () {
                    var e = this;
                    e.enabled ||
                        ((e.enabled = !0),
                        e.params.grabCursor && e.setGrabCursor(),
                        e.emit("enable"));
                }),
                (s.disable = function () {
                    var e = this;
                    e.enabled &&
                        ((e.enabled = !1),
                        e.params.grabCursor && e.unsetGrabCursor(),
                        e.emit("disable"));
                }),
                (s.setProgress = function (e, t) {
                    var i = this;
                    e = Math.min(Math.max(e, 0), 1);
                    var a = i.minTranslate(),
                        r = (i.maxTranslate() - a) * e + a;
                    i.translateTo(r, void 0 === t ? 0 : t),
                        i.updateActiveIndex(),
                        i.updateSlidesClasses();
                }),
                (s.emitContainerClasses = function () {
                    var e = this;
                    if (e.params._emitClasses && e.el) {
                        var t = e.el.className.split(" ").filter(function (t) {
                            return (
                                0 === t.indexOf("swiper-container") ||
                                0 === t.indexOf(e.params.containerModifierClass)
                            );
                        });
                        e.emit("_containerClasses", t.join(" "));
                    }
                }),
                (s.getSlideClasses = function (e) {
                    var t = this;
                    return e.className
                        .split(" ")
                        .filter(function (e) {
                            return (
                                0 === e.indexOf("swiper-slide") ||
                                0 === e.indexOf(t.params.slideClass)
                            );
                        })
                        .join(" ");
                }),
                (s.emitSlidesClasses = function () {
                    var e = this;
                    if (e.params._emitClasses && e.el) {
                        var t = [];
                        e.slides.each(function (i) {
                            var a = e.getSlideClasses(i);
                            t.push({ slideEl: i, classNames: a }),
                                e.emit("_slideClass", i, a);
                        }),
                            e.emit("_slideClasses", t);
                    }
                }),
                (s.slidesPerViewDynamic = function () {
                    var e = this,
                        t = e.params,
                        i = e.slides,
                        a = e.slidesGrid,
                        r = e.size,
                        s = e.activeIndex,
                        n = 1;
                    if (t.centeredSlides) {
                        for (
                            var o, l = i[s].swiperSlideSize, d = s + 1;
                            d < i.length;
                            d += 1
                        )
                            i[d] &&
                                !o &&
                                ((n += 1),
                                (l += i[d].swiperSlideSize) > r && (o = !0));
                        for (var p = s - 1; p >= 0; p -= 1)
                            i[p] &&
                                !o &&
                                ((n += 1),
                                (l += i[p].swiperSlideSize) > r && (o = !0));
                    } else
                        for (var u = s + 1; u < i.length; u += 1)
                            a[u] - a[s] < r && (n += 1);
                    return n;
                }),
                (s.update = function () {
                    var e = this;
                    if (e && !e.destroyed) {
                        var t = e.snapGrid,
                            i = e.params;
                        i.breakpoints && e.setBreakpoint(),
                            e.updateSize(),
                            e.updateSlides(),
                            e.updateProgress(),
                            e.updateSlidesClasses(),
                            e.params.freeMode
                                ? (a(),
                                  e.params.autoHeight && e.updateAutoHeight())
                                : (("auto" === e.params.slidesPerView ||
                                      e.params.slidesPerView > 1) &&
                                  e.isEnd &&
                                  !e.params.centeredSlides
                                      ? e.slideTo(
                                            e.slides.length - 1,
                                            0,
                                            !1,
                                            !0
                                        )
                                      : e.slideTo(e.activeIndex, 0, !1, !0)) ||
                                  a(),
                            i.watchOverflow &&
                                t !== e.snapGrid &&
                                e.checkOverflow(),
                            e.emit("update");
                    }
                    function a() {
                        var t = e.rtlTranslate ? -1 * e.translate : e.translate,
                            i = Math.min(
                                Math.max(t, e.maxTranslate()),
                                e.minTranslate()
                            );
                        e.setTranslate(i),
                            e.updateActiveIndex(),
                            e.updateSlidesClasses();
                    }
                }),
                (s.changeDirection = function (e, t) {
                    void 0 === t && (t = !0);
                    var i = this,
                        a = i.params.direction;
                    return (
                        e ||
                            (e =
                                "horizontal" === a ? "vertical" : "horizontal"),
                        e === a ||
                            ("horizontal" !== e && "vertical" !== e) ||
                            (i.$el
                                .removeClass(
                                    "" + i.params.containerModifierClass + a
                                )
                                .addClass(
                                    "" + i.params.containerModifierClass + e
                                ),
                            i.emitContainerClasses(),
                            (i.params.direction = e),
                            i.slides.each(function (t) {
                                "vertical" === e
                                    ? (t.style.width = "")
                                    : (t.style.height = "");
                            }),
                            i.emit("changeDirection"),
                            t && i.update()),
                        i
                    );
                }),
                (s.mount = function (e) {
                    var t = this;
                    if (t.mounted) return !0;
                    var i,
                        a = m(e || t.params.el);
                    return (
                        !!(e = a[0]) &&
                        ((e.swiper = t),
                        e && e.shadowRoot && e.shadowRoot.querySelector
                            ? ((i = m(
                                  e.shadowRoot.querySelector(
                                      "." + t.params.wrapperClass
                                  )
                              )).children = function (e) {
                                  return a.children(e);
                              })
                            : (i = a.children("." + t.params.wrapperClass)),
                        E(t, {
                            $el: a,
                            el: e,
                            $wrapperEl: i,
                            wrapperEl: i[0],
                            mounted: !0,
                            rtl:
                                "rtl" === e.dir.toLowerCase() ||
                                "rtl" === a.css("direction"),
                            rtlTranslate:
                                "horizontal" === t.params.direction &&
                                ("rtl" === e.dir.toLowerCase() ||
                                    "rtl" === a.css("direction")),
                            wrongRTL: "-webkit-box" === i.css("display"),
                        }),
                        !0)
                    );
                }),
                (s.init = function (e) {
                    var t = this;
                    return (
                        t.initialized ||
                            !1 === t.mount(e) ||
                            (t.emit("beforeInit"),
                            t.params.breakpoints && t.setBreakpoint(),
                            t.addClasses(),
                            t.params.loop && t.loopCreate(),
                            t.updateSize(),
                            t.updateSlides(),
                            t.params.watchOverflow && t.checkOverflow(),
                            t.params.grabCursor &&
                                t.enabled &&
                                t.setGrabCursor(),
                            t.params.preloadImages && t.preloadImages(),
                            t.params.loop
                                ? t.slideTo(
                                      t.params.initialSlide + t.loopedSlides,
                                      0,
                                      t.params.runCallbacksOnInit,
                                      !1,
                                      !0
                                  )
                                : t.slideTo(
                                      t.params.initialSlide,
                                      0,
                                      t.params.runCallbacksOnInit,
                                      !1,
                                      !0
                                  ),
                            t.attachEvents(),
                            (t.initialized = !0),
                            t.emit("init"),
                            t.emit("afterInit")),
                        t
                    );
                }),
                (s.destroy = function (e, t) {
                    void 0 === e && (e = !0), void 0 === t && (t = !0);
                    var i,
                        a = this,
                        r = a.params,
                        s = a.$el,
                        n = a.$wrapperEl,
                        o = a.slides;
                    return (
                        void 0 === a.params ||
                            a.destroyed ||
                            (a.emit("beforeDestroy"),
                            (a.initialized = !1),
                            a.detachEvents(),
                            r.loop && a.loopDestroy(),
                            t &&
                                (a.removeClasses(),
                                s.removeAttr("style"),
                                n.removeAttr("style"),
                                o &&
                                    o.length &&
                                    o
                                        .removeClass(
                                            [
                                                r.slideVisibleClass,
                                                r.slideActiveClass,
                                                r.slideNextClass,
                                                r.slidePrevClass,
                                            ].join(" ")
                                        )
                                        .removeAttr("style")
                                        .removeAttr("data-swiper-slide-index")),
                            a.emit("destroy"),
                            Object.keys(a.eventsListeners).forEach(function (
                                e
                            ) {
                                a.off(e);
                            }),
                            !1 !== e &&
                                ((a.$el[0].swiper = null),
                                (i = a),
                                Object.keys(i).forEach(function (e) {
                                    try {
                                        i[e] = null;
                                    } catch (e) {}
                                    try {
                                        delete i[e];
                                    } catch (e) {}
                                })),
                            (a.destroyed = !0)),
                        null
                    );
                }),
                (t.extendDefaults = function (e) {
                    E(q, e);
                }),
                (t.installModule = function (e) {
                    t.prototype.modules || (t.prototype.modules = {});
                    var i =
                        e.name ||
                        Object.keys(t.prototype.modules).length + "_" + T();
                    t.prototype.modules[i] = e;
                }),
                (t.use = function (e) {
                    return Array.isArray(e)
                        ? (e.forEach(function (e) {
                              return t.installModule(e);
                          }),
                          t)
                        : (t.installModule(e), t);
                }),
                (i = t),
                (r = [
                    {
                        key: "extendedDefaults",
                        get: function () {
                            return q;
                        },
                    },
                    {
                        key: "defaults",
                        get: function () {
                            return F;
                        },
                    },
                ]),
                (a = null) && e(i.prototype, a),
                r && e(i, r),
                t
            );
        })();
    Object.keys(j).forEach(function (e) {
        Object.keys(j[e]).forEach(function (t) {
            R.prototype[t] = j[e][t];
        });
    }),
        R.use([O, A]);
    var W = {
            toggleEl: function (e, t) {
                e[t ? "addClass" : "removeClass"](
                    this.params.navigation.disabledClass
                ),
                    e[0] && "BUTTON" === e[0].tagName && (e[0].disabled = t);
            },
            update: function () {
                var e = this,
                    t = e.params.navigation,
                    i = e.navigation.toggleEl;
                if (!e.params.loop) {
                    var a = e.navigation,
                        r = a.$nextEl,
                        s = a.$prevEl;
                    s &&
                        s.length > 0 &&
                        (e.isBeginning ? i(s, !0) : i(s, !1),
                        e.params.watchOverflow &&
                            e.enabled &&
                            s[e.isLocked ? "addClass" : "removeClass"](
                                t.lockClass
                            )),
                        r &&
                            r.length > 0 &&
                            (e.isEnd ? i(r, !0) : i(r, !1),
                            e.params.watchOverflow &&
                                e.enabled &&
                                r[e.isLocked ? "addClass" : "removeClass"](
                                    t.lockClass
                                ));
                }
            },
            onPrevClick: function (e) {
                var t = this;
                e.preventDefault(),
                    (t.isBeginning && !t.params.loop) || t.slidePrev();
            },
            onNextClick: function (e) {
                var t = this;
                e.preventDefault(),
                    (t.isEnd && !t.params.loop) || t.slideNext();
            },
            init: function () {
                var e,
                    t,
                    i = this,
                    a = i.params.navigation;
                (a.nextEl || a.prevEl) &&
                    (a.nextEl &&
                        ((e = m(a.nextEl)),
                        i.params.uniqueNavElements &&
                            "string" == typeof a.nextEl &&
                            e.length > 1 &&
                            1 === i.$el.find(a.nextEl).length &&
                            (e = i.$el.find(a.nextEl))),
                    a.prevEl &&
                        ((t = m(a.prevEl)),
                        i.params.uniqueNavElements &&
                            "string" == typeof a.prevEl &&
                            t.length > 1 &&
                            1 === i.$el.find(a.prevEl).length &&
                            (t = i.$el.find(a.prevEl))),
                    e &&
                        e.length > 0 &&
                        e.on("click", i.navigation.onNextClick),
                    t &&
                        t.length > 0 &&
                        t.on("click", i.navigation.onPrevClick),
                    E(i.navigation, {
                        $nextEl: e,
                        nextEl: e && e[0],
                        $prevEl: t,
                        prevEl: t && t[0],
                    }),
                    i.enabled ||
                        (e && e.addClass(a.lockClass),
                        t && t.addClass(a.lockClass)));
            },
            destroy: function () {
                var e = this,
                    t = e.navigation,
                    i = t.$nextEl,
                    a = t.$prevEl;
                i &&
                    i.length &&
                    (i.off("click", e.navigation.onNextClick),
                    i.removeClass(e.params.navigation.disabledClass)),
                    a &&
                        a.length &&
                        (a.off("click", e.navigation.onPrevClick),
                        a.removeClass(e.params.navigation.disabledClass));
            },
        },
        X = {
            update: function () {
                var e = this,
                    t = e.rtl,
                    i = e.params.pagination;
                if (
                    i.el &&
                    e.pagination.el &&
                    e.pagination.$el &&
                    0 !== e.pagination.$el.length
                ) {
                    var a,
                        r =
                            e.virtual && e.params.virtual.enabled
                                ? e.virtual.slides.length
                                : e.slides.length,
                        s = e.pagination.$el,
                        n = e.params.loop
                            ? Math.ceil(
                                  (r - 2 * e.loopedSlides) /
                                      e.params.slidesPerGroup
                              )
                            : e.snapGrid.length;
                    if (
                        (e.params.loop
                            ? ((a = Math.ceil(
                                  (e.activeIndex - e.loopedSlides) /
                                      e.params.slidesPerGroup
                              )) >
                                  r - 1 - 2 * e.loopedSlides &&
                                  (a -= r - 2 * e.loopedSlides),
                              a > n - 1 && (a -= n),
                              a < 0 &&
                                  "bullets" !== e.params.paginationType &&
                                  (a = n + a))
                            : (a =
                                  void 0 !== e.snapIndex
                                      ? e.snapIndex
                                      : e.activeIndex || 0),
                        "bullets" === i.type &&
                            e.pagination.bullets &&
                            e.pagination.bullets.length > 0)
                    ) {
                        var o,
                            l,
                            d,
                            p = e.pagination.bullets;
                        if (
                            (i.dynamicBullets &&
                                ((e.pagination.bulletSize = p
                                    .eq(0)
                                    [
                                        e.isHorizontal()
                                            ? "outerWidth"
                                            : "outerHeight"
                                    ](!0)),
                                s.css(
                                    e.isHorizontal() ? "width" : "height",
                                    e.pagination.bulletSize *
                                        (i.dynamicMainBullets + 4) +
                                        "px"
                                ),
                                i.dynamicMainBullets > 1 &&
                                    void 0 !== e.previousIndex &&
                                    ((e.pagination.dynamicBulletIndex +=
                                        a - e.previousIndex),
                                    e.pagination.dynamicBulletIndex >
                                    i.dynamicMainBullets - 1
                                        ? (e.pagination.dynamicBulletIndex =
                                              i.dynamicMainBullets - 1)
                                        : e.pagination.dynamicBulletIndex < 0 &&
                                          (e.pagination.dynamicBulletIndex = 0)),
                                (o = a - e.pagination.dynamicBulletIndex),
                                (d =
                                    ((l =
                                        o +
                                        (Math.min(
                                            p.length,
                                            i.dynamicMainBullets
                                        ) -
                                            1)) +
                                        o) /
                                    2)),
                            p.removeClass(
                                i.bulletActiveClass +
                                    " " +
                                    i.bulletActiveClass +
                                    "-next " +
                                    i.bulletActiveClass +
                                    "-next-next " +
                                    i.bulletActiveClass +
                                    "-prev " +
                                    i.bulletActiveClass +
                                    "-prev-prev " +
                                    i.bulletActiveClass +
                                    "-main"
                            ),
                            s.length > 1)
                        )
                            p.each(function (e) {
                                var t = m(e),
                                    r = t.index();
                                r === a && t.addClass(i.bulletActiveClass),
                                    i.dynamicBullets &&
                                        (r >= o &&
                                            r <= l &&
                                            t.addClass(
                                                i.bulletActiveClass + "-main"
                                            ),
                                        r === o &&
                                            t
                                                .prev()
                                                .addClass(
                                                    i.bulletActiveClass +
                                                        "-prev"
                                                )
                                                .prev()
                                                .addClass(
                                                    i.bulletActiveClass +
                                                        "-prev-prev"
                                                ),
                                        r === l &&
                                            t
                                                .next()
                                                .addClass(
                                                    i.bulletActiveClass +
                                                        "-next"
                                                )
                                                .next()
                                                .addClass(
                                                    i.bulletActiveClass +
                                                        "-next-next"
                                                ));
                            });
                        else {
                            var u = p.eq(a),
                                c = u.index();
                            if (
                                (u.addClass(i.bulletActiveClass),
                                i.dynamicBullets)
                            ) {
                                for (
                                    var v = p.eq(o), f = p.eq(l), h = o;
                                    h <= l;
                                    h += 1
                                )
                                    p.eq(h).addClass(
                                        i.bulletActiveClass + "-main"
                                    );
                                if (e.params.loop)
                                    if (c >= p.length - i.dynamicMainBullets) {
                                        for (
                                            var g = i.dynamicMainBullets;
                                            g >= 0;
                                            g -= 1
                                        )
                                            p.eq(p.length - g).addClass(
                                                i.bulletActiveClass + "-main"
                                            );
                                        p.eq(
                                            p.length - i.dynamicMainBullets - 1
                                        ).addClass(
                                            i.bulletActiveClass + "-prev"
                                        );
                                    } else
                                        v
                                            .prev()
                                            .addClass(
                                                i.bulletActiveClass + "-prev"
                                            )
                                            .prev()
                                            .addClass(
                                                i.bulletActiveClass +
                                                    "-prev-prev"
                                            ),
                                            f
                                                .next()
                                                .addClass(
                                                    i.bulletActiveClass +
                                                        "-next"
                                                )
                                                .next()
                                                .addClass(
                                                    i.bulletActiveClass +
                                                        "-next-next"
                                                );
                                else
                                    v
                                        .prev()
                                        .addClass(i.bulletActiveClass + "-prev")
                                        .prev()
                                        .addClass(
                                            i.bulletActiveClass + "-prev-prev"
                                        ),
                                        f
                                            .next()
                                            .addClass(
                                                i.bulletActiveClass + "-next"
                                            )
                                            .next()
                                            .addClass(
                                                i.bulletActiveClass +
                                                    "-next-next"
                                            );
                            }
                        }
                        if (i.dynamicBullets) {
                            var b = Math.min(
                                    p.length,
                                    i.dynamicMainBullets + 4
                                ),
                                y =
                                    (e.pagination.bulletSize * b -
                                        e.pagination.bulletSize) /
                                        2 -
                                    d * e.pagination.bulletSize,
                                C = t ? "right" : "left";
                            p.css(e.isHorizontal() ? C : "top", y + "px");
                        }
                    }
                    if (
                        ("fraction" === i.type &&
                            (s
                                .find(P(i.currentClass))
                                .text(i.formatFractionCurrent(a + 1)),
                            s
                                .find(P(i.totalClass))
                                .text(i.formatFractionTotal(n))),
                        "progressbar" === i.type)
                    ) {
                        var w;
                        w = i.progressbarOpposite
                            ? e.isHorizontal()
                                ? "vertical"
                                : "horizontal"
                            : e.isHorizontal()
                            ? "horizontal"
                            : "vertical";
                        var T = (a + 1) / n,
                            S = 1,
                            x = 1;
                        "horizontal" === w ? (S = T) : (x = T),
                            s
                                .find(P(i.progressbarFillClass))
                                .transform(
                                    "translate3d(0,0,0) scaleX(" +
                                        S +
                                        ") scaleY(" +
                                        x +
                                        ")"
                                )
                                .transition(e.params.speed);
                    }
                    "custom" === i.type && i.renderCustom
                        ? (s.html(i.renderCustom(e, a + 1, n)),
                          e.emit("paginationRender", s[0]))
                        : e.emit("paginationUpdate", s[0]),
                        e.params.watchOverflow &&
                            e.enabled &&
                            s[e.isLocked ? "addClass" : "removeClass"](
                                i.lockClass
                            );
                }
            },
            render: function () {
                var e = this,
                    t = e.params.pagination;
                if (
                    t.el &&
                    e.pagination.el &&
                    e.pagination.$el &&
                    0 !== e.pagination.$el.length
                ) {
                    var i =
                            e.virtual && e.params.virtual.enabled
                                ? e.virtual.slides.length
                                : e.slides.length,
                        a = e.pagination.$el,
                        r = "";
                    if ("bullets" === t.type) {
                        var s = e.params.loop
                            ? Math.ceil(
                                  (i - 2 * e.loopedSlides) /
                                      e.params.slidesPerGroup
                              )
                            : e.snapGrid.length;
                        e.params.freeMode && !e.params.loop && s > i && (s = i);
                        for (var n = 0; n < s; n += 1)
                            t.renderBullet
                                ? (r += t.renderBullet.call(
                                      e,
                                      n,
                                      t.bulletClass
                                  ))
                                : (r +=
                                      "<" +
                                      t.bulletElement +
                                      ' class="' +
                                      t.bulletClass +
                                      '"></' +
                                      t.bulletElement +
                                      ">");
                        a.html(r),
                            (e.pagination.bullets = a.find(P(t.bulletClass)));
                    }
                    "fraction" === t.type &&
                        ((r = t.renderFraction
                            ? t.renderFraction.call(
                                  e,
                                  t.currentClass,
                                  t.totalClass
                              )
                            : '<span class="' +
                              t.currentClass +
                              '"></span> / <span class="' +
                              t.totalClass +
                              '"></span>'),
                        a.html(r)),
                        "progressbar" === t.type &&
                            ((r = t.renderProgressbar
                                ? t.renderProgressbar.call(
                                      e,
                                      t.progressbarFillClass
                                  )
                                : '<span class="' +
                                  t.progressbarFillClass +
                                  '"></span>'),
                            a.html(r)),
                        "custom" !== t.type &&
                            e.emit("paginationRender", e.pagination.$el[0]);
                }
            },
            init: function () {
                var e = this,
                    t = e.params.pagination;
                if (t.el) {
                    var i = m(t.el);
                    0 !== i.length &&
                        (e.params.uniqueNavElements &&
                            "string" == typeof t.el &&
                            i.length > 1 &&
                            (i = e.$el.find(t.el)),
                        "bullets" === t.type &&
                            t.clickable &&
                            i.addClass(t.clickableClass),
                        i.addClass(t.modifierClass + t.type),
                        "bullets" === t.type &&
                            t.dynamicBullets &&
                            (i.addClass(
                                "" + t.modifierClass + t.type + "-dynamic"
                            ),
                            (e.pagination.dynamicBulletIndex = 0),
                            t.dynamicMainBullets < 1 &&
                                (t.dynamicMainBullets = 1)),
                        "progressbar" === t.type &&
                            t.progressbarOpposite &&
                            i.addClass(t.progressbarOppositeClass),
                        t.clickable &&
                            i.on("click", P(t.bulletClass), function (t) {
                                t.preventDefault();
                                var i =
                                    m(this).index() * e.params.slidesPerGroup;
                                e.params.loop && (i += e.loopedSlides),
                                    e.slideTo(i);
                            }),
                        E(e.pagination, { $el: i, el: i[0] }),
                        e.enabled || i.addClass(t.lockClass));
                }
            },
            destroy: function () {
                var e = this,
                    t = e.params.pagination;
                if (
                    t.el &&
                    e.pagination.el &&
                    e.pagination.$el &&
                    0 !== e.pagination.$el.length
                ) {
                    var i = e.pagination.$el;
                    i.removeClass(t.hiddenClass),
                        i.removeClass(t.modifierClass + t.type),
                        e.pagination.bullets &&
                            e.pagination.bullets.removeClass(
                                t.bulletActiveClass
                            ),
                        t.clickable && i.off("click", P(t.bulletClass));
                }
            },
        },
        Y = {
            loadInSlide: function (e, t) {
                void 0 === t && (t = !0);
                var i = this,
                    a = i.params.lazy;
                if (void 0 !== e && 0 !== i.slides.length) {
                    var r =
                            i.virtual && i.params.virtual.enabled
                                ? i.$wrapperEl.children(
                                      "." +
                                          i.params.slideClass +
                                          '[data-swiper-slide-index="' +
                                          e +
                                          '"]'
                                  )
                                : i.slides.eq(e),
                        s = r.find(
                            "." +
                                a.elementClass +
                                ":not(." +
                                a.loadedClass +
                                "):not(." +
                                a.loadingClass +
                                ")"
                        );
                    !r.hasClass(a.elementClass) ||
                        r.hasClass(a.loadedClass) ||
                        r.hasClass(a.loadingClass) ||
                        s.push(r[0]),
                        0 !== s.length &&
                            s.each(function (e) {
                                var s = m(e);
                                s.addClass(a.loadingClass);
                                var n = s.attr("data-background"),
                                    o = s.attr("data-src"),
                                    l = s.attr("data-srcset"),
                                    d = s.attr("data-sizes"),
                                    p = s.parent("picture");
                                i.loadImage(
                                    s[0],
                                    o || n,
                                    l,
                                    d,
                                    !1,
                                    function () {
                                        if (
                                            null != i &&
                                            i &&
                                            (!i || i.params) &&
                                            !i.destroyed
                                        ) {
                                            if (
                                                (n
                                                    ? (s.css(
                                                          "background-image",
                                                          'url("' + n + '")'
                                                      ),
                                                      s.removeAttr(
                                                          "data-background"
                                                      ))
                                                    : (l &&
                                                          (s.attr("srcset", l),
                                                          s.removeAttr(
                                                              "data-srcset"
                                                          )),
                                                      d &&
                                                          (s.attr("sizes", d),
                                                          s.removeAttr(
                                                              "data-sizes"
                                                          )),
                                                      p.length &&
                                                          p
                                                              .children(
                                                                  "source"
                                                              )
                                                              .each(function (
                                                                  e
                                                              ) {
                                                                  var t = m(e);
                                                                  t.attr(
                                                                      "data-srcset"
                                                                  ) &&
                                                                      (t.attr(
                                                                          "srcset",
                                                                          t.attr(
                                                                              "data-srcset"
                                                                          )
                                                                      ),
                                                                      t.removeAttr(
                                                                          "data-srcset"
                                                                      ));
                                                              }),
                                                      o &&
                                                          (s.attr("src", o),
                                                          s.removeAttr(
                                                              "data-src"
                                                          ))),
                                                s
                                                    .addClass(a.loadedClass)
                                                    .removeClass(
                                                        a.loadingClass
                                                    ),
                                                r
                                                    .find(
                                                        "." + a.preloaderClass
                                                    )
                                                    .remove(),
                                                i.params.loop && t)
                                            ) {
                                                var e = r.attr(
                                                    "data-swiper-slide-index"
                                                );
                                                if (
                                                    r.hasClass(
                                                        i.params
                                                            .slideDuplicateClass
                                                    )
                                                ) {
                                                    var u =
                                                        i.$wrapperEl.children(
                                                            '[data-swiper-slide-index="' +
                                                                e +
                                                                '"]:not(.' +
                                                                i.params
                                                                    .slideDuplicateClass +
                                                                ")"
                                                        );
                                                    i.lazy.loadInSlide(
                                                        u.index(),
                                                        !1
                                                    );
                                                } else {
                                                    var c =
                                                        i.$wrapperEl.children(
                                                            "." +
                                                                i.params
                                                                    .slideDuplicateClass +
                                                                '[data-swiper-slide-index="' +
                                                                e +
                                                                '"]'
                                                        );
                                                    i.lazy.loadInSlide(
                                                        c.index(),
                                                        !1
                                                    );
                                                }
                                            }
                                            i.emit(
                                                "lazyImageReady",
                                                r[0],
                                                s[0]
                                            ),
                                                i.params.autoHeight &&
                                                    i.updateAutoHeight();
                                        }
                                    }
                                ),
                                    i.emit("lazyImageLoad", r[0], s[0]);
                            });
                }
            },
            load: function () {
                var e = this,
                    t = e.$wrapperEl,
                    i = e.params,
                    a = e.slides,
                    r = e.activeIndex,
                    s = e.virtual && i.virtual.enabled,
                    n = i.lazy,
                    o = i.slidesPerView;
                function l(e) {
                    if (s) {
                        if (
                            t.children(
                                "." +
                                    i.slideClass +
                                    '[data-swiper-slide-index="' +
                                    e +
                                    '"]'
                            ).length
                        )
                            return !0;
                    } else if (a[e]) return !0;
                    return !1;
                }
                function d(e) {
                    return s
                        ? m(e).attr("data-swiper-slide-index")
                        : m(e).index();
                }
                if (
                    ("auto" === o && (o = 0),
                    e.lazy.initialImageLoaded ||
                        (e.lazy.initialImageLoaded = !0),
                    e.params.watchSlidesVisibility)
                )
                    t.children("." + i.slideVisibleClass).each(function (t) {
                        var i = s
                            ? m(t).attr("data-swiper-slide-index")
                            : m(t).index();
                        e.lazy.loadInSlide(i);
                    });
                else if (o > 1)
                    for (var p = r; p < r + o; p += 1)
                        l(p) && e.lazy.loadInSlide(p);
                else e.lazy.loadInSlide(r);
                if (n.loadPrevNext)
                    if (
                        o > 1 ||
                        (n.loadPrevNextAmount && n.loadPrevNextAmount > 1)
                    ) {
                        for (
                            var u = n.loadPrevNextAmount,
                                c = o,
                                v = Math.min(r + c + Math.max(u, c), a.length),
                                f = Math.max(r - Math.max(c, u), 0),
                                h = r + o;
                            h < v;
                            h += 1
                        )
                            l(h) && e.lazy.loadInSlide(h);
                        for (var g = f; g < r; g += 1)
                            l(g) && e.lazy.loadInSlide(g);
                    } else {
                        var b = t.children("." + i.slideNextClass);
                        b.length > 0 && e.lazy.loadInSlide(d(b));
                        var y = t.children("." + i.slidePrevClass);
                        y.length > 0 && e.lazy.loadInSlide(d(y));
                    }
            },
            checkInViewOnLoad: function () {
                var e = o(),
                    t = this;
                if (t && !t.destroyed) {
                    var i = t.params.lazy.scrollingElement
                            ? m(t.params.lazy.scrollingElement)
                            : m(e),
                        a = i[0] === e,
                        r = a ? e.innerWidth : i[0].offsetWidth,
                        s = a ? e.innerHeight : i[0].offsetHeight,
                        n = t.$el.offset(),
                        l = !1;
                    t.rtlTranslate && (n.left -= t.$el[0].scrollLeft);
                    for (
                        var d = [
                                [n.left, n.top],
                                [n.left + t.width, n.top],
                                [n.left, n.top + t.height],
                                [n.left + t.width, n.top + t.height],
                            ],
                            p = 0;
                        p < d.length;
                        p += 1
                    ) {
                        var u = d[p];
                        if (u[0] >= 0 && u[0] <= r && u[1] >= 0 && u[1] <= s) {
                            if (0 === u[0] && 0 === u[1]) continue;
                            l = !0;
                        }
                    }
                    l
                        ? (t.lazy.load(),
                          i.off("scroll", t.lazy.checkInViewOnLoad))
                        : t.lazy.scrollHandlerAttached ||
                          ((t.lazy.scrollHandlerAttached = !0),
                          i.on("scroll", t.lazy.checkInViewOnLoad));
                }
            },
        },
        U = {
            LinearSpline: function (e, t) {
                var i,
                    a,
                    r,
                    s,
                    n,
                    o = function (e, t) {
                        for (a = -1, i = e.length; i - a > 1; )
                            e[(r = (i + a) >> 1)] <= t ? (a = r) : (i = r);
                        return i;
                    };
                return (
                    (this.x = e),
                    (this.y = t),
                    (this.lastIndex = e.length - 1),
                    (this.interpolate = function (e) {
                        return e
                            ? ((n = o(this.x, e)),
                              (s = n - 1),
                              ((e - this.x[s]) * (this.y[n] - this.y[s])) /
                                  (this.x[n] - this.x[s]) +
                                  this.y[s])
                            : 0;
                    }),
                    this
                );
            },
            getInterpolateFunction: function (e) {
                var t = this;
                t.controller.spline ||
                    (t.controller.spline = t.params.loop
                        ? new U.LinearSpline(t.slidesGrid, e.slidesGrid)
                        : new U.LinearSpline(t.snapGrid, e.snapGrid));
            },
            setTranslate: function (e, t) {
                var i,
                    a,
                    r = this,
                    s = r.controller.control,
                    n = r.constructor;
                function o(e) {
                    var t = r.rtlTranslate ? -r.translate : r.translate;
                    "slide" === r.params.controller.by &&
                        (r.controller.getInterpolateFunction(e),
                        (a = -r.controller.spline.interpolate(-t))),
                        (a && "container" !== r.params.controller.by) ||
                            ((i =
                                (e.maxTranslate() - e.minTranslate()) /
                                (r.maxTranslate() - r.minTranslate())),
                            (a =
                                (t - r.minTranslate()) * i + e.minTranslate())),
                        r.params.controller.inverse &&
                            (a = e.maxTranslate() - a),
                        e.updateProgress(a),
                        e.setTranslate(a, r),
                        e.updateActiveIndex(),
                        e.updateSlidesClasses();
                }
                if (Array.isArray(s))
                    for (var l = 0; l < s.length; l += 1)
                        s[l] !== t && s[l] instanceof n && o(s[l]);
                else s instanceof n && t !== s && o(s);
            },
            setTransition: function (e, t) {
                var i,
                    a = this,
                    r = a.constructor,
                    s = a.controller.control;
                function n(t) {
                    t.setTransition(e, a),
                        0 !== e &&
                            (t.transitionStart(),
                            t.params.autoHeight &&
                                w(function () {
                                    t.updateAutoHeight();
                                }),
                            t.$wrapperEl.transitionEnd(function () {
                                s &&
                                    (t.params.loop &&
                                        "slide" === a.params.controller.by &&
                                        t.loopFix(),
                                    t.transitionEnd());
                            }));
                }
                if (Array.isArray(s))
                    for (i = 0; i < s.length; i += 1)
                        s[i] !== t && s[i] instanceof r && n(s[i]);
                else s instanceof r && t !== s && n(s);
            },
        },
        K = {
            run: function () {
                var e = this,
                    t = e.slides.eq(e.activeIndex),
                    i = e.params.autoplay.delay;
                t.attr("data-swiper-autoplay") &&
                    (i =
                        t.attr("data-swiper-autoplay") ||
                        e.params.autoplay.delay),
                    clearTimeout(e.autoplay.timeout),
                    (e.autoplay.timeout = w(function () {
                        var t;
                        e.params.autoplay.reverseDirection
                            ? e.params.loop
                                ? (e.loopFix(),
                                  (t = e.slidePrev(e.params.speed, !0, !0)),
                                  e.emit("autoplay"))
                                : e.isBeginning
                                ? e.params.autoplay.stopOnLastSlide
                                    ? e.autoplay.stop()
                                    : ((t = e.slideTo(
                                          e.slides.length - 1,
                                          e.params.speed,
                                          !0,
                                          !0
                                      )),
                                      e.emit("autoplay"))
                                : ((t = e.slidePrev(e.params.speed, !0, !0)),
                                  e.emit("autoplay"))
                            : e.params.loop
                            ? (e.loopFix(),
                              (t = e.slideNext(e.params.speed, !0, !0)),
                              e.emit("autoplay"))
                            : e.isEnd
                            ? e.params.autoplay.stopOnLastSlide
                                ? e.autoplay.stop()
                                : ((t = e.slideTo(0, e.params.speed, !0, !0)),
                                  e.emit("autoplay"))
                            : ((t = e.slideNext(e.params.speed, !0, !0)),
                              e.emit("autoplay")),
                            ((e.params.cssMode && e.autoplay.running) ||
                                !1 === t) &&
                                e.autoplay.run();
                    }, i));
            },
            start: function () {
                var e = this;
                return (
                    void 0 === e.autoplay.timeout &&
                    !e.autoplay.running &&
                    ((e.autoplay.running = !0),
                    e.emit("autoplayStart"),
                    e.autoplay.run(),
                    !0)
                );
            },
            stop: function () {
                var e = this;
                return (
                    !!e.autoplay.running &&
                    void 0 !== e.autoplay.timeout &&
                    (e.autoplay.timeout &&
                        (clearTimeout(e.autoplay.timeout),
                        (e.autoplay.timeout = void 0)),
                    (e.autoplay.running = !1),
                    e.emit("autoplayStop"),
                    !0)
                );
            },
            pause: function (e) {
                var t = this;
                t.autoplay.running &&
                    (t.autoplay.paused ||
                        (t.autoplay.timeout && clearTimeout(t.autoplay.timeout),
                        (t.autoplay.paused = !0),
                        0 !== e && t.params.autoplay.waitForTransition
                            ? ["transitionend", "webkitTransitionEnd"].forEach(
                                  function (e) {
                                      t.$wrapperEl[0].addEventListener(
                                          e,
                                          t.autoplay.onTransitionEnd
                                      );
                                  }
                              )
                            : ((t.autoplay.paused = !1), t.autoplay.run())));
            },
            onVisibilityChange: function () {
                var e = this,
                    t = s();
                "hidden" === t.visibilityState &&
                    e.autoplay.running &&
                    e.autoplay.pause(),
                    "visible" === t.visibilityState &&
                        e.autoplay.paused &&
                        (e.autoplay.run(), (e.autoplay.paused = !1));
            },
            onTransitionEnd: function (e) {
                var t = this;
                t &&
                    !t.destroyed &&
                    t.$wrapperEl &&
                    e.target === t.$wrapperEl[0] &&
                    (["transitionend", "webkitTransitionEnd"].forEach(function (
                        e
                    ) {
                        t.$wrapperEl[0].removeEventListener(
                            e,
                            t.autoplay.onTransitionEnd
                        );
                    }),
                    (t.autoplay.paused = !1),
                    t.autoplay.running ? t.autoplay.run() : t.autoplay.stop());
            },
            onMouseEnter: function () {
                var e = this;
                e.autoplay.pause(),
                    ["transitionend", "webkitTransitionEnd"].forEach(function (
                        t
                    ) {
                        e.$wrapperEl[0].removeEventListener(
                            t,
                            e.autoplay.onTransitionEnd
                        );
                    });
            },
            onMouseLeave: function () {
                (this.autoplay.paused = !1), this.autoplay.run();
            },
            attachMouseEvents: function () {
                var e = this;
                e.params.autoplay.pauseOnMouseEnter &&
                    (e.$el.on("mouseenter", e.autoplay.onMouseEnter),
                    e.$el.on("mouseleave", e.autoplay.onMouseLeave));
            },
            detachMouseEvents: function () {
                var e = this;
                e.$el.off("mouseenter", e.autoplay.onMouseEnter),
                    e.$el.off("mouseleave", e.autoplay.onMouseLeave);
            },
        },
        J = {
            setTranslate: function () {
                for (var e = this, t = e.slides, i = 0; i < t.length; i += 1) {
                    var a = e.slides.eq(i),
                        r = -a[0].swiperSlideOffset;
                    e.params.virtualTranslate || (r -= e.translate);
                    var s = 0;
                    e.isHorizontal() || ((s = r), (r = 0));
                    var n = e.params.fadeEffect.crossFade
                        ? Math.max(1 - Math.abs(a[0].progress), 0)
                        : 1 + Math.min(Math.max(a[0].progress, -1), 0);
                    a.css({ opacity: n }).transform(
                        "translate3d(" + r + "px, " + s + "px, 0px)"
                    );
                }
            },
            setTransition: function (e) {
                var t = this,
                    i = t.slides,
                    a = t.$wrapperEl;
                if ((i.transition(e), t.params.virtualTranslate && 0 !== e)) {
                    var r = !1;
                    i.transitionEnd(function () {
                        if (!r && t && !t.destroyed) {
                            (r = !0), (t.animating = !1);
                            for (
                                var e = [
                                        "webkitTransitionEnd",
                                        "transitionend",
                                    ],
                                    i = 0;
                                i < e.length;
                                i += 1
                            )
                                a.trigger(e[i]);
                        }
                    });
                }
            },
        },
        Q = {
            init: function () {
                var e = this,
                    t = e.params.thumbs;
                if (e.thumbs.initialized) return !1;
                e.thumbs.initialized = !0;
                var i = e.constructor;
                return (
                    t.swiper instanceof i
                        ? ((e.thumbs.swiper = t.swiper),
                          E(e.thumbs.swiper.originalParams, {
                              watchSlidesProgress: !0,
                              slideToClickedSlide: !1,
                          }),
                          E(e.thumbs.swiper.params, {
                              watchSlidesProgress: !0,
                              slideToClickedSlide: !1,
                          }))
                        : x(t.swiper) &&
                          ((e.thumbs.swiper = new i(
                              E({}, t.swiper, {
                                  watchSlidesVisibility: !0,
                                  watchSlidesProgress: !0,
                                  slideToClickedSlide: !1,
                              })
                          )),
                          (e.thumbs.swiperCreated = !0)),
                    e.thumbs.swiper.$el.addClass(
                        e.params.thumbs.thumbsContainerClass
                    ),
                    e.thumbs.swiper.on("tap", e.thumbs.onThumbClick),
                    !0
                );
            },
            onThumbClick: function () {
                var e = this,
                    t = e.thumbs.swiper;
                if (t) {
                    var i = t.clickedIndex,
                        a = t.clickedSlide;
                    if (
                        !(
                            (a &&
                                m(a).hasClass(
                                    e.params.thumbs.slideThumbActiveClass
                                )) ||
                            null == i
                        )
                    ) {
                        var r;
                        if (
                            ((r = t.params.loop
                                ? parseInt(
                                      m(t.clickedSlide).attr(
                                          "data-swiper-slide-index"
                                      ),
                                      10
                                  )
                                : i),
                            e.params.loop)
                        ) {
                            var s = e.activeIndex;
                            e.slides
                                .eq(s)
                                .hasClass(e.params.slideDuplicateClass) &&
                                (e.loopFix(),
                                (e._clientLeft = e.$wrapperEl[0].clientLeft),
                                (s = e.activeIndex));
                            var n = e.slides
                                    .eq(s)
                                    .prevAll(
                                        '[data-swiper-slide-index="' + r + '"]'
                                    )
                                    .eq(0)
                                    .index(),
                                o = e.slides
                                    .eq(s)
                                    .nextAll(
                                        '[data-swiper-slide-index="' + r + '"]'
                                    )
                                    .eq(0)
                                    .index();
                            r =
                                void 0 === n
                                    ? o
                                    : void 0 === o
                                    ? n
                                    : o - s < s - n
                                    ? o
                                    : n;
                        }
                        e.slideTo(r);
                    }
                }
            },
            update: function (e) {
                var t = this,
                    i = t.thumbs.swiper;
                if (i) {
                    var a =
                            "auto" === i.params.slidesPerView
                                ? i.slidesPerViewDynamic()
                                : i.params.slidesPerView,
                        r = t.params.thumbs.autoScrollOffset,
                        s = r && !i.params.loop;
                    if (t.realIndex !== i.realIndex || s) {
                        var n,
                            o,
                            l = i.activeIndex;
                        if (i.params.loop) {
                            i.slides
                                .eq(l)
                                .hasClass(i.params.slideDuplicateClass) &&
                                (i.loopFix(),
                                (i._clientLeft = i.$wrapperEl[0].clientLeft),
                                (l = i.activeIndex));
                            var d = i.slides
                                    .eq(l)
                                    .prevAll(
                                        '[data-swiper-slide-index="' +
                                            t.realIndex +
                                            '"]'
                                    )
                                    .eq(0)
                                    .index(),
                                p = i.slides
                                    .eq(l)
                                    .nextAll(
                                        '[data-swiper-slide-index="' +
                                            t.realIndex +
                                            '"]'
                                    )
                                    .eq(0)
                                    .index();
                            (n =
                                void 0 === d
                                    ? p
                                    : void 0 === p
                                    ? d
                                    : p - l == l - d
                                    ? l
                                    : p - l < l - d
                                    ? p
                                    : d),
                                (o =
                                    t.activeIndex > t.previousIndex
                                        ? "next"
                                        : "prev");
                        } else
                            o =
                                (n = t.realIndex) > t.previousIndex
                                    ? "next"
                                    : "prev";
                        s && (n += "next" === o ? r : -1 * r),
                            i.visibleSlidesIndexes &&
                                i.visibleSlidesIndexes.indexOf(n) < 0 &&
                                (i.params.centeredSlides
                                    ? (n =
                                          n > l
                                              ? n - Math.floor(a / 2) + 1
                                              : n + Math.floor(a / 2) - 1)
                                    : n > l && (n = n - a + 1),
                                i.slideTo(n, e ? 0 : void 0));
                    }
                    var u = 1,
                        c = t.params.thumbs.slideThumbActiveClass;
                    if (
                        (t.params.slidesPerView > 1 &&
                            !t.params.centeredSlides &&
                            (u = t.params.slidesPerView),
                        t.params.thumbs.multipleActiveThumbs || (u = 1),
                        (u = Math.floor(u)),
                        i.slides.removeClass(c),
                        i.params.loop ||
                            (i.params.virtual && i.params.virtual.enabled))
                    )
                        for (var v = 0; v < u; v += 1)
                            i.$wrapperEl
                                .children(
                                    '[data-swiper-slide-index="' +
                                        (t.realIndex + v) +
                                        '"]'
                                )
                                .addClass(c);
                    else
                        for (var f = 0; f < u; f += 1)
                            i.slides.eq(t.realIndex + f).addClass(c);
                }
            },
        },
        Z = [
            {
                name: "navigation",
                params: {
                    navigation: {
                        nextEl: null,
                        prevEl: null,
                        hideOnClick: !1,
                        disabledClass: "swiper-button-disabled",
                        hiddenClass: "swiper-button-hidden",
                        lockClass: "swiper-button-lock",
                    },
                },
                create: function () {
                    M(this, { navigation: t({}, W) });
                },
                on: {
                    init: function (e) {
                        e.navigation.init(), e.navigation.update();
                    },
                    toEdge: function (e) {
                        e.navigation.update();
                    },
                    fromEdge: function (e) {
                        e.navigation.update();
                    },
                    destroy: function (e) {
                        e.navigation.destroy();
                    },
                    "enable disable": function (e) {
                        var t = e.navigation,
                            i = t.$nextEl,
                            a = t.$prevEl;
                        i &&
                            i[e.enabled ? "removeClass" : "addClass"](
                                e.params.navigation.lockClass
                            ),
                            a &&
                                a[e.enabled ? "removeClass" : "addClass"](
                                    e.params.navigation.lockClass
                                );
                    },
                    click: function (e, t) {
                        var i = e.navigation,
                            a = i.$nextEl,
                            r = i.$prevEl,
                            s = t.target;
                        if (
                            e.params.navigation.hideOnClick &&
                            !m(s).is(r) &&
                            !m(s).is(a)
                        ) {
                            if (
                                e.pagination &&
                                e.params.pagination &&
                                e.params.pagination.clickable &&
                                (e.pagination.el === s ||
                                    e.pagination.el.contains(s))
                            )
                                return;
                            var n;
                            a
                                ? (n = a.hasClass(
                                      e.params.navigation.hiddenClass
                                  ))
                                : r &&
                                  (n = r.hasClass(
                                      e.params.navigation.hiddenClass
                                  )),
                                !0 === n
                                    ? e.emit("navigationShow")
                                    : e.emit("navigationHide"),
                                a &&
                                    a.toggleClass(
                                        e.params.navigation.hiddenClass
                                    ),
                                r &&
                                    r.toggleClass(
                                        e.params.navigation.hiddenClass
                                    );
                        }
                    },
                },
            },
            {
                name: "pagination",
                params: {
                    pagination: {
                        el: null,
                        bulletElement: "span",
                        clickable: !1,
                        hideOnClick: !1,
                        renderBullet: null,
                        renderProgressbar: null,
                        renderFraction: null,
                        renderCustom: null,
                        progressbarOpposite: !1,
                        type: "bullets",
                        dynamicBullets: !1,
                        dynamicMainBullets: 1,
                        formatFractionCurrent: function (e) {
                            return e;
                        },
                        formatFractionTotal: function (e) {
                            return e;
                        },
                        bulletClass: "swiper-pagination-bullet",
                        bulletActiveClass: "swiper-pagination-bullet-active",
                        modifierClass: "swiper-pagination-",
                        currentClass: "swiper-pagination-current",
                        totalClass: "swiper-pagination-total",
                        hiddenClass: "swiper-pagination-hidden",
                        progressbarFillClass:
                            "swiper-pagination-progressbar-fill",
                        progressbarOppositeClass:
                            "swiper-pagination-progressbar-opposite",
                        clickableClass: "swiper-pagination-clickable",
                        lockClass: "swiper-pagination-lock",
                    },
                },
                create: function () {
                    M(this, { pagination: t({ dynamicBulletIndex: 0 }, X) });
                },
                on: {
                    init: function (e) {
                        e.pagination.init(),
                            e.pagination.render(),
                            e.pagination.update();
                    },
                    activeIndexChange: function (e) {
                        (e.params.loop || void 0 === e.snapIndex) &&
                            e.pagination.update();
                    },
                    snapIndexChange: function (e) {
                        e.params.loop || e.pagination.update();
                    },
                    slidesLengthChange: function (e) {
                        e.params.loop &&
                            (e.pagination.render(), e.pagination.update());
                    },
                    snapGridLengthChange: function (e) {
                        e.params.loop ||
                            (e.pagination.render(), e.pagination.update());
                    },
                    destroy: function (e) {
                        e.pagination.destroy();
                    },
                    "enable disable": function (e) {
                        var t = e.pagination.$el;
                        t &&
                            t[e.enabled ? "removeClass" : "addClass"](
                                e.params.pagination.lockClass
                            );
                    },
                    click: function (e, t) {
                        var i = t.target;
                        if (
                            e.params.pagination.el &&
                            e.params.pagination.hideOnClick &&
                            e.pagination.$el.length > 0 &&
                            !m(i).hasClass(e.params.pagination.bulletClass)
                        ) {
                            if (
                                e.navigation &&
                                ((e.navigation.nextEl &&
                                    i === e.navigation.nextEl) ||
                                    (e.navigation.prevEl &&
                                        i === e.navigation.prevEl))
                            )
                                return;
                            !0 ===
                            e.pagination.$el.hasClass(
                                e.params.pagination.hiddenClass
                            )
                                ? e.emit("paginationShow")
                                : e.emit("paginationHide"),
                                e.pagination.$el.toggleClass(
                                    e.params.pagination.hiddenClass
                                );
                        }
                    },
                },
            },
            {
                name: "lazy",
                params: {
                    lazy: {
                        checkInView: !1,
                        enabled: !1,
                        loadPrevNext: !1,
                        loadPrevNextAmount: 1,
                        loadOnTransitionStart: !1,
                        scrollingElement: "",
                        elementClass: "swiper-lazy",
                        loadingClass: "swiper-lazy-loading",
                        loadedClass: "swiper-lazy-loaded",
                        preloaderClass: "swiper-lazy-preloader",
                    },
                },
                create: function () {
                    M(this, { lazy: t({ initialImageLoaded: !1 }, Y) });
                },
                on: {
                    beforeInit: function (e) {
                        e.params.lazy.enabled &&
                            e.params.preloadImages &&
                            (e.params.preloadImages = !1);
                    },
                    init: function (e) {
                        e.params.lazy.enabled &&
                            !e.params.loop &&
                            0 === e.params.initialSlide &&
                            (e.params.lazy.checkInView
                                ? e.lazy.checkInViewOnLoad()
                                : e.lazy.load());
                    },
                    scroll: function (e) {
                        e.params.freeMode &&
                            !e.params.freeModeSticky &&
                            e.lazy.load();
                    },
                    "scrollbarDragMove resize _freeModeNoMomentumRelease":
                        function (e) {
                            e.params.lazy.enabled && e.lazy.load();
                        },
                    transitionStart: function (e) {
                        e.params.lazy.enabled &&
                            (e.params.lazy.loadOnTransitionStart ||
                                (!e.params.lazy.loadOnTransitionStart &&
                                    !e.lazy.initialImageLoaded)) &&
                            e.lazy.load();
                    },
                    transitionEnd: function (e) {
                        e.params.lazy.enabled &&
                            !e.params.lazy.loadOnTransitionStart &&
                            e.lazy.load();
                    },
                    slideChange: function (e) {
                        e.params.lazy.enabled &&
                            e.params.cssMode &&
                            e.lazy.load();
                    },
                },
            },
            {
                name: "controller",
                params: {
                    controller: { control: void 0, inverse: !1, by: "slide" },
                },
                create: function () {
                    M(this, {
                        controller: t(
                            { control: this.params.controller.control },
                            U
                        ),
                    });
                },
                on: {
                    update: function (e) {
                        e.controller.control &&
                            e.controller.spline &&
                            ((e.controller.spline = void 0),
                            delete e.controller.spline);
                    },
                    resize: function (e) {
                        e.controller.control &&
                            e.controller.spline &&
                            ((e.controller.spline = void 0),
                            delete e.controller.spline);
                    },
                    observerUpdate: function (e) {
                        e.controller.control &&
                            e.controller.spline &&
                            ((e.controller.spline = void 0),
                            delete e.controller.spline);
                    },
                    setTranslate: function (e, t, i) {
                        e.controller.control && e.controller.setTranslate(t, i);
                    },
                    setTransition: function (e, t, i) {
                        e.controller.control &&
                            e.controller.setTransition(t, i);
                    },
                },
            },
            {
                name: "autoplay",
                params: {
                    autoplay: {
                        enabled: !1,
                        delay: 3e3,
                        waitForTransition: !0,
                        disableOnInteraction: !0,
                        stopOnLastSlide: !1,
                        reverseDirection: !1,
                        pauseOnMouseEnter: !1,
                    },
                },
                create: function () {
                    M(this, {
                        autoplay: t({}, K, { running: !1, paused: !1 }),
                    });
                },
                on: {
                    init: function (e) {
                        e.params.autoplay.enabled &&
                            (e.autoplay.start(),
                            s().addEventListener(
                                "visibilitychange",
                                e.autoplay.onVisibilityChange
                            ),
                            e.autoplay.attachMouseEvents());
                    },
                    beforeTransitionStart: function (e, t, i) {
                        e.autoplay.running &&
                            (i || !e.params.autoplay.disableOnInteraction
                                ? e.autoplay.pause(t)
                                : e.autoplay.stop());
                    },
                    sliderFirstMove: function (e) {
                        e.autoplay.running &&
                            (e.params.autoplay.disableOnInteraction
                                ? e.autoplay.stop()
                                : e.autoplay.pause());
                    },
                    touchEnd: function (e) {
                        e.params.cssMode &&
                            e.autoplay.paused &&
                            !e.params.autoplay.disableOnInteraction &&
                            e.autoplay.run();
                    },
                    destroy: function (e) {
                        e.autoplay.detachMouseEvents(),
                            e.autoplay.running && e.autoplay.stop(),
                            s().removeEventListener(
                                "visibilitychange",
                                e.autoplay.onVisibilityChange
                            );
                    },
                },
            },
            {
                name: "effect-fade",
                params: { fadeEffect: { crossFade: !1 } },
                create: function () {
                    M(this, { fadeEffect: t({}, J) });
                },
                on: {
                    beforeInit: function (e) {
                        if ("fade" === e.params.effect) {
                            e.classNames.push(
                                e.params.containerModifierClass + "fade"
                            );
                            var t = {
                                slidesPerView: 1,
                                slidesPerColumn: 1,
                                slidesPerGroup: 1,
                                watchSlidesProgress: !0,
                                spaceBetween: 0,
                                virtualTranslate: !0,
                            };
                            E(e.params, t), E(e.originalParams, t);
                        }
                    },
                    setTranslate: function (e) {
                        "fade" === e.params.effect &&
                            e.fadeEffect.setTranslate();
                    },
                    setTransition: function (e, t) {
                        "fade" === e.params.effect &&
                            e.fadeEffect.setTransition(t);
                    },
                },
            },
            {
                name: "thumbs",
                params: {
                    thumbs: {
                        swiper: null,
                        multipleActiveThumbs: !0,
                        autoScrollOffset: 0,
                        slideThumbActiveClass: "swiper-slide-thumb-active",
                        thumbsContainerClass: "swiper-container-thumbs",
                    },
                },
                create: function () {
                    M(this, {
                        thumbs: t({ swiper: null, initialized: !1 }, Q),
                    });
                },
                on: {
                    beforeInit: function (e) {
                        var t = e.params.thumbs;
                        t && t.swiper && (e.thumbs.init(), e.thumbs.update(!0));
                    },
                    slideChange: function (e) {
                        e.thumbs.swiper && e.thumbs.update();
                    },
                    update: function (e) {
                        e.thumbs.swiper && e.thumbs.update();
                    },
                    resize: function (e) {
                        e.thumbs.swiper && e.thumbs.update();
                    },
                    observerUpdate: function (e) {
                        e.thumbs.swiper && e.thumbs.update();
                    },
                    setTransition: function (e, t) {
                        var i = e.thumbs.swiper;
                        i && i.setTransition(t);
                    },
                    beforeDestroy: function (e) {
                        var t = e.thumbs.swiper;
                        t && e.thumbs.swiperCreated && t && t.destroy();
                    },
                },
            },
        ];
    return R.use(Z), R;
});
