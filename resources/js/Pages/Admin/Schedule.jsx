import React from 'react';
import AppLayout from '../../Layouts/AppLayout';
import { Head } from '@inertiajs/react';

export default function Schedule({ classes = [] }) {
    return (
        <AppLayout title="Class Schedule">
            <Head title="Class Schedule" />
            {/* Main Content */}
            
        <div className="p-lg">
            {/*  Calendar Header / Controls  */}
            <div className="flex justify-between items-end mb-lg">
                <div>
                    <h3 className="font-headline-md text-headline-md text-on-surface mb-1">September 2024</h3>
                    <p className="font-body-md text-body-md text-on-surface-variant">Weekly Management View</p>
                </div>
                <div
                    className="flex items-center gap-2 bg-surface-container-low p-1 rounded-xl border border-secondary-fixed">
                    <button
                        className="px-4 py-2 font-label-caps text-label-caps bg-surface-white shadow-sm rounded-lg border border-secondary-fixed text-on-surface">WEEK</button>
                    <button
                        className="px-4 py-2 font-label-caps text-label-caps text-secondary hover:text-on-surface transition-colors">MONTH</button>
                    <button
                        className="px-4 py-2 font-label-caps text-label-caps text-secondary hover:text-on-surface transition-colors">DAY</button>
                </div>
            </div>
            {/*  Calendar Container  */}
            <div className="bg-surface-white rounded-xl border border-secondary-fixed overflow-hidden">
                {/*  Day Headers  */}
                <div className="schedule-grid bg-surface-container border-b border-secondary-fixed">
                    <div className="p-4 border-r border-secondary-fixed"></div>
                    <div className="p-4 border-r border-secondary-fixed text-center">
                        <p className="font-label-caps text-label-caps text-secondary">MON</p>
                        <p className="font-headline-sm text-headline-sm">09</p>
                    </div>
                    <div className="p-4 border-r border-secondary-fixed text-center">
                        <p className="font-label-caps text-label-caps text-secondary">TUE</p>
                        <p className="font-headline-sm text-headline-sm">10</p>
                    </div>
                    <div className="p-4 border-r border-secondary-fixed text-center">
                        <p className="font-label-caps text-label-caps text-secondary">WED</p>
                        <p className="font-headline-sm text-headline-sm">11</p>
                    </div>
                    <div className="p-4 border-r border-secondary-fixed text-center bg-primary/5">
                        <p className="font-label-caps text-label-caps text-primary">THU</p>
                        <p className="font-headline-sm text-headline-sm text-primary">12</p>
                    </div>
                    <div className="p-4 border-r border-secondary-fixed text-center">
                        <p className="font-label-caps text-label-caps text-secondary">FRI</p>
                        <p className="font-headline-sm text-headline-sm">13</p>
                    </div>
                    <div className="p-4 border-r border-secondary-fixed text-center">
                        <p className="font-label-caps text-label-caps text-secondary">SAT</p>
                        <p className="font-headline-sm text-headline-sm">14</p>
                    </div>
                    <div className="p-4 text-center">
                        <p className="font-label-caps text-label-caps text-secondary">SUN</p>
                        <p className="font-headline-sm text-headline-sm">15</p>
                    </div>
                </div>
                {/*  Grid Body  */}
                <div className="relative max-h-[700px] overflow-y-auto">
                    {/*  Time Lines / Slots  */}
                    <div className="schedule-grid relative">
                        {/*  Left Time Labels  */}
                        <div className="border-r border-secondary-fixed">
                            <div className="time-marker font-data-mono text-data-mono text-secondary">08:00</div>
                            <div className="time-marker font-data-mono text-data-mono text-secondary">09:00</div>
                            <div className="time-marker font-data-mono text-data-mono text-secondary">10:00</div>
                            <div className="time-marker font-data-mono text-data-mono text-secondary">11:00</div>
                            <div className="time-marker font-data-mono text-data-mono text-secondary">12:00</div>
                            <div className="time-marker font-data-mono text-data-mono text-secondary">13:00</div>
                            <div className="time-marker font-data-mono text-data-mono text-secondary">14:00</div>
                        </div>
                        {/*  Days Grids  */}
                        {/*  Repeat for 7 days  */}
                        <div className="border-r border-secondary-fixed relative">
                            {/*  Slot placeholders (dashed)  */}
                            <div className="h-[100px] border-b border-secondary-fixed">
                                {/*  Actual Class Card  */}
                                <div
                                    className="class-card absolute top-2 left-2 right-2 h-[84px] bg-primary/10 border border-primary/20 rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <div className="flex justify-between items-start">
                                        <p
                                            className="font-label-caps text-[11px] text-primary-fixed-dim bg-primary px-2 py-0.5 rounded-full">
                                            REFORMER II</p>
                                        <span className="material-symbols-outlined text-primary text-sm"
                                            data-icon="more_vert">more_vert</span>
                                    </div>
                                    <p className="font-body-md font-bold text-on-surface mt-1">Elena K.</p>
                                    <p className="font-data-mono text-[10px] text-on-surface-variant">08:00 - 08:50</p>
                                    {/*  Hover Actions  */}
                                    <div
                                        className="slot-hover-actions absolute inset-0 bg-primary/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            className="bg-white text-primary px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold hover:bg-surface-variant transition-colors">EDIT</button>
                                        <button
                                            className="text-white border border-white/30 px-3 py-1 rounded-full font-label-caps text-[10px] hover:bg-white/10 transition-colors">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div className="h-[100px] border-b border-secondary-fixed">
                                <div
                                    className="class-card absolute top-[204px] left-2 right-2 h-[84px] bg-tertiary-fixed border border-outline-variant rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <p
                                        className="font-label-caps text-[11px] text-tertiary-container bg-tertiary-fixed-dim px-2 py-0.5 rounded-full inline-block">
                                        FLOW</p>
                                    <p className="font-body-md font-bold text-on-surface mt-1">Marcus J.</p>
                                    <p className="font-data-mono text-[10px] text-on-surface-variant">10:00 - 10:50</p>
                                    <div
                                        className="slot-hover-actions absolute inset-0 bg-on-surface-variant/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            className="bg-white text-on-surface px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold">EDIT</button>
                                        <button
                                            className="text-white border border-white/30 px-3 py-1 rounded-full font-label-caps text-[10px]">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                        {/*  Repeat for Tuesday, etc. (Abbreviated for structure)  */}
                        <div className="border-r border-secondary-fixed relative">
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div className="h-[100px] border-b border-secondary-fixed">
                                <div
                                    className="class-card absolute top-[104px] left-2 right-2 h-[184px] bg-primary/10 border border-primary/20 rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <p
                                        className="font-label-caps text-[11px] text-primary-fixed-dim bg-primary px-2 py-0.5 rounded-full inline-block">
                                        TOWER INTENSIVE</p>
                                    <p className="font-body-md font-bold text-on-surface mt-1">Sarah L.</p>
                                    <p className="font-data-mono text-[10px] text-on-surface-variant">09:00 - 10:45</p>
                                    <div
                                        className="slot-hover-actions absolute inset-0 bg-primary/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            className="bg-white text-primary px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold">EDIT</button>
                                        <button
                                            className="text-white border border-white/30 px-3 py-1 rounded-full font-label-caps text-[10px]">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                            <div className="h-[100px] border-b border-secondary-fixed"></div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                        {/*  Wednesday  */}
                        <div className="border-r border-secondary-fixed relative">
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div className="h-[100px] border-b border-secondary-fixed">
                                <div
                                    className="class-card absolute top-[204px] left-2 right-2 h-[84px] bg-primary/10 border border-primary/20 rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <p
                                        className="font-label-caps text-[11px] text-primary-fixed-dim bg-primary px-2 py-0.5 rounded-full inline-block">
                                        REFORMER I</p>
                                    <p className="font-body-md font-bold text-on-surface mt-1">Elena K.</p>
                                    <p className="font-data-mono text-[10px] text-on-surface-variant">10:00 - 10:50</p>
                                    <div
                                        className="slot-hover-actions absolute inset-0 bg-primary/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            className="bg-white text-primary px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold">EDIT</button>
                                        <button
                                            className="text-white border border-white/30 px-3 py-1 rounded-full font-label-caps text-[10px]">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                        {/*  Thursday  */}
                        <div className="border-r border-secondary-fixed relative bg-primary/5">
                            <div className="h-[100px] border-b border-secondary-fixed">
                                <div
                                    className="class-card absolute top-2 left-2 right-2 h-[84px] bg-primary border border-primary rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <p
                                        className="font-label-caps text-[11px] text-primary bg-white px-2 py-0.5 rounded-full inline-block">
                                        CHAIR LAB</p>
                                    <p className="font-body-md font-bold text-white mt-1">Marcus J.</p>
                                    <p className="font-data-mono text-[10px] text-white/80">08:00 - 08:50</p>
                                    <div
                                        className="slot-hover-actions absolute inset-0 bg-white/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            className="bg-primary text-white px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold">EDIT</button>
                                        <button
                                            className="text-primary border border-primary/30 px-3 py-1 rounded-full font-label-caps text-[10px]">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                        {/*  Friday  */}
                        <div className="border-r border-secondary-fixed relative">
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                        {/*  Saturday  */}
                        <div className="border-r border-secondary-fixed relative">
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div className="h-[100px] border-b border-secondary-fixed">
                                <div
                                    className="class-card absolute top-[104px] left-2 right-2 h-[84px] bg-tertiary-fixed border border-outline-variant rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <p
                                        className="font-label-caps text-[11px] text-tertiary-container bg-tertiary-fixed-dim px-2 py-0.5 rounded-full inline-block">
                                        WKDY WARRIOR</p>
                                    <p className="font-body-md font-bold text-on-surface mt-1">Elena K.</p>
                                    <p className="font-data-mono text-[10px] text-on-surface-variant">09:00 - 09:50</p>
                                    <div
                                        className="slot-hover-actions absolute inset-0 bg-on-surface-variant/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            className="bg-white text-on-surface px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold">EDIT</button>
                                        <button
                                            className="text-white border border-white/30 px-3 py-1 rounded-full font-label-caps text-[10px]">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/*  Sunday  */}
                        <div className="relative">
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                className="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {/*  Bottom Stats / Quick View Bento  */}
            <div className="grid grid-cols-1 md:grid-cols-4 gap-gutter mt-lg">
                <div
                    className="bg-surface-white p-md rounded-xl border border-secondary-fixed flex flex-col justify-center">
                    <p className="font-label-caps text-label-caps text-secondary uppercase tracking-widest mb-1">Total
                        Classes</p>
                    <div className="flex items-end gap-2">
                        <span className="font-headline-md text-headline-md text-on-surface">42</span>
                        <span className="text-primary font-body-sm mb-1">+4 from last wk</span>
                    </div>
                </div>
                <div
                    className="bg-surface-white p-md rounded-xl border border-secondary-fixed flex flex-col justify-center">
                    <p className="font-label-caps text-label-caps text-secondary uppercase tracking-widest mb-1">Avg
                        Occupancy</p>
                    <div className="flex items-end gap-2">
                        <span className="font-headline-md text-headline-md text-on-surface">88%</span>
                        <div className="w-16 h-2 bg-secondary-fixed rounded-full mb-2 overflow-hidden">
                            <div className="h-full bg-primary" style={{width: '88%'}}></div>
                        </div>
                    </div>
                </div>
                <div
                    className="bg-surface-white p-md rounded-xl border border-secondary-fixed flex flex-col justify-center">
                    <p className="font-label-caps text-label-caps text-secondary uppercase tracking-widest mb-1">
                        Cancellations</p>
                    <div className="flex items-end gap-2">
                        <span className="font-headline-md text-headline-md text-on-surface">12</span>
                        <span className="text-error font-body-sm mb-1">High for Reformer II</span>
                    </div>
                </div>
                <div
                    className="bg-inverse-surface p-md rounded-xl border border-outline-variant flex flex-col justify-center">
                    <p className="font-label-caps text-label-caps text-primary-fixed uppercase tracking-widest mb-1">Next
                        Class Starts In</p>
                    <div className="flex items-center gap-2">
                        <span className="material-symbols-outlined text-primary-fixed" data-icon="timer">timer</span>
                        <span className="font-headline-md text-headline-md text-white font-data-mono">14:02</span>
                    </div>
                </div>
            </div>
            
            {/* Real Data List View for Demonstration */}
            <div className="mt-8 bg-surface-white p-6 rounded-xl border border-secondary-fixed">
                <h3 className="font-headline-sm mb-4">Classes from Database</h3>
                <div className="flex flex-col gap-2">
                    {classes.map(c => (
                        <div key={c.id} className="flex justify-between items-center p-3 border border-outline-variant rounded-lg">
                            <div>
                                <span className="font-bold">{c.name}</span> - {c.type}
                            </div>
                            <div className="text-secondary">
                                {new Date(c.start_time).toLocaleString()} | {c.instructor_name} | {c.enrolled}/{c.capacity}
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    
        </AppLayout>
    );
}
