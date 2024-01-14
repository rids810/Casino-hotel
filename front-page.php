<?php
/**
 * The front page template file
 */

get_header('home');
?>
<!--About section start-->
<section id="aboutus">
  <div class="aboutcontainer">
    <div class="rowflex">
      <?php
      if ( have_rows( 'about_section' ) ):
        while ( have_rows( 'about_section' ) ): the_row();
      ?>
      <?php $title =  get_sub_field ( 'title' );?>
      <?php $about_heading = get_sub_field('about_heading');
		 $about_right_image = get_sub_field( 'about_right_image' );
    ?>
      <div class="about-left">
        <?php if($title!=""){?>
        <div class="sectiontitle"><?php echo $title;?></div>
        <?php } ?>
        <?php if($about_heading!=""){?>
        <h2><?php echo get_sub_field('about_heading');?></h2>
        <?php } ?>
		  
		  <div class="about-right mobile"> <img src="<?php echo $about_right_image['url'] ?>" alt="about"> </div>
		  
        <div class="content"> <?php echo get_sub_field('about_content');?> </div>
        <div class="button"> <a href="<?php echo get_sub_field('button_url');?>"><?php echo get_sub_field('button_text');?><img src="<?php bloginfo('template_directory');?>/assets/images/vector.png"> </a></div>
      </div>
      <?php
       if ( !empty( $about_right_image ) ) {
        ?>
      <div class="about-right desktop"> <img src="<?php echo $about_right_image['url'] ?>" alt="about"> </div>
      <?php } ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<!--About Section Close--> 

<!--Table section start-->
<section id="tablesection">
  <div class="aboutcontainer">
    <?php
    if ( have_rows( 'table_section' ) ):
      while ( have_rows( 'table_section' ) ): the_row();
    ?>
    <?php $heading = get_sub_field('heading');?>
    <?php $sub_title = get_sub_field('sub_title');?>
    <?php  $button_common_text = get_sub_field('button_common_text');?>
    <?php if($heading!=""){?>
    <h1><?php echo get_sub_field('heading');?></h1>
    <?php } ?>
    <div class="tdate"><img src="<?php bloginfo('template_directory');?>/assets/images/uil_calender.png">
		<span><?php echo date('m/d/y'); ?></span>
	  
	  </div>
    <?php if($sub_title!=""){?>
    <div class="toprel"><span><?php echo get_sub_field('sub_title');?></span></div>
    <?php } ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php
    $the_query = new WP_Query( array(
      'post_type' => 'casino_hotels',
		 'posts_per_page' => -1, 
		 'meta_key' => 'following_information_score',
		 'orderby' => 'meta_value', 
		

    ) );
    $no = 1;
    while ( $the_query->have_posts() ):
      $the_query->the_post();
    ?>
    <div class="table desktop">
      <div class="tableinner">
        <div class="col col1"><?php echo $no; ?></div>
        <?php
        if ( have_rows( 'following_information' ) ):
          while ( have_rows( 'following_information' ) ): the_row();

        $logo = get_sub_field( 'logo' );
        $address = get_sub_field( 'address' );
        $rating = get_sub_field( 'rating' );
        $score = get_sub_field( 'score' );
        $button_url = get_sub_field( 'button_url' );

        if ( !empty( $logo ) ) {
          ?>
        <div class="col col2"><img src="<?php echo $logo['url'] ?>"/></div>
        <?php
        }

        if ( !empty( $address ) ) {
          ?>
        <div class="col col3">
          <div>Address</div>
          <span><?php echo $address; ?></span></div>
        <?php
        }

        if ( !empty( $rating ) ) {
			
          ?>
        <div class="col col4">
          <div class="my-rating-4" data-rating="<?php echo $rating;?>"></div>
          <div>
			 <?php 
			  if(intval($rating)<=1 && intval($rating) >= 1) { echo "Poor";}
			  if(intval($rating)<=2 && intval($rating) >= 2) { echo "Fair";}
			  if(intval($rating)<=3 && intval($rating) >= 3) { echo "Good";}
			  if(intval($rating)<=4 && intval($rating) >= 4) { echo "Very Good";}
			  if(intval($rating)<=5 && intval($rating) >= 5 ) { echo "Excellent";}?></div>
        </div>
        <?php
        }


        if ( !empty( $score ) ) {
          ?>
        <div class="col col5">
          <div class="ratings<?php echo $no;?>" style="display: none;"><?php echo $score;?></div>
          <div role="progressbar<?php echo $no;?>" aria-valuenow="" aria-valuemin="0" aria-valuemax="10" style="--value:"></div>
       
			<!--Dynamic ``````````````````````````` js and css for score value-->
		
        </div>
        <?php } ?>
        <div class="col col6">
          <div class="button"> <a target="_blank" href="<?php echo $button_url;?>">
            <?php  echo $button_common_text ;?>
            <img src="<?php bloginfo('template_directory');?>/assets/images/rightarrow.png"> </a></div>
          <div class="unreview"><a href="<?php echo the_permalink();?>">Read review</a></div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
	  
	  
	  
	  <div class="table mobile">
      <div class="tableinner">
        
        <?php
        if ( have_rows( 'following_information' ) ):
          while ( have_rows( 'following_information' ) ): the_row();

        $logo = get_sub_field( 'logo' );
        $address = get_sub_field( 'address' );
        $rating = get_sub_field( 'rating' );
        $score = get_sub_field( 'score' );
        $button_url = get_sub_field( 'button_url' );

        if ( !empty( $logo ) ) {
          ?>
        <div class="col col2"><img src="<?php echo $logo['url'] ?>"/></div>
        <?php
        }
		  
		   if ( !empty( $score ) ) {
          ?>
        <div class="col col5">
          <div class="ratings<?php echo $no;?>" style="display: none;"><?php echo $score;?></div>
          <div role="progressbar<?php echo $no;?>" aria-valuenow="" aria-valuemin="0" aria-valuemax="10" style="--value:"></div>
       
			<!--Dynamic value js and css for score value-->
		
		<?php  if ( !empty( $rating ) ) {
			
          ?>
          <div class="my-rating-4" data-rating="<?php echo $rating;?>"></div>
          
        <?php
        }	
		?>	
        </div>
        <?php } 

        if ( !empty( $address ) ) {
          ?>
		  	<div class="hr"><span>&nbsp;</span></div>
      
        <div class="col col3">
          <div>Address</div>
          <span><?php echo $address; ?></span></div>
        <?php
        }
		  ?>
	  <div class="col col6">
          <div class="button"> <a target="_blank" href="<?php echo $button_url;?>">
            <?php  echo $button_common_text ;?>
            <img src="<?php bloginfo('template_directory');?>/assets/images/rightarrow.png"> </a></div>
          <div class="unreview"><a href="<?php echo the_permalink();?>">Read review</a></div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
	  
	  
	  <script> 
	   $(document).ready(function() {
      let val = $(".ratings<?php echo $no;?>").html();
      const progressBar = $('[role="progressbar<?php echo $no;?>"]');
      progressBar.attr('aria-valuenow', val); // Set the value to aria-valuenow attribute
      progressBar.css('--value', val); // Set the value to --value CSS custom property
      progressBar.text(val);
    });
	  </script>
          <style>
			
     
			div[role="progressbar<?php echo $no;?>"] {
  --size: 3rem;
  --fg: #FC115C;
  --bg: #f1f1f1;
  --pgValue: var(--value);
  --pgPercentage: calc(var(--pgValue) * 10);
  width: 75px;
  height: 75px;
  border-radius: 50%;
  display: grid;
  place-items: center;
     background:
                radial-gradient(closest-side, white 80%, transparent 0 99.9%, white 0),
                conic-gradient(var(--fg) calc(var(--pgPercentage) * 1%), var(--bg) 0);
  font-size: 25px;
  color: #000;
  margin: 0 auto;
  font-weight: bold;
}
  
</style>
    <?php
    $no++;
    endwhile;
    wp_reset_postdata();
    ?>
  </div>
</section>

<!--Table Secion close-->

<section id="undertablesection">
	<?php
      if ( have_rows( 'undertablesection' ) ):
        while ( have_rows( 'undertablesection' ) ): the_row();
     $leftimg =   get_sub_field ( 'left_image' );?>
  <div class="sectiontitle"><?php echo $title =  get_sub_field ( 'title' );?></div>
  <h2><?php echo  get_sub_field ( 'heading' );?></h2>
	
  <div class="tableflex">
    <div class="table-left"> <img src="<?php echo $leftimg['url']; ?>" alt="about"> </div>
    <div class="table-right">
      <div class="content">
		  
		  <?php
      if ( have_rows( 'content' ) ):
		  $j=1;
        while ( have_rows( 'content' ) ): the_row();
		  
      ?>
		  
        <div class="sub">
          <div class="nub"><span>1</span></div>
          <div class="subtitle"><?php echo get_sub_field ( 'title_1' ); ?></div>
          <div class="subcon"><?php echo get_sub_field ( 'subtext_1' ); ?></div>
        </div>
		  
        <div class="sub">
          <div class="nub"><span>1</span></div>
          <div class="subtitle"><?php echo get_sub_field ( 'title_2' ); ?></div>
          <div class="subcon"><?php echo get_sub_field ( 'subtext_2' ); ?></div>
        </div>
		  
        <div class="sub">
          <div class="nub"><span>1</span></div>
          <div class="subtitle"><?php echo get_sub_field ( 'title_3' ); ?></div>
          <div class="subcon"><?php echo get_sub_field ( 'subtext_3' ); ?></div>
        </div>
		  
		 <?php endwhile; ?>
      <?php $j++; endif; ?> 
		  <?php endwhile; ?>
      <?php endif; ?> 
      </div>
    </div>
  </div>
</section>
<script>$(".my-rating-4").starRating({
  totalStars: 5,
  starShape: 'rounded',
  starSize: 20,
  emptyColor: 'lightgray',
 
  useGradient: false
});
</script>
<?php
get_footer();
