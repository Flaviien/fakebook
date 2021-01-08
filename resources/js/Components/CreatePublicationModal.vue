<template>
    <div>
        <portal-target name="modal" multiple></portal-target>
        <jet-dialog-modal :show="modal" @close="close">
            <template #title>
                <div class="text-center">
                    <div class="inline font-bold text-center">
                        Créer une publication
                    </div>
                    <button class="float-right" @click='close'>X</button>
                </div>
                <hr class="my-2">
            </template>  
            <template #content>
                <div class="flex">
                    <img :src="$page.user.profile_photo_url" alt="Photo de profil" class="profile-picture rounded-full mr-2">
                    <div>
                        <div class="font-semibold hover:underline">
                            <a href="#">{{ $page.user.name }}</a>
                        </div>
                        <!-- <div class="text-sm text-gray-500 hover:underline">
                            // Slot pour le select pour paramètres de confidentialité
                        </div> -->
                    </div>
                </div>
                <textarea v-model="form.message" class="w-full text-xl" cols="30" rows="4" :placeholder="`Que voulez-vous dire, ${$page.user.name} ?`"></textarea>
            </template> 
            <template #footer>
                <button @click="submit(), close()" class="w-full py-1 bg-gray-200 rounded font-bold text-gray-400">Publier</button>
            </template> 
        </jet-dialog-modal>
    </div>
</template>

<script>
    import JetDialogModal from '@/Jetstream/DialogModal';

    export default {
        components: {
            JetDialogModal,
        },

        props: {
            modal: {
                default: false
            }
        },
        data() {
            return {
                form: {
                    message: ""
                }
            }
        },
        methods: {
            close() {
                this.$emit('close')
            },
            submit() {
                this.$inertia.post('/publication/store', this.form)
            }
        }
    }
</script>

<style scoped>
.profile-picture {
    width: 40px;
    min-width: 40px;
    height: 40px;
    min-height: 40px;
}
</style>