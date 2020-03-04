<template>
    <div class="p-8">
        <div class="mb-5">
            <inertia-link :href="$route('index')" class="mr-2">Index</inertia-link>
            <inertia-link :href="$route('nprogress')" class="mr-2">Nprogress</inertia-link>
            <inertia-link :href="$route('login')" class="mr-2">Login</inertia-link>
            <inertia-link :href="$route('register')">Register</inertia-link>
        </div>

        <slot></slot>
    </div>
</template>

<script>
    export default {
        //
    }
</script>
