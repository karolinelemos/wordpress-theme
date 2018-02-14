<?php get_header(); ?>

<section id="section-1" style="background-image: url('<?php bloginfo( 'template_directory' ); ?>/assets/img/bg-1.jpg')">
	<div class="row">
		<div class="medium-6 medium-centered columns">
			<div class="row">
				<div class="medium-5 columns">
					<?php 
						$args = array('post_type' => 'page', 'pagename' => 'home');
						$page = get_posts( $args );
					?>

					<?php 
						if($page) : foreach( $page as $post ) : setup_postdata( $post ); 
					?>

						<?php the_content(); ?>

					<?php endforeach ?>

					<?php else: ?>
						<p> Nenhum texto inserido </p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="section-2" style="background-image: url('<?php bloginfo( 'template_directory' ); ?>/assets/img/bg-2.jpg')">
	<div class="row">
		<div class="medium-6 medium-centered columns">
			<div class="box-center">
					<?php 
						$args = array('post_type' => 'page', 'pagename' => 'sobre');
						$page = get_posts( $args );
					?>

					<?php
						if($page) : foreach( $page as $post ) : setup_postdata( $post ); 
					?>

						<?php the_content(); ?>

					<?php endforeach ?>

					<?php else: ?>
						<p> Nenhum texto inserido </p>
					<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section id="section-3">
	<div class="row">
		<div class="medium-9 medium-centered columns">
			<div class="row about-itens">
					<?php 
						$args = array('post_type' => 'page', 'post_parent' => 10, 'orderby' => 'menu_order');
						$page = get_posts( $args );
					?>

					<?php
						if($page) : foreach( $page as $post ) : setup_postdata( $post ); 
					?>
						<div class="medium-3 columns">
							<?php the_content(); ?>
						</div>

					<?php endforeach ?>

					<?php else: ?>
						<p> Nenhum texto inserido </p>
					<?php endif; ?>
			</div>
	</div>
</div>
</section>
<section id="section-4" style="background-image: url('<?php bloginfo( 'template_directory' ); ?>/assets/img/bg-3.jpg')">
	<div class="row">
		<div class="medium-6 medium-centered columns">
			<div class="row">
				<div class="medium-8 columns">
					<?php 
						$args = array('post_type' => 'page', 'pagename' => 'servicos');
						$page = get_posts( $args );
					?>

					<?php
						if($page) : foreach( $page as $post ) : setup_postdata( $post ); 
					?>

						<?php the_content(); ?>

					<?php endforeach ?>

					<?php else: ?>
						<p> Nenhum texto inserido </p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="section-5">
	<div class="row">
		<div class="medium-9 medium-centered columns">
			<div class="row">
				<?php 
					$args = array('post_type' => 'page', 'post_parent' => 29, 'orderby' => 'menu_order');
					$page = get_posts( $args );
				?>

				<?php $count = 1; $arrayLength = count($page);
					if($page) : foreach( $page as $post ) : setup_postdata( $post ); 
				?>
					<div class="medium-6 columns <?php if($count%2 && ($arrayLength == $count)) echo 'medium-centered' ?>">
						<div class="board">							
							<?php the_content(); ?>
						</div>
					</div>

				<?php $count++; endforeach ?>

				<?php else: ?>
					<p> Nenhum texto inserido </p>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>
<section id="section-6">
	<div class="row">
		<div class="medium-6 medium-centered columns">
			<?php 
				$args = array('post_type' => 'page', 'post_parent' => 38, 'orderby' => 'menu_order');
				$page = get_posts( $args );
			?>

			<?php
				if($page) : foreach( $page as $post ) : setup_postdata( $post ); 
			?>
				<?php the_content(); ?>

			<?php endforeach ?>

			<?php else: ?>
				<p> Nenhum texto inserido </p>
			<?php endif; ?>
		</div>
	</div>	
</section>

<?php get_footer(); ?>