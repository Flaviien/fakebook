<template>
    <header class="flex justify-between content-center py-1 px-4 bg-white shadow">
        <div class="flex items-center">
            <a :href="$route('dashboard')"><img id="logo" src="/img/fakebook-rounded.svg" alt="Logo Fakebook rond" class="mr-2"></a>
            <div id="search-bar" class="flex bg-gray-200 rounded-full items-center pl-3 xl:hidden">
                <img src="/img/nav/search.svg" alt="Logo bouton de recherche" class="item-center svg-size mr-2">
                <input class="bg-gray-200 rounded-full w-56" type="text" placeholder="Rechercher sur Fakebook">
            </div>
        </div>

        <nav class="flex 2xl:w-full xl:w-2/5 lg:w-1/3 md:w-1/4">
            <a class="flex justify-center w-1/5 h-full hover:bg-gray-200 rounded" :href="$route('dashboard')"><img class="mx-center" src="/img/nav/accueil.svg" alt="Logo Accueil"></a>
            <a class="flex justify-center w-1/5 h-full hover:bg-gray-200 rounded" href="#"><img class="mx-center" src="/img/nav/amis.svg" alt="Logo Amis"></a>
            <a class="flex justify-center w-1/5 h-full hover:bg-gray-200 rounded" href="#"><img class="mx-center" src="/img/nav/watch.svg" alt="Logo Watch"></a>
            <a class="flex justify-center w-1/5 h-full hover:bg-gray-200 rounded" href="#"><img class="mx-center" src="/img/nav/marketplace.svg" alt="Logo Marketplace"></a>
            <a class="flex justify-center w-1/5 h-full hover:bg-gray-200 rounded" href="#"><img class="mx-center" src="/img/nav/groupes.svg" alt="Logo Groupes"></a>
        </nav>
        
        <ul class="flex items-center justify-end w-1/6">
            <li class="xl:hidden rounded-full bg-blue-50 hover:bg-blue-100 p-1 pr-2 ml-2"><inertia-link class="flex items-center" :href="$route('user.show', $page.user.id)">
                <img class="profile-picture rounded-full mr-2" :src="$page.user.profile_photo_url" alt="Photo de profil">
                {{ $page.user.firstname }}
                </inertia-link>
            </li>

            <li class="ml-2">
                <jet-dropdown width="96">
                    <template #trigger>
                        <a href="#"><div class="rounded-full bg-gray-200 hover:bg-gray-300 p-2"><img class="svg-size" src="/img/nav/plus.svg" alt="Logo Créer"></div></a>
                    </template>
                    <template #content>
                        <div class="dropdown">
                            <h3 class="font-bold text-2xl">Créer</h3>
                            <a class="cursor-pointer block px-2 py-2 text-sm leading-5 text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" @click="openPublicationModal">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo1.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-bold">Publication</p>
                                        <p class="text-sm">Partagez une publication sur le fil d'actualité.</p>
                                    </div>
                                </div>
                            </a>
                            
                            <jet-dropdown-link href="#">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo2.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-bold">Story</p>
                                        <p class="text-sm">Partagez une photo ou un message.</p>
                                    </div>
                                </div>
                            </jet-dropdown-link>

                            <jet-dropdown-link href="#">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo3.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-bold">Évènement marquant</p>
                                        <p class="text-sm">Ajoutez un évènement marquant sur votre profil.</p>
                                    </div>
                                </div>
                            </jet-dropdown-link>

                            <hr class="my-2">

                            <jet-dropdown-link href="#">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo4.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-bold">Page</p>
                                        <p class="text-sm">Communiquez et partagez avec vos clients ou fans.</p>
                                    </div>
                                </div>
                            </jet-dropdown-link>

                            <jet-dropdown-link href="#">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo5.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-bold">Groupe</p>
                                        <p class="text-sm">Communiquez avec des personnes qui partagent vos centres d'intérêt.</p>
                                    </div>
                                </div>
                            </jet-dropdown-link>

                            <jet-dropdown-link href="#">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo6.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-bold">Évènement</p>
                                        <p class="text-sm">Rassemblez les gens autour d'un évènement public ou privé.</p>
                                    </div>
                                </div>
                            </jet-dropdown-link>

                            <jet-dropdown-link href="#">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo7.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-bold">Petite annonce Marketplace</p>
                                        <p class="text-sm">Vendez des articles aux membres de votre communauté.</p>
                                    </div>
                                </div>
                            </jet-dropdown-link>

                            <jet-dropdown-link href="#">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo8.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-bold">Collect de fonds</p>
                                        <p class="text-sm">Levez des fonds pour une cause qui vous tient à cœur.</p>
                                    </div>
                                </div>
                            </jet-dropdown-link>
                        </div>
                    </template>
                </jet-dropdown>
            </li>
            <li class="ml-2">
                <jet-dropdown width="96">
                <template #trigger>
                    <a href="#"><div class="rounded-full bg-gray-200 hover:bg-gray-300 p-2"><img class="svg-size" src="/img/nav/messenger.svg" alt="Logo Messenger"></div></a>
                </template>
                    <template #content>
                        <div class="dropdown">
                            <div class="flex justify-between">
                                <h3 class="font-bold text-2xl flex-3">Messenger</h3>
                                <div class="flex">
                                    <div class="logo-size cursor-pointer hover:bg-gray-200 rounded-full p-2 mr-2"><img src="/img/nav/logos-png/logo9.png" alt=""></div>
                                    <div class="logo-size cursor-pointer hover:bg-gray-200 rounded-full p-2 mr-2"><img src="/img/nav/logos-png/logo10.png" alt=""></div>
                                    <div class="logo-size cursor-pointer hover:bg-gray-200 rounded-full p-2 mr-2"><img src="/img/nav/logos-png/logo11.png" alt=""></div>
                                    <div class="logo-size cursor-pointer hover:bg-gray-200 rounded-full p-2 mr-2"><img src="/img/nav/logos-png/logo1.png" alt=""></div>
                                </div>
                                
                            </div>
                            <div class="flex bg-gray-200 rounded-full items-center m-2 p-2">
                                <img src="/img/nav/search.svg" alt="Logo bouton de recherche" class="item-center svg-size mr-2">
                                <input class="bg-gray-200 rounded-full w-56" type="text" placeholder="Rechercher dans messenger">
                            </div>
                            <hr>
                            <div class="text-center py-2">
                                <a href="#" class="text-blue-600 hover:text-blue-700 hover:underline">Tout voir dans messenger</a>
                            </div>
                            
                        </div>
                        
            
                    </template>
                </jet-dropdown>
            </li>
            <li class="ml-2">
                <jet-dropdown width="96">
                    <template #trigger>
                        <a href="#"><div class="rounded-full bg-gray-200 hover:bg-gray-300 p-2"><img class="svg-size" src="/img/nav/notifications.svg" alt="Logo Notifications"></div></a>
                    </template>
                    <template #content>
                        <div class="dropdown">
                            <div class="row">
                                <h3 class="font-bold text-2xl">Notifications</h3>
                                <img src="" alt="">
                            </div>
                            <div class="new-notifs">
                                <h4 class="font-bold text-lg">Nouveau</h4>
                                <jet-dropdown-link href="#">
                                    <div class="flex notif">
                                        <img class="notif-profile-picture rounded-full mr-2" :src="$page.user.profile_photo_url" alt="">
                                        <div class="notif-content">
                                            <p class="overflow-hidden h-4/5 leading-4">
                                                <strong class="text-bold">Prénom</strong> et <strong class="text-bold">Prénom</strong>
                                                Ceci est une notification. Ceci est une notification. Ceci est une notification. 
                                                Ceci est une notification. Ceci est une notification. </p>
                                            <span class="h-1/5 text-sm">il y à 2 heures</span>
                                        </div>
                                    </div>
                                </jet-dropdown-link>
                                <jet-dropdown-link href="#">
                                    <div class="flex notif">
                                        <img class="notif-profile-picture rounded-full mr-2" :src="$page.user.profile_photo_url" alt="">
                                        <div class="notif-content">
                                            <p class="overflow-hidden h-4/5 leading-4">
                                                <strong class="text-bold">Prénom</strong> et <strong class="text-bold">Prénom</strong>
                                                Ceci est une notification. Ceci est une notification. Ceci est une notification. 
                                                Ceci est une notification. Ceci est une notification. </p>
                                            <span class="h-1/5 text-sm">il y à 2 heures</span>
                                        </div>
                                    </div>
                                </jet-dropdown-link>
                            </div>
                            <div class="old-notifs">
                                <h4 class="font-bold text-lg">Plus tôt</h4>
                                <jet-dropdown-link href="#">
                                    <div class="flex notif">
                                        <img class="notif-profile-picture rounded-full mr-2" :src="$page.user.profile_photo_url" alt="">
                                        <div class="notif-content">
                                            <p class="overflow-hidden h-4/5 leading-4">
                                                <strong class="text-bold">Prénom</strong> et <strong class="text-bold">Prénom</strong>
                                                Ceci est une notification. Ceci est une notification. Ceci est une notification. 
                                                Ceci est une notification. Ceci est une notification. </p>
                                            <span class="h-1/5 text-sm">il y à 2 heures</span>
                                        </div>
                                    </div>
                                </jet-dropdown-link>
                                <jet-dropdown-link href="#">
                                    <div class="flex notif">
                                        <img class="notif-profile-picture rounded-full mr-2" :src="$page.user.profile_photo_url" alt="">
                                        <div class="notif-content">
                                            <p class="overflow-hidden h-4/5 leading-4">
                                                <strong class="text-bold">Prénom</strong> et <strong class="text-bold">Prénom</strong>
                                                Ceci est une notification. Ceci est une notification. Ceci est une notification. 
                                                Ceci est une notification. Ceci est une notification. </p>
                                            <span class="h-1/5 text-sm">il y à 2 heures</span>
                                        </div>
                                    </div>
                                </jet-dropdown-link>
                            </div>
                        </div>
                    </template>
                </jet-dropdown>
            </li>
            <li class="ml-1">
                <jet-dropdown width="96">
                    <template #trigger>
                        <a href="#"><div class="rounded-full bg-gray-200 hover:bg-gray-300 p-2"><img class="svg-size" src="/img/nav/caret-down.svg" alt="Logo Compte"></div></a>
                    </template>
                    <template #content>
                        <div class="dropdown">
                            <jet-dropdown-link :href="$route('user.show', $page.user.id)" class=" rounded-2xl">
                                <div class="flex">
                                        <img class="notif-profile-picture rounded-full mr-2" :src="$page.user.profile_photo_url" alt="">
                                        <div>
                                            <p class="font-bold">{{ $page.user.name }}</p>
                                            <p class="text-sm">Voir votre profil</p>
                                        </div>
                                    </div>
                            </jet-dropdown-link>
                            <hr class="my-2">
                            <jet-dropdown-link href="#" class=" rounded-2xl">
                                <div class="flex">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo12.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-bold">Donner votre avis</p>
                                        <p class="text-sm">Aidez-nous à améliorer la nouvelle version de Fakebook.</p>
                                    </div>
                                </div>
                            </jet-dropdown-link>
                            <hr class="my-2">
                            <jet-dropdown-link :href="$route('user.settings')" class=" rounded-2xl">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo13.png" alt="">
                                    </div>
                                    <p class="font-bold">Paramètres et confidentialité</p>
                                </div>
                            </jet-dropdown-link>
                            <jet-dropdown-link href="#" class=" rounded-2xl">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo14.png" alt="">
                                    </div>
                                    <p class="font-bold">Aide et assistance</p>
                                </div>
                            </jet-dropdown-link>
                            <jet-dropdown-link href="#" class=" rounded-2xl">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo15.png" alt="">
                                    </div>
                                    <p class="font-bold">Préférences d'affichage</p>
                                </div>
                            </jet-dropdown-link>
                            <jet-dropdown-link :href="$route('logout')" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class=" rounded-2xl">
                                <div class="flex items-center">
                                    <div class="logo-size bg-gray-200 rounded-full p-2 mr-2">
                                        <img class="inline" src="/img/nav/logos-png/logo16.png" alt="">
                                    </div>
                                    <p class="font-bold">Se déconnecter</p>
                                </div>
                            </jet-dropdown-link>
                            <form id="logout-form" method="POST" :action="$route('logout')">
                                <input type="hidden" name="_token" :value="$props.csrf_token">
                            </form>
                        </div>
                    </template>
                </jet-dropdown>
            </li>
        </ul>
    </header>
