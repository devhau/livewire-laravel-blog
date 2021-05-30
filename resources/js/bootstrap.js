
import jquery from 'jquery'

import PopperJs from 'popper.js'
window.$ = window.jQuery = jquery
window.PopperJs = PopperJs.default
import 'bootstrap';
import '@fastco/slick';
import 'alpinejs';
import 'simplebar';
const feather = require('feather-icons');
feather.replace();
import Clipboard from 'clipboard'

new Clipboard('[data-clipboard-target]')

import axios from 'axios'
import lodash from 'lodash'

window._ = lodash;

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


const token = document.head.querySelector('meta[name="csrf-token"]')

if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
}

/**
 * API Token as common header
 */

const apiToken = document.head.querySelector('meta[name="api-token"]')

if (apiToken) {
  window.axios.defaults.headers.common.Authorization = 'Bearer ' + apiToken.content
}
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
window.CallEmitTo =function(name,eventName,data=undefined){
  window.livewire.emitTo(name,eventName,data);
}
window.RefreshPage = function(name,eventName='load-page'){
  CallEmitTo(name,eventName);
}
window.ShowModal = function(name,data=undefined,eventName='show'){
  CallEmitTo(name,eventName,data);
}
window.addEventListener('load-page', event => {
  RefreshPage(event.detail.page);
})
document.addEventListener("DOMContentLoaded", () => {
  Livewire.hook('component.initialized', (component) => {
    console.log('component.initialized')
  })
  Livewire.hook('element.initialized', (el, component) => {
    console.log('element.initialized')
    feather.replace();
  })
  Livewire.hook('element.updating', (fromEl, toEl, component) => {
    console.log('element.updating')
  })
  Livewire.hook('element.updated', (el, component) => {
    console.log('element.updated')
  })
  Livewire.hook('element.removed', (el, component) => {
    console.log('element.removed')
  })
  Livewire.hook('message.sent', (message, component) => {
    console.log('message.sent')
  })
  Livewire.hook('message.failed', (message, component) => {
    console.log('message.failed')
  })
  Livewire.hook('message.received', (message, component) => {
    console.log('message.received')
  })
  Livewire.hook('message.processed', (message, component) => {
    console.log('message.processed')
  })
});