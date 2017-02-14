<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHF &mdash; Mobilizer Coordination Platform</title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css( 'structure.css?' . time() ) ?>
    <?= $this->Html->css( 'typography.css?' . time() ) ?>
    <?= $this->Html->css( 'styles.css?' . time() ) ?>
    <?= $this->Html->css( '/lib/semantic/dist/semantic.min.css' ) ?>
    <?= $this->Html->css( '/lib/semantic-ui-calendar/dist/calendar.min.css' ) ?>
    <?= $this->Html->css( '/lib/jquery-ui/themes/flick/jquery-ui.min.css' ) ?>
    <?= $this->Html->css( '/lib/chartist/dist/chartist.min.css' ) ?>

    <?= $this->Html->script( 'https://use.typekit.net/bgz6iwu.js' ) ?>
    <?= $this->Html->scriptBlock( 'try{Typekit.load({ async: true });}catch(e){}', [ 'defer' => true ] ); ?>
    <?= $this->Html->script( 'google.js' ); ?>

    <?= $this->Html->script( '/lib/jquery/dist/jquery.min.js' ) ?>
    <?= $this->Html->script( '/lib/jquery-ui/jquery-ui.min.js' , [ 'block' => 'footer_js' ] ) ?>
    <?= $this->Html->script( '/lib/semantic/dist/semantic.min.js' , [ 'block' => 'footer_js' ] ) ?>
    <?= $this->Html->script( '/lib/semantic-ui-calendar/dist/calendar.min.js' , [ 'block' => 'footer_js' ] ) ?>
    <?= $this->Html->script( '/lib/jquery-serialize-object/dist/jquery.serialize-object.min.js' , [ 'block' => 'footer_js' ] ) ?>
    <?= $this->Html->script( '/lib/chartist/dist/chartist.min.js' , [ 'block' => 'footer_js' ] ) ?>
    <?= $this->Html->script( '/lib/moment/min/moment-with-locales.min.js' , [ 'block' => 'footer_js' ] ) ?>
    <?= $this->Html->script( 'ahf-mcp.js?' .time() , [ 'block' => 'footer_js' ] ) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="foundation" style="background-color: #f5f5f5;">

	<div class="ui grid" style="margin-bottom: 0; padding-bottom: 4rem !important;">

    	<header class="sixteen wide black column">
        	<div class="ui one column grid container">
                <header class="ui grid container">
            	    <div class="middle aligned one wide column" style="padding-top: 4rem; padding-bottom: 3rem;">
                        <?= $this->Html->image( 'ahf-logo.png' , [ 'alt' => 'Leprechaun Promotions Logo' , 'class' => 'ui small image' ] ) ?>
            	    </div>
                    <div class="middle aligned nine wide column" style="padding-top: 4rem; padding-bottom: 3rem; color: rgb(241,233,219) !important;"><p class="ui large header tk-open-sans" style="color: inherit;">Mobilizer Coordination Platform</p></div>
                    <div class="six wide middle aligned right aligned column" style="padding-top: 4rem; padding-bottom: 3rem; color: white;"><p>Logged in as: <a href="#"><?= $user_fullname ?></a></p></div>
            	</header>
        	</div>
    	</header>

        <nav class="sixteen wide column" style="background-color: rgb(241,233,219); padding-left: 2rem;">
            <div class="ui one column grid container">
                <div class="column">
                    <div class="ui labeled icon text menu" style="margin-top: 0; margin-bottom: 0;">
                        <?= $this->Html->link(
                                    '<i class="dashboard icon"></i>Dashboard',
                                    [ 'controller' => 'Events' , 'action' => 'index' ],
                                    [ 'escape' => false , 'class' => 'active item' , 'style' => 'padding-right: 2rem;' ]
                                ); ?>
                        <?= $this->Html->link(
                                    '<i class="ticket icon"></i>New Event',
                                    [ 'controller' => 'Events' , 'action' => 'add' , 'prefix' => 'mobilizer' ],
                                    [ 'escape' => false , 'class' => 'item' ]
                                ); ?>
                    </div>
                </div>
            </div>
        </nav>

    	<main class="sixteen wide column" style="padding-top: 0 !important;">
            <article class="ui one column padded grid container" style="margin: auto !important;">
                <div class="column">
                    <?= $this->fetch('content') ?>
                </div>
            </article>
        </main>
	</div>

    <div id="footer">
        <div class="ui one column vertically padded grid container">
            <footer class="center aligned column">&copy;2017 AIDS Healthcare Foundation &mdash; Mobilizer Coordination Platform. All Rights Reserved.</footer>
        </div>
    </div>

    <?= $this->fetch('footer_js') ?>

    <script>
        new Chartist.Bar('.ct-chart', {
          labels: ['White', 'Black', 'Hispanic', 'Other' ],
          series: [
            [2, 8, 2, 4],
            [4, 5, 8, 2],
            [3, 12, 2, 1]
          ]
        }, {
          seriesBarDistance: 30,
          axisX: {
            showGrid: false
          }
        });
    </script>

</body>
</html>
