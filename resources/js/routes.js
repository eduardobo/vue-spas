import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Illustrations from './components/Illustrations';
import Mascot from './components/Mascot';
import Wallpapers from './components/Wallpapers';
import NotFound from './components/NotFound';
import SiteStats from './components/SiteStats';

let LoadersAndAnimations = () =>
    import(/* webpackChunkName: "loaders" */ './components/LoadersAndAnimations');

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Logo,
            name: 'logo'
        },

        {
            path: '/logo-symbol',
            component: LogoSymbol,
            name: 'logoSymbol'
        },

        {
            path: '/colors',
            component: Colors,
            name: 'colors'
        },

        {
            path: '/typography',
            component: Typography,
            name: 'typography'
        },

        {
            path: '/illustrations',
            component: Illustrations,
            name: 'illustrations'
        },

        {
            path: '/mascot',
            component: Mascot,
            name: 'mascot'
        },

        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations,
            name: 'loaders-and-animations'
        },

        {
            path: '/wallpapers',
            component: Wallpapers,
            name: 'wallpapers'
        },

        {
            path: '/site-stats',
            component: SiteStats,
            name: 'site-stats'
        }
    ]
}
