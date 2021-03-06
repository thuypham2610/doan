<?php
    $dash = 'Statistic';
?>
@extends('admin::layouts.admin')

@section('content')
<div class="row stats-all">
    <div class="col-md-6">
        <!-- ORDER CHART -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Order Chart
                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    <?php
                        $order = DB::select('SELECT DISTINCT year(created_at) as orderyear FROM doan.order ORDER BY orderyear desc');
                        $order = json_decode(json_encode($order),1);
                    ?>
                    <select class="form-control" id="select-year-order">
                        @foreach ($order as $order)
                            <option>{{ $order['orderyear'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div class="chart cart-order">
                    <canvas id="orderChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- TRADE CHART -->
        <div class="card card-danger card-trademark">
            <div class="card-header">
                <h3 class="card-title">Trademark Chart</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    <?php
                        $trade = DB::select('SELECT DISTINCT year(created_at) as Tradeyear FROM doan.Trademark ORDER BY Tradeyear desc');
                        $trade = json_decode(json_encode($trade),1);
                    ?>
                    <select class="form-control" id="select-year-trademark">
                        @foreach ($trade as $trade)
                            <option value="{{ $trade['Tradeyear'] }}">{{ $trade['Tradeyear'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-body cart-trade">
                <canvas id="tradeChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col (LEFT) -->
    <div class="col-md-6">
        <!-- USER CHART -->
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">User Chart</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    <?php
                        $users = DB::select('SELECT DISTINCT year(created_at) as usersyear FROM doan.users ORDER BY usersyear desc');
                        $users = json_decode(json_encode($users),1);
                    ?>
                    <select class="form-control" id="select-year-user">
                        @foreach ($users as $users)
                            <option >{{ $users['usersyear'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div class="chart cart-user">
                    <canvas id="userChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- Cate CHART -->
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Category Chart</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    <?php
                        $cade = DB::select('SELECT DISTINCT year(created_at) as Cadeyear FROM doan.categories ORDER BY Cadeyear desc');
                        $cade = json_decode(json_encode($cade),1);
                    ?>
                    <select class="form-control" id="select-year-cate">
                        @foreach ($cade as $cade)
                            <option>{{ $cade['Cadeyear'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div class="chart cart-cate">
                    <canvas id="cateChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col (RIGHT) -->
</div>
<!-- /.row -->

<script src="{{Module::asset('admin:plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{Module::asset('admin:plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{Module::asset('admin:plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{Module::asset('admin:dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{Module::asset('admin:dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
    $(document).ready(function() {
        $(document).on('change', '#select-year-trademark', function() {
            var yearSelected = $('#select-year-trademark option:selected').val();
            $.get({
                url: '/admin/statistic',
                data: {
                    yeartrade: yearSelected
                },
                success: function(result) {
                    $('.cart-trade').html(result)
                }
            });
        });
    });

    $(document).ready(function() {
        $(document).on('change', '#select-year-cate', function() {
            var yearSelected = $('#select-year-cate option:selected').val();
            $.get({
                url: '/admin/statistic',
                data: {
                    yearcate: yearSelected
                },
                success: function(result) {
                    $('.cart-cate').html(result)
                }
            });
        });
    });

    $(document).ready(function() {
        $(document).on('change', '#select-year-user', function() {
            var yearSelected = $('#select-year-user option:selected').val();
            $.get({
                url: '/admin/statistic',
                data: {
                    yearuser: yearSelected
                },
                success: function(result) {
                    $('.cart-user').html(result)
                }
            });
        });
    });

    $(document).ready(function() {
        $(document).on('change', '#select-year-order', function() {
            var yearSelected = $('#select-year-order option:selected').val();
            $.get({
                url: '/admin/statistic',
                data: {
                    yearorder: yearSelected
                },
                success: function(result) {
                    $('.cart-order').html(result)
                }
            });
        });
    });
    //order
    new Chart(document.getElementById("orderChart"), {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: <?php echo json_encode($fini); ?>
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });
    //user
    new Chart(document.getElementById("userChart"), {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ],
            datasets: [{
                data: <?php echo json_encode($user_fi); ?>,
                label: "user",
                borderColor: "#3e95cd",
                fill: false
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });

    //trade
    new Chart(document.getElementById("tradeChart"), {
        type: 'horizontalBar',
        data: {
            labels: <?php echo json_encode($nametrade) ?>,
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: <?php echo json_encode($tradedata) ?>,
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });
    //cate
    new Chart(document.getElementById("cateChart"), {
        type: 'doughnut',
        data: {
            labels: <?php echo json_encode($namecate) ?>,
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: <?php echo json_encode($catedata) ?>
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });
</script>
@endsection
