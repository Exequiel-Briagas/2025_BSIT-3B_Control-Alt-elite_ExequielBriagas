<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Feel Free To Reach Out</h3>
									<p>If you would like to get in touch, LocalThrive is always open to new opportunities, collaborations, and conversations. Whether it's a project proposal, a potential partnership, or simply a message of support or curiosity, reaching out is always welcome and appreciated.</p>
                                    	<p>With a strong commitment to communication and professionalism, LocalThrive ensures that every inquiry is given thoughtful attention and timely responses.</p>
								</div>  
							</div>
						</div>
	<div class="row">
								<div class="col-md-6">
						
								  	
		   <!-- Form itself -->
          <form name="sentMessage" id="contactForm"  novalidate>
	       <h3>Contact Us</h3>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control" 
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div> 	
			  
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
								</div>
								<div class="col-md-6">
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <div style="overflow:hidden;height:500px;width:600px;">
    <div id="gmap_canvas" style="height:500px;width:600px;"></div>
    <style>
      #gmap_canvas img { max-width: none !important; background: none !important }
    </style>
    <a class="google-map-code" href="#" id="get-map-data">Polangui, Albay Map</a>
  </div>
  <script type="text/javascript">
    function init_map() {
      var myOptions = {
        zoom: 14,
        center: new google.maps.LatLng(13.2924, 123.4880), // Polangui coordinates
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
      marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(13.2924, 123.4880)
      });
      infowindow = new google.maps.InfoWindow({
        content: "<b>Polangui, Albay</b><br/>Bicol Region<br/>Philippines"
      });
      google.maps.event.addListener(marker, "click", function () {
        infowindow.open(map, marker);
      });
      infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
  </script>
</div>

							</div>
	</div>
 
	</section>
