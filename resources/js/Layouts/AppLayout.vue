<template>
    <div>
        <header-app :csrf_token="csrf_token" @openPublicationModal="openPublicationModal"></header-app>
        
        <slot></slot>
        <create-publication-modal :modal="modalData" @close="closePublicationModal"></create-publication-modal>
    </div>
</template>

<script>
    import HeaderApp from '@/Incs/Header';
    import CreatePublicationModal from '@/Components/CreatePublicationModal';

    export default {
        components: {
            HeaderApp,
            CreatePublicationModal
        },
        props: {
            modal: Boolean,
            csrf_token: String
        },
        data() {
            return {
                modalData: this.$props.modal,
            }
        },
        methods: {
            openPublicationModal() {
                this.$emit('openPublicationModal')
            },
            closePublicationModal() {
                this.modalData = false
                this.$emit('close')
            }
        },
        watch: {
            modal(test) {
                this.modalData = test
            }
        }
    }
</script>

<style scoped>

</style>
