<template>
  <button ref="el" type="button" @click="show = true">
    <slot />
    <teleport v-if="show" to="#dropdown">
      <div>
          <div style="position: fixed; top: 0; right: 0; left: 0; bottom: 0; z-index: 99998; background: black; opacity: .2" @click="show = false" />
          <div ref="dropdown" style="position: absolute; z-index: 99999;" @click.stop="show = autoClose ? false : true">
              <slot name="dropdown" />
          </div>
      </div>
    </teleport >
  </button>
</template>

<script>
import Popper from 'popper.js'
import { ref, watch, nextTick  } from 'vue'

export default {
  props: {
    placement: {
      type: String,
      default: 'bottom-end',
    },
    boundary: {
      type: String,
      default: 'scrollParent',
    },
    autoClose: {
      type: Boolean,
      default: true,
    },
  },
  mounted() {
    document.addEventListener('keydown', e => {
      if (e.keyCode === 27) {
        this.show = false
      }
    })
  },
  setup({ placement, boundary }) {
      const dropdown = ref(null)
      const el = ref(null)
      const show = ref(false)
      const popper = ref(null)
      watch(show, (show) => {
          if (show) {
              console.log(el.value, dropdown.value);
              nextTick(() => {
                  popper.value = new Popper(el.value, dropdown.value, {
                      placement: placement,
                      modifiers: {
                          preventOverflow: { boundariesElement: boundary },
                      },
                  })
              })
          } else if (popper.value) {
              setTimeout(() => popper.value.destroy(), 100)
          }
      })
      return {
          dropdown,
          show,
          popper,
          el
      }
  }
}
</script>
