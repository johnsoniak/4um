<div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="{$profile.avatar}" alt="Avatar {$profile.username}" style="width: 160px; display: block; margin-left: auto;    margin-right: auto;" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Witaj <span class="font-weight-bold">{$profile.username}</span></h4>
            <p class="text-muted">Aby przejść do panelu administratora musisz ponownie wpisać swoje hasło.</p>
            <form method="POST" action="#" class="needs-validation" novalidate="">
              
              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Hasło</label>
                </div>
                <input id="password" type="password" class="form-control" placeholder="Wpisz swoje hasło" name="password" tabindex="2" required>
              </div>

              <div class="form-group text-right">
                <a href="{$engine->domain}" class="float-left mt-3">
                  Powrót na stronę | {$engine->sitename}
                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Zaloguj
                </button>
              </div>

              
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; {$engine->sitename}. Strona używa {$engine->sitename} w wersji {$engine->version}
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" style="background-size: 959px 942px;" data-background="{$photo.image}">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Dzień dobry</h1>
                <h5 class="font-weight-normal text-muted-transparent">Zdjęcie z kategorii: {$photo.category}</h5>
              </div>
              Fotografia pobrana przez <a class="text-light bb" href="{$engine->domain}">{$engine->sitename}</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>