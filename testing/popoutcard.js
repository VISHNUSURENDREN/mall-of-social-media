const t3 = gsap.timeline({ defaults: { ease: "power1.easeinout" } });
t3.from(".h1Service",{opacity:0})
t3.to(".h1Service", {opacity:1});
t3.to(".h1Service", {opacity:0.8,duration:1.5,delay:0.5});
t3.from("#box1",{x: -2000,rotate:180})
t3.to(".h1Service", {opacity:0,duration:1.5,delay:0.5});
t3.from("#box2",{y: -2000,rotate:180})
t3.from("#box3",{x: 2000,rotate:180})
t3.from("#box4",{x: -2000,rotate:180})
t3.from("#box5",{y: -2000,rotate:180})
t3.from("#box6",{x: 2000,rotate:180})
t3.to("#box1", { x:0,rotate:0});
t3.to("#box2", {  y:0,rotate:0});
t3.to("#box3", {  x:0,rotate:0});
t3.to("#box4", {  x:0,rotate:0});
t3.to("#box5", {  y:0,rotate:0});
t3.to("#box6", {  x:0,rotate:0});
const controller2 = new ScrollMagic.Controller();
const scene2 = new ScrollMagic.Scene({
    triggerElement : ".page3",
    duration: 3000,
    triggerHook: 0
})
.setTween(t3)
.addIndicators()
.setPin(".page3")
.addTo(controller2);