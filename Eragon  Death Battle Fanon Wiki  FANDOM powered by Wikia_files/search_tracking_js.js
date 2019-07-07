define('uuid',function(){return function(){return'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g,function(c){var r=Math.random()*16|0,v=c==='x'?r:(r&0x3|0x8);return v.toString(16);});};});;!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define("search-tracking",[],t):"object"==typeof exports?exports["search-tracking"]=t():e["search-tracking"]=t()}(window,function(){return function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}return n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.
create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=1)}([function(e,t,n){var o,r;!function(i){if(void 0===(r="function"==typeof(o=i)?o.call(t,n,t,e):o)||(e.exports=r),!0,e.exports=i(),!!0){var c=window.Cookies,s=window.Cookies=i();s.noConflict=function(){return window.Cookies=c,s}}}(function(){function e(){for(var e=0,t={};e<arguments.length;e++){var n=arguments[e];for(var o in n)t[o]=n[o]}return t}return function t(n){function o(t,r,i){var c;if("undefined"!=typeof document){if(arguments.length>1){if("number"==typeof(i=e({path:"/"},o.defaults,i)).expires){var s=new Date;s.setMilliseconds(s.getMilliseconds()+864e5*i.expires),i.expires=s}i.expires=i.expires?i.expires.
toUTCString():"";try{c=JSON.stringify(r),/^[\{\[]/.test(c)&&(r=c)}catch(e){}r=n.write?n.write(r,t):encodeURIComponent(String(r)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),t=(t=(t=encodeURIComponent(String(t))).replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent)).replace(/[\(\)]/g,escape);var f="";for(var u in i)i[u]&&(f+="; "+u,!0!==i[u]&&(f+="="+i[u]));return document.cookie=t+"="+r+f}t||(c={});for(var p=document.cookie?document.cookie.split("; "):[],a=/(%[0-9A-Z]{2})+/g,y=0;y<p.length;y++){var d=p[y].split("="),l=d.slice(1).join("=");this.json||'"'!==l.charAt(0)||(l=l.slice(1,-1));try{var m=d[0].replace(a,decodeURIComponent);if(l=n.read?n.read(l,m):n(l,m)||l.replace(a,decodeURIComponent),this.json)try{l=JSON.parse(l)}catch(e){}if(t===m){c=l;break}t||(c[m]=l)}catch(e){}}return c}}return o.set=o,o.get=function(e){return o.call(o,e)},o.getJSON=function(){return o.apply({json:!0},[].slice.call(arguments))},o.defaults={},o.remove=function(t
,n){o(t,"",e(n,{expires:-1}))},o.withConverter=t,o}(function(){})})},function(e,t,n){"use strict";function o(e){return(o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}n.r(t);var r=function(e){return"string"==typeof e.searchPhrase&&"object"===o(e.results)&&e.results.every(function(e){var t=e.id,n=e.title,o=e.position,r=e.thumbnail;return"number"==typeof t&&"string"==typeof n&&"number"==typeof o&&"boolean"==typeof r})&&("number"==typeof e.page||"number"==typeof e.offset)&&"number"==typeof e.limit&&"string"==typeof e.sortOrder&&"string"==typeof e.timestamp&&"string"==typeof e.beaconId&&"string"==typeof e.app&&"number"==typeof e.siteId&&"string"==typeof e.siteDomain&&"string"==typeof e.searchId&&"string"==typeof e.pvUniqueId};function i(e){return(i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e
}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}var c=function(e){return"string"==typeof e.searchPhrase&&"object"===i(e.clicked)&&"string"==typeof e.clicked.type&&"number"==typeof e.clicked.id&&"string"==typeof e.clicked.title&&"number"==typeof e.clicked.position&&"boolean"==typeof e.clicked.thumbnail&&"string"==typeof e.timestamp&&"string"==typeof e.beaconId&&"string"==typeof e.app&&"number"==typeof e.siteId&&"string"==typeof e.siteDomain&&"string"==typeof e.searchId&&"string"==typeof e.pvUniqueId};function s(e){return(s="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}var f=function(e){return"string"==typeof e.enteredPhrase&&"object"===s(e.suggestions)&&e.suggestions.every(function(e){var t=e.type,n=e.value,o=e.id;return"string"==typeof t&&"string"==typeof n&&
"number"==typeof o})&&"string"==typeof e.timestamp&&"string"==typeof e.beaconId&&"string"==typeof e.app&&"number"==typeof e.siteId&&"string"==typeof e.siteDomain&&"string"==typeof e.suggestionId&&"string"==typeof e.pvUniqueId};function u(e){return(u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}var p,a,y,d,l=function(e){return"string"==typeof e.enteredPhrase&&"object"===u(e.suggestions)&&e.suggestions.every(function(e){var t=e.type,n=e.value,o=e.id;return"string"==typeof t&&"string"==typeof n&&"number"==typeof o})&&"number"==typeof e.positionOfClickedItem&&"string"==typeof e.timestamp&&"string"==typeof e.beaconId&&"string"==typeof e.app&&"number"==typeof e.siteId&&"string"==typeof e.siteDomain&&"string"==typeof e.suggestionId&&"string"==typeof e.pvUniqueId},m=n(0),g=n.n(m),b="searchImpression",v="searchClicked",h=
"suggestImpression",w="suggestClicked",S=function(e){var t=e.type,n=e.payload;if(!function(e,t){switch(e){case b:return r(t);case v:return c(t);case h:return f(t);case w:return l(t);default:throw"Unrecognized event type for search tracking"}}(t,n))throw"One of the fileds in ".concat(t," is malformed or missing");!function(e,t){var n=(arguments.length>2&&void 0!==arguments[2]?arguments[2]:"https://beacon.wikia-services.com/__track/special/")+e+"/"+t,o=document.createElement("script");o.src=n,document.head.appendChild(o),o.onload=function(){document.head.removeChild(o)}}(t,function(e){return btoa(encodeURIComponent(JSON.stringify(e)))}(n))},I=function(e){return e.siteDomain=window.location.host,e.beaconId=g.a.get("wikia_beacon_id"),e.timestamp=(new Date).toISOString(),e},k=function(){if(navigator.sendBeacon){a.push({focusOut:performance.now()});var e=Object.assign(p,{events:a}),t="https://beacon.wikia-services.com/__track/special/pageviewtime/".concat(btoa(encodeURIComponent(JSON.
stringify(e))));navigator.sendBeacon(t,new FormData)}},C=function(){var e;a=[(e={},e[document[y]?"focusOut":"focusIn"]=performance.now(),e)],p={siteDomain:window.location.host,url:window.location,beaconId:g.a.get("wikia_beacon_id"),timestamp:(new Date).toISOString(),pvUniqueId:window.pvUID||null}},O=function(e){void 0!==document.hidden?(y="hidden",d="visibilitychange"):void 0!==document.msHidden?(y="msHidden",d="msvisibilitychange"):void 0!==document.webkitHidden&&(y="webkitHidden",d="webkitvisibilitychange");document.addEventListener(d,function(){document[y]?a.push({focusOut:performance.now()}):a.push({focusIn:performance.now()})}),window.addEventListener("beforeunload",k),C()};window.searchTracking={trackSearchClicked:function(e){S({type:v,payload:I(e)})},trackSearchImpression:function(e){S({type:b,payload:I(e)})},trackSuggestImpression:function(e){S({type:h,payload:I(e)})},trackSuggestClicked:function(e){S({type:w,payload:I(e)})}},window.pageviewTime={setupPageTime:O,initPageview:C,
finishPageview:function(){k()}}}])});require(['search-tracking'],function(st){window.pageviewTime.setupPageTime();});;