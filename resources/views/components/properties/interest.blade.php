<div id="interest" class="mt-8 leading-10">
    <h1 class="text-2xl md:text-5xl font-bold font-['Nugros-Black']">- You Wanna Buy In Doha -</h1>
    <div class="flex justify-center gap-10 mt-5">
        <a class=""
           href="https://api.whatsapp.com/send?phone=97466346605"
           target="_blank">
            <div class="flex justify-center">
                <img src="{{asset('/images/icons/whatsapp.png')}}" alt="whatsapp icon" width="50" height="50"/>
            </div>
            <p><B> Whatsapp </B></p>
        </a>
        <a class="" href="tel:+97466346605" target="_blank">

            <img src="{{asset('/images/icons/call.png')}}" alt="call icon" width="50" height="50"/>
            <p><B> Call </B></p>
        </a>

    </div>
    <h1 class="text-2xl my-3 font-['Nugros-Bold']">OR</h1>
    <p class="font-['Nugros-Regular']">Please provide us with the following details to register interest.</p>
    <div class="mb-5">
        <form action="{{ route('send_mail_form') }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10 mt-5">
                <div>
                    <input type="text" name="name" id="floating_name"
                           class="font-['Nugros-Bold'] block py-2.5 px-3 w-full md:text-lg text-gray-900 bg-transparent border-2 border-black appearance-none focus:outline-none"
                           placeholder="Name" autocomplete="off"
                           oninvalid="this.setCustomValidity('Please Put Your Name')"
                           oninput="setCustomValidity('')" required/>
                    <label for="floating_name">
                    </label>
                </div>
                {{--                <div>--}}
                {{--                    <input type="email" name="email" id="floating_email"--}}
                {{--                           class="font-['Nugros-Bold'] block py-2.5 px-3 w-full md:text-lg text-gray-900 bg-transparent border-2 border-black appearance-none focus:outline-none"--}}
                {{--                           placeholder="Email Address" autocomplete="off" required/>--}}
                {{--                    <label for="floating_email"--}}
                {{--                           class="peer-focus:font-medium absolute md:text-lg text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email--}}
                {{--                        address</label>--}}
                {{--                </div>--}}
                <div>
                    <input id="phone" name="phone" type="tel" autocomplete="off"
                           class="font-['Nugros-Bold'] block p-2.5 w-full z-20 text-lg text-gray-900 bg-gray-50 border-2 border-black focus:outline-none"
                           oninvalid="this.setCustomValidity('Please Put Your phone number')"
                           oninput="setCustomValidity('')" required>
                </div>
                {{--                <div>--}}
                {{--                    <label for="property_type" class=""></label>--}}
                {{--                    <select id="property_type" name="property_type"--}}
                {{--                            class="font-['Nugros-Bold'] bg-gray-50 border-2 border-black text-gray-900 text-lg block w-full p-3 focus:outline-none"--}}
                {{--                            required>--}}
                {{--                        <option value="">Property Type</option>--}}
                {{--                        <option value="1-BHK">1 Bedroom Apartment</option>--}}
                {{--                        <option value="2-BHK">2 Bedroom Apartment</option>--}}
                {{--                        <option value="3-BHK">3 Bedroom Apartment</option>--}}
                {{--                        <option value="4-BHK">4 Bedroom Apartment</option>--}}
                {{--                        <option value="villa">Villa</option>--}}
                {{--                    </select>--}}
                {{--                </div>--}}
            </div>
            <input type="hidden" name="sub" value="{{$sub}}">
            <div class="text-center mt-5">
                <button type="submit"
                        class="font-['Nugros-Bold'] text-lg md:text-3xl text-white bg-steps-primary focus:ring-4 focus:outline-none font-medium w-full sm:w-auto px-5 py-2.5 text-center">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
