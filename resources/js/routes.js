/**
 *  filename: resources/js/routes.js
 */
import Landing from "./components/Landing";
import Read from './components/Read'
import Homepage from "./components/Homepage";

export default {

    mode: 'history',

    routes: [
        {
            path: '/homepage',
            component: Homepage,
            name: 'home'
        },
        {
            path: '/landing',
            component: Landing,
            name: 'landing'
        },
        {
            path: '/admin/dashboard',
            component: Read,
            name: 'read',
            props: true
        }

    ]
}
