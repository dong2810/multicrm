
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel-content">

    <div class="table-responsive  col-lg-12 col-md-12 col-sm-12">
        <table id="quote-rows" class="table table-condensed">
            <thead>

            <th>
                <?php echo app('translator')->getFromJson('quotes::quotes.form.product_service'); ?>
            </th>
            <th>
                <?php echo app('translator')->getFromJson('quotes::quotes.form.unit_cost'); ?>
            </th>
            <th>
                <?php echo app('translator')->getFromJson('quotes::quotes.form.quantity'); ?>
            </th>

            <th>
                <?php echo app('translator')->getFromJson('quotes::quotes.form.line_total'); ?>
            </th>
            <th>

            </th>
            </thead>
            <tbody>


            <?php $__currentLoopData = $options['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="quote_row">

                    <td>
                        <?php echo form_row($row->id); ?>

                        <?php echo form_row($row->product_id); ?>

                        <div class="input-group">
                        <span class="input-group-addon">
                           <i class="search-product material-icons">search</i>
                        </span>
                            <?php echo form_row($row->product_name); ?>


                        </div>

                    </td>
                    <td>
                        <?php echo form_row($row->price); ?>

                    </td>
                    <td>
                        <?php echo form_row($row->quantity); ?>

                    </td>
                    <td>
                        <?php echo form_row($row->lineTotal); ?>

                    </td>
                    <td>
                        <i class="material-icons quote-remove-row pointer">clear</i>
                    </td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td colspan="2" rowspan="7">

                </td>
                <td>
                    <label class="show-control-label text-right">
                        <?php echo app('translator')->getFromJson('quotes::quotes.form.subtotal'); ?>
                    </label>
                </td>
                <td class="summary_subtotal">

                </td>
            </tr>
            <tr>
                <td>
                    <label class="show-control-label text-right">
                        <?php echo app('translator')->getFromJson('quotes::quotes.form.discount'); ?>
                    </label>
                </td>
                <td class="summary_discount">

                </td>
            </tr>
            <tr>
                <td>
                    <label class="show-control-label text-right">
                        <?php echo app('translator')->getFromJson('quotes::quotes.form.delivery_cost'); ?>
                    </label>
                </td>
                <td class="summary_delivery_cost">

                </td>
            </tr>
            <tr>
                <td>
                    <label class="show-control-label text-right">
                        <?php echo app('translator')->getFromJson('quotes::quotes.form.tax'); ?>
                    </label>
                </td>
                <td class="summary_tax">

                </td>
            </tr>
            <tr>
                <td>
                    <label class="show-control-label text-right">
                        <?php echo app('translator')->getFromJson('quotes::quotes.form.gross_value'); ?>
                    </label>
                </td>
                <td class="summary_gross">

                </td>
            </tr>

            </tbody>

        </table>
    </div>


</div>
