
import React from 'react';

export const HeroPattern: React.FC = () => {
  return (
    <section className="wp-block-cover relative h-screen flex items-center justify-center overflow-hidden bg-navy-900">
      <img 
        src="https://images.unsplash.com/photo-1546519638-68e109498ffc?auto=format&fit=crop&q=80&w=2000" 
        className="wp-block-cover__image absolute inset-0 w-full h-full object-cover opacity-40 scale-105 animate-pulse-slow"
        alt="Elite Training Background"
      />
      <div className="absolute inset-0 bg-gradient-to-t from-navy-950 via-navy-900/40 to-navy-900/60"></div>
      
      <div className="wp-block-cover__inner-container relative z-10 text-center px-6">
        <div className="inline-block mb-6 px-4 py-1 border border-primary/30 bg-primary/5 backdrop-blur-sm">
          <p className="text-primary font-heading font-bold tracking-[0.5em] text-xs md:text-sm uppercase">
            Official Prep Academy
          </p>
        </div>
        
        <h1 className="font-display text-7xl md:text-[160px] leading-[0.8] text-white tracking-tighter italic mb-8 drop-shadow-2xl">
          THE FUTURE <br/>
          <span className="text-primary">OF ELITE</span> BALL
        </h1>
        
        <p className="max-w-2xl mx-auto text-lg md:text-xl text-slate-300 font-light italic leading-relaxed mb-12">
          Experience world-class training and academic rigor designed for the modern student-athlete.
        </p>

        <div className="wp-block-buttons flex flex-wrap justify-center gap-6">
          <button className="bg-primary text-navy-900 px-14 py-5 font-bold tracking-[0.2em] uppercase text-xs hover:bg-white hover:scale-105 transition-all shadow-2xl">
            Start Journey
          </button>
          <button className="border border-white/20 text-white px-14 py-5 font-bold tracking-[0.2em] uppercase text-xs hover:bg-white/10 transition-all backdrop-blur-md">
            Academy Tour
          </button>
        </div>
      </div>
    </section>
  );
};
