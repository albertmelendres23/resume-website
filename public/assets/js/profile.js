// Profile page behavior: recommendations carousel + chip helper classes
const recs = [
  {
    quote: "3 Months phone calls no DSAT or 0 surveys. Clear 10s and good performance ",
    name: "Boss Loi",
    title: "Operations Manager · T-Mobile",
  },
  {
    quote: "Mentoring 2 groups of 8-10 newhire agents, working calm and efficient.",
    name: "Memel Akut",
    title: "Team Lead · T-Mobile",
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