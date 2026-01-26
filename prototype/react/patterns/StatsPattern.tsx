
import React from 'react';

export const StatsPattern: React.FC = () => {
  return (
    <div className="wp-block-columns grid grid-cols-1 md:grid-cols-4 bg-primary shadow-[0_20px_50px_rgba(0,0,0,0.3)]">
      {[
        { n: '12', l: 'D1 Commitments', s: 'Last Season' },
        { n: '3.8', l: 'Average GPA', s: 'Academic Excellence' },
        { n: '24/7', l: 'Facility Access', s: 'Maximum Reps' },
        { n: 'Elite', l: 'Coaching Staff', s: 'Pro Experience' }
      ].map((item, i) => (
        <div key={i} className="wp-block-column p-10 border-r border-navy-900/5 last:border-0 flex flex-col items-center justify-center group cursor-default">
          <span className="font-display text-5xl text-navy-900 mb-1 group-hover:scale-110 transition-transform">{item.n}</span>
          <span className="text-[10px] font-bold tracking-widest uppercase text-navy-900/80 mb-2">{item.l}</span>
          <div className="h-0.5 w-0 group-hover:w-8 bg-navy-900/20 transition-all duration-500"></div>
        </div>
      ))}
    </div>
  );
};
