<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-16 01:15:34
  from 'E:\www\4um\server_global\public_html\templates\default\settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1fb9368dd070_01221240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5290a3c7f771fc2024e9ad5927da5c4befba6b37' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\settings.tpl',
      1 => 1579137331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1fb9368dd070_01221240 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="span12 ">
		<div id="id-26220569" class="accordion">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle active" data-toggle="collapse" data-parent="#id-26220569" href="#change-password">
						<em><i class="icon-unlock"></i></em>Zmiana hasła
					</a>
				</div>
				<div class="accordion-body  in collapse" id="change-password" style="height: auto;">
					<div class="accordion-inner">
						<form action="settings.php" method="post" id="settings-password" class="p30">
							<input type="hidden" name="change-password" value="true">
							<div class="message">
							
							<div class="form-group">
								<label for="exampleInputPassword1">Aktualne hasło do konta</label>
								<input type="password" class="form-control input-txt" id="password" name="password-old" placeholder="Obecne hasło do konta">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Nowe hasło do konta</label>
								<input type="password" class="form-control input-txt" id="password" name="password-new" placeholder="Nowe hasło">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Powtórz hasło</label>
								<input type="password" class="form-control input-txt" id="password" name="password-re-new" placeholder="Powtórz hasło">
							</div>
							<button type="submit" id="login-button" style="margin-top:10px;" class="btn btn-primary">Zmień hasło</button>
						</form>
					</div>
				</div>
			</div>
			
		
		
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#id-26220569" href="#change-avatar">
						<em><i class="icon-file-image-o"></i></em>Zmień avatar
					</a>
				</div>
				<div class="accordion-body collapse" id="change-avatar" style="height: 0px;">
					<div class="accordion-inner">
						<form action="settings.php" method="POST" ENCTYPE="multipart/form-data">
							<input type="hidden" name="change-avatar" value="true">
							<input type="hidden" name="MAX_FILE_SIZE" value="50000" />
							
							<div class="form-group">
								<input id="uploadFile" class="form-control input-txt" placeholder="Nie wybrano jeszcze pliku" disabled="disabled" />
							</div>
							
							<div class="fileUpload btn btn-primary">
								<span id="spanUpload" onclick="upload(); return false">Wybierz plik</span>
								<input id="uploadBtn" type="file" name="plik" class="upload" onchange="showFile(this.value)" />
							</div>
							<button type="submit" id="login-button" style="margin-top:10px;" class="btn btn-primary">Zmień Avatar</button>
                            <?php echo '<script'; ?>
 type="text/javascript">
                            function upload () {
                                document.getElementById("uploadBtn").click();
                            }

                            function showFile(path) {
                                var path = path.split('path\\');
                                console.log(path);
                                document.getElementById("uploadFile").value = path[1];
                            }
                            <?php echo '</script'; ?>
>


                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
