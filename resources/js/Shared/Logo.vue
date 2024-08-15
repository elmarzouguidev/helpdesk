<template>
    <img v-if="name === 'white'" class="logo w-[195px] h-auto" src="/images/logo_white.png" alt="Logo nsa application">
    <img v-else class="logo w-[195px] h-auto" src="/images/logo.png" alt="Logo nsa application" />
</template>
<script>
export default {
    props: {
        name: String,
    },
}
</script>
