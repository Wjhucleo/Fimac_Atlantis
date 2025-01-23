<title>Fimac Atlantis - Residences </title>
@include('header2')

 <!--============== Page title Start ==============-->
 <div class="full-row py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-secondary">Residences  </h3>
                
            </div>
        </div>
    </div>
</div>
<!--============== Page title End ==============-->

<!--============== Property Grid View Start ==============-->
<div class="full-row pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="listing-sidebar">
                    <div class="widget advance_search_widget">
                        <h5 class="mb-30">Rechercher un appartement </h5>
                        <form class="rounded quick-search form-icon-right" action="#" method="post">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control" name="keyword" placeholder="Enter Keyword...">
                                </div>
                                <div class="col-12">
                                    <select class="form-control">
                                        <option>Type d'appartements </option>
                                        <option>House</option>
                                        <option>Office</option>
                                        <option>Appartment</option>
                                        <option>Condos</option>
                                        <option>Villa</option>
                                        <option>Small Family</option>
                                        <option>Single Room</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select class="form-control">
                                        <option>Property Status</option>
                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="location" placeholder="Location">
                                        <i class="flaticon-placeholder flat-mini icon-font y-center text-dark"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="position-relative">
                                        <button class="form-control price-toggle toggle-btn" data-target="#data-range-price">Price <i class="fas fa-angle-down font-mini icon-font y-center text-dark"></i></button>
                                        <div id="data-range-price" class="price_range price-range-toggle w-100">
                                            <div class="area-filter price-filter">
                                                <span class="price-slider">
                                                    <input class="filter_price" type="text" name="price" value="0;10000000" />
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="form-control">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select class="form-control">
                                        <option>Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select class="form-control">
                                        <option>Garage</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="keyword" placeholder="Min Area">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="keyword" placeholder="Max Area">
                                </div>
                                <div class="col-12">
                                    <div class="position-relative">
                                        <button class="form-control text-start toggle-btn" data-target="#aditional-features">Advanced <i class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i></button>
                                    </div>
                                </div>
                                <div class="col-12 position-relative">
                                    <div id="aditional-features" class="aditional-features visible-static p-5">
                                        <h5 class="mb-3">Aditional Options</h5>
                                        <ul class="row row-cols-1 custom-check-box mb-4">
                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
                                            </li>
                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Garage Facility</label>
                                            </li>
                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">Swiming Pool</label>
                                            </li>
                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">Fire Security</label>
                                            </li>

                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">Fire Place Facility</label>
                                            </li>
                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">Play Ground</label>
                                            </li>
                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">Ferniture Include</label>
                                            </li>
                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8">Marbel Floor</label>
                                            </li>

                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck9">
                                                <label class="custom-control-label" for="customCheck9">Store Room</label>
                                            </li>
                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck10">
                                                <label class="custom-control-label" for="customCheck10">Hight Class Door</label>
                                            </li>
                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">Floor Heating System</label>
                                            </li>
                                            <li class="col">
                                                <input type="checkbox" class="custom-control-input hide" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12">Garden Include</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--============== Feature Property Widget Start ==============-->
                    <div class="widget property_carousel_widget">
                        <h5 class="mb-30">Feature Property</h5>
                        <div class="single-carusel owl-carousel nav-disable">
                            <div class="item">
                                <div class="property-grid-2 property-block transation mb-3">
                                    <div class="overflow-hidden position-relative transation thumbnail-img rounded bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Sale</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-5.png" alt="Image Not Found!"></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="post-content py-3">
                                        <div class="post-meta font-small text-uppercase list-color-primary">
                                            <a href="#" class="listing-ctg"><i class="fa-solid fa-building"></i><span>Villa</span></a>
                                        </div>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Gorgeous Villa Bay View</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Tree Frog Lane Overlandpk</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>3</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>2</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                        <span class="listing-price">$12000<small> ( Monthly )</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property-grid-2 property-block transation mb-3">
                                    <div class="overflow-hidden position-relative transation thumbnail-img rounded bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Sale</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-6.png" alt="Image Not Found!"></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="post-content py-3">
                                        <div class="post-meta font-small text-uppercase list-color-primary">
                                            <a href="#" class="listing-ctg"><i class="fa-solid fa-building"></i><span>Appartment</span></a>
                                        </div>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Luxury Condos</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Tree Frog Lane Overlandpk</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>3</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>2</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                        <span class="listing-price">$1205500 <del>$1210000</del><small> ( Price Only )</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property-grid-2 property-block transation mb-3">
                                    <div class="overflow-hidden position-relative transation thumbnail-img rounded bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Rent</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-7.png" alt="Image Not Found!"></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="post-content py-3">
                                        <div class="post-meta font-small text-uppercase list-color-primary">
                                            <a href="#" class="listing-ctg"><i class="fa-solid fa-building"></i><span>Appartment</span></a>
                                        </div>
                                        <h5 class="listing-title"><a href="property-single-v1.html">New Developed Condos</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Tree Frog Lane Overlandpk</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>3</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>2</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                        <span class="listing-price">$17500 <del>$21000</del><small> ( Monthly )</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property-grid-2 property-block transation mb-3">
                                    <div class="overflow-hidden position-relative transation thumbnail-img rounded bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Rent</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-8.png" alt="Image Not Found!"></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="post-content py-3">
                                        <div class="post-meta font-small text-uppercase list-color-primary">
                                            <a href="#" class="listing-ctg"><i class="fa-solid fa-building"></i><span>Condos</span></a>
                                        </div>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Residensial Appartment</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Tree Frog Lane Overlandpk</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>3</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>2</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                        <span class="listing-price">$22000 <del>$26200</del><small> ( Monthly )</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property-grid-2 property-block transation mb-3">
                                    <div class="overflow-hidden position-relative transation thumbnail-img rounded bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Sale</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-5.png" alt="Image Not Found!"></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="post-content py-3">
                                        <div class="post-meta font-small text-uppercase list-color-primary">
                                            <a href="#"><span>Villa</span></a>
                                        </div>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Gorgeous Villa Bay View</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Tree Frog Lane Overlandpk</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>3</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>2</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                        <span class="listing-price">$12000 <del>$15000</del><small> ( Monthly )</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--============== Feature Property Widget End ==============-->

                    <!--============== Recent Property Widget Start ==============-->
                    <div class="widget widget_recent_property">
                        <h5 class="text-secondary mb-4">Recent Property</h5>
                        <ul>
                            <li>
                                <img src="assets/images/thumbnaillist/01.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Nirala Appartment</a></h6>
                                    <span class="listing-price">$3200<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>6500 Sqft</li>

                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/thumbnaillist/02.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Condo House</a></h6>
                                    <span class="listing-price">$11500<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>2200 Sqft</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/thumbnaillist/03.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Luxury Condos</a></h6>
                                    <span class="listing-price">$17000<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>3500 Sqft</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/thumbnaillist/04.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Small Appartment</a></h6>
                                    <span class="listing-price">$5200<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--============== Recent Property Widget End ==============-->
                </div>
            </div>

            <div class="col-xl-8 col-lg-7">
                <div class="row">
                    <div class="col">
                        <div class="woo-filter-bar p-3 d-flex flex-wrap justify-content-between">
                            <div class="d-flex flex-wrap">
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby1">
                                        <option>Any Status</option>
                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                    </select>
                                    <select name="orderby2">
                                        <option>Default</option>
                                        <option>Most Popular</option>
                                        <option>Top Rated</option>
                                        <option>Newest Items</option>
                                        <option>Price low to high</option>
                                        <option>Price hight to low</option>
                                    </select>
                                </form>
                            </div>
                            <div class="d-flex">
                                <span class="woocommerce-ordering-pages me-4 font-fifteen">Showing at 15 result</span>
                                <form class="view-category" method="get">
                                    <button title="List" class="list-view" value="list" name="display" type="submit"><i class="flaticon-grid-1 flat-mini"></i></button>
                                    <button title="Grid" class="grid-view active" value="grid" name="display" type="submit"><i class="flaticon-grid flat-mini"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-xl-2 row-cols-lg-1 row-cols-md-2 row-cols-1 g-4">
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Apartment</span></a>
                                <div class="owl-carousel single-carusel dot-disable nav-between-in">
                                    <div class="item">
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-1.png" alt="Image Not Found!"></a>
                                    </div>
                                    <div class="item">
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-2.png" alt="Image Not Found!"></a>
                                    </div>
                                </div>
                                
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Family House Residense</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Sell</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$345000<small>( Only )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Condo</span></a>
                                <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-2.png" alt="Image Not Found!"></a>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Condos Infront of River</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Sell</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$1221850<small>( Only )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Appartment</span></a>
                                <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-3.png" alt="Image Not Found!"></a>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Florida Sea View Appartment</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$11250<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Appartment</span></a>
                                <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-4.png" alt="Image Not Found!"></a>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">New Yourk City Appartment</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$11250<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Appartment</span></a>
                                <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-4.png" alt="Image Not Found!"></a>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">New Yourk City Appartment</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$11250<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Villa</span></a>
                                <div class="owl-carousel single-carusel dot-disable nav-between-in">
                                    <div class="item">
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-5.png" alt="Image Not Found!"></a>
                                    </div>
                                    <div class="item">
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-4.png" alt="Image Not Found!"></a>
                                    </div>
                                </div>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Small Family House</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>2 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>2 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1500 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$3400<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Appartment</span></a>
                                <div class="owl-carousel single-carusel dot-disable nav-between-in">
                                    <div class="item">
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-6.png" alt="Image Not Found!"></a>
                                    </div>
                                    <div class="item">
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-4.png" alt="Image Not Found!"></a>
                                    </div>
                                </div>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Sweet Living Home</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>2 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>2 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1500 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$5000<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Appartment</span></a>
                                <div class="owl-carousel single-carusel dot-disable nav-between-in">
                                    <div class="item">
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-7.png" alt="Image Not Found!"></a>
                                    </div>
                                    <div class="item">
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-4.png" alt="Image Not Found!"></a>
                                    </div>
                                </div>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Holiday Hill Villa</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>2 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>2 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1500 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$10500<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Condo</span></a>
                                <div class="owl-carousel single-carusel dot-disable nav-between-in">
                                    <div class="item">
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-8.png" alt="Image Not Found!"></a>
                                    </div>
                                    <div class="item">
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-4.png" alt="Image Not Found!"></a>
                                    </div>
                                </div>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">White Single Condo</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>5 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>4 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>2400 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$7500<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Condo</span></a>
                                <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-9.png" alt="Image Not Found!"></a>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Luxury Condos For Rent</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>10 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>7 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>6000 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$17000<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Condo</span></a>
                                <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-9.png" alt="Image Not Found!"></a>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Luxury Condos For Rent</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>10 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>7 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>6000 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$17000<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Condo</span></a>
                                <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-10.png" alt="Image Not Found!"></a>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Luxury Condos For Rent</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>10 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>7 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>6000 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$17000<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Condo</span></a>
                                <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-11.png" alt="Image Not Found!"></a>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Luxury Condos For Rent</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>10 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>7 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>6000 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$17000<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Appartment</span></a>
                                <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-12.png" alt="Image Not Found!"></a>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Luxury Appartment For Rent</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>5 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>3 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>3200 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Rent</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$13600<small>( Monthly )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-5">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-dotted-active justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link">Previous Page</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next Page</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============== Property Grid View End ==============-->

@include('footer')