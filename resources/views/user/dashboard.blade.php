@extends('layouts.user')
@section('content')
    <section>
        <div class="container d-flex justify-content-center">
            <div class="row col-12  pt-3">

                <!--CARD ONE-->
                <div class="col-md-4 py-1 pb-4">
                    <div class="card border-0 shadow-sm card-stop">
                        <div class="card-body">
                            <div class="row my-1 d-flex justify-content-center">
                                <div class="col-auto">
                                    <div class="Circular--icon shadow-sm">
                                        <i class="d-flex align-items-center justify-content-center fas fa-home"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="Schchat-Ubuntu1 myFonts--size mt-2">
                                        Uploaded Properties
                                    </div>
                                    <div class="col-12">
                                        <span class="badge badge-danger  mot mb-2 ">Total:
                                            {{ Auth::user()->property->count() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer Schchat-card-footer py-3">
                            <div class="d-flex justify-content-center">
                                <button class="btn myBtn-block Schchat-Secondary">
                                    <i class="bi bi-box-arrow-right pr-2 text-white"></i>view
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CARD ONE-->

                <!--CARD TWO-->
                <div class="col-md-4 py-1 pb-4">
                    <div class="card border-0 shadow-sm card-stop">
                        <div class="card-body">
                            <div class="row my-1 d-flex justify-content-center">
                                <div class="col-auto">
                                    <div class="Circular--icon shadow-sm">
                                        <i
                                            class="d-flex align-items-center text-center justify-content-center fas fa-home"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="Schchat-Ubuntu1 myFonts--size mt-2">
                                        Purchased Properties
                                    </div>
                                    <div class="col-12">
                                        <span class="badge badge-danger mb-2 mot ">Total:
                                            {{ Auth::user()->purchased->count() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer Schchat-card-footer py-3">
                            <div class="d-flex justify-content-center">
                                <button class="btn myBtn-block Schchat-Secondary">
                                    <i class="bi bi-box-arrow-right pr-2 text-white"></i>view
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CARD TWO-->

                <!--CARD THREE-->
                <div class="col-md-4 py-1 pb-4">
                    <div class="card border-0 shadow-sm card-stop">
                        <div class="card-body">
                            <div class="row my-1 d-flex justify-content-center">
                                <div class="col-auto">
                                    <div class="Circular--icon shadow-sm">
                                        <i
                                            class="d-flex align-items-center text-center justify-content-center fas fa-user pr-2 h5"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="Schchat-Ubuntu1 myFonts--size mt-2">
                                        My Interest
                                    </div>
                                    <div class="col-12">
                                        <span class="badge badge-danger mb-2 mot ">Total:
                                            {{ Auth::user()->interests->count() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer Schchat-card-footer py-3">
                            <div class="d-flex justify-content-center">
                                <button class="btn myBtn-block Schchat-Secondary">
                                    <i class="bi bi-box-arrow-right pr-2 text-white"></i>view
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CARD THREE-->
            </div>
        </div>
    </section>


@endsection
