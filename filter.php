<div class="modal fade" id="filters" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filters</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body p-0">
                    <div class="osahan-filter">
                        <div class="filter">
                            <!-- SORT BY -->
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">SORT BY</h6>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio1" name="location" class="custom-control-input" checked>
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio1">Top Rated</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio2" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio2">Nearest Me</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio3" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio3">Cost High to Low</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio4" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio4">Cost Low to High</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio5" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio5">Most Popular</label>
                            </div>
                            <!-- Filter -->
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">FILTER</h6>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultCheck1" checked>
                                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck1">Open Now</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultCheck2">
                                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck2">Credit Cards</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultCheck3">
                                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck3">Alcohol Served</label>
                            </div>
                            <!-- Filter -->
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">ADDITIONAL FILTERS</h6>
                            </div>
                            <div class="px-3 pt-3">
                                <input type="range" class="custom-range" min="0" max="100" name="minmax">
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label>Min</label>
                                        <input class="form-control" placeholder="₹0" type="number">
                                    </div>
                                    <div class="form-group text-right col-6">
                                        <label>Max</label>
                                        <input class="form-control" placeholder="₹1,0000" type="number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <a href="#" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</a>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <a href="most_popular.php" class="btn btn-primary btn-lg btn-block">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>