<section class="relative z-10 w-full -mb-5 sm:-mb-0 sm:pt-12 mb:pb-0">
    <div class="px-5 mx-auto max-w-7xl md:px-8">
        <x-marketing.elements.heading
            heading="Success Stories from Our Customers"
            description="Businesses of all sizes are transforming their marketing with EmailSendy. See how our Email Marketing marketing platform is driving real results."
        />
        <div class="grid w-full grid-cols-4 gap-6 sm:grid-cols-8 lg:grid-cols-12">
            <div class="col-span-4 space-y-6">
                @include('theme::partials.testimonial', [
                    'image' => 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                    'name' => 'Sarah Chen',
                    'title' => 'E-commerce Store Owner',
                    'quote' => 'EmailSendy increased our customer engagement by 300%! The automated campaigns and quick replies have saved us hours while boosting our sales. Our abandoned cart recovery rate is now at 45%.'
                ])
                @include('theme::partials.testimonial', [
                    'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                    'name' => 'Raj Patel',
                    'title' => 'Digital Marketing Agency Owner',
                    'quote' => 'Managing multiple clients\' Email Marketing campaigns used to be chaotic. With EmailSendy, we can handle all accounts from one dashboard. The broadcast scheduling and analytics are game-changers for our agency.'
                ])
                @include('theme::partials.testimonial', [
                    'image' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                    'name' => 'Maria Gonzalez',
                    'title' => 'Restaurant Chain Marketing Director',
                    'quote' => 'Our table reservations and food orders through Email Marketing have doubled since using EmailSendy. The menu catalog feature and quick order buttons make it so easy for customers to engage with us.'
                ])
            </div>

            <div class="hidden col-span-4 space-y-5 sm:block">
                @include('theme::partials.testimonial', [
                    'image' => 'https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                    'name' => 'David Okafor',
                    'title' => 'CEO, Logistics Company',
                    'quote' => 'The delivery status updates via Email Marketing have reduced our customer support calls by 70%. EmailSendy\'s integration with our system was seamless, and our customers love the real-time updates.'
                ])
                @include('theme::partials.testimonial', [
                    'image' => 'https://images.unsplash.com/photo-1573497620053-ea5300f94f21?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                    'name' => 'Lisa Wong',
                    'title' => 'Beauty Salon Owner',
                    'quote' => 'Our appointment bookings increased by 150% after implementing EmailSendy. The automated reminders have significantly reduced no-shows, and the broadcast feature helps us promote special offers effectively.'
                ])
                @include('theme::partials.testimonial', [
                    'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                    'name' => 'Ahmed Khalid',
                    'title' => 'Educational Institute Director',
                    'quote' => 'Managing student inquiries through Email Marketing with EmailSendy has transformed our admissions process. The chatbot handles 80% of common questions, allowing our staff to focus on more complex queries.'
                ])
            </div>

            <div class="hidden col-span-4 space-y-5 lg:block">
                @include('theme::partials.testimonial', [
                    'image' => 'https://images.unsplash.com/photo-1583864697784-a0efc8379f70?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                    'name' => 'Sophie Martin',
                    'title' => 'Retail Chain CMO',
                    'quote' => 'EmailSendy\'s segmentation features allow us to send personalized offers to different customer groups. Our campaign conversion rates are now 5x higher than email marketing, with 90% open rates!'
                ])
                @include('theme::partials.testimonial', [
                    'image' => 'https://images.unsplash.com/photo-1573497019709-6f2a3cb9c9fe?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                    'name' => 'Carlos Mendez',
                    'title' => 'Real Estate Broker',
                    'quote' => 'The property catalog feature in EmailSendy has revolutionized how we showcase listings. Clients can browse properties and schedule viewings directly through Email Marketing - our lead quality has improved dramatically.'
                ])
                @include('theme::partials.testimonial', [
                    'image' => 'https://images.unsplash.com/photo-1562788869-4ed32648eb72?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                    'name' => 'Fatima Ali',
                    'title' => 'Healthcare Clinic Administrator',
                    'quote' => 'Patient communication has never been easier. EmailSendy helps us send appointment reminders, health tips, and prescription notifications securely via Email Marketing, improving our service while reducing admin work.'
                ])
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 z-20 flex items-end justify-center w-full h-32 md:h-64 lg:h-96 bg-gradient-to-t from-white dark:from-black"></div>
</section>