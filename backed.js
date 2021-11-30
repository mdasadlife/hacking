!(function (e, t) {
    "object" == typeof exports && "undefined" != typeof module ? (module.exports = t()) : "function" == typeof define && define.amd ? define(t) : ((e = e || self).i18nextLocizeBackend = t());
})(this, function () {
    "use strict";
    function e(e, t, o) {
        return t in e ? Object.defineProperty(e, t, { value: o, enumerable: !0, configurable: !0, writable: !0 }) : (e[t] = o), e;
    }
    function t(e, t) {
        for (var o = 0; o < t.length; o++) {
            var n = t[o];
            (n.enumerable = n.enumerable || !1), (n.configurable = !0), "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n);
        }
    }
    function o(e, t, o) {
        var n;
        return function () {
            var i = this,
                r = arguments,
                s = function () {
                    (n = null), o || e.apply(i, r);
                },
                c = o && !n;
            clearTimeout(n), (n = setTimeout(s, t)), c && e.apply(i, r);
        };
    }
    function n(e, t, o) {
        function n(e) {
            return e && e.indexOf("###") > -1 ? e.replace(/###/g, ".") : e;
        }
        for (var i = "string" != typeof t ? [].concat(t) : t.split("."); i.length > 1; ) {
            if (!e) return {};
            var r = n(i.shift());
            !e[r] && o && (e[r] = new o()), (e = e[r]);
        }
        return e ? { obj: e, k: n(i.shift()) } : {};
    }
    function i(e, t, o) {
        var i = n(e, t, Object);
        i.obj[i.k] = o;
    }
    function r(e, t) {
        var o = n(e, t),
            i = o.obj,
            r = o.k;
        if (i) return i[r];
    }
    var s,
        c = new RegExp("{{(.+?)}}", "g");
    function a(e, t, o) {
        var n, i, r;
        for (; (n = c.exec(e)); ) "string" != typeof (i = n[1].trim()) && (i = null == (r = i) ? "" : "" + r), i || (i = ""), (i = i.replace(/\$/g, "$$$$")), (e = e.replace(n[0], t[i] || i)), (c.lastIndex = 0);
        return e;
    }
    function u(e, t) {
        return t.reduce(function (t, o) {
            if (t) return t;
            if (!e || !e[o] || "string" != typeof e[o] || !e[o].toLowerCase() === o.toLowerCase()) {
                var n = 'i18next-locize-backend :: got "'.concat(e[o], '" in options for ').concat(o, " which is invalid.");
                return console.warn(n), n;
            }
            return !1;
        }, !1);
    }
    function l(e, t) {
        var o = Object.keys(e);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(e);
            t &&
                (n = n.filter(function (t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable;
                })),
                o.push.apply(o, n);
        }
        return o;
    }
    function d(t) {
        for (var o = 1; o < arguments.length; o++) {
            var n = null != arguments[o] ? arguments[o] : {};
            o % 2
                ? l(Object(n), !0).forEach(function (o) {
                      e(t, o, n[o]);
                  })
                : Object.getOwnPropertyDescriptors
                ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(n))
                : l(Object(n)).forEach(function (e) {
                      Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(n, e));
                  });
        }
        return t;
    }
    function p(e, t, o, n, i) {
        try {
            var r = new (XMLHttpRequest || ActiveXObject)("MSXML2.XMLHTTP.3.0");
            r.open(n ? "POST" : "GET", e, 1),
                t.crossDomain || r.setRequestHeader("X-Requested-With", "XMLHttpRequest"),
                t.authorize && t.apiKey && r.setRequestHeader("Authorization", t.apiKey),
                (n || t.setContentTypeJSON) && r.setRequestHeader("Content-type", "application/json"),
                (r.onreadystatechange = function () {
                    r.readyState > 3 && o && o(r.responseText, r);
                }),
                r.send(JSON.stringify(n));
        } catch (e) {
            "undefined" != typeof window && window.console && console.log(e);
        }
    }
    try {
        s = "undefined" != typeof window && null !== window.localStorage;
        var f = "notExistingLocizeProject";
        window.localStorage.setItem(f, "foo"), window.localStorage.removeItem(f);
    } catch (e) {
        s = !1;
    }
    function h(e) {
        var t = function () {},
            o = function () {};
        return (
            s
                ? ((t = function (e) {
                      window.localStorage.setItem("notExistingLocizeProject_".concat(e), Date.now());
                  }),
                  (o = function (t) {
                      var o = window.localStorage.getItem("notExistingLocizeProject_".concat(t));
                      return !!o && (!(Date.now() - o > e) || (window.localStorage.removeItem("notExistingLocizeProject_".concat(t)), !1));
                  }))
                : "undefined" != typeof document &&
                  ((t = function (t) {
                      var o = new Date();
                      o.setTime(o.getTime() + e);
                      var n = "; expires=".concat(o.toGMTString()),
                          i = "notExistingLocizeProject_".concat(t);
                      document.cookie = "".concat(i, "=").concat(Date.now()).concat(n, ";path=/");
                  }),
                  (o = function (e) {
                      for (var t = "notExistingLocizeProject_".concat(e), o = "".concat(t, "="), n = document.cookie.split(";"), i = 0; i < n.length; i++) {
                          for (var r = n[i]; " " === r.charAt(0); ) r = r.substring(1, r.length);
                          if (0 === r.indexOf(o)) return !0;
                      }
                      return !1;
                  })),
            { setProjectNotExisting: t, isProjectNotExisting: o }
        );
    }
    var g = (function () {
        function e(t, o, n) {
            !(function (e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function");
            })(this, e),
                t && t.projectId ? this.init(null, t, {}, o) : this.init(null, o, {}, n),
                (this.type = "backend");
        }
        var s, c, l;
        return (
            (s = e),
            (c = [
                {
                    key: "init",
                    value: function (e) {
                        var t = this,
                            n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                            i = arguments.length > 2 ? arguments[2] : void 0,
                            r = arguments.length > 3 ? arguments[3] : void 0;
                        (this.options = d(
                            {},
                            {
                                loadPath: "https://api.locize.app/{{projectId}}/{{version}}/{{lng}}/{{ns}}",
                                privatePath: "https://api.locize.app/private/{{projectId}}/{{version}}/{{lng}}/{{ns}}",
                                getLanguagesPath: "https://api.locize.app/languages/{{projectId}}",
                                addPath: "https://api.locize.app/missing/{{projectId}}/{{version}}/{{lng}}/{{ns}}",
                                updatePath: "https://api.locize.app/update/{{projectId}}/{{version}}/{{lng}}/{{ns}}",
                                referenceLng: "en",
                                crossDomain: !0,
                                setContentTypeJSON: !1,
                                version: "latest",
                                private: !1,
                                whitelistThreshold: 0.9,
                                failLoadingOnEmptyJSON: !1,
                                allowedAddOrUpdateHosts: ["localhost"],
                                onSaved: !1,
                                checkForProjectTimeout: 3e3,
                                storageExpiration: 36e5,
                            },
                            {},
                            this.options,
                            {},
                            n
                        )),
                            (this.services = e),
                            (this.somethingLoaded = !1),
                            (this.isProjectNotExisting = !1),
                            (this.storage = h(this.options.storageExpiration)),
                            this.options.pull && console.warn('The pull API was removed use "private: true" option instead: https://docs.locize.com/integration/api#fetch-private-namespace-resources');
                        var s = "undefined" != typeof window && window.location && window.location.hostname;
                        s
                            ? ((this.isAddOrUpdateAllowed = "function" == typeof this.options.allowedAddOrUpdateHosts ? this.options.allowedAddOrUpdateHosts(s) : this.options.allowedAddOrUpdateHosts.indexOf(s) > -1),
                              i.saveMissing &&
                                  !this.isAddOrUpdateAllowed &&
                                  e &&
                                  e.logger &&
                                  e.logger.warn(
                                      "function" == typeof this.options.allowedAddOrUpdateHosts
                                          ? 'locize-backend: will not save missings because allowedAddOrUpdateHosts returned false for the host "'.concat(s, '".')
                                          : 'locize-backend: will not save missings because the host "'
                                                .concat(s, '" was not in the list of allowedAddOrUpdateHosts: ')
                                                .concat(this.options.allowedAddOrUpdateHosts.join(", "), " (matches need to be exact).")
                                  ))
                            : (this.isAddOrUpdateAllowed = !0),
                            "function" == typeof r &&
                                this.getOptions(function (e, o) {
                                    if (e) return r(e);
                                    (t.options.referenceLng = n.referenceLng || o.referenceLng || t.options.referenceLng), r(null, o);
                                }),
                            (this.queuedWrites = {}),
                            (this.debouncedProcess = o(this.process, 1e4));
                    },
                },
                {
                    key: "getLanguages",
                    value: function (e) {
                        var t = this,
                            o = u(this.options, ["projectId"]);
                        if (o) return e(new Error(o));
                        var n = a(this.options.getLanguagesPath, { projectId: this.options.projectId });
                        if ((!this.isProjectNotExisting && this.storage.isProjectNotExisting(this.options.projectId) && (this.isProjectNotExisting = !0), this.isProjectNotExisting))
                            return e(new Error("locize project ".concat(this.options.projectId, " does not exist!")));
                        this.loadUrl(n, {}, function (o, n, i) {
                            if (!t.somethingLoaded && i && i.resourceNotExisting)
                                return (t.isProjectNotExisting = !0), t.storage.setProjectNotExisting(t.options.projectId), e(new Error("locize project ".concat(t.options.projectId, " does not exist!")));
                            (t.somethingLoaded = !0), e(o, n);
                        });
                    },
                },
                {
                    key: "getOptions",
                    value: function (e) {
                        var t = this;
                        this.getLanguages(function (o, n) {
                            if (o) return e(o);
                            var i = Object.keys(n);
                            if (!i.length) return e(new Error("was unable to load languages via API"));
                            var r = i.reduce(function (e, t) {
                                    return n[t].isReferenceLanguage && (e = t), e;
                                }, ""),
                                s = i.reduce(function (e, o) {
                                    var i = n[o];
                                    return i.translated[t.options.version] && i.translated[t.options.version] >= t.options.whitelistThreshold && e.push(o), e;
                                }, []),
                                c = i.reduce(function (e, t) {
                                    return t.indexOf("-") > -1 || e;
                                }, !1);
                            e(null, { fallbackLng: r, referenceLng: r, whitelist: s, load: c ? "all" : "languageOnly" });
                        });
                    },
                },
                {
                    key: "checkIfProjectExists",
                    value: function (e) {
                        var t = this,
                            o = this.services.logger;
                        this.somethingLoaded
                            ? e && e(null)
                            : this.alreadyRequestedCheckIfProjectExists
                            ? setTimeout(function () {
                                  return t.checkIfProjectExists(e);
                              }, this.options.checkForProjectTimeout)
                            : ((this.alreadyRequestedCheckIfProjectExists = !0),
                              this.getLanguages(function (t) {
                                  if (t && t.message && t.message.indexOf("does not exist") > 0) {
                                      if (e) return e(t);
                                      o.error(t.message);
                                  }
                              }));
                    },
                },
                {
                    key: "read",
                    value: function (e, t, o) {
                        var n,
                            i = this,
                            r = (this.services || { logger: console }).logger,
                            s = {};
                        if (this.options.private) {
                            var c = u(this.options, ["projectId", "version", "apiKey"]);
                            if (c) return o(new Error(c), !1);
                            (n = a(this.options.privatePath, { lng: e, ns: t, projectId: this.options.projectId, version: this.options.version })), (s = { authorize: !0 });
                        } else {
                            var l = u(this.options, ["projectId", "version"]);
                            if (l) return o(new Error(l), !1);
                            n = a(this.options.loadPath, { lng: e, ns: t, projectId: this.options.projectId, version: this.options.version });
                        }
                        if ((!this.isProjectNotExisting && this.storage.isProjectNotExisting(this.options.projectId) && (this.isProjectNotExisting = !0), this.isProjectNotExisting)) {
                            var d = new Error("locize project ".concat(this.options.projectId, " does not exist!"));
                            return r.error(d.message), void (o && o(d));
                        }
                        this.loadUrl(n, s, function (e, t, n) {
                            i.somethingLoaded ||
                                (n && n.resourceNotExisting
                                    ? setTimeout(function () {
                                          return i.checkIfProjectExists();
                                      }, i.options.checkForProjectTimeout)
                                    : (i.somethingLoaded = !0)),
                                o(e, t);
                        });
                    },
                },
                {
                    key: "loadUrl",
                    value: function (e, t, o) {
                        var n = this;
                        p(e, d({}, this.options, {}, t), function (t, i) {
                            var r,
                                s,
                                c = "Error from cloudfront" === i.getResponseHeader("x-cache");
                            if (408 === i.status || 400 === i.status) return o("failed loading " + e, !0, { resourceNotExisting: c });
                            if (i.status >= 500 && i.status < 600) return o("failed loading " + e, !0, { resourceNotExisting: c });
                            if (i.status >= 400 && i.status < 500) return o("failed loading " + e, !1, { resourceNotExisting: c });
                            try {
                                r = JSON.parse(t);
                            } catch (t) {
                                s = "failed parsing " + e + " to json";
                            }
                            return s ? o(s, !1) : n.options.failLoadingOnEmptyJSON && !Object.keys(r).length ? o("loaded result empty for " + e, !1, { resourceNotExisting: c }) : void o(null, r, { resourceNotExisting: c });
                        });
                    },
                },
                {
                    key: "create",
                    value: function (e, t, o, n, i, r) {
                        var s = this;
                        i || (i = function () {}),
                            this.checkIfProjectExists(function (c) {
                                if (c) return i(c);
                                var a = u(s.options, ["projectId", "version", "apiKey", "referenceLng"]);
                                return a
                                    ? i(new Error(a))
                                    : s.isAddOrUpdateAllowed
                                    ? ("string" == typeof e && (e = [e]),
                                      e.filter(function (e) {
                                          return e === s.options.referenceLng;
                                      }).length < 1 &&
                                          s.services &&
                                          s.services.logger &&
                                          s.services.logger.warn(
                                              'locize-backend: will not save missings because the reference language "'
                                                  .concat(s.options.referenceLng, '" was not in the list of to save languages: ')
                                                  .concat(e.join(", "), " (open your site in the reference language to save missings).")
                                          ),
                                      void e.forEach(function (e) {
                                          e === s.options.referenceLng && s.queue.call(s, s.options.referenceLng, t, o, n, i, r);
                                      }))
                                    : i("host is not allowed to create key.");
                            });
                    },
                },
                {
                    key: "update",
                    value: function (e, t, o, n, i, r) {
                        var s = this;
                        i || (i = function () {}),
                            this.checkIfProjectExists(function (c) {
                                if (c) return i(c);
                                var a = u(s.options, ["projectId", "version", "apiKey", "referenceLng"]);
                                return a
                                    ? i(new Error(a))
                                    : s.isAddOrUpdateAllowed
                                    ? (r || (r = {}),
                                      "string" == typeof e && (e = [e]),
                                      (r.isUpdate = !0),
                                      void e.forEach(function (e) {
                                          e === s.options.referenceLng && s.queue.call(s, s.options.referenceLng, t, o, n, i, r);
                                      }))
                                    : i("host is not allowed to update key.");
                            });
                    },
                },
                {
                    key: "writePage",
                    value: function (e, t, o, n) {
                        var i = a(this.options.addPath, { lng: e, ns: t, projectId: this.options.projectId, version: this.options.version }),
                            r = a(this.options.updatePath, { lng: e, ns: t, projectId: this.options.projectId, version: this.options.version }),
                            s = !1,
                            c = !1,
                            u = {},
                            l = {};
                        o.forEach(function (e) {
                            var t = e.options && e.options.tDescription ? { value: e.fallbackValue || "", context: { text: e.options.tDescription } } : e.fallbackValue || "";
                            e.options && e.options.isUpdate ? (c || (c = !0), (l[e.key] = t)) : (s || (s = !0), (u[e.key] = t));
                        });
                        var f = 0;
                        s && f++, c && f++;
                        var h = function () {
                            --f || n();
                        };
                        f || h(),
                            s &&
                                p(
                                    i,
                                    d({}, { authorize: !0 }, {}, this.options),
                                    function (e, t) {
                                        h();
                                    },
                                    u
                                ),
                            c &&
                                p(
                                    r,
                                    d({}, { authorize: !0 }, {}, this.options),
                                    function (e, t) {
                                        h();
                                    },
                                    l
                                );
                    },
                },
                {
                    key: "write",
                    value: function (e, t) {
                        var o = this;
                        if (!r(this.queuedWrites, ["locks", e, t])) {
                            var n = r(this.queuedWrites, [e, t]);
                            i(this.queuedWrites, [e, t], []),
                                n.length &&
                                    (function () {
                                        i(o.queuedWrites, ["locks", e, t], !0);
                                        var r = function () {
                                                i(o.queuedWrites, ["locks", e, t], !1),
                                                    n.forEach(function (e) {
                                                        e.callback && e.callback();
                                                    }),
                                                    o.options.onSaved && o.options.onSaved(e, t),
                                                    o.debouncedProcess(e, t);
                                            },
                                            s = n.length / 1e3,
                                            c = 0,
                                            a = n.splice(0, 1e3);
                                        for (
                                            o.writePage(e, t, a, function () {
                                                ++c >= s && r();
                                            });
                                            1e3 === a.length;

                                        )
                                            (a = n.splice(0, 1e3)).length &&
                                                o.writePage(e, t, a, function () {
                                                    ++c >= s && r();
                                                });
                                    })();
                        }
                    },
                },
                {
                    key: "process",
                    value: function () {
                        var e = this;
                        Object.keys(this.queuedWrites).forEach(function (t) {
                            "locks" !== t &&
                                Object.keys(e.queuedWrites[t]).forEach(function (o) {
                                    e.queuedWrites[t][o].length && e.write(t, o);
                                });
                        });
                    },
                },
                {
                    key: "queue",
                    value: function (e, t, o, i, r, s) {
                        var c, a, u, l, d, p;
                        (c = this.queuedWrites),
                            (a = { key: o, fallbackValue: i || "", callback: r, options: s }),
                            (l = n(c, [e, t], Object)),
                            (d = l.obj),
                            (p = l.k),
                            (d[p] = d[p] || []),
                            u && (d[p] = d[p].concat(a)),
                            u || d[p].push(a),
                            this.debouncedProcess();
                    },
                },
            ]) && t(s.prototype, c),
            l && t(s, l),
            e
        );
    })();
    return (g.type = "backend "), g;
});
