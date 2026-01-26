
import React from 'react';

const facilities = [
  { title: "The Performance Lab", area: "Training Hub", desc: "4 Full NBA courts equipped with 360-degree high-speed motion capture cameras.", img: "https://images.unsplash.com/photo-1546519638-68e109498ffc?auto=format&fit=crop&q=80&w=800" },
  { title: "The Academic Wing", area: "Core Education", desc: "Modern collaborative spaces designed for university-level coursework and STEM research.", img: "https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&q=80&w=800" },
  { title: "Residency Suites", area: "Housing", desc: "Premium ocean-view living quarters with high-speed fiber and professional recovery zones.", img: "https://images.unsplash.com/photo-1522770179533-24471fcdba45?auto=format&fit=crop&q=80&w=800" }
];

export const CampusPattern: React.FC = () => {
  return (
    <section className="py-24">
      <div className="max-w-[1200px] mx-auto px-6">
        {/* Featured Big Card */}
        <div className="relative h-[60vh] bg-navy-900 overflow-hidden mb-24 group">
          <img 
            src="https://images.unsplash.com/photo-1519315901367-f34ff9154487?auto=format&fit=crop&q=80&w=1600" 
            className="w-full h-full object-cover opacity-60 transition-transform duration-1000 group-hover:scale-110" 
            alt="Main Campus"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent"></div>
          <div className="absolute bottom-0 left-0 p-12 max-w-2xl">
            <span className="text-primary font-bold tracking-[0.4em] uppercase text-xs mb-4 block">Main Complex</span>
            <h3 className="font-display text-5xl md:text-7xl text-white italic leading-none mb-6">CENTRAL COASTAL ARENA</h3>
            <p className="text-slate-300 text-lg italic">The heartbeat of our academy. 12,000 sq ft of dedicated basketball development.</p>
          </div>
        </div>

        {/* Small Grids */}
        <div className="grid md:grid-cols-3 gap-8">
          {facilities.map((f, i) => (
            <div key={i} className="wp-block-column bg-slate-50 border border-slate-100 overflow-hidden group">
              <div className="h-64 overflow-hidden grayscale group-hover:grayscale-0 transition-all duration-500">
                <img src={f.img} className="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" alt={f.title} />
              </div>
              <div className="p-8">
                <span className="text-primary font-bold tracking-widest uppercase text-[10px] mb-2 block">{f.area}</span>
                <h4 className="font-display text-2xl text-navy-900 uppercase italic mb-4">{f.title}</h4>
                <p className="text-slate-500 text-sm font-light leading-relaxed">{f.desc}</p>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};
