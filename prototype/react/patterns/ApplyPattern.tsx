
import React, { useState } from 'react';

export const ApplyPattern: React.FC = () => {
  const [step, setStep] = useState(1);
  const [formData, setFormData] = useState({
    firstName: '',
    lastName: '',
    email: '',
    location: '',
    position: 'Point Guard (PG)',
    height: '',
    videoLink: '',
    team: '',
    gpa: '',
    statement: ''
  });

  const sanitizeInput = (input: string) => {
    // Basic sanitization: strip HTML tags and trim whitespace
    return input.replace(/<[^>]*>?/gm, '').trim();
  };

  const handleInputChange = (field: string, value: string) => {
    setFormData(prev => ({
      ...prev,
      [field]: sanitizeInput(value)
    }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    console.debug('Application Data (Sanitized):', formData);
    alert('Thank you for your application! (Simulated Secure Submission)');
  };

  return (
    <section className="py-24 bg-white">
      <div className="max-w-[800px] mx-auto px-6">
        {/* Progress Bar */}
        <div className="mb-16">
          <div className="flex justify-between items-end mb-4">
            <span className="text-[10px] font-bold text-navy-900 uppercase tracking-[0.3em]">Step {step} of 3</span>
            <span className="text-[10px] font-bold text-primary uppercase tracking-[0.3em]">
              {step === 1 ? 'Personal Profile' : step === 2 ? 'Athletic Stats' : 'Academic Verification'}
            </span>
          </div>
          <div className="h-1 w-full bg-slate-100 relative">
            <div
              className="absolute top-0 left-0 h-full bg-primary transition-all duration-500"
              style={{ width: `${(step / 3) * 100}%` }}
            ></div>
          </div>
        </div>

        <form className="space-y-12" onSubmit={handleSubmit}>
          {step === 1 && (
            <div className="animate-in fade-in slide-in-from-left-4 duration-500 space-y-8">
              <div className="grid md:grid-cols-2 gap-8">
                <div className="space-y-2">
                  <label className="text-[10px] font-bold uppercase tracking-widest text-slate-400">First Name</label>
                  <input
                    type="text"
                    required
                    onChange={(e) => handleInputChange('firstName', e.target.value)}
                    className="w-full border-b-2 border-slate-200 focus:border-primary outline-none py-3 text-lg font-light italic"
                    placeholder="e.g. Marcus"
                  />
                </div>
                <div className="space-y-2">
                  <label className="text-[10px] font-bold uppercase tracking-widest text-slate-400">Last Name</label>
                  <input
                    type="text"
                    required
                    onChange={(e) => handleInputChange('lastName', e.target.value)}
                    className="w-full border-b-2 border-slate-200 focus:border-primary outline-none py-3 text-lg font-light italic"
                    placeholder="e.g. Jordan"
                  />
                </div>
              </div>
              <div className="space-y-2">
                <label className="text-[10px] font-bold uppercase tracking-widest text-slate-400">Email Address</label>
                <input
                  type="email"
                  required
                  onChange={(e) => handleInputChange('email', e.target.value)}
                  className="w-full border-b-2 border-slate-200 focus:border-primary outline-none py-3 text-lg font-light italic"
                  placeholder="name@example.com"
                />
              </div>
              <div className="space-y-2">
                <label className="text-[10px] font-bold uppercase tracking-widest text-slate-400">Home City / Country</label>
                <input
                  type="text"
                  onChange={(e) => handleInputChange('location', e.target.value)}
                  className="w-full border-b-2 border-slate-200 focus:border-primary outline-none py-3 text-lg font-light italic"
                  placeholder="Miami, FL"
                />
              </div>
            </div>
          )}

          {step === 2 && (
            <div className="animate-in fade-in slide-in-from-left-4 duration-500 space-y-8">
              <div className="grid md:grid-cols-2 gap-8">
                <div className="space-y-2">
                  <label className="text-[10px] font-bold uppercase tracking-widest text-slate-400">Primary Position</label>
                  <select
                    onChange={(e) => handleInputChange('position', e.target.value)}
                    className="w-full border-b-2 border-slate-200 focus:border-primary outline-none py-3 text-lg font-light italic appearance-none bg-transparent"
                  >
                    <option>Point Guard (PG)</option>
                    <option>Shooting Guard (SG)</option>
                    <option>Small Forward (SF)</option>
                    <option>Power Forward (PF)</option>
                    <option>Center (C)</option>
                  </select>
                </div>
                <div className="space-y-2">
                  <label className="text-[10px] font-bold uppercase tracking-widest text-slate-400">Current Height</label>
                  <input
                    type="text"
                    onChange={(e) => handleInputChange('height', e.target.value)}
                    className="w-full border-b-2 border-slate-200 focus:border-primary outline-none py-3 text-lg font-light italic"
                    placeholder={"6' 5\""}
                  />
                </div>
              </div>
              <div className="space-y-2">
                <label className="text-[10px] font-bold uppercase tracking-widest text-slate-400">Highlight Reel Link (YouTube/Hudl)</label>
                <input
                  type="url"
                  onChange={(e) => handleInputChange('videoLink', e.target.value)}
                  className="w-full border-b-2 border-slate-200 focus:border-primary outline-none py-3 text-lg font-light italic"
                  placeholder="https://..."
                />
              </div>
              <div className="space-y-2">
                <label className="text-[10px] font-bold uppercase tracking-widest text-slate-400">Current High School / Team</label>
                <input
                  type="text"
                  onChange={(e) => handleInputChange('team', e.target.value)}
                  className="w-full border-b-2 border-slate-200 focus:border-primary outline-none py-3 text-lg font-light italic"
                  placeholder="Elite Academy HS"
                />
              </div>
            </div>
          )}

          {step === 3 && (
            <div className="animate-in fade-in slide-in-from-left-4 duration-500 space-y-8">
              <div className="space-y-2">
                <label className="text-[10px] font-bold uppercase tracking-widest text-slate-400">Current GPA</label>
                <input
                  type="text"
                  onChange={(e) => handleInputChange('gpa', e.target.value)}
                  className="w-full border-b-2 border-slate-200 focus:border-primary outline-none py-3 text-lg font-light italic"
                  placeholder="3.85"
                />
              </div>
              <div className="space-y-2">
                <label className="text-[10px] font-bold uppercase tracking-widest text-slate-400">Brief Personal Statement</label>
                <textarea
                  rows={4}
                  onChange={(e) => handleInputChange('statement', e.target.value)}
                  className="w-full border-2 border-slate-100 p-4 focus:border-primary outline-none text-lg font-light italic"
                  placeholder="Tell us why you deserve a spot at Coastal Prep..."
                ></textarea>
              </div>
              <div className="p-6 bg-slate-50 border-l-4 border-primary italic text-sm text-slate-600">
                By submitting this application, you agree to undergo a full background and academic check as part of our elite recruitment process.
              </div>
            </div>
          )}

          <div className="flex justify-between pt-12">
            {step > 1 && (
              <button
                type="button"
                onClick={() => setStep(step - 1)}
                className="px-10 py-4 border-2 border-navy-900/10 text-navy-900 font-bold uppercase tracking-widest text-[10px] hover:border-primary transition-all"
              >
                Back
              </button>
            )}
            <div className="ml-auto">
              {step < 3 ? (
                <button
                  type="button"
                  onClick={() => setStep(step + 1)}
                  className="px-12 py-4 bg-navy-900 text-white font-bold uppercase tracking-widest text-[10px] hover:bg-primary hover:text-navy-900 transition-all shadow-xl"
                >
                  Next Step
                </button>
              ) : (
                <button
                  type="submit"
                  className="px-12 py-4 bg-primary text-navy-900 font-bold uppercase tracking-widest text-[10px] hover:bg-navy-900 hover:text-white transition-all shadow-xl"
                >
                  Submit Application
                </button>
              )}
            </div>
          </div>
        </form>
      </div>
    </section>
  );
};
