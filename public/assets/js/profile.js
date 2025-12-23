// Profile page behavior: recommendations carousel + chip helper classes
const recs = [
  {
    quote: "Consistently maintained excellent performance over a three-month period, handling phone calls with zero DSATs and no negative survey results. Achieved clear 10/10 customer satisfaction scores while demonstrating strong communication skills, professionalism, and reliability.",
    name: "Boss Loi",
    title: "Operations Manager · T-Mobile",
  },
  {
    quote: "Led and mentored two groups of 8–10 new hire agents, maintaining a calm and efficient approach while ensuring smooth onboarding and strong performance.",
    name: "Memel Akut",
    title: "Team Lead · T-Mobile",
  },
  {
    quote: "Handled an average of 50 calls per day while assisting patients with care, professionalism, and a strong service-oriented mindset.",
    name: "Goldie Benjamin",
    title: "Operation Manager · Sutherland Global",
  },
  {
    quote: "Created and maintained organized, clear, and accessible documentation to support efficient operations.",
    name: "Lebron James Pathay",
    title: "BSIT Student · University of Mindanao - Main Campus",
  },
];

function initRecommendations() {
  let recIndex = 0;
  const recContent = document.getElementById("rec-content");

  if (!recContent) {
    console.log("rec-content element not found");
    return;
  }

  const renderRec = () => {
    const rec = recs[recIndex];
    if (!recContent) return;
    recContent.innerHTML = `
      <p class="text-lg leading-relaxed text-slate-700">"${rec.quote}"</p>
      <div>
        <p class="font-semibold text-slate-900">${rec.name}</p>
        <p class="text-sm text-slate-500">${rec.title}</p>
      </div>
    `;
  };

  const prevBtn = document.getElementById("rec-prev");
  const nextBtn = document.getElementById("rec-next");

  if (prevBtn) {
    prevBtn.addEventListener("click", () => {
      recIndex = (recIndex - 1 + recs.length) % recs.length;
      renderRec();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener("click", () => {
      recIndex = (recIndex + 1) % recs.length;
      renderRec();
    });
  }

  renderRec();
}

function initChips() {
  document.querySelectorAll(".chip").forEach((chip) => {
    chip.classList.add("rounded-full", "bg-slate-100", "px-3", "py-1", "text-xs", "font-semibold", "text-slate-600");
  });
  document.querySelectorAll(".chip-link").forEach((chip) => {
    chip.classList.add("hover:bg-primary-50", "text-primary-600");
  });
}

// Wait for DOM to be ready
console.log("profile.js loaded, DOM state:", document.readyState);

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", () => {
    console.log("DOM content loaded, initializing...");
    initRecommendations();
    initChips();
  });
} else {
  console.log("DOM already loaded, initializing...");
  initRecommendations();
  initChips();
}

// Also try a setTimeout as fallback
setTimeout(() => {
  console.log("Fallback init running");
  initRecommendations();
  initChips();
}, 100);
