<div id="publicidade_superior" class="publicidade">
 	<div class="conteudo_publicidade">
        <div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="div.item-slider">
        	<?php
        	if (isset($pub_top)) {
        		foreach ($pub_top as $pubtop) {
        	?>
        		<div class="item-slider">
	                <a href="<?php echo $pubtop->link_publicidade; ?>" title="" target="<?php echo ($pubtop->newtab_publicidade == 0 ? '_self' : '_blank' ); ?>">
	                    <img src="<?php echo base_url('uploads/publicidades') . '/' . $pubtop->img_vd_publicidade; ?>" alt="Titulo da imagem" />
	                </a>
	            </div>


        	<?php } } ?>
        </div>
    </div>
</div><!-- Publicidade -->

<!-- Conteudo
================================================== -->
<div id="conteudo" class="">

	<!-- Conteudo esquerda -->
	<div id="area_conteudo_esquerda" class="area_conteudo">

        <!-- conteudo Passeio e lazer -->
		<div id="area_conteudo_home_passeio" class="area_conteudo_home">
			<div class="topo_area_categoria">
				<img src="<?php echo base_url(); ?>/assets/images/icone_bicicleta_laranja.png" class="icone_area_categoria" alt="icone" />
				<h1 class="titulo_area_categoria">Passeio e Lazer</h1>
			</div>

			<!-- sliders -->
			<div class="sliders-grande direita">
				<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="div.item-slider" data-cycle-overlay-template="{{title}}">

					<?php
					if (isset($lazer_slider)) {
						foreach ($lazer_slider as $slider_lazer) {
					?>

					<div class="item-slider" data-title="<?php echo $slider_lazer->titulo_chamada; ?>">
						<a href="<?php echo $slider_lazer->link_chamada; ?>" title="<?php echo $slider_lazer->titulo_chamada; ?>">
							<img src="tim.php?src=<?php echo base_url('uploads/chamadas') . '/' . $slider_lazer->img_chamada; ?>&w=670&h=200" alt="<?php echo $slider_lazer->titulo_chamada; ?>" />
						</a>
					</div>

					<?php
						}
					}
					?>
					<div class="cycle-overlay"></div>
					<div class="cycle-pager"></div>
				</div>
			</div><!-- /sliders -->

			<!-- chamadas -->

			<div class="chamada-horizontal">
				<?php
				if (isset($lazer_media)) {
					foreach ($lazer_media as $media_lazer) {
				?>
				<div class="chamada_media">
					<a href="<?php echo $media_lazer->link_chamada; ?>" title="<?php echo $media_lazer->titulo_chamada; ?>">
						<img src="tim.php?src=<?php echo base_url('uploads/chamadas') . '/' . $media_lazer->img_chamada; ?>&w=154&h=102" alt="<?php echo $media_lazer->titulo_chamada; ?>" class="img_chamada_media"/>
						<h2><?php echo $media_lazer->titulo_chamada; ?></h2>
						<p><?php echo $media_lazer->desc_chamada; ?></p>
					</a>
				</div>
				<?php
					}
				}
				?>
			</div>

			<div class="rodape_area_categoria">
				<a href="<?php echo base_url('passeio-e-lazer'); ?>" title="Clique aqui e acesse uma página esclusiva com informações, matérias, promoções e outras coisas sobre Passeio e lazer">
                	<div class="conteudo_rodape_pagina_categoria">
						<h4>Acessar página de Passeio e Lazer</h4>
                    	<img src="<?php echo base_url(); ?>/assets/images/mais.png" alt=""/>
					</div>
                </a>
			</div>
		</div><!-- /conteudo Passeio e lazer -->

         <!-- Publicidade -->
        <div id="publicidade_meio_index" class="publicidade">
            <div class="conteudo_publicidade">
                <div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="div.item-slider">
                    <div class="item-slider">
                        <a href="#" title="">
                            <img src="http://placekitten.com/620/70" alt="Titulo da imagem" />
                        </a>
                    </div>

                    <div class="item-slider">
                        <a href="#" title="">
                            <img src="http://placekitten.com/g/620/70" alt="Titulo da imagem" />
                        </a>
                    </div>

                    <div class="item-slider">
                        <a href="#" title="">
                            <img src="http://placekitten.com/620/70" alt="Titulo da imagem" />
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- Publicidade -->

		<!-- conteudo restaurante -->
		<div id="area_conteudo_home_restaurantes" class="area_conteudo_home">
			<div class="topo_area_categoria">
				<img src="<?php echo base_url(); ?>/assets/images/icone_restaurante_laranja.png" class="icone_area_categoria" alt="icone" />
				<h1 class="titulo_area_categoria">Restaurantes</h1>
			</div>

			<!-- sliders -->
			<div class="sliders-medium direita">
				<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="div.item-slider" data-cycle-overlay-template="{{title}}">
					<div class="item-slider" data-title="Titulo do slider preto">
						<a href="#" title="">
							<img src="http://placekitten.com/326/250" alt="Titulo da imagem" />
						</a>
					</div>

					<div class="item-slider" data-title="Titulo do slider green">
						<a href="#" title="">
							<img src="http://placekitten.com/g/326/250" alt="Titulo da imagem" />
						</a>
					</div>

					<div class="item-slider" data-title="Titulo do slider red">
						<a href="#" title="">
							<img src="http://placekitten.com/326/250" alt="Titulo da imagem" />
						</a>
					</div>
					<div class="cycle-overlay"></div>
					<div class="cycle-pager"></div>
				</div>
			</div><!-- /sliders -->

			<!-- chamadas -->
			<div class="chamadas esquerda">
				<div class="chamada_pequena">
					<a href="" title="">
                        <img src='http://placehold.it/154x168' alt="" class="img_chamada_pequena"/>
                        <p>Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</p>
					</a>
				</div>
				<div class="chamada_pequena">
					<a href="" title="">
                        <img src="img/chamada.jpg" alt="" class="img_chamada_pequena"/>
                        <p>Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</p>
					</a>
				</div>
				<div class="chamada_pequena">
					<a href="" title="">
                        <img src="img/chamada.jpg" alt="" class="img_chamada_pequena"/>
                        <p>Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</p>
					</a>
				</div>
			</div><!-- /chamadas -->

			<div class="chamada-horizontal">
				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>
				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>

				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>

				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>
			</div>

			<div class="rodape_area_categoria">
				<a href="<?php echo base_url('restaurantes'); ?>" title="Clique aqui e acesse uma página esclusiva com informações, matérias, promoções e outras coisas sobre restaurantes">
                	<div class="conteudo_rodape_pagina_categoria">
						<h4>Acessar página de Restaurantes</h4>
                    	<img src="<?php echo base_url(); ?>/assets/images/mais.png" alt=""/>
					</div>
                </a>
			</div>
		</div><!-- /conteudo restaurante -->

		<!-- conteudo lanchonete -->
		<div id="area_conteudo_home_lanchonetes" class="area_conteudo_home">
			<div class="topo_area_categoria">
				<img src="<?php echo base_url(); ?>/assets/images/icone_lanches_laranja2.png" class="icone_area_categoria" alt="icone" />
				<h1 class="titulo_area_categoria">Lanchonetes</h1>
			</div>

			<div class="sliders-medium esquerda">
				<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="div.item-slider" data-cycle-overlay-template="{{title}}">
					<div class="item-slider" data-title="Titulo do slider preto">
						<a href="#" title="">
							<img src="http://placekitten.com/326/250" alt="Titulo da imagem" />
						</a>
					</div>

					<div class="item-slider" data-title="Titulo do slider green">
						<a href="#" title="">
							<img src="http://placekitten.com/g/326/250" alt="Titulo da imagem" />
						</a>
					</div>

					<div class="item-slider" data-title="Titulo do slider red">
						<a href="#" title="">
							<img src="http://placekitten.com/326/250" alt="Titulo da imagem" />
						</a>
					</div>
					<div class="cycle-overlay"></div>
					<div class="cycle-pager"></div>
				</div>
			</div><!-- /sliders -->

			<div class="chamadas direita">
				<div class="chamada_pequena">
					<a href="" title="">
                        <img src="img/chamada.jpg" alt="" class="img_chamada_pequena"/>
                        <p>Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</p>
					</a>
				</div>
				<div class="chamada_pequena">
					<a href="" title="">
                        <img src="img/chamada.jpg" alt="" class="img_chamada_pequena"/>
                        <p>Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</p>
					</a>
				</div>
				<div class="chamada_pequena">
					<a href="" title="">
                        <img src="img/chamada.jpg" alt="" class="img_chamada_pequena"/>
                        <p>Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</p>
					</a>
				</div>
			</div><!-- /chamadas direita -->

			<div class="chamada-horizontal">
				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>
				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>

				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>

				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>
			</div><!-- /chamadas horizontais -->

			<div class="rodape_area_categoria">
				<a href="<?php echo base_url('lanchonetes'); ?>" title="Clique aqui e acesse uma página esclusiva com informações, matérias, promoções e outras coisas sobre lanchonetes">
                    <div class="conteudo_rodape_pagina_categoria">
                        <h4>Acessar página de Lanchonetes</h4>
                        <img src="<?php echo base_url(); ?>/assets/images/mais.png" alt=""/>
                    </div>
                </a>
			</div>
		</div><!-- /conteudo lanchonete -->

        <!-- Publicidade -->
        <div id="publicidade_meio_index" class="publicidade">
            <div class="conteudo_publicidade">
                <div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="div.item-slider">
                    <div class="item-slider">
                        <a href="#" title="">
                            <img src="http://placekitten.com/620/70" alt="Titulo da imagem" />
                        </a>
                    </div>

                    <div class="item-slider">
                        <a href="#" title="">
                            <img src="http://placekitten.com/g/620/70" alt="Titulo da imagem" />
                        </a>
                    </div>

                    <div class="item-slider">
                        <a href="#" title="">
                            <img src="http://placekitten.com/620/70" alt="Titulo da imagem" />
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- Publicidade -->

		<!-- conteudo bebidas -->
		<div id="area_conteudo_home_bebidas" class="area_conteudo_home">
			<div class="topo_area_categoria">
				<img src="<?php echo base_url(); ?>/assets/images/icone_bebidas_laranja.png" class="icone_area_categoria" alt="icone" />
				<h1 class="titulo_area_categoria">Bebidas</h1>
			</div>

			<!-- sliders -->
			<div class="sliders-medium direita">
				<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="div.item-slider" data-cycle-overlay-template="{{title}}">
					<div class="item-slider" data-title="Titulo do slider preto">
						<a href="#" title="">
							<img src="http://placekitten.com/326/250" alt="Titulo da imagem" />
						</a>
					</div>

					<div class="item-slider" data-title="Titulo do slider green">
						<a href="#" title="">
							<img src="http://placekitten.com/g/326/250" alt="Titulo da imagem" />
						</a>
					</div>

					<div class="item-slider" data-title="Titulo do slider red">
						<a href="#" title="">
							<img src="http://placekitten.com/326/250" alt="Titulo da imagem" />
						</a>
					</div>
					<div class="cycle-overlay"></div>
					<div class="cycle-pager"></div>
				</div>
			</div><!-- /sliders -->

			<!-- chamadas -->
			<div class="chamadas esquerda">
				<div class="chamada_pequena">
					<a href="" title="">
                        <img src="img/chamada.jpg" alt="" class="img_chamada_pequena"/>
                        <p>Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</p>
					</a>
				</div>
				<div class="chamada_pequena">
					<a href="" title="">
                        <img src="img/chamada.jpg" alt="" class="img_chamada_pequena"/>
                        <p>Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</p>
					</a>
				</div>
				<div class="chamada_pequena">
					<a href="" title="">
                        <img src="img/chamada.jpg" alt="" class="img_chamada_pequena"/>
                        <p>Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</p>
					</a>
				</div>
			</div><!-- /chamadas -->

			<div class="chamada-horizontal">
				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>
				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>

				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>

				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>
			</div>

			<div class="rodape_area_categoria">
				<a href="<?php echo base_url('bebidas'); ?>" title="Clique aqui e acesse uma página esclusiva com informações, matérias, promoções e outras coisas sobre Bebidas">
                    <div class="conteudo_rodape_pagina_categoria">
                        <h4>Acessar página de Bebidas</h4>
                        <img src="<?php echo base_url(); ?>/assets/images/mais.png" alt=""/>
                    </div>
                </a>
			</div>
		</div><!-- /conteudo bebidas -->
	</div><!-- /conteudo esquerda -->

	<!-- conteudo direita -->
	<div id="area_conteudo_direita" class="area_conteudo esquerda">

		<!-- Frases do dia -->
		<div id="frase_do_dia">
            <div class="topo_area_categoria" >
                <img src="<?php echo base_url(); ?>/assets/images/icone_frase.png" alt="icone" class="icone_area_categoria" />
                <h1 class="titulo_area_categoria">Frase do dia</h1>
            </div>
            <?php
            if (isset($frases_dia)) {
            	foreach ($frases_dia as $frase) :
            ?>
                <?php echo $frase->texto_frase; ?>
                <p><span>"<?php echo $frase->autor_frase; ?>"</span></p>
            <?php
            	endforeach;
            }
            ?>
        </div><!-- /frases do dia -->

        <!-- Entretenimentos -->
        <div id="area_conteudo_home_entretenimento" class="area_conteudo_home">
        	<div class="topo_area_categoria">
                <img src="<?php echo base_url(); ?>/assets/images/icone_mascaras.png" alt="icone" class="icone_area_categoria" />
                <h1 class="titulo_area_categoria">Entretenimento</h1>
            </div>

            <div class="chamadas_sidebar">
            	<div class="chamada-captions">
	            	<img src="http://placekitten.com/154/168" alt="">

	            	<span>
	            		<a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
	             	</span>
	            </div>

	            <div class="chamada-captions">
	            	<img src="http://placekitten.com/154/168" alt="">

	            	<span>
	            		<a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
	             	</span>
	            </div>

	            <div class="chamada-captions">
	            	<img src="http://placekitten.com/154/168" alt="">

	            	<span>
	            		<a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
	             	</span>
	            </div>

	            <div class="chamada-captions">
	            	<img src="http://placekitten.com/154/168" alt="">

	            	<span>
	            		<a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
	             	</span>
	            </div>

            </div>

            <div class="chamada_pequena esquerda">
				<img src="<?php echo base_url(); ?>/assets/images/chamada.jpg" alt="" class="img_chamada_pequena"/>
				<p><a href="" title="">Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</a></p>
			</div>
            <div class="chamada_pequena esquerda">
				<img src="<?php echo base_url(); ?>/assets/images/chamada.jpg" alt="" class="img_chamada_pequena"/>
				<p><a href="" title="">Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</a></p>
			</div>
            <div class="chamada_pequena esquerda">
				<img src="<?php echo base_url(); ?>/assets/images/chamada.jpg" alt="" class="img_chamada_pequena"/>
				<p><a href="" title="">Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</a></p>
			</div>
			<div class="chamada-horizontal">
				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>
				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>
			</div>


            <div class="rodape_area_categoria">
				<a href="<?php echo base_url('entretenimento'); ?>" title="Clique aqui e acesse uma página esclusiva com informações, matérias, promoções e outras coisas sobre Bebidas">
                    <div class="conteudo_rodape_pagina_categoria">
                        <h4>Acessar página de Entretenimento</h4>
                        <img src="<?php echo base_url(); ?>/assets/images/mais.png" alt=""/>
                    </div>
                </a>
			</div>

        </div><!-- /entretenimentos -->

        <!-- publicidade -->
        <div id="publicidade_meio">
            <div class="publicidade_simples">
                <div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="div.item-slider">
					<div class="item-slider">
						<a href="#" title="">
							<img src="http://placekitten.com/295/510" alt="Titulo da imagem" />
						</a>
					</div>

					<div class="item-slider">
						<a href="#" title="">
							<img src="http://placekitten.com/g/295/510" alt="Titulo da imagem" />
						</a>
					</div>

					<div class="item-slider">
						<a href="#" title="">
							<img src="http://placekitten.com/295/510" alt="Titulo da imagem" />
						</a>
					</div>
				</div>
            </div>
        </div><!-- /publicidade -->

        <div id="area_conteudo_home_estadias" class="area_conteudo_home">
            <div class="topo_area_categoria">
                <img src="<?php echo base_url(); ?>/assets/images/icone_estadias.png" alt="icone" class="icone_area_categoria" />
                <h1 class="titulo_area_categoria">Estadias</h1>
            </div>

            <!-- sliders -->
			<div class="sliders-medium direita">
				<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="div.item-slider" data-cycle-overlay-template="{{title}}">
					<div class="item-slider" data-title="Titulo do slider preto">
						<a href="#" title="">
							<img src="http://placekitten.com/326/250" alt="Titulo da imagem" />
						</a>
					</div>

					<div class="item-slider" data-title="Titulo do slider green">
						<a href="#" title="">
							<img src="http://placekitten.com/g/326/250" alt="Titulo da imagem" />
						</a>
					</div>

					<div class="item-slider" data-title="Titulo do slider red">
						<a href="#" title="">
							<img src="http://placekitten.com/326/250" alt="Titulo da imagem" />
						</a>
					</div>
					<div class="cycle-overlay"></div>
					<div class="cycle-pager"></div>
				</div>
			</div><!-- /sliders -->
			<div class="chamada-horizontal">
				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>
				<div class="chamada_media">
					<a href="" title="">
						<img src="<?php echo base_url(); ?>/assets/images/chamada_grande.jpg" alt="" class="img_chamada_media"/>
						<h2>VIII passeio ciclistico do Recife</h2>
						<p>Faça ja sua inscrição no VIII passeio ciclístico do Recife. Vá até uma das lojas Malibbu e leve...</p>
					</a>
				</div>
			</div>

            <div class="chamada_pequena esquerda">
				<img src="<?php echo base_url(); ?>/assets/images/chamada.jpg" alt="" class="img_chamada_pequena"/>
				<p><a href="" title="">Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</a></p>
			</div>
            <div class="chamada_pequena esquerda">
				<img src="<?php echo base_url(); ?>/assets/images/chamada.jpg" alt="" class="img_chamada_pequena"/>
				<p><a href="" title="">Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</a></p>
			</div>
            <div class="chamada_pequena esquerda">
				<img src="<?php echo base_url(); ?>/assets/images/chamada.jpg" alt="" class="img_chamada_pequena"/>
				<p><a href="" title="">Que tal conhecer o Alto da sé neste final de semana? Veja uma incrível paisagem e um lindo...</a></p>
			</div>

            <div class="rodape_area_categoria">
				<a href="<?php echo base_url('estadias'); ?>" title="Clique aqui e acesse uma página esclusiva com informações, matérias, promoções e outras coisas sobre Estadias">
                    <div class="conteudo_rodape_pagina_categoria">
                        <h4>Acessar página de Estadias</h4>
                        <img src="<?php echo base_url(); ?>/assets/images/mais.png" alt=""/>
                    </div>
                </a>
			</div>
        </div>
	</div><!-- /conteudo direita -->
</div><!-- /conteudo -->

<div id="publicidade_inferior" class="publicidade">
	<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="div.item-slider">
		<div class="item-slider">
			<a href="#" title="">
				<img src="http://placekitten.com/980/170" alt="Titulo da imagem" />
			</a>
		</div>

		<div class="item-slider">
			<a href="#" title="">
				<img src="http://placekitten.com/g/980/170" alt="Titulo da imagem" />
			</a>
		</div>

		<div class="item-slider">
			<a href="#" title="">
				<img src="http://placekitten.com/980/170" alt="Titulo da imagem" />
			</a>
		</div>
	</div>
</div><!-- /publicidade -->

