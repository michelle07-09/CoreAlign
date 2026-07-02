import React from 'react';
import MobileLayout from '../../Layouts/MobileLayout';
import { Head } from '@inertiajs/react';

export default function ManagePayment() {
    return (
        <MobileLayout title="Manage Payment">
            <Head title="Manage Payment" />
            {/* Main Content */}
            
        {/*  Instructional / Helper text  */}
        <div className="space-y-base">
            <p className="font-body-md text-body-md text-on-surface-variant">Manage your saved cards for quick and secure
                checkouts.</p>
        </div>
        {/*  Saved Cards List (Bento-ish layout or stacked cards)  */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-md md:gap-lg">
            {/*  Default Card  */}
            <div
                className="relative bg-surface-container-lowest border border-primary rounded-[16px] p-lg flex flex-col justify-between min-h-[160px] group transition-all duration-300 shadow-[0_4px_12px_rgba(0,0,0,0.04)] ring-1 ring-primary-fixed/50">
                {/*  Status Badge  */}
                <div className="absolute top-md right-md">
                    <span
                        className="inline-flex items-center px-sm py-base rounded-full bg-primary-container/20 text-primary-container font-label text-label font-bold tracking-wider uppercase">Default</span>
                </div>
                <div className="flex items-start gap-md">
                    {/*  Card Brand Logo (Simulated)  */}
                    <div
                        className="w-12 h-8 bg-surface-container-high rounded border border-outline-variant flex items-center justify-center">
                        <span className="font-headline-sm text-on-surface-variant text-[10px] font-bold">MASTER</span>
                    </div>
                    <div>
                        <p className="font-headline-sm text-headline-sm text-on-surface">**** 8812</p>
                        <p className="font-body-sm text-body-sm text-on-surface-variant mt-1">Expires 12/26</p>
                    </div>
                </div>
                <div className="flex items-center gap-sm mt-lg pt-sm border-t border-outline-variant/30">
                    <button
                        className="font-label text-label text-primary hover:text-primary-container transition-colors uppercase font-bold px-1">Edit</button>
                    <span className="text-outline-variant text-[10px]">|</span>
                    <button
                        className="font-label text-label text-error hover:text-on-error-container transition-colors uppercase font-bold px-1">Remove</button>
                </div>
            </div>
            {/*  Additional Card  */}
            <div
                className="relative bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-[16px] p-lg flex flex-col justify-between min-h-[160px] group transition-all duration-300">
                <div className="flex items-start gap-md">
                    {/*  Card Brand Logo (Simulated)  */}
                    <div
                        className="w-12 h-8 bg-surface-container-high rounded border border-outline-variant flex items-center justify-center">
                        <span className="font-headline-sm text-on-surface-variant text-[10px] font-bold">VISA</span>
                    </div>
                    <div>
                        <p className="font-headline-sm text-headline-sm text-on-surface">**** 4421</p>
                        <p className="font-body-sm text-body-sm text-on-surface-variant mt-1">Expires 08/25</p>
                    </div>
                </div>
                <div className="flex items-center gap-sm mt-lg pt-sm border-t border-outline-variant/30">
                    <button
                        className="font-label text-label text-primary hover:text-primary-container transition-colors uppercase font-bold px-1">Edit</button>
                    <span className="text-outline-variant text-[10px]">|</span>
                    <button
                        className="font-label text-label text-error hover:text-on-error-container transition-colors uppercase font-bold px-1">Remove</button>
                    <span className="text-outline-variant text-[10px]">|</span>
                    <button
                        className="font-label text-label text-on-surface-variant hover:text-on-surface transition-colors uppercase font-bold px-1">Set
                        as Default</button>
                </div>
            </div>
            {/*  Additional Card  */}
            <div
                className="relative bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-[16px] p-lg flex flex-col justify-between min-h-[160px] group transition-all duration-300">
                <div className="flex items-start gap-md">
                    {/*  Card Brand Logo (Simulated)  */}
                    <div
                        className="w-12 h-8 bg-surface-container-high rounded border border-outline-variant flex items-center justify-center">
                        <span className="font-headline-sm text-on-surface-variant text-[10px] font-bold">AMEX</span>
                    </div>
                    <div>
                        <p className="font-headline-sm text-headline-sm text-on-surface">**** 1004</p>
                        <p className="font-body-sm text-body-sm text-on-surface-variant mt-1">Expires 02/28</p>
                    </div>
                </div>
                <div className="flex items-center gap-sm mt-lg pt-sm border-t border-outline-variant/30">
                    <button
                        className="font-label text-label text-primary hover:text-primary-container transition-colors uppercase font-bold px-1">Edit</button>
                    <span className="text-outline-variant text-[10px]">|</span>
                    <button
                        className="font-label text-label text-error hover:text-on-error-container transition-colors uppercase font-bold px-1">Remove</button>
                    <span className="text-outline-variant text-[10px]">|</span>
                    <button
                        className="font-label text-label text-on-surface-variant hover:text-on-surface transition-colors uppercase font-bold px-1">Set
                        as Default</button>
                </div>
            </div>
        </div>
        {/*  Add New Card Action  */}
        <div className="pt-lg flex justify-center md:justify-start">
            <button
                className="flex items-center gap-sm px-xl py-sm bg-primary-container text-on-primary rounded-lg font-label text-label uppercase tracking-widest hover:bg-primary transition-colors active:scale-95 shadow-sm">
                <span className="material-symbols-outlined text-[18px]">add</span>
                Add New Card
            </button>
        </div>
    
        </MobileLayout>
    );
}
