<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 20:19:14
  from 'E:\www\4um\server_global\public_html\templates\default\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24b9c2e377d4_04530949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffb67acc513004c791b51f60532f66650f399d66' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\profile.tpl',
      1 => 1579142724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:breadcrumb.tpl' => 1,
  ),
),false)) {
function content_5e24b9c2e377d4_04530949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7010315425e24b9c29e9e20_41083535';
?>
<div class="row ">
    
	<div class="span12 ">
		<?php $_smarty_tpl->_subTemplateRender("file:breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
    <div class="span12" style="margin-top:25px;">
    <div class="row">
        <div class="span2 ">
            <ul class="recent-posts extrarecentpost_1 unstyled">
                <li style="text-align:center" class="recent-posts_li post-75 post type-post status-publish format-standard has-post-thumbnail hentry category-semp-ertet-laciniate category-uam-leo-ut-tellus-dolor-dapibus category-uncategorized cat-39-id cat-37-id cat-1-id  list-item-0 clearfix">
                    <figure style="margin: 0 auto; position: relative; width: 100%;" class="thumbnail featured-thumbnail">
                        <center><img style="width:169px" src="<?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['profile']->value['avatar'], $tmp)) {
echo $_smarty_tpl->tpl_vars['profile']->value['avatar'];
} else {
echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/images/avatar.png<?php }?>" alt="Avatar <?php echo $_smarty_tpl->tpl_vars['profile']->value['username'];?>
">
                        
                        </center>
                    
                    </figure>
                    <div style="width:100%;float:left;">
                        <span style="font-size:21px;color:<?php echo $_smarty_tpl->tpl_vars['engine']->value->rank[$_smarty_tpl->tpl_vars['profile']->value['rank']]["color"];?>
;line-height:50px"><?php echo $_smarty_tpl->tpl_vars['engine']->value->rank[$_smarty_tpl->tpl_vars['profile']->value['rank']]['name'];?>
</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="span5" style="color: #000;line-height: 5px;">
            <p><b>Nazwa użytkownika:</b> <span><?php echo $_smarty_tpl->tpl_vars['profile']->value['username'];?>
</span></p>
            <p><b>E-mail:</b> <span><?php echo $_smarty_tpl->tpl_vars['profile']->value['email'];?>
</span></p>
            <p><b>Ostatnio zalogowany:</b> <span> </span></p>
        </div>
	
        <div class="span5" style="color: #000;line-height: 5px;">
           
        </div>
        <div class="span10" style="color: #000;line-height: 5px; float:right;">
            Aktualnie: przegląda stronę profile
        </div>
        <div class="fix"></div>
        <div class="span12 portfolio_item_holder">
            <div style="background: #31353d; padding: 9px 10px 1px 10px; margin-bottom: 15px;" class="caption caption__portfolio">
                <h3 class="title">Podpis</h3>
                <p class="excerpt">
                    <?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['profile']->value['signature'], $tmp)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['bbcode']->value->toHTML($_smarty_tpl->tpl_vars['profile']->value['signature']);?>

                    <?php } else { ?>
                        Brak podpisu
                    <?php }?>
                </p>
            </div>
        </div>
    </div>
    </div>
</div><?php }
}
