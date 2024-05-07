{{-- ul>li*4>a --}}
{{-- <nav>
    <ul>
        <li><a href="{{ route('home')}}">Home</a></li>
        <li><a href="{{ route('blog')}}">Blog</a></li>
        <li><a href="{{ route('about')}}">Nosotros</a></li>
        <li><a href="{{ route('contact')}}">Contacto</a></li>
    </ul>
</nav> --}}
   {{-- <svg width="10" height="10" viewbox="0 0 10 10 xmlns="http://www.w3.org/2000/svg">
        <img src="img/logo2.png" width="50" height="50" alt="">
       </svg> --}}
    

<nav class="bg-lime-50 py-6 relative">
    <div class="container mx-auto flex">
    
        <div>
             <img src="img/logo2.png" width="70" height="100" alt="">

        </div>
      
    
        <div class="flex flex-grow justify-center">
            <ul class="flex">  
                <li class="mr-4"><a href="{{ route('home') }}"> home </a></li>
                <li class="mr-4"><a href=" href="{{ route('about') }}"> about </a></li>
                <li class="mr-4"><a href=" href="{{ route('blog') }}"> blog</a></li>
                <li class="mr-4"><a href=" href="{{ route('contact') }}"> contact </a></li>
            </ul>
        </div>
        <div >
            <a href="#" class="mr-2 border border-black py-2.5 px-5 rounded-md hover:bg-white transition duration-500 ease-in-out">
                inicio sesion
            </a>
            <a href="#" class="bg-blue-400 border border-blue-500 py-2.5 px-5 rounded-md hover:bg-blue-500 hover:border-blue-500 transition duration-500 ease-in-out">
                Regístrate
            </a>          
        </div>

    </div>
 
</nav>