document.addEventListener('DOMContentLoaded', () => {

    const animatedElements = document.querySelectorAll('.animate-on-scroll');

    if (!animatedElements.length) {
        console.log("No elements found to animate."); // Отладка
        return;
    }
     // console.log(`Found ${animatedElements.length} elements to animate.`); // Отладка

    const observerOptions = {
        root: null, // Используем viewport как область видимости
        rootMargin: '0px',
        threshold: 0.1 // Элемент считается видимым, когда хотя бы 10% его показалось
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            // console.log(`Observing: ${entry.target.id || entry.target.className}, isIntersecting: ${entry.isIntersecting}`); // Отладка
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                // console.log(`Added 'is-visible' to ${entry.target.id || entry.target.className}`); // Отладка
                observer.unobserve(entry.target); // Прекращаем наблюдение после анимации
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    animatedElements.forEach(element => {
        observer.observe(element);
    });

});