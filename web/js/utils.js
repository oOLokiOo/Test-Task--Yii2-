$(document).ready(function(){

	function applyPortfolioCategoryGallery(imagesCategory) {
		if (!imagesCategory) {
			alert('Wrong Images Category!');
			return false;
		}

		// Config
		const imagesPath = `/images/uploads/${imagesCategory}`;
		const fadeSpeed = 300;
		const folderImagesCount = 9;

		// Apply Effect
		$(`main .row img.${imagesCategory}`).on('mouseenter', function(e){
			e.preventDefault();

			const rand = Math.floor(Math.random() * ((folderImagesCount + 1) - 1)) + 1;
			const imageName = `${imagesPath}/img${rand}.jpg`;

			$(this).fadeOut(fadeSpeed, function(){
				$(this).attr('src', imageName).fadeIn(fadeSpeed);;
			});
			
		})
	}


	// Do in circle for all categories on Production version
	applyPortfolioCategoryGallery('category1');
});