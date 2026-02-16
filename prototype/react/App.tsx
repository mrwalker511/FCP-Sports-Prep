import React, { useState, useEffect } from 'react';
import { Header } from './parts/Header';
import { Footer } from './parts/Footer';
import { HeroPattern } from './patterns/HeroPattern';
import { StatsPattern } from './patterns/StatsPattern';
import { GridPattern } from './patterns/GridPattern';
import { CTAPattern } from './patterns/CTAPattern';
import { ProgramsHeroPattern } from './patterns/ProgramsHeroPattern';
import { ProgramsDetailPattern } from './patterns/ProgramsDetailPattern';
import { FacultyPattern } from './patterns/FacultyPattern';
import { CampusPattern } from './patterns/CampusPattern';
import { SectionHeaderPattern } from './patterns/SectionHeaderPattern';
import { NewsArchivePattern } from './patterns/NewsArchivePattern';
import { SchedulePattern } from './patterns/SchedulePattern';
import { ApplyPattern } from './patterns/ApplyPattern';
import { DonorsPattern } from './patterns/DonorsPattern';
import { ContactPattern } from './patterns/ContactPattern';
import { LegalPattern } from './patterns/LegalPattern';

export type PageType = 'home' | 'programs' | 'faculty' | 'campus' | 'news' | 'schedule' | 'apply' | 'donors' | 'contact' | 'privacy' | 'terms' | '404' | 'elementor-test' | 'manual';

