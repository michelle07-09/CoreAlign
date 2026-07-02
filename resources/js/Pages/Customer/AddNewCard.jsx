import React from 'react';
import MobileLayout from '../../Layouts/MobileLayout';
import { Head } from '@inertiajs/react';

export default function AddNewCard() {
    return (
        <MobileLayout title="Add New Card">
            <Head title="Add New Card" />
            {/* Main Content */}
            
        {/*  TopAppBar (Transactional - Nav hidden)  */}
        <header
            className="w-full top-0 sticky z-40 bg-surface-container-lowest border-b border-outline-variant flex justify-between items-center px-margin-mobile py-sm">
            <button
                className="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low active:scale-95 transition-transform">
                <span className="material-symbols-outlined text-primary font-bold">arrow_back</span>
            </button>
            <h1 className="font-headline-sm text-headline-sm text-primary font-bold flex-1 text-center">Add New Card</h1>
            <div className="w-10 h-10"></div> {/*  Spacer for center alignment  */}
        </header>
        {/*  Content Canvas  */}
        <section className="flex-1 px-margin-mobile py-lg overflow-y-auto">
            {/*  Bento-style Form Card  */}
            <div
                className="bg-surface-container-lowest border border-outline-variant rounded-[16px] p-lg shadow-sm mb-xxl relative overflow-hidden">
                {/*  Subtle graphic element inside card  */}
                <div className="absolute -top-10 -right-10 w-32 h-32 bg-primary-fixed-dim opacity-10 rounded-full blur-2xl">
                </div>
                <form className="flex flex-col gap-lg relative z-10">
                    {/*  Cardholder Name  */}
                    <div className="flex flex-col gap-base">
                        <label className="font-body-sm text-body-sm text-on-surface-variant font-medium"
                            for="cardName">Cardholder Name</label>
                        <input autocomplete="cc-name"
                            className="w-full px-md py-sm rounded-[10px] border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:border-primary focus:ring-0 input-glow transition-all outline-none placeholder-outline"
                            id="cardName" placeholder="e.g. Jane Doe" type="text" />
                    </div>
                    {/*  Card Number  */}
                    <div className="flex flex-col gap-base">
                        <label className="font-body-sm text-body-sm text-on-surface-variant font-medium"
                            for="cardNumber">Card Number</label>
                        <div className="relative flex items-center">
                            <span className="material-symbols-outlined absolute left-md text-outline">credit_card</span>
                            <input autocomplete="cc-number"
                                className="w-full pl-[48px] pr-md py-sm rounded-[10px] border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:border-primary focus:ring-0 input-glow transition-all outline-none placeholder-outline"
                                id="cardNumber" inputmode="numeric" placeholder="0000 0000 0000 0000" type="text" />
                        </div>
                    </div>
                    {/*  Exp Date & CVV (2 Columns)  */}
                    <div className="grid grid-cols-2 gap-md">
                        <div className="flex flex-col gap-base">
                            <label className="font-body-sm text-body-sm text-on-surface-variant font-medium"
                                for="expDate">Expiry Date</label>
                            <input autocomplete="cc-exp"
                                className="w-full px-md py-sm rounded-[10px] border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:border-primary focus:ring-0 input-glow transition-all outline-none placeholder-outline"
                                id="expDate" placeholder="MM/YY" type="text" />
                        </div>
                        <div className="flex flex-col gap-base">
                            <label className="font-body-sm text-body-sm text-on-surface-variant font-medium"
                                for="cvv">CVV</label>
                            <input autocomplete="cc-csc"
                                className="w-full px-md py-sm rounded-[10px] border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:border-primary focus:ring-0 input-glow transition-all outline-none placeholder-outline"
                                id="cvv" inputmode="numeric" maxlength="4" placeholder="123" type="text" />
                        </div>
                    </div>
                    {/*  Default Payment Checkbox  */}
                    <div className="pt-sm border-t border-surface-container-high mt-sm flex items-center gap-sm">
                        <div className="relative flex items-start">
                            <div className="flex items-center h-5">
                                <input checked=""
                                    className="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary focus:ring-2 focus:ring-offset-2 bg-surface-container-lowest cursor-pointer"
                                    id="defaultPayment" type="checkbox" />
                            </div>
                            <div className="ml-3 text-sm">
                                <label className="font-body-sm text-body-sm text-on-surface cursor-pointer select-none"
                                    for="defaultPayment">Set as default payment method</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            {/*  Security Note  */}
            <div className="flex items-center justify-center gap-xs text-on-surface-variant mb-xxl opacity-70">
                <span className="material-symbols-outlined text-[16px]">lock</span>
                <span className="font-label text-label">Payments are secure and encrypted.</span>
            </div>
        </section>
        {/*  Fixed Bottom Action Area  */}
        <div
            className="fixed bottom-0 w-full max-w-[480px] bg-surface-container-lowest/80 backdrop-blur-md border-t border-outline-variant p-margin-mobile z-50">
            <button
                className="w-full bg-primary-container text-on-primary font-headline-sm text-headline-sm py-sm rounded-full active:scale-[0.98] transition-transform flex items-center justify-center gap-sm shadow-sm hover:opacity-95">
                Save Card
            </button>
        </div>
    
        </MobileLayout>
    );
}
