<div id="photo-gallery">
    <h1 class="text-2xl md:text-5xl font-bold font-['Nugros-Black'] ">- Photos Gallery -</h1>
    <p class="font-['Nugros-Regular'] text-center my-5 ">Qetaifan Island North is a 1.3 million SQM manmade island destined to become
        a symbol of Qatar’s burgeoning future. The Weekend 02 is nestled on the island alongside premier beach
        resorts, private beaches, clubhouses, world-class boating facilities, boutique shopping experiences, a water
        park, and a living garden.</p>
    <div class="pswp-gallery" id="gallery--getting-started">
        <div>
            <a href="{{url('/images/the-weekend-2/gallery/gallery-main.jpg')}}"
               data-pswp-width="2500"
               data-pswp-height="1666"
               target="_blank">
                <img src="{{url('/images/the-weekend-2/gallery/gallery-main.jpg')}}" alt="" loading="lazy"/>
            </a>
        </div>
        <div class="flex mt-1">
            <!-- cropped thumbnail: -->
            <div class="mr-1">
                <a href="{{url('/images/the-weekend-2/gallery/gallery-first.jpg')}}"
                   data-pswp-width="2500"
                   data-pswp-height="1666"
                   data-cropped="true"
                   target="_blank">
                    <img src="{{url('/images/the-weekend-2/gallery/gallery-first.jpg')}}" alt="" loading="lazy"/>
                </a>
            </div>
            <!-- data-pswp-src with custom URL in href -->
            <div class="mr-1">
                <a href="{{url('/images/the-weekend-2/gallery/gallery-second.jpg')}}"
                   data-pswp-src="{{url('/images/the-weekend-2/gallery/gallery-second.jpg')}}"
                   data-pswp-width="2500"
                   data-pswp-height="1666"
                   target="_blank">
                    <img src="{{url('/images/the-weekend-2/gallery/gallery-second.jpg')}}" loading="lazy" alt=""/>
                </a>
            </div>
            <!-- Without thumbnail: -->
            <div>
                <a href="{{url('/images/the-weekend-2/gallery/gallery-third.jpg')}}"
                   data-pswp-src="{{url('/images/the-weekend-2/gallery/gallery-third.jpg')}}"
                   data-pswp-width="2500"
                   data-pswp-height="1668"
                   target="_blank">
                    <img src="{{url('/images/the-weekend-2/gallery/gallery-third.jpg')}}" loading="lazy" alt=""/>
                </a>
            </div>
            <div>
                <a href="{{url('/images/the-weekend-2/gallery/gallery-fourth.jpg')}}"
                   data-pswp-src="{{url('/images/the-weekend-2/gallery/gallery-fourth.jpg')}}"
                   data-pswp-width="2500"
                   data-pswp-height="1668"
                   target="_blank">
                    <img src="{{url('/images/the-weekend-2/gallery/gallery-fourth.jpg')}}" loading="lazy" alt="" class="hidden"/>
                </a>
            </div>
            <div>
                <a href="{{url('/images/the-weekend-2/gallery/gallery-five.jpg')}}"
                   data-pswp-src="{{url('/images/the-weekend-2/gallery/gallery-five.jpg')}}"
                   data-pswp-width="2500"
                   data-pswp-height="1668"
                   target="_blank">
                    <img src="{{url('/images/the-weekend-2/gallery/gallery-five.jpg')}}" loading="lazy" alt="" class="hidden"/>
                </a>
            </div>
            <!-- wrapped with any element: -->
        </div>
    </div>
</div>
