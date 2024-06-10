import { createApp, h } from "vue";
import { createInertiaApp, Head, Link } from "@inertiajs/vue3";
createInertiaApp({
    // title: title => title ? `${title} - Ping CRM` : 'Ping CRM',
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });
        app.use(plugin);
        app.component("Link", Link);
        app.component('Head', Head);
        app.mount(el);
    },
});
