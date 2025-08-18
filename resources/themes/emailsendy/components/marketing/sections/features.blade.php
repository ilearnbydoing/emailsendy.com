<section 
    x-data="{ 
        active: 'email_campaigns',
        sections: ['email_campaigns', 'delivery_servers', 'verification', 'analytics'],
        featureInterval: null,
        featureIntervalTimer: 6000, // in milliseconds
        percentageRemainingInterval: null,
        percentageRemaining: 100,
        start(){
            clearInterval(this.featureInterval);
            let that = this;
            this.featureInterval = setInterval(function(){
                that.next();
            }, this.featureIntervalTimer);
        },
        hasBeenActive(sectionName){
            let currentIndex = this.sections.indexOf(this.active);
            let targetIndex = this.sections.indexOf(sectionName);
            return targetIndex < currentIndex;
        },
        startCountdown(){
            this.percentageRemaining = 100;
            clearInterval(this.percentageRemainingInterval);
            let that = this;
            this.percentageRemainingInterval = setInterval(function(){
                that.percentageRemaining -= 100 / (that.featureIntervalTimer / 120);
                that.percentageRemaining = parseInt(that.percentageRemaining);
                if (that.percentageRemaining <= 0) {
                    clearInterval(that.percentageRemainingInterval);
                }
            }, 120);
        },
        next(){
            let currentIndex = this.sections.indexOf(this.active);
            let nextIndex = (currentIndex + 1) % this.sections.length;
            this.active = this.sections[nextIndex];
            this.startCountdown();
        },
        setActive(sectionName){
            this.active = sectionName;
            this.start();
            this.startCountdown();
        },
        getWidth(sectionName){
            if(sectionName == this.active){
                return (100-this.percentageRemaining);
            } 
            return 0;
        }
    }"
    x-init="
        start();
        startCountdown();
    "
    class="pt-6 sm:pb-8 sm:pt-10 md:pt-12 lg:pt-16 bg-background">
    <div class="px-5 mx-auto max-w-7xl md:px-8">
        <x-marketing.elements.heading
            subheading="Power Up Your Email Marketing"
            heading="Enterprise Email Solutions"
            description="EmailSendy provides everything you need for successful email marketing. From campaign management to infrastructure solutions, we've got you covered at every step."
        />
        <div class="flex lg:flex-row flex-col flex-wrap border-b-[3px] border-gray-200 dark:border-neutral-800 justify-center dark:text-neutral-400 mb-2 lg:mb-6 w-full">
            <button 
                data-active="email_campaigns"
                @click="setActive($el.dataset.active)"
                :class="{ 'active-feature dark:text-white text-black flex flex-shrink-0': active == $el.dataset.active, 'dark:hover:text-white lg:flex hidden dark:text-neutral-400 text-gray-700 hover:text-gray-900' : active != $el.dataset.active }" 
                class="relative items-center justify-start gap-2 px-0 py-4 font-medium transition-all duration-300 cursor-pointer lg:py-6 lg:px-6 lg:justify-center group lg:w-1/4">
                <x-phosphor-paper-plane-tilt-duotone class="w-6 h-6" />
                <span>Email Campaigns</span>
                <span x-show="hasBeenActive('email_campaigns')" class="absolute z-10 bottom-0 translate-y-[3px] w-full left-0 h-[3px] bg-indigo-600"><span class="absolute inset-0 w-full h-full bg-white/70 dark:bg-black/40"></span></span>
                <span :class="{ 'left-1/2' : !hasBeenActive('email_campaigns'), 'right-0' : hasBeenActive('email_campaigns') }" class="absolute z-20 bottom-0 w-0 translate-y-[3px] group-hover:w-full duration-300 ease-out group-[.active-feature]:w-full group-[.active-feature]:left-0 group-hover:left-0 h-[3px] bg-indigo-600">
                    <span class="block absolute group-[.active-feature]:opacity-100 opacity-0 top-0 left-0 w-full h-full bg-white/70 dark:bg-black/40 ease-out duration-300" :style="{ width: getWidth('email_campaigns') + '%' }"></span>
                </span>
            </button>
            <button 
                data-active="delivery_servers"
                @click="setActive($el.dataset.active)"
                :class="{ 'active-feature dark:text-white text-black flex flex-shrink-0': active == $el.dataset.active, 'dark:hover:text-white lg:flex hidden dark:text-neutral-400 text-gray-700 hover:text-gray-900' : active != $el.dataset.active }" 
                class="relative items-center justify-start w-full gap-2 p-6 px-0 py-4 font-medium transition-all duration-300 cursor-pointer lg:py-6 lg:px-6 lg:justify-center group lg:w-1/4">
                <x-phosphor-ticket-duotone class="w-6 h-6" />
                <span>Delivery Servers</span>
                <span x-show="hasBeenActive('delivery_servers')" class="absolute z-10 bottom-0 translate-y-[3px] w-full left-0 h-[3px] bg-indigo-600"><span class="absolute inset-0 w-full h-full bg-white/70 dark:bg-black/40"></span></span>
                <span :class="{ 'left-1/2' : !hasBeenActive('delivery_servers'), 'right-0' : hasBeenActive('delivery_servers') }" class="absolute z-20 bottom-0 w-0 translate-y-[3px] group-hover:w-full duration-300 ease-out group-[.active-feature]:w-full group-[.active-feature]:left-0 group-hover:left-0 h-[3px] bg-indigo-600">
                    <span class="block absolute group-[.active-feature]:opacity-100 opacity-0 top-0 left-0 w-full h-full bg-white/70 dark:bg-black/40 ease-out duration-300" :style="{ width: getWidth('delivery_servers') + '%' }"></span>
                </span>
            </button>
            <button 
                data-active="verification"
                @click="setActive($el.dataset.active)"
                :class="{ 'active-feature dark:text-white text-black flex flex-shrink-0': active == $el.dataset.active, 'dark:hover:text-white lg:flex hidden dark:text-neutral-400 text-gray-700 hover:text-gray-900' : active != $el.dataset.active }" 
                class="relative items-center justify-start w-full gap-2 p-6 px-0 py-4 font-medium transition-all duration-300 cursor-pointer lg:py-6 lg:px-6 lg:justify-center group lg:w-1/4">
                <x-phosphor-shield-check-duotone class="w-6 h-6" />
                <span>Email Verification</span>
                <span x-show="hasBeenActive('verification')" class="absolute z-10 bottom-0 translate-y-[3px] w-full left-0 h-[3px] bg-indigo-600"><span class="absolute inset-0 w-full h-full bg-white/70 dark:bg-black/40"></span></span>
                <span :class="{ 'left-1/2' : !hasBeenActive('verification'), 'right-0' : hasBeenActive('verification') }" class="absolute z-20 bottom-0 w-0 translate-y-[3px] group-hover:w-full duration-300 ease-out group-[.active-feature]:w-full group-[.active-feature]:left-0 group-hover:left-0 h-[3px] bg-indigo-600">
                    <span class="block absolute group-[.active-feature]:opacity-100 opacity-0 top-0 left-0 w-full h-full bg-white/70 dark:bg-black/40 ease-out duration-300" :style="{ width: getWidth('verification') + '%' }"></span>
                </span>
            </button>
            <button 
                data-active="analytics"
                @click="setActive($el.dataset.active)"
                :class="{ 'active-feature dark:text-white text-black flex flex-shrink-0': active == $el.dataset.active, 'dark:hover:text-white lg:flex hidden dark:text-neutral-400 text-gray-700 hover:text-gray-900' : active != $el.dataset.active }" 
                class="relative items-center justify-start gap-2 p-6 px-0 py-4 font-medium transition-all duration-300 cursor-pointer lg:py-6 lg:px-6 lg:justify-center group lg:w-1/4">
                <x-phosphor-chart-line-duotone class="w-6 h-6" />
                <span>Advanced Analytics</span>
                <span x-show="hasBeenActive('analytics')" class="absolute z-10 bottom-0 translate-y-[3px] w-full left-0 h-[3px] bg-indigo-600"><span class="absolute inset-0 w-full h-full bg-white/70 dark:bg-black/40"></span></span>
                <span :class="{ 'left-1/2' : !hasBeenActive('analytics'), 'right-0' : hasBeenActive('analytics') }" class="absolute z-20 bottom-0 w-0 translate-y-[3px] group-hover:w-full duration-300 ease-out group-[.active-feature]:w-full group-[.active-feature]:left-0 group-hover:left-0 h-[3px] bg-indigo-600">
                    <span class="block absolute group-[.active-feature]:opacity-100 opacity-0 top-0 left-0 w-full h-full bg-white/70 dark:bg-black/40 ease-out duration-300" :style="{ width: getWidth('analytics') + '%' }"></span>
                </span>
            </button>
        </div>
        
        <div x-show="active=='email_campaigns'" class="w-full py-6">
            @include('theme::partials.feature-content', [
                'title' => 'Professional Email Campaigns',
                'description' => 'Create, send, and track beautiful email campaigns with our intuitive campaign management tools.',
                'icon' => 'phosphor-paper-plane-tilt-duotone',
                'items' => [
                    [
                        'icon' => 'phosphor-browser-duotone',
                        'title' => 'Drag & Drop Editor',
                        'description' => 'Build stunning emails without coding using our responsive email builder.',
                    ],
                    [
                        'icon' => 'phosphor-users-duotone',
                        'title' => 'List Segmentation',
                        'description' => 'Target specific audience segments with personalized content.',
                    ],
                    [
                        'icon' => 'phosphor-calendar-duotone',
                        'title' => 'Automation Workflows',
                        'description' => 'Set up automated email sequences based on subscriber actions.',
                    ],
                    [
                        'icon' => 'phosphor-envelope-duotone',
                        'title' => 'A/B Testing',
                        'description' => 'Test subject lines, content, and send times to optimize performance.',
                    ],
                ]
            ])
        </div>

        <div x-show="active=='delivery_servers'" class="w-full py-6" x-cloak>
            @include('theme::partials.feature-content', [
                'title' => 'Email Delivery Infrastructure',
                'description' => 'Maximize your email deliverability with our server solutions and expert configuration.',
                'icon' => 'phosphor-ticket-duotone',
                'items' => [
                    [
                        'icon' => 'phosphor-cloud-duotone',
                        'title' => 'Dedicated Servers',
                        'description' => 'Lease high-performance email servers with dedicated IPs for maximum deliverability.',
                    ],
                    [
                        'icon' => 'phosphor-plugs-connected-duotone',
                        'title' => 'SMTP Integration',
                        'description' => 'Connect your existing SMTP servers or use our pre-configured solutions.',
                    ],
                    [
                        'icon' => 'phosphor-shield-star-duotone',
                        'title' => 'IP Warmup Service',
                        'description' => 'Professional IP warmup plans to establish sender reputation safely.',
                    ],
                    [
                        'icon' => 'phosphor-gear-duotone',
                        'title' => 'Server Configuration',
                        'description' => 'Expert setup of SPF, DKIM, DMARC and other critical deliverability protocols.',
                    ],
                ]
            ])
        </div>

        <div x-show="active=='verification'" class="w-full py-6" x-cloak>
            @include('theme::partials.feature-content', [
                'title' => 'Email Verification Services',
                'description' => 'Clean your email lists and improve deliverability with our real-time verification API.',
                'icon' => 'phosphor-shield-check-duotone',
                'items' => [
                    [
                        'icon' => 'phosphor-magnifying-glass-duotone',
                        'title' => 'Real-Time API',
                        'description' => 'Verify emails instantly during signup with our lightning-fast API.',
                    ],
                    [
                        'icon' => 'phosphor-list-checks-duotone',
                        'title' => 'Bulk List Cleaning',
                        'description' => 'Upload and clean entire lists with our bulk verification tool.',
                    ],
                    [
                        'icon' => 'phosphor-gauge-duotone',
                        'title' => 'Quality Scoring',
                        'description' => 'Get detailed quality scores for your email lists with actionable insights.',
                    ],
                    [
                        'icon' => 'phosphor-lock-duotone',
                        'title' => 'Fraud Detection',
                        'description' => 'Identify disposable, role-based, and potentially fraudulent addresses.',
                    ],
                ]
            ])
        </div>

        <div x-show="active=='analytics'" class="w-full py-6" x-cloak>
            @include('theme::partials.feature-content', [
                'title' => 'Campaign Analytics & Reporting',
                'description' => 'Gain deep insights into your email performance with comprehensive analytics.',
                'icon' => 'phosphor-chart-line-duotone',
                'items' => [
                    [
                        'icon' => 'phosphor-trend-up-duotone',
                        'title' => 'Real-Time Tracking',
                        'description' => 'Monitor opens, clicks, and conversions as they happen.',
                    ],
                    [
                        'icon' => 'phosphor-map-trifold-duotone',
                        'title' => 'Geographic Reports',
                        'description' => 'See where your subscribers are engaging from around the world.',
                    ],
                    [
                        'icon' => 'phosphor-device-tablet-duotone',
                        'title' => 'Device Analytics',
                        'description' => 'Understand how subscribers interact across devices.',
                    ],
                    [
                        'icon' => 'phosphor-graph-duotone',
                        'title' => 'ROI Calculation',
                        'description' => 'Measure the actual revenue generated from your email campaigns.',
                    ],
                ]
            ])
        </div>
    </div>
</section>