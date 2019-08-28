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
                        <li class="active"><a href="">Appointments</a></li>
                    </ol>
                </div>
                <!-- /col-6 -->
                <div class="col-md-6">
                    <a href="{{route('appointments.create')}}" class="btn btn-primary pull-right">Add Appointment</a>
                </div>
            </div>
            <!-- /row -->


            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Appointments List</h4>
                    <div class="toolbar">

                    </div>
                    <!-- /toolbar -->
                    <div class="material-datatables">
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
                                <td>2019-08-12</td>
                                <td>10:00 AM</td>
                                <td>12:200 AM</td>
                                <td>EFSTH</td>
                                <td>SIRA SOWE</td>
                                <td>COMPLETED</td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td>2019-08-12</td>
                                <td>10:00 AM</td>
                                <td>12:200 AM</td>
                                <td>EFSTH</td>
                                <td>SIRA SOWE</td>
                                <td>COMPLETED</td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td>2019-08-12</td>
                                <td>10:00 AM</td>
                                <td>12:200 AM</td>
                                <td>EFSTH</td>
                                <td>SIRA SOWE</td>
                                <td>COMPLETED</td>
                                <td class="text-right"></td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- /table -->
                    </div>
                    <!-- /materials-datables -->
                </div>
                <!-- /card-content -->
            </div>
            <!-- /card -->
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

