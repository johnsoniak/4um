<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 20:20:49
  from 'E:\www\4um\server_global\public_html\admin\templates\default\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24ba21733483_41812769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c674adee62da10c1a8d0fd21219d0869cd3a7f5' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\admin\\templates\\default\\login.tpl',
      1 => 1579296665,
      2 => 'file',
    ),
    '6809b616d1503d393eeb72105aa24011ecd3abc0' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\admin\\templates\\default\\error.tpl',
      1 => 1579295760,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5e24ba21733483_41812769 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="http://4um.pl/upload/avatar/5.png" alt="Avatar program" style="width: 160px; display: block; margin-left: auto;    margin-right: auto;" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Witaj <span class="font-weight-bold">program</span></h4>
            <p class="text-muted">Aby przejść do panelu administratora musisz ponownie wpisać swoje hasło.</p>
            <form method="POST" action="http://4um.pl/admin/login.php" class="needs-validation" novalidate="">
                            <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Hasło</label>
                </div>
                <input id="password" type="password" class="form-control" placeholder="Wpisz swoje hasło" name="password" tabindex="2" required>
              </div>

              <div class="form-group text-right">
                <a href="http://4um.pl" class="float-left mt-3">
                  Powrót na stronę | 4um Engine
                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Zaloguj
                </button>
              </div>

              
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; 4um Engine. Strona używa 4um Engine w wersji 0.0.1 alpha
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" style="background-size: 959px 942px; animation-duration: 8s;" data-background="https://images.unsplash.com/photo-1552065769-8079333a8c8f?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Dzień dobry</h1>
                <h5 class="font-weight-normal text-muted-transparent">Zdjęcie z kategorii: Rosja</h5>
              </div>
              Fotografia pobrana przez <a class="text-light bb" href="http://4um.pl">4um Engine</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div><?php }
}
