<div id="property-description" class="mb-10">
    <h1 class="text-2xl md:text-5xl font-bold font-['Nugros-Black']">- Property Description -</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-10">
        @foreach($propertyDetails as $detail)
            <div class="pb-3 border-b-2 border-black">
                <p class="font-['Nugros-Bold']">{{ $detail['title'] }}</p>
                <h3 class="font-['Nugros-Medium']">{{ $detail['subtitle'] }}</h3>
            </div>
        @endforeach
    </div>
</div>
