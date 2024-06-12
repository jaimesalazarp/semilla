<nav class="bg-lime-50 py-0 px-0 relative">
    <div class="container mx-auto flex px-8 xl:px-0 items-center">

        <div>
            <img src="/img/logo2.png" items-center width="100" height="70" alt="">
        </div>

        <div id="menu"
            class="lg:flex hidden flex-grow justify-between absolute lg:relative lg:top-0 top-24 left-0 w-full lg:w-auto py-14 lg:py-0 px-8">
            <div class="flex flex-grow justify-center">
                <ul class="flex flex-col lg:flex-row">
                    <li class="lg:mr-4 mb-8 lg:mb-0 py-2"><a href=" {{ route('home') }}"> Inicio </a></li>
                    <li class="lg:mr-4 mb-8 lg:mb-0 py-2"><a href=" {{ route('about') }}"> Quienes Somos </a></li>
                    <li class="lg:mr-4 mb-8 lg:mb-0 py-2"><a href=" {{ route('catalogo') }}"> Catálogo</a></li>
                    <li class="lg:mr-4 mb-8 lg:mb-0 py-2"><a href=" {{ route('posts.index') }}"> Blog</a></li>
                    <li class="lg:mr-4 mb-8 lg:mb-0 py-2"><a href=" {{ route('contact') }}"> Contacto </a></li>
                </ul>
            </div>
            <div class="flex flex-col lg:flex-row text-center">
                <a href="#"
                    class="mr-2 border border-black py-2.5 px-5 rounded-md hover:bg-white transition duration-500 ease-in-out lg:mr-4 mb-8 lg:mb-0">
                    inicio sesion
                </a>
                <a href="#"
                    class="bg-blue-400 border border-blue-500 py-2.5 px-5 rounded-md hover:bg-blue-500 hover:border-blue-500 transition duration-500 ease-in-out">
                    Regístrate
                </a>
            </div>


        </div>

        <div class="flex flex-grow lg:hidden justify-end">
            <img src="img/menu_24.png" onclick="openMenu();" width="50" height="50" alt="">
        </div>

    </div>


</nav>

<script>
    function openMenu() {
        let menu = document.getElementById('menu');

        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    }
</script>