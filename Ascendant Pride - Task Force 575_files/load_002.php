var mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}},mwNow=(function(){var perf=window.performance,navStart=perf&&perf.timing&&perf.timing.navigationStart;return navStart&&typeof perf.now==='function'?function(){return navStart+perf.now();}:function(){return Date.now();};}()),mediaWikiLoadStart;function isCompatible(str){var ua=str||navigator.userAgent;return!!((function(){'use strict';return!this&&!!Function.prototype.bind&&!!window.JSON;}())&&'querySelector'in document&&'localStorage'in window&&'addEventListener'in window&&!(ua.match(/webOS\/1\.[0-4]|SymbianOS|Series60|NetFront|Opera Mini|S40OviBrowser|MeeGo|Android.+Glass|^Mozilla\/5\.0 .+ Gecko\/$|googleweblight/)||ua.match(/PlayStation/i)));}(function(){var NORLQ,script;if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');NORLQ=window.NORLQ||[];while(NORLQ.length){NORLQ.shift()();}window.NORLQ={push:function(
fn){fn();}};window.RLQ={push:function(){}};return;}function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/load.php"});mw.loader.register([["site","0g7ruov",[1]],["site.styles","177lxw4",[],"site"],["noscript","11xkcf8",[],"noscript"],["filepage","07cxde3"],["user.groups","0678dop",[5]],["user","1hwh6iz",[6],"user"],["user.styles","12j04t1",[],"user"],["user.defaults","10pvdkn"],["user.options","0j3lz3q",[7],"private"],["user.tokens","13jl9mv",[],"private"],["mediawiki.language.data","0msaucq",[177]],["mediawiki.skinning.elements","0yzede6"],["mediawiki.skinning.content","19npvzq"],["mediawiki.skinning.interface","0h1quhm"],["mediawiki.skinning.content.parsoid","06hejn4"],["mediawiki.skinning.content.externallinks","0v3xtja"],["jquery.accessKeyLabel","1eg4uzn",[25,134]],["jquery.appear","1al52my"],["jquery.async","0f1incc"],["jquery.autoEllipsis","1peubnp",[37]],["jquery.badge","1cidjom",[174]],["jquery.byteLength","1t1crd7"],["jquery.byteLimit","1aedleh",[21]],[
"jquery.checkboxShiftClick","0fy1l90"],["jquery.chosen","0xunvm2"],["jquery.client","0krq1wn"],["jquery.color","06txm58",[27]],["jquery.colorUtil","1z0aij1"],["jquery.confirmable","07x8jfg",[178]],["jquery.cookie","13z0f35"],["jquery.expandableField","04ktql5"],["jquery.farbtastic","12w8brc",[27]],["jquery.footHovzer","13uewz9"],["jquery.form","1qaul60"],["jquery.fullscreen","1yat3x0"],["jquery.getAttrs","1yo132j"],["jquery.hidpi","1vsw12p"],["jquery.highlightText","0v93i89",[134]],["jquery.hoverIntent","0rcvgyg"],["jquery.i18n","1wucd8h",[176]],["jquery.localize","1ei8xab"],["jquery.makeCollapsible","14jl6tv"],["jquery.mockjax","1qpu7ab"],["jquery.mw-jump","121x4f5"],["jquery.mwExtension","0wr3tcz"],["jquery.placeholder","07kwo4x"],["jquery.qunit","0v5dugz"],["jquery.spinner","07ujq6c"],["jquery.jStorage","12xwe7w"],["jquery.suggestions","160j0e7",[37]],["jquery.tabIndex","1960wsm"],["jquery.tablesorter","17zz8jg",[134,179]],["jquery.textSelection","1fjvvv4",[25]],[
"jquery.throttle-debounce","08nyrb1"],["jquery.xmldom","1xbpeya"],["jquery.tipsy","09wtqkd"],["jquery.ui.core","0y3j8yv",[57],"jquery.ui"],["jquery.ui.core.styles","1ei1zbb",[],"jquery.ui"],["jquery.ui.accordion","1i4yv6h",[56,76],"jquery.ui"],["jquery.ui.autocomplete","1tcoprw",[65],"jquery.ui"],["jquery.ui.button","05xdhd2",[56,76],"jquery.ui"],["jquery.ui.datepicker","1eybbx2",[56],"jquery.ui"],["jquery.ui.dialog","0ep3mde",[60,63,67,69],"jquery.ui"],["jquery.ui.draggable","12qdiix",[56,66],"jquery.ui"],["jquery.ui.droppable","14j0f6s",[63],"jquery.ui"],["jquery.ui.menu","0lspqd3",[56,67,76],"jquery.ui"],["jquery.ui.mouse","0em7z01",[76],"jquery.ui"],["jquery.ui.position","0ik3fn2",[],"jquery.ui"],["jquery.ui.progressbar","0j8u9kt",[56,76],"jquery.ui"],["jquery.ui.resizable","10964rp",[56,66],"jquery.ui"],["jquery.ui.selectable","1dmkz4v",[56,66],"jquery.ui"],["jquery.ui.slider","0mjaoq7",[56,66],"jquery.ui"],["jquery.ui.sortable","0llrxd3",[56,66],"jquery.ui"],["jquery.ui.spinner",
"0juwyzr",[60],"jquery.ui"],["jquery.ui.tabs","01weil4",[56,76],"jquery.ui"],["jquery.ui.tooltip","1ysqmk0",[56,67,76],"jquery.ui"],["jquery.ui.widget","1gnmb8g",[],"jquery.ui"],["jquery.effects.core","0zban1g",[],"jquery.ui"],["jquery.effects.blind","1t5l1j5",[77],"jquery.ui"],["jquery.effects.bounce","17ubztb",[77],"jquery.ui"],["jquery.effects.clip","0j4xgfa",[77],"jquery.ui"],["jquery.effects.drop","1uzd1oi",[77],"jquery.ui"],["jquery.effects.explode","0dj8znj",[77],"jquery.ui"],["jquery.effects.fade","1t5tkcb",[77],"jquery.ui"],["jquery.effects.fold","144ux5b",[77],"jquery.ui"],["jquery.effects.highlight","0fu8dbj",[77],"jquery.ui"],["jquery.effects.pulsate","04s6n77",[77],"jquery.ui"],["jquery.effects.scale","1h055dv",[77],"jquery.ui"],["jquery.effects.shake","0tpiz0c",[77],"jquery.ui"],["jquery.effects.slide","1ovmg7n",[77],"jquery.ui"],["jquery.effects.transfer","0p7i45z",[77],"jquery.ui"],["json","0678dop"],["moment","1qjk1lo",[174]],["mediawiki.apihelp","0c6tc8t"],[
"mediawiki.template","11x4coc"],["mediawiki.template.mustache","04xor74",[94]],["mediawiki.template.regexp","0bwm75g",[94]],["mediawiki.apipretty","01p9boq"],["mediawiki.api","0ino8kp",[151,9]],["mediawiki.api.category","0e1aapj",[139,98]],["mediawiki.api.edit","00fy8x1",[139,98]],["mediawiki.api.login","0rje6rt",[98]],["mediawiki.api.options","1x50czv",[98]],["mediawiki.api.parse","0c4iskx",[98]],["mediawiki.api.upload","0vqqfvt",[100]],["mediawiki.api.user","00ht3kp",[98]],["mediawiki.api.watch","1m5n3ty",[98]],["mediawiki.api.messages","0st2e75",[98]],["mediawiki.api.rollback","0eeu8g3",[98]],["mediawiki.content.json","08s20pk"],["mediawiki.confirmCloseWindow","1wsq6wt"],["mediawiki.debug","1jqsij9",[32]],["mediawiki.diff.styles","1fi1sge"],["mediawiki.feedback","0en75es",[139,128,269]],["mediawiki.feedlink","1jswrox"],["mediawiki.filewarning","1snekx7",[265]],["mediawiki.ForeignApi","1o0q6on",[117]],["mediawiki.ForeignApi.core","19pi63f",[98,261]],["mediawiki.helplink","0sk99d9"],[
"mediawiki.hidpi","0gmzitr",[36],null,null,"return'srcset'in new Image();"],["mediawiki.hlist","0x6nk19"],["mediawiki.htmlform","025e2yq",[22,134]],["mediawiki.htmlform.checker","08bgt56"],["mediawiki.htmlform.ooui","08trn9y",[265]],["mediawiki.htmlform.styles","1vszkyl"],["mediawiki.htmlform.ooui.styles","04c0vp7"],["mediawiki.icon","0y0fnze"],["mediawiki.inspect","0zok8k7",[21,134]],["mediawiki.messagePoster","13viq4y",[116]],["mediawiki.messagePoster.wikitext","04rwwi3",[100,128]],["mediawiki.notification","0ob0e25",[187]],["mediawiki.notify","1b0pxtt"],["mediawiki.notification.convertmessagebox","1pa3fdo",[130]],["mediawiki.notification.convertmessagebox.styles","1hqqi5p"],["mediawiki.RegExp","059706n"],["mediawiki.pager.tablePager","0fnxnkb"],["mediawiki.searchSuggest","1pnusws",[35,49,98]],["mediawiki.sectionAnchor","0mmjm79"],["mediawiki.storage","1y86kzy"],["mediawiki.Title","0pdd0wa",[21,151]],["mediawiki.Upload","0btrydh",[104]],["mediawiki.ForeignUpload","1bbg9tz",[116,140]]
,["mediawiki.ForeignStructuredUpload.config","1fvsh13"],["mediawiki.ForeignStructuredUpload","0zx9uyo",[142,141]],["mediawiki.Upload.Dialog","0s797r5",[145]],["mediawiki.Upload.BookletLayout","182rbbi",[140,178,149,258,92,267,269,275,276]],["mediawiki.ForeignStructuredUpload.BookletLayout","0v7wt3e",[143,145,107,182,250,247]],["mediawiki.toc","1kgpn7u",[155]],["mediawiki.Uri","0xth276",[151,96]],["mediawiki.user","0rz0yws",[105,155,138,8]],["mediawiki.userSuggest","0f4ys7g",[49,98]],["mediawiki.util","0shaqj3",[16,131]],["mediawiki.viewport","1hgwbfe"],["mediawiki.checkboxtoggle","1ra66au"],["mediawiki.checkboxtoggle.styles","1n4mhom"],["mediawiki.cookie","1augwu3",[29]],["mediawiki.toolbar","0dihua9",[52]],["mediawiki.experiments","0j70q2x"],["mediawiki.action.edit","1qouq7y",[22,52,159,98]],["mediawiki.action.edit.styles","1qvzta3"],["mediawiki.action.edit.collapsibleFooter","0qlvl32",[41,126,138]],["mediawiki.action.edit.preview","0jjz39j",[33,47,52,98,112,178]],[
"mediawiki.action.history","0wwe4nq"],["mediawiki.action.history.styles","0zrw3gl"],["mediawiki.action.history.diff","1fi1sge"],["mediawiki.action.view.dblClickEdit","0ntuz3a",[187,8]],["mediawiki.action.view.metadata","08zf52j"],["mediawiki.action.view.categoryPage.styles","01kq96a"],["mediawiki.action.view.postEdit","0q74bqc",[155,178,94]],["mediawiki.action.view.redirect","0deueb2",[25]],["mediawiki.action.view.redirectPage","0d084ft"],["mediawiki.action.view.rightClickEdit","0h33stm"],["mediawiki.action.edit.editWarning","1jh0xdr",[52,110,178]],["mediawiki.action.view.filepage","0t8i70e"],["mediawiki.language","14np35t",[175,10]],["mediawiki.cldr","1lq4b2e",[176]],["mediawiki.libs.pluralruleparser","0gwpiz4"],["mediawiki.language.init","177by7f"],["mediawiki.jqueryMsg","04i611g",[174,151,8]],["mediawiki.language.months","0o5yovk",[174]],["mediawiki.language.names","1qt8rd5",[177]],["mediawiki.language.specialCharacters","1lltfve",[174]],["mediawiki.libs.jpegmeta","004znr9"],[
"mediawiki.page.gallery","0h1cfme",[53,184]],["mediawiki.page.gallery.styles","1orehmf"],["mediawiki.page.gallery.slideshow","1q47fc6",[139,98,267,283]],["mediawiki.page.ready","00yov4i",[16,23,43]],["mediawiki.page.startup","05da81a",[151]],["mediawiki.page.patrol.ajax","0i0hxzf",[47,139,98,187]],["mediawiki.page.watch.ajax","1i2t0ui",[139,106,178,187]],["mediawiki.page.rollback","067nqbq",[47,108]],["mediawiki.page.image.pagination","1oexswy",[47,151]],["mediawiki.rcfilters.filters.base.styles","01djtmu"],["mediawiki.rcfilters.filters.dm","0id0p0w",[148,261]],["mediawiki.rcfilters.filters.ui","1fz6n5t",[193,149,264,277,279,280,284]],["mediawiki.special","0x1uk1p"],["mediawiki.special.apisandbox.styles","1whx3eg"],["mediawiki.special.apisandbox","1m87jca",[98,178,248,264]],["mediawiki.special.block","13zyfus",[121,151]],["mediawiki.special.changecredentials.js","08v2vkb",[98,123]],["mediawiki.special.changeslist","0massjp"],["mediawiki.special.changeslist.legend","0yvwfuk"],[
"mediawiki.special.changeslist.legend.js","091beqs",[41,155]],["mediawiki.special.changeslist.enhanced","03vyh0x"],["mediawiki.special.changeslist.visitedstatus","0z75i88"],["mediawiki.special.comparepages.styles","1hj3nqf"],["mediawiki.special.edittags","0h8fy4o",[24]],["mediawiki.special.edittags.styles","0qnbf4a"],["mediawiki.special.import","0vkmbm1"],["mediawiki.special.movePage","0v40kjg",[245]],["mediawiki.special.movePage.styles","10qgh7i"],["mediawiki.special.pageLanguage","01avyn4",[265]],["mediawiki.special.pagesWithProp","0g0xvgf"],["mediawiki.special.preferences","1cm9yx3",[110,174,132]],["mediawiki.special.userrights","0ao8gyb",[132]],["mediawiki.special.preferences.styles","1lr4k5h"],["mediawiki.special.recentchanges","1h7tcjx"],["mediawiki.special.search","1iwpdwn",[256]],["mediawiki.special.search.styles","1h589ou"],["mediawiki.special.search.interwikiwidget.styles","1vl656b"],["mediawiki.special.search.commonsInterwikiWidget","1e668nm",[148,178]],[
"mediawiki.special.undelete","1cj26r1"],["mediawiki.special.upload","1emmibj",[47,139,98,110,178,182,223,94]],["mediawiki.special.upload.styles","01b7e40"],["mediawiki.special.userlogin.common.styles","1jyxb2c"],["mediawiki.special.userlogin.signup.styles","0pc4vfy"],["mediawiki.special.userlogin.login.styles","00dx75k"],["mediawiki.special.userlogin.signup.js","0ps5q9t",[53,98,122,178]],["mediawiki.special.unwatchedPages","01sj515",[139,106]],["mediawiki.special.watchlist","0vjlec7",[98,265,8]],["mediawiki.special.version","1a1q3gg"],["mediawiki.legacy.config","1bg8sgb"],["mediawiki.legacy.commonPrint","15y9bs3"],["mediawiki.legacy.protect","13ufqs9",[22]],["mediawiki.legacy.shared","0bdnz3c"],["mediawiki.legacy.oldshared","07e4m7j"],["mediawiki.legacy.wikibits","0fdw9mz"],["mediawiki.ui","1x7rdo9"],["mediawiki.ui.checkbox","015joop"],["mediawiki.ui.radio","0eh1ewf"],["mediawiki.ui.anchor","1eyjd3q"],["mediawiki.ui.button","1n5yxop"],["mediawiki.ui.input","1jnsyo6"],[
"mediawiki.ui.icon","056lq11"],["mediawiki.ui.text","1wbggdz"],["mediawiki.widgets","0fizser",[22,37,139,98,246,267]],["mediawiki.widgets.styles","00uwcdq"],["mediawiki.widgets.DateInputWidget","0linkbn",[92,267]],["mediawiki.widgets.datetime","0alsr9o",[265]],["mediawiki.widgets.CategorySelector","0678dop",[250]],["mediawiki.widgets.CategoryMultiselectWidget","104oon0",[116,139,267]],["mediawiki.widgets.SelectWithInputWidget","1c8rtit",[252,267]],["mediawiki.widgets.SelectWithInputWidget.styles","1o6ltlc"],["mediawiki.widgets.MediaSearch","1mtvtfd",[116,139,267]],["mediawiki.widgets.UserInputWidget","0kj5i1p",[267]],["mediawiki.widgets.UsersMultiselectWidget","098m9ef",[267]],["mediawiki.widgets.SearchInputWidget","1rfpp64",[136,245]],["mediawiki.widgets.SearchInputWidget.styles","1sce7c2"],["mediawiki.widgets.StashedFileWidget","0kmnsos",[265]],["es5-shim","0678dop"],["dom-level2-shim","0678dop"],["oojs","15r1fv9"],["mediawiki.router","1g9a13m",[263]],["oojs-router","1mlkyhy",[261]],
["oojs-ui","0678dop",[268,267,269]],["oojs-ui-core","0smpgqc",[174,261,266,270,271,272]],["oojs-ui-core.styles","0ggmd16"],["oojs-ui-widgets","1qnomiq",[265]],["oojs-ui-toolbars","1jcq0mb",[265]],["oojs-ui-windows","0w9px6y",[265]],["oojs-ui.styles.icons","1gk31vu"],["oojs-ui.styles.indicators","08yvvfg"],["oojs-ui.styles.textures","147f429"],["oojs-ui.styles.icons-accessibility","1ji5bob"],["oojs-ui.styles.icons-alerts","12unfve"],["oojs-ui.styles.icons-content","0rzgolq"],["oojs-ui.styles.icons-editing-advanced","02t2guz"],["oojs-ui.styles.icons-editing-core","1qqezhk"],["oojs-ui.styles.icons-editing-list","04hfh3b"],["oojs-ui.styles.icons-editing-styling","0al2qc1"],["oojs-ui.styles.icons-interactions","0e4ywzx"],["oojs-ui.styles.icons-layout","0ch9dvh"],["oojs-ui.styles.icons-location","1rgnyn8"],["oojs-ui.styles.icons-media","1pncn65"],["oojs-ui.styles.icons-moderation","0lgvhwi"],["oojs-ui.styles.icons-movement","1eo24ni"],["oojs-ui.styles.icons-user","1v7mzje"],[
"oojs-ui.styles.icons-wikimedia","1iyp8y1"],["skins.vector.styles","1pd9fv7"],["skins.vector.styles.responsive","059hk3q"],["skins.vector.js","0yz93ko",[50,53]],["skins.lcars.styles","1i90gwc"],["ext.interwiki.specialpage","1j9giu7",[41]],["ext.pageforms.main","0qhrwoy",[297,295,310,59,60,72]],["ext.pageforms.browser","04bbwvf"],["ext.pageforms.fancybox","1qh6cm7",[294]],["ext.pageforms.dynatree","0stt3gu",[76]],["ext.pageforms.autogrow","1ofqn7s"],["ext.pageforms.popupformedit","0tviiiz",[294]],["ext.pageforms.autoedit","1fhjsiw"],["ext.pageforms.submit","0ry3bmm"],["ext.pageforms.collapsible","0h2ytsp"],["ext.pageforms.imagepreview","0mqw9dj"],["ext.pageforms.checkboxes","0oyp54s"],["ext.pageforms.datepicker","0tz8bte",[293,61]],["ext.pageforms.timepicker","0yrn61j"],["ext.pageforms.datetimepicker","0xyv4ng",[304,305]],["ext.pageforms.regexp","14z5m4e",[293]],["ext.pageforms.rating","1xffq8l"],["ext.pageforms.simpleupload","0pjtj9e"],["ext.pageforms.select2","1k9wlch",[313,178]],[
"ext.pageforms.jsgrid","146qea3",[72]],["ext.pageforms.balloon","0yz45jw"],["ext.pageforms","0pisg2m"],["ext.pageforms.PF_CreateProperty","1fu0ns1"],["ext.pageforms.PF_PageSchemas","0aebg2g"],["ext.pageforms.PF_CreateTemplate","19liing"],["ext.pageforms.PF_CreateClass","14ccfqb"],["ext.pageforms.PF_CreateForm","0sfuie8"],["ext.dismissableSiteNotice","0e2m081",[29,151]],["ext.dismissableSiteNotice.styles","1t6kc3x"],["ext.maintenanceShell","0ptj5lq",[47]],["ext.nuke","1r9h6rv"],["ext.ajaxpoll","04qfhec",[],"ext.ajaxpoll"],["ext.cite.styles","1qrcvyd"],["ext.cite.a11y","10qp3ph"],["ext.cite.style","05mpugb"],["ext.TippingOver.wikiTooltips","1rjbyvc"],["onoi.qtip.core","1jpjn4h"],["onoi.qtip.extended","0a6b7bg"],["onoi.qtip","0678dop",[329]],["onoi.md5","0urm40v"],["onoi.blockUI","1rk1l0o"],["onoi.rangeslider","1j2axwq"],["onoi.localForage","0u6g7sc"],["onoi.blobstore","0z4sryg",[334]],["onoi.util","1bu4w10",[331]],["onoi.async","06rrqgb"],["onoi.jstorage","1webo7q"],["onoi.clipboard",
"0icztku"],["onoi.bootstrap.tab.styles","16so3vw"],["onoi.bootstrap.tab","0exxvnz"],["onoi.highlight","03oyvgq"],["onoi.dataTables.styles","03vcesi"],["onoi.dataTables.searchHighlight","1lpenfw",[342]],["onoi.dataTables.responsive","0sy4b3p",[346]],["onoi.dataTables","0nvusmv",[344]],["ext.smw","1sj1fcy",[350],"ext.smw"],["ext.smw.style","1iqalv2",[],"ext.smw"],["ext.smw.special.style","0gzes0o",[],"ext.smw"],["ext.jquery.async","0nbpkl2",[],"ext.smw"],["ext.jquery.jStorage","1nov346",[91],"ext.smw"],["ext.jquery.md5","05dg0dq",[],"ext.smw"],["ext.smw.dataItem","1vqer4r",[347,139,148],"ext.smw"],["ext.smw.dataValue","1lx99om",[353],"ext.smw"],["ext.smw.data","05eq1y5",[354],"ext.smw"],["ext.smw.query","1owcvtj",[347,151],"ext.smw"],["ext.smw.api","0otrl08",[351,352,355,356],"ext.smw"],["ext.jquery.autocomplete","1eerotj",[],"ext.smw"],["ext.jquery.qtip.styles","1be0gxz",[],"ext.smw"],["ext.jquery.qtip","0iin03i",[],"ext.smw"],["ext.smw.tooltip.styles","0fawk82",[],"ext.smw"],[
"ext.smw.tooltip","18u82hq",[360,347,361],"ext.smw"],["ext.smw.tooltips","0678dop",[348,362],"ext.smw"],["ext.smw.autocomplete","16e7j4v",[59],"ext.smw"],["ext.smw.purge","03hpsyj",[],"ext.smw"],["ext.smw.ask","0n5nngj",[348,362],"ext.smw"],["ext.smw.browse.styles","1mf03sa",[],"ext.smw"],["ext.smw.browse","0w7xxg2",[348,98],"ext.smw"],["ext.smw.browse.page.autocomplete","0678dop",[364,368],"ext.smw"],["ext.smw.admin","0ystdsn",[98],"ext.smw"],["ext.smw.property","0kie0zc",[358,151],"ext.smw"],["ext.pageforms.maps","1na7uw9"]]);;mw.config.set({"wgLoadScript":"/load.php","debug":!1,"skin":"lcars","stylepath":"/skins","wgUrlProtocols":"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/$1",
"wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"http://wiki.tf-575.com","wgServerName":"wiki.tf-575.com","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":!0,"wgVersion":"1.29.1","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Project","5":"Project talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","102":"Property","103":"Property talk","106":"Form","107":"Form talk","108":"Concept","109":"Concept talk","3000":"Archive","3001":"Archive talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,
"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"property":102,"property_talk":103,"form":106,"form_talk":107,"concept":108,"concept_talk":109,"archive":3000,"archive_talk":3001,"image":6,"image_talk":7},"wgContentNamespaces":[0,108],"wgSiteName":"Task Force 575","wgDBname":"lordtrek_beta","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"vector":"Vector","lcars":"Lcars","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"lordtrek_beta_wiki","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":2592000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgIllegalFileChars":":/\\\\","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":!0,"wgForeignUploadTargets":["local"],"wgEnableUploads":!0,"wgCiteVisualEditorOtherGroup":!1,"smw-config":{"version":"2.5.5","settings":{
"smwgQMaxLimit":10000,"smwgQMaxInlineLimit":500,"namespace":{"Property":102,"Property_talk":103,"Concept":108,"Concept_talk":109,"":0,"Talk":1,"User":2,"User_talk":3,"Project":4,"Project_talk":5,"File":6,"File_talk":7,"MediaWiki":8,"MediaWiki_talk":9,"Template":10,"Template_talk":11,"Help":12,"Help_talk":13,"Category":14,"Category_talk":15}},"formats":{"table":"table","list":"list","ol":"ol","ul":"ul","broadtable":"broadtable","category":"category","embedded":"embedded","template":"template","count":"count","debug":"debug","feed":"feed","csv":"csv","dsv":"dsv","json":"json","rdf":"rdf"}}});var RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};window.NORLQ={push:function(){}};}mediaWikiLoadStart=mwNow();mwPerformance.mark('mwLoadStart');script=document.createElement('script');script.src="/load.php?debug=false&lang=en&modules=jquery%2Cmediawiki&only=scripts&skin=lcars&version=0vz4mav";script.onload=script.onreadystatechange=function(){if(!script.
readyState||/loaded|complete/.test(script.readyState)){script.onload=script.onreadystatechange=null;script=null;startUp();}};document.getElementsByTagName('head')[0].appendChild(script);}());