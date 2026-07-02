import React from 'react';
import AppLayout from '../../Layouts/AppLayout';
import { Head } from '@inertiajs/react';

export default function Instructor() {
    return (
        <AppLayout title="Instructor Portal">
            <Head title="Instructor Portal" />
            {/* Main Content */}
            
        {/*  TopAppBar  */}
        <header
            className="flex justify-between items-center h-16 px-xl w-full bg-surface dark:bg-surface-dim border-b border-outline-variant sticky top-0 z-40">
            <div className="flex items-center gap-md">
                <span className="font-display-lg text-headline-md text-primary">Pilates Pro</span>
            </div>
            <div className="flex items-center gap-xl">
                <button
                    className="bg-primary px-lg py-sm rounded-full text-on-primary font-bold text-body-sm hover:opacity-90 active:scale-95 transition-all">
                    Check In
                </button>
                <div className="flex items-center gap-md">
                    <button className="text-on-surface-variant hover:text-primary transition-colors">
                        <span className="material-symbols-outlined">notifications</span>
                    </button>
                    <div className="w-8 h-8 rounded-full overflow-hidden bg-outline-variant border border-outline">
                        <img className="w-full h-full object-cover"
                            data-alt="A professional headshot of a female Pilates instructor in her 30s with a warm, athletic demeanor. She is standing against a minimalist studio background with soft pine-green accents. The lighting is bright and airy, reflecting a high-end corporate wellness aesthetic."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMcTiwALOQ_gD04LRshdVtZMGh23Jly0taNLrYJ01aEcmODlZjAREbTI-ZG-VRrVR0aM33tc-iB7NVVRYCfvBMOTuOGEUNiqqNXqSqiNZA8JfrmUyM8g2cDY5hnmxHVsaCwhL9dVb9eil9BCDeueL65oobnUg3OvBiGy0c351uyOWbI33oTzBqlBKRgB015XgZ6A0dEKPSmvQgU5W3fdGTb8-ciF8SY_btOFZlr8TxttNPB_R_93SktDgQ2FFHaVtmkbCgQMIOWIfe" />
                    </div>
                </div>
            </div>
        </header>
        {/*  Content Body  */}
        <div className="p-xl space-y-xl overflow-y-auto">
            {/*  Header & Availability Toggle  */}
            <div className="flex flex-col md:flex-row justify-between items-start md:items-center gap-md">
                <div>
                    <h1 className="font-headline-md text-headline-md text-on-surface">My Schedule</h1>
                    <p className="font-body-md text-body-md text-on-surface-variant">Week of October 23, 2023</p>
                </div>
                <div className="flex items-center gap-md bg-surface-container p-sm rounded-full">
                    <span className="font-label-caps text-label-caps text-secondary pl-md">General Availability</span>
                    <button
                        className="relative inline-flex h-6 w-11 items-center rounded-full bg-primary transition-colors focus:outline-none"
                        id="availabilityToggle">
                        <span
                            className="inline-block h-4 w-4 transform rounded-full bg-white transition-transform translate-x-6"></span>
                    </button>
                    <span className="font-label-caps text-label-caps text-primary pr-md">On</span>
                </div>
            </div>
            {/*  Performance Snapshot Bento  */}
            <div className="grid grid-cols-1 md:grid-cols-4 gap-md">
                <div className="bg-surface-white border border-stone-200 rounded-2xl p-md flex flex-col justify-between">
                    <span className="text-label-caps text-stone-500">Next Class In</span>
                    <div className="mt-sm">
                        <span className="font-data-mono text-headline-sm text-primary">45m</span>
                        <p className="font-body-sm text-on-surface-variant">Reformer Flow II</p>
                    </div>
                </div>
                <div className="bg-surface-white border border-stone-200 rounded-2xl p-md flex flex-col justify-between">
                    <span className="text-label-caps text-stone-500">Hours Taught</span>
                    <div className="mt-sm">
                        <span className="font-data-mono text-headline-sm text-on-surface">124.5</span>
                        <p className="font-body-sm text-on-surface-variant">This Month</p>
                    </div>
                </div>
                <div className="bg-surface-white border border-stone-200 rounded-2xl p-md flex flex-col justify-between">
                    <span className="text-label-caps text-stone-500">Avg. Rating</span>
                    <div className="mt-sm flex items-center gap-xs">
                        <span className="font-data-mono text-headline-sm text-on-surface">4.9</span>
                        <span className="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">star</span>
                        <p className="font-body-sm text-on-surface-variant ml-xs">Global</p>
                    </div>
                </div>
                <div className="bg-surface-white border border-stone-200 rounded-2xl p-md flex flex-col justify-between">
                    <span className="text-label-caps text-stone-500">Upcoming Payout</span>
                    <div className="mt-sm">
                        <span className="font-data-mono text-headline-sm text-on-surface">$2,480</span>
                        <p className="font-body-sm text-on-surface-variant">Estimated</p>
                    </div>
                </div>
            </div>
            {/*  Quick Actions  */}
            <div className="flex gap-md">
                <button
                    className="bg-primary text-on-primary px-lg py-md rounded-full font-bold text-label-caps flex items-center gap-sm transition-transform active:scale-95">
                    <span className="material-symbols-outlined">person_check</span>
                    Check-in Members
                </button>
                <button
                    className="bg-secondary-container text-on-secondary-container px-lg py-md rounded-full font-bold text-label-caps flex items-center gap-sm border border-outline-variant transition-transform active:scale-95">
                    <span className="material-symbols-outlined">swap_horiz</span>
                    Request Substitute
                </button>
            </div>
            {/*  Weekly Schedule Grid  */}
            <div className="bg-surface-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm">
                {/*  Grid Header  */}
                <div className="grid grid-cols-7 border-b border-stone-200 bg-surface-container-low">
                    <div className="p-md text-center border-r border-stone-200">
                        <p className="text-label-caps text-stone-500">MON</p>
                        <p className="font-headline-sm text-on-surface">23</p>
                    </div>
                    <div className="p-md text-center border-r border-stone-200 bg-primary-container/5">
                        <p className="text-label-caps text-primary">TUE</p>
                        <p className="font-headline-sm text-primary">24</p>
                    </div>
                    <div className="p-md text-center border-r border-stone-200">
                        <p className="text-label-caps text-stone-500">WED</p>
                        <p className="font-headline-sm text-on-surface">25</p>
                    </div>
                    <div className="p-md text-center border-r border-stone-200">
                        <p className="text-label-caps text-stone-500">THU</p>
                        <p className="font-headline-sm text-on-surface">26</p>
                    </div>
                    <div className="p-md text-center border-r border-stone-200">
                        <p className="text-label-caps text-stone-500">FRI</p>
                        <p className="font-headline-sm text-on-surface">27</p>
                    </div>
                    <div className="p-md text-center border-r border-stone-200">
                        <p className="text-label-caps text-stone-500">SAT</p>
                        <p className="font-headline-sm text-on-surface">28</p>
                    </div>
                    <div className="p-md text-center">
                        <p className="text-label-caps text-stone-500">SUN</p>
                        <p className="font-headline-sm text-on-surface">29</p>
                    </div>
                </div>
                {/*  Grid Content (Asymmetric Layout Example)  */}
                <div className="grid grid-cols-7 min-h-[600px] relative">
                    {/*  Column Dividers  */}
                    <div className="absolute inset-0 grid grid-cols-7 pointer-events-none">
                        <div className="border-r border-stone-100"></div>
                        <div className="border-r border-stone-100"></div>
                        <div className="border-r border-stone-100"></div>
                        <div className="border-r border-stone-100"></div>
                        <div className="border-r border-stone-100"></div>
                        <div className="border-r border-stone-100"></div>
                    </div>
                    {/*  Classes Column (Monday)  */}
                    <div className="p-sm space-y-sm z-10">
                        <div
                            className="bg-surface border border-stone-200 p-md rounded-xl hover:border-primary transition-colors cursor-pointer">
                            <p className="font-data-mono text-label-caps text-primary">09:00 - 09:50</p>
                            <h4 className="font-headline-sm text-body-md mt-xs">Reformer II</h4>
                            <div className="flex items-center gap-xs mt-sm text-on-surface-variant">
                                <span className="material-symbols-outlined text-[16px]">room</span>
                                <span className="text-label-caps">Studio B</span>
                            </div>
                            <div className="mt-md flex justify-between items-center">
                                <span className="text-label-caps text-stone-500">8/12</span>
                                <span
                                    className="bg-primary-container/10 text-primary px-sm py-xs rounded-full text-[10px] font-bold uppercase tracking-wider">Confirmed</span>
                            </div>
                        </div>
                    </div>
                    {/*  Classes Column (Tuesday - Highlighted Current Day)  */}
                    <div className="p-sm space-y-sm z-10 bg-primary-container/5">
                        <div className="bg-surface-white border-2 border-primary p-md rounded-xl shadow-lg relative">
                            <div
                                className="absolute -top-2 -right-2 bg-primary text-on-primary w-6 h-6 rounded-full flex items-center justify-center">
                                <span className="material-symbols-outlined text-[14px]">notifications_active</span>
                            </div>
                            <p className="font-data-mono text-label-caps text-primary">08:00 - 08:50</p>
                            <h4 className="font-headline-sm text-body-md mt-xs">Foundation</h4>
                            <div className="flex items-center gap-xs mt-sm text-on-surface-variant">
                                <span className="material-symbols-outlined text-[16px]">room</span>
                                <span className="text-label-caps">Studio A</span>
                            </div>
                            <div className="mt-md flex justify-between items-center">
                                <span className="text-label-caps text-stone-500">12/12</span>
                                <span
                                    className="bg-error-container text-error px-sm py-xs rounded-full text-[10px] font-bold uppercase tracking-wider">Full</span>
                            </div>
                        </div>
                        <div
                            className="bg-surface-white border border-stone-200 p-md rounded-xl hover:border-primary transition-colors cursor-pointer">
                            <p className="font-data-mono text-label-caps text-primary">12:00 - 12:50</p>
                            <h4 className="font-headline-sm text-body-md mt-xs">Private Session</h4>
                            <div className="flex items-center gap-xs mt-sm text-on-surface-variant">
                                <span className="material-symbols-outlined text-[16px]">room</span>
                                <span className="text-label-caps">Suite 04</span>
                            </div>
                            <div className="mt-md flex justify-between items-center">
                                <span className="text-label-caps text-stone-500">1/1</span>
                                <span
                                    className="bg-primary-container/10 text-primary px-sm py-xs rounded-full text-[10px] font-bold uppercase tracking-wider">Confirmed</span>
                            </div>
                        </div>
                    </div>
                    {/*  Classes Column (Wednesday)  */}
                    <div className="p-sm space-y-sm z-10">
                        <div
                            className="bg-surface border border-stone-200 p-md rounded-xl hover:border-primary transition-colors cursor-pointer">
                            <p className="font-data-mono text-label-caps text-primary">10:00 - 10:50</p>
                            <h4 className="font-headline-sm text-body-md mt-xs">Tower Power</h4>
                            <div className="flex items-center gap-xs mt-sm text-on-surface-variant">
                                <span className="material-symbols-outlined text-[16px]">room</span>
                                <span className="text-label-caps">Studio B</span>
                            </div>
                            <div className="mt-md flex justify-between items-center">
                                <span className="text-label-caps text-stone-500">6/10</span>
                                <span
                                    className="bg-primary-container/10 text-primary px-sm py-xs rounded-full text-[10px] font-bold uppercase tracking-wider">Confirmed</span>
                            </div>
                        </div>
                    </div>
                    {/*  Classes Column (Thursday)  */}
                    <div className="p-sm space-y-sm z-10">
                        <div
                            className="bg-surface border border-stone-200 p-md rounded-xl hover:border-primary transition-colors cursor-pointer">
                            <p className="font-data-mono text-label-caps text-primary">09:00 - 09:50</p>
                            <h4 className="font-headline-sm text-body-md mt-xs">Reformer II</h4>
                            <div className="flex items-center gap-xs mt-sm text-on-surface-variant">
                                <span className="material-symbols-outlined text-[16px]">room</span>
                                <span className="text-label-caps">Studio B</span>
                            </div>
                            <div className="mt-md flex justify-between items-center">
                                <span className="text-label-caps text-stone-500">9/12</span>
                                <span
                                    className="bg-primary-container/10 text-primary px-sm py-xs rounded-full text-[10px] font-bold uppercase tracking-wider">Confirmed</span>
                            </div>
                        </div>
                    </div>
                    {/*  Empty Columns for Visual Structure  */}
                    <div className="p-sm z-10 flex flex-col items-center justify-center">
                        <span className="material-symbols-outlined text-stone-300">event_busy</span>
                    </div>
                    <div className="p-sm z-10 flex flex-col items-center justify-center">
                        <span className="material-symbols-outlined text-stone-300">event_busy</span>
                    </div>
                    <div className="p-sm z-10 flex flex-col items-center justify-center">
                        <span className="material-symbols-outlined text-stone-300">event_busy</span>
                    </div>
                </div>
            </div>
            {/*  Footer Meta  */}
            <div className="flex justify-between items-center pt-xl text-stone-400">
                <p className="font-body-sm text-label-caps">© 2023 Pilates Pro Studio Management</p>
                <div className="flex gap-md">
                    <a className="hover:text-primary transition-colors" href="#">Privacy</a>
                    <a className="hover:text-primary transition-colors" href="#">Terms</a>
                </div>
            </div>
        </div>
    
        </AppLayout>
    );
}
