
import React from 'react';

const staff = [
  { name: "Coach Marcus Reed", role: "Head of Basketball Ops", exp: "15yrs NBA/D1", img: "https://images.unsplash.com/photo-1568602471122-7832951cc4c5?auto=format&fit=crop&q=80&w=400" },
  { name: "Dr. Elena Vance", role: "Academic Director", exp: "PhD Stanford", img: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400" },
  { name: "Julian Thorne", role: "Strength & Conditioning", exp: "Ex-Olympic Trainer", img: "https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?auto=format&fit=crop&q=80&w=400" },
  { name: "Sarah Jenkins", role: "Player Development", exp: "Former WNBA", img: "https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=400" },
  { name: "Tom 'Tank' Russo", role: "Defense Specialist", exp: "20yrs Coaching", img: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=400" },
  { name: "Maya Sterling", role: "Mental Performance", exp: "MSc Psychology", img: "https://images.unsplash.com/photo-1567532939604-b6c5b0adcc2c?auto=format&fit=crop&q=80&w=400" }
];

export const FacultyPattern: React.FC = () => {
  return (
    <section className="py-24">
      <div className="max-w-[1200px] mx-auto px-6">
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
          {staff.map((p, i) => (
            <div key={i} className="wp-block-column group relative bg-white border border-navy-900/5 hover:border-primary/50 transition-all p-6 shadow-xl">
              <div className="relative aspect-square overflow-hidden mb-8 grayscale group-hover:grayscale-0 transition-all duration-700">
                <img src={p.img} className="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" alt={p.name} />
                <div className="absolute inset-0 bg-navy-950/20 group-hover:bg-transparent"></div>
              </div>
              <span className="text-primary font-bold tracking-widest uppercase text-[10px] mb-2 block">{p.role}</span>
              <h3 className="font-display text-3xl text-navy-900 uppercase italic mb-4">{p.name}</h3>
              <div className="flex items-center space-x-3">
                <span className="w-4 h-[1px] bg-navy-900/20"></span>
                <span className="text-slate-400 text-[11px] font-bold uppercase tracking-wider">{p.exp}</span>
              </div>
              
              <div className="absolute top-0 right-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity">
                <span className="material-icons text-primary">add_circle_outline</span>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};
