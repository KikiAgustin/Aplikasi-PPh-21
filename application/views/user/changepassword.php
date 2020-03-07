<div class="row">
    <div class="col s12">
        <div id="html-validations" class="card card-tabs">
            <div class="card-content">
                <div class="card-title">
                    <div class="row">
                        <div class="col s12 m6 l10">
                            <h4 class="card-title">Ganti Password </h4>
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                        <div class="col s12 m6 l2">
                        </div>
                    </div>
                </div>
                <div id="html-view-validations formValidate0">
                    <form action="<?= base_url('user/changepassword'); ?>" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <label for="current_password">Password Sekarang</label>
                                <input class="validate" required aria-required="true" id="current_password" name="current_password" type="password">
                                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="input-field col s12">
                                <label for="new_password1">Password baru</label>
                                <input class="validate" required aria-required="true" type="password" id="new_password1" name="new_password1">
                                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="input-field col s12">
                                <label for="new_password2">Ulangi Password</label>
                                <input class="validate" required aria-required="true" type="password" id="new_password2" name="new_password2">
                                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <div class="input-field col s12">
                                <button class="btn waves-effect gradient-45deg-green-teal" type="submit" name="submit">Ganti Password

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>