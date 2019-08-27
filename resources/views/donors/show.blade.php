@extends('layouts.master')
@section('content')
    <div class="block-header">
        @if(session('status'))
            <br>
            <?php $type = 'info'; ?>
            @if(session('status_type')) <?php $type = session('status_type'); ?> @endif
            <div class="alert alert-{{ $type }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {!! session('status') !!}
            </div>
        @endif
    </div>
    <!-- /block-header -->
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 pull-left">
                    <ol class="breadcrumb" style="background-color: transparent">
                        <li class="active"><a href="{{url('donors')}}">Donors</a></li>
                    </ol>
                </div>
                <!-- /col-md-5 -->
                <div class="col-md-6">
                    <a href="{!! URL::previous() !!}" style="font-size: 10px" class="btn btn-round btn-danger btn-fill btn-just-icon pull-right">
                        <i class="material-icons vicategorysible-on-sidebar-regular f-15">keyboard_arrow_left</i>
                        Back
                    </a>
                </div>
                <!-- /col-md-5 -->
            </div>
            <!-- /row -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-7">
                            <h4 class="card-title"> Hospitals -
                                <small>Details</small>
                            </h4>
                        </div>
                        <!-- /col-6 -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /card-header -->
                <div class="card-content">
                    <ul class="nav nav-pills nav-pills-rose">
                        <li class="active">
                            <a href="#pill1" data-toggle="tab">Donor</a>
                        </li>
                        <li class="">
                            <a href="#donation" data-toggle="tab">Donations</a>
                        </li>
                        <li class="">
                            <a href="#appointment" data-toggle="tab">Appointments</a>
                        </li>
                        <li class="">
                            <a href="#blood-test" data-toggle="tab">Blood Tests</a>
                        </li>
                        <li class="">
                            <a href="#blood-test-result" data-toggle="tab">Blood Test Results</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="pill1">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th>Full Name</th>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- /table -->
                            </div>
                            <!-- /table-responsove -->
                        </div>

                        <div class="tab-pane" id="donation">
                            <div class="table-responsive">
                                <h2 class="card-title">
                                    <a href="{{route('donations.create')}}" class="btn btn-success">Add Donation</a>
                                </h2>
                                <table class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Receiver</th>
                                        <th>Date</th>
                                        <th>Hospital</th>
                                        <th>Donor</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right"></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- /table -->
                            </div>
                            <!-- /table-responsove -->
                        </div>

                        <div class="tab-pane" id="appointment">
                            <div class="table-responsive">
                                <h2 class="card-title">
                                    <a href="{{route('appointments.create')}}" class="btn btn-success">Add Appointment</a>
                                </h2>
                                <table class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Start Date</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Hospital</th>
                                        <th>Donor</th>
                                        <th>Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right"></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- /table -->
                            </div>
                            <!-- /table-responsove -->
                        </div>

                        <div class="tab-pane" id="blood-test">
                            <div class="table-responsive">
                                <h2 class="card-title">
                                    <a href="{{route('blood_tests.create')}}" class="btn btn-success">Add Blood Test</a>
                                </h2>
                                <table class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Test Name</th>
                                        <th>Donor</th>
                                        <th>Hospital</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right">
                                            <div id="button-dropdown" class="dropdown pull-right">
                                                <button type="button" class="btn  btn-xs xs-small btn-round btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-icons">build</i>
                                                    <span class="caret"></span>
                                                    <div class="ripple-container"></div>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <li>
                                                        <a href="{{route('blood_test_results.create')}}">
                                                            <i class="material-icons">edit</i>Add Results
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- /table -->
                            </div>
                            <!-- /table-responsove -->
                        </div>


                        <div class="tab-pane" id="blood-test-result">
                            <div class="table-responsive">
                                <table class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Blood Test</th>
                                        <th>Donor</th>
                                        <th>Result Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- /table -->
                            </div>
                            <!-- /table-responsove -->
                        </div>



                    </div>
                    <!-- /tab-content -->
                </div>
                <!-- /card-content -->
            </div>
            <!-- .card -->
        </div>
        <!-- /col-12 -->
    </div>
    <!-- /row -->
@stop

@section('scripts')
    <script src="/assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }

            });

        });
    </script>
