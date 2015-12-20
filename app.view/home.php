<?php

	/**
      * home.php
      * Classe Home
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
	class Home
	{
		/*
		 * Vari?eis
		 */


		/**
		 * Método construtor
		 * Verifica se esta logado
		 * 
		 * @access public
		 * @return void
		 */
		public function __construct()
		{
			
		}


		/**
		 * Método show
		 * Exibe as informa?es da p?ina
		 * 
		 * @access public
		 */
		public function show()
		{
			?>
				
				<!-- conteudo -->
				<div class="row">
					<!-- slide -->
					<div id="efeitoCarrousel" class="9u"> 
						<div class="row carrousel">
							<div class="slide">
								<div class="row">
									<!-- imagem -->
									<div class="9u">
										<img id="imagem" src="/app.view/img/lug_paisagens_03022010_08.jpg" class="imagemslide">
									</div>
									<!-- texto -->
									<div class="3u">
										<h1>Facetas</h1>
										<p>A melhor opção para seus dentes ! A mais nova tecnologia no mercado</p>
									</div>
								</div>
							</div>
							<div class="slide">
								<div class="row">
									<!-- imagem -->
									<div class="9u">
										<img src="/app.view/img/lug_paisagens_16112009_05.jpg" class="imagemslide">
									</div>
									<!-- texto -->
									<div class="3u">
										<h1>Atendimentos</h1>
										<p>A melhor opção para seus dentes ! A mais nova tecnologia no mercado</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- videos -->
					<div id="video" class="3u">
						<ul id="videos">
							<li><iframe width="300" height="200" src="https://www.youtube.com/embed/sGbxmsDFVnE" frameborder="0" allowfullscreen style="box-shadow: -2px 2px 5px rgba(0,0,0,0.5);"></iframe></li>
							<li style="margin-top: 55px;"><iframe width="300" height="200" src="https://www.youtube.com/embed/ngElkyQ6Rhs" frameborder="0" allowfullscreen style="box-shadow: -2px 2px 5px rgba(0,0,0,0.5);"></iframe></li>
						</ul>
					</div>
				</div>



				<hr>
			<?php
		}
	}
?>