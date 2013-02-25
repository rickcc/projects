<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

//<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<?php echo $this->Html->docType(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('colorbox');
		echo $this->Html->css('ui-lightness/jquery-ui-1.8.17.custom');
		//echo $this->Html->css('prettyPhoto');

		echo $this->Html->script('jquery');
		echo $this->Html->script('jquery-ui.min');
		echo $this->Html->script('jquery.colorbox');
		//echo $this->Html->script('jquery.prettyPhoto');
		
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
				<?php //echo $this->Html->image('inets-micro.jpg'); ?>
				<?php echo '&nbsp;Microelectronics iNet Output Tracking Development Portal'; ?>
				<br />
				<table>
				<tr><td>
						<a href="/companies">Companies</a> | 
						<a href="/projects">Projects</a> | 
						<a href="/bizassists">Biz Assists</a> | 
						<a href="/agents">Agents</a> | 
						<a href="/outputs">Outputs</a>
				</td><td>
						<a href="/outputs/report_outputs">Dashboard</a> | 
						<a href="/bareports">Output Report</a>
				</td><td align=right>
						<a href="/users">Users</a>
				</td><td align=right>
						<?php if ($loggedIn) { ?>
							<a href="/users/logout">Logout</a> 					
						<?php } else { ?>
							<a href="/users/login">Login</a>					
						<?php } ?>
				</td></tr>
				</table>
			</h1>
		</div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	
	<?php echo $this->Js->writeBuffer(); ?>
	
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$(".cbAjax").colorbox({top:10, opacity:0.5, transition:"fade", width:"80%"});
			$(".cbInline").colorbox({inline:true, top:10, opacity:0.5, transition:"fade"});

	/*
			$("a[rel^='prettyPhoto']").prettyPhoto({
				keyboard_shortcuts: false,
				deeplinking: false,
				gallery_markup: '',
				social_tools: ''
			});
	*/
		});
	</script>

	 <script type="text/javascript">
           $(function() {
               $("#tabs").tabs();
           });
    </script>


	<?php 
	
	if (AuthComponent::user('role') == 'admin') { 
	 	echo $this->element('sql_dump'); 
	}
	
	?>
	 
</body>
</html>