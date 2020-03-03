<?php if(isset($routes['import'])): ?>
    <div id="modal_records_import" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title"><?php echo app('translator')->getFromJson($language_file.'.module'); ?> - <?php echo app('translator')->getFromJson('core::core.crud.import'); ?></h4>

                </div>
                <div class="modal-body" style="min-height: 700px;">

                    <div class="alert alert-info">
                        <p>
                            <?php echo app('translator')->getFromJson('core::core.file_need_to_have_header'); ?>
                        </p>
                    </div>
                    <form  action="<?php echo e(route($routes['import'])); ?>" method="POST" enctype="multipart/form-data" >
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('csv_file') ? ' has-error' : ''); ?>">
                            <label for="csv_file" class="col-md-4 control-label">CSV file to import</label>

                            <div class="col-md-6">
                                <input  type="file" class="form-control file_input" name="csv_file" required>

                                <?php if($errors->has('csv_file')): ?>
                                    <span class="help-block">
                                                                <strong><?php echo e($errors->first('csv_file')); ?></strong>
                                                            </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form group"  >

                            <label for="csv_file" class="col-md-4 control-label"><?php echo app('translator')->getFromJson('core::core.column_delimiter'); ?></label>

                            <div class="col-md-6">
                                <select class="select2" name="delimiter">
                                    <option value=";">; - <?php echo app('translator')->getFromJson('core::core.semicolon'); ?></option>
                                    <option value=",">, - <?php echo app('translator')->getFromJson('core::core.comma'); ?></option>
                                </select>
                            </div>

                        </div>



                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo app('translator')->getFromJson('core::core.parse_csv'); ?>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
