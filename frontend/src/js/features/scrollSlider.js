import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
import { debounce } from "./helpers";

const setupScrollSliders = () => {
    const scrollSliders = document.querySelectorAll('.imagescroll');
    const allImages = document.querySelectorAll('.scrollimage-image');

    if (!scrollSliders.length) return;

    gsap.registerPlugin(ScrollTrigger);

    const calculateContainerWidth = (filteredImages, wrapper) => {
        // Calculating imagescroll container width
        let totalWidth = 0;

        filteredImages.forEach((i, index) => {
            const width = i.getBoundingClientRect().width;
            if (index + 1 !== filteredImages.length) {
                totalWidth += width + 20;
            }
        });

        if (window.innerWidth < 768) {
            totalWidth -= 50;
        }


        if (window.innerWidth < 768) {
            totalWidth = totalWidth - 20;
        } else {
            totalWidth = totalWidth - 50;
        }

        wrapper.style.width = `${totalWidth}px`;
        wrapper.style.maxWidth = `${totalWidth}px`;
    }


    scrollSliders.forEach(img => {
        const wrapper = img.querySelector('.imagescroll__wrapper');
        const inner = img.querySelector('.imagescroll__inner');

        // Some responsive stuff for both text & scroll container
        window.addEventListener('resize', () => {
            calculateContainerWidth(allImages, wrapper);
        });

        // Some init stuff
        calculateContainerWidth(allImages, wrapper);

        ScrollTrigger
            .create({
                trigger: img,
                start: 'center center',
                end: '+=100%',
                pin: true,
                pinSpacing: false,
                onUpdate: self => {
                    const progress = self.progress;
                    const percent = Math.round(progress * 100);
                    inner.style.transform = `translateX(-${percent}%)`;
                }
            });

        const updateOnReveal = debounce(() => {
            ScrollTrigger.refresh();
            calculateContainerWidth(allImages, wrapper);
        }, 250);

        // Refresh Scrolltrigger when lazyloaded images are in the dom
        window.addEventListener('lazyloaded', () => updateOnReveal());
    });
}


setupScrollSliders()
