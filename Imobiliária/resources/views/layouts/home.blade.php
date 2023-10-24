<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
		<link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Imobiliária</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" id="navBar">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">
					<i class="bi bi-house" id="logo"></i>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mb-2 mb-lg-0 navBarLi">
						@auth
						@if (auth()->user()->permission == 4)
						<li class="nav-item">
							<a class="nav-link" href="/ceo">CEO</a>
						</li>
						@endif
						@if (auth()->user()->permission == 3 || auth()->user()->permission == 4)
						<li class="nav-item">
							<a class="nav-link" href="/lista/usuario">Usuários</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/lista/imovel">Imóveis</a>
						</li>
						@endif
						@if (auth()->user()->permission == 2 || auth()->user()->permission == 3 || auth()->user()->permission == 4)
						<li class="nav-item">
							<a class="nav-link" href="/lista/pendente">Pendentes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/lista/cliente">Clientes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/registrar/venda">Vender</a>
						</li>
						@endif
						@if (auth()->user()->permission == 1 || auth()->user()->permission == 3 || auth()->user()->permission == 4)
						<li class="nav-item">
							<a class="nav-link" href="/lista/venda">Financeiro</a>
						</li>
						@endif
						@endauth
						<li class="nav-item">
							<a class="nav-link" href="/catalogo/casa">Comprar</a>
						</li>
						@auth
						<li class="nav-item">
							<form method="POST" action="{{ route('logout') }}">
								@csrf
								<a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
							</form>
						</li>
						@endauth
					</ul>
				</div>
			</div>
		</nav>
		<div class="content">
			@yield('content')
			<div class="footer">
				<div id="footerSocialFlex">
					<div class="footerSocialMedia mb-4">
						<a href=""><i class="bi bi-facebook"></i></a>
						<a href=""><i class="bi bi-instagram"></i></a>
						<a href=""><i class="bi bi-whatsapp"></i></a>
					</div>
					<div class="footerPolicies">
						<a class="me-3" href="">Termos de uso</a>
						<a class="me-3" href="">Política de privacidade</a>
						<a class="me-3" href="">Política de cookies</a>
						<a class="me-3" href="">Portal de privacidade</a>
					</div>
				</div>
				<div class="footerLocation">
					<i class="bi bi-house"></i>
					<div>
						<span>Rua Tal, n° 999, Esteio - Rio Grande do Sul, RS - 99999-999</span>
					</div>
				</div>
			</div>
		</div>
</body>
<script src="{{asset('js/home.js')}}"></script>
</html>
