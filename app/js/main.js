const controller = new ScrollMagic.Controller();

function animations() {
  let el = document.querySelectorAll(".animated");

  for (let i = 0; i < el.length; i++) {
    addAnimations(el[i], false, true);
  }
}

function addAnimations(block, reverse, hook) {
  if (hook == true) {
    triggerHook = block.getAttribute("data-trigger-hook");
    if (triggerHook == null) {
      triggerHook = 1;
    }
  } else {
    triggerHook = 1;
  }
  triggerHook = parseFloat(triggerHook);
  setTimeout(() => {
    new ScrollMagic.Scene({
      triggerElement: "." + block.getAttribute("data-trigger"),
      reverse: reverse,
    })
      .setClassToggle("." + block.classList[0], block.getAttribute("data-animate"))
      .addTo(controller)
      .triggerHook(triggerHook);
  }, parseInt(block.getAttribute("data-delay")));
}

function testimonialsSlideshow() {
  const slides = document.querySelectorAll(".testimonials_box"),
    container = document.querySelector(".testimonials");

  $(".testimonials_slideshow").slick({
    infinite: false,
    dots: true,
    prevArrow:
      '<button type="button" class="slick-prev"><img src="img/icons/arrow.svg" alt="Arrow"></button>',
    nextArrow:
      '<button type="button" class="slick-next"><img src="img/icons/arrow.svg" alt="Arrow""></button>',
    autoplay: true,
    autoplaySpeed: 4500,
  });

  $(".testimonials_slideshow").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    let bgColor = slides[nextSlide].getAttribute("data-logo-color");
    container.setAttribute("style", "background-image: linear-gradient(270deg, #fff," + bgColor + ")");

    animSlide(slides[nextSlide], slides[nextSlide].getAttribute("data-anim-class"));
  });

  function animSlide(slide, animClass) {
    let slideChild = slide.children;

    for (let i = 0; i < slideChild.length; i++) {
      setTimeout(() => {
        slideChild[i].classList.add(animClass);
      }, slideChild[i].getAttribute("data-anim-delay"));
    }

    setTimeout(() => {
      for (let i = 0; i < slideChild.length; i++) {
        slideChild[i].classList.remove(animClass);
      }
    }, 1000 + parseInt(slide.children[3].getAttribute("data-anim-delay")));
  }
}

function porotofolioSlideshows() {}

function venividivici() {
  gsap.defaults({ ease: "none", duration: 2 });

  const tl = gsap.timeline();
  tl.from(".veni", { xPercent: -100 }).from(".vidi", { xPercent: 100 }).from(".vici", { yPercent: 100 });

  ScrollTrigger.create({
    animation: tl,
    trigger: ".venividivici .scrolling",
    start: "top top",
    end: "+=4500",
    scrub: true,
    pin: true,
  });
}

function confettiFunc() {
  var duration = 5 * 1000;
  var animationEnd = Date.now() + duration;
  var defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

  function randomInRange(min, max) {
    return Math.random() * (max - min) + min;
  }

  var interval = setInterval(function () {
    var timeLeft = animationEnd - Date.now();

    if (timeLeft <= 0) {
      return clearInterval(interval);
    }

    var particleCount = 50 * (timeLeft / duration);
    confetti(
      Object.assign({}, defaults, {
        particleCount,
        origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 },
      })
    );
    confetti(
      Object.assign({}, defaults, {
        particleCount,
        origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 },
      })
    );
  }, 250);
}

let confettiVariable = function () {
  let c = window.getComputedStyle(document.querySelector(".vici")).transform;
  let num = c.substring(21, c.length - 1);
  num = parseInt(num);

  if (num < 250) {
    confettiFunc();

    setTimeout(() => {
      window.removeEventListener("scroll", confettiVariable, false);
    }, 14);
  }
};

document.addEventListener("DOMContentLoaded", () => {
  animations();
  testimonialsSlideshow();
  porotofolioSlideshows();
  venividivici();
  window.addEventListener("scroll", confettiVariable, false);
});
