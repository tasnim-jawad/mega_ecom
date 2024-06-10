<template>
    <section class="discount-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="discount-banner-contain">
                        <h2>Featured Products</h2>
                        <h1>every <span> discount </span> we <span> offer is the best in market!</span></h1>
                        <div class="rounded-contain">
                            <div class="rounded-subcontain">
                                don't just scroll, your friends have already started buying!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="custom-container">
            <div class="product_list">
                <div v-for="i in products" :key="i.name">
                    <ProductItem :product="i"/>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import ProductItem from '../../../Components/ProductItem.vue';
export default {
    components: {
        ProductItem,
    },
    data: () => ({
        products: [
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/mobile/oneplus/nord-n30-se/nord-n30-se-01-200x200.png",
                "name": "OnePlus Nord N30 SE 5G Smartphone (4/128GB)"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/desktop-pc/desktop-offer/intel-core-i3-12100-12th-gen-budget-desktop-pc-02-200x200.webp",
                "name": "Intel Core i3-12100 12th Gen Budget Desktop PC"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/monitor/msi/mag-321urx/mag-321urx-01-200x200.webp",
                "name": "MSI MPG 321URX 31.5\" QD-OLED 4K UHD 240Hz Gaming Monitor"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/monitor/msi/mp223/mp223-06-200x200.webp",
                "name": "MSI PRO MP223 21.45\" Full HD Business Monitor"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/monitor/msi/mp251/pro-mp251-01-200x200.webp",
                "name": "MSI PRO MP251 24.5\" 100Hz FHD Monitor"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/monitor/msi/g255f/g255f-01-200x200.webp",
                "name": "MSI G255F 25\" 180Hz 1ms IPS FHD Gaming Monitor"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/monitor/msi/g274qpf-e2/g274qpf-e2-01-200x200.webp",
                "name": "MSI G274QPF E2 27\" 180Hz 1ms IPS WQHD Gaming Monitor"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-slim-3-15amn8/ideapad-slim-3-15amn8-04-200x200.webp",
                "name": "Lenovo IdeaPad Slim 3 Ryzen 5 7520U 15.6\" FHD TN Laptop 16GB DDR5 RAM 512GB SSD with 2 Years Warranty"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/tablet-pc/lenovo/tab-m10-gen-3/tab-m10-gen-3-10-200x200.webp",
                "name": "Lenovo Tab M10 (3rd Gen) 4GB RAM 64GB Storage 10.1-Inch FHD Tablet LTE (Sim Supported) with Folio Case"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/server/hpe/proliant-ml30-gen10-plus/proliant-ml30-gen10-plus-01-200x200.webp",
                "name": "HPE ProLiant ML30 Gen10 Plus Tower Server"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/brand-pc/dell/vostro-3910-mt/vostro-3910-01-200x200.webp",
                "name": "Dell Vostro 3910 MT Core i3 12th Gen Tower Brand PC"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/desktop-pc/all-in-one/hp-aio/pro-240-g9/pro-240-g9-01-200x200.webp",
                "name": "HP Pro 240 G9 Core i3 12th Gen All-in-One Desktop PC"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/sewing-machine/brother/jc14/jc14-01-200x200.jpg",
                "name": "Brother JC14 Household Electric Sewing Machine"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/camera/mirriorless/canon/eos-r100/eos-r100-01-200x200.webp",
                "name": "Canon EOS R100 Mirrorless Camera with 18-45mm Lens"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/television/samsung/43cu7700/43cu7700-01-200x200.webp",
                "name": "Samsung 43CU7700 43\" Crystal 4K UHD Smart LED TV"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/speaker/jbl/bar-2-1-deep-bass-mk2/bar-2-1-deep-bass-mk2-01-200x200.webp",
                "name": "JBL Bar 2.1 Deep Bass MK2 2.1 Channel Soundbar with Wireless Subwoofer"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/projector/optoma/sa520/sa520-01-200x200.webp",
                "name": "Optoma SA520 4000 Lumens SVGA DLP Projector"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/mobile/apple/iphone-15-pro-max/natural-titanium/iphone-15-pro-max-natural-titanium-official-200x200.jpg",
                "name": "iPhone 15 Pro Max 256GB Natural Titanium (Singapore)"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/camera/action/dji/pocket-2-creator-combo/pocket-2-creator-combo-01-200x200.jpg",
                "name": "DJI Osmo Pocket 2 Creator Combo 3 Axis Gimbal Stabilizer Action Camera"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/drones/dji/mini-4-pro/mini-4-pro-200x200.webp",
                "name": "DJI Mini 4 Pro Drone With Mini to the Max Combo"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/smart-watch/xiaomi/amazfit/balance/balance-07-200x200.webp",
                "name": "Amazfit Balance AMOLED Display Bluetooth Calling AI-Powered Fitness Smart Watch"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/gaming-console/asus/rog-ally-rc71l/rog-ally-rc71l-02-200x200.webp",
                "name": "Asus ROG Ally RC71L AMD Ryzen Z1 Extreme Handheld Gaming Console"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/printer/pantum/m6556nw/m6556nw-01-200x200.jpg",
                "name": "Pantum M6556NW Mono Laser Printer With Network & Wi-fi 22 PPM"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/scanner/epson/perfection-v39/perfection-v39-01-200x200.webp",
                "name": "Epson Perfection V39 II Photo and Document Flatbed Scanner"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/interactive-display/infocus/inf8610/inf8610-01-200x200.webp",
                "name": "InFocus INF8610 86\" 4K Interactive Touch Display"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/gaming-chair/msi/mag-ch120-i/mag-ch120-i-200x200.JPG",
                "name": "MSI MAG CH120 I Steel Base Gaming Chair Black"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/gaming-chair/xtrike-me/gc-905/gc-905-01-200x200.webp",
                "name": "Xtrike Me GC-905 Gaming Chair"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/security-camera/dahua/ip-camera/imou-ranger-2/imou-ranger-2-200x200.jpg",
                "name": "Dahua imou Ranger 2 IP Camera with 360 Degree Coverage (IPC-A22EP-L/IPC-A22EP-G)"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/camera/action-camera/insta360/one-rs-4k-edition/one-rs-4k-edition-01-200x200.webp",
                "name": "Insta360 ONE RS 4K Edition Waterproof Action Camera"
            },
            {
                "image": "https://www.startech.com.bd/image/cache/catalog/laptop-accessories/backpack/lenovo/ideapad-gaming-modern/ideapad-gaming-modern-01-200x200.webp",
                "name": "Lenovo IdeaPad Gaming Modern Backpack for 16\" Laptop"
            }
        ],
    })

}
</script>
