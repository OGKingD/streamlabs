@extends('layouts.app')


@section('content')
    @if(!$subscribed)

        <!-- Hero -->
        <section class=" mt-3 pt-5 pb-4">
            <div class="bg-dark dark-mode py-4  pt-5 pb-4">
                <div class="container pb-2 py-lg-3 mt-5">

                    <!-- Breadcrumb -->

                    <h1 class="text-center mb-0">Transparent Pricing for You</h1>
                </div>
                <div style="height: 300px;"></div>
            </div>
        </section>



        <form action="#" method="post">
        @csrf
        <!-- Pricing plans -->
            <section class="container position-relative zindex-2" style="margin-top: -300px;">
                <div class="price-switch-wrapper">
                    <div class="dark-mode pb-2 pb-lg-3">
                        <div class="form-check form-switch price-switch justify-content-center mt-2 mb-4"
                             data-bs-toggle="price">
                            <input type="checkbox" class="form-check-input" name="subscription_type" id="pricing">
                            <label class="form-check-label" for="pricing">Monthly</label>
                            <label class="form-check-label d-flex align-items-start" for="pricing">Annually <span
                                    class="text-danger fs-xs fw-semibold mt-n2 ms-2">-20%</span></label>
                        </div>
                    </div>
                    <div class="table-responsive-lg">
                        <div class="d-flex align-items-center pb-4">

                            <!-- Pricing plan -->
                            <div class="border rounded-3 rounded-end-0 shadow-sm me-n1"
                                 style="width: 32%; min-width: 16rem;">
                                <div class="card bg-light h-100 border-0 border-end rounded-end-0 py-3 py-sm-4 py-lg-5">
                                    <div class="card-body text-center">
                                        <h3 class="mb-2">Team</h3>
                                        <div class="fs-lg pb-4 mb-3">Best for small teams</div>
                                        <div class="display-5 text-dark mb-1" data-monthly-price>$15</div>
                                        <div class="d-none display-5 text-dark mb-1" data-annual-price>$12</div>
                                        <div class="text-muted mb-5">per month</div>
                                    </div>
                                    <div class="card-footer border-0 text-center pt-0 pb-4">
                                        <a href="#" onclick="submitForm('team')" class="btn btn-outline-primary btn-lg">Get
                                            started now</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Featurd pricing plan -->
                            <div
                                class="bg-primary position-relative rounded-3 shadow-primary shadow-dark-mode-none zindex-2 p-4"
                                style="width: 36%; min-width: 18rem;">
                                <div class="card bg-transparent border-light py-3 py-sm-4 py-lg-5">
                                    <div class="card-body text-light text-center">
                                        <h3 class="text-light mb-2">Company</h3>
                                        <div class="fs-lg opacity-70 pb-4 mb-3">Best for growing teams</div>
                                        <div class="display-5 mb-1" data-monthly-price>$25</div>
                                        <div class="d-none display-5 mb-1" data-annual-price>$20</div>
                                        <div class="opacity-50 mb-5">per month</div>
                                    </div>
                                    <div class="card-footer border-0 text-center pt-0 pb-4">
                                        <a href="#" onclick="submitForm('company')"
                                           class="btn btn-light btn-lg shadow-secondary">Get started now</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Pricing plan -->
                            <div class="border rounded-3 rounded-start-0 shadow-sm"
                                 style="width: 32%; min-width: 16rem;">
                                <div class="card bg-light h-100 border-0 rounded-start-0 py-3 py-sm-4 py-lg-5">
                                    <div class="card-body text-center">
                                        <h3 class="mb-2">Enterprise</h3>
                                        <div class="fs-lg pb-4 mb-3">Best for large teams</div>
                                        <div class="display-5 text-dark mb-1" data-monthly-price>$50</div>
                                        <div class="d-none display-5 text-dark mb-1" data-annual-price>$40</div>
                                        <div class="text-muted mb-5">per month</div>
                                    </div>
                                    <div class="card-footer border-0 text-center pt-0 pb-4">
                                        <a href="#" onclick="submitForm('enterprise')"
                                           class="btn btn-outline-primary btn-lg">Get started now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </form>

        <script src="https://js.braintreegateway.com/web/dropin/1.33.4/js/dropin.min.js"></script>

        <!-- Small modal-->
        <button id="openPaymentForm" class="btn btn-outline-secondary me-2 mb-3 d-none" type="button"
                data-bs-toggle="modal" data-bs-target="#paymentModal">Small modal
        </button>

        <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Make Payment</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation mb-2" novalidate method="post" action="/subscribe" id="payForm">
                            @csrf

                            <input type="hidden" id="nonce" name="payment_method_nonce"/>
                            <input type="hidden" id="amount" name="amount"/>
                            <input type="hidden" id="subscription_type" name="subscription_type"/>
                            <button onclick="processPayment()" class="btn btn-primary shadow-primary btn-lg w-100">Pay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- Plans comparison -->
        <section class="container py-5 my-md-3 my-lg-5">
            <div class="row align-items-center">
                <div class="col-md-4 text-center text-md-start">
                    <h2 class="h1 mb-4">Plan Comparison</h2>
                    <p class="fs-lg mb-md-0">Choose the option that makes the most sense for your business.</p>
                </div>
                <div class="col-md-8">
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col text-md-center pb-2 mb-4">
                            <h3 class="h5 mb-2 mb-md-3">Team</h3>
                            <ul class="d-md-none list-unstyled">
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Users:&nbsp;</span>
                                    1 included
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Member support via email:&nbsp;</span>
                                    Standard
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Live chat support:&nbsp;</span>
                                    <i class="bx bx-x lead text-muted"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">IT security and legal review:&nbsp;</span>
                                    <i class="bx bx-x lead text-muted"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Projects:&nbsp;</span>
                                    4 projects
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Comments and sharing:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Zoom integration:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Ongoing strategy calls:&nbsp;</span>
                                    <i class="bx bx-x lead text-muted"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Analytics dashboard:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Get custom integrations:&nbsp;</span>
                                    <i class="bx bx-x lead text-muted"></i>
                                </li>
                            </ul>
                            <button class="btn btn-outline-primary w-100 w-md-auto" onclick="submitForm('team')">Free
                                trial
                            </button>
                        </div>
                        <div class="col text-md-center pb-2 mb-4">
                            <h3 class="h5 mb-2 mb-md-3">Company</h3>
                            <ul class="d-md-none list-unstyled">
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Users:&nbsp;</span>
                                    5 included
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Member support via email:&nbsp;</span>
                                    3 hours
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Live chat support:&nbsp;</span>
                                    10+ members
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">IT security and legal review:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Projects:&nbsp;</span>
                                    Unlimited
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Comments and sharing:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Zoom integration:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Ongoing strategy calls:&nbsp;</span>
                                    <i class="bx bx-x lead text-muted"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Analytics dashboard:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Get custom integrations:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                            </ul>
                            <button class="btn btn-outline-primary w-100 w-md-auto" onclick="submitForm('company')">Get
                                started
                            </button>
                        </div>
                        <div class="col text-md-center mb-3">
                            <h3 class="h5 mb-2 mb-md-3">Enterprise</h3>
                            <ul class="d-md-none list-unstyled">
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Users:&nbsp;</span>
                                    10 +
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Member support via email:&nbsp;</span>
                                    With highest priority
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Live chat support:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">IT security and legal review:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Projects:&nbsp;</span>
                                    Unlimited
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Comments and sharing:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Zoom integration:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Ongoing strategy calls:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Analytics dashboard:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Get custom integrations:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                            </ul>
                            <button class="btn btn-outline-primary w-100 w-md-auto" onclick="submitForm('enterprise')">
                                Get started
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block pt-5 mt-2 pb-4">
                <div class="row g-0">
                    <div class="col-md-4 text-dark fw-semibold ps-4 pe-2 py-4">Users</div>
                    <div class="col-md-8 text-center">
                        <div class="row row-cols-3 g-0">
                            <div class="col px-2 py-4">1 included</div>
                            <div class="col position-relative bg-primary px-2 py-4">
                                <span class="text-light opacity-80">5 included</span>
                                <span
                                    class="position-absolute start-0 bottom-100 w-100 bg-primary rounded-3 rounded-bottom-0"
                                    style="height: 2rem;"></span>
                            </div>
                            <div class="col px-2 py-4">10+</div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 bg-secondary rounded-3">
                    <div class="col-md-4 text-dark fw-semibold ps-4 pe-2 py-4">Member support via email</div>
                    <div class="col-md-8 text-center">
                        <div class="row row-cols-3 g-0">
                            <div class="col px-2 py-4">Standard</div>
                            <div class="col bg-primary px-2 py-4">
                                <span class="text-light opacity-80">3 hours</span>
                            </div>
                            <div class="col px-2 py-4">With highest priority</div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-4 text-dark fw-semibold ps-4 pe-2 py-4">Live chat support</div>
                    <div class="col-md-8 text-center">
                        <div class="row row-cols-3 g-0">
                            <div class="col px-2 py-4">
                                <i class="bx bx-x lead text-muted"></i>
                            </div>
                            <div class="col bg-primary px-2 py-4">
                                <span class="text-light opacity-80">10+ members</span>
                            </div>
                            <div class="col px-2 py-4">Unlimited</div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 bg-secondary rounded-3">
                    <div class="col-md-4 text-dark fw-semibold ps-4 pe-2 py-4">IT security and legal review</div>
                    <div class="col-md-8 text-center">
                        <div class="row row-cols-3 g-0">
                            <div class="col px-2 py-4">
                                <i class="bx bx-x lead text-muted"></i>
                            </div>
                            <div class="col bg-primary px-2 py-4">
                                <i class="bx bx-check lead text-light"></i>
                            </div>
                            <div class="col px-2 py-4">
                                <i class="bx bx-check lead text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-4 text-dark fw-semibold ps-4 pe-2 py-4">Projects</div>
                    <div class="col-md-8 text-center">
                        <div class="row row-cols-3 g-0">
                            <div class="col px-2 py-4">4 projects</div>
                            <div class="col bg-primary px-2 py-4">
                                <span class="text-light opacity-80">Unlimited</span>
                            </div>
                            <div class="col px-2 py-4">Unlimited</div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 bg-secondary rounded-3">
                    <div class="col-md-4 text-dark fw-semibold ps-4 pe-2 py-4">Comments and sharing</div>
                    <div class="col-md-8 text-center">
                        <div class="row row-cols-3 g-0">
                            <div class="col px-2 py-4">
                                <i class="bx bx-check lead text-primary"></i>
                            </div>
                            <div class="col bg-primary px-2 py-4">
                                <i class="bx bx-check lead text-light"></i>
                            </div>
                            <div class="col px-2 py-4">
                                <i class="bx bx-check lead text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-4 text-dark fw-semibold ps-4 pe-2 py-4">Zoom integration</div>
                    <div class="col-md-8 text-center">
                        <div class="row row-cols-3 g-0">
                            <div class="col px-2 py-4">
                                <i class="bx bx-check lead text-primary"></i>
                            </div>
                            <div class="col bg-primary px-2 py-4">
                                <i class="bx bx-check lead text-light"></i>
                            </div>
                            <div class="col px-2 py-4">
                                <i class="bx bx-check lead text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 bg-secondary rounded-3">
                    <div class="col-md-4 text-dark fw-semibold ps-4 pe-2 py-4">Ongoing strategy calls</div>
                    <div class="col-md-8 text-center">
                        <div class="row row-cols-3 g-0">
                            <div class="col px-2 py-4">
                                <i class="bx bx-x lead text-muted"></i>
                            </div>
                            <div class="col bg-primary px-2 py-4">
                                <i class="bx bx-x lead text-light opacity-50"></i>
                            </div>
                            <div class="col px-2 py-4">
                                <i class="bx bx-check lead text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-4 text-dark fw-semibold ps-4 pe-2 py-4">Analytics dashboard</div>
                    <div class="col-md-8 text-center">
                        <div class="row row-cols-3 g-0">
                            <div class="col px-2 py-4">
                                <i class="bx bx-check lead text-primary"></i>
                            </div>
                            <div class="col bg-primary px-2 py-4">
                                <i class="bx bx-check lead text-light"></i>
                            </div>
                            <div class="col px-2 py-4">
                                <i class="bx bx-check lead text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 bg-secondary rounded-3">
                    <div class="col-md-4 text-dark fw-semibold ps-4 pe-2 py-4">Get custom integrations</div>
                    <div class="col-md-8 text-center">
                        <div class="row row-cols-3 g-0">
                            <div class="col px-2 py-4">
                                <i class="bx bx-x lead text-muted"></i>
                            </div>
                            <div class="col position-relative bg-primary px-2 py-4">
                                <i class="bx bx-check lead text-light"></i>
                                <span class="position-absolute start-0 top-100 w-100 bg-primary rounded-3 rounded-top-0"
                                      style="height: 2rem;"></span>
                            </div>
                            <div class="col px-2 py-4">
                                <i class="bx bx-check lead text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="bg-secondary py-5">
            <div class="container my-2 py-md-2 py-lg-5">
                <div class="row">
                    <div class="col-xl-4 col-md-5 text-center text-md-start pb-2 pb-md-0 mb-4 mb-md-0">
                        <h2 class="pb-3 mb-1 mb-lg-2">Any questions? <br class="d-none d-md-inline">Check out the FAQs
                        </h2>
                        <p class="fs-lg pb-3 mb-2 mb-lg-3">Still have unanswered questions and need to get in touch?</p>
                        <a href="contacts-v2.html" class="btn btn-primary">Contact support</a>
                    </div>
                    <div class="col-md-7 offset-xl-1">
                        <div class="accordion" id="faq">
                            <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                                <h2 class="accordion-header" id="q1-heading">
                                    <button class="accordion-button shadow-none rounded-3" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#q1" aria-expanded="true"
                                            aria-controls="q1">
                                        What if I exceed my Free or paid plan limits?
                                    </button>
                                </h2>
                                <div id="q1" class="accordion-collapse collapse show" aria-labelledby="q1-heading"
                                     data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm pt-0">
                                        <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam
                                            arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et
                                            consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus
                                            non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu
                                            purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam
                                            quam tristique tincidunt suspendisse ut consequat.</p>
                                        <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu
                                            tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse
                                            lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit
                                            leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                                <h2 class="accordion-header" id="q2-heading">
                                    <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#q2" aria-expanded="false"
                                            aria-controls="q2">
                                        How do I know which plan is right for me?
                                    </button>
                                </h2>
                                <div id="q2" class="accordion-collapse collapse" aria-labelledby="q2-heading"
                                     data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm pt-0">
                                        <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam
                                            arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et
                                            consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus
                                            non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu
                                            purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam
                                            quam tristique tincidunt suspendisse ut consequat.</p>
                                        <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu
                                            tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse
                                            lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit
                                            leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                                <h2 class="accordion-header" id="q3-heading">
                                    <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#q3" aria-expanded="false"
                                            aria-controls="q3">
                                        Are there any long-term commitments or cancellation fees?
                                    </button>
                                </h2>
                                <div id="q3" class="accordion-collapse collapse" aria-labelledby="q3-heading"
                                     data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm pt-0">
                                        <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam
                                            arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et
                                            consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus
                                            non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu
                                            purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam
                                            quam tristique tincidunt suspendisse ut consequat.</p>
                                        <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu
                                            tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse
                                            lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit
                                            leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                                <h2 class="accordion-header" id="q4-heading">
                                    <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#q4" aria-expanded="false"
                                            aria-controls="q4">
                                        How do I cancel my monthly subscription?
                                    </button>
                                </h2>
                                <div id="q4" class="accordion-collapse collapse" aria-labelledby="q4-heading"
                                     data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm pt-0">
                                        <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam
                                            arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et
                                            consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus
                                            non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu
                                            purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam
                                            quam tristique tincidunt suspendisse ut consequat.</p>
                                        <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu
                                            tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse
                                            lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit
                                            leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                                <h2 class="accordion-header" id="q5-heading">
                                    <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#q5" aria-expanded="false"
                                            aria-controls="q5">
                                        What happens if I upgrade or downgrade a plan mid-period?
                                    </button>
                                </h2>
                                <div id="q5" class="accordion-collapse collapse" aria-labelledby="q5-heading"
                                     data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm pt-0">
                                        <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam
                                            arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et
                                            consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus
                                            non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu
                                            purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam
                                            quam tristique tincidunt suspendisse ut consequat.</p>
                                        <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu
                                            tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse
                                            lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit
                                            leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 rounded-3 shadow-sm">
                                <h2 class="accordion-header" id="q6-heading">
                                    <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#q6" aria-expanded="false"
                                            aria-controls="q6">
                                        What kind of support do I get?
                                    </button>
                                </h2>
                                <div id="q6" class="accordion-collapse collapse" aria-labelledby="q6-heading"
                                     data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm pt-0">
                                        <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam
                                            arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et
                                            consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus
                                            non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu
                                            purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam
                                            quam tristique tincidunt suspendisse ut consequat.</p>
                                        <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu
                                            tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse
                                            lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit
                                            leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>






    @else
        <!-- Header and footer -->
        <section class="mt-3 pt-5 pb-4">
            <div class="navbar card-header d-flex align-items-center justify-content-between w-100 p-sm-4 p-3">
                <div class="d-flex align-items-center pe-3">
                    <img src="assets/img/avatar/20.jpg" class="rounded-circle" width="40" alt="Albert Flores">
                    <h6 class="mb-0 px-1 mx-2">{{auth()->user()->name}}</h6>
                    <div class="bg-success rounded-circle" style="width: 8px; height: 8px;"></div>
                </div>
                <div class="d-flex">
                    <button onclick="cancelSubscription()" type="button" class="btn btn-danger d-none d-sm-inline-flex px-2 px-sm-3 ms-1">
                        <i class="bx bx-trash-alt fs-xl me-xl-2"></i>
                        <span class=" d-xl-inline">Cancel Subscription</span>
                    </button>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card text-center">
                        <div class="card-header">Statistics</div>
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer fs-sm text-muted">3 days ago</div>
                    </div>

                    <div class="tab-content pt-1">
                        <div class="tab-pane fade show active" id="preview11" role="tabpanel">
                            <div class="row g-4" style="max-width: 58rem;">
                                <div class="col-sm-6">
                                    <div class="card text-white bg-primary">
                                        <div class="card-header border-light">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Primary card title</h5>
                                            <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card bg-secondary">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Secondary card title</h5>
                                            <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card text-white bg-success">
                                        <div class="card-header border-light">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Success card title</h5>
                                            <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card text-white bg-danger">
                                        <div class="card-header border-light">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Danger card title</h5>
                                            <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card text-white bg-warning">
                                        <div class="card-header border-light">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Warning card title</h5>
                                            <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card text-white bg-info">
                                        <div class="card-header border-light">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Info card title</h5>
                                            <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card text-white bg-dark">
                                        <div class="card-header border-light">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Dark card title</h5>
                                            <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card text-white bg-gradient-primary">
                                        <div class="card-header border-light">Header</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Gradient card title</h5>
                                            <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    @endif

    <script>

        function submitForm(type) {

            let subType = document.getElementById('pricing');

            //team, company, enterprise;
            let packageType = {"team": 0, "company": 1, "enterprise": 2};

            //sub is either monthly or annual;
            let annualSub = [12, 20, 40];
            let monthlySub = [15, 25, 50];
            let pricing = monthlySub[packageType[type.toLowerCase()]];
            let subscription = "monthly";
            if (subType.checked) {
                pricing = annualSub[packageType[type.toLowerCase()]];
                subscription = "annual";
            }
            document.querySelector('#amount').value = pricing;
            document.querySelector('#subscription_type').value = subscription;
            const element = document.getElementById("dropin-container");
            //check if it exist first then remove;
            if (typeof(element) != 'undefined' && element != null)
            {
                element.remove();
            }

            // Create element:
            //     <div id="dropin-container"></div>
            const para = document.createElement("div");
            // Create a style attribute:
            const att = document.createAttribute("id");
            // Set the value of the style attribute:
            att.value = "dropin-container";
            para.setAttributeNode(att);
            let nonce = document.getElementById('payForm');
            nonce.insertBefore(para,nonce.children[1]);
            console.log(document.getElementById('dropin-container'));

            swal({
                title: "Connecting to Payment Gateway",
                text: "Please wait!",
                icon: "info",
                buttons: false,
                closeOnClickOutside: false,
            }).then(

                //generate token
                axios.post('/generatetoken')
                    .then(function (response) {
                        result = response.data;
                        braintree.dropin.create({
                            authorization: result.token,
                            selector: '#dropin-container',
                        }, function (err, instance) {
                            if (err) {
                                console.log('Request Payment Method Error', err);
                                return;
                            }
                            instance.requestPaymentMethod(function (err, payload) {
                                // Submit payload.nonce to your server
                                document.querySelector('#nonce').value = "fake-valid-nonce";
                                document.getElementById('openPaymentForm').click();
                                swal.close();

                            });
                        });
                    })
                    .catch(function (error) {
                        console.log(error);
                        swal.close();

                    })
            );
            swal.close();


        }

        function processPayment() {
            swal({
                title: "Processing Payment",
                text: "Please wait!",
                icon: "info",
                buttons: false,
                closeOnClickOutside: false,
                closeOnEsc: false,
            });
            document.getElementById('payForm').submit();

        }


        function cancelSubscription() {
            swal({
                title: "Are You Sure You want to Cancel Subscription,These Action Cannot be Reversed!",
                icon: "info",
                buttons: true,
                closeOnClickOutside: false,
                closeOnEsc: false,
            })
                .then((value) =>{
                console.log(value);
                if (value){
                    swal({
                        title: "Canceling Subscription",
                        text: "Please wait!",
                        icon: "info",
                        buttons: false,
                        closeOnClickOutside: false,
                    }).then(

                        //generate token
                        axios.post('/subscription/cancel')
                            .then(function (response) {
                                result = response.data;
                                swal({
                                    title: "Subscription Cancelled!",
                                    icon: "success",
                                    closeOnClickOutside: false,
                                    closeOnEsc: false,
                                }).then((value) => {
                                    if (value){
                                        location.reload();
                                    }
                                });
                            })
                            .catch(function (error) {
                                console.log(error);
                                swal.close();

                            })
                    );

                }
            })

        }
    </script>


@endsection
