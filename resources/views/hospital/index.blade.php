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
                        <li class="active"><a href="">Hospitals</a></li>
                    </ol>
                </div>
                <!-- /col-6 -->
                <div class="col-md-6">
                    <a href="{{route('hospitals.create')}}" class="btn btn-primary pull-right">Add Hospital</a>
                </div>
            </div>
            <!-- /row -->


            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Hospital List</h4>
                    <div class="toolbar">

                    </div>
                    <!-- /toolbar -->
                    <div class="material-datatables">
                        <table id="categories" class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td><strong><a href="{{url('show_hospital')}}">EFSTH</a></strong></td>
                                    <td>BANJUL</td>
                                    <td>efsth@gmail.com</td>
                                    <td>efsth@bsis.com</td>
                                    <td class="text-right">
                                        <div id="button-dropdown" class="dropdown pull-right">
                                            <button type="button" class="btn  btn-xs xs-small btn-round btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="material-icons">build</i>
                                                <span class="caret"></span>
                                                <div class="ripple-container"></div>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li>
                                                    <a href="">
                                                        <i class="material-icons">edit</i> edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a  href="" class="delete-record">
                                                        <i class="material-icons">close</i> delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td><strong><a href="{{url('show_hospital')}}">KANIFING GENERAL HOSPITAL </a></strong></td>
                                    <td>KANIFING</td>
                                    <td>efsth@gmail.com</td>
                                    <td>efsth@bsis.com</td>
                                    <td class="text-right">
                                        <div id="button-dropdown" class="dropdown pull-right">
                                            <button type="button" class="btn  btn-xs xs-small btn-round btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="material-icons">build</i>
                                                <span class="caret"></span>
                                                <div class="ripple-container"></div>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li>
                                                    <a href="">
                                                        <i class="material-icons">edit</i> edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a  href="" class="delete-record">
                                                        <i class="material-icons">close</i> delete
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

