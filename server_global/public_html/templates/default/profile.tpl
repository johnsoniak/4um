<div class="row ">
    
	<div class="span12 ">
		{include file="breadcrumb.tpl"}
	</div>
    <div class="span12" style="margin-top:25px;">
    <div class="row">
        <div class="span2 ">
            <ul class="recent-posts extrarecentpost_1 unstyled">
                <li style="text-align:center" class="recent-posts_li post-75 post type-post status-publish format-standard has-post-thumbnail hentry category-semp-ertet-laciniate category-uam-leo-ut-tellus-dolor-dapibus category-uncategorized cat-39-id cat-37-id cat-1-id  list-item-0 clearfix">
                    <figure style="margin: 0 auto; position: relative; width: 100%;" class="thumbnail featured-thumbnail">
                        <center><img style="width:169px" src="{if $profile.avatar|count_characters}{$engine->domain}/{$profile.avatar}{else}{$engine->domain}/images/avatar.png{/if}" alt="Avatar {$profile.username}">
                        
                        </center>
                    
                    </figure>
                    <div style="width:100%;float:left;">
                        <span style="font-size:21px;color:{$engine->rank[$profile.rank]["color"]};line-height:50px">{$engine->rank[$profile.rank]['name']}</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="span5" style="color: #000;line-height: 5px;">
            <p><b>Nazwa użytkownika:</b> <span>{$profile.username}</span></p>
            <p><b>E-mail:</b> <span>{$profile.email}</span></p>
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
                    {if $profile.signature|count_characters}
                        {$bbcode->toHTML($dataProfil.signature)}
                    {else}
                        Brak podpisu
                    {/if}
                </p>
            </div>
        </div>
    </div>
    </div>
</div>