const scale = {
    values:[
        {scale:0, borderRadius:50,opacity:0},       
    ]
}
const right = {
    values:[
        {x:900,opacity:0}     
    ]
}
const tween = new TimelineLite();
tween.add(
    TweenLite.to(".paraanimate1",1,{
        bezier: right,
        ease: Power1.easeInOut
    })
);
tween.add(
    TweenLite.to(".page1",1,{
        bezier: scale,
        ease: Power1.easeInOut
    })
);

tween.add(
    TweenLite.to(".page2",1,{
        bezier: scale,
        ease: Power1.easeInOut
    })
);
tween.add(
    TweenLite.to(".page3",1,{
        bezier: scale,
        ease: Power1.easeInOut
    })
);
tween.add(
    TweenLite.to(".page4",1,{
        bezier: scale,
        ease: Power1.easeInOut
    })
);
const controller = new ScrollMagic.Controller();
const scene = new ScrollMagic.Scene({
    triggerElement : ".animate",
    duration: 5000,
    triggerHook: 0
})
.setTween(tween)
.addIndicators()
.setPin(".animate")
.addTo(controller);



// const animation1 = {
//     value: [{x:1000,y:0}]
// }

// const Tween2 = new TimelineLite();

// Tween2.add(
//     TweenLite.to("paraanimate",1,{
//         bezier: animation1,
//         ease: Power1.easeInOut
//     })
// )
// const controller2 = new ScrollMagic.Controller();
// const scene1 = new ScrollMagic.Scene({
//     triggerElement : ".page3",
//     duration: 5000,
//     triggerHook: 0
// })
// .setTween(tween)
// .addIndicators()
// .setPin(".animate")
// .addTo(controller2);

