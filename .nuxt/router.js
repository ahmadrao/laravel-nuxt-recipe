import Vue from 'vue'
import Router from 'vue-router'
import { interopDefault } from './utils'
import scrollBehavior from './router.scrollBehavior.js'

const _8e90ac7a = () => interopDefault(import('../resources/nuxt/pages/recipies/index.vue' /* webpackChunkName: "pages/recipies/index" */))
const _54502b2e = () => interopDefault(import('../resources/nuxt/pages/recipies/_id/index.vue' /* webpackChunkName: "pages/recipies/_id/index" */))
const _395fd082 = () => interopDefault(import('../resources/nuxt/pages/index.vue' /* webpackChunkName: "pages/index" */))

// TODO: remove in Nuxt 3
const emptyFn = () => {}
const originalPush = Router.prototype.push
Router.prototype.push = function push (location, onComplete = emptyFn, onAbort) {
  return originalPush.call(this, location, onComplete, onAbort)
}

Vue.use(Router)

export const routerOptions = {
  mode: 'history',
  base: decodeURI('/'),
  linkActiveClass: 'nuxt-link-active',
  linkExactActiveClass: 'nuxt-link-exact-active',
  scrollBehavior,

  routes: [{
    path: "/recipies",
    component: _8e90ac7a,
    name: "recipies"
  }, {
    path: "/recipies/:id",
    component: _54502b2e,
    name: "recipies-id"
  }, {
    path: "/",
    component: _395fd082,
    name: "index"
  }, {
    path: "/__laravel_nuxt__",
    component: _395fd082,
    name: "__laravel_nuxt__"
  }],

  fallback: false
}

export function createRouter () {
  return new Router(routerOptions)
}
