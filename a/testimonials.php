<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'php/header.php' ?>
</head>
<body>
	<header class="orange">
		<nav>
			<?php include 'php/nav.php' ?>
		</nav>
		<div class="header_content_center">
			<h5>Testimonials and Case Studies</h5>
			<?php include 'php/social_links.php' ?>
		</div>
	</header>
	<div id="one">
		<div id="two">
			<img src="images/orange_band.png" id="orange_band"/>
		</div>
	</div>
	<div class="body_content_center">
		<h2 id="vid_title">Testimonials</h2>
		<div id="vid_player">
			<style type="text/css">
				#divWNVideoCanvas62469 {top:45px; left:2px; position:absolute}
				#divWNGallery62469 {top:-8px; left:409px; position:absolute}
				#divWNInfoPane62469 {top:325px; left:1px; position:absolute}
				#divWNWidgetsContainer62469 {position:relative}
			</style>

			<div id="divWNWidgetsContainer62469" style="overflow:hidden;height:355px;width:929px;">
			<div id="divWNVideoCanvas62469"></div>
			<div id="divWNGallery62469"></div>
			<div id="divWNInfoPane62469"></div>

			</div>
			<script type="text/javascript" src="http://wncorp.images.worldnow.com/interface/js/WNVideo.js"></script>
			<script type="text/javascript">
			var wnWidgetId_62469;
			 if (wnWidgetId_62469 == undefined) wnWidgetId_62469 = "62469";

			var WNVideoCanvas62469 = new WNVideoWidget("WNVideoCanvas", "divWNVideoCanvas62469");
			WNVideoCanvas62469.SetStylePackage("flatlight");
			WNVideoCanvas62469.SetVariable("widgetId", wnWidgetId_62469);
			WNVideoCanvas62469.SetVariable("addThisDivId", "divWNImageCanvas62469_addThis");
			WNVideoCanvas62469.SetVariable("incanvasAdDivId", "divWNImageCanvas62469_adDiv");
			WNVideoCanvas62469.SetVariable("isMute", "false");
			WNVideoCanvas62469.SetVariable("isAutoStart", "false");
			WNVideoCanvas62469.SetVariable("hasFullScreen", "false");
			WNVideoCanvas62469.SetVariable("disableGoogleSDKAdCallOverwrite", "True");
			WNVideoCanvas62469.SetVariable("backgroundColors", "0f354d,0f354d,0f354d,0f354d");
			WNVideoCanvas62469.SetVariable("controlsBackgroundColors", "002339,002339");
			WNVideoCanvas62469.SetVariable("controlsButtonLeftBorderColor", "184968");
			WNVideoCanvas62469.SetVariable("controlsButtonRightBorderColor", "002339");
			WNVideoCanvas62469.SetVariable("controlsOverFaceColor", "4585a3");
			WNVideoCanvas62469.SetVariable("controlsOffFaceColor", "4585a3");
			WNVideoCanvas62469.SetVariable("volumeSliderOffColor", "4585a3");
			WNVideoCanvas62469.SetVariable("volumeSliderOverColor", "4585a3");
			WNVideoCanvas62469.SetVariable("videoSliderBackgroundColor", "4585a3");
			WNVideoCanvas62469.SetVariable("videoSliderLoadIndicatorColor", "4585a3");
			WNVideoCanvas62469.SetVariable("videoSliderProgressIndicatorColor", "4585a3");
			WNVideoCanvas62469.SetVariable("videoSliderKnobBackgroundColors", "10649d,003d66");
			WNVideoCanvas62469.SetVariable("videoSliderKnobOffFaceColor", "4585a3");
			WNVideoCanvas62469.SetVariable("videoSliderKnobOverFaceColor", "4585a3");
			WNVideoCanvas62469.SetVariable("overlayOffFaceColor", "4585a3");
			WNVideoCanvas62469.SetVariable("overlayOverFaceColor", "4585a3");
			WNVideoCanvas62469.SetVariable("emailInputFaceColor", "4585a3");
			WNVideoCanvas62469.SetVariable("emailErrorMessageFaceColor", "4585a3");
			WNVideoCanvas62469.SetVariable("emailErrorBorderColor", "4585a3");
			WNVideoCanvas62469.SetVariable("hasBorder", "false");
			WNVideoCanvas62469.SetVariable("assignablelink", "http%253A%252F%252Fapi.worldnow.com%252Ffeed%252Fv2.0%252Fwidgets%252F62469%253Falt%253Djs%2526contextaffiliate%253D104");
			WNVideoCanvas62469.SetSkin(CANVAS_SKINS.satin.silver);
			WNVideoCanvas62469.SetVariable("toolsShareButtons", "email,link,share,help");
			WNVideoCanvas62469.SetVariable("overlayShareButtons", "email,link,share,help");
			WNVideoCanvas62469.SetWidth(360);
			WNVideoCanvas62469.SetHeight(270);
			WNVideoCanvas62469.RenderWidget();

			var WNGallery62469 = new WNVideoWidget("WNGallery", "divWNGallery62469");
			WNGallery62469.SetStylePackage("flatlight");
			WNGallery62469.SetVariable("widgetId", wnWidgetId_62469);
			WNGallery62469.SetVariable("addThisDivId", "divWNImageCanvas62469_addThis");
			WNGallery62469.SetVariable("incanvasAdDivId", "divWNImageCanvas62469_adDiv");
			WNGallery62469.SetVariable("isContinuousPlay", "false");
			WNGallery62469.SetVariable("hasSearch", "false");
			WNGallery62469.SetVariable("thirdpartytemplatemrssurl", "");
			WNGallery62469.SetVariable("regexpmrssid", "");
			WNGallery62469.SetVariable("topVideoCatNo", "227800");
			WNGallery62469.SetVariable("tabFontSize", "14");
			WNGallery62469.SetVariable("videoListImageWidth", "100");
			WNGallery62469.SetVariable("videoListImageHeight", "75");
			WNGallery62469.SetVariable("videoListItemHeadlineFontSize", "12");
			WNGallery62469.SetVariable("tabBackgroundColors", "ffffff,ffffff");
			WNGallery62469.SetVariable("dropDownTabOverBorderColor", "10649d");
			WNGallery62469.SetVariable("tabBackgroundSelectedColors", "0f354d");
			WNGallery62469.SetVariable("tabBackgroundSelectedHasBorder", "false");
			WNGallery62469.SetVariable("tabBackgroundSelectedBorderColor", "10649d");
			WNGallery62469.SetVariable("tabBackgroundOverColors", "0f354d,0f354d");
			WNGallery62469.SetVariable("tabOffFaceColor", "ffffff");
			WNGallery62469.SetVariable("tabOverFaceColor", "f26133");
			WNGallery62469.SetVariable("tabHasBorder", "false");
			WNGallery62469.SetVariable("dropDownBackgroundColors", "10649d,10649d,10649d,10649d");
			WNGallery62469.SetVariable("dropDownBorderColor", "f55719");
			WNGallery62469.SetVariable("dropDownOffFaceColor", "00bff9");
			WNGallery62469.SetVariable("dropDownOverFaceColor", "f26133");
			WNGallery62469.SetVariable("videoListBackgroundColors", "ffffff,ffffff");
			WNGallery62469.SetVariable("videoListHasBorder", "false");
			WNGallery62469.SetVariable("videoListBorderColor", "10649d");
			WNGallery62469.SetVariable("videoListNavigationHasBorder", "false");
			WNGallery62469.SetVariable("videoListItemOffFaceColor", "0D2330");
			WNGallery62469.SetVariable("videoListItemOverFaceColor", "f55719");
			WNGallery62469.SetVariable("videoListItemHighlightBorderColor", "fefefe");
			WNGallery62469.SetVariable("videoListItemShadowBorderColor", "f7f7f7");
			WNGallery62469.SetVariable("videoListNavigationBackgroundColors", "ffffff,ffffff");
			WNGallery62469.SetVariable("videoListNavigationOffFaceColor", "02243b");
			WNGallery62469.SetVariable("videoListNavigationOverFaceColor", "ffffff");
			WNGallery62469.SetVariable("videoListNavigationHighlightBorderColor", "ffffff");
			WNGallery62469.SetVariable("videoListNavigationShadowBorderColor", "eeeeee");
			WNGallery62469.SetVariable("videoListPageNumberOffColor", "02243b");
			WNGallery62469.SetVariable("videoListPageNumberOverColor", "b5ddf1");
			WNGallery62469.SetVariable("videoListPageNumberSelectedColor", "626262");
			WNGallery62469.SetVariable("searchOverFaceColor", "f26133");
			WNGallery62469.SetVariable("searchFormFaceColor", "f26133");
			WNGallery62469.SetVariable("searchHasBorder", "false");
			WNGallery62469.SetWidth(520);
			WNGallery62469.SetHeight(358);
			WNGallery62469.RenderWidget();

			var WNInfoPane62469 = new WNVideoWidget("WNInfoPane", "divWNInfoPane62469");
			WNInfoPane62469.SetStylePackage("flatlight");
			WNInfoPane62469.SetVariable("widgetId", wnWidgetId_62469);
			WNInfoPane62469.SetVariable("addThisDivId", "divWNImageCanvas62469_addThis");
			WNInfoPane62469.SetVariable("incanvasAdDivId", "divWNImageCanvas62469_adDiv");
			WNInfoPane62469.SetVariable("summaryFontSize", "10");
			WNInfoPane62469.SetVariable("headlineFontSize", "12");
			WNInfoPane62469.SetVariable("hasDuration", "false");
			WNInfoPane62469.SetVariable("hasSummary", "false");
			WNInfoPane62469.SetVariable("hasImage", "false");
			WNInfoPane62469.SetVariable("backgroundColors", "ffffff,ffffff");
			WNInfoPane62469.SetVariable("borderColor", "10649d");
			WNInfoPane62469.SetVariable("durationColor", "626262");
			WNInfoPane62469.SetVariable("headlineColor", "0D2330");
			WNInfoPane62469.SetVariable("summaryColor", "626262");
			WNInfoPane62469.SetVariable("hasBorder", "false");
			WNInfoPane62469.SetWidth(400);
			WNInfoPane62469.SetHeight(30);
			WNInfoPane62469.RenderWidget();

			</script>
			<noscript>Video Clip: Playbook for Web, Ratings Growth - John Cardenas</noscript>
		</div>
<!-- Case Study -->	
		<h2>Case Studies</h2>	
		<div class="case_study">
			<a href="case_studies/kktv_cs.pdf" target="_blank"><img src="images/kktv.jpg"/></a>
			<div class="case_study_container">
				<h1>KKTV - Live Streaming</h1>
				<p>"845,840 total video clips viewed from June 25-June 28 (WebTrends June 2012), Represented 69% of total video clips viewed for the entire month of June."</p>
				<a href="case_studies/kktv_cs.pdf" target="_blank">Click here to read the full case study</a>
			</div>
		</div>
		<div class="case_study">
			<a href="case_studies/meredith_cs.pdf" target="_blank"><img src="images/meredith.jpg"/></a>
			<div class="case_study_container">
				<h1>Meredith - Digital Ad Revenue Growth</h1>
				<p>"Digital advertising revenues increased 70 percent, driven by enhanced sales initiatives and product
				offerings"</p>
				<a href="case_studies/meredith_cs.pdf" target="_blank">Click here to read the full case study</a>
			</div>
		</div>
<!-- Case Study -->		
		<div class="case_study">
			<a href="case_studies/wbtv_cs.pdf" target="_blank"><img src="images/wbtv.jpg"/></a>
			<div class="case_study_container">
				<h1>WBTV - Creating a Successful Online News Site</h1>
				<p>"Instilled a web-first mentality for breaking news. Reporters tell their stories on their digital platforms
				(web, mobile and social) first, which has re-engaged their audiences and increased their news ratings"</p>
				<a href="case_studies/wbtv_cs.pdf" target="_blank">Click here to read the full case study</a>
			</div>
		</div>
