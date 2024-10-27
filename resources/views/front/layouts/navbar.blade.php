<div
    class="navigation-bar fixed bottom-0 z-50 max-w-[640px] w-full h-[85px] bg-white rounded-t-[25px] flex items-center justify-evenly py-[45px]">
    <a href="{{ route('front.index') }}" class="menu">
        <div class="flex flex-col justify-center w-fit gap-1">
            <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
                <img src="{{ asset('assets/icons/home.svg') }}" alt="icon">
            </div>
            <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Home</p>
        </div>
    </a>
    <a href="" class="menu opacity-25">
        <div class="flex flex-col justify-center w-fit gap-1">
            <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
                <img src="{{ asset('assets/icons/search.svg') }}" alt="icon">
            </div>
            <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Search</p>
        </div>
    </a>
    <a href="{{ route('dashboard.bookings') }}" class="menu opacity-25">
        <div class="flex flex-col justify-center w-fit gap-1">
            <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
                <img src="{{ asset('assets/icons/calendar-blue.svg') }}" alt="icon">
            </div>
            <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Schedule</p>
        </div>
    </a>
    <a href="" class="menu opacity-25">
        <div class="flex flex-col justify-center w-fit gap-1">
            <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
                <img src="{{ asset('assets/icons/user-flat.svg') }}" alt="icon">
            </div>
            <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Profile</p>
        </div>
    </a>
</div>
