
import React from 'react';
import type { PageType } from '../App';

interface LegalProps {
  title: string;
  setPage: (page: PageType) => void;
}

export const LegalPattern: React.FC<LegalProps> = ({ title, setPage }) => {
  return (
    <section className="bg-white min-h-screen">
      <div className="pt-40 pb-20 bg-slate-50 border-b border-slate-100">
        <div className="max-w-[800px] mx-auto px-6">
          <span className="text-primary font-bold tracking-[0.4em] uppercase text-[10px] mb-4 block">Academy Governance</span>
          <h1 className="font-display text-7xl text-navy-900 italic uppercase leading-none">{title}</h1>
          <div className="h-1 w-24 bg-primary mt-8"></div>
        </div>
      </div>

      <div className="py-24 max-w-[800px] mx-auto px-6">
        <div className="prose prose-slate prose-lg italic font-light text-slate-600 space-y-12">
          <div>
            <h3 className="text-navy-900 font-display text-3xl uppercase not-italic mb-6">1. Acceptance of Terms</h3>
            <p>Florida Coastal Preparatory Academy ("Academy", "we", "us", or "our") provides services to you subject to the following Terms of Service. By accessing our campus or website, you agree to abide by these elite standards of conduct.</p>
          </div>

          <div>
            <h3 className="text-navy-900 font-display text-3xl uppercase not-italic mb-6">2. Privacy & Data</h3>
            <p>We respect the privacy of our athletes and donors. All biometric data collected during training sessions is stored in high-security environments and used exclusively for player development analysis.</p>
          </div>

          <div>
            <h3 className="text-navy-900 font-display text-3xl uppercase not-italic mb-6">3. Code of Excellence</h3>
            <p>Participation in Academy programs requires strict adherence to our character guidelines. We reserve the right to terminate any student-athlete relationship that does not meet our high standards of integrity and academic commitment.</p>
          </div>

          <div className="p-8 bg-slate-50 italic text-sm border-l-4 border-navy-900">
            Last Updated: October 2024. For further inquiries, contact our legal department at <span className="text-primary font-bold">legal@flcprep.com</span>.
          </div>
        </div>

        <div className="mt-20 pt-12 border-t border-slate-100 flex justify-between items-center">
          <button onClick={() => setPage('home')} className="text-navy-900 font-bold uppercase tracking-widest text-[10px] hover:text-primary transition-colors flex items-center space-x-2">
            <span className="material-icons text-sm">arrow_back</span>
            <span>Back to Home</span>
          </button>
          <button onClick={() => window.print()} className="px-8 py-3 bg-navy-900 text-white font-bold uppercase tracking-widest text-[10px] hover:bg-primary hover:text-navy-900 transition-all">
            Print Document
          </button>
        </div>
      </div>
    </section>
  );
};
