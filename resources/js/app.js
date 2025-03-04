import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || '';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        const inertiaApp = createApp({ render: () => h(App, props) })
        .use(plugin)
        .use(ZiggyVue)
        .mount(el);

    // Event untuk melacak navigasi Inertia.js di Google Analytics
    document.addEventListener("inertia:navigate", (event) => {
        if (typeof gtag === "function") {
            gtag('event', 'page_view', {
                page_path: window.location.pathname,
                page_title: document.title
            });
        }
    });

    return inertiaApp;
    },
    progress: {
        color: '#4B5563',
    },
});
