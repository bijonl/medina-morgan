console.log('HELLO JS HELLO JS'); 

const accordionBtns = document.querySelectorAll(".accordion");

document.addEventListener("DOMContentLoaded", () => {
  console.log('PARENT'); 
  const accordions = document.querySelectorAll(".accordion");
  console.log(accordions); 

  // click handler
  accordions.forEach((accordion) => {
    accordion.addEventListener("click", function (e) {
      e.preventDefault(); 
      console.log(this); 
      const targetId = this.getAttribute("data-accordion-id");
      console.log(targetId); 
      toggleAccordion(targetId);
      console.targetId; 
    });
  });
});

// function to open/close by id
// function to open/close by id
function toggleAccordion(id) {
  const content = document.getElementById(id);
  const button = document.querySelector(`[data-accordion-id="${id}"]`);

  if (!content || !button) return;

  const isOpen = button.classList.contains("is-open");

  if (isOpen) {
    // Closing
    button.classList.remove("is-open");
    button.classList.add("is-closed");

    content.style.maxHeight = content.scrollHeight + "px"; // set to current height
    requestAnimationFrame(() => {
      content.style.maxHeight = null; // let CSS transition it down
    });
  } else {
    // Opening
    button.classList.remove("is-closed");
    button.classList.add("is-open");

    content.style.maxHeight = content.scrollHeight + "px";
  }
}

document.addEventListener("scroll", function () {
  const header = document.querySelector("header.site-header"); // adjust selector if needed
  if (!header) return;

  if (window.scrollY > 0) {
    header.classList.add("is-scrolling");
  } else {
    header.classList.remove("is-scrolling");
  }
});


if (document.querySelector('.service-glide')) {
  new Glide('.service-glide', {
    type: 'carousel',
    startAt: 0,
    perView: 3,
    breakpoints: {
      1024: {
        perView: 2
      },
      600: {
        perView: 1
      }
    },
    autoplay: 5000,
    hoverpause: false,
  }).mount();
}

function setEqualHeight(className) {
    const elements = document.querySelectorAll(`.${className}`);
    if (!elements.length) return;

    // Reset heights first (in case of resize)
    elements.forEach(el => el.style.height = 'auto');

    // Find the tallest element
    let maxHeight = 0;
    elements.forEach(el => {
        const elHeight = el.offsetHeight;
        if (elHeight > maxHeight) maxHeight = elHeight;
    });

    // Set all elements to tallest height
    elements.forEach(el => el.style.height = maxHeight + 'px');
}

// Usage example
setEqualHeight('single-post-tile');

// Optional: Update on window resize
window.addEventListener('resize', () => setEqualHeight('single-post-tile'));


document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");

  counters.forEach(counter => {
    counter.addEventListener("animationend", () => {
      // Get final value from CSS variable
      const finalValue = getComputedStyle(counter).getPropertyValue("--to").trim();

      // Format with commas
      const formatted = Number(finalValue).toLocaleString();

      counter.classList.add("finished");
      counter.textContent += formatted;
    });
  });
});