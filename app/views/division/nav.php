<div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="/logout">
    <span class="titulo"><img  src= "../images/gif/lojagif.gif"> etrix</span> </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/cart">Carrinho</a></li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Novidades</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Em breve, aguardem!</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <?php if ($instances['auth']::auth()) : ?>
                    <a class="nav-link"><span class="bvnome">Bem vindo, <?= $instances['auth']::auth()->fullName; ?></span> </a>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">Sair</a>
                    </li>
                <?php else :  ?>
                    <a class="nav-link" href="/login">Login</a>
                <?php endif ?>
            </li>

        </ul>
        <form class="d-flex">
            <a  class="btn btn-outline-dark" type="submit" href="/cart">
                <i class="bi-cart-fill me-1">Carrinho</i>
                
                <span class="badge bg-dark text-white ms-1 rounded-pill">
                    <?= $instances['cart']::getTotalProductsInCart(); ?>
                </span>
            </a>
        </form>
    </div>
</div>
