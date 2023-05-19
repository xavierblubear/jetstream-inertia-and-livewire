<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import AuthenticationCard from "@/Components/AuthenticationCard.vue";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.transform((data) => ({
        ...data,
        remember: form.remember ? "on" : "",
    })).post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Log in" />
    <div class="w-screen h-screen">
        <div class="flex min-h-full flex-1 items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
            <div class="w-full max-w-sm space-y-10">
                <div class="mb-10">
                <img class="mx-auto h-10 w-auto" src="/images/logo.svg" alt="Your Company" />
                </div>
                <form class="space-y-6" @submit.prevent="submit">
                <div class="relative -space-y-px rounded-md shadow-sm">
                    <div class="pointer-events-none absolute inset-0 z-10 rounded-md ring-1 ring-inset ring-gray-300" />
                    <div>
                        <InputLabel for="email" value="Correo electrónico"  class="sr-only" />
                        <TextInput
                            id="email"
                            v-model="form.email"
                            type="email"
                            class="mt-1 block w-full"
                            placeholder="Correo electrónico"
                            required
                            autofocus
                            autocomplete="username"
                        />
                    </div>
                    <div>
                        <InputLabel for="password" value="Contraseña" class="sr-only"/>
                        <TextInput
                            id="password"
                            v-model="form.password"
                            type="password"
                            class="mt-1 block w-full"
                            placeholder="Contraseña"
                            required
                            autocomplete="current-password"
                        />
                        
                    </div>
                </div>
                <div class="flex flex-col">
                    <InputError class="mt-2" :message="form.errors.email" />
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <Checkbox v-model:checked="form.remember" name="remember" />
                    <label for="remember-me" class="ml-3 block text-sm leading-6 text-gray-900">Recuerdame</label>
                    </div>
        
                    <div class="text-sm leading-6">
                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Forgot your password?
                        </Link>
                    </div>
                </div>
        
                <div>
                    <PrimaryButton
                            class="ml-4"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Log in
                        </PrimaryButton>
                </div>
                </form>
            </div>
        </div>
    </div>
    
</template>
