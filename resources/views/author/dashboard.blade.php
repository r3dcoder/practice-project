@extends('layouts.admin')

@section('title')
    Author Dashboard
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{ Auth::user()->postsToday->count() }}</span>
                                <span class="font-weight-light">Posts Today</span>
                            </div>

                            <div class="h2 text-muted">
                                <i class="icon icon-people"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{ Auth::user()->postsToday->count() }}</span>
                                <span class="font-weight-light">Post All time</span>
                            </div>

                            <div class="h2 text-muted">
                                <i class="icon icon-wallet"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{ $allComments->where('created_at', '>=', Carbon\Carbon::today())->count()   }}</span>
                                <span class="font-weight-light">Todays comment</span>
                            </div>

                            <div class="h2 text-muted">
                                <i class="icon icon-cloud-download"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{ $allComments->count() }}</span>
                                <span class="font-weight-light">All time comments</span>
                            </div>

                            <div class="h2 text-muted">
                                <i class="icon icon-clock"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Total Users
                        </div>

                        <div class="card-body p-0">
                            h
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
