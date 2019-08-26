@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4 class="card-title">Create New Appointment</h4>
            <div class="card">
                <div class="card-content">
                    <form method="POST" action="{{route('appointments.store')}}" class="form-horizontal">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <p>Start Date</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('start_date') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <input type="text" name="start_date" class="form-control date" value="{{ old('start_date') }}" required>
                                    <span class="help-block">An Appointment Start Date.</span>
                                    @if ($errors->has('start_date'))
                                        <strong class="text-danger">{{ $errors->first('start_date') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-6 --}}

                            <div class="col-md-4">
                                <p>Start Time</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('start_time') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <input type="text" name="start_time" class="form-control start_time" value="{{ old('start_time') }}" required>
                                    <span class="help-block">An Appointment Start Time.</span>
                                    @if ($errors->has('start_time'))
                                        <strong class="text-danger">{{ $errors->first('start_time') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-6 --}}

                            <div class="col-md-4">
                                <p>End Time</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('end_time') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <input type="text" name="end_time" class="form-control end_time" value="{{ old('end_time') }}" required>
                                    <span class="help-block">An Appointment End Time.</span>
                                    @if ($errors->has('end_time'))
                                        <strong class="text-danger">{{ $errors->first('end_time') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-6 --}}
                        </div>
                        <!-- /row -->

                        <div class="row">

                            <div class="col-md-6">
                                <p>Hospital</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('end_time') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <select name="hopsital" class="form-control">
                                        <option>EFSTH</option>
                                        <option>KANIFING HOSPITAL</option>
                                        <option>BANSANG HOSPITAL</option>
                                        <option>BWIAM HOSPITAL</option>
                                    </select>
                                    <span class="help-block">An Appointment Hospital.</span>
                                    @if ($errors->has('hospital'))
                                        <strong class="text-danger">{{ $errors->first('hospital') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-6 --}}
                            <div class="col-md-6">
                                <p>Donor</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('donor') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <select name="donor" class="form-control">
                                        <option>SIRA SOWE</option>
                                        <option>SIRA SOWE</option>
                                        <option>SIRA SOWE</option>
                                    </select>
                                    <span class="help-block">An Appointment Donor.</span>
                                    @if ($errors->has('donor'))
                                        <strong class="text-danger">{{ $errors->first('donor') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-6 --}}

                        </div>

                        <button type="submit" class="btn btn-info pull-right">Save</button>
                        <a href="{{route('appointments.index')}}" type="button" class="btn btn-danger pull-left">Close
                        </a>
                    </form>
                    <!-- /form -->
                </div>
                <!-- /card-content -->
            </div>
            <!-- /card -->
        </div>
        <!-- /col-md-12 -->
    </div>
    <!--  /row -->
@stop

@section('scripts')
    <script src="/assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.date').datetimepicker({
                format: 'YYYY-MM-DD',
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove',
                    inline: true
                }
            });
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.start_time').datetimepicker({
                format: 'H:mm',    // use this format if you want the 24hours timepicker
                //format: 'h:mm A',    //use this format if you want the 12hours timpiecker with AM/PM toggle
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove',
                    inline: true
                }
            });
        });
        $(document).ready(function () {
            $('.end_time').datetimepicker({
                format: 'H:mm',    // use this format if you want the 24hours timepicker
                //  format: 'h:mm A',    //use this format if you want the 12hours timpiecker with AM/PM toggle
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove',
                    inline: true
                }
            });
        });
    </script>

