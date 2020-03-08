/**
 *  filename: resources/js/routes.js
 */
import Landing from "./components/Landing";
import Home from "./components/Home";

export default {

    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home,
            name: 'home'
        },
        {
            path: '/landing',
            component: Landing,
            name: 'landing'
        }

    ]
}
