import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';
const lightbox = new PhotoSwipeLightbox({
    gallery: '#gallery--getting-started',
    children: 'a',
    pswpModule: () => import('photoswipe'),
    mainClass: 'pswp-with-perma-preloader',
});
lightbox.init();
