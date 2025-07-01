const Vue = require('vue');

// Add new Vue Componenets to components object
// key: Vue Component Name
// value: Require ResourceModule
// ex: VueButton: require('skins.giantbomb.vuebutton')
const components = {
    VueComponentExample: require('skins.giantbomb.vuecomponentexample')
};

Object.entries(components).forEach(([name, component]) => {
    const mounts = document.querySelectorAll(`[data-vue-component="${name}"]`);
    mounts.forEach((el) => {
        const props = {};
        for (const attr of el.attributes) {
            if (attr.name.startsWith('data-') && attr.name !== 'data-vue-component') {
                const propName = attr.name.slice(5);
                props[propName] = attr.value;
            }
        }
        Vue.createMwApp(component, props).mount(el);
    });
});