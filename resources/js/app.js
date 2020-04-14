import Vue from 'vue'
import TurbolinksAdapter from 'vue-turbolinks'

require('./bootstrap')

var Turbolinks = require('turbolinks')

Turbolinks.start()

/**
 * Third party
 */
Vue.use(TurbolinksAdapter)

/**
 * Global Mixins
 */
Vue.mixin({
  methods: {
    visit: (url) => Turbolinks.visit(url),
    reload () {
      var scrollPosition

      document.addEventListener('turbolinks:load', function () {
        if (scrollPosition) {
          window.scrollTo.apply(window, scrollPosition)
          scrollPosition = null
        }
      }, false)

      scrollPosition = [window.scrollX, window.scrollY]
      Turbolinks.visit(window.location, { action: 'replace' })
    }
  }
})

document.addEventListener('turbolinks:load', () => {
  /* eslint-disable no-new */
  new Vue({
    el: '#app'
  })
})
