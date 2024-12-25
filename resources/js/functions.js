import { Carousel } from "@fancyapps/ui/dist/carousel/carousel.esm.js";
export default class Functions {
    initCarousel(container) {
        const dataDots = container.getAttribute("data-dots");

        const options = {
            dots: dataDots === "true",
            pageDots: false,
            nav: false,
            infinite: false,
            friction: 0.1,
        };

        const myCarousel = new Carousel(container, options);
    }
}
