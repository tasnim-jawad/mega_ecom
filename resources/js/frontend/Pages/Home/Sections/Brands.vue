<template>
    <section class="brands">
        <div class="custom-container">
            <h2 class="title">Brands We Are Working With</h2>
            <ul class="brand_items">
                <li v-for="item in brands" :key="item">
                    <img :src="item" alt="">
                </li>
            </ul>
        </div>
    </section>
</template>
<script>
export default {
    data: () => ({
        brands: [
            "https://demo.activeitzone.com/ecommerce/public/uploads/all/CVo1G2QVpVtSoZlmCvC0l4hL9WIiWLlTQf6XclMC.webp",
            "https://demo.activeitzone.com/ecommerce/public/uploads/all/ecb0DAeSHXtbC4Fn6WYz8MBpJuqVeJweFHpO5Tdv.webp",
            "https://demo.activeitzone.com/ecommerce/public/uploads/all/SE5RmXlnnn7IGCueKcCC3bSb6VMbpRKCQ9Uj73im.webp",
            "https://demo.activeitzone.com/ecommerce/public/uploads/all/psvYUjmOREXrnLNH4O3h9pC3btmXDsyh96vSPEtk.webp",
            "https://demo.activeitzone.com/ecommerce/public/uploads/all/igAkXQNWqVIiTSwKVsoG9DmihosVVTL6vp94K6qf.webp",
            "https://demo.activeitzone.com/ecommerce/public/uploads/all/8epyndbgfapwj0RYIU5mMDUk88yFYWjffqLOQMFD.webp",
            "https://demo.activeitzone.com/ecommerce/public/uploads/all/rCfpiBkUtiOz8Ipakex02EA8uNYXGySvQWH9phRx.webp",
            "https://demo.activeitzone.com/ecommerce/public/uploads/all/rkIzWJlmmr3Ae5oJMwgHbFp3Kg9uinm5su2hmHoH.webp",
            "https://demo.activeitzone.com/ecommerce/public/uploads/all/hOcd5BOA7MVZ4y4potvCzMypnVKospMJsPZb1aPU.webp",
            "https://demo.activeitzone.com/ecommerce/public/uploads/all/p1cHVKZSlCy5VrGjQRcHQclukEoRhapNQQHXz522.webp",
            "https://demo.activeitzone.com/ecommerce/public/uploads/all/ED7vbI8nnpPeKv6LXGYsGMCOLKG5s5uWyedONBxj.webp",
            // "https://demo.activeitzone.com/ecommerce/public/uploads/all/EAB1zQHsBz4bs8Z4DSKmdqYVV2OReXMxiqp32hCk.webp"
        ]

    })
}
</script>
