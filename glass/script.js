window.addEventListener('scroll', function () {
            let header = document.querySelector('div');
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('scrolling-active', windowPosition);
});
