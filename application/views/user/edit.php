<div class="row">
    <div class="col s12">
        <div id="html-validations" class="card card-tabs">
            <div class="card-content">
                <div class="card-title">
                    <div class="row">
                        <div class="col s12 m6 l10">
                            <h4 class="card-title">Form Edit Profil </h4>
                        </div>
                        <div class="col s12 m6 l2">
                        </div>
                    </div>
                </div>
                <div id="html-view-validations formValidate0">
                    <?= form_open_multipart('user/edit'); ?>
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="email">Email</label>
                            <input class="validate" required aria-required="true" id="email" name="email" type="text" value="<?= $user['email']; ?>" readonly>
                        </div>

                        <div class="input-field col s12">
                            <label for="name">Nama Lengkap</label>
                            <input class="validate" required aria-required="true" type="text" id="name" name="name" value="<?= $user['name']; ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="input-field col s12">
                            <div class="row">
                                <div class="col s12 m2">
                                    <img class="responsive-img circle z-depth-5" width="90" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                                </div>
                                <div class="col s12 m10">
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file" id="image" name="image" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light right" type="submit" name="submit">Edit
                                <i class="material-icons right">send</i>
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