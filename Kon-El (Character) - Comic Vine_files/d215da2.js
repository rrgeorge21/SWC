(function(e){"use strict";var r=e.$||e.jQuery;var t=r(e.document);var i=e.siteAdsLogger||{push:function(){}};var a=false;var n=false;var u=false;var l="gu"+"i"+"lt"+"_"+"d"+"et"+"ect"+"ed";var s="g"+"uil"+"t"+"_"+"r"+"en"+"der"+"ed";var f="gui"+"lt"+"_"+"pro"+"c"+"ess"+"ed";var d=r("<div></div>");var o=function(e,r){if(!!t){t.trigger(e,r)}};var c=function(){var t,i;return function(a){if(a){i=undefined}if(i!==undefined){return i}t=r("#ad-settings");if(!t||!t.length){i=null;return}i=t.attr("content");try{i=e.JSON.parse(i)}catch(e){try{i=r.parseJSON(i)}catch(e){i=null}}return i}}();var v=function(){var e=c();if(e){return e.enable_guilt}return false};var p=function(e){var r=e.get(0);var t;var i={};var a;if(window.getComputedStyle){var n=function(e,r){return r.toUpperCase()};t=window.getComputedStyle(r,null);if(t){for(var u=0;u<t.length;u++){a=t[u];var l=a.replace(/\-([a-z])/g,n);var s=t.getPropertyValue(a);i[l]=s}}return i}if(r.currentStyle){t=r.currentStyle;for(a in t){if(t.hasOwnProperty(a)){i[a]=t[a]}}return i}return e.css()};var g=function(e,r){var t,a=e.data("ad-type"),n=r[a],u,l,f=e.find(".ad-wrap").attr("id")||a,c,v=false,g,h,y;if(n&&n.guilt){u=n.guilt}if(u){t=d.clone();c="guilt_"+f;g=false;h=true;l=p(e);l.display="block";t.attr({id:c,class:null});t.css(l);t.html('<img src="'+u+'" alt="Please disable adblock" />');e.replaceWith(t)}else{c=f;g=true;h=false;if(e.is(":hidden")){v=true}else{e.css("display","none")}}y={divId:c,isBlank:g,isBlocked:true,isGuilt:h,isHidden:v};i.push("GUILT RENDERED for ["+f+"]: ",y);o(s,y)};var h=function(){var e=c(),t=e.mapped_units,i=r(".js-mapped-ad");i.each(function(){g(r(this),t)})};var y=function(){t.on("ad_rendered",function(e,r){if(!u){u=true}if(!(a||r.isBlocked)){return}})};var _=function(){var e="GUILT DETECTED ",r=" ads rendered";a=true;if(n){e+="after";if(u){r=" after"+r}else{r=" before"+r}}else{e+="before";r=" before"+r}e+=" ad service initialized"+r;i.push(e);h();o(f)};if(v()){t.one("ads_initialized",function(){n=true;y()});t.one(l,_)}})(this);
(function(e){"use strict";var t="ad-service-client";var r="view-guid-meta";var a="content";var n="vguid";var i="omnibar_top",s="nav_logo_top",u="mpu_top",f="ytembed_top";var d="no-ads",o="has-ads",l="has-nav-sponsor",c="has-omnibar",v="mapped-ad-blank";var p="-wrap";var g="data-ad-event";var h,m=[],E,y=false,b,_=false,T="pageLoad",A=T;var I={};var S=[];var R=[];var N=false;var L=5e3;var x=e.siteAdsLogger||{push:function(){}};var k=e.document;var P=e.$;var O;if(!!P){O=P(k)}var C=e.displayAdCmd=e.displayAdCmd||[];var D=function(){var e;e=M(t);if(e){return true}return false};var w=function(e){return M(e+p)};var F=function(){var e=false,t=u;return function(){var r=ye();if(true===e){return}var a=w(t),n=a.parentElement,i,s,u;if(true===r.rendered[t]){var f="js-livestream-mpu",d="js-livestream-mpu-close",o="hide-mpu";if(!!n&&!!n.tagName&&!!n.classList.contains(f)&&!!P){setTimeout(function(){P("."+d).on("click",function(e){e.preventDefault();P(this).parent().fadeOut(function(){P(this).remove();P("body").addClass(o)})}).css("visibility","visible").hide().fadeIn()},1e4)}}else{n=a.parentElement;if(!!n&&!!n.tagName&&"li"===n.tagName.toLowerCase()){i=n.parentElement}if(!!i&&!!i.getAttribute){s=i.getAttribute("data-no-ads-class");u=i.getAttribute("data-has-ads-class");X(i,u,false);X(i,s,true);i.removeChild(n)}e=true}}}();var B=function(){var e="has-ytembed has-ytembed-rendered",t="no-ytembed",r=".ytembed-wrapper",a;return function(){var n=ye(),i=n.rendered[f],s=P(w(f)),u,d;if(undefined===a){a=s.parents(r)}if(!a||0===a.length){return}u=a.data("ytembed-class")||e;d=a.data("ytembed-blank-class")||t;if(!i){a.removeClass(u);a.addClass(d)}else{a.addClass(u);a.removeClass(d)}}}();var G=function(e){var t=e.divId,r;switch(t){case u:r=F;break;case f:r=B;break}if(r){x.push("Slot render processed for ["+t+"]");r()}};var q=function(){var e=".js-content-entity-body";var t="inContentAdsChecked";var r="p";var a=[{adType:"incontent-mobile-flex",placeIndex:1,minElements:2,removeOnFail:false},{adType:"incontent-ad",placeIndex:3,minElements:5,removeOnFail:true},{adType:"mobile-incontent-ad",placeIndex:3,minElements:5,removeOnFail:true}];var n=function(e){var t=e.data("content-element-selector");if(!t){t=r}return e.children(t).not(":empty")};return function(r){var i,s,u,f,d,o;if(r&&r.length){i=r.find(e)}else{i=P(e)}if(!i||!i.length||i.data(t)){return}i.data(t,true);s=n(i);f=i.data("in-content-placements");if(!f){f=a}for(o=0;o<f.length;o++){u=f[o];d=i.find('[data-ad-type="'+u.adType+'"]');if(!d||!d.length){continue}if(u.minElements>s.length){if(u.removeOnFail){d.remove()}}else{s.eq(u.placeIndex).after(d)}}}}();var j=function(e){if(!P){return true}var t=":hidden",r=P("#"+e),a=r.closest(".js-mapped-ad");if(a.hasClass(v)){return true}return!(r.is(t)||a.is(t))};var z=function(e,t){var r=w(e);if(!!r){X(r,v,t)}};var H=function(){var e=false;var t=function(e,t,r){if(!t||!r){return}E.updateCorrelator();A=t;N=true};return function(){if(e){return}e=true;if(!!O){O.on({update_page_event:function(e,r){t(e,r,A!==r)},render_page_event:t,on_page_event:function(e,r){if(!r){return}t(e,r,A!==r);Pe(r)},remove_page_event:function(e,t){if(!t){return}Le(t);A=W},update_ad_context:function(e,t){q(t)},reset_ad_event:function(e,t,r,a){if(!t){return}if(r){Le(t);ke(t,r,true);xe(a)}else{ke(t,r)}},clear_ad_event:function(e,t){if(!t){return}Le(t);ke(t,true,true)},extend_ad_event:function(e,t,r,a,n,i){x.push("EXTENDING AD EVENT w/ newEventName",r);var s,u;if(t!==r&&K[t]&&!K[r]){s=ne(t);K[r]={mapped_units:P.extend({},s.mapped_units)}}u=oe(a,i);if(u){xe(n);Pe(r)}},on_ad_event:function(e,t,r,a){if(!t){return}if(a){E.updateCorrelator();N=true}Pe(t,r)}})}}}();var V=function(){var e=M("ad-refresh-blackout-duration"),t;if(e){t=parseInt(e.getAttribute("content"),10);if(false===isNaN(t)){L=t}}};var M=function(e){return k.getElementById(e)};var U=function(){if(!b){b=k.body}return b};var J=function(t){try{return e.JSON.parse(t)}catch(e){return null}};var Q=function(t,r,a){try{return e.JSON.stringify(t,r,a)}catch(e){return null}};var X=function(e,t,r){var a=e.className,n=" "+t,i,s=0,u=0;if(r===true&&Y(e,t)===false){if(a.length>0){i=a+n}else{i=t}}else if(r===false&&Y(e,t)===true){if(a.length>0){s=a.indexOf(n);if(s===-1){s=a.indexOf(t)}u=s+t.length+1;i=a.substr(0,s)+a.substr(u)}}if(i!==undefined){e.className=i}};var Y=function(e,t){var r=e.className,a=false;if(!!r){a=r.indexOf(t)>=0}return a};var $=function(e,t){if(!!O){O.trigger(e,t)}};var K=[],W=T;var Z=function(){var e=M(r),t=a,n;try{if(!!e&&e.hasAttribute(t)){n=e.getAttribute(t)}}catch(e){}return n};var ee=function(){var t=["ftag","vndid"];return function(r){var a=e.Phoenix,n=a&&a.CampaignParams&&a.CampaignParams.getParams&&a.CampaignParams.getParams()||null,i,s;if(n){x.push("[AD SETTINGS][CAMPAIGN PARAMS] ",n)}if(r&&n){for(s=0;s<t.length;s++){i=t[s];if(n[i]){r[i]=n[i]}}return r}return n}}();var te=function(e){var t=P.cookie&&P.cookie("AD_SESSION")||null;if(e){if(t){e.session=t}return e}return t};var re=function(e,t){if("firstpg"in e){return e}var r;if(Phoenix&&Phoenix.getAdFirstPage){r=Phoenix.getAdFirstPage(t)}else{r=null}e.firstpg=r;return e};var ae=function(e){var t="ad-settings";if(!!e&&e!==W){t=e+"-"+t}return M(t)};var ne=function(){return function(e,t){var r="content",a,n,i;e=e||A||W;a=K[e];if(a===undefined||t){i=ae(e);if(!i){a=null}else{if(i.hasAttribute(r)){r=i.getAttribute(r);a=J(r);if(a&&a.target_params){n=a.target_params;te(n);ee(n)}}else{a=null}}K[e]=a}return a}}();var ie=function(e,t){var r=e.adEvent?e.adEvent:T,a=ye(r),n=e.divId,u=e.isBlank,f=U(),v=false,p="",g=false;if(true===t){p="Slot render detected > "}else{p="Callback from creative > "}x.push(p+"renderAdCallback: "+Q(e));if(!Ae&&!u&&!j(n)){x.push("[ERROR] ["+n+"] got hidden by something else");g=true}if(Ae||g){e.divId=n;e.isBlocked=true;a.guilty=true;u=true}a.rendered[n]=!u;a.loaded.push(n);if(!!u){if(e.isBlocked){z(n,true)}}else{z(n,false);switch(n){case s:x.push("Nav logo ad exists");v=l;break;case i:x.push("Omnibar ad exists");v=c;break}if(v){X(f,v,true)}X(f,o,true)}X(f,d,false);G(e);if(false===a.refreshAllowed&&a.mapped.length===a.loaded.length){x.push("ALL SLOTS RENDERED for "+r);ke(r,true);if(!Ae&&a.guilty){N=true;Se()}}$("ad_rendered",e)};e.renderAdCallback=ie;var se=function(e,t){var r,a,n;if(!e||!e.clearTargeting){return}if(!t){try{e.clearTargeting();x.push("-> clearTargeting (all keys)")}catch(e){x.push("error","clearTargeting failed")}return}for(n=0;n<t.length;n++){r=t[n];a='("'+r+'")';try{e.clearTargeting(r);x.push("-> clearTargeting"+a)}catch(e){x.push("error","clearTargeting failed for "+r+".")}}};var ue=function(e,t,r){var a,n,i,s;if(!e||!e.setTargeting||!t){return}s=[];for(a in t){if(t.hasOwnProperty(a)){n=t[a].toString();if(!n){s.push(a);continue}else{i='("'+a+'", "'+n+'")'}try{e.setTargeting(a,n.toString());x.push("-> setTargeting"+i)}catch(e){x.push("error","setTargeting failed for "+i+". Please make sure targeting key and value are strings.")}}}if(!r&&s.length>0){se(e,s)}};var fe=function(e){var t;if(e.hasAttribute(g)){t=e.getAttribute(g)}else{t=T}return t};var de=function(e,t,r,a){var n,i,s,u,f={adId:t};Phoenix.measure("adStart:"+t,false);u=M(t);if(!u){return false}f.adDiv=u;s=fe(u);f.adEvent=s;if(!!r.outOfPage){x.push("DEFINE ["+e+"]["+t+"] out of page slot");n=h.defineOutOfPageSlot(e,t).addService(E)}else{x.push("DEFINE ["+e+"]["+t+"] slot with sizes "+Q(r.size));n=h.defineSlot(e,r.size,t);n.addService(E);i=r.target;if(a){if(i){P.extend(i,a)}else{i=a}}if(i){x.push("SET SLOT ["+t+"] TARGETING");ue(n,i,true)}}C.push(t);f.adSlot=n;E.addEventListener("slotRenderEnded",function(e){if(e.slot===n){x.push("SLOT RENDER ENDED for slotId ["+t+"]: ",e);if(t){P("#"+t+" iframe").on("load",function(){Phoenix.measure("adLoad:"+t,"adStart:"+t);if(e){Phoenix.pageAction("adLoad",{slot:t,service:e.serviceName,advertiser:"advertiser:"+e.advertiserId,campaign:"campaign:"+e.campaignId,creative:"creative:"+e.creativeId,lineItem:"lineItem:"+e.lineItemId})}})}var r="none"===u.style.display;ie({adEvent:s,divId:t,isBlank:r||e.isEmpty},true)}});E.addEventListener("slotOnload",function(e){if(e.slot===n){$("ad_load_"+t,{adEvent:s,divId:t})}});Ee(f);return true};var oe=function(){var e={};var t={};var r={};var a=1;var n={};var i=false;var s=".js-mapped-ad .ad-wrap";var u=function(t){var r=e[t];if(!r){r=e[t]=M(t)}return r};var f=function(e,t){var r=ne(t);if(!r){return}return r.mapped_units[e]};var d=function(e,t,r){var a=ne(t),n;if(!a||!P){return}n=P.extend({},r);a.mapped_units[e]=n;return n};var o=function(e,t){if(!e||!P){return}var r=e.slot_order,a=P.inArray(t,r);if(a<0){r.push(t)}e.slot_order=r};var l=function(e){var t=ne(e),r;if(!t){return}if(!t.unit_name){r=ne();t.unit_name=r.unit_name}return t.unit_name};var c=function(){var e=false;return function(){if(e){return}if(i){var t=document.createElement("script");t.type="text/javascript";t.async=true;t.src="//native.sharethrough.com/assets/tag.js";document.head.appendChild(t);e=true}}}();var v=function(e){if(!i&&e&&e.target&&e.target.strnativekey){i=true;c()}};var g=function(e){var t=e.filter('[id*="skybox"]'),r,a;if(t&&t.length>0){a=ne();if(t.data("skybox-auto-collapse")){r="skybox-auto-collapse"}else{if(a.target_params.user==="named"){r="skybox-collapse-2ndView"}}X(U(),r,true);t.addClass("skybox-closeBtn");if(a.target_params&&a.target_params.embed==="autoplay"){t.addClass("skybox-videoStop")}}};var h=function(a){var i=ne(),s,u,l,c,g,h,m;if(!i||!P){return}a.each(function(){s=this;l=fe(s);g=s.id;c=f(g,l);if(n[g]===s){return}if(!t[g]){t[g]=[g];r[g]=1}else{h=g;u=r[h]++;s.id=g=h+"-"+u;t[h].push(g);c=d(g,l,c);m=P(s).closest(".js-mapped-ad");m.attr("id",g+p)}v(c);e[g]=s});P.each(t,function(e,t){if(t.length>0){o(i,e)}})};var m=function(e){var t,r,n,i;e.each(function(){t=this;r=fe(t);i=t.id;n=f(i,r);if(i.indexOf("companion")>=0||!n||n.outOfPage||n.target&&n.target.pos){return}if(!n.target){n.target={}}n.target.pos=a++})};var E=function(e){if(!P){return}q(e);var t;if(e){t=e.find(s)}else{t=P(s)}if(!t.length){return}g(t);h(t);m(t)};var y=function(e,t){var r,a,i,s,d,o,c,v,p,g,h=0,m;if(t&&t.map){c=t.map}for(m=0;m<e.length;m++){r=e[m];a=u(r);s=n[r];if(!a||s){continue}i=w(r);o=i.getAttribute("data-ad-type");d=fe(a);v=f(r,d);p=l(d);if(!v||!p){continue}if(c){t=c[o];if(t===undefined){t=c.default}}g=de(p,r,v,t);if(g){h++;n[r]=a}}return h};return function(e,r){var a=ne(),n,i,s,u,f=0;x.push("BEGIN DEFINING AD SLOTS ==========");E(e);n=a.slot_order;for(u=0;u<n.length;u++){i=n[u];s=t[i];if(s&&s.length>0){f+=y(s,r);t[i]=[]}}x.push("END DEFINING AD SLOTS ==========");if(f>0){return true}return false}}();var le=function(){return R.length>0};var ce=function(){var e;return function(){if(undefined===e){if(le()||U().className.indexOf("has-page-events")>=0){e=true}else{e=false}}return e}}();var ve=function(e){var t=ne(e),r=t.target_params,a=Z();if(!!r){if(!!a){r.vguid=a}if(Ae){r.st="1"}else{r.st="0"}re(r);x.push("SET PAGE LEVEL TARGETING:");ue(E,r,true)}else{x.push("There are no page targeting key/value pairs")}};var pe=function(){var t=function(e){x.push("DISPLAY ["+e+"] ad");h.cmd.push(function(){h.display(e)})};return function(){if(C.length>0){for(var r=0;r<C.length;r++){t(C[r])}}C={};C.push=function(e){t(e)};e.displayAdCmd=C}}();var ge=function(){var e=P.cookie("il_geo");if(e&&typeof googletag!=="undefined"){var t=JSON.parse(e);if(t.postal_code&&t.country_code){var r=t.postal_code+","+t.country_code;googletag.pubads().setLocation(r)}}};var he=false;var me=function(){if(he){return}he=true;var e=ne(),t=!!e.disable_initial_load,r=false;x.push("performance","logInitService");try{E=h.pubads()}catch(e){}if(!E){x.push("[ERROR] SERVICE UNAVAILABLE");Se();$("ads_initialized");return}ge();r=oe();if(false===r){x.push("No ads on the page. Quitting.");$("ads_initialized");return}ve();if(e.enable_collapse_empty_divs){x.push("Enable collapse empty divs");E.collapseEmptyDivs(true)}if(true===e.single_request){x.push("Enable single request");E.enableSingleRequest()}if(true===t){x.push("Disable initial load");E.disableInitialLoad()}x.push("Enable services");x.push("performance","logEnableServices");h.enableServices();pe();if(true===t){Pe(T)}if(true===ce()){H()}$("ads_initialized");x.push("performance","results")};var Ee=function(e){var t=e.adId,r=e.adEvent;if(!I[r]){I[r]={adIds:[],map:{},rendered:{},mapped:[],requested:[],loaded:[],missing:[],guilty:false,refreshAllowed:true,reenableRefreshTimeoutId:null};S.push(r);if(r!==T){R.push(r)}}delete e.adId;I[r].map[t]=e;I[r].mapped.push(t);I[r].adIds.push(t)};var ye=function(e){if(!e){e=A}return I[e]};var be=function(e){var t=ye(e),r;if(P.isEmptyObject(t)){return}if(!r){r=t.adIds.slice(0)}return r};var _e=function(e){var t=ye(e),r=be(e),a=[],n;for(n=0;n<r.length;n++){a.push(t.map[r[n]].adDiv)}return a};var Te=function(e,t){var r=ye(e),a=[],n=[],i=false,s,u,f,d,o;if(t){f=t.adIds;i=!!t.verifyAdIds;if(!!t.targeting){s=t.targeting}}if(!f){f=be(e)}r.missing=[];for(o=0;o<f.length;o++){d=f[o];if(true===i){if(!M(d)){r.rendered[d]=false;r.missing.push(d);continue}}u=r.map[d].adSlot;if(u){a.push(u);n.push(d);if(undefined!==s){x.push("UPDATE ["+d+"] SLOT TARGETING:");ue(u,s)}}}return{adIds:n,adSlots:a}};var Ae=false;var Ie="gu"+"i"+"lt"+"_"+"d"+"et"+"ect"+"ed";var Se=function(){if(!Ae){Ae=true;$(Ie)}};var Re=function(e){var t=ye(e),r=t.loaded.length,a=false;if(r>0){a=true}if(true===a){t.rendered={};t.loaded=[];t.requested=[]}};var Ne=function(e){if(!!e){z(e.id,false);if(0<e.innerHTML.indexOf("iframe")){x.push("RESET adDiv ["+e.id+"]");e.innerHTML=""}}};var Le=function(e){var t=_e(e),r,a;Re(e);if(!t||t.length<1){return}for(a=0;a<t.length;a++){r=t[a];Ne(r)}};var xe=function(e){var t=Z(),r;if(e){r=e}if(typeof r!=="object"){r={};re(r,true)}r[n]=t;if(Ae){r.st="1"}else{r.st="0"}N=false;x.push("UPDATE PAGE LEVEL TARGETING:");ue(E,r)};var ke=function(){var e=function(e){clearTimeout(e.reenableRefreshTimeoutId);e.reenableRefreshTimeoutId=null};return function(t,r,a){var n=ye(t);if(true===r&&true!==a&&n.refreshAllowed!==r){if(null!==n.reenableRefreshTimeoutId){x.push("RE-ENABLE REFRESH for "+t+" later");return}x.push("RE-ENABLE REFRESH for "+t+" in "+L+" milliseconds");n.reenableRefreshTimeoutId=setTimeout(function(){x.push("RE-ENABLE REFRESH for "+t);n.refreshAllowed=true;e(n)},L)}else{if(true===r){if(!n.refreshAllowed&&true===a){x.push("FORCE RE-ENABLE REFRESH for "+t)}e(n)}n.refreshAllowed=r}}}();var Pe=function(t,r){if(!t){t=W}var a=ye(t),n;if(undefined===a){return}n=a.refreshAllowed;if(a.requested.length>a.loaded.length){n=false}if(false===n){return}h.cmd.push(function(){var n,i,s;if(r){s=Te(t,r)}else{s=Te(t)}n=s.adIds;i=s.adSlots;if(i.length<1){x.push("Requested ad slots are missing, quitting");return}Le(t);if(N){xe()}if(1>a.requested.length){a.requested=n}else{a.requested=a.requested.concat(n)}if(a.mapped.length===a.requested.length){x.push("DISABLE REFRESH for "+t+" until all slots have been rendered");ke(t,false)}x.push("REFRESH slots: ["+n.join(", ")+"]");var u=P('meta[itemprop="deviceType"]').attr("content");var f=e.index_headertag_lightspeed;if(typeof f!=="undefined"&&u!="phone"){var d=function(e){return function(){f.set_slot_targeting(e);E.refresh(e)}}(i);f.add_session_end_hook(d,true);f.refresh()}else{E.refresh(i)}});$("ad_refresh")};var Oe=function(){var r=false;var a="lo"+"ade"+"d";var n=e.PostRender,i=false,s=false;var u=false;var f=function(){var e=ne(),r="script",a,n="https:",i=document.createElement(r),s=n===document.location.protocol,u;if(!!e){a=e.script}else{x.push("!!!ERROR: Unable to get settings!!!")}if(_===true){x.push("Ad script already loaded!");return}if(!!a){a=(s?n:"http:")+e.script;x.push("Lazy loading ad script");i.id=t;i.async=true;i.type="text/javascript";i.src=a;u=document.getElementsByTagName(r)[0];u.parentNode.insertBefore(i,u);_=true}};var d=function(){if(!s||!u){return}var e=ne(false,i);if(!e){return}x.push("Ready to initialize asynchronously "+(y?"on document ready ":"")+"with settings:\n",e);if(m.length>0){for(var t=0;t<m.length;t++){h.cmd.push(m[t])}}h.cmd.push(me)};var o=function(e){if(u){return}u=true;if(e){Se()}d()};var l=function(){var e="unknown";var t=P("#xdetstatus");if(!t||!t.length){o(false);return}e=t.data("status");if(e!=="unknown"){o(e)}else{t.one("statusChange",function(e){o(t.data("status"))})}};var c=function(){if(s){return}s=true;d()};return function(){if(r){return}r=true;if(false===_){f()}l();if(!n){c();return}else{i=true}n.getPostRenderData("TrackingBundle",function(t,r){if(e.utag_data===undefined){e.utag_data={deviceType:r.deviceType,soastaPageType:r.pageType}}else{e.utag_data.deviceType=r.deviceType;e.utag_data.soastaPageType=r.pageType}if(r.abTestLabel){e.utag_data._test=r.abTestLabel}var n=P(ae(W));if(n.data(a)){c()}else{n.one(a,function(){c()})}},function(e){})}}();(function(){var t=ne();if(!t){return}V();_=D();h=e.googletag||{};h.cmd=h.cmd||[];if(!!h.cmd&&!!h.cmd.length&&h.cmd.length>0){m=h.cmd;h.cmd=[]}e.googletag=h;if(!!O){PhoenixLoader.thirdPartyCallback(function(){y=true;Oe()})}else{PhoenixLoader.thirdPartyCallback(function(){Oe()})}})();x.push("performance","logLoaded")})(this);
(function(t){"use strict";var e=$(document);var a=t.Phoenix;if(!a){a=t.Phoenix=function(){}}t._taboola=t._taboola||[];var n=t._taboola;if("function"!==typeof a.hasAds||false===a.hasAds()){return}var o;if("function"===typeof a.hasPageEventAds){o=a.hasPageEventAds}else{o=function(){return false}}var i={};var r=function(){var t=$(".js-taboola-module");if(t&&t.length>0){t.each(function(){var t=$(this),e=t.data("taboola-parameters");if(t.data("initialized")){return}if(e.container in i){e.container+=++i[e.container]}else{i[e.container]=1}t.attr("id",e.container);n.push({mode:e.mode,container:e.container,placement:e.placement,target_type:e.target_type});t.data("initialized",true)})}};PhoenixLoader.thirdPartyCallback(function(){var a={};a[taboola_header_key]="auto";n.push(a);!function(t,e,a){t.async=1;t.src=a;e.parentNode.insertBefore(t,e)}(document.createElement("script"),document.getElementsByTagName("script")[0],taboola_url);r();n.push({flush:true});if(o()){e.on("on_page_event ajaxContentLoaded",function(e,o){r();a.url=t.location.href;n.push(a)})}})})(this);