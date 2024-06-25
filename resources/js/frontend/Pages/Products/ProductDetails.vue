<template>
    <Head>
        <title>
            {{ product.title }}
        </title>
    </Head>
    <Layout v-if="Object.keys(product).length">
        <section class="section-big-pt-space b-g-light">
            <div class="collection-wrapper">
                <div class="custom-container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="filter-main-btn mb-2">
                                    <span class="filter-btn"><i class="fa fa-filter" aria-hidden="true"></i>
                                        filter</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div>
                                    <img :src="check_image_url(product.product_image.url)"
                                        alt="" class="img-fluid image_zoom_cls-0" />
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="single-product-info ps-3">
                                    <div class="single-product-info-top">

                                        <h3 class="single-product-title">
                                            {{ product.title }}
                                        </h3>
                                        <div class="single-product-price display-flex-center mb-24">
                                            <div class="product-price-widget regular-price">
                                                <span class="regular-price-title">Regular price:</span>
                                                <span class="regular-main-price">
                                                    {{ product.customer_sales_price }} BDT
                                                </span>
                                            </div>
                                            <div class="product-price-widget offer-price">
                                                <span class="offer-price-title">Offer price: </span>
                                                <span class="offer-main-price">
                                                    {{ product.customer_sales_price - product.discount_amount }} BDT
                                                </span>
                                            </div>
                                            <span class="product-price-save">-15% SAVE</span>
                                        </div>
                                    </div>
                                    <div class="product-core-info-list">
                                        <span class="p-core-info-list-title">Status</span>
                                        <span class="p-core-info-list-sub-title stock-in">Stock in</span>
                                    </div>
                                    <div class="product-core-info-list">
                                        <span class="p-core-info-list-title">Product code</span>
                                        <span class="p-core-info-list-sub-title product-code">
                                            {{ product.sku }}
                                        </span>
                                    </div>
                                    <div class="product-core-info-list">
                                        <span class="p-core-info-list-title">Brand</span>
                                        <span class="p-core-info-list-sub-title brand-name">Apple</span>
                                    </div>
                                    <div class="product-core-info-list">
                                        <span class="p-core-info-list-title">Region</span>
                                        <span class="p-core-info-list-sub-title region-name">United State (US)</span>
                                    </div>
                                    <div class="product-core-info-list">
                                        <span class="p-core-info-list-title">Color</span>
                                        <div class="product-color-varient display-flex-center">
                                            <label class="single-color-varient" id="color-varient-1"
                                                for="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1" />
                                            </label>
                                            <label class="single-color-varient" id="color-varient-2"
                                                for="flexRadioDefault2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" />
                                            </label>
                                            <label class="single-color-varient" id="color-varient-3"
                                                for="flexRadioDefault3">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault3" />
                                            </label>
                                            <label class="single-color-varient" id="color-varient-4"
                                                for="flexRadioDefault4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault4" />
                                            </label>
                                            <label class="single-color-varient" id="color-varient-5"
                                                for="flexRadioDefault5">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault5" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="product-core-info-list">
                                        <span class="p-core-info-list-title">Storage</span>
                                        <div class="product-storages display-flex-center">
                                            <div class="single-storage">
                                                <label for="flexRadioDefault7">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault2" id="flexRadioDefault7" />
                                                    8/256
                                                </label>
                                            </div>
                                            <div class="single-storage">
                                                <label for="flexRadioDefault8">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault2" id="flexRadioDefault8" />
                                                    8/512
                                                </label>
                                            </div>
                                            <div class="single-storage">
                                                <label for="flexRadioDefault9">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault2" id="flexRadioDefault9" />
                                                    8/512
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-core-info-list">
                                        <span class="p-core-info-list-title">Sim</span>
                                        <div class="product-sim-system product-storages display-flex-center">
                                            <div class="single-sim">
                                                <label for="exampleRadios1">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios1" />
                                                    e-Sim
                                                </label>
                                            </div>
                                            <div class="single-sim">
                                                <label for="exampleRadios2">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios2" />
                                                    Dual sim
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-core-info-list">
                                        <span class="p-core-info-list-title">Warranty</span>
                                        <span class="p-core-info-list-sub-title emi-facility">
                                            <span>6 Month</span>
                                        </span>
                                    </div>
                                    <!-- <div class="product-core-info-list">
                                        <span class="p-core-info-list-title">
                                            EMI facilities
                                        </span>
                                        <span class="p-core-info-list-sub-title emi-facility">
                                            <a target="_blank" href="#">Check EMI facility</a>
                                        </span>
                                    </div> -->
                                </div>

                                <div class="ps-3">
                                    <h6 class="product-title d-block mt-3">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <button class="qty-minus"></button>
                                            <input class="qty-adj form-control" type="number" value="1">
                                            <button class="qty-plus"></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-buttons ps-3 d-flex flex-wrap gap-2 mt-4">
                                    <a class="btn-normal">
                                        <i class="icon icon-shopping-cart"></i>
                                        Add to Cart
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="btn px-4 btn-normal btn-outline add-to-wish tooltip-top"
                                        data-tippy-content="Add to wishlist">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <section class="tab-product tab-exes creative-card creative-inner">
                        <div class="row">

                            <div class="col-xl-8">
                                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="top-home-tab" data-bs-toggle="tab" href="#top-home"
                                            role="tab" aria-selected="false">
                                            <i class="icofont icofont-ui-home"></i>
                                            Specifications
                                        </a>
                                        <div class="material-border"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="profile-top-tab" data-bs-toggle="tab"
                                            href="#top-profile" role="tab" aria-selected="true">
                                            <i class="icofont icofont-man-in-glasses"></i>
                                            Details
                                        </a>
                                        <div class="material-border"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                            href="#top-contact" role="tab" aria-selected="false">
                                            <i class="icofont icofont-contacts"></i>
                                            Video
                                        </a>
                                        <div class="material-border"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="review-top-tab" data-bs-toggle="tab" href="#top-review"
                                            role="tab" aria-selected="false">
                                            <i class="icofont icofont-contacts"></i>
                                            Write Review
                                        </a>
                                        <div class="material-border"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="question-top-tab" data-bs-toggle="tab"
                                            href="#top-question" role="tab" aria-selected="false">
                                            <i class="icon icon-contacts"></i>
                                            Questions
                                        </a>
                                        <div class="material-border"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="policy-top-tab" data-bs-toggle="tab" href="#top-policy"
                                            role="tab" aria-selected="false">
                                            <i class="icofont icofont-contacts"></i>
                                            Waranty policy
                                        </a>
                                        <div class="material-border"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="bestproduct-top-tab" data-bs-toggle="tab"
                                            href="#top-bestproduct" role="tab" aria-selected="false">
                                            <i class="icofont icofont-contacts"></i>
                                            Best products
                                        </a>
                                        <div class="material-border"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pricereview-top-tab" data-bs-toggle="tab"
                                            href="#top-pricereview" role="tab" aria-selected="false">
                                            <i class="icofont icofont-contacts"></i>
                                            Price Review
                                        </a>
                                        <div class="material-border"></div>
                                    </li>
                                </ul>
                                <div class="tab-content nav-material" id="top-tabContent">
                                    <div class="tab-pane fade" id="top-home" role="tabpanel"
                                        aria-labelledby="top-home-tab">
                                        <table class="data-table flex-table" cellpadding="0" cellspacing="0">
                                            <colgroup>
                                                <col class="name" />
                                                <col class="value" />
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <td class="heading-row py-2" colspan="3">
                                                        <b>
                                                            Lense
                                                        </b>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="name">Focal Length</td>
                                                    <td class="value">3.6mm</td>
                                                </tr>
                                                <tr>
                                                    <td class="name">Angle of View</td>
                                                    <td class="value">93°(H), 48°(V), 115°(D), 355°Pan &amp; -5~80°Tilt
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="name">Others</td>
                                                    <td class="value">Night Vision: 10m(33ft) Distance<br /></td>
                                                </tr>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <td class="heading-row py-2" colspan="3">
                                                        <b>
                                                            Physical Specification
                                                        </b>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="name">Dimension</td>
                                                    <td class="value">106.1 × 77.4× 77.4mm (4.17× 3.04 × 3.04 inch)</td>
                                                </tr>
                                                <tr>
                                                    <td class="name">Weight</td>
                                                    <td class="value">238g (0.52lb)</td>
                                                </tr>
                                                <tr>
                                                    <td class="name">Power</td>
                                                    <td class="value">
                                                        DC 5V1A Power Supply<br />
                                                        Power Consumption:&lt; 3.5W
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="name">Interface</td>
                                                    <td class="value">
                                                        Micro SD Card Slot (up to 256GB)<br />
                                                        Built-in Mic &amp; Speaker<br />
                                                        Reset Button
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-pane fade active show" id="top-profile" role="tabpanel"
                                        aria-labelledby="profile-top-tab">
                                        <p class="ps-0">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged. It was popularised in the 1960s with the
                                            release of Letraset sheets containing Lorem Ipsum passages, and more
                                            recently with desktop publishing software like Aldus PageMaker including
                                            versions of Lorem Ipsum.
                                        </p>
                                        <div class="single-product-tables">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Febric</td>
                                                        <td>Chiffon</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Color</td>
                                                        <td>Red</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Material</td>
                                                        <td>Crepe printed</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Length</td>
                                                        <td>50 Inches</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Size</td>
                                                        <td>S, M, L .XXL</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                        aria-labelledby="contact-top-tab">
                                        <div class="mt-3 text-center">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/BUWzX78Ye_8"
                                                allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="top-review" role="tabpanel"
                                        aria-labelledby="review-top-tab">
                                        <form class="theme-form">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="media">
                                                        <label>Rating</label>
                                                        <div class="media-body ms-3">
                                                            <div class="rating three-star"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Enter Your name" required="" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" placeholder="Email"
                                                        required="" />
                                                </div>
                                                <div class="col-md-12">
                                                    <label>Review Title</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter your Review Subjects" required="" />
                                                </div>
                                                <div class="col-md-12">
                                                    <label>Review Title</label>
                                                    <textarea class="form-control"
                                                        placeholder="Wrire Your Testimonial Here"
                                                        id="exampleFormControlTextarea1" rows="6"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-normal" type="submit">Submit YOur
                                                        Review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="top-question" role="tabpanel"
                                        aria-labelledby="question-top-tab">
                                        <section class="ask-question q-n-r-section bg-white m-tb-15" id="ask-question">
                                            <div class="card mt-1">
                                                <div class="card-header d-flex gap-3 justify-content-between">
                                                    <div class="title-n-action">
                                                        <h2 class="ask_question_heading">Questions (1)</h2>
                                                        <p class="ask_question_pg p-0 mt-1">Have question about this product? Get specific details about this product from expert.</p>
                                                    </div>
                                                    <div class="q-action">
                                                        <a href="#" class="btn btn-info">Ask Question</a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div id="question" class="questions">
                                                        <div class="question-wrap">
                                                            <p class="author"><span class="name">Fahim Uddin </span> on 15 Nov 2023</p>
                                                            <h3 class="question text-sm">
                                                                <span class="hint">Q:</span>
                                                                <span>
                                                                    Assalamu alaikum. Is this AMD Athlon 3000G Processor with Radeon Graphics good for programing. I am a student of CSE.
                                                                </span>
                                                            </h3>
                                                            <p class="answer">
                                                                <span class="hint">A:</span>
                                                                <span>
                                                                    Yes sir, you can do Basic programming with AMD Athlon 3000G Processor with Radeon Graphics. But for running heavy programming language, it will depend on your full PC configuration.
                                                                </span>
                                                            </p>
                                                            <p class="author answerer">
                                                                <span class="fade">By</span>
                                                                <span>Etek BD Support</span>
                                                                <span class="fade">15 Nov 2023</span>
                                                            </p>
                                                        </div>
                                                        <div class="text-right"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                    <div class="tab-pane fade" id="top-policy" role="tabpanel"
                                        aria-labelledby="policy-top-tab">
                                        <p>
                                            This electric device is covered by a one-year limited warranty from the date of purchase. The warranty covers defects in materials and workmanship under normal use. If a defect arises during the warranty period, we will repair or replace the device at no charge. This warranty does not cover damage caused by misuse, accidents, modifications, or unauthorized repairs. To obtain warranty service, please contact our customer support with proof of purchase. Shipping costs for returns may apply. This warranty gives you specific legal rights, and you may also have other rights which vary by jurisdiction.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="top-bestproduct" role="tabpanel"
                                        aria-labelledby="bestproduct-top-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td colspan="5"><strong>Product Details</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="compare-name">
                                                        <td>Product</td>
                                                        <td>
                                                            <a href="https://www.ultratech.com.bd/intel-core-i5-3470-3rd-gen-processor"><strong>Intel Core i5-3470 3rd Gen Processor</strong></a>
                                                        </td>
                                                        <td>
                                                            <a href="https://www.ultratech.com.bd/intel-core-i5-2400-2nd-gen-310-ghz-processor"><strong>Intel Core i5-2400 2nd Gen 3.10 GHz Processor</strong></a>
                                                        </td>
                                                        <td>
                                                            <a href="https://www.ultratech.com.bd/intel-core-i3-6100-6th-gen-processor-bulk"><strong>Intel Core i3 6100 6th Gen Processor (Bulk)</strong></a>
                                                        </td>
                                                        <td>
                                                            <a href="https://www.ultratech.com.bd/intel-core-i5-4460-4th-generation-32-ghz-processor-tray"><strong>Intel Core i5 4460 4th Generation 3.2 GHz Processor TRAY</strong></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="compare-image">
                                                        <td>Image</td>
                                                        <td class="text-left">
                                                            <img
                                                                src="https://www.ultratech.com.bd/image/cache/catalog/products_2023/intel-core-i5-3470-3rd-gen-processor-90x90.jpg.webp"
                                                                alt="Intel Core i5-3470 3rd Gen Processor"
                                                                title="Intel Core i5-3470 3rd Gen Processor"
                                                                class="img-thumbnail"
                                                            />
                                                        </td>
                                                        <td class="text-left">
                                                            <img
                                                                src="https://www.ultratech.com.bd/image/cache/catalog/products_2023/intel-core-i5-2400-2nd-gen-310-ghz-processor-90x90.jpg.webp"
                                                                alt="Intel Core i5-2400 2nd Gen 3.10 GHz Processor"
                                                                title="Intel Core i5-2400 2nd Gen 3.10 GHz Processor"
                                                                class="img-thumbnail"
                                                            />
                                                        </td>
                                                        <td class="text-left">
                                                            <img
                                                                src="https://www.ultratech.com.bd/image/cache/catalog/processor/intel/core-i3-6100/intel-core-i3-6100-6th-gen-processor-bulk-90x90.jpg.webp"
                                                                alt="Intel Core i3 6100 6th Gen Processor (Bulk)"
                                                                title="Intel Core i3 6100 6th Gen Processor (Bulk)"
                                                                class="img-thumbnail"
                                                            />
                                                        </td>
                                                        <td class="text-left">
                                                            <img
                                                                src="https://www.ultratech.com.bd/image/cache/catalog/processor/intel%20/core-i5-4460/intel-core-i5-4460-4th-generation-32-ghz-processor-tray-90x90.jpg.webp"
                                                                alt="Intel Core i5 4460 4th Generation 3.2 GHz Processor TRAY"
                                                                title="Intel Core i5 4460 4th Generation 3.2 GHz Processor TRAY"
                                                                class="img-thumbnail"
                                                            />
                                                        </td>
                                                    </tr>
                                                    <tr class="compare-price">
                                                        <td>Price</td>
                                                        <td class=""><del>2,500৳</del> 1,900৳</td>
                                                        <td class=""><del>2,500৳</del> 1,500৳</td>
                                                        <td class=""><del>5,200৳</del> 2,400৳</td>
                                                        <td class=""><del>4,800৳</del> 2,500৳</td>
                                                    </tr>
                                                    <tr class="compare-model">
                                                        <td>Model</td>
                                                        <td>Core i5-3470</td>
                                                        <td>Core i5-2400</td>
                                                        <td>6100</td>
                                                        <td>Core i5 4460</td>
                                                    </tr>
                                                    <tr class="compare-manufacturer">
                                                        <td>Brand</td>
                                                        <td>Intel</td>
                                                        <td>Intel</td>
                                                        <td>Intel</td>
                                                        <td>Intel</td>
                                                    </tr>
                                                    <tr class="compare-availability">
                                                        <td>Availability</td>
                                                        <td>In Stock</td>
                                                        <td>In Stock</td>
                                                        <td>In Stock</td>
                                                        <td>In Stock</td>
                                                    </tr>
                                                    <tr class="compare-rating">
                                                        <td>Rating</td>
                                                        <td class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <br />
                                                            Based on 1 reviews.
                                                        </td>
                                                        <td class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <br />
                                                            Based on 1 reviews.
                                                        </td>
                                                        <td class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <br />
                                                            Based on 2 reviews.
                                                        </td>
                                                        <td class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <br />
                                                            Based on 1 reviews.
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <tfoot>
                                                    <tr>
                                                        <td></td>
                                                        <td class="out-of-stock">
                                                            <div class="compare-buttons">
                                                                <button class="btn btn-primary btn-cart" onclick="cart.add('7955', '1');"><span>Add to Cart</span></button>
                                                            </div>
                                                        </td>
                                                        <td class="out-of-stock">
                                                            <div class="compare-buttons">
                                                                <button class="btn btn-primary btn-cart" onclick="cart.add('7956', '1');"><span>Add to Cart</span></button>
                                                            </div>
                                                        </td>
                                                        <td class="out-of-stock">
                                                            <div class="compare-buttons">
                                                                <button class="btn btn-primary btn-cart" onclick="cart.add('1333', '1');"><span>Add to Cart</span></button>
                                                            </div>
                                                        </td>
                                                        <td class="out-of-stock">
                                                            <div class="compare-buttons">
                                                                <button class="btn btn-primary btn-cart" onclick="cart.add('5549', '1');"><span>Add to Cart</span></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="top-pricereview" role="tabpanel"
                                        aria-labelledby="pricereview-top-tab">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td class="compatibility-table-name">
                                                        <strong>Best intel Processor Series Price list 2024</strong>
                                                    </td>
                                                    <td class="compatibility-table-price"><strong>Price</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="i in 10" :key="i">
                                                    <td class="compatibility-table-name">
                                                        <a href="#" class="compatibility_product_title">Intel Core i5 6500 6th gen 3.20GHz Processor (Tray)</a>
                                                    </td>
                                                    <td class="compatibility-table-price">
                                                        <p class="price">
                                                            <span class="new">4,300৳</span>
                                                            <span class="old">6,800৳</span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="theme-card creative-card creative-inner related_product_card">
                                    <h5 class="title-border">Related Products</h5>
                                    <div class="media-banner plrb-0 b-g-white1 border-0">
                                        <div class="media-banner-box" v-for="i in 3">
                                            <div class="media">
                                                <a href="product-page(left-sidebar).html" tabindex="0">
                                                    <img :src="`https://themes.pixelstrap.com/bigdeal/assets/images/layout-2/media-banner/${i}.jpg`"
                                                        class="img-fluid " alt="banner">
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-contant">
                                                        <div>
                                                            <div class="product-detail">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                                <a href="product-page(left-sidebar).html" tabindex="0">
                                                                    <p>sumsung galaxy</p>
                                                                </a>
                                                                <h6>$47.05 <span>$55.21</span></h6>
                                                            </div>
                                                            <div class="cart-info">
                                                                <button class="tooltip-top add-cartnoty">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <a href="javascript:void(0)"
                                                                    class="add-to-wish tooltip-top">
                                                                    <i class="add-to-wish fa fa-heart-o"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="tooltip-top">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                                <a href="#" class="tooltip-top"
                                                                    data-tippy-content="Compare">
                                                                        <i class="fa fa-recycle"></i>
                                                                    </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="section-big-py-space  ratio_asos b-g-light">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12 product-related">
                        <h2>Top products</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="custom-container">
                            <div class="product_list">
                                <div v-for="i in products" :key="i.name">
                                    <ProductItem :product="i" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script>
import axios from "axios";
import ProductItem from "../../Components/ProductItem.vue";
import Layout from "../../Shared/Layout.vue";
export default {
    components: { Layout, ProductItem },
    props: {
        slug: String,
    },
    data: () => ({
        product: {},
        products: [],
    }),
    created: async function(){
        // console.log(this.slug);
        await this.get_product();
        await this.get_featured_products();
    },
    methods: {
        get_product: async function(){
            await axios.get('/api/v1/product/'+this.slug)
                .then(res=>{
                    this.product = res.data;
                })
        },
        get_featured_products: async function () {
            let res = await axios.get('/api/v1/featured-products');
            let data = res.data;
            this.products = data;
        },
        check_image_url: function (url) {
            try {
                new URL(url);
                return url;
            } catch (e) {
                return "/"+url;
            }
        },
    }
};
</script>

<style></style>
