
import React from 'react';

const donors = [
  { name: "The Gold Coast Foundation", tier: "Platinum", year: "Founding Partner" },
  { name: "Global Sports Alliance", tier: "Platinum", year: "Since 2024" },
  { name: "Elite Performance Nutrients", tier: "Gold", year: "Partner" },
  { name: "Dr. Richard & Sarah Sterling", tier: "Gold", year: "Individual" },
  { name: "Miami Tech Ventures", tier: "Silver", year: "Corporate" },
  { name: "Coach K Memorial Fund", tier: "Silver", year: "Foundation" }
];

export const DonorsPattern: React.FC = () => {
  return (
    <section className="py-24">
      <div className="max-w-[1200px] mx-auto px-6">
        
        {/* Why Support Section */}
        <div className="grid md:grid-cols-2 gap-20 mb-32 items-center">
          <div>
            <span className="text-primary font-bold tracking-[0.4em] uppercase text-[10px] mb-4 block">Our Mission</span>
            <h3 className="font-display text-5xl text-navy-900 italic uppercase mb-8 leading-none">EQUITY IN <br/>ELITE ATHLETICS</h3>
            <p className="text-slate-500 text-lg leading-relaxed italic mb-8">
              Talent is distributed equally, but opportunity is not. 40% of our roster is supported by full-tuition scholarships funded exclusively by our donor network.
            </p>
            <div className="flex flex-col space-y-4">
              <div className="flex items-center space-x-4">
                <span className="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                  <span className="material-icons">school</span>
                </span>
                <span className="text-navy-900 font-bold uppercase tracking-widest text-xs">Full Academic Sponsorship</span>
              </div>
              <div className="flex items-center space-x-4">
                <span className="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                  <span className="material-icons">sports_basketball</span>
                </span>
                <span className="text-navy-900 font-bold uppercase tracking-widest text-xs">Professional Grade Equipment</span>
              </div>
            </div>
          </div>
          <div className="relative aspect-video bg-navy-900 overflow-hidden shadow-2xl group">
             <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&q=80&w=1200" className="w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-1000" alt="Impact" />
             <div className="absolute inset-0 flex items-center justify-center">
                <button className="w-20 h-20 bg-primary text-navy-900 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                  <span className="material-icons text-4xl">play_arrow</span>
                </button>
             </div>
          </div>
        </div>

        {/* Wall of Honor */}
        <div className="text-center mb-16">
          <h4 className="font-display text-4xl text-navy-900 italic uppercase tracking-tighter">WALL OF HONOR</h4>
          <div className="h-1 w-24 bg-primary mx-auto mt-4"></div>
        </div>

        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-24">
          {donors.map((d, i) => (
            <div key={i} className="p-10 bg-white border border-slate-100 shadow-sm hover:shadow-xl transition-all text-center group">
              <span className={`text-[9px] font-bold uppercase tracking-[0.3em] px-3 py-1 mb-6 inline-block ${
                d.tier === 'Platinum' ? 'bg-navy-900 text-white' : 'bg-primary text-navy-900'
              }`}>
                {d.tier} Tier
              </span>
              <h5 className="font-display text-3xl text-navy-900 uppercase italic mb-2 group-hover:text-primary transition-colors">{d.name}</h5>
              <p className="text-slate-400 text-[10px] font-bold uppercase tracking-widest">{d.year}</p>
            </div>
          ))}
        </div>

        {/* Donate CTA */}
        <div className="bg-navy-950 p-16 text-center relative overflow-hidden">
          <div className="absolute inset-0 opacity-10 flex">
             {[...Array(20)].map((_, i) => (
               <div key={i} className="w-24 h-full border-r border-white/20 -skew-x-12"></div>
             ))}
          </div>
          <div className="relative z-10 max-w-2xl mx-auto">
            <h4 className="font-display text-5xl text-white italic uppercase mb-6 leading-none tracking-tighter">Join the Foundation</h4>
            <p className="text-slate-400 mb-10 italic">Your support changes lives. Every dollar goes directly into player development and student scholarships.</p>
            <div className="flex flex-wrap justify-center gap-4">
              <button className="px-12 py-4 bg-primary text-navy-900 font-bold uppercase tracking-widest text-[10px] hover:bg-white transition-all shadow-xl">
                Donate Now
              </button>
              <button className="px-12 py-4 border border-white/20 text-white font-bold uppercase tracking-widest text-[10px] hover:bg-white/5 transition-all">
                Corporate Inquiries
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};
