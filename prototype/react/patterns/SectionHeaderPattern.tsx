
import React from 'react';

interface SectionHeaderProps {
  tag: string;
  title: string;
  desc?: string;
  light?: boolean;
}

export const SectionHeaderPattern: React.FC<SectionHeaderProps> = ({ tag, title, desc, light }) => {
  return (
    <div className={`wp-block-group ${light ? 'text-white' : 'text-navy-900'}`}>
      <span className="text-primary font-bold tracking-[0.4em] uppercase text-[10px] mb-4 block">
        {tag}
      </span>
      <h2 className="font-display text-5xl md:text-7xl leading-none italic uppercase mb-6 tracking-tighter">
        {title}
      </h2>
      {desc && (
        <p className={`max-w-2xl text-lg font-light italic leading-relaxed ${light ? 'text-slate-400' : 'text-slate-500'}`}>
          {desc}
        </p>
      )}
      <div className="h-1 w-24 bg-primary mt-8"></div>
    </div>
  );
};
