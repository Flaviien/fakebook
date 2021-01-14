<template>
    <app-layout>
        <div class="banner bg-white shadow"><!-- banner -->
            <div class="container h-full m-xcenter">
                <div class="cover-picture flex items-end bg-gray-100 rounded-b-lg"><!-- couverture -->
                    
                    <div class="grid grid-cols-3 justify-items-center items-end h-40 w-full bg-gradient-to-t from-gray-500 via-gray-100 to-gray-100 rounded-b-lg">
                        <div class="col-start-2 col-end-3 profile-picture rounded-full border-4 border-white cursor-pointer overflow-hidden">
                            <img class="rounded-full overflow-hidden" v-if="$page.user.profile_photo_url" src="/img/placeholder-profile.png" alt="photo de profile">
                        </div>
                        <button class="col-start-3 col-end-3 font-semibold bg-gray-100 rounded p-2 m-5">Ajouter une photo de couverture</button>
                        
                    </div>
                </div>

                <div class="text-center">
                    <h1 class="font-bold text-4xl my-3">{{ $page.user.name }}</h1><!-- name -->
                    <p v-if="$page.user.bio && !editBio">{{ $page.user.bio }}</p>
                    <a v-if="!$page.user.bio && !editBio" class="text-blue-700 hover:underline" href="#" @click.prevent="editBio = true">Ajouter une bio</a>
                    <a v-if="$page.user.bio && !editBio" class="text-blue-700 hover:underline" href="#" @click.prevent="editBio = true">Modifier</a>

                    <div v-if="editBio" class="w-96 m-xcenter">
                        <textarea @keypress.enter="updateBio" class="w-full text-center bg-gray-100 border rounded-lg font-semibold" name="input-bio" rows="3" v-model="bio"></textarea>
                        <div class="text-right font-light text-sm mb-2">
                            <span>{{ characterMax - bio.length }}</span> caractères restants
                        </div>
                        <div class="text-right">
                            <button class="p-2 font-semibold bg-gray-200 hover:bg-gray-300 rounded-lg" @click.prevent="editBio = false">Annuler</button>
                            <button class="p-2 font-semibold bg-gray-200 hover:bg-gray-300 rounded-lg" @click.prevent="updateBio">Enregistrer</button>
                        </div>
                        
                    </div>

                </div>
                <hr class="mt-2">
                <nav class="flex justify-between items-center h-14">
                    <div class="w-1/2 flex justify-between items-center font-semibold text-gray-500">
                        <a href="#" >Publications</a>
                        <a href="#">A propos</a>
                        <a href="#">Amis</a>
                        <a href="#">Photos</a>
                        <a href="#">Plus</a>
                    </div>

                    <div class="flex items-center font-semibold p-2 bg-gray-200 rounded-lg">
                        <img class="w-4 h-4 mr-1" src="/img/profile/pen.png" alt="">
                        <button class="">Modifier le profil</button><!-- modifier le profil -->
                    </div>
                </nav>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout';

export default {
    components: {
        AppLayout
    }, 
    props: {
        csrf_token: String
    },
    data() {
        return {
            editBio: false,
            bio: this.$page.user.bio || "",
            characterMax: 101
        }
    },
    methods: {
        updateBio() {
            this.editBio = false;

            this.$inertia.put(`/user/${this.$page.user.id}/update`, {
                _token: this.$props.csrf_token,
                bio: this.bio
            }) 
        }
    },
    computed: {
        remainingCharacter() {
            return this.characterMax - this.bio.length
        }
    }
}
</script>

<style scoped>
    .container {
        width: 940px;
    }
    .cover-picture {
        height: 350px;
    }
    .profile-picture {
        width: 168px;
        height: 168px;
    }
</style>