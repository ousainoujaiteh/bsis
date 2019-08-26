@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4 class="card-title">Create New Hospital</h4>
            <div class="card">
                <div class="card-content">
                    <form method="POST" action="{{route('hospitals.store')}}" class="form-horizontal">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <p>Hospital Name</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                    <span class="help-block">A Hospital Name.</span>
                                    @if ($errors->has('name'))
                                        <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <p>Hospital Location</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('location') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <input type="text" name="location" class="form-control" value="{{ old('location') }}" required>
                                    <span class="help-block">A Hospital Name.</span>
                                    @if ($errors->has('location'))
                                        <strong class="text-danger">{{ $errors->first('location') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-6 --}}


                            <div class="col-md-4">
                                <p>Hospital Email</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                    <span class="help-block">A Hospital Email.</span>
                                    @if ($errors->has('email'))
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-6 --}}

                        </div>
                        <!-- /row -->

                        <div class="row">



                            <div class="col-md-4">
                                <p>Username</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                    <span class="help-block">A Hospital username.</span>
                                    @if ($errors->has('email'))
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-4 --}}
                            <div class="col-md-4">
                                <p>Password</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <input type="password" name="password" class="form-control" value="{{ old('password') }}" required>
                                    <span class="help-block">A Hospital password.</span>
                                    @if ($errors->has('password'))
                                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-4 --}}
                            <div class="col-md-4">
                                <p>Confirm Password</p>
                                <div class="form-group label-floating is-empty{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label class="control-label"></label>
                                    <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}" required>
                                    <span class="help-block">A Hospital password.</span>
                                    @if ($errors->has('password_confirmation'))
                                        <strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong>
                                    @endif
                                </div>
                            </div>
                            {{-- /col-md-4 --}}

                        </div>

                        <button type="submit" class="btn btn-info pull-right">Save</button>
                        <a href="{{route('hospitals.index')}}" type="button" class="btn btn-danger pull-left">Close
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
@stop

