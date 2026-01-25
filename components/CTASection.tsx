
import React from 'react';

export const CTASection: React.FC = () => {
  return (
    <section className="py-32 relative overflow-hidden bg-navy-950">
      <div className="absolute inset-0 opacity-20 pointer-events-none">
        <img 
          alt="Basketball net background" 
          className="w-full h-full object-cover grayscale scale-110 transform -rotate-1" 
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnbM1WLZe3qCkg6glmMdurV34qsQcE0xOMnTnRBvtVbDxixuYX5dKN_3BYnecu9plW1YD9kysPp8ki3zqezYdzzSX-PKt9KPKYt6sbpJqQXyixPvWKwh4KT0YvAZlW0cfeVyryaPI5uqiCgjVC1HIZcir_fPskeCT2pI382dHIW6kZU5r4XIP_44HUiokf0ViHj98dFfnXMEMiI2bH9lu-knYbNnAQ66-vMLWPmFFs9O1Trb2iLiKDjz5wxAmYuabr0N2LASFQM58"
        />
        <div className="absolute inset-0 bg-gradient-to-r from-navy-950 via-transparent to-navy-950"></div>
      </div>

      <div className="max-w-4xl mx-auto px-6 text-center relative z-10">
        <h2 className="font-display text-7xl md:text-8xl text-white italic mb-6 leading-none drop-shadow-xl">
          READY TO LEVEL UP?
        </h2>
        <p className="text-xl md:text-2xl text-slate-400 mb-12 italic font-light tracking-wide">
          Join our 2024-2025 roster and start your journey towards professional excellence.
        </p>
        
        <div className="flex flex-col sm:flex-row items-center justify-center gap-6">
          <button className="px-14 py-6 bg-white text-navy-900 font-bold uppercase tracking-widest hover:bg-primary transition-all transform hover:-translate-y-1 w-full sm:w-auto shadow-2xl">
            Contact Recruiter
          </button>
          <button className="px-14 py-6 border-2 border-white/20 text-white font-bold uppercase tracking-widest hover:bg-white/10 hover:border-white transition-all w-full sm:w-auto">
            Download Prospectus
          </button>
        </div>
      </div>
    </section>
  );
};
