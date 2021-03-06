<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-cogs"></i> Settings</li>
        </ol>
    </div>
</div>

<?php if (!empty($form['errors']['global'])): ?>
<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <?= $form['errors']['global'] ?>
</div>
<?php endif ?>
<?php if (!empty($form['errors']['success'])): ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?= $form['errors']['success'] ?>
    </div>
<?php endif ?>

<form class="form-horizontal" method="post" action="/admin/settings">
    <input type="hidden" name="csrf" value="<?= $csrf ?>">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-cogs fa-fw"></i> Site Settings</h3>
                </div>
                <div class="panel-body nopadding">
                    <table class="table table-condensed form-table">
                        <tbody>
                            <tr class="form-group<?= (!empty($form['errors']['sitename']) ? ' has-error has-feedback' : '') ?>">
                                <td class="text-right col-md-2"><label for="input-title" class="control-label">Site Name</label></td>
                                <td>
                                    <div class="input-group col-xs-10">
                                        <input type="text" class="form-control" id="input-sitename" name="sitename" value="<?= (!empty($helper['extractValue']('sitename')) ? htmlentities($helper['extractValue']('sitename')) : '') ?>" placeholder="title...">
                                    </div>
                                    <?php if (!empty($form['errors']['sitename'])): ?><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span><?php endif ?>
                                    <?php if (!empty($form['errors']['sitename'])): ?><span class="help-block"><?= $form['errors']['sitename'] ?></span><?php endif ?>
                                </td>
                            </tr>
                            <tr class="form-group<?= (!empty($form['errors']['autogenerate']) ? ' has-error has-feedback' : '') ?>">
                                <td class="text-right col-md-2"><label for="input-autogenerate" class="control-label">Auto-Generate Pages</label></td>
                                <td>
                                    <div class="input-group col-xs-10">
                                        <select class="form-control" id="input-autogenerate" name="autogenerate">
                                            <?php $current = $helper['extractValue']('autogenerate'); ?>
                                            <option value="1"<?= ($current  == '1' ? ' selected' : '') ?>>Yes</option>
                                            <option value="0"<?= ($current  == '0' ? ' selected' : '') ?>>No</option>
                                        </select>
                                        <?php if (!empty($form['errors']['autogenerate'])): ?><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span><?php endif ?>
                                        <?php if (!empty($form['errors']['autogenerate'])): ?>
                                            <span class="help-block"><?= $form['errors']['autogenerate'] ?></span>
                                        <?php else: ?>
                                            <?php if ($current  == '1'): ?>
                                            <span class="help-block">Visit any url to automatically generate your pages.</span>
                                            <?php else: ?>
                                            <span class="help-block text-muted">Pages are not generated, instead users will be shown a 404.</span>
                                            <?php endif ?>
                                        <?php endif ?>
                                    </div>
                                </td>
                            </tr>
                            <tr class="form-group<?= (!empty($form['errors']['error_template']) ? ' has-error has-feedback' : '') ?>">
                                <td class="text-right col-md-2"><label for="input-error_template" class="control-label">Error Page Template</label></td>
                                <td>
                                    <div class="input-group col-xs-10">
                                        <select class="form-control" id="input-error_template" name="error_template">
                                            <?php $current = $helper['extractValue']('error_template'); ?>
                                            <?php foreach ($templates as $row): ?>
                                            <option value="<?= $row->id ?>"<?= ($current  == $row->id ? ' selected' : '') ?>><?= $row->name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <?php if (!empty($form['errors']['error_template'])): ?><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span><?php endif ?>
                                        <?php if (!empty($form['errors']['error_template'])): ?>
                                            <span class="help-block"><?= $form['errors']['error_template'] ?></span>
                                        <?php endif ?>
                                    </div>
                                </td>
                            </tr>
                            <tr class="form-group<?= (!empty($form['errors']['side_nav_color']) ? ' has-error has-feedback' : '') ?>">
                                <td class="text-right col-md-2"><label for="input-side_nav_color" class="control-label">Side Nav Colour</label></td>
                                <td>
                                    <div class="input-group col-xs-10">
                                        <select class="form-control" id="input-side_nav_color" name="side_nav_color">
                                            <?php $current = $helper['extractValue']('side_nav_color'); ?>
                                            <option value="light"<?= ($current  == 'light' ? ' selected' : '') ?>>Light</option>
                                            <option value="dark"<?= ($current  == 'dark' ? ' selected' : '') ?>>Dark</option>
                                        </select>
                                        <?php if (!empty($form['errors']['side_nav_color'])): ?>
                                            <span class="help-block"><?= $form['errors']['side_nav_color'] ?></span>
                                        <?php endif ?>
                                    </div>
                                </td>
                            </tr>
                            <tr class="form-group<?= (!empty($form['errors']['active_color']) ? ' has-error has-feedback' : '') ?>">
                                <td class="text-right col-md-2"><label for="input-active_color" class="control-label">Side Nav Active Colour</label></td>
                                <td>
                                    <div class="input-group col-xs-10">
                                        <select class="form-control" id="input-active_color" name="active_color">
                                            <?php $current = $helper['extractValue']('active_color'); ?>
                                            <option value="primary"<?= ($current  == 'primary' ? ' selected' : '') ?>>Primary</option>
                                            <option value="info"<?= ($current  == 'info' ? ' selected' : '') ?>>Info</option>
                                            <option value="success"<?= ($current  == 'success' ? ' selected' : '') ?>>Success</option>
                                            <option value="warning"<?= ($current  == 'warning' ? ' selected' : '') ?>>Warning</option>
                                            <option value="danger"<?= ($current  == 'danger' ? ' selected' : '') ?>>Danger</option>
                                        </select>
                                        <?php if (!empty($form['errors']['active_color'])): ?>
                                            <span class="help-block"><?= $form['errors']['active_color'] ?></span>
                                        <?php endif ?>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="form-group">
                                <td class="text-right"></td>
                                <td>
                                    <div class="input-group col-xs-10">
                                        <button type="submit" class="btn btn-primary ajax_save" data-message="Settings saved." data-goto="/admin/settings">Save</button>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-user-secret fa-fw"></i> Developer</h3>
                </div>
                <div class="panel-body nopadding">
                    <table class="table table-condensed form-table">
                        <tbody>
                            <tr class="form-group<?= (!empty($form['errors']['username']) ? ' has-error has-feedback' : '') ?>">
                                <td class="text-right col-md-2"><label for="input-username" class="control-label">Username</label></td>
                                <td>
                                    <div class="input-group col-xs-10">
                                        <input type="text" class="form-control" id="input-username" name="username" value="<?= $f3->get('SESSION.developer.username') ?>" placeholder="enter username...">
                                    </div>
                                    <?php if (!empty($form['errors']['username'])): ?><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span><?php endif ?>
                                    <?php if (!empty($form['errors']['username'])): ?><span class="help-block"><?= $form['errors']['username'] ?></span><?php endif ?>
                                </td>
                            </tr>
                            <tr class="form-group<?= (!empty($form['errors']['password']) ? ' has-error has-feedback' : '') ?>">
                                <td class="text-right col-md-2"><label for="input-password" class="control-label">Password</label></td>
                                <td>
                                    <div class="input-group col-xs-10">
                                        <input type="password" class="form-control" id="input-password" name="password" value="" placeholder="enter password, leave blank for no change...">
                                    </div>
                                    <?php if (!empty($form['errors']['password'])): ?><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span><?php endif ?>
                                    <?php if (!empty($form['errors']['password'])): ?><span class="help-block"><?= $form['errors']['password'] ?></span><?php endif ?>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="form-group">
                                <td class="text-right"></td>
                                <td>
                                    <div class="input-group col-xs-10">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-code fa-fw"></i> Composer</h3>
                </div>
                <div class="panel-body nopadding">
                    <?php $current = file_get_contents('./composer.json'); ?>
                    <textarea class="form-control form-textarea" rows="10" id="input-composer" name="composer"><?= $current ?></textarea>
                    <div id="composer" style="position: relative;height: 380px;width: 100%"></div>
                    <?php if (!empty($form['errors']['composer'])): ?><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span><?php endif ?>
                    <?php if (!empty($form['errors']['composer'])): ?><span class="help-block"><?= $form['errors']['composer'] ?></span><?php endif ?>
                </div>
                <div class="panel-footer nopadding">
                    <h5 style="padding-left:7px">Composer Task Output</h5>
                    <?php if (!empty($form['values']['composer_result']->result)): ?>
                    <pre style="padding:7px 10px;font-size:90%"><?= $form['values']['composer_result']->result ?></pre>
                    <?php elseif (empty($form['values']['composer_result']->result) || empty($form['values']['composer_result']->completed)): ?>
                    <div style="padding:7px 10px">Composer update task will run shortly, <a href="/admin/settings" class="ajax-link">click here to reload</a>.</div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</form>

