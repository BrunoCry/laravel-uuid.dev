import { createWebHistory, createRouter } from 'vue-router';

import Home from './pages/home.vue';
import Generate from './pages/generate.vue';
import Retrieve from './pages/retrieve.vue';

const history = createWebHistory();

const routes = [
    { path: "/", component: Home },
    { path: "/generate", component: Generate },
    { path: "/retrieve", component: Retrieve }
];

const router = createRouter({
    history,
    routes
});

export default router;