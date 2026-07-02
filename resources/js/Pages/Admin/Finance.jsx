import React from 'react';
import AppLayout from '../../Layouts/AppLayout';
import { Head } from '@inertiajs/react';

export default function Finance({ transactions = [] }) {
    return (
        <AppLayout title="Finance Report">
            <Head title="Finance Report" />
            {/* Main Content */}
            
        <div className="p-lg">
            {/*  Dashboard Header  */}
            <div className="flex justify-between items-end mb-lg">
                <div>
                    <h2 className="font-display-lg text-display-lg text-on-surface">Finance & Reports</h2>
                    <p className="font-body-md text-on-surface-variant">Manage your studio's health and transactional
                        efficiency.</p>
                </div>
                <div className="flex gap-sm">
                    <button
                        className="flex items-center gap-sm px-lg py-sm bg-surface-container-lowest border border-outline-variant rounded-full font-label-caps text-label-caps text-on-surface hover:bg-surface-container transition-colors">
                        <span className="material-symbols-outlined">calendar_today</span>
                        Last 30 Days
                        <span className="material-symbols-outlined">keyboard_arrow_down</span>
                    </button>
                    <button
                        className="flex items-center gap-sm px-lg py-sm bg-primary-container text-on-primary-container rounded-full font-label-caps text-label-caps hover:opacity-90 transition-opacity">
                        <span className="material-symbols-outlined">file_download</span>
                        Export PDF/CSV
                    </button>
                </div>
            </div>
            {/*  KPI Grid  */}
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter mb-lg">
                {/*  Total Revenue  */}
                <div className="bg-surface-container-lowest p-md rounded-2xl border border-stone-200">
                    <div className="flex justify-between items-start mb-sm">
                        <span
                            className="material-symbols-outlined p-2 bg-primary-fixed/30 text-primary rounded-lg">payments</span>
                        <span className="text-primary font-data-mono text-data-mono">+12.4%</span>
                    </div>
                    <p className="font-label-caps text-label-caps text-on-surface-variant mb-xs">Total Revenue</p>
                    <h3 className="font-data-mono text-headline-md text-on-surface">Rp 142.5M</h3>
                    <p className="font-body-sm text-body-sm text-outline mt-sm">vs last month</p>
                </div>
                {/*  Outstanding Invoices  */}
                <div className="bg-surface-container-lowest p-md rounded-2xl border border-stone-200">
                    <div className="flex justify-between items-start mb-sm">
                        <span
                            className="material-symbols-outlined p-2 bg-error-container/30 text-error rounded-lg">pending_actions</span>
                        <span className="text-on-surface font-data-mono text-data-mono">14 pending</span>
                    </div>
                    <p className="font-label-caps text-label-caps text-on-surface-variant mb-xs">Outstanding Invoices</p>
                    <h3 className="font-data-mono text-headline-md text-on-surface">Rp 8.2M</h3>
                    <p className="font-body-sm text-body-sm text-outline mt-sm">Action required</p>
                </div>
                {/*  Refund Rate  */}
                <div className="bg-surface-container-lowest p-md rounded-2xl border border-stone-200">
                    <div className="flex justify-between items-start mb-sm">
                        <span
                            className="material-symbols-outlined p-2 bg-secondary-container text-secondary rounded-lg">undo</span>
                        <span className="text-primary font-data-mono text-data-mono">-0.5% imp.</span>
                    </div>
                    <p className="font-label-caps text-label-caps text-on-surface-variant mb-xs">Refund Rate</p>
                    <h3 className="font-data-mono text-headline-md text-on-surface">1.2%</h3>
                    <p className="font-body-sm text-body-sm text-outline mt-sm">Threshold: 2.0%</p>
                </div>
                {/*  Avg Transaction  */}
                <div className="bg-surface-container-lowest p-md rounded-2xl border border-stone-200">
                    <div className="flex justify-between items-start mb-sm">
                        <span
                            className="material-symbols-outlined p-2 bg-tertiary-fixed text-tertiary rounded-lg">analytics</span>
                    </div>
                    <p className="font-label-caps text-label-caps text-on-surface-variant mb-xs">Avg. Transaction Value</p>
                    <h3 className="font-data-mono text-headline-md text-on-surface">Rp 850k</h3>
                    <p className="font-body-sm text-body-sm text-outline mt-sm">Per active member</p>
                </div>
            </div>
            {/*  Chart Section  */}
            <div className="grid grid-cols-1 lg:grid-cols-3 gap-gutter mb-lg">
                <div
                    className="lg:col-span-2 bg-surface-container-lowest p-lg rounded-2xl border border-stone-200 relative overflow-hidden h-[400px]">
                    <div className="flex justify-between items-center mb-lg">
                        <h4 className="font-headline-sm text-headline-sm">Revenue Trends</h4>
                        <div className="flex gap-md">
                            <div className="flex items-center gap-xs">
                                <span className="w-3 h-3 rounded-full bg-primary"></span>
                                <span className="font-label-caps text-label-caps text-outline">Gross</span>
                            </div>
                            <div className="flex items-center gap-xs">
                                <span className="w-3 h-3 rounded-full bg-tertiary"></span>
                                <span className="font-label-caps text-label-caps text-outline">Net</span>
                            </div>
                        </div>
                    </div>
                    {/*  Data visualization placeholder  */}
                    <div className="absolute bottom-lg left-lg right-lg top-24 flex items-end justify-between px-md">
                        <div className="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[40%]"></div>
                        <div className="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[55%]"></div>
                        <div className="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[45%]"></div>
                        <div className="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[70%]"></div>
                        <div className="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[85%]"></div>
                        <div className="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[65%]"></div>
                        <div className="w-8 bg-primary rounded-t-lg transition-all hover:bg-primary h-[90%]"></div>
                        <div className="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[75%]"></div>
                        <div className="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[60%]"></div>
                        <div className="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[80%]"></div>
                    </div>
                    <div className="absolute bottom-4 left-lg right-lg flex justify-between border-t border-stone-200 pt-2">
                        <span className="font-data-mono text-label-caps text-outline">WK 1</span>
                        <span className="font-data-mono text-label-caps text-outline">WK 2</span>
                        <span className="font-data-mono text-label-caps text-outline">WK 3</span>
                        <span className="font-data-mono text-label-caps text-outline">WK 4</span>
                    </div>
                </div>
                {/*  Revenue Breakdown  */}
                <div className="bg-surface-container-lowest p-lg rounded-2xl border border-stone-200">
                    <h4 className="font-headline-sm text-headline-sm mb-lg">Revenue Breakdown</h4>
                    <div className="flex flex-col items-center justify-center h-48 relative">
                        {/*  Simulated Donut Chart  */}
                        <div
                            className="w-40 h-40 rounded-full border-[16px] border-primary border-t-tertiary border-r-primary-fixed border-l-secondary relative">
                            <div className="absolute inset-0 flex flex-col items-center justify-center">
                                <span className="font-label-caps text-label-caps text-outline">Total</span>
                                <span className="font-data-mono text-body-lg font-bold">100%</span>
                            </div>
                        </div>
                    </div>
                    <div className="mt-lg space-y-sm">
                        <div className="flex justify-between items-center text-body-sm">
                            <span className="flex items-center gap-sm"><span className="w-2 h-2 rounded-full bg-primary"></span>
                                Class Packages</span>
                            <span className="font-data-mono">45%</span>
                        </div>
                        <div className="flex justify-between items-center text-body-sm">
                            <span className="flex items-center gap-sm"><span
                                    className="w-2 h-2 rounded-full bg-primary-fixed"></span> Memberships</span>
                            <span className="font-data-mono">30%</span>
                        </div>
                        <div className="flex justify-between items-center text-body-sm">
                            <span className="flex items-center gap-sm"><span
                                    className="w-2 h-2 rounded-full bg-secondary"></span> Private Sessions</span>
                            <span className="font-data-mono">20%</span>
                        </div>
                        <div className="flex justify-between items-center text-body-sm">
                            <span className="flex items-center gap-sm"><span
                                    className="w-2 h-2 rounded-full bg-tertiary"></span> Retail</span>
                            <span className="font-data-mono">5%</span>
                        </div>
                    </div>
                </div>
            </div>
            {/*  Transaction Table & Instructor Payouts  */}
            <div className="grid grid-cols-1 lg:grid-cols-4 gap-gutter">
                {/*  Transaction History  */}
                <div
                    className="lg:col-span-3 bg-surface-container-lowest rounded-2xl border border-stone-200 overflow-hidden">
                    <div className="p-lg border-b border-stone-200 flex justify-between items-center">
                        <h4 className="font-headline-sm text-headline-sm">Transaction History</h4>
                        <button className="text-primary font-label-caps text-label-caps flex items-center gap-xs">
                            View All <span className="material-symbols-outlined">chevron_right</span>
                        </button>
                    </div>
                    <div className="overflow-x-auto">
                        <table className="w-full text-left">
                            <thead className="bg-surface-container-low font-label-caps text-label-caps text-stone-500">
                                <tr>
                                    <th className="px-lg py-md font-semibold">Transaction ID</th>
                                    <th className="px-md py-md font-semibold">Member Name</th>
                                    <th className="px-md py-md font-semibold">Date</th>
                                    <th className="px-md py-md font-semibold">Amount</th>
                                    <th className="px-md py-md font-semibold">Method</th>
                                    <th className="px-lg py-md font-semibold">Status</th>
                                </tr>
                            </thead>
                            <tbody className="divide-y divide-stone-200">
                                {transactions.length > 0 ? transactions.map((trx) => (
                                    <tr key={trx.id} className="hover:bg-surface transition-colors">
                                        <td className="px-lg py-md font-data-mono text-on-surface">{trx.transaction_id}</td>
                                        <td className="px-md py-md font-body-sm">{trx.user?.name || 'Unknown'}</td>
                                        <td className="px-md py-md font-body-sm text-outline">{new Date(trx.created_at).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' })}</td>
                                        <td className="px-md py-md font-data-mono text-on-surface">Rp {numberFormat(trx.amount)}</td>
                                        <td className="px-md py-md font-body-sm">{trx.method}</td>
                                        <td className="px-lg py-md">
                                            <span className={`pill-badge ${trx.status === 'Paid' ? 'bg-primary/10 text-primary' : (trx.status === 'Pending' ? 'bg-tertiary-fixed text-tertiary' : 'bg-error-container text-error')}`}>
                                                {trx.status}
                                            </span>
                                        </td>
                                    </tr>
                                )) : (
                                    <tr>
                                        <td colSpan="6" className="px-lg py-md text-center text-on-surface-variant font-body-sm">
                                            No transactions found.
                                        </td>
                                    </tr>
                                )}
                            </tbody>
                        </table>
                    </div>
                </div>
                {/*  Instructor Payouts  */}
                <div className="bg-surface-container-lowest rounded-2xl border border-stone-200 overflow-hidden">
                    <div className="p-lg border-b border-stone-200">
                        <h4 className="font-headline-sm text-headline-sm">Instructor Payouts</h4>
                    </div>
                    <div className="p-md space-y-md">
                        {/*  Instructor 1  */}
                        <div
                            className="flex items-center justify-between p-sm hover:bg-surface transition-colors rounded-xl border border-transparent hover:border-stone-100">
                            <div className="flex items-center gap-md">
                                <div className="w-10 h-10 rounded-full bg-stone-200 overflow-hidden">
                                    <img className="w-full h-full object-cover"
                                        data-alt="A close-up portrait of a female fitness instructor with a serene and focused expression. The lighting is bright and architectural, reflecting a professional pilates studio atmosphere with clean lines and a high-end corporate aesthetic. The overall mood is reliable and energetic."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBg_DbqBQitwYtEnxVkiDMjZ8qE0t2dDvhL1Hf1e93cykw85jeCXVy4atD3n5YgX19RUMozX3IECw4qNpVHJhMPiQTobX1mS9GIWP8enLaVgZzn4AjfMWJEjanNGjsj5I9GUK_3gY9o_jcd2FyXzs1rHUehGOMe30Df-Adq2lXJiRELLRuEecLhCmU9lm6uFaSoWJ34lUvjzFEkyqjDGeYzQGGL1DQLyt-YLzkqxUdys8onfLYM16pDuY3UDgbRO1mVjXKaA0BrmbWg" />
                                </div>
                                <div>
                                    <p className="font-body-sm font-bold">Elena Thorne</p>
                                    <p className="font-label-caps text-[10px] text-outline">42 Sessions</p>
                                </div>
                            </div>
                            <div className="text-right">
                                <p className="font-data-mono text-body-sm">Rp 12.6M</p>
                                <span className="text-[10px] font-label-caps text-primary">Paid</span>
                            </div>
                        </div>
                        {/*  Instructor 2  */}
                        <div
                            className="flex items-center justify-between p-sm hover:bg-surface transition-colors rounded-xl border border-transparent hover:border-stone-100">
                            <div className="flex items-center gap-md">
                                <div className="w-10 h-10 rounded-full bg-stone-200 overflow-hidden">
                                    <img className="w-full h-full object-cover"
                                        data-alt="A portrait of a male yoga and pilates instructor looking directly at the camera with a calm and welcoming expression. He is in a modern studio setting with light wood accents and soft, diffused natural lighting. The visual style is crisp and professional, emphasizing expertise and athletic discipline."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_IJHsfr3anpNFBSfSG6hlyTRVXuWevgNCcxRF9VY5AgLiJHCPvj8wsiEIIvj3sbhz_prveCOykVk2vO4k2Vv-Q8huZoO1O6_C6IrxFH0uxb3YTlTuLIYBpVSn2tQDxKRXyA4H10YguO3lQAndX43vfXX0VUQ9Z1ukMMpFhas_wNhxtCWfQIK9T35spITa1_UHP4ubYufTebN6B-lkO52kz0Xsph7j9XDjefp3iYUHuVhsb40rNwj84ToNPcF-xo_KlfmUVX7RpmGN" />
                                </div>
                                <div>
                                    <p className="font-body-sm font-bold">Marcus Vane</p>
                                    <p className="font-label-caps text-[10px] text-outline">38 Sessions</p>
                                </div>
                            </div>
                            <div className="text-right">
                                <p className="font-data-mono text-body-sm">Rp 11.4M</p>
                                <span className="text-[10px] font-label-caps text-tertiary">Processing</span>
                            </div>
                        </div>
                        {/*  Instructor 3  */}
                        <div
                            className="flex items-center justify-between p-sm hover:bg-surface transition-colors rounded-xl border border-transparent hover:border-stone-100">
                            <div className="flex items-center gap-md">
                                <div className="w-10 h-10 rounded-full bg-stone-200 overflow-hidden">
                                    <img className="w-full h-full object-cover"
                                        data-alt="A detailed headshot of a female pilates instructor in a high-tech gym environment. The lighting is clean and cool-toned, with high-end architectural studio elements in the blurred background. She displays a confident and professional demeanor, aligning with the elite management brand."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB49iZ7ADhCBEvrTPsJrbT-TYyOz8kSyHHEzd5wULvb2RJmTVLfspyMTjazhJEnfCIyrpJkigp7Jzh-r21gLKvzk0lKxbOg_htUGlmQiCEAdewwf_vhUgqaYRQSDmMGPv3nsmCmD0kXYrv0H5cT_E-czrw6VFj8FHLAIgSMqWBfeskiaDgAPMdqjKXw0zFStkr-bUBj7Su5J3YCpkqCLl9TsO8KwMbcZWpgwmiBPyaVj-2NDusZm3ZxrsuOLkLykoLNCYLJRywQGJWF" />
                                </div>
                                <div>
                                    <p className="font-body-sm font-bold">Lana Winters</p>
                                    <p className="font-label-caps text-[10px] text-outline">29 Sessions</p>
                                </div>
                            </div>
                            <div className="text-right">
                                <p className="font-data-mono text-body-sm">Rp 8.7M</p>
                                <span className="text-[10px] font-label-caps text-tertiary">Processing</span>
                            </div>
                        </div>
                    </div>
                    <div className="p-lg mt-md">
                        <button
                            className="w-full py-sm border border-primary-container text-primary-container font-label-caps text-label-caps rounded-full hover:bg-primary-container/5 transition-colors">
                            Run Payout Cycle
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
        </AppLayout>
    );
}
