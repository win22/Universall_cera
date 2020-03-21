
const ratio = .1
const options = {
    // root represente l'element racine, qui permet de detecter si l'element est affiché ou non
    root: null,
    rootMargin: '0px',
    threshold: ratio
};
const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
        if(entry.intersectionRatio > ratio)
        {
            entry.target.classList.add('reveal-visible')
        }
    })
};
const observer =  new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('[class*="reveal"]').forEach(function (r) {
    observer.observe(r)
})