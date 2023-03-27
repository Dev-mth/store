<?php $this->layout('master'); ?>

<link href="assets/css/login.css" rel="stylesheet" />

<section class="py-5 bg-math">

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white">
                    <div class="card-body p-5 text-center">


                        <div class="mb-md-5 mt-md-4 pb-5">
                            <form method="post" action="/login">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Por favor, digite seu login e senha!</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" value="dev-teste@hotmail.com" />
                                    <label class="form-label" for="typeEmailX" require >Email</label>
                                    </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" value="123456" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                            </form>
                        </div>

                        <!-- VALIDAÇÃO DE SENHA E EMAIL -->
                        <span class="valid">
                            <?php if(isset($_SESSION['msg']))
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);?>
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>