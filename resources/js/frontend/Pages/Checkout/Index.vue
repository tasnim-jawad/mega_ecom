<template>
    <Layout>
        <div class="breadcrumb-main ">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumb-contain">
                            <div>
                                <h2>checkout</h2>
                                <ul>
                                    <li><a href="/">home</a></li>
                                    <li><i class="fa fa-angle-double-right"></i></li>
                                    <li><a href="javascript:void(0)">checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-big-py-space b-g-light">
            <div class="custom-container">
                <div class="checkout-page contact-page">
                    <div class="checkout-form">
                        <form @submit.prevent="checkoutFormSubmit($event)">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="theme-form">
                                        <div class="row check-out ">
                                            <div class="checkout-title text-center">
                                                <h3>Billing Details</h3>
                                                <hr>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>First Name</label>
                                                <input type="text" name="first_name" id="first_name" value=""
                                                    placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name" id="last_name" value=""
                                                    placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label class="field-label">Phone</label>
                                                <input type="text" name="phone" id="phone" value="" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label class="field-label">Email Address</label>
                                                <input type="text" name="email" id="email" value="" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label class="field-label">Country</label>
                                                <select name="country">
                                                    <option>India</option>
                                                    <option>South Africa</option>
                                                    <option>United State</option>
                                                    <option>Australia</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label class="field-label">Address</label>
                                                <input type="text" name="address" id="address" value=""
                                                    placeholder="Street address">
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label class="field-label">Town/City</label>
                                                <input type="text" name="" value="" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                                <label class="field-label">State / County</label>
                                                <input type="text" name="" value="" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                                <label class="field-label">Postal Code</label>
                                                <input type="text" name="" value="" placeholder="">
                                            </div>
                                            <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <input type="checkbox" name="shipping-option" id="account-option">
                                                <label for="account-option">Create An Account?</label>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="checkout-details theme-form  ">
                                        <div class="order-box">
                                            <div class="checkout-title text-center">
                                                <h3>Order Details</h3>
                                                <hr>
                                            </div>
                                            <table class="table cart-table table-responsive-xs">
                                                <thead>
                                                    <tr class="table-head">
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Total</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr v-for="cart in all_cart_data" :key="cart.id">

                                                        <td width="250px">
                                                            <Link :href="`/product-details/${cart?.product?.slug}`">{{
                            cart.product.title }}
                                                            </Link>
                                                        </td>
                                                        <td>
                                                            <p>{{ cart.product.current_price }}</p>
                                                        </td>
                                                        <td>
                                                            <p>{{ cart.quantity }}</p>
                                                        </td>

                                                        <td>
                                                            <p class="td-color">{{ cart.quantity *
                            cart.product.current_price }}</p>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <tfoot>
                                                    <tr>
                                                        <td colspan="3">
                                                            <h5>Subtotal</h5>
                                                        </td>

                                                        <td>
                                                            <h5>${{ total_cart_price }}</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">
                                                            <h5>
                                                                Shipping
                                                            </h5>
                                                        </td>
                                                        <td>
                                                            <div class="shipping">
                                                                <div class="shopping-option">
                                                                    <input type="checkbox" name="free-shipping"
                                                                        id="free-shipping">
                                                                    <label for="free-shipping">Free Shipping</label>
                                                                </div>
                                                                <div class="shopping-option">
                                                                    <input type="checkbox" name="local-pickup"
                                                                        id="local-pickup">
                                                                    <label for="local-pickup">Local Pickup</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">
                                                            <h5>Grand Total</h5>
                                                        </td>

                                                        <td>
                                                            <h5>${{ total_cart_price }}</h5>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                        </div>
                                        <div class="payment-box">
                                            <div class="upper-box">
                                                <div class="payment-options">
                                                    <ul>

                                                        <li>
                                                            <div class="radio-option">
                                                                <input type="radio" name="payment_type" id="payment-2"
                                                                    checked="checked">
                                                                <label for="payment-2">Cash On Delivery<span
                                                                        class="small-text">Please send a check to Store
                                                                        Name, Store Street, Store Town, Store State /
                                                                        County, Store Postcode.</span></label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="radio-option">
                                                                <input type="radio" name="payment-group" id="payment-1">
                                                                <label for="payment-1">Check Payments<span
                                                                        class="small-text">Please send a check to Store
                                                                        Name, Store Street, Store Town, Store State /
                                                                        County, Store Postcode.</span></label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="radio-option paypal">
                                                                <input type="radio" name="payment-group" id="payment-3">
                                                                <label for="payment-3">PayPal</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn-normal btn">Place Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script>
import axios from "axios";
import Layout from "../../Shared/Layout.vue";
import { mapActions, mapState } from "pinia";
import { common_store } from "../../Store/common_store";
export default {
    components: { Layout },
    methods: {

        ...mapActions(common_store, {
            remove_cart_item: "remove_cart_item",
            cart_quantity_update: "cart_quantity_update",
        }),

        checkoutFormSubmit: async function ($event) {
            let formData = new FormData($event.target);
            let response = await axios.post('/api/v1/customer-ecommerce-order', formData);

            if (response.data.status === "success") {
                console.log("response", response);
            }

        }
    },

    computed: {
        ...mapState(common_store, {
            all_cart_data: "all_cart_data",
            total_cart_price: "total_cart_price",
        }),
    },
};
</script>

<style></style>
