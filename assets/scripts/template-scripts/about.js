const ps=document.querySelectorAll("p"),checkboxes=document.querySelectorAll("input[type='checkbox']");checkboxes.forEach(((e,t)=>{new ResizeObserver((e=>{for(let t of e)t.target.classList[t.target.scrollHeight>t.contentRect.height?"add":"remove"]("truncated")})).observe(ps[t])}));const swiper=new Swiper(".about-swiper",{slidesPerView:"auto",spaceBetween:16});