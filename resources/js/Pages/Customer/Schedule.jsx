import React from 'react';
import MobileLayout from '../../Layouts/MobileLayout';
import { Head, Link } from '@inertiajs/react';

export default function Schedule({ classes = [] }) {
    return (
        <MobileLayout title="Class Schedule">
            <Head title="Class Schedule" />
            <div className="p-4 md:p-8">
                <div className="flex flex-col md:flex-row md:items-end justify-between mb-lg gap-4">
            <div>
                <h2
                    className="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface mb-2">
                    Studio Schedule</h2>
                <p className="font-body-md text-body-md text-on-surface-variant">Book your next session. Classes open 7 days
                    in advance.</p>
            </div>
            {/*  Date Strip (Week View)  */}
            <div className="flex gap-2 overflow-x-auto scrollbar-hide py-1">
                {/*  Inactive Day  */}
                <button
                    className="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors">
                    <span className="font-label text-label uppercase mb-1 opacity-70">Mon</span>
                    <span className="font-headline-sm text-headline-sm-mobile">12</span>
                </button>
                <button
                    className="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors">
                    <span className="font-label text-label uppercase mb-1 opacity-70">Tue</span>
                    <span className="font-headline-sm text-headline-sm-mobile">13</span>
                </button>
                {/*  Active Day  */}
                <button
                    className="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-transparent bg-primary-container text-on-primary-container scale-105 shadow-[0_4px_12px_rgba(0,82,54,0.15)] transition-transform">
                    <span className="font-label text-label uppercase mb-1">Wed</span>
                    <span className="font-headline-sm text-headline-sm-mobile">14</span>
                </button>

                {/*  Inactive Days  */}
                <button
                    className="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors">
                    <span className="font-label text-label uppercase mb-1 opacity-70">Thu</span>
                    <span className="font-headline-sm text-headline-sm-mobile">15</span>
                </button>
                <button
                    className="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors">
                    <span className="font-label text-label uppercase mb-1 opacity-70">Fri</span>
                    <span className="font-headline-sm text-headline-sm-mobile">16</span>
                </button>
                <button
                    className="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors opacity-50">
                    <span className="font-label text-label uppercase mb-1 opacity-70">Sat</span>
                    <span className="font-headline-sm text-headline-sm-mobile">17</span>
                </button>
                <button
                    className="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors opacity-50">
                    <span className="font-label text-label uppercase mb-1 opacity-70">Sun</span>
                    <span className="font-headline-sm text-headline-sm-mobile">18</span>
                </button>
            </div>
        </div>

        
        {/*  Filter Chips  */}
        <div className="flex gap-2 mb-xxl overflow-x-auto scrollbar-hide py-1">
            <button
                className="flex-shrink-0 px-4 py-2 rounded-full font-label text-label bg-on-surface text-surface transition-colors">ALL
                CLASSES</button>
            <button
                className="flex-shrink-0 px-4 py-2 rounded-full font-label text-label border border-outline-variant bg-surface-container-lowest text-on-surface hover:bg-surface-variant transition-colors">REFORMER</button>
            <button
                className="flex-shrink-0 px-4 py-2 rounded-full font-label text-label border border-outline-variant bg-surface-container-lowest text-on-surface hover:bg-surface-variant transition-colors">MAT
                PILATES</button>
            <button
                className="flex-shrink-0 px-4 py-2 rounded-full font-label text-label border border-outline-variant bg-surface-container-lowest text-on-surface hover:bg-surface-variant transition-colors">PRIVATE</button>
        </div>
        
        {/*  Class List  */}
        <div className="flex flex-col gap-md">
            {classes.map((cls) => {
                const date = new Date(cls.start_time);
                const timeStr = date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                const parts = timeStr.split(' ');
                const time = parts[0] || '00:00';
                const period = parts[1] || 'AM';

                return (
                    <div
                        key={cls.id}
                        className="group flex flex-col sm:flex-row border border-outline-variant rounded-xl bg-surface-container-lowest overflow-hidden transition-all hover:border-outline hover:shadow-[0_8px_24px_rgba(24,28,30,0.04)] cursor-pointer">
                        {/*  Time Section  */}
                        <div
                            className="flex sm:flex-col items-center justify-between sm:justify-center w-full sm:w-28 border-b sm:border-b-0 sm:border-r border-outline-variant bg-surface p-sm sm:p-md group-hover:bg-surface-container-low transition-colors">
                            <span className="font-headline-md text-headline-md text-on-surface">{time}</span>
                            <span className="font-label text-label text-on-surface-variant uppercase">{period}</span>
                            <span className="font-body-sm text-body-sm text-on-surface-variant mt-0 sm:mt-2">60 MIN</span>
                        </div>
                        {/*  Details Section  */}
                        <div className="flex-grow p-md flex flex-col justify-between gap-4">
                            <div className="flex justify-between items-start gap-4">
                                <div>
                                    <h3
                                        className="font-headline-sm text-headline-sm-mobile md:text-headline-sm text-on-surface mb-1">
                                        {cls.name}</h3>
                                    <div className="flex items-center gap-2">
                                        <span
                                            className="font-label text-label text-on-surface-variant border border-outline-variant px-2 py-0.5 rounded-full">{cls.type}</span>
                                    </div>
                                </div>
                                {/*  Badge: Status  */}
                                <div
                                    className="flex-shrink-0 bg-primary-fixed text-on-primary-fixed font-label text-label px-3 py-1 rounded-full flex items-center gap-1">
                                    <span className="material-symbols-outlined text-[14px]">check_circle</span>
                                    {cls.status}
                                </div>
                            </div>
                            <div className="flex items-center justify-between mt-2">
                                <div className="flex items-center gap-3">
                                    <span className="font-body-md text-body-md text-on-surface">{cls.instructor_name}</span>
                                    <span className="font-body-sm text-body-sm text-on-surface-variant">({cls.enrolled}/{cls.capacity} booked)</span>
                                </div>
                                <Link
                                    href={`/customer/class-schedule/${cls.id}/book`}
                                    method="post"
                                    as="button"
                                    preserveScroll
                                    className="hidden sm:block px-6 py-2 rounded-full bg-primary text-on-primary font-label text-label hover:opacity-90 transition-opacity">
                                    BOOK
                                </Link>
                            </div>
                        </div>
                    </div>
                );
            })}
        </div>
        </div>
        </MobileLayout>
    );
}
