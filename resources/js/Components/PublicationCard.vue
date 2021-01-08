<template>
    <div class="card w-full shadow bg-white rounded-lg mb-3">
        <div class="card-head flex px-4 pt-4">
            <img :src="user.profile_photo_url" alt="Photo de profil" class="profile-picture rounded-full mr-2">
            <div>
                <div class="font-semibold hover:underline">
                    <a href="#">{{ user.name }}</a>
                </div>
                <div class="text-sm text-gray-500 hover:underline">
                    <a href="#">3h</a>
                </div>
            </div>
        </div>

        <div class="card-body my-3">
            <div v-if="publication.content" class="px-4">
                <p>{{ publication.content }}</p>
            </div>
            <div v-if="publication.image_url">
                
            </div>
        </div>

        <div class="card-footer px-4 pb-2">
            <div class="flex justify-between text-gray-500">
                <div>
                    <a href="#">{{ publication.likes }}</a>
                </div>
                <div class="flex">
                    <div class="mr-2 text-gray-500 hover:underline">
                        <a href="#">15 commentaires</a>
                    </div>
                    <div class="text-gray-500 hover:underline">
                        <a href="#">33 partages</a>
                    </div>
                </div>
            </div>

            <hr class="my-2">

            <div class="flex">
                <div class="btn-actions font-semibold text-gray-500 flex-1 text-center hover:bg-gray-100 rounded cursor-pointer">J'aime</div>
                <div class="btn-actions font-semibold text-gray-500 flex-1 text-center hover:bg-gray-100 rounded cursor-pointer">Commenter</div>
                <div class="btn-actions font-semibold text-gray-500 flex-1 text-center hover:bg-gray-100 rounded cursor-pointer">Partager</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        user: Object,
        publication: Object
    },
    mounted() {
        //console.log(this.$props.publication);
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

.btn-actions {
    height: 32px;
    line-height: 32px; /* Same line-height than height for center text */
}
</style>