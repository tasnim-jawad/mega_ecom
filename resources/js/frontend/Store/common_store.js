import { defineStore } from "pinia";
import axios from "axios";
export const common_store = defineStore("common_store", {
    state: () => ({
        all_cart_data: [],
        all_wish_list_data: [],
        all_compare_list_data: [],
        total_cart_price: 0,
        api_prefix: "api/v1",
    }),

    actions: {
        //cart
        //cart
        get_all_cart_data: async function () {
            this.total_cart_price = 0;
            let response = await axios.get(
                `${this.api_prefix}/get-cart-items?get_all=1`
            );
            if (response.data.status == "success") {
                this.all_cart_data = response.data.data;
                if (this.all_cart_data) {
                    let itemTotal = this.all_cart_data.map(
                        (item) => item.quantity * item.product?.current_price
                    );
                    itemTotal.forEach((item2) => {
                        this.total_cart_price = this.total_cart_price + item2;
                    });
                }
            }
        },

        add_to_cart: async function (productId) {
            console.log(productId, window.page_data());

            const response = await axios.post(
                `${this.api_prefix}/add-to-cart`,
                {
                    product_id: productId,
                    // userInfo: window.page_data().props.auth,
                    user_id: 3,
                }
            );

            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                this.get_all_cart_data();
            }
        },

        cart_quantity_update: async function (cartId, action, quantity) {
            const response = await axios.post(
                `${this.api_prefix}/update-cart-item-quantity`,
                {
                    cartId,
                    action,
                    quantity,
                }
            );

            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                this.get_all_cart_data();
            }
            if (response.data.status === "warning") {
                window.w_alert(response.data.message);
            }
        },

        remove_cart_item: async function (cartId) {
            var data = await window.s_confirm();
            if (data) {
                let response = await axios.delete(
                    `${this.api_prefix}/remove-cart-item/${cartId}`
                );
                if (response.data.status == "success") {
                    window.s_alert(response.data.message);
                    this.get_all_cart_data();
                }
            }
        },

        //wishlist
        //wishlist
        get_all_wish_list_items: async function () {
            this.total_cart_price = 0;
            let response = await axios.get(
                `${this.api_prefix}/get-wish-list-items?get_all=1`
            );
            if (response.data.status == "success") {
                this.all_wish_list_data = response.data.data;
            }
        },
        add_to_wish_list: async function (productId) {
            const response = await axios.post(
                `${this.api_prefix}/add-to-wish-list`,
                {
                    product_id: productId,
                }
            );

            if (response.data.status === "success") {
                window.s_alert(response.data.message);
            }
            if (response.data.status === "warning") {
                window.w_alert(response.data.message);
            }
        },
        remove_wish_list_item: async function (id) {
            var data = await window.s_confirm();
            if (data) {
                let response = await axios.delete(
                    `${this.api_prefix}/remove-wish-list-item/${id}`
                );
                if (response.data.status == "success") {
                    window.s_alert(response.data.message);
                    this.get_all_cart_data();
                }
            }
        },

        //comparelist
        //comparelist
        get_all_compare_list_items: async function () {
            let response = await axios.get(
                `${this.api_prefix}/get-compare-list-items?get_all=1`
            );
            if (response.data.status == "success") {
                this.all_compare_list_data = response.data.data;
            }
        },
        add_to_compare_list: async function (productId) {
            const response = await axios.post(
                `${this.api_prefix}/add-to-compare-list`,
                {
                    product_id: productId,
                }
            );

            if (response.data.status === "success") {
                window.s_alert(response.data.message);
            }

            if (response.data.status === "warning") {
                window.w_alert(response.data.message);
            }
        },
        remove_compare_list_item: async function (id) {
            var data = await window.s_confirm();
            if (data) {
                let response = await axios.delete(
                    `${this.api_prefix}/remove-compare-list-item/${id}`
                );
                if (response.data.status == "success") {
                    window.s_alert(response.data.message);
                    this.get_all_cart_data();
                }
            }
        },
    },
});
