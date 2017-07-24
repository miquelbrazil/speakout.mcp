<?php
/**
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

 $this->layout = false;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHF Speakout Mobilizer Login</title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css( 'structure.css?v=' . time() ) ?>
    <?= $this->Html->css( 'typography.css?v=' . time() ) ?>
    <?= $this->Html->css( '/lib/semantic/dist/semantic.min.css' ) ?>
    <?= $this->Html->css( '/lib/jquery-ui/themes/flick/jquery-ui.min.css' ) ?>

    <?= $this->Html->script( 'https://use.typekit.net/bgz6iwu.js' ) ?>
    <?= $this->Html->scriptBlock( 'try{Typekit.load({ async: true });}catch(e){}', [ 'defer' => true ] ); ?>

    <?= $this->Html->script( '/lib/jquery/dist/jquery.min.js' ) ?>
    <?= $this->Html->script( '/lib/jquery-ui/jquery-ui.min.js' , [ 'block' => 'footer_js' ] ) ?>
    <?= $this->Html->script( '/lib/semantic/dist/semantic.min.js' , [ 'block' => 'footer_js' ] ) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body style="background-color: rgb( 241 , 233 , 219 );">

	<div class="ui grid" style="height: 100%;">

    	<main class="sixteen wide column" style="height: 100%;">
            <article class="ui middle aligned centered relaxed padded grid" style="height: inherit;">
                <div class="four wide column">
                    <header class="ui top attached segment">
                        <img class="ui fluid image" src="webroot/img/ahf-mcp-logo.png" />
                    </header>
                    <div class="ui bottom attached segment">

                        <?= $this->Flash->render( 'auth' ) ?>

                        <?= $this->Form->create( null , [ 'url' => false , 'class' => 'ui big form' ] ); ?>
                            <div class="field"><?= $this->Form->input( 'username' , [ 'type' => 'text' , 'label' => false , 'error' => false , 'placeholder' => 'Enter Username' ] ) ?></div>
                            <div class="field"><?= $this->Form->input( 'password' , [ 'type' => 'password' , 'label' => false , 'error' => false , 'placeholder' => 'Enter Password' ] ) ?></div>
                            <div class="field"><button class="ui fluid big button submit" formnovalidate name="action" value="login" type="submit">Login</button></div>
                        <?= $this->Form->end(); ?>

                    </div>
                </div>
            </article>
        </main>
	</div>

    <?= $this->fetch('footer_js') ?>

</body>
</html>
