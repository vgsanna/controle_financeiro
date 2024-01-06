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

                <form method="POST" action="{{route('loginRoute')}}">
                  @csrf
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login</h5>
                  
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  
                  <div class="form-outline mb-4">
                    <input type="email" id="email" name = "email" class="form-control form-control-lg" value="{{ old('email') }}" />
                    <label class="form-label" for="email">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="senha" name = "senha" class="form-control form-control-lg " value="{{ old('senha') }}" />
                    <label class="form-label" for="senha">Senha</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" >Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Esqueceu a Senha?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Não possui conta? <a href="#!"
                      style="color: #393f81;">Registre-se aqui</a></p>
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
