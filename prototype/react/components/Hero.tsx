
import React from 'react';

export const Hero: React.FC = () => {
  return (
    <section className="relative min-h-[95vh] flex items-center justify-center overflow-hidden">
      <div className="absolute inset-0">
        <img 
          alt="Basketball player in arena" 
          className="w-full h-full object-cover" 
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJBKN5IiD7Ml_GlDHiZpKtNZMJ-K4stc7MVQbYGQG5k9JXpnR5lMesUWsN41_emUb509O7c9iLB-P-rmcpBxgFze08Gq7shK0bnwDFHRSBzSboVOQ1TYoasNAXi5pb-aFw2YEA7giIJUVBsMflAvb3k0q_JaAEdxZQOxkZlzDcCNScfkxLUAzVSEy14FlByn8jJJ9gKMdJQTjTOIZdnUX8i4j6MTKN3bsctrij5OLtWGwn9weRkwSTPi42GT_FtvJHdcsgFQy7mf0"
        />
        <div className="absolute inset-0 bg-gradient-to-b from-navy-900/60 via-navy-900/70 to-navy-900/90"></div>
      </div>
      
      <div className="relative z-10 text-center px-6 max-w-6xl mx-auto mt-20">
        <div className="mb-8 flex flex-col items-center">
          <span className="text-primary font-heading font-bold tracking-[0.4em] text-sm md:text-xl mb-3 drop-shadow-md">EST. 2024</span>
          <div className="h-1.5 w-16 bg-primary shadow-lg"></div>
        </div>

        <h1 className="font-display text-6xl md:text-[140px] leading-tight md:leading-[0.85] text-white tracking-tighter mb-8 italic drop-shadow-2xl">
          FLORIDA COASTAL PREP
        </h1>
        
        <p className="max-w-3xl mx-auto text-lg md:text-2xl text-slate-300 font-light leading-relaxed italic mb-12 drop-shadow-lg">
          Forging the next generation of elite athletes and academic leaders through discipline, dedication, and excellence.
        </p>
        
        <div className="flex flex-col sm:flex-row items-center justify-center gap-6">
          <button className="w-full sm:w-auto bg-primary text-navy-900 px-12 py-5 font-bold tracking-widest uppercase text-sm hover:bg-yellow-500 transition-all transform hover:scale-105 shadow-[0_10px_40px_-10px_rgba(251,191,36,0.5)]">
            Join The Team
          </button>
          <button className="w-full sm:w-auto border-2 border-white/40 text-white px-12 py-5 font-bold tracking-widest uppercase text-sm hover:bg-white/10 hover:border-white transition-all backdrop-blur-md">
            View Schedule
          </button>
        </div>
      </div>

      <div className="absolute bottom-16 left-1/2 -translate-x-1/2 flex flex-col items-center text-white/40 animate-bounce">
        <span className="text-[10px] tracking-[0.5em] uppercase mb-4">Scroll</span>
        <div className="w-[1px] h-12 bg-gradient-to-b from-primary to-transparent"></div>
      </div>
    </section>
  );
};
