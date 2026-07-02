import React from 'react';
import MobileLayout from '../../Layouts/MobileLayout';
import { Head, Link } from '@inertiajs/react';

export default function Checkout() {
    return (
        <MobileLayout title="Checkout">
            <Head title="Checkout" />
            {/* Main Content */}
            
        {/*  Left Column: Summary & Promo  */}
        <div className="flex-1 flex flex-col gap-lg">
            {/*  Summary Section  */}
            <section
                className="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg md:p-xl flex flex-col gap-md transition-colors hover:border-outline">
                <h2 className="font-headline-sm text-headline-sm text-on-surface">Order Summary</h2>
                <div className="flex justify-between items-center py-sm border-b border-outline-variant">
                    <div className="flex flex-col">
                        <span className="font-body-md text-body-md text-on-surface font-semibold">10-Class Pack</span>
                        <span className="font-body-sm text-body-sm text-on-surface-variant">Valid for 3 months</span>
                    </div>
                    <span className="font-body-md text-body-md text-on-surface font-semibold">$300.00</span>
                </div>
            </section>
            {/*  Promo Code  */}
            <section
                className="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg md:p-xl flex flex-col gap-sm transition-colors hover:border-outline">
                <label className="font-body-sm text-body-sm text-on-surface font-semibold" for="promo">Promo Code</label>
                <div className="flex gap-sm">
                    <input
                        className="flex-1 rounded-[10px] border border-outline-variant bg-surface-container-lowest px-md py-sm font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary-fixed focus:ring-opacity-50 transition-shadow"
                        id="promo" placeholder="Enter code" type="text" />
                    <button
                        className="rounded-full border border-outline-variant bg-surface-container-lowest text-on-surface px-lg py-sm font-body-sm text-body-sm hover:bg-surface-container-high transition-colors">Apply</button>
                </div>
            </section>
        </div>
        {/*  Right Column: Payment & Total  */}
        <div className="flex-1 flex flex-col gap-lg">
            {/*  Payment Method Selection  */}
            <section
                className="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg md:p-xl flex flex-col gap-md transition-colors hover:border-outline">
                <h2 className="font-headline-sm text-headline-sm text-on-surface">Saved Cards</h2>
                <div className="flex flex-col gap-sm">
                    {/*  Saved Card 1  */}
                    <label
                        className="flex items-center gap-md p-md rounded-lg border border-outline-variant bg-surface-container-lowest cursor-pointer hover:bg-surface-container-low transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container group">
                        <input className="sr-only" name="payment" type="radio" />
                        <div
                            className="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center group-has-[:checked]:bg-primary group-has-[:checked]:text-on-primary text-on-surface-variant">
                            <span className="material-symbols-outlined">credit_card</span>
                        </div>
                        <div className="flex-1 font-body-md text-body-md font-medium">Mastercard •••• 8812</div>
                        <div
                            className="w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center group-has-[:checked]:border-primary">
                            <div
                                className="w-2.5 h-2.5 rounded-full bg-primary opacity-0 group-has-[:checked]:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </label>
                    {/*  Saved Card 2  */}
                    <label
                        className="flex items-center gap-md p-md rounded-lg border border-outline-variant bg-surface-container-lowest cursor-pointer hover:bg-surface-container-low transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container group">
                        <input className="sr-only" name="payment" type="radio" />
                        <div
                            className="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center group-has-[:checked]:bg-primary group-has-[:checked]:text-on-primary text-on-surface-variant">
                            <span className="material-symbols-outlined">credit_card</span>
                        </div>
                        <div className="flex-1 font-body-md text-body-md font-medium">Visa •••• 4421</div>
                        <div
                            className="w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center group-has-[:checked]:border-primary">
                            <div
                                className="w-2.5 h-2.5 rounded-full bg-primary opacity-0 group-has-[:checked]:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </label>
                    <button
                        className="flex items-center justify-center gap-sm p-md mt-xs rounded-lg border border-outline-variant bg-surface-container-lowest cursor-pointer hover:bg-surface-container-low transition-colors text-primary font-body-md font-medium w-full">
                        <span className="material-symbols-outlined">add</span>
                        <span className="">Add New Card</span>
                    </button>
                </div>
            </section>
            <section
                className="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg md:p-xl flex flex-col gap-md transition-colors hover:border-outline">
                <h2 className="font-headline-sm text-headline-sm text-on-surface">Payment Method</h2>
                <div className="flex flex-col gap-sm">
                    {/*  Option 1  */}
                    <label
                        className="flex items-center gap-md p-md rounded-lg border border-outline-variant bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container group">
                        <input checked="" className="sr-only" name="payment" type="radio" />
                        <div
                            className="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center group-has-[:checked]:bg-primary group-has-[:checked]:text-on-primary text-on-surface-variant">
                            <span className="material-symbols-outlined" data-icon="credit_card">credit_card</span>
                        </div>
                        <div className="flex-1 font-body-md text-body-md font-medium">Credit Card</div>
                        <div
                            className="w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center group-has-[:checked]:border-primary">
                            <div
                                className="w-2.5 h-2.5 rounded-full bg-primary opacity-0 group-has-[:checked]:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </label>
                    {/*  Option 2  */}
                    <label
                        className="flex items-center gap-md p-md rounded-lg border border-outline-variant bg-surface-container-lowest cursor-pointer hover:bg-surface-container-low transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container group">
                        <input className="sr-only" name="payment" type="radio" />
                        <div
                            className="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center group-has-[:checked]:bg-primary group-has-[:checked]:text-on-primary text-on-surface-variant">
                            <span className="material-symbols-outlined"
                                data-icon="account_balance_wallet">account_balance_wallet</span>
                        </div>
                        <div className="flex flex-col flex-1">
                            <span className="font-body-md text-body-md font-medium">E-Wallet</span>
                            <span
                                className="font-body-sm text-body-sm text-on-surface-variant group-has-[:checked]:text-on-primary-container/80">GoPay,
                                OVO</span>
                        </div>
                        <div
                            className="w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center group-has-[:checked]:border-primary">
                            <div
                                className="w-2.5 h-2.5 rounded-full bg-primary opacity-0 group-has-[:checked]:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </label>
                    {/*  Option 3  */}
                    <label
                        className="flex items-center gap-md p-md rounded-lg border border-outline-variant bg-surface-container-lowest cursor-pointer hover:bg-surface-container-low transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container group">
                        <input className="sr-only" name="payment" type="radio" />
                        <div
                            className="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center group-has-[:checked]:bg-primary group-has-[:checked]:text-on-primary text-on-surface-variant">
                            <span className="material-symbols-outlined" data-icon="account_balance">account_balance</span>
                        </div>
                        <div className="flex flex-col flex-1">
                            <span className="font-body-md text-body-md font-medium">Virtual Account</span>
                            <span
                                className="font-body-sm text-body-sm text-on-surface-variant group-has-[:checked]:text-on-primary-container/80">BCA,
                                Mandiri</span>
                        </div>
                        <div
                            className="w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center group-has-[:checked]:border-primary">
                            <div
                                className="w-2.5 h-2.5 rounded-full bg-primary opacity-0 group-has-[:checked]:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </label>
                </div>
            </section>
            {/*  Total Breakdown  */}
            <section
                className="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg md:p-xl flex flex-col gap-sm transition-colors hover:border-outline mb-24 md:mb-0">
                <div className="flex justify-between font-body-sm text-body-sm text-on-surface-variant">
                    <span className="">Subtotal</span>
                    <span className="">$300.00</span>
                </div>
                <div className="flex justify-between font-body-sm text-body-sm text-on-surface-variant">
                    <span className="">Tax &amp; Service Fee (5%)</span>
                    <span className="">$15.00</span>
                </div>
                <div className="flex justify-between font-body-sm text-body-sm text-primary font-medium mt-xs">
                    <span className="">Discount</span>
                    <span className="">-$0.00</span>
                </div>
                <div
                    className="flex justify-between items-center font-headline-sm text-headline-sm text-on-surface border-t border-outline-variant pt-md mt-sm">
                    <span className="">Total</span>
                    <span className="">$315.00</span>
                </div>
            </section>
            
            <Link
                href="/customer/checkout"
                method="post"
                as="button"
                className="w-full bg-primary text-on-primary font-label text-label py-md rounded-full hover:opacity-90 transition-opacity mt-lg"
            >
                Confirm Payment
            </Link>
        </div>
    
        </MobileLayout>
    );
}
