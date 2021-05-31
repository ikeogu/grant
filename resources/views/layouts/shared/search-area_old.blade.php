<div class="container">
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
                                <input type="text" name="search" class="form-control" placeholder="Enter Keyword">
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
                            <label for="#">Location</label>
                            <div class="form-field">
                                <div class="icon"><span class="fa fa-search"></span></div>
                                <input type="text" class="form-control" name="locality" placeholder="Location">
                          </div>
                      </div>
                    </div>

                    
                   
                
                    <div class="col-lg-4 col-sm-6 align-items-end">
                        <div class="form-group">
                            <label for="#">Offer type</label>
                            <div class="form-field">
                              <div class="select-wrap">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select name="offer_type"  class="form-control">
                                  <option value="rent">Rent</option>
                                  <option value="sale">Sale</option>
                                </select>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 align-items-end">
                        <div class="form-group">
                            <label for="#">No. of Bed Rooms</label>
                            <div class="form-field">
                              <div class="select-wrap">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select name="bed"  class="form-control">
                                  <option selected disabled>Select no. of bed rooms</option>
                                  @foreach($beds as $bed)
                                    <option value="{{ $bed->beds }}">{{ $bed->beds }}</option>
                                    @endforeach
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
                    
                     
                    
                </div>
                <div class="row pt-3">
                   <div class="col-lg-4 col-sm-6 align-items-end">
                        <div class="form-group">
                            <label for="#">House Type (ignore if not applicable)</label>
                            <div class="form-field">
                              <div class="select-wrap">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select name="house_type"  class="form-control">
                                  <option selected disabled>Select House Type</option>
                                  @foreach($ptypes as $ptype)
                                    <option value="{{ $ptype->house_type }}">{{ ucfirst($ptype->house_type) }}</option>
                                  @endforeach
                                </select>
                              </div>
                          </div>
                      </div>
                    </div>
                  <div class="col-lg-4 col-sm-6 align-items-end">
                        <div class="form-group">
                            <label for="#">Price Limit</label>
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
</div>