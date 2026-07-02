import React from 'react';
import MobileLayout from '../../Layouts/MobileLayout';
import { Head } from '@inertiajs/react';

export default function PaymentSuccess() {
    return (
        <MobileLayout title="Payment Successful">
            <Head title="Payment Successful" />
            {/* Main Content */}
            
        {/*  Animated / Highlight Icon  */}
        <div
            className="mb-lg relative flex items-center justify-center h-24 w-24 rounded-full bg-surface-container-highest border border-surface-variant shadow-[0_0px_12px_rgba(24,28,30,0.04)] animate-[bounce_1s_ease-in-out_infinite] [animation-iteration-count:1] [animation-duration:0.6s]">
            <span className="material-symbols-outlined text-[48px] text-primary" data-icon="check_circle"
                style="font-variation-settings: 'FILL' 1;">check_circle</span>
        </div>
        {/*  Header Block  */}
        <div className="mb-xxl flex flex-col items-center">
            <h1
                className="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-on-background mb-xs tracking-tight">
                Payment Successful!</h1>
            <p className="font-body-lg text-body-lg text-secondary">Your 10-Class Pack is now active.</p>
        </div>
        {/*  Details Card (Glassmorphism / Tonal Layering)  */}
        <div
            className="w-full bg-surface-container-lowest border border-surface-variant rounded-[16px] shadow-[0_0px_12px_rgba(24,28,30,0.04)] p-lg mb-xl text-left hover:border-outline transition-colors duration-300">
            <div className="flex flex-col gap-sm">
                {/*  Row 1: Amount  */}
                <div className="flex justify-between items-end pb-sm border-b border-surface-container">
                    <span className="font-body-sm text-body-sm text-outline">Amount Paid</span>
                    <span className="font-headline-sm text-headline-sm text-on-background">$315.00</span>
                </div>
                {/*  Row 2: Date  */}
                <div className="flex justify-between items-center py-xs border-b border-surface-container">
                    <span className="font-body-sm text-body-sm text-outline">Date</span>
                    <span className="font-body-md text-body-md text-on-background font-medium">Oct 24, 2023</span>
                </div>
                {/*  Row 3: Payment Method  */}
                <div className="flex justify-between items-center py-xs border-b border-surface-container">
                    <span className="font-body-sm text-body-sm text-outline">Payment Method</span>
                    <div className="flex items-center gap-xs">
                        <span className="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="credit_card">credit_card</span>
                        <span className="font-body-md text-body-md text-on-background font-medium">•••• 4242</span>
                    </div>
                </div>
                {/*  Row 4: Transaction ID  */}
                <div className="flex justify-between items-center pt-xs">
                    <span className="font-body-sm text-body-sm text-outline">Transaction ID</span>
                    <span
                        className="font-body-sm text-body-sm text-on-surface-variant tracking-wider uppercase">#SF-9823-XYZ</span>
                </div>
            </div>
        </div>
        {/*  Instructions  */}
        <p className="font-body-md text-body-md text-on-surface-variant mb-xl px-md">
            You can now book your next class using your new credits.
        </p>
        {/*  CTAs  */}
        <div className="w-full flex flex-col gap-sm">
            {/*  Primary CTA  */}
            <button
                className="w-full flex items-center justify-center h-[56px] rounded-full bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label text-label tracking-widest uppercase transition-all duration-200 active:scale-[0.98]">
                Go to Schedule
            </button>
            {/*  Secondary CTA (Ghost)  */}
            <button
                className="w-full flex items-center justify-center h-[56px] rounded-full bg-transparent hover:bg-surface-container-low text-on-surface font-label text-label tracking-widest uppercase transition-all duration-200">
                View Receipt
            </button>
        </div>
    
        </MobileLayout>
    );
}
