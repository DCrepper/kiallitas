// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/autoplay";
const progressCircle = document.querySelector(".autoplay-progress svg");
// init Swiper:
const swiper = new Swiper(".swiper", {
    // configure Swiper to use modules
    modules: [Navigation, Pagination,Autoplay],
    direction: "horizontal",
    loop: true,
    autoHeight: false,
    height: 500,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: true,

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    on: {

        autoplayTimeLeft(s, time, progress) {
            progressCircle.style.setProperty("--progress", 1 - progress);
            progressContent.textContent = `${Math.ceil(time / 1000)}s`;
          },
        slideChange: function () {
            // Pause videos in the previous slide
            const previousSlide = this.slides[this.previousIndex];
            previousSlide.querySelectorAll('video').forEach(video => video.pause());

          },
            slideChangeTransitionEnd: function () {
                // Pause videos in the previous slide
                const previousSlide = this.slides[this.previousIndex];
                const currentSlide = this.slides[this.activeIndex];
                const videos= currentSlide.querySelectorAll('video');
                videos.forEach(video => {
                    video.play();
                });
                pauseVideosInSlide(previousSlide);
            },
    },
});
function pauseVideosInSlide(slide) {
    const videos = slide.querySelectorAll('video');
    videos.forEach(video => {
      if (!video.paused) {
        video.pause();
      }
    });
  }
