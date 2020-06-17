import Vue from 'vue';
import VueMeta from 'vue-meta';
import { InertiaApp } from '@inertiajs/inertia-vue';

Vue.config.productionTip = false;

Vue.use(InertiaApp);
Vue.use(VueMeta);

Vue.prototype.$route = (...args) => route(...args).url();

const app = document.getElementById('app');

new Vue({
  metaInfo: {
    titleTemplate: (title) => title ? `${title} - Site` : 'Site',
  },
  render: h => h(InertiaApp, {
    props: {
      initialPage: JSON.parse(app.dataset.page),
      resolveComponent: (name) => require(`@/pages/${name}`).default,
    },
  }),
}).$mount(app);
