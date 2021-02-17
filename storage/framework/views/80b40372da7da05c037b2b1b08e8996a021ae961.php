<?php $__env->startSection('title'); ?>
Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
    #myAreaChart {
    height: 400px; 
    width: 650px;
}
    .highcharts-figure, .highcharts-data-table table {
    min-width: 320px; 
    max-width: 660px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</style>
<?php $__env->stopSection(); ?>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<?php $__env->startSection('content'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total User</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($data['user_total']); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lawyer Aktif</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($data['lawyer_aktif']); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Client Aktif</div>
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo e($data['client_aktif']); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kasus</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($data['kasus']); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Content Row -->

        <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Statistic Konsultasi</h6>
                <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </div>
            </div>
            <!-- Card Body -->
            <figure class="highcharts-figure">
                <div id="myAreaChart"></div>
            </figure>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Statistic Pengajuan Konsultasi</h6>
                <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </div>
            </div>
            <!-- Card Body -->
            <figure class="highcharts-figure">
                <div id="myPieChart"></div>
            </figure>
            </div>
        </div>
        </div>

        <!-- Content Row -->
        <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Ranking Advokat</h6>
            </div>
            <div class="card-body">
            <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Nama</th>
            <th>Total Kasus</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $konsultasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
          <td><?php echo e($no); ?></td>
            <td><?php echo e($m->lawyer->nama_lengkap); ?></td>
            <td><?php echo e($data['total_kasus']); ?></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
            </div>
            </div>

            <!-- Color System -->
            <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card bg-primary text-white shadow">
                <div class="card-body">
                    Primary
                    <div class="text-white-50 small">#4e73df</div>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-success text-white shadow">
                <div class="card-body">
                    Success
                    <div class="text-white-50 small">#1cc88a</div>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-info text-white shadow">
                <div class="card-body">
                    Info
                    <div class="text-white-50 small">#36b9cc</div>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-warning text-white shadow">
                <div class="card-body">
                    Warning
                    <div class="text-white-50 small">#f6c23e</div>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-danger text-white shadow">
                <div class="card-body">
                    Danger
                    <div class="text-white-50 small">#e74a3b</div>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-secondary text-white shadow">
                <div class="card-body">
                    Secondary
                    <div class="text-white-50 small">#858796</div>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-light text-black shadow">
                <div class="card-body">
                    Light
                    <div class="text-black-50 small">#f8f9fc</div>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
            <div class="card bg-dark text-white shadow">
                <div class="card-body">
                    Dark
                    <div class="text-white-50 small">#5a5c69</div>
                </div>
            </div>
            </div>
        </div>

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                </div>
                <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
            </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary " >Development Approach</h6>
            </div>
            <div class="card-body">
                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
            </div>
            </div>

        </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    
    Highcharts.chart('myPieChart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Persentase',
        colorByPoint: true,
        data: [{
            name: 'Berlangsung',
            y: <?php echo json_encode($ongoing); ?>

        }, {
            name: 'Lainnya',
            y: <?php echo json_encode($lainnya); ?>

        }, {
            name: 'Selesai',
            y: <?php echo json_encode($finish); ?>

        }]
    }]
});

</script>

<script>

Highcharts.chart('myAreaChart', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: ''
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
    },
    xAxis: {
        categories: ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'
        ]
    },
    yAxis: {
        title: {
            text: ''
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' kasus'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [{
        name: 'Selesai',
        data: [0,0, 0, 0, 0, 0, 0, 0, <?php echo e($data['september_f']); ?>, 0, 0, 0]
    },{
        name: 'Berlangsung',
        data: [0,0, 0, 0, 0, 0, 0, 0, <?php echo e($data['september_o']); ?>, 0, 0, 0]
    }]
});
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/home.blade.php ENDPATH**/ ?>