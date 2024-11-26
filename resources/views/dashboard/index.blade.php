@extends('layouts.app')

@section('content')
    <div class="section-header">
        <h1>{{ $title }}</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Admin</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>News</h4>
                    </div>
                    <div class="card-body">
                        42
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Reports</h4>
                    </div>
                    <div class="card-body">
                        1,201
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Online Users</h4>
                    </div>
                    <div class="card-body">
                        47
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Referral URL</h4>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <div class="text-small float-right font-weight-bold text-muted">2,100</div>
                        <div class="font-weight-bold mb-1">Google</div>
                        <div class="progress" data-height="3">
                            <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="text-small float-right font-weight-bold text-muted">1,880</div>
                        <div class="font-weight-bold mb-1">Facebook</div>
                        <div class="progress" data-height="3">
                            <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="text-small float-right font-weight-bold text-muted">1,521</div>
                        <div class="font-weight-bold mb-1">Bing</div>
                        <div class="progress" data-height="3">
                            <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="text-small float-right font-weight-bold text-muted">884</div>
                        <div class="font-weight-bold mb-1">Yahoo</div>
                        <div class="progress" data-height="3">
                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="text-small float-right font-weight-bold text-muted">473</div>
                        <div class="font-weight-bold mb-1">Kodinger</div>
                        <div class="progress" data-height="3">
                            <div class="progress-bar" role="progressbar" data-width="28%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="text-small float-right font-weight-bold text-muted">418</div>
                        <div class="font-weight-bold mb-1">Multinity</div>
                        <div class="progress" data-height="3">
                            <div class="progress-bar" role="progressbar" data-width="20%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Popular Browser</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col text-center">
                            <div class="browser browser-chrome"></div>
                            <div class="mt-2 font-weight-bold">Chrome</div>
                            <div class="text-muted text-small"><span class="text-primary"><i
                                        class="fas fa-caret-up"></i></span> 48%</div>
                        </div>
                        <div class="col text-center">
                            <div class="browser browser-firefox"></div>
                            <div class="mt-2 font-weight-bold">Firefox</div>
                            <div class="text-muted text-small"><span class="text-primary"><i
                                        class="fas fa-caret-up"></i></span> 26%</div>
                        </div>
                        <div class="col text-center">
                            <div class="browser browser-safari"></div>
                            <div class="mt-2 font-weight-bold">Safari</div>
                            <div class="text-muted text-small"><span class="text-danger"><i
                                        class="fas fa-caret-down"></i></span> 14%</div>
                        </div>
                        <div class="col text-center">
                            <div class="browser browser-opera"></div>
                            <div class="mt-2 font-weight-bold">Opera</div>
                            <div class="text-muted text-small">7%</div>
                        </div>
                        <div class="col text-center">
                            <div class="browser browser-internet-explorer"></div>
                            <div class="mt-2 font-weight-bold">IE</div>
                            <div class="text-muted text-small"><span class="text-primary"><i
                                        class="fas fa-caret-up"></i></span> 5%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