const App: React.FC = () => {
  const [scrolled, setScrolled] = useState(false);
  const [currentPage, setCurrentPage] = useState<PageType>('home');
  const [isElementorCanvas, setIsElementorCanvas] = useState(false);
  const [showSeoPanel, setShowSeoPanel] = useState(false);

  useEffect(() => {
    const handleScroll = () => setScrolled(window.scrollY > 60);
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  useEffect(() => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }, [currentPage]);

  const getSeoData = () => {
    const base = {
      title: "Florida Coastal Prep | Elite Academy",
      desc: "Forging the next generation of elite athletes and academic leaders.",
      schema: "EducationalOrganization",
      og: "og:image, og:type, og:url"
    };

    switch (currentPage) {
      case 'programs': return { ...base, title: "Curriculum | Coastal Prep Athletics", desc: "View our D1-informed basketball and academic roadmap." };
      case 'faculty': return { ...base, title: "Leadership | Our Elite Coaching Staff", desc: "Meet the NBA scouts and D1 coaches leading our athletes." };
      case 'schedule': return { ...base, title: "Game Schedule | Florida Coastal Prep", desc: "Upcoming tournaments and scouting showcases." };
      case 'manual': return { ...base, title: "Theme Documentation | Owner's Manual", desc: "Technical implementation guide for theme owners." };
      case 'apply': return { ...base, title: "Apply Today | Florida Coastal Prep", desc: "Submit your application to join the next roster." };
      default: return base;
    }
  };

  const seo = getSeoData();

  const renderContent = () => {
    if (currentPage === 'elementor-test') {
      return (
        <div className="bg-slate-100 min-h-screen py-24 flex items-center justify-center">
          <div className="max-w-2xl w-full bg-white p-12 shadow-2xl rounded-sm border-t-4 border-primary">
            <h2 className="font-display text-4xl text-navy-900 italic mb-6 uppercase">Elementor Mode</h2>
            <p className="text-slate-600 mb-8 italic">You are viewing the "Full Width" FSE template. This ensures that Elementor sections can stretch 100% without being boxed by the theme's CSS.</p>
            <div className="flex gap-4">
              <button
                onClick={() => setIsElementorCanvas(!isElementorCanvas)}
                className="bg-navy-900 text-white px-8 py-3 text-[10px] font-bold uppercase tracking-widest hover:bg-primary hover:text-navy-900"
              >
                Toggle Canvas Mode: {isElementorCanvas ? 'ON' : 'OFF'}
              </button>
              <button onClick={() => setCurrentPage('home')} className="border border-navy-900/10 px-8 py-3 text-[10px] font-bold uppercase tracking-widest hover:bg-slate-50">Exit</button>
            </div>
          </div>
        </div>
      );
    }

    if (currentPage === 'manual') {
      return (
        <div className="bg-white min-h-screen pt-40 pb-24">
          <div className="max-w-[800px] mx-auto px-6">
            <span className="text-primary font-bold tracking-[0.4em] uppercase text-[10px] mb-4 block">Documentation</span>
            <h1 className="font-display text-7xl text-navy-900 italic uppercase mb-12 leading-none">{"Theme Owner's Manual"}</h1>
            <div className="prose prose-slate italic font-light space-y-8 text-slate-600">
              <section>
                <h3 className="text-navy-900 font-display text-3xl uppercase not-italic">{"1. Build & Deploy"}</h3>
                <p>{"Zip the theme contents. In WordPress, go to Appearance > Themes > Upload. This FSE theme is modular; patterns are found in the /patterns folder and registered in functions.php."}</p>
              </section>
              <section>
                <h3 className="text-navy-900 font-display text-3xl uppercase not-italic">2. Custom Post Types</h3>
                <p>Faculty, Programs, and Schedules are registered in functions.php. Use the WordPress dashboard to add new items. Single and Archive templates are pre-styled.</p>
              </section>
              <section>
                <h3 className="text-navy-900 font-display text-3xl uppercase not-italic">3. Elementor Templates</h3>
                <p>{"Select \"Elementor Full Width\" in Page Attributes to use the Header/Footer while building full-width content. Use \"Canvas\" for landing pages."}</p>
              </section>
              <div className="bg-slate-50 p-8 border-l-4 border-primary">
                <p className="text-sm">For full technical details, refer to <strong>docs/USER_MANUAL.md</strong> and <strong>docs/DEBUG_LOG.md</strong>.</p>
              </div>
            </div>

            <button onClick={() => setCurrentPage('home')} className="mt-12 text-navy-900 font-bold uppercase tracking-widest text-[10px] hover:text-primary flex items-center gap-2">
              <span className="material-icons text-sm">arrow_back</span> Return to Court
            </button>
          </div>
        </div>
      );
    }

    switch (currentPage) {
      case 'home':
        return (
          <>
            <HeroPattern />
            <div className="max-w-[1200px] mx-auto -mt-16 relative z-30 px-4">
              <StatsPattern />
            </div>
            <div className="py-24 max-w-[1200px] mx-auto px-6">
              <GridPattern />
            </div>
            <CTAPattern />
          </>
        );
      case 'programs':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-700">
            <div className="bg-navy-950 pt-24 pb-4">
              <div className="max-w-[1200px] mx-auto px-6">
                <div className="inline-flex items-center space-x-2 text-primary font-bold text-[9px] uppercase tracking-[0.4em] mb-4">
                  <span className="w-8 h-[1px] bg-primary"></span>
                  <span>Custom Post Type: Program</span>
                </div>
              </div>
            </div>
            <ProgramsHeroPattern />
            <div className="bg-white">
              <ProgramsDetailPattern />
            </div>
            <CTAPattern />
          </div>
        );
      case 'faculty':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-700 bg-slate-50">
            <div className="pt-40 pb-20 bg-navy-950">
              <div className="max-w-[1200px] mx-auto px-6">
                <div className="inline-flex items-center space-x-2 text-primary font-bold text-[9px] uppercase tracking-[0.4em] mb-4">
                  <span className="w-8 h-[1px] bg-primary"></span>
                  <span>Custom Post Type: Faculty</span>
                </div>
                <SectionHeaderPattern
                  tag="The Minds Behind the Players"
                  title="ELITE LEADERSHIP"
                  desc="Our staff comprises former NBA scouts, D1 head coaches, and Ivy League academic advisors."
                  light
                />
              </div>
            </div>
            <FacultyPattern />
            <CTAPattern />
          </div>
        );
      case 'campus':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-700 bg-white">
            <div className="pt-40 pb-20 bg-navy-950">
              <div className="max-w-[1200px] mx-auto px-6">
                <SectionHeaderPattern
                  tag="World Class Environment"
                  title="COASTAL FACILITIES"
                  desc="A training ground built for excellence, located in the heart of Florida's premier sports corridor."
                  light
                />
              </div>
            </div>
            <CampusPattern />
            <CTAPattern />
          </div>
        );
      case 'news':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-700 bg-slate-50 min-h-screen">
            <div className="pt-40 pb-20 bg-navy-950">
              <div className="max-w-[1200px] mx-auto px-6">
                <div className="inline-flex items-center space-x-2 text-primary font-bold text-[9px] uppercase tracking-[0.4em] mb-4">
                  <span className="w-8 h-[1px] bg-primary"></span>
                  <span>Standard Post Category: News</span>
                </div>
                <SectionHeaderPattern
                  tag="Academy Intel"
                  title="NEWS & ANNOUNCEMENTS"
                  desc="Stay updated with recruitment news, campus developments, and player milestones."
                  light
                />
              </div>
            </div>
            <NewsArchivePattern />
            <CTAPattern />
          </div>
        );
      case 'schedule':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-700 bg-white min-h-screen">
            <div className="pt-40 pb-20 bg-navy-900">
              <div className="max-w-[1200px] mx-auto px-6 text-center flex flex-col items-center">
                <div className="inline-flex items-center space-x-2 text-primary font-bold text-[9px] uppercase tracking-[0.4em] mb-4">
                  <span className="w-8 h-[1px] bg-primary"></span>
                  <span>Custom Post Type: Schedule</span>
                </div>
                <SectionHeaderPattern
                  tag="The Pro Circuit"
                  title="SEASON SCHEDULE"
                  desc="Live scores, upcoming tournament dates, and scouting showcase locations."
                  light
                />
              </div>
            </div>
            <SchedulePattern />
            <CTAPattern />
          </div>
        );
      case 'apply':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-700 bg-white min-h-screen">
            <div className="pt-40 pb-20 bg-navy-950">
              <div className="max-w-[1200px] mx-auto px-6">
                <SectionHeaderPattern
                  tag="Future Prospects"
                  title="ADMISSIONS PORTAL"
                  desc="Begin your journey. We are looking for athletes with high character, elite potential, and academic ambition."
                  light
                />
              </div>
            </div>
            <ApplyPattern />
            <CTAPattern />
          </div>
        );
      case 'donors':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-700 bg-slate-50 min-h-screen">
            <div className="pt-40 pb-20 bg-navy-950">
              <div className="max-w-[1200px] mx-auto px-6">
                <SectionHeaderPattern
                  tag="Support the Dream"
                  title="DONORS & PARTNERS"
                  desc="Florida Coastal Prep is a non-profit foundation. Your contributions provide scholarships for underprivileged athletes."
                  light
                />
              </div>
            </div>
            <DonorsPattern />
            <CTAPattern />
          </div>
        );
      case 'contact':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-700 bg-white min-h-screen">
            <div className="pt-40 pb-20 bg-navy-950">
              <div className="max-w-[1200px] mx-auto px-6">
                <SectionHeaderPattern
                  tag="Get in Touch"
                  title="CONTACT ACADEMY"
                  desc="Connect with our recruitment team, academic advisors, or administrative offices."
                  light
                />
              </div>
            </div>
            <ContactPattern />
            <CTAPattern />
          </div>
        );
      case 'privacy':
        return <LegalPattern title="Privacy Policy" setPage={setCurrentPage} />;
      case 'terms':
        return <LegalPattern title="Terms of Service" setPage={setCurrentPage} />;
      case '404':
        return (
          <div className="bg-navy-950 h-screen flex flex-col items-center justify-center text-center px-6">
            <h1 className="font-display text-[15vw] text-white italic leading-none opacity-20">404</h1>
            <div className="relative -mt-[10vw]">
              <h2 className="font-display text-7xl text-primary italic uppercase mb-8 leading-none">OUT OF BOUNDS</h2>
              <button onClick={() => setCurrentPage('home')} className="bg-white text-navy-900 px-12 py-5 font-bold tracking-widest uppercase text-[10px] hover:bg-primary transition-all">
                Return to Home
              </button>
            </div>
          </div>
        );
      default:
        return null;
    }
  };

  const hideHeaderFooter = (isElementorCanvas && currentPage === 'elementor-test') || currentPage === 'manual' || currentPage === '404';

  return (
    <div className={`wp-site-layout min-h-screen flex flex-col selection:bg-primary selection:text-navy-900 transition-colors duration-500 overflow-x-hidden ${hideHeaderFooter ? 'bg-white' : ''}`}>
      {!hideHeaderFooter && <Header scrolled={scrolled} setPage={setCurrentPage} currentPage={currentPage} />}
      <main className="wp-site-content flex-grow">
        {renderContent()}
      </main>
      {!hideHeaderFooter && <Footer setPage={setCurrentPage} />}

      <div className="fixed bottom-4 left-4 z-50 pointer-events-none flex flex-col space-y-2">
        {showSeoPanel && (
          <div className="bg-white p-6 shadow-2xl border border-slate-200 w-80 mb-4 rounded-sm animate-in slide-in-from-bottom-4 duration-300 pointer-events-auto">
            <h4 className="font-display text-xl text-navy-900 italic mb-4">SEO HEAD INSPECTOR</h4>
            <div className="space-y-4">
              <div>
                <span className="text-[8px] font-bold text-slate-400 uppercase tracking-widest block">Title Tag</span>
                <p className="text-[11px] text-navy-900 font-medium italic">{seo.title}</p>
              </div>
              <div>
                <span className="text-[8px] font-bold text-slate-400 uppercase tracking-widest block">Meta Description</span>
                <p className="text-[11px] text-slate-500 font-light italic leading-relaxed">{seo.desc}</p>
              </div>
              <div>
                <span className="text-[8px] font-bold text-slate-400 uppercase tracking-widest block">Schema JSON-LD</span>
                <div className="bg-slate-50 p-2 border border-slate-100 mt-1">
                  <code className="text-[9px] text-primary font-bold">@type: {seo.schema}</code>
                </div>
              </div>
            </div>
            <button onClick={() => setShowSeoPanel(false)} className="w-full mt-6 py-2 bg-navy-900 text-white text-[9px] font-bold uppercase tracking-widest hover:bg-primary hover:text-navy-900">Close</button>
          </div>
        )}

        <div className="bg-navy-950/80 text-white border border-white/10 px-4 py-2 rounded-full shadow-2xl flex items-center space-x-2 backdrop-blur-md pointer-events-auto">
          <div className="w-2 h-2 rounded-full bg-primary animate-pulse"></div>
          <span className="text-[9px] font-bold tracking-widest uppercase">
            CMS STATUS: SEO OPTIMIZED
          </span>
          <div className="w-[1px] h-3 bg-white/20 ml-2"></div>
          <button
            onClick={() => setShowSeoPanel(!showSeoPanel)}
            className="text-white hover:text-primary px-2 transition-colors"
          >
            <span className="material-icons text-[16px]">visibility</span>
          </button>
          <button
            onClick={() => setCurrentPage('elementor-test')}
            className="bg-primary/20 hover:bg-primary text-primary hover:text-navy-900 px-2 py-1 rounded text-[8px] transition-colors ml-2 font-bold"
          >
            TEST BUILDER
          </button>
          <button
            onClick={() => setCurrentPage('manual')}
            className="bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded text-[8px] transition-colors ml-1 font-bold border border-white/10"
          >
            MANUAL
          </button>
        </div>
      </div>
    </div>
  );
};

export default App;