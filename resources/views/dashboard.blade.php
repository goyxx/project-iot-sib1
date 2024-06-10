@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Kontrol Pompa Air</h5>
                        </div>
                    </div>
                    <div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Tombol untuk pompa air</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Kontrol Lampu</h5>
                        </div>
                    </div>
                    <div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Tombol untuk lampu</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Grafik Sensor Suhu</h5>
                        </div>
                    </div>
                    <div id="sensor-suhu"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Grafik Sensor Kelembaban Udara</h5>
                        </div>
                    </div>
                    <div id="sensor-kelembaban udara"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Grafik Sensor Kelembaban Tanah</h5>
                        </div>
                    </div>
                    <div id="sensor-kelembaban tanah"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Grafik Sensor Intensitas Cahaya</h5>
                        </div>
                    </div>
                    <div id="sensor-intensitas cahaya"></div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-6 mb-4 pb-3">
                                <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-secondary-subtle">
                                    <iconify-icon icon="solar:football-outline" class="fs-6 text-secondary"> </iconify-icon>
                                </span>
                                <h6 class="mb-0 fs-4">New Customers</h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-6">
                                <h6 class="mb-0 fw-medium">New goals</h6>
                                <h6 class="mb-0 fw-medium">83%</h6>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                                <div class="progress-bar bg-secondary" style="width: 83%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-6 mb-4">
                                <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-danger-subtle">
                                    <iconify-icon icon="solar:box-linear" class="fs-6 text-danger"></iconify-icon>
                                </span>
                                <h6 class="mb-0 fs-4">Total Income</h6>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h4>$680</h4>
                                    <span class="fs-11 text-success fw-semibold">+18%</span>
                                </div>
                                <div class="col-6">
                                    <div id="total-income"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </-div>
      </div>
    <div class="row">
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Revenue by Product</h5>
                    <div class="table-responsive" data-simplebar>
                        <table class="table text-nowrap align-middle table-custom mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-dark fw-normal ps-0">Assigned
                                    </th>
                                    <th scope="col" class="text-dark fw-normal">Progress</th>
                                    <th scope="col" class="text-dark fw-normal">Priority</th>
                                    <th scope="col" class="text-dark fw-normal">Budget</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center gap-6">
                                            <img src="/assets/images/products/dash-prd-1.jpg" alt="prd1" width="48"
                                                class="rounded" />
                                            <div>
                                                <h6 class="mb-0">Minecraf App</h6>
                                                <span>Jason Roy</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>73.2%</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success-subtle text-success">Low</span>
                                    </td>
                                    <td>
                                        <span class="text-dark">$3.5k</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center gap-6">
                                            <img src="/assets/images/products/dash-prd-2.jpg" alt="prd1" width="48"
                                                class="rounded" />
                                            <div>
                                                <h6 class="mb-0">Web App Project</h6>
                                                <span>Mathew Flintoff</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>73.2%</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning-subtle text-warning">Medium</span>
                                    </td>
                                    <td>
                                        <span class="text-dark">$3.5k</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center gap-6">
                                            <img src="/assets/images/products/dash-prd-3.jpg" alt="prd1" width="48"
                                                class="rounded" />
                                            <div>
                                                <h6 class="mb-0">Modernize Dashboard</h6>
                                                <span>Anil Kumar</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>73.2%</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary-subtle text-secondary">Very
                                            High</span>
                                    </td>
                                    <td>
                                        <span class="text-dark">$3.5k</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center gap-6">
                                            <img src="/assets/images/products/dash-prd-4.jpg" alt="prd1" width="48"
                                                class="rounded" />
                                            <div>
                                                <h6 class="mb-0">Dashboard Co</h6>
                                                <span>George Cruize</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>73.2%</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger-subtle text-danger">High</span>
                                    </td>
                                    <td>
                                        <span class="text-dark">$3.5k</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="mb-4">
                        <h5 class="card-title fw-semibold">Daily activities</h5>
                    </div>
                    <ul class="timeline-widget mb-0 position-relative mb-n5">
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n1 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-primary flex-shrink-0 mt-2"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John
                                Doe of $385.90</div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">New sale
                                recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal ">#ML-3467</a>
                            </div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-3 text-dark mt-n6">Payment was made of $64.95
                                to Michael</div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-secondary flex-shrink-0"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">New sale
                                recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal ">#ML-3467</a>
                            </div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-danger flex-shrink-0"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">Project meeting
                            </div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-primary flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-3 text-dark mt-n6">Payment received from John
                                Doe of $385.90</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card overflow-hidden hover-img">
                <div class="position-relative">
                    <a href="javascript:void(0)">
                        <img src="/assets/images/blog/blog-img1.jpg" class="card-img-top" alt="matdash-img">
                    </a>
                    <span
                        class="badge text-bg-light text-dark fs-2 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                        min Read</span>
                    <img src="/assets/images/profile/user-3.jpg" alt="matdash-img"
                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40"
                        height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-title="Georgeanna Ramero">
                </div>
                <div class="card-body p-4">
                    <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">Social</span>
                    <a class="d-block my-4 fs-5 text-dark fw-semibold link-primary" href="">As
                        yen tumbles, gadget-loving
                        Japan goes
                        for secondhand iPhones</a>
                    <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="ti ti-eye text-dark fs-5"></i>9,125
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="ti ti-message-2 text-dark fs-5"></i>3
                        </div>
                        <div class="d-flex align-items-center fs-2 ms-auto">
                            <i class="ti ti-point text-dark"></i>Mon, Dec 19
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card overflow-hidden hover-img">
                <div class="position-relative">
                    <a href="javascript:void(0)">
                        <img src="/assets/images/blog/blog-img2.jpg" class="card-img-top" alt="matdash-img">
                    </a>
                    <span
                        class="badge text-bg-light text-dark fs-2 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                        min Read</span>
                    <img src="/assets/images/profile/user-2.jpg" alt="matdash-img"
                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40"
                        height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-title="Georgeanna Ramero">
                </div>
                <div class="card-body p-4">
                    <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">Gadget</span>
                    <a class="d-block my-4 fs-5 text-dark fw-semibold link-primary" href="">Intel loses bid to
                        revive
                        antitrust case
                        against patent foe Fortress</a>
                    <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="ti ti-eye text-dark fs-5"></i>4,150
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="ti ti-message-2 text-dark fs-5"></i>38
                        </div>
                        <div class="d-flex align-items-center fs-2 ms-auto">
                            <i class="ti ti-point text-dark"></i>Sun, Dec 18
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card overflow-hidden hover-img">
                <div class="position-relative">
                    <a href="javascript:void(0)">
                        <img src="/assets/images/blog/blog-img3.jpg" class="card-img-top" alt="matdash-img">
                    </a>
                    <span
                        class="badge text-bg-light text-dark fs-2 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                        min Read</span>
                    <img src="/assets/images/profile/user-3.jpg" alt="matdash-img"
                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40"
                        height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-title="Georgeanna Ramero">
                </div>
                <div class="card-body p-4">
                    <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">Health</span>
                    <a class="d-block my-4 fs-5 text-dark fw-semibold link-primary" href="">COVID outbreak deepens
                        as more
                        lockdowns
                        loom in China</a>
                    <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="ti ti-eye text-dark fs-5"></i>9,480
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="ti ti-message-2 text-dark fs-5"></i>12
                        </div>
                        <div class="d-flex align-items-center fs-2 ms-auto">
                            <i class="ti ti-point text-dark"></i>Sat, Dec 17
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @endsection

    @push('scripts')
        <script>
            let dataSensorSuhu = [];

            function getDataSensorsuhu() {
                $.ajax({
                    url: "{{ route('sensors.index') }}?type=temperature",
                    type: "GET",
                    success: function(response) {
                        dataSensorSuhu = [];
                        let data = response;
                        data.forEach(function(item) {
                            dataSensorSuhu.push([item.created_at, item.value]);
                            console.log(dataSensorSuhu);

                        });
                        // dataSensorSuhu = response.data;
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

                getDataSensorsuhu();
            }

            function showChartSensorSuhu() {
                Highcharts.chart('sensor-suhu', {

                    title: {
                        text: ''
                    },

                    xAxis: {
                        tickInterval: 1,
                        title: {
                            text: 'waktu'
                        },
                    },

                    yAxis: {
                        title: {
                            text: 'suhu'
                        },
                        labels: {
                            format: '{value}°'
                        },
                        accessibility: {
                            rangeDescription: 'Dari: 0°C sampai 100°C.'
                        },
                        lineWidth: 2
                    },

                    tooltip: {
                        headerFormat: '<b>{series.name}</b><br />',
                        pointFormat: 'waktu = {point.x}, suhu = {point.y}'
                    },

                    series: [{
                        data: dataSensorSuhu,

                        pointStart: 1,
                        name: 'Suhu'
                    }]
                });
            }


            Highcharts.chart('sensor-kelembaban udara', {

                title: {
                    text: ''
                },

                xAxis: {
                    tickInterval: 1,
                    title: {
                        text: 'waktu'
                    },
                },

                yAxis: {
                    title: {
                        text: 'Kelembaban Udara'
                    },
                    labels: {
                        format: '{value}°'
                    },
                    accessibility: {
                        rangeDescription: 'Dari: 0°C sampai 100°C.'
                    },
                    lineWidth: 2
                },

                tooltip: {
                    headerFormat: '<b>{series.name}</b><br />',
                    pointFormat: 'waktu = {point.x}, kelembaban udara = {point.y}'
                },

                series: [{
                    data: [
                        [12, 2],
                        [13, 30],
                        [14, 40],
                        [15, 25],
                        [16, 17],
                        [17, 30],
                        [18, 35],
                        [19, 32],
                        [20, 20],
                        [21, 33],
                        [22, 27],
                        [23, 30],
                    ],
                    pointStart: 1,
                    name: 'Kelembaban Udara'
                }]
            });


            Highcharts.chart('sensor-kelembaban tanah', {

                title: {
                    text: ''
                },

                xAxis: {
                    tickInterval: 1,
                    title: {
                        text: 'waktu'
                    },
                },

                yAxis: {
                    title: {
                        text: 'kelembaban tanah'
                    },
                    labels: {
                        format: '{value}°'
                    },
                    accessibility: {
                        rangeDescription: 'Dari: 0°C sampai 100°C.'
                    },
                    lineWidth: 2
                },

                tooltip: {
                    headerFormat: '<b>{series.name}</b><br />',
                    pointFormat: 'waktu = {point.x}, kelembaban tanah = {point.y}'
                },

                series: [{
                    data: [
                        [12, 2],
                        [13, 30],
                        [14, 40],
                        [15, 25],
                        [16, 17],
                        [17, 30],
                        [18, 35],
                        [19, 32],
                        [20, 20],
                        [21, 33],
                        [22, 27],
                        [23, 30],
                    ],
                    pointStart: 1,
                    name: 'kelembaban tanah'
                }]
            });


            Highcharts.chart('sensor-intensitas cahaya', {

                title: {
                    text: ''
                },

                xAxis: {
                    tickInterval: 1,
                    title: {
                        text: 'waktu'
                    },
                },

                yAxis: {
                    title: {
                        text: 'intensitas cahaya'
                    },
                    labels: {
                        format: '{value}lux'
                    },
                    accessibility: {
                        rangeDescription: 'Dari: 0lux sampai 1000lux.'
                    },
                    lineWidth: 2
                },

                tooltip: {
                    headerFormat: '<b>{series.name}</b><br />',
                    pointFormat: 'waktu = {point.x}, lux = {point.y}'
                },

                series: [{
                    data: [
                        [12, 675],
                        [13, 685],
                        [14, 680],
                        [15, 685],
                        [16, 683],
                        [17, 680],
                        [18, 685],
                        [19, 690],
                        [20, 680],
                        [21, 685],
                        [22, 680],
                        [23, 685],
                    ],
                    pointStart: 1,
                    name: 'intensitas cahaya'
                }]
            });
        </script>
    @endpush
