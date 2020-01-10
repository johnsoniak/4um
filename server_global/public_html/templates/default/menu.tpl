<div id="motopress-main" class="main-holder">
 
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
												{if $user->id == 0}
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="{$engine->domain}/action/login/">Zaloguj</a></li>
												<li id="menu-item-1924" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1924"><a href="{$engine->domain}/action/register/">Zarejestruj</a></li>
												{else}
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="{$engine->domain}/profile/{$user->username}">Profil</a></li>
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="{$engine->domain}/settigns">Ustawienia</a></li>
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="{$engine->domain}/messages">Wiadomości</a></li>
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="{$engine->domain}/action/logout">Wyloguj</a></li>
												{/if}
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
										<a href="{$engine->domain}" class="logo_h logo_h__img"><img src="https://www.net4um.net/upload/logo%20%281%29.png" alt="{$engine->sitename}" title=""></a>
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
											{$user->id}
										</nav>  
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</header>
		{include "container.start.tpl" }
