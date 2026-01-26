
import React, { useState } from 'react';

export const ContactPattern: React.FC = () => {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    subject: 'Recruitment Inquiry',
    message: ''
  });

  const sanitizeInput = (val: string) => val.replace(/<[^>]*>?/gm, '').trim();

  const handleInputChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement>) => {
    const { name, value } = e.target;
    setFormData(prev => ({ ...prev, [name]: sanitizeInput(value) }));
  };

  const handleSend = (e: React.FormEvent) => {
    e.preventDefault();
    alert('Message received securely. (Simulated Inquiry)');
  };

  return (
    <section className="py-24 bg-white">
      <div className="max-w-[1200px] mx-auto px-6">
        <div className="grid lg:grid-cols-2 gap-20">
          <div className="space-y-12">
            <div>
              <h3 className="font-display text-4xl text-navy-900 italic uppercase mb-6">Direct Inquiry</h3>
              <form className="space-y-6" onSubmit={handleSend}>
                <div className="grid md:grid-cols-2 gap-6">
                  <input 
                    name="name"
                    required
                    onChange={handleInputChange}
                    type="text" 
                    placeholder="Full Name" 
                    className="w-full border-b-2 border-slate-100 p-4 focus:border-primary outline-none italic font-light" 
                  />
                  <input 
                    name="email"
                    required
                    onChange={handleInputChange}
                    type="email" 
                    placeholder="Email Address" 
                    className="w-full border-b-2 border-slate-100 p-4 focus:border-primary outline-none italic font-light" 
                  />
                </div>
                <select 
                  name="subject"
                  onChange={handleInputChange}
                  className="w-full border-b-2 border-slate-100 p-4 focus:border-primary outline-none italic font-light appearance-none bg-transparent"
                >
                  <option>Recruitment Inquiry</option>
                  <option>Press & Media</option>
                  <option>Sponsorships</option>
                  <option>General Support</option>
                </select>
                <textarea 
                  name="message"
                  required
                  onChange={handleInputChange}
                  rows={5} 
                  placeholder="Your Message" 
                  className="w-full border-b-2 border-slate-100 p-4 focus:border-primary outline-none italic font-light"
                ></textarea>
                <button className="w-full py-5 bg-navy-900 text-white font-bold uppercase tracking-widest text-xs hover:bg-primary hover:text-navy-900 transition-all shadow-xl">
                  Send Inquiry
                </button>
              </form>
            </div>

            <div className="grid md:grid-cols-2 gap-8">
              <div className="p-8 bg-slate-50 border-l-4 border-primary">
                <span className="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 block">Scouting Line</span>
                <p className="font-display text-2xl text-navy-900">+1 (555) 009-8877</p>
              </div>
              <div className="p-8 bg-slate-50 border-l-4 border-primary">
                <span className="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 block">Office Hours</span>
                <p className="font-display text-2xl text-navy-900">08:00 - 18:00 EST</p>
              </div>
            </div>
          </div>

          <div className="relative">
             <div className="sticky top-40 space-y-8">
                <div className="aspect-square bg-navy-900 overflow-hidden shadow-2xl grayscale hover:grayscale-0 transition-all duration-700 group">
                   <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?auto=format&fit=crop&q=80&w=1200" className="w-full h-full object-cover opacity-50 group-hover:scale-105 transition-transform duration-1000" alt="Map Placeholder" />
                   <div className="absolute inset-0 flex items-center justify-center">
                      <div className="text-center">
                         <span className="material-icons text-primary text-6xl mb-4">place</span>
                         <p className="text-white font-bold uppercase tracking-[0.4em] text-xs">Coastal Arena Complex</p>
                      </div>
                   </div>
                </div>
                <p className="text-slate-500 italic text-center text-sm">
                   Located in the heart of Florida's premier sports corridor, <br/>
                   just 15 minutes from Miami International Airport.
                </p>
             </div>
          </div>
        </div>
      </div>
    </section>
  );
};
