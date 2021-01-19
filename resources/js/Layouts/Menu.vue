<template>
    <div v-if="canLogin" class="menuConnexion">
        <inertia-link v-if="$page.props.user" href="/dashboard" style="color: white !important;">
            Dashboard
        </inertia-link>

        <template v-else>
            <inertia-link :href="route('login')" style="color: white !important;">
                Login
            </inertia-link>

            <inertia-link v-if="canRegister" :href="route('register')" style="color: white !important;">
                Register
            </inertia-link>
        </template>
    </div>
</template>

<script>
    export default {
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
        }
    }
</script>