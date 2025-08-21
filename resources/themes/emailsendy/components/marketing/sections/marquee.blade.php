<div
    x-data
    x-init="
            $nextTick(() => {
                const content = $refs.content;
                const item = $refs.item;
                const clone = item.cloneNode(true);
                content.appendChild(clone);
            });
    "
    class="relative w-full py-5 dark:bg-black container-block"
    >
    <div class="relative w-full py-3 mx-auto overflow-hidden text-lg italic tracking-wide text-black uppercase lg:container dark:text-white dark:bg-black sm:text-xs md:text-sm lg:text-base xl:text-xl 2xl:text-2xl">
        <div class="absolute left-0 z-20 w-40 h-full bg-gradient-to-r from-white to-transparent dark:from-black dark:to-transparent"></div>
        <div class="absolute right-0 z-20 w-40 h-full bg-gradient-to-l from-white to-transparent dark:from-black dark:to-transparent"></div>
        <div x-ref="content" class="flex animate-marquee">
            <div x-ref="item" class="flex items-center justify-around flex-shrink-0 w-full py-2 pl-10 space-x-10 text-black sm:pl-5 md:pl-4 lg:pl-0 sm:space-x-5 md:space-x-4 dark:text-white">
                <img src="{{ asset('images/company/afterlaunch.png') }}" alt="Logo" class="h-9 w-auto">
                <img src="{{ asset('images/company/wappzone.png') }}" alt="Logo" class="h-9 w-auto">
                <img src="{{ asset('images/company/salonly.png') }}" alt="Logo" class="h-9 w-auto">
                <img src="{{ asset('images/company/webanaya.png') }}" alt="Logo" class="h-9 w-auto">
                <img src="{{ asset('images/company/aijadu.png') }}" alt="Logo" class="h-9 w-auto">
                <img src="{{ asset('images/company/wappsendy.png') }}" alt="Logo" class="h-9 w-auto">
                <img src="{{ asset('images/company/tejsmm.png') }}" alt="Logo" class="h-9 w-auto">
                <img src="{{ asset('images/company/cardmate.png') }}" alt="Logo" class="h-9 w-auto">
            </div>
        </div>
    </div>
</div>