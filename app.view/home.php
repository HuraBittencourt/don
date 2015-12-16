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
				<p>Texto apenas para encher linguiça !!</p>
				<h1>Testando um H1 !!</h1>
				
				<!-- conteudo -->
				<div class="row">
					<!-- slide -->
					<div class="9u"> 
						<div class="row carrousel">
							<div class="slide">
								<div class="row">
									<!-- imagem -->
									<div class="9u">
										<img src="/app.view/img/lug_paisagens_03022010_08.jpg" class="imagemslide">
									</div>
									<!-- texto -->
									<div class="3u">
										<h1>Facetas</h1>
										<p>A melhor opção para seus dentes ! A mais nova tecnologia no mercado</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- videos -->
					<div class="3u">
						
					</div>
				</div>



				<hr>
			<?php
		}
	}
?>