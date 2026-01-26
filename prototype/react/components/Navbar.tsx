
import React, { useState } from 'react';

interface NavbarProps {
  scrolled: boolean;
}

export const Navbar: React.FC<NavbarProps> = ({ scrolled }) => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  return (
    <nav 
      className={`fixed w-full z-50 transition-all duration-300 ${
        scrolled ? 'bg-navy-950/95 shadow-2xl backdrop-blur-md py-4' : 'bg-transparent py-6'
      }`}
    >
      <div className="max-w-7xl mx-auto px-6 lg:px-12 flex justify-between items-center">
        <div className="flex items-center">
          <span className="font-display text-2xl tracking-tighter text-white">
            FLORIDA COASTAL <span className="text-primary italic">PREP</span>
          </span>
        </div>

        {/* Desktop Menu */}
        <div className="hidden md:flex items-center space-x-8">
          {['Athletics', 'Academics', 'Student Life', 'Admissions'].map((item) => (
            <a 
              key={item}
              href={`#${item.toLowerCase().replace(' ', '-')}`}
              className="text-xs font-bold tracking-[0.2em] uppercase text-white hover:text-primary transition-colors"
            >
              {item}
            </a>
          ))}
          <a 
            href="#apply" 
            className="bg-primary text-navy-900 px-6 py-2.5 font-bold tracking-widest uppercase text-xs hover:bg-yellow-500 transition-all transform hover:-translate-y-0.5"
          >
            Apply Now
          </a>
        </div>

        {/* Mobile Toggle */}
        <div className="md:hidden">
          <button 
            onClick={() => setIsMenuOpen(!isMenuOpen)}
            className="text-white p-2"
          >
            <span className="material-icons">{isMenuOpen ? 'close' : 'menu'}</span>
          </button>
        </div>
      </div>

      {/* Mobile Menu */}
      {isMenuOpen && (
        <div className="md:hidden bg-navy-900 absolute top-full left-0 w-full p-6 space-y-4 border-t border-white/10">
          {['Athletics', 'Academics', 'Student Life', 'Admissions'].map((item) => (
            <a 
              key={item}
              href="#" 
              className="block text-sm font-bold tracking-widest uppercase text-white hover:text-primary"
              onClick={() => setIsMenuOpen(false)}
            >
              {item}
            </a>
          ))}
          <a 
            href="#apply" 
            className="block text-center bg-primary text-navy-900 py-3 font-bold uppercase tracking-widest"
            onClick={() => setIsMenuOpen(false)}
          >
            Apply Now
          </a>
        </div>
      )}
    </nav>
  );
};
