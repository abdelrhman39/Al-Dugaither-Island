function ClusterIcon(a, b) {
    a.getMarkerClusterer().extend(ClusterIcon, google.maps.OverlayView), this.cluster_ = a, this.className_ = a.getMarkerClusterer().getClusterClass(), this.styles_ = b, this.center_ = null, this.div_ = null, this.sums_ = null, this.visible_ = !1, this.setMap(a.getMap())
}

function Cluster(a) {
    this.markerClusterer_ = a, this.map_ = a.getMap(), this.gridSize_ = a.getGridSize(), this.minClusterSize_ = a.getMinimumClusterSize(), this.averageCenter_ = a.getAverageCenter(), this.markers_ = [], this.center_ = null, this.bounds_ = null, this.clusterIcon_ = new ClusterIcon(this, a.getStyles())
}

function MarkerClusterer(a, b, c) {
    this.extend(MarkerClusterer, google.maps.OverlayView), b = b || [], c = c || {}, this.markers_ = [], this.clusters_ = [], this.listeners_ = [], this.activeMap_ = null, this.ready_ = !1, this.gridSize_ = c.gridSize || 60, this.minClusterSize_ = c.minimumClusterSize || 2, this.maxZoom_ = c.maxZoom || null, this.styles_ = c.styles || [], this.title_ = c.title || "", this.zoomOnClick_ = !0, void 0 !== c.zoomOnClick && (this.zoomOnClick_ = c.zoomOnClick), this.averageCenter_ = !1, void 0 !== c.averageCenter && (this.averageCenter_ = c.averageCenter), this.ignoreHidden_ = !1, void 0 !== c.ignoreHidden && (this.ignoreHidden_ = c.ignoreHidden), this.enableRetinaIcons_ = !1, void 0 !== c.enableRetinaIcons && (this.enableRetinaIcons_ = c.enableRetinaIcons), this.imagePath_ = c.imagePath || MarkerClusterer.IMAGE_PATH, this.imageExtension_ = c.imageExtension || MarkerClusterer.IMAGE_EXTENSION, this.imageSizes_ = c.imageSizes || MarkerClusterer.IMAGE_SIZES, this.calculator_ = c.calculator || MarkerClusterer.CALCULATOR, this.batchSize_ = c.batchSize || MarkerClusterer.BATCH_SIZE, this.batchSizeIE_ = c.batchSizeIE || MarkerClusterer.BATCH_SIZE_IE, this.clusterClass_ = c.clusterClass || "cluster", navigator.userAgent.toLowerCase().indexOf("msie") !== -1 && (this.batchSize_ = this.batchSizeIE_), this.setupStyles_(), this.addMarkers(b, !0), this.setMap(a)
}
ClusterIcon.prototype.onAdd = function () {
    var b, c, a = this;
    this.div_ = document.createElement("div"), this.div_.className = this.className_, this.visible_ && this.show(), this.getPanes().overlayMouseTarget.appendChild(this.div_), this.boundsChangedListener_ = google.maps.event.addListener(this.getMap(), "bounds_changed", function () {
        c = b
    }), google.maps.event.addDomListener(this.div_, "mousedown", function () {
        b = !0, c = !1
    }), google.maps.event.addDomListener(this.div_, "click", function (d) {
        if (b = !1, !c) {
            var e, f, g = a.cluster_.getMarkerClusterer();
            google.maps.event.trigger(g, "click", a.cluster_), google.maps.event.trigger(g, "clusterclick", a.cluster_), g.getZoomOnClick() && (f = g.getMaxZoom(), e = a.cluster_.getBounds(), g.getMap().fitBounds(e), setTimeout(function () {
                g.getMap().fitBounds(e), null !== f && g.getMap().getZoom() > f && g.getMap().setZoom(f + 1)
            }, 100)), d.cancelBubble = !0, d.stopPropagation && d.stopPropagation()
        }
    }), google.maps.event.addDomListener(this.div_, "mouseover", function () {
        var b = a.cluster_.getMarkerClusterer();
        google.maps.event.trigger(b, "mouseover", a.cluster_)
    }), google.maps.event.addDomListener(this.div_, "mouseout", function () {
        var b = a.cluster_.getMarkerClusterer();
        google.maps.event.trigger(b, "mouseout", a.cluster_)
    })
}, ClusterIcon.prototype.onRemove = function () {
    this.div_ && this.div_.parentNode && (this.hide(), google.maps.event.removeListener(this.boundsChangedListener_), google.maps.event.clearInstanceListeners(this.div_), this.div_.parentNode.removeChild(this.div_), this.div_ = null)
}, ClusterIcon.prototype.draw = function () {
    if (this.visible_) {
        var a = this.getPosFromLatLng_(this.center_);
        this.div_.style.top = a.y + "px", this.div_.style.left = a.x + "px"
    }
}, ClusterIcon.prototype.hide = function () {
    this.div_ && (this.div_.style.display = "none"), this.visible_ = !1
}, ClusterIcon.prototype.show = function () {
    if (this.div_) {
        var a = "",
            b = this.backgroundPosition_.split(" "),
            c = parseInt(b[0].replace(/^\s+|\s+$/g, ""), 10),
            d = parseInt(b[1].replace(/^\s+|\s+$/g, ""), 10),
            e = this.getPosFromLatLng_(this.center_);
        this.div_.style.cssText = this.createCss(e), a = "<img src='" + this.url_ + "' style='position: absolute; top: " + d + "px; left: " + c + "px; ", this.cluster_.getMarkerClusterer().enableRetinaIcons_ || (a += "clip: rect(" + -1 * d + "px, " + (-1 * c + this.width_) + "px, " + (-1 * d + this.height_) + "px, " + -1 * c + "px);"), a += "'>", this.div_.innerHTML = a + "<div class='cluster' style='position: absolute;top: " + this.anchorText_[0] + "px;left: " + this.anchorText_[1] + "px;color: " + this.textColor_ + ";font-size: " + this.textSize_ + "px;font-family: " + this.fontFamily_ + ";font-weight: " + this.fontWeight_ + ";font-style: " + this.fontStyle_ + ";text-decoration: " + this.textDecoration_ + ";text-align: center;width: " + this.width_ + "px;line-height:" + this.height_ + "px;'>" + this.sums_.text + "</div>", "undefined" == typeof this.sums_.title || "" === this.sums_.title ? this.div_.title = this.cluster_.getMarkerClusterer().getTitle() : this.div_.title = this.sums_.title, this.div_.style.display = ""
    }
    this.visible_ = !0
}, ClusterIcon.prototype.useStyle = function (a) {
    this.sums_ = a;
    var b = Math.max(0, a.index - 1);
    b = Math.min(this.styles_.length - 1, b);
    var c = this.styles_[b];
    this.url_ = c.url, this.height_ = c.height, this.width_ = c.width, this.anchorText_ = c.anchorText || [0, 0], this.anchorIcon_ = c.anchorIcon || [parseInt(this.height_ / 2, 10), parseInt(this.width_ / 2, 10)], this.textColor_ = c.textColor || "black", this.textSize_ = c.textSize || 11, this.textDecoration_ = c.textDecoration || "none", this.fontWeight_ = c.fontWeight || "bold", this.fontStyle_ = c.fontStyle || "normal", this.fontFamily_ = c.fontFamily || "Arial,sans-serif", this.backgroundPosition_ = c.backgroundPosition || "0 0"
}, ClusterIcon.prototype.setCenter = function (a) {
    this.center_ = a
}, ClusterIcon.prototype.createCss = function (a) {
    var b = [];
    return b.push("cursor: pointer;"), b.push("position: absolute; top: " + a.y + "px; left: " + a.x + "px;"), b.push("width: " + this.width_ + "px; height: " + this.height_ + "px;"), b.join("")
}, ClusterIcon.prototype.getPosFromLatLng_ = function (a) {
    var b = this.getProjection().fromLatLngToDivPixel(a);
    return b.x -= this.anchorIcon_[1], b.y -= this.anchorIcon_[0], b.x = parseInt(b.x, 10), b.y = parseInt(b.y, 10), b
}, Cluster.prototype.getSize = function () {
    return this.markers_.length
}, Cluster.prototype.getMarkers = function () {
    return this.markers_
}, Cluster.prototype.getCenter = function () {
    return this.center_
}, Cluster.prototype.getMap = function () {
    return this.map_
}, Cluster.prototype.getMarkerClusterer = function () {
    return this.markerClusterer_
}, Cluster.prototype.getBounds = function () {
    var a, b = new google.maps.LatLngBounds(this.center_, this.center_),
        c = this.getMarkers();
    for (a = 0; a < c.length; a++) b.extend(c[a].getPosition());
    return b
}, Cluster.prototype.remove = function () {
    this.clusterIcon_.setMap(null), this.markers_ = [], delete this.markers_
}, Cluster.prototype.addMarker = function (a) {
    var b, c, d;
    if (this.isMarkerAlreadyAdded_(a)) return !1;
    if (this.center_) {
        if (this.averageCenter_) {
            var e = this.markers_.length + 1,
                f = (this.center_.lat() * (e - 1) + a.getPosition().lat()) / e,
                g = (this.center_.lng() * (e - 1) + a.getPosition().lng()) / e;
            this.center_ = new google.maps.LatLng(f, g), this.calculateBounds_()
        }
    } else this.center_ = a.getPosition(), this.calculateBounds_();
    if (a.isAdded = !0, this.markers_.push(a), c = this.markers_.length, d = this.markerClusterer_.getMaxZoom(), null !== d && this.map_.getZoom() > d) a.getMap() !== this.map_ && a.setMap(this.map_);
    else if (c < this.minClusterSize_) a.getMap() !== this.map_ && a.setMap(this.map_);
    else if (c === this.minClusterSize_)
        for (b = 0; b < c; b++) this.markers_[b].setMap(null);
    else a.setMap(null);
    return this.updateIcon_(), !0
}, Cluster.prototype.isMarkerInClusterBounds = function (a) {
    return this.bounds_.contains(a.getPosition())
}, Cluster.prototype.calculateBounds_ = function () {
    var a = new google.maps.LatLngBounds(this.center_, this.center_);
    this.bounds_ = this.markerClusterer_.getExtendedBounds(a)
}, Cluster.prototype.updateIcon_ = function () {
    var a = this.markers_.length,
        b = this.markerClusterer_.getMaxZoom();
    if (null !== b && this.map_.getZoom() > b) return void this.clusterIcon_.hide();
    if (a < this.minClusterSize_) return void this.clusterIcon_.hide();
    var c = this.markerClusterer_.getStyles().length,
        d = this.markerClusterer_.getCalculator()(this.markers_, c);
    this.clusterIcon_.setCenter(this.center_), this.clusterIcon_.useStyle(d), this.clusterIcon_.show()
}, Cluster.prototype.isMarkerAlreadyAdded_ = function (a) {
    var b;
    if (this.markers_.indexOf) return this.markers_.indexOf(a) !== -1;
    for (b = 0; b < this.markers_.length; b++)
        if (a === this.markers_[b]) return !0;
    return !1
}, MarkerClusterer.prototype.onAdd = function () {
    var a = this;
    this.activeMap_ = this.getMap(), this.ready_ = !0, this.repaint(), this.listeners_ = [google.maps.event.addListener(this.getMap(), "zoom_changed", function () {
        a.resetViewport_(!1), this.getZoom() !== (this.get("minZoom") || 0) && this.getZoom() !== this.get("maxZoom") || google.maps.event.trigger(this, "idle")
    }), google.maps.event.addListener(this.getMap(), "idle", function () {
        a.redraw_()
    })]
}, MarkerClusterer.prototype.onRemove = function () {
    var a;
    for (a = 0; a < this.markers_.length; a++) this.markers_[a].getMap() !== this.activeMap_ && this.markers_[a].setMap(this.activeMap_);
    for (a = 0; a < this.clusters_.length; a++) this.clusters_[a].remove();
    for (this.clusters_ = [], a = 0; a < this.listeners_.length; a++) google.maps.event.removeListener(this.listeners_[a]);
    this.listeners_ = [], this.activeMap_ = null, this.ready_ = !1
}, MarkerClusterer.prototype.draw = function () {}, MarkerClusterer.prototype.setupStyles_ = function () {
    var a, b;
    if (!(this.styles_.length > 0))
        for (a = 0; a < this.imageSizes_.length; a++) b = this.imageSizes_[a], this.styles_.push({
            url: this.imagePath_ + (a + 1) + "." + this.imageExtension_,
            height: b,
            width: b
        })
}, MarkerClusterer.prototype.fitMapToMarkers = function () {
    var a, b = this.getMarkers(),
        c = new google.maps.LatLngBounds;
    for (a = 0; a < b.length; a++) c.extend(b[a].getPosition());
    this.getMap().fitBounds(c)
}, MarkerClusterer.prototype.getGridSize = function () {
    return this.gridSize_
}, MarkerClusterer.prototype.setGridSize = function (a) {
    this.gridSize_ = a
}, MarkerClusterer.prototype.getMinimumClusterSize = function () {
    return this.minClusterSize_
}, MarkerClusterer.prototype.setMinimumClusterSize = function (a) {
    this.minClusterSize_ = a
}, MarkerClusterer.prototype.getMaxZoom = function () {
    return this.maxZoom_
}, MarkerClusterer.prototype.setMaxZoom = function (a) {
    this.maxZoom_ = a
}, MarkerClusterer.prototype.getStyles = function () {
    return this.styles_
}, MarkerClusterer.prototype.setStyles = function (a) {
    this.styles_ = a
}, MarkerClusterer.prototype.getTitle = function () {
    return this.title_
}, MarkerClusterer.prototype.setTitle = function (a) {
    this.title_ = a
}, MarkerClusterer.prototype.getZoomOnClick = function () {
    return this.zoomOnClick_
}, MarkerClusterer.prototype.setZoomOnClick = function (a) {
    this.zoomOnClick_ = a
}, MarkerClusterer.prototype.getAverageCenter = function () {
    return this.averageCenter_
}, MarkerClusterer.prototype.setAverageCenter = function (a) {
    this.averageCenter_ = a
}, MarkerClusterer.prototype.getIgnoreHidden = function () {
    return this.ignoreHidden_
}, MarkerClusterer.prototype.setIgnoreHidden = function (a) {
    this.ignoreHidden_ = a
}, MarkerClusterer.prototype.getEnableRetinaIcons = function () {
    return this.enableRetinaIcons_
}, MarkerClusterer.prototype.setEnableRetinaIcons = function (a) {
    this.enableRetinaIcons_ = a
}, MarkerClusterer.prototype.getImageExtension = function () {
    return this.imageExtension_
}, MarkerClusterer.prototype.setImageExtension = function (a) {
    this.imageExtension_ = a
}, MarkerClusterer.prototype.getImagePath = function () {
    return this.imagePath_
}, MarkerClusterer.prototype.setImagePath = function (a) {
    this.imagePath_ = a
}, MarkerClusterer.prototype.getImageSizes = function () {
    return this.imageSizes_
}, MarkerClusterer.prototype.setImageSizes = function (a) {
    this.imageSizes_ = a
}, MarkerClusterer.prototype.getCalculator = function () {
    return this.calculator_
}, MarkerClusterer.prototype.setCalculator = function (a) {
    this.calculator_ = a
}, MarkerClusterer.prototype.getBatchSizeIE = function () {
    return this.batchSizeIE_
}, MarkerClusterer.prototype.setBatchSizeIE = function (a) {
    this.batchSizeIE_ = a
}, MarkerClusterer.prototype.getClusterClass = function () {
    return this.clusterClass_
}, MarkerClusterer.prototype.setClusterClass = function (a) {
    this.clusterClass_ = a
}, MarkerClusterer.prototype.getMarkers = function () {
    return this.markers_
}, MarkerClusterer.prototype.getTotalMarkers = function () {
    return this.markers_.length
}, MarkerClusterer.prototype.getClusters = function () {
    return this.clusters_
}, MarkerClusterer.prototype.getTotalClusters = function () {
    return this.clusters_.length
}, MarkerClusterer.prototype.addMarker = function (a, b) {
    this.pushMarkerTo_(a), b || this.redraw_()
}, MarkerClusterer.prototype.addMarkers = function (a, b) {
    var c;
    for (c in a) a.hasOwnProperty(c) && this.pushMarkerTo_(a[c]);
    b || this.redraw_()
}, MarkerClusterer.prototype.pushMarkerTo_ = function (a) {
    if (a.getDraggable()) {
        var b = this;
        google.maps.event.addListener(a, "dragend", function () {
            b.ready_ && (this.isAdded = !1, b.repaint())
        })
    }
    a.isAdded = !1, this.markers_.push(a)
}, MarkerClusterer.prototype.removeMarker = function (a, b) {
    var c = this.removeMarker_(a);
    return !b && c && this.repaint(), c
}, MarkerClusterer.prototype.removeMarkers = function (a, b) {
    var c, d, e = !1;
    for (c = 0; c < a.length; c++) d = this.removeMarker_(a[c]), e = e || d;
    return !b && e && this.repaint(), e
}, MarkerClusterer.prototype.removeMarker_ = function (a) {
    var b, c = -1;
    if (this.markers_.indexOf) c = this.markers_.indexOf(a);
    else
        for (b = 0; b < this.markers_.length; b++)
            if (a === this.markers_[b]) {
                c = b;
                break
            } return c !== -1 && (a.setMap(null), this.markers_.splice(c, 1), !0)
}, MarkerClusterer.prototype.clearMarkers = function () {
    this.resetViewport_(!0), this.markers_ = []
}, MarkerClusterer.prototype.repaint = function () {
    var a = this.clusters_.slice();
    this.clusters_ = [], this.resetViewport_(!1), this.redraw_(), setTimeout(function () {
        var b;
        for (b = 0; b < a.length; b++) a[b].remove()
    }, 0)
}, MarkerClusterer.prototype.getExtendedBounds = function (a) {
    var b = this.getProjection(),
        c = new google.maps.LatLng(a.getNorthEast().lat(), a.getNorthEast().lng()),
        d = new google.maps.LatLng(a.getSouthWest().lat(), a.getSouthWest().lng()),
        e = b.fromLatLngToDivPixel(c);
    e.x += this.gridSize_, e.y -= this.gridSize_;
    var f = b.fromLatLngToDivPixel(d);
    f.x -= this.gridSize_, f.y += this.gridSize_;
    var g = b.fromDivPixelToLatLng(e),
        h = b.fromDivPixelToLatLng(f);
    return a.extend(g), a.extend(h), a
}, MarkerClusterer.prototype.redraw_ = function () {
    this.createClusters_(0)
}, MarkerClusterer.prototype.resetViewport_ = function (a) {
    var b, c;
    for (b = 0; b < this.clusters_.length; b++) this.clusters_[b].remove();
    for (this.clusters_ = [], b = 0; b < this.markers_.length; b++) c = this.markers_[b], c.isAdded = !1, a && c.setMap(null)
}, MarkerClusterer.prototype.distanceBetweenPoints_ = function (a, b) {
    var c = 6371,
        d = (b.lat() - a.lat()) * Math.PI / 180,
        e = (b.lng() - a.lng()) * Math.PI / 180,
        f = Math.sin(d / 2) * Math.sin(d / 2) + Math.cos(a.lat() * Math.PI / 180) * Math.cos(b.lat() * Math.PI / 180) * Math.sin(e / 2) * Math.sin(e / 2),
        g = 2 * Math.atan2(Math.sqrt(f), Math.sqrt(1 - f)),
        h = c * g;
    return h
}, MarkerClusterer.prototype.isMarkerInBounds_ = function (a, b) {
    return b.contains(a.getPosition())
}, MarkerClusterer.prototype.addToClosestCluster_ = function (a) {
    var b, c, d, e, f = 4e4,
        g = null;
    for (b = 0; b < this.clusters_.length; b++) d = this.clusters_[b], e = d.getCenter(), e && (c = this.distanceBetweenPoints_(e, a.getPosition()), c < f && (f = c, g = d));
    g && g.isMarkerInClusterBounds(a) ? g.addMarker(a) : (d = new Cluster(this), d.addMarker(a), this.clusters_.push(d))
}, MarkerClusterer.prototype.createClusters_ = function (a) {
    var b, c, d, e = this;
    if (this.ready_) {
        0 === a && (google.maps.event.trigger(this, "clusteringbegin", this), "undefined" != typeof this.timerRefStatic && (clearTimeout(this.timerRefStatic), delete this.timerRefStatic)), d = this.getMap().getZoom() > 3 ? new google.maps.LatLngBounds(this.getMap().getBounds().getSouthWest(), this.getMap().getBounds().getNorthEast()) : new google.maps.LatLngBounds(new google.maps.LatLng(85.02070771743472, -178.48388434375), new google.maps.LatLng(-85.08136444384544, 178.00048865625));
        var f = this.getExtendedBounds(d),
            g = Math.min(a + this.batchSize_, this.markers_.length);
        for (b = a; b < g; b++) c = this.markers_[b], !c.isAdded && this.isMarkerInBounds_(c, f) && (!this.ignoreHidden_ || this.ignoreHidden_ && c.getVisible()) && this.addToClosestCluster_(c);
        g < this.markers_.length ? this.timerRefStatic = setTimeout(function () {
            e.createClusters_(g)
        }, 0) : (delete this.timerRefStatic, google.maps.event.trigger(this, "clusteringend", this))
    }
}, MarkerClusterer.prototype.extend = function (a, b) {
    return function (a) {
        var b;
        for (b in a.prototype) this.prototype[b] = a.prototype[b];
        return this
    }.apply(a, [b])
}, MarkerClusterer.CALCULATOR = function (a, b) {
    for (var c = 0, d = "", e = a.length.toString(), f = e; 0 !== f;) f = parseInt(f / 10, 10), c++;
    return c = Math.min(c, b), {
        text: e,
        index: c,
        title: d
    }
}, MarkerClusterer.BATCH_SIZE = 2e3, MarkerClusterer.BATCH_SIZE_IE = 500, MarkerClusterer.IMAGE_PATH = "../images/m", MarkerClusterer.IMAGE_EXTENSION = "png", MarkerClusterer.IMAGE_SIZES = [53, 56, 66, 78, 90];