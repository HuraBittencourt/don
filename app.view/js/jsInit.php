<script>
    skel.breakpoints({
        xlarge: "(max-width: 1680px)",
        large:  "(max-width: 1280px)",
        medium: "(max-width: 780px)",
        small:  "(max-width: 650px)",
        xsmall: "(max-width: 480px)"
    });
    skel.layout(
    {
        reset:          "full",
        conditionals:   true,
        grid:           true,
        containers:     "90%!",
    });

    $('.carrousel').bxSlider({
        slideWidth: 5000,
        minSlides: 1,
        maxSlides: 1
    });
</script>