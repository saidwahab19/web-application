<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Create Group &mdash; SEMS</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
          <div class="section-header">
          <div class="section-header-back">
                <a href="<?=site_url('groups')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create Group</h1>
          </div>
          <div class="section-body">
          <div class="card">
            </div>
            <div class="card-header">
                <h6>Add Group Contact</h6>
                </div>
                    <div class="card-body col-md-6">
                        <form action="<?=site_url('groups')?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                            <div class="form-group">
                                <label>Nama Grup</label>
                                <input type="text" name="name_group" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Info</label>
                                <textarea name="info_group" class="form-control" required></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        </section>
<?= $this->endSection() ?>
