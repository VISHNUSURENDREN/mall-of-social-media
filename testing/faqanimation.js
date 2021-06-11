const t5 = gsap.timeline({ defaults: { ease: "power1.easeinout" } });
t5.from(".faqtitle",{scale:0.5})
t5.to(".faqtitle", {scale:1});
const controller4 = new ScrollMagic.Controller();
const scene4 = new ScrollMagic.Scene({
    triggerElement : ".faq",
    duration:2000,
    triggerHook: 0.7
})
.setTween(t5)
.addIndicators()
// .setPin(".faq")
.addTo(controller4);


