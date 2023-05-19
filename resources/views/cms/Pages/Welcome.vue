<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Login from '@/Pages/Auth/Login.vue'

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Login/>
  </template>