@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4 class="card-title">Create New Blood Test</h4>
            <div class="card">
                <div class="card-content">
                    <form method="POST" action="{{route('blood_tests.store')}}" class="form-horizontal">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <p>Test Name</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('test_name') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <input type="text" name="test_name" class="form-control date" value="{{ old('test_name') }}" required>
                                    <span class="help-block">An Blood Test Name.</span>
                                    @if ($errors->has('test_name'))
                                        <strong class="text-danger">{{ $errors->first('test_name') }}</strong>
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

