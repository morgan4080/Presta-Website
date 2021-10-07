<template>
  <div class="block" :class="{'pb-8 pr-6' : doBottomPad, 'pb-0 pr-0' : !doBottomPad}">
    <label v-if="label" class="block text-sm font-medium text-gray-700" :for="id">{{ label }}:</label>
    <input :id="id" ref="input" v-bind="$attrs" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full leading-6" :class="{ error: error }" :type="type" :value="modelValue" @input="$emit('update:modelValue', $event.target.value);errorMsg = false" />
    <div v-if="error && errorMsg" class="text-red-400 font-xs">{{ error }}</div>
  </div>
</template>

<script>
import { getCurrentInstance } from 'vue'
import throttle from "lodash/throttle";

export default {
  props: {
    id: {
      type: String,
      default() {
        return `text-input-${getCurrentInstance().uid}`
      },
    },
    type: {
      type: String,
      default: 'text',
    },
    modelValue: String,
    label: String,
    error: String,
    doBottomPad: {
        type: Boolean,
        default: true
    }
  },
  data() {
      return {
          errorMsg: true
      }
  },
  watch: {
      error: {
          deep: true,
          handler: throttle(function() {
              if (this.error) {
                  this.errorMsg = true
              }
          })
      }
  },
  methods: {
    focus() {
      this.$refs.input.focus()
    },
    select() {
      this.$refs.input.select()
    },
    setSelectionRange(start, end) {
      this.$refs.input.setSelectionRange(start, end)
    }
  },
  created() {
      this.errorMsg = false
  }
}
</script>