</template>

<script>
    import JetDropdown from '@/Jetstream/Dropdown';
    import JetDropdownLink from '@/Jetstream/DropdownLink';
    import JetNavLink from '@/Jetstream/NavLink';
    import Lib from '@/mixins/Lib';

    export default {
        components: {
            JetDropdown,
            JetDropdownLink,
            JetNavLink
        },
        mixins: [Lib],
        props: {
            csrf_token: String
        },
        data() {
            return {
                csrf: Lib.methods.getCookie('XSRF-TOKEN')
            }
        },
        mounted() {
        },
        methods: {
            logout() {
                this.$inertia.post('/logout', {
                    _token: this.$props.csrf_token
                })
            },
            openPublicationModal() {
                this.$emit('openPublicationModal')
            }
        }
    }
</script>
<style scoped>
    header {
        height: 56px;    
    }

    #search-bar{
        height: 40px;
    }

    #logo {
        width: 40px;
        min-width: 40px;
        height: 40px;
        min-height: 40px;
    }

    .svg-size {
        width: 20px;
        min-width: 20px;
        height: 20px;
        min-height: 20px;
    }

    .profile-picture {
        width: 30px;
        min-width: 30px;
        height: 30px;
        min-height: 30px;
    }

    /* Dropdowns */
    .dropdown {
        width: 360px;
        padding: 8px;
    }

    .logo-size {
        width: 36px;
        min-width: 36px;
        height: 36px;
        min-height: 36px;
    }
        /*Créer */
        /*Messenger */
        /*Notifications */

        .notif {
            width: 344px;
            height: 91px;
        }

        .notif-content {
            width: 260px;
            height: 91px;
        }

        .notif-profile-picture {
            width: 56px;
            height: 56px;
        }
        /*Menu */



    @media screen and (min-width: 1280px) {
        nav {
            width: 550px;
        }
    }
</style>