@include('layouts/html')
<body >
@include('layouts/header')

<section class="vh-100" style="background-color: #EEEEEE;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="{{ asset('img/logo.png') }}"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Cadastro</h5>

                  <div class="form-outline">
                    <input type="text" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Nome</label>
                  </div>

                  <div class="form-outline">
                    <input type="text" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Endereço</label>
                  </div>

                  <div class="form-outline">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email</label>
                  </div>

                  <div class="form-outline">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Senha</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="button">Cadastro</button>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
