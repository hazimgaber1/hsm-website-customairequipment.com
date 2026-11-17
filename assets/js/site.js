// Header menu, dropdowns and small page helpers.
(function () {
  "use strict";
  var nav = document.getElementById("nav");
  var menuBtn = document.querySelector(".menu-btn");
  if (menuBtn && nav) {
    menuBtn.addEventListener("click", function () {
      var open = nav.classList.toggle("open");
      menuBtn.setAttribute("aria-expanded", open ? "true" : "false");
    });
  }

  var subs = Array.prototype.slice.call(document.querySelectorAll(".has-sub"));
  function closeAll(except) {
    subs.forEach(function (li) {
      if (li !== except) {
        li.classList.remove("open");
        li.querySelector(".nav-top").setAttribute("aria-expanded", "false");
      }
    });
  }
  subs.forEach(function (li) {
    var btn = li.querySelector(".nav-top");
    btn.addEventListener("click", function (e) {
      e.stopPropagation();
      var open = li.classList.toggle("open");
      btn.setAttribute("aria-expanded", open ? "true" : "false");
      closeAll(li);
    });
  });
  document.addEventListener("click", function (e) {
    if (!e.target.closest(".has-sub")) closeAll(null);
  });
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      closeAll(null);
      if (nav && nav.classList.contains("open")) { nav.classList.remove("open"); menuBtn.setAttribute("aria-expanded", "false"); menuBtn.focus(); }
    }
  });

  // Guide library filter
  var q = document.getElementById("guide-q");
  if (q) {
    var items = Array.prototype.slice.call(document.querySelectorAll("[data-guide]"));
    var empty = document.getElementById("guide-empty");
    q.addEventListener("input", function () {
      var term = q.value.trim().toLowerCase(), shown = 0;
      items.forEach(function (el) {
        var hit = !term || el.getAttribute("data-guide").indexOf(term) !== -1;
        el.hidden = !hit;
        if (hit) shown++;
      });
      if (empty) empty.hidden = shown !== 0;
    });
  }
})();
