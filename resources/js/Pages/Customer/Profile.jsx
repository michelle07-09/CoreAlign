import React from 'react';
import MobileLayout from '../../Layouts/MobileLayout';
import { Head, Link } from '@inertiajs/react';

export default function Profile({ auth }) {
    const user = auth.user;
    
    return (
        <MobileLayout title="Profile">
            <Head title="Profile" />
            
            <div className="flex flex-col gap-lg items-center text-center mt-xl">
                <div className="w-24 h-24 rounded-full bg-surface-container-high border border-outline-variant flex items-center justify-center font-display text-headline-lg text-primary">
                    {user?.name?.charAt(0) || 'U'}
                </div>
                
                <div>
                    <h2 className="font-headline-md text-on-surface">{user?.name}</h2>
                    <p className="font-body-md text-on-surface-variant">{user?.email}</p>
                </div>
                
                <div className="w-full mt-lg flex flex-col gap-sm">
                    <Link href="/customer/manage-payment" className="w-full flex items-center justify-between p-md border border-outline-variant rounded-xl hover:bg-surface-container-low transition-colors text-left">
                        <div className="flex items-center gap-md">
                            <span className="material-symbols-outlined text-on-surface-variant">payment</span>
                            <span className="font-body-md text-on-surface">Manage Payment Methods</span>
                        </div>
                        <span className="material-symbols-outlined text-on-surface-variant">chevron_right</span>
                    </Link>
                    
                    <Link href="/logout" method="post" as="button" className="w-full flex items-center justify-between p-md border border-error-container bg-error-container/10 rounded-xl hover:bg-error-container/20 transition-colors text-left text-error mt-xl">
                        <div className="flex items-center gap-md">
                            <span className="material-symbols-outlined">logout</span>
                            <span className="font-body-md font-semibold">Log Out</span>
                        </div>
                    </Link>
                </div>
            </div>
        </MobileLayout>
    );
}
