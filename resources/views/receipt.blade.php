@extends('layouts.app')

@section('content')
    <section>
        <section class="border-bottom py-5 ps-lg-2 ps-xxl-0">
            <div class="row justify-content-center pt-5">
                <div class="col-6">
                    <h2 class="h4 text-center">Transaction Receipt </h2>
                    <div class="tab-content pt-1">
                        <div class="tab-pane fade show active"  role="tabpanel">
                            <div class="d-sm-flex">
                                <div class="card border-0 shadow-sm card-hover card-hover-none mb-4 mb-sm-0 me-sm-4">
                                    @if($success)
                                        <div class="card-body">
                                            <div class="position-relative bg-size-cover py-5">
                                                <span class="position-absolute top-0 start-0 w-100 h-100 bg-success opacity-60"></span>
                                                <div class="position-relative fw-bold text-white text-shadow text-center zindex-5 ">
                                                    {{$transaction->processorResponseText}}
                                                    <i class='bx bxs-badge-check'></i>
                                                </div>
                                            </div>
                                            <br>

                                            <h6>Transaction ID : {{$transaction->paymentReceipt['id']}}</h6>
                                            <h6>Transaction globalID : {{$transaction->paymentReceipt['globalId']}}</h6>
                                            <h6>Transaction Amount : {{$transaction->paymentReceipt['amount']}}</h6>
                                            <h6>Transaction Currency : {{$transaction->paymentReceipt['currencyIsoCode']}}</h6>
                                            <h6>Processor Authorization Code : {{$transaction->paymentReceipt['processorAuthorizationCode']}}</h6>
                                            <h6>Processor Response : {{$transaction->paymentReceipt['processorResponseText']}}</h6>
                                            <h6>Processor Card Type : {{$transaction->paymentReceipt['cardType']}}</h6>

                                            <br>
                                            <a class="btn btn-sm btn-primary" href="#">PRINT</a>
                                        </div>
                                    @else
                                        <div class="card-body">
                                            <div class="position-relative bg-size-cover py-3">
                                                <span class="position-absolute top-0 start-0 w-100 h-100 bg-danger opacity-60"></span>
                                                <div class="position-relative fw-bold text-white text-shadow text-center zindex-5 ">
                                                    Payment Failed
                                                    <i class='bx bxs-error-circle'></i>
                                                </div>
                                            </div>


                                            <br>
                                            <a class="btn btn-sm btn-primary" href="#">PRINT</a>
                                        </div>

                                    @endif
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
