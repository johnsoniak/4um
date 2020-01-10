<div class="motopress-wrapper content-holder clearfix" {if isset($uDataProfile) && $uDataProfile.background|count_characters} style="background: url({$config->domain}/{$uDataProfile.background}) no-repeat center center fixed !important; -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    color: #B2B2B2;"{/if}>
			<div class="container">
				<div class="row"{if isset($uDataProfile) && $uDataProfile.background|count_characters} style="background: rgba(255,255,255,0.85);padding-right: 62px;margin-right: -30px;"{/if}>
					<div class="span12" data-motopress-wrapper-type="content">
						<div class="row">
							<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
								<div class="slider_off"> </div>
							</div>
						</div>
						<div class="row">
							<div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
								<div id="post-203" class="post-203 page type-page status-publish hentry">