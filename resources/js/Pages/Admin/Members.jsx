import React from 'react';
import AppLayout from '../../Layouts/AppLayout';
import { Head } from '@inertiajs/react';

export default function Members({ members = [] }) {
    return (
        <AppLayout title="Member Database">
            <Head title="Member Database" />
            {/* Main Content */}
            
        <header
            className="h-16 flex justify-between items-center px-lg bg-surface border-b border-secondary-fixed sticky top-0 z-40">
            <div className="flex items-center gap-4 flex-1">
                <div className="relative w-full max-w-md group">
                    <span
                        className="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant"
                        data-icon="search">search</span>
                    <input
                        className="w-full bg-surface-container-low border border-stone-200 rounded-full py-2 pl-10 pr-4 text-body-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all"
                        placeholder="Search members by name, phone or email..." type="text" />
                </div>
            </div>
            <div className="flex items-center gap-4 ml-lg">
                <button className="p-2 hover:bg-surface-container-low rounded-full transition-all text-on-surface-variant">
                    <span className="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <button className="p-2 hover:bg-surface-container-low rounded-full transition-all text-on-surface-variant">
                    <span className="material-symbols-outlined" data-icon="help_outline">help_outline</span>
                </button>
                <div className="h-8 w-px bg-stone-200 mx-2"></div>
                <button
                    className="bg-primary text-white px-6 py-2 rounded-full font-label-caps text-label-caps flex items-center gap-2 hover:opacity-90 active:scale-95 transition-all">
                    <span className="material-symbols-outlined text-sm" data-icon="person_add">person_add</span>
                    NEW MEMBER
                </button>
            </div>
        </header>
        <div className="p-lg">
            <div className="flex justify-between items-end mb-lg">
                <div>
                    <h2 className="font-headline-sm text-headline-sm text-on-surface">Member Database</h2>
                    <p className="text-body-sm text-on-surface-variant">Manage your studio community and membership
                        statuses.</p>
                </div>
                <div className="flex gap-2">
                    <button
                        className="flex items-center gap-2 px-4 py-2 border border-stone-200 rounded-full bg-white text-body-sm hover:bg-surface-container-low transition-colors">
                        <span className="material-symbols-outlined text-lg" data-icon="filter_list">filter_list</span>
                        Filter
                    </button>
                    <button
                        className="flex items-center gap-2 px-4 py-2 border border-stone-200 rounded-full bg-white text-body-sm hover:bg-surface-container-low transition-colors">
                        <span className="material-symbols-outlined text-lg" data-icon="download">download</span>
                        Export
                    </button>
                </div>
            </div>
            <div className="bg-white border border-stone-200 rounded-xl overflow-hidden shadow-sm">
                <div className="overflow-x-auto">
                    <table className="w-full text-left border-collapse">
                        <thead>
                            <tr className="bg-surface-container-low border-b border-stone-200">
                                <th className="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase">Member
                                    Name</th>
                                <th className="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase">Status
                                </th>
                                <th className="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase">
                                    Membership Type</th>
                                <th
                                    className="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase text-right">
                                    Credits</th>
                                <th className="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase">Last
                                    Visit</th>
                                <th
                                    className="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody className="divide-y divide-stone-200">
                            {members.map(member => {
                                const activeMembership = member.memberships?.find(m => m.status === 'active');
                                return (
                                <tr key={member.id} className="hover:bg-pine-50 transition-colors group">
                                    <td className="px-md py-4">
                                        <div className="flex items-center gap-3">
                                            <div
                                                className="w-10 h-10 rounded-full bg-surface-container-high overflow-hidden border border-stone-200 flex items-center justify-center font-bold text-stone-500">
                                                {member.name.charAt(0)}
                                            </div>
                                            <div>
                                                <p className="font-body-md font-semibold text-on-surface">{member.name}</p>
                                                <p className="text-xs text-on-surface-variant">{member.email}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="px-md py-4">
                                        {activeMembership ? (
                                            <span className="px-3 py-1 rounded-full bg-pine-50 text-pine-600 font-label-caps text-[10px] uppercase font-bold tracking-wider">Active</span>
                                        ) : (
                                            <span className="px-3 py-1 rounded-full bg-error-container text-on-error-container font-label-caps text-[10px] uppercase font-bold tracking-wider">Expired</span>
                                        )}
                                    </td>
                                    <td className="px-md py-4">
                                        <p className="text-body-sm">{activeMembership ? activeMembership.plan_name : 'None'}</p>
                                    </td>
                                    <td className="px-md py-4 text-right">
                                        <p className="font-data-mono text-data-mono">{activeMembership ? '10' : '0'}</p>
                                    </td>
                                    <td className="px-md py-4">
                                        <p className="text-body-sm">-</p>
                                    </td>
                                    <td className="px-md py-4 text-right">
                                        <div
                                            className="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <button
                                                className="px-3 py-1.5 rounded-full border border-stone-200 bg-white text-body-sm font-medium hover:border-primary hover:text-primary transition-all">View
                                                Profile</button>
                                            <button
                                                className="px-3 py-1.5 rounded-full bg-primary text-white text-body-sm font-medium hover:opacity-90 transition-all">Add
                                                Credit</button>
                                        </div>
                                    </td>
                                </tr>
                                )
                            })}
                        </tbody>
                    </table>
                </div>
                <div
                    className="px-md py-4 border-t border-stone-200 bg-surface-container-lowest flex justify-between items-center">
                    <p className="text-body-sm text-on-surface-variant">Showing 1-10 of 1,248 members</p>
                    <div className="flex gap-1">
                        <button
                            className="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-on-surface-variant">
                            <span className="material-symbols-outlined text-lg" data-icon="chevron_left">chevron_left</span>
                        </button>
                        <button
                            className="w-8 h-8 flex items-center justify-center rounded bg-primary text-white text-body-sm font-bold">1</button>
                        <button
                            className="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-body-sm">2</button>
                        <button
                            className="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-body-sm">3</button>
                        <span className="w-8 h-8 flex items-center justify-center text-on-surface-variant">...</span>
                        <button
                            className="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-body-sm">125</button>
                        <button
                            className="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-on-surface-variant">
                            <span className="material-symbols-outlined text-lg"
                                data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
            {/*  Dashboard Stats Summary (Bento-lite)  */}
            <div className="grid grid-cols-4 gap-gutter mt-lg">
                <div className="bg-white border border-stone-200 p-md rounded-xl">
                    <p className="font-label-caps text-label-caps text-stone-500 uppercase mb-2">Total Active Members</p>
                    <p className="font-headline-md text-headline-md text-on-surface">842</p>
                    <div className="flex items-center gap-1 mt-2 text-pine-600">
                        <span className="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
                        <span className="text-xs font-bold">+12% this month</span>
                    </div>
                </div>
                <div className="bg-white border border-stone-200 p-md rounded-xl">
                    <p className="font-label-caps text-label-caps text-stone-500 uppercase mb-2">Expiring Soon</p>
                    <p className="font-headline-md text-headline-md text-on-surface">24</p>
                    <p className="text-xs text-on-surface-variant mt-2">Next 7 days</p>
                </div>
                <div className="bg-white border border-stone-200 p-md rounded-xl">
                    <p className="font-label-caps text-label-caps text-stone-500 uppercase mb-2">Avg Attendance</p>
                    <p className="font-headline-md text-headline-md text-on-surface">3.2</p>
                    <p className="text-xs text-on-surface-variant mt-2">Visits per week</p>
                </div>
                <div className="bg-white border border-stone-200 p-md rounded-xl">
                    <p className="font-label-caps text-label-caps text-stone-500 uppercase mb-2">New Memberships</p>
                    <p className="font-headline-md text-headline-md text-on-surface">41</p>
                    <div className="flex items-center gap-1 mt-2 text-pine-600">
                        <span className="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
                        <span className="text-xs font-bold">+5 since yesterday</span>
                    </div>
                </div>
            </div>
        </div>
    
        </AppLayout>
    );
}
