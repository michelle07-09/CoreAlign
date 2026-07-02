import React from 'react';
import AppLayout from '../../Layouts/AppLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard() {
    return (
        <AppLayout title="Dashboard">
            <Head title="Admin Dashboard" />

            <div className="max-w-[1440px] mx-auto space-y-lg">
                {/* KPI Section */}
                <section className="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-gutter">
                    {/* KPI Card 1 */}
                    <div className="bg-surface-container-lowest p-md rounded-xl border border-stone-200 flex flex-col justify-between hover:bg-primary-fixed/5 transition-colors group">
                        <div className="flex justify-between items-start mb-sm">
                            <span className="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Total Bookings Today</span>
                            <div className="p-1.5 rounded-lg bg-surface-container text-primary">
                                <span className="material-symbols-outlined text-sm">event</span>
                            </div>
                        </div>
                        <div className="flex items-baseline gap-2">
                            <span className="font-data-mono text-[32px] text-on-surface leading-none">42</span>
                            <span className="text-primary text-[12px] font-bold">+12%</span>
                        </div>
                    </div>

                    {/* KPI Card 2 */}
                    <div className="bg-surface-container-lowest p-md rounded-xl border border-stone-200 flex flex-col justify-between hover:bg-primary-fixed/5 transition-colors group">
                        <div className="flex justify-between items-start mb-sm">
                            <span className="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Attendance</span>
                            <div className="p-1.5 rounded-lg bg-surface-container text-primary">
                                <span className="material-symbols-outlined text-sm">how_to_reg</span>
                            </div>
                        </div>
                        <div className="flex items-baseline gap-2">
                            <span className="font-data-mono text-[32px] text-on-surface leading-none">92%</span>
                            <span className="text-primary text-[12px] font-bold">+2.4%</span>
                        </div>
                    </div>

                    {/* KPI Card 3 */}
                    <div className="bg-surface-container-lowest p-md rounded-xl border border-stone-200 flex flex-col justify-between hover:bg-primary-fixed/5 transition-colors group">
                        <div className="flex justify-between items-start mb-sm">
                            <span className="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Revenue</span>
                            <div className="p-1.5 rounded-lg bg-surface-container text-primary">
                                <span className="material-symbols-outlined text-sm">payments</span>
                            </div>
                        </div>
                        <div className="flex items-baseline gap-2">
                            <span className="font-data-mono text-[28px] text-on-surface leading-none tracking-tight">Rp 8.5M</span>
                            <span className="text-on-surface-variant text-[12px]">Daily Target</span>
                        </div>
                    </div>

                    {/* KPI Card 4 */}
                    <div className="bg-surface-container-lowest p-md rounded-xl border border-stone-200 flex flex-col justify-between hover:bg-primary-fixed/5 transition-colors group">
                        <div className="flex justify-between items-start mb-sm">
                            <span className="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Occupancy</span>
                            <div className="p-1.5 rounded-lg bg-surface-container text-primary">
                                <span className="material-symbols-outlined text-sm">chair_alt</span>
                            </div>
                        </div>
                        <div className="flex items-baseline gap-2">
                            <span className="font-data-mono text-[32px] text-on-surface leading-none">78%</span>
                            <span className="text-error text-[12px] font-bold">-4%</span>
                        </div>
                    </div>
                </section>

                {/* Grid Layout for Table and Chart */}
                <div className="grid grid-cols-12 gap-gutter">
                    {/* Table Section */}
                    <section className="col-span-12 xl:col-span-8 bg-surface-container-lowest rounded-xl border border-stone-200 overflow-hidden flex flex-col h-full">
                        <div className="p-md border-b border-stone-200 flex justify-between items-center">
                            <h3 className="font-headline-sm text-headline-sm text-on-surface">Upcoming Classes Today</h3>
                            <div className="flex gap-2">
                                <button className="px-4 py-1.5 text-body-sm font-semibold border border-stone-200 rounded-full hover:bg-surface-container-low transition-all">Filter</button>
                                <button className="px-4 py-1.5 text-body-sm font-semibold bg-primary text-white rounded-full hover:opacity-90 transition-all">+ New Class</button>
                            </div>
                        </div>
                        <div className="overflow-x-auto">
                            <table className="w-full text-left">
                                <thead>
                                    <tr className="bg-background">
                                        <th className="px-md py-3 font-label-caps text-label-caps text-on-surface-variant uppercase">Time</th>
                                        <th className="px-md py-3 font-label-caps text-label-caps text-on-surface-variant uppercase">Class Type</th>
                                        <th className="px-md py-3 font-label-caps text-label-caps text-on-surface-variant uppercase">Instructor</th>
                                        <th className="px-md py-3 font-label-caps text-label-caps text-on-surface-variant uppercase">Capacity</th>
                                        <th className="px-md py-3 font-label-caps text-label-caps text-on-surface-variant uppercase">Status</th>
                                        <th className="px-md py-3 text-right"></th>
                                    </tr>
                                </thead>
                                <tbody className="divide-y divide-stone-200">
                                    <tr className="hover:bg-surface-container transition-colors">
                                        <td className="px-md py-4 font-data-mono text-on-surface">08:00 AM</td>
                                        <td className="px-md py-4 font-body-md font-semibold text-on-surface">Advanced Reformer</td>
                                        <td className="px-md py-4 flex items-center gap-2 text-on-surface">
                                            <div className="w-6 h-6 rounded-full bg-tertiary-fixed flex items-center justify-center text-[10px] font-bold">MK</div>
                                            <span>Maya K.</span>
                                        </td>
                                        <td className="px-md py-4 font-data-mono text-on-surface">8/10</td>
                                        <td className="px-md py-4">
                                            <span className="px-3 py-1 rounded-full bg-primary-fixed/20 text-primary text-[12px] font-bold">Confirmed</span>
                                        </td>
                                        <td className="px-md py-4 text-right">
                                            <button className="text-on-surface-variant hover:text-on-surface"><span className="material-symbols-outlined text-sm">more_vert</span></button>
                                        </td>
                                    </tr>
                                    {/* More rows would be mapped here */}
                                </tbody>
                            </table>
                        </div>
                        <div className="mt-auto p-md text-center border-t border-stone-200 bg-surface-container-low/50">
                            <button className="text-primary font-semibold text-body-sm hover:underline">View Full Schedule</button>
                        </div>
                    </section>
                </div>
            </div>
        </AppLayout>
    );
}
