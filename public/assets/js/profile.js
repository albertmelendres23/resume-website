// Profile page behavior: recommendations carousel + chip helper classes
const recs = [
  {
    quote: "Consistently maintained excellent performance over a three-month period, handling phone calls with zero DSATs and no negative survey results. Achieved clear 10/10 customer satisfaction scores while demonstrating strong communication skills, professionalism, and reliability. ",
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

let recIndex = 0;
const recContent = document.getElementById("rec-content");
const renderRec = () => {
  const rec = recs[recIndex];
  if (!recContent) return;
  recContent.innerHTML = `
    <p class="text-lg leading-relaxed text-slate-700">“${rec.quote}”</p>
    <div>
      <p class="font-semibold text-slate-900">${rec.name}</p>
      <p class="text-sm text-slate-500">${rec.title}</p>
    </div>
  `;
};

document.getElementById("rec-prev")?.addEventListener("click", () => {
  recIndex = (recIndex - 1 + recs.length) % recs.length;
  renderRec();
});
document.getElementById("rec-next")?.addEventListener("click", () => {
  recIndex = (recIndex + 1) % recs.length;
  renderRec();
});
renderRec();

document.querySelectorAll(".chip").forEach((chip) => {
  chip.classList.add("rounded-full", "bg-slate-100", "px-3", "py-1", "text-xs", "font-semibold", "text-slate-600");
});
document.querySelectorAll(".chip-link").forEach((chip) => {
  chip.classList.add("hover:bg-primary-50", "text-primary-600");
});