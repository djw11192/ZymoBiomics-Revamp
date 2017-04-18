<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ultra
 * @since ultra 0.9
 * @license GPL 2.0
 */

get_header(); ?>
	
	<?php if ( siteorigin_page_setting( 'page_title' ) ) : ?>
		<header class="entry-header">
			<div class="container">
				<h1 class="entry-title"><?php echo get_the_title(); ?></h1><?php ultra_breadcrumb(); ?>
			</div><!-- .container -->
		</header><!-- .entry-header -->
	<?php endif; ?>		

	<div class="container">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
				

				<?php get_template_part( 'content', 'page' ); ?>
				

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?> 
	<?php get_footer();	?>
	
	<?php include(getcwd() . '/wp-content/themes/ultra-child/scripts/get_ip.php');
	
		//Comment out until production ////// if(ip_info(getRealIpAddr(), "Country Code") === "US"){?>
		
			<script type="text/javascript" src="/wp-content/themes/ultra-child/scripts/siragoCart.js"></script>
			<script type="text/javascript">
			console.log("test");
			var url = window.location.pathname.slice(1, -1);
			var prodRow;
			
				(function(){
					var tableSpace = document.querySelector('.orderTable');
					if(url.includes("microbial-community-standards")){
						prodRow = '<tr><td>ZymoBIOMICS Microbial Community Standard</td><td>D6300</td><td>10 Preps</td><td>$250.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1651]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1651, this.value)" prodid="1651"></td></tr>' +
						
						'<tr><td>ZymoBIOMICS Microbial Community DNA Standard</td><td>D6305</td><td>200 ng</td><td>$104.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1653]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1653, this.value)" prodid="1653"></td></tr>' +
						
						'<tr><td>ZymoBIOMICS Microbial Community DNA Standard</td><td>D6306</td><td>2000 ng</td><td>$208.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1654]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1654, this.value)" prodid="1654"></td></tr>'
						
					} else if(url.includes("dnarna-shield")){
						prodRow = '<tr><td>DNA/RNA Shield</td><td>R1100-50</td><td>50 ml</td><td>$68.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1133]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1133, this.value)" prodid="1133"></td></tr>' + 
						
						'<tr><td>DNA/RNA Shield</td><td>R1100-250</td><td>50 ml</td><td>$241.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1134]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1134, this.value)" prodid="1134"></td></tr>' +
						
						'<tr><td>DNA/RNA Shield (2X concentrate)</td><td>R1200-25</td><td>25 ml</td><td>$68.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1564]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1564, this.value)" prodid="1564"></td></tr>' +
						
						'<tr><td>DNA/RNA Shield (2X concentrate)</td><td>R1200-125</td><td>125 ml</td><td>$241.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1565]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1565, this.value)" prodid="1565"></td></tr>'
						
						
						
						
						
					
					} else if(url === "endozero"){
						prodRow = '<tr><td>ZymoPURE - EndoZero� Plasmid Maxiprep</td><td>D4205</td><td>10 Preps</td><td>$300.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1765]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1765, this.value)" prodid="1765"></td></tr>' + 
						
						'<tr><td>ZymoPURE - EndoZero� Plasmid Gigaprep</td><td>D4207</td><td>5 Preps</td><td>$700.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1767]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1767, this.value)" prodid="1767"></td></tr>'
						
						
					} else if(url === "midi-maxi-giga"){
						prodRow = '<tr><td>ZymoPURE� Plasmid Midiprep Kit</td><td>D4200</td><td>25 Preps</td><td>$255.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1487]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1487, this.value)" prodid="1487"></td></tr>' +
						
						'<tr><td>ZymoPURE� Plasmid Midiprep Kit</td><td>D4201</td><td>50 Preps</td><td>$458.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1488]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1488, this.value)" prodid="1488"></td></tr>' +
						
						'<tr><td>ZymoPURE� Plasmid Maxiprep Kit</td><td>D4202</td><td>10 Preps</td><td>$206.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1484]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1484, this.value)" prodid="1484"></td></tr>' +
						
						'<tr><td>ZymoPURE� Plasmid Maxiprep Kit</td><td>D4203</td><td>20 Preps</td><td>$398.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1485]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1485, this.value)" prodid="1485"></td></tr>' +
						
						'<tr><td>ZymoPURE� Plasmid Gigaprep Kit</td><td>D4204</td><td>5 Preps</td><td>$462.00</td><td class="inputCell"><input style="padding:0; " type="text" name="qty[1490]" maxlength="12" placeholder="0" title="Qty" class="input-text qty" id="qtyinput" onchange="save_id(1490, this.value)" prodid="1490"></td></tr>'
						
					}
					tableSpace.innerHTML = '<form action="/nicktest" method="post"><table border="1" class="order_table"><thead><tr class="order_table_head"><th>Product</th><th>Cat. No.</th><th>Size</th><th>Price</th><th>Qty</th></tr></thead><tbody>' + prodRow + '</tbody></table><input class="btn" style="float: right; padding: 10px 10px; margin-top: 18px; font-weight: bold;background-color: #1B9644;font-size: 22px;color: white;border-radius: 5px;border: none;cursor: pointer;" onclick="submitProducts();return false;" type="button" value="Add To Cart"></form>'
					
				})();
			</script>
		<?php //}else{ ?>
			<!--<script type="text/javascript">
				var tableSpace = document.querySelector('.orderTable');
				tableSpace.innerHTML = '<table class="roundButtonContainer btn-lrg"  style="margin-bottom: 25px; position: absolute; left:0; right: 0;" border="0" cellspacing="0" cellpadding="0"<tbody><tr><td class="roundButtonContent btn-lrg" valign="middle"><a class="roundButton" href="http://www.zymoresearch.com/dna/plasmid-dna-purification/bacterial-plasmid/plasmid-midiprep-kits/zymopure-expresstm-plasmid-midiprep-kit" target="_blank">Order Now</a></td></tr></tbody></table>'
			</script>-->
		<?php //}; ?>