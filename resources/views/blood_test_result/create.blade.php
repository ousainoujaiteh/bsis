@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4 class="card-title">Create New Blood Test</h4>
            <div class="card">
                <div class="card-content">
                    <form method="POST" action="{{route('blood_test_results.store')}}" class="form-horizontal">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <p>Blood Test</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('blood_test') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <select name="blood_test" class="form-control">
                                        <option>TTIs</option>
                                        <option>TTIs</option>
                                        <option>TTIs</option>
                                        <option>TTIs</option>
                                    </select>
                                    <span class="help-block">An Blood Test Name.</span>
                                    @if ($errors->has('blood_test'))
                                        <strong class="text-danger">{{ $errors->first('blood_test') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-6 --}}
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p>Result Label</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('result_label') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" >
                                    <span class="help-block">An Blood Test Result Label.</span>
                                    @if ($errors->has('result_label'))
                                        <strong class="text-danger">{{ $errors->first('result_label') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-6 --}}


                        </div>
                        <!-- /row -->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <p>Result Details</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('result_detail') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <textarea name="result_detail" class="form-control" cols="30" rows="10"></textarea>
                                    <span class="help-block">An Blood Test Result Details.</span>
                                    @if ($errors->has('result_detail'))
                                        <strong class="text-danger">{{ $errors->first('result_detail') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-6 --}}


                        </div>
                        <!-- /row -->

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

