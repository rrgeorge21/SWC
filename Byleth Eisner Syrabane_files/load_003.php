window.AutoEditDropdownConfig={expandedAreaContribute:!0,expandedAreaEdit:!1};window.ajaxRefresh=60000;window.ajaxPages=['Special:WikiActivity','Special:RecentChanges','Special:Contributions','Special:Log','Special:Log/move','Special:AbuseLog','Special:NewFiles','Special:NewPages','Special:Watchlist','Special:Statistics','Special:ListFiles','Category:Speedy_deletion_candidates','Category:Speedy_move_candidates'];window.AjaxRCRefreshText='Auto-refresh';window.AjaxRCRefreshHoverText='Automatically refresh the page';window.LockForums={expiryDays:Infinity,warningDays:90,warningMessage:"This thread has not been commented on for over <warningDays> days. There is no need to reply, unless it is part of the versus forum."};window.UserTagsJS={modules:{},tags:{founder:{u:'Founder',order:1},bureaucrat:{u:'Bureaucrat',order:2},'former-bureaucrat':{u:'Retired Bureaucrat',order:3},sysop:{u:'Administrator',order:4},'former-sysop':{u:'Retired Administrator',order:5},'bot-global':{u:'Global Bot',
order:7},bot:{u:'Bot',order:8},'content-moderator':{u:'Content Moderator',order:10},'former-content-moderator':{u:'Retired Content Moderator',order:11},threadmoderator:{u:'Discussion Moderator',order:13},'former-threadmoderator':{u:'Retired Discussion Moderator',order:14},chatmoderator:{u:'Chat Moderator',order:16},'former-chatmoderator':{u:'Retired Chat Moderator',order:17},rollback:{u:'Rollback',order:19},'former-rollback':{u:'Former Rollback',order:20},calc:{u:'Calc Group',order:22},'former-calc':{u:'Retired Calc Group',order:23},guru:{u:'Guru',order:40},'js-helper':{u:'JS Helper',order:51},'css-helper':{u:'CSS Helper',order:52},'image-helper':{u:'Image Helper',order:53},'template-helper':{u:'Templates Helper',order:54},'human-resources':{u:'Human Resources',order:55},'former-human-resources':{u:'Retired Human Resources',order:56},consultant:{u:'Consultant',order:100},bannedfromchat:{u:'Banned from Chat',order:500},inactive:{u:'Inactive',order:1/0}}};UserTagsJS.modules.inactive={
days:30,zeroIsInactive:!0};UserTagsJS.modules.nonuser=(mediaWiki.config.get('skin')==='monobook');UserTagsJS.modules.autoconfirmed=!0;UserTagsJS.modules.newuser={computation:function(days,edits){return days<10&&edits<30;}};UserTagsJS.modules.mwGroups=['bureaucrat','sysop','bot','bot-global','content-moderator','threadmoderator','chatmoderator','patroller','rollback','bannedfromchat'];UserTagsJS.modules.custom={'Kavpeny':['former-bureaucrat'],'DarkLK':['former-bureaucrat','guru','consultant'],'A6colute':['js-helper','css-helper','template-helper'],'KamiYasha':['former-sysop'],'Spinosaurus75DinosaurFan':['calc'],'Executor N0':['calc'],'AidenBrooks999':['former-calc','former-threadmoderator'],'Thebluedash':['former-calc','former-threadmoderator'],'Antoniofer':['former-calc'],'Amelia Lonelyheart':['former-calc','former-sysop','former-human-resources'],'The real cal howard':['former-calc'],'ArbitraryNumbers':['former-calc','former-threadmoderator'],'Golden Void':['former-calc',
'former-threadmoderator'],'Liger686':['former-calc','former-threadmoderator'],'Kepekley23':['calc'],'TataHakai':['calc'],'Zanybrainy2000':['former-calc'],'RavenSupreme':['former-calc'],'Therefir':['calc'],'Mr. Bambu':['calc'],'Peter "Quicksilver" Maximoff':['image-helper'],'The Foolish Omniscient Guy':['image-helper'],'Galaxian Pyron':['founder','former-bureaucrat'],'Polar-kun':['former-bureaucrat'],'SeiryuShin':['former-sysop'],'Rocks75':['former-sysop'],'DontTalkDT':['former-calc','consultant'],'Darkness552':['former-sysop'],'Sheoth':['former-sysop'],'SchutzenDunkelZiel1217':['former-sysop'],'Gwynbleiddd':['former-sysop','former-calc'],'LordAizenSama':['former-sysop'],'KuuIchigo':['former-sysop','former-calc'],'TheMightyRegulator':['former-sysop'],'Alakabamm':['former-sysop','former-calc'],'ThePerpetual':['former-sysop','former-calc'],'CrossverseCrisis':['former-sysop'],'Professor Voodoo':['former-sysop'],'Dekoshu':['former-content-moderator'],'The Living Tribunal1':[
'former-content-moderator','former-calc'],'Basilisk1995':['former-content-moderator'],'Colonel Krukov':['former-content-moderator','former-chatmoderator','image-helper'],'Illuminati478':['former-threadmoderator','former-calc'],'Unclechairman':['former-threadmoderator'],'SwordSlayer99':['former-threadmoderator'],'Faisal Shourov':['former-threadmoderator'],'Austrian-Man-Meat':['former-threadmoderator','former-calc'],'LordXcano':['former-threadmoderator','former-calc'],'RadicalMrR':['former-threadmoderator','former-calc'],'VenomElite':['former-threadmoderator'],'Talonmask':['former-chatmoderator'],'AkuAkuAkuma':['former-chatmoderator'],'Byakuya "Senbonzakura" Kuchiki':['former-chatmoderator'],'Rib78':['former-calc'],'Gallavant':['former-calc'],'DMUA':['calc'],'Crimson Azoth':['former-calc','former-threadmoderator'],'Ugarik':['calc'],'AlexSoloVaAlFuturo':['calc'],'Damage3245':['calc'],'ClassicGameGuys':['former-calc'],'Lina Shields':['former-calc','former-sysop'],'Aparajita':['former-calc'
],'Grudgeman1706':['former-threadmoderator'],'FanofRPGs':['former-calc'],'Numbersguy':['former-calc'],'ShieldsPlus':['former-calc','former-sysop'],'Assaltwaffle':['former-calc','former-sysop'],'ScarletFirefly':['former-threadmoderator'],'Promestein':['human-resources'],'Reppuzan':['former-sysop','former-human-resources'],'Celestial Pegasus':['human-resources'],'Kaltias':['former-sysop','former-human-resources'],'SomebodyData':['human-resources'],'Legion350':['former-content-moderator'],'ALRF':['former-chatmoderator','former-content-moderator'],'The Everlasting':['former-sysop'],'Fllflourine':['former-content-moderator','former-chatmoderator'],'Burning Full Fingers':['former-content-moderator'],'Aeyu':['former-threadmoderator'],'PaChi2':['former-threadmoderator'],'Sandman31':['former-threadmoderator'],'LordGriffin1000':['former-threadmoderator'],'JustSomeWeirdo':['former-threadmoderator'],'Hop Hoppington-Hoppenhiemer':['former-threadmoderator'],'Warren Valion':['former-threadmoderator']
,'Sayo Yasuda':['former-chatmoderator'],'Skalt711':['image-helper'],'The Divine Phoenix':['image-helper'],'Andytrenom':['sysop','human-resources'],'Dargoo Faust':['sysop','human-resources','calc'],'Wokistan':['sysop','human-resources'],'Matthew Schroeder':['former-sysop'],'First Witch':['former-chatmoderator'],'Azathoth the Abyssal Idiot':['former-bureaucrat'],'WeeklyBattles':['former-sysop'],'MrKingOfNegativity':['former-sysop'],'Sera EX':['consultant'],'KGiffoni':['calc'],'PrinceOfTheMorning':['former-threadmoderator'],'TheRustyOne':['calc'],'DemonGodMitchAubin':['calc'],'Jasonsith':['calc']};UserTagsJS.modules.metafilter={'inactive':['sysop','bureaucrat','bot','bot-global','staff','util','vstf'],'sysop':['bot','bot-global'],'content-moderator':['bureaucrat','sysop'],'threadmoderator':['bureaucrat','sysop'],'chatmoderator':['bureaucrat','sysop'],'rollback':['bureaucrat','sysop']};(function(){if(wgUserName!==null)$('span.insertusername').text(wgUserName);})();!function(){if(
wgCanonicalSpecialPageName!=='Userrights')return;$('#mw-content-text').on('change','#wpGroup-bureaucrat',function(){if($('#wpGroup-bureaucrat').attr('checked')&&!confirm('Do you truly want to appoint a bureaucrat?'))$('#wpGroup-bureaucrat').attr('checked',null);});}();;;mw.loader.state({"site":"ready"});

/* cache key: vsbattles:resourceloader:filter:minify-js:7:cdbcd10bacc9160e4c9bb8c846187bda */