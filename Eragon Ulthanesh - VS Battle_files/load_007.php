(function($,mw,RevealAnonIP,ArticleComments,WikiActivity){"use strict";RevealAnonIP=$.extend(RevealAnonIP,{});RevealAnonIP.permissions=$.extend(['*'],RevealAnonIP.permissions);if(typeof(RevealAnonIP.reveal)==='function'){return;}var hasPermission=(function(){var permissions=RevealAnonIP.permissions;var usergroups;usergroups=mw.config.get('wgUserGroups');usergroups=$.extend(['*'],usergroups);for(var i=0,plen=permissions.length;i<plen;++i){for(var j=0,ulen=usergroups.length;j<ulen;++j){if(usergroups[j]===permissions[i]){return true;}}}return false;}());function revealIPs(){if(!hasPermission){return;}var isIPv4Address=mw.util.isIPv4Address,isIPv6Address=mw.util.isIPv6Address;$('.edited-by > a').not('#Wall *').add($('#Forum .last-post > a').filter(function(){return!this.children.length;})).add('.activityfeed cite a, .activity-module .edit-info-user').each(function(){var $this=$(this),href=$this.attr('href'),lastSlash=href.lastIndexOf('/'),ip;if(lastSlash!==-1){ip=href.substr(lastSlash+1);
if(isIPv4Address(ip)||isIPv6Address(ip)){$this.text(ip);}}});}RevealAnonIP.reveal=$.noop;RevealAnonIP.getPermission=function(){return hasPermission;};RevealAnonIP.init=function(){hasPermission=!0;mw.loader.using('mediawiki.util',function(){RevealAnonIP.reveal=revealIPs;$(function(){if(ArticleComments){var realFunc=ArticleComments.addHover;ArticleComments.addHover=function(){var result=realFunc.apply(this,arguments);RevealAnonIP.reveal();return result;};}else{if(WikiActivity){var ajaxFunc=WikiActivity.ajax;WikiActivity.ajax=function(a,b,callback){return ajaxFunc.call(this,a,b,function(){var result=callback.apply(this,arguments);RevealAnonIP.reveal();return result;});};}if(!$.isArray(window.ajaxCallAgain)){window.ajaxCallAgain=[];}window.ajaxCallAgain.push(RevealAnonIP.reveal);}RevealAnonIP.reveal();});});this.init=$.noop;};if(hasPermission){RevealAnonIP.init();}window.RevealAnonIP=RevealAnonIP;}(jQuery,mediaWiki,window.RevealAnonIP,window.ArticleComments,window.WikiActivity));;;mw.
loader.state({"wikia.fake.articles.305ebb24dbec378c600b31a0cec613fe":"ready"});

/* cache key: vsbattles:resourceloader:filter:minify-js:7:0a9d2a768e26acf2d9e597b43d7ceedf */