
import React, { useState } from 'react';

const upcoming = [
  { opponent: "Georgia Elite Academy", venue: "Home (Coastal Arena)", date: "OCT 25", time: "7:00 PM EST", type: "Conference" },
  { opponent: "Orlando Prep Stars", venue: "Away (Orlando, FL)", date: "OCT 29", time: "6:30 PM EST", type: "Showcase" },
  { opponent: "Miami Heatwave Prep", venue: "Home (Coastal Arena)", date: "NOV 02", time: "8:00 PM EST", type: "Conference" },
  { opponent: "National All-Stars", venue: "Away (Dallas, TX)", date: "NOV 10", time: "1:00 PM CST", type: "Invitational" }
];

const results = [
  { opponent: "Tampa Tech Prep", score: "88 - 74", result: "W", date: "OCT 12", highlight: "Reeds 24pts" },
  { opponent: "Coastal Coast Academy", score: "92 - 90", result: "W", date: "OCT 08", highlight: "OT Winner" },
  { opponent: "Sunrise Academy", score: "81 - 85", result: "L", date: "OCT 04", highlight: "Close Finish" },
  { opponent: "Palm Beach Elite", score: "104 - 66", result: "W", date: "SEP 30", highlight: "Season High" }
];

export const SchedulePattern: React.FC = () => {
  const [tab, setTab] = useState<'upcoming' | 'results'>('upcoming');

  return (
    <section className="py-24">
      <div className="max-w-[1000px] mx-auto px-6">
        <div className="flex justify-center mb-16 space-x-4">
          <button 
            onClick={() => setTab('upcoming')}
            className={`px-10 py-4 font-bold uppercase tracking-widest text-[10px] transition-all ${
              tab === 'upcoming' ? 'bg-navy-900 text-white shadow-xl' : 'bg-slate-100 text-slate-400 hover:bg-slate-200'
            }`}
          >
            Upcoming Games
          </button>
          <button 
            onClick={() => setTab('results')}
            className={`px-10 py-4 font-bold uppercase tracking-widest text-[10px] transition-all ${
              tab === 'results' ? 'bg-navy-900 text-white shadow-xl' : 'bg-slate-100 text-slate-400 hover:bg-slate-200'
            }`}
          >
            Past Results
          </button>
        </div>

        <div className="space-y-4">
          {tab === 'upcoming' ? (
            upcoming.map((g, i) => (
              <div key={i} className="flex flex-col md:flex-row items-center justify-between p-8 bg-white border border-slate-100 shadow-sm hover:shadow-lg transition-all group">
                <div className="flex items-center space-x-12 mb-6 md:mb-0">
                  <div className="text-center w-24">
                    <span className="text-slate-400 font-bold text-[10px] uppercase block mb-1">Date</span>
                    <span className="font-display text-4xl text-navy-900 italic leading-none">{g.date}</span>
                  </div>
                  <div>
                    <span className="text-primary font-bold text-[9px] uppercase tracking-widest mb-1 block">{g.type}</span>
                    <h4 className="font-display text-3xl text-navy-900 uppercase italic">vs {g.opponent}</h4>
                    <p className="text-slate-400 text-xs italic">{g.venue}</p>
                  </div>
                </div>
                <div className="text-right">
                   <div className="mb-4 text-navy-900 font-bold text-lg tracking-tighter">{g.time}</div>
                   <button className="px-6 py-2 border border-navy-900/10 text-navy-900 text-[9px] font-bold uppercase tracking-widest hover:bg-primary hover:border-primary transition-all">Buy Tickets</button>
                </div>
              </div>
            ))
          ) : (
             results.map((g, i) => (
              <div key={i} className="flex flex-col md:flex-row items-center justify-between p-8 bg-slate-50 border border-slate-200 group">
                <div className="flex items-center space-x-12 mb-6 md:mb-0">
                  <div className={`w-12 h-12 flex items-center justify-center font-display text-2xl italic border-2 ${g.result === 'W' ? 'border-primary text-navy-900 bg-primary' : 'border-slate-300 text-slate-400'}`}>
                    {g.result}
                  </div>
                  <div>
                    <span className="text-slate-400 font-bold text-[9px] uppercase tracking-widest mb-1 block">{g.date}</span>
                    <h4 className="font-display text-3xl text-navy-900 uppercase italic">vs {g.opponent}</h4>
                    <p className="text-slate-400 text-xs italic">{g.highlight}</p>
                  </div>
                </div>
                <div className="text-center md:text-right">
                   <div className="font-display text-5xl text-navy-900 italic tracking-tighter">{g.score}</div>
                   <span className="text-[9px] font-bold uppercase tracking-[0.3em] text-slate-400">Final Score</span>
                </div>
              </div>
            ))
          )}
        </div>
      </div>
    </section>
  );
};
