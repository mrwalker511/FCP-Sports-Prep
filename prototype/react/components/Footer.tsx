
import React from 'react';

export const Footer: React.FC = () => {
  return (
    <footer className="bg-navy-900 border-t border-white/5 pt-20 pb-10">
      <div className="max-w-7xl mx-auto px-6 lg:px-12">
        <div className="grid md:grid-cols-4 gap-12 mb-20">
          {/* Brand Info */}
          <div className="col-span-1 md:col-span-2">
            <span className="font-display text-4xl tracking-tighter text-white mb-8 block">
              FLORIDA COASTAL <span className="text-primary italic">PREP</span>
            </span>
            <p className="text-slate-400 max-w-sm italic mb-10 leading-relaxed text-lg font-light">
              The premier basketball preparation academy in Florida, dedicated to transforming high-potential athletes into college-ready leaders.
            </p>
            <div className="flex space-x-5">
              {['facebook', 'camera_alt', 'play_arrow'].map((icon) => (
                <a
                  key={icon}
                  href="#"
                  className="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-primary hover:text-navy-900 transition-all transform hover:scale-110"
                >
                  <span className="material-icons text-base">{icon}</span>
                </a>
              ))}
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="font-bold text-white uppercase tracking-[0.2em] text-[10px] mb-8 border-b border-white/10 pb-2">Quick Links</h4>
            <ul className="space-y-4 text-sm font-medium tracking-wide">
              {['Apply Today', 'Team Schedule', 'Campus Map', 'Staff Directory'].map(item => (
                <li key={item}>
                  <a href="#" className="text-slate-400 hover:text-primary transition-colors flex items-center group">
                    <span className="w-0 group-hover:w-4 overflow-hidden transition-all duration-300 h-[1px] bg-primary mr-0 group-hover:mr-2"></span>
                    {item}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Contact Details */}
          <div>
            <h4 className="font-bold text-white uppercase tracking-[0.2em] text-[10px] mb-8 border-b border-white/10 pb-2">Contact Us</h4>
            <ul className="space-y-5 text-sm font-medium">
              <li className="flex items-start space-x-3 text-slate-400">
                <span className="material-icons text-primary text-xl">place</span>
                <span className="leading-tight">Coastal Drive, Suite 100<br />Clearwater, FL 33755, USA</span>
              </li>
              <li className="flex items-center space-x-3 text-slate-400">
                <span className="material-icons text-primary text-xl">email</span>
                <a href="mailto:admissions@flcoastalprep.com" className="hover:text-white transition-colors">admissions@flcoastalprep.com</a>
              </li>
              <li className="flex items-center space-x-3 text-slate-400">
                <span className="material-icons text-primary text-xl">phone</span>
                <a href="tel:+15551234567" className="hover:text-white transition-colors">+1 (555) 123-4567</a>
              </li>
            </ul>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center text-[10px] uppercase tracking-[0.3em] text-slate-600 font-bold">
          <p className="mb-4 md:mb-0">© {new Date().getFullYear()} FLORIDA COASTAL PREPARATORY ACADEMY. ALL RIGHTS RESERVED.</p>
          <div className="flex space-x-8">
            <a href="#" className="hover:text-white transition-colors">Privacy Policy</a>
            <a href="#" className="hover:text-white transition-colors">Terms of Service</a>
          </div>
        </div>
      </div>
    </footer>
  );
};
