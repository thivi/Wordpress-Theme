<?php /*
Template Name: SearchResults
*/ ?>
<?php get_header(); ?>
<div class="front-page-wrapper">
		<div class="row">
            <div class="archive-top-ads">
			<?php if ( is_active_sidebar( 'archive_top_ads' ) ) : ?>
				
				<?php dynamic_sidebar( 'archive_top_ads' ); ?>
				<?php endif; ?>
		</div>
			<?php get_template_part('page-details');?>
            
			<div class="col-80">
					<div class="page-cm post-page">
                    
							<div id='cse' style='width: 100%;'>Loading</div>
        <script src='//www.google.com/jsapi' type='text/javascript'></script>
        <script type='text/javascript'>
        google.load('search', '1', {language: 'en', style: google.loader.themes.V2_DEFAULT});
        google.setOnLoadCallback(function() {
        var customSearchOptions = {};
        var orderByOptions = {};
        orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
        customSearchOptions['enableOrderBy'] = true;
        customSearchOptions['orderByOptions'] = orderByOptions;
        var imageSearchOptions = {};
        imageSearchOptions['layout'] = 'google.search.ImageSearch.LAYOUT_POPUP';
        customSearchOptions['enableImageSearch'] = true;
        var customSearchControl =   new google.search.CustomSearchControl('011873035261954028234:gnhgafeq0va', customSearchOptions);
        customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
        var options = new google.search.DrawOptions();
        options.enableSearchResultsOnly();
        options.setAutoComplete(true);
        customSearchControl.draw('cse', options);
        function parseParamsFromUrl() {
            var params = {};
            var parts = window.location.search.substr(1).split('&');
            for (var i = 0; i < parts.length; i++) {
            var keyValuePair = parts[i].split('=');
            var key = decodeURIComponent(keyValuePair[0]);
            params[key] = keyValuePair[1] ?
                decodeURIComponent(keyValuePair[1].replace(/\+/g, ' ')) :
                keyValuePair[1];
            }
            return params;
        }
        var urlParams = parseParamsFromUrl();
        var queryParamName = 'q';
        if (urlParams[queryParamName]) {
            customSearchControl.execute(urlParams[queryParamName]);
        }
        }, true);
        </script>
        
					</div>
					<div class="ad-below-comment">
			<?php if ( is_active_sidebar( 'ad-below-comment' ) ) : ?>
				
				<?php dynamic_sidebar( 'ad-below-comment' ); ?>
				<?php endif; ?>
		</div>
					<div class="related-col">
						<h3><i class="fa fa-hand-o-right" aria-hidden="true"></i> YOU MAY ALSO LIKE</h3></br>
						<?php get_template_part('related-posts-single');?>
					</div>
					<?php get_sidebar(2); ?>
			</div>
			
			
		</div>
</div>

<?php get_footer(); ?>