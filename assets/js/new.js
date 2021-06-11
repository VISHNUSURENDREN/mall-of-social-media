
function openHere(event,index,value) {
    $(".icon-box").addClass('indexNone');
    $(".icon-box:eq("+index+")" ).removeClass('indexNone');
    $(".hide").addClass('indexNone');
    $(".hide:eq("+index+")" ).removeClass('indexNone');
    $('#header').slideUp( "fast" ).css("display", "none");
    $('#footer').slideDown( "fast" ).css("display", "none");
    $('.breadcrumbs').css("display", "none");
    $(".icon-box:eq("+index+")").addClass('transformBig');
    $(location).attr('href',value)
}

function headerColor(color,fontColor) {
    $("#header").css("backgroundColor",color).css("border","0px");
    $(".nav-menu a").css("color",fontColor);
    $("#header .logo a").css("color",fontColor);
    $(".get-started-btn").css("backgroundColor",fontColor);
    $("#hideit a").css("color",fontColor);
    $("#hideit .servicesHeader a ").css("color","#000");
    
    
    $(window).scroll(function() {
        if ($(this).scrollTop()>200){
          $(".nav-menu a").css("color",fontColor);
          $("#header .logo a").css("color",fontColor);
          $(".get-started-btn").css("backgroundColor",fontColor);
          $("#header").css("backgroundColor","#0b0c108f").css("border","0px");
          $("#hideit a").css("color",fontColor);
          $("#hideit .servicesHeader a ").css("color",fontColor);

          document.getElementById("categoryDrop").classList.remove("indexHeader");
          document.getElementById("header").classList.add(".header-scrolled");
        }
        else{
          document.getElementById("categoryDrop").classList.add("indexHeader");
          $("#header").css("backgroundColor",color).css("border","0px");
          $(".nav-menu a").css("color",fontColor);
          $("#header .logo a").css("color",fontColor);
          $("#hideit a").css("color",fontColor);
          $("#hideit .servicesHeader a ").css("color","#000");

            $(".get-started-btn").css("backgroundColor",fontColor);
        }
      });
}
function videoAnimationBackground() {
  const colors=['#2196f3', '#e91e63', '#ffeb3b', '#74ff1d', '#7D3C98', '#34495E', '#F39C12', '#F7DC6F', '#A9DFBF', '#85C1E9']
        function createSquare() {
            const section = document.querySelector('.pattern-header');
            const square = document.createElement('span');
            var size = Math.random() * 20;
            square.style.width = 20 + size + 'px';
            square.style.height = 20 + size + 'px';
            square.style.top = Math.random() * innerHeight + 'px';
            square.style.left = Math.random() * innerWidth + 'px';
            section.appendChild(square);
            const bg = colors[Math.floor(Math.random()*colors.length)]
            square.style.background = bg;
            setTimeout(() => {
                square.remove()
            }, 3000);
        }
        setInterval(createSquare, 250)
}
// $(".logo-container").next().height($(".logo-container").height())
// $(window).scroll(function() {
//     testDiv = document.getElementById("section2");
//     console.log(testDiv.offsetTop+"hello");
//     var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//     console.log(scrollTop);
//     if (scrollTop > testDiv.offsetTop) {
//         console.log("hoo");
//         $('.logo-section:eq(0)').css('opacity',0);
//         $('.logo-section:eq(1)').css('opacity',1-testDiv.offsetTop);

//     }
//     else {
//         $('.logo-section:eq(0)').css('opacity',1-scrollTop/testDiv.offsetTop);
//         $('.logo-section:eq(1)').css('opacity',0);

//     }
// }).scroll()