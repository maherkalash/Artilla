

<footer class="page-footer wetAsphalt">
    <div class="container ">
        <div class="row">
            <div class="col l6 s12">
                <a class="btn btn-social-icon btn-facebook btn-socialMedia">
                    <span class="fa fa-facebook"></span>
                </a>
                <a class="btn btn-social-icon btn-twitter btn-socialMedia">
                    <span class="fa fa-twitter"></span>
                </a>
                <a class="btn btn-social-icon btn-google btn-socialMedia">
                    <span class="fa fa-google-plus"></span>
                </a>
                <a class="btn btn-social-icon btn-linkedin btn-socialMedia">
                    <span class="fa fa-linkedin"></span>
                </a>
            </div>
            <div class="col l6 right-align">
                <a class="waves-effect waves-teal btn-flat footer-linkss">أسئلة شائعة</a>
                <a class="waves-effect waves-teal btn-flat footer-linkss">اتصل بنا</a>
                <a class="waves-effect waves-teal btn-flat footer-linkss">رسالتنا</a>
                <a class="waves-effect waves-teal btn-flat footer-linkss">حول ارتيلا</a>
            </div>
        </div>
    </div>
    <div class="footer-copyright midnightBlue">
        <div class="container">
            © All Rights Reserved | <?php echo date('Y')?>
            <a class="grey-text text-lighten-4 right" href="/">Artilla</a>
        </div>
    </div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/slider/jsSlider.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/gallery/jsGallery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom.js"></script>
<script type="text/javascript">
	$('#search-input').keyup(function(){
		text = $('#search-input').val();
		$.ajax({
			url: '<?php echo base_url(); ?>search?string=' + text,
			success: function(data) {
				if (data) {
					result = JSON.parse(data);
					res = '';
					result.forEach(function(row) {
		                res += "<li><a href='" + row['url'] + "'>" + row['name'] + "</a></li>";
		            });
				};
			}
		});
	});
</script>
</body>
</html>