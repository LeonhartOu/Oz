@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid" display="none">
            <div class="card">

                <div class="card-header mb-0 pb-0">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex flex-wrap justify-content-center">
                                <h4> TRUTH or DRINK </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-block mt-5">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex flex-wrap justify-content-center">
                                <h5 class="mb-3">SELECT MODE:</h5>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-12 xs-mb-15 text-center">
                                    <button class="mode-btn btn-normal">Normal</button>
                                    <button class="mode-btn btn-party">Party</button>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-12 xs-mb-15 text-center">
                                    <button class="mode-btn btn-spicy">Spicy</button>
                                    <button class="mode-btn btn-dares">Dares</button>
                                </div>
                            </div>


                            <div class="row mt-2">
                                <div class="col-sm-12 xs-mb-15 text-center">
                                    <button class="mode-btn btn-mixed">Mixed</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">

                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
