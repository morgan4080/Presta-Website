<template>
  <div class="block pr-6 pb-8">
    <label v-if="label" class="block text-sm font-medium text-gray-700" :for="id">{{ label }}:</label>
      <div class="ProseMirrorHead" v-if="editor && cms">
          <button type="button" @click="editor.chain().focus().toggleBold().run()" :class="{ 'is-active': editor.isActive('bold') }">
              bold
          </button>
          <button type="button" @click="editor.chain().focus().toggleItalic().run()" :class="{ 'is-active': editor.isActive('italic') }">
              italic
          </button>
          <button type="button" @click="editor.chain().focus().toggleStrike().run()" :class="{ 'is-active': editor.isActive('strike') }">
              strike
          </button>
          <button type="button" @click="editor.chain().focus().toggleCode().run()" :class="{ 'is-active': editor.isActive('code') }">
              code
          </button>
          <button type="button" @click="editor.chain().focus().unsetAllMarks().run()">
              clear marks
          </button>
          <button type="button" @click="editor.chain().focus().clearNodes().run()">
              clear nodes
          </button>
          <button type="button" @click="editor.chain().focus().setParagraph().run()" :class="{ 'is-active': editor.isActive('paragraph') }">
              paragraph
          </button>
          <button type="button" @click="editor.chain().focus().toggleHeading({ level: 1 }).run()" :class="{ 'is-active': editor.isActive('heading', { level: 1 }) }">
              h1
          </button>
          <button type="button" @click="editor.chain().focus().toggleHeading({ level: 2 }).run()" :class="{ 'is-active': editor.isActive('heading', { level: 2 }) }">
              h2
          </button>
          <button type="button" @click="editor.chain().focus().toggleHeading({ level: 3 }).run()" :class="{ 'is-active': editor.isActive('heading', { level: 3 }) }">
              h3
          </button>
          <button type="button" @click="editor.chain().focus().toggleHeading({ level: 4 }).run()" :class="{ 'is-active': editor.isActive('heading', { level: 4 }) }">
              h4
          </button>
          <button type="button" @click="editor.chain().focus().toggleHeading({ level: 5 }).run()" :class="{ 'is-active': editor.isActive('heading', { level: 5 }) }">
              h5
          </button>
          <button type="button" @click="editor.chain().focus().toggleHeading({ level: 6 }).run()" :class="{ 'is-active': editor.isActive('heading', { level: 6 }) }">
              h6
          </button>
          <button type="button" @click="editor.chain().focus().toggleBulletList().run()" :class="{ 'is-active': editor.isActive('bulletList') }">
              bullet list
          </button>
          <button type="button" @click="editor.chain().focus().toggleOrderedList().run()" :class="{ 'is-active': editor.isActive('orderedList') }">
              ordered list
          </button>
          <button type="button" @click="editor.chain().focus().toggleCodeBlock().run()" :class="{ 'is-active': editor.isActive('codeBlock') }">
              code block
          </button>
          <button type="button" @click="editor.chain().focus().toggleBlockquote().run()" :class="{ 'is-active': editor.isActive('blockquote') }">
              blockquote
          </button>
          <button type="button" @click="editor.chain().focus().setHorizontalRule().run()">
              horizontal rule
          </button>
          <button type="button" @click="editor.chain().focus().setHardBreak().run()">
              hard break
          </button>
          <button type="button" @click="editor.chain().focus().undo().run()">
              undo
          </button>
          <button type="button" @click="editor.chain().focus().redo().run()">
              redo
          </button>
      </div>
    <editor-content class="ProseMirror" v-if="cms" :editor="editor" />
    <textarea v-else :id="id" ref="input" v-bind="$attrs" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full leading-6" :class="{ error: error }" :value="modelValue" @input="$emit('update:modelValue', $event.target.value);errorMsg = false" />
    <div v-if="error && errorMsg" class="text-red-400 font-xs">{{ error }}</div>
  </div>
</template>

<script>
import {getCurrentInstance} from 'vue'
import { useEditor,Editor, EditorContent } from '@tiptap/vue-3'
import {defaultExtensions} from '@tiptap/starter-kit'
import Button from "@/Jetstream/Button";
export default {
  emits: ['update:modelValue'],
  props: {
    id: {
      type: String,
      default() {
        return `textarea-input-${getCurrentInstance().uid}`
      },
    },
    cms: {
        type: Boolean,
        default () {
            return false
        }
    },
    modelValue: String,
    label: String,
    error: String,
  },
  components: {
      Button,
    EditorContent,
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
  setup({ modelValue }, { emit }) {
      const editor = useEditor({
          content: modelValue,
          extensions: defaultExtensions({blockquote: undefined, bold: undefined, bulletList: undefined, code: undefined, codeBlock: undefined, dropursor: undefined, hardBreak: undefined, heading: undefined, history: undefined, horizontalRule: undefined, italic: undefined, listItem: undefined, orderedList: undefined, paragraph: undefined, strike: undefined}),
          editorProps: {
              attributes: {
                  class:
                      "prose prose-sm sm:prose lg:prose-lg xl:prose-2xl m-5 focus:outline-none"
              }
          },
          onUpdate({ editor }) {
              console.log("updating")
              emit('update:modelValue', editor.getHTML())
          },
      })

      return {
          editor
      }
  }
}
</script>
<style scoped>
    /* Basic editor styles */
    .ProseMirrorHead > button {
        font-size: 12px;
        line-height: 1.5;
        margin: 2px;
        padding: 4px;
        background: rgba(13,13,13,0.2);
        border-right: 1px solid rgba(13,13,13,0.05);
        border-left: 1px solid rgba(13,13,13,0.05);
    }
    .ProseMirrorHead {
        padding-bottom: 0.5rem;
    }
    .ProseMirror {
        border: 0.5px solid #8080801f !important;
    }

</style>
