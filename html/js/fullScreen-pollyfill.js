(function(e){"use strict";function o(t,n){var r=e.createEvent("Event");r.initEvent(t,true,false);n.dispatchEvent(r)}function u(t){e[s.enabled]=e[n.enabled];e[s.element]=e[n.element];o(s.events.change,t.target)}function a(e){o(s.events.error,e.target)}var t=true,n,r,i={w3:{enabled:"fullscreenEnabled",element:"fullscreenElement",request:"requestFullscreen",exit:"exitFullscreen",events:{change:"fullscreenchange",error:"fullscreenerror"}},webkit:{enabled:"webkitIsFullScreen",element:"webkitCurrentFullScreenElement",request:"webkitRequestFullScreen",exit:"webkitCancelFullScreen",events:{change:"webkitfullscreenchange",error:"webkitfullscreenerror"}},moz:{enabled:"mozFullScreen",element:"mozFullScreenElement",request:"mozRequestFullScreen",exit:"mozCancelFullScreen",events:{change:"mozfullscreenchange",error:"mozfullscreenerror"}}},s=i.w3;for(r in i){if(i[r].enabled in e){n=i[r];break}}if(t&&!(s.enabled in e)&&n){e.addEventListener(n.events.change,u,false);e.addEventListener(n.events.error,a,false);e[s.enabled]=e[n.enabled];e[s.element]=e[n.element];e[s.exit]=e[n.exit];Element.prototype[s.request]=function(){return this[n.request].apply(this,arguments)}}return n})(document)