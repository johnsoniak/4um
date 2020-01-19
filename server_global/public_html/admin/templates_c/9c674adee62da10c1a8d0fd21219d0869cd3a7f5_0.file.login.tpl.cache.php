<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 20:20:49
  from 'E:\www\4um\server_global\public_html\admin\templates\default\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24ba213e0937_14932092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c674adee62da10c1a8d0fd21219d0869cd3a7f5' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\admin\\templates\\default\\login.tpl',
      1 => 1579296665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_5e24ba213e0937_14932092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '420928285e24ba21308c11_40045349';
?>
<div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['avatar'];?>
" alt="Avatar <?php echo $_smarty_tpl->tpl_vars['profile']->value['username'];?>
" style="width: 160px; display: block; margin-left: auto;    margin-right: auto;" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Witaj <span class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['profile']->value['username'];?>
</span></h4>
            <p class="text-muted">Aby przejść do panelu administratora musisz ponownie wpisać swoje hasło.</p>
            <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/admin/login.php" class="needs-validation" novalidate="">
              <?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Hasło</label>
                </div>
                <input id="password" type="password" class="form-control" placeholder="Wpisz swoje hasło" name="password" tabindex="2" required>
              </div>

              <div class="form-group text-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
" class="float-left mt-3">
                  Powrót na stronę | <?php echo $_smarty_tpl->tpl_vars['engine']->value->sitename;?>

                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Zaloguj
                </button>
              </div>

              
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['engine']->value->sitename;?>
. Strona używa <?php echo $_smarty_tpl->tpl_vars['engine']->value->sitename;?>
 w wersji <?php echo $_smarty_tpl->tpl_vars['engine']->value->version;?>

              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" style="background-size: 959px 942px; animation-duration: 8s;" data-background="<?php echo $_smarty_tpl->tpl_vars['photo']->value['image'];?>
">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Dzień dobry</h1>
                <h5 class="font-weight-normal text-muted-transparent">Zdjęcie z kategorii: <?php echo $_smarty_tpl->tpl_vars['photo']->value['category'];?>
</h5>
              </div>
              Fotografia pobrana przez <a class="text-light bb" href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
"><?php echo $_smarty_tpl->tpl_vars['engine']->value->sitename;?>
</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div><?php }
}
