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
                        <li class="active"><a href="">Donations</a></li>
                    </ol>
                </div>
                <!-- /col-6 -->
                <div class="col-md-6">
                    <a href="{{route('donations.create')}}" class="btn btn-primary pull-right">Add Donation</a>
                </div>
            </div>
            <!-- /row -->


            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Donations List</h4>
                    <div class="toolbar">

                    </div>
                    <!-- /toolbar -->
                    <div class="material-datatables">
                        <table class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                            <tr>
                                <th>Hospital</th>
                                <th>Donor</th>
                                <th>Receiver Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>EFSTH</td>
                                <td>SIRA SOWE</td>
                                <td>FATOU CEESAY</td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td>EFSTH</td>
                                <td>SIRA SOWE</td>
                                <td>FATOU CEESAY</td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td>EFSTH</td>
                                <td>SIRA SOWE</td>
                                <td>FATOU CEESAY</td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td>EFSTH</td>
                                <td>SIRA SOWE</td>
                                <td>FATOU CEESAY</td>
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

