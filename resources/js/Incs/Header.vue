<template>
    <header class="flex justify-between content-center py-2 px-4 bg-white shadow">
        <div class="flex w-1/5">
            <a :href="$route('dashboard')"><img id="logo" src="/img/fakebook-rounded.svg" alt="Logo Fakebook rond" class="mr-2"></a>
            <div class="flex bg-gray-200 rounded-full items-center pl-3">
                <img src="/img/nav/search.svg" alt="Logo bouton de recherche" class="item-center logos-size mr-2">
                <input class="bg-gray-200 rounded-full w-56" type="text" placeholder="Rechercher sur Fakebook">
            </div>
            
        </div>

        <nav class="flex justify-around items-center">
            <a class="flex w-1/5 h-full hover:bg-gray-200 rounded" href="#"><img class="mx-center" src="/img/nav/accueil.svg" alt="Logo Accueil"></a>
            <a class="flex w-1/5 h-full hover:bg-gray-200 rounded" href="#"><img class="mx-center" src="/img/nav/amis.svg" alt="Logo Amis"></a>
            <a class="flex w-1/5 h-full hover:bg-gray-200 rounded" href="#"><img class="mx-center" src="/img/nav/watch.svg" alt="Logo Watch"></a>
            <a class="flex w-1/5 h-full hover:bg-gray-200 rounded" href="#"><img class="mx-center" src="/img/nav/marketplace.svg" alt="Logo Marketplace"></a>
            <a class="flex w-1/5 h-full hover:bg-gray-200 rounded" href="#"><img class="mx-center" src="/img/nav/groupes.svg" alt="Logo Groupes"></a>
        </nav>

        <ul class="flex justify-between w-1/6">
            <li class="my-center border rounded-full hover:bg-gray-200 p-1 pr-2"><inertia-link class="flex items-center" :href="$route('user.show')">
                <img id="profile-picture" class="rounded-full mr-2" :src="$page.user.profile_photo_url" alt="Photo de profil">
                {{ $page.user.name }}
                </inertia-link>
            </li>
            <li><a href="#"><div class="border rounded-full bg-gray-200 hover:bg-gray-300 p-2"><img class="logos-size nav-right" src="/img/nav/plus.svg" alt="Logo Créer"></div></a></li>
            <li><a href="#"><div class="border rounded-full bg-gray-200 hover:bg-gray-300 p-2"><img class="logos-size nav-right" src="/img/nav/messenger.svg" alt="Logo Messenger"></div></a></li>
            <li><a href="#"><div class="border rounded-full bg-gray-200 hover:bg-gray-300 p-2"><img class="logos-size nav-right" src="/img/nav/notifications.svg" alt="Logo Notifications"></div></a></li>
            <li><a href="#"><div class="border rounded-full bg-gray-200 hover:bg-gray-300 p-2"><img class="logos-size nav-right" src="/img/nav/caret-down.svg" alt="Logo Compte"></div></a></li>
        </ul>
    </header>
</template>

<script>
export default {
    }
</script>

<style scoped>
    #logo {
        width: 40px;
        height: 40px;
    }

    nav {
        width: 550px;
    }

    .logos-size {
        width: 20px;
        min-width: 20px;
        height: 20px;
        min-height: 20px;
    }

    #profile-picture {
        width: 30px;
        min-width: 30px;
        height: 30px;
        min-height: 30px;
    }

    .my-center{
        margin: auto 0;
    }

    .mx-center{
        margin: 0 auto;
    }

</style>