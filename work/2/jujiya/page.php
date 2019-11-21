<?php get_header(); ?>

<!-- back -->
<div class="back">
	<a href="<?php echo home_url(); ?>" class="back"><img src="<?php echo get_template_directory_uri() ?>/img/layout/back.png" alt="back"></a>
</div>
<!-- back -->

<section id="menu">
	<h2 class="page-title">MENU</h2>

	<div class="container-fluid">
		<!-- plat du jour -->
		<section class="platdujour">				
			<?php 
				//最新の投稿を30件表示する
				$args = array (
				'post_type'      => 'post', // 投稿タイプ
				'posts_per_page' => 30, // 取得する投稿数
				);

				$newslist = get_posts( $args );

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

		<!-- bento -->
		<section class="bento">
			<h3 class="bento-title">Bento</h3>

			<div class="menus">
				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_lf.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Légumes Frits<span>かき揚げ弁当</span></h3>
							<h4 class="menu-price">10,00€</h4>
							<p class="menu-text">Plateau de légumes frais coupés du jour frits avec une farine spéciale japonaise appelée "Tempurako" accompagné de trois assortiments de légumes variés et de riz japonais.</p>
							<p class="menu-text">インゲン、人参、玉ねぎをてんぷら粉を使って揚げたかき揚げと3種類のお惣菜、ご飯が付いたお弁当です。</p>
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
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_aji.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Chinchards Frits<span>アジフライ弁当</span></h3>
							<h4 class="menu-price">11,10€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_cro.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Croquettes<span>コロッケ弁当</span></h3>
							<h4 class="menu-price">11,10€</h4>
							<p class="menu-text">Plateau de croquettes aux légumes (maïs,carottes,petits pois,pomme de terre) et à la patate douce enrobée d'une panure saupoudrée de sésame noir accompagné de trois assortiments de légumes variés et de riz japonais.</p>
							<p class="menu-text">肉とジャガイモのコロッケとさつまいもコロッケ、野菜コロッケ（コーン、人参、グリーンピース、じゃがいも）から選んでいただいた2種類のコロッケと3種類のお惣菜、ご飯が付いたお弁当です。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_pf.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Poulet Frit<span>からあげ弁当</span></h3>
							<h4 class="menu-price">11,50€</h4>
							<p class="menu-text">Plateau de morceaux de poulet marinés dans une préparation spéciale à base de mirin, sauce de soja et de gingembre roulés dans de la farine puis frits à l'huile végétale accompagné de trois assortiments de légumes variés et de riz japonais.</p>
							<p class="menu-text">みりん、醤油、gingembre roulésをベースにした唐揚げと3種類のお惣菜、ご飯が付いたお弁当です。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_pp.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Porc Pané<span>トンカツ弁当</span></h3>
							<h4 class="menu-price">11,50€</h4>
							<p class="menu-text">Plateau de tranche de porc trempée dans une préparation à base d'oeufs battus, préalablement aplatie délicatement grâce à un maillet spécial puis enrobée dans de la chapelure, puis frit et remarquablement croustillant ensuite accompagné de trois assortiments de légumes variés et de riz japonais.</p>
							<p class="menu-text">カリッと揚げたトンカツと3種類のお惣菜、ご飯が付いたお弁当です。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img small" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_ph.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Poulet Haché<span>つくね弁当</span></h3>
							<h4 class="menu-price">11,50€</h4>
							<p class="menu-text">Plateau de boulettes de poulet mélangées et préparées à base de poireaux, gingembre servies avec une sauce spéciale composée de saké, de sauce soja et de sucre accompagné de trois assortiments de légumes variés et de riz japonais.</p>
							<p class="menu-text">酒と醤油、砂糖で味付けした特製ソースに絡めたつくねと3種類のお惣菜、ご飯が付いたお弁当です。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_pg.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Poulet Grillé<span>照り焼き弁当</span></h3>
							<h4 class="menu-price">11,50€</h4>
							<p class="menu-text">Plateau de poulet et poireaux cuits à la poêle avec une sauce teriyaki puis grillé au chalumeau accompagné de trois assortiments de légumes variés et de riz japonais.</p>
							<p class="menu-text">照り焼きソースに絡めた鶏肉とネギに3種類のお惣菜とご飯が付いたお弁当です。</p>
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

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_cf.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Crevettes Frites<span>エビフライ弁当</span></h3>
							<h4 class="menu-price">12,10€</h4>
							<p class="menu-text">Plateau de crevettes décortiquées, égouttées et coupées avec une technique spéciale empêchant la rétractation lors de la mise dans l'huile, salées finement puis enrobées dans une chapelure de pain accompagné de trois assortiments de légumes variés et de riz japonais.</p>
							<p class="menu-text">エビフライと3種類のお惣菜、ご飯が付いたお弁当です。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img small" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_sh.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Steak Haché<span>ハンバーグ弁当</span></h3>
							<h4 class="menu-price">12,10€</h4>
							<p class="menu-text">Plateau de steack japonais au boeuf et au porc composé de "panko" (chapelure de pain), de"katakuriko"(fecule de pomme de terre), de légumes et de tofu. Le "hamburg" est servi avec une sauce épaisse préparée avec une base de sauce tonkatsu et de miso accompagné de trois assortiments de légumes variés et de riz japonais.</p>
							<p class="menu-text">牛肉と豚肉の合挽き肉に特製ソースをかけたハンバーグと3種類のお惣菜、ご飯が付いたお弁当です。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_bp.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Brochettes de Poulet<span>焼き鳥弁当</span></h3>
							<h4 class="menu-price">12,10€</h4>
							<p class="menu-text">Plateau de morceaux de poulet sur une brochette, marinés et cuits dans une sauce teriyaki (sucrée-salée) accompagnés de poireaux accompagné de trois assortiments de légumes variés et de riz japonais.</p>
							<p class="menu-text">照り焼きソースをかけた鶏肉とネギの焼き鳥と3種類のお惣菜、ご飯が付いたお弁当です。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_veg.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Végétarien<span>ベジタリアン弁当</span></h3>
							<h4 class="menu-price">12,10€</h4>
							<p class="menu-text">Plateau de six assortiments de légumes variés accompagné de riz japonais.</p>
							<p class="menu-text">6種類のお惣菜、ご飯が付いたお弁当です。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/bento/bento_tp.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Bento Travers de Porc<span>スペアリブ弁当</span></h3>
							<h4 class="menu-price">12,10€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- bento -->

		<!-- shushi -->
		<section class="sushi">
			<h3 class="sushi-title">Sushi / Sashimi</h3>

			<div class="menus">
				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/sushi/sushi_ikura.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Sushi(Avec oeufs de saumon)<span>握り寿司（いくら）</span></h3>
							<h4 class="menu-price">13,90€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/sushi/sushi_ika.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Sushi(Avec seiche)<span>握り寿司（いか）</span></h3>
							<h4 class="menu-price">12,80€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/sushi/Futomaki.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Futomaki/FutomakiInari<span>太巻き/太巻きいなり</span></h3>
							<h4 class="menu-price">9,20€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/sushi/Inari.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Inari<span>いなり寿司</span></h3>
							<h4 class="menu-price">4,40€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>
			</div>

		</section>

		<!-- onigiri -->
		<section class="onigiri">
			<h3 class="onigiri-title">Onigiri</h3>

			<div class="menus">
				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/onigiri/onigiri.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Onigiri<span>おにぎり単品</span></h3>
							<h4 class="menu-price">2,60€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/onigiri/onigiri-set.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Onigiri set<span>おにぎりセット</span></h3>
							<h4 class="menu-price">6,80€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>
			</div>

		</section>

		<!-- donburi -->
		<section class="donburi">
			<h3 class="donburi-title">Donburi</h3>

			<div class="menus">
				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/donburi/katsudon.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Katsudon<span>カツ丼</span></h3>
							<h4 class="menu-price">10,50€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/donburi/kakiagedon.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Kakiagedon<span>かきあげ丼</span></h3>
							<h4 class="menu-price">7,60€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- dessert -->
		<section class="dessert">
			<h3 class="dessert-title">Dessert</h3>

			<div class="menus">
				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/dessert/gateau_matcha.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Gateau thé vert fait maison<span>自家製抹茶ケーキ</span></h3>
							<h4 class="menu-price">2,80€</h4>
							<p class="menu-text">Gateau préparé sur place par notre chef patissier. Alliance parfaite du sucre et de l'amertume du the vert japonais.</p>
							<p class="menu-text">パティシエが作った特製抹茶ケーキです。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/dessert/gateau_yuzu.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Gateau Yuzu fait maison<span>自家製ゆずケーキ</span></h3>
							<h4 class="menu-price">2,80€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキスト</p>
							<p class="menu-text">パティシエが作った特製ゆずケーキです。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/dessert/tiramise.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Tiramise au thé vert<span>自家製抹茶ティラミス</span></h3>
							<h4 class="menu-price">4,00€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/dessert/dorayaki.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Dorayaki<span>どら焼き</span></h3>
							<h4 class="menu-price">2,50€</h4>
							<p class="menu-text">Pancake aux haricots rouge.</p>
							<p class="menu-text">粒あんの入ったどら焼きです。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/dessert/dorayaki_chataigne.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Dorayaki au châtaigne<span>栗入りどら焼き</span></h3>
							<h4 class="menu-price">2,50€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/dessert/mochi.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Mochi<span>大福</span></h3>
							<h4 class="menu-price">3,00€</h4>
							<p class="menu-text">Daifuku pâte de riz gluant aux haricots rouge.</p>
							<p class="menu-text">粒あんの入った大福です。その他にも赤大福、よもぎ大福、豆大福、黒ごま大福、白ごま大福があります。</p>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/dessert/sakuramochi.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Sakuramochi<span>桜餅</span></h3>
							<h4 class="menu-price">2,00€</h4>
							<p class="menu-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>
			</div>

		</section>

		<!-- drink -->
		<section class="drink">
			<h3 class="drink-title">Drink</h3>

			<div class="menus">
				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/drink/cola.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Coca cola<span>コカ・コーラ</span></h3>
							<h4 class="menu-price">2,00€</h4>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/drink/cola_zero.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Coca cola zero<span>コカ・コーラゼロ</span></h3>
							<h4 class="menu-price">2,00€</h4>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/drink/cola_light.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Coca cola light<span>コカ・コーラライト</span></h3>
							<h4 class="menu-price">2,00€</h4>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/drink/orangina.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Orangina<span>オランジーナ</span></h3>
							<h4 class="menu-price">2,00€</h4>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/drink/perrier.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Perrier<span>ペリエ</span></h3>
							<h4 class="menu-price">2,00€</h4>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/drink/eau.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Cristarine<span>水</span></h3>
							<h4 class="menu-price">2,00€</h4>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/drink/the_vert.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Thé vert<span>緑茶</span></h3>
							<h4 class="menu-price">2,00€</h4>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/drink/the_oolong.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Thé oolong<span>烏龍茶</span></h3>
							<h4 class="menu-price">2,00€</h4>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/drink/asahi.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Asahi<span>アサヒ</span></h3>
							<h4 class="menu-price">3,00€</h4>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/drink/kirin.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Kirin<span>キリン</span></h3>
							<h4 class="menu-price">3,00€</h4>
						</div>
					</div>
				</div>

				<div class="menu-wrap">
					<div class="menu">
						<img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/drink/sake.jpg" alt="menuimg">

						<div class="menu-body">
							<h3 class="menu-title">Sake<span>日本酒</span></h3>
							<h4 class="menu-price">6,10€</h4>
						</div>
					</div>
				</div>
			</div>

		</section>
	</div>
</section>

<?php get_footer(); ?>