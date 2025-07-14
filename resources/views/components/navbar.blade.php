<nav class="border-gray-200 bg-gray-50 sticky top-0 z-10" style="background-image: url({{$backgroundImg}})">

    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{url('/images/the-weekend-2/Logo-Steps.png')}}" alt="Image" class="h-8"/>
        </a>
        <button id="hamburger" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden focus:outline-none"
                aria-controls="navbar-solid-bg" aria-expanded="false">
            <!-- Hamburger Icon -->
            <svg id="hamburger-icon" class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
            <!-- Close Icon -->
            <svg id="close-icon" class="w-5 h-5 hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                <li class="hover:drop-shadow-xl">
                    <a href="https://www.steps.com.qa/properties/sale/residential/apartment"
                       class="block py-2 px-3 md:p-0 text-xl text-white font-['Nugros-Black'] bg-blue-700 rounded md:bg-transparent"
                       aria-current="page">{{$titles[0]}}</a>
                </li>
                <li class="hover:drop-shadow-glow">
                    <a href="https://www.steps.com.qa/properties/sale/residential/apartment/lusail"
                       class="block py-2 px-3 md:p-0 text-xl text-white font-['Nugros-Black'] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0">{{$titles[1]}}</a>
                </li>
                <li class="hover:drop-shadow-glow">
                    <a href="https://www.steps.com.qa/properties/sale/residential/apartment/the%20pearl"
                       class="block py-2 px-3 md:p-0 text-xl text-white font-['Nugros-Black'] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0">{{$titles[2]}}</a>
                </li>
{{--                <li class="hover:drop-shadow-glow">--}}
{{--                    <a href="#floor-plans"--}}
{{--                       class="block py-2 px-3 md:p-0 text-xl text-white font-['Nugros-Black'] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0">{{$titles[3]}}</a>--}}
{{--                </li>--}}
{{--                <li class="hover:drop-shadow-glow">--}}
{{--                    <a href="#location"--}}
{{--                       class="block py-2 px-3 md:p-0 text-xl text-white font-['Nugros-Black'] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0">{{$titles[4]}}</a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>
<div class="md:hidden w-full hidden fixed z-20" id="mobile-menu">
    <ul class="flex flex-col font-medium bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
        <li>
            <a href="https://www.steps.com.qa/properties/sale/residential/apartment"
               class="block py-2 px-3 md:p-0 text-xl text-black font-['Nugros-Black'] rounded md:bg-transparent"
               aria-current="page">{{$titles[0]}}</a>
        </li>
        <li>
            <a href="https://www.steps.com.qa/properties/sale/residential/apartment/lusail"
               class="block py-2 px-3 md:p-0 text-xl text-black font-['Nugros-Black'] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0">{{$titles[1]}}</a>
        </li>
        <li>
            <a href="https://www.steps.com.qa/properties/sale/residential/apartment/the%20pearl"
               class="block py-2 px-3 md:p-0 text-xl text-black font-['Nugros-Black'] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0">{{$titles[2]}}</a>
        </li>
{{--        <li>--}}
{{--            <a href="#floor-plans"--}}
{{--               class="block py-2 px-3 md:p-0 text-xl text-black font-['Nugros-Black'] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0">{{$titles[3]}}</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#location"--}}
{{--               class="block py-2 px-3 md:p-0 text-xl text-black font-['Nugros-Black'] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0">{{$titles[4]}}</a>--}}
{{--        </li>--}}
    </ul>
</div>
<script>
    document.getElementById('hamburger').addEventListener('click', function() {
        var hamburgerIcon = document.getElementById('hamburger-icon');
        var closeIcon = document.getElementById('close-icon');

        if (closeIcon.classList.contains('hidden')) {
            closeIcon.classList.remove('hidden');
            hamburgerIcon.classList.add('hidden');
        } else {
            closeIcon.classList.add('hidden');
            hamburgerIcon.classList.remove('hidden');
        }
    });
</script>
