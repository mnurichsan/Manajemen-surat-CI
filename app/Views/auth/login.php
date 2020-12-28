<?= $this->extend('auth/template/index'); ?>

  <?= $this->section('content'); ?>
  
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-5 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">

              <h2 class="text-center"><?= lang('Auth.loginTitle') ?></h2>

              <?= view('Myth\Auth\Views\_message_block') ?>

              <form action="<?= route_to('login') ?>" method="post" class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
										<div class="invalid-feedback">
											<?= session('errors.login') ?>
										</div>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
									<div class="invalid-feedback">
										<?= session('errors.password') ?>
									</div>
                </div>

                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"><?= lang('Auth.loginAction') ?></button>
                </div>

                <div class="text-center mt-4 font-weight-light">
                  <?php if ($config->allowRegistration) : ?>
                    <a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a>
                  <?php endif; ?>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <?= $this->endSection(); ?>
  