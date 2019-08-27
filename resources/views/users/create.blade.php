@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4 class="card-title">Create New User</h4>
            <div class="card">
                <div class="card-content">
                    <form method="get" action="/" class="form-horizontal">
                        <div class="card-header card-header-text">
                            <h4 class="card-title">Enter User Details</h4>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">First Name</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" value>
                                        <span class="help-block">A User First Name.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Middle Name</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" value>
                                        <span class="help-block">A User Middle Name.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Last Name</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" value>
                                        <span class="help-block">A User Last Name.</span>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 label-on-left">Phone Number</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" value>
                                        <span class="help-block">A User Phone Number.</span>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 label-on-left">Email</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" value>
                                        <span class="help-block">A User Email.</span>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 label-on-left">Address</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" value>
                                        <span class="help-block">A User Address.</span>
                                    </div>
                                </div>
                            </div>

                           

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Gender</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <select name="" class="form-control">
                                            <option>MALE</option>
                                            <option>FEMALE</option>
                                        </select>
                                        <span class="help-block">A User Gender.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Nationality</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control">
                                        <span class="help-block">A User Nationality.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Email</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control">
                                        <span class="help-block">A User Email.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Password</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" name="password" class="form-control">
                                        <span class="help-block">A User Password.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Password Confirmation</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" name="password_confirmation" class="form-control">
                                        <span class="help-block">A User Password Confirmation.</span>
                                    </div>
                                </div>
                            </div>


        
                        </div>

                        <button style="margin-right: 20px;" type="submit" class="btn btn-info pull-right">Save</button>
                        <a href="{{route('users.index')}}" style="margin-left: 20px;" type="button" class="btn btn-danger pull-left">Close
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

    <script src="/assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>


@stop


