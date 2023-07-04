<section id="projects">
   <div class="container-fluid container-lg p-5" style="margin-top:50px">
      <div data-aos="fade-down">
         <h1 class="text-center fw-bolder mb-0" data-aos="zoom-in">Projects</h1>
         <h5 class="fw-bold mb-4 text-center" data-aos="zoom-in">
            Some of our projects are included here
         </h5>
      </div>
      
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
               {{-- <div class="col">
                  <button type="button" class="modalButton" data-toggle="modal" data-src="https://drive.google.com/file/d/1Qz-sHdTM13jTuPBeKCiaP9Ay4vjMakjN/preview" data-width="500" data-height="281" data-target="#myModal" data-video-fullscreen="">
                  <img src="{{ asset('images/img1.jpg') }}"  style="background-color: #ffffff; padding: 15px; width: 100%; box-shadow: 0 0 15px rgba(0,0,0,0.3); cursor: pointer;" title="Munisipyo Mobile App"></button>
               </div>

               <div class="col">
                  <button type="button" class="modalButton" data-toggle="modal" data-src="https://drive.google.com/file/d/1KxGmbgo9DkpnxkX8dWdsGRqKth_nMliS/preview" data-width="500" data-height="281" data-target="#myModal" data-video-fullscreen="">
                  <img src="{{ asset('images/img2.jpg') }}"  style="background-color: #ffffff; padding: 15px; width: 100%; box-shadow: 0 0 15px rgba(0,0,0,0.3); cursor: pointer;" title="Social Media Management"></button>
               </div>

               <div class="col">
                  <button type="button" class="modalButton" data-toggle="modal" data-src="https://drive.google.com/file/d/1MfrrADs-ar4BXwx9JFjw4FdynXlBpVIT/preview" data-width="640" data-height="360" data-target="#myModal" data-video-fullscreen="">
                  <img src="{{ asset('images/img3.jpg') }}"  style="background-color: #ffffff; padding: 15px; width: 100%; box-shadow: 0 0 15px rgba(0,0,0,0.3); cursor: pointer;" title="MEDtrix Hospital System"></button>
               </div> --}}

               <div class="col">
                  <button type="button" class="modalButton" data-toggle="modal" data-src="https://drive.google.com/file/d/1F1_vOajfNqcZXoHIAfZmEwSjYw7RAIva/preview"  data-width="600" data-height="450" data-target="#myModal" data-video-fullscreen="">
                  <img src="{{ asset('images/img4.png') }}" style="background-color: #ffffff; padding: 15px; width: 100%; box-shadow: 0 0 15px rgba(0,0,0,0.3); cursor: pointer;" title="Human Resources Information System"></button>
               </div>

               <div class="col">
                  <button type="button" class="modalButton" data-toggle="modal" data-src="https://drive.google.com/file/d/1FNk9kfF4B96Iw9wHeBgPXKF7zOoqA5gm/preview"  data-width="600" data-height="450" data-target="#myModal" data-video-fullscreen="">
                  <img src="{{ asset('images/img5.png') }}" style="background-color: #ffffff; padding: 15px; width: 100%; box-shadow: 0 0 15px rgba(0,0,0,0.3); cursor: pointer;" title="Barangay Information System"></button>
               </div>

                <div class="col">
                  <button type="button" class="modalButton" data-toggle="modal" data-src="https://drive.google.com/file/d/1K8N921kZTW7TbPLPNzs63lXLya0CedVx/preview"  data-width="600" data-height="450" data-target="#myModal" data-video-fullscreen="">
                  <img src="{{ asset('images/img6.png') }}" style="background-color: #ffffff; padding: 15px; width: 100%; box-shadow: 0 0 15px rgba(0,0,0,0.3); cursor: pointer;" title="Legislative Tracking System"></button>
               </div>

               {{-- GAS MONITORING SYSTEM --}}
               <div class="col">
                  <button type="button" class="modalButton" data-toggle="modal" data-src="https://drive.google.com/file/d/1t0bfEXLKOaQbf5mML6CpXfcJrNayLv4G/preview"  data-width="600" data-height="450" data-target="#myModal" data-video-fullscreen="">
                  <img src="{{ asset('images/img6.png') }}" style="background-color: #ffffff; padding: 15px; width: 100%; box-shadow: 0 0 15px rgba(0,0,0,0.3); cursor: pointer;" title="Legislative Tracking System"></button>
               </div>
               {{-- EMPPLOYEE PORTAL SYSTEM --}}
               <div class="col">
                  <button type="button" class="modalButton" data-toggle="modal" data-src="https://drive.google.com/file/d/13zNhP8fKs7Xx2_LjF6HRV0grC4qbdrG5/preview"  data-width="600" data-height="450" data-target="#myModal" data-video-fullscreen="">
                  <img src="{{ asset('images/img6.png') }}" style="background-color: #ffffff; padding: 15px; width: 100%; box-shadow: 0 0 15px rgba(0,0,0,0.3); cursor: pointer;" title="Legislative Tracking System"></button>
               </div>
            </div>
            </div>
         </div>
         <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered modal-lg">
               <div class="modal-content">
                  <div class="modal-body">
                     <div class="close-button">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     </div>
                     <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="100%" height="480" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                     </div>
                  </div>
               </div>
            </div>
			</div>
   </div>
</section>




<script>
( function($) {
  
function iframeModalOpen(){

		$('.modalButton').on('click', function(e) {
			var src = $(this).attr('data-src');
			var width = $(this).attr('data-width') || 640; 
			var height = $(this).attr('data-height') || 360; 

			var allowfullscreen = $(this).attr('data-video-fullscreen'); 
			
			$("#myModal iframe").attr({
				'src': src,
				'height': height,
				'width': width,
				'allowfullscreen':''
			});
		});

		$('#myModal').on('hidden.bs.modal', function(){
			$(this).find('iframe').html("");
			$(this).find('iframe').attr("src", "");
		});
	}
  
  $(document).ready(function(){
		iframeModalOpen();
  });
  
  } ) ( jQuery );
  </script>