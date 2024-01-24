<link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<style type="text/css">
	#photoGlary{
		padding: 15px 0;
	}
	#photoGlary h3{
		font-family: 'Tiro Bangla', serif;
	}
	#photoGlary .card{
		position: relative;
		box-shadow: 0px 0px 5px 4px gray;
		border-radius: 5px;
		max-height: 200px;

	}
	#photoGlary .card .card_show{
		display: none;
		position: absolute;
		bottom: 0;
		padding: 5px;
		background: white;
		width: 100%;
		font-size: 17px;
	}
	#photoGlary .card .card_show h1{
		font-family: 'Tiro Bangla', serif;
	}
	#photoGlary .card:hover > .card_show{
		display: block;
	}
	#photoGlary .card:hover > .slide{
		/*scale: 1.3;*/
		transform: translateX(10px);
		
		overflow: hidden;
	}
	#photoGlary .card .slide{
		height: 100%;
		transform: translateX(-10px);
		scale: 1.1;
		transition: 1s;
	}
</style>

	


<div class="row">
	<!-- main content -->
	<div class="col-sm-12 col-md-9">
		<section id="photoGlary">
			<h3 class="title">
			   <i class="bi bi-camera"></i>
			    ফটোগ্যালারী
			</h3>
		<div class="row row-eq-height">
			<?php 
		 		$select_photo_galary=mysqli_query($con,"SELECT * FROM `photo_galary` WHERE `type`='glary'");
		 		while($row_photo=mysqli_fetch_assoc($select_photo_galary)){
		 	 ?>
		 	 <div class="col-md-6 col-xl-4 mb-3">
		 	 	<a href="/image/notice/<?php echo $row_photo['file'];?>" class="glightbox">
			 	 	<div class="card h-100">
				         <img class="img-fluid h-100 slide" src="/image/notice/<?php echo $row_photo['file'];?>" alt="image" />
			 	 		<div class="card_show">
			 	 			<h1 class="h6"><?php echo $row_photo['name']; ?></h1>
			 	 		</div>
			 	 	</div>
		 	 	  </a>
		 	 	 
		 	 </div>
			 <?php } ?>
		</div>
		</section>
     
      	



		
		</div>
		<?php 
			if (file_exists('../assets/custom/sidebar.php')) {
				require_once '../assets/custom/sidebar.php';
			}
		 ?>

	</div>
	 <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
	 <script>
            var lightbox = GLightbox();
            lightbox.on('open', (target) => {
                console.log('lightbox opened');
            });
            var lightboxDescription = GLightbox({
                selector: '.glightbox2'
            });
            var lightboxVideo = GLightbox({
                selector: '.glightbox3'
            });
            lightboxVideo.on('slide_changed', ({ prev, current }) => {
                console.log('Prev slide', prev);
                console.log('Current slide', current);

                const { slideIndex, slideNode, slideConfig, player } = current;

                if (player) {
                    if (!player.ready) {
                        // If player is not ready
                        player.on('ready', (event) => {
                            // Do something when video is ready
                        });
                    }

                    player.on('play', (event) => {
                        console.log('Started play');
                    });

                    player.on('volumechange', (event) => {
                        console.log('Volume change');
                    });

                    player.on('ended', (event) => {
                        console.log('Video ended');
                    });
                }
            });

            var lightboxInlineIframe = GLightbox({
                selector: '.glightbox4'
            });

            
        </script>

				