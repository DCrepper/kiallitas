<?php
use function Livewire\Volt\{mount, state};
use App\Models\Element;
use App\Models\TextElement;
state(['slider_elements' => [], 'textElements' => []]);
mount(function () {
    $this->slider_elements = Element::where('is_active', '1')->orderBy('possition', 'asc')->get();
    $this->textElements = TextElement::where('is_active', '1')->orderBy('possition', 'asc')->get();
});

?>
<style>
.marquee {
    width: 100%;
    line-height: 50px;
    background-color: #21B99B;
    color: white;
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
}
.marquee p {
    display: inline-block;
    padding-left: 100%;
    animation: marquee {{ TextElement::where('is_active', '1')->orderBy('possition', 'asc')->get()->count()*4 }}s linear infinite;
}
@keyframes marquee {
    0%   { transform: translate(0, 0); }
    100% { transform: translate(-100%, 0); }
}
</style>
<div>
    <!-- Slider main container -->
    <div class="swiper w-[1920px] h-[1080px]">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            @foreach ($slider_elements as $element)
                <div class="swiper-slide"
                     data-swiper-autoplay="{{ $element->slide_length }}">
                    <div class="swiper-slide-content">

                        @if ($element->status == 'video')
                            <video class="object-cover w-full h-full" playsinline autoplay="true" muted="true">
                                <source src="{{ asset('storage/' . $element->video_from_disc) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                        @if ($element->status == 'image')
                            <img class="object-cover w-full h-96"
                                src="{{ asset('storage/' . $element->image_from_disc) }}" alt="{{ $element->title }}">
                            <div class="text-block">
                                <h4>{{ $element->name }}</h4>
                                <p>{{ $element->image_text }}</p>
                            </div>
                        @endif


                    </div>
                </div>
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>

    </div>

    <section class="marquee">
        <p class="loop-text">
            @foreach ($textElements as $textElement)
                {{ $textElement->text }}
            @endforeach
        </p>
    </section>


    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
    </script>
</div>
