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

    <Head title="Welcome" />

    <div
        class="container">
        <div v-if="canLogin" class="">
            <Link v-if="$page.props.user" :href="route('dashboard')"
                class="mr-5">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="ms-5">Log in</Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="mr-5">Register</Link>
            </template>
        </div>
    </div>

</template>
