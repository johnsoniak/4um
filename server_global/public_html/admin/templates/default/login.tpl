<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-group">
        <div class="card p-4">
          <div class="card-body">
            <h1>Panel Administratora</h1>
            <p class="text-muted">Wymagane jest ponowne logowanie</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"> 
                    <i class="icofont-ui-user"></i>
                </span>
              </div>
              <input class="form-control" type="text" value="{$user->username}" disabled>
            </div>
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="icofont-ui-password"></i>
                </span>
              </div>
              <input class="form-control" type="password" placeholder="Password">
            </div>
            <div class="row">
              <div class="col-6">
                <button class="btn btn-primary px-4" type="button">Zaloguj</button>
              </div>
              <div class="col-6 text-right">
                <button class="btn btn-link px-0" type="button">Powrót na stronę</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card text-white bg-primary py-5 d-md-down-none" style="width: 44%; background: url(http://4um.pl/images/avatar.png);
    background-position: center top;
    background-size: 100% 100%;">
          <div class="card-body text-center">
            <div>
              <h2 style="text-shadow: 1px 1px 0 #000, -1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000, 0px 1px 0 #000, 0px -1px 0 #000, -1px 0px 0 #000, 1px 0px 0 #000;
    color: #fff;font-size: 35px;">{$user->username}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>