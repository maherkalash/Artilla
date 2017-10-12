
                        
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                2017 © Adminox - Coderthemes.com
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        <?php $this->load->view('common/login') ?>

        <!-- jQuery  -->
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/js/jquery.min.js"></script>
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/js/waves.js"></script>
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/js/jquery.scrollTo.min.js"></script>
        
        
              <!-- Slick Slider js -->
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/slick-slider/slick.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/pages/jquery.slider.init.js"></script>


		<script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/js/lightbox.min.js" type="text/javascript"></script>
		 <!-- Modal-Effect -->
		<script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/sweet-alert2/sweetalert2.min.js"></script>
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/pages/jquery.sweet-alert.init.js"></script>
		 <!-- Rating js -->
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/js/jquery.raty-fa.js"></script>
        <!-- page init -->
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/pages/jquery.rating.js"></script>

        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/js/custombox.min.js"></script>
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/js/legacy.min.js"></script>
        <!-- App js -->
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/js/jquery.app.js"></script>


	<script type="text/javascript">
	
 function fill_main(key) {
            //console.log(key);
            main = '<?php get_courses(1); ?>';
           // main = json.Parse(main);

            main = JSON.parse(main);
            console.log(main);

            var res = '<ul><li><span>' + key + '</span></li>'
            main[key].forEach(function(row) {
                res += "<li><a href='<?php echo base_url() ?>course/"+ row['id']+"/0'>" + row['title'] + "</a></li>";
            });
            res += '</ul>';

            $('#submenu').html(res);
        }
        $(document).ready(function() {
        	
		    <?php if ($this->session->userdata('suc_message') || $this->session->userdata('err_message')) { ?>
				
				<?php if ($this->session->userdata('err_message')) { ?>
					title = '<?php echo trans('fail'); ?>';
			        text  = '<?php echo $this->session->userdata('err_message'); ?>';
			        type  = 'error';
				<?php $this->session->unset_userdata('err_message'); } ?>
		        <?php if ($this->session->userdata('suc_message')) { ?>
		        	title = '<?php echo trans('success'); ?>';
		        	text  = '<?php echo $this->session->userdata('suc_message'); $this->session->unset_userdata('suc_message'); ?>';
		        	type  = 'success';
		        <?php } ?>
		        	
		        
		        swal({
		            title: title,
		            text: text,
		            type: type,
		            timer: 6000,
		            showConfirmButton:true
		        });

		    <?php } ?>
            width = $(window).width();
            if (width < 990 && width > 766) {
                $('#home-one-info').css('margin-top',50+'px');
            }
            if (width < 766 && width > 342) {
                $('#home-one-info').css('margin-top',45+'px');
            }
            if (width < 342) {
                $('#home-one-info').css('margin-top',74+'px');
                //$('#btnn1').css('margin-left',0+'px');
            }
        });
	    <?php if ($this->session->userdata('user_id')) { ?>
	    	
	    	// request permission on page load
			document.addEventListener('DOMContentLoaded', function () {
				if (Notification.permission !== "granted")
				    Notification.requestPermission();
			});
			
			function notifyMe(title, text, link) {
			  if (Notification.permission !== "granted")
			    Notification.requestPermission();
			  else {
			    var notification = new Notification(title, {
			      icon: '',
			      body: text,
			    });
			    notification.onclick = function () {
			      window.open(link);      
			    };
			  }
			}
	    	
			window.onload = function () {
				get_nots();
				
			};
			/*pdaiJhoI2JfiMUJc2Ii1C_uas0fWRjF43jcOxHk9TFA*/
			function read_nots() {
		      $.ajax({
		          url: '<?php echo base_url(); ?>read_notifications/',
		          success: function(data) {
		          	if (data) {
		          		document.getElementById("notbill").style.color = "#fff";
		          		$("#not_num").html(0);
		          	};
		          }
		      });
		    }
		    
		    function get_nots() {
		    	//alert('fsds);
		    	setTimeout(function(){get_nots();}, 10000);
			   //alert('vft');
			   $.ajax({
		          url: '<?php echo base_url(); ?>get_notifications/',
		          success: function(data) {
		          	if (data) {
		          		//alert(data);
		          		var res = JSON.parse(data);
			            document.getElementById("notbill").style.color = "#e7412c";
			            var mytext = 	'<a style="color:#777; margin: 20px" href="' + res[3] + '">' +
											'<b>' + res[2] + ': </b>' + res[4] +
										'</a>';
						//alert(mytext);
			            $("#first_not").prepend(mytext);
			            $("#not_num").html(res[5]);
			            if (!document.hasFocus()) {
						    notifyMe(res[2], res[4], res[3]);
						}
			            toastr.options = {
						  "closeButton": false,
						  "debug": false,
						  "newestOnTop": false,
						  "progressBar": true,
						  "positionClass": "toast-bottom-right",
						  "preventDuplicates": false,
						  "onclick": null,
						  "showDuration": "1000",
						  "hideDuration": "1000",
						  "timeOut": "10000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};
						toastr["success"](res[0]);
		          	};
		          	
		          }
		      });
		    }
		<?php } ?>
		
	  <?php if (!$this->session->userdata('user_id')) { ?>
		  function statusChangeCallback(response) {
		    if (response.status === 'connected') {
		      Register(); 
		    } else if (response.status === 'not_authorized') {
		     
		    } else {
		      
		    }
		  }
		
		  function checkLoginState() {
		    FB.getLoginStatus(function(response) {
		      statusChangeCallback(response);
		    });
		  }
		
		
		  
		  function Register() {
		    FB.api('/me?fields=email,first_name, last_name, age_range, gender, picture, verified', function(response) {
		      saveUserData(response);
		    });
		  }
		  
		  function saveUserData(userData){
		    $.post(
		    		'<?php echo base_url() ?>facebook', 
		    		{userData: JSON.stringify(userData)}, 
		    		function(data){
		    		    if(data=='passed'){
                            window.location = "<?php echo base_url(); ?>";
                        }
		    		    else if (data=='new')  {

                            window.location = "<?php echo base_url().'done_virfed'; ?>";

                        }


		    		}
		    	  );
		  }
	  <?php } else { ?>
	  	function face_logout () {
			FB.logout(function(response) {
				window.location = "<?php echo base_url() ?>logout";
			});
			window.location = "<?php echo base_url() ?>logout";
	  	}
	  	
	  	
	  <?php } ?>
		window.fbAsyncInit = function() {
			  FB.init({
			    appId      : '483162955140745',//'483162955140745',
			    cookie     : true,  
			    xfbml      : true,  
			    version    : 'v2.8' 
			  });
			
			  FB.getLoginStatus(function(response) {
			    statusChangeCallback(response);
			  });
		
		  };
		
		  (function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js";
		    fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));

		  
        <?php if ($this->session->userdata('first_logged')) { ?>
        $(window).load(function(){
            var modal = $('#welcome'),
                dialog = modal.find('.modal-dialog');
            modal.css('display', 'block');

            // Dividing by two centers the modal exactly, but dividing by three
            // or four works better for larger screens.
            dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
//redirect after 5seconds
            setTimeout(function(){
                  $("#welcome").modal('show');
              },5000)

          });
        <?php } ?>
        
        
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37812549-1', 'auto');
  ga('send', 'pageview');


        
        
	</script>
  </body>
</html>