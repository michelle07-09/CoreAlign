import React from 'react';
import AppLayout from '../../Layouts/AppLayout';
import { Head } from '@inertiajs/react';

export default function Bookings() {
    return (
        <AppLayout title="Booking Management">
            <Head title="Booking Management" />
            {/* Main Content */}
            
            {/*  TopNavBar  */}
            <header
                className="h-16 bg-surface border-b border-secondary-fixed flex justify-between items-center px-lg shrink-0">
                <div className="flex items-center gap-4">
                    <button className="md:hidden text-on-surface">
                        <span className="material-symbols-outlined">menu</span>
                    </button>
                    <h1 className="font-headline-sm text-headline-sm text-on-surface">Booking Management</h1>
                    <nav className="hidden md:flex items-center gap-gutter ml-8">
                        <span className="text-primary font-bold font-body-md cursor-pointer">Class Details</span>
                        <span
                            className="text-on-surface-variant font-body-md hover:bg-surface-container-low transition-all px-2 py-1 rounded cursor-pointer">Daily
                            View</span>
                        <span
                            className="text-on-surface-variant font-body-md hover:bg-surface-container-low transition-all px-2 py-1 rounded cursor-pointer">Analytics</span>
                    </nav>
                </div>
                <div className="flex items-center gap-md">
                    <div className="relative group">
                        <span
                            className="material-symbols-outlined text-on-surface-variant cursor-pointer hover:bg-surface-container-low p-2 rounded-full transition-all">notifications</span>
                        <span className="absolute top-1 right-1 w-2 h-2 bg-error rounded-full"></span>
                    </div>
                    <span
                        className="material-symbols-outlined text-on-surface-variant cursor-pointer hover:bg-surface-container-low p-2 rounded-full transition-all">help_outline</span>
                </div>
            </header>
            {/*  Scrollable Content  */}
            <section className="flex-1 overflow-y-auto p-lg bg-background">
                {/*  Class Hero Card (Detail View)  */}
                <div className="grid grid-cols-1 lg:grid-cols-3 gap-lg mb-lg">
                    <div
                        className="lg:col-span-2 bg-surface-container-lowest rounded-xl border border-stone-200 p-lg shadow-sm relative overflow-hidden group">
                        <div className="absolute top-0 right-0 p-lg">
                            <span
                                className="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-bold font-label-caps">IN
                                PROGRESS</span>
                        </div>
                        <div className="flex flex-col md:flex-row gap-lg items-start md:items-center">
                            <div className="w-24 h-24 rounded-xl overflow-hidden shrink-0 border border-stone-100">
                                <img className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="A focused Pilates instructor in a minimalist, sun-drenched studio with white walls and professional reformer equipment. The image captured is in high resolution with soft shadows, emphasizing the technical precision and architectural athleticism of the CoreAlign brand."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjjErHmC6t1bDxyHyJVhRbk2zQbzQrGQcBSw73LigMNcKViHQxKBAos7Dkr1jaNbYjr2y_CyK_Rr_4qv_QzwSWmeVoDdv738qb7r9OVvfuY-ZRziAbMwqGQxzVwaGZNBgcWdE_IRyNQ4Gh6ZJ3e3yvFn3q6xhLknOLXjby4ajAXBhXYMFpt6OqHz7y-wFfCAdnNdHKjkcR08luuJ-mz143flkdTcmXYBXVSUuErymS7rkWrlcQA-j3i5tEjhTRqXEVpzb1M8Iyv4On" />
                            </div>
                            <div>
                                <h2 className="font-display-lg text-[32px] leading-tight text-on-surface mb-xs">Intermediate
                                    Reformer</h2>
                                <div className="flex flex-wrap items-center gap-4 text-on-surface-variant">
                                    <div className="flex items-center gap-1.5">
                                        <span className="material-symbols-outlined text-primary"
                                            style="font-size: 18px;">schedule</span>
                                        <span className="font-label-caps text-xs">09:00 AM - 09:55 AM</span>
                                    </div>
                                    <div className="flex items-center gap-1.5">
                                        <span className="material-symbols-outlined text-primary"
                                            style="font-size: 18px;">person</span>
                                        <span className="font-label-caps text-xs">Inst. Marcus Chen</span>
                                    </div>
                                    <div className="flex items-center gap-1.5">
                                        <span className="material-symbols-outlined text-primary"
                                            style="font-size: 18px;">location_on</span>
                                        <span className="font-label-caps text-xs">Studio B</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/*  Occupancy Summary Card  */}
                    <div className="bg-primary text-on-primary rounded-xl p-lg shadow-sm flex flex-col justify-between">
                        <div>
                            <div
                                className="font-label-caps text-xs text-on-primary-container opacity-80 uppercase tracking-wider mb-sm">
                                Occupancy</div>
                            <div className="flex items-baseline gap-1">
                                <span className="font-display-lg text-4xl font-extrabold">10</span>
                                <span className="font-display-lg text-2xl opacity-60">/ 12</span>
                            </div>
                            <div className="mt-md w-full bg-on-primary-container/20 h-2 rounded-full overflow-hidden">
                                <div
                                    className="bg-primary-fixed h-full w-[83%] rounded-full shadow-[0_0_8px_rgba(165,243,202,0.5)]">
                                </div>
                            </div>
                        </div>
                        <div className="flex justify-between items-end mt-lg">
                            <div className="text-xs font-body-sm opacity-80">2 Slots Available</div>
                            <button
                                className="bg-primary-fixed text-on-primary-fixed px-4 py-2 rounded-full font-label-caps text-xs font-bold hover:bg-white transition-colors">BOOK
                                GUEST</button>
                        </div>
                    </div>
                </div>
                {/*  Participant List Table  */}
                <div
                    className="bg-surface-container-lowest rounded-xl border border-stone-200 overflow-hidden shadow-sm mb-lg">
                    <div
                        className="px-lg py-md border-b border-stone-200 flex justify-between items-center bg-surface-container-low/30">
                        <h3 className="font-headline-sm text-headline-sm text-on-surface">Confirmed Participants</h3>
                        <div className="flex gap-sm">
                            <div className="relative">
                                <input
                                    className="pl-10 pr-4 py-1.5 border border-stone-300 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                    placeholder="Search members..." type="text" />
                                <span
                                    className="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-stone-500"
                                    style="font-size: 18px;">search</span>
                            </div>
                            <button
                                className="p-1.5 border border-stone-300 rounded-full hover:bg-stone-50 transition-colors">
                                <span className="material-symbols-outlined text-stone-600">filter_list</span>
                            </button>
                        </div>
                    </div>
                    <div className="overflow-x-auto">
                        <table className="w-full text-left border-collapse">
                            <thead>
                                <tr className="bg-surface-container-low/20">
                                    <th
                                        className="px-lg py-3 font-label-caps text-stone-500 text-[11px] uppercase tracking-widest border-b border-stone-200">
                                        Name</th>
                                    <th
                                        className="px-lg py-3 font-label-caps text-stone-500 text-[11px] uppercase tracking-widest border-b border-stone-200">
                                        Session Type</th>
                                    <th
                                        className="px-lg py-3 font-label-caps text-stone-500 text-[11px] uppercase tracking-widest border-b border-stone-200">
                                        Payment Status</th>
                                    <th
                                        className="px-lg py-3 font-label-caps text-stone-500 text-[11px] uppercase tracking-widest border-b border-stone-200">
                                        Check-In</th>
                                    <th
                                        className="px-lg py-3 font-label-caps text-stone-500 text-[11px] uppercase tracking-widest border-b border-stone-200 text-right">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody className="divide-y divide-stone-100">
                                {/*  Row 1  */}
                                <tr className="hover:bg-primary/5 transition-colors group">
                                    <td className="px-lg py-4">
                                        <div className="flex items-center gap-3">
                                            <div className="w-8 h-8 rounded-full bg-stone-200 overflow-hidden">
                                                <img className="w-full h-full object-cover"
                                                    data-alt="Portrait of a young woman with a focused, athletic look, light-mode background, clean minimalist aesthetic, reflecting professional Pilates studio photography."
                                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZENsdWmoc-DgnCSqphAl-b3g6oLeS9hiWcI8aI0hOZB5_mrXFN3BY3-ATNUTvjhV6P7JsM5Iy-uGsHwTfs8Q3_ngMdeGahxCiMn4Uod58QscrLUD04oSY9IcRibrOb6ViWRENtWDfm6eL84wxmpWeUdFgg-kr2IuBFeTQt68EWfxA5IKQEuPwJpAIvCDgUWbXAnPIRW4v0YaBfbpA7f8jCymkMYcFhePeiL_1Jvrf7tzuE6895Nn_9OXwrIstNq0N37H6dthF8mua" />
                                            </div>
                                            <div>
                                                <div className="font-body-md font-semibold text-on-surface">Sarah Jenkins
                                                </div>
                                                <div className="text-[11px] text-stone-500 font-data-mono">#MEM-9023</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="px-lg py-4 text-sm text-on-surface-variant font-body-sm">Unlimited
                                        Monthly</td>
                                    <td className="px-lg py-4">
                                        <span
                                            className="bg-primary/10 text-primary px-2.5 py-0.5 rounded-full text-[11px] font-bold font-label-caps inline-flex items-center gap-1">
                                            <span className="w-1.5 h-1.5 rounded-full bg-primary"></span> PAID
                                        </span>
                                    </td>
                                    <td className="px-lg py-4">
                                        <button
                                            className="relative inline-flex h-6 w-10 shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-primary focus:outline-none"
                                            onclick="this.classList.toggle('bg-primary'); this.classList.toggle('bg-stone-200'); this.children[0].classList.toggle('translate-x-4');">
                                            <span
                                                className="pointer-events-none inline-block h-5 w-5 translate-x-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                        </button>
                                    </td>
                                    <td className="px-lg py-4 text-right">
                                        <span
                                            className="material-symbols-outlined text-stone-400 cursor-pointer hover:text-primary transition-colors">more_vert</span>
                                    </td>
                                </tr>
                                {/*  Row 2  */}
                                <tr className="hover:bg-primary/5 transition-colors group">
                                    <td className="px-lg py-4">
                                        <div className="flex items-center gap-3">
                                            <div className="w-8 h-8 rounded-full bg-stone-200 overflow-hidden">
                                                <img className="w-full h-full object-cover"
                                                    data-alt="Professional corporate headshot of a middle-aged man, bright background, clean aesthetic, high resolution, soft focused studio lighting."
                                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAzHedDyM-kNZZaJPq47vYzi_k1F0KQnN7cuJHumyhluHaSFuT8UJOmT6lWchd2kZ19K3PklHriqhw08E8Bu8TAVl7PjZfDuY3F3DhCtBN-az4ZLuA-zIsDD96go4v0QKW4wm1tWdQexbuS9f0FvnS0srD8cGpXc74Bm7SneMFAr0tUmfla1cApCQfwZsoiW0ANs6L3QUXpW-bYQwhlOVgGEl0QUcZt77MaYZ_qzPtSKxnE8L8OjCpNPP68PBho57Pj7mepULIhYCc" />
                                            </div>
                                            <div>
                                                <div className="font-body-md font-semibold text-on-surface">Michael Ross
                                                </div>
                                                <div className="text-[11px] text-stone-500 font-data-mono">#GUEST-442</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="px-lg py-4 text-sm text-on-surface-variant font-body-sm">Drop-in Session
                                    </td>
                                    <td className="px-lg py-4">
                                        <span
                                            className="bg-error/10 text-error px-2.5 py-0.5 rounded-full text-[11px] font-bold font-label-caps inline-flex items-center gap-1">
                                            <span className="w-1.5 h-1.5 rounded-full bg-error"></span> PENDING
                                        </span>
                                    </td>
                                    <td className="px-lg py-4">
                                        <button
                                            className="relative inline-flex h-6 w-10 shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-stone-200 focus:outline-none"
                                            onclick="this.classList.toggle('bg-primary'); this.classList.toggle('bg-stone-200'); this.children[0].classList.toggle('translate-x-4');">
                                            <span
                                                className="pointer-events-none inline-block h-5 w-5 translate-x-0 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                        </button>
                                    </td>
                                    <td className="px-lg py-4 text-right">
                                        <span
                                            className="material-symbols-outlined text-stone-400 cursor-pointer hover:text-primary transition-colors">more_vert</span>
                                    </td>
                                </tr>
                                {/*  Row 3  */}
                                <tr className="hover:bg-primary/5 transition-colors group">
                                    <td className="px-lg py-4">
                                        <div className="flex items-center gap-3">
                                            <div className="w-8 h-8 rounded-full bg-stone-200 overflow-hidden">
                                                <img className="w-full h-full object-cover"
                                                    data-alt="Close-up portrait of an active older woman, glowing skin, soft daylight, professional photography in a minimalist studio environment."
                                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXzzSBAS-mf7iBzBwJl1fCSxprRMhffZZbRJfiVYWi_J94NgTGZRO1gZ5Mkzlvn72TPDzHD2RkW2bNKAhxdwiI6N9aRUfZ-tBvv-1A015PQc6ZsiH9gcHAAhdSa_NQSXrbV0AjW3Wt93V_ga74eNNvvD-ae8FLaUDdfMzAq3Tt91bgTlfrjnUxvQGQlI_6zfnsfnESgjDaFpz_Rz1sFda1r5mAKdOA1BHUqYnRo_TsiQ6_9sFoGp-CEirDSTwfw-R_IJbBSNij1QP6" />
                                            </div>
                                            <div>
                                                <div className="font-body-md font-semibold text-on-surface">Linda Gray</div>
                                                <div className="text-[11px] text-stone-500 font-data-mono">#MEM-8812</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="px-lg py-4 text-sm text-on-surface-variant font-body-sm">10-Class Pack
                                    </td>
                                    <td className="px-lg py-4">
                                        <span
                                            className="bg-primary/10 text-primary px-2.5 py-0.5 rounded-full text-[11px] font-bold font-label-caps inline-flex items-center gap-1">
                                            <span className="w-1.5 h-1.5 rounded-full bg-primary"></span> PAID
                                        </span>
                                    </td>
                                    <td className="px-lg py-4">
                                        <button
                                            className="relative inline-flex h-6 w-10 shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-primary focus:outline-none"
                                            onclick="this.classList.toggle('bg-primary'); this.classList.toggle('bg-stone-200'); this.children[0].classList.toggle('translate-x-4');">
                                            <span
                                                className="pointer-events-none inline-block h-5 w-5 translate-x-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                        </button>
                                    </td>
                                    <td className="px-lg py-4 text-right">
                                        <span
                                            className="material-symbols-outlined text-stone-400 cursor-pointer hover:text-primary transition-colors">more_vert</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {/*  Manage Waitlist Section  */}
                <div className="bg-surface-container-low/30 rounded-xl border-2 border-dashed border-stone-200 p-lg">
                    <div className="flex items-center justify-between mb-md">
                        <div className="flex items-center gap-2">
                            <span className="material-symbols-outlined text-tertiary-container"
                                style="font-variation-settings: 'FILL' 1;">list_alt</span>
                            <h3 className="font-headline-sm text-headline-sm text-on-surface">Manage Waitlist</h3>
                            <span
                                className="bg-stone-200 text-stone-600 px-2 py-0.5 rounded text-xs font-bold font-data-mono">4
                                QUEUED</span>
                        </div>
                        <button className="text-sm font-label-caps text-primary hover:underline transition-all">Clear
                            All</button>
                    </div>
                    <div className="grid grid-cols-1 md:grid-cols-2 gap-md">
                        {/*  Waitlist Item 1  */}
                        <div
                            className="bg-surface-container-lowest border border-stone-200 rounded-lg p-md flex items-center justify-between hover:border-primary-fixed transition-all shadow-sm">
                            <div className="flex items-center gap-3">
                                <div
                                    className="w-10 h-10 rounded-full bg-stone-100 flex items-center justify-center font-bold text-stone-400 border border-stone-200">
                                    1
                                </div>
                                <div>
                                    <div className="font-semibold text-on-surface font-body-md">David Miller</div>
                                    <div className="text-[10px] text-stone-500 font-data-mono">Queued 2h ago</div>
                                </div>
                            </div>
                            <button
                                className="bg-primary/5 text-primary border border-primary/20 px-4 py-1.5 rounded-full text-xs font-bold font-label-caps hover:bg-primary hover:text-white transition-all active:scale-95">
                                Promote to Confirmed
                            </button>
                        </div>
                        {/*  Waitlist Item 2  */}
                        <div
                            className="bg-surface-container-lowest border border-stone-200 rounded-lg p-md flex items-center justify-between hover:border-primary-fixed transition-all shadow-sm">
                            <div className="flex items-center gap-3">
                                <div
                                    className="w-10 h-10 rounded-full bg-stone-100 flex items-center justify-center font-bold text-stone-400 border border-stone-200">
                                    2
                                </div>
                                <div>
                                    <div className="font-semibold text-on-surface font-body-md">Sophia Lane</div>
                                    <div className="text-[10px] text-stone-500 font-data-mono">Queued 45m ago</div>
                                </div>
                            </div>
                            <button
                                className="bg-primary/5 text-primary border border-primary/20 px-4 py-1.5 rounded-full text-xs font-bold font-label-caps hover:bg-primary hover:text-white transition-all active:scale-95">
                                Promote to Confirmed
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            {/*  Quick Action FAB  */}
            <button
                className="fixed bottom-lg right-lg w-14 h-14 bg-primary text-white rounded-full shadow-lg flex items-center justify-center hover:scale-110 active:scale-95 transition-all group z-40">
                <span className="material-symbols-outlined text-3xl transition-transform group-hover:rotate-90">add</span>
                <div
                    className="absolute right-16 bg-inverse-surface text-white px-3 py-1.5 rounded-lg text-sm font-label-caps opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none whitespace-nowrap">
                    Book New Member
                </div>
            </button>
        
        </AppLayout>
    );
}
