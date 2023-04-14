<x-app-layout>
    <main class="min-h-screen py-40">
        <div class="max-w-2xl mx-auto my-auto flex items-center justify-center">
            <div class="row justify-content-center mt-12">
                <div class="text-center">
                    <img src="{{asset('assets/img/icons/bonjour.png')}}" class="w-32 mx-auto" alt="">
                    <h2 class="text-white uppercase font-bold text-3xl my-4">Votre compte est bloqué</h2>
                    <p class="leading-8 text-lg my-8 text-gray-300">

                    </p>
                    <a href="{{url('/')}}" class="text text-white text-xl hover:text-sandstone no-underline mt-4 flex justify-center mt-12">
                        <img src="{{asset('assets/img/icons/fleche back-34.svg')}}" alt="fleche" class="w-10 mx-3">
                        Retour à la page accueil
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
