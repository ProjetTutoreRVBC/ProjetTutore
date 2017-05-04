if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript."); + function(t) {
  var e = t.fn.jquery.split(" ")[0].split(".");
  if (e[0] < 2 && e[1] < 9 || 1 == e[0] && 9 == e[1] && e[2] < 1 || e[0] >= 4) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")
}(jQuery), + function() {
  function t(t, e) {
    if (!t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
    return !e || "object" != typeof e && "function" != typeof e ? t : e
  }

  function e(t, e) {
    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function, not " + typeof e);
    t.prototype = Object.create(e && e.prototype, {
      constructor: {
        value: t,
        enumerable: !1,
        writable: !0,
        configurable: !0
      }
    }), e && (Object.setPrototypeOf ? Object.setPrototypeOf(t, e) : t.__proto__ = e)
  }

  function i(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
  }
  var n = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
      return typeof t
    } : function(t) {
      return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
    },
    s = function() {
      function t(t, e) {
        for (var i = 0; i < e.length; i++) {
          var n = e[i];
          n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
      }
      return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
      }
    }(),
    a = function(t) {
      function e(t) {
        return {}.toString.call(t).match(/\s([a-zA-Z]+)/)[1].toLowerCase()
      }

      function i(t) {
        return (t[0] || t).nodeType
      }

      function n() {
        return {
          bindType: r.end,
          delegateType: r.end,
          handle: function(e) {
            if (t(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
          }
        }
      }

      function s() {
        if (window.QUnit) return !1;
        var t = document.createElement("bootstrap");
        for (var e in l)
          if (void 0 !== t.style[e]) return {
            end: l[e]
          };
        return !1
      }

      function a(e) {
        var i = this,
          n = !1;
        return t(this).one(c.TRANSITION_END, function() {
          n = !0
        }), setTimeout(function() {
          n || c.triggerTransitionEnd(i)
        }, e), this
      }

      function o() {
        r = s(), t.fn.emulateTransitionEnd = a, c.supportsTransitionEnd() && (t.event.special[c.TRANSITION_END] = n())
      }
      var r = !1,
        h = 1e6,
        l = {
          WebkitTransition: "webkitTransitionEnd",
          MozTransition: "transitionend",
          OTransition: "oTransitionEnd otransitionend",
          transition: "transitionend"
        },
        c = {
          TRANSITION_END: "bsTransitionEnd",
          getUID: function(t) {
            do t += ~~(Math.random() * h); while (document.getElementById(t));
            return t
          },
          getSelectorFromElement: function(t) {
            var e = t.getAttribute("data-target");
            return e || (e = t.getAttribute("href") || "", e = /^#[a-z]/i.test(e) ? e : null), e
          },
          reflow: function(t) {
            return t.offsetHeight
          },
          triggerTransitionEnd: function(e) {
            t(e).trigger(r.end)
          },
          supportsTransitionEnd: function() {
            return Boolean(r)
          },
          typeCheckConfig: function(t, n, s) {
            for (var a in s)
              if (s.hasOwnProperty(a)) {
                var o = s[a],
                  r = n[a],
                  h = r && i(r) ? "element" : e(r);
                if (!new RegExp(o).test(h)) throw new Error(t.toUpperCase() + ": " + ('Option "' + a + '" provided type "' + h + '" ') + ('but expected type "' + o + '".'))
              }
          }
        };
      return o(), c
    }(jQuery),
    o = (function(t) {
      var e = "alert",
        n = "4.0.0-alpha.6",
        o = "bs.alert",
        r = "." + o,
        h = ".data-api",
        l = t.fn[e],
        c = 150,
        d = {
          DISMISS: '[data-dismiss="alert"]'
        },
        u = {
          CLOSE: "close" + r,
          CLOSED: "closed" + r,
          CLICK_DATA_API: "click" + r + h
        },
        f = {
          ALERT: "alert",
          FADE: "fade",
          SHOW: "show"
        },
        p = function() {
          function e(t) {
            i(this, e), this._element = t
          }
          return e.prototype.close = function(t) {
            t = t || this._element;
            var e = this._getRootElement(t),
              i = this._triggerCloseEvent(e);
            i.isDefaultPrevented() || this._removeElement(e)
          }, e.prototype.dispose = function() {
            t.removeData(this._element, o), this._element = null
          }, e.prototype._getRootElement = function(e) {
            var i = a.getSelectorFromElement(e),
              n = !1;
            return i && (n = t(i)[0]), n || (n = t(e).closest("." + f.ALERT)[0]), n
          }, e.prototype._triggerCloseEvent = function(e) {
            var i = t.Event(u.CLOSE);
            return t(e).trigger(i), i
          }, e.prototype._removeElement = function(e) {
            var i = this;
            return t(e).removeClass(f.SHOW), a.supportsTransitionEnd() && t(e).hasClass(f.FADE) ? void t(e).one(a.TRANSITION_END, function(t) {
              return i._destroyElement(e, t)
            }).emulateTransitionEnd(c) : void this._destroyElement(e)
          }, e.prototype._destroyElement = function(e) {
            t(e).detach().trigger(u.CLOSED).remove()
          }, e._jQueryInterface = function(i) {
            return this.each(function() {
              var n = t(this),
                s = n.data(o);
              s || (s = new e(this), n.data(o, s)), "close" === i && s[i](this)
            })
          }, e._handleDismiss = function(t) {
            return function(e) {
              e && e.preventDefault(), t.close(this)
            }
          }, s(e, null, [{
            key: "VERSION",
            get: function() {
              return n
            }
          }]), e
        }();
      return t(document).on(u.CLICK_DATA_API, d.DISMISS, p._handleDismiss(new p)), t.fn[e] = p._jQueryInterface, t.fn[e].Constructor = p, t.fn[e].noConflict = function() {
        return t.fn[e] = l, p._jQueryInterface
      }, p
    }(jQuery), function(t) {
      var e = "button",
        n = "4.0.0-alpha.6",
        a = "bs.button",
        o = "." + a,
        r = ".data-api",
        h = t.fn[e],
        l = {
          ACTIVE: "active",
          BUTTON: "btn",
          FOCUS: "focus"
        },
        c = {
          DATA_TOGGLE_CARROT: '[data-toggle^="button"]',
          DATA_TOGGLE: '[data-toggle="buttons"]',
          INPUT: "input",
          ACTIVE: ".active",
          BUTTON: ".btn"
        },
        d = {
          CLICK_DATA_API: "click" + o + r,
          FOCUS_BLUR_DATA_API: "focus" + o + r + " " + ("blur" + o + r)
        },
        u = function() {
          function e(t) {
            i(this, e), this._element = t
          }
          return e.prototype.toggle = function() {
            var e = !0,
              i = t(this._element).closest(c.DATA_TOGGLE)[0];
            if (i) {
              var n = t(this._element).find(c.INPUT)[0];
              if (n) {
                if ("radio" === n.type)
                  if (n.checked && t(this._element).hasClass(l.ACTIVE)) e = !1;
                  else {
                    var s = t(i).find(c.ACTIVE)[0];
                    s && t(s).removeClass(l.ACTIVE)
                  }
                e && (n.checked = !t(this._element).hasClass(l.ACTIVE), t(n).trigger("change")), n.focus()
              }
            }
            this._element.setAttribute("aria-pressed", !t(this._element).hasClass(l.ACTIVE)), e && t(this._element).toggleClass(l.ACTIVE)
          }, e.prototype.dispose = function() {
            t.removeData(this._element, a), this._element = null
          }, e._jQueryInterface = function(i) {
            return this.each(function() {
              var n = t(this).data(a);
              n || (n = new e(this), t(this).data(a, n)), "toggle" === i && n[i]()
            })
          }, s(e, null, [{
            key: "VERSION",
            get: function() {
              return n
            }
          }]), e
        }();
      return t(document).on(d.CLICK_DATA_API, c.DATA_TOGGLE_CARROT, function(e) {
        e.preventDefault();
        var i = e.target;
        t(i).hasClass(l.BUTTON) || (i = t(i).closest(c.BUTTON)), u._jQueryInterface.call(t(i), "toggle")
      }).on(d.FOCUS_BLUR_DATA_API, c.DATA_TOGGLE_CARROT, function(e) {
        var i = t(e.target).closest(c.BUTTON)[0];
        t(i).toggleClass(l.FOCUS, /^focus(in)?$/.test(e.type))
      }), t.fn[e] = u._jQueryInterface, t.fn[e].Constructor = u, t.fn[e].noConflict = function() {
        return t.fn[e] = h, u._jQueryInterface
      }, u
    }(jQuery), function(t) {
      var e = "carousel",
        o = "4.0.0-alpha.6",
        r = "bs.carousel",
        h = "." + r,
        l = ".data-api",
        c = t.fn[e],
        d = 600,
        u = 37,
        f = 39,
        p = {
          interval: 5e3,
          keyboard: !0,
          slide: !1,
          pause: "hover",
          wrap: !0
        },
        g = {
          interval: "(number|boolean)",
          keyboard: "boolean",
          slide: "(boolean|string)",
          pause: "(string|boolean)",
          wrap: "boolean"
        },
        _ = {
          NEXT: "next",
          PREV: "prev",
          LEFT: "left",
          RIGHT: "right"
        },
        m = {
          SLIDE: "slide" + h,
          SLID: "slid" + h,
          KEYDOWN: "keydown" + h,
          MOUSEENTER: "mouseenter" + h,
          MOUSELEAVE: "mouseleave" + h,
          LOAD_DATA_API: "load" + h + l,
          CLICK_DATA_API: "click" + h + l
        },
        v = {
          CAROUSEL: "carousel",
          ACTIVE: "active",
          SLIDE: "slide",
          RIGHT: "carousel-item-right",
          LEFT: "carousel-item-left",
          NEXT: "carousel-item-next",
          PREV: "carousel-item-prev",
          ITEM: "carousel-item"
        },
        D = {
          ACTIVE: ".active",
          ACTIVE_ITEM: ".active.carousel-item",
          ITEM: ".carousel-item",
          NEXT_PREV: ".carousel-item-next, .carousel-item-prev",
          INDICATORS: ".carousel-indicators",
          DATA_SLIDE: "[data-slide], [data-slide-to]",
          DATA_RIDE: '[data-ride="carousel"]'
        },
        y = function() {
          function l(e, n) {
            i(this, l), this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this._config = this._getConfig(n), this._element = t(e)[0], this._indicatorsElement = t(this._element).find(D.INDICATORS)[0], this._addEventListeners()
          }
          return l.prototype.next = function() {
            if (this._isSliding) throw new Error("Carousel is sliding");
            this._slide(_.NEXT)
          }, l.prototype.nextWhenVisible = function() {
            document.hidden || this.next()
          }, l.prototype.prev = function() {
            if (this._isSliding) throw new Error("Carousel is sliding");
            this._slide(_.PREVIOUS)
          }, l.prototype.pause = function(e) {
            e || (this._isPaused = !0), t(this._element).find(D.NEXT_PREV)[0] && a.supportsTransitionEnd() && (a.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
          }, l.prototype.cycle = function(t) {
            t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
          }, l.prototype.to = function(e) {
            var i = this;
            this._activeElement = t(this._element).find(D.ACTIVE_ITEM)[0];
            var n = this._getItemIndex(this._activeElement);
            if (!(e > this._items.length - 1 || e < 0)) {
              if (this._isSliding) return void t(this._element).one(m.SLID, function() {
                return i.to(e)
              });
              if (n === e) return this.pause(), void this.cycle();
              var s = e > n ? _.NEXT : _.PREVIOUS;
              this._slide(s, this._items[e])
            }
          }, l.prototype.dispose = function() {
            t(this._element).off(h), t.removeData(this._element, r), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
          }, l.prototype._getConfig = function(i) {
            return i = t.extend({}, p, i), a.typeCheckConfig(e, i, g), i
          }, l.prototype._addEventListeners = function() {
            var e = this;
            this._config.keyboard && t(this._element).on(m.KEYDOWN, function(t) {
              return e._keydown(t)
            }), "hover" !== this._config.pause || "ontouchstart" in document.documentElement || t(this._element).on(m.MOUSEENTER, function(t) {
              return e.pause(t)
            }).on(m.MOUSELEAVE, function(t) {
              return e.cycle(t)
            })
          }, l.prototype._keydown = function(t) {
            if (!/input|textarea/i.test(t.target.tagName)) switch (t.which) {
              case u:
                t.preventDefault(), this.prev();
                break;
              case f:
                t.preventDefault(), this.next();
                break;
              default:
                return
            }
          }, l.prototype._getItemIndex = function(e) {
            return this._items = t.makeArray(t(e).parent().find(D.ITEM)), this._items.indexOf(e)
          }, l.prototype._getItemByDirection = function(t, e) {
            var i = t === _.NEXT,
              n = t === _.PREVIOUS,
              s = this._getItemIndex(e),
              a = this._items.length - 1,
              o = n && 0 === s || i && s === a;
            if (o && !this._config.wrap) return e;
            var r = t === _.PREVIOUS ? -1 : 1,
              h = (s + r) % this._items.length;
            return h === -1 ? this._items[this._items.length - 1] : this._items[h]
          }, l.prototype._triggerSlideEvent = function(e, i) {
            var n = t.Event(m.SLIDE, {
              relatedTarget: e,
              direction: i
            });
            return t(this._element).trigger(n), n
          }, l.prototype._setActiveIndicatorElement = function(e) {
            if (this._indicatorsElement) {
              t(this._indicatorsElement).find(D.ACTIVE).removeClass(v.ACTIVE);
              var i = this._indicatorsElement.children[this._getItemIndex(e)];
              i && t(i).addClass(v.ACTIVE)
            }
          }, l.prototype._slide = function(e, i) {
            var n = this,
              s = t(this._element).find(D.ACTIVE_ITEM)[0],
              o = i || s && this._getItemByDirection(e, s),
              r = Boolean(this._interval),
              h = void 0,
              l = void 0,
              c = void 0;
            if (e === _.NEXT ? (h = v.LEFT, l = v.NEXT, c = _.LEFT) : (h = v.RIGHT, l = v.PREV, c = _.RIGHT), o && t(o).hasClass(v.ACTIVE)) return void(this._isSliding = !1);
            var u = this._triggerSlideEvent(o, c);
            if (!u.isDefaultPrevented() && s && o) {
              this._isSliding = !0, r && this.pause(), this._setActiveIndicatorElement(o);
              var f = t.Event(m.SLID, {
                relatedTarget: o,
                direction: c
              });
              a.supportsTransitionEnd() && t(this._element).hasClass(v.SLIDE) ? (t(o).addClass(l), a.reflow(o), t(s).addClass(h), t(o).addClass(h), t(s).one(a.TRANSITION_END, function() {
                t(o).removeClass(h + " " + l).addClass(v.ACTIVE), t(s).removeClass(v.ACTIVE + " " + l + " " + h), n._isSliding = !1, setTimeout(function() {
                  return t(n._element).trigger(f)
                }, 0)
              }).emulateTransitionEnd(d)) : (t(s).removeClass(v.ACTIVE), t(o).addClass(v.ACTIVE), this._isSliding = !1, t(this._element).trigger(f)), r && this.cycle()
            }
          }, l._jQueryInterface = function(e) {
            return this.each(function() {
              var i = t(this).data(r),
                s = t.extend({}, p, t(this).data());
              "object" === ("undefined" == typeof e ? "undefined" : n(e)) && t.extend(s, e);
              var a = "string" == typeof e ? e : s.slide;
              if (i || (i = new l(this, s), t(this).data(r, i)), "number" == typeof e) i.to(e);
              else if ("string" == typeof a) {
                if (void 0 === i[a]) throw new Error('No method named "' + a + '"');
                i[a]()
              } else s.interval && (i.pause(), i.cycle())
            })
          }, l._dataApiClickHandler = function(e) {
            var i = a.getSelectorFromElement(this);
            if (i) {
              var n = t(i)[0];
              if (n && t(n).hasClass(v.CAROUSEL)) {
                var s = t.extend({}, t(n).data(), t(this).data()),
                  o = this.getAttribute("data-slide-to");
                o && (s.interval = !1), l._jQueryInterface.call(t(n), s), o && t(n).data(r).to(o), e.preventDefault()
              }
            }
          }, s(l, null, [{
            key: "VERSION",
            get: function() {
              return o
            }
          }, {
            key: "Default",
            get: function() {
              return p
            }
          }]), l
        }();
      return t(document).on(m.CLICK_DATA_API, D.DATA_SLIDE, y._dataApiClickHandler), t(window).on(m.LOAD_DATA_API, function() {
        t(D.DATA_RIDE).each(function() {
          var e = t(this);
          y._jQueryInterface.call(e, e.data())
        })
      }), t.fn[e] = y._jQueryInterface, t.fn[e].Constructor = y, t.fn[e].noConflict = function() {
        return t.fn[e] = c, y._jQueryInterface
      }, y
    }(jQuery), function(t) {
      var e = "collapse",
        o = "4.0.0-alpha.6",
        r = "bs.collapse",
        h = "." + r,
        l = ".data-api",
        c = t.fn[e],
        d = 600,
        u = {
          toggle: !0,
          parent: ""
        },
        f = {
          toggle: "boolean",
          parent: "string"
        },
        p = {
          SHOW: "show" + h,
          SHOWN: "shown" + h,
          HIDE: "hide" + h,
          HIDDEN: "hidden" + h,
          CLICK_DATA_API: "click" + h + l
        },
        g = {
          SHOW: "show",
          COLLAPSE: "collapse",
          COLLAPSING: "collapsing",
          COLLAPSED: "collapsed"
        },
        _ = {
          WIDTH: "width",
          HEIGHT: "height"
        },
        m = {
          ACTIVES: ".card > .show, .card > .collapsing",
          DATA_TOGGLE: '[data-toggle="collapse"]'
        },
        v = function() {
          function h(e, n) {
            i(this, h), this._isTransitioning = !1, this._element = e, this._config = this._getConfig(n), this._triggerArray = t.makeArray(t('[data-toggle="collapse"][href="#' + e.id + '"],' + ('[data-toggle="collapse"][data-target="#' + e.id + '"]'))), this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
          }
          return h.prototype.toggle = function() {
            t(this._element).hasClass(g.SHOW) ? this.hide() : this.show()
          }, h.prototype.show = function() {
            var e = this;
            if (this._isTransitioning) throw new Error("Collapse is transitioning");
            if (!t(this._element).hasClass(g.SHOW)) {
              var i = void 0,
                n = void 0;
              if (this._parent && (i = t.makeArray(t(this._parent).find(m.ACTIVES)), i.length || (i = null)), !(i && (n = t(i).data(r), n && n._isTransitioning))) {
                var s = t.Event(p.SHOW);
                if (t(this._element).trigger(s), !s.isDefaultPrevented()) {
                  i && (h._jQueryInterface.call(t(i), "hide"), n || t(i).data(r, null));
                  var o = this._getDimension();
                  t(this._element).removeClass(g.COLLAPSE).addClass(g.COLLAPSING), this._element.style[o] = 0, this._element.setAttribute("aria-expanded", !0), this._triggerArray.length && t(this._triggerArray).removeClass(g.COLLAPSED).attr("aria-expanded", !0), this.setTransitioning(!0);
                  var l = function() {
                    t(e._element).removeClass(g.COLLAPSING).addClass(g.COLLAPSE).addClass(g.SHOW), e._element.style[o] = "", e.setTransitioning(!1), t(e._element).trigger(p.SHOWN)
                  };
                  if (!a.supportsTransitionEnd()) return void l();
                  var c = o[0].toUpperCase() + o.slice(1),
                    u = "scroll" + c;
                  t(this._element).one(a.TRANSITION_END, l).emulateTransitionEnd(d), this._element.style[o] = this._element[u] + "px"
                }
              }
            }
          }, h.prototype.hide = function() {
            var e = this;
            if (this._isTransitioning) throw new Error("Collapse is transitioning");
            if (t(this._element).hasClass(g.SHOW)) {
              var i = t.Event(p.HIDE);
              if (t(this._element).trigger(i), !i.isDefaultPrevented()) {
                var n = this._getDimension(),
                  s = n === _.WIDTH ? "offsetWidth" : "offsetHeight";
                this._element.style[n] = this._element[s] + "px", a.reflow(this._element), t(this._element).addClass(g.COLLAPSING).removeClass(g.COLLAPSE).removeClass(g.SHOW), this._element.setAttribute("aria-expanded", !1), this._triggerArray.length && t(this._triggerArray).addClass(g.COLLAPSED).attr("aria-expanded", !1), this.setTransitioning(!0);
                var o = function() {
                  e.setTransitioning(!1), t(e._element).removeClass(g.COLLAPSING).addClass(g.COLLAPSE).trigger(p.HIDDEN)
                };
                return this._element.style[n] = "", a.supportsTransitionEnd() ? void t(this._element).one(a.TRANSITION_END, o).emulateTransitionEnd(d) : void o()
              }
            }
          }, h.prototype.setTransitioning = function(t) {
            this._isTransitioning = t
          }, h.prototype.dispose = function() {
            t.removeData(this._element, r), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
          }, h.prototype._getConfig = function(i) {
            return i = t.extend({}, u, i), i.toggle = Boolean(i.toggle), a.typeCheckConfig(e, i, f), i
          }, h.prototype._getDimension = function() {
            var e = t(this._element).hasClass(_.WIDTH);
            return e ? _.WIDTH : _.HEIGHT
          }, h.prototype._getParent = function() {
            var e = this,
              i = t(this._config.parent)[0],
              n = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]';
            return t(i).find(n).each(function(t, i) {
              e._addAriaAndCollapsedClass(h._getTargetFromElement(i), [i])
            }), i
          }, h.prototype._addAriaAndCollapsedClass = function(e, i) {
            if (e) {
              var n = t(e).hasClass(g.SHOW);
              e.setAttribute("aria-expanded", n), i.length && t(i).toggleClass(g.COLLAPSED, !n).attr("aria-expanded", n)
            }
          }, h._getTargetFromElement = function(e) {
            var i = a.getSelectorFromElement(e);
            return i ? t(i)[0] : null
          }, h._jQueryInterface = function(e) {
            return this.each(function() {
              var i = t(this),
                s = i.data(r),
                a = t.extend({}, u, i.data(), "object" === ("undefined" == typeof e ? "undefined" : n(e)) && e);
              if (!s && a.toggle && /show|hide/.test(e) && (a.toggle = !1), s || (s = new h(this, a), i.data(r, s)), "string" == typeof e) {
                if (void 0 === s[e]) throw new Error('No method named "' + e + '"');
                s[e]()
              }
            })
          }, s(h, null, [{
            key: "VERSION",
            get: function() {
              return o
            }
          }, {
            key: "Default",
            get: function() {
              return u
            }
          }]), h
        }();
      return t(document).on(p.CLICK_DATA_API, m.DATA_TOGGLE, function(e) {
        e.preventDefault();
        var i = v._getTargetFromElement(this),
          n = t(i).data(r),
          s = n ? "toggle" : t(this).data();
        v._jQueryInterface.call(t(i), s)
      }), t.fn[e] = v._jQueryInterface, t.fn[e].Constructor = v, t.fn[e].noConflict = function() {
        return t.fn[e] = c, v._jQueryInterface
      }, v
    }(jQuery), function(t) {
      var e = "dropdown",
        n = "4.0.0-alpha.6",
        o = "bs.dropdown",
        r = "." + o,
        h = ".data-api",
        l = t.fn[e],
        c = 27,
        d = 38,
        u = 40,
        f = 3,
        p = {
          HIDE: "hide" + r,
          HIDDEN: "hidden" + r,
          SHOW: "show" + r,
          SHOWN: "shown" + r,
          CLICK: "click" + r,
          CLICK_DATA_API: "click" + r + h,
          FOCUSIN_DATA_API: "focusin" + r + h,
          KEYDOWN_DATA_API: "keydown" + r + h
        },
        g = {
          BACKDROP: "dropdown-backdrop",
          DISABLED: "disabled",
          SHOW: "show"
        },
        _ = {
          BACKDROP: ".dropdown-backdrop",
          DATA_TOGGLE: '[data-toggle="dropdown"]',
          FORM_CHILD: ".dropdown form",
          ROLE_MENU: '[role="menu"]',
          ROLE_LISTBOX: '[role="listbox"]',
          NAVBAR_NAV: ".navbar-nav",
          VISIBLE_ITEMS: '[role="menu"] li:not(.disabled) a, [role="listbox"] li:not(.disabled) a'
        },
        m = function() {
          function e(t) {
            i(this, e), this._element = t, this._addEventListeners()
          }
          return e.prototype.toggle = function() {
            if (this.disabled || t(this).hasClass(g.DISABLED)) return !1;
            var i = e._getParentFromElement(this),
              n = t(i).hasClass(g.SHOW);
            if (e._clearMenus(), n) return !1;
            if ("ontouchstart" in document.documentElement && !t(i).closest(_.NAVBAR_NAV).length) {
              var s = document.createElement("div");
              s.className = g.BACKDROP, t(s).insertBefore(this), t(s).on("click", e._clearMenus)
            }
            var a = {
                relatedTarget: this
              },
              o = t.Event(p.SHOW, a);
            return t(i).trigger(o), !o.isDefaultPrevented() && (this.focus(), this.setAttribute("aria-expanded", !0), t(i).toggleClass(g.SHOW), t(i).trigger(t.Event(p.SHOWN, a)), !1)
          }, e.prototype.dispose = function() {
            t.removeData(this._element, o), t(this._element).off(r), this._element = null
          }, e.prototype._addEventListeners = function() {
            t(this._element).on(p.CLICK, this.toggle)
          }, e._jQueryInterface = function(i) {
            return this.each(function() {
              var n = t(this).data(o);
              if (n || (n = new e(this), t(this).data(o, n)), "string" == typeof i) {
                if (void 0 === n[i]) throw new Error('No method named "' + i + '"');
                n[i].call(this)
              }
            })
          }, e._clearMenus = function(i) {
            if (!i || i.which !== f) {
              var n = t(_.BACKDROP)[0];
              n && n.parentNode.removeChild(n);
              for (var s = t.makeArray(t(_.DATA_TOGGLE)), a = 0; a < s.length; a++) {
                var o = e._getParentFromElement(s[a]),
                  r = {
                    relatedTarget: s[a]
                  };
                if (t(o).hasClass(g.SHOW) && !(i && ("click" === i.type && /input|textarea/i.test(i.target.tagName) || "focusin" === i.type) && t.contains(o, i.target))) {
                  var h = t.Event(p.HIDE, r);
                  t(o).trigger(h), h.isDefaultPrevented() || (s[a].setAttribute("aria-expanded", "false"), t(o).removeClass(g.SHOW).trigger(t.Event(p.HIDDEN, r)))
                }
              }
            }
          }, e._getParentFromElement = function(e) {
            var i = void 0,
              n = a.getSelectorFromElement(e);
            return n && (i = t(n)[0]), i || e.parentNode
          }, e._dataApiKeydownHandler = function(i) {
            if (/(38|40|27|32)/.test(i.which) && !/input|textarea/i.test(i.target.tagName) && (i.preventDefault(), i.stopPropagation(), !this.disabled && !t(this).hasClass(g.DISABLED))) {
              var n = e._getParentFromElement(this),
                s = t(n).hasClass(g.SHOW);
              if (!s && i.which !== c || s && i.which === c) {
                if (i.which === c) {
                  var a = t(n).find(_.DATA_TOGGLE)[0];
                  t(a).trigger("focus")
                }
                return void t(this).trigger("click")
              }
              var o = t(n).find(_.VISIBLE_ITEMS).get();
              if (o.length) {
                var r = o.indexOf(i.target);
                i.which === d && r > 0 && r--, i.which === u && r < o.length - 1 && r++, r < 0 && (r = 0), o[r].focus()
              }
            }
          }, s(e, null, [{
            key: "VERSION",
            get: function() {
              return n
            }
          }]), e
        }();
      return t(document).on(p.KEYDOWN_DATA_API, _.DATA_TOGGLE, m._dataApiKeydownHandler).on(p.KEYDOWN_DATA_API, _.ROLE_MENU, m._dataApiKeydownHandler).on(p.KEYDOWN_DATA_API, _.ROLE_LISTBOX, m._dataApiKeydownHandler).on(p.CLICK_DATA_API + " " + p.FOCUSIN_DATA_API, m._clearMenus).on(p.CLICK_DATA_API, _.DATA_TOGGLE, m.prototype.toggle).on(p.CLICK_DATA_API, _.FORM_CHILD, function(t) {
        t.stopPropagation()
      }), t.fn[e] = m._jQueryInterface, t.fn[e].Constructor = m, t.fn[e].noConflict = function() {
        return t.fn[e] = l, m._jQueryInterface
      }, m
    }(jQuery), function(t) {
      var e = "modal",
        o = "4.0.0-alpha.6",
        r = "bs.modal",
        h = "." + r,
        l = ".data-api",
        c = t.fn[e],
        d = 300,
        u = 150,
        f = 27,
        p = {
          backdrop: !0,
          keyboard: !0,
          focus: !0,
          show: !0
        },
        g = {
          backdrop: "(boolean|string)",
          keyboard: "boolean",
          focus: "boolean",
          show: "boolean"
        },
        _ = {
          HIDE: "hide" + h,
          HIDDEN: "hidden" + h,
          SHOW: "show" + h,
          SHOWN: "shown" + h,
          FOCUSIN: "focusin" + h,
          RESIZE: "resize" + h,
          CLICK_DISMISS: "click.dismiss" + h,
          KEYDOWN_DISMISS: "keydown.dismiss" + h,
          MOUSEUP_DISMISS: "mouseup.dismiss" + h,
          MOUSEDOWN_DISMISS: "mousedown.dismiss" + h,
          CLICK_DATA_API: "click" + h + l
        },
        m = {
          SCROLLBAR_MEASURER: "modal-scrollbar-measure",
          BACKDROP: "modal-backdrop",
          OPEN: "modal-open",
          FADE: "fade",
          SHOW: "show"
        },
        v = {
          DIALOG: ".modal-dialog",
          DATA_TOGGLE: '[data-toggle="modal"]',
          DATA_DISMISS: '[data-dismiss="modal"]',
          FIXED_CONTENT: ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top"
        },
        D = function() {
          function l(e, n) {
            i(this, l), this._config = this._getConfig(n), this._element = e, this._dialog = t(e).find(v.DIALOG)[0], this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._originalBodyPadding = 0, this._scrollbarWidth = 0
          }
          return l.prototype.toggle = function(t) {
            return this._isShown ? this.hide() : this.show(t)
          }, l.prototype.show = function(e) {
            var i = this;
            if (this._isTransitioning) throw new Error("Modal is transitioning");
            a.supportsTransitionEnd() && t(this._element).hasClass(m.FADE) && (this._isTransitioning = !0);
            var n = t.Event(_.SHOW, {
              relatedTarget: e
            });
            t(this._element).trigger(n), this._isShown || n.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), t(document.body).addClass(m.OPEN), this._setEscapeEvent(), this._setResizeEvent(), t(this._element).on(_.CLICK_DISMISS, v.DATA_DISMISS, function(t) {
              return i.hide(t)
            }), t(this._dialog).on(_.MOUSEDOWN_DISMISS, function() {
              t(i._element).one(_.MOUSEUP_DISMISS, function(e) {
                t(e.target).is(i._element) && (i._ignoreBackdropClick = !0)
              })
            }), this._showBackdrop(function() {
              return i._showElement(e)
            }))
          }, l.prototype.hide = function(e) {
            var i = this;
            if (e && e.preventDefault(), this._isTransitioning) throw new Error("Modal is transitioning");
            var n = a.supportsTransitionEnd() && t(this._element).hasClass(m.FADE);
            n && (this._isTransitioning = !0);
            var s = t.Event(_.HIDE);
            t(this._element).trigger(s), this._isShown && !s.isDefaultPrevented() && (this._isShown = !1, this._setEscapeEvent(), this._setResizeEvent(), t(document).off(_.FOCUSIN), t(this._element).removeClass(m.SHOW), t(this._element).off(_.CLICK_DISMISS), t(this._dialog).off(_.MOUSEDOWN_DISMISS), n ? t(this._element).one(a.TRANSITION_END, function(t) {
              return i._hideModal(t)
            }).emulateTransitionEnd(d) : this._hideModal())
          }, l.prototype.dispose = function() {
            t.removeData(this._element, r), t(window, document, this._element, this._backdrop).off(h), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._originalBodyPadding = null, this._scrollbarWidth = null
          }, l.prototype._getConfig = function(i) {
            return i = t.extend({}, p, i), a.typeCheckConfig(e, i, g), i
          }, l.prototype._showElement = function(e) {
            var i = this,
              n = a.supportsTransitionEnd() && t(this._element).hasClass(m.FADE);
            this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.scrollTop = 0, n && a.reflow(this._element), t(this._element).addClass(m.SHOW), this._config.focus && this._enforceFocus();
            var s = t.Event(_.SHOWN, {
                relatedTarget: e
              }),
              o = function() {
                i._config.focus && i._element.focus(), i._isTransitioning = !1, t(i._element).trigger(s)
              };
            n ? t(this._dialog).one(a.TRANSITION_END, o).emulateTransitionEnd(d) : o()
          }, l.prototype._enforceFocus = function() {
            var e = this;
            t(document).off(_.FOCUSIN).on(_.FOCUSIN, function(i) {
              document === i.target || e._element === i.target || t(e._element).has(i.target).length || e._element.focus()
            })
          }, l.prototype._setEscapeEvent = function() {
            var e = this;
            this._isShown && this._config.keyboard ? t(this._element).on(_.KEYDOWN_DISMISS, function(t) {
              t.which === f && e.hide()
            }) : this._isShown || t(this._element).off(_.KEYDOWN_DISMISS)
          }, l.prototype._setResizeEvent = function() {
            var e = this;
            this._isShown ? t(window).on(_.RESIZE, function(t) {
              return e._handleUpdate(t)
            }) : t(window).off(_.RESIZE)
          }, l.prototype._hideModal = function() {
            var e = this;
            this._element.style.display = "none", this._element.setAttribute("aria-hidden", "true"), this._isTransitioning = !1, this._showBackdrop(function() {
              t(document.body).removeClass(m.OPEN), e._resetAdjustments(), e._resetScrollbar(), t(e._element).trigger(_.HIDDEN)
            })
          }, l.prototype._removeBackdrop = function() {
            this._backdrop && (t(this._backdrop).remove(), this._backdrop = null)
          }, l.prototype._showBackdrop = function(e) {
            var i = this,
              n = t(this._element).hasClass(m.FADE) ? m.FADE : "";
            if (this._isShown && this._config.backdrop) {
              var s = a.supportsTransitionEnd() && n;
              if (this._backdrop = document.createElement("div"), this._backdrop.className = m.BACKDROP, n && t(this._backdrop).addClass(n), t(this._backdrop).appendTo(document.body), t(this._element).on(_.CLICK_DISMISS, function(t) {
                  return i._ignoreBackdropClick ? void(i._ignoreBackdropClick = !1) : void(t.target === t.currentTarget && ("static" === i._config.backdrop ? i._element.focus() : i.hide()))
                }), s && a.reflow(this._backdrop), t(this._backdrop).addClass(m.SHOW), !e) return;
              if (!s) return void e();
              t(this._backdrop).one(a.TRANSITION_END, e).emulateTransitionEnd(u)
            } else if (!this._isShown && this._backdrop) {
              t(this._backdrop).removeClass(m.SHOW);
              var o = function() {
                i._removeBackdrop(), e && e()
              };
              a.supportsTransitionEnd() && t(this._element).hasClass(m.FADE) ? t(this._backdrop).one(a.TRANSITION_END, o).emulateTransitionEnd(u) : o()
            } else e && e()
          }, l.prototype._handleUpdate = function() {
            this._adjustDialog()
          }, l.prototype._adjustDialog = function() {
            var t = this._element.scrollHeight > document.documentElement.clientHeight;
            !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px")
          }, l.prototype._resetAdjustments = function() {
            this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
          }, l.prototype._checkScrollbar = function() {
            this._isBodyOverflowing = document.body.clientWidth < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
          }, l.prototype._setScrollbar = function() {
            var e = parseInt(t(v.FIXED_CONTENT).css("padding-right") || 0, 10);
            this._originalBodyPadding = document.body.style.paddingRight || "", this._isBodyOverflowing && (document.body.style.paddingRight = e + this._scrollbarWidth + "px")
          }, l.prototype._resetScrollbar = function() {
            document.body.style.paddingRight = this._originalBodyPadding
          }, l.prototype._getScrollbarWidth = function() {
            var t = document.createElement("div");
            t.className = m.SCROLLBAR_MEASURER, document.body.appendChild(t);
            var e = t.offsetWidth - t.clientWidth;
            return document.body.removeChild(t), e
          }, l._jQueryInterface = function(e, i) {
            return this.each(function() {
              var s = t(this).data(r),
                a = t.extend({}, l.Default, t(this).data(), "object" === ("undefined" == typeof e ? "undefined" : n(e)) && e);
              if (s || (s = new l(this, a), t(this).data(r, s)), "string" == typeof e) {
                if (void 0 === s[e]) throw new Error('No method named "' + e + '"');
                s[e](i)
              } else a.show && s.show(i)
            })
          }, s(l, null, [{
            key: "VERSION",
            get: function() {
              return o
            }
          }, {
            key: "Default",
            get: function() {
              return p
            }
          }]), l
        }();
      return t(document).on(_.CLICK_DATA_API, v.DATA_TOGGLE, function(e) {
        var i = this,
          n = void 0,
          s = a.getSelectorFromElement(this);
        s && (n = t(s)[0]);
        var o = t(n).data(r) ? "toggle" : t.extend({}, t(n).data(), t(this).data());
        "A" !== this.tagName && "AREA" !== this.tagName || e.preventDefault();
        var h = t(n).one(_.SHOW, function(e) {
          e.isDefaultPrevented() || h.one(_.HIDDEN, function() {
            t(i).is(":visible") && i.focus()
          })
        });
        D._jQueryInterface.call(t(n), o, this)
      }), t.fn[e] = D._jQueryInterface, t.fn[e].Constructor = D, t.fn[e].noConflict = function() {
        return t.fn[e] = c, D._jQueryInterface
      }, D
    }(jQuery), function(t) {
      if ("undefined" == typeof Tether) throw new Error("Bootstrap tooltips require Tether (http://tether.io/)");
      var e = "tooltip",
        o = "4.0.0-alpha.6",
        r = "bs.tooltip",
        h = "." + r,
        l = t.fn[e],
        c = 150,
        d = "bs-tether",
        u = {
          animation: !0,
          template: '<div class="tooltip" role="tooltip"><div class="tooltip-inner"></div></div>',
          trigger: "hover focus",
          title: "",
          delay: 0,
          html: !1,
          selector: !1,
          placement: "top",
          offset: "0 0",
          constraints: [],
          container: !1
        },
        f = {
          animation: "boolean",
          template: "string",
          title: "(string|element|function)",
          trigger: "string",
          delay: "(number|object)",
          html: "boolean",
          selector: "(string|boolean)",
          placement: "(string|function)",
          offset: "string",
          constraints: "array",
          container: "(string|element|boolean)"
        },
        p = {
          TOP: "bottom center",
          RIGHT: "middle left",
          BOTTOM: "top center",
          LEFT: "middle right"
        },
        g = {
          SHOW: "show",
          OUT: "out"
        },
        _ = {
          HIDE: "hide" + h,
          HIDDEN: "hidden" + h,
          SHOW: "show" + h,
          SHOWN: "shown" + h,
          INSERTED: "inserted" + h,
          CLICK: "click" + h,
          FOCUSIN: "focusin" + h,
          FOCUSOUT: "focusout" + h,
          MOUSEENTER: "mouseenter" + h,
          MOUSELEAVE: "mouseleave" + h
        },
        m = {
          FADE: "fade",
          SHOW: "show"
        },
        v = {
          TOOLTIP: ".tooltip",
          TOOLTIP_INNER: ".tooltip-inner"
        },
        D = {
          element: !1,
          enabled: !1
        },
        y = {
          HOVER: "hover",
          FOCUS: "focus",
          CLICK: "click",
          MANUAL: "manual"
        },
        T = function() {
          function l(t, e) {
            i(this, l), this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._isTransitioning = !1, this._tether = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners()
          }
          return l.prototype.enable = function() {
            this._isEnabled = !0
          }, l.prototype.disable = function() {
            this._isEnabled = !1
          }, l.prototype.toggleEnabled = function() {
            this._isEnabled = !this._isEnabled
          }, l.prototype.toggle = function(e) {
            if (e) {
              var i = this.constructor.DATA_KEY,
                n = t(e.currentTarget).data(i);
              n || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(i, n)), n._activeTrigger.click = !n._activeTrigger.click, n._isWithActiveTrigger() ? n._enter(null, n) : n._leave(null, n)
            } else {
              if (t(this.getTipElement()).hasClass(m.SHOW)) return void this._leave(null, this);
              this._enter(null, this)
            }
          }, l.prototype.dispose = function() {
            clearTimeout(this._timeout), this.cleanupTether(), t.removeData(this.element, this.constructor.DATA_KEY), t(this.element).off(this.constructor.EVENT_KEY), t(this.element).closest(".modal").off("hide.bs.modal"), this.tip && t(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, this._tether = null, this.element = null, this.config = null, this.tip = null
          }, l.prototype.show = function() {
            var e = this;
            if ("none" === t(this.element).css("display")) throw new Error("Please use show on visible elements");
            var i = t.Event(this.constructor.Event.SHOW);
            if (this.isWithContent() && this._isEnabled) {
              if (this._isTransitioning) throw new Error("Tooltip is transitioning");
              t(this.element).trigger(i);
              var n = t.contains(this.element.ownerDocument.documentElement, this.element);
              if (i.isDefaultPrevented() || !n) return;
              var s = this.getTipElement(),
                o = a.getUID(this.constructor.NAME);
              s.setAttribute("id", o), this.element.setAttribute("aria-describedby", o), this.setContent(), this.config.animation && t(s).addClass(m.FADE);
              var r = "function" == typeof this.config.placement ? this.config.placement.call(this, s, this.element) : this.config.placement,
                h = this._getAttachment(r),
                c = this.config.container === !1 ? document.body : t(this.config.container);
              t(s).data(this.constructor.DATA_KEY, this).appendTo(c), t(this.element).trigger(this.constructor.Event.INSERTED), this._tether = new Tether({
                attachment: h,
                element: s,
                target: this.element,
                classes: D,
                classPrefix: d,
                offset: this.config.offset,
                constraints: this.config.constraints,
                addTargetClasses: !1
              }), a.reflow(s), this._tether.position(), t(s).addClass(m.SHOW);
              var u = function() {
                var i = e._hoverState;
                e._hoverState = null, e._isTransitioning = !1, t(e.element).trigger(e.constructor.Event.SHOWN), i === g.OUT && e._leave(null, e);
              };
              if (a.supportsTransitionEnd() && t(this.tip).hasClass(m.FADE)) return this._isTransitioning = !0, void t(this.tip).one(a.TRANSITION_END, u).emulateTransitionEnd(l._TRANSITION_DURATION);
              u()
            }
          }, l.prototype.hide = function(e) {
            var i = this,
              n = this.getTipElement(),
              s = t.Event(this.constructor.Event.HIDE);
            if (this._isTransitioning) throw new Error("Tooltip is transitioning");
            var o = function() {
              i._hoverState !== g.SHOW && n.parentNode && n.parentNode.removeChild(n), i.element.removeAttribute("aria-describedby"), t(i.element).trigger(i.constructor.Event.HIDDEN), i._isTransitioning = !1, i.cleanupTether(), e && e()
            };
            t(this.element).trigger(s), s.isDefaultPrevented() || (t(n).removeClass(m.SHOW), this._activeTrigger[y.CLICK] = !1, this._activeTrigger[y.FOCUS] = !1, this._activeTrigger[y.HOVER] = !1, a.supportsTransitionEnd() && t(this.tip).hasClass(m.FADE) ? (this._isTransitioning = !0, t(n).one(a.TRANSITION_END, o).emulateTransitionEnd(c)) : o(), this._hoverState = "")
          }, l.prototype.isWithContent = function() {
            return Boolean(this.getTitle())
          }, l.prototype.getTipElement = function() {
            return this.tip = this.tip || t(this.config.template)[0]
          }, l.prototype.setContent = function() {
            var e = t(this.getTipElement());
            this.setElementContent(e.find(v.TOOLTIP_INNER), this.getTitle()), e.removeClass(m.FADE + " " + m.SHOW), this.cleanupTether()
          }, l.prototype.setElementContent = function(e, i) {
            var s = this.config.html;
            "object" === ("undefined" == typeof i ? "undefined" : n(i)) && (i.nodeType || i.jquery) ? s ? t(i).parent().is(e) || e.empty().append(i) : e.text(t(i).text()): e[s ? "html" : "text"](i)
          }, l.prototype.getTitle = function() {
            var t = this.element.getAttribute("data-original-title");
            return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t
          }, l.prototype.cleanupTether = function() {
            this._tether && this._tether.destroy()
          }, l.prototype._getAttachment = function(t) {
            return p[t.toUpperCase()]
          }, l.prototype._setListeners = function() {
            var e = this,
              i = this.config.trigger.split(" ");
            i.forEach(function(i) {
              if ("click" === i) t(e.element).on(e.constructor.Event.CLICK, e.config.selector, function(t) {
                return e.toggle(t)
              });
              else if (i !== y.MANUAL) {
                var n = i === y.HOVER ? e.constructor.Event.MOUSEENTER : e.constructor.Event.FOCUSIN,
                  s = i === y.HOVER ? e.constructor.Event.MOUSELEAVE : e.constructor.Event.FOCUSOUT;
                t(e.element).on(n, e.config.selector, function(t) {
                  return e._enter(t)
                }).on(s, e.config.selector, function(t) {
                  return e._leave(t)
                })
              }
              t(e.element).closest(".modal").on("hide.bs.modal", function() {
                return e.hide()
              })
            }), this.config.selector ? this.config = t.extend({}, this.config, {
              trigger: "manual",
              selector: ""
            }) : this._fixTitle()
          }, l.prototype._fixTitle = function() {
            var t = n(this.element.getAttribute("data-original-title"));
            (this.element.getAttribute("title") || "string" !== t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
          }, l.prototype._enter = function(e, i) {
            var n = this.constructor.DATA_KEY;
            return i = i || t(e.currentTarget).data(n), i || (i = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(n, i)), e && (i._activeTrigger["focusin" === e.type ? y.FOCUS : y.HOVER] = !0), t(i.getTipElement()).hasClass(m.SHOW) || i._hoverState === g.SHOW ? void(i._hoverState = g.SHOW) : (clearTimeout(i._timeout), i._hoverState = g.SHOW, i.config.delay && i.config.delay.show ? void(i._timeout = setTimeout(function() {
              i._hoverState === g.SHOW && i.show()
            }, i.config.delay.show)) : void i.show())
          }, l.prototype._leave = function(e, i) {
            var n = this.constructor.DATA_KEY;
            if (i = i || t(e.currentTarget).data(n), i || (i = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(n, i)), e && (i._activeTrigger["focusout" === e.type ? y.FOCUS : y.HOVER] = !1), !i._isWithActiveTrigger()) return clearTimeout(i._timeout), i._hoverState = g.OUT, i.config.delay && i.config.delay.hide ? void(i._timeout = setTimeout(function() {
              i._hoverState === g.OUT && i.hide()
            }, i.config.delay.hide)) : void i.hide()
          }, l.prototype._isWithActiveTrigger = function() {
            for (var t in this._activeTrigger)
              if (this._activeTrigger[t]) return !0;
            return !1
          }, l.prototype._getConfig = function(i) {
            return i = t.extend({}, this.constructor.Default, t(this.element).data(), i), i.delay && "number" == typeof i.delay && (i.delay = {
              show: i.delay,
              hide: i.delay
            }), a.typeCheckConfig(e, i, this.constructor.DefaultType), i
          }, l.prototype._getDelegateConfig = function() {
            var t = {};
            if (this.config)
              for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
            return t
          }, l._jQueryInterface = function(e) {
            return this.each(function() {
              var i = t(this).data(r),
                s = "object" === ("undefined" == typeof e ? "undefined" : n(e)) && e;
              if ((i || !/dispose|hide/.test(e)) && (i || (i = new l(this, s), t(this).data(r, i)), "string" == typeof e)) {
                if (void 0 === i[e]) throw new Error('No method named "' + e + '"');
                i[e]()
              }
            })
          }, s(l, null, [{
            key: "VERSION",
            get: function() {
              return o
            }
          }, {
            key: "Default",
            get: function() {
              return u
            }
          }, {
            key: "NAME",
            get: function() {
              return e
            }
          }, {
            key: "DATA_KEY",
            get: function() {
              return r
            }
          }, {
            key: "Event",
            get: function() {
              return _
            }
          }, {
            key: "EVENT_KEY",
            get: function() {
              return h
            }
          }, {
            key: "DefaultType",
            get: function() {
              return f
            }
          }]), l
        }();
      return t.fn[e] = T._jQueryInterface, t.fn[e].Constructor = T, t.fn[e].noConflict = function() {
        return t.fn[e] = l, T._jQueryInterface
      }, T
    }(jQuery));
  (function(a) {
    var r = "popover",
      h = "4.0.0-alpha.6",
      l = "bs.popover",
      c = "." + l,
      d = a.fn[r],
      u = a.extend({}, o.Default, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover" role="tooltip"><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
      }),
      f = a.extend({}, o.DefaultType, {
        content: "(string|element|function)"
      }),
      p = {
        FADE: "fade",
        SHOW: "show"
      },
      g = {
        TITLE: ".popover-title",
        CONTENT: ".popover-content"
      },
      _ = {
        HIDE: "hide" + c,
        HIDDEN: "hidden" + c,
        SHOW: "show" + c,
        SHOWN: "shown" + c,
        INSERTED: "inserted" + c,
        CLICK: "click" + c,
        FOCUSIN: "focusin" + c,
        FOCUSOUT: "focusout" + c,
        MOUSEENTER: "mouseenter" + c,
        MOUSELEAVE: "mouseleave" + c
      },
      m = function(o) {
        function d() {
          return i(this, d), t(this, o.apply(this, arguments))
        }
        return e(d, o), d.prototype.isWithContent = function() {
          return this.getTitle() || this._getContent()
        }, d.prototype.getTipElement = function() {
          return this.tip = this.tip || a(this.config.template)[0]
        }, d.prototype.setContent = function() {
          var t = a(this.getTipElement());
          this.setElementContent(t.find(g.TITLE), this.getTitle()), this.setElementContent(t.find(g.CONTENT), this._getContent()), t.removeClass(p.FADE + " " + p.SHOW), this.cleanupTether()
        }, d.prototype._getContent = function() {
          return this.element.getAttribute("data-content") || ("function" == typeof this.config.content ? this.config.content.call(this.element) : this.config.content)
        }, d._jQueryInterface = function(t) {
          return this.each(function() {
            var e = a(this).data(l),
              i = "object" === ("undefined" == typeof t ? "undefined" : n(t)) ? t : null;
            if ((e || !/destroy|hide/.test(t)) && (e || (e = new d(this, i), a(this).data(l, e)), "string" == typeof t)) {
              if (void 0 === e[t]) throw new Error('No method named "' + t + '"');
              e[t]()
            }
          })
        }, s(d, null, [{
          key: "VERSION",
          get: function() {
            return h
          }
        }, {
          key: "Default",
          get: function() {
            return u
          }
        }, {
          key: "NAME",
          get: function() {
            return r
          }
        }, {
          key: "DATA_KEY",
          get: function() {
            return l
          }
        }, {
          key: "Event",
          get: function() {
            return _
          }
        }, {
          key: "EVENT_KEY",
          get: function() {
            return c
          }
        }, {
          key: "DefaultType",
          get: function() {
            return f
          }
        }]), d
      }(o);
    return a.fn[r] = m._jQueryInterface, a.fn[r].Constructor = m, a.fn[r].noConflict = function() {
      return a.fn[r] = d, m._jQueryInterface
    }, m
  })(jQuery),
  function(t) {
    var e = "scrollspy",
      o = "4.0.0-alpha.6",
      r = "bs.scrollspy",
      h = "." + r,
      l = ".data-api",
      c = t.fn[e],
      d = {
        offset: 10,
        method: "auto",
        target: ""
      },
      u = {
        offset: "number",
        method: "string",
        target: "(string|element)",
        children: "string"
      },
      f = {
        ACTIVATE: "activate" + h,
        SCROLL: "scroll" + h,
        LOAD_DATA_API: "load" + h + l
      },
      p = {
        DROPDOWN_ITEM: "dropdown-item",
        DROPDOWN_MENU: "dropdown-menu",
        NAV_LINK: "nav-link",
        NAV: "nav",
        ACTIVE: "active"
      },
      g = {
        DATA_SPY: '[data-spy="scroll"]',
        ACTIVE: ".active",
        LIST_ITEM: ".list-item",
        LI: "li",
        LI_DROPDOWN: "li.dropdown",
        NAV_LINKS: ".nav-link",
        DROPDOWN: ".dropdown",
        DROPDOWN_ITEMS: ".dropdown-item",
        DROPDOWN_TOGGLE: ".dropdown-toggle"
      },
      _ = {
        OFFSET: "offset",
        POSITION: "position"
      },
      m = function() {
        function l(e, n) {
          var s = this;
          i(this, l), this._element = e, this._scrollElement = "BODY" === e.tagName ? window : e, this._config = this._getConfig(n), this._selector = this._config.children ? this._config.target + " " + this._config.children : this._config.target + " " + g.NAV_LINKS + "," + (this._config.target + " " + g.DROPDOWN_ITEMS), this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, t(this._scrollElement).on(f.SCROLL, function(t) {
            return s._process(t)
          }), this.refresh(), this._process()
        }
        return l.prototype.refresh = function() {
          var e = this,
            i = this._scrollElement !== this._scrollElement.window ? _.POSITION : _.OFFSET,
            n = "auto" === this._config.method ? i : this._config.method,
            s = n === _.POSITION ? this._getScrollTop() : 0;
          this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight();
          var o = t.makeArray(t(this._selector));
          o.map(function(e) {
            var i = void 0,
              o = a.getSelectorFromElement(e);
            return o && (i = t(o)[0]), i && (i.offsetWidth || i.offsetHeight) ? [t(i)[n]().top + s, o] : null
          }).filter(function(t) {
            return t
          }).sort(function(t, e) {
            return t[0] - e[0]
          }).forEach(function(t) {
            e._offsets.push(t[0]), e._targets.push(t[1])
          })
        }, l.prototype.dispose = function() {
          t.removeData(this._element, r), t(this._scrollElement).off(h), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
        }, l.prototype._getConfig = function(i) {
          if (i = t.extend({}, d, i), "string" != typeof i.target) {
            var n = t(i.target).attr("id");
            n || (n = a.getUID(e), t(i.target).attr("id", n)), i.target = "#" + n
          }
          return a.typeCheckConfig(e, i, u), i
        }, l.prototype._getScrollTop = function() {
          return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
        }, l.prototype._getScrollHeight = function() {
          return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
        }, l.prototype._getOffsetHeight = function() {
          return this._scrollElement === window ? window.innerHeight : this._scrollElement.offsetHeight
        }, l.prototype._process = function() {
          var t = this._getScrollTop() + this._config.offset,
            e = this._getScrollHeight(),
            i = this._config.offset + e - this._getOffsetHeight();
          if (this._scrollHeight !== e && this.refresh(), t >= i) {
            var n = this._targets[this._targets.length - 1];
            return void(this._activeTarget !== n && this._activate(n))
          }
          if (this._activeTarget && t < this._offsets[0] && this._offsets[0] > 0) return this._activeTarget = null, void this._clear();
          for (var s = this._offsets.length; s--;) {
            var a = this._activeTarget !== this._targets[s] && t >= this._offsets[s] && (void 0 === this._offsets[s + 1] || t < this._offsets[s + 1]);
            a && this._activate(this._targets[s])
          }
        }, l.prototype._activate = function(e) {
          this._activeTarget = e, this._clear();
          var i = this._selector.split(",");
          i = i.map(function(t) {
            return t + '[data-target="' + e + '"],' + (t + '[href="' + e + '"]')
          });
          var n = t(i.join(","));
          if (n.hasClass(p.DROPDOWN_ITEM)) n.closest(g.DROPDOWN).find(g.DROPDOWN_TOGGLE).addClass(p.ACTIVE), n.addClass(p.ACTIVE);
          else {
            var s = n.parents(g.LI);
            s.each(function() {
              t(this).find("> .nav-link").addClass(p.ACTIVE)
            })
          }
          t(this._scrollElement).trigger(f.ACTIVATE, {
            relatedTarget: e
          })
        }, l.prototype._clear = function() {
          t(this._selector).filter(g.ACTIVE).removeClass(p.ACTIVE)
        }, l._jQueryInterface = function(e) {
          return this.each(function() {
            var i = t(this).data(r),
              s = "object" === ("undefined" == typeof e ? "undefined" : n(e)) && e;
            if (i || (i = new l(this, s), t(this).data(r, i)), "string" == typeof e) {
              if (void 0 === i[e]) throw new Error('No method named "' + e + '"');
              i[e]()
            }
          })
        }, s(l, null, [{
          key: "VERSION",
          get: function() {
            return o
          }
        }, {
          key: "Default",
          get: function() {
            return d
          }
        }]), l
      }();
    return t(window).on(f.LOAD_DATA_API, function() {
      for (var e = t.makeArray(t(g.DATA_SPY)), i = e.length; i--;) {
        var n = t(e[i]);
        m._jQueryInterface.call(n, n.data())
      }
    }), t.fn[e] = m._jQueryInterface, t.fn[e].Constructor = m, t.fn[e].noConflict = function() {
      return t.fn[e] = c, m._jQueryInterface
    }, m
  }(jQuery),
  function(t) {
    var e = "tab",
      n = "4.0.0-alpha.6",
      o = "bs.tab",
      r = "." + o,
      h = ".data-api",
      l = t.fn[e],
      c = 150,
      d = {
        HIDE: "hide" + r,
        HIDDEN: "hidden" + r,
        SHOW: "show" + r,
        SHOWN: "shown" + r,
        CLICK_DATA_API: "click" + r + h
      },
      u = {
        DROPDOWN_MENU: "dropdown-menu",
        ACTIVE: "active",
        DISABLED: "disabled",
        FADE: "fade",
        SHOW: "show"
      },
      f = {
        A: "a",
        LI: "li",
        DROPDOWN: ".dropdown",
        LIST: "ul:not(.dropdown-menu), ol:not(.dropdown-menu), nav:not(.dropdown-menu)",
        FADE_CHILD: "> .nav-item .fade, > .fade",
        ACTIVE: ".active",
        ACTIVE_CHILD: "> .nav-item > .active, > .active",
        DATA_TOGGLE: '[data-toggle="tab"], [data-toggle="pill"]',
        DROPDOWN_TOGGLE: ".dropdown-toggle",
        DROPDOWN_ACTIVE_CHILD: "> .dropdown-menu .active"
      },
      p = function() {
        function e(t) {
          i(this, e), this._element = t
        }
        return e.prototype.show = function() {
          var e = this;
          if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && t(this._element).hasClass(u.ACTIVE) || t(this._element).hasClass(u.DISABLED))) {
            var i = void 0,
              n = void 0,
              s = t(this._element).closest(f.LIST)[0],
              o = a.getSelectorFromElement(this._element);
            s && (n = t.makeArray(t(s).find(f.ACTIVE)), n = n[n.length - 1]);
            var r = t.Event(d.HIDE, {
                relatedTarget: this._element
              }),
              h = t.Event(d.SHOW, {
                relatedTarget: n
              });
            if (n && t(n).trigger(r), t(this._element).trigger(h), !h.isDefaultPrevented() && !r.isDefaultPrevented()) {
              o && (i = t(o)[0]), this._activate(this._element, s);
              var l = function() {
                var i = t.Event(d.HIDDEN, {
                    relatedTarget: e._element
                  }),
                  s = t.Event(d.SHOWN, {
                    relatedTarget: n
                  });
                t(n).trigger(i), t(e._element).trigger(s)
              };
              i ? this._activate(i, i.parentNode, l) : l()
            }
          }
        }, e.prototype.dispose = function() {
          t.removeClass(this._element, o), this._element = null
        }, e.prototype._activate = function(e, i, n) {
          var s = this,
            o = t(i).find(f.ACTIVE_CHILD)[0],
            r = n && a.supportsTransitionEnd() && (o && t(o).hasClass(u.FADE) || Boolean(t(i).find(f.FADE_CHILD)[0])),
            h = function() {
              return s._transitionComplete(e, o, r, n)
            };
          o && r ? t(o).one(a.TRANSITION_END, h).emulateTransitionEnd(c) : h(), o && t(o).removeClass(u.SHOW)
        }, e.prototype._transitionComplete = function(e, i, n, s) {
          if (i) {
            t(i).removeClass(u.ACTIVE);
            var o = t(i.parentNode).find(f.DROPDOWN_ACTIVE_CHILD)[0];
            o && t(o).removeClass(u.ACTIVE), i.setAttribute("aria-expanded", !1)
          }
          if (t(e).addClass(u.ACTIVE), e.setAttribute("aria-expanded", !0), n ? (a.reflow(e), t(e).addClass(u.SHOW)) : t(e).removeClass(u.FADE), e.parentNode && t(e.parentNode).hasClass(u.DROPDOWN_MENU)) {
            var r = t(e).closest(f.DROPDOWN)[0];
            r && t(r).find(f.DROPDOWN_TOGGLE).addClass(u.ACTIVE), e.setAttribute("aria-expanded", !0)
          }
          s && s()
        }, e._jQueryInterface = function(i) {
          return this.each(function() {
            var n = t(this),
              s = n.data(o);
            if (s || (s = new e(this), n.data(o, s)), "string" == typeof i) {
              if (void 0 === s[i]) throw new Error('No method named "' + i + '"');
              s[i]()
            }
          })
        }, s(e, null, [{
          key: "VERSION",
          get: function() {
            return n
          }
        }]), e
      }();
    return t(document).on(d.CLICK_DATA_API, f.DATA_TOGGLE, function(e) {
      e.preventDefault(), p._jQueryInterface.call(t(this), "show")
    }), t.fn[e] = p._jQueryInterface, t.fn[e].Constructor = p, t.fn[e].noConflict = function() {
      return t.fn[e] = l, p._jQueryInterface
    }, p
  }(jQuery) + function(t) {
    "use strict";

    function e(e) {
      return this.each(function() {
        var s = t(this),
          a = s.data("bs.affix"),
          o = "object" == ("undefined" == typeof e ? "undefined" : n(e)) && e;
        a || s.data("bs.affix", a = new i(this, o)), "string" == typeof e && a[e]()
      })
    }
    var i = function a(e, i) {
      this.options = t.extend({}, a.DEFAULTS, i), this.$target = t(this.options.target).on("scroll.bs.affix.data-api", t.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", t.proxy(this.checkPositionWithEventLoop, this)), this.$element = t(e), this.affixed = null, this.unpin = null, this.pinnedOffset = null, this.checkPosition()
    };
    i.VERSION = "3.3.6", i.RESET = "affix affix-top affix-bottom", i.DEFAULTS = {
      offset: 0,
      target: window
    }, i.prototype.getState = function(t, e, i, n) {
      var s = this.$target.scrollTop(),
        a = this.$element.offset(),
        o = this.$target.height();
      if (null != i && "top" == this.affixed) return s < i && "top";
      if ("bottom" == this.affixed) return null != i ? !(s + this.unpin <= a.top) && "bottom" : !(s + o <= t - n) && "bottom";
      var r = null == this.affixed,
        h = r ? s : a.top,
        l = r ? o : e;
      return null != i && s <= i ? "top" : null != n && h + l >= t - n && "bottom"
    }, i.prototype.getPinnedOffset = function() {
      if (this.pinnedOffset) return this.pinnedOffset;
      this.$element.removeClass(i.RESET).addClass("affix");
      var t = this.$target.scrollTop(),
        e = this.$element.offset();
      return this.pinnedOffset = e.top - t
    }, i.prototype.checkPositionWithEventLoop = function() {
      setTimeout(t.proxy(this.checkPosition, this), 1)
    }, i.prototype.checkPosition = function() {
      if (this.$element.is(":visible")) {
        var e = this.$element.height(),
          s = this.options.offset,
          a = s.top,
          o = s.bottom,
          r = Math.max(t(document).height(), t(document.body).height());
        "object" != ("undefined" == typeof s ? "undefined" : n(s)) && (o = a = s), "function" == typeof a && (a = s.top(this.$element)), "function" == typeof o && (o = s.bottom(this.$element));
        var h = this.getState(r, e, a, o);
        if (this.affixed != h) {
          null != this.unpin && this.$element.css("top", "");
          var l = "affix" + (h ? "-" + h : ""),
            c = t.Event(l + ".bs.affix");
          if (this.$element.trigger(c), c.isDefaultPrevented()) return;
          this.affixed = h, this.unpin = "bottom" == h ? this.getPinnedOffset() : null, this.$element.removeClass(i.RESET).addClass(l).trigger(l.replace("affix", "affixed") + ".bs.affix")
        }
        "bottom" == h && this.$element.offset({
          top: r - e - o
        })
      }
    };
    var s = t.fn.affix;
    t.fn.affix = e, t.fn.affix.Constructor = i, t.fn.affix.noConflict = function() {
      return t.fn.affix = s, this
    }, t(window).on("load", function() {
      t('[data-spy="affix"]').each(function() {
        var i = t(this),
          n = i.data();
        n.offset = n.offset || {}, null != n.offsetBottom && (n.offset.bottom = n.offsetBottom), null != n.offsetTop && (n.offset.top = n.offsetTop), e.call(i, n)
      })
    })
  }(jQuery);
  ! function(t, e) {
    function i() {
      return new Date(Date.UTC.apply(Date, arguments))
    }

    function s() {
      var t = new Date;
      return i(t.getFullYear(), t.getMonth(), t.getDate())
    }

    function a(t, e) {
      return t.getUTCFullYear() === e.getUTCFullYear() && t.getUTCMonth() === e.getUTCMonth() && t.getUTCDate() === e.getUTCDate()
    }

    function o(t) {
      return function() {
        return this[t].apply(this, arguments)
      }
    }

    function r(e, i) {
      function n(t, e) {
        return e.toLowerCase()
      }
      var s, a = t(e).data(),
        o = {},
        r = new RegExp("^" + i.toLowerCase() + "([A-Z])");
      i = new RegExp("^" + i.toLowerCase());
      for (var h in a) i.test(h) && (s = h.replace(r, n), o[s] = a[h]);
      return o
    }

    function h(e) {
      var i = {};
      if (_[e] || (e = e.split("-")[0], _[e])) {
        var n = _[e];
        return t.each(g, function(t, e) {
          e in n && (i[e] = n[e])
        }), i
      }
    }
    var l = function() {
        var e = {
          get: function(t) {
            return this.slice(t)[0]
          },
          contains: function(t) {
            for (var e = t && t.valueOf(), i = 0, n = this.length; i < n; i++)
              if (this[i].valueOf() === e) return i;
            return -1
          },
          remove: function(t) {
            this.splice(t, 1)
          },
          replace: function(e) {
            e && (t.isArray(e) || (e = [e]), this.clear(), this.push.apply(this, e))
          },
          clear: function() {
            this.length = 0
          },
          copy: function() {
            var t = new l;
            return t.replace(this), t
          }
        };
        return function() {
          var i = [];
          return i.push.apply(i, arguments), t.extend(i, e), i
        }
      }(),
      c = function(e, i) {
        this._process_options(i), this.dates = new l, this.viewDate = this.o.defaultViewDate, this.focusDate = null, this.element = t(e), this.isInline = !1, this.isInput = this.element.is("input"), this.component = !!this.element.hasClass("date") && this.element.find(".add-on, .input-group-addon, .btn"), this.hasInput = this.component && this.element.find("input").length, this.component && 0 === this.component.length && (this.component = !1), this.picker = t(m.template), this._buildEvents(), this._attachEvents(), this.isInline ? this.picker.addClass("datepicker-inline").appendTo(this.element) : this.picker.addClass("datepicker-dropdown dropdown-menu"), this.o.rtl && this.picker.addClass("datepicker-rtl"), this.viewMode = this.o.startView, this.o.calendarWeeks && this.picker.find("tfoot .today, tfoot .clear").attr("colspan", function(t, e) {
          return parseInt(e) + 1
        }), this._allow_update = !1, this.setStartDate(this._o.startDate), this.setEndDate(this._o.endDate), this.setDaysOfWeekDisabled(this.o.daysOfWeekDisabled), this.setDatesDisabled(this.o.datesDisabled), this.fillDow(), this.fillMonths(), this._allow_update = !0, this.update(), this.showMode(), this.isInline && this.show()
      };
    c.prototype = {
      constructor: c,
      _process_options: function(n) {
        this._o = t.extend({}, this._o, n);
        var a = this.o = t.extend({}, this._o),
          o = a.language;
        switch (_[o] || (o = o.split("-")[0], _[o] || (o = p.language)), a.language = o, a.startView) {
          case 2:
          case "decade":
            a.startView = 2;
            break;
          case 1:
          case "year":
            a.startView = 1;
            break;
          default:
            a.startView = 0
        }
        switch (a.minViewMode) {
          case 1:
          case "months":
            a.minViewMode = 1;
            break;
          case 2:
          case "years":
            a.minViewMode = 2;
            break;
          default:
            a.minViewMode = 0
        }
        a.startView = Math.max(a.startView, a.minViewMode), a.multidate !== !0 && (a.multidate = Number(a.multidate) || !1, a.multidate !== !1 && (a.multidate = Math.max(0, a.multidate))), a.multidateSeparator = String(a.multidateSeparator), a.weekStart %= 7, a.weekEnd = (a.weekStart + 6) % 7;
        var r = m.parseFormat(a.format);
        if (a.startDate !== -(1 / 0) && (a.startDate ? a.startDate instanceof Date ? a.startDate = this._local_to_utc(this._zero_time(a.startDate)) : a.startDate = m.parseDate(a.startDate, r, a.language) : a.startDate = -(1 / 0)), a.endDate !== 1 / 0 && (a.endDate ? a.endDate instanceof Date ? a.endDate = this._local_to_utc(this._zero_time(a.endDate)) : a.endDate = m.parseDate(a.endDate, r, a.language) : a.endDate = 1 / 0), a.daysOfWeekDisabled = a.daysOfWeekDisabled || [], t.isArray(a.daysOfWeekDisabled) || (a.daysOfWeekDisabled = a.daysOfWeekDisabled.split(/[,\s]*/)), a.daysOfWeekDisabled = t.map(a.daysOfWeekDisabled, function(t) {
            return parseInt(t, 10)
          }), a.datesDisabled = a.datesDisabled || [], !t.isArray(a.datesDisabled)) {
          var h = [];
          h.push(m.parseDate(a.datesDisabled, r, a.language)), a.datesDisabled = h
        }
        a.datesDisabled = t.map(a.datesDisabled, function(t) {
          return m.parseDate(t, r, a.language)
        });
        var l = String(a.orientation).toLowerCase().split(/\s+/g),
          c = a.orientation.toLowerCase();
        if (l = t.grep(l, function(t) {
            return /^auto|left|right|top|bottom$/.test(t)
          }), a.orientation = {
            x: "auto",
            y: "auto"
          }, c && "auto" !== c)
          if (1 === l.length) switch (l[0]) {
            case "top":
            case "bottom":
              a.orientation.y = l[0];
              break;
            case "left":
            case "right":
              a.orientation.x = l[0]
          } else c = t.grep(l, function(t) {
            return /^left|right$/.test(t)
          }), a.orientation.x = c[0] || "auto", c = t.grep(l, function(t) {
            return /^top|bottom$/.test(t)
          }), a.orientation.y = c[0] || "auto";
          else;
        if (a.defaultViewDate) {
          var d = a.defaultViewDate.year || (new Date).getFullYear(),
            u = a.defaultViewDate.month || 0,
            f = a.defaultViewDate.day || 1;
          a.defaultViewDate = i(d, u, f)
        } else a.defaultViewDate = s();
        a.showOnFocus = a.showOnFocus === e || a.showOnFocus
      },
      _events: [],
      _secondaryEvents: [],
      _applyEvents: function(t) {
        for (var i, n, s, a = 0; a < t.length; a++) i = t[a][0], 2 === t[a].length ? (n = e, s = t[a][1]) : 3 === t[a].length && (n = t[a][1], s = t[a][2]), i.on(s, n)
      },
      _unapplyEvents: function(t) {
        for (var i, n, s, a = 0; a < t.length; a++) i = t[a][0], 2 === t[a].length ? (s = e, n = t[a][1]) : 3 === t[a].length && (s = t[a][1], n = t[a][2]), i.off(n, s)
      },
      _buildEvents: function() {
        var e = {
          keyup: t.proxy(function(e) {
            t.inArray(e.keyCode, [27, 37, 39, 38, 40, 32, 13, 9]) === -1 && this.update()
          }, this),
          keydown: t.proxy(this.keydown, this)
        };
        this.o.showOnFocus === !0 && (e.focus = t.proxy(this.show, this)), this.isInput ? this._events = [
          [this.element, e]
        ] : this.component && this.hasInput ? this._events = [
          [this.element.find("input"), e],
          [this.component, {
            click: t.proxy(this.show, this)
          }]
        ] : this.element.is("div") ? this.isInline = !0 : this._events = [
          [this.element, {
            click: t.proxy(this.show, this)
          }]
        ], this._events.push([this.element, "*", {
          blur: t.proxy(function(t) {
            this._focused_from = t.target
          }, this)
        }], [this.element, {
          blur: t.proxy(function(t) {
            this._focused_from = t.target
          }, this)
        }]), this._secondaryEvents = [
          [this.picker, {
            click: t.proxy(this.click, this)
          }],
          [t(window), {
            resize: t.proxy(this.place, this)
          }],
          [t(document), {
            "mousedown touchstart": t.proxy(function(t) {
              this.element.is(t.target) || this.element.find(t.target).length || this.picker.is(t.target) || this.picker.find(t.target).length || this.hide()
            }, this)
          }]
        ]
      },
      _attachEvents: function() {
        this._detachEvents(), this._applyEvents(this._events)
      },
      _detachEvents: function() {
        this._unapplyEvents(this._events)
      },
      _attachSecondaryEvents: function() {
        this._detachSecondaryEvents(), this._applyEvents(this._secondaryEvents)
      },
      _detachSecondaryEvents: function() {
        this._unapplyEvents(this._secondaryEvents)
      },
      _trigger: function(e, i) {
        var n = i || this.dates.get(-1),
          s = this._utc_to_local(n);
        this.element.trigger({
          type: e,
          date: s,
          dates: t.map(this.dates, this._utc_to_local),
          format: t.proxy(function(t, e) {
            0 === arguments.length ? (t = this.dates.length - 1, e = this.o.format) : "string" == typeof t && (e = t, t = this.dates.length - 1), e = e || this.o.format;
            var i = this.dates.get(t);
            return m.formatDate(i, e, this.o.language)
          }, this)
        })
      },
      show: function() {
        if (!this.element.attr("readonly")) return this.isInline || this.picker.appendTo(this.o.container), this.place(), this.picker.show(), this._attachSecondaryEvents(), this._trigger("show"), (window.navigator.msMaxTouchPoints || "ontouchstart" in document) && this.o.disableTouchKeyboard && t(this.element).blur(), this
      },
      hide: function() {
        return this.isInline ? this : this.picker.is(":visible") ? (this.focusDate = null, this.picker.hide().detach(), this._detachSecondaryEvents(), this.viewMode = this.o.startView, this.showMode(), this.o.forceParse && (this.isInput && this.element.val() || this.hasInput && this.element.find("input").val()) && this.setValue(), this._trigger("hide"), this) : this
      },
      remove: function() {
        return this.hide(), this._detachEvents(), this._detachSecondaryEvents(), this.picker.remove(), delete this.element.data().datepicker, this.isInput || delete this.element.data().date, this
      },
      _utc_to_local: function(t) {
        return t && new Date(t.getTime() + 6e4 * t.getTimezoneOffset())
      },
      _local_to_utc: function(t) {
        return t && new Date(t.getTime() - 6e4 * t.getTimezoneOffset())
      },
      _zero_time: function(t) {
        return t && new Date(t.getFullYear(), t.getMonth(), t.getDate())
      },
      _zero_utc_time: function(t) {
        return t && new Date(Date.UTC(t.getUTCFullYear(), t.getUTCMonth(), t.getUTCDate()))
      },
      getDates: function() {
        return t.map(this.dates, this._utc_to_local)
      },
      getUTCDates: function() {
        return t.map(this.dates, function(t) {
          return new Date(t)
        })
      },
      getDate: function() {
        return this._utc_to_local(this.getUTCDate())
      },
      getUTCDate: function() {
        var t = this.dates.get(-1);
        return "undefined" != typeof t ? new Date(t) : null
      },
      clearDates: function() {
        var t;
        this.isInput ? t = this.element : this.component && (t = this.element.find("input")), t && t.val("").change(), this.update(), this._trigger("changeDate"), this.o.autoclose && this.hide()
      },
      setDates: function() {
        var e = t.isArray(arguments[0]) ? arguments[0] : arguments;
        return this.update.apply(this, e), this._trigger("changeDate"), this.setValue(), this
      },
      setUTCDates: function() {
        var e = t.isArray(arguments[0]) ? arguments[0] : arguments;
        return this.update.apply(this, t.map(e, this._utc_to_local)), this._trigger("changeDate"), this.setValue(), this
      },
      setDate: o("setDates"),
      setUTCDate: o("setUTCDates"),
      setValue: function() {
        var t = this.getFormattedDate();
        return this.isInput ? this.element.val(t).change() : this.component && this.element.find("input").val(t).change(), this
      },
      getFormattedDate: function(i) {
        i === e && (i = this.o.format);
        var n = this.o.language;
        return t.map(this.dates, function(t) {
          return m.formatDate(t, i, n)
        }).join(this.o.multidateSeparator)
      },
      setStartDate: function(t) {
        return this._process_options({
          startDate: t
        }), this.update(), this.updateNavArrows(), this
      },
      setEndDate: function(t) {
        return this._process_options({
          endDate: t
        }), this.update(), this.updateNavArrows(), this
      },
      setDaysOfWeekDisabled: function(t) {
        return this._process_options({
          daysOfWeekDisabled: t
        }), this.update(), this.updateNavArrows(), this
      },
      setDatesDisabled: function(t) {
        this._process_options({
          datesDisabled: t
        }), this.update(), this.updateNavArrows()
      },
      place: function() {
        if (this.isInline) return this;
        var e = this.picker.outerWidth(),
          i = this.picker.outerHeight(),
          n = 10,
          s = t(this.o.container).width(),
          a = t(this.o.container).height(),
          o = t(this.o.container).scrollTop(),
          r = t(this.o.container).offset(),
          h = [];
        this.element.parents().each(function() {
          var e = t(this).css("z-index");
          "auto" !== e && 0 !== e && h.push(parseInt(e))
        });
        var l = Math.max.apply(Math, h) + 10,
          c = this.component ? this.component.parent().offset() : this.element.offset(),
          d = this.component ? this.component.outerHeight(!0) : this.element.outerHeight(!1),
          u = this.component ? this.component.outerWidth(!0) : this.element.outerWidth(!1),
          f = c.left - r.left,
          p = c.top - r.top;
        this.picker.removeClass("datepicker-orient-top datepicker-orient-bottom datepicker-orient-right datepicker-orient-left"), "auto" !== this.o.orientation.x ? (this.picker.addClass("datepicker-orient-" + this.o.orientation.x), "right" === this.o.orientation.x && (f -= e - u)) : c.left < 0 ? (this.picker.addClass("datepicker-orient-left"), f -= c.left - n) : f + e > s ? (this.picker.addClass("datepicker-orient-right"), f = c.left + u - e) : this.picker.addClass("datepicker-orient-left");
        var g, _, m = this.o.orientation.y;
        if ("auto" === m && (g = -o + p - i, _ = o + a - (p + d + i), m = Math.max(g, _) === _ ? "top" : "bottom"), this.picker.addClass("datepicker-orient-" + m), "top" === m ? p += d : p -= i + parseInt(this.picker.css("padding-top")), this.o.rtl) {
          var v = s - (f + u);
          this.picker.css({
            top: p,
            right: v,
            zIndex: l
          })
        } else this.picker.css({
          top: p,
          left: f,
          zIndex: l
        });
        return this
      },
      _allow_update: !0,
      update: function() {
        if (!this._allow_update) return this;
        var e = this.dates.copy(),
          i = [],
          n = !1;
        return arguments.length ? (t.each(arguments, t.proxy(function(t, e) {
          e instanceof Date && (e = this._local_to_utc(e)), i.push(e)
        }, this)), n = !0) : (i = this.isInput ? this.element.val() : this.element.data("date") || this.element.find("input").val(), i = i && this.o.multidate ? i.split(this.o.multidateSeparator) : [i], delete this.element.data().date), i = t.map(i, t.proxy(function(t) {
          return m.parseDate(t, this.o.format, this.o.language)
        }, this)), i = t.grep(i, t.proxy(function(t) {
          return t < this.o.startDate || t > this.o.endDate || !t
        }, this), !0), this.dates.replace(i), this.dates.length ? this.viewDate = new Date(this.dates.get(-1)) : this.viewDate < this.o.startDate ? this.viewDate = new Date(this.o.startDate) : this.viewDate > this.o.endDate && (this.viewDate = new Date(this.o.endDate)), n ? this.setValue() : i.length && String(e) !== String(this.dates) && this._trigger("changeDate"), !this.dates.length && e.length && this._trigger("clearDate"), this.fill(), this
      },
      fillDow: function() {
        var t = this.o.weekStart,
          e = "<tr>";
        if (this.o.calendarWeeks) {
          this.picker.find(".datepicker-days thead tr:first-child .datepicker-switch").attr("colspan", function(t, e) {
            return parseInt(e) + 1
          });
          var i = '<th class="cw">&#160;</th>';
          e += i
        }
        for (; t < this.o.weekStart + 7;) e += '<th class="dow">' + _[this.o.language].daysMin[t++ % 7] + "</th>";
        e += "</tr>", this.picker.find(".datepicker-days thead").append(e)
      },
      fillMonths: function() {
        for (var t = "", e = 0; e < 12;) t += '<span class="month">' + _[this.o.language].monthsShort[e++] + "</span>";
        this.picker.find(".datepicker-months td").html(t)
      },
      setRange: function(e) {
        e && e.length ? this.range = t.map(e, function(t) {
          return t.valueOf()
        }) : delete this.range, this.fill()
      },
      getClassNames: function(e) {
        var i = [],
          n = this.viewDate.getUTCFullYear(),
          s = this.viewDate.getUTCMonth(),
          o = new Date;
        return e.getUTCFullYear() < n || e.getUTCFullYear() === n && e.getUTCMonth() < s ? i.push("old") : (e.getUTCFullYear() > n || e.getUTCFullYear() === n && e.getUTCMonth() > s) && i.push("new"), this.focusDate && e.valueOf() === this.focusDate.valueOf() && i.push("focused"), this.o.todayHighlight && e.getUTCFullYear() === o.getFullYear() && e.getUTCMonth() === o.getMonth() && e.getUTCDate() === o.getDate() && i.push("today"), this.dates.contains(e) !== -1 && i.push("active"), (e.valueOf() < this.o.startDate || e.valueOf() > this.o.endDate || t.inArray(e.getUTCDay(), this.o.daysOfWeekDisabled) !== -1) && i.push("disabled"), this.o.datesDisabled.length > 0 && t.grep(this.o.datesDisabled, function(t) {
          return a(e, t)
        }).length > 0 && i.push("disabled", "disabled-date"), this.range && (e > this.range[0] && e < this.range[this.range.length - 1] && i.push("range"), t.inArray(e.valueOf(), this.range) !== -1 && i.push("selected")), i
      },
      fill: function() {
        var n, s = new Date(this.viewDate),
          a = s.getUTCFullYear(),
          o = s.getUTCMonth(),
          r = this.o.startDate !== -(1 / 0) ? this.o.startDate.getUTCFullYear() : -(1 / 0),
          h = this.o.startDate !== -(1 / 0) ? this.o.startDate.getUTCMonth() : -(1 / 0),
          l = this.o.endDate !== 1 / 0 ? this.o.endDate.getUTCFullYear() : 1 / 0,
          c = this.o.endDate !== 1 / 0 ? this.o.endDate.getUTCMonth() : 1 / 0,
          d = _[this.o.language].today || _.en.today || "",
          u = _[this.o.language].clear || _.en.clear || "";
        if (!isNaN(a) && !isNaN(o)) {
          this.picker.find(".datepicker-days thead .datepicker-switch").text(_[this.o.language].months[o] + " " + a), this.picker.find("tfoot .today").text(d).toggle(this.o.todayBtn !== !1), this.picker.find("tfoot .clear").text(u).toggle(this.o.clearBtn !== !1), this.updateNavArrows(), this.fillMonths();
          var f = i(a, o - 1, 28),
            p = m.getDaysInMonth(f.getUTCFullYear(), f.getUTCMonth());
          f.setUTCDate(p), f.setUTCDate(p - (f.getUTCDay() - this.o.weekStart + 7) % 7);
          var g = new Date(f);
          g.setUTCDate(g.getUTCDate() + 42), g = g.valueOf();
          for (var v, D = []; f.valueOf() < g;) {
            if (f.getUTCDay() === this.o.weekStart && (D.push("<tr>"), this.o.calendarWeeks)) {
              var y = new Date(+f + (this.o.weekStart - f.getUTCDay() - 7) % 7 * 864e5),
                T = new Date(Number(y) + (11 - y.getUTCDay()) % 7 * 864e5),
                E = new Date(Number(E = i(T.getUTCFullYear(), 0, 1)) + (11 - E.getUTCDay()) % 7 * 864e5),
                C = (T - E) / 864e5 / 7 + 1;
              D.push('<td class="cw">' + C + "</td>")
            }
            if (v = this.getClassNames(f), v.push("day"), this.o.beforeShowDay !== t.noop) {
              var w = this.o.beforeShowDay(this._utc_to_local(f));
              w === e ? w = {} : "boolean" == typeof w ? w = {
                enabled: w
              } : "string" == typeof w && (w = {
                classes: w
              }), w.enabled === !1 && v.push("disabled"), w.classes && (v = v.concat(w.classes.split(/\s+/))), w.tooltip && (n = w.tooltip)
            }
            v = t.unique(v), D.push('<td class="' + v.join(" ") + '"' + (n ? ' title="' + n + '"' : "") + ">" + f.getUTCDate() + "</td>"), n = null, f.getUTCDay() === this.o.weekEnd && D.push("</tr>"), f.setUTCDate(f.getUTCDate() + 1)
          }
          this.picker.find(".datepicker-days tbody").empty().append(D.join(""));
          var I = this.picker.find(".datepicker-months").find("th:eq(1)").text(a).end().find("span").removeClass("active");
          if (t.each(this.dates, function(t, e) {
              e.getUTCFullYear() === a && I.eq(e.getUTCMonth()).addClass("active")
            }), (a < r || a > l) && I.addClass("disabled"), a === r && I.slice(0, h).addClass("disabled"), a === l && I.slice(c + 1).addClass("disabled"), this.o.beforeShowMonth !== t.noop) {
            var A = this;
            t.each(I, function(e, i) {
              if (!t(i).hasClass("disabled")) {
                var n = new Date(a, e, 1),
                  s = A.o.beforeShowMonth(n);
                s === !1 && t(i).addClass("disabled")
              }
            })
          }
          D = "", a = 10 * parseInt(a / 10, 10);
          var S = this.picker.find(".datepicker-years").find("th:eq(1)").text(a + "-" + (a + 9)).end().find("td");
          a -= 1;
          for (var b, O = t.map(this.dates, function(t) {
              return t.getUTCFullYear()
            }), k = -1; k < 11; k++) b = ["year"], k === -1 ? b.push("old") : 10 === k && b.push("new"), t.inArray(a, O) !== -1 && b.push("active"), (a < r || a > l) && b.push("disabled"), D += '<span class="' + b.join(" ") + '">' + a + "</span>", a += 1;
          S.html(D)
        }
      },
      updateNavArrows: function() {
        if (this._allow_update) {
          var t = new Date(this.viewDate),
            e = t.getUTCFullYear(),
            i = t.getUTCMonth();
          switch (this.viewMode) {
            case 0:
              this.o.startDate !== -(1 / 0) && e <= this.o.startDate.getUTCFullYear() && i <= this.o.startDate.getUTCMonth() ? this.picker.find(".prev").css({
                visibility: "hidden"
              }) : this.picker.find(".prev").css({
                visibility: "visible"
              }), this.o.endDate !== 1 / 0 && e >= this.o.endDate.getUTCFullYear() && i >= this.o.endDate.getUTCMonth() ? this.picker.find(".next").css({
                visibility: "hidden"
              }) : this.picker.find(".next").css({
                visibility: "visible"
              });
              break;
            case 1:
            case 2:
              this.o.startDate !== -(1 / 0) && e <= this.o.startDate.getUTCFullYear() ? this.picker.find(".prev").css({
                visibility: "hidden"
              }) : this.picker.find(".prev").css({
                visibility: "visible"
              }), this.o.endDate !== 1 / 0 && e >= this.o.endDate.getUTCFullYear() ? this.picker.find(".next").css({
                visibility: "hidden"
              }) : this.picker.find(".next").css({
                visibility: "visible"
              })
          }
        }
      },
      click: function(e) {
        e.preventDefault();
        var n, s, a, o = t(e.target).closest("span, td, th");
        if (1 === o.length) switch (o[0].nodeName.toLowerCase()) {
          case "th":
            switch (o[0].className) {
              case "datepicker-switch":
                this.showMode(1);
                break;
              case "prev":
              case "next":
                var r = m.modes[this.viewMode].navStep * ("prev" === o[0].className ? -1 : 1);
                switch (this.viewMode) {
                  case 0:
                    this.viewDate = this.moveMonth(this.viewDate, r), this._trigger("changeMonth", this.viewDate);
                    break;
                  case 1:
                  case 2:
                    this.viewDate = this.moveYear(this.viewDate, r), 1 === this.viewMode && this._trigger("changeYear", this.viewDate)
                }
                this.fill();
                break;
              case "today":
                var h = new Date;
                h = i(h.getFullYear(), h.getMonth(), h.getDate(), 0, 0, 0), this.showMode(-2);
                var l = "linked" === this.o.todayBtn ? null : "view";
                this._setDate(h, l);
                break;
              case "clear":
                this.clearDates()
            }
            break;
          case "span":
            o.hasClass("disabled") || (this.viewDate.setUTCDate(1), o.hasClass("month") ? (a = 1, s = o.parent().find("span").index(o), n = this.viewDate.getUTCFullYear(), this.viewDate.setUTCMonth(s), this._trigger("changeMonth", this.viewDate), 1 === this.o.minViewMode && this._setDate(i(n, s, a))) : (a = 1, s = 0, n = parseInt(o.text(), 10) || 0, this.viewDate.setUTCFullYear(n), this._trigger("changeYear", this.viewDate), 2 === this.o.minViewMode && this._setDate(i(n, s, a))), this.showMode(-1), this.fill());
            break;
          case "td":
            o.hasClass("day") && !o.hasClass("disabled") && (a = parseInt(o.text(), 10) || 1, n = this.viewDate.getUTCFullYear(), s = this.viewDate.getUTCMonth(), o.hasClass("old") ? 0 === s ? (s = 11, n -= 1) : s -= 1 : o.hasClass("new") && (11 === s ? (s = 0, n += 1) : s += 1), this._setDate(i(n, s, a)))
        }
        this.picker.is(":visible") && this._focused_from && t(this._focused_from).focus(), delete this._focused_from
      },
      _toggle_multidate: function(t) {
        var e = this.dates.contains(t);
        if (t || this.dates.clear(), e !== -1 ? (this.o.multidate === !0 || this.o.multidate > 1 || this.o.toggleActive) && this.dates.remove(e) : this.o.multidate === !1 ? (this.dates.clear(), this.dates.push(t)) : this.dates.push(t), "number" == typeof this.o.multidate)
          for (; this.dates.length > this.o.multidate;) this.dates.remove(0)
      },
      _setDate: function(t, e) {
        e && "date" !== e || this._toggle_multidate(t && new Date(t)), e && "view" !== e || (this.viewDate = t && new Date(t)), this.fill(), this.setValue(), e && "view" === e || this._trigger("changeDate");
        var i;
        this.isInput ? i = this.element : this.component && (i = this.element.find("input")), i && i.change(), !this.o.autoclose || e && "date" !== e || this.hide()
      },
      moveMonth: function(t, i) {
        if (!t) return e;
        if (!i) return t;
        var n, s, a = new Date(t.valueOf()),
          o = a.getUTCDate(),
          r = a.getUTCMonth(),
          h = Math.abs(i);
        if (i = i > 0 ? 1 : -1, 1 === h) s = i === -1 ? function() {
          return a.getUTCMonth() === r
        } : function() {
          return a.getUTCMonth() !== n
        }, n = r + i, a.setUTCMonth(n), (n < 0 || n > 11) && (n = (n + 12) % 12);
        else {
          for (var l = 0; l < h; l++) a = this.moveMonth(a, i);
          n = a.getUTCMonth(), a.setUTCDate(o), s = function() {
            return n !== a.getUTCMonth()
          }
        }
        for (; s();) a.setUTCDate(--o), a.setUTCMonth(n);
        return a
      },
      moveYear: function(t, e) {
        return this.moveMonth(t, 12 * e)
      },
      dateWithinRange: function(t) {
        return t >= this.o.startDate && t <= this.o.endDate
      },
      keydown: function(t) {
        if (!this.picker.is(":visible")) return void(27 === t.keyCode && this.show());
        var e, i, n, a = !1,
          o = this.focusDate || this.viewDate;
        switch (t.keyCode) {
          case 27:
            this.focusDate ? (this.focusDate = null, this.viewDate = this.dates.get(-1) || this.viewDate, this.fill()) : this.hide(), t.preventDefault();
            break;
          case 37:
          case 39:
            if (!this.o.keyboardNavigation) break;
            e = 37 === t.keyCode ? -1 : 1, t.ctrlKey ? (i = this.moveYear(this.dates.get(-1) || s(), e), n = this.moveYear(o, e), this._trigger("changeYear", this.viewDate)) : t.shiftKey ? (i = this.moveMonth(this.dates.get(-1) || s(), e), n = this.moveMonth(o, e), this._trigger("changeMonth", this.viewDate)) : (i = new Date(this.dates.get(-1) || s()), i.setUTCDate(i.getUTCDate() + e), n = new Date(o), n.setUTCDate(o.getUTCDate() + e)), this.dateWithinRange(n) && (this.focusDate = this.viewDate = n, this.setValue(), this.fill(), t.preventDefault());
            break;
          case 38:
          case 40:
            if (!this.o.keyboardNavigation) break;
            e = 38 === t.keyCode ? -1 : 1, t.ctrlKey ? (i = this.moveYear(this.dates.get(-1) || s(), e), n = this.moveYear(o, e), this._trigger("changeYear", this.viewDate)) : t.shiftKey ? (i = this.moveMonth(this.dates.get(-1) || s(), e), n = this.moveMonth(o, e), this._trigger("changeMonth", this.viewDate)) : (i = new Date(this.dates.get(-1) || s()), i.setUTCDate(i.getUTCDate() + 7 * e), n = new Date(o), n.setUTCDate(o.getUTCDate() + 7 * e)), this.dateWithinRange(n) && (this.focusDate = this.viewDate = n, this.setValue(), this.fill(), t.preventDefault());
            break;
          case 32:
            break;
          case 13:
            o = this.focusDate || this.dates.get(-1) || this.viewDate, this.o.keyboardNavigation && (this._toggle_multidate(o), a = !0), this.focusDate = null, this.viewDate = this.dates.get(-1) || this.viewDate, this.setValue(), this.fill(), this.picker.is(":visible") && (t.preventDefault(), "function" == typeof t.stopPropagation ? t.stopPropagation() : t.cancelBubble = !0, this.o.autoclose && this.hide());
            break;
          case 9:
            this.focusDate = null, this.viewDate = this.dates.get(-1) || this.viewDate, this.fill(), this.hide()
        }
        if (a) {
          this.dates.length ? this._trigger("changeDate") : this._trigger("clearDate");
          var r;
          this.isInput ? r = this.element : this.component && (r = this.element.find("input")), r && r.change()
        }
      },
      showMode: function(t) {
        t && (this.viewMode = Math.max(this.o.minViewMode, Math.min(2, this.viewMode + t))), this.picker.children("div").hide().filter(".datepicker-" + m.modes[this.viewMode].clsName).css("display", "block"), this.updateNavArrows()
      }
    };
    var d = function(e, i) {
      this.element = t(e), this.inputs = t.map(i.inputs, function(t) {
        return t.jquery ? t[0] : t
      }), delete i.inputs, f.call(t(this.inputs), i).bind("changeDate", t.proxy(this.dateUpdated, this)), this.pickers = t.map(this.inputs, function(e) {
        return t(e).data("datepicker")
      }), this.updateDates()
    };
    d.prototype = {
      updateDates: function() {
        this.dates = t.map(this.pickers, function(t) {
          return t.getUTCDate()
        }), this.updateRanges()
      },
      updateRanges: function() {
        var e = t.map(this.dates, function(t) {
          return t.valueOf()
        });
        t.each(this.pickers, function(t, i) {
          i.setRange(e)
        })
      },
      dateUpdated: function(e) {
        if (!this.updating) {
          this.updating = !0;
          var i = t(e.target).data("datepicker"),
            n = i.getUTCDate(),
            s = t.inArray(e.target, this.inputs),
            a = s - 1,
            o = s + 1,
            r = this.inputs.length;
          if (s !== -1) {
            if (t.each(this.pickers, function(t, e) {
                e.getUTCDate() || e.setUTCDate(n)
              }), n < this.dates[a])
              for (; a >= 0 && n < this.dates[a];) this.pickers[a--].setUTCDate(n);
            else if (n > this.dates[o])
              for (; o < r && n > this.dates[o];) this.pickers[o++].setUTCDate(n);
            this.updateDates(), delete this.updating
          }
        }
      },
      remove: function() {
        t.map(this.pickers, function(t) {
          t.remove()
        }), delete this.element.data().datepicker
      }
    };
    var u = t.fn.datepicker,
      f = function(i) {
        var s = Array.apply(null, arguments);
        s.shift();
        var a;
        return this.each(function() {
          var o = t(this),
            l = o.data("datepicker"),
            u = "object" === ("undefined" == typeof i ? "undefined" : n(i)) && i;
          if (!l) {
            var f = r(this, "date"),
              g = t.extend({}, p, f, u),
              _ = h(g.language),
              m = t.extend({}, p, _, f, u);
            if (o.hasClass("input-daterange") || m.inputs) {
              var v = {
                inputs: m.inputs || o.find("input").toArray()
              };
              o.data("datepicker", l = new d(this, t.extend(m, v)))
            } else o.data("datepicker", l = new c(this, m))
          }
          if ("string" == typeof i && "function" == typeof l[i] && (a = l[i].apply(l, s), a !== e)) return !1
        }), a !== e ? a : this
      };
    t.fn.datepicker = f;
    var p = t.fn.datepicker.defaults = {
        autoclose: !1,
        beforeShowDay: t.noop,
        beforeShowMonth: t.noop,
        calendarWeeks: !1,
        clearBtn: !1,
        toggleActive: !1,
        daysOfWeekDisabled: [],
        datesDisabled: [],
        endDate: 1 / 0,
        forceParse: !0,
        format: "mm/dd/yyyy",
        keyboardNavigation: !0,
        language: "en",
        minViewMode: 0,
        multidate: !1,
        multidateSeparator: ",",
        orientation: "auto",
        rtl: !1,
        startDate: -(1 / 0),
        startView: 0,
        todayBtn: !1,
        todayHighlight: !1,
        weekStart: 0,
        disableTouchKeyboard: !1,
        container: "body"
      },
      g = t.fn.datepicker.locale_opts = ["format", "rtl", "weekStart"];
    t.fn.datepicker.Constructor = c;
    var _ = t.fn.datepicker.dates = {
        en: {
          days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
          daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
          months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
          monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          today: "Today",
          clear: "Clear"
        }
      },
      m = {
        modes: [{
          clsName: "days",
          navFnc: "Month",
          navStep: 1
        }, {
          clsName: "months",
          navFnc: "FullYear",
          navStep: 1
        }, {
          clsName: "years",
          navFnc: "FullYear",
          navStep: 10
        }],
        isLeapYear: function(t) {
          return t % 4 === 0 && t % 100 !== 0 || t % 400 === 0
        },
        getDaysInMonth: function(t, e) {
          return [31, m.isLeapYear(t) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][e]
        },
        validParts: /dd?|DD?|mm?|MM?|yy(?:yy)?/g,
        nonpunctuation: /[^ -\/:-@\[\u3400-\u9fff-`{-~\t\n\r]+/g,
        parseFormat: function(t) {
          var e = t.replace(this.validParts, "\0").split("\0"),
            i = t.match(this.validParts);
          if (!e || !e.length || !i || 0 === i.length) throw new Error("Invalid date format.");
          return {
            separators: e,
            parts: i
          }
        },
        parseDate: function(n, s, a) {
          function o() {
            var t = this.slice(0, u[l].length),
              e = u[l].slice(0, t.length);
            return t.toLowerCase() === e.toLowerCase()
          }
          if (!n) return e;
          if (n instanceof Date) return n;
          "string" == typeof s && (s = m.parseFormat(s));
          var r, h, l, d = /([\-+]\d+)([dmwy])/,
            u = n.match(/([\-+]\d+)([dmwy])/g);
          if (/^[\-+]\d+[dmwy]([\s,]+[\-+]\d+[dmwy])*$/.test(n)) {
            for (n = new Date, l = 0; l < u.length; l++) switch (r = d.exec(u[l]), h = parseInt(r[1]), r[2]) {
              case "d":
                n.setUTCDate(n.getUTCDate() + h);
                break;
              case "m":
                n = c.prototype.moveMonth.call(c.prototype, n, h);
                break;
              case "w":
                n.setUTCDate(n.getUTCDate() + 7 * h);
                break;
              case "y":
                n = c.prototype.moveYear.call(c.prototype, n, h)
            }
            return i(n.getUTCFullYear(), n.getUTCMonth(), n.getUTCDate(), 0, 0, 0)
          }
          u = n && n.match(this.nonpunctuation) || [], n = new Date;
          var f, p, g = {},
            v = ["yyyy", "yy", "M", "MM", "m", "mm", "d", "dd"],
            D = {
              yyyy: function(t, e) {
                return t.setUTCFullYear(e)
              },
              yy: function(t, e) {
                return t.setUTCFullYear(2e3 + e)
              },
              m: function(t, e) {
                if (isNaN(t)) return t;
                for (e -= 1; e < 0;) e += 12;
                for (e %= 12, t.setUTCMonth(e); t.getUTCMonth() !== e;) t.setUTCDate(t.getUTCDate() - 1);
                return t
              },
              d: function(t, e) {
                return t.setUTCDate(e)
              }
            };
          D.M = D.MM = D.mm = D.m, D.dd = D.d, n = i(n.getFullYear(), n.getMonth(), n.getDate(), 0, 0, 0);
          var y = s.parts.slice();
          if (u.length !== y.length && (y = t(y).filter(function(e, i) {
              return t.inArray(i, v) !== -1
            }).toArray()), u.length === y.length) {
            var T;
            for (l = 0, T = y.length; l < T; l++) {
              if (f = parseInt(u[l], 10), r = y[l], isNaN(f)) switch (r) {
                case "MM":
                  p = t(_[a].months).filter(o), f = t.inArray(p[0], _[a].months) + 1;
                  break;
                case "M":
                  p = t(_[a].monthsShort).filter(o), f = t.inArray(p[0], _[a].monthsShort) + 1
              }
              g[r] = f
            }
            var E, C;
            for (l = 0; l < v.length; l++) C = v[l], C in g && !isNaN(g[C]) && (E = new Date(n), D[C](E, g[C]), isNaN(E) || (n = E))
          }
          return n
        },
        formatDate: function(e, i, n) {
          if (!e) return "";
          "string" == typeof i && (i = m.parseFormat(i));
          var s = {
            d: e.getUTCDate(),
            D: _[n].daysShort[e.getUTCDay()],
            DD: _[n].days[e.getUTCDay()],
            m: e.getUTCMonth() + 1,
            M: _[n].monthsShort[e.getUTCMonth()],
            MM: _[n].months[e.getUTCMonth()],
            yy: e.getUTCFullYear().toString().substring(2),
            yyyy: e.getUTCFullYear()
          };
          s.dd = (s.d < 10 ? "0" : "") + s.d, s.mm = (s.m < 10 ? "0" : "") + s.m, e = [];
          for (var a = t.extend([], i.separators), o = 0, r = i.parts.length; o <= r; o++) a.length && e.push(a.shift()), e.push(s[i.parts[o]]);
          return e.join("")
        },
        headTemplate: '<thead><tr><th class="prev">&#171;</th><th colspan="5" class="datepicker-switch"></th><th class="next">&#187;</th></tr></thead>',
        contTemplate: '<tbody><tr><td colspan="7"></td></tr></tbody>',
        footTemplate: '<tfoot><tr><th colspan="7" class="today"></th></tr><tr><th colspan="7" class="clear"></th></tr></tfoot>'
      };
    m.template = '<div class="datepicker"><div class="datepicker-days"><table class=" table-condensed">' + m.headTemplate + "<tbody></tbody>" + m.footTemplate + '</table></div><div class="datepicker-months"><table class="table-condensed">' + m.headTemplate + m.contTemplate + m.footTemplate + '</table></div><div class="datepicker-years"><table class="table-condensed">' + m.headTemplate + m.contTemplate + m.footTemplate + "</table></div></div>", t.fn.datepicker.DPGlobal = m, t.fn.datepicker.noConflict = function() {
      return t.fn.datepicker = u, this
    }, t(document).on("focus.datepicker.data-api click.datepicker.data-api", '[data-provide="datepicker"]', function(e) {
      var i = t(this);
      i.data("datepicker") || (e.preventDefault(), f.call(i, "show"))
    }), t(function() {
      f.call(t('[data-provide="datepicker-inline"]'))
    })
  }(window.jQuery)
}();