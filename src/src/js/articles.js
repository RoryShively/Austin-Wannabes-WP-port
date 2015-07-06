$( document ).ready( function() {

	//Collect All Img And Blockquote Node Elements From Content Section
	var articleImgs = document.getElementById('article-content').getElementsByTagName('img');
	var articleImgsArray = Array.prototype.slice.call(articleImgs, 0);
	var articleQuotes = document.getElementById('article-content').getElementsByTagName('blockquote');
	var articleQuotesArray = Array.prototype.slice.call(articleQuotes, 0);
	galleryNodeList = articleImgsArray.concat(articleQuotesArray);

	// Not Necessary But Interesting
	console.log(galleryNodeList);

	// Clone Collected Node Elements From Content Section And Place In Gallery Section
	cloneNodeListToGallery = function(){
		var nodeListLength = galleryNodeList.length;
		var clonedNode = null
		var articleGalleryCell = document.getElementById('article-gallery-cell');

		for (i = 0; i < nodeListLength; i++) {
			clonedNode = galleryNodeList[i].cloneNode(true);
			articleGalleryCell.appendChild(clonedNode);
		}
	}
	cloneNodeListToGallery();

	// Hides All Image And Blockquote Elements In Selected Area
	hideImgQuoteElements = function(selector) {
		$( selector + " img").css("display", "none");
		$( selector + " blockquote").css("display", "none");	
	}
	hideImgQuoteElements("#article-content");

});
	