import { Link, usePage } from '@inertiajs/react';
import React from 'react';

export default function MobileLayout({ children, title }) {
    const { url } = usePage();

    const navigation = [
        { name: 'Home', href: '/customer/home', icon: 'home' },
        { name: 'Schedule', href: '/customer/schedule', icon: 'calendar_today' },
        { name: 'Membership', href: '/customer/membership', icon: 'card_membership' },
        { name: 'Profile', href: '/customer/profile', icon: 'person' },
    ];

    const isActive = (href) => url.startsWith(href);

    return (
        <div className="bg-background text-on-surface font-body-md min-h-screen flex flex-col">
            {/* Desktop Top Navigation (Hidden on mobile) */}
            <header className="hidden md:flex fixed top-0 w-full z-50 bg-surface border-b border-outline-variant justify-between items-center h-16 px-8">
                <div className="flex items-center gap-2">
                    <span className="material-symbols-outlined text-primary" style={{ fontVariationSettings: "'FILL' 1" }}>location_on</span>
                    <span className="font-headline-sm text-headline-sm tracking-tighter text-primary">PIVOT PILATES</span>
                </div>
                <nav className="flex gap-8">
                    {navigation.map((item) => (
                        <Link 
                            key={item.name}
                            href={item.href} 
                            className={`font-label text-label flex items-center gap-2 transition-colors ${isActive(item.href) ? 'text-primary' : 'text-on-surface-variant hover:text-primary'}`}
                        >
                            <span className="material-symbols-outlined" style={isActive(item.href) ? { fontVariationSettings: "'FILL' 1" } : {}}>{item.icon}</span> 
                            {item.name}
                        </Link>
                    ))}
                </nav>
                <div className="flex items-center gap-4">
                    <img alt="Profile Avatar" className="w-8 h-8 rounded-full border border-outline-variant object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiF-U9TxCiD5Qd-MXA2bTplV6lnnz775bYHUncOzWFQwEVbuonMiPfKT_-8NfrXDQ4TsbOu5oAAkufCd-7HdBN4ybPThjxUtbKeuBp1FLI50ZNX8SEMLqSjAZplDQIgD1Q350mYN60SyDMNPmSy-SjzeaqPCLK7-gGBxSMzq34RwwAUg35xMSr5MnK8I7ma7CVmE_GKF52lIn2d33eEzlMRYkbOLBMZdN0PoIakMNS6esUk4MrtnQcoomv--LAnsevP0GudE546PGh" />
                    <span className="font-label text-label text-on-surface">Profile</span>
                </div>
            </header>

            {/* Mobile Header (Only on home usually, but we can put a generic one if needed. The home page actually has its own header. Let's just render children) */}
            {children}

            {/* BottomNavBar (Mobile only) */}
            <nav className="fixed bottom-0 left-0 w-full h-20 flex justify-around items-center px-4 pb-safe bg-surface z-50 rounded-t-xl border-t border-outline-variant md:hidden">
                {navigation.map((item) => {
                    const active = isActive(item.href);
                    return (
                        <Link 
                            key={item.name}
                            href={item.href}
                            className={active 
                                ? "flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-5 py-1.5 scale-95 transition-transform duration-200" 
                                : "flex flex-col items-center justify-center text-on-surface-variant px-5 py-1.5 hover:bg-surface-container-high rounded-full transition-colors"}
                        >
                            <span className="material-symbols-outlined" style={active ? { fontVariationSettings: "'FILL' 1" } : {}}>{item.icon}</span>
                            <span className="font-label text-label mt-1">{item.name}</span>
                        </Link>
                    );
                })}
            </nav>
        </div>
    );
}
