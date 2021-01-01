<template>
    <div>
        <header-app></header-app>
        <main>
            <slot></slot>
        </main>

    </div>
</template>

<script>
    import HeaderApp from '@/Incs/Header';

export default {
        components: {
            HeaderApp
        },
    }
</script>

<style scoped>

</style>
