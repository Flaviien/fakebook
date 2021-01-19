<template>
    <app-layout :csrf_token="csrf_token" :modal="modalData" @openPublicationModal="modalData = true" @close="modalData = false">
        <main>
            <div class="feed flex flex-col items-center m-xcenter">
                <div class="stories w-full">
                    <!-- Stories -->
                </div>
                <div class="w-full shadow bg-white rounded-lg mt-4 mb-3">
                    <div class="flex m-4">
                        <img class="profile-picture rounded-full mr-3" :src="$page.user.profile_photo_url" alt="">
                        <button class="bg-gray-100 rounded-full w-full text-left pl-4" @click='modalData = true'>Que voulez-vous dire, {{ $page.user.name }} ?</button>
                    </div>
                </div>
                <div class="w-full" v-for="(publication, index) in publications" :key="index">
                    <publication-card :publication="publications[index]" :user="users[publications[index].user_id-1]"  :liked="publication.liked == true ? true : false"></publication-card>
                </div>
            </div> 
        </main>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout';
    import PublicationCard from '@/Components/PublicationCard';


    export default {
        components: {
            AppLayout,
            PublicationCard,
        },
        props: {
            publications: Array,
            users: Array,
            csrf_token: String,
            likes: Array
        },

        data() {
            return {
                modalData: false,
                like: []
            }
        },

        mounted() {
        },
        methods: {
            /* testm() {
                this.modal = true
            } */
        }
    } 
</script>

<style scoped>

.feed {
    width: 590px;
}

.profile-picture {
    width: 40px;
    min-width: 40px;
    height: 40px;
    min-height: 40px;
}
</style>