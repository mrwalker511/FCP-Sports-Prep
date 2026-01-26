
import React from 'react';

interface FooterProps {
  setPage: (page: any) => void;
}

export const Footer: React.FC<FooterProps> = ({ setPage }) => {
  return (
    <footer className="wp-block-template-part bg-navy-950 border-t border-white/5 pt-24 pb-12">
      <div className="max-w-[1200px] mx-auto px-6">
        <div className="grid md:grid-cols-4 gap-16 mb-24">
          <div className="md:col-span-2">
            <button 
              onClick={() => setPage('home')}
              className="font-display text-4xl text-white block mb-8 italic text-left"
            >
              FLORIDA <span className="text-primary underline decoration-primary/20">COASTAL</span> PREP
            </button>
            <p className="text-slate-400 text-lg font-light leading-relaxed italic max-w-sm">
              The southeast region's most exclusive training environment for elite collegiate prospects.
            </p>
          </div>
          
          <div>
            <h4 className="text-white font-bold tracking-[0.3em] uppercase text-[10px] mb-8 opacity-50">Sitemap</h4>
            <ul className="space-y-4">
              <li><button onClick={() => setPage('apply')} className="text-slate-300 text-xs font-bold uppercase tracking-widest hover:text-primary transition-colors">Admissions</button></li>
              <li><button onClick={() => setPage('programs')} className="text-slate-300 text-xs font-bold uppercase tracking-widest hover:text-primary transition-colors">Curriculum</button></li>
              <li><button onClick={() => setPage('campus')} className="text-slate-300 text-xs font-bold uppercase tracking-widest hover:text-primary transition-colors">Housing</button></li>
              <li><button onClick={() => setPage('contact')} className="text-slate-300 text-xs font-bold uppercase tracking-widest hover:text-primary transition-colors">Contact</button></li>
            </ul>
          </div>

          <div>
            <h4 className="text-white font-bold tracking-[0.3em] uppercase text-[10px] mb-8 opacity-50">Headquarters</h4>
            <address className="not-italic text-slate-400 text-sm leading-loose">
              100 Coastal Elite Dr.<br/>
              Miami, FL 33101<br/>
              <a href="mailto:info@flcprep.com" className="text-primary hover:text-white transition-colors" rel="noopener noreferrer">info@flcprep.com</a>
            </address>
          </div>
        </div>

        <div className="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center text-[9px] font-bold tracking-[0.5em] text-slate-600 uppercase">
          <p>© 2024 FLORIDA COASTAL PREPARATORY. BUILT FOR ELITE ATHLETES.</p>
          <div className="flex space-x-8 mt-4 md:mt-0">
            <button onClick={() => setPage('terms')} className="hover:text-white transition-colors">Terms</button>
            <button onClick={() => setPage('privacy')} className="hover:text-white transition-colors">Privacy</button>
          </div>
        </div>
      </div>
    </footer>
  );
};
