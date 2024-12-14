<?php
// Set up the objects needed
$args = array(
	'post_type'	=>	'page'
);
												
$my_wp_query = new WP_Query();
					
$all_wp_pages = $my_wp_query->query($args);
?>	
<div class="footer">	
	<div class="container">
		<div class="row">
	        <div class="col-sm-2 hidden-xs">
	        	<a href="">
	        		<img src="<?php echo get_bloginfo('template_directory');?>/images/logo-greyscale.png" alt="Denning College of Teacchers' Education, Tezu, Arunachal Pradesh" class="img-responsive footer-logo">
				</a>
			</div>
			
			<div class="col-sm-10 col-xs-12">
				<div class="row">
					<div class="col-sm-3 footer_menu">
						<h3>About</h3>
						<?php //wp_nav_menu( array('menu' => 'Footer-About', 'menu_class' => 'list-unstyled' )); ?>
						<?php echo do_shortcode( '[wpb_menu_accordion menu="Menu Name"]');?>
					</div>	
					
					<div class="col-sm-3 academics_footer">
						<h3>Academics</h3>
						<ul class="list-unstyled">
							<li><a href="javascript:void(0)">Subjects</a></li>
							<li><a href="javascript:void(0)">Academic Calendar</a></li>
							<li><a href="javascript:void(0)">Curriculum</a></li>
							<li><a href="javascript:void(0)">Meet the Faculty</a></li>
							<li><a href="javascript:void(0)">Library</a></li>
						</ul>
					</div>
					
					<div class="col-sm-3 admission_footer">
						<h3>Admission</h3>
						<ul class="list-unstyled">
							<li><a href="javascript:void(0)">How to Apply</a></li>
							<li><a href="javascript:void(0)">Eligibility Criteria</a></li>
							<li><a href="javascript:void(0)">Tuition &amp; Fees</a></li>
							<li><a href="javascript:void(0)">Downloadable Materials</a></li>
						</ul>
					</div>
					
					<div class="col-sm-3 links_footer">
						<h3>Quick Links</h3>
						<ul class="list-unstyled">
							<li><a href="javascript:void(0)">Admission 2016</a></li>
							<li><a href="javascript:void(0)">Result</a></li>
							<li><a href="javascript:void(0)">Faculty &amp; Staff</a></li>
							<li><a href="javascript:void(0)">Holiday Calendar</a></li>
							<li><a href="javascript:void(0)">Telephone Directory</a></li>
						</ul>
					</div>
				</div>
			</div>		
	    </div><!-- /.row -->
	</div><!-- /.container -->
</div>

<div class="powered-by">
	<div class="container">
	    <div class="row">
	    	<div class="col-sm-6">
	        	<p>
	        		Copyright &copy; 2015 Denning College for Teachers' Education
				</p>
			</div>
	        <div class="col-sm-6">
	        	<p class="pull-right">
	        		Made with <i class="fa fa-heart"></i> by <a href="http://www.aranaxweb.com" target="_blank">Aranax Technologies</a>
				</p>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->    
</div> 
    
<?php wp_footer(); ?>

</body>
</html>