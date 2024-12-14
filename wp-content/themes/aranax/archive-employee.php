<?php
/**
* Template Name: Employee List
*/
?>
<?php get_header(); ?>

<!-- Page Content -->
<div id="content">
	<div class="page">
		<div class="container">
			<!--<div class="row">
			<div class="col-sm-9 col-sm-offset-3">
			<h1 class="page-header"><?php //the_title(); ?></h1>
			</div>
			</div>-->
			
			<div class="row bottom-margin-sm">		
				<div class="col-sm-3 hidden-xs">
					<?php get_sidebar(); ?>	
				</div>
				
				<div class="col-sm-9">
					<h1 class="page-header"><?php the_title(); ?></h1>
					<?php
					$type = 'employee';
					$args=array(
						'post_type' => $type,
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'caller_get_posts'=> 1);

					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ){
						while($my_query->have_posts()) : $my_query->the_post(); 
						?>
					       
					        
						<div class="employee_deatlis_all">
					        
							<div class="staff_img">
								<?php 
								$img = get_field('photograph_em');
								?>
								<img src="<?php echo $img['sizes']['thumbnail'];?>">
							</div>	
					        		        
							<div class="employee_details">
							   
								<ul>  
									<li>
										<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
									</li>
							        
									<li>							
										<?php 
										$field = get_field_object('designation');
										echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
										?>	
									</li>
							
									<li>
										<?php 
										$field = get_field_object('academic_qualification');					
										echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
										?>
									</li>							
							
								</ul> 
							</div>
							<a class="more_button" href="javascript:toggleDiv('myContent');">
								<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
							
							
							<div class="more_employeecontent" style="display:none;">
                 
								<div class="row employee_details_part">
									<div class="col-md-6">
										<?php 
										$field = get_field_object('professional_qualification');		
										echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
										?>                              	   	
									</div>
                              	   
									<div class="col-md-6">
										<?php 
										$field = get_field_object('nature_of_appointment');		
										echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
										?>                              	   	
									</div>
                              	
								</div>

   
								<div class="row employee_details_part">
									<div class="col-md-6">
										<!--<?php 
										$dob = get_field('date_of_birth');
										echo date("d-m-Y", strtotime($dob)); 
										?>-->   
										<?php 
										$field = get_field_object('date_of_birth');		
										echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
										?>                           	   	
									</div>
                              	   
									<div class="col-md-6">
										<!-- <?php 
										$dob = get_field('date_of_appointment');
										echo date("d-m-Y", strtotime($dob)); 
										?>-->
										<?php 
										$field = get_field_object('date_of_appointment');		
										echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
										?>                              	   	
									</div>
                              	
								</div>
							
								<div class="row employee_details_part">
									<div class="col-md-6">
										<?php 
										$field = get_field_object('pay_scale');		
										echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
										?>                              	   	
									</div>
                              	   
									<div class="col-md-6">
										<?php 
										$field = get_field_object('total_emoluments');		
										echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
										?>                              	   	
									</div>
                              	
								</div> 
							
							
								<div class="row employee_details_part">
									<div class="col-md-6">
										<?php 
										$field = get_field_object('affiliating_em');		
										echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
										?>                              	   	
									</div>
                              	   
									<div class="col-md-6">
										<?php 
										$field = get_field_object('retirements_benefits_cpf');		
										echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
										?>                              	   	
									</div>
                              	
								</div> 
							
								<div class="row employee_details_part">
									<div class="col-md-6">
										<?php 
										$field = get_field_object('remarks');		
										echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
										?>                              	   	
									</div>
                              	   
									<div class="col-md-6">
                              	   
                              	    
									</div>
                              	
								</div>					
							
							</div>
							 
						</div>
						<?php
						endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
					?>
				</div>
				
			</div><!-- /.row -->
		</div>	
	</div>	
</div>


<?php get_footer(); ?>