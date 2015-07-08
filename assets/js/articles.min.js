$( document ).ready( function() {

	//Collect All Img And Blockquote Node Elements From Content Section
	var articleImgs = document.getElementById('article-content').getElementsByTagName('img');
	var articleImgsArray = Array.prototype.slice.call(articleImgs, 0);
	var articleQuotes = document.getElementById('article-content').getElementsByTagName('blockquote');
	var articleQuotesArray = Array.prototype.slice.call(articleQuotes, 0);
	galleryNodeList = articleImgsArray.concat(articleQuotesArray);

	Array.prototype.move = function (from, to) {
		this.splice(to, 0, this.splice(from, 1)[0]);
	};

	if ( galleryNodeList.length > 2 ) {
		galleryNodeList.move( 2, 1 );
	}

	// Not Necessary But Interesting
	console.log(galleryNodeList);

	// Clone Collected Node Elements From Content Section And Place In Gallery Section
	cloneNodeListToGallery = function(){
		var nodeListLength = galleryNodeList.length;
		var clonedNode = null
		var articleGalleryCell = document.getElementById( 'article-gallery-cell' );

		for (i = 0; i < nodeListLength; i++) {
			clonedNode = galleryNodeList[i].cloneNode( true );
			articleGalleryCell.appendChild( clonedNode );
		}
	}
	cloneNodeListToGallery();

	// Hides All Image And Blockquote Elements In Selected Area
	toggleImgQuoteElements = function(selector, toggle) {
		$( selector + " img" ).css( "display", toggle );
		$( selector + " blockquote" ).css( "display", toggle );	
	}
	

	// Under Construction
	var documentHeight = $( document ).height();
	var windowHeight = $( window ).height();
	var scrollAreaHeight = ( documentHeight - windowHeight );
	var gallerySectionHeight = ( scrollAreaHeight / galleryNodeList.length );

	$( window ).resize( function() {
		documentHeight = $( document ).height();
		windowHeight = $( window ).height();
		scrollAreaHeight = ( documentHeight - windowHeight );
		gallerySectionHeight = ( scrollAreaHeight / galleryNodeList.length );
	});

	toggleImgQuoteElements( "#article-gallery-cell", "none" );

	var galleryIndex = 0;

	gallerySwap = function() {
		documentHeight = $( document ).height();
		windowHeight = $( window ).height();
		scrollAreaHeight = ( documentHeight - windowHeight );
		gallerySectionHeight = ( scrollAreaHeight / galleryNodeList.length );

		var scroll = $(document).scrollTop();
		var sectionSelector = ( scroll / gallerySectionHeight );
		var secSelectorRounded = Math.ceil(sectionSelector);
		if ( secSelectorRounded < 1 ) {
			secSelectorRounded = 1;
		} else if ( secSelectorRounded > galleryNodeList.length ) {
			secSelectorRounded = galleryNodeList.length;
		}

		if ( secSelectorRounded != galleryIndex ) {
			$( "#article-gallery-cell" ).animate({
			    opacity: 0
			  }, 300, function() {
			    toggleImgQuoteElements( "#article-gallery-cell", "none" );
				$( "#article-gallery-cell blockquote:nth-child(" + secSelectorRounded + ")" ).css( "display", "inline-block" );
				$( "#article-gallery-cell img:nth-child(" + secSelectorRounded + ")" ).css( "display", "inline-block" );
			  });
			

			$( "#article-gallery-cell" ).animate({
			    opacity: 1
			  }, 300, function() {
			    // Animation complete.
			  });

			galleryIndex = secSelectorRounded;
			return galleryIndex;
		}

		console.log(scrollAreaHeight);
	}

	var windowWidth = $( window ).width();

	responsiveGallery = function() {
		if ( windowWidth > 900 ) {
			toggleImgQuoteElements( "#article-content", "none" );
			gallerySwap();
			$( document ).scroll(function() {
				if ( windowWidth > 900 ) {
					gallerySwap();
				}
			});
			$( "#article-content" ).css( "width", "50%" );
			$( ".article-gradient" ).css( "width", "50%" );
			$( "#article-content" ).addClass( "article-content-responsive" );

		} else {
			toggleImgQuoteElements( "#article-content", "block" );
			toggleImgQuoteElements( "#article-gallery-cell", "none" );
			$( "#article-content" ).css( "width", "100%" );
			$( ".article-gradient" ).css( "width", "100%" );
			$( "#article-content" ).removeClass( "article-content-responsive" );
		}
	}
	responsiveGallery();

	

	$( window ).resize( function() {
		windowWidth = $( window ).width();
		responsiveGallery();
	});

});
	