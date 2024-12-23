@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <!-- Thêm nội dung khác cho trang sản phẩm -->
    <section class="detail_product mt-5">
            <div class="container text-center">
                <div class="row">
                  <div class="col-2 image_detail">
                    <div class="image_detail_icon">
                        <img src="image/sanpham1.jpg" alt="" class="image_detail_icon_img">
                    </div>
                    <div class="image_detail_icon">
                        <img src="image/sanpham1.jpg" alt="" class="image_detail_icon_img">
                    </div>
                    <div class="image_detail_icon">
                        <img src="image/sanpham1.jpg" alt="" class="image_detail_icon_img">
                    </div>
                    <div class="image_detail_icon">
                        <img src="image/sanpham1.jpg" alt="" class="image_detail_icon_img">
                    </div>
                  </div>
                  <div class="col-6">
                    <img src="image/sanpham1.jpg" alt="" class="image_detail_main_img">
                  </div>
                  <div class="col-4" style="text-align: start;">
                    <h3>{{ $product->name }}</h3>
                    <!-- Đánh Giá -->
                    <div class="evaluate d-flex mb-2">
                        <div class="star me-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <div class="total">(42 Đánh Giá Của Khách Hàng)</div>
                    </div>
                    <!-- Giá -->
                    <h4>Giá: {{ $product->price }}<span class="vnd">đ</span></h4>
                    <!-- Size -->
                    <div class="size">
                        <h4>Size:</h4>
                        <div class="sizes">
                            <button class="sizes_icon btn btn-outline-secondary">36</button>
                            <button class="sizes_icon btn btn-outline-secondary">37</button>
                            <button class="sizes_icon btn btn-outline-secondary">38</button>
                            <button class="sizes_icon btn btn-outline-secondary">39</button>
                            <button class="sizes_icon btn btn-outline-secondary">40</button>
                        </div>
                    </div>
                    <!-- Button Add Cart -->
                    <button class="btn btn-dark mt-2 w-75">THÊM VÀO GIỎ HÀNG</button>
                    <ul class="ul_note">
                        <li class="li_note">Miễn phí vận chuyển toàn quốc cho đơn hàng trên 1tr.</li>
                        <li class="li_note">Giao nhanh trong 2h trong nội thành TP.HCM.</li>
                        <li class="li_note">Thời gian vận chuyển trung bình 3-4 ngày.</li>
                    </ul>
                    <!-- Size Guide -->
                    <div class="size_guide">
                        <div class="size_guide_icon">
                            <p class="d-inline-flex gap-1 size_guide_icon_item">
                                <a class="btn_dropdown" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">Mô tả</a>
                                <i class="bi bi-chevron-down"></i>
                            </p>
                            <div class="collapse" id="collapseExample1">
                                <div class="card card-body" style="font-size: 12px;">{{ $product->description }}</div>
                            </div>
                        </div>
                        <div class="size_guide_icon">
                            <p class="d-inline-flex gap-1 size_guide_icon_item">
                                <a class="btn_dropdown" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">Chi Tiết</a>
                                <i class="bi bi-chevron-down"></i>
                            </p>
                            <div class="collapse" id="collapseExample2">
                                <div class="card card-body" style="font-size: 12px;">Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</div>
                            </div>
                        </div>
                        <div class="size_guide_icon">
                            <p class="d-inline-flex gap-1 size_guide_icon_item">
                                <a class="btn_dropdown" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">Đánh Giá (42)</a>
                                <i class="bi bi-chevron-down"></i>
                            </p>
                            <div class="collapse" id="collapseExample3">
                                <div class="card card-body" style="font-size: 12px;">Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <!-- PRODUCT RELATIONSHIP -->
        <section class="relationship_product mt-5">
            <h3 class="text-center">SẢN PHẨM TƯƠNG TỰ</h3>
            <div class="container mt-3">
                <div class="row">
                  <div class="col-2">
                    <div class="card card_index" style="width: 100%;">
                        <img src="image/sanpham1.jpg" class="card-img-top card_image_index" alt="...">
                        <div class="card-body">
                          <h5 class="card-title card_title_index">Sản Phẩm 1</h5>
                          <p class="card-text card_text_index">Danh Mục 1</p>
                          <div class="star">
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-half" style="font-size: 13px;"></i>
                          </div>
                          <p class="card-text card_text_index">Giá: 775,000<span class="vnd">đ</span></p>
                        </div>
                      </div>
                  </div>
                  <div class="col-2">
                    <div class="card card_index" style="width: 100%;">
                        <img src="image/sanpham1.jpg" class="card-img-top card_image_index" alt="...">
                        <div class="card-body">
                          <h5 class="card-title card_title_index">Sản Phẩm 1</h5>
                          <p class="card-text card_text_index">Danh Mục 1</p>
                          <div class="star">
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-half" style="font-size: 13px;"></i>
                          </div>
                          <p class="card-text card_text_index">Giá: 775,000<span class="vnd">đ</span></p>
                        </div>
                      </div>
                  </div>
                  <div class="col-2">
                    <div class="card card_index" style="width: 100%;">
                        <img src="image/sanpham1.jpg" class="card-img-top card_image_index" alt="...">
                        <div class="card-body">
                          <h5 class="card-title card_title_index">Sản Phẩm 1</h5>
                          <p class="card-text card_text_index">Danh Mục 1</p>
                          <div class="star">
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-half" style="font-size: 13px;"></i>
                          </div>
                          <p class="card-text card_text_index">Giá: 775,000<span class="vnd">đ</span></p>
                        </div>
                      </div>
                  </div>
                  <div class="col-2">
                    <div class="card card_index" style="width: 100%;">
                        <img src="image/sanpham1.jpg" class="card-img-top card_image_index" alt="...">
                        <div class="card-body">
                          <h5 class="card-title card_title_index">Sản Phẩm 1</h5>
                          <p class="card-text card_text_index">Danh Mục 1</p>
                          <div class="star">
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-half" style="font-size: 13px;"></i>
                          </div>
                          <p class="card-text card_text_index">Giá: 775,000<span class="vnd">đ</span></p>
                        </div>
                      </div>
                  </div>
                  <div class="col-2">
                    <div class="card card_index" style="width: 100%;">
                        <img src="image/sanpham1.jpg" class="card-img-top card_image_index" alt="...">
                        <div class="card-body">
                          <h5 class="card-title card_title_index">Sản Phẩm 1</h5>
                          <p class="card-text card_text_index">Danh Mục 1</p>
                          <div class="star">
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-half" style="font-size: 13px;"></i>
                          </div>
                          <p class="card-text card_text_index">Giá: 775,000<span class="vnd">đ</span></p>
                        </div>
                      </div>
                  </div>
                  <div class="col-2">
                    <div class="card card_index" style="width: 100%;">
                        <img src="image/sanpham1.jpg" class="card-img-top card_image_index" alt="...">
                        <div class="card-body">
                          <h5 class="card-title card_title_index">Sản Phẩm 1</h5>
                          <p class="card-text card_text_index">Danh Mục 1</p>
                          <div class="star">
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-fill" style="font-size: 13px;"></i>
                            <i class="bi bi-star-half" style="font-size: 13px;"></i>
                          </div>
                          <p class="card-text card_text_index">Giá: 775,000<span class="vnd">đ</span></p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
        </section>
@endsection
