importArticle({type:'script',article:'u:dev:MediaWiki:AjaxRC.js'});;(function(){var user=mw.config.get('wgUserName');if(window.ContribsLinkLoaded||window.isBlogLinkLoaded||user===null){return;}window.ContribsLinkLoaded=!0;importArticle({type:'script',article:'u:dev:MediaWiki:I18n-js/code.js'});function init(i18n){$('.wds-global-navigation__user-menu > div:nth-child(2) > ul > li > a[data-tracking-label="account.preferences"]').parent().before($('<li>').append($('<a>',{'data-id':'contributions','class':'wds-global-navigation__dropdown-link',href:mw.util.getUrl('Special:Contributions/'+user),text:i18n.msg('contribs').plain()})));}mw.hook('dev.i18n').add(function(i18n){i18n.loadMessages('ContribsLink').then(init);});})();;$(function(config){config=config||{};var PageName=mw.config.get('wgTitle'),Namespace=mw.config.get('wgCanonicalNamespace'),exceptions=config.exceptions||[];if(Namespace==="Message_Wall"){$.getJSON(
'/api.php?action=query&list=groupmembers&gmgroups=bot&gmlimit=max&format=json',function(data){var botList=data.users;for(var i=0;i<botList.length;i++){if(botList[i].name===PageName){if(exceptions.indexOf(PageName)===-1){$('.Wall.Board').remove();}break;}}});}}(window.DisableBotMessageWalls));;var ommittedNamespaces=[1,2,3,5,7,9,11,13,15,111,113,115,501,503,829,1200,1201,1202,2000,2001,2002];var lang;var i=0;var filetype=mw.config.get('wgPageName').split('.')[mw.config.get('wgPageName').split('.').length-1];if(filetype=='js'){if($('.jquery').length){lang='jquery';}else{lang='javascript';}}else if(filetype=='css'){lang='css';}else if(wgNamespaceNumber==828){lang='lua';}if(wgAction=='view'&&!$('.diff-article-content').length&&!$('.noarticletext').length&&ommittedNamespaces.indexOf(wgNamespaceNumber)===-1&&!$('#mw-clearyourcache')&&lang!==undefined){if(!$('.'+lang).length){$('#mw-content-text').html('<pre class="'+lang+' source-'+lang+'" id="theme-solarized-light">'+$('#mw-content-text').
html().replace(/<\/pre\>/g,'').replace(/<pre\>/g,'').replace(/<span class\=\"co1\"\>\/\* \*\/<\/span\>/g,'').replace(/\<span class\=\"sy0\"\>\*\<\/span\>/g,'')+'</pre>');}else{$('.'+lang).html($('.'+lang).html().replace(/<span class\=\"co1\"\>\/\* \*\/<\/span\>/g,'').replace(/<span class\=\"co1\"\>\/\/<\/span\>/g,'').replace(/\<span class\=\"coMULTI\"\>\/\*\<\/span\>/g,'').replace(/\/\*/g,'<slashasterisk>').replace(/\*\//g,'<asteriskslash>').replace(/\/\//g,'<slashslash>'));$('#mw-content-text').html($('#mw-content-text').html().replace(/\:\/\//g,'<colonslashslash>').replace(/\/\//g,'').replace(/\/\*/g,'').replace(/\*\//g,'').replace(/\<slashasterisk\>/g,'/*').replace(/\<asteriskslash\>/g,'*/').replace(/\<slashslash\>/g,'//').replace(/\/\* \*\//g,'').replace(/\<span class\=\"sy0\"\>\*\/\<\/span\>/g,'').replace(/\<span class\=\"sy0\"\>\*\<\/span\>\//g,'').replace(/\<colonslashslash\>/g,'://'));}}else if($('.diff-article-content').length&&lang!==undefined){if(!$('.'+lang).length){$(
'.diff-article-content').html('<pre class="'+lang+' source-'+lang+'" id="theme-solarized-light">'+$('.diff-article-content').html().replace(/<\/pre\>/g,'').replace(/<pre\>/g,'').replace(/<span class\=\"co1\"\>\/\* \*\/<\/span\>\//g,'')+'</pre>');}else{for(var i in $('.'+lang)){$('.diff-article-content').html('<pre class="'+lang+' source-'+lang+'" id="theme-solarized-light">'+document.getElementsByClassName(lang)[i].innerHTML.replace(/<span class\=\"co1\"\>\/\/<\/span\>/g,'').replace(/<pre class\=\"de1\"\>/g,'').replace(/<\/pre\>/g,'').replace(/<span class\=\"co1\"\>\/\* \*\/<\/span\>/g,'')+'</pre>');}}};(function($,RAIP){"use strict";if(RAIP){if(typeof(RAIP.init)==='function')return RAIP.init();window.RevealAnonIP=$.extend(RAIP,{permissions:['*']});}window.importArticle({type:'script',articles:['w:c:dev:MediaWiki:RevealAnonIP/code.js']});})(jQuery,window.RevealAnonIP);;(function(module,$,window){'use strict';if(module.loaded||mw.config.get('wgCanonicalSpecialPageName')!=='Search'){
return;}module.loaded=!0;function init(){$('#search-v2-input').autocomplete({serviceUrl:mw.util.wikiScript('api')+'?action=opensearch',appendTo:$('.SearchInput'),deferRequestBy:250,maxHeight:100*(module.maxResults||10),queryParamName:'search',fnPreprocessResults:function(d){d.query=d[0];d.suggestions=d[1];d.data=d[1];return d;},onSelect:function(value,data,event){var url=mw.util.getUrl(value);if(event.shiftKey||event.ctrlKey||event.metaKey){window.open(url);return false;}else{window.location.href=url;}}});}mw.loader.using('jquery.autocomplete').then(init);}((window.dev=window.dev||{}).searchSuggest=window.dev.searchSuggest||{},jQuery,window));;Date.parseISO8601=function(text){"use strict";var when=(/^(\d{4})-?(\d\d)-?(\d\d)[T\s](\d\d):?(\d\d):?(\d\d)(?:\.?(\d+))?(?:Z|\+00(?::?00)?)$/).exec(text);if(!when){return NaN;}return+new Date(when[1],when[2]-1,when[3],when[4],when[5],when[6],('.'+when[7])*1000|0);};(function(window,$,mw,config){"use strict";var loaderData=(function($,mw){var
siteSkin=mw.config.get('skin');if(({oasis:1,wikia:1})[siteSkin]===1){siteSkin='oasis';}else if(({wowwiki:1,uncyclopedia:1,monobook:1,vector:1})[siteSkin]===1){siteSkin='monobook';}else{if(window.console){window.console.log('USERTAGS(Loader): Unsupported skin:',siteSkin);}return;}var username=mw.config.get('wgTitle'),namespace=mw.config.get('wgNamespaceNumber')|0;if(siteSkin==='oasis'){if(({'-1':1,2:1,3:1,500:1,1200:1})[namespace]!==1){return;}if(mw.config.get('wgAction')==='edit'&&namespace!==1200){return;}if(({1200:1,500:1,2:1,3:1})[namespace]===1&&username.indexOf('/')!==-1){return;}if(namespace===-1){username=null;namespace=mw.config.get('wgCanonicalSpecialPageName');if(namespace==='Contributions'){username=window.location.pathname;namespace=window.decodeURIComponent(username.substr(username.lastIndexOf('/')+1));namespace=(namespace!==mw.config.get('wgPageName')&&namespace);username=(/(?:^\?|&)target=([^&]*)/).exec(window.location.search);username=(username&&window.
decodeURIComponent(username[1]));username=username||namespace;username=(username&&username.replace(/_/g,' '));}else if(namespace!=='Following'){return;}username=username||mw.config.get('wgUserName');}}else{if(({2:1,3:1,1200:1})[namespace]!==1){return;}username=username.match(/^[^\/]+/)[0];}if(mw.util.isIPv4Address(username)||mw.util.isIPv6Address(username)){return;}return{skin:siteSkin,user:username};})($,mw);config=($.isPlainObject(config)&&config)||{};if(loaderData){window.UserTagsJS=config;config.loader=loaderData;if((/(?:^\?|&)debugusertags=1(?:&|$)/i).test(window.location.search)){config.debug=!0;}config.modules=($.isPlainObject(config.modules)&&config.modules)||{};if($.isEmptyObject(config.modules)){config.modules={inactive:!0,newuser:!0,autoconfirmed:!0,mwGroups:!0,metafilter:{sysop:['bureaucrat','founder'],bureaucrat:['founder'],chatmoderator:['sysop','bureaucrat']}};}config.modules.stopblocked=config.modules.stopblocked||config.modules.stopblocked===void 0;config.
modules.isblocked=config.modules.isblocked||(config.modules.isblocked===void 0&&loaderData.skin==='monobook');config.modules.i18n=!0;}var importList=(function(config,alwaysOnly){var moduleMap={explode:{s:'u:dev:MediaWiki:UserTags/module.implode.js'}};var list=[],hash={},exts=config.extensions||{},script,data,module;for(module in config.modules){if(exts[module]!==void 0){continue;}if(moduleMap.hasOwnProperty(module)){data=moduleMap[module];if(alwaysOnly&&!data.always){continue;}script=data.s;}else if(!alwaysOnly){script='u:dev:MediaWiki:UserTags/module.'+module+'.js';}else{continue;}if(hash[script]!==1){hash[script]=1;list[list.length]=script;}}list.sort();if(!alwaysOnly){list[list.length]='u:dev:MediaWiki:UserTags/core.js';}return list;})(config,!loaderData);if(!importList.length){window.UserTagsJS=null;try{delete window.UserTagsJS;}catch(e){}return;}if(!loaderData){window.UserTagsJS=config={};}config.extensions=($.isPlainObject(config.extensions)&&config.extensions)||{};var coreDeps
=['mediawiki.util'];mw.loader.load(coreDeps,null,true);if(config.debug!=='noload'){mw.loader.using(coreDeps,function(){window.importArticles({type:'script',articles:importList});});}else{config.imports=importList;}})(window,jQuery,mediaWiki,window.UserTagsJS);;require(['wikia.window','jquery','mw','wikia.mustache'],function(window,$,mw,Mustache){'use strict';var config=mw.config.get(['wgAction','wgNamespaceNumber','wgTitle','wgUserGroups','wgUserName']),groups=config.wgUserGroups.join(' '),loading=0;if(config.wgNamespaceNumber===1202){$('#ca-talk').remove();return;}else if(config.wgTitle.indexOf('/')!==-1||config.wgNamespaceNumber!==1200||!(config.wgUserName===config.wgTitle||/sysop|threadmoderator|vstf|helper|staff/.test(groups))||config.wgAction!=='edit'||window.WallGreetingButtonLoaded){return;}window.WallGreetingButtonLoaded=!0;function preload(){if(++loading===2){$.when(window.dev.i18n.loadMessages('WallGreetingButton'),mw.loader.using(['mediawiki.Title'])).then(init);}}function
init(i18n){i18n.useUserLang();var params={url:new mw.Title(config.wgTitle,1202).getUrl(),wallUrl:new mw.Title(config.wgTitle,1200).getUrl()};['editGreeting','history','wallHistory','delete','protect','raw'].forEach(function(el){params[el]=i18n.msg(el).plain();});$('#WikiaMainContentContainer').prepend(Mustache.render('<div class="page-header" id="PageHeader" style="padding: 0;">'+'<div class="UserProfileActionButton" id="EditMessageWallGreeting">'+'<div class="wds-button-group" id="ca-edit" style="text-align: left;">'+'<a accesskey="e" href="{{url}}?action=edit" class="wds-is-squished wds-button">'+window.dev.wds.icon('pencil-small').outerHTML+'<span>{{editGreeting}}</span>'+'</a>'+'<div class="wds-dropdown">'+'<div class="wds-button wds-is-squished wds-dropdown__toggle">'+'<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" class="wds-icon wds-icon-tiny wds-dropdown__toggle-chevron" id="wds-icons-dropdown-tiny">'+
'<path d="M6 9l4-5H2" fill-rule="evenodd"></path>'+'</svg>'+'</div>'+'<div class="wds-dropdown__content wds-is-not-scrollable wds-is-right-aligned" style="z-index: 2;">'+'<ul class="wds-list wds-is-linked">'+'<li><a id="ca-history" href="{{url}}?action=history">{{history}}</a></li>'+'<li><a accesskey="h" href="{{wallUrl}}?action=history">{{wallHistory}}</a></li>'+(/sysop|content-moderator|vstf|helper|staff/.test(groups)?'<li><a id="ca-delete" href="{{url}}?action=delete">{{delete}}</a></li>'+(window.WallGreetingButtonProtect?'<li><a id="ca-protect" href="{{url}}?action=protect">{{protect}}</a></li>':''):'')+(window.WallGreetingButtonRaw?'<li><a id="ca-raw" href="{{url}}?action=raw">{{raw}}</a></li>':'')+'</ul>'+'</div>'+'</div>'+'</div>'+'</div>'+'</div>',params));}importArticles({type:'script',articles:['u:dev:MediaWiki:I18n-js/code.js','u:dev:MediaWiki:WDSIcons/code.js']});mw.hook('dev.i18n').add(preload);mw.hook('dev.wds').add(preload);});;(function(){var $list=$(
'.page-header__contribution-buttons .wds-list'),config=mw.config.get(['wgArticleId','wgNamespaceNumber','wgPageName','wgUserLanguage']),title,$form;if(!$list.exists()||config.wgArticleId===0||window.FollowDropdownLoaded){return;}window.FollowDropdownLoaded=!0;function mapInput(value,key){return $('<input>',{name:key,type:'hidden',value:value});}function apiCallback(d){if(d.error){return;}var el=d.watchlistraw[0],msg=d.query.allmessages;if(el&&el.title===title.getPrefixedText()){insert('unwatch',msg[0]['*']);}else{insert('watch',msg[1]['*']);}$form=$('<form>',{action:mw.util.getUrl(config.wgPageName),enctype:'multipart/form-data',id:'FollowDropdownForm',method:'post'}).append($.map({action:'watch',title:config.wgPageName,wpEditToken:mw.user.tokens.get('editToken')},mapInput)).appendTo(document.body);}function click(e){e.preventDefault();$form.submit();}function insert(action,text){$list.append($('<li>').append($('<a>',{click:click,href:mw.util.getUrl(config.wgPageName,{action:action})
,text:text})));}mw.loader.using(['mediawiki.api','mediawiki.util','mediawiki.Title'],function(){title=new mw.Title(config.wgPageName);new mw.Api().get({action:'query',list:'watchlistraw',meta:'allmessages',ammessages:'unwatch|watch',amlang:config.wgUserLanguage,wrcontinue:title.namespace+'|'+title.getMainText(),wrlimit:1}).done(apiCallback);});})();;(function(){'use strict';var $list=$('.page-header__contribution-buttons .wds-list, .UserProfileActionButton .WikiaMenuElement');if(!$list.exists()||window.WhatLinksHereLoaded){return;}window.WhatLinksHereLoaded=!0;var config=mw.config.get(['wgPageName','wgUserLanguage']);mw.hook('dev.fetch').add(function(fetch){fetch('whatlinkshere').then(function(text){var url=mw.util.getUrl('Special:WhatLinksHere/'+config.wgPageName);$list.append($('<li>',{id:'ca-whatlinkshere'}).append($('<a>',{href:url,text:text})));if(mw.util.getParamValue('redirect')==='no'){$('.redirectText').append($('<br>'),$('<span>',{id:'redirectWLH'}).append('→ ',$('<a>',{
'class':'redirectWLH-link',href:url,text:text})));}});});importArticle({type:'script',article:'u:dev:MediaWiki:Fetch.js'});})();;(function($,mw){'use strict';if(window.MassPatrolLoaded){return;}window.MassPatrolLoaded=!0;importArticle({type:'script',article:'u:dev:MediaWiki:I18n-js/code.js'});var i18n;var MP={_state:0,defines:$.extend({CONSECUTIVE_DIFF:0,NON_CONSECUTIVE_DIFF:1,SPECIAL_NEW_PAGES:2}),config:mw.config.get(['wgPageName','wgArticleId','wgUserGroups','wgNamespaceNumber'])};var MPFunctions={init:function(i18nData){i18n=i18nData;if($('.patrollink').exists()){MP._state=MP.defines.CONSECUTIVE_DIFF;}else if(document.URL.match(/.+\/index\.php\?title=.+&diff=\d+&oldid=\d+/)&&MPFunctions.isAllowedTo()){MP._state=MP.defines.NON_CONSECUTIVE_DIFF;}else if(MP.config.wgPageName.match(/.+\:NewPages/)&&MPFunctions.isAllowedTo()){MP._state=MP.defines.SPECIAL_NEW_PAGES;}else{return;}MPFunctions.addLink();},fetchData:function(ns){if(MPFunctions.isSpecialNewPages()){ns='';}$.get(mw.util.
wikiScript('api'),{action:'query',list:'recentchanges',rctoken:'patrol',rcshow:'!patrolled',rctype:'edit|new',rclimit:1000,rcnamespace:ns,format:'json'},function(d){if(MPFunctions.isSpecialNewPages()){MPFunctions.processSpecial(d,d.query.recentchanges[0].patroltoken);}else{MPFunctions.processDiff(d,d.query.recentchanges[0].patroltoken);}});},processDiff:function(data,token){var k=0;for(var i=0;i<Object.keys(data.query.recentchanges).length;i++){if(data.query.recentchanges[i].pageid===MP.config.wgArticleId){MPFunctions.patrolPage(data.query.recentchanges[i].rcid,token);k+=1;}}MPFunctions.result(k);},processSpecial:function(data,token){var titles=[];var k=0;$('.not-patrolled').each(function(){titles.push($(this).find('.mw-newpages-pagename').attr('title'));$(this).removeClass('not-patrolled');});if(titles.length<=0){MPFunctions.result(0);return;}for(var i=0;i<Object.keys(data.query.recentchanges).length;i++){if(titles.indexOf(data.query.recentchanges[i].title)>-1){MPFunctions.patrolPage(
data.query.recentchanges[i].rcid,token);k+=1;}}MPFunctions.result(k);},patrolPage:function(rcid,token){$.post(mw.util.wikiScript('api'),{action:'patrol',token:token,rcid:rcid},function(){});},addLink:function(){if(MPFunctions.isConsecutiveDiff()){$('.patrollink').after('&nbsp;[<a class="masspatrol">'+i18n.msg('patrol').escape()+'</a>]');}else if(MPFunctions.isNonConsecutiveDiff()){$('.diff-multi').append('&nbsp;[<a class="masspatrol">'+i18n.msg('patrol').escape()+'</a>]');}else{$('.mw-submit').append('&nbsp;[<a class="masspatrol">'+i18n.msg('patrol').escape()+'</a>]');}$('.masspatrol').on('click',function(){$('.masspatrol').html('<img src="//images.wikia.nocookie.net/dev/images/8/82/Facebook_throbber.gif"'+'style="vertical-align: baseline;" border="0" alt='+i18n.msg('patrolling').escape()+'/>');MPFunctions.fetchData(MP.config.wgNamespaceNumber);});},result:function(k){var msg;if(k>0){msg=i18n.msg('patrolled').plain().replace('$1',k);}else if(k<=0){msg=i18n.msg('patrolledNothing').plain
();}$('.patrollink').empty();$('.masspatrol').css('color','grey').text(msg);},isAllowedTo:function(){if(/sysop|content-moderator|vstf|staff|helper/.test(MP.config.wgUserGroups.join())){return true;}else{return false;}},isConsecutiveDiff:function(){return MP._state===MP.defines.CONSECUTIVE_DIFF;},isNonConsecutiveDiff:function(){return MP._state===MP.defines.NON_CONSECUTIVE_DIFF;},isSpecialNewPages:function(){return MP._state===MP.defines.SPECIAL_NEW_PAGES;}};mw.hook('dev.i18n').add(function(i18n){i18n.loadMessages('MassPatrol').then(MPFunctions.init);});})(jQuery,mediaWiki);;window.RedirectManagementSitewide=!0;importArticle({type:'script',article:'u:dev:MediaWiki:RedirectManagement/code.js'});;(function(){if($('#UserProfileMasthead').length===0||window.GlobalEditcountLoaded){return;}window.GlobalEditcountLoaded=!0;var GlobalEditcount={cache:$.storage.get('GlobalEditcount')||{},preload:function(i18n){this.user=$('#UserProfileMasthead h1').text();this.url=mw.util.getUrl(
'Special:Editcount/'+this.user);$.when(i18n.loadMessages('GlobalEditcount'),this.editcount()).then($.proxy(this.init,this));},editcount:function(){this.promise=new $.Deferred();var cache=this.cache[this.user];if(cache&&cache.timestamp&&Date.now()-cache.timestamp<60*60*1000){this.promise.resolve(cache.value);return this.promise;}$.get(this.url,$.proxy(this.cbEditcount,this));return this.promise;},cbEditcount:function(page){var edits=$(page).find('.TablePager th').eq(7).text();if(edits){this.cache[this.user]={timestamp:Date.now(),value:edits};$.storage.set('GlobalEditcount',this.cache);this.promise.resolve(edits);}},init:function(i18n,edits){mw.util.addCSS('.UserProfileMasthead .globaledit-details a:hover {'+'color: '+mw.config.get('wgSassParams')['color-links']+';'+'}');this.$element=$('<div>',{'class':'globaledit-details discussion-details tally'}).append($('<a>',{id:'globaleditAllEditsByUser',href:window.GlobalEditcountPlain?'#':this.url}).append($('<em>',{text:edits}),$('<span>',{
'class':'globaledit-label','text':i18n.msg('globaleditcount').plain()})));$('.tally').first().after(this.$element);mw.hook('GlobalEditcount.loaded').fire(this);}};mw.hook('dev.i18n').add($.proxy(GlobalEditcount.preload,GlobalEditcount));if(!window.dev||!window.dev.i18n){importArticle({type:'script',article:'u:dev:MediaWiki:I18n-js/code.js'});}importArticle({type:'style',article:'u:dev:MediaWiki:GlobalEditcount.css'});})();;mw.loader.using(['mediawiki.api','mediawiki.user'],function(){if(!/sysop|content-moderator|content-volunteer|vstf|staff|vanguard|helper|wiki-manager|content-team-member/.test(mw.config.get('wgUserGroups').join())||window.MassProtectLoaded){return;}window.MassProtectLoaded=!0;var Api=new mw.Api(),i18n,placement,preloads=3,protectModal,paused=!0;function generateElement(type){return $('<p>',{text:i18n.msg(type).plain()}).append($('<select>',{id:'protect-'+type}).append($('<option>',{value:'',text:i18n.msg('unset').plain()}),$('<option>',{value:type+'=all',text:i18n
.msg('all').plain()}),$('<option>',{value:type+'=autoconfirmed',text:i18n.msg('autoconfirmed').plain()}),$('<option>',{value:type+'=sysop',text:i18n.msg('sysop').plain()})));}function formHtml(){return $('<form>',{'class':'WikiaForm'}).append($('<fieldset>').append($('<p>',{text:i18n.msg('protection').plain(),id:'protection-bold'}),generateElement('edit'),generateElement('move'),generateElement('upload'),generateElement('create'),$('<hr/>'),$('<p>',{text:i18n.msg('expiry').plain(),id:'protection-bold'}).append($('<input>',{type:'text',id:'protect-expiry',placeholder:'indefinite'})),$('<hr/>'),$('<p>',{text:i18n.msg('reason').plain(),id:'protection-bold'}).append($('<input>',{type:'text',id:'protect-reason'})),$('<hr/>'),$('<p>',{text:i18n.msg('instructions').plain()}),$('<textarea/>',{id:'text-mass-protect'}),$('<hr/>'),$('<div>',{id:'text-error-output',text:i18n.msg('error').plain()}).append($('<br/>')))).prop('outerHTML');}function preload(){if(--preloads===0){placement=window.dev.
placement.loader;window.dev.i18n.loadMessages('MassProtect').then(init);}}function init(i18nData){i18n=i18nData;placement.script('MassProtect');$(placement.element('tools'))[placement.type('prepend')]($('<li>',{'class':'custom'}).append($('<a>',{id:'t-mp',text:i18n.msg('title').plain(),click:click})));}function click(){if(protectModal){protectModal.show();return;}protectModal=new window.dev.modal.Modal({content:formHtml(),id:'form-mass-protect',size:'medium',title:i18n.msg('title').escape(),buttons:[{id:'mp-start',text:i18n.msg('initiate').escape(),primary:!0,event:'start'},{id:'mp-pause',text:i18n.msg('pause').escape(),primary:!0,event:'pause',disabled:!0},{text:i18n.msg('addCategory').escape(),primary:!0,event:'addCategoryContents'},{text:i18n.msg('cancel').escape(),event:'close'}],events:{addCategoryContents:addCategoryContents,pause:pause,start:start}});protectModal.create();protectModal.show();}function pause(){paused=!0;document.getElementById('mp-pause').setAttribute(
'disabled','');document.getElementById('mp-start').removeAttribute('disabled');}function start(){paused=!1;document.getElementById('mp-start').setAttribute('disabled','');document.getElementById('mp-pause').removeAttribute('disabled');process();}function process(){if(paused){return;}var txt=document.getElementById('text-mass-protect'),pages=txt.value.split('\n'),currentPage=pages[0];if(!currentPage){pause();$('#text-error-output').append(i18n.msg('finished').escape()+' '+i18n.msg('done').escape()+'<br/>');}else{protectPage(currentPage);}pages=pages.slice(1,pages.length);txt.value=pages.join('\n');}function addCategoryContents(){var category=prompt(i18n.msg('categoryPrompt').plain());if(!category){return;}Api.get({action:'query',list:'categorymembers',cmtitle:'Category:'+category,cmlimit:'max'}).done(function(d){if(!d.error){var data=d.query;for(var i in data.categorymembers){var currTitles=$('#text-mass-protect').val();$('#text-mass-protect').val(currTitles+data.categorymembers[i].
title+'\n');}}else{$('#text-error-output').append(i18n.msg('categoryFail').escape()+category+' : '+d.error.code+'<br/>');}}).fail(function(){$('#text-error-output').append(i18n.msg('categoryFail').escape()+category+'!<br/>');});}function protectPage(page){Api.post({action:'protect',expiry:$('#protect-expiry').val()||$('#protect-expiry').attr('placeholder'),protections:$('#protect-create').val()||[$('#protect-edit').val(),$('#protect-move').val(),$('#protect-upload').val()].filter(Boolean).join('|'),watchlist:'preferences',title:page,reason:$('#protect-reason').val(),token:mw.user.tokens.get('editToken')}).done(function(d){if(!d.error){console.log(i18n.msg('success',page).plain());}else{console.log(i18n.msg('fail').escape()+page+': '+d.error.code);$('#text-error-output').append(i18n.msg('fail').escape()+page+': '+d.error.code+'<br/>');}}).fail(function(){console.log(i18n.msg('fail').escape()+page);$('#text-error-output').append(i18n.msg('fail').escape()+page+'<br/>');});setTimeout(
process,window.massProtectDelay||1000);}mw.hook('dev.i18n').add(preload);mw.hook('dev.modal').add(preload);mw.hook('dev.placement').add(preload);importArticles({type:'script',articles:['u:dev:MediaWiki:I18n-js/code.js','u:dev:MediaWiki:Modal.js','u:dev:MediaWiki:Placement.js']},{type:'style',articles:['u:dev:MediaWiki:MassProtect.css']});});;require(['jquery','mw'],function($,mw){'use strict';window.LockForums=window.LockForums||{};var LockForums=$.extend({lockMessageWalls:!1,expiryDays:30,expiryMessage:'This thread hasn\'t been commented on for over <expiryDays> days. There is no need to reply.',warningDays:0,warningMessage:'This thread hasn\'t been commented on for over <warningDays> days. Please reply ONLY if a response is really needed.',disableOn:[],banners:!1,expiryBannerMessage:
'<span style="color: maroon; font-weight: bold;">Note:</span> This topic has been unedited for <actualDays> days. It is considered <b>archived</b> - the discussion is over. If you feel this thread needs additional information, contact an administrator.',warningBannerMessage:'<span style="color: maroon; font-weight: bold;">Note:</span> This topic has been unedited for <actualDays> days. It is considered <b>archived</b> - the discussion is over. Do not add to it unless it really <i>needs</i> a response.',warningPopup:!1,warningPopupMessage:'This thread has not had a response for over <actualDays> days; are you sure you want to reply?',},window.LockForums);['expiryBannerStyle','warningBannerStyle'].forEach(function(propName){var prop=LockForums[propName];if(prop!=='stylesheet'&&!$.isPlainObject(prop)){LockForums[propName]={};}});var config=mw.config.get(['wgNamespaceNumber','wikiaPageType','wgTitle','wgNow']);var namespaceWhitelist=[1201];if(LockForums.lockMessageWalls){
namespaceWhitelist.push(1200);}if(namespaceWhitelist.indexOf(config.wgNamespaceNumber)===-1||(config.wikiaPageType!=='forum'&&!LockForums.lockMessageWalls)||LockForums.disableOn.indexOf(config.wgTitle)!==-1){return;}function daysToMilliseconds(days){return days*24*60*60*1000;}function millisecondsToDays(milliseconds){return milliseconds/1000/60/60/24;}var expiryDaysPattern=/<expiryDays>/g;var actualDaysPattern=/<actualDays>/g;var warningDaysPattern=/<warningDays>/g;$('#Wall > .comments > .SpeechBubble').each(function(){var $thread=$(this);var then=$thread.find('.permalink').last().text().split(/,(.+)/);if(then.length===1){then=then[0];}else{then=then[1];}var currentDate=config.wgNow;var oldDate=new Date(then.trim());var diffMilliseconds=currentDate.getTime()-oldDate.getTime();var diffDays=Math.floor(millisecondsToDays(diffMilliseconds));var expiryMilliseconds=daysToMilliseconds(LockForums.expiryDays);var warningMilliseconds=daysToMilliseconds(LockForums.warningDays);var isExpired=
diffMilliseconds>expiryMilliseconds;var shouldWarn=!isExpired&&warningMilliseconds>0&&diffMilliseconds>warningMilliseconds;var expiryMessage=LockForums.expiryMessage.replace(expiryDaysPattern,LockForums.expiryDays).replace(actualDaysPattern,diffDays);var warningMessage=LockForums.warningMessage.replace(warningDaysPattern,LockForums.warningDays).replace(actualDaysPattern,diffDays).replace(expiryDaysPattern,LockForums.expiryDays);var warningPopupMessage=LockForums.warningPopupMessage.replace(warningDaysPattern,LockForums.warningDays).replace(actualDaysPattern,diffDays);var expiryBannerMessage=LockForums.expiryBannerMessage.replace(expiryDaysPattern,LockForums.expiryDays).replace(actualDaysPattern,diffDays);var warningBannerMessage=LockForums.warningBannerMessage.replace(warningDaysPattern,LockForums.warningDays).replace(actualDaysPattern,diffDays);var $replyBody=$thread.find('textarea.replyBody');if(isExpired){$thread.find('.buttons > .quote-button').remove();$replyBody.attr({placeholder
:expiryMessage,disabled:'disabled'});}else if(shouldWarn){$replyBody.attr('placeholder',warningMessage);if(LockForums.warningPopup){$thread.find('.replyButton').on('click',function(event){if(!confirm(warningPopupMessage)){event.stopPropagation();}});}}if((isExpired||shouldWarn)&&LockForums.banners){var message=isExpired?expiryBannerMessage:warningBannerMessage;var styles=isExpired?LockForums.expiryBannerStyle:LockForums.warningBannerStyle;var $banner=$('<div>',{id:'forum-warning-banner',class:'warning-banner-'+(isExpired?'expired':'warning'),html:message});if(styles!=='stylesheet'){$banner.css({'background-color':'whitesmoke','border':'2px solid #f66','color':'black','margin':'0.8em 0px','padding':'0.5em 12px'});$banner.css(styles);}$thread.before($banner);}});});;require(['jquery','mw'],function($,mw){var storageKey='ls-wikianotifications';function log(error){console.log('WikiaNotifications error: '+error);}function getNotificationData(){return(new mw.Api()).get({action:'parse',
disablepp:'',page:'MediaWiki:Custom-WikiaNotifications',format:'json'}).then(function(res){var dfd=$.Deferred();if(res.error){return dfd.rejectWith(this,[res.error.info]);}var text=res.parse.text['*'].trim();text=(text||'').replace(/<script>[\s\S]*?<\/script>/igm,'').replace(/<!\-\-[\s\S]*?\-\->/igm,'');if(!text.length||!text.trim().length){return dfd.rejectWith(this,['empty content']);}return dfd.resolveWith(this,[{version:res.parse.revid,contents:text}]);});}function showNotificationIfNotViewed(notification){var notifsData=JSON.parse(window.localStorage.getItem(storageKey))||{},hasSeen=(notifsData[mw.config.get('wgCityId')]===notification.version),$notificationArea=$('#WikiaNotifications'),hasNotifications=$notificationArea.length?1:0;if(hasSeen){return;}var $notif=$('<li/>').attr('class','custom').append($('<div>').attr('data-type','2').html(notification.contents).append($('<a>').addClass('sprite close-notification')));if(hasNotifications){$notificationArea.append($notif);}else{$(
'body').addClass('notifications').append($('<ul id="WikiaNotifications" class="WikiaNotifications"></ul>').append($notif));}$('.sprite.close-notification').on('click',function(){$notif.hide();notifsData[mw.config.get('wgCityId')]=notification.version;window.localStorage.setItem(storageKey,JSON.stringify(notifsData));});}mw.loader.using('mediawiki.api',function(){if(mw.config.get('wgUserName')){$(function(){getNotificationData().then(showNotificationIfNotViewed).fail(log);});}});});;require(['wikia.window','jquery','mw'],function(window,$,mw){var config=mw.config.get(['wgScriptPath','wgCanonicalSpecialPageName']);if(config.wgCanonicalSpecialPageName!=='Community'||$('#wiki-manager-module').length){return;}function wikiManagerModule(wds,i18n){var api=new mw.Api();api.get({action:'query',meta:'allmessages',ammessages:'custom-Wiki_Manager'}).done(function(r,s){if(s!=='success'||!r.query){return;}api.get({action:'query',list:'users',ususers:r.query.allmessages[0]['*'],usprop:'groups'}).done
(function(r,s){if(s!=='success'||!r.query){return;}var user=r.query.users[0];$.getJSON(config.wgScriptPath+'/api/v1/User/Details',{ids:user.userid,size:50}).done(function(r,s){if(s!=='success'||!r.items){return;}var user2=r.items[0],badge=user.groups.includes('staff')?'staff':user.groups.includes('helper')?'helper':undefined;if(badge){badge={badgeText:badge,badgeMarkup:wds.badge(badge,{width:18}).outerHTML};}require(['wikia.mustache','communitypage.templates.mustache'],function(mustache,templates){$(mustache.render(templates.adminsModule,{topAdminsData:{topAdminsHeaderText:i18n.msg('wiki-manager').plain(),topAdminsList:[{avatar:'<img src="'+user2.avatar+'">',badge:badge,profilePage:user2.url,userName:user.name}],adminsText:'<a href="https://community.fandom.com/wiki/Help:Wiki_Managers">'+i18n.msg('wiki-manager_desc').escape()+'</a>'}},{topAdmins:templates.topAdmins.replace(/([^{]){{adminsText}}([^}])/,'$1{{{adminsText}}}$2')})).attr('id','wiki-manager-module').insertAfter(
'.community-page-admins-module');});});});});}$.when(new $.Deferred(function(deferred){if(window.dev&&window.dev.wds){deferred.resolve(window.dev.wds);}else{mw.hook('dev.wds').add(function(wds){deferred.resolve(wds);});importArticle({type:'script',article:'u:dev:MediaWiki:WDSIcons/code.js'});}}),new $.Deferred(function(deferred){if(window.dev&&window.dev.i18n){window.dev.i18n.loadMessages('WikiManager_Nameplate').done(deferred.resolve);}else{mw.hook('dev.i18n').add(function(i18n){i18n.loadMessages('WikiManager_Nameplate').done(deferred.resolve);});importArticle({type:'script',article:'u:dev:MediaWiki:I18n-js/code.js'});}}),mw.loader.using(['mediawiki.api','mediawiki.util'])).done(wikiManagerModule);});;;mw.loader.state({"wikia.fake.articles.bb7a8230195257c3eebef9e8a2dc5de9":"ready"});

/* cache key: vsbattles:resourceloader:filter:minify-js:7:9d2027dae7671882176a3e30ea2230f5 */