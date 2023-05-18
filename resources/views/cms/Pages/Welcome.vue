<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <div class="w-screen h-screen">
        <div class="flex min-h-full flex-1 items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
            <div class="w-full max-w-sm space-y-10">
              <div class="mb-10">
                <img class="mx-auto h-10 w-auto" src="/images/logo.svg" alt="Your Company" />
              </div>
              <form class="space-y-6" action="#" method="POST">
                <div class="relative -space-y-px rounded-md shadow-sm">
                  <div class="pointer-events-none absolute inset-0 z-10 rounded-md ring-1 ring-inset ring-gray-300" />
                  <div>
                    <label for="email-address" class="sr-only">Correo electrónico</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required="" class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-100 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Email address" />
                  </div>
                  <div>
                    <label for="password" class="sr-only">Contraseña</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required="" class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-100 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Password" />
                  </div>
                </div>
                
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue focus:ring-blue" />
                    <label for="remember-me" class="ml-3 block text-sm leading-6 text-gray-900">Recuerdame</label>
                  </div>
        
                  <div class="text-sm leading-6">
                    <a href="#" class="font-semibold text-blue">¿Olvidaste tu contraseña?</a>
                  </div>
                </div>
        
                <div>
                  <button type="submit" class="flex w-full justify-center rounded-md bg-yellow px-3 py-1.5 text-sm font-semibold leading-6 text-blue hover:text-white hover:bg-blue focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
              </form>
            </div>
        </div>
    </div>
  </template>