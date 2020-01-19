<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 19:20:22
  from 'E:\www\4um\server_global\public_html\admin\templates\default\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24abf632be86_20126548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1788eb456c9a681b7a4e17817ff90503995c767c' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\admin\\templates\\default\\footer.tpl',
      1 => 1579314556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e24abf632be86_20126548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18061934195e24abf6297bd7_18888192';
?>
  <!-- General JS Scripts -->
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/stisla.js"><?php echo '</script'; ?>
>

  <!-- JS for logged Admin -->
  <?php if ($_smarty_tpl->tpl_vars['user']->value->admin) {?>
  <!-- General JS Scripts -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/popper.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/tooltip.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/nicescroll/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/moment.min.js"><?php echo '</script'; ?>
>

  
  <!-- JS Libraies -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/cleave-js/dist/cleave.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/cleave-js/dist/addons/cleave-phone.us.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/chart.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/owlcarousel2/dist/owl.carousel.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/summernote/summernote-bs4.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/bootstrap-daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/select2/dist/js/select2.full.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/jquery-selectric/jquery.selectric.min.js"><?php echo '</script'; ?>
>


  <!-- Page Specific JS File -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/page/index.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/fatal-error.js"><?php echo '</script'; ?>
>
  <?php }?>
  <!-- End JS for logged -->

  <!-- Template JS File -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/scripts.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/custom.js"><?php echo '</script'; ?>
>

  <!-- Page Specific JS File -->
</body>
</html>


  
 <?php }
}
