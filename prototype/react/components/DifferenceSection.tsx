
import React from 'react';

export const DifferenceSection: React.FC = () => {
  return (
    <section className="py-24 bg-slate-50">
      <div className="max-w-7xl mx-auto px-6 lg:px-12">
        <div className="text-center mb-16">
          <h2 className="font-display text-5xl md:text-7xl text-navy-900 italic mb-4">
            THE COASTAL DIFFERENCE
          </h2>
          <div className="h-2 w-48 bg-primary mx-auto"></div>
        </div>

        <div className="grid md:grid-cols-2 gap-8">
          {/* Card 1 */}
          <div className="group relative h-[500px] overflow-hidden rounded-xl shadow-2xl cursor-pointer">
            <img 
              alt="Students studying" 
              className="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbPz8Ww9joHo_lX9fdw4ccCbXLzGhYyJU58wjJkzN-uvPjcIt2IqpKAIVkUSKLZCQg6_6Rxh_0jAjlEwC-QGuKtDMj3B4eUQ-Ew2-29FKXSW5cy8v071ccChk8rwlLag0klgRwc599ptOLF5tUDwrA7K_y42CMcQIHHTSSkDChouMuvwYbmiD4Vhsk4tayeXfJQ92iNbWeuS4es4pZxl-6rERfiE_vPnLmFg_paO-4U9xxJJHfaCzu1iAdxGZlBgvKXb6eR20sar0"
            />
            <div className="absolute inset-0 bg-navy-900/70 group-hover:bg-navy-900/60 transition-colors"></div>
            <div className="absolute inset-0 p-12 flex flex-col justify-end">
              <h3 className="font-display text-5xl text-white mb-4 italic tracking-tight">RIGOROUS ACADEMICS</h3>
              <p className="text-slate-200 text-lg leading-relaxed max-w-md opacity-0 translate-y-8 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-out">
                College-prep curriculum designed to challenge and prepare students for university success alongside their athletic journey.
              </p>
              <div className="mt-6 w-12 h-1.5 bg-primary group-hover:w-32 transition-all duration-500"></div>
            </div>
          </div>

          {/* Card 2 */}
          <div className="group relative h-[500px] overflow-hidden rounded-xl shadow-2xl cursor-pointer">
            <img 
              alt="Modern gym facilities" 
              className="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhXG--obJYR9J1TZoyPxiC5Y9IhjT35pStpPm8jNHUP43_EQOIjH2BwLevmMZBflGszXn7xftmF7vGwNNgRaSIuuKcy3A83SQlSgIIkJqu5r61f_vzAQbtOv5badKSSeHRT-dqtfZ7MIqo-eV9NT-oni-XZHal7vqsc3Y5lsL3i6jY0EfngXzgj7aJbsfKAnQaDRhM7c-neetYm35PvsbiWBb-Ymw3lHDOneQM9drvoilYt_lNG7rt2qD_To_ZOFgfyBpu60dJRdk"
            />
            <div className="absolute inset-0 bg-navy-900/70 group-hover:bg-navy-900/60 transition-colors"></div>
            <div className="absolute inset-0 p-12 flex flex-col justify-end">
              <h3 className="font-display text-5xl text-white mb-4 italic tracking-tight">MODERN CAMPUS</h3>
              <p className="text-slate-200 text-lg leading-relaxed max-w-md opacity-0 translate-y-8 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-out">
                State-of-the-art facilities located in the heart of Florida's coast, providing the ultimate environment for growth and recovery.
              </p>
              <div className="mt-6 w-12 h-1.5 bg-primary group-hover:w-32 transition-all duration-500"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};
