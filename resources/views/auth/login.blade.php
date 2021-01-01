<x-guest-layout>
    <div class="my-40">
        <div class="flex flex-row justify-center mx-40">
            <div class="mt-20 mr-20" style="width: 548px; min-width: 548px;">
                <img style="width: 300px;" src="/img/fakebook.svg" alt="logo fakebook" class="mb-4">
                <div class="text-3xl">
                    Avec Fakebook, partagez et restez en contact avec votre entourage.
                </div>
            </div>
            <div style="width: 396px;">
                <form method="POST" action="{{ route('login') }}" style="width: 396px;"
                    class="flex flex-col bg-white shadow-2xl rounded-lg p-5">
                    @csrf
                    <input type="text" name="email" class="border rounded-lg mb-4 p-4" placeholder="Adresse e-mail"
                        autofocus value="test@gmail.com">
                    <input type="password" name="password" class="border rounded-lg mb-4 p-4" placeholder="Mot de passe"
                        value="password">

                    <x-jet-validation-errors class="mb-4" />

                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white text-xl rounded-lg mb-4 p-3">{{ __('Connexion') }}</button>
                    <a href="#" class="text-blue-600 text-sm text-center mb-4 hover:underline">Mot de passe oublié ?</a>
                    <hr class="mb-5">
                    <a href="{{ route('register-page') }}"
                        class="bg-green-400 hover:bg-green-500 text-white text-lg rounded-lg p-5 text-center ">Créer un
                        compte</a>
                </form>
                <div class="mt-5 px-5 text-sm text-center">
                    <a href="#" class="font-bold">Créer une Page</a> pour une célébrité, un groupe ou une entreprise.
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>