const t4 = gsap.timeline({ defaults: { ease: "power1.easeinout" } });
t4.from(".contentcta",{opacity:0})
t4.to(".contentcta", {opacity:1});

const controller3 = new ScrollMagic.Controller();
const scene3 = new ScrollMagic.Scene({
    triggerElement : ".cta",
    duration:2000,
    triggerHook: 0.5
})
.setTween(t4)
.addIndicators()
// .setPin(".cta")
.addTo(controller3);

