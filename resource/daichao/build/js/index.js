var page = {

    init:function () {

        this.initSwiper()
    },
    initSwiper:function () {

        new Swiper('.swiper-container',{

            autoplay: {
                delay: 3000,
                stopOnLastSlide: false,
                disableOnInteraction: false,
            },

            pagination: {
                el: '.swiper-pagination',
                clickable :true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },


        })
    }
}

page.init();