<!-- Case Study -->		
		<div class="case_study">
			<a href="case_studies/wthr_cs.pdf" target="_blank"><img src="images/wthr.jpg"/></a>
			<div class="case_study_container">
				<h1>WTHR - Growing Social Media</h1>
				<p>"1100% increase in number of Facebook fans (2010-2011), 267% increase in page views (2010-2011), 133% increase in UVs (2010-2011), 220% increase in time on site (2010-2011)"</p>
				<a href="case_studies/wthr_cs.pdf" target="_blank">Click here to read the full case study</a>
			</div>
		</div>
<!-- Case Study -->		
		<div class="case_study">
			<a href="case_studies/klas_cs.pdf" target="_blank"><img src="images/klas.jpg"/></a>
			<div class="case_study_container">
				<h1>KLAS - Maintaining Online Brand Consistency with an On-Air Rebrand</h1>
				<p>"Worldnow assisted KLAS with implementing a javascript include that calls a CSS file maintained by KLAS
				to override default design styles on the front end"</p>
				<a href="case_studies/klas_cs.pdf" target="_blank">Click here to read the full case study</a>
			</div>
		</div>
<!-- Case Study -->		
		<div class="case_study">
			<a href="case_studies/kfmb_cs.pdf" target="_blank"><img src="images/kfmb.jpg"/></a>
			<div class="case_study_container">
				<h1>KFMB - Upgrading CMS Solution: Integrate Both TV and Radio Properties</h1>
				<p>"Ability to focus all their resources on audience and revenue, Distractions by the never ending cycle of tech development are gone"</p>
				<a href="case_studies/kfmb_cs.pdf" target="_blank">Click here to read the full case study</a>
			</div>
		</div>
	</div>
	<footer>
		<?php include 'php/footer.php' ?>
	</footer>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>