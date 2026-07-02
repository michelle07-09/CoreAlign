import React from 'react';
import MobileLayout from '../../Layouts/MobileLayout';
import { Head } from '@inertiajs/react';

export default function ClassDetail() {
    return (
        <MobileLayout title="Class Detail">
            <Head title="Class Detail" />
            {/* Main Content */}
            
        {/*  Hero Image  */}
        <div className="md:col-span-6 lg:col-span-7">
            <div className="h-[397px] md:h-[530px] w-full bg-cover bg-center md:rounded-xl shadow-sm"
                data-alt="A high-end, editorial photograph of a modern Pilates studio bathed in cool, crisp morning light. An athletic female instructor demonstrates an advanced move on a sleek wooden reformer machine. The studio features clean architectural lines, expansive windows, and a cool-toned color palette of deep pine greens, crisp whites, and light stone textures. The atmosphere is focused, calm, and meticulously maintained, evoking a premium athletic wellness brand."
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDXhjeJqQzpOPsuEkkogAu4wzSr3ULe4o7tVa3OJl_zWLU-wWkZHXAC0oXV413_78u946hidHLTe6whRcFqEgPASNEf8RAkDVpIyz38JW4ElsB0jtOXKWRaEXjuEJIl4IWMtkj1uMSfOsf4KJpSDO82aWE4xtc9EacHFDxeFoY_inhYqMaEPIev7k4BUiS0c_1C0dPmIzQo_Jj1isNQm3hmAuyQfe7j9wQ3AP7N6EMjPFDbmkD8t3O_COe8gkJM2RVfzIJW7IC0Gpyp')">
            </div>
        </div>
        {/*  Detail Canvas  */}
        <div
            className="relative -mt-6 md:mt-0 bg-surface rounded-t-xl px-margin-mobile pt-lg pb-xl md:px-0 md:pt-0 md:col-span-6 lg:col-span-5 flex flex-col gap-lg">
            {/*  Title & Core Tags  */}
            <div className="flex flex-col gap-sm">
                <div className="flex items-center gap-xs">
                    <span
                        className="px-3 py-1 bg-surface-container-high border border-outline-variant rounded-full font-label text-label text-on-surface-variant flex items-center gap-1">
                        <span className="material-symbols-outlined text-[14px]" data-icon="schedule">schedule</span>
                        55 mins
                    </span>
                    <span
                        className="px-3 py-1 bg-inverse-on-surface border border-outline-variant rounded-full font-label text-label text-secondary flex items-center gap-1">
                        <span className="material-symbols-outlined text-[14px]" data-icon="vital_signs">vital_signs</span>
                        Advanced Level
                    </span>
                </div>
                <h1
                    className="font-headline-lg-mobile text-headline-lg-mobile md:font-display md:text-display text-on-surface mt-2 tracking-tight">
                    Advanced Reformer</h1>
            </div>
            {/*  Divider  */}
            <div className="h-px w-full bg-surface-container-high"></div>
            {/*  Instructor Row  */}
            <div className="flex items-center gap-md">
                <img className="w-14 h-14 rounded-full object-cover border border-outline-variant p-0.5"
                    data-alt="A professional headshot of a fit, confident female Pilates instructor named Elena. She is wearing a modern, high-quality athletic top in deep forest green. The background is a clean, bright, out-of-focus studio setting with cool natural lighting. The image embodies a crisp, high-contrast, premium fitness aesthetic with a calm and welcoming expression."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-Gh86PcM88dA8sF_Z0Wzm3w47YC5y6f3jBhi8fZw_UtZanTUVq_Hs-xVjjFm9P1sQMPv3kvIq1NR9Ivii6EWtge9qHWRGAuV-u1DKF4nx6mS9DZpp9qNOO_Ud2wP-9owpmj32upVmT6P_kwA8NFevAwjSLdSdRnzZldk6OevHP-v8YHbwbIvzshCuj8lM3aB-S6l1lp_4iY2XcrFtjRTLCkxkX0yZVZ6kOqQZl41drdVd-L9gJUJPjZt3KB9JCA9uyY8BLcter2hR" />
                <div className="flex flex-col">
                    <span
                        className="font-label text-label text-on-surface-variant uppercase tracking-wider">Instructor</span>
                    <span className="font-headline-sm text-headline-sm text-on-surface">Elena V.</span>
                </div>
            </div>
            {/*  Description / Equipment  */}
            <div className="flex flex-col gap-sm">
                <h2 className="font-headline-sm text-headline-sm text-on-surface">Class Overview</h2>
                <p className="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    Designed for experienced practitioners, this class focuses on complex flows, intense core
                    stabilization, and full-body conditioning using the reformer apparatus.
                </p>
                <div
                    className="bg-surface-container-low p-md rounded-lg border border-outline-variant mt-2 flex flex-col gap-xs">
                    <span className="font-label text-label text-on-surface uppercase">Equipment Used</span>
                    <span className="font-body-md text-body-md text-on-surface-variant">Reformer, Magic Circle, Light
                        Weights</span>
                </div>
            </div>
            {/*  Cancellation Policy  */}
            <div
                className="bg-surface-container-lowest border border-outline p-md rounded-lg flex items-start gap-md mt-sm">
                <span className="material-symbols-outlined text-secondary mt-0.5" data-icon="policy">policy</span>
                <div className="flex flex-col gap-1">
                    <span className="font-label text-label text-on-surface uppercase tracking-wide">Cancellation
                        Policy</span>
                    <span className="font-body-sm text-body-sm text-on-surface-variant">Cancel 12h before to reclaim credit.
                        Late cancellations will forfeit the class credit.</span>
                </div>
            </div>
            {/*  Desktop Action Button (Hidden on Mobile)  */}
            <div className="hidden md:block mt-xl">
                <button
                    className="w-full bg-primary text-on-primary font-label text-label py-4 rounded-full flex justify-center items-center hover:opacity-90 transition-opacity uppercase tracking-widest shadow-sm">
                    Book This Class
                </button>
            </div>
        </div>
    
        </MobileLayout>
    );
}
