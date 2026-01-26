
import React from 'react';

export const CTAPattern: React.FC = () => {
  return (
    <section className="wp-block-cover relative py-32 bg-navy-950 flex items-center justify-center text-center px-6">
      <div className="absolute inset-0 opacity-10 grayscale pointer-events-none">
         <img src="https://images.unsplash.com/photo-1504450758481-7338eba7524a?auto=format&fit=crop&q=80&w=1600" className="w-full h-full object-cover" alt="Background" />
      </div>
      
      <div className="relative z-10 max-w-4xl">
        <h2 className="font-display text-6xl md:text-[120px] text-white tracking-tighter italic leading-[0.9] mb-8">
          OWN YOUR <span className="text-primary underline decoration-primary/30 underline-offset-8">MOMENT</span>
        </h2>
        <p className="text-xl md:text-2xl text-slate-400 font-light italic mb-12 max-w-2xl mx-auto">
          Limited roster spots available for the upcoming season. Don't let your potential go unnoticed.
        </p>
        <div className="flex flex-col sm:flex-row items-center justify-center gap-6">
          <button className="bg-white text-navy-900 px-16 py-6 font-bold tracking-[0.3em] uppercase text-xs hover:bg-primary transition-all shadow-2xl w-full sm:w-auto">
            Book Evaluation
          </button>
          <button className="border border-white/10 text-white px-16 py-6 font-bold tracking-[0.3em] uppercase text-xs hover:bg-white/5 transition-all w-full sm:w-auto">
            Download PDF
          </button>
        </div>
      </div>
    </section>
  );
};
