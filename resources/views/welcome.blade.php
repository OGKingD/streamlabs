<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends("layouts.app")

<!-- Body -->

@section('content')




        <!-- Hero section with layer parallax gfx -->
        <section class="position-relative overflow-hidden py-4 mb-3">
            <div class="container pt-lg-3">
                <div class="row flex-lg-nowrap">
                    <div class="col-lg-6 col-xl-5 text-center text-lg-start pt-5 mt-xl-4">
                        <h1 class="display-4 pt-5 pb-2 pb-lg-3 mt-sm-2 mt-lg-5">Task Management Assistant You Gonna Love</h1>
                        <p class="fs-lg mb-4 mb-lg-5">We offer you a new generation of task management system. Plan, manage & track all your tasks in one flexible tool.</p>
                        <a href="#" class="btn btn-primary btn-lg">Get started for free</a>
                        <div class="pt-5 mt-xl-5">
                            <h6 class="pt-xl-3 pb-3 pb-lg-4">Largest companies use our tool to work efficiently</h6>
                            <div class="d-flex justify-content-center justify-content-lg-start mx-xl-n2">
                                <a href="#" class="d-block me-2">
                                    <img src="assets/img/brands/07.svg" width="135" alt="Logo">
                                </a>
                                <a href="#" class="d-block me-2">
                                    <img src="assets/img/brands/04.svg" width="135" alt="Logo">
                                </a>
                                <a href="#" class="d-block me-2">
                                    <img src="assets/img/brands/02.svg" width="135" alt="Logo">
                                </a>
                                <a href="#" class="d-block me-2">
                                    <img src="assets/img/brands/05.svg" width="135" alt="Logo">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Layer parallax -->
                    <div class="parallax mt-4 ms-4 me-lg-0 ms-lg-n5 ms-xl-n3 mt-lg-n4">
                        <div class="parallax-layer" data-depth="0.1">
                            <img src="assets/img/landing/saas-1/hero/layer01.png" width="1416" alt="Layer">
                        </div>
                        <div class="parallax-layer zindex-2" data-depth="0.15">
                            <img src="assets/img/landing/saas-1/hero/layer02.png" alt="Layer">
                        </div>
                        <div class="parallax-layer zindex-2" data-depth="0.35">
                            <img src="assets/img/landing/saas-1/hero/layer03.png" alt="Layer">
                        </div>
                        <div class="parallax-layer zindex-2" data-depth="0.25">
                            <img src="assets/img/landing/saas-1/hero/layer04.png" alt="Layer">
                        </div>
                        <div class="parallax-layer zindex-2" data-depth="0.4">
                            <img src="assets/img/landing/saas-1/hero/layer05.png" alt="Layer">
                        </div>
                        <div class="parallax-layer zindex-2" data-depth="0.28">
                            <img src="assets/img/landing/saas-1/hero/layer06.png" alt="Layer">
                        </div>
                        <div class="parallax-layer zindex-2" data-depth="0.35">
                            <img src="assets/img/landing/saas-1/hero/layer07.png" alt="Layer">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Features (Icon + Text) -->
        <section class="container">
            <h2 class="h1 text-center pb-4 pb-lg-5">Stay Organized &amp; Connected</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
                    <div class="d-inline-block bg-secondary rounded-circle p-3 mb-4">
                        <img src="assets/img/landing/saas-1/features/chat.svg" width="32" alt="Icon">
                    </div>
                    <h3 class="h5 pb-1 mb-2">Task Comments</h3>
                    <p class="fs-sm">Id mollis consectetur congue egestas egestas suspendisse blandit justo.</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
                    <div class="d-inline-block bg-secondary rounded-circle p-3 mb-4">
                        <img src="assets/img/landing/saas-1/features/analytics.svg" width="32" alt="Icon">
                    </div>
                    <h3 class="h5 pb-1 mb-2">Tasks Analytics</h3>
                    <p class="fs-sm">Augue pulvinar justo, fermentum fames aliquamant accumsan vestibulum.</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
                    <div class="d-inline-block bg-secondary rounded-circle p-3 mb-4">
                        <img src="assets/img/landing/saas-1/features/bell.svg" width="32" alt="Icon">
                    </div>
                    <h3 class="h5 pb-1 mb-2">Notifications</h3>
                    <p class="fs-sm">Mattis urna ultricies non amet, purus in auctor non. Odio vulputate ac nibh.</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
                    <div class="d-inline-block bg-secondary rounded-circle p-3 mb-4">
                        <img src="assets/img/landing/saas-1/features/tasks.svg" width="32" alt="Icon">
                    </div>
                    <h3 class="h5 pb-1 mb-2">Sections &amp; Subtasks</h3>
                    <p class="fs-sm">A elementum, imperdiet enim, pretium etiam facilisi in aenean quam mauris.</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
                    <div class="d-inline-block bg-secondary rounded-circle p-3 mb-4">
                        <img src="assets/img/landing/saas-1/features/calendar.svg" width="32" alt="Icon">
                    </div>
                    <h3 class="h5 pb-1 mb-2">Progress Tracking</h3>
                    <p class="fs-sm">Sit facilisis dolor arcu, fermentum vestibulum arcu elementum imperdiet eleifend.</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
                    <div class="d-inline-block bg-secondary rounded-circle p-3 mb-4">
                        <img src="assets/img/landing/saas-1/features/add-group.svg" width="32" alt="Icon">
                    </div>
                    <h3 class="h5 pb-1 mb-2">Multiple Assignees</h3>
                    <p class="fs-sm">Faucibus cursus maecenas lorem cursus nibh. Sociis sit risus id. Sit facilisis dolor arcu.</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
                    <div class="d-inline-block bg-secondary rounded-circle p-3 mb-4">
                        <img src="assets/img/landing/saas-1/features/headset.svg" width="32" alt="Icon">
                    </div>
                    <h3 class="h5 pb-1 mb-2">Support 24/7</h3>
                    <p class="fs-sm">Sapien sed massa sit erat pellentesque pellentesque nisl, elementum.</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
                    <div class="d-inline-block bg-secondary rounded-circle p-3 mb-4">
                        <img src="assets/img/landing/saas-1/features/shield.svg" width="32" alt="Icon">
                    </div>
                    <h3 class="h5 pb-1 mb-2">Data Security</h3>
                    <p class="fs-sm">Aliquet felis facilisi sem nunc. Sapien fermentum, fringilla molestie lorem nec.</p>
                </div>
            </div>
        </section>


        <!-- Dashboard -->
        <section class="container pt-3 pt-md-4 pt-lg-5 pb-2 mt-lg-2 mt-xl-4">
            <div class="row align-items-center">
                <div class="rellax col-md-7" data-rellax-percentage="0.5" data-rellax-speed="-0.6" data-disable-parallax-down="lg">
                    <img src="assets/img/landing/saas-1/dashboard.png" class="d-block mx-auto" width="746" alt="Image">
                </div>
                <div class="rellax col-md-5 col-xl-4 offset-xl-1 d-flex d-sm-block flex-column" data-rellax-percentage="0.5" data-rellax-speed="0.8" data-disable-parallax-down="lg">
                    <h2 class="pb-3 pt-2 pt-md-0">Manage Your Work</h2>
                    <ul class="list-unstyled pb-2">
                        <li class="d-flex align-items-center pb-1 mb-2">
                            <i class="bx bx-check-circle text-primary fs-xl me-2"></i>
                            Powerful project management
                        </li>
                        <li class="d-flex align-items-center pb-1 mb-2">
                            <i class="bx bx-check-circle text-primary fs-xl me-2"></i>
                            Transparent work management
                        </li>
                        <li class="d-flex align-items-center pb-1 mb-2">
                            <i class="bx bx-check-circle text-primary fs-xl me-2"></i>
                            Manage work &amp; focus on the most important tasks
                        </li>
                        <li class="d-flex align-items-center pb-1 mb-2">
                            <i class="bx bx-check-circle text-primary fs-xl me-2"></i>
                            Track your progress with interactive charts
                        </li>
                        <li class="d-flex align-items-center pb-1 mb-2">
                            <i class="bx bx-check-circle text-primary fs-xl me-2"></i>
                            Easiest way to track time spent on tasks
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary">
                        Learn more
                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                    </a>
                </div>
            </div>
        </section>


        <!-- Use cases (Tabs) -->
        <section class="container pt-5 pb-2 mt-3 mt-sm-4 mt-xl-5">
            <h2 class="h1 text-center pb-3 pb-lg-4">One Tool — Endless Use Cases</h2>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs flex-nowrap justify-content-lg-center overflow-auto pb-2 mb-3 mb-lg-4" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-nowrap active" id="project-management-tab" data-bs-toggle="tab" data-bs-target="#project-management" type="button" role="tab" aria-controls="project-management" aria-selected="true">
                        <i class="bx bx-star fs-lg opacity-60 me-2"></i>
                        Project Management
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-nowrap" id="remote-work-tab" data-bs-toggle="tab" data-bs-target="#remote-work" type="button" role="tab" aria-controls="remote-work" aria-selected="false">
                        <i class="bx bx-briefcase-alt-2 fs-lg opacity-60 me-2"></i>
                        Remote Work
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-nowrap" id="product-release-tab" data-bs-toggle="tab" data-bs-target="#product-release" type="button" role="tab" aria-controls="product-release" aria-selected="false">
                        <i class="bx bx-rocket fs-lg opacity-60 me-2"></i>
                        Product Release
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-nowrap" id="campaign-planning-tab" data-bs-toggle="tab" data-bs-target="#campaign-planning" type="button" role="tab" aria-controls="campaign-planning" aria-selected="false">
                        <i class="bx bx-bar-chart-alt-2 fs-lg opacity-60 me-2"></i>
                        Campaign Planning
                    </button>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content bg-secondary rounded-3 py-4">

                <!-- Project Management -->
                <div class="tab-pane fade show active" id="project-management" role="tabpanel" aria-labelledby="project-management-tab">
                    <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
                        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                            <h3 class="mb-lg-4">Project management</h3>
                            <p>Vestibulum nunc lectus auctor quis. Natoque lectus tortor lacus, eu. Nunc feugiat nisl maecenas nulla hac morbi. Vitae, donec facilisis sed nunc netus. Venenatis posuere faucibus enim est. Vel dignissim morbi blandit morbi tellus. Arcu ullamcorper quis enim.</p>
                        </div>
                        <div class="col-lg-6 col-md-7 mt-md-4">
                            <img src="assets/img/landing/saas-1/use-cases/01.png" class="d-block my-lg-2 mx-auto me-md-0" width="595" alt="Image">
                        </div>
                    </div>
                </div>

                <!-- Remote Work -->
                <div class="tab-pane fade" id="remote-work" role="tabpanel" aria-labelledby="remote-work-tab">
                    <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
                        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                            <h3 class="mb-lg-4">Remote work</h3>
                            <p>Ut ornare quisque blandit condimentum nec viverra habitant non. Consequat id leo bibendum enim, fringilla pulvinar volutpat fames. Ut fames ut sed lobortis nulla. In dui enim et pharetra gravida diam semper lectus tellus. Faucibus mi convallis.</p>
                        </div>
                        <div class="col-lg-6 col-md-7 mt-md-4">
                            <img src="assets/img/landing/saas-1/use-cases/02.png" class="d-block my-lg-2 mx-auto me-md-0" width="502" alt="Image">
                        </div>
                    </div>
                </div>

                <!-- Product Release -->
                <div class="tab-pane fade" id="product-release" role="tabpanel" aria-labelledby="product-release-tab">
                    <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 pe-sm-4 pe-md-0 ps-sm-4 ps-lg-0">
                        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                            <h3 class="mb-lg-4">Product release</h3>
                            <p>Fames netus pretium massa lobortis sit metus et. Sit risus odio fermentum hac fames enim, ac, in. Neque lacus, consequat hendrerit potenti in tristique dictum. Tortor nec lorem et venenatis facilisis risus viverra nunc, eu. Eget suscipit vel amet.</p>
                        </div>
                        <div class="col-lg-6 col-md-7 mt-n3 mt-md-1">
                            <img src="assets/img/landing/saas-1/use-cases/03.png" class="d-block mb-lg-2 mx-auto me-md-0" width="525" alt="Image">
                        </div>
                    </div>
                </div>

                <!-- Campaign Planning -->
                <div class="tab-pane fade" id="campaign-planning" role="tabpanel" aria-labelledby="campaign-planning-tab">
                    <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 pe-sm-4 pe-md-0 ps-sm-4 ps-lg-0">
                        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                            <h3 class="mb-lg-4">Campaign planning</h3>
                            <p>Diam bibendum scelerisque vel mauris magna. Iaculis interdum tincidunt eget nibh purus. Aliquet at sit morbi nisi volutpat fermentum scelerisque. Enim tincidunt eros sodales integer sapien. Eu ullamcorper egestas odio nunc faucibus. Sapien eu nunc sed facilisi luctus ac.</p>
                        </div>
                        <div class="col-lg-6 col-md-7 mt-n3 mt-md-1">
                            <img src="assets/img/landing/saas-1/use-cases/04.png" class="d-block mb-lg-2 mx-auto me-md-0" width="545" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Pricing -->
        <section class="container py-5 my-md-2 my-lg-4 my-xl-5">
            <h2 class="h1 text-center pb-3 pb-md-4">Transparent Pricing for You</h2>
            <div class="price-switch-wrapper mb-n2">
                <div class="form-check form-switch price-switch justify-content-center mt-2 mb-4" data-bs-toggle="price">
                    <input type="checkbox" class="form-check-input" id="pricing">
                    <label class="form-check-label" for="pricing">Monthly</label>
                    <label class="form-check-label d-flex align-items-start" for="pricing">Annually <span class="text-danger fs-xs fw-semibold mt-n2 ms-2">-10%</span></label>
                </div>
                <div class="table-responsive-xxl pt-md-3">
                    <div class="row flex-nowrap pb-4">
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                        <div class="flex-shrink-0 bg-secondary rounded-3">
                                            <img src="assets/img/landing/saas-1/pricing/basic.png" width="84" alt="Icon">
                                        </div>
                                        <div class="ps-4">
                                            <h3 class="fs-lg fw-normal text-body mb-2">Basic</h3>
                                            <h4 class="h3 lh-1 mb-0">
                                                <span data-monthly-price>$6.00</span>
                                                <span class="d-none" data-annual-price>$5.40</span>
                                                <span class="text-body fs-sm fw-normal"> / per month</span>
                                            </h4>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-primary me-1"></i>
                                            Aenean neque tortor, purus faucibus
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-primary me-1"></i>
                                            Nullam augue vitae et volutpat sagittis
                                        </li>
                                        <li class="d-flex text-muted mb-2">
                                            <i class="bx bx-x fs-xl me-1"></i>
                                            Mauris massa penatibus enim elit quam
                                        </li>
                                        <li class="d-flex text-muted mb-2">
                                            <i class="bx bx-x fs-xl me-1"></i>
                                            Nec ac sagittis nunc bibendum
                                        </li>
                                        <li class="d-flex text-muted">
                                            <i class="bx bx-x fs-xl me-1"></i>
                                            Odio ut orci volutpat ultricies eleifend
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-0 pt-0 pb-4">
                                    <a href="#" class="btn btn-outline-primary w-100">Start free trial</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0 bg-primary shadow-primary shadow-dark-mode-none p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                        <div class="flex-shrink-0 rounded-3" style="background-color: rgba(255,255,255, .1);">
                                            <img src="assets/img/landing/saas-1/pricing/standard.png" width="84" alt="Icon">
                                        </div>
                                        <div class="ps-4">
                                            <h3 class="fs-lg fw-normal text-light opacity-70 mb-2">Standard</h3>
                                            <h4 class="h3 text-light lh-1 mb-0">
                                                <span data-monthly-price>$12.00</span>
                                                <span class="d-none" data-annual-price>$10.80</span>
                                                <span class="fs-sm fw-normal opacity-70"> / per month</span>
                                            </h4>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                        <li class="d-flex text-light mb-2">
                                            <i class="bx bx-check fs-xl me-1"></i>
                                            <span class="opacity-70">Aenean neque tortor, purus faucibus</span>
                                        </li>
                                        <li class="d-flex text-light mb-2">
                                            <i class="bx bx-check fs-xl me-1"></i>
                                            <span class="opacity-70">Nullam augue vitae et volutpat sagittis</span>
                                        </li>
                                        <li class="d-flex text-light mb-2">
                                            <i class="bx bx-check fs-xl me-1"></i>
                                            <span class="opacity-70">Mauris massa penatibus enim elit quam</span>
                                        </li>
                                        <li class="d-flex text-light mb-2">
                                            <i class="bx bx-check fs-xl me-1"></i>
                                            <span class="opacity-70">Nec ac sagittis nunc bibendum</span>
                                        </li>
                                        <li class="d-flex text-light opacity-50">
                                            <i class="bx bx-x fs-xl me-1"></i>
                                            Odio ut orci volutpat ultricies eleifend
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-0 pt-0 pb-4">
                                    <a href="#" class="btn btn-light w-100">Start free trial</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                        <div class="flex-shrink-0 bg-secondary rounded-3">
                                            <img src="assets/img/landing/saas-1/pricing/ultimate.png" width="84" alt="Icon">
                                        </div>
                                        <div class="ps-4">
                                            <h3 class="fs-lg fw-normal text-body mb-2">Ultimate</h3>
                                            <h4 class="h3 lh-1 mb-0">
                                                <span data-monthly-price>$18.00</span>
                                                <span class="d-none" data-annual-price>$16.20</span>
                                                <span class="text-body fs-sm fw-normal"> / per month</span>
                                            </h4>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-primary me-1"></i>
                                            Aenean neque tortor, purus faucibus
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-primary me-1"></i>
                                            Nullam augue vitae et volutpat sagittis
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-primary me-1"></i>
                                            Mauris massa penatibus enim elit quam
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-primary me-1"></i>
                                            Nec ac sagittis nunc bibendum
                                        </li>
                                        <li class="d-flex">
                                            <i class="bx bx-check fs-xl text-primary me-1"></i>
                                            Odio ut orci volutpat ultricies eleifend
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-0 pt-0 pb-4">
                                    <a href="#" class="btn btn-outline-primary w-100">Start free trial</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonials -->
        <section class="bg-secondary py-5">
            <div class="container py-2 py-md-3 py-lg-4 py-xl-5">
                <div class="row row-cols-1 row-cols-md-2 gx-3 gx-lg-4">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="card border-0 bg-dark h-100 p-xl-4">
                            <div class="card-body">
                                <h2 class="display-1 text-light">420k</h2>
                                <p class="lead fw-medium text-light"><span class="opacity-70">users are taking advantage of our</span> <span class="fw-bold">Task Manager Tool</span><span class="opacity-70">. It’s a new transparent and efficient way to organize all of your daily tasks.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm p-4 p-xxl-5">
                            <div class="d-flex justify-content-between pb-4 mb-2">
                  <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none">
                    <i class="bx bxs-quote-left"></i>
                  </span>
                                <div class="d-flex">
                                    <button type="button" id="testimonials-prev" class="btn btn-prev btn-icon btn-sm me-2">
                                        <i class="bx bx-chevron-left"></i>
                                    </button>
                                    <button type="button" id="testimonials-next" class="btn btn-next btn-icon btn-sm ms-2">
                                        <i class="bx bx-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Slider -->
                            <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
                  "spaceBetween": 24,
                  "loop": true,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                  },
                  "navigation": {
                    "prevEl": "#testimonials-prev",
                    "nextEl": "#testimonials-next"
                  }
                }'>
                                <div class="swiper-wrapper">

                                    <!-- Item -->
                                    <div class="swiper-slide h-auto">
                                        <figure class="card h-100 position-relative border-0 bg-transparent">
                                            <blockquote class="card-body p-0 mb-0">
                                                <p class="fs-lg mb-0">Mi semper risus ultricies orci pulvinar in at enim orci. Quis facilisis nunc pellentesque in ullamcorper sit. Lorem blandit arcu sapien, senectus libero, amet dapibus cursus quam. Eget pellentesque eu purus volutpat adipiscing malesuada.</p>
                                            </blockquote>
                                            <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                                                <img src="assets/img/avatar/14.jpg" width="60" class="rounded-circle" alt="Annette Black">
                                                <div class="ps-3">
                                                    <h6 class="fw-semibold lh-base mb-0">Annette Black</h6>
                                                    <span class="fs-sm text-muted">Strategic Advisor at Company LLC</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <!-- Item -->
                                    <div class="swiper-slide h-auto">
                                        <figure class="card h-100 position-relative border-0 bg-transparent">
                                            <blockquote class="card-body p-0 mb-0">
                                                <p class="fs-lg mb-0">Vestibulum nunc lectus auctor quis. Natoque lectus tortor lacus, eu. Nunc feugiat nisl maecenas nulla hac morbi. Vitae, donec facilisis sed nunc netus. Venenatis posuere faucibus enim est. Vel dignissim morbi blandit morbi tellus.</p>
                                            </blockquote>
                                            <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                                                <img src="assets/img/avatar/13.jpg" width="60" class="rounded-circle" alt="Ralph Edwards">
                                                <div class="ps-3">
                                                    <h6 class="fw-semibold lh-base mb-0">Ralph Edwards</h6>
                                                    <span class="fs-sm text-muted">Head of Marketing at Lorem Ltd. </span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <!-- Item -->
                                    <div class="swiper-slide h-auto">
                                        <figure class="card h-100 position-relative border-0 bg-transparent">
                                            <blockquote class="card-body p-0 mb-0">
                                                <p class="fs-lg mb-0">Ac at sed sit senectus massa. Massa ante amet ultrices magna porta tempor. Aliquet diam in et magna ultricies mi at. Lectus enim, vel enim egestas nam pellentesque et leo. Elit mi faucibus laoreet aliquam pellentesque sed aliquet integer massa.</p>
                                            </blockquote>
                                            <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                                                <img src="assets/img/avatar/11.jpg" width="60" class="rounded-circle" alt="Darrell Steward">
                                                <div class="ps-3">
                                                    <h6 class="fw-semibold lh-base mb-0">Darrell Steward</h6>
                                                    <span class="fs-sm text-muted">Project Manager at Ipsum Ltd.</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Pagination (bullets) -->
                                <div class="swiper-pagination position-relative mt-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Integrations -->
        <section class="container py-5 my-md-2 my-lg-4 my-xl-5">
            <div class="row justify-content-center pt-1 pb-1 mb-2 mb-md-3 mb-lg-4">
                <div class="col-lg-8 col-md-9 text-center">
                    <h2 class="h1 mb-4">Integrate Top Work Tools</h2>
                    <p class="fs-lg text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin volutpat mollis egestas. Nam luctus facilisis ultrices. Pellentesque volutpat ligula est. Mattis fermentum, at nec lacus.</p>
                </div>
            </div>
            <div class="swiper swiper-nav-onhover mx-n2" data-swiper-options='{
          "slidesPerView": 2,
          "spaceBetween": 8,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3
            },
            "600": {
              "slidesPerView": 4
            },
            "768": {
              "slidesPerView": 5
            },
            "850": {
              "slidesPerView": 6
            },
            "1000": {
              "slidesPerView": 7
            },
            "1200": {
              "slidesPerView": 8
            }
          }
        }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
                            <div class="card-body">
                                <img src="assets/img/brands/google.svg" class="d-block mx-auto" alt="Google">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
                            <div class="card-body">
                                <img src="assets/img/brands/zoom.svg" class="d-block mx-auto" alt="Zoom">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
                            <div class="card-body">
                                <img src="assets/img/brands/slack.svg" class="d-block mx-auto" alt="Slack">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
                            <div class="card-body">
                                <img src="assets/img/brands/gmail.svg" class="d-block mx-auto" alt="Gmail">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
                            <div class="card-body">
                                <img src="assets/img/brands/trello.svg" class="d-block mx-auto" alt="Trello">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
                            <div class="card-body">
                                <img src="assets/img/brands/mailchimp.svg" class="d-block mx-auto" alt="Mailchimp">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
                            <div class="card-body">
                                <img src="assets/img/brands/dropbox.svg" class="d-block mx-auto" alt="Dropbox">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
                            <div class="card-body">
                                <img src="assets/img/brands/evernote.svg" class="d-block mx-auto" alt="Evernote">
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative pt-3 mt-4"></div>
            </div>
            <div class="text-center my-3 mt-xl-n2">
                <a href="#" class="btn btn-primary">View all integrations</a>
            </div>
        </section>


        <!-- Sign up CTA -->
        <section class="container">
            <div class="bg-dark border border-light rounded-3 py-5 px-4 px-sm-0">
                <div class="row justify-content-center py-sm-2 py-lg-5">
                    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 text-center">
                        <h2 class="h1 text-light mb-4">Ready to Get Started?</h2>
                        <p class="fs-lg text-light opacity-70 pb-4 mb-3">Organize your tasks with a 14-day free trial</p>

                        <!-- Desktop form -->
                        <form class="input-group input-group-lg d-none d-sm-flex needs-validation mb-3" novalidate>
                            <input type="email" class="form-control rounded-start ps-5" placeholder="Your email" required>
                            <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                            <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email address.</div>
                            <button type="submit" class="btn btn-primary">Get started for free</button>
                        </form>

                        <!-- Mobile form -->
                        <form class="needs-validation d-sm-none mb-3" novalidate>
                            <div class="position-relative mb-3">
                                <input type="email" class="form-control form-control-lg rounded-start ps-5" placeholder="Your email" required>
                                <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                                <div class="invalid-tooltip position-absolute top-0 start-0 mt-n4">Please provide a valid email address.</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Get started for free</button>
                        </form>
                        <p class="fs-sm text-light opacity-50 mb-0">No subscriptions. No annual fees. No lock-ins.</p>
                    </div>
                </div>
            </div>
        </section>




@endsection
