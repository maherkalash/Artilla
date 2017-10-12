<?php $this->load->view('common/header_view') ?>

 
 
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&libraries=places&callback=initMap" async defer></script>
<!--<script src="http://maps.googleapis.com/maps/api/js"></script>-->
<script>

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 25.2623912, lng: 55.2907909},
    zoom: 17
  });

  var infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);

  service.getDetails({
    placeId: 'ChIJPw4lUy7nGBURXQdeqTCL6Qs'
  }, function(place, status) {
  	var myLatLng = {lat: 25.2623912, lng: 55.2907909};
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      var marker = new google.maps.Marker({
	    position: myLatLng,
	    map: map,
	    animation:google.maps.Animation.BOUNCE
	  });
      
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
      });
    }
  });
}


</script>

   
      
    </div>
  </div>
</div>
<div class="row clearfix f-space10"></div>
<!-- Page title -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-title">
        <h2><?php echo trans('cont') ?></h2>
      </div>
    </div>
  </div>
</div>
<!-- end: Page title -->
<div class="row clearfix f-space10"></div>
<div class="container"> 
  <!-- row -->
  <div class="row">
    <div class="col-md-9 col-sm-12 col-xs-12 main-column box-block">
    	
    <div id="map" style="width:100%;height:380px; margin-bottom: 40px"></div>
      <div class="clearfix f-space30"></div>
      <form method="post" action="<?php echo base_url() ?>sendmail">
      <div class="contactform">
        <h2 class="title"><?php echo trans('conf') ?></h2>
        <p></p>
        
          <div class="row">
            <div class="col-md-5">
              <input class="input4" name="name" value="<?php echo set_value('name') ?>" placeholder=<?php echo trans('name') ?> data-validation="required">
              <input class="input4" name="email" value="<?php echo set_value('email') ?>" placeholder=<?php echo trans('email') ?> data-validation="email">
              <input class="input4" name="subject" value="<?php echo set_value('subject') ?>" placeholder=<?php echo trans('sub') ?>>
            </div>
            <div class="col-md-7">
              <textarea class="input4" name="message" id="message" rows="8" cols="60" placeholder=<?php echo trans('message') ?> data-validation="required"><?php echo set_value ('message') ?></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button class="btn large color2 pull-right" type="submit"><?php echo trans('send') ?> </button>
            </div>
          </div>
    
      </div>
      </form>
    </div>
    
    <!-- side bar -->
    <div class="col-md-3 col-sm-12 col-xs-12 box-block page-sidebar">
      <div class="box-heading"><span><?php echo trans('cond') ?></span></div>
      <!-- Contact Details -->
      <div class="box-content contactdetails-box-wr">
        <div class="contactdetails-box"> <span class="icon"><i class="fa fa-map-marker fa-fw"></i></span>
          <div class="details">
            <h1>JOMRAN , Khalid Bin Al Walid Str Bur </h1>
            Dubai UAE<br/>
          
            </div>
        </div>
        <div class="contactdetails-box"> <span class="icon"><i class="fa fa-phone fa-fw"></i></span> <span class="details">Phone: +971 4 385 9985 <br/>
          Fax:  92 300 9716116</span> </div>
        <div class="contactdetails-box"> <span class="icon"><i class="fa fa-envelope fa-fw"></i></span> <span class="details">Email: info@jomran.com <br/>
          Website: www.jomran.com</span> </div>
      </div>
      
      <!-- end: Contact Details -->
      
      <div class="clearfix f-space30"></div>
  
         
            <!-- end: item --> 
          </div>
        </div>
    
      <!-- end: Best Sellers Products --> 
      
    </div>
    <!-- end:sidebar --> 
  </div>
  <!-- end:row --> 
</div>
<!-- end: container-->

<div class="row clearfix f-space30"></div>
<!-- footer -->
 
<?php $this->load->view('common/footer_view'); ?>
<!-- end: footer --> 

<!-- Style Switcher JS --> 


<script>

(function($) {
  "use strict";
 $('#menuMega').menu3d();
 //Google Maps Configuration
			var lat="25.262375";
			var lon="25.2623416";
			$('#map').gmap3({
			map:{
			options:{
			 center: [lat, lon],
			 zoom: 14
			}
			},
			marker:{
			latLng: [lat, lon]
			}
			});
			
			 //Help/Contact Number/Quick Message
			$('.quickbox').carousel({
				interval: 10000
			});
			
			//Best Sellers
			$('#productc4').carousel({
				interval: 4000
			});           
				
})(jQuery);

<?php $this->load->view('common/footer_view') ?>
        </script>
	
	
