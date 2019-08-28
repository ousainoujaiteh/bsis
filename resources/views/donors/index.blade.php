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
                        <li class="active"><a href="">Donors</a></li>
                    </ol>
                </div>
                <!-- /col-6 -->
                <div class="col-md-6">
                    <a href="{{route('donors.create')}}" class="btn btn-primary pull-right">Add Donor</a>
                </div>
            </div>
            <!-- /row -->


            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Donors List</h4>
                    <div class="toolbar">

                    </div>
                    <!-- /toolbar -->
                    <div class="material-datatables">
                        <table class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Blood Group</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Nationality</th>
                                <th>Hospital</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong><a href="{{url('show_donor')}}">SIRA SOWE</a></strong></td>
                                <td>35477888</td>
                                <td>KOLOLI</td>
                                <td>O</td>
                                <td>23</td>
                                <td>FEMALE</td>
                                <td>GAMBIAN</td>
                                <td>EFSTH</td>
                                <td class="text-right">
                                    <div id="button-dropdown" class="dropdown pull-right">
                                        <button type="button" class="btn  btn-xs xs-small btn-round btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="material-icons">build</i>
                                            <span class="caret"></span>
                                            <div class="ripple-container"></div>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="material-icons">edit</i> Make Appointment
                                                </a>
                                            </li>
                                            <li>
                                                <a  href="#" class="delete-record">
                                                    <i class="material-icons">close</i> Make Blood Test
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td><strong><a href="{{url('show_donor')}}">SIRA SOWE</a></strong></td>
                                <td>35477888</td>
                                <td>KOLOLI</td>
                                <td>O</td>
                                <td>23</td>
                                <td>FEMALE</td>
                                <td>GAMBIAN</td>
                                <td>EFSTH</td>
                                <td class="text-right">
                                    <div id="button-dropdown" class="dropdown pull-right">
                                        <button type="button" class="btn  btn-xs xs-small btn-round btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="material-icons">build</i>
                                            <span class="caret"></span>
                                            <div class="ripple-container"></div>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="material-icons">edit</i> Make Appointment
                                                </a>
                                            </li>
                                            <li>
                                                <a  href="#" class="delete-record">
                                                    <i class="material-icons">close</i> Make Blood Test
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td><strong><a href="{{url('show_donor')}}">SIRA SOWE</a></strong></td>
                                <td>35477888</td>
                                <td>KOLOLI</td>
                                <td>O</td>
                                <td>23</td>
                                <td>FEMALE</td>
                                <td>GAMBIAN</td>
                                <td>EFSTH</td>
                                <td class="text-right">
                                    <div id="button-dropdown" class="dropdown pull-right">
                                        <button type="button" class="btn  btn-xs xs-small btn-round btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="material-icons">build</i>
                                            <span class="caret"></span>
                                            <div class="ripple-container"></div>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="material-icons">edit</i> Make Appointment
                                                </a>
                                            </li>
                                            <li>
                                                <a  href="#" class="delete-record">
                                                    <i class="material-icons">close</i> Make Blood Test
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

