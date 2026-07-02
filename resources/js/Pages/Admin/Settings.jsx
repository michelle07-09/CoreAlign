import React from 'react';
import AppLayout from '../../Layouts/AppLayout';
import { Head } from '@inertiajs/react';

export default function Settings() {
    return (
        <AppLayout title="Settings">
            <Head title="Settings" />
            {/* Main Content */}
            
        {/*  Top Navigation Bar  */}
        <header
            className="h-16 flex justify-between items-center px-lg border-b border-outline-variant bg-surface sticky top-0 z-40">
            <div className="flex items-center gap-lg">
                <h2 className="font-headline-sm text-headline-sm text-primary">AeroPilates Dashboard</h2>
                <div className="relative flex items-center">
                    <span className="material-symbols-outlined absolute left-3 text-outline">search</span>
                    <input
                        className="pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-full text-body-sm w-64 focus:ring-2 focus:ring-primary-container"
                        placeholder="Search resources..." type="text" />
                </div>
            </div>
            <div className="flex items-center gap-md">
                <button
                    className="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors">notifications</button>
                <button
                    className="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors">help</button>
                <div
                    className="h-8 w-8 rounded-full bg-primary-fixed-dim flex items-center justify-center overflow-hidden border border-outline-variant">
                    <img className="w-full h-full object-cover"
                        data-alt="A professional portrait of a modern studio manager with a clean, minimalist aesthetic, neutral lighting, and a soft-focus background of a Pilates studio. The manager has a warm but authoritative expression, conveying professional reliability and expertise."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvUf4_KkqjxH0QzKxnEUrNOenU_Mqw54g1dUEcCjgULeTcRWoAg6m9M3wOQf880WshZBcjDgI4p12bjbp4m3AUxdSBs3y-KI7VAqTWjYL8l84H9Zd8-Oq0WrBWQZPLUVDdciE37xm5wIChKzxqPmn37tx3HpWI18RUyb3-2zMnaTYw7M68kLnc_cgXynuSeGRIedbnu3KJTWtG8izJT3aDmu2WUmogx_63fefeyJXFlklgI7Ye9HoH37cN0rC8Gq-BD2CfOKX51P2Y" />
                </div>
            </div>
        </header>
        {/*  Page Content  */}
        <div className="p-xl max-w-7xl w-full mx-auto space-y-lg">
            {/*  Header Section  */}
            <div className="flex justify-between items-end pb-md border-b border-stone-200">
                <div>
                    <h3 className="font-headline-md text-headline-md text-on-surface">Studio Settings</h3>
                    <p className="font-body-md text-body-md text-on-surface-variant">Manage your global configurations and
                        multi-branch infrastructure.</p>
                </div>
                <button
                    className="bg-primary-container text-on-primary-container px-xl py-md rounded-full font-label-caps text-label-caps flex items-center gap-sm shadow-sm hover:opacity-90 transition-all active:scale-95">
                    <span className="material-symbols-outlined">save</span>
                    Save Changes
                </button>
            </div>
            {/*  Dashboard Layout: Bento Grid Style  */}
            <div className="grid grid-cols-12 gap-lg">
                {/*  General Studio Info (Left Column)  */}
                <section className="col-span-12 lg:col-span-4 space-y-lg">
                    <div
                        className="bg-surface-container-lowest border border-stone-200 rounded-[16px] p-lg flex flex-col gap-lg">
                        <div className="flex items-center gap-md">
                            <span className="material-symbols-outlined text-primary-container">business_center</span>
                            <h4 className="font-headline-sm text-headline-sm">Branding</h4>
                        </div>
                        <div className="space-y-md">
                            <div
                                className="flex flex-col items-center justify-center border-2 border-dashed border-outline-variant rounded-xl p-xl bg-surface-bright group hover:border-primary transition-colors cursor-pointer">
                                <div
                                    className="w-20 h-20 bg-surface-container-high rounded-full flex items-center justify-center mb-sm">
                                    <span
                                        className="material-symbols-outlined text-outline group-hover:text-primary">upload</span>
                                </div>
                                <span className="font-label-caps text-label-caps text-outline">Upload Studio Logo</span>
                            </div>
                            <div className="space-y-sm">
                                <label className="font-label-caps text-label-caps text-on-surface-variant">Studio
                                    Name</label>
                                <input
                                    className="w-full rounded-[10px] border-stone-300 focus:border-primary-container focus:ring-primary-container font-body-md"
                                    type="text" value="AeroPilates Collective" />
                            </div>
                            <div className="space-y-sm">
                                <label className="font-label-caps text-label-caps text-on-surface-variant">Primary
                                    Contact</label>
                                <input
                                    className="w-full rounded-[10px] border-stone-300 focus:border-primary-container focus:ring-primary-container font-body-md"
                                    type="email" value="ops@aeropilates.co" />
                            </div>
                        </div>
                    </div>
                    {/*  Integration Section  */}
                    <div
                        className="bg-surface-container-lowest border border-stone-200 rounded-[16px] p-lg flex flex-col gap-lg">
                        <div className="flex items-center gap-md">
                            <span className="material-symbols-outlined text-primary-container">account_balance_wallet</span>
                            <h4 className="font-headline-sm text-headline-sm">Integrations</h4>
                        </div>
                        <div className="space-y-md">
                            <div className="flex items-center justify-between p-md bg-surface-container-low rounded-xl">
                                <div className="flex items-center gap-md">
                                    <span className="material-symbols-outlined">payments</span>
                                    <div>
                                        <p className="font-label-caps text-label-caps">Midtrans</p>
                                        <p className="font-data-mono text-data-mono text-stone-500">ID: AP-88219</p>
                                    </div>
                                </div>
                                <span
                                    className="px-sm py-xs bg-primary-fixed text-on-primary-fixed text-[10px] rounded-full font-bold uppercase tracking-wider">Active</span>
                            </div>
                            <div className="flex items-center justify-between p-md bg-surface-container-low rounded-xl">
                                <div className="flex items-center gap-md opacity-50">
                                    <span className="material-symbols-outlined">link</span>
                                    <div>
                                        <p className="font-label-caps text-label-caps">Xendit</p>
                                        <p className="font-data-mono text-data-mono text-stone-500">Not Linked</p>
                                    </div>
                                </div>
                                <button
                                    className="text-primary font-label-caps text-[10px] hover:underline">Connect</button>
                            </div>
                        </div>
                    </div>
                </section>
                {/*  Right Column: Branches & Policies  */}
                <section className="col-span-12 lg:col-span-8 space-y-lg">
                    {/*  Branch Management Grid  */}
                    <div className="bg-surface-container-lowest border border-stone-200 rounded-[16px] p-lg">
                        <div className="flex justify-between items-center mb-lg">
                            <div className="flex items-center gap-md">
                                <span className="material-symbols-outlined text-primary-container">lan</span>
                                <h4 className="font-headline-sm text-headline-sm">Branch Management</h4>
                            </div>
                            <button
                                className="flex items-center gap-xs font-label-caps text-label-caps text-primary border border-primary px-md py-sm rounded-full hover:bg-primary-fixed transition-colors">
                                <span className="material-symbols-outlined text-[18px]">add_circle</span>
                                Add New Branch
                            </button>
                        </div>
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-md">
                            {/*  Branch Card 1  */}
                            <div
                                className="p-md rounded-xl border border-stone-200 hover:bg-primary-fixed/20 transition-all cursor-default group">
                                <div className="flex justify-between items-start mb-md">
                                    <h5 className="font-headline-sm text-[16px]">Downtown Core</h5>
                                    <span
                                        className="px-sm py-xs bg-primary-fixed text-on-primary-fixed text-[10px] rounded-full font-bold">LIVE</span>
                                </div>
                                <div className="space-y-sm mb-md">
                                    <div className="flex items-center gap-xs text-on-surface-variant">
                                        <span className="material-symbols-outlined text-[16px]">person</span>
                                        <span className="font-body-sm">Manager: Marcus Thorne</span>
                                    </div>
                                    <div className="flex items-center gap-xs text-on-surface-variant">
                                        <span className="material-symbols-outlined text-[16px]">location_on</span>
                                        <span className="font-body-sm">Jakarta Central, ID</span>
                                    </div>
                                </div>
                                <div className="flex gap-sm border-t border-stone-100 pt-md">
                                    <button
                                        className="flex-1 text-center font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Edit</button>
                                    <button
                                        className="flex-1 text-center font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Analytics</button>
                                </div>
                            </div>
                            {/*  Branch Card 2  */}
                            <div
                                className="p-md rounded-xl border border-stone-200 hover:bg-primary-fixed/20 transition-all cursor-default group">
                                <div className="flex justify-between items-start mb-md">
                                    <h5 className="font-headline-sm text-[16px]">South Jakarta</h5>
                                    <span
                                        className="px-sm py-xs bg-primary-fixed text-on-primary-fixed text-[10px] rounded-full font-bold">LIVE</span>
                                </div>
                                <div className="space-y-sm mb-md">
                                    <div className="flex items-center gap-xs text-on-surface-variant">
                                        <span className="material-symbols-outlined text-[16px]">person</span>
                                        <span className="font-body-sm">Manager: Siti Aminah</span>
                                    </div>
                                    <div className="flex items-center gap-xs text-on-surface-variant">
                                        <span className="material-symbols-outlined text-[16px]">location_on</span>
                                        <span className="font-body-sm">Kemang District</span>
                                    </div>
                                </div>
                                <div className="flex gap-sm border-t border-stone-100 pt-md">
                                    <button
                                        className="flex-1 text-center font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Edit</button>
                                    <button
                                        className="flex-1 text-center font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Analytics</button>
                                </div>
                            </div>
                            {/*  Branch Card 3  */}
                            <div className="p-md rounded-xl border border-stone-200 bg-surface-container-low">
                                <div className="flex justify-between items-start mb-md">
                                    <h5 className="font-headline-sm text-[16px]">North Heights</h5>
                                    <span
                                        className="px-sm py-xs bg-tertiary-fixed text-on-tertiary-fixed text-[10px] rounded-full font-bold uppercase">Maintenance</span>
                                </div>
                                <div className="space-y-sm mb-md">
                                    <div className="flex items-center gap-xs text-on-surface-variant">
                                        <span className="material-symbols-outlined text-[16px]">person</span>
                                        <span className="font-body-sm">Manager: Alex Wong</span>
                                    </div>
                                    <div className="flex items-center gap-xs text-on-surface-variant">
                                        <span className="material-symbols-outlined text-[16px]">location_on</span>
                                        <span className="font-body-sm">Sentul Highlands</span>
                                    </div>
                                </div>
                                <div className="flex gap-sm border-t border-stone-100 pt-md">
                                    <button
                                        className="flex-1 text-center font-label-caps text-label-caps text-primary font-bold">Resume</button>
                                    <button
                                        className="flex-1 text-center font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Settings</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/*  Operational Policies  */}
                    <div className="bg-surface-container-lowest border border-stone-200 rounded-[16px] p-lg">
                        <div className="flex items-center gap-md mb-lg">
                            <span className="material-symbols-outlined text-primary-container">rule</span>
                            <h4 className="font-headline-sm text-headline-sm">Operational Policies</h4>
                        </div>
                        <div className="flex border-b border-stone-200 mb-lg">
                            <button
                                className="px-lg py-sm font-label-caps text-label-caps border-b-2 border-primary text-primary">Hours
                                &amp; Access</button>
                            <button
                                className="px-lg py-sm font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Booking
                                Rules</button>
                            <button
                                className="px-lg py-sm font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Waitlist
                                Logic</button>
                        </div>
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-xl">
                            {/*  Hours  */}
                            <div className="space-y-md">
                                <p
                                    className="font-label-caps text-label-caps text-stone-500 uppercase tracking-widest border-l-2 border-primary pl-2">
                                    Standard Operating Hours</p>
                                <div className="space-y-sm h-48 overflow-y-auto pr-sm custom-scrollbar">
                                    <div className="flex items-center justify-between">
                                        <span className="font-body-sm">Monday</span>
                                        <div className="flex items-center gap-xs">
                                            <input className="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="06:00" />
                                            <span>—</span>
                                            <input className="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="21:00" />
                                        </div>
                                    </div>
                                    <div className="flex items-center justify-between">
                                        <span className="font-body-sm">Tuesday</span>
                                        <div className="flex items-center gap-xs">
                                            <input className="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="06:00" />
                                            <span>—</span>
                                            <input className="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="21:00" />
                                        </div>
                                    </div>
                                    <div className="flex items-center justify-between">
                                        <span className="font-body-sm">Wednesday</span>
                                        <div className="flex items-center gap-xs">
                                            <input className="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="06:00" />
                                            <span>—</span>
                                            <input className="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="21:00" />
                                        </div>
                                    </div>
                                    <div className="flex items-center justify-between">
                                        <span className="font-body-sm">Saturday</span>
                                        <div className="flex items-center gap-xs">
                                            <input className="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="08:00" />
                                            <span>—</span>
                                            <input className="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="18:00" />
                                        </div>
                                    </div>
                                    <div className="flex items-center justify-between">
                                        <span className="font-body-sm">Sunday</span>
                                        <span
                                            className="text-xs text-error font-bold px-2 py-1 bg-error-container rounded">CLOSED</span>
                                    </div>
                                </div>
                            </div>
                            {/*  Policies  */}
                            <div className="space-y-lg">
                                <div className="space-y-sm">
                                    <label
                                        className="font-label-caps text-label-caps text-on-surface-variant flex items-center gap-xs">
                                        Cancellation Window
                                        <span className="material-symbols-outlined text-[14px]">info</span>
                                    </label>
                                    <div className="flex items-center gap-md">
                                        <input
                                            className="w-20 rounded-[10px] border-stone-300 focus:border-primary-container focus:ring-primary-container font-data-mono text-center"
                                            type="number" value="12" />
                                        <span className="font-body-md">Hours before class</span>
                                    </div>
                                    <p className="text-[11px] text-stone-500 italic">Classes cancelled after this window
                                        will not be eligible for credit refunds.</p>
                                </div>
                                <div className="space-y-sm">
                                    <label className="font-label-caps text-label-caps text-on-surface-variant">No-Show
                                        Penalty</label>
                                    <div className="flex items-center gap-md">
                                        <span className="font-body-md">Rp</span>
                                        <input
                                            className="flex-1 rounded-[10px] border-stone-300 focus:border-primary-container focus:ring-primary-container font-data-mono"
                                            type="text" value="150.000" />
                                    </div>
                                    <div className="flex items-center gap-sm">
                                        <input checked="" className="rounded text-primary focus:ring-primary"
                                            type="checkbox" />
                                        <span className="font-body-sm">Automatically bill to client's saved card</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    
        </AppLayout>
    );
}
