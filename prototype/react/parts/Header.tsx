
import React, { useState } from 'react';
import type { PageType } from '../App';

interface HeaderProps {
  scrolled: boolean;
  currentPage: PageType;
  setPage: (page: PageType) => void;
}

export const Header: React.FC<HeaderProps> = ({ scrolled, currentPage, setPage }) => {
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

  const navItems = [
    { label: 'Home', slug: 'home' },
    { label: 'Programs', slug: 'programs' },
    { label: 'Faculty', slug: 'faculty' },
    { label: 'Campus', slug: 'campus' },
    { label: 'Donors', slug: 'donors' },
    { label: 'News', slug: 'news' },
    { label: 'Schedule', slug: 'schedule' }
  ];

  const handleNav = (slug: string) => {
    setPage(slug);
    setMobileMenuOpen(false);
  };

  return (
    <header
      className={`wp-block-template-part fixed top-0 w-full z-50 transition-all duration-500 ${scrolled ? 'bg-navy-950/95 py-4 shadow-2xl backdrop-blur-md border-b border-white/5' : 'bg-transparent py-8'
        }`}
    >
      <div className="max-w-[1400px] mx-auto px-6 flex justify-between items-center">
        <div className="wp-block-site-logo flex items-center">
          <button
            onClick={() => handleNav('home')}
            className="font-display text-2xl md:text-3xl tracking-tighter text-white uppercase group flex items-center text-left"
          >
            FLORIDA <span className="text-primary italic ml-1 transition-all group-hover:tracking-widest">COASTAL</span>
          </button>
        </div>

        {/* Desktop Navigation */}
        <nav className="wp-block-navigation hidden lg:block">
          <ul className="flex space-x-6 xl:space-x-8">
            {navItems.map((item) => (
              <li key={item.slug}>
                <button
                  onClick={() => handleNav(item.slug)}
                  className={`text-[9px] xl:text-[10px] font-bold tracking-[0.2em] xl:tracking-[0.25em] uppercase transition-all relative ${currentPage === item.slug ? 'text-primary' : 'text-white/80 hover:text-primary'
                    }`}
                >
                  {item.label}
                  {currentPage === item.slug && (
                    <span className="absolute -bottom-2 left-0 w-full h-[2px] bg-primary"></span>
                  )}
                </button>
              </li>
            ))}
          </ul>
        </nav>

        <div className="flex items-center space-x-4">
          <div className="wp-block-buttons hidden sm:block">
            <button
              onClick={() => handleNav('apply')}
              className="bg-primary text-navy-900 px-8 py-3 font-bold tracking-widest uppercase text-[10px] hover:bg-white transition-all transform hover:-translate-y-0.5 shadow-lg"
            >
              Apply Now
            </button>
          </div>

          {/* Mobile Menu Toggle */}
          <button
            onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
            className="lg:hidden text-white w-10 h-10 flex items-center justify-center border border-white/10 rounded-sm bg-white/5"
            aria-label="Toggle Menu"
          >
            <span className="material-icons">{mobileMenuOpen ? 'close' : 'menu'}</span>
          </button>
        </div>
      </div>

      {/* Mobile Menu Overlay */}
      {mobileMenuOpen && (
        <div className="fixed inset-0 top-[72px] bg-navy-950 z-40 animate-in fade-in slide-in-from-top-4 duration-300">
          <div className="p-8 space-y-6">
            {navItems.map((item) => (
              <button
                key={item.slug}
                onClick={() => handleNav(item.slug)}
                className={`block w-full text-left font-display text-4xl italic uppercase tracking-tighter ${currentPage === item.slug ? 'text-primary' : 'text-white'
                  }`}
              >
                {item.label}
              </button>
            ))}
            <div className="pt-8 border-t border-white/10">
              <button
                onClick={() => handleNav('apply')}
                className="w-full bg-primary text-navy-900 py-5 font-bold uppercase tracking-widest text-xs"
              >
                Start Application
              </button>
            </div>
          </div>
        </div>
      )}
    </header>
  );
};
