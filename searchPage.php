<?php
/*
Template Name: searchPage
*/ 
?>
<?php get_header();?>
<section class="main">
	<div id="cse" style="width: 100%;">Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript"> 
	google.load('search', '1', {
		language: 'zh-CN',
		style: google.loader.themes.MINIMALIST
	});
	google.setOnLoadCallback(function() {
		var customSearchOptions = {};
		var orderByOptions = {};
		orderByOptions['keys'] = [{
			label: '相关性',
			key: ''
		}, {
			label: '日期',
			key: 'date'
		}];
		customSearchOptions['enableOrderBy'] = true;
		customSearchOptions['orderByOptions'] = orderByOptions;
		var imageSearchOptions = {};
		imageSearchOptions['layout'] = google.search.ImageSearch.LAYOUT_COLUMN;
		customSearchOptions['enableImageSearch'] = true;
		customSearchOptions['imageSearchOptions'] = imageSearchOptions;
		var googleAnalyticsOptions = {};
		googleAnalyticsOptions['queryParameter'] = 'cheyan';
		googleAnalyticsOptions['categoryParameter'] = '';
		customSearchOptions['googleAnalyticsOptions'] = googleAnalyticsOptions;
		var customSearchControl = new google.search.CustomSearchControl('005541564357099867864:t1crwgmuw1m', customSearchOptions);
		customSearchControl.setResultSetSize(google.search.Search.LARGE_RESULTSET);
		customSearchControl.draw('cse');
		var match = location.search.match(/q=([^&]*)(&|$)/);
		if (match && match[1]) {
			var search = decodeURIComponent(match[1]);

			customSearchControl.execute(search);
		}
	}, true);
	</script>
	<style type="text/css">
	/* google自定义搜索 */
	form.gsc-search-box, form.gsc-search-box { padding: 0; margin-bottom:45px;}
	input.gsc-input, input.gsc-input { padding: 0; height: 32px; line-height: 32px; text-indent:10px;}
	input.gsc-search-button, input.gsc-search-button { height: 32px; width:70px; font-size:14px;}
	.gsc-option-selector,
	.gsc-refinementsArea,
	.gsc-clear-button { display: none;}
	.gsc-tabHeader { height: 22px; line-height: 22px; padding: 4px 20px; border-radius:3px 3px 0 0; font-size:14px; font-weight
	normal; margin-right:5px; }
	.gsc-webResult.gsc-result.gsc-promotion, .gsc-webResult.gsc-result.gsc-promotion { background:#f0f0f0; padding:15px;}
	.gsc-tabHeader.gsc-tabhActive, .gsc-tabHeader.gsc-tabhActive { background-color:#f6f6f6; color: #ac4000; }
	.gsc-tabHeader.gsc-tabhInactive, .gsc-tabHeader.gsc-tabhInactive { background-color: #fff; color: #999;}
	.gs-promotion a.gs-title:link, .gs-promotion a.gs-title:link, .gs-promotion a.gs-title:link *, .gs-promotion a.gs-title:link *, .gs-promotion .gs-snippet a:link, .gs-promotion .gs-snippet a:link { color: #ac4000;}
	.gs-promotion .gs-visibleUrl, .gs-promotion .gs-visibleUrl { color: #333;}
	.gsc-tabHeader.gsc-tabhActive, .gsc-tabHeader.gsc-tabhActive,
	.gsc-tabHeader.gsc-tabhInactive, .gsc-tabHeader.gsc-tabhInactive,
	.gsc-tabsArea, .gsc-tabsArea { border-color:#ddd;}
	.gsc-tabsArea { margin-bottom:0;}
	.cse .gsc-webResult.gsc-result, .gsc-webResult.gsc-result, .gsc-imageResult-classic, .gsc-imageResult-column,
	.gsc-selected-option-container { padding: 0;}
	.cse .gsc-results, .gsc-results,
	.gsc-imageResult-column,
	.gsc-imageResult { margin: 0;}
	.gs-no-results-result .gs-snippet, .gs-error-result .gs-snippet { margin:0; padding:10px 15px;}
	.cse .gsc-webResult.gsc-result:hover, .gsc-webResult.gsc-result:hover, .gsc-webResult.gsc-result.gsc-promotion:hover, .gsc-results .gsc-imageResult-classic:hover, .gsc-results .gsc-imageResult-column:hover { border-left-color:#fff;}
	.gs-imageResult { width: auto;}
	.gsc-imageResult { float: none;}
	.gs-imageResult-column,
	.gs-imageResult .gs-image-box { height: auto;}
	.gs-imageResult { margin-bottom:1em;}
	.gsc-resultsbox-visible { margin-top:1em;}
	</style>
</section>
<?php get_footer();?>