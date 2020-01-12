<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-12 22:40:48
  from 'E:\www\4um\server_global\public_html\templates\default\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1ba07074d7d6_94494837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6436eed204f958ae9161e87bcc634a7f637cdf2a' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\404.tpl',
      1 => 1578868836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1ba07074d7d6_94494837 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="span12" data-motopress-wrapper-type="content">
				<div class="row error404-holder">
					<div class="span7 error404-holder_num" data-motopress-type="static" data-motopress-static-file="static/static-404.php">
						404					</div>
					<div class="span5" data-motopress-type="static" data-motopress-static-file="static/static-not-found.php">
						<div class="hgroup_404">
	<h1>Przepraszamy!</h1>	<h2>Nie znaleziono strony o podanym adresie.</h2></div>

<h4>Nie martw się. Nic straconego! Poniżej umieszczamy wyszukiwarkę, która pomoże Tobie znaleźć to co próbujesz wyszukać.</h4><p>Wpisz poniżej słowa kluczowe do wyszukania</p>
<div class="search-form caption caption__portfolio">
	<form id="searchform" method="get" action="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/search/" class="pr30" accept-charset="utf-8">
		<input type="text" value="" placeholder="Słowa kluczowe" name="s" id="s" class="search-form_it">
		<button style="margin-top: 10px;" type="submit" id="login-button" class="btn btn-primary-important">Szukaj</button>
	</form>
</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
