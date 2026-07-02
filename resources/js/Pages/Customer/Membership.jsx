import React from 'react';
import MobileLayout from '../../Layouts/MobileLayout';
import { Head } from '@inertiajs/react';

export default function Membership({ memberships = [] }) {
    const activeMembership = memberships.find(m => m.status === 'active');

    return (
        <MobileLayout title="Membership">
            <Head title="Membership" />
            {/* Main Content */}
            
        {/*  Active Plan Summary  */}
        <section>
            <h2 className="font-headline-md text-headline-md md:font-headline-lg md:text-headline-lg mb-lg">Active Plan</h2>
            {activeMembership ? (
                <div
                    className="bg-white rounded-card card-border card-hover p-lg flex flex-col md:flex-row justify-between items-start md:items-center gap-md transition-colors ambient-shadow">
                    <div>
                        <div className="flex items-center gap-sm mb-xs">
                            <h3 className="font-headline-sm text-headline-sm">{activeMembership.plan_name}</h3>
                            <span
                                className="px-sm py-1 bg-pine-50 text-pine-600 font-body-sm text-body-sm font-bold rounded-full">Active</span>
                        </div>
                        <p className="font-body-md text-body-md text-on-surface-variant">
                            Valid from {new Date(activeMembership.start_date).toLocaleDateString()} to {new Date(activeMembership.end_date).toLocaleDateString()}
                        </p>
                    </div>
                    <div className="flex flex-col items-start md:items-end w-full md:w-auto">
                        <div className="font-display text-display text-primary">Active</div>
                    </div>
                </div>
            ) : (
                <div className="bg-white rounded-card card-border p-lg flex justify-center text-center">
                    <p className="font-body-md text-body-md text-on-surface-variant">You do not have an active membership plan. Please choose a purchase option below.</p>
                </div>
            )}
        </section>
        {/*  Purchase Options  */}
        <section>
            <h2 className="font-headline-md text-headline-md md:font-headline-lg md:text-headline-lg mb-lg">Purchase Options
            </h2>
            <div className="grid grid-cols-1 md:grid-cols-3 gap-md">
                {/*  Single Class  */}
                <div
                    className="bg-canvas-50 rounded-card card-border card-hover p-lg flex flex-col justify-between transition-colors ambient-shadow relative overflow-hidden group">
                    <div className="absolute inset-0 bg-stone-200 opacity-0 group-hover:opacity-10 transition-opacity">
                    </div>
                    <div>
                        <h3 className="font-headline-sm text-headline-sm mb-xs relative z-10">Single Class</h3>
                        <p className="font-body-md text-body-md text-on-surface-variant mb-xl relative z-10">Perfect for
                            drop-ins or trying out a new instructor.</p>
                        <div className="font-display text-display mb-lg relative z-10">$35</div>
                    </div>
                    <ul className="font-body-sm text-body-sm text-on-surface-variant mb-xl space-y-sm relative z-10">
                        <li className="flex items-center gap-xs"><span
                                className="material-symbols-outlined text-primary text-[18px]">check</span> 1 Class Credit
                        </li>
                        <li className="flex items-center gap-xs"><span
                                className="material-symbols-outlined text-primary text-[18px]">check</span> Valid for 30
                            days</li>
                    </ul>
                    <button
                        className="w-full bg-pine-600 text-white font-label text-label py-sm rounded-full hover:opacity-90 transition-opacity relative z-10">Buy
                        Now</button>
                </div>
                {/*  10-Class Pack  */}
                <div
                    className="bg-white rounded-card card-border border-pine-600 card-hover p-lg flex flex-col justify-between transition-colors ambient-shadow relative overflow-hidden group shadow-[0_0_0_1px_rgba(22,163,74,1)]">
                    <div
                        className="absolute top-0 right-0 bg-pine-50 text-pine-600 font-label text-label px-md py-1 rounded-bl-lg border-l border-b border-pine-600">
                        Most Popular</div>
                    <div className="absolute inset-0 bg-pine-50 opacity-0 group-hover:opacity-50 transition-opacity"></div>
                    <div className="pt-sm">
                        <h3 className="font-headline-sm text-headline-sm mb-xs relative z-10">10-Class Pack</h3>
                        <p className="font-body-md text-body-md text-on-surface-variant mb-xl relative z-10">Commit to your
                            practice and save per class.</p>
                        <div className="font-display text-display mb-xs relative z-10">$300 <span
                                className="font-body-md text-body-md text-on-surface-variant block mt-[-8px]">$30 /
                                class</span></div>
                    </div>
                    <ul className="font-body-sm text-body-sm text-on-surface-variant mb-xl space-y-sm relative z-10 mt-lg">
                        <li className="flex items-center gap-xs"><span
                                className="material-symbols-outlined text-primary text-[18px]">check</span> 10 Class Credits
                        </li>
                        <li className="flex items-center gap-xs"><span
                                className="material-symbols-outlined text-primary text-[18px]">check</span> Valid for 6
                            months</li>
                        <li className="flex items-center gap-xs"><span
                                className="material-symbols-outlined text-primary text-[18px]">check</span> Priority booking
                        </li>
                    </ul>
                    <button
                        className="w-full bg-pine-600 text-white font-label text-label py-sm rounded-full hover:opacity-90 transition-opacity relative z-10">Buy
                        Now</button>
                </div>
                {/*  Monthly Unlimited  */}
                <div
                    className="bg-canvas-50 rounded-card card-border card-hover p-lg flex flex-col justify-between transition-colors ambient-shadow relative overflow-hidden group">
                    <div className="absolute inset-0 bg-stone-200 opacity-0 group-hover:opacity-10 transition-opacity">
                    </div>
                    <div>
                        <h3 className="font-headline-sm text-headline-sm mb-xs relative z-10">Monthly Unlimited</h3>
                        <p className="font-body-md text-body-md text-on-surface-variant mb-xl relative z-10">The ultimate
                            commitment to your wellness journey.</p>
                        <div className="font-display text-display mb-lg relative z-10">$450 <span
                                className="font-body-md text-body-md text-on-surface-variant">/ mo</span></div>
                    </div>
                    <ul className="font-body-sm text-body-sm text-on-surface-variant mb-xl space-y-sm relative z-10">
                        <li className="flex items-center gap-xs"><span
                                className="material-symbols-outlined text-primary text-[18px]">check</span> Unlimited
                            Classes</li>
                        <li className="flex items-center gap-xs"><span
                                className="material-symbols-outlined text-primary text-[18px]">check</span> Auto-renews
                            monthly</li>
                        <li className="flex items-center gap-xs"><span
                                className="material-symbols-outlined text-primary text-[18px]">check</span> 10% off retail
                        </li>
                    </ul>
                    <button
                        className="w-full bg-stone-200 text-ink-900 border border-stone-200 font-label text-label py-sm rounded-full hover:bg-stone-300 transition-colors relative z-10">Subscribe</button>
                </div>
            </div>
        </section>
        {/*  Usage History  */}
        <section>
            <h2 className="font-headline-md text-headline-md md:font-headline-lg md:text-headline-lg mb-md">Usage History
            </h2>
            <div className="bg-white rounded-card card-border overflow-hidden">
                <div className="divide-y divide-stone-200">
                    <div
                        className="p-md flex justify-between items-center hover:bg-canvas-50 transition-colors cursor-pointer">
                        <div className="flex items-center gap-md">
                            <div
                                className="w-10 h-10 rounded-full bg-pine-50 flex items-center justify-center text-pine-600">
                                <span className="material-symbols-outlined text-[20px]">fitness_center</span>
                            </div>
                            <div>
                                <h4 className="font-headline-sm text-headline-sm">Reformer Flow</h4>
                                <p className="font-body-sm text-body-sm text-on-surface-variant">Oct 2, 2023 • 9:00 AM</p>
                            </div>
                        </div>
                        <div className="text-right">
                            <span className="font-body-md text-body-md text-ink-900">-1 Credit</span>
                        </div>
                    </div>
                    <div
                        className="p-md flex justify-between items-center hover:bg-canvas-50 transition-colors cursor-pointer">
                        <div className="flex items-center gap-md">
                            <div
                                className="w-10 h-10 rounded-full bg-pine-50 flex items-center justify-center text-pine-600">
                                <span className="material-symbols-outlined text-[20px]">self_improvement</span>
                            </div>
                            <div>
                                <h4 className="font-headline-sm text-headline-sm">Tower Fundamentals</h4>
                                <p className="font-body-sm text-body-sm text-on-surface-variant">Sep 28, 2023 • 5:30 PM</p>
                            </div>
                        </div>
                        <div className="text-right">
                            <span className="font-body-md text-body-md text-ink-900">-1 Credit</span>
                        </div>
                    </div>
                    <div
                        className="p-md flex justify-between items-center hover:bg-canvas-50 transition-colors cursor-pointer">
                        <div className="flex items-center gap-md">
                            <div
                                className="w-10 h-10 rounded-full bg-amber-50 flex items-center justify-center text-amber-600">
                                <span className="material-symbols-outlined text-[20px]">add_circle</span>
                            </div>
                            <div>
                                <h4 className="font-headline-sm text-headline-sm">10-Class Pack Purchased</h4>
                                <p className="font-body-sm text-body-sm text-on-surface-variant">Sep 15, 2023</p>
                            </div>
                        </div>
                        <div className="text-right">
                            <span className="font-body-md text-body-md text-pine-600">+10 Credits</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        </MobileLayout>
    );
}
