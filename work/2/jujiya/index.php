<?php get_header(); ?>

<!--- NEWS start -->
<section id="news">
	<h2 class="section-title">NEWS</h2>

	<div class="container-fluid">
		<ul class="news-list"> 

		<!-- 最新の投稿を30件表示する -->
		<?php
			$args = array (
			'post_type'      => 'post', // 投稿タイプ
			'posts_per_page' => 30, // 取得する投稿数
			);

			$newslist = get_posts( $args );
			foreach( $newslist as $post ):
			setup_postdata($post); //　グローバル変数$postを書き換え
		?>

		<li>
			<div><time><?php the_date('d-m-Y'); ?></time></div>

			<?php the_title( '<p><a href="' . esc_url( get_permalink() ) . '">', '</a></p>' ); ?>
		</li>

		<?php
			endforeach;
		?>

 		</ul>
	</div>
</section>
<!--- NEWS end -->

<!--- MENU start -->
<section id="menu">
	<h2 class="section-title">MENU</h2>

	<div class="container-fluid">
		<!-- plat du jour -->
		<section class="platdujour">
			<?php 
				$count = 0;

				// 最新のplat du jourの投稿を見つけてリンクさせる
				foreach( $newslist as $post ):
				setup_postdata($post); //　グローバル変数$postを書き換え

				if ($count === 0){
					if ( have_posts() && stristr(get_permalink(),'plat-du-jour')==true ) { ?>
						<p class="pj-title"><a href="<?php esc_url( the_permalink() ); ?>">Plat du Jour<span>今週の日替わり</span></a></p>

						<?php $count++;
					}
				}

				endforeach;	
			?>

			<?php
				// 投稿データのリセット
				wp_reset_postdata();
			?>
		</section>
		<!-- plat du jour -->

		<div class="menus">
			<div class="menu-wrap">
				<div class="menu">
					<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_pf.jpg" alt="menuimg">

					<div class="menu-body">
						<h3 class="menu-title">Bento Poulet Frit<span>からあげ弁当</span></h3>
						<h3 class="menu-price">11,50€</h3>
						<p class="menu-text">Plateau de morceaux de poulet marinés dans une préparation spéciale à base de mirin, sauce de soja et de gingembre roulés dans de la farine puis frits à l'huile végétale accompagné de trois assortiments de légumes variés et de riz japonais.</p>
						<p class="menu-text">みりん、醤油、gingembre roulésをベースにした唐揚げと3種類のお惣菜、ご飯が付いたお弁当です。</p>
					</div>
				</div>
			</div>

			<div class="menu-wrap">
				<div class="menu">
					<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_sg.jpg" alt="menuimg">

					<div class="menu-body">
						<h3 class="menu-title">Bento Saumon Grillé<span>鮭弁当</span></h3>
						<h4 class="menu-price">11,10€</h4>
						<p class="menu-text">Plateau de saumon cuit au four avec sa peau, puis grillé ensuite, délicatement salée grâce à une croûte de sel accompagné de trois assortiments de légumes variés et de riz japonais.</p>
						<p class="menu-text">塩で味付けした焼き鮭と3種類のお惣菜、ご飯が付いたお弁当です。</p>
					</div>
				</div>
			</div>

			<div class="menu-wrap">
				<div class="menu">
					<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_mix.jpg" alt="menuimg">

					<div class="menu-body">
						<h3 class="menu-title">Bento Friture Mix<span>ミックスフライ弁当</span></h3>
						<h4 class="menu-price">12,10€</h4>
						<p class="menu-text">Plateau de trois fritures (croquette de patate douce, crevette frites et poulets frits) accompagné de trois assortiments de légumes variés et de riz japonais.</p>
						<p class="menu-text">3種類の揚げ物（写真はさつまいもコロッケ、エビフライ、かき揚げ）と3種類のお惣菜、ご飯が付いたお弁当です。</p>
					</div>
				</div>
			</div>
		</div>

		<a href="<?php echo home_url('/menu'); ?>" class="more"><img src="<?php echo get_template_directory_uri() ?>/img/layout/more.png" alt="more"></a>
	</div>
</section>
<!--- MENU end -->

<!--- Access start -->
<section id="access">
	<h2 class="section-title">ACCESS</h2>

	<div class="container-fluid">

		<div class="address-wrap">
			<div class="photo-jujiya"><img src="<?php echo get_template_directory_uri() ?>/img/layout/jujiya-restaurant.jpg" alt="jujiya restaurant"></div>

			<div class="map-wrap">
				<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.5130011081114!2d2.3340293152077516!3d48.86749627928842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3ac2d88d29%3A0x3e1bfb0fcb9ab68f!2z5Y2B5pmC44KE!5e0!3m2!1sja!2sjp!4v1553470085260" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="mapinfo">
					<p class="name">Juji-ya 十時や</p>
					<p class="address"><img src="<?php echo get_template_directory_uri() ?>/img/layout/map.svg" alt="addressicon">46 Rue Sainte-Anne, 75002 Paris</p>
					<p class="tel"><img src="<?php echo get_template_directory_uri() ?>/img/layout/tel.svg" alt="telicon">01 42 86 02 22</p>
					<p class="opening-hour"><img src="<?php echo get_template_directory_uri() ?>/img/layout/time.svg" alt="timeicon">Ouvert du lundi au dimanche(7j/7)<span>de 11H30 à 22H</span></p>
					<p class="access">À pied 4 min du métro Ligne 3 Quatre-Septembre</p>
					<p class="access">À pied 4 min du métro Lignes 7 et 14 Pyramides</p>
				</div>
			</div>				
		</div>
	</div>
</section>
<!--- Access end -->

<?php get_footer(); ?>