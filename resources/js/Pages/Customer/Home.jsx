import React from 'react';
import MobileLayout from '../../Layouts/MobileLayout';
import { Head } from '@inertiajs/react';

export default function Home() {
    return (
        <MobileLayout title="Home">
            <Head title="Home" />
            {/* Main Content */}
            
        {/*  Welcome & Credit Card  */}
        <section className="grid grid-cols-1 md:grid-cols-2 gap-md items-stretch">
            {/*  Welcome Message  */}
            <div className="flex flex-col justify-center">
                <h1 className="font-display text-display text-primary mb-base">Good morning,<br />Sarah.</h1>
                <p className="font-body-lg text-body-lg text-on-surface-variant">Your alignment awaits. Let's build strength
                    today.</p>
            </div>
            {/*  Membership/Credit Card  */}
            <div
                className="bg-surface rounded-xl border border-outline-variant p-lg flex flex-col justify-between hover:border-outline transition-colors shadow-ambient">
                <div className="flex justify-between items-start mb-md">
                    <div>
                        <span
                            className="font-label text-label text-on-surface-variant uppercase tracking-wider block mb-base">Current
                            Plan</span>
                        <h2 className="font-headline-md text-headline-md text-on-surface">Unlimited + Flow</h2>
                    </div>
                    <span className="material-symbols-outlined text-primary text-3xl" data-icon="card_membership"
                        style="font-variation-settings: 'FILL' 1;">card_membership</span>
                </div>
                <div>
                    <div className="flex items-end gap-base mb-xs">
                        <span className="font-display text-display text-primary leading-none">12</span>
                        <span className="font-body-sm text-body-sm text-on-surface-variant pb-1">Credits Remaining</span>
                    </div>
                    <div className="w-full bg-surface-container-highest rounded-full h-1.5 mt-sm">
                        <div className="bg-primary h-1.5 rounded-full" style="width: 75%"></div>
                    </div>
                    <div className="flex justify-between mt-xs font-label text-label text-on-surface-variant">
                        <span>Renews Oct 1</span>
                        <a className="text-primary hover:underline" href="#">Manage</a>
                    </div>
                </div>
            </div>
        </section>
        {/*  Next Class Card  */}
        <section>
            <h3 className="font-headline-sm text-headline-sm text-on-surface mb-md">Next Class</h3>
            <div
                className="bg-surface rounded-xl border border-outline-variant p-md flex flex-col md:flex-row items-center gap-md hover:border-outline transition-colors shadow-ambient group cursor-pointer relative overflow-hidden">
                {/*  Decorative background subtle gradient  */}
                <div
                    className="absolute inset-0 bg-gradient-to-r from-primary-fixed/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                </div>
                <div className="flex-shrink-0 relative z-10">
                    <img alt="Instructor Elena"
                        className="w-16 h-16 rounded-full border border-outline-variant object-cover"
                        data-alt="A professional headshot of a female pilates instructor named Elena. She is wearing a dark pine green athletic top, smiling confidently. The background is a clean, bright, white studio setting. High contrast, sharp focus, modern corporate athletic aesthetic."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuASj5bXeQknjaVboP4kqPdZSy_50OcIBxDvVYJDX4E4BL_kw7eqHxGnRZIEac61lQiZY7aMbqNk0iCYAAXq4NMAAfTWHb1cTngWEEVPOKKfvve_v7Icv34AMm5zXRLvvsoLWizq0dJbVvPy5c0UQMe4dbBbbVOzGyJvngnx_JjVOrcQolMPRh5DAHcye92AwM5oa-_-4j3AAJWIFrPuHhNhROAdJXUeteebBfYsd1G72gC2FO0-S8-YiOo3AZCy6Z8_DO_2y4J3aSVl" />
                </div>
                <div className="flex-grow text-center md:text-left z-10">
                    <div
                        className="inline-block bg-primary-fixed text-on-primary-fixed-variant font-label text-label px-sm py-1 rounded-full mb-xs">
                        Tomorrow</div>
                    <h4 className="font-headline-md text-headline-md text-on-surface mb-base">Reformer Flow</h4>
                    <p
                        className="font-body-md text-body-md text-on-surface-variant flex items-center justify-center md:justify-start gap-xs">
                        <span className="material-symbols-outlined text-[18px]">schedule</span> 09:00 AM - 09:50 AM
                        <span className="mx-xs text-outline-variant">•</span>
                        with Elena
                    </p>
                </div>
                <div className="flex-shrink-0 w-full md:w-auto z-10">
                    <button
                        className="w-full md:w-auto bg-surface border border-outline-variant text-on-surface font-body-sm text-body-sm px-lg py-sm rounded-full hover:border-outline hover:bg-surface-container-low transition-colors">Modify
                        Booking</button>
                </div>
            </div>
        </section>
        {/*  Recommended Classes Bento Grid  */}
        <section>
            <div className="flex justify-between items-end mb-md">
                <h3 className="font-headline-sm text-headline-sm text-on-surface">Recommended for Today</h3>
                <a className="font-label text-label text-primary hover:underline flex items-center gap-xs" href="#">View
                    Schedule <span className="material-symbols-outlined text-[16px]">arrow_forward</span></a>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-3 gap-md">
                {/*  Class Card 1  */}
                <div
                    className="bg-surface rounded-xl border border-outline-variant hover:border-outline transition-colors shadow-ambient overflow-hidden flex flex-col">
                    <div className="bg-cover bg-center w-full h-32 border-b border-outline-variant"
                        data-alt="A sleek, modern pilates reformer machine set against a clean white studio background. Natural sunlight streams in, creating sharp, angular shadows. Subtle pine green accents in the room. High-end, premium aesthetic, crisp and focused."
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAaMDlXU4coXZmP_hq-WwpG1GfRwpRCaZM80VyUjsY8sUFU1utDqqb63xMagWbp3ewIWpPPau63p0JEgHIPJPYqmPDMDOR7-7do7iTg2PWZNKFDXZkVKd-Zp6OE4107jhE-AEiIax1WNygbNkB9FnBJS9-A4faMJACb-w-ujf0sUSo1tXlAHYO5rlvXrzmjSto-cykIrpxp41Q5FM3Q8GQjI76juX9SZa63dhh2HJWGvD9ezh-dkcxj7jAFoAkAAoUjwWpRfdsVgK3s')">
                    </div>
                    <div className="p-md flex flex-col flex-grow">
                        <div className="flex justify-between items-start mb-xs">
                            <span className="font-label text-label text-on-surface-variant">12:30 PM (50m)</span>
                            <span
                                className="bg-surface-container-high text-on-surface-variant font-label text-label px-2 py-0.5 rounded">3
                                Spots Left</span>
                        </div>
                        <h4 className="font-headline-sm text-headline-sm text-on-surface mb-base">Lunchtime Sculpt</h4>
                        <p className="font-body-sm text-body-sm text-on-surface-variant mb-md flex-grow">Focus on core
                            stability and quick recovery.</p>
                        <button
                            className="w-full bg-primary text-on-primary font-body-sm text-body-sm px-md py-sm rounded-full hover:opacity-90 transition-opacity">Book
                            • 1 Credit</button>
                    </div>
                </div>
                {/*  Class Card 2  */}
                <div
                    className="bg-surface rounded-xl border border-outline-variant hover:border-outline transition-colors shadow-ambient overflow-hidden flex flex-col">
                    <div className="bg-cover bg-center w-full h-32 border-b border-outline-variant"
                        data-alt="Close up of a person's hands gripping the padded handles of a pilates reformer machine. The straps are taut. The setting is bright and clean with cool-toned lighting. Minimalist athletic aesthetic, conveying strength and control."
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD7XKHKXcdM7xk31xrPLFwAxwacLqwmA_ZzmaR97aXO70Gy4dbswGiJ-_y8W-W64RhTNnJEqUZuDedcrVx2jA_QYmeAAT0GmiscDryqb55bs0sJaU3iJ-sIO8FN1YH6Ao2Vb6ejYXZMmzJDm4TCiKULrfxpWCXbDCgd0BJxGL-i1cKywzsoHp5JWXiJX4A7Cnhobj8kE6Z6gSv2SesD9ADyoJfqs8CQdomqVS2I5uTsieq6iJbua7hMImkdYE1d4Cm1rokv_1q_9EeW')">
                    </div>
                    <div className="p-md flex flex-col flex-grow">
                        <div className="flex justify-between items-start mb-xs">
                            <span className="font-label text-label text-on-surface-variant">17:00 PM (50m)</span>
                            <span
                                className="bg-primary-fixed/20 text-primary font-label text-label px-2 py-0.5 rounded">Waitlist</span>
                        </div>
                        <h4 className="font-headline-sm text-headline-sm text-on-surface mb-base">Advanced Power</h4>
                        <p className="font-body-sm text-body-sm text-on-surface-variant mb-md flex-grow">High intensity,
                            full-body athletic conditioning.</p>
                        <button
                            className="w-full bg-surface border border-outline-variant text-on-surface font-body-sm text-body-sm px-md py-sm rounded-full hover:bg-surface-container-low transition-colors">Join
                            Waitlist</button>
                    </div>
                </div>
                {/*  Class Card 3  */}
                <div
                    className="bg-surface rounded-xl border border-outline-variant hover:border-outline transition-colors shadow-ambient overflow-hidden flex flex-col">
                    <div className="bg-cover bg-center w-full h-32 border-b border-outline-variant"
                        data-alt="A calm, beautifully lit empty studio corner with a simple pine wood bench and a rolled up dark green yoga mat. Soft morning light creates a serene, restorative atmosphere. Modern, architectural, premium wellness vibe."
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBAsMVIfsumN5UFt_Exm2Txf-zXmmXCAy1PcaKfqPpugFkXVcree5HvXLw3FvqwfqFXpIuyQQzDas4RiWoln7zzywgMNIrZGG8o1rbA5JUIAGBqyAfhLSlBf37_Uo1G2kiBFAITfriWqFEFIpTg6ZrUCT_r-4m8treUCeqYwotbleBp7nnjs_P5htVqLtNWzpzTE8McB6p0byeiYl7jCsvN9_jkDxxrZxU56zoN4-u25kCXPAJHLiF458F-EX5cySfgFQ798aM40Aef')">
                    </div>
                    <div className="p-md flex flex-col flex-grow">
                        <div className="flex justify-between items-start mb-xs">
                            <span className="font-label text-label text-on-surface-variant">19:00 PM (60m)</span>
                            <span
                                className="bg-surface-container-high text-on-surface-variant font-label text-label px-2 py-0.5 rounded">Available</span>
                        </div>
                        <h4 className="font-headline-sm text-headline-sm text-on-surface mb-base">Restorative Stretch</h4>
                        <p className="font-body-sm text-body-sm text-on-surface-variant mb-md flex-grow">Deep stretching and
                            mobility work for recovery.</p>
                        <button
                            className="w-full bg-primary text-on-primary font-body-sm text-body-sm px-md py-sm rounded-full hover:opacity-90 transition-opacity">Book
                            • 1 Credit</button>
                    </div>
                </div>
            </div>
        </section>
    
        </MobileLayout>
    );
}
