
import React from 'react';

export const GridPattern: React.FC = () => {
  return (
    <div className="wp-block-group">
      <div className="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
        <div className="max-w-2xl">
          <span className="text-primary font-heading font-bold tracking-[0.3em] text-xs uppercase block mb-4">Elite Standards</span>
          <h2 className="font-display text-5xl md:text-7xl text-navy-900 leading-none italic uppercase">The Coastal <br />Blueprint</h2>
        </div>
        <p className="text-slate-500 italic max-w-sm text-right font-light">
          We don't just build athletes; we build complete leaders ready for the next level.
        </p>
      </div>

      <div className="wp-block-columns grid md:grid-cols-3 gap-8">
        {[
          {
            title: "Performance",
            img: "https://images.unsplash.com/photo-1518063319789-7217e6706b04?auto=format&fit=crop&q=80&w=800",
            desc: "Advanced biometrics and professional strength programs."
          },
          {
            title: "Academic Lab",
            img: "https://images.unsplash.com/photo-1523050335102-c6744729ea2a?auto=format&fit=crop&q=80&w=800",
            desc: "Tailored educational pathways for college placement."
          },
          {
            title: "Lifestyle",
            img: "https://images.unsplash.com/photo-1519315901367-f34ff9154487?auto=format&fit=crop&q=80&w=800",
            desc: "Ocean-front residency with professional nutrition."
          }
        ].map((block, i) => (
          <div key={i} className="wp-block-column group bg-white rounded-sm overflow-hidden shadow-xl hover:shadow-2xl transition-all">
            <div className="h-64 overflow-hidden relative">
              <img src={block.img} className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt={block.title} loading="lazy" />
              <div className="absolute inset-0 bg-navy-900/20 group-hover:bg-transparent transition-colors"></div>
            </div>
            <div className="p-10">
              <h3 className="font-display text-3xl text-navy-900 mb-4 uppercase italic">{block.title}</h3>
              <p className="text-slate-600 text-sm font-light leading-relaxed mb-6">{block.desc}</p>
              <a href="#" className="text-[10px] font-bold tracking-widest uppercase text-primary border-b border-primary pb-1 hover:text-navy-900 hover:border-navy-900 transition-all">Explore Block</a>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
};
