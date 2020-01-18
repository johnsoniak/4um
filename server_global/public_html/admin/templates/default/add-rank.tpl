  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      {include file="notify.tpl"}
      {include file="menu.tpl"}

      <div class="main-content" style="min-height: 694px;">
        <section class="section">
            <div class="section-header">
                <h1>Dodawanie rangi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Kokpit</a></div>
                    <div class="breadcrumb-item"><a href="#">Rangi</a></div>
                    <div class="breadcrumb-item">Dodawanie Rangi</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Dodawanie rangi</h2>
                <p class="section-lead">Na tej stronie możesz dodawać rangi oraz ich uprawnienia.</p>
                <form action="rank.php" method="post">
                    <div class="row">
                    
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Informacje o randze</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nazwa rangi</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Kolor dla rangi</label>
                                        <input type="text" class="form-control colorpickerinput colorpicker-element" data-colorpicker-id="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>uprawnienia</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Uprawnienia dla rangi</label>
                                        <div class="selectgroup selectgroup-pills">
                                            <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">Zarządzanie użytkownikami</span>
                                            </label>
                                            <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                                            <span class="selectgroup-button">Dodawanie rang</span>
                                            </label>
                                            <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                                            <span class="selectgroup-button">Edycja uprawnień użytkowników</span>
                                            </label>
                                            <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                                            <span class="selectgroup-button">JavaScript</span>
                                            </label>
                                            <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                            <span class="selectgroup-button">Edycja działów</span>
                                            </label>
                                            <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                            <span class="selectgroup-button">Zarządzanie Działami forum</span>
                                            </label>
                                            <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                                            <span class="selectgroup-button">Ustawienia 4um Engine</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Dodaj rangę</button>
                    </div>
                </form>

            </div>
        </section>
    </div>
  </div>
</div>