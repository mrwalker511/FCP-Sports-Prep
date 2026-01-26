
import React from 'react';

const stats = [
  { label: 'College Placement', value: '100%' },
  { label: 'Elite Training', value: 'D1+' },
  { label: 'Campus Access', value: '24/7' },
  { label: 'Avg GPA Target', value: '3.5+' },
];

export const StatsBar: React.FC = () => {
  return (
    <div className="bg-primary shadow-2xl overflow-hidden rounded-sm">
      <div className="grid grid-cols-2 md:grid-cols-4 divide-x divide-navy-900/10">
        {stats.map((stat, idx) => (
          <div key={idx} className="p-8 text-center flex flex-col items-center justify-center space-y-1">
            <span className="font-display text-4xl md:text-5xl text-navy-900">{stat.value}</span>
            <span className="text-[10px] font-bold tracking-[0.2em] uppercase text-navy-900/80">{stat.label}</span>
          </div>
        ))}
      </div>
    </div>
  );
};
