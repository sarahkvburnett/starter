//Main slider - responsive item slider with arrows
if (document.querySelector('.slider')){
    var slider = tns({
        container: '.slider',
        items: 2,
        slideBy: 'page',
        autoplay: true,
        controlsContainer: '.slider-arrows',
        nav: false,
        responsive: {
            300: {
                gutter: 100,
                items: 1,
                edgePadding: 50,
            },
            769: {
                gutter: 100,
                items: 2
            },
            1366: {
                items: 4,
                gutter: 100
            }
        }
    });
}

//Hero slider - one large image with indicators
if (document.querySelector('.slider-hero')){
    var slider = tns({
        container: '.slider-hero',
        autoplay: true,
        nav: true,
        navPosition: "bottom",
        navContainer: ".hero-nav",
        lazyload: true,
        lazyloadSelector: '.lazy',
        controls: false,
    })
}