<?php $backups = array_diff(scandir('backups/'), array('..', '.')) ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-hdd-o fa-fw"></i> Database Backups</h3>
                <div class="panel-buttons text-right">
                    <div class="btn-group-xs">
                        <a href="/admin/settings/backups/new" class="btn btn-success"><i class="fa fa-plus"></i> New Backup</a>
                    </div>
                </div>
            </div>
            <div class="panel-body nopadding">
                <div class="table-responsive">
                    <table class="table table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Created</th>
                                <th>Size</th>
                                <th style="width:1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($backups as $row): ?>
                            <tr>
                                <td><?= $row ?></td>
                                <td><?= date_create('@'.filemtime('backups/'.$row))->format('F jS Y, g:ia') ?></td>
                                <td><?= \utilphp\util::size_format(filesize('backups/'.$row), 2); ?></td>
                                <td>
                                    <div class="btn-group" style="display:flex">
                                        <a title="Restore" href="/admin/settings/backups/restore?file=<?= base64_encode($row) ?>" class="btn btn-xs btn-primary"><i class="fa fa-reply"></i></a>
                                        <a title="Remove" href="/admin/settings/backups/remove?file=<?= base64_encode($row) ?>" class="btn btn-xs btn-danger remove-backup"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-cogs fa-fw"></i> Operations</h3>
            </div>
            <div class="panel-body nopadding">
                <div class="table-responsive">
                    <table class="table table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Description</th>
                                <th style="width:1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Reset Project</td>
                                <td>Removes all pages, menu, modules, objects, snippets, tasks (except: System Information and Composer Update), templates (except: Detault).</td>
                                <td>
                                    <div class="btn-group" style="display:flex">
                                        <a href="/admin/settings/operations/reset" class="btn btn-xs btn-danger">Go</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php ob_start() ?>
<script>
$(document).ready(function() {
    load.script('/js/module/settings.js?developer', function(){
        settings.index();
    });
 });
</script>
<?php $f3->set('javascript', $f3->get('javascript').ob_get_clean()) ?>
