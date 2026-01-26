
import React from 'react';

export const ProgramsHeroPattern: React.FC = () => {
  return (
    <section className="relative h-[70vh] flex items-center overflow-hidden bg-navy-950">
      <div className="absolute inset-0 grid grid-cols-1 md:grid-cols-2 opacity-40">
        <div className="relative overflow-hidden group">
          <img 
            src="https://images.unsplash.com/photo-1544105072-423f629a55a7?auto=format&fit=crop&q=80&w=1200" 
            className="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" 
            alt="Training" 
          />
          <div className="absolute inset-0 bg-navy-950/40"></div>
        </div>
        <div className="relative overflow-hidden group">
          <img 
            src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&q=80&w=1200" 
            className="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" 
            alt="Classroom" 
          />
          <div className="absolute inset-0 bg-navy-950/40"></div>
        </div>
      </div>

      <div className="relative z-10 w-full max-w-[1200px] mx-auto px-6 mt-20">
        <span className="text-primary font-heading font-bold tracking-[0.4em] text-xs uppercase mb-4 block">Our Curriculum</span>
        <h1 className="font-display text-6xl md:text-[120px] text-white italic leading-[0.85] tracking-tighter mb-8">
          ELITE ATHLETICS <br/>
          <span className="text-primary">ACADEMIC RIGOR</span>
        </h1>
        <div className="h-1 w-32 bg-primary"></div>
      </div>

      <div className="absolute bottom-0 right-0 p-12 hidden md:block">
        <p className="text-white/40 font-display text-9xl leading-none italic opacity-10">CURRICULUM</p>
      </div>
    </section>
  );
};
