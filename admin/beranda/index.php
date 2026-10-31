<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>150</h3>
                <p>Data Barang</p>
            </div>
            <div class="icon">
                <i class="fas fa-cart-plus"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Data Kategori</p>
            </div>
            <div class="icon">
                <i class="fas fa-layer-group"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <div class="small-box bg-dark">
            <div class="inner">
                <h3>44</h3>
                <p>Data Satuan</p>
            </div>
            <div class="icon">
                <i class="fas fa-box"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>
                <p>Data Barang Keluar</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<div class="row">
    <!-- Left col -->
    <section class="col-lg-6 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Sales
                </h3>
                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                        </li>
                    </ul>
                </div> <br><br><br><br>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="revenue-chart"
                        style="position: relative; height: 300px;">
                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                        <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card bg-gradient-success">
            <div class="card-header border-0">
                <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendar
                </h3>
                <div class="card-tools">
                    <div class="btn-group">
                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div> <br>
            <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
            </div>
        </div>
        <!-- DIRECT CHAT -->



    </section>
    <section class="col-lg-6 connectedSortable">
        <div class="card bg-gradient-primary">
            <div class="card-header border-0">
                <h3 class="card-title">
                    <i class="fas fa-map-marker-alt mr-1"></i>
                    Visitors
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                        <i class="far fa-calendar-alt"></i>
                    </button>
                    <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <div class="card-footer bg-transparent">
                <div class="row">
                    <div class="col-4 text-center">
                        <div id="sparkline-1"></div>
                        <div class="text-white">Visitors</div>
                    </div>
                    <div class="col-4 text-center">
                        <div id="sparkline-2"></div>
                        <div class="text-white">Online</div>
                    </div>
                    <div class="col-4 text-center">
                        <div id="sparkline-3"></div>
                        <div class="text-white">Sales</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-gradient-info">
            <div class="card-header border-0">
                <h3 class="card-title">
                    <i class="fas fa-th mr-1"></i>
                    Sales Graph
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
    </section>


    <section class="col-lg-12 connectedSortable">

        <div class="row align-items-stretch">

            <!-- Pesan Hari Ini -->
            <div class="col-lg-6 d-flex">
                <div class="card card-primary card-outline w-100">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-envelope-open-text mr-1"></i>
                            Pesan Hari Ini
                        </h3>
                        <div class="card-tools">
                            <span class="badge badge-primary">2 Pesan</span>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                                <div class="product-img">
                                    <div class="img-circle bg-primary text-white text-center"
                                        style="width: 40px; height: 40px; line-height: 40px;">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-title">
                                        Andi Saputra
                                        <span class="badge badge-danger float-right">Baru</span>
                                    </a>
                                    <span class="product-description">
                                        Apakah mobil Avanza tersedia untuk besok?
                                    </span>
                                    <small class="text-muted">
                                        <i class="far fa-clock mr-1"></i>10 menit lalu
                                    </small>
                                </div>
                            </li>

                            <li class="item">
                                <div class="product-img">
                                    <div class="img-circle bg-info text-white text-center"
                                        style="width: 40px; height: 40px; line-height: 40px;">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-title">
                                        Siti Rahma
                                        <span class="badge badge-warning float-right">Belum Dibaca</span>
                                    </a>
                                    <span class="product-description">
                                        Berapa harga sewa motor untuk satu hari?
                                    </span>
                                    <small class="text-muted">
                                        <i class="far fa-clock mr-1"></i>1 jam lalu
                                    </small>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="card-footer text-center mt-auto">
                        <a href="#" class="text-primary">
                            Lihat Semua Pesan <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pesan Kemarin -->
            <div class="col-lg-6 d-flex">
                <div class="card card-secondary card-outline w-100">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-history mr-1"></i>
                            Pesan Kemarin
                        </h3>
                        <div class="card-tools">
                            <span class="badge badge-secondary">2 Pesan</span>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                                <div class="product-img">
                                    <div class="img-circle bg-success text-white text-center"
                                        style="width: 40px; height: 40px; line-height: 40px;">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-title">
                                        Budi Santoso
                                        <span class="badge badge-secondary float-right">Dibaca</span>
                                    </a>
                                    <span class="product-description">
                                        Apa saja syarat rental mobil lepas kunci?
                                    </span>
                                    <small class="text-muted">
                                        <i class="far fa-clock mr-1"></i>Kemarin, 15:30
                                    </small>
                                </div>
                            </li>

                            <li class="item">
                                <div class="product-img">
                                    <div class="img-circle bg-warning text-white text-center"
                                        style="width: 40px; height: 40px; line-height: 40px;">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-title">
                                        Rina Amelia
                                        <span class="badge badge-danger float-right">Baru</span>
                                    </a>
                                    <span class="product-description">
                                        Apakah tersedia motor untuk perjalanan luar kota?
                                    </span>
                                    <small class="text-muted">
                                        <i class="far fa-clock mr-1"></i>Kemarin, 10:15
                                    </small>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="card-footer text-center mt-auto">
                        <a href="#" class="text-secondary">
                            Lihat Pesan Kemarin <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section>


</div>