<template>
  <div class="block pr-6 pb-8">
    <label v-if="label" class="form-label" :for="id">{{ label }}:</label>
    <textarea :id="id" ref="input" v-bind="$attrs" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full leading-6" :class="{ error: error }" :value="modelValue" @input="$emit('update:modelValue', $event.target.value);errorMsg = false" />
    <div v-if="error && errorMsg" class="text-red-400 font-xs">{{ error }}</div>
  </div>
</template>

<script>
import { getCurrentInstance } from 'vue'
export default {
  props: {
    id: {
      type: String,
      default() {
        return `textarea-input-${getCurrentInstance().uid}`
      },
    },
    modelValue: String,
    label: String,
    error: String,
  },
  data() {
    return {
        errorMsg: true
    }
  },
  methods: {
    focus() {
      this.$refs.input.focus()
    },
    select() {
      this.$refs.input.select()
    },
  },
}
</script>
