@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="icon icon-warning">
                            <i class="zmdi zmdi-view-dashboard"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="category"><strong>Donors</strong></p>
                        <h3 class="card-title">10</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-info">info</i>
                            Latest Details
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="icon icon-rose">
                            <i class="zmdi zmdi-account"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="category"><strong>Hospitals</strong></p>
                        <h3 class="card-title">5</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i> Latest Details
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="icon icon-success">
                            <i class="zmdi zmdi-view-list"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="category"><strong>Appointments</strong></p>
                        <h3 class="card-title">50</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i>
                            Latest Details
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="icon icon-info">
                            <i class="zmdi zmdi-view-column"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="category"><strong>Donations</strong></p>
                        <h3 class="card-title">50</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i> Latest Details
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /row widgets--}}
        
    </div>
    {{-- .row--}}


    <script src="/assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#events').DataTable({
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

@stop
