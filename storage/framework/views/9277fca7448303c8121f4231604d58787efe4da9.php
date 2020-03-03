<?php $__env->startSection('content'); ?>


    <div class="row">

        <div id="calendar-container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>

                        <div class="header-buttons">
                            <div class="btn-group btn-crud pull-right">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->getFromJson('core::core.settings'); ?> <span class="caret"></span>
                                </button>

                                <ul class="dropdown-menu">

                                    <li>
                                        <a id="create-new-calendar" href="#" data-create-route="<?php echo e(route('calendar.calendars.create',['mode'=>'modal','afterAction' => 'refreshCalendarList'])); ?>"><?php echo app('translator')->getFromJson('calendar::calendar.create_calendar'); ?></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><?php echo app('translator')->getFromJson('core::core.settings'); ?></li>
                                    <li>
                                        <a href="<?php echo e(route('calendar.calendars.edit',$userCalendar->id)); ?>"><?php echo app('translator')->getFromJson('calendar::calendar.calendar_settings'); ?></a>
                                    </li>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('calendar.settings')): ?>
                                        <li>
                                            <a href="<?php echo e(route('calendar.status.index')); ?>"><?php echo app('translator')->getFromJson('calendar::calendar.event_status'); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('calendar.priority.index')); ?>"><?php echo app('translator')->getFromJson('calendar::calendar.event_priority'); ?></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="btn-group btn-crud pull-right width-200">
                                <?php echo e(Form::select('calendar', $accessibleCalendars,$userCalendar->id,['class' => 'select2','id'=>'switch-calendar'])); ?>

                            </div>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('event.create')): ?>
                                <a data-create-route="<?php echo e(route('calendar.events.create',['mode'=>'modal','calendar_id' => $userCalendar->id,'afterAction' => 'refreshCalendar'])); ?>" class="btn btn-primary btn-create btn-crud" id="create-calendar-event"
                                   href="#"><?php echo app('translator')->getFromJson('calendar::calendar.create_event'); ?></a>

                            <?php endif; ?>

                            <a  class="btn btn-default btn-create btn-crud btn-circle font-19" id="calendar-full-screen" href="#">
                                <i class="material-icons font-14">zoom_out_map</i>
                            </a>

                            </div>

                        <div class="header-text">
                            <?php echo e($userCalendar->name); ?>


                            <small><?php echo app('translator')->getFromJson('calendar::calendar.module_description'); ?></small>

                        </div>
                    </h2>


                </div>

                <div class="body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <?php echo $fullCalendar->generate(); ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php $__env->startPush('css-up'); ?>

   <link href="<?php echo e(asset('css/fullcalendar.print.css')); ?>" rel="stylesheet" media="print">
   <link href="<?php echo e(asset('css/fullcalendar.css')); ?>" rel="stylesheet">

<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>

                <div class="modal fade" id="calendar-event-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">

                            <div class="modal-body modal-card">

                            </div>
                        </div>
                    </div>
                </div>

                <script src="<?php echo e(asset('js/fullcalendar.js')); ?>"></script>
                <script src="<?php echo e(asset('js/locale-all.js')); ?>"></script>

                <script>
                    window.EVENT_CREATE_URL = "<?php echo route('calendar.events.create',['mode'=>'modal','calendar_id' => $userCalendar->id,'afterAction' => 'refreshCalendar']); ?>";
                </script>

                <?php if(config('fullcalendar.enable_gcal')): ?>
                    <script src="<?php echo e(asset('js/gcal.js')); ?>"></script>
                <?php endif; ?>

                <script src="<?php echo Module::asset('calendar:js/BAP_Calendar.js'); ?>"></script>


    <?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>