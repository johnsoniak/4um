<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-13 00:44:34
  from 'E:\www\4um\server_global\public_html\templates\default\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1bbd723f2cb7_43073847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '924e384fd949374841c4993170f4a2158588fbd0' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\menu.tpl',
      1 => 1578876255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:container.start.tpl' => 1,
  ),
),false)) {
function content_5e1bbd723f2cb7_43073847 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="motopress-main" class="main-holder">
 
		<header class="motopress-wrapper header"> 
			<div class="container">
				<div class="row">
					<div class="span12" data-motopress-wrapper-file="wrapper/wrapper-header.php" data-motopress-wrapper-type="header" data-motopress-id="561bce2a180a5">
						<div class="extraheader_0">
							<div class="row">
								<div class="span12" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="header-sidebar-2">
									<div id="nav_menu-2">
										<div class="menu-extra_header_menu-container">
											<ul id="menu-extra_header_menu" class="menu">
												<?php if ($_smarty_tpl->tpl_vars['user']->value->id == 0) {?>
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/action/login/">Zaloguj</a></li>
												<li id="menu-item-1924" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1924"><a href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/action/register/">Zarejestruj</a></li>
												<?php } else { ?>
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
">Profil</a></li>
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/settigns">Ustawienia</a></li>
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/messages">Wiadomości</a></li>
												<?php if ($_smarty_tpl->tpl_vars['engine']->value->rank[$_smarty_tpl->tpl_vars['user']->value->rank]["admin"]) {?>
													<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/admin">Panel zarządzania</a></li>
												<?php }?>
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/action/logout/">Wyloguj</a></li>
												<?php }?>
											</ul>
										</div>
									</div> 
								</div>
							</div>	
						</div>
						<div class="extraheader_1">
							<div class="row">
								<div class="span6" >
									<div class="logo pull-left">
										<a href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
" class="logo_h logo_h__img"><img src="http://www.net4um.net/upload/logo%20%281%29.png" alt="<?php echo $_smarty_tpl->tpl_vars['engine']->value->sitename;?>
" title=""></a>
									</div>
								</div>
								<div class="span6 hidden-phone" data-motopress-type="static" data-motopress-static-file="search/">
							 
									<div class="search-form search-form__h hidden-phone clearfix">
										<form id="search-header" class="navbar-form pull-right" method="get" action="search/" accept-charset="utf-8">
											<input type="text" name="s" placeholder="Szukana fraza" class="search-form_it">
											<button type="submit" class="search-form_is">
											<i class="icon-search"></i>
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="menu_holder">
							<div class="row">
								<div class="span12">
									<div class="extra_menu" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
		 
										<nav class="nav nav__primary clearfix">
											<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>

										</nav>  
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</header>
		<?php $_smarty_tpl->_subTemplateRender("file:container.start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
