gsap.to(".parallax-bg", {
    y: "50%", 
    ease: "none",
    scrollTrigger: {
        trigger: ".parallax-container",
        start: "top bottom",
        end: "bottom top",
        scrub: true
    }
});

gsap.utils.toArray(".fade-section").forEach(section => {
    gsap.from(section, {
        opacity: 0,
        y: 50,
        duration: 1,
        scrollTrigger: {
            trigger: section,
            start: "top 80%", 
            toggleActions: "play none none reverse"
        }
    });
});

// Scroll-based staggered fade-in
gsap.from(".stagger-item", {
    opacity: 0,
    y: 50,
    duration: 1,
    stagger: 0.2,
    ease: "power2.out",
    scrollTrigger: {
        trigger: ".stagger-item",
        start: "top 80%", // Triggers when 80% of the element is in view
        toggleActions: "play none none reverse"
    }
});

// Scroll-based slide-in from the left
gsap.from(".slide-text", {
    opacity: 0,
    x: -100,
    duration: 1,
    ease: "power2.out",
    scrollTrigger: {
        trigger: ".slide-text",
        start: "top 85%",
        toggleActions: "play none none reverse"
    }
});