
import React from 'react';

const newsItems = [
  {
    title: "Class of 2025: Early Commitments Reach Record High",
    cat: "Recruitment",
    date: "OCT 12, 2024",
    img: "https://images.unsplash.com/photo-1544606497-605805562d04?auto=format&fit=crop&q=80&w=600",
    excerpt: "Six players from our elite program have signed D1 scholarships during the early recruitment window..."
  },
  {
    title: "New Hydrotherapy Wing Opens in Performance Center",
    cat: "Campus",
    date: "OCT 10, 2024",
    img: "https://images.unsplash.com/photo-1540497077202-7c8a3999166f?auto=format&fit=crop&q=80&w=600",
    excerpt: "The latest addition to our training complex features cold-plunge tanks and advanced recovery systems."
  },
  {
    title: "Academic Spotlight: SAT Prep Results for Q3",
    cat: "Academics",
    date: "OCT 05, 2024",
    img: "https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=600",
    excerpt: "Our student-athletes continue to outperform national averages with a 15% increase in core test scores."
  },
  {
    title: "Coastal Prep to Host National Scouting Showcase",
    cat: "Events",
    date: "SEP 28, 2024",
    img: "https://images.unsplash.com/photo-1519315901367-f34ff9154487?auto=format&fit=crop&q=80&w=600",
    excerpt: "Over 40 college recruiters from across the country will converge on our campus for the three-day event."
  }
];

export const NewsArchivePattern: React.FC = () => {
  return (
    <section className="py-24">
      <div className="max-w-[1200px] mx-auto px-6">
        <div className="grid md:grid-cols-2 gap-12">
          {newsItems.map((item, i) => (
            <article key={i} className="wp-block-post group bg-white border border-slate-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500">
              <div className="relative h-72 overflow-hidden grayscale group-hover:grayscale-0 transition-all duration-700">
                <img src={item.img} className="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000" alt={item.title} />
                <div className="absolute top-6 left-6 bg-primary text-navy-900 px-3 py-1 font-bold text-[9px] uppercase tracking-widest">
                  {item.cat}
                </div>
              </div>
              <div className="p-10">
                <time className="text-slate-400 font-bold tracking-widest text-[10px] mb-4 block">{item.date}</time>
                <h3 className="font-display text-4xl text-navy-900 mb-6 italic group-hover:text-primary transition-colors cursor-pointer leading-none">
                  {item.title}
                </h3>
                <p className="text-slate-500 text-sm font-light leading-relaxed mb-8 italic">{item.excerpt}</p>
                <button className="flex items-center space-x-3 group/btn">
                  <span className="text-navy-900 font-bold text-[10px] uppercase tracking-[0.2em] group-hover/btn:tracking-[0.4em] transition-all">Read Story</span>
                  <span className="w-8 h-[1px] bg-primary"></span>
                </button>
              </div>
            </article>
          ))}
        </div>
        
        <div className="mt-20 flex justify-center">
          <button className="px-12 py-4 border-2 border-navy-900/10 text-navy-900 font-bold uppercase tracking-widest text-[10px] hover:border-primary transition-all">
            Load More Posts
          </button>
        </div>
      </div>
    </section>
  );
};
