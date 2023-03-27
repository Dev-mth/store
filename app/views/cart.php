<?php $this->layout('master'); ?>

<section class="h-100" style="background-color: #eee">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Carrinho de compras R$
                        <?= number_format($instances['cart']::getTotal(), 2, ',', '.'); ?>
                        </a>
                    </h3>

                </div>

                <?php if ($instances['cart']::getTotalProductsInCart() <= 0) : ?>
                    <h2>Nenhum produto no carrinho </h2>
                <?php endif; ?>
                <?php foreach ($instances['cart']::getCart() as $product) :  ?>
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="<?= $product->getImage(); ?>" class="img-fluid rounded-3" alt="">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2"><?= $product->getName(); ?></p>
                                    <p>
                                        <span class="text-muted">Subtotal: <?= $product->getQuantity() ?> X R$
                                            <?= number_format($product->getPrice(), 2, ',', '.'); ?>
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <form action="/cart/update" method="post" class="total">
                                        <input type="hidden" name="slug" value="<?= $product->getSlug(); ?>">
                                        <input id="form1" min="0" name="quantity" value="<?= $product->getQuantity(); ?>" type="number" class="form-control form-control-sm" />
                                        <button type="submit" class="btn btn-sm btn-outline-success">Mudar</button>
                                    </form>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 ">
                                    <h5 class="mb-0">
                                        R$
                                        <?= number_format($product->getQuantity() * $product->getPrice(), 2, ',', '.'); ?>
                                    </h5>
                                    <a link href="/cart/remove?slug=<?= $product->getSlug(); ?>" class="btn btn-outline-danger">
                                        <lord-icon class="lixeira" src="../images/gif/lixeira.json" trigger="hover"></lord-icon>
                                    </a>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php if ($instances['cart']::getTotalProductsInCart() > 0) : ?>
                    <div class="card mb-4">


                        <div class="card-body p-4 d-flex flex-row">
                            <div class="form-outline flex-fill">
                                <input type="text" id="coupon" class="form-control form-control-lg" value="cupom-teste" />
                                <span id="coupon-status"></span>
                            </div>
                            <button type="button" class="btn btn-outline-warning btn-lg ms-3" id="btn-apply-coupon">Aplicar</button>
                        </div>
                    </div>
                    <!------ endereço ---->
                    <div class="card p-radio card-body">
                        <label>
                            <p>Selecione o endereço de entrega</p>
                            <input type="radio" name="endereco" id=""> endereço 1
                        </label>

                        <label>
                            <input type="radio" name="endereco" id=""> endereço 2
                        </label>
                    </div>
                    <div class="card pg">
                        <div class="card-body">
                            <a type="button" href="/checkout" class="btn btn-block btn-warning  btn-lg" id="btn-checkout"> Ir para pagamento</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!----- Cupom de desconto -->
    <script type="text/javascript" src="..\assets\js\script.js"></script>

</section>