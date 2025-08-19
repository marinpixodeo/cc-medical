document.addEventListener("DOMContentLoaded",function(){const a=document.getElementById("mobile-menu-button"),n=document.getElementById("mobile-menu");a&&n&&a.addEventListener("click",function(){n.classList.toggle("hidden")}),document.querySelectorAll('a[href^="#"]').forEach(e=>{e.addEventListener("click",function(t){t.preventDefault();const s=document.querySelector(this.getAttribute("href"));s&&(s.scrollIntoView({behavior:"smooth",block:"start"}),n&&!n.classList.contains("hidden")&&n.classList.add("hidden"))})});const o=document.getElementById("masthead");o&&window.addEventListener("scroll",function(){window.scrollY>100?(o.classList.add("bg-white/95","backdrop-blur-sm"),o.classList.remove("bg-white")):(o.classList.remove("bg-white/95","backdrop-blur-sm"),o.classList.add("bg-white"))});const c={threshold:.1,rootMargin:"0px 0px -50px 0px"},l=new IntersectionObserver(function(e){e.forEach(t=>{t.isIntersecting&&t.target.classList.add("animate-fade-in-up")})},c);document.querySelectorAll(".service-card, .card").forEach(e=>{l.observe(e)});const i=document.querySelector("#appointment form");i&&i.addEventListener("submit",function(e){e.preventDefault();const t=i.querySelectorAll("[required]");let s=!0;t.forEach(r=>{r.value.trim()?r.classList.remove("border-red-500"):(s=!1,r.classList.add("border-red-500"))}),s?(alert("Cảm ơn bạn đã đặt lịch khám! Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất."),i.reset()):alert("Vui lòng điền đầy đủ thông tin bắt buộc.")}),document.querySelectorAll(".service-card").forEach(e=>{e.addEventListener("mouseenter",function(){this.style.transform="translateY(-5px)"}),e.addEventListener("mouseleave",function(){this.style.transform="translateY(0)"})}),window.addEventListener("load",function(){document.body.classList.add("loaded")})});const d=document.createElement("style");d.textContent=`
    .animate-fade-in-up {
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .loaded {
        opacity: 1;
    }
    
    body {
        opacity: 0;
        transition: opacity 0.3s ease-in;
    }
`;document.head.appendChild(d);
