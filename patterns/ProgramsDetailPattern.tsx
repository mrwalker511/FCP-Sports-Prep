
import React from 'react';

const programs = [
  {
    tag: "Athletic Track",
    title: "The Pro-Informed Methodology",
    desc: "Our basketball program isn't just training; it's a 24-month roadmap to the D1 level. We integrate NBA-style video analysis, personalized strength metrics, and high-intensity tactical drills.",
    img: "https://images.unsplash.com/photo-1505666287802-931dc8394b5f?auto=format&fit=crop&q=80&w=1000",
    features: ["Biometric Tracking", "NBA-Style Video Room", "D1 Scouting Network"],
    reverse: false
  },
  {
    tag: "Academic Track",
    title: "University Preparatory Core",
    desc: "We prioritize intellectual growth with a STEM-heavy curriculum. Small class sizes ensure our student-athletes exceed standard NCAA eligibility requirements and excel in university environments.",
    img: "https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&q=80&w=1000",
    features: ["SAT/ACT Mastery", "1-on-1 Tutoring", "NCAA Compliance Lab"],
    reverse: true
  }
];

export const ProgramsDetailPattern: React.FC = () => {
  return (
    <section className="py-32">
      <div className="max-w-[1200px] mx-auto px-6">
        {programs.map((prog, idx) => (
          <div key={idx} className={`flex flex-col ${prog.reverse ? 'md:flex-row-reverse' : 'md:flex-row'} gap-16 mb-40 last:mb-0 items-center`}>
            <div className="w-full md:w-1/2 relative group">
              <div className="absolute -inset-4 border-2 border-primary/20 transition-all group-hover:inset-0"></div>
              <img src={prog.img} className="w-full aspect-[4/5] object-cover relative z-10 shadow-2xl grayscale hover:grayscale-0 transition-all duration-700" alt={prog.title} />
            </div>
            
            <div className="w-full md:w-1/2">
              <span className="text-primary font-bold tracking-[0.2em] uppercase text-[10px] mb-4 block">{prog.tag}</span>
              <h2 className="font-display text-5xl md:text-6xl text-navy-900 mb-8 italic uppercase tracking-tighter">{prog.title}</h2>
              <p className="text-slate-600 text-lg font-light leading-relaxed mb-10 italic">
                {prog.desc}
              </p>
              
              <ul className="space-y-4 mb-12">
                {prog.features.map(f => (
                  <li key={f} className="flex items-center space-x-3 group">
                    <span className="w-6 h-[1px] bg-primary group-hover:w-10 transition-all"></span>
                    <span className="text-navy-900 font-bold tracking-widest uppercase text-xs">{f}</span>
                  </li>
                ))}
              </ul>
              
              <button className="px-10 py-4 bg-navy-900 text-white font-bold uppercase tracking-widest text-[10px] hover:bg-primary hover:text-navy-900 transition-all">
                Download Brochure
              </button>
            </div>
          </div>
        ))}
      </div>
    </section>
  );
};
