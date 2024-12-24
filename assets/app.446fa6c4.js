(function(){const r=document.createElement("link").relList;if(r&&r.supports&&r.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))c(e);new MutationObserver(e=>{for(const l of e)if(l.type==="childList")for(const n of l.addedNodes)n.tagName==="LINK"&&n.rel==="modulepreload"&&c(n)}).observe(document,{childList:!0,subtree:!0});function o(e){const l={};return e.integrity&&(l.integrity=e.integrity),e.referrerpolicy&&(l.referrerPolicy=e.referrerpolicy),e.crossorigin==="use-credentials"?l.credentials="include":e.crossorigin==="anonymous"?l.credentials="omit":l.credentials="same-origin",l}function c(e){if(e.ep)return;e.ep=!0;const l=o(e);fetch(e.href,l)}})();let s=document.querySelectorAll(".faq");for(let t=0;t<s.length;t++){let r=s[t].querySelector(".faq-answer"),o=s[t].querySelector(".arrow-down");s[t].addEventListener("click",()=>{for(let c=0;c<s.length;c++){let e=s[c].querySelector(".faq-answer"),l=s[c].querySelector(".arrow-down");s[t]!=s[c]&&(e.style.maxHeight="0px",l.classList.replace("rotate-180","rotate-0"))}o.classList.contains("rotate-180")?(r.style.maxHeight=0+"px",o.classList.replace("rotate-180","rotate-0")):(r.style.maxHeight=r.scrollHeight+"px",o.classList.replace("rotate-0","rotate-180"))})}let d=document.querySelectorAll(".switcher");localStorage.getItem("color-theme")==="dark"||!("color-theme"in localStorage)&&window.matchMedia("(prefers-color-scheme: dark)").matches?document.documentElement.classList.add("dark"):document.documentElement.classList.remove("dark");d.forEach(t=>{t.addEventListener("click",function(){localStorage.getItem("color-theme")?localStorage.getItem("color-theme")==="light"?(document.documentElement.classList.add("dark"),localStorage.setItem("color-theme","dark")):(document.documentElement.classList.remove("dark"),localStorage.setItem("color-theme","light")):document.documentElement.classList.contains("dark")?(document.documentElement.classList.remove("dark"),localStorage.setItem("color-theme","light")):(document.documentElement.classList.add("dark"),localStorage.setItem("color-theme","dark"))})});let i=document.querySelectorAll(".tab"),a=document.querySelector(".tab-indicator"),u=document.querySelectorAll(".panel"),m=document.querySelectorAll(".panel-preview");a!==null&&(a.style.width=i[0].getBoundingClientRect().width+"px",a.style.left=i[0].getBoundingClientRect().left-i[0].parentElement.getBoundingClientRect().left+"px");i.forEach(t=>{t.addEventListener("click",()=>{let r=t.getAttribute("aria-controls");a.style.width=t.getBoundingClientRect().width+"px",a.style.left=t.getBoundingClientRect().left-t.parentElement.getBoundingClientRect().left+"px",u.forEach(o=>{let c=o.getAttribute("id");r===c?(o.classList.remove("invisible","opacity-0","scale-90"),o.classList.add("visible","opacity-100","scale-100")):(o.classList.add("invisible","opacity-0","scale-90"),o.classList.remove("visible","opacity-100","scale-100")),m.forEach(e=>{let l=e.getAttribute("data-target");r===l?(e.classList.replace("translate-y-[100%]","translate-y-0"),e.classList.replace("scale-75","scale-100"),e.classList.replace("opacity-50","opacity-100"),e.classList.replace("z-0","z-10")):(e.classList.replace("scale-100","scale-75"),e.classList.replace("opacity-100","opacity-50"),e.classList.replace("z-10","z-0"),setTimeout(()=>{e.classList.replace("translate-y-0","translate-y-[100%]")},300),clearTimeout())})})})});const f=document.querySelector("#hamburger"),g=document.querySelector("#navbar");f.addEventListener("click",()=>{g.classList.toggle("navbar-active")});

/*
const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
    cursor.setAttribute("style", "top: " + (e.pageY - 10) + "px; left: " + (e.pageX - 10) + "px;")
});

document.addEventListener('click', e => {
    cursor.classList.add("expand");
    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 500);
});*/


let clientX = -100;
let clientY = -100;
const innerCursor = document.querySelector(".cursor--small");

const initCursor = () => {

  document.addEventListener("mousemove", e => {
    clientX = e.clientX;
    clientY = e.clientY;
  });
  
  
  const render = () => {
    innerCursor.style.transform = `translate(${clientX}px, ${clientY}px)`;
    
    requestAnimationFrame(render);
  };
  requestAnimationFrame(render);
};

initCursor();
let lastX = 0;
let lastY = 0;
let isStuck = false;
let showCursor = false;
let group, stuckX, stuckY, fillOuterCursor;

const initCanvas = () => {
  const canvas = document.querySelector(".cursor--canvas");
  const shapeBounds = {
    width: 75,
    height: 75
  };
  paper.setup(canvas);
  const strokeColor = "rgba(5, 150, 255, 0.5)";
  const strokeWidth = 1;
  const segments = 8;
  const radius = 25;
  
  const noiseScale = 150; // speed
  const noiseRange = 4; // range of distortion
  let isNoisy = false; // state
  
  const polygon = new paper.Path.RegularPolygon(
    new paper.Point(0, 0),
    segments,
    radius
  );
  polygon.strokeColor = strokeColor;
  polygon.strokeWidth = strokeWidth;
  polygon.smooth();
  group = new paper.Group([polygon]);
  group.applyMatrix = false;
  
  const noiseObjects = polygon.segments.map(() => new SimplexNoise());
  let bigCoordinates = [];
  
  
  const lerp = (a, b, n) => {
    return (1 - n) * a + n * b;
  };
  const map = (value, in_min, in_max, out_min, out_max) => {
    return (
      ((value - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min
    );
  };
  
  paper.view.onFrame = event => {
   
    lastX = lerp(lastX, clientX, 0.2);
    lastY = lerp(lastY, clientY, 0.2);
    group.position = new paper.Point(lastX, lastY);
  }
}

initCanvas();
const initHovers = () => {

  const handleMouseEnter = e => {
    const navItem = e.currentTarget;
    const navItemBox = navItem.getBoundingClientRect();
    stuckX = Math.round(navItemBox.left + navItemBox.width / 2);
    stuckY = Math.round(navItemBox.top + navItemBox.height / 2);
    isStuck = true;
  };
  
  const handleMouseLeave = () => {
    isStuck = false;
  };
  
  //Event listeners
  const linkItems = document.querySelectorAll(".link");
  linkItems.forEach(item => {
    item.addEventListener("mouseenter", handleMouseEnter);
    item.addEventListener("mouseleave", handleMouseLeave);
  });
};

initHovers();
