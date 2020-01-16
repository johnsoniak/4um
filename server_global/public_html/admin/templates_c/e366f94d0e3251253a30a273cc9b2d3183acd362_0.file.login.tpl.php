<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-16 06:39:03
  from 'E:\www\4um\server_global\public_html\admin\templates\def\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e20050716bf17_45199873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e366f94d0e3251253a30a273cc9b2d3183acd362' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\admin\\templates\\def\\login.tpl',
      1 => 1579156736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e20050716bf17_45199873 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="app">
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
            <form method="POST" action="#" class="needs-validation" novalidate="">
              
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
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Dzień dobry</h1>
                <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
              </div>
              Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div><?php }
}
