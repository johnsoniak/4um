<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 19:16:25
  from 'E:\www\4um\server_global\public_html\admin\templates\default\users-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24ab092fb7a9_38765329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cbab4b340bc359448f8be1c0fdd689eabb500c3' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\admin\\templates\\default\\users-list.tpl',
      1 => 1579457688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:notify.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5e24ab092fb7a9_38765329 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php $_smarty_tpl->_subTemplateRender("file:notify.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="main-content" style="min-height: 694px;">
        <section class="section">
            <div class="section-header">
                <h1>Lista użytkowników</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/admin/">Kokpit</a></div>
                    <div class="breadcrumb-item"><a href="#">Użytkownicy</a></div>
                    <div class="breadcrumb-item">Lista użytkowników</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Lista użytkowników</h4>
                            <div class="card-header-form">
                                <form method="get" enctype="application/x-www-form-urlencoded" action="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/admin/index.php">
                                    <div class="input-group">
                                        <input type="hidden" name="action" value="users-list" />
                                        <input type="text" class="form-control" name="q" placeholder="Szukaj użytkownika">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Login</th>
                                        <th>E-mail</th>
                                        <th>Ranga</th>
                                        <th>Data rejestracji</th>
                                        <th>Wpisów</th>
                                        <th>Status</th>
                                        <th>Akcja</th>
                                    </tr>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                                        <td style="text-align:center;">
                                            <img alt="image" src="<?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['user']->value['avatar'], $tmp)) {
echo $_smarty_tpl->tpl_vars['user']->value['avatar'];
} else {
echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/images/avatar.png<?php }?>" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" aria-describedby="tooltip159233">
                                            <br><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>

                                        </td>
                                        <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                                        <td><div style="background-color:<?php echo $_smarty_tpl->tpl_vars['engine']->value->rank[$_smarty_tpl->tpl_vars['user']->value['rank']]["color"];?>
" class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['engine']->value->rank[$_smarty_tpl->tpl_vars['user']->value['rank']]["name"];?>
</div></td>
                                        <td><?php echo gmdate("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['user']->value['regDat']);?>
</td>
                                        <td><?php echo (int)$_smarty_tpl->tpl_vars['user']->value['posts'];?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value['active']) {?>
                                                <div class="badge badge-success">Aktywny</div>
                                            <?php } else { ?>
                                                <div class="badge badge-danger">Nieaktywne</div>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Edytuj" class="btn btn-icon btn-info"><i class="far fa-edit"></i></a>
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Daj ostrzeżenie" class="btn btn-icon btn-warning"><i class="fas fa-user-minus"></i></a>
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Banuj" class="btn btn-icon btn-dark"><i class="fas fa-user-slash"></i></a>
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Usuń" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>

                                            </div>
                                        </td>
                                            
                                    </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <?php if ($_smarty_tpl->tpl_vars['page']->value['totalPages']) {?>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value['thisPage'] > 1) {?>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value['totalPages']+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value['totalPages'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <li class="page-item<?php if ($_smarty_tpl->tpl_vars['page']->value['thisPage'] == $_smarty_tpl->tpl_vars['foo']->value) {?> active<?php }?>"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;
echo $_smarty_tpl->tpl_vars['engine']->value->location;?>
&page=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
<span class="sr-only">(current)</span></a></li>
                                    <?php }
}
?>
                                    
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value['thisPage'] != $_smarty_tpl->tpl_vars['page']->value['totalPages'] && $_smarty_tpl->tpl_vars['page']->value['totalPages'] > 5) {?>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </nav>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div><?php }
}
