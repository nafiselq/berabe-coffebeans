<template>
  <button 
    :class="computedClass"
    :disabled="disabled"
  >
    <slot name="icon"></slot>
    <span>{{ label }}</span>
  </button>
</template>

<script setup>
import { computed } from "vue";

const props = defineProps({
  label: {
    type: String,
    default: "Button"
  },
  variant: {
    type: String,
    default: "primary" // primary, secondary, danger
  },
  size: {
    type: String,
    default: "md" // sm, md, lg
  },
  disabled: {
    type: Boolean,
    default: false
  },
  rounded: {
    type: String,
    default: "true"
  }
});

const computedClass = computed(() => ({
  "px-4 py-2 font-semibold rounded-full transition duration-200 flex items-center gap-2": props.rounded === "true" ,
  "px-4 py-2 font-semibold transition duration-200 flex items-center gap-2": props.rounded === "false" ,
  "bg-orange text-black hover:bg-blue-500": props.variant === "primary",
  "bg-gray-600 text-black hover:bg-gray-700": props.variant === "secondary",
  "bg-red-600 text-black hover:bg-red-700": props.variant === "danger",
  "text-xs px-3 py-1": props.size === "sm",
  "text-base px-4 py-2": props.size === "md",
  "text-lg px-6 py-3": props.size === "lg",
  "opacity-50 cursor-not-allowed": props.disabled
}));
</script>