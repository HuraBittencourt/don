<?php

    /**
      * template.php
      * Classe template
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
    class template
    {
        /*
         *  Variaveis
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
         * @return void
         */
        public function show()
        {
        ?>
            <!DOCTYPE HTML>
            <html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
                <head>
                    <?php include_once 'meta.php'; ?>
                    
                    <!--CSS-->
                    <?php include_once 'css/css.php'; ?>    
                    
                    <!--JQuery-->
                    <?php include_once 'js/jsLib.php'; ?>              
                    
                    <!--JavaScript-->
                </head>
                <body>
                    <div id="interface" class="12u center">

                        <header id="cabecalho">

                            <img id="logo" src="app.view/img/logo.png">

                        <div class="12u center" style="background-color: rgba(97,146,84,.90)">
                            <nav id="menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/nossoatendimento">Nossos Atendimentos</a></li>
                                    <li><a href="/estetica">Estética</a></li>
                                    <li><a href="/contato">Contato</a></li>
                                </ul>
                            </nav>
                        </div>

                        </header>
                        
                            <section id="corpo">
                                #CONTENT#
                            </section>

                        <footer id="rodape">
                            <div id="rodape" class="12u" style="background-color: rgba(97,146,84,.90)">
                                <div class="row">
                                    <div id="localizacao" class="4u left" style="background-color: red;">
                                        <h1>Localização</h1>
                                        <p>Rua Minas Gerais nº 214, Centro</p>
                                    </div>
                                    <div id="contato" class="4u -2u right" style="background-color: blue;">
                                        <h1>Contato</h1>
                                        <p>Telefone: (35)XXXX-XXXX / Celular (35)XXXX-XXXX</p>
                                        <p>E-mail: gilberto@don.com.br</p>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>


                        
                </body>
            </html>

            <?php include_once 'js/jsInit.php'; ?>    
        <?php
        }
    }
?>