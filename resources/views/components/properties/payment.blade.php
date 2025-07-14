<div id="property-description" class="mb-10 bg-custom-black text-white flex justify-center">
    <div class="py-10 md:py-20 w-9/12 md:w-1/2 text-center">
        <h1 class="text-xl md:text-4xl font-bold font-['Nugros-Black'] tracking-[.25em] md:tracking-[.5em] md:border-b md:border-white md:pb-4">
            - PAYMENT PLAN -</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:mt-10 mt-5">
            @foreach($propertyPlan as $index => $plan)
                <div class="">
                    @if($index < 2 && $hasCombobox == "true")
                        @if($index == 0)
                            <div class="grid relative">
                            <label for="property-type"></label>
                            <select name="type" id="property-type"
                                    class="appearance-none bg-custom-black text-center text-white border-2 border-white text-2xl block w-full p-2.5 outline-none">
                                @endif
                                <option
                                    value="{{ strtolower(str_replace(' ', '-', $plan['subtitle'])) }}">{{ $plan['subtitle'] }}</option>
                                @if($index == 1)
                            </select>
                                <svg id="Layer_2" width="40" height="40" class="pt-4 pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4 text-gray-700" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 15.56">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                                stroke-width: 0px;
                                            }
                                        </style>
                                    </defs>
                                    <g id="Layer_2-2" data-name="Layer 2">
                                        <polygon class="cls-1" points="10 15.56 0 0 20 0 10 15.56"/>
                                    </g>
                                </svg>
                            </div>
                        @endif

                    @else
                        <p class="text-xl font-['Nugros-Bold'] border-b-2 border-white pb-3">{{ $plan['title'] }}</p>
                        <h3 class="text-xl font-['Nugros-Medium'] pt-3 {{$plan['class']}}">{{ $plan['subtitle'] }}</h3>

                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
