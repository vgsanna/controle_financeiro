<header class="d-flex flex-wrap justify-content-center py-3" style="background-color: #DCDCDC;">
      <a href="/index" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4"><i class="bi bi-cash-coin" style="color: green;"></i> Controle Financeiro</span>
      </a>

      <ul class="nav nav-pills">
        
        <li class="nav-item"><a href="/cadastro" class="nav-link">Olá {{ $dados['nomeUsuario'] }}</a></li>
        <li class="nav-item"><a href="/login" class="nav-link active" aria-current="page">Sair</a></li>
        <li class="nav-item"><a href="/cadastro" class="nav-link"></a></li>
      </ul>
</header>