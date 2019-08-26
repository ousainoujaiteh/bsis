@extends('layouts.public')
@section('content')

    <div class="row" style="margin-top: 100px;">



        <div class="col-md-12">
            <div class="card">
                <form method="get" action="/" class="form-horizontal">
                    <div class="card-header card-header-text">
                        <h4 class="card-title">Enter Details</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">First Name</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" value>
                                    <span class="help-block">A Donor First Name.</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 label-on-left">Middle Name</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" value>
                                    <span class="help-block">A Donor Middle Name.</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 label-on-left">Last Name</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" value>
                                    <span class="help-block">A Donor Last Name.</span>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 label-on-left">Phone Number</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" value>
                                    <span class="help-block">A Donor Phone Number.</span>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 label-on-left">Email</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" value>
                                    <span class="help-block">A Donor Email.</span>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 label-on-left">Address</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" value>
                                    <span class="help-block">A Donor Address.</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 label-on-left">Date of Birth</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control date">
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
                                    <span class="help-block">A Donor Gender.</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 label-on-left">Nationality</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control">
                                    <span class="help-block">A Donor Nationality.</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 label-on-left">Blood Group</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select name="" class="form-control">
                                        <option>O</option>
                                        <option>AB</option>
                                    </select>
                                    <span class="help-block">A Donor Blood Group.</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 label-on-left">Proposed Hospital</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select name="" class="form-control">
                                        <option>EFSTH</option>
                                        <option>KANIFING HOSPITAL</option>
                                        <option>BANSANG HOSPITAL</option>
                                        <option>BWIAM HOSPITAL</option>
                                    </select>
                                    <span class="help-block">A Donor Blood Group.</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button style="margin-right: 20px;" type="submit" class="btn btn-info pull-right">Submit</button>
                    <a href="" style="margin-left: 20px;" type="button" class="btn btn-danger pull-left">Close
                    </a>


                </form>
            </div>
        </div>



    </div>

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

@stop