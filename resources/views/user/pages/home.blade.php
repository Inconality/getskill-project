@extends('user.layouts.app')

@section('content')
<div class="py-lg-8 pt-6">
    <section class="py-lg-10 mx-3 mx-lg-0 bg-white">
	    <div class="container"> 
		    <div class="row justify-content-center">
		        <div class="col-xxl-8 col-12 ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <span class="discount-text">%10 Sell</span>
                                    <h1 class="main-title mb-4">Sofa Kuning</h1>
                                    <img src="{{ asset('assets/img/stuff/sofa_kuning.webp') }}" class="d-block w-100 my-3" alt="Yellow Sofa">
                                    <p class="text-muted mb-1" style="font-size: 0.95rem;">Hemat hingga Rp.  untuk furnitur anda.</p>
                                    <p class="font-weight-bold mb-3" style="font-size: 1.1rem;">Rp. 900000</p>
                                    <a href="#" class="btn btn-dark-custom">Lihat Detailnya</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <span class="discount-text">%10 Sell</span>
                                    <h1 class="main-title mb-4">Exchange your<br>old furniture</h1>
                                    <img src="" class="d-block w-100 my-3" alt="Yellow Sofa">
                                    <p class="text-muted mb-1" style="font-size: 0.95rem;">Save up to $50 for your home office.</p>
                                    <p class="font-weight-bold mb-3" style="font-size: 1.1rem;">$45</p>
                                    <a href="#" class="btn btn-dark-custom">Lihat Detailnya</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <span class="discount-text">%10 Sell</span>
                                    <h1 class="main-title mb-4">Exchange your<br>old furniture</h1>
                                    <img src="" class="d-block w-100 my-3" alt="Yellow Sofa">
                                    <p class="text-muted mb-1" style="font-size: 0.95rem;">Save up to $50 for your home office.</p>
                                    <p class="font-weight-bold mb-3" style="font-size: 1.1rem;">$45</p>
                                    <a href="#" class="btn btn-dark-custom">Lihat Detailnya</a>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-lg-10 mx-3 mx-lg-0 bg-white">
        <div class="container">
		    <div class="row mb-md-5 mb-4">
                <div class="col-lg-12">
				    <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-md-between gap-4">
                        <div class="col-md-8 p-0">
					        <h2 class="display-4 mb-3">Our Favourite Collection</h2>
						    <p class="mb-0 lead text-muted">We are inspired by the realities of life today, in which traditional divides
							between	personal and professional space are more fluid.</p>
		    			</div>
	    			</div>
    			</div>
            </div>
            <div class="card-deck mt-5">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

                <!-- <div class="col-lg-12">
                    <a href="#"><img src="./assets/images/product-img-1.jpg" alt="" class="img-fluid"></a>
                    <div class="text-center">
                        <h3 class="mt-3 h5"><a href="#">Modern Chair</a></h3>
                        <div class="">
                            <span class="fw-semibold text-decoration-line-through">$59.00</span>
                            <span class="">$29.00</span>
                        </div>
                    <div>
                </div>
            </div>
        	<div class="swiper-slide">
                <div>
            <a href="#"><img src="./assets/images/product-img-2.jpg" alt="" class="img-fluid"></a>
            <div class="text-center">
              <h3 class="mt-3 h5">
                <a href="#">
                Floor Lamp</a></h3>
                 <div class="">
                  <span class="fw-semibold text-decoration-line-through">$95.00</span>
                  <span class="">$89.00</span>
                </div>
            </div>
          </div>

        </div>
        <div class="swiper-slide">
          <div>
            <a href="#"><img src="./assets/images/product-img-5.jpg" alt="" class="img-fluid"></a>
            <div class="text-center">
              <h3 class="mt-3 h5">
                <a href="#">
                High Back Boss Chair</a></h3>
                <div class="">
                  <span class="fw-semibold text-decoration-line-through">$78.00</span>
                  <span class="">$68.00</span>
                </div>
            </div>
          </div>

        </div>
        <div class="swiper-slide">
          <div>
            <a href="#"><img src="./assets/images/product-img-6.jpg" alt="" class="img-fluid"></a>
            <div class="text-center">
              <h3 class="mt-3 h5">
                <a href="#">
                Fancy Metal Clock</a></h3>
                <div class="">
                  <span class="fw-semibold text-decoration-line-through">$58.00</span>
                  <span class="">$38.00</span>
                </div>
            </div>
          </div>

        </div>
         <div class="swiper-slide">
          <div>
            <a href="#"><img src="./assets/images/product-img-3.jpg" alt="" class="img-fluid"></a>
            <div class="text-center">
              <h3 class="mt-3 h5">
                <a href="#">
                Comfort Chair</a></h3>
                <div class="">
                  <span class="fw-semibold text-decoration-line-through">$38.00</span>
                  <span class="">$28.00</span>
                </div>
            </div>
          </div>

        </div>
		</div>
	</section>
</div> -->