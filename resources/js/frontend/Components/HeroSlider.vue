<template>
    <div class="row mb-5">
        <div class="col-sm-12">
            <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-bs-ride="carousel"
            >
                <div class="carousel-indicators">
                    <button
                        type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"
                    ></button>
                    <button
                        type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"
                    ></button>
                    <button
                        type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"
                    ></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                            src="https://themes.pixelstrap.com/bigdeal/assets/images/layout-2/slider/1.1.png"
                            class="d-block w-100"
                            alt="..."
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="https://themes.pixelstrap.com/bigdeal/assets/images/layout-2/slider/1.1.png"
                            class="d-block w-100"
                            alt="..."
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="https://themes.pixelstrap.com/bigdeal/assets/images/layout-2/slider/1.1.png"
                            class="d-block w-100"
                            alt="..."
                        />
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next"
                >
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
//importing bootstrap 5
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.min.js";
import * as Bootstrap from "bootstrap";
//import DemoComponent from "./components/DemoComponent.vue"

export default {
    mounted() {
        try {
            var myCarousel = document.querySelector(
                "#carouselExampleIndicators"
            );
            if (myCarousel) {
                new Bootstrap.Carousel(myCarousel);
            } else {
                console.error("Carousel element not found");
            }
        } catch (error) {
            console.error("Error initializing carousel:", error);
        }
    },
};
</script>
<style>
.carousel-control-prev-icon {
    border: 3px solid rgba(1, 216, 231, 0.61);
    background-color: rgba(37, 6, 110, 0.473);
    padding: 20px;
    border-radius: 50%;
}
.carousel-control-next-icon {
    border: 3px solid rgba(1, 216, 231, 0.61);
    background-color: rgba(37, 6, 110, 0.473);
    padding: 20px;
    border-radius: 50%;
}
</style>
