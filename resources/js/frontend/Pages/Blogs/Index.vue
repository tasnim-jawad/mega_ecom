<template>
    <Layout>
        this is blog content
        <ul>
            <li>
                <Link href="/">Home</Link>
                <Link href="/blogs">Blogs</Link>
            </li>
        </ul>
    </Layout>
</template>

<script>
import Layout from "../../Shared/Layout.vue";
export default {
    data() {
        return {
            userData: [],
        };
    },
    components: { Layout },
    props: ["users"],
    created: function () {
        this.userData = this.users;

        console.log(this.userData);
    }
};
</script>

<style></style>
