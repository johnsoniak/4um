<div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      {include file="notify.tpl"}
      {include file="menu.tpl"}

      <div class="main-content" style="min-height: 694px;">
        <section class="section">
            <div class="section-header">
                <h1>Lista użytkowników</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{$engine->domain}/admin/">Kokpit</a></div>
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
                                <form method="get" enctype="application/x-www-form-urlencoded" action="{$engine->domain}/admin/index.php">
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
                                    {foreach from=$users item=user}
                                    <tr>
                                        <td>{$user.id}</td>
                                        <td style="text-align:center;">
                                            <img alt="image" src="{if $user.avatar|count_characters}{$user.avatar}{else}{$engine->domain}/images/avatar.png{/if}" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="{$user.username}" aria-describedby="tooltip159233">
                                            <br>{$user.username}
                                        </td>
                                        <td style="text-align:center;">{$user.email}</td>
                                        <td><div style="background-color:{$engine->rank[$user.rank]["color"]}" class="badge badge-success">{$engine->rank[$user.rank]["name"]}</div></td>
                                        <td>{gmdate("Y-m-d H:i:s", $user.regDat)}</td>
                                        <td>{(int)$user.posts}</td>
                                        <td>
                                            {if $user.active}
                                                <div class="badge badge-success">Aktywny</div>
                                            {else}
                                                <div class="badge badge-danger">Nieaktywne</div>
                                            {/if}
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
                                    {/foreach}
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        {if $page.totalPages}
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    {if $page.thisPage > 1}
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                    </li>
                                    {/if}
                                    {for $foo=1 to $page.totalPages}
                                    <li class="page-item{if $page.thisPage == $foo} active{/if}"><a class="page-link" href="{$engine->domain}{$engine->location}&page={$foo}">{$foo}<span class="sr-only">(current)</span></a></li>
                                    {/for}
                                    
                                    
                                    {if $page.thisPage != $page.totalPages && $page.totalPages > 5}
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    {/if}
                                </ul>
                            </nav>
                        </div>
                        {/if}
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>