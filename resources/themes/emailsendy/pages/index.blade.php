<?php
    use function Laravel\Folio\{name};
    name('home');
?>

<x-layouts.marketing
    :seo="[
        'title'         => setting('site.title', 'Affordable and Effective Email Marketing Services | EmailSendy'),
        'description'   => setting('site.description', 'Boost your business with EmailSendy’s affordable and effective email marketing services. Create, send, and track powerful email campaigns.'),
        'image'         => url('/og_image.png'),
        'type'          => 'website'
    ]"
>
        
        <x-marketing.sections.hero />
        <x-marketing.sections.marquee />
        <x-marketing.sections.features />
        <x-marketing.elements.separator />
        <x-marketing.sections.testimonials />
        <x-marketing.elements.separator />
        <x-marketing.sections.pricing />

</x-layouts.marketing>
