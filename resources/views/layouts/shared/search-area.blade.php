{{-- <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <div class="search-wrap-1 ftco-animate p-4">
                            <form action="{{ route('search-property') }}" class="search-property-1">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 align-items-end">
                                <div class="form-group">
                                    <label for="#">Keyword</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="fa fa-search"></span></div>
                                        <input type="text" name="keyword" class="form-control" placeholder="Enter Keyword">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 align-items-end">
                                <div class="form-group">
                                    <label for="#">Property Type</label>
                                    <div class="form-field">
                                      <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="list_type"  class="form-control">
                                          <option value="building">Residence</option>
                                          <option value="land">Land</option>
                                        </select>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 align-items-end">
                                <div class="form-group">
                                    <label for="#">City</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="fa fa-search"></span></div>
                                        <input type="text" name="city" class="form-control" placeholder="E.g Port harcourt">
                                  </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 align-items-end">
                                <div class="form-group">
                                    <label for="#">Location</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="fa fa-search"></span></div>
                                        <input type="text" class="form-control" name="locality" placeholder="Location">
                                  </div>
                              </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 align-items-end">
                                <div class="form-group">
                                    <label for="#">Min Price</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="min_price"  class="form-control">
                                          <option value="100000">$100,000</option>
                                          <option value="150000">$150,000</option>
                                          <option value="200000">$200,000</option>
                                          <option value="300000">$300,000</option>
                                          <option value="400000">$400,000</option>
                                          <option value="500000">$500,000</option>
                                          <option value="800000">$800,000</option>
                                          <option value="1000000">$1,000,000</option>
                                          <option value="2000000">$2,000,000</option>
                                          <option value="5000000">$5,000,000</option>
                                          <option value="10000000">$10,000,000</option>
                                          <option value="20000000">$20,000</option>
                                          <option value="50000000">$50,000,000</option>
                                          <option value="100000000">$100,000,000</option>
                                          <option value="200000000">$200,000,000</option>
                                        </select>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 align-items-end">
                                <div class="form-group">
                                    <label for="#">Max Price</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="max_price"  class="form-control">
                                          <option value="100000">$100,000</option>
                                          <option value="150000">$150,000</option>
                                          <option value="200000">$200,000</option>
                                          <option value="300000">$300,000</option>
                                          <option value="400000">$400,000</option>
                                          <option value="500000">$500,000</option>
                                          <option value="800000">$800,000</option>
                                          <option value="1000000">$1,000,000</option>
                                          <option value="2000000">$2,000,000</option>
                                          <option value="5000000">$5,000,000</option>
                                          <option value="10000000">$10,000,000</option>
                                          <option value="20000000">$20,000</option>
                                          <option value="50000000">$50,000,000</option>
                                          <option value="100000000">$100,000,000</option>
                                          <option value="200000000">$200,000,000</option>
                                        </select>
                                      </div>
                                  </div>
                              </div>
                            </div>



                        </div>
                        <div class="row pt-3">


                            <div class="col-lg-3 col-sm-4 col-6 offset-6 offset-sm-8 offset-lg-0 mt-3 mt-lg-0">
                                <div class="form-group">
                                  <div class="form-field">
                                  <input type="submit" value="Search" class="form-control btn btn-primary">
                                  </div>
                              </div>
                            </div>
                        </div>
                    </form>
                </div>
                    </div>
            </div>
        </div> --}}


<div class="container">
    <form action="{{ route('search-property') }}" method="post">
        @csrf

        <div class="row justify-content-center">
            <div class="col-6 peak pt-md-4 pt-lg-3 col-md p-0 m-0 ">
                <div class="row mt-2 mt-lg-0 ">
                    <div class="col-12 ml-3 justify-content-center">
                        <h3 class="text-white text-left pop-reg d-none d-lg-block ">Keyword</h3>
                    </div>
                    <div class="col-12 ml-4 input-group justify-content-cente search-area mb-3 ">
                        <div class="row ">
                            <div class="col-1 p-0 m-0 mr-md-1">
                                <i class="fa fa-search hom text-white"></i>
                            </div>
                            <div class="col-5 col-md-9 p-0 m-0 ">
                                <input type="text" placeholder="Keyword" name="keyword" style="width: 90%!important">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 peak pt-md-4 pt-lg-3 col-md p-0 m-0 ">
                <div class="row mt-2 mt-lg-0 ">
                    <div class="col-12 ml-3 justify-content-center ">
                        <h3 class="text-white text-left pop-reg d-none d-lg-block ">Property Type</h3>
                    </div>
                    <div class="col-12 ml-4 input-group justify-content-cente search-area mb-3 ">
                        <div class="row ">
                            <div class="col-1 p-0 m-0 ">
                                <i class="fa fa-home hom text-white "></i>
                            </div>
                            <div class="col-5 col-md-9 p-0 m-0 ml-2 ">
                                <select name="list_type" class="form-control">
                                    <option value="building">Residence</option>
                                    <option value="land">Land</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 peak pt-md-4 pt-lg-3 col-md p-0 m-0 ">
                <div class="row mt-2 mt-lg-0 ">
                    <div class="col-12 ml-3 justify-content-center ">
                        <h3 class="text-white text-left pop-reg d-none d-lg-block ">Location</h3>
                    </div>
                    <div class="col-12 ml-4 input-group justify-content-cente search-area mb-3 ">
                        <div class="row ">
                            <div class="col-1 p-0 m-0 ">
                                <i class="fa fa-map-marker-alt hom text-white "></i>
                            </div>
                            <div class="col-5 col-md-9 p-0 m-0 ml-2">
                                <input type="text" class="form-control" name="locality" placeholder="Location">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-6 peak pt-md-4 pt-lg-3 col-md p-0 m-0 ">
                <div class="row mt-2 mt-lg-0 ">
                    <div class="col-12 ml-3 justify-content-center ">
                        <h3 class="text-white text-left pop-reg d-none d-lg-block ">Price Limit</h3>
                    </div>
                    <div class="col-12 ml-4 input-group justify-content-cente search-area mb-3 ">
                        <div class="row ">
                            <div class="col-1 p-0 m-0 ">
                                <i class="fa fa-coins hom text-white "></i>
                            </div>
                            <div class="col-5 col-md-9 p-0 m-0 ml-2">
                                <select name="min_price" class="form-control">
                                    <option value="100000">$100,000</option>
                                    <option value="150000">$150,000</option>
                                    <option value="200000">$200,000</option>
                                    <option value="300000">$300,000</option>
                                    <option value="400000">$400,000</option>
                                    <option value="500000">$500,000</option>
                                    <option value="800000">$800,000</option>
                                    <option value="1000000">$1,000,000</option>
                                    <option value="2000000">$2,000,000</option>
                                    <option value="5000000">$5,000,000</option>
                                    <option value="10000000">$10,000,000</option>
                                    <option value="20000000">$20,000</option>
                                    <option value="50000000">$50,000,000</option>
                                    <option value="100000000">$100,000,000</option>
                                    <option value="200000000">$200,000,000</option>
                                </select>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-12 col-md-2 leak pt-md-4 pt-lg-3 p-0 m-0 pb-3 text-left pr-md-2">
                <button class="input-group-text low-1 ml-2" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>